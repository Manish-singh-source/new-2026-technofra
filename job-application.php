<?php
$pageTitle = 'Job Application | Technofra';
$bodyClass = 'job-application-page';
include __DIR__ . '/header.php';
?>

<style>
.job-application-hero {
    position: relative;
    overflow: hidden;
    padding: 96px 0 46px;
    background:
        radial-gradient(circle at top left, rgba(0, 102, 204, 0.14), transparent 34%),
        radial-gradient(circle at bottom right, rgba(7, 34, 78, 0.12), transparent 38%),
        linear-gradient(180deg, #f7fbff 0%, #ffffff 100%);
}

.job-application-hero::before {
    content: "";
    position: absolute;
    inset: auto -10% 0 auto;
    width: 360px;
    height: 360px;
    background: linear-gradient(135deg, rgba(0, 51, 102, 0.12), rgba(11, 94, 215, 0.02));
    border-radius: 50%;
    filter: blur(8px);
    pointer-events: none;
}

.job-application-hero .hero-copy {
    max-width: 760px;
    position: relative;
    z-index: 1;
}

.job-application-hero .hero-copy p {
    color: #475569;
    font-size: 18px;
    line-height: 1.85;
}

.job-application-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 22px;
}

.job-application-badges span {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 14px;
    border-radius: 999px;
    background: rgba(0, 51, 102, 0.08);
    color: #003366;
    font-size: 13px;
    font-weight: 700;
}

.job-application-badges i {
    color: #0b5ed7;
}

.job-application-banner {
    background-image: url('assets/images/new/jobbanner.png');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.job-application-layout {
    position: relative;
    z-index: 1;
}

.job-application-card {
    height: 100%;
    padding: 28px;
    border-radius: 28px;
    background: #ffffff;
    border: 1px solid rgba(15, 23, 42, 0.08);
    box-shadow: 0 24px 60px rgba(15, 23, 42, 0.08);
}

.job-application-card .card-eyebrow {
    display: inline-flex;
    align-items: center;
    padding: 8px 12px;
    margin-bottom: 14px;
    border-radius: 999px;
    background: rgba(0, 51, 102, 0.08);
    color: #003366;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
}

.job-application-card h3 {
    font-size: 28px;
    line-height: 1.2;
    margin-bottom: 12px;
}

.job-application-card p {
    color: #475569;
    line-height: 1.75;
    margin-bottom: 0;
}

.job-summary-list {
    list-style: none;
    padding: 0;
    margin: 24px 0 0;
    display: grid;
    gap: 14px;
}

.job-summary-list li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 14px 16px;
    border-radius: 18px;
    background: #f8fbff;
    border: 1px solid rgba(15, 23, 42, 0.06);
}

.job-summary-list li i {
    margin-top: 3px;
    color: #003366;
    font-size: 16px;
    flex-shrink: 0;
}

.job-summary-list strong {
    display: block;
    color: #0f172a;
    font-size: 14px;
    margin-bottom: 4px;
}

.job-summary-list span {
    color: #475569;
    font-size: 14px;
    line-height: 1.55;
}

.application-form-wrap {
    padding: 32px;
    border-radius: 28px;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    border: 1px solid rgba(15, 23, 42, 0.08);
    box-shadow: 0 24px 60px rgba(15, 23, 42, 0.08);
}

.application-form-wrap h2 {
    margin-bottom: 10px;
    font-size: 32px;
    line-height: 1.15;
}

.application-form-wrap > p {
    color: #475569;
    line-height: 1.75;
    margin-bottom: 26px;
}

.application-form .form-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 16px;
}

.application-form .field-full {
    grid-column: 1 / -1;
}

.application-form label {
    display: block;
    margin-bottom: 8px;
    color: #0f172a;
    font-size: 14px;
    font-weight: 700;
}

.application-form input,
.application-form select,
.application-form textarea {
    width: 100%;
    min-height: 54px;
    padding: 14px 16px;
    border-radius: 16px;
    border: 1px solid rgba(15, 23, 42, 0.12);
    background: #fff;
    color: #0f172a;
    outline: none;
    transition: border-color 0.2s ease, box-shadow 0.2s ease, transform 0.2s ease;
}

.application-form textarea {
    min-height: 152px;
    resize: vertical;
}

.application-form input:focus,
.application-form select:focus,
.application-form textarea:focus {
    border-color: rgba(0, 51, 102, 0.55);
    box-shadow: 0 0 0 4px rgba(0, 51, 102, 0.08);
}

.application-form .hint-text {
    margin-top: 8px;
    color: #64748b;
    font-size: 13px;
    line-height: 1.6;
}

.application-form .file-row {
    display: flex;
    align-items: center;
    gap: 12px;
}

.application-form .file-row .file-label {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 14px 18px;
    min-height: 54px;
    border-radius: 16px;
    border: 1px dashed rgba(0, 51, 102, 0.28);
    background: rgba(0, 51, 102, 0.04);
    color: #003366;
    font-weight: 700;
    cursor: pointer;
    white-space: nowrap;
}

.application-form .file-row input[type="file"] {
    padding: 11px 14px;
}

.application-form .terms-row {
    display: flex;
    gap: 12px;
    align-items: flex-start;
}

.application-form .terms-row input {
    width: 18px;
    height: 18px;
    min-height: 18px;
    margin-top: 3px;
    flex-shrink: 0;
}

.application-form .terms-row span {
    color: #475569;
    font-size: 14px;
    line-height: 1.65;
}

.application-form .form-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    margin-top: 6px;
}

.role-strip {
    padding: 18px 0 0;
}

.role-strip-grid {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 18px;
}

.role-strip-card {
    height: 100%;
    padding: 20px;
    border-radius: 22px;
    background: #fff;
    border: 1px solid rgba(15, 23, 42, 0.08);
    box-shadow: 0 14px 34px rgba(15, 23, 42, 0.05);
}

.role-strip-card .role-icon {
    width: 52px;
    height: 52px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 16px;
    background: rgba(0, 51, 102, 0.08);
    color: #003366;
    font-size: 1.1rem;
    margin-bottom: 14px;
}

.role-strip-card h4 {
    font-size: 18px;
    margin-bottom: 8px;
}

.role-strip-card p {
    color: #475569;
    margin-bottom: 0;
    font-size: 14px;
    line-height: 1.7;
}

.application-note {
    margin-top: 18px;
    padding: 18px 20px;
    border-radius: 20px;
    background: rgba(0, 51, 102, 0.06);
    border: 1px solid rgba(0, 51, 102, 0.08);
    color: #334155;
    line-height: 1.7;
}

@media (max-width: 1199.98px) {
    .role-strip-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (max-width: 991.98px) {
    .job-application-hero {
        padding-top: 78px;
    }

    .application-form-wrap,
    .job-application-card {
        border-radius: 24px;
    }
}

@media (max-width: 767.98px) {
    .job-application-hero .hero-copy p {
        font-size: 15px;
    }

    .job-application-card,
    .application-form-wrap {
        padding: 22px;
    }

    .application-form-wrap h2 {
        font-size: 26px;
    }

    .application-form .form-grid,
    .role-strip-grid {
        grid-template-columns: 1fr;
    }

    .application-form .file-row {
        flex-direction: column;
        align-items: stretch;
    }

    .application-form .file-row .file-label {
        width: 100%;
    }
}
</style>

<section class="page-banner9 job-application-banner">
    <div class="staff-text">Jobs</div>
    <div class="container">
        <div class="page-content">
            <h1 class="title">Job Application /</h1>
        </div>
    </div>
   
</section>

<section class="job-application-hero">
    <div class="container">
        <div class="sec-title">
            <span class="sub-title">apply now</span>
            <h2 class="title animated-heading">Send your application to join the Technofra team</h2>
        </div>
        <div class="hero-copy">
            <p>
                This page is designed as a clean frontend application flow. You can select the role you want,
                share your background, upload your resume, and submit the form once the backend is connected.
            </p>
            <div class="job-application-badges">
                <span><i class="fa fa-check-circle"></i>Frontend only</span>
                <span><i class="fa fa-check-circle"></i>Resume upload ready</span>
                <span><i class="fa fa-check-circle"></i>Responsive layout</span>
            </div>
        </div>
    </div>
</section>

<section class="role-strip">
    <div class="container">
        <div class="role-strip-grid">
            <article class="role-strip-card">
                <div class="role-icon"><i class="fa fa-code"></i></div>
                <h4>Website Developer</h4>
                <p>Modern responsive websites, landing pages, and performance-focused frontends.</p>
            </article>
            <article class="role-strip-card">
                <div class="role-icon"><i class="fa fa-paint-brush"></i></div>
                <h4>Graphic Designer</h4>
                <p>Brand visuals, marketing creatives, banners, and layout systems for digital content.</p>
            </article>
            <article class="role-strip-card">
                <div class="role-icon"><i class="fa fa-bullhorn"></i></div>
                <h4>Social Media Marketing</h4>
                <p>Content planning, campaign management, copywriting, and engagement growth.</p>
            </article>
            <article class="role-strip-card">
                <div class="role-icon"><i class="fa fa-mobile"></i></div>
                <h4>App Developer</h4>
                <p>Mobile app interfaces, API integration, and smooth user experiences across devices.</p>
            </article>
        </div>
    </div>
</section>

<section class="ibt-section-gap">
    <div class="container">
        <div class="row g-4 align-items-start">
            <div class="col-lg-5">
                <div class="job-application-card">
                    <span class="card-eyebrow">Role snapshot</span>
                    <h3>What we are looking for</h3>
                    <p>
                        The form is structured to collect the same kind of candidate details that typically appear
                        in a modern job application flow.
                    </p>
                    <ul class="job-summary-list">
                        <li>
                            <i class="fa fa-check"></i>
                            <div>
                                <strong>Experience</strong>
                                <span>1 to 2+ years preferred, depending on the role and portfolio.</span>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            <div>
                                <strong>Core skills</strong>
                                <span>HTML, CSS, JavaScript, design tools, marketing tools, or app tech stacks.</span>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            <div>
                                <strong>AI tools</strong>
                                <span>Prompt-based tools, assistants, and productivity workflows are welcomed.</span>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            <div>
                                <strong>Resume</strong>
                                <span>Upload a PDF or DOC file and include links to your portfolio or work samples.</span>
                            </div>
                        </li>
                    </ul>
                    <div class="application-note">
                        <strong>Note:</strong> This is a frontend-only page. The submit button is intentionally
                        non-functional until backend handling is added.
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="application-form-wrap">
                    <div class="sec-title">
                        <span class="sub-title">application form</span>
                        <h2 class="title animated-heading">Share your details</h2>
                        <p>Fill the form below with your basic information and the role you want to apply for.</p>
                    </div>

                    <form class="application-form" action="#" method="post" enctype="multipart/form-data">
                        <div class="form-grid">
                            <div>
                                <label for="full_name">Full Name</label>
                                <input type="text" id="full_name" name="full_name" placeholder="Enter your full name" required>
                            </div>
                            <div>
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                            </div>
                            <div>
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                            </div>
                            <div>
                                <label for="role">Applied For</label>
                                <select id="role" name="role" required>
                                    <option value="">Select role</option>
                                    <option>Website Developer</option>
                                    <option>Graphic Designer</option>
                                    <option>Social Media Marketing Executive</option>
                                    <option>App Developer</option>
                                </select>
                            </div>
                            <div>
                                <label for="experience">Experience</label>
                                <select id="experience" name="experience" required>
                                    <option value="">Select experience</option>
                                    <option>Fresher</option>
                                    <option>1 Year</option>
                                    <option>2 Years</option>
                                    <option>3+ Years</option>
                                </select>
                            </div>
                            <div>
                                <label for="city">Current City</label>
                                <input type="text" id="city" name="city" placeholder="Enter your city">
                            </div>
                            <div class="field-full">
                                <label for="skills">Key Skills</label>
                                <input type="text" id="skills" name="skills" placeholder="Example: HTML, CSS, JavaScript, Figma, Meta Ads">
                                <div class="hint-text">You can separate skills with commas so they are easy to scan later.</div>
                            </div>
                            <div class="field-full">
                                <label for="ai_tools">AI Tools Used</label>
                                <input type="text" id="ai_tools" name="ai_tools" placeholder="Example: ChatGPT, Canva AI, Copilot, Midjourney">
                            </div>
                            <div class="field-full">
                                <label for="portfolio">Portfolio / LinkedIn</label>
                                <input type="url" id="portfolio" name="portfolio" placeholder="Paste your portfolio or LinkedIn link">
                            </div>
                            <div class="field-full">
                                <label for="resume">Upload Resume</label>
                                <div class="file-row">
                                    <label class="file-label" for="resume">Choose file</label>
                                    <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx">
                                </div>
                                <div class="hint-text">Accepted formats: PDF, DOC, DOCX.</div>
                            </div>
                            <div class="field-full">
                                <label for="message">Cover Note</label>
                                <textarea id="message" name="message" placeholder="Tell us a little about your background, interests, and why you want to join Technofra."></textarea>
                            </div>
                            <div class="field-full">
                                <div class="terms-row">
                                    <input type="checkbox" id="consent" name="consent" required>
                                    <label for="consent" style="margin:0;font-weight:400;">
                                        <span>I confirm that the information provided above is correct and I am okay with the team contacting me for this application.</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="ibt-btn ibt-btn-outline">
                                <span>Submit Application</span>
                                <i class="icon-arrow-top"></i>
                            </button>
                            <a href="career.php" class="ibt-btn" style="background:#003366;color:#fff;">
                                <span>View Open Roles</span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
