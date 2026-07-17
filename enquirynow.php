<?php
session_start();

$pageTitle = 'Enquiry Now | Technofra';
$bodyClass = 'enquiry-page';

$defaultEnquiryData = [
    'name' => '',
    'email' => '',
    'company' => '',
    'contact' => '',
    'designation' => '',
    'delivery_time' => '',
    'nature_of_project' => '',
    'message' => '',
];

$enquiryNotice = $_SESSION['enquiry_form_notice'] ?? null;
$enquiryData = $_SESSION['enquiry_form_data'] ?? $defaultEnquiryData;

unset($_SESSION['enquiry_form_notice'], $_SESSION['enquiry_form_data']);

function enquiryValue($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

include __DIR__ . '/header.php';
?>

<style>
    .enquiry-status-popup {
        position: fixed;
        top: 92px;
        left: 50%;
        transform: translateX(-50%);
        width: min(92%, 620px);
        z-index: 9999;
    }

    .enquiry-status-popup-card {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        padding: 18px 20px;
        border-radius: 12px;
        background: #ffffff;
        border: 1px solid #dbeafe;
        box-shadow: 0 22px 55px rgba(15, 23, 42, 0.18);
    }

    .enquiry-status-popup.success .enquiry-status-popup-card {
        border-color: #bbf7d0;
    }

    .enquiry-status-popup.error .enquiry-status-popup-card {
        border-color: #fecaca;
    }

    .enquiry-status-popup-icon {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .enquiry-status-popup.success .enquiry-status-popup-icon {
        background: #dcfce7;
        color: #15803d;
    }

    .enquiry-status-popup.error .enquiry-status-popup-icon {
        background: #fee2e2;
        color: #b91c1c;
    }

    .enquiry-status-popup-content {
        flex: 1;
    }

    .enquiry-status-popup-content h3 {
        font-size: 18px;
        margin: 0 0 4px;
        color: #0f172a;
    }

    .enquiry-status-popup-content p {
        margin: 0;
        color: #475569;
        line-height: 1.5;
    }

    .enquiry-status-popup-close {
        border: 0;
        background: transparent;
        color: #64748b;
        font-size: 24px;
        line-height: 1;
        cursor: pointer;
    }

    .enquiry-wrap {
        background: linear-gradient(180deg, #f7fbff 0%, #ffffff 100%);
    }

    .enquiry-side-card,
    .enquiry-form-card {
        height: 100%;
        padding: 28px;
        border-radius: 28px;
        background: #ffffff;
        border: 1px solid rgba(15, 23, 42, 0.08);
        box-shadow: 0 24px 60px rgba(15, 23, 42, 0.08);
    }

    .enquiry-side-card h2,
    .enquiry-form-card h2 {
        font-size: 30px;
        line-height: 1.2;
        margin-bottom: 12px;
    }

    .enquiry-side-card p,
    .enquiry-form-card p,
    .enquiry-contact-item p {
        color: #475569;
        line-height: 1.75;
    }

    .enquiry-highlight-list,
    .enquiry-contact-list {
        display: grid;
        gap: 16px;
        margin-top: 24px;
    }

    .enquiry-highlight-item,
    .enquiry-contact-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        padding: 16px 18px;
        border-radius: 20px;
        background: #f8fbff;
        border: 1px solid rgba(15, 23, 42, 0.06);
    }

    .enquiry-icon {
        width: 48px;
        height: 48px;
        border-radius: 16px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: rgba(0, 51, 102, 0.08);
        color: #003366;
        flex-shrink: 0;
    }

    .enquiry-highlight-item h3,
    .enquiry-contact-item h4 {
        font-size: 18px;
        margin-bottom: 6px;
    }

    .enquiry-social-list {
        display: flex;
        gap: 10px;
        padding: 0;
        margin: 8px 0 0;
        list-style: none;
    }

    .enquiry-social-list a {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #003366;
        color: #fff;
    }

    .enquiry-form {
        display: grid;
        gap: 16px;
    }

    .enquiry-form-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 16px;
    }

    .enquiry-field-full {
        grid-column: 1 / -1;
    }

    .enquiry-form label,
    .enquiry-field-title {
        display: block;
        margin-bottom: 8px;
        color: #0f172a;
        font-size: 14px;
        font-weight: 700;
    }

    .enquiry-form input,
    .enquiry-form select,
    .enquiry-form textarea {
        width: 100%;
        min-height: 54px;
        padding: 14px 16px;
        border-radius: 16px;
        border: 1px solid rgba(15, 23, 42, 0.12);
        background: #fff;
        color: #0f172a;
    }

    .enquiry-form textarea {
        min-height: 150px;
        resize: vertical;
    }

    .enquiry-choice-group {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
    }

    .enquiry-choice {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        min-height: 46px;
        padding: 10px 16px;
        border: 1px solid #d9e1ec;
        border-radius: 999px;
        background: #fff;
        color: #162033;
        font-weight: 600;
        cursor: pointer;
    }

    .enquiry-choice input {
        width: 18px;
        min-height: 18px;
        padding: 0;
        margin: 0;
        border: 0;
        border-radius: 0;
        background: transparent;
        box-shadow: none;
        flex: 0 0 18px;
        accent-color: #003366;
    }

    .enquiry-choice:has(input:checked) {
        border-color: #003366;
        background: #eef5ff;
        color: #003366;
        box-shadow: 0 0 0 2px rgba(0, 51, 102, 0.08);
    }

    .enquiry-choice:has(input:checked) span {
        color: #003366;
    }

    .enquiry-note {
        color: #64748b;
        line-height: 1.6;
        margin-bottom: 0;
    }

    .enquiry-captcha-box {
        transform-origin: left top;
    }

    @media (max-width: 991px) {

        .enquiry-side-card,
        .enquiry-form-card {
            border-radius: 24px;
        }
    }

    @media (max-width: 767px) {
        .enquiry-form-grid {
            grid-template-columns: 1fr;
        }

        .enquiry-side-card,
        .enquiry-form-card {
            padding: 22px;
        }

        .enquiry-captcha-box {
            transform: scale(0.92);
        }
    }

    h1,
    .h1,
    h2,
    .h2,
    h3,
    .h3,
    h4,
    .h4,
    h5,
    .h5,
    h6,
    .h6 {
        letter-spacing: normal;
    }
</style>

<?php if ($enquiryNotice): ?>
    <div class="enquiry-status-popup <?php echo enquiryValue($enquiryNotice['status']); ?>" id="enquiryStatusPopup" role="alert" aria-live="assertive">
        <div class="enquiry-status-popup-card">
            <div class="enquiry-status-popup-icon">
                <i class="fa <?php echo $enquiryNotice['status'] === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'; ?>"></i>
            </div>
            <div class="enquiry-status-popup-content">
                <h3><?php echo enquiryValue($enquiryNotice['title']); ?></h3>
                <p><?php echo enquiryValue($enquiryNotice['message']); ?></p>
            </div>
            <button type="button" class="enquiry-status-popup-close" aria-label="Close popup" onclick="document.getElementById('enquiryStatusPopup').style.display='none'">&times;</button>
        </div>
    </div>
<?php endif; ?>

<section class="page-banner9">
    <div class="staff-text">Enquiry</div>
    <div class="container">
        <div class="page-content">
            <h1 class="title">Enquiry Now</h1>
        </div>
    </div>
</section>

<section class="ibt-section-gap enquiry-wrap" id="enquiryForm">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-5">
                <div class="enquiry-side-card">
                    <div class="sec-title">
                        <span class="sub-title">Start Your Enquiry</span>
                        <h2 class="title animated-heading">Share your enquiry and get the right direction</h2>
                        <p>We use your submission to understand your business needs, service interest, and priorities so we can connect you with the most suitable team and solution from the start.</p>
                    </div>

                    <div class="enquiry-highlight-list">
                        <div class="enquiry-highlight-item">
                            <span class="enquiry-icon"><i class="fa fa-clock"></i></span>
                            <div>
                                <h3>Faster response</h3>
                                <p>Clear enquiry details help our team understand your requirement quickly and respond with the right assistance.</p>
                            </div>
                        </div>
                        <div class="enquiry-highlight-item">
                            <span class="enquiry-icon"><i class="fa fa-comments"></i></span>
                            <div>
                                <h3>Direct communication</h3>
                                <p>You can discuss your requirement, service expectations, and next steps directly with our team.</p>
                            </div>
                        </div>
                    </div>

                    <div class="enquiry-contact-list">
                        <div class="enquiry-contact-item">
                            <span class="enquiry-icon"><i class="fa fa-map-marker"></i></span>
                            <div>
                                <h4>Office Address</h4>
                                <p>Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali West, Mumbai 400067, Maharashtra, India.</p>
                            </div>
                        </div>
                        <div class="enquiry-contact-item">
                            <span class="enquiry-icon"><i class="fa fa-phone"></i></span>
                            <div>
                                <h4>Call Us</h4>
                                <p>Sales: <a href="tel:+918080803374">+91 8080 80 3374</a> / <a href="tel:+918080803375">+91 8080 80 3375</a></p>
                                <p>Support: <a href="tel:+918080621003">+91 8080 62 1003</a> / <a href="tel:+918080721003">+91 8080 72 1003</a></p>
                            </div>
                        </div>
                        <div class="enquiry-contact-item">
                            <span class="enquiry-icon"><i class="fa fa-envelope"></i></span>
                            <div>
                                <h4>Email Us</h4>
                                <p>Sales: <a href="mailto:info@technofra.com">info@technofra.com</a></p>
                                <p>Support: <a href="mailto:support@technofra.com">support@technofra.com</a></p>
                            </div>
                        </div>
                        <div class="enquiry-contact-item">
                            <span class="enquiry-icon"><i class="fa fa-share-alt"></i></span>
                            <div>
                                <h4>Connect With Us</h4>
                                <ul class="enquiry-social-list">
                                    <li><a href="https://www.facebook.com/Technofra/" aria-label="Facebook" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/technofra.company/" aria-label="Instagram" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://x.com/Technofra_" aria-label="X" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://hk.linkedin.com/company/technofra" aria-label="LinkedIn" target="_blank" rel="noopener"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="enquiry-form-card">
                    <div class="sec-title">
                        <span class="sub-title">enquiry form</span>
                        <h2 class="title animated-heading">Send your enquiry</h2>
                        <p>Complete the form below with accurate details so our team can review your enquiry properly and respond with relevant information.</p>
                    </div>

                    <form action="enquiry-handler" class="enquiry-form" method="post">
                        <div class="enquiry-form-grid">
                            <div>
                                <label for="quoteName">Full Name <span class="text-danger">*</span></label>
                                <input type="text" id="quoteName" name="name" placeholder="Enter your full name" autocomplete="name" required value="<?php echo enquiryValue($enquiryData['name'] ?? ''); ?>">
                            </div>

                            <div>
                                <label for="quoteEmail">Work Email <span class="text-danger">*</span></label>
                                <input type="email" id="quoteEmail" name="email" placeholder="Enter your email address" autocomplete="email" required value="<?php echo enquiryValue($enquiryData['email'] ?? ''); ?>">
                            </div>

                            <div>
                                <label for="quoteCompany">Company / Business Name <span class="text-danger">*</span></label>
                                <input type="text" id="quoteCompany" name="company" placeholder="Enter your company name" autocomplete="organization" required value="<?php echo enquiryValue($enquiryData['company'] ?? ''); ?>">
                            </div>

                            <div>
                                <label for="quoteContact">Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" id="quoteContact" name="contact" placeholder="Enter your 10-digit mobile number" inputmode="numeric" required value="<?php echo enquiryValue($enquiryData['contact'] ?? ''); ?>">
                            </div>

                            <div>
                                <label for="quoteService">Service Interested In <span class="text-danger">*</span></label>
                                <select id="quoteService" name="designation" required>
                                    <option value="" disabled <?php echo ($enquiryData['designation'] ?? '') === '' ? 'selected' : ''; ?>>Select a service</option>
                                    <?php foreach (['Web Development' => 'Web & App Development', 'eCommerce Development' => 'eCommerce Development', 'Branding' => 'Branding', 'Digital Marketing' => 'Digital Marketing', 'Social Media Marketing' => 'Social Media Marketing'] as $value => $label): ?>
                                        <option value="<?php echo enquiryValue($value); ?>" <?php echo ($enquiryData['designation'] ?? '') === $value ? 'selected' : ''; ?>><?php echo enquiryValue($label); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div>
                                <label for="quoteTimeline">Preferred Timeline <span class="text-danger">*</span></label>
                                <select id="quoteTimeline" name="delivery_time" required>
                                    <option value="" disabled <?php echo ($enquiryData['delivery_time'] ?? '') === '' ? 'selected' : ''; ?>>Select a timeline</option>
                                    <?php foreach (['1 - 2 weeks', '4 - 5 weeks', '5 - 10 weeks', '10+ weeks'] as $timeline): ?>
                                        <option value="<?php echo enquiryValue($timeline); ?>" <?php echo ($enquiryData['delivery_time'] ?? '') === $timeline ? 'selected' : ''; ?>><?php echo enquiryValue($timeline); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="enquiry-field-full">
                                <span class="enquiry-field-title">Enquiry Type <span class="text-danger">*</span></span>
                                <div class="enquiry-choice-group">
                                    <?php foreach (['New' => 'New Requirement', 'Redesign' => 'Upgrade / Redesign', 'Development' => 'Support / Ongoing Work'] as $value => $label): ?>
                                        <label class="enquiry-choice">
                                            <input type="radio" name="nature_of_project" value="<?php echo enquiryValue($value); ?>" <?php echo ($enquiryData['nature_of_project'] ?? '') === $value ? 'checked' : ''; ?> required>
                                            <span><?php echo enquiryValue($label); ?></span>
                                        </label>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="enquiry-field-full">
                                <label for="quoteMessage">Enquiry Details <span class="text-danger">*</span></label>
                                <textarea id="quoteMessage" name="message" placeholder="Tell us about your requirement, goals, preferred service, or any specific details you want to share." required><?php echo enquiryValue($enquiryData['message'] ?? ''); ?></textarea>
                            </div>
                        </div>

                        <input type="text" name="hidden_field" style="display:none;" tabindex="-1" autocomplete="off">

                        <div class="enquiry-captcha-box">
                            <div class="g-recaptcha" data-sitekey="6LekpbEqAAAAANkc3FduPE52-p4Wqu5ghQFXjPhF"></div>
                        </div>

                        <p class="enquiry-note">Please ensure the details are accurate so our team can review your enquiry and respond with the right next steps.</p>

                        <button type="submit" class="ibt-btn ibt-btn-outline">
                            <span>Submit Enquiry</span>
                            <i class="icon-arrow-top"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    window.addEventListener('load', function() {
        var popup = document.getElementById('enquiryStatusPopup');
        if (popup) {
            window.setTimeout(function() {
                popup.style.display = 'none';
            }, 5000);
        }
    });
</script>

<?php include __DIR__ . '/footer.php'; ?>