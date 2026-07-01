<?php
$bodyClass = 'job-application-page';
include __DIR__ . '/header.php';
?>

<style>
.career-page-hero {
    padding: 90px 0 26px;
    background: linear-gradient(180deg, #f8fbff 0%, #ffffff 100%);
}

.career-page-hero .hero-copy {
    max-width: 760px;
}

.career-page-hero .hero-copy p {
    color: #475569;
    font-size: 18px;
    line-height: 1.8;
}

.career-openings-grid {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 24px;
}

.career-opening-card {
    height: 100%;
    padding: 28px;
    border-radius: 24px;
    background: rgba(255, 255, 255, 0.98);
    box-shadow: 0 18px 40px rgba(15, 23, 42, 0.08);
    border: 1px solid rgba(15, 23, 42, 0.06);
}

.career-opening-card .job-icon {
    width: 54px;
    height: 54px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 16px;
    background: linear-gradient(135deg, #003366 0%, #0b5ed7 100%);
    color: #fff;
    font-size: 1.2rem;
    margin-bottom: 18px;
    box-shadow: 0 12px 24px rgba(0, 51, 102, 0.24);
}

.career-opening-card .job-label {
    display: inline-flex;
    align-items: center;
    padding: 8px 12px;
    border-radius: 999px;
    background: rgba(0, 51, 102, 0.08);
    color: #003366;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 16px;
}

.career-opening-card h3 {
    font-size: 24px;
    line-height: 1.25;
    margin-bottom: 12px;
}

.career-opening-card p {
    color: #475569;
    line-height: 1.7;
    margin-bottom: 18px;
}

.career-opening-card .career-mini-list {
    list-style: none;
    padding: 0;
    margin: 0 0 22px;
    display: grid;
    gap: 10px;
}

.career-opening-card .career-mini-list li {
    display: flex;
    gap: 10px;
    color: #334155;
    font-size: 14px;
}

.career-opening-card .career-mini-list li i {
    color: #003366;
    margin-top: 4px;
    flex-shrink: 0;
}

.role-modal-backdrop {
    position: fixed;
    inset: 0;
    background: rgba(15, 23, 42, 0.62);
    backdrop-filter: blur(8px);
    display: none;
    align-items: center;
    justify-content: center;
    padding: 24px;
    z-index: 2000;
}

.role-modal-backdrop.is-open {
    display: flex;
}

.role-modal {
    width: min(920px, 100%);
    max-height: min(88vh, 980px);
    overflow: auto;
    background: #fff;
    border-radius: 28px;
    box-shadow: 0 30px 90px rgba(15, 23, 42, 0.28);
    border: 1px solid rgba(255, 255, 255, 0.18);
}

.role-modal-head {
    display: flex;
    justify-content: space-between;
    gap: 16px;
    padding: 28px 28px 18px;
    border-bottom: 1px solid rgba(15, 23, 42, 0.08);
}

.role-modal-head h3 {
    margin: 0;
    font-size: 28px;
    line-height: 1.2;
}

.role-modal-head p {
    margin: 8px 0 0;
    color: #475569;
}

.role-modal-close {
    border: 0;
    background: rgba(0, 51, 102, 0.08);
    color: #003366;
    width: 44px;
    height: 44px;
    border-radius: 999px;
    font-size: 22px;
    line-height: 1;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    flex-shrink: 0;
}

.role-modal-body {
    padding: 24px 28px 28px;
}

.role-meta-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 16px;
    margin-bottom: 24px;
}

.role-meta-card {
    padding: 18px;
    border-radius: 20px;
    background: #f8fbff;
    border: 1px solid rgba(15, 23, 42, 0.08);
}

.role-meta-card span {
    display: block;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #64748b;
    margin-bottom: 8px;
}

.role-meta-card strong {
    color: #0f172a;
    font-size: 15px;
    line-height: 1.5;
}

.role-detail-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 18px;
}

.role-detail-box {
    padding: 20px;
    border-radius: 22px;
    background: #ffffff;
    border: 1px solid rgba(15, 23, 42, 0.08);
}

.role-detail-box h4 {
    margin: 0 0 12px;
    font-size: 18px;
    color: #003366;
}

.role-detail-box ul {
    margin: 0;
    padding-left: 18px;
    color: #334155;
    line-height: 1.75;
}

.role-modal-actions {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    margin-top: 22px;
}

.role-modal-actions .ibt-btn {
    min-width: 170px;
}

body.role-modal-open {
    overflow: hidden;
}

.feature-sec15 {
    background: linear-gradient(180deg, #f6f9ff 0%, #ffffff 100%);
}

.why-join-copy {
    max-width: 760px;
    color: #475569;
    font-size: 17px;
    line-height: 1.8;
}

.why-join-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 20px;
    margin-top: 34px;
}

.why-join-card {
    height: 100%;
    padding: 24px;
    border-radius: 22px;
    background: #fff;
    border: 1px solid rgba(15, 23, 42, 0.08);
    box-shadow: 0 16px 32px rgba(15, 23, 42, 0.05);
}

.why-join-card .why-icon {
    width: 52px;
    height: 52px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 16px;
    background: rgba(0, 51, 102, 0.08);
    color: #003366;
    font-size: 1.15rem;
    margin-bottom: 14px;
}

.why-join-card h4 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #0f172a;
}

.why-join-card p {
    margin-bottom: 0;
    color: #475569;
    line-height: 1.7;
}

@media (max-width: 1199.98px) {
    .career-openings-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .why-join-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (max-width: 767.98px) {
    .career-page-hero {
        padding-top: 72px;
    }

    .career-page-hero .hero-copy p,
    .why-join-copy {
        font-size: 15px;
    }

    .career-openings-grid,
    .why-join-grid {
        grid-template-columns: 1fr;
        gap: 18px;
    }

    .career-opening-card,
    .why-join-card {
        padding: 22px;
        border-radius: 20px;
    }

    .role-modal-head,
    .role-modal-body {
        padding-left: 20px;
        padding-right: 20px;
    }

    .role-meta-grid,
    .role-detail-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<section class="page-banner9">
    <div class="staff-text">Jobs</div>
    <div class="container">
        <div class="page-content">
            <h1 class="title">/ Career /</h1>
        </div>
    </div>
    
</section>

<section class="career-page-hero">
    <div class="container">
        <div class="sec-title">
            <span class="sub-title">join technofra</span>
            <h2 class="title animated-heading">Grow your career with real projects and real responsibility</h2>
        </div>
        <div class="hero-copy">
            <p>
                Explore our open roles below. We are looking for people who want to learn, contribute, and work on
                meaningful digital projects with a collaborative team.
            </p>
        </div>
    </div>
</section>

<!-- project-sec4 -->
<section class="project-sec4 ibt-section-gap">
    <div class="title-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-7">
                    <div class="sec-title mb-0 white">
                        <span class="sub-title">job openings</span>
                        <h2 class="title animated-heading">Current roles at Technofra</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-5 col-sm-8">
                    <div class="user-count">
                        <div class="counter-box5">
                            <span class="counter-number" data-target="4">0</span>
                            <span class="counter-text">+</span>
                        </div>
                        <span class="user">Job openings</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container2">
        <div class="career-openings-grid">
            <article class="career-opening-card">
                <div class="job-icon"><i class="fa fa-code"></i></div>
                <span class="job-label">Job Opening</span>
                <h3 class="title">Website Developer</h3>
                <p>Build modern, responsive, and high-performance websites using latest technologies.</p>
                <ul class="career-mini-list">
                    <li><i class="fa fa-check"></i><span>1-2+ Years</span></li>
                    <li><i class="fa fa-check"></i><span>HTML5, CSS3, JavaScript</span></li>
                </ul>
                <a href="contact.php" class="ibt-btn ibt-btn-outline js-role-popup" title="Apply now"
                    data-role-title="Website Developer"
                    data-role-subtitle="Build modern, responsive, and high-performance websites using latest technologies."
                    data-role-skill="HTML5, CSS3, JavaScript, responsive layout, basic SEO, cross-browser compatibility"
                    data-role-ai="ChatGPT, GitHub Copilot, Cursor, browser-based AI debugging assistants"
                    data-role-exp="1-2+ Years"
                    data-role-responsibility="Develop landing pages, business websites, and UI sections with clean code and fast load times.">
                    <span>More Details</span>
                    <i class="icon-arrow-top"></i>
                </a>
            </article>

            <article class="career-opening-card">
                <div class="job-icon"><i class="fa fa-paint-brush"></i></div>
                <span class="job-label">Job Opening</span>
                <h3 class="title">Graphic Designer</h3>
                <p>Join our creative team to design visually compelling graphics, branding materials, and digital assets.</p>
                <ul class="career-mini-list">
                    <li><i class="fa fa-check"></i><span>1-2+ Years</span></li>
                    <li><i class="fa fa-check"></i><span>Adobe Photoshop, Illustrator, Figma</span></li>
                </ul>
                <a href="contact.php" class="ibt-btn ibt-btn-outline js-role-popup" title="Apply now"
                    data-role-title="Graphic Designer"
                    data-role-subtitle="Join our creative team to design visually compelling graphics, branding materials, and digital assets."
                    data-role-skill="Adobe Photoshop, Illustrator, Figma, branding, social media creatives, visual hierarchy"
                    data-role-ai="ChatGPT, Adobe Firefly, Canva Magic tools, Midjourney, prompt-based ideation tools"
                    data-role-exp="1-2+ Years"
                    data-role-responsibility="Create brand visuals, marketing graphics, web assets, and presentation designs that match business goals.">
                    <span>More Details</span>
                    <i class="icon-arrow-top"></i>
                </a>
            </article>

            <article class="career-opening-card">
                <div class="job-icon"><i class="fa fa-bullhorn"></i></div>
                <span class="job-label">Job Opening</span>
                <h3 class="title">Social Media Marketing Executive</h3>
                <p>Plan, create, and manage engaging social media campaigns across Instagram, Facebook, LinkedIn, and more.</p>
                <ul class="career-mini-list">
                    <li><i class="fa fa-check"></i><span>1-2+ Years</span></li>
                    <li><i class="fa fa-check"></i><span>Strategy, Content Creation, Facebook Ads</span></li>
                </ul>
                <a href="contact.php" class="ibt-btn ibt-btn-outline js-role-popup" title="Apply now"
                    data-role-title="Social Media Marketing Executive"
                    data-role-subtitle="Plan, create, and manage engaging social media campaigns across Instagram, Facebook, LinkedIn, and more."
                    data-role-skill="Content strategy, copywriting, Meta Ads, analytics, community management, campaign planning"
                    data-role-ai="ChatGPT, Meta AI, Canva AI, scheduling assistants, analytics insight tools"
                    data-role-exp="1-2+ Years"
                    data-role-responsibility="Plan campaigns, write captions, monitor performance, and improve engagement across social platforms.">
                    <span>More Details</span>
                    <i class="icon-arrow-top"></i>
                </a>
            </article>

            <article class="career-opening-card">
                <div class="job-icon"><i class="fa fa-mobile"></i></div>
                <span class="job-label">Job Opening</span>
                <h3 class="title">App Developer</h3>
                <p>Build high-performance and scalable mobile applications for Android and iOS platforms.</p>
                <ul class="career-mini-list">
                    <li><i class="fa fa-check"></i><span>1-2+ Years</span></li>
                    <li><i class="fa fa-check"></i><span>Android, iOS, Flutter / React Native</span></li>
                </ul>
                <a href="contact.php" class="ibt-btn ibt-btn-outline js-role-popup" title="Apply now"
                    data-role-title="App Developer"
                    data-role-subtitle="Build high-performance and scalable mobile applications for Android and iOS platforms."
                    data-role-skill="Android, iOS, Flutter, React Native, API integration, state management, app debugging"
                    data-role-ai="ChatGPT, GitHub Copilot, Cursor, Firebase AI helpers, code review assistants"
                    data-role-exp="1-2+ Years"
                    data-role-responsibility="Develop mobile app features, integrate APIs, fix bugs, and deliver smooth user experiences.">
                    <span>More Details</span>
                    <i class="icon-arrow-top"></i>
                </a>
            </article>
        </div>
    </div>
</section>
<!-- End project-sec4 -->

<div class="role-modal-backdrop" id="roleModalBackdrop" aria-hidden="true">
    <div class="role-modal" role="dialog" aria-modal="true" aria-labelledby="roleModalTitle">
        <div class="role-modal-head">
            <div>
                <span class="job-label mb-2">Role Details</span>
                <h3 id="roleModalTitle">Role title</h3>
                <p id="roleModalSubtitle">Role summary</p>
            </div>
            <button type="button" class="role-modal-close" id="roleModalClose" aria-label="Close popup">×</button>
        </div>
        <div class="role-modal-body">
            <div class="role-meta-grid">
                <div class="role-meta-card">
                    <span>Years Of Experience</span>
                    <strong id="roleModalExp">-</strong>
                </div>
                <div class="role-meta-card">
                    <span>Required Skills</span>
                    <strong id="roleModalSkills">-</strong>
                </div>
                <div class="role-meta-card">
                    <span>AI Tools</span>
                    <strong id="roleModalAi">-</strong>
                </div>
            </div>

            <div class="role-detail-grid">
                <div class="role-detail-box">
                    <h4>Responsibilities</h4>
                    <ul>
                        <li id="roleModalResponsibility">-</li>
                    </ul>
                </div>
                <div class="role-detail-box">
                    <h4>How To Apply</h4>
                    <ul>
                        <li>Use the Apply Now button below to open the contact page.</li>
                        <li>Share your resume and a short note about your experience.</li>
                        <li>We’ll review the application and contact shortlisted candidates.</li>
                    </ul>
                </div>
            </div>

            <div class="role-modal-actions">
                <a href="contact.php" class="ibt-btn ibt-btn-outline" id="roleModalApplyLink" title="Apply now">
                    <span>Apply Now</span>
                    <i class="icon-arrow-top"></i>
                </a>
                <button type="button" class="ibt-btn" id="roleModalDismissBtn" style="background:#003366;color:#fff;">
                    <span>Close</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- feature-style15 -->
<section class="feature-sec15 ibt-section-gap">
    <div class="container">
        <div class="sec-title">
            <span class="sub-title">why join technofra</span>
            <h2 class="title animated-heading">Why Join Technofra</h2>
        </div>
        <p class="why-join-copy">
            At Technofra, we create a growth-focused environment where talent is valued, ideas matter, and people
            get the opportunity to learn, contribute, and grow.
        </p>

        <div class="why-join-grid">
            <div class="why-join-card">
                <div class="why-icon"><i class="fa fa-line-chart"></i></div>
                <h4>Career Growth</h4>
                <p>Take on meaningful responsibilities and grow into bigger opportunities with time, experience, and performance.</p>
            </div>
            <div class="why-join-card">
                <div class="why-icon"><i class="fa fa-book"></i></div>
                <h4>Learning Opportunities</h4>
                <p>Work on real projects and continuously develop practical, in-demand skills in a fast-moving environment.</p>
            </div>
            <div class="why-join-card">
                <div class="why-icon"><i class="fa fa-lightbulb"></i></div>
                <h4>Creative Freedom</h4>
                <p>Share your ideas, think differently, and bring innovation into your work with a team that values fresh perspectives.</p>
            </div>
            <div class="why-join-card">
                <div class="why-icon"><i class="fa fa-users"></i></div>
                <h4>Supportive Team</h4>
                <p>Collaborate with people who believe in teamwork, open communication, and helping each other succeed.</p>
            </div>
            <div class="why-join-card">
                <div class="why-icon"><i class="fa fa-briefcase"></i></div>
                <h4>Real Impact</h4>
                <p>Your work contributes directly to projects, clients, and results that matter, giving you valuable real-world exposure.</p>
            </div>
            <div class="why-join-card">
                <div class="why-icon"><i class="fa fa-inr"></i></div>
                <h4>Competitive Pay</h4>
                <p>Receive fair and competitive compensation that reflects your skills, experience, and contributions, with opportunities for growth as you progress.</p>
            </div>
        </div>
    </div>
</section>
<!-- End feature-style15 -->

<script>
(function () {
    const backdrop = document.getElementById('roleModalBackdrop');
    const closeBtn = document.getElementById('roleModalClose');
    const dismissBtn = document.getElementById('roleModalDismissBtn');
    const titleEl = document.getElementById('roleModalTitle');
    const subtitleEl = document.getElementById('roleModalSubtitle');
    const expEl = document.getElementById('roleModalExp');
    const skillsEl = document.getElementById('roleModalSkills');
    const aiEl = document.getElementById('roleModalAi');
    const respEl = document.getElementById('roleModalResponsibility');
    const applyLink = document.getElementById('roleModalApplyLink');

    function openModal(trigger) {
        titleEl.textContent = trigger.dataset.roleTitle || 'Role Details';
        subtitleEl.textContent = trigger.dataset.roleSubtitle || '';
        expEl.textContent = trigger.dataset.roleExp || '-';
        skillsEl.textContent = trigger.dataset.roleSkill || '-';
        aiEl.textContent = trigger.dataset.roleAi || '-';
        respEl.textContent = trigger.dataset.roleResponsibility || '-';
        applyLink.href = trigger.href || 'contact.php';
        backdrop.classList.add('is-open');
        backdrop.setAttribute('aria-hidden', 'false');
        document.body.classList.add('role-modal-open');
        closeBtn.focus();
    }

    function closeModal() {
        backdrop.classList.remove('is-open');
        backdrop.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('role-modal-open');
    }

    document.querySelectorAll('.js-role-popup').forEach((btn) => {
        btn.addEventListener('click', function (event) {
            event.preventDefault();
            openModal(this);
        });
    });

    closeBtn.addEventListener('click', closeModal);
    dismissBtn.addEventListener('click', closeModal);
    backdrop.addEventListener('click', function (event) {
        if (event.target === backdrop) {
            closeModal();
        }
    });
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && backdrop.classList.contains('is-open')) {
            closeModal();
        }
    });
})();
</script>

<?php include __DIR__ . '/footer.php'; ?>
