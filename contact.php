<?php
session_start();

$pageTitle = 'Contact Technofra - Let\'s Build Something Amazing';
$bodyClass = 'contact-page';

$defaultContactFormData = [
    'fname' => '',
    'lname' => '',
    'contact' => '',
    'email' => '',
    'massage' => '',
];

$contactFormNotice = $_SESSION['contact_form_notice'] ?? null;
$contactFormData = $_SESSION['contact_form_data'] ?? $defaultContactFormData;

unset($_SESSION['contact_form_notice'], $_SESSION['contact_form_data']);

function contactFormValue($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

include __DIR__ . '/header.php';
?>

<style>
    .contact-status-popup {
        position: fixed;
        top: 92px;
        left: 50%;
        transform: translateX(-50%);
        width: min(92%, 620px);
        z-index: 9999;
    }

    .contact-status-popup-card {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        padding: 18px 20px;
        border-radius: 12px;
        background: #ffffff;
        border: 1px solid #dbeafe;
        box-shadow: 0 22px 55px rgba(15, 23, 42, 0.18);
    }

    .contact-status-popup.success .contact-status-popup-card {
        border-color: #bbf7d0;
    }

    .contact-status-popup.error .contact-status-popup-card {
        border-color: #fecaca;
    }

    .contact-status-popup-icon {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .contact-status-popup.success .contact-status-popup-icon {
        background: #dcfce7;
        color: #15803d;
    }

    .contact-status-popup.error .contact-status-popup-icon {
        background: #fee2e2;
        color: #b91c1c;
    }

    .contact-status-popup-content {
        flex: 1;
    }

    .contact-status-popup-content h3 {
        font-size: 18px;
        margin: 0 0 4px;
        color: #0f172a;
    }

    .contact-status-popup-content p {
        margin: 0;
        color: #475569;
        line-height: 1.5;
    }

    .contact-status-popup-close {
        border: 0;
        background: transparent;
        color: #64748b;
        font-size: 24px;
        line-height: 1;
        cursor: pointer;
    }

    .contact-form.v2 .custom-form {
        /* display: grid; */
        gap: 16px;
    }

    .contact-form.v2 .form-row {
        display: grid;
        gap: 16px;
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .contact-form.v2 input,
    .contact-form.v2 textarea {
        width: 100%;
    }

    .contact-captcha-box {
        margin-bottom: 5px;
        transform-origin: left top;
    }

    @media (max-width: 575px) {
        .contact-form.v2 .form-row {
            grid-template-columns: 1fr;
        }

        .contact-captcha-box {
            transform: scale(0.92);
        }
    }
</style>

<?php if ($contactFormNotice): ?>
    <div class="contact-status-popup <?php echo contactFormValue($contactFormNotice['status']); ?>" id="contactStatusPopup" role="alert" aria-live="assertive">
        <div class="contact-status-popup-card">
            <div class="contact-status-popup-icon">
                <i class="fa <?php echo $contactFormNotice['status'] === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'; ?>"></i>
            </div>
            <div class="contact-status-popup-content">
                <h3><?php echo contactFormValue($contactFormNotice['title']); ?></h3>
                <p><?php echo contactFormValue($contactFormNotice['message']); ?></p>
            </div>
            <button type="button" class="contact-status-popup-close" aria-label="Close popup" onclick="document.getElementById('contactStatusPopup').style.display='none'">&times;</button>
        </div>
    </div>
<?php endif; ?>

<section class="page-banner9">
    <div class="staff-text">Contact</div>
    <div class="container">
        <div class="page-content">
            <h1 class="title">/ Contact Us /</h1>
        </div>
    </div>
</section>

<section class="contact-sec2 ibt-section-gap" id="contactForm">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="contact-content2">
                    <div class="sec-title">
                        <span class="sub-title">contact us</span>
                        <h2 class="title animated-heading">Do you have a project in mind? Let's work together</h2>
                        <p>We are here to support your business with website design, development, SEO, and digital marketing solutions.
                            Reach out to our team and we will get back to you as soon as possible.
                        </p>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="contact-info">
                                <div class="call-center2">
                                    <h4 class="title">Visit Us</h4>
                                    <p>Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai - 400067. Maharashtra - INDIA.</p>
                                </div>
                                <div class="call-center2 mb-0">
                                    <h4 class="title">Email</h4>
                                    <a href="mailto:info@technofra.com" class="gmail">info@technofra.com</a>
                                    <a href="mailto:support@technofra.com" class="gmail">support@technofra.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="contact-info">
                                <div class="call-center2">
                                    <h4 class="title">Call Us</h4>
                                    <a href="tel:+918080803374" class="nmbr">+91 8080 80 3374</a>
                                    <a href="tel:+918080803375" class="nmbr">+91 8080 80 3375</a>
                                </div>
                                <div class="call-center2 mb-0">
                                    <h4 class="title">Office Hours</h4>
                                    <p>Monday - Saturday<br>09:00 AM - 06:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form v2">
                    <form action="contact-handler" method="post" class="custom-form">
                        <h2>Let's Start Your Growth Journey</h2>
                        <div class="form-row">
                            <input type="text" id="fname" name="fname" placeholder="First name" required value="<?php echo contactFormValue($contactFormData['fname'] ?? ''); ?>">
                            <input type="text" id="lname" name="lname" placeholder="Last name" required value="<?php echo contactFormValue($contactFormData['lname'] ?? ''); ?>">
                        </div>
                        <div class="form-row">
                            <input type="text" id="contact" name="contact" placeholder="Phone number" required value="<?php echo contactFormValue($contactFormData['contact'] ?? ''); ?>">
                            <input type="email" id="email" name="email" placeholder="Email address" required value="<?php echo contactFormValue($contactFormData['email'] ?? ''); ?>">
                        </div>
                        <textarea id="massage" name="massage" rows="5" placeholder="Tell us about your project..."><?php echo contactFormValue($contactFormData['massage'] ?? ''); ?></textarea>
                        <input type="text" name="hidden_field" style="display:none;" tabindex="-1" autocomplete="off">
                        <div class="contact-captcha-box">
                            <div class="g-recaptcha" data-sitekey="6LekpbEqAAAAANkc3FduPE52-p4Wqu5ghQFXjPhF"></div>
                        </div>
                        <button type="submit" class="ibt-btn ibt-btn-outline">
                            <span>Send message</span>
                            <i class="icon-arrow-top"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="googel-map">
    <h2>google map</h2>
    <div class="container2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.820946801904!2d72.83227557583984!3d19.20302134797151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6c41668ffff%3A0x7b2d2cb22e31efc6!2sOffice%20No.%20501%2C%205th%20Floor%2C%20Ghanshyam%20Enclave%2C%20New%20Link%20Rd%2C%20Kandivali%2C%20Shankar%20Pada%2C%20Kandivali%20West%2C%20Mumbai%2C%20Maharashtra%20400067!5e0!3m2!1sen!2sin!4v1782813193446!5m2!1sen!2sin"
            height="500" style="border:0; border-radius: 25px; width: 100%;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    window.addEventListener('load', function () {
        var popup = document.getElementById('contactStatusPopup');
        if (popup) {
            window.setTimeout(function () {
                popup.style.display = 'none';
            }, 5000);
        }
    });
</script>

<?php include __DIR__ . '/footer.php'; ?>
