<?php
session_start();

$selectedRole = isset($_GET['role']) ? trim($_GET['role']) : '';
$roles = [
    'Frontend Developer',
    'Backend Developer',
    'Full Stack Developer',
    'WordPress Developer',
    'Shopify Developer',
    'Mobile App Developer',
    'UI/UX Designer',
    'Motion Graphic Designer',
    'SEO Executive',
    'Digital Marketing Executive',
    'Sales Executive',
    'AI Tools Specialist',
];

if ($selectedRole !== '' && !in_array($selectedRole, $roles, true)) {
    $selectedRole = '';
}

$defaultFormData = [
    'fname' => '',
    'email' => '',
    'contact' => '',
    'role' => $selectedRole,
    'applicant_type' => '',
    'experience' => '',
    'ctc' => '',
    'ectc' => '',
    'location' => '',
    'notice' => '',
    'rn' => '',
    'refrence' => '',
    'link' => '',
];

$formNotice = $_SESSION['job_application_form_notice'] ?? null;
$formData = $_SESSION['job_application_form_data'] ?? $defaultFormData;
$skillRows = $_SESSION['job_application_skill_rows'] ?? [['name' => '', 'percentage' => '']];
$aiToolRows = $_SESSION['job_application_ai_tool_rows'] ?? [['name' => '', 'level' => '']];

unset(
    $_SESSION['job_application_form_notice'],
    $_SESSION['job_application_form_data'],
    $_SESSION['job_application_skill_rows'],
    $_SESSION['job_application_ai_tool_rows']
);

function jobApplicationValue($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>
<?php
$pageTitle = 'Job Application Form - Technofra Careers';
$bodyClass = 'job-application-page';
include __DIR__ . '/header.php'; ?>

<style>
.career-apply-hero {
    background: linear-gradient(135deg, rgba(5, 15, 35, .86), rgb(119 177 220 / 49%)), url(./assets/images/new/jobbanner.png) center / cover no-repeat;
    min-height: 430px;
    display: flex;
    align-items: center;
    color: #fff;
    position: relative;
}

.career-apply-hero h1 {
    color: #fff;
    font-size: 54px;
    line-height: 1.15;
    font-weight: 700;
    margin-bottom: 16px;
}

.career-apply-hero p {
    color: rgba(255, 255, 255, .88);
    max-width: 680px;
    font-size: 18px;
    line-height: 1.75;
    margin-bottom: 0;
}

.career-apply-section {
    background: #f7f9fc;
    padding: 70px 0;
}

.career-apply-shell {
    display: grid;
    grid-template-columns: minmax(260px, 360px) 1fr;
    gap: 30px;
    align-items: start;
}

.career-apply-panel,
.career-form-card {
    background: #fff;
    border: 1px solid rgba(15, 23, 42, .08);
    box-shadow: 0 20px 50px rgba(15, 23, 42, .08);
    border-radius: 12px;
}

.career-apply-panel {
    padding: 30px;
    position: sticky;
    top: 100px;
}

.career-apply-panel h2 {
    font-size: 28px;
    line-height: 1.25;
    margin-bottom: 16px;
}

.career-apply-panel p,
.career-apply-panel li {
    color: #5d6675;
    line-height: 1.7;
}

.career-apply-panel ul {
    padding-left: 0;
    margin: 22px 0 0;
    list-style: none;
}

.career-apply-panel li {
    display: flex;
    gap: 10px;
    margin-bottom: 14px;
}

.career-apply-panel i {
    color: #036;
    margin-top: 6px;
}

.career-form-card {
    padding: 36px;
}

.career-form-card .form-label {
    font-weight: 600;
    color: #162033;
}

.career-form-card .required-mark {
    color: #bf1c25;
}

.career-form-card .form-control {
    min-height: 48px;
    border-radius: 8px;
    border: 1px solid #d9e1ec;
}

.career-form-card .form-control:focus {
    border-color: #bf1c25;
    box-shadow: 0 0 0 .2rem rgba(191, 28, 37, .12);
}

.career-form-card select.form-control {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-color: #fff;
    background-image: linear-gradient(45deg, transparent 50%, #003366 50%),
        linear-gradient(135deg, #003366 50%, transparent 50%);
    background-position: calc(100% - 20px) 20px, calc(100% - 14px) 20px;
    background-size: 6px 6px, 6px 6px;
    background-repeat: no-repeat;
    padding-right: 42px;
    cursor: pointer;
}

.career-applicant-type {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
}

.career-applicant-option {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-height: 46px;
    padding: 10px 16px;
    border: 1px solid #d9e1ec;
    border-radius: 8px;
    background: #fff;
    color: #162033;
    font-weight: 600;
    cursor: pointer;
}

.career-applicant-option input {
    accent-color: #003366;
}

.career-conditional-field.is-hidden {
    display: none;
}

.career-form-popup {
    position: fixed;
    top: 92px;
    left: 50%;
    transform: translateX(-50%);
    width: min(92%, 620px);
    z-index: 9999;
}

.career-form-popup-card {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 18px 20px;
    border-radius: 12px;
    background: #ffffff;
    border: 1px solid #dbeafe;
    box-shadow: 0 22px 55px rgba(15, 23, 42, .18);
}

.career-form-popup.success .career-form-popup-card {
    border-color: #bbf7d0;
}

.career-form-popup.error .career-form-popup-card {
    border-color: #fecaca;
}

.career-form-popup-icon {
    width: 44px;
    height: 44px;
    border-radius: 10px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.career-form-popup.success .career-form-popup-icon {
    background: #dcfce7;
    color: #15803d;
}

.career-form-popup.error .career-form-popup-icon {
    background: #fee2e2;
    color: #b91c1c;
}

.career-form-popup-content {
    flex: 1;
}

.career-form-popup-content h3 {
    font-size: 18px;
    margin: 0 0 4px;
    color: #0f172a;
}

.career-form-popup-content p {
    margin: 0;
    color: #475569;
    line-height: 1.5;
}

.career-form-popup-close {
    border: 0;
    background: transparent;
    color: #64748b;
    font-size: 24px;
    line-height: 1;
    cursor: pointer;
}

.career-form-card .skill-row,
.career-form-card .ai-tool-row {
    align-items: center;
}

.career-form-card .btn-outline-danger {
    height: 48px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    line-height: 1;
}

.career-form-card .add-skill-btn,
.career-form-card .add-ai-tool-btn {
    border: 1px dashed #036;
    border-radius: 8px;
    color: #036;
    background: rgba(0, 51, 102, .04);
    font-weight: 700;
    padding: 9px 16px;
}

.career-form-card .add-skill-btn:hover,
.career-form-card .add-ai-tool-btn:hover {
    border-color: #036;
    color: #fff !important;
    background: #036;
}

.career-form-actions {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
    align-items: center;
    margin-top: 18px;
}

.career-submit-btn {
    background: #036;
    border: 1px solid #036;
    color: #fff;
    border-radius: 8px;
    min-height: 48px;
    padding: 12px 24px;
    font-weight: 700;
}

.career-submit-btn:hover {
    background: #036;
    color: #fff;
}

.career-back-link {
    color: #162033;
    border: 1px solid #d9e1ec;
    border-radius: 8px;
    min-height: 48px;
    padding: 12px 22px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    background: #fff;
}

.career-back-link:hover {
    color: #003366;
    border-color: #003366;
    background: rgb(0 51 102 / 12%);
}

@media (max-width: 991.98px) {
    .career-apply-shell {
        grid-template-columns: 1fr;
    }

    .career-apply-panel {
        position: static;
    }
}

@media (max-width: 767.98px) {
    .career-apply-hero {
        min-height: 360px;
    }

    .career-apply-hero h1 {
        font-size: 36px;
    }

    .career-apply-section {
        padding: 45px 0;
    }

    .career-form-card {
        padding: 24px 18px;
    }

    .career-form-card .skill-row,
    .career-form-card .ai-tool-row {
        flex-direction: column;
        align-items: stretch;
    }

    .career-form-card .remove-skill-btn,
    .career-form-card .remove-ai-tool-btn {
        width: 100% !important;
    }
}
</style>

<?php if ($formNotice): ?>
<div class="career-form-popup <?php echo jobApplicationValue($formNotice['status']); ?>" id="jobApplicationPopup"
    role="alert" aria-live="assertive">
    <div class="career-form-popup-card">
        <div class="career-form-popup-icon">
            <i class="fa <?php echo $formNotice['status'] === 'success' ? 'fa-circle-check' : 'fa-circle-exclamation'; ?>"></i>
        </div>
        <div class="career-form-popup-content">
            <h3><?php echo jobApplicationValue($formNotice['title']); ?></h3>
            <p><?php echo jobApplicationValue($formNotice['message']); ?></p>
        </div>
        <button type="button" class="career-form-popup-close" aria-label="Close popup"
            onclick="document.getElementById('jobApplicationPopup').style.display='none'">&times;</button>
    </div>
</div>
<?php endif; ?>

<section class="career-apply-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 pt-5">
                <span class="span">Careers at Technofra</span>
                <h1>Job Application Form</h1>
                <p>Share your details, skills, AI tool experience, resume, and portfolio. Our hiring team will review
                    your application and connect with you for the next steps.</p>
            </div>
        </div>
    </div>
</section>

<section class="career-apply-section">
    <div class="container">
        <div class="career-apply-shell">
            <aside class="career-apply-panel">
                <div class="about-company-subtitle">
                    <span>Apply Now</span>
                    <img src="assets/image/arrow-red.png" alt="Apply Now">
                </div>
                <h2>Build your next chapter with us.</h2>
                <p>Complete the application form carefully. Fields marked with an asterisk are required.</p>
                <ul>
                    <li><i class="fa fa-check"></i><span>Attach your latest resume or portfolio in PDF/DOCX format.</span></li>
                    <li><i class="fa fa-check"></i><span>Add your top skills with proficiency percentage.</span></li>
                    <li><i class="fa fa-check"></i><span>Mention AI tools you use in your daily workflow.</span></li>
                </ul>
            </aside>

            <div class="career-form-card" id="job-application-form">
                <form action="jobapplication-handler" method="post" enctype="multipart/form-data"
                    class="career-application-form">
                    <div class="row">
                        <div class="col-lg-6 mb-3 text-start">
                            <label for="name" class="form-label">Full Name<span class="required-mark">*</span></label>
                            <input type="text" class="form-control ca-two-border" name="fname" id="name"
                                value="<?php echo jobApplicationValue($formData['fname'] ?? ''); ?>" required>
                        </div>

                        <div class="col-lg-6 mb-3 text-start">
                            <label for="email" class="form-label">Email ID<span class="required-mark">*</span></label>
                            <input type="email" class="form-control ca-two-border" name="email" id="email"
                                value="<?php echo jobApplicationValue($formData['email'] ?? ''); ?>" required>
                        </div>

                        <div class="col-lg-6 mb-3 text-start">
                            <label for="phone" class="form-label">Contact Details<span class="required-mark">*</span></label>
                            <input type="tel" class="form-control ca-two-border" name="contact" id="phone"
                                value="<?php echo jobApplicationValue($formData['contact'] ?? ''); ?>" required>
                        </div>

                        <div class="col-lg-6 mb-3 text-start">
                            <label for="role" class="form-label">Select Job Roles<span class="required-mark">*</span></label>
                            <select name="role" id="role" class="form-control ca-two-border" required>
                                <option value="" disabled <?php echo (($formData['role'] ?? $selectedRole) === '') ? 'selected' : ''; ?>>Select roles</option>
                                <?php foreach ($roles as $role) : ?>
                                    <option value="<?php echo jobApplicationValue($role); ?>" <?php echo (($formData['role'] ?? $selectedRole) === $role) ? 'selected' : ''; ?>>
                                        <?php echo jobApplicationValue($role); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-lg-12 mb-3 text-start">
                            <label class="form-label">Applicant Type<span class="required-mark">*</span></label>
                            <?php $applicantType = $formData['applicant_type'] ?? ''; ?>
                            <div class="career-applicant-type">
                                <label class="career-applicant-option">
                                    <input type="radio" name="applicant_type" value="Fresher" <?php echo $applicantType === 'Fresher' ? 'checked' : ''; ?> required>
                                    Fresher
                                </label>
                                <label class="career-applicant-option">
                                    <input type="radio" name="applicant_type" value="Experience" <?php echo $applicantType === 'Experience' ? 'checked' : ''; ?> required>
                                    Experience
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-3 text-start career-conditional-field" data-experience-field>
                            <label class="form-label">Years Of Experience</label>
                            <input type="text" class="form-control ca-two-border" name="experience"
                                value="<?php echo jobApplicationValue($formData['experience'] ?? ''); ?>">
                        </div>

                        <div class="col-lg-6 mb-3 text-start career-conditional-field" data-experience-field>
                            <label class="form-label">Current CTC</label>
                            <input type="text" class="form-control ca-two-border" name="ctc"
                                value="<?php echo jobApplicationValue($formData['ctc'] ?? ''); ?>">
                        </div>

                        <div class="col-lg-6 mb-3 text-start">
                            <label class="form-label">Expected CTC</label>
                            <input type="text" class="form-control ca-two-border" name="ectc"
                                value="<?php echo jobApplicationValue($formData['ectc'] ?? ''); ?>">
                        </div>

                        <div class="col-lg-6 mb-3 text-start">
                            <label class="form-label">Location<span class="required-mark">*</span></label>
                            <input type="text" class="form-control ca-two-border" name="location"
                                value="<?php echo jobApplicationValue($formData['location'] ?? ''); ?>" required>
                        </div>

                        <div class="col-lg-12 mb-3 text-start">
                            <label class="form-label">Skills<span class="required-mark">*</span></label>
                            <p class="text-muted small mb-2">Add your skills and proficiency level for each</p>
                            <div class="skills-container">
                                <?php foreach ($skillRows as $index => $skillRow): ?>
                                <div class="skill-row d-flex gap-2 mb-2">
                                    <input type="text" class="form-control ca-two-border" name="skill_name[]"
                                        placeholder="Skill Name"
                                        value="<?php echo jobApplicationValue($skillRow['name'] ?? ''); ?>" required
                                        style="flex: 2;">
                                    <input type="number" class="form-control ca-two-border" name="skill_percentage[]"
                                        placeholder="% (e.g., 90)" min="0" max="100"
                                        value="<?php echo jobApplicationValue($skillRow['percentage'] ?? ''); ?>"
                                        required style="flex: 1;">
                                    <button type="button" class="btn btn-outline-danger remove-skill-btn"
                                        style="width: 48px;" title="Remove">x</button>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <button type="button" class="btn bt btn-outline-secondary btn-sm mt-2 add-skill-btn">
                                + Add Another Skill
                            </button>
                            <input type="hidden" name="skills_combined" class="skills-combined">
                        </div>

                        <div class="col-lg-12 mb-3 text-start">
                            <label class="form-label">AI Tools<span class="required-mark">*</span></label>
                            <p class="text-muted small mb-2">Add AI tools you use and your proficiency level for each</p>
                            <div class="ai-tools-container">
                                <?php foreach ($aiToolRows as $aiToolRow): ?>
                                <div class="ai-tool-row d-flex gap-2 mb-2">
                                    <input type="text" class="form-control ca-two-border" name="ai_tool_name[]"
                                        placeholder="AI Tool Name"
                                        value="<?php echo jobApplicationValue($aiToolRow['name'] ?? ''); ?>" required
                                        style="flex: 2;">
                                    <select class="form-control ca-two-border" name="ai_tool_level[]" required
                                        style="flex: 1;">
                                        <option value="">Select Level</option>
                                        <?php foreach (['Basic', 'Intermediate', 'Advanced', 'Expert'] as $level): ?>
                                        <option value="<?php echo jobApplicationValue($level); ?>" <?php echo (($aiToolRow['level'] ?? '') === $level) ? 'selected' : ''; ?>>
                                            <?php echo jobApplicationValue($level); ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <button type="button" class="btn btn-outline-danger remove-ai-tool-btn"
                                        style="width: 48px;" title="Remove">x</button>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <button type="button" class="btn bt btn-outline-secondary btn-sm mt-2 add-ai-tool-btn">
                                + Add Another AI Tool
                            </button>
                            <input type="hidden" name="ai_tools_combined" class="ai-tools-combined">
                        </div>

                        <div class="col-lg-6 mb-3 text-start">
                            <label class="form-label">Notice Period<span class="required-mark">*</span></label>
                            <input type="text" class="form-control ca-two-border" name="notice"
                                value="<?php echo jobApplicationValue($formData['notice'] ?? ''); ?>" required>
                        </div>

                        <div class="col-lg-6 mb-3 text-start">
                            <label class="form-label">Referrer Name</label>
                            <input type="text" class="form-control ca-two-border" name="rn"
                                value="<?php echo jobApplicationValue($formData['rn'] ?? ''); ?>">
                        </div>

                        <div class="col-lg-6 mb-3 text-start">
                            <label class="form-label">How did you hear about this job opening?<span class="required-mark">*</span></label>
                            <select name="refrence" class="form-control ca-two-border" required>
                                <?php foreach (['Please Select', 'Received a call from Technofra HR', 'Facebook', 'Instagram', 'LinkedIn', 'Google', 'Referred by a Friend', 'Other'] as $referenceOption): ?>
                                <option value="<?php echo jobApplicationValue($referenceOption); ?>" <?php echo (($formData['refrence'] ?? '') === $referenceOption) ? 'selected' : ''; ?>>
                                    <?php echo jobApplicationValue($referenceOption); ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-lg-6 mb-3 text-start">
                            <label for="file" class="form-label">Resume / Portfolio (.pdf/.docx only)<span class="required-mark">*</span></label>
                            <input type="file" class="form-control ca-two-border" id="file" name="file"
                                accept=".pdf,.doc,.docx" required>
                        </div>

                        <div class="col-lg-6 mb-3 text-start">
                            <label class="form-label">Portfolio Link (if any)</label>
                            <input type="text" class="form-control ca-two-border" name="link"
                                value="<?php echo jobApplicationValue($formData['link'] ?? ''); ?>">
                        </div>

                        <input type="text" name="hidden_field" style="display:none;" tabindex="-1">

                        <div class="col-12 mb-2">
                            <div class="g-recaptcha" data-sitekey="6LekpbEqAAAAANkc3FduPE52-p4Wqu5ghQFXjPhF"></div>
                        </div>

                        <div class="col-12 career-form-actions">
                            <button type="submit" class="career-submit-btn">Submit Application</button>
                            <a href="career.php" class="career-back-link">Back to Careers</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    function createRow(type) {
        const row = document.createElement('div');

        if (type === 'skill') {
            row.className = 'skill-row d-flex gap-2 mb-2';
            row.innerHTML =
                '<input type="text" class="form-control ca-two-border" name="skill_name[]" placeholder="Skill Name" required style="flex: 2;">' +
                '<input type="number" class="form-control ca-two-border" name="skill_percentage[]" placeholder="% (e.g., 90)" min="0" max="100" required style="flex: 1;">' +
                '<button type="button" class="btn btn-outline-danger remove-skill-btn" style="width: 48px;" title="Remove">x</button>';
            return row;
        }

        row.className = 'ai-tool-row d-flex gap-2 mb-2';
        row.innerHTML =
            '<input type="text" class="form-control ca-two-border" name="ai_tool_name[]" placeholder="AI Tool Name" required style="flex: 2;">' +
            '<select class="form-control ca-two-border" name="ai_tool_level[]" required style="flex: 1;">' +
            '<option value="">Select Level</option>' +
            '<option value="Basic">Basic</option>' +
            '<option value="Intermediate">Intermediate</option>' +
            '<option value="Advanced">Advanced</option>' +
            '<option value="Expert">Expert</option>' +
            '</select>' +
            '<button type="button" class="btn btn-outline-danger remove-ai-tool-btn" style="width: 48px;" title="Remove">x</button>';
        return row;
    }

    function initializeForm(form) {
        const skillsContainer = form.querySelector('.skills-container');
        const aiToolsContainer = form.querySelector('.ai-tools-container');
        const addSkillBtn = form.querySelector('.add-skill-btn');
        const addAiToolBtn = form.querySelector('.add-ai-tool-btn');
        const skillsCombinedInput = form.querySelector('.skills-combined');
        const aiToolsCombinedInput = form.querySelector('.ai-tools-combined');
        const applicantTypeInputs = form.querySelectorAll('input[name="applicant_type"]');
        const experienceFields = form.querySelectorAll('[data-experience-field]');

        function toggleExperienceFields() {
            const selectedType = form.querySelector('input[name="applicant_type"]:checked');
            const shouldHide = selectedType && selectedType.value === 'Fresher';

            experienceFields.forEach(function(field) {
                field.classList.toggle('is-hidden', shouldHide);
            });
        }

        applicantTypeInputs.forEach(function(input) {
            input.addEventListener('change', toggleExperienceFields);
        });

        toggleExperienceFields();

        if (addSkillBtn && skillsContainer) {
            addSkillBtn.addEventListener('click', function() {
                skillsContainer.appendChild(createRow('skill'));
            });
        }

        if (addAiToolBtn && aiToolsContainer) {
            addAiToolBtn.addEventListener('click', function() {
                aiToolsContainer.appendChild(createRow('ai-tool'));
            });
        }

        form.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-skill-btn') && skillsContainer) {
                const rows = skillsContainer.querySelectorAll('.skill-row');

                if (rows.length > 1) {
                    e.target.closest('.skill-row').remove();
                } else if (rows[0]) {
                    rows[0].querySelectorAll('input, select').forEach(function(field) {
                        field.value = '';
                    });
                }
            }

            if (e.target.classList.contains('remove-ai-tool-btn') && aiToolsContainer) {
                const rows = aiToolsContainer.querySelectorAll('.ai-tool-row');

                if (rows.length > 1) {
                    e.target.closest('.ai-tool-row').remove();
                } else if (rows[0]) {
                    rows[0].querySelectorAll('input, select').forEach(function(field) {
                        field.value = '';
                    });
                }
            }
        });

        form.addEventListener('submit', function() {
            const skillNames = form.querySelectorAll('input[name="skill_name[]"]');
            const skillPercentages = form.querySelectorAll('input[name="skill_percentage[]"]');
            const aiToolNames = form.querySelectorAll('input[name="ai_tool_name[]"]');
            const aiToolLevels = form.querySelectorAll('select[name="ai_tool_level[]"]');
            const skillsArray = [];
            const aiToolsArray = [];

            skillNames.forEach(function(input, index) {
                const percentageInput = skillPercentages[index];

                if (input.value && percentageInput && percentageInput.value) {
                    skillsArray.push(input.value + ' (' + percentageInput.value + '%)');
                }
            });

            aiToolNames.forEach(function(input, index) {
                const levelInput = aiToolLevels[index];

                if (input.value && levelInput && levelInput.value) {
                    aiToolsArray.push(input.value + ' - ' + levelInput.value);
                }
            });

            if (skillsCombinedInput) {
                skillsCombinedInput.value = skillsArray.join(', ');
            }

            if (aiToolsCombinedInput) {
                aiToolsCombinedInput.value = aiToolsArray.join(', ');
            }
        });
    }

    document.querySelectorAll('.career-application-form').forEach(function(form) {
        initializeForm(form);
    });
});
</script>
<script>
const jobApplicationPopup = document.getElementById('jobApplicationPopup');
if (jobApplicationPopup) {
    setTimeout(function() {
        jobApplicationPopup.style.display = 'none';
    }, 6000);
}
</script>

<?php include __DIR__ . '/footer.php'; ?>

