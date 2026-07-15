(function() {
    const monthLabel = document.getElementById('monthLabel');
    const calendarGrid = document.getElementById('calendarGrid');
    const selectedDateText = document.getElementById('selectedDateText');
    const selectedTimeText = document.getElementById('selectedTimeText');
    const prevMonth = document.getElementById('prevMonth');
    const nextMonth = document.getElementById('nextMonth');
    const timeTrigger = document.getElementById('timeTrigger');
    const timeDropdown = document.getElementById('timeDropdown');
    const timeGrid = document.getElementById('timeGrid');
    const bookCallBtn = document.getElementById('bookCallBtn');
    const bookCallModal = document.getElementById('bookCallModal');
    const bookCallClose = document.getElementById('bookCallClose');
    const modalSelectedDate = document.getElementById('modalSelectedDate');
    const modalSelectedTime = document.getElementById('modalSelectedTime');
    const modalSelectedLocalTime = document.getElementById('modalSelectedLocalTime');
    const bookCallCountryCode = document.getElementById('bookCallCountryCode');
    const bookCallPhone = document.getElementById('bookCallPhone');
    const bookingDateInput = document.getElementById('bookingDateInput');
    const bookingTimeInput = document.getElementById('bookingTimeInput');
    const userTimezoneInput = document.getElementById('userTimezoneInput');
    const selectedLocalTimeNote = document.getElementById('selectedLocalTimeNote');
    const viewerTimezoneNote = document.getElementById('viewerTimezoneNote');
    const bookCallSection = document.getElementById('book-call-widget');

    if (!bookCallSection) {
        return;
    }

    const istTimezone = 'Asia/Kolkata';
    const userTimezone = Intl.DateTimeFormat().resolvedOptions().timeZone || 'Local Time';
    const now = new Date();
    let viewYear = now.getFullYear();
    let viewMonth = now.getMonth();
    let selectedDate = null;
    let selectedTime = null;
    let bookedSlots = [];
    let bookCallInitialized = false;

    const countryCodes = [
        { name: 'India', code: '+91' },
        { name: 'United States', code: '+1' },
        { name: 'United Kingdom', code: '+44' },
        { name: 'United Arab Emirates', code: '+971' },
        { name: 'Australia', code: '+61' },
        { name: 'Canada', code: '+1' },
        { name: 'Saudi Arabia', code: '+966' },
        { name: 'Singapore', code: '+65' },
        { name: 'Germany', code: '+49' },
        { name: 'South Africa', code: '+27' }
    ];

    function normalizeDate(date) {
        return new Date(date.getFullYear(), date.getMonth(), date.getDate());
    }

    function populateCountryCodes() {
        if (!bookCallCountryCode) {
            return;
        }

        bookCallCountryCode.innerHTML = '';
        countryCodes.forEach(function(country) {
            const option = document.createElement('option');
            option.value = country.code;
            option.textContent = country.name + ' (' + country.code + ')';
            if (country.name === 'India') {
                option.selected = true;
            }
            bookCallCountryCode.appendChild(option);
        });
    }

    function sameDay(a, b) {
        return a && b && a.getDate() === b.getDate() && a.getMonth() === b.getMonth() && a.getFullYear() === b.getFullYear();
    }

    function formatDate(date) {
        return date.toLocaleDateString('en-US', {
            weekday: 'short',
            day: 'numeric',
            month: 'short',
            year: 'numeric'
        });
    }

    function getZonedDateParts(date, timezone) {
        const parts = new Intl.DateTimeFormat('en-CA', {
            timeZone: timezone,
            year: 'numeric',
            month: '2-digit',
            day: '2-digit',
            hour: '2-digit',
            minute: '2-digit',
            hour12: false
        }).formatToParts(date);
        const values = {};
        parts.forEach(function(part) {
            if (part.type !== 'literal') {
                values[part.type] = part.value;
            }
        });
        return {
            year: Number(values.year),
            month: Number(values.month),
            day: Number(values.day),
            hour: Number(values.hour),
            minute: Number(values.minute)
        };
    }

    function getIstNowParts() {
        return getZonedDateParts(new Date(), istTimezone);
    }

    function getIstToday() {
        const istNow = getIstNowParts();
        return new Date(istNow.year, istNow.month - 1, istNow.day);
    }

    function getTimezoneShortLabel(timezone, date) {
        const parts = new Intl.DateTimeFormat('en-US', {
            timeZone: timezone,
            timeZoneName: 'short'
        }).formatToParts(date);
        const timezonePart = parts.find(function(part) {
            return part.type === 'timeZoneName';
        });
        return timezonePart ? timezonePart.value : timezone;
    }

    function getDateKey(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        return year + '-' + month + '-' + day;
    }

    function createIstDate(date, timeValue) {
        const parts = getDateKey(date).split('-').map(Number);
        const timeParts = timeValue.split(':').map(Number);
        return new Date(Date.UTC(parts[0], parts[1] - 1, parts[2], timeParts[0] - 5, timeParts[1] - 30));
    }

    function formatTimeInTimezone(date, timezone) {
        return new Intl.DateTimeFormat('en-US', {
            timeZone: timezone,
            hour: 'numeric',
            minute: '2-digit',
            hour12: true
        }).format(date);
    }

    function formatDateTimeInTimezone(date, timezone) {
        return new Intl.DateTimeFormat('en-US', {
            timeZone: timezone,
            weekday: 'short',
            day: 'numeric',
            month: 'short',
            year: 'numeric',
            hour: 'numeric',
            minute: '2-digit',
            hour12: true
        }).format(date);
    }

    function getLocalTimeSummary(date, timeValue) {
        if (!date || !timeValue) {
            return 'Not selected';
        }
        const slotDate = createIstDate(date, timeValue);
        return formatDateTimeInTimezone(slotDate, userTimezone) + ' (' + getTimezoneShortLabel(userTimezone, slotDate) + ')';
    }

    function getTimeOptionLabel(date, timeValue, isBooked) {
        const istDate = createIstDate(date, timeValue);
        const istLabel = formatTimeInTimezone(istDate, istTimezone) + ' IST';
        const localLabel = formatTimeInTimezone(istDate, userTimezone) + ' ' + getTimezoneShortLabel(userTimezone, istDate);
        return istLabel + ' / ' + localLabel + (isBooked ? ' - Already Booked' : '');
    }

    function openModal() {
        bookCallModal.classList.add('show');
        bookCallModal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        bookCallModal.classList.remove('show');
        bookCallModal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    function updateBookingSummary() {
        modalSelectedDate.textContent = selectedDate ? formatDate(selectedDate) : 'Not selected';
        modalSelectedTime.textContent = selectedTime ? selectedTime + ' IST' : 'Not selected';
        modalSelectedLocalTime.textContent = getLocalTimeSummary(selectedDate, selectedTime);
        bookingDateInput.value = selectedDate ? getDateKey(selectedDate) : '';
        bookingTimeInput.value = selectedTime || '';
        userTimezoneInput.value = userTimezone;
        selectedLocalTimeNote.textContent = selectedDate && selectedTime ? 'Your local time: ' + getLocalTimeSummary(selectedDate, selectedTime) : '';
    }

    async function fetchBookedSlots(dateKey) {
        bookedSlots = [];
        try {
            const response = await fetch('get-booked-slots.php?date=' + encodeURIComponent(dateKey), {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });
            const data = await response.json();
            if (data && data.success && Array.isArray(data.slots)) {
                bookedSlots = data.slots;
            }
        } catch (error) {
            bookedSlots = [];
        }
    }

    function renderTimeSlots() {
        timeGrid.innerHTML = '';
        if (!selectedDate) {
            return;
        }

        const istToday = getIstToday();
        const istNow = getIstNowParts();
        const selectedIsToday = sameDay(selectedDate, istToday);

        for (let hour = 10; hour <= 19; hour++) {
            const option = document.createElement('button');
            const hourValue = String(hour).padStart(2, '0');
            const timeValue = hourValue + ':00';
            const isPastTime = selectedIsToday && (hour < istNow.hour || (hour === istNow.hour && istNow.minute > 0));
            const isBooked = bookedSlots.includes(timeValue);
            option.type = 'button';
            option.className = 'eep-time-option';
            option.textContent = getTimeOptionLabel(selectedDate, timeValue, isBooked);
            if (selectedTime === timeValue) {
                option.classList.add('active');
            }
            if (isPastTime || isBooked) {
                option.disabled = true;
            }
            option.addEventListener('click', function() {
                if (option.disabled) {
                    return;
                }
                selectedTime = timeValue;
                selectedTimeText.textContent = timeValue + ' IST';
                timeDropdown.classList.remove('show');
                updateBookingSummary();
                renderTimeSlots();
            });
            timeGrid.appendChild(option);
        }
    }

    function renderCalendar() {
        const istToday = getIstToday();
        const firstDay = new Date(viewYear, viewMonth, 1);
        const lastDate = new Date(viewYear, viewMonth + 1, 0).getDate();
        const startDay = firstDay.getDay();
        monthLabel.textContent = firstDay.toLocaleDateString('en-US', { month: 'long', year: 'numeric' });
        calendarGrid.innerHTML = '';

        for (let i = 0; i < startDay; i++) {
            const empty = document.createElement('div');
            empty.className = 'eep-calendar-empty';
            calendarGrid.appendChild(empty);
        }

        for (let day = 1; day <= lastDate; day++) {
            const btn = document.createElement('button');
            const thisDate = new Date(viewYear, viewMonth, day);
            const normalizedDate = normalizeDate(thisDate);
            const isToday = sameDay(thisDate, istToday);
            const isSelected = sameDay(thisDate, selectedDate);
            const isPastDate = normalizedDate < istToday;
            const isSunday = thisDate.getDay() === 0;
            btn.textContent = day;
            btn.type = 'button';
            btn.className = 'eep-calendar-day';
            if (isToday) btn.classList.add('eep-is-today');
            if (isSelected) btn.classList.add('eep-is-selected');
            if (isPastDate || isSunday) btn.disabled = true;
            btn.addEventListener('click', async function() {
                if (isPastDate || isSunday) {
                    return;
                }
                selectedDate = thisDate;
                selectedDateText.textContent = formatDate(thisDate);
                timeTrigger.classList.remove('disabled');
                timeDropdown.classList.remove('show');
                selectedTime = null;
                selectedTimeText.textContent = 'Select Time';
                await fetchBookedSlots(getDateKey(thisDate));
                updateBookingSummary();
                renderTimeSlots();
                renderCalendar();
            });
            calendarGrid.appendChild(btn);
        }
    }

    function initializeBookCallWidget() {
        if (bookCallInitialized) {
            return;
        }
        bookCallInitialized = true;

        prevMonth.addEventListener('click', function() {
            const istToday = getIstToday();
            const previousMonth = new Date(viewYear, viewMonth - 1, 1);
            if (previousMonth < new Date(istToday.getFullYear(), istToday.getMonth(), 1)) {
                return;
            }
            viewMonth--;
            if (viewMonth < 0) {
                viewMonth = 11;
                viewYear--;
            }
            renderCalendar();
        });

        nextMonth.addEventListener('click', function() {
            viewMonth++;
            if (viewMonth > 11) {
                viewMonth = 0;
                viewYear++;
            }
            renderCalendar();
        });

        timeTrigger.addEventListener('click', function() {
            if (!selectedDate) {
                return;
            }
            renderTimeSlots();
            timeDropdown.classList.toggle('show');
        });

        document.addEventListener('click', function(e) {
            if (!timeTrigger.contains(e.target) && !timeDropdown.contains(e.target)) {
                timeDropdown.classList.remove('show');
            }
        });

        bookCallBtn.addEventListener('click', function(e) {
            e.preventDefault();
            if (!selectedDate || !selectedTime) {
                alert('Please select a date and time first.');
                return;
            }
            if (bookedSlots.includes(selectedTime)) {
                alert('This time slot is already booked. Please select another time.');
                selectedTime = null;
                selectedTimeText.textContent = 'Select Time';
                updateBookingSummary();
                renderTimeSlots();
                return;
            }
            updateBookingSummary();
            openModal();
        });

        const form = document.querySelector('.eep-book-form');
        if (form) {
            form.addEventListener('submit', function() {
                const rawPhone = bookCallPhone.value.trim();
                const selectedCode = bookCallCountryCode.value.trim();
                if (rawPhone !== '' && selectedCode !== '' && !rawPhone.startsWith('+')) {
                    bookCallPhone.value = selectedCode + ' ' + rawPhone;
                }
            });
        }

        bookCallClose.addEventListener('click', closeModal);
        bookCallModal.addEventListener('click', function(e) {
            if (e.target === bookCallModal) {
                closeModal();
            }
        });
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && bookCallModal.classList.contains('show')) {
                closeModal();
            }
        });

        populateCountryCodes();
        viewerTimezoneNote.textContent = userTimezone === istTimezone ? '.' : ' Your local timezone: ' + userTimezone + '.';
        updateBookingSummary();
        renderTimeSlots();
        renderCalendar();
    }

    if ('IntersectionObserver' in window) {
        const widgetObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    initializeBookCallWidget();
                    widgetObserver.disconnect();
                }
            });
        }, { rootMargin: '250px 0px' });
        widgetObserver.observe(bookCallSection);
        bookCallSection.addEventListener('pointerdown', initializeBookCallWidget, { once: true, passive: true });
        bookCallSection.addEventListener('focusin', initializeBookCallWidget, { once: true });
    } else {
        initializeBookCallWidget();
    }
})();
