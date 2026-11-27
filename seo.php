<?php
$pageTitle = 'SEO Agency in Mumbai | SEO Services Company | Technofra';
$metaDescription = 'Looking for the best SEO agency in Mumbai? Technofra provides results-driven SEO services to improve rankings, organic traffic, leads and online visibility.';
$metaKeywords = ''; // meta keywords tag intentionally not output (search engines ignore it)
$bodyClass = 'hero-video-page';
$ogImage = 'https://technofra.com/assets/images/new/best-digital-marketing-agency-in-mumbai-team.webp'; // TODO: replace with a 1200x630 image for this page when ready

// FAQ content: rendered in the accordion AND reused for FAQPage structured data so they always match
// [question, plain answer (used in schema), optional HTML answer with links]
$pgFaqs = [
    ['What SEO services does Technofra provide in Mumbai?',
     'Technofra provides keyword research, technical SEO, on-page SEO, local SEO, content SEO, off-page SEO, link building, SEO audits, and performance reporting.'],
    ['Why should I choose an SEO agency in Mumbai?',
     'Working with an SEO agency in Mumbai can be useful for businesses targeting customers in Mumbai because the strategy can be tailored to local search behavior, competition, locations, and customer intent.'],
    ['How long does SEO take to show results?',
     'SEO is a long-term marketing channel. Results vary depending on competition, website condition, authority, content quality, target keywords, and the level of SEO implementation. Many businesses begin seeing measurable movement within several months.'],
    ['Do you provide local SEO services in Mumbai?',
     'Yes. Our local SEO services can help Mumbai-based businesses improve their visibility for location-based searches through Google Business Profile optimization, local landing pages, citations, reviews, and local keyword targeting.'],
    ['Can you optimize an existing website?',
     'Yes. We can audit and optimize existing websites by improving technical SEO, page structure, content, metadata, internal linking, keyword targeting, and other important SEO elements.'],
    ['How do you measure SEO performance?',
     'We monitor relevant rankings, organic traffic, landing-page performance, conversions, and other SEO metrics to understand how the campaign is contributing to business growth.'],
    ['How much does SEO cost in Mumbai?',
     'SEO pricing depends on the size of your website, how competitive your keywords are, the locations you target, and how much content and link building is needed. We prepare custom plans after understanding your goals and reviewing your site, rather than selling one fixed package. Contact us and we\'ll explain what a plan for your business would involve.'],
    ['Do you guarantee first-page rankings?',
     'No. Nobody can honestly guarantee rankings, because search engines decide them and the results change often. What we commit to is clear work: a thorough audit, a keyword plan, technical and on-page fixes, useful content, ethical link building, and regular reporting, so you can see what was done and how your visibility is moving.'],
    ['What is included in an SEO audit?',
     'Our SEO audit reviews technical issues, crawling and indexing, page speed and mobile usability, on-page elements, content gaps, keyword opportunities, backlinks, and competitor gaps. You receive the findings along with a priority list of fixes, so you know what to tackle first and why it matters for your organic performance.'],
    ['SEO or PPC: which should I choose?',
     'It depends on your goal and timeline. PPC can bring visitors soon after launch but stops when the budget stops, while SEO takes longer to build and can keep attracting visitors without a cost per click. Many businesses use both. Our PPC team can help you plan the right mix alongside SEO.',
     'It depends on your goal and timeline. PPC can bring visitors soon after launch but stops when the budget stops, while SEO takes longer to build and can keep attracting visitors without a cost per click. Many businesses use both. Our <a class="in" href="ppc.php">PPC services in Mumbai</a> team can help you plan the right mix alongside SEO.'],
    ['How do I choose an SEO agency in Mumbai?',
     'Ask how they plan to work on your site, who handles it, and how they report progress. Be careful with anyone who guarantees rankings or won\'t explain their methods. Look for ethical link building, clear reporting, relevant experience, and a strategy built around your business goals rather than a generic checklist.'],
];

// Areas shown in the local section. Edit this list to match the places you really serve.
$pgAreas = ['Kandivali', 'Borivali', 'Malad', 'Goregaon', 'Andheri', 'Powai'];

// Real proof (case studies / results). Leave empty and the section stays hidden. Fill in REAL figures only, e.g.:
// $pgProof = [['metric' => 'Real figure', 'title' => 'Client or project', 'text' => 'What was done and what changed']];

$pgProof = [];

$pgServices = ['On-Page SEO', 'Technical SEO', 'Local SEO', 'Keyword Research and Strategy', 'Content SEO', 'Off-Page SEO and Link Building', 'SEO Audit', 'SEO Reporting and Performance Tracking'];
$pgFaqEntities = [];
foreach ($pgFaqs as $pgF) {
    $pgFaqEntities[] = ['@type' => 'Question', 'name' => $pgF[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $pgF[1]]];
}
$pgOffers = [];
foreach ($pgServices as $pgS) {
    $pgOffers[] = ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $pgS]];
}
$pgUrl = 'https://technofra.com/seo';
$pgSchema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        ['@type' => 'ProfessionalService', '@id' => 'https://technofra.com/#organization', 'name' => 'Technofra', 'url' => 'https://technofra.com', 'logo' => 'https://technofra.com/assets/images/new/logo.png', 'image' => $ogImage, 'telephone' => '+918080803374', 'email' => 'info@technofra.com',
            'address' => ['@type' => 'PostalAddress', 'streetAddress' => 'Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West)', 'addressLocality' => 'Mumbai', 'addressRegion' => 'Maharashtra', 'postalCode' => '400067', 'addressCountry' => 'IN'],
            'areaServed' => ['@type' => 'City', 'name' => 'Mumbai'],
            'sameAs' => ['https://www.facebook.com/technofra/', 'https://x.com/Technofra_', 'https://www.linkedin.com/company/technofra/', 'https://youtube.com/@technofra', 'https://www.instagram.com/technofra.company/']],
        ['@type' => 'WebPage', '@id' => $pgUrl . '#webpage', 'url' => $pgUrl, 'name' => $pageTitle, 'description' => $metaDescription, 'about' => ['@id' => $pgUrl . '#service']],
        ['@type' => 'Service', '@id' => $pgUrl . '#service', 'name' => 'SEO Services in Mumbai', 'serviceType' => 'Search Engine Optimization', 'url' => $pgUrl, 'description' => $metaDescription, 'areaServed' => ['@type' => 'City', 'name' => 'Mumbai'], 'provider' => ['@id' => 'https://technofra.com/#organization'], 'hasOfferCatalog' => ['@type' => 'OfferCatalog', 'name' => 'SEO Services Services', 'itemListElement' => $pgOffers]],
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://technofra.com/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'SEO Agency in Mumbai', 'item' => $pgUrl],
        ]],
        ['@type' => 'FAQPage', 'mainEntity' => $pgFaqEntities],
    ],
];
$pgFlags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG;
$extraHead = '<meta name="twitter:card" content="summary_large_image">'
    . '<meta name="twitter:title" content="' . htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') . '">'
    . '<meta name="twitter:description" content="' . htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8') . '">'
    . '<meta name="twitter:image" content="' . htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') . '">'
    . '<script type="application/ld+json">' . json_encode($pgSchema, $pgFlags) . '</script>';
$forceBlackHeader = true; // light hero: use dark logo + dark header button
$extraHead = ($extraHead ?? '') . '<link rel="preload" as="image" href="./assets/images/about/hero-dashboard3.webp" fetchpriority="high">';
include __DIR__ . '/header.php';
?>
<style>
/* =========================================================
   SOCIAL MEDIA MARKETING — compact premium layout (scoped to .sx)
   Light hero (matches live site) · no auto-sliders · tabbed services
   ========================================================= */
/* header on light hero: keep icons/top bar readable */
.hero-video-page .vs-header4 .header-top-content4{background-color:rgba(25,52,99,.42)}

.sx{--p:#36c5f3;--pt:#0b86b3;--b:#193463;--v:#6d5df6;--navy:#0b1b3d;--ink:#14264a;--muted:#55607a;--soft:#f3f8fe;--line:#dcebf7;
    font-family:var(--font-secondary,'Manrope',system-ui,-apple-system,'Segoe UI',sans-serif);color:var(--ink);line-height:1.6;overflow-x:clip;background:#fff}
.sx *,.sx *::before,.sx *::after{box-sizing:border-box}
.sx h1,.sx h2,.sx h3{font-family:var(--font-primary,'Sora',system-ui,sans-serif);margin:0;letter-spacing:-.03em;line-height:1.16;color:inherit;font-weight:800}
.sx p{margin:0}
.sx a{text-decoration:none}
.sx img{max-width:100%;height:auto;display:block}
.sx ul,.sx ol{list-style:none;margin:0;padding:0}
.sx li{margin:0}
.sx-wrap{width:100%;max-width:1240px;margin:0 auto;padding:0 clamp(1rem,.4rem + 2.6vw,2rem)}
.sx-sec{position:relative;padding:clamp(2.8rem,1.8rem + 3.4vw,4.6rem) 0}
.sx-eyebrow{display:inline-flex;align-items:center;gap:.6rem;font-size:.76rem;font-weight:800;letter-spacing:.16em;text-transform:uppercase;color:var(--pt)}
.sx-eyebrow::before{content:"";width:30px;height:2px;border-radius:2px;background:linear-gradient(90deg,var(--p),var(--v))}
.sx-h2{font-size:clamp(1.7rem,1.1rem + 2vw,2.6rem);margin-top:.7rem}
.sx-h2.sm{font-size:clamp(1.5rem,1.05rem + 1.4vw,2.1rem)}
.sx-lead{font-size:clamp(.98rem,.94rem + .2vw,1.06rem);color:var(--muted);line-height:1.8;margin-top:.9rem}
.sx-lead a,.sx a.in{color:var(--pt);font-weight:700;border-bottom:2px solid rgba(54,197,243,.35)}
.sx-lead a:hover,.sx a.in:hover{color:var(--b)}
.sx-grad{background:linear-gradient(90deg,#0b86b3,#6d5df6,#0b86b3);background-size:200% auto;-webkit-background-clip:text;background-clip:text;color:transparent;animation:sxShine 7s linear infinite}
.sx-dark .sx-grad,.sx-grad.lt{background-image:linear-gradient(90deg,#7fd9f8,#b8adff,#7fd9f8)}
.sx-head{max-width:780px;margin:0 auto clamp(1.6rem,1.2rem + 1.4vw,2.4rem);text-align:center}
.sx-ico{flex:none;width:48px;height:48px;border-radius:15px;display:grid;place-items:center;color:#fff;font-size:1.05rem;background:linear-gradient(135deg,var(--p),var(--b));box-shadow:0 10px 24px rgba(54,197,243,.32)}

/* buttons */
.sx-btn{position:relative;overflow:hidden;display:inline-flex;align-items:center;gap:.7rem;padding:.95rem 1.6rem;border-radius:999px;font-weight:700;font-size:.97rem;color:#fff;border:0;cursor:pointer;
    background:linear-gradient(135deg,#1597c9 0%,#193463 100%);box-shadow:0 14px 30px rgba(25,52,99,.3);transition:transform .3s,box-shadow .3s}
.sx-btn::after{content:"";position:absolute;inset:0;background:linear-gradient(110deg,transparent 30%,rgba(255,255,255,.45) 50%,transparent 70%);transform:translateX(-130%);transition:transform .8s}
.sx-btn:hover{transform:translateY(-3px);box-shadow:0 20px 42px rgba(54,197,243,.45);color:#fff}
.sx-btn:hover::after{transform:translateX(130%)}
.sx-btn i{transition:transform .3s}
.sx-btn:hover i{transform:translateX(4px)}
.sx-btn-line{background:#fff;color:var(--b);border:1.5px solid #cfe3f3;box-shadow:0 10px 24px rgba(25,52,99,.08)}
.sx-btn-line:hover{color:var(--b);border-color:var(--p)}
.sx-btn-white{background:#fff;color:#193463;box-shadow:0 14px 32px rgba(6,16,40,.25)}
.sx-btn-white:hover{color:var(--pt)}
.sx-btn-ghost{background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.35);box-shadow:none}
.sx-btn-ghost:hover{background:rgba(255,255,255,.18);box-shadow:none}
.sx-actions{display:flex;flex-wrap:wrap;gap:.8rem;margin-top:1.6rem}

/* reveal */
.sx-js .sx-reveal{opacity:0;transform:translateY(26px);transition:opacity .8s cubic-bezier(.2,.7,.2,1),transform .8s cubic-bezier(.2,.7,.2,1);transition-delay:var(--d,0s)}
.sx-js .sx-reveal.is-in{opacity:1;transform:none}
.sx-progress{position:fixed;top:0;left:0;height:3px;width:0;background:linear-gradient(90deg,#36c5f3,#6d5df6);z-index:99999}

/* ================= HERO (light, like live site) ================= */
.sx-hero{position:relative;overflow:hidden;padding:clamp(9rem,7.5rem + 4vw,11.5rem) 0 clamp(2rem,1.5rem + 2vw,3rem);
    background:radial-gradient(700px 480px at 78% 30%,rgba(109,93,246,.16),transparent 65%),radial-gradient(600px 420px at 95% 85%,rgba(236,72,153,.09),transparent 65%),radial-gradient(700px 500px at 0% 0%,rgba(54,197,243,.14),transparent 60%),linear-gradient(180deg,#f6f4ff 0%,#f1f7ff 100%)}
.sx-hero::before{content:"";position:absolute;inset:0;pointer-events:none;background-image:radial-gradient(rgba(25,52,99,.08) 1.2px,transparent 1.2px);background-size:28px 28px;-webkit-mask-image:radial-gradient(ellipse 60% 60% at 30% 40%,#000,transparent 75%);mask-image:radial-gradient(ellipse 60% 60% at 30% 40%,#000,transparent 75%)}
.sx-hero-grid{position:relative;z-index:2;display:grid;grid-template-columns:1.05fr .95fr;gap:clamp(1.5rem,3vw,3rem);align-items:center}
.sx-badge{display:inline-flex;align-items:center;gap:.6rem;padding:.5rem 1rem;border-radius:999px;font-size:.84rem;font-weight:700;color:#4b3fd1;background:rgba(109,93,246,.1);border:1px solid rgba(109,93,246,.18)}
.sx-dot{width:8px;height:8px;border-radius:50%;background:#6d5df6;box-shadow:0 0 0 0 rgba(109,93,246,.6);animation:sxPing 2s infinite}
.sx-hero h1{font-size:clamp(2rem,1.1rem + 2.7vw,3.35rem);margin:1.1rem 0 1rem;color:#12152e;letter-spacing:-.035em}
.sx-hero h1 .ln{display:block}
.sx-hero-desc{font-size:clamp(.98rem,.94rem + .22vw,1.08rem);color:#55607a;line-height:1.8;max-width:58ch}
.sx-checks{display:grid;grid-template-columns:repeat(2,auto);justify-content:start;gap:.55rem 1.8rem;margin-top:1.5rem}
.sx-checks li{display:flex;align-items:center;gap:.55rem;font-weight:700;font-size:.92rem;color:#2a3352}
.sx-checks i{color:#6d5df6}
.sx-hero-visual{position:relative;display:grid;place-items:center;min-width:0}
.sx-hero-visual::before{content:"";position:absolute;width:78%;aspect-ratio:1;border-radius:50%;background:conic-gradient(from 0deg,rgba(109,93,246,.28),rgba(54,197,243,.28),rgba(236,72,153,.18),rgba(109,93,246,.28));filter:blur(50px);animation:sxSpin 18s linear infinite}
.sx-hero-img{position:relative;z-index:2;width:100%;max-width:560px;animation:sxFloat 7s ease-in-out infinite}
.sx-hero-img img{width:100%;height:auto;transform:translate3d(calc(var(--px,0)*14px),calc(var(--py,0)*12px),0);transition:transform .25s ease-out}
/* stats bar inside hero */
.sx-stats{position:relative;z-index:3;display:grid;grid-template-columns:repeat(4,1fr);gap:.4rem;margin-top:clamp(1.6rem,1rem + 2vw,2.6rem);padding:.7rem;border-radius:26px;background:rgba(255,255,255,.78);-webkit-backdrop-filter:blur(16px);backdrop-filter:blur(16px);border:1px solid #fff;box-shadow:0 26px 60px rgba(25,52,99,.12)}
.sx-st{display:flex;align-items:center;gap:.85rem;padding:.85rem 1rem;border-radius:18px;transition:background .3s}
.sx-st:hover{background:#f3f1ff}
.sx-st .sx-ico{width:44px;height:44px;border-radius:14px;font-size:.95rem;background:linear-gradient(135deg,#6d5df6,#36c5f3)}
.sx-st b{display:block;font-family:var(--font-primary,'Sora',sans-serif);font-size:1.45rem;font-weight:800;letter-spacing:-.03em;line-height:1.05;color:#12152e}
.sx-st span.l{display:block;margin-top:.15rem;font-size:.82rem;font-weight:600;color:var(--muted);line-height:1.3}
.sx-in{animation:sxIn .9s cubic-bezier(.2,.7,.2,1) both}

/* ================= ABOUT (intro + basics) ================= */
.sx-about{display:grid;grid-template-columns:.92fr 1.08fr;gap:clamp(1.8rem,4vw,4rem);align-items:center}
.sx-about-visual{position:relative}
.sx-about-visual::before{content:"";position:absolute;inset:6% 6% -4% 6%;border-radius:40px;background:linear-gradient(135deg,rgba(54,197,243,.25),rgba(109,93,246,.25));filter:blur(36px)}
.sx-about-visual img{position:relative;width:100%;border-radius:30px;box-shadow:0 30px 70px rgba(25,52,99,.22)}
.sx-about-visual .tag{position:absolute;z-index:2;left:-.8rem;bottom:1.4rem;display:flex;align-items:center;gap:.7rem;padding:.75rem 1rem;border-radius:18px;background:#fff;box-shadow:0 18px 40px rgba(25,52,99,.18);animation:sxBob 5.5s ease-in-out infinite}
.sx-about-visual .tag b{display:block;font-family:var(--font-primary,'Sora',sans-serif);font-size:1.3rem;line-height:1;color:var(--ink)}
.sx-about-visual .tag div span{font-size:.76rem;font-weight:600;color:var(--muted)}
.sx-body p+p{margin-top:.9rem}
.sx-answer{position:relative;margin-top:clamp(1.6rem,1.2rem + 1.4vw,2.4rem);display:grid;grid-template-columns:1.1fr .9fr;gap:1.4rem 2.4rem;padding:clamp(1.4rem,1rem + 1.4vw,2.2rem);border-radius:28px;background:linear-gradient(135deg,#fff,#f4f2ff);border:1px solid #e4e0fb;box-shadow:0 20px 50px rgba(25,52,99,.08)}
.sx-answer::before{content:"";position:absolute;left:0;top:18px;bottom:18px;width:5px;border-radius:5px;background:linear-gradient(180deg,#36c5f3,#6d5df6)}
.sx-answer h2{font-size:clamp(1.25rem,1rem + .8vw,1.6rem)}
.sx-answer .ans{margin-top:.7rem;color:var(--ink);font-weight:600;line-height:1.75}
.sx-answer .sx-lead{margin-top:.8rem;font-size:.97rem}
.sx-do{display:grid;gap:.55rem;align-content:center}
.sx-do li{display:flex;align-items:center;gap:.8rem;padding:.7rem .9rem;border-radius:14px;background:#fff;border:1px solid var(--line);font-size:.93rem;font-weight:600;color:var(--muted);transition:transform .3s,border-color .3s,box-shadow .3s}
.sx-do li b{color:var(--ink)}
.sx-do li i{flex:none;width:30px;height:30px;border-radius:10px;display:grid;place-items:center;font-size:.78rem;color:#fff;background:linear-gradient(135deg,var(--p),var(--v))}
.sx-do li:hover{transform:translateX(6px);border-color:rgba(109,93,246,.4);box-shadow:0 12px 26px rgba(25,52,99,.1)}

/* ================= SERVICES (tabs, no sliding) ================= */
.sx-dark{color:#fff;background:radial-gradient(800px 420px at 10% 0%,rgba(54,197,243,.32),transparent 60%),radial-gradient(700px 420px at 100% 100%,rgba(109,93,246,.3),transparent 60%),#0b1b3d;overflow:hidden}
.sx-dark .sx-eyebrow{color:#8fe0fa}
.sx-dark .sx-lead{color:rgba(255,255,255,.74)}
.sx-dark .sx-lead a,.sx-dark a.in{color:#8fe0fa;border-bottom-color:rgba(143,224,250,.45)}
.sx-dark::after{content:"";position:absolute;inset:0;pointer-events:none;background-image:radial-gradient(rgba(255,255,255,.06) 1.2px,transparent 1.2px);background-size:30px 30px}
.sx-dark .sx-wrap{position:relative;z-index:2}
.sx-svc{display:grid;grid-template-columns:330px 1fr;gap:1.4rem;align-items:stretch}
.sx-tablist{display:grid;gap:.5rem;align-content:start}
.sx-tab{position:relative;display:flex;align-items:center;gap:.85rem;width:100%;padding:.85rem 1rem;border-radius:18px;border:1px solid rgba(255,255,255,.1);background:rgba(255,255,255,.04);color:rgba(255,255,255,.78);font:inherit;font-weight:700;font-size:.95rem;line-height:1.3;text-align:left;cursor:pointer;transition:background .3s,border-color .3s,color .3s,transform .3s}
.sx-tab .n{flex:none;width:34px;height:34px;border-radius:11px;display:grid;place-items:center;font-family:var(--font-primary,'Sora',sans-serif);font-size:.78rem;font-weight:800;color:#8fe0fa;background:rgba(143,224,250,.1);transition:background .3s,color .3s}
.sx-tab .arr{margin-left:auto;font-size:.8rem;opacity:0;transform:translateX(-6px);transition:opacity .3s,transform .3s}
.sx-tab:hover{background:rgba(255,255,255,.08);color:#fff;transform:translateX(4px)}
.sx-tab[aria-selected="true"]{background:linear-gradient(135deg,rgba(54,197,243,.28),rgba(109,93,246,.34));border-color:rgba(143,224,250,.55);color:#fff;box-shadow:0 14px 34px rgba(3,10,30,.35)}
.sx-tab[aria-selected="true"] .n{background:#fff;color:#193463}
.sx-tab[aria-selected="true"] .arr{opacity:1;transform:none}
.sx .sx-tab:focus{outline:0}
.sx .sx-tab:focus-visible{outline:2px solid #8fe0fa;outline-offset:2px}
.sx-panels{position:relative;min-width:0}
.sx-panel{display:grid;grid-template-columns:.85fr 1.15fr;height:100%;border-radius:30px;overflow:hidden;background:linear-gradient(160deg,rgba(255,255,255,.1),rgba(255,255,255,.03));border:1px solid rgba(255,255,255,.14);box-shadow:0 30px 70px rgba(3,10,30,.35)}
.sx-panel[hidden]{display:none}
.sx-panel.is-anim{animation:sxPanel .55s cubic-bezier(.2,.7,.2,1) both}
.sx-panel figure{position:relative;margin:0;min-height:100%;overflow:hidden;background:#0b1b3d}
.sx-panel figure img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center top;transition:transform 1.2s}
.sx-panel:hover figure img{transform:scale(1.05)}
.sx-panel figcaption{position:absolute;left:0;right:0;bottom:0;padding:3.5rem 1.2rem 1.1rem;background:linear-gradient(180deg,transparent,rgba(8,20,48,.92) 60%);font-size:.86rem;line-height:1.55;color:rgba(255,255,255,.86)}
.sx-panel figcaption b{display:inline-flex;align-items:center;gap:.5rem;margin-bottom:.35rem;padding:.3rem .75rem;border-radius:999px;font-size:.74rem;letter-spacing:.12em;text-transform:uppercase;color:#fff;background:linear-gradient(135deg,#36c5f3,#6d5df6)}
.sx-panel .cp{display:flex;flex-direction:column;justify-content:center;padding:clamp(1.5rem,1rem + 2vw,2.6rem)}
.sx-panel .cp .num{font-family:var(--font-primary,'Sora',sans-serif);font-size:.8rem;font-weight:800;letter-spacing:.16em;color:#8fe0fa}
.sx-panel .cp .sx-ico{margin-top:.9rem;width:56px;height:56px;border-radius:18px;font-size:1.3rem;background:linear-gradient(135deg,#36c5f3,#6d5df6)}
.sx-panel h3{margin-top:1.1rem;font-size:clamp(1.3rem,1.05rem + .8vw,1.7rem);color:#fff}
.sx-panel .cp p{margin-top:.8rem;color:rgba(255,255,255,.78);line-height:1.8;font-size:.99rem}
.sx-panel .cp .sx-actions{margin-top:1.4rem}
.sx-panel .cp .sx-btn{padding:.8rem 1.3rem;font-size:.9rem}

/* ================= PROCESS (5 steps in one row) ================= */
.sx-steps{position:relative;display:grid;grid-template-columns:repeat(5,1fr);gap:1rem;counter-reset:st}
.sx-steps::before{content:"";position:absolute;left:10%;right:10%;top:27px;height:3px;border-radius:3px;background:linear-gradient(90deg,#36c5f3,#6d5df6);opacity:.25}
.sx-steps::after{content:"";position:absolute;left:10%;top:27px;height:3px;border-radius:3px;background:linear-gradient(90deg,#36c5f3,#6d5df6);width:0;transition:width 1.8s cubic-bezier(.2,.7,.2,1)}
.sx-steps.is-in::after{width:80%}
.sx-step{position:relative;text-align:center}
.sx-step .dot{position:relative;z-index:2;width:56px;height:56px;margin:0 auto;border-radius:50%;display:grid;place-items:center;color:#fff;font-size:1.1rem;background:linear-gradient(135deg,var(--p),var(--v));box-shadow:0 0 0 7px #fff,0 0 0 8px var(--line),0 14px 30px rgba(109,93,246,.35);transition:transform .4s}
.sx-step:hover .dot{transform:scale(1.1) rotate(-6deg)}
.sx-step .card{margin-top:1.1rem;padding:1.2rem 1.1rem 1.3rem;border-radius:22px;background:#fff;border:1px solid var(--line);box-shadow:0 14px 34px rgba(25,52,99,.07);height:calc(100% - 56px - 1.1rem);transition:transform .4s,box-shadow .4s,border-color .4s}
.sx-step:hover .card{transform:translateY(-6px);border-color:rgba(109,93,246,.35);box-shadow:0 24px 50px rgba(25,52,99,.14)}
.sx-step .k{font-size:.7rem;font-weight:800;letter-spacing:.16em;text-transform:uppercase;color:var(--pt)}
.sx-step h3{margin-top:.35rem;font-size:1.02rem;color:var(--ink)}
.sx-step p{margin-top:.5rem;font-size:.9rem;line-height:1.65;color:var(--muted)}
.sx-note{margin-top:1.6rem;text-align:center;font-weight:700;color:var(--ink)}

/* ================= WHY + INDUSTRIES ================= */
.sx-soft{background:var(--soft)}
.sx-split{display:grid;grid-template-columns:1.2fr .8fr;gap:clamp(1.5rem,3vw,2.6rem);align-items:stretch}
.sx-why{display:grid;grid-template-columns:repeat(2,1fr);gap:.9rem;margin-top:1.5rem}
.sx-wy{position:relative;overflow:hidden;display:flex;gap:.9rem;align-items:flex-start;padding:1.15rem 1.2rem;border-radius:20px;background:#fff;border:1px solid var(--line);transition:transform .4s,box-shadow .4s,border-color .4s}
.sx-wy::before{content:"";position:absolute;inset:0;opacity:0;transition:opacity .4s;background:radial-gradient(260px circle at var(--mx,50%) var(--my,50%),rgba(109,93,246,.1),transparent 50%)}
.sx-wy:hover{transform:translateY(-5px);border-color:rgba(54,197,243,.5);box-shadow:0 20px 44px rgba(25,52,99,.12)}
.sx-wy:hover::before{opacity:1}
.sx-wy>*{position:relative}
.sx-wy .sx-ico{width:42px;height:42px;border-radius:13px;font-size:.92rem}
.sx-wy h3{font-size:1rem;color:var(--ink)}
.sx-wy p{margin-top:.3rem;font-size:.9rem;line-height:1.6;color:var(--muted)}
.sx-wy.wide{grid-column:1/-1}
.sx-ind{position:relative;overflow:hidden;padding:clamp(1.5rem,1.1rem + 1.4vw,2.2rem);border-radius:30px;color:#fff;background:radial-gradient(400px 260px at 100% 0%,rgba(109,93,246,.5),transparent 60%),radial-gradient(400px 300px at 0% 100%,rgba(54,197,243,.35),transparent 60%),#0b1b3d;box-shadow:0 30px 70px rgba(25,52,99,.28)}
.sx-ind .sx-eyebrow{color:#8fe0fa}
.sx-ind .sx-lead{color:rgba(255,255,255,.76);font-size:.93rem;line-height:1.7}
.sx-ind ul{display:grid;grid-template-columns:repeat(2,1fr);gap:.55rem;margin-top:1.2rem}
.sx-ind li{color:#fff;display:flex;align-items:center;gap:.65rem;padding:.7rem .8rem;border-radius:14px;font-size:.86rem;font-weight:700;line-height:1.35;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.13);transition:background .3s,border-color .3s,transform .3s}
.sx-ind li:hover{background:rgba(255,255,255,.14);border-color:rgba(143,224,250,.5);transform:translateY(-3px)}
.sx-ind li i{flex:none;width:30px;height:30px;border-radius:10px;display:grid;place-items:center;font-size:.8rem;background:linear-gradient(135deg,#36c5f3,#6d5df6)}

/* ================= CHOOSE + FULL-SERVICE ================= */
.sx-duo{display:grid;grid-template-columns:1fr 1fr;gap:clamp(1.5rem,3vw,3rem);align-items:start}
.sx-qs{display:grid;gap:.55rem;margin-top:1.3rem;counter-reset:q}
.sx-qs li{counter-increment:q;display:flex;gap:.85rem;align-items:center;padding:.8rem 1rem;border-radius:16px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);font-weight:600;font-size:.94rem;line-height:1.5;color:rgba(255,255,255,.9);transition:background .3s,transform .3s,border-color .3s}
.sx-qs li::before{content:counter(q,decimal-leading-zero);flex:none;width:34px;height:34px;border-radius:11px;display:grid;place-items:center;font-family:var(--font-primary,'Sora',sans-serif);font-size:.76rem;font-weight:800;color:#0b1b3d;background:linear-gradient(135deg,#7fd9f8,#b8adff)}
.sx-qs li:hover{background:rgba(255,255,255,.11);border-color:rgba(143,224,250,.45);transform:translateX(5px)}
.sx-callout{margin-top:1.1rem;padding:1rem 1.2rem;border-radius:16px;border:1px dashed rgba(143,224,250,.5);font-weight:700;color:#fff;line-height:1.6}
.sx-tiles{display:grid;grid-template-columns:repeat(2,1fr);gap:.8rem;margin-top:1.3rem}
.sx-tile{position:relative;overflow:hidden;padding:1.2rem;border-radius:20px;background:linear-gradient(160deg,rgba(255,255,255,.1),rgba(255,255,255,.03));border:1px solid rgba(255,255,255,.14);transition:transform .4s,border-color .4s,box-shadow .4s}
.sx-tile::before{content:"";position:absolute;inset:0;opacity:0;transition:opacity .4s;background:radial-gradient(260px circle at var(--mx,50%) var(--my,50%),rgba(54,197,243,.3),transparent 50%)}
.sx-tile:hover{transform:translateY(-5px);border-color:rgba(143,224,250,.55);box-shadow:0 24px 50px rgba(3,10,30,.4)}
.sx-tile:hover::before{opacity:1}
.sx-tile>*{position:relative}
.sx-tile .sx-ico{width:42px;height:42px;border-radius:13px;font-size:.92rem;background:linear-gradient(135deg,#36c5f3,#6d5df6)}
.sx-tile h3{margin-top:.8rem;font-size:1.02rem;color:#fff}
.sx-tile p{margin-top:.4rem;font-size:.89rem;line-height:1.65;color:rgba(255,255,255,.74)}

/* ================= CTA + CONTACT ================= */
.sx-cta{padding:clamp(2.6rem,1.8rem + 3vw,4.4rem) 0}
.sx-cta-card{position:relative;overflow:hidden;color:#fff;border-radius:36px;padding:clamp(1.8rem,1.2rem + 3vw,3.6rem);
    background:linear-gradient(120deg,#193463,#1597c9,#6d5df6,#193463);background-size:300% 300%;animation:sxGradient 16s ease infinite;box-shadow:0 34px 80px rgba(25,52,99,.35)}
.sx-cta-card::after{content:"";position:absolute;inset:0;pointer-events:none;background-image:radial-gradient(rgba(255,255,255,.18) 1.3px,transparent 1.3px);background-size:26px 26px;-webkit-mask-image:radial-gradient(ellipse at 30% 50%,transparent 30%,#000 100%);mask-image:radial-gradient(ellipse at 30% 50%,transparent 30%,#000 100%)}
.sx-cta-in{position:relative;z-index:2;display:grid;grid-template-columns:1.15fr .85fr;gap:clamp(1.5rem,3vw,3rem);align-items:center}
.sx-cta-card .sx-eyebrow{color:#d6f4fe}
.sx-cta-card .sx-eyebrow::before{background:#fff}
.sx-cta-card h2{font-size:clamp(1.7rem,1.1rem + 2vw,2.7rem);margin-top:.7rem;color:#fff}
.sx-cta-card p{margin-top:.9rem;line-height:1.8;color:rgba(255,255,255,.9)}
.sx-cta-card p a{color:#fff;font-weight:700;border-bottom:2px solid rgba(255,255,255,.5)}
.sx-contact{display:grid;gap:.7rem}
.sx-ct{display:flex;gap:.9rem;align-items:flex-start;padding:1rem 1.1rem;border-radius:18px;background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.24);-webkit-backdrop-filter:blur(10px);backdrop-filter:blur(10px);transition:background .3s,transform .3s}
.sx-ct:hover{background:rgba(255,255,255,.2);transform:translateX(4px)}
.sx-ct .sx-ico{width:42px;height:42px;border-radius:13px;font-size:.92rem;background:#fff;color:#193463;box-shadow:none}
.sx-ct h3{font-size:.74rem;letter-spacing:.14em;text-transform:uppercase;color:#d6f4fe;font-weight:800}
.sx-ct p,.sx-ct a{margin-top:.25rem;display:block;color:#fff;font-weight:600;line-height:1.55;font-size:.95rem}

/* ================= FAQ ================= */
.sx-faq{display:grid;grid-template-columns:.8fr 1.2fr;gap:clamp(1.8rem,4vw,4rem);align-items:start}
.sx-faq-side{position:sticky;top:110px}
.sx-faq-img{margin-top:1.4rem;width:100%;max-width:360px;border-radius:24px;animation:sxFloat 7s ease-in-out infinite}
.sx-acc{display:grid;gap:.6rem}
.sx-acc-item{border-radius:18px;background:#fff;border:1px solid var(--line);transition:box-shadow .4s,border-color .4s}
.sx-acc-item.is-open{border-color:rgba(109,93,246,.4);box-shadow:0 18px 44px rgba(25,52,99,.12)}
.sx-acc-h{margin:0;font-size:inherit}
.sx .sx-acc-btn{width:100%;display:flex;align-items:center;gap:.85rem;padding:.9rem 1.1rem;background:transparent;border:0;border-radius:18px;cursor:pointer;text-align:left;font:inherit;color:var(--ink);box-shadow:none;outline:0;-webkit-tap-highlight-color:transparent}
.sx .sx-acc-btn:hover,.sx .sx-acc-btn:focus,.sx .sx-acc-btn:active{background:transparent;color:var(--ink);box-shadow:none;outline:0}
.sx .sx-acc-btn:focus-visible{outline:2px solid var(--p);outline-offset:-3px}
.sx-acc-n{flex:none;width:34px;height:34px;border-radius:11px;display:grid;place-items:center;font-family:var(--font-primary,'Sora',sans-serif);font-size:.76rem;font-weight:800;color:#fff;background:linear-gradient(135deg,var(--p),var(--v))}
.sx-acc-q{flex:1;font-family:var(--font-primary,'Sora',sans-serif);font-weight:700;font-size:.98rem;line-height:1.4;letter-spacing:-.02em}
.sx-acc-t{flex:none;width:30px;height:30px;border-radius:50%;display:grid;place-items:center;border:1.5px solid var(--pt);color:var(--pt);transition:transform .4s,background .3s,color .3s}
.sx-acc-t i{font-size:.75rem;line-height:1}
.sx-acc-item.is-open .sx-acc-t{transform:rotate(135deg);background:#193463;border-color:#193463;color:#fff}
.sx-acc-panel{display:grid;grid-template-rows:0fr;transition:grid-template-rows .45s cubic-bezier(.2,.7,.2,1)}
.sx-acc-item.is-open .sx-acc-panel{grid-template-rows:1fr}
.sx-acc-in{overflow:hidden}
.sx-acc-in p{padding:0 1.3rem 1.2rem 4.1rem;color:var(--muted);line-height:1.75;font-size:.96rem}

/* keyframes */
@keyframes sxShine{to{background-position:200% center}}
@keyframes sxSpin{to{transform:rotate(360deg)}}
@keyframes sxFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-12px)}}
@keyframes sxBob{0%,100%{transform:translateY(0)}50%{transform:translateY(-7px)}}
@keyframes sxPing{70%{box-shadow:0 0 0 9px rgba(109,93,246,0)}100%{box-shadow:0 0 0 0 rgba(109,93,246,0)}}
@keyframes sxGradient{0%,100%{background-position:0% 50%}50%{background-position:100% 50%}}
@keyframes sxIn{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:none}}
@keyframes sxPanel{from{opacity:0;transform:translateY(14px) scale(.985)}to{opacity:1;transform:none}}

/* responsive */
.sx-hero-grid>*,.sx-about>*,.sx-split>*,.sx-duo>*,.sx-faq>*,.sx-cta-in>*,.sx-svc>*{min-width:0}
.sx h1,.sx h2,.sx h3,.sx p,.sx li,.sx a{overflow-wrap:break-word}
@media (max-width:1199.98px){
  .sx-svc{grid-template-columns:290px 1fr}
  .sx-panel{grid-template-columns:1fr 1.2fr}
  .sx-steps{grid-template-columns:repeat(3,1fr);row-gap:1.6rem}
  .sx-steps::before,.sx-steps::after{display:none}
  .sx-split{grid-template-columns:1fr}
}
@media (max-width:991.98px){
  .sx-hero{padding-top:8rem}
  .sx-hero-grid,.sx-about,.sx-duo,.sx-faq,.sx-cta-in{grid-template-columns:1fr}
  .sx-hero-img{max-width:480px}
  .sx-stats{grid-template-columns:repeat(2,1fr)}
  .sx-about-visual{max-width:520px;margin:0 auto}
  .sx-answer{grid-template-columns:1fr}
  .sx-svc{grid-template-columns:1fr}
  .sx-tablist{grid-template-columns:repeat(2,1fr)}
  .sx-tab{padding:.7rem .8rem;font-size:.88rem}
  .sx-tab .arr{display:none}
  .sx-tab:hover{transform:none}
  .sx-faq-side{position:static}
  .sx-faq-img{max-width:280px}
}
@media (max-width:767.98px){
  .sx-panel{grid-template-columns:1fr}
  .sx-panel figure{min-height:0;height:230px}
  .sx-steps{grid-template-columns:1fr;gap:.8rem}
  .sx-step{display:grid;grid-template-columns:56px 1fr;gap:1rem;text-align:left;align-items:start}
  .sx-step .card{margin-top:0;height:auto}
  .sx-why,.sx-tiles{grid-template-columns:1fr}
  .sx-acc-in p{padding:0 1.1rem 1.1rem}
  .sx-checks{grid-template-columns:1fr}
}
@media (max-width:575.98px){
  .sx-hero{padding-top:7rem}
  .sx-stats{grid-template-columns:1fr 1fr;padding:.45rem}
  .sx-st{padding:.7rem .6rem;gap:.6rem}
  .sx-st .sx-ico{width:36px;height:36px;border-radius:11px;font-size:.8rem}
  .sx-st b{font-size:1.15rem}
  .sx-actions .sx-btn{width:100%;justify-content:center}
  .sx-tablist{grid-template-columns:1fr 1fr;gap:.4rem}
  .sx-tab{gap:.55rem;padding:.6rem;font-size:.8rem;border-radius:14px}
  .sx-tab .n{width:28px;height:28px;font-size:.7rem}
  .sx-ind ul{grid-template-columns:1fr}
  .sx-about-visual .tag{left:.6rem}
  .sx-cta-card{border-radius:26px}
}
/* phones: compact rhythm (no sliders, nothing hidden) */
@media (max-width:767.98px){
  .sx-sec{padding:2.3rem 0}
  .sx-head{margin-bottom:1.3rem}
  .sx-lead{font-size:.95rem;line-height:1.72;margin-top:.7rem}
  .sx-hero-desc{font-size:.95rem;line-height:1.72}
  .sx-checks{grid-template-columns:1fr 1fr;gap:.5rem .8rem;margin-top:1.3rem}
  .sx-checks li{font-size:.82rem;align-items:flex-start;line-height:1.35}
  .sx-checks li i{margin-top:.1rem}
  .sx-hero-img{max-width:340px}
  .sx-stats{margin-top:1.2rem}
  .sx-about{gap:1.4rem}
  .sx-about-visual{max-width:320px}
  .sx-about-visual .tag{padding:.55rem .8rem;bottom:.8rem}
  .sx-about-visual .tag .sx-ico{width:36px;height:36px}
  .sx-answer{margin-top:1.4rem;padding:1.2rem 1.1rem 1.2rem 1.3rem;gap:1rem}
  .sx-do{gap:.4rem}
  .sx-do li{padding:.5rem .7rem;font-size:.86rem}
  .sx-do li i{width:26px;height:26px;font-size:.7rem}
  .sx-panel figure{height:180px}
  .sx-panel .cp{padding:1.2rem 1.1rem 1.4rem}
  .sx-panel .cp .sx-ico{display:none}
  .sx-panel h3{margin-top:.5rem}
  .sx-panel .cp p{font-size:.94rem;line-height:1.7}
  .sx-steps{gap:.6rem}
  .sx-step{display:block;position:relative}
  .sx-step .dot{position:absolute;left:.9rem;top:1rem;width:38px;height:38px;font-size:.85rem;margin:0;box-shadow:0 8px 18px rgba(109,93,246,.3)}
  .sx-step .card{padding:.95rem 1rem 1rem 4.1rem;border-radius:18px}
  .sx-step p{font-size:.88rem;margin-top:.35rem}
  .sx-note{margin-top:1.1rem;font-size:.95rem}
  .sx-why{gap:.6rem;margin-top:1.1rem}
  .sx-wy{padding:.95rem 1rem;gap:.8rem}
  .sx-wy .sx-ico{width:38px;height:38px;font-size:.85rem}
  .sx-split,.sx-duo{gap:2rem}
  .sx-ind li{padding:.55rem .7rem}
  .sx-qs{gap:.45rem;margin-top:1rem}
  .sx-qs li{padding:.65rem .8rem;font-size:.88rem;gap:.7rem}
  .sx-qs li::before{width:30px;height:30px;font-size:.7rem}
  .sx-tiles{gap:.6rem;margin-top:1rem}
  .sx-tile{padding:1rem;display:grid;grid-template-columns:auto 1fr;gap:0 .85rem;align-items:start}
  .sx-tile .sx-ico{grid-row:span 2;width:38px;height:38px}
  .sx-tile h3{margin-top:0}
  .sx-tile p{margin-top:.3rem}
  .sx-cta{padding:1.6rem 0}
  .sx-faq{gap:1.2rem}
  .sx-faq-img{max-width:200px;margin-top:1rem}
  .sx .sx-acc-btn{padding:.75rem .85rem;gap:.7rem}
  .sx-acc-q{font-size:.9rem}
  .sx-acc-n{width:30px;height:30px;font-size:.7rem}
}
@media (max-width:575.98px){
  .sx-hero .sx-actions{display:grid;grid-template-columns:1fr 1fr;gap:.6rem}
  .sx-hero .sx-actions .sx-btn{padding:.85rem .6rem;font-size:.86rem;gap:.45rem}
  .sx-hero .sx-actions .sx-btn i{display:none}
}
@media (prefers-reduced-motion:reduce){
  .sx *,.sx *::before,.sx *::after{animation:none!important;transition:none!important}
  .sx-js .sx-reveal{opacity:1!important;transform:none!important}
  .sx-steps::after{width:80%}
}
</style>
<style>
/* ===== shared extras for service pages (same design system as social media page) ===== */
.sx-hero-img.land{max-width:600px}
.sx-hero h1{font-size:clamp(1.9rem,1rem + 2.3vw,2.95rem)}
.sx-chips{display:flex;flex-wrap:wrap;gap:.5rem;margin-top:1.3rem}
.sx-chips li{display:inline-flex;align-items:center;gap:.5rem;padding:.5rem .9rem;border-radius:999px;font-size:.86rem;font-weight:700;color:#193463;background:#fff;border:1px solid var(--line);box-shadow:0 6px 16px rgba(25,52,99,.05);transition:transform .3s,border-color .3s}
.sx-chips li i{color:var(--v);font-size:.75rem}
.sx-chips li:hover{transform:translateY(-3px);border-color:rgba(109,93,246,.45)}
.sx-dark .sx-chips li,.sx-ind .sx-chips li{color:#fff;background:rgba(255,255,255,.08);border-color:rgba(255,255,255,.16);box-shadow:none}
.sx-dark .sx-chips li i,.sx-ind .sx-chips li i{color:#8fe0fa}
.sx-card2{position:relative;margin-top:clamp(1.6rem,1.2rem + 1.4vw,2.4rem);display:grid;grid-template-columns:.95fr 1.05fr;gap:1.4rem 2.4rem;padding:clamp(1.4rem,1rem + 1.4vw,2.2rem);border-radius:28px;background:linear-gradient(135deg,#fff,#f4f2ff);border:1px solid #e4e0fb;box-shadow:0 20px 50px rgba(25,52,99,.08)}
.sx-card2::before{content:"";position:absolute;left:0;top:18px;bottom:18px;width:5px;border-radius:5px;background:linear-gradient(180deg,#36c5f3,#6d5df6)}
.sx-card2 .sx-btn{margin-top:1.3rem}
.sx-list{display:grid;gap:.6rem;align-content:start}
.sx-list .sx-wy{padding:.9rem 1rem}
.sx-list.c2{grid-template-columns:repeat(2,1fr)}
.sx-wy.mini{align-items:center}
.sx-wy.mini h3{font-size:.95rem;line-height:1.35}
.sx-about.rev{grid-template-columns:1.08fr .92fr}
.sx-about-visual.tall img{max-height:520px;width:auto;margin:0 auto;object-fit:cover}
.sx-about-visual.plain::before{display:none}
.sx-about-visual.plain img{box-shadow:none;border-radius:0;filter:drop-shadow(0 26px 40px rgba(25,52,99,.22))}
/* tab panel without photo: animated art block */
.sx-panel.art{grid-template-columns:.8fr 1.2fr}
.sx-art{position:relative;display:grid;place-items:center;min-height:100%;overflow:hidden;background:radial-gradient(circle at 50% 50%,rgba(109,93,246,.45),transparent 60%),radial-gradient(circle at 20% 80%,rgba(54,197,243,.35),transparent 55%),#0a1838}
.sx-art::before,.sx-art::after{content:"";position:absolute;width:62%;aspect-ratio:1;border-radius:50%;border:1.5px dashed rgba(143,224,250,.35);animation:sxSpin 30s linear infinite}
.sx-art::after{width:84%;border-color:rgba(184,173,255,.22);animation-duration:46s;animation-direction:reverse}
.sx-art .orb{position:relative;z-index:2;width:clamp(110px,10vw,150px);aspect-ratio:1;border-radius:36px;display:grid;place-items:center;font-size:clamp(2.6rem,2rem + 2vw,3.6rem);color:#fff;background:linear-gradient(135deg,#36c5f3,#6d5df6);box-shadow:0 30px 60px rgba(54,197,243,.35),inset 0 0 0 1px rgba(255,255,255,.3);transform:rotate(-6deg);animation:sxFloat 6s ease-in-out infinite}
.sx-art .big{position:absolute;right:1rem;bottom:.2rem;font-family:var(--font-primary,'Sora',sans-serif);font-size:clamp(4rem,3rem + 3vw,6.5rem);font-weight:800;line-height:1;color:transparent;-webkit-text-stroke:1.5px rgba(255,255,255,.14)}
.sx-art .lbl{position:absolute;left:1rem;top:1rem;padding:.35rem .8rem;border-radius:999px;font-size:.72rem;font-weight:800;letter-spacing:.12em;text-transform:uppercase;color:#fff;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2)}
.sx-panel .cp p a{color:#8fe0fa;font-weight:700;border-bottom:2px solid rgba(143,224,250,.45)}
/* small grid of short items (dark or light) */
.sx-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:.9rem}
.sx-grid.c4{grid-template-columns:repeat(4,1fr)}
.sx-grid.c2{grid-template-columns:repeat(2,1fr)}
.sx-grid.c5{grid-template-columns:repeat(5,1fr)}
.sx-dark .sx-wy{background:rgba(255,255,255,.06);border-color:rgba(255,255,255,.13)}
.sx-dark .sx-wy h3{color:#fff}.sx-dark .sx-wy p{color:rgba(255,255,255,.74)}
.sx-dark .sx-wy p a{color:#8fe0fa}
.sx-dark .sx-wy .sx-ico{background:linear-gradient(135deg,#36c5f3,#6d5df6)}
.sx-dark .sx-wy:hover{border-color:rgba(143,224,250,.5);box-shadow:0 20px 44px rgba(3,10,30,.4)}
.sx-dark .sx-wy::before{background:radial-gradient(260px circle at var(--mx,50%) var(--my,50%),rgba(54,197,243,.22),transparent 50%)}
.sx-wy.col{flex-direction:column;gap:.7rem}
.sx-wy.ctr{flex-direction:column;align-items:center;text-align:center;gap:.6rem}
a.sx-wy{text-decoration:none}
.sx-wy .go{display:inline-flex;align-items:center;gap:.4rem;margin-top:.5rem;font-size:.85rem;font-weight:800;color:var(--pt)}
.sx-endline{margin:1.5rem auto 0;max-width:860px;text-align:center;font-weight:700;line-height:1.7;color:var(--ink)}
.sx-dark .sx-endline{color:#fff}
/* industries aside: titled items */
.sx-ind li.t{display:grid;grid-template-columns:auto 1fr;align-items:start;gap:.15rem .65rem}
.sx-ind li.t i{grid-row:span 2}
.sx-ind li.t small{display:block;font-weight:500;font-size:.8rem;line-height:1.45;color:rgba(255,255,255,.72)}
/* testimonials */
.sx-tst-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1rem}
.sx-tst{position:relative;display:flex;flex-direction:column;margin:0;padding:1.5rem 1.4rem 1.2rem;border-radius:24px;background:#fff;border:1px solid var(--line);box-shadow:0 14px 36px rgba(25,52,99,.07);transition:transform .4s,box-shadow .4s}
.sx-tst:hover{transform:translateY(-6px);box-shadow:0 26px 56px rgba(25,52,99,.15)}
.sx-tst .q{position:absolute;right:1.2rem;top:.6rem;font-family:Georgia,serif;font-size:3.6rem;line-height:1;color:rgba(109,93,246,.18)}
.sx-stars{color:#f5b301;font-size:.78rem;letter-spacing:.12em}
.sx-tst blockquote{margin:.7rem 0 0;padding:0;border:0;flex:1;font-style:normal;color:var(--ink);line-height:1.7;font-size:.93rem;font-weight:500}
.sx-tst footer{display:flex;align-items:center;gap:.8rem;margin-top:1.1rem;padding-top:1rem;border-top:1px solid var(--line)}
.sx-tst footer img.av{width:44px;height:44px;border-radius:50%;object-fit:cover;border:2px solid #d3edf9;flex:none}
.sx-tst footer b{font-family:var(--font-primary,'Sora',sans-serif);font-size:.95rem;color:var(--ink)}
.sx-tst footer img.lg{margin-left:auto;max-height:28px;max-width:88px;width:auto;object-fit:contain}
.sx-chips.ctr{justify-content:center;margin:0 0 1.4rem}
/* proof */
.sx-proof{display:grid;grid-template-columns:repeat(3,1fr);gap:1rem}
.sx-pr{padding:1.6rem;border-radius:24px;color:#fff;background:linear-gradient(135deg,#193463,#0b1b3d)}
.sx-pr b{display:block;font-family:var(--font-primary,'Sora',sans-serif);font-size:2.2rem;font-weight:800;line-height:1;background:linear-gradient(90deg,#7fd9f8,#b8adff);-webkit-background-clip:text;background-clip:text;color:transparent}
.sx-pr h3{margin-top:.8rem;font-size:1.05rem;color:#fff}
.sx-pr p{margin-top:.4rem;color:rgba(255,255,255,.76);line-height:1.65;font-size:.93rem}
/* link strip */
.sx-links{display:flex;flex-wrap:wrap;justify-content:center;gap:.55rem;margin-top:1.5rem}
.sx-links a{display:inline-flex;align-items:center;gap:.5rem;padding:.6rem 1rem;border-radius:999px;font-weight:700;font-size:.88rem;color:#193463;background:#fff;border:1px solid var(--line);transition:transform .3s,border-color .3s,box-shadow .3s}
.sx-links a:hover{transform:translateY(-3px);border-color:rgba(109,93,246,.5);box-shadow:0 12px 26px rgba(25,52,99,.12);color:#193463}
.sx-links i{color:var(--v)}
/* local + map */
.sx-local{display:grid;grid-template-columns:1.1fr .9fr;gap:clamp(1.4rem,3vw,2.6rem);align-items:stretch}
.sx-areas{display:flex;flex-wrap:wrap;gap:.45rem;margin-top:1rem}
.sx-areas span{padding:.35rem .8rem;border-radius:999px;font-size:.82rem;font-weight:700;color:#fff;background:rgba(54,197,243,.16);border:1px solid rgba(143,224,250,.35)}
.sx-dark .sx-contact{grid-template-columns:1fr 1fr;margin-top:1.2rem}
.sx-dark .sx-contact .sx-ct:first-child{grid-column:1/-1}
.sx-dark .sx-ct{background:rgba(255,255,255,.06);border-color:rgba(255,255,255,.14)}
.sx-dark .sx-ct .sx-ico{background:linear-gradient(135deg,#36c5f3,#6d5df6);color:#fff}
.sx-dark .sx-ct h3{color:#8fe0fa}
.sx-btn-sm{padding:.75rem 1.2rem;font-size:.88rem}
.sx-map{position:relative;min-height:320px;height:100%;border-radius:28px;overflow:hidden;border:1px solid rgba(255,255,255,.18);background:radial-gradient(circle at 50% 42%,rgba(109,93,246,.4),transparent 55%),linear-gradient(135deg,#14305e,#0b1b3d)}
.sx-map::before{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,.07) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.07) 1px,transparent 1px);background-size:40px 40px;-webkit-mask-image:radial-gradient(circle at 50% 45%,#000 20%,transparent 75%);mask-image:radial-gradient(circle at 50% 45%,#000 20%,transparent 75%)}
.sx-map-in{position:absolute;inset:0;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:.9rem;padding:1.5rem;text-align:center;color:#fff}
.sx-pin{width:66px;height:66px;border-radius:50%;display:grid;place-items:center;font-size:1.5rem;color:#fff;background:linear-gradient(135deg,#36c5f3,#6d5df6);box-shadow:0 0 0 12px rgba(54,197,243,.16),0 0 0 24px rgba(54,197,243,.08)}
.sx-map-in p{max-width:30ch;font-weight:600;line-height:1.6;color:rgba(255,255,255,.9)}
.sx-map iframe{position:absolute;inset:0;width:100%;height:100%;border:0}
/* tech stack */
.sx-stk{padding:1.2rem 1.2rem 1.3rem;border-radius:22px;background:#fff;border:1px solid var(--line);transition:transform .4s,box-shadow .4s}
.sx-stk:hover{transform:translateY(-5px);box-shadow:0 20px 44px rgba(25,52,99,.12)}
.sx-stk .hd{display:flex;align-items:center;gap:.75rem}
.sx-stk .sx-ico{width:40px;height:40px;border-radius:12px;font-size:.88rem}
.sx-stk h3{font-size:1rem;color:var(--ink)}
.sx-tags{display:flex;flex-wrap:wrap;gap:.4rem;margin-top:.85rem}
.sx-tags span{padding:.32rem .7rem;border-radius:999px;font-size:.8rem;font-weight:700;color:#193463;background:#f3f1ff;border:1px solid #e4e0fb}
/* portfolio */
.sx-work{display:grid;grid-template-columns:repeat(4,1fr);gap:.9rem}
.sx-wk{position:relative;display:block;overflow:hidden;border-radius:22px;background:#0b1b3d;aspect-ratio:1/1;text-decoration:none;box-shadow:0 14px 34px rgba(25,52,99,.12)}
.sx-wk img{width:100%;height:100%;object-fit:cover;transition:transform .8s}
.sx-wk:hover img{transform:scale(1.07)}
.sx-wk .tx{position:absolute;left:0;right:0;bottom:0;padding:2.6rem 1rem .9rem;background:linear-gradient(180deg,transparent,rgba(8,20,48,.92) 60%)}
.sx-wk h3{font-size:1rem;color:#fff}
.sx-wk p{font-size:.8rem;font-weight:600;color:rgba(255,255,255,.78)}
.sx-wk.more{display:grid;place-items:center;text-align:center;color:#fff;background:linear-gradient(135deg,#193463,#6d5df6)}
.sx-wk.more i{font-size:1.8rem;color:#8fe0fa}
.sx-wk.more h3{margin-top:.6rem}
/* price note */
.sx-price{display:flex;align-items:center;gap:1rem;margin-top:1.2rem;padding:1rem 1.2rem;border-radius:18px;background:#fff;border:1px solid var(--line)}
.sx-price p{color:var(--ink);font-weight:600;line-height:1.65;font-size:.95rem}
/* 6-step process: 3 x 2 horizontal cards */
.sx-steps.n6{grid-template-columns:repeat(3,1fr);row-gap:1rem}
.sx-steps.n6::before,.sx-steps.n6::after{display:none}
.sx-steps.n6 .sx-step{display:block;position:relative;text-align:left}
.sx-steps.n6 .dot{position:absolute;left:1rem;top:1.1rem;width:44px;height:44px;font-size:.95rem;margin:0;box-shadow:0 10px 22px rgba(109,93,246,.3)}
.sx-steps.n6 .card{margin-top:0;height:100%;padding:1.1rem 1.1rem 1.2rem 4.6rem}
/* cta single column variant */
.sx-cta-in.one{grid-template-columns:1fr;max-width:860px;margin:0 auto;text-align:center}
.sx-cta-in.one .sx-actions{justify-content:center}
.sx-cta-card h2 span{color:#d6f4fe}
.sx-faq-side .sx-lead a{white-space:nowrap}

@media (max-width:1199.98px){
  .sx-grid.c4,.sx-grid.c5{grid-template-columns:repeat(3,1fr)}
  .sx-work{grid-template-columns:repeat(3,1fr)}
  .sx-steps.n6{grid-template-columns:repeat(2,1fr)}
}
@media (max-width:991.98px){
  .sx-about.rev{grid-template-columns:1fr}
  .sx-about.rev .sx-about-visual{order:-1}
  .sx-card2{grid-template-columns:1fr}
  .sx-local{grid-template-columns:1fr}
  .sx-map{min-height:240px}
  .sx-tst-grid,.sx-proof{grid-template-columns:1fr 1fr}
  .sx-grid{grid-template-columns:repeat(2,1fr)}
  .sx-grid.c4,.sx-grid.c5{grid-template-columns:repeat(2,1fr)}
}
@media (max-width:767.98px){
  .sx-panel.art{grid-template-columns:1fr}
  .sx-art{min-height:150px;height:150px}
  .sx-art .orb{width:84px;border-radius:24px;font-size:2rem}
  .sx-art .big{font-size:3.6rem}
  .sx-list.c2,.sx-grid,.sx-grid.c2,.sx-grid.c4,.sx-grid.c5{grid-template-columns:1fr}
  .sx-grid.keep2{grid-template-columns:1fr 1fr}
  .sx-tst-grid,.sx-proof{grid-template-columns:1fr}
  .sx-work{grid-template-columns:repeat(2,1fr);gap:.6rem}
  .sx-steps.n6{grid-template-columns:1fr;gap:.6rem}
  .sx-steps.n6 .dot{left:.9rem;top:1rem;width:38px;height:38px;font-size:.85rem}
  .sx-steps.n6 .card{padding:.95rem 1rem 1rem 4.1rem}
  .sx-card2{padding:1.2rem 1.1rem 1.2rem 1.3rem;gap:1rem;margin-top:1.4rem}
  .sx-dark .sx-contact{grid-template-columns:1fr}
  .sx-chips{gap:.4rem}
  .sx-chips li{padding:.42rem .75rem;font-size:.8rem}
  .sx-tst{padding:1.2rem 1.1rem 1rem}
  .sx-tst blockquote{font-size:.9rem}
  .sx-wy.ctr{flex-direction:row;text-align:left;align-items:flex-start}
  .sx-links a{padding:.5rem .8rem;font-size:.82rem}
}
@media (prefers-reduced-motion:reduce){.sx-art::before,.sx-art::after,.sx-art .orb{animation:none!important}}

.sx-tst blockquote{background:none!important;box-shadow:none}
.sx-tst blockquote::before,.sx-tst blockquote::after{display:none}
@media (max-width:767.98px){
  .sx-card2{padding:0;margin-top:1.8rem;background:none;border:0;box-shadow:none}
  .sx-card2::before{display:none}
  .sx-wy{padding:.8rem .9rem;gap:.7rem;border-radius:16px}
  .sx-wy .sx-ico,.sx-list .sx-wy .sx-ico{width:32px;height:32px;border-radius:10px;font-size:.78rem}
  .sx-wy p{font-size:.86rem;line-height:1.55}
  .sx-wy.col{flex-direction:row}
  .sx-grid.keep2 .sx-wy.col{flex-direction:column;gap:.5rem}
  .sx-step p{font-size:.86rem;line-height:1.55}
  .sx-art{display:none}
  .sx-map{display:none}
  .sx-about-visual.tall{max-width:300px!important}
  .sx-about-visual.tall img{max-height:300px;width:100%;object-fit:cover;object-position:top}
  .sx-tst blockquote{font-size:.88rem;line-height:1.6}
  .sx-lead{line-height:1.65}
  .sx-ind{padding:1.3rem 1.1rem;border-radius:24px}
  .sx-ind li{font-size:.84rem}
  .sx-faq-img{max-width:160px}
  .sx-panel .cp p{font-size:.92rem;line-height:1.65}
  .sx-endline{font-size:.92rem}
  .sx-grid.keep2{gap:.5rem}
  .sx-grid.keep2 .sx-wy.mini{flex-direction:column;align-items:flex-start;gap:.5rem;padding:.75rem}
  .sx-grid.keep2 .sx-wy.mini h3{font-size:.84rem}
}

/* ===== v3 fixes ===== */
/* lists: restore spacing that the ".sx ul{margin:0}" reset was removing */
.sx ul.sx-checks{margin-top:1.7rem}
.sx ul.sx-chips{margin-top:1.3rem}
.sx ul.sx-chips.ctr{margin:0 0 1.4rem}
.sx ol.sx-qs{margin-top:1.3rem}
@media (max-width:767.98px){.sx ul.sx-checks{margin-top:1.4rem}.sx ul.sx-chips{margin-top:1rem}}

/* hero: wider copy column on desktop only */
@media (min-width:992px){.sx-hero-grid{grid-template-columns:1.12fr .88fr}}
/* tab panel with real illustration */
.sx-panel.vis{grid-template-columns:1fr 1fr}
.sx-vis{position:relative;min-height:100%;overflow:hidden;background:radial-gradient(circle at 30% 25%,#ffffff 0%,#eef3ff 45%,#ece7ff 100%)}
.sx-vis::after{content:"";position:absolute;inset:auto -20% -40% auto;width:70%;aspect-ratio:1;border-radius:50%;background:radial-gradient(circle,rgba(109,93,246,.18),transparent 65%);pointer-events:none}
.sx-vis img{position:absolute;inset:0;width:100%;height:100%;object-fit:contain;padding:1.6rem 1.4rem;transition:transform 1.2s cubic-bezier(.2,.7,.2,1);z-index:1}
.sx-vis.cover img{object-fit:cover;padding:0}
.sx-panel:hover .sx-vis img{transform:scale(1.04)}
.sx-vis .badge{position:absolute;z-index:2;left:1rem;top:1rem;width:50px;height:50px;border-radius:16px;display:grid;place-items:center;font-size:1.15rem;color:#fff;background:linear-gradient(135deg,#36c5f3,#6d5df6);box-shadow:0 12px 26px rgba(109,93,246,.4)}
.sx-vis .chip{position:absolute;z-index:2;right:1rem;bottom:1rem;padding:.4rem .85rem;border-radius:999px;font-size:.72rem;font-weight:800;letter-spacing:.1em;text-transform:uppercase;color:#193463;background:rgba(255,255,255,.92);box-shadow:0 8px 20px rgba(25,52,99,.15)}
@media (max-width:767.98px){.sx-panel.vis{grid-template-columns:1fr}.sx-vis{min-height:0;height:210px}.sx-vis img{padding:.8rem}.sx-vis .badge{width:40px;height:40px;font-size:.9rem;border-radius:12px}}
/* stacked card: heading row on top, items in a row below (no empty column) */
.sx-card2.stack{grid-template-columns:1fr}
.sx-card2 .top{display:grid;grid-template-columns:1fr 1fr;gap:1rem 2.6rem;align-items:center}
.sx-card2 .top .sx-lead{margin-top:0}
.sx-card2 .top .sx-btn{margin-top:1.1rem}
.sx-grid.c5{grid-template-columns:repeat(5,1fr)}
@media (max-width:1199.98px){.sx-grid.c5{grid-template-columns:repeat(6,1fr)}.sx-grid.c5>*{grid-column:span 2}.sx-grid.c5>*:nth-last-child(-n+2):nth-child(n+4){grid-column:span 3}}
@media (max-width:767.98px){.sx-card2 .top{grid-template-columns:1fr}.sx-grid.c5{grid-template-columns:1fr}.sx-grid.c5>*,.sx-grid.c5>*:nth-last-child(-n+2):nth-child(n+4){grid-column:auto}}

/* FAQ: heading row + two balanced columns of questions */
.sx-faq-top{display:grid;grid-template-columns:1fr auto;gap:1.5rem 3rem;align-items:center;margin-bottom:clamp(1.4rem,1rem + 1.2vw,2.2rem)}
.sx-faq-top>div{max-width:760px}
.sx-faq-top .sx-faq-img{width:240px;max-width:240px;margin:0;border-radius:0}
.sx-acc.sx-acc2{display:grid;grid-template-columns:1fr 1fr;gap:.6rem 1rem;align-items:start}
.sx-acc-col{display:grid;gap:.6rem}
@media (max-width:991.98px){.sx-acc.sx-acc2{grid-template-columns:1fr}.sx-faq-top .sx-faq-img{width:170px}}
@media (max-width:575.98px){.sx-faq-top{grid-template-columns:1fr}.sx-faq-top .sx-faq-img{display:none}}

.sx-split.even{grid-template-columns:1fr 1fr}
.sx-pair{display:grid;grid-template-columns:1fr 1fr;gap:clamp(1.4rem,3vw,3rem);align-items:center}
.sx-pair+.sx-pair{margin-top:clamp(2.2rem,1.6rem + 2vw,3.4rem);padding-top:clamp(2.2rem,1.6rem + 2vw,3.4rem);border-top:1px solid rgba(255,255,255,.1)}
.sx-pair .sx-tiles{margin-top:0}
@media (max-width:991.98px){.sx-split.even,.sx-pair{grid-template-columns:1fr}}

/* ===== service illustrations ===== */
.sx-panel.mock{grid-template-columns:1fr 1fr}
.sx-mock{position:relative;display:grid;place-items:center;min-height:100%;padding:2.2rem 1.6rem;overflow:hidden;background:radial-gradient(circle at 20% 15%,#ffffff 0%,#eef3ff 45%,#e9e4ff 100%)}
.sx-mock::before{content:"";position:absolute;width:420px;height:420px;border-radius:50%;right:-160px;bottom:-180px;background:radial-gradient(circle,rgba(109,93,246,.22),transparent 65%)}
.sx-mock::after{content:"";position:absolute;width:300px;height:300px;border-radius:50%;left:-120px;top:-120px;background:radial-gradient(circle,rgba(54,197,243,.22),transparent 65%)}
.mk{position:relative;z-index:1;width:100%;max-width:370px;border-radius:18px;background:#fff;box-shadow:0 30px 60px rgba(25,52,99,.18),0 0 0 1px rgba(25,52,99,.06);font-family:var(--font-secondary,'Manrope',sans-serif);font-size:12px;line-height:1.4;color:#14264a;text-align:left;animation:mkIn .6s cubic-bezier(.2,.7,.2,1) both}
.mk b{font-weight:800}
.mk small{color:#6b7790;font-size:10.5px}
.mk .ln{display:block;height:6px;border-radius:4px;background:#e3eaf5;margin-top:6px}
.mk .ln.s{width:62%}
.mk-h{display:flex;align-items:center;gap:.6rem;padding:.7rem .85rem;border-bottom:1px solid #eef2f8}
.mk-b{flex:none;width:30px;height:30px;border-radius:10px;display:grid;place-items:center;font-size:15px}
.mk-tt{display:flex;flex-direction:column;min-width:0}
.mk-tt b{font-size:12.5px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.mk-h em{margin-left:auto;font-style:normal;font-size:9.5px;font-weight:800;letter-spacing:.08em;text-transform:uppercase;color:#8a95ab;background:#f2f5fa;padding:.2rem .45rem;border-radius:6px}
.mk-bd{padding:.8rem .85rem .9rem;display:grid;gap:.55rem}
.mk-q{display:flex;align-items:center;gap:.5rem;padding:.5rem .75rem;border-radius:999px;border:1px solid #dfe6f1;font-weight:600;color:#33415c;box-shadow:0 2px 6px rgba(25,52,99,.06)}
.mk-q i{color:#7a879e}
.mk-r{position:relative;padding:.55rem .65rem;border-radius:12px;border:1px solid transparent}
.mk-r small{display:block;color:#1a7f37;font-size:10.5px}
.mk-r b{display:block;color:#1a0dab;font-size:12.5px;margin-top:1px}
.mk-r b.sk{height:8px;width:70%;border-radius:4px;background:#d6def0;margin-top:4px}
.mk-r.ad,.mk-r.hl{border-color:#d9e3ff;background:#f6f8ff}
.mk-tag{display:inline-block;margin-bottom:3px;font-size:9.5px;font-weight:800;color:#14264a;background:#fff;border:1px solid #dfe6f1;border-radius:5px;padding:0 .35rem}
.mk-rank{position:absolute;right:.6rem;top:.55rem;font-size:10px;font-weight:800;color:#fff;background:linear-gradient(135deg,#36c5f3,#6d5df6);padding:.15rem .45rem;border-radius:6px}
.mk-sl{display:flex;gap:.7rem;margin-top:6px}
.mk-sl u{text-decoration:none;color:#1a0dab;font-size:10.5px;font-weight:700}
.mk-map{position:relative;height:96px;border-radius:12px;background:linear-gradient(135deg,#e6f2e6,#e8eef8);background-image:linear-gradient(#fff6 2px,transparent 2px),linear-gradient(90deg,#fff6 2px,transparent 2px),linear-gradient(135deg,#dfeedd,#e3ebf7);background-size:22px 22px,22px 22px,100% 100%}
.mk-map .p{position:absolute;font-size:18px;color:#ea4335}
.mk-map .p1{left:18%;top:22%}.mk-map .p2{left:68%;top:48%}.mk-map .p3{left:42%;top:30%;font-size:24px;color:#6d5df6;filter:drop-shadow(0 4px 6px rgba(109,93,246,.4))}
.mk-pl{padding:.45rem .6rem;border-radius:10px}
.mk-pl.hl{background:#f6f8ff;border:1px solid #d9e3ff}
.mk-pl b{display:block}
.mk .st{color:#f5a623;font-size:10px;font-weight:800}
.mk .st i{font-size:9px}
.mk-au{display:flex;align-items:center;gap:.55rem}
.mk-au .av,.mk-rv .av{flex:none;width:30px;height:30px;border-radius:50%;background:linear-gradient(135deg,#36c5f3,#6d5df6)}
.mk-au span:not(.av){display:flex;flex-direction:column}
.mk-au>i{margin-left:auto;color:#8a95ab}
.mk-tx{margin:0;color:#33415c;font-size:11.5px}
.mk-media{position:relative;height:150px;border-radius:12px;overflow:hidden;display:flex;align-items:flex-end;padding:.8rem;background:linear-gradient(135deg,#193463 0%,#3b5bdb 55%,#6d5df6 100%)}
.mk-media::before{content:"";position:absolute;width:160px;height:160px;border-radius:50%;right:-40px;top:-50px;background:rgba(255,255,255,.14)}
.mk-media .hd{position:relative;z-index:1;color:#fff;font-family:var(--font-primary,'Sora',sans-serif);font-weight:800;font-size:15px;line-height:1.2;max-width:75%}
.mk-media>i{position:absolute;right:1rem;bottom:1rem;width:44px;height:44px;border-radius:50%;display:grid;place-items:center;background:rgba(255,255,255,.95);color:#6d5df6;font-size:16px}
.mk-media .dots{position:absolute;left:50%;bottom:.45rem;transform:translateX(-50%);display:flex;gap:4px}
.mk-media .dots i{width:6px;height:6px;border-radius:50%;background:#fff9}.mk-media .dots i:first-child{background:#fff}
.mk-media.car{box-shadow:12px 0 0 -4px #c9d3ff,24px 0 0 -8px #e1e6ff;margin-right:24px}
.mk-cta{display:flex;align-items:center;justify-content:space-between;padding:.5rem .65rem;border-radius:10px;background:#f2f5fa}
.mk-cta span{font-size:10.5px;color:#6b7790}
.mk-cta b{font-size:11px;color:#fff;background:#0a66c2;padding:.3rem .7rem;border-radius:7px}
.mk-ac{display:flex;gap:.9rem;color:#33415c;font-weight:700;font-size:11px}
.mk-ac span{display:inline-flex;align-items:center;gap:.3rem}
.mk-ac i{font-size:13px}
.mk-ac .r{margin-left:auto}
.mk-chips{display:flex;flex-wrap:wrap;gap:.35rem}
.mk-chips span{font-size:10.5px;font-weight:700;color:#3b4fd8;background:#eef1ff;border:1px solid #dfe4ff;border-radius:999px;padding:.2rem .55rem}
.mk-phone{justify-self:center;width:150px;padding:6px;border-radius:24px;background:#14264a;box-shadow:0 16px 30px rgba(25,52,99,.25)}
.mk-phone .scr{position:relative;height:220px;border-radius:19px;overflow:hidden;background:linear-gradient(160deg,#6d5df6,#36c5f3 70%,#7fd9f8)}
.mk-phone .pl{position:absolute;left:50%;top:42%;transform:translate(-50%,-50%);width:44px;height:44px;border-radius:50%;display:grid;place-items:center;color:#fff;background:rgba(255,255,255,.25);backdrop-filter:blur(4px);font-size:15px}
.mk-phone .side{position:absolute;right:8px;bottom:42px;display:grid;gap:10px;color:#fff;font-size:14px}
.mk-phone .cap{position:absolute;left:10px;right:36px;bottom:16px;color:#fff;font-size:10.5px;line-height:1.3}
.mk-phone .cap b{display:block;font-size:11px}
.mk-phone .bar{position:absolute;left:10px;right:10px;bottom:7px;height:3px;border-radius:3px;background:#fff5}
.mk-phone .bar i{display:block;width:45%;height:100%;border-radius:3px;background:#fff}
.mk-steps{display:flex;flex-wrap:wrap;gap:.35rem;justify-content:center}
.mk-steps span{display:inline-flex;align-items:center;gap:.3rem;font-size:10.5px;font-weight:700;color:#14264a;background:#f2f5fa;border-radius:999px;padding:.22rem .55rem}
.mk-steps i{color:#16a34a;font-size:9px}
.mk-rate{display:flex;align-items:center;gap:.7rem;padding:.4rem .2rem}
.mk-rate>b{font-family:var(--font-primary,'Sora',sans-serif);font-size:30px;line-height:1}
.mk-rate span{display:flex;flex-direction:column;color:#f5a623;font-size:12px}
.mk-rv{display:flex;gap:.55rem;align-items:flex-start;padding:.45rem .5rem;border-radius:10px;background:#f8fafd}
.mk-rv>span:last-child{flex:1}
.mk-rv b{display:block;font-size:11px}
.mk-reply{display:flex;align-items:center;gap:.45rem;font-size:10.5px;font-weight:700;color:#3b4fd8;background:#eef1ff;border-radius:10px;padding:.4rem .6rem}
.mk-tool{display:flex;gap:.8rem;color:#6b7790;font-size:11px;padding:.35rem .5rem;border-radius:8px;background:#f2f5fa}
.mk-doc{padding:.2rem .1rem}
.mk-doc .h1{display:block;font-family:var(--font-primary,'Sora',sans-serif);font-weight:800;font-size:14px;line-height:1.25}
.mk-doc .h2{display:block;margin-top:.6rem;font-weight:800;font-size:12px;color:#3b4fd8}
.mk-meter small{display:block;margin-bottom:3px}
.mk-meter span{display:block;height:7px;border-radius:5px;background:#e3eaf5}
.mk-meter i{display:block;height:100%;border-radius:5px;background:linear-gradient(90deg,#22c55e,#16a34a)}
.mk-fn{display:grid;grid-template-columns:70px 1fr;align-items:center;gap:.5rem}
.mk-fn .lb{font-size:10.5px;font-weight:700;color:#6b7790}
.mk-fn .br{display:flex;align-items:center;justify-content:flex-end;height:26px;padding:0 .55rem;border-radius:8px;background:linear-gradient(90deg,#36c5f3,#6d5df6);color:#fff;font-size:11px;justify-self:center}
.mk-src{display:flex;flex-wrap:wrap;gap:.35rem;justify-content:center;margin-top:.2rem}
.mk-src span{display:inline-flex;align-items:center;gap:.3rem;font-size:10.5px;font-weight:700;background:#f2f5fa;border-radius:999px;padding:.22rem .55rem}
.mk-mail{border:1px solid #e6ecf5;border-radius:12px;overflow:hidden}
.mk-mail .row{display:flex;gap:.6rem;align-items:baseline;padding:.45rem .65rem;border-bottom:1px solid #eef2f8}
.mk-mail .row small{width:46px;flex:none}
.mk-mail .body{padding:.6rem .65rem .75rem}
.mk .btn{display:inline-block;margin-top:.6rem;font-size:11px;font-weight:800;color:#fff;background:linear-gradient(135deg,#1597c9,#193463);padding:.35rem .8rem;border-radius:8px}
.mk-kpis{display:grid;grid-template-columns:repeat(auto-fit,minmax(70px,1fr));gap:.4rem}
.mk-kpis span{padding:.45rem .5rem;border-radius:10px;background:#f6f8ff;border:1px solid #e4e9ff}
.mk-kpis small{display:block}
.mk-kpis b{display:block;font-size:14px;font-family:var(--font-primary,'Sora',sans-serif)}
.mk-kpis em{font-style:normal;font-size:10px;font-weight:800;color:#16a34a}
.mk-chart{padding:.5rem .6rem;border-radius:12px;background:#f8fafd;border:1px solid #eef2f8}
.mk-chart .bars{display:flex;align-items:flex-end;gap:5px;height:70px;margin-top:.4rem}
.mk-chart .bars i{flex:1;border-radius:4px 4px 2px 2px;background:linear-gradient(180deg,#6d5df6,#36c5f3);animation:mkBar .9s cubic-bezier(.2,.7,.2,1) both;transform-origin:bottom}
.mk-ev{display:grid;gap:.3rem}
.mk-ev span{display:flex;align-items:center;gap:.45rem;font-size:11px;font-weight:700;padding:.35rem .55rem;border-radius:8px;background:#f8fafd}
.mk-ev span>i{color:#6d5df6;width:14px}
.mk-ev b{margin-left:auto;font-size:10px;color:#16a34a;display:inline-flex;gap:.25rem;align-items:center}
.mk-cal{display:grid;grid-template-columns:repeat(7,1fr);gap:4px;text-align:center}
.mk-cal small{font-weight:800}
.mk-cal span{position:relative;height:40px;border-radius:8px;background:#f6f8fd;border:1px solid #edf1f8;font-size:9.5px;color:#8a95ab;padding-top:2px}
.mk-cal span i{position:absolute;left:50%;bottom:5px;transform:translateX(-50%);width:18px;height:18px;border-radius:6px;display:grid;place-items:center;font-size:10px;color:#fff}
.mk-cal .ig{background:linear-gradient(135deg,#f58529,#dd2a7b,#8134af)}.mk-cal .fb{background:#1877f2}.mk-cal .in{background:#0a66c2}.mk-cal .rl{background:#14264a}
.mk-score{display:flex;align-items:center;gap:.7rem;padding:.3rem .1rem}
.mk .ring{--v:80;position:relative;flex:none;width:56px;height:56px;border-radius:50%;display:grid;place-items:center;background:conic-gradient(#22c55e calc(var(--v)*1%),#e3eaf5 0)}
.mk .ring::before{content:"";position:absolute;inset:6px;border-radius:50%;background:#fff}
.mk .ring b{position:relative;font-family:var(--font-primary,'Sora',sans-serif);font-size:13px}
.mk-score>span:last-child{display:flex;flex-direction:column}
.mk-ck{display:flex;align-items:center;gap:.45rem;font-size:11px;font-weight:700;padding:.35rem .55rem;border-radius:8px;background:#f8fafd}
.mk-ck>i{color:#22c55e}
.mk-ck em{margin-left:auto;font-style:normal;font-size:10px;font-weight:800;color:#16a34a;background:#e9f9ef;padding:.1rem .45rem;border-radius:5px}
.mk-vit{display:grid;grid-template-columns:repeat(3,1fr);gap:.4rem;text-align:center}
.mk-vit>span{display:grid;justify-items:center;gap:.25rem;padding:.45rem .2rem;border-radius:10px;background:#f8fafd}
.mk-vit .ring{width:50px;height:50px}
.mk-vit .ring b{font-size:10.5px}
.mk-kwh,.mk-kw{display:grid;grid-template-columns:1.6fr 1fr .8fr;gap:.5rem;align-items:center}
.mk-kwh{padding:0 .5rem}
.mk-kw{padding:.42rem .5rem;border-radius:8px;background:#f8fafd;font-size:11px}
.mk-kw .vol{height:6px;border-radius:4px;background:#e3eaf5}
.mk-kw .vol i{display:block;height:100%;border-radius:4px;background:linear-gradient(90deg,#36c5f3,#6d5df6)}
.mk-kw em{font-style:normal;font-size:9.5px;font-weight:800;text-align:center;border-radius:5px;padding:.12rem .3rem;background:#eef1ff;color:#3b4fd8}
.mk-kw em.local{background:#e9f9ef;color:#16a34a}.mk-kw em.buy{background:#fff4e5;color:#c2410c}
.mk-net{position:relative;height:170px;border-radius:12px;background:#f8fafd}
.mk-net svg{position:absolute;inset:0;width:100%;height:100%}
.mk-net .nd{position:absolute;transform:translate(-50%,-50%);display:grid;justify-items:center;gap:2px}
.mk-net .nd i{width:32px;height:32px;border-radius:10px;display:grid;place-items:center;background:#fff;color:#3b4fd8;box-shadow:0 6px 14px rgba(25,52,99,.15);font-size:13px}
.mk-net .nd small{font-weight:700;white-space:nowrap}
.mk-net .nd.c{left:50%;top:50%}.mk-net .nd.c i{width:46px;height:46px;border-radius:14px;color:#fff;background:linear-gradient(135deg,#36c5f3,#6d5df6);font-size:18px}
.mk-net .n1{left:15%;top:21%}.mk-net .n2{left:85%;top:21%}.mk-net .n3{left:13%;top:80%}.mk-net .n4{left:87%;top:80%}.mk-net .n5{left:50%;top:12%}
.mk-is{display:flex;align-items:center;gap:.5rem;font-size:11px;font-weight:700;padding:.38rem .55rem;border-radius:8px;background:#f8fafd}
.mk-is b{margin-left:auto;font-size:10.5px}
.mk-is .sv{width:8px;height:8px;border-radius:50%}
.mk-is .sv.hi{background:#ef4444}.mk-is .sv.md{background:#f59e0b}.mk-is .sv.lo{background:#22c55e}
.mk-shop{display:grid;grid-template-columns:1fr 1fr;gap:.5rem}
.mk-shop .pc{display:grid;gap:2px;padding:.45rem;border-radius:12px;border:1px solid #e6ecf5}
.mk-shop .im{height:72px;border-radius:9px;display:grid;place-items:center;font-size:26px;color:#6d5df6;background:linear-gradient(135deg,#eef3ff,#ece7ff);margin-bottom:4px}
.mk-shop b{font-size:11px}
.mk-shop em{font-style:normal;font-weight:800;font-size:12.5px;color:#14264a}
.mk-lp,.mk-site{border:1px solid #e6ecf5;border-radius:12px;overflow:hidden}
.mk-lp .nv,.mk-site .nv{display:flex;align-items:center;gap:.4rem;padding:.4rem .55rem;background:#f6f8fd}
.mk-lp .nv i,.mk-site .nv i{width:34px;height:7px;border-radius:4px;background:linear-gradient(90deg,#36c5f3,#6d5df6)}
.mk-lp .nv span,.mk-site .nv span{width:22px;height:5px;border-radius:3px;background:#d6def0}
.mk-lp .hero{padding:.7rem .7rem .6rem;background:linear-gradient(135deg,#193463,#3b5bdb);color:#fff}
.mk-lp .hero .hd{display:block;font-family:var(--font-primary,'Sora',sans-serif);font-weight:800;font-size:13px}
.mk-lp .hero .ln{background:rgba(255,255,255,.3)}
.mk-lp .hero .btn{background:#fff;color:#193463}
.mk-lp .form{display:grid;gap:5px;padding:.6rem .7rem}
.mk-lp .form i{height:16px;border-radius:6px;border:1px solid #dfe6f1;background:#fff}
.mk-lp .form span{text-align:center;font-size:10.5px;font-weight:800;color:#fff;background:#22c55e;border-radius:6px;padding:.25rem}
.mk-site .cols{display:grid;grid-template-columns:1.3fr 1fr;gap:.6rem;padding:.6rem}
.mk-site .ad{display:grid;align-content:center;gap:.3rem;padding:.6rem;border-radius:10px;color:#fff;background:linear-gradient(135deg,#6d5df6,#36c5f3);box-shadow:0 0 0 3px #fff,0 0 0 5px #b9c6ff}
.mk-site .ad small{color:#fff;opacity:.8;font-weight:800;font-size:9px;letter-spacing:.1em;text-transform:uppercase}
.mk-site .ad b{font-size:12px;line-height:1.25}
.mk-site .ad em{font-style:normal;justify-self:start;font-size:10px;font-weight:800;color:#193463;background:#fff;border-radius:6px;padding:.2rem .5rem}
.mk-f{position:absolute;z-index:2;display:inline-flex;align-items:center;gap:.4rem;padding:.45rem .75rem;border-radius:999px;background:#fff;box-shadow:0 12px 26px rgba(25,52,99,.18);font-size:11px;font-weight:800;color:#14264a;white-space:nowrap;animation:sxBob 5s ease-in-out infinite}
.mk-f i{color:#6d5df6}
.mk-f.f1{top:1rem;right:1rem}
.mk-f.f2{bottom:1rem;left:1rem;animation-delay:-2.5s}
.mk-rate>span{color:#f5a623}
.mk-rate .st{display:block;font-size:13px;letter-spacing:1px}
.mk-ac i{color:#33415c}.mk-ac span:first-child i{color:#ef4565}
.mk--map .mk-bd,.mk--kw .mk-bd,.mk--shop .mk-bd,.mk--cal .mk-bd{display:grid}
@keyframes mkIn{from{opacity:0;transform:translateY(14px) scale(.98)}to{opacity:1;transform:none}}
@keyframes mkBar{from{transform:scaleY(.1)}to{transform:none}}
@media (max-width:1199.98px){.mk-f{display:none}}
@media (max-width:767.98px){.sx-panel.mock{grid-template-columns:1fr}.sx-mock{min-height:0;padding:1.3rem 1rem}.mk{max-width:340px}}
@media (prefers-reduced-motion:reduce){.mk,.mk-chart .bars i,.mk-f{animation:none!important}}

</style>

<script>document.documentElement.classList.add('sx-js');</script>
<div class="sx-progress" id="sxProgress" aria-hidden="true"></div>
<div class="sx">

<!-- ================= HERO ================= -->
<section class="sx-hero" id="sxHero">
    <div class="sx-wrap">
        <div class="sx-hero-grid">
            <div class="sx-hero-copy">
                <span class="sx-badge sx-in"><span class="sx-dot"></span>Trusted SEO Company in Mumbai</span>
                <h1 class="sx-in" style="animation-delay:.1s"><span class="ln">SEO Agency in Mumbai</span><span class="ln sx-grad">for Higher Rankings</span><span class="ln">&amp; Business Growth</span></h1>
                <p class="sx-hero-desc sx-in" style="animation-delay:.2s">Looking for a reliable SEO agency in Mumbai to improve your website rankings, organic traffic, and online visibility? Technofra is an experienced SEO company in Mumbai offering results-driven SEO strategies designed around your business goals.</p>
<<<<<<< HEAD
                <div class="sx-actions sx-in" style="animation-delay:.3s"><a href="enquirynow.php" class="sx-btn">Enquiry Now <i class="fa-solid fa-arrow-right"></i></a><a href="contact.php" class="sx-btn sx-btn-line">Contact Us <i class="fa-solid fa-arrow-right"></i></a></div>
=======
                <div class="sx-actions sx-in" style="animation-delay:.3s"><a href="/enquirynow" class="sx-btn">Enquiry Now <i class="fa-solid fa-arrow-right"></i></a><a href="/contact" class="sx-btn sx-btn-line">Contact Us <i class="fa-solid fa-arrow-right"></i></a></div>
>>>>>>> 496e236 (pages added)
                <ul class="sx-checks sx-in" style="animation-delay:.4s">
                    <li><i class="fa-solid fa-circle-check"></i>Customized SEO Strategies</li>
                    <li><i class="fa-solid fa-circle-check"></i>Transparent Reporting</li>
                    <li><i class="fa-solid fa-circle-check"></i>Local SEO in Mumbai</li>
                    <li><i class="fa-solid fa-circle-check"></i>Ethical Link Building</li>
                </ul>
            </div>
            <div class="sx-hero-visual sx-in" style="animation-delay:.25s">
                <div class="sx-hero-img land"><img src="./assets/images/about/hero-dashboard3.webp" width="1000" height="750" fetchpriority="high" decoding="async" alt="SEO agency in Mumbai dashboard showing keyword rankings, organic traffic, conversions and an upward growth trend"></div>
            </div>
        </div>
        <div class="sx-stats sx-in" style="animation-delay:.45s" aria-label="At a glance">
            <div class="sx-st"><span class="sx-ico"><i class="fa-solid fa-layer-group"></i></span><div><b data-count="8">8</b><span class="l">SEO services under one roof</span></div></div>
            <div class="sx-st"><span class="sx-ico"><i class="fa-solid fa-route"></i></span><div><b data-count="6">6</b><span class="l">Step process, audit to optimization</span></div></div>
            <div class="sx-st"><span class="sx-ico"><i class="fa-solid fa-store"></i></span><div><b data-count="4">4</b><span class="l">Business types we plan for</span></div></div>
            <div class="sx-st"><span class="sx-ico"><i class="fa-solid fa-location-dot"></i></span><div><b>Kandivali</b><span class="l">Office in Mumbai</span></div></div>
        </div>
    </div>
</section>

<!-- ================= INTRO + WHY CHOOSE ================= -->
<section class="sx-sec">
    <div class="sx-wrap">
        <div class="sx-about rev">
            <div class="sx-body">
                <span class="sx-eyebrow sx-reveal">SEO Company in Mumbai</span>
                <h2 class="sx-h2 sx-reveal" style="--d:.06s">Experienced <span class="sx-grad">SEO Company in Mumbai</span></h2>
<<<<<<< HEAD
                <p class="sx-lead sx-reveal" style="--d:.12s">Our SEO services in Mumbai combine technical SEO, on-page optimization, <a href="content-marketing.php">content strategy</a>, local SEO, keyword research, link building, and performance tracking. We focus on attracting relevant visitors who are more likely to become enquiries, customers, and long-term business opportunities.</p>
=======
                <p class="sx-lead sx-reveal" style="--d:.12s">Our SEO services in Mumbai combine technical SEO, on-page optimization, <a href="/content-marketing">content strategy</a>, local SEO, keyword research, link building, and performance tracking. We focus on attracting relevant visitors who are more likely to become enquiries, customers, and long-term business opportunities.</p>
>>>>>>> 496e236 (pages added)
                <p class="sx-lead sx-reveal" style="--d:.18s">Whether you are a local business, startup, eCommerce brand, professional service provider, or established company, our SEO team creates a customized strategy to help your website compete for valuable search terms and generate sustainable organic growth.</p>
            </div>
            <div class="sx-list sx-reveal" style="--d:.1s">
                <div class="sx-wy" data-spot><span class="sx-ico"><i class="fa-solid fa-magnifying-glass-chart"></i></span><div><h3>Audit first</h3><p>We start by analyzing your website, rankings, competitors and keyword opportunities.</p></div></div>
                <div class="sx-wy" data-spot><span class="sx-ico"><i class="fa-solid fa-link"></i></span><div><h3>Ethical link building</h3><p>Authority built through relevant, sustainable off-page work.</p></div></div>
                <div class="sx-wy" data-spot><span class="sx-ico"><i class="fa-solid fa-file-lines"></i></span><div><h3>Transparent reporting</h3><p>Rankings, traffic and conversions tracked and explained.</p></div></div>
            </div>
        </div>

        <div class="sx-card2 sx-reveal">
            <div class="sx-body">
                <span class="sx-eyebrow">Why Technofra</span>
                <h2 class="sx-h2 sm">Why Choose Technofra as Your <span class="sx-grad">SEO Company in Mumbai?</span></h2>
                <p class="sx-lead">Choosing the right SEO partner can make a significant difference to your website's visibility and lead generation. At Technofra, we combine SEO expertise, content planning, technical improvements, and data-driven optimization to create a complete search growth strategy.</p>
                <p class="sx-lead">As a performance-focused SEO service provider in Mumbai, we work on the areas that have the greatest impact on search visibility and conversions.</p>
            </div>
            <div class="sx-grid c2 keep2" style="align-content:center">
                <div class="sx-wy mini" data-spot><span class="sx-ico"><i class="fa-solid fa-bullseye"></i></span><h3>Customized SEO strategies based on your business objectives</h3></div>
                <div class="sx-wy mini" data-spot><span class="sx-ico"><i class="fa-solid fa-key"></i></span><h3>Keyword research focused on search intent and business value</h3></div>
                <div class="sx-wy mini" data-spot><span class="sx-ico"><i class="fa-solid fa-gears"></i></span><h3>Technical SEO improvements for better crawling and indexing</h3></div>
                <div class="sx-wy mini" data-spot><span class="sx-ico"><i class="fa-solid fa-file-pen"></i></span><h3>On-page optimization for important landing pages</h3></div>
                <div class="sx-wy mini" data-spot><span class="sx-ico"><i class="fa-solid fa-location-dot"></i></span><h3>Local SEO strategies for Mumbai-based businesses</h3></div>
                <div class="sx-wy mini" data-spot><span class="sx-ico"><i class="fa-solid fa-pen-nib"></i></span><h3>Content optimization and SEO-focused content planning</h3></div>
                <div class="sx-wy mini" data-spot><span class="sx-ico"><i class="fa-solid fa-link"></i></span><h3>Ethical link building and authority development</h3></div>
                <div class="sx-wy mini" data-spot><span class="sx-ico"><i class="fa-solid fa-chart-line"></i></span><h3>Transparent performance reporting and tracking</h3></div>
            </div>
        </div>
    </div>
</section>

<!-- ================= SERVICES (tabs) ================= -->
<?php
/* ---------- Service illustrations (pure HTML/CSS, decorative, always fully visible) ---------- */
if (!function_exists('sx_mock')) {
    function sx_e($s) { return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8'); }
    function sx_stars($n = 5) { return str_repeat('<i class="fa-solid fa-star"></i>', $n); }
    function sx_mock(array $m) {
        $t = $m['type'];
        $o = '<div class="sx-mock" aria-hidden="true"><div class="mk mk--' . $t . '">';
        $o .= '<div class="mk-h"><span class="mk-b" style="background:' . ($m['bg'] ?? '#eef3ff') . ';color:' . ($m['fg'] ?? '#193463') . '"><i class="' . $m['icon'] . '"></i></span>'
            . '<span class="mk-tt"><b>' . sx_e($m['title']) . '</b><small>' . sx_e($m['sub'] ?? '') . '</small></span><em>Sample</em></div><div class="mk-bd">';
        switch ($t) {
            case 'serp':
                $o .= '<div class="mk-q"><i class="fa-solid fa-magnifying-glass"></i>' . sx_e($m['q']) . '</div>';
                foreach ($m['rows'] as $r) {
                    $cls = 'mk-r' . (!empty($r['ad']) ? ' ad' : '') . (!empty($r['hl']) ? ' hl' : '');
                    $o .= '<div class="' . $cls . '">';
                    if (!empty($r['ad'])) { $o .= '<span class="mk-tag">' . sx_e($r['ad']) . '</span>'; }
                    if (!empty($r['rank'])) { $o .= '<span class="mk-rank">' . sx_e($r['rank']) . '</span>'; }
                    $o .= '<small>' . sx_e($r['url'] ?? '') . '</small>';
                    $o .= !empty($r['title']) ? '<b>' . sx_e($r['title']) . '</b>' : '<b class="sk"></b>';
                    $o .= '<i class="ln"></i><i class="ln s"></i>';
                    if (!empty($r['links'])) { $o .= '<span class="mk-sl">' . implode('', array_map(function ($l) { return '<u>' . sx_e($l) . '</u>'; }, $r['links'])) . '</span>'; }
                    $o .= '</div>';
                }
                break;
            case 'map':
                $o .= '<div class="mk-q"><i class="fa-solid fa-magnifying-glass"></i>' . sx_e($m['q']) . '</div><div class="mk-map"><span class="p p1"><i class="fa-solid fa-location-dot"></i></span><span class="p p2"><i class="fa-solid fa-location-dot"></i></span><span class="p p3 me"><i class="fa-solid fa-location-dot"></i></span></div>';
                foreach ($m['rows'] as $k => $r) {
                    $o .= '<div class="mk-pl' . ($k === 0 ? ' hl' : '') . '"><b>' . sx_e($r[0]) . '</b><span class="st">' . sx_e($r[1]) . ' ' . sx_stars() . '</span><small>' . sx_e($r[2]) . '</small></div>';
                }
                break;
            case 'post':
            case 'li':
                $o .= '<div class="mk-au"><span class="av"></span><span><b>' . sx_e($m['name']) . '</b><small>' . sx_e($m['meta']) . '</small></span><i class="fa-solid fa-ellipsis"></i></div>';
                if (!empty($m['text'])) { $o .= '<p class="mk-tx">' . sx_e($m['text']) . '</p>'; }
                $o .= '<div class="mk-media' . (!empty($m['slides']) ? ' car' : '') . '"><span class="hd">' . sx_e($m['head']) . '</span>' . (!empty($m['mi']) ? '<i class="' . $m['mi'] . '"></i>' : '') . (!empty($m['slides']) ? '<span class="dots"><i></i><i></i><i></i></span>' : '') . '</div>';
                if (!empty($m['cta'])) { $o .= '<div class="mk-cta"><span>' . sx_e($m['ctaurl'] ?? '') . '</span><b>' . sx_e($m['cta']) . '</b></div>'; }
                $o .= '<div class="mk-ac"><span><i class="fa-solid fa-heart"></i>' . sx_e($m['likes'] ?? '') . '</span><span><i class="fa-solid fa-comment"></i>' . sx_e($m['comments'] ?? '') . '</span><span><i class="fa-solid fa-paper-plane"></i></span><span class="r"><i class="fa-solid fa-bookmark"></i></span></div>';
                if (!empty($m['chips'])) { $o .= '<div class="mk-chips">' . implode('', array_map(function ($c) { return '<span>' . sx_e($c) . '</span>'; }, $m['chips'])) . '</div>'; }
                break;
            case 'reel':
                $o .= '<div class="mk-phone"><div class="scr"><span class="pl"><i class="fa-solid fa-play"></i></span><span class="side"><i class="fa-solid fa-heart"></i><i class="fa-solid fa-comment"></i><i class="fa-solid fa-share"></i></span><span class="cap"><b>' . sx_e($m['name']) . '</b>' . sx_e($m['head']) . '</span><span class="bar"><i></i></span></div></div>'
                    . '<div class="mk-steps">' . implode('', array_map(function ($s) { return '<span><i class="fa-solid fa-check"></i>' . sx_e($s) . '</span>'; }, $m['steps'])) . '</div>';
                break;
            case 'reviews':
                $o .= '<div class="mk-rate"><b>' . sx_e($m['score']) . '</b><span><span class="st">' . sx_stars() . '</span><small>' . sx_e($m['count']) . '</small></span></div>';
                foreach ($m['rows'] as $r) {
                    $o .= '<div class="mk-rv"><span class="av"></span><span><b>' . sx_e($r[0]) . '</b><span class="st">' . sx_stars() . '</span><i class="ln"></i></span></div>';
                }
                $o .= '<div class="mk-reply"><i class="fa-solid fa-reply"></i>' . sx_e($m['reply']) . '</div>';
                break;
            case 'content':
                $o .= '<div class="mk-tool"><i class="fa-solid fa-bold"></i><i class="fa-solid fa-italic"></i><i class="fa-solid fa-heading"></i><i class="fa-solid fa-link"></i><i class="fa-solid fa-image"></i><i class="fa-solid fa-list-ul"></i></div>'
                    . '<div class="mk-doc"><span class="h1">' . sx_e($m['h1']) . '</span><i class="ln"></i><i class="ln"></i><i class="ln s"></i><span class="h2">' . sx_e($m['h2']) . '</span><i class="ln"></i><i class="ln s"></i></div>'
                    . '<div class="mk-chips">' . implode('', array_map(function ($c) { return '<span>' . sx_e($c) . '</span>'; }, $m['chips'])) . '</div>'
                    . '<div class="mk-meter"><small>' . sx_e($m['meter']) . '</small><span><i style="width:' . (int) $m['pct'] . '%"></i></span></div>';
                break;
            case 'funnel':
                foreach ($m['rows'] as $k => $r) {
                    $o .= '<div class="mk-fn"><span class="lb">' . sx_e($r[0]) . '</span><span class="br" style="width:' . (int) $r[1] . '%"><b>' . sx_e($r[2]) . '</b></span></div>';
                }
                $o .= '<div class="mk-src">' . implode('', array_map(function ($c) { return '<span><i class="' . $c[0] . '"></i>' . sx_e($c[1]) . '</span>'; }, $m['src'])) . '</div>';
                break;
            case 'email':
                $o .= '<div class="mk-mail"><div class="row"><small>From</small><b>' . sx_e($m['from']) . '</b></div><div class="row"><small>Subject</small><b>' . sx_e($m['subject']) . '</b></div><div class="body"><i class="ln"></i><i class="ln"></i><i class="ln s"></i><span class="btn">' . sx_e($m['btn']) . '</span></div></div>';
                $o .= '<div class="mk-kpis">' . implode('', array_map(function ($k) { return '<span><small>' . sx_e($k[0]) . '</small><b>' . sx_e($k[1]) . '</b></span>'; }, $m['kpis'])) . '</div>';
                break;
            case 'dash':
                $o .= '<div class="mk-kpis">' . implode('', array_map(function ($k) { return '<span><small>' . sx_e($k[0]) . '</small><b>' . sx_e($k[1]) . '</b><em>' . sx_e($k[2]) . '</em></span>'; }, $m['kpis'])) . '</div>';
                $o .= '<div class="mk-chart"><small>' . sx_e($m['chart']) . '</small><div class="bars">' . implode('', array_map(function ($h) { return '<i style="height:' . (int) $h . '%"></i>'; }, $m['bars'])) . '</div></div>';
                if (!empty($m['events'])) {
                    $o .= '<div class="mk-ev">' . implode('', array_map(function ($e) { return '<span><i class="' . $e[0] . '"></i>' . sx_e($e[1]) . '<b><i class="fa-solid fa-circle-check"></i>Tracked</b></span>'; }, $m['events'])) . '</div>';
                }
                break;
            case 'cal':
                $o .= '<div class="mk-cal">';
                foreach (['M', 'T', 'W', 'T', 'F', 'S', 'S'] as $d) { $o .= '<small>' . $d . '</small>'; }
                for ($c = 1; $c <= 14; $c++) {
                    $o .= '<span>' . ($c + 2) . (isset($m['posts'][$c]) ? '<i class="' . $m['posts'][$c][0] . ' ' . $m['posts'][$c][1] . '"></i>' : '') . '</span>';
                }
                $o .= '</div><div class="mk-steps">' . implode('', array_map(function ($s) { return '<span><i class="fa-solid fa-check"></i>' . sx_e($s) . '</span>'; }, $m['steps'])) . '</div>';
                break;
            case 'check':
                $o .= '<div class="mk-score"><span class="ring" style="--v:' . (int) $m['score'] . '"><b>' . (int) $m['score'] . '</b></span><span><b>' . sx_e($m['label']) . '</b><small>' . sx_e($m['note']) . '</small></span></div>';
                foreach ($m['items'] as $it) {
                    $o .= '<div class="mk-ck"><i class="fa-solid fa-circle-check"></i>' . sx_e($it[0]) . '<em>' . sx_e($it[1]) . '</em></div>';
                }
                break;
            case 'vitals':
                $o .= '<div class="mk-vit">';
                foreach ($m['rings'] as $r) { $o .= '<span><span class="ring" style="--v:' . (int) $r[2] . '"><b>' . sx_e($r[1]) . '</b></span><small>' . sx_e($r[0]) . '</small></span>'; }
                $o .= '</div>';
                foreach ($m['items'] as $it) { $o .= '<div class="mk-ck"><i class="fa-solid fa-circle-check"></i>' . sx_e($it) . '<em>Fixed</em></div>'; }
                break;
            case 'kw':
                $o .= '<div class="mk-kwh"><small>Keyword</small><small>Volume</small><small>Intent</small></div>';
                foreach ($m['rows'] as $r) {
                    $o .= '<div class="mk-kw"><b>' . sx_e($r[0]) . '</b><span class="vol"><i style="width:' . (int) $r[1] . '%"></i></span><em class="' . sx_e(strtolower($r[2])) . '">' . sx_e($r[2]) . '</em></div>';
                }
                break;
            case 'links':
                $o .= '<div class="mk-net"><svg viewBox="0 0 300 170" preserveAspectRatio="xMidYMid meet"><g stroke="#b9c6ff" stroke-width="2" stroke-dasharray="4 4"><line x1="150" y1="85" x2="45" y2="35"/><line x1="150" y1="85" x2="255" y2="35"/><line x1="150" y1="85" x2="40" y2="138"/><line x1="150" y1="85" x2="260" y2="138"/><line x1="150" y1="85" x2="150" y2="18"/></g></svg>'
                    . '<span class="nd c"><i class="fa-solid fa-globe"></i></span>';
                foreach ($m['nodes'] as $k => $n) { $o .= '<span class="nd n' . ($k + 1) . '"><i class="' . $n[0] . '"></i><small>' . sx_e($n[1]) . '</small></span>'; }
                $o .= '</div><div class="mk-kpis">' . implode('', array_map(function ($k) { return '<span><small>' . sx_e($k[0]) . '</small><b>' . sx_e($k[1]) . '</b></span>'; }, $m['kpis'])) . '</div>';
                break;
            case 'audit':
                $o .= '<div class="mk-score"><span class="ring" style="--v:' . (int) $m['score'] . '"><b>' . (int) $m['score'] . '</b></span><span><b>Site health</b><small>' . sx_e($m['note']) . '</small></span></div>';
                foreach ($m['rows'] as $r) { $o .= '<div class="mk-is"><span class="sv ' . $r[0] . '"></span>' . sx_e($r[1]) . '<b>' . sx_e($r[2]) . '</b></div>'; }
                break;
            case 'shop':
                $o .= '<div class="mk-q"><i class="fa-solid fa-magnifying-glass"></i>' . sx_e($m['q']) . '</div><div class="mk-shop">';
                foreach ($m['items'] as $p) {
                    $o .= '<span class="pc"><span class="im"><i class="' . $p[0] . '"></i></span><b>' . sx_e($p[1]) . '</b><em>' . sx_e($p[2]) . '</em><small>' . sx_e($p[3]) . '</small><span class="st">' . sx_stars() . '</span></span>';
                }
                $o .= '</div>';
                break;
            case 'landing':
                $o .= '<div class="mk-lp"><div class="nv"><i></i><span></span><span></span><span></span></div><div class="hero"><span class="hd">' . sx_e($m['head']) . '</span><i class="ln"></i><i class="ln s"></i><span class="btn">' . sx_e($m['btn']) . '</span></div><div class="form"><i></i><i></i><span>' . sx_e($m['form']) . '</span></div></div>'
                    . '<div class="mk-kpis">' . implode('', array_map(function ($k) { return '<span><small>' . sx_e($k[0]) . '</small><b>' . sx_e($k[1]) . '</b></span>'; }, $m['kpis'])) . '</div>';
                break;
            case 'display':
                $o .= '<div class="mk-site"><div class="nv"><i></i><span></span><span></span></div><div class="cols"><span class="art"><i class="ln"></i><i class="ln"></i><i class="ln s"></i><i class="ln"></i><i class="ln s"></i></span><span class="ad"><small>Ad</small><b>' . sx_e($m['ad']) . '</b><em>' . sx_e($m['btn']) . '</em></span></div></div>'
                    . '<div class="mk-steps">' . implode('', array_map(function ($s) { return '<span><i class="fa-solid fa-check"></i>' . sx_e($s) . '</span>'; }, $m['steps'])) . '</div>';
                break;
        }
        $o .= '</div></div>';
        foreach (($m['float'] ?? []) as $k => $f) {
            $o .= '<span class="mk-f f' . ($k + 1) . '"><i class="' . $f[0] . '"></i>' . sx_e($f[1]) . '</span>';
        }
        return $o . '</div>';
    }
}
?>
<?php
$sxTabs = [
    ['fa-solid fa-file-pen', 'On-Page SEO', 'Our on-page SEO service improves the relevance and structure of your website pages. We optimize page titles, meta descriptions, headings, URLs, internal links, content, images, and other important on-page elements.'],
    ['fa-solid fa-gears', 'Technical SEO', 'Technical SEO creates a strong foundation for your website\'s organic performance. Our team identifies and resolves issues related to crawlability, indexing, website structure, page speed, mobile usability, redirects, canonical tags, structured data, and Core Web Vitals.'],
    ['fa-solid fa-location-dot', 'Local SEO', 'If your business serves customers in Mumbai or specific locations, local SEO can help you reach people searching for your services nearby. Our strategy can include Google Business Profile optimization, local keyword targeting, location-focused landing pages, citations, and review strategy.'],
    ['fa-solid fa-key', 'Keyword Research &amp; Strategy', 'We identify relevant keywords based on search volume, competition, user intent, and business value, then build keyword groups around the services, products, locations, and questions that matter to your customers.'],
    ['fa-solid fa-pen-nib', 'Content SEO', 'High-quality content helps search engines understand your expertise and gives potential customers useful information before they make a decision. We create and optimize service pages, landing pages, blogs, FAQs, and supporting content.'],
    ['fa-solid fa-link', 'Off-Page SEO &amp; Link Building', 'We work on building your website\'s authority through ethical link acquisition, relevant citations, brand mentions, outreach, and other sustainable off-page SEO activities.'],
    ['fa-solid fa-magnifying-glass-chart', 'SEO Audit', 'Our SEO audit identifies technical problems, content gaps, keyword opportunities, indexing issues, on-page weaknesses, competitor gaps, and other factors affecting your website\'s organic performance.'],
    ['fa-solid fa-chart-column', 'SEO Reporting &amp; Performance Tracking', 'We monitor keyword rankings, organic traffic, landing-page performance, conversions, and other important SEO metrics. Regular reporting helps identify what is working and where further optimization is required.'],
];
$sxG  = ['icon' => 'fa-brands fa-google', 'bg' => '#eef4ff', 'fg' => '#4285f4'];
$sxMS = ['icon' => 'fa-brands fa-microsoft', 'bg' => '#e6f6fd', 'fg' => '#00a4ef'];
$sxLI = ['icon' => 'fa-brands fa-linkedin-in', 'bg' => '#0a66c2', 'fg' => '#fff'];
$sxMT = ['icon' => 'fa-brands fa-meta', 'bg' => '#e7f1ff', 'fg' => '#0081fb'];
$sxIG = ['icon' => 'fa-brands fa-instagram', 'bg' => 'linear-gradient(135deg,#f58529,#dd2a7b,#8134af)', 'fg' => '#fff'];
$sxBR = ['icon' => 'fa-solid fa-chart-column', 'bg' => 'linear-gradient(135deg,#36c5f3,#6d5df6)', 'fg' => '#fff'];
$sxMocks = [
    $sxBR + ['type' => 'check', 'icon' => 'fa-solid fa-file-pen', 'title' => 'On-page SEO check', 'sub' => 'Service page', 'score' => 94, 'label' => 'Page score', 'note' => 'All key checks passed', 'items' => [['Title tag', 'Optimized'], ['Meta description', 'Optimized'], ['H1 and headings', 'Optimized'], ['Internal links', 'Added'], ['Image alt text', 'Added']]],
    $sxBR + ['type' => 'vitals', 'icon' => 'fa-solid fa-gauge-high', 'title' => 'Core Web Vitals', 'sub' => 'Mobile · page experience', 'rings' => [['LCP', '2.1s', 86], ['INP', '140ms', 90], ['CLS', '0.04', 95]], 'items' => ['Crawl errors resolved', 'XML sitemap submitted', 'Canonical tags set'], 'float' => [['fa-solid fa-bolt', 'Faster pages']]],
    ['icon' => 'fa-solid fa-map-location-dot', 'bg' => '#e9f9ef', 'fg' => '#16a34a', 'type' => 'map', 'title' => 'Google Maps', 'sub' => 'Local results', 'q' => 'physiotherapist near kandivali', 'rows' => [['Your Clinic', '4.9', 'Open now · 0.8 km'], ['Another clinic', '4.3', 'Closes 8 pm · 1.6 km'], ['Third clinic', '4.1', '2.4 km']], 'float' => [['fa-solid fa-location-dot', 'Top 3 in local pack']]],
    $sxBR + ['type' => 'kw', 'icon' => 'fa-solid fa-key', 'title' => 'Keyword research', 'sub' => 'Grouped by intent', 'rows' => [['seo agency mumbai', 86, 'Buy'], ['seo services near me', 70, 'Local'], ['what is local seo', 54, 'Info'], ['seo cost in mumbai', 42, 'Buy'], ['seo for clinics', 30, 'Info']]],
    $sxBR + ['type' => 'content', 'icon' => 'fa-solid fa-pen-nib', 'title' => 'Content brief', 'sub' => 'Service page draft', 'h1' => 'Dental Implants in Andheri: Cost and Process', 'h2' => 'Frequently asked questions', 'chips' => ['Primary keyword', 'Related terms', 'FAQ schema'], 'meter' => 'Content score', 'pct' => 88],
    $sxBR + ['type' => 'links', 'icon' => 'fa-solid fa-link', 'title' => 'Backlink profile', 'sub' => 'Earned this quarter', 'nodes' => [['fa-solid fa-newspaper', 'News site'], ['fa-solid fa-building', 'Directory'], ['fa-solid fa-blog', 'Blog'], ['fa-solid fa-handshake', 'Partner'], ['fa-solid fa-map-pin', 'Citations']], 'kpis' => [['New referring domains', '+18'], ['Spam links', '0']]],
    $sxBR + ['type' => 'audit', 'icon' => 'fa-solid fa-magnifying-glass-chart', 'title' => 'SEO audit', 'sub' => '312 pages crawled', 'score' => 78, 'note' => '14 issues to fix', 'rows' => [['hi', 'Broken internal links', '6'], ['md', 'Missing meta descriptions', '5'], ['md', 'Slow mobile pages', '2'], ['lo', 'Images without alt text', '1']]],
    $sxBR + ['type' => 'dash', 'title' => 'SEO report', 'sub' => 'Monthly summary', 'kpis' => [['Clicks', '8,920', '+21%'], ['Top-10 keywords', '64', '+12'], ['Enquiries', '148', '+19%']], 'chart' => 'Organic clicks by month', 'bars' => [30, 36, 41, 47, 52, 60, 66, 78]],
];

$sxTabTotal = str_pad((string) count($sxTabs), 2, '0', STR_PAD_LEFT);
?>
<section class="sx-sec sx-dark" id="services">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">SEO Services</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.06s">Our <span class="sx-grad">SEO Services in Mumbai</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.12s">We provide comprehensive SEO solutions for businesses looking to increase their search visibility and generate qualified organic traffic.</p>
        </div>
        <div class="sx-svc sx-reveal">
            <div class="sx-tablist" role="tablist" aria-label="SEO services">
<?php foreach ($sxTabs as $i => $t): $n = str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT); ?>
                <button class="sx-tab" type="button" role="tab" id="sxTab<?php echo $n; ?>" aria-controls="sxPan<?php echo $n; ?>" aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>" tabindex="<?php echo $i === 0 ? '0' : '-1'; ?>"><span class="n"><?php echo $n; ?></span><span><?php echo $t[1]; ?></span><i class="fa-solid fa-arrow-right arr" aria-hidden="true"></i></button>
<?php endforeach; ?>
            </div>
            <div class="sx-panels">
<?php foreach ($sxTabs as $i => $t): $n = str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT); ?>
                <article class="sx-panel mock" role="tabpanel" id="sxPan<?php echo $n; ?>" aria-labelledby="sxTab<?php echo $n; ?>" tabindex="0"<?php echo $i === 0 ? '' : ' hidden'; ?>>
                    <?php echo sx_mock($sxMocks[$i]); ?>
                    <div class="cp">
                        <span class="num">SERVICE <?php echo $n; ?> / <?php echo $sxTabTotal; ?></span>
                        <h3><?php echo $t[1]; ?></h3>
                        <p><?php echo $t[2]; ?></p>
<<<<<<< HEAD
                        <div class="sx-actions"><a href="enquirynow.php" class="sx-btn sx-btn-white">Discuss This Service <i class="fa-solid fa-arrow-right"></i></a></div>
=======
                        <div class="sx-actions"><a href="/enquirynow" class="sx-btn sx-btn-white">Discuss This Service <i class="fa-solid fa-arrow-right"></i></a></div>
>>>>>>> 496e236 (pages added)
                    </div>
                </article>
<?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ================= BUSINESS RESULTS + BUSINESS TYPES ================= -->
<section class="sx-sec">
    <div class="sx-wrap sx-split">
        <div>
            <span class="sx-eyebrow sx-reveal">Business Results</span>
            <h2 class="sx-h2 sm sx-reveal" style="--d:.06s">Best SEO Services in Mumbai Focused on <span class="sx-grad">Business Results</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.12s">SEO should be more than achieving higher rankings. The right strategy should help your business attract relevant users and turn organic visibility into enquiries and sales. Our approach focuses on:</p>
            <div class="sx-why">
                <article class="sx-wy sx-reveal" data-spot><span class="sx-ico"><i class="fa-solid fa-eye"></i></span><div><h3>Better Search Visibility</h3><p>Improve your website's presence for relevant searches and reach potential customers when they are actively looking for your products or services.</p></div></article>
                <article class="sx-wy sx-reveal" style="--d:.06s" data-spot><span class="sx-ico"><i class="fa-solid fa-users"></i></span><div><h3>Qualified Organic Traffic</h3><p>Target high-intent keywords and optimize landing pages to attract visitors who are more likely to engage with your business.</p></div></article>
                <article class="sx-wy sx-reveal" style="--d:.12s" data-spot><span class="sx-ico"><i class="fa-solid fa-phone-volume"></i></span><div><h3>More Leads &amp; Enquiries</h3><p>Build search-focused pages that answer customer needs and create clear paths toward enquiries, calls, bookings, or purchases.</p></div></article>
                <article class="sx-wy sx-reveal" style="--d:.18s" data-spot><span class="sx-ico"><i class="fa-solid fa-seedling"></i></span><div><h3>Sustainable Organic Growth</h3><p>SEO is a long-term investment. We continuously improve technical performance, content quality, authority, and keyword coverage to support consistent growth.</p></div></article>
            </div>
<<<<<<< HEAD
            <div class="sx-actions sx-reveal"><a href="enquirynow.php" class="sx-btn">Enquire Now <i class="fa-solid fa-arrow-right"></i></a></div>
=======
            <div class="sx-actions sx-reveal"><a href="/enquirynow" class="sx-btn">Enquire Now <i class="fa-solid fa-arrow-right"></i></a></div>
>>>>>>> 496e236 (pages added)
        </div>
        <aside class="sx-ind sx-reveal" style="--d:.1s">
            <span class="sx-eyebrow">Who We Help</span>
            <h2 class="sx-h2 sm">SEO for <span class="sx-grad">Different Business Types</span></h2>
            <p class="sx-lead">The right SEO plan looks different for every kind of business. Here is how we approach each one.</p>
            <ul style="grid-template-columns:1fr">
                <li class="t"><i class="fa-solid fa-store"></i><span>Local businesses</span><small>If customers find you by searching for services near them, local SEO helps your business appear for Mumbai and neighbourhood searches. We work on Google Business Profile, local keywords, location pages, citations, and reviews.</small></li>
                <li class="t"><i class="fa-solid fa-rocket"></i><span>Startups</span><small>New brands rarely have search authority yet. We focus on the pages and keywords most likely to bring early enquiries, build a solid technical base, and grow your keyword coverage step by step as the site gains trust.</small></li>
                <li class="t"><i class="fa-solid fa-cart-shopping"></i><span>eCommerce brands</span><small>For online stores, SEO covers category and product page optimization, site structure, page speed, structured data, and content that answers buyer questions, so more shoppers reach the products they are looking for.</small></li>
                <li class="t"><i class="fa-solid fa-briefcase"></i><span>Professional service providers</span><small>Consultancies, agencies, clinics and other firms depend on trust. We build service pages, FAQs, and local visibility that show your expertise and make it easy for the right clients to get in touch.</small></li>
            </ul>
        </aside>
    </div>
</section>

<!-- ================= PROCESS (6 steps) ================= -->
<section class="sx-sec sx-soft">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">Our Process</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.06s">How Our <span class="sx-grad">SEO Process Works</span></h2>
        </div>
        <ol class="sx-steps n6" id="sxSteps">
            <li class="sx-step sx-reveal"><span class="dot"><i class="fa-solid fa-magnifying-glass-chart"></i></span><div class="card"><span class="k">Step 01</span><h3>SEO Audit &amp; Research</h3><p>We analyze your website, existing rankings, competitors, technical performance, content, backlinks, and keyword opportunities.</p></div></li>
            <li class="sx-step sx-reveal" style="--d:.06s"><span class="dot"><i class="fa-solid fa-map"></i></span><div class="card"><span class="k">Step 02</span><h3>Keyword Strategy</h3><p>We develop a keyword map based on search intent, business priorities, locations, services, and potential opportunities.</p></div></li>
            <li class="sx-step sx-reveal" style="--d:.12s"><span class="dot"><i class="fa-solid fa-gears"></i></span><div class="card"><span class="k">Step 03</span><h3>On-Page &amp; Technical Optimization</h3><p>Our team optimizes important pages and addresses technical issues that can affect crawling, indexing, rankings, and user experience.</p></div></li>
            <li class="sx-step sx-reveal" style="--d:.18s"><span class="dot"><i class="fa-solid fa-pen-nib"></i></span><div class="card"><span class="k">Step 04</span><h3>Content Development</h3><p>We improve existing content and create new SEO-focused pages, blogs, FAQs, and supporting content to expand your organic search presence.</p></div></li>
            <li class="sx-step sx-reveal" style="--d:.24s"><span class="dot"><i class="fa-solid fa-link"></i></span><div class="card"><span class="k">Step 05</span><h3>Authority &amp; Local SEO</h3><p>Where appropriate, we strengthen local visibility, citations, relevant mentions, and website authority through sustainable off-page activities.</p></div></li>
            <li class="sx-step sx-reveal" style="--d:.3s"><span class="dot"><i class="fa-solid fa-chart-line"></i></span><div class="card"><span class="k">Step 06</span><h3>Monitoring &amp; Continuous Optimization</h3><p>We track rankings, organic traffic, conversions, and page performance and continuously refine the strategy based on data.</p></div></li>
        </ol>
    </div>
</section>

<!-- ================= OVERVIEW + LOCAL & GROWING ================= -->
<section class="sx-sec">
    <div class="sx-wrap">
        <div class="sx-about">
            <div class="sx-about-visual plain sx-reveal">
                <img src="./assets/images/about/seo-analytics-dashboard-800.webp" srcset="./assets/images/about/seo-analytics-dashboard-520.webp 520w, ./assets/images/about/seo-analytics-dashboard-800.webp 800w" sizes="(max-width: 991px) 80vw, 500px" width="800" height="809" loading="lazy" decoding="async" alt="3D SEO analytics dashboard with rising rankings, organic traffic growth, keyword search and link building icons for an SEO agency in Mumbai">
            </div>
            <div class="sx-body">
                <span class="sx-eyebrow sx-reveal">SEO Overview</span>
                <h2 class="sx-h2 sx-reveal" style="--d:.06s">Why Businesses Choose <span class="sx-grad">Technofra</span></h2>
                <p class="sx-lead sx-reveal" style="--d:.12s">Technofra combines SEO strategy with practical execution. Instead of focusing only on rankings, we consider how search visibility contributes to qualified traffic, enquiries, conversions, and overall business growth.</p>
                <h3 class="sx-reveal" style="margin-top:1.3rem;font-size:.8rem;letter-spacing:.14em;text-transform:uppercase;color:var(--pt)">Our SEO approach is built around</h3>
                <ul class="sx-chips sx-reveal" style="margin-top:.8rem">
                    <li><i class="fa-solid fa-check"></i>Business-focused keyword targeting</li><li><i class="fa-solid fa-check"></i>Technical and on-page SEO</li><li><i class="fa-solid fa-check"></i>Local search optimization</li><li><i class="fa-solid fa-check"></i>Content strategy</li><li><i class="fa-solid fa-check"></i>Conversion-focused landing pages</li><li><i class="fa-solid fa-check"></i>Transparent performance tracking</li><li><i class="fa-solid fa-check"></i>Continuous optimization</li>
                </ul>
<<<<<<< HEAD
                <div class="sx-actions sx-reveal"><a href="contact.php" class="sx-btn">Contact Us <i class="fa-solid fa-arrow-right"></i></a></div>
=======
                <div class="sx-actions sx-reveal"><a href="/contact" class="sx-btn">Contact Us <i class="fa-solid fa-arrow-right"></i></a></div>
>>>>>>> 496e236 (pages added)
            </div>
        </div>

        <div class="sx-card2 sx-reveal">
            <div>
                <span class="sx-eyebrow">Local &amp; Growing Businesses</span>
                <h2 class="sx-h2 sm">Best <span class="sx-grad">SEO Agency in Mumbai</span> for Local &amp; Growing Businesses</h2>
                <p class="sx-lead">If you are searching for a top SEO agency in Mumbai that understands both search engines and business objectives, Technofra can help you build a stronger organic presence. From local businesses targeting Mumbai customers to growing brands competing across multiple locations, our SEO strategies are tailored to your market, audience, competition, and growth goals.</p>
            </div>
            <div style="align-self:center">
                <div class="sx-price" style="margin-top:0"><span class="sx-ico"><i class="fa-solid fa-tags"></i></span><p><strong>How we price SEO:</strong> engagements are custom plans based on your goals, competition, and scope, shared after an initial conversation about your business.</p></div>
<<<<<<< HEAD
                <div class="sx-links" style="justify-content:flex-start"><a href="digital-marketing.php"><i class="fa-solid fa-diagram-project"></i>Digital marketing services in Mumbai</a><a href="ppc.php"><i class="fa-solid fa-bullseye"></i>PPC services in Mumbai</a><a href="content-marketing.php"><i class="fa-solid fa-pen-nib"></i>Content marketing</a><a href="about-us.php"><i class="fa-solid fa-building"></i>About Technofra</a><a href="portfolios.php"><i class="fa-solid fa-briefcase"></i>Portfolio</a><a href="blog.php"><i class="fa-solid fa-newspaper"></i>Blog</a></div>
                <div class="sx-actions"><a href="enquirynow.php" class="sx-btn">Enquiry Now <i class="fa-solid fa-arrow-right"></i></a><a href="contact.php" class="sx-btn sx-btn-line">Contact Us <i class="fa-solid fa-arrow-right"></i></a></div>
=======
                <div class="sx-links" style="justify-content:flex-start"><a href="/digital-marketing"><i class="fa-solid fa-diagram-project"></i>Digital marketing services in Mumbai</a><a href="/ppc"><i class="fa-solid fa-bullseye"></i>PPC services in Mumbai</a><a href="/content-marketing"><i class="fa-solid fa-pen-nib"></i>Content marketing</a><a href="/about-us"><i class="fa-solid fa-building"></i>About Technofra</a><a href="/portfolios"><i class="fa-solid fa-briefcase"></i>Portfolio</a><a href="/blog"><i class="fa-solid fa-newspaper"></i>Blog</a></div>
                <div class="sx-actions"><a href="/enquirynow" class="sx-btn">Enquiry Now <i class="fa-solid fa-arrow-right"></i></a><a href="/contact" class="sx-btn sx-btn-line">Contact Us <i class="fa-solid fa-arrow-right"></i></a></div>
>>>>>>> 496e236 (pages added)
            </div>
        </div>
    </div>
</section>

<?php if (!empty($pgProof)): ?>
<section class="sx-sec sx-soft">
    <div class="sx-wrap">
        <div class="sx-head"><span class="sx-eyebrow sx-reveal">Results</span><h2 class="sx-h2 sx-reveal" style="--d:.06s">Results and <span class="sx-grad">Proof</span></h2><p class="sx-lead sx-reveal" style="--d:.12s">Real SEO results from businesses we have worked with.</p></div>
        <div class="sx-proof">
<?php foreach ($pgProof as $pgP): ?>
            <div class="sx-pr sx-reveal"><b><?php echo htmlspecialchars($pgP['metric'], ENT_QUOTES, 'UTF-8'); ?></b><h3><?php echo htmlspecialchars($pgP['title'], ENT_QUOTES, 'UTF-8'); ?></h3><p><?php echo htmlspecialchars($pgP['text'], ENT_QUOTES, 'UTF-8'); ?></p></div>
<?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ================= LOCAL ================= -->
<section class="sx-sec sx-dark">
    <div class="sx-wrap sx-local">
        <div>
            <span class="sx-eyebrow sx-reveal">Mumbai Local Presence</span>
            <h2 class="sx-h2 sm sx-reveal" style="--d:.06s">SEO Agency in Mumbai, <span class="sx-grad">Based in Kandivali</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.12s">Our office is at Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai 400067. If you are in Kandivali or nearby, you are welcome to visit or book an in-person meeting. We also work with clients across Mumbai over calls and video meetings.</p>
            <div class="sx-areas sx-reveal"><?php foreach ($pgAreas as $pgArea): ?><span><?php echo htmlspecialchars($pgArea, ENT_QUOTES, 'UTF-8'); ?></span><?php endforeach; ?></div>
            <div class="sx-contact sx-reveal">
                <div class="sx-ct"><span class="sx-ico"><i class="fa-solid fa-location-dot"></i></span><div><h3>Office</h3><p>Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai 400067</p></div></div>
                <div class="sx-ct"><span class="sx-ico"><i class="fa-solid fa-phone"></i></span><div><h3>Phone</h3><a href="tel:+918080803374">+91 8080 80 3374</a></div></div>
                <div class="sx-ct"><span class="sx-ico"><i class="fa-solid fa-envelope"></i></span><div><h3>Email</h3><a href="mailto:info@technofra.com">info@technofra.com</a></div></div>
            </div>
<<<<<<< HEAD
            <div class="sx-actions sx-reveal"><a class="sx-btn sx-btn-white sx-btn-sm" href="https://www.google.com/maps/search/?api=1&amp;query=Ghanshyam+Enclave+New+Link+Road+Kandivali+West+Mumbai+400067" target="_blank" rel="noopener">Get Directions <i class="fa-solid fa-diamond-turn-right"></i></a><a class="sx-btn sx-btn-ghost sx-btn-sm" href="contact.php">Contact Us <i class="fa-solid fa-arrow-right"></i></a></div>
=======
            <div class="sx-actions sx-reveal"><a class="sx-btn sx-btn-white sx-btn-sm" href="https://www.google.com/maps/search/?api=1&amp;query=Ghanshyam+Enclave+New+Link+Road+Kandivali+West+Mumbai+400067" target="_blank" rel="noopener">Get Directions <i class="fa-solid fa-diamond-turn-right"></i></a><a class="sx-btn sx-btn-ghost sx-btn-sm" href="/contact">Contact Us <i class="fa-solid fa-arrow-right"></i></a></div>
>>>>>>> 496e236 (pages added)
        </div>
        <div class="sx-map sx-reveal" id="sxMap">
            <div class="sx-map-in"><span class="sx-pin"><i class="fa-solid fa-location-dot"></i></span><p>Technofra, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai</p><button type="button" class="sx-btn sx-btn-ghost sx-btn-sm" id="sxMapBtn" data-src="https://www.google.com/maps?q=Ghanshyam+Enclave,+New+Link+Road,+Kandivali+West,+Mumbai+400067&amp;output=embed">Load Interactive Map <i class="fa-solid fa-map"></i></button></div>
        </div>
    </div>
</section>

<!-- ================= FAQ ================= -->
<section class="sx-sec sx-soft">
    <div class="sx-wrap">
        <div class="sx-faq-top">
        <div>
            <span class="sx-eyebrow sx-reveal">FAQ</span>
            <h2 class="sx-h2 sm sx-reveal" style="--d:.06s">Frequently Asked <span class="sx-grad">Questions</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.12s">Find answers to common questions about our SEO services, process, and how we help businesses grow online.</p>
        </div>
<img class="sx-faq-img sx-reveal" src="./assets/images/about/faq-illustration.webp" width="800" height="565" loading="lazy" decoding="async" alt="Magnifying glass and question mark illustration for frequently asked questions about SEO services in Mumbai">
        </div>
        <div class="sx-acc sx-acc2" id="sxAcc">
<?php $sxHalf = (int) ceil(count($pgFaqs) / 2); ?>
<?php foreach ($pgFaqs as $pgI => $pgF):
    $pgNum = str_pad((string) ($pgI + 1), 2, '0', STR_PAD_LEFT);
    $pgOpen = $pgI === 0;
    $pgAns = (isset($pgF[2]) && $pgF[2] !== '') ? $pgF[2] : htmlspecialchars($pgF[1], ENT_QUOTES, 'UTF-8'); ?>
<?php if ($pgI === 0): ?>            <div class="sx-acc-col">
<?php elseif ($pgI === $sxHalf): ?>            </div><div class="sx-acc-col">
<?php endif; ?>
            <div class="sx-acc-item sx-reveal<?php echo $pgOpen ? ' is-open' : ''; ?>" style="--d:<?php echo min($pgI, 5) * 0.05; ?>s">
                <h3 class="sx-acc-h"><button class="sx-acc-btn" type="button" aria-expanded="<?php echo $pgOpen ? 'true' : 'false'; ?>" aria-controls="sxPanel<?php echo $pgNum; ?>" id="sxBtn<?php echo $pgNum; ?>"><span class="sx-acc-n"><?php echo $pgNum; ?></span><span class="sx-acc-q"><?php echo htmlspecialchars($pgF[0], ENT_QUOTES, 'UTF-8'); ?></span><span class="sx-acc-t"><i class="fa-solid fa-plus"></i></span></button></h3>
                <div class="sx-acc-panel" id="sxPanel<?php echo $pgNum; ?>" role="region" aria-labelledby="sxBtn<?php echo $pgNum; ?>"><div class="sx-acc-in"><p><?php echo $pgAns; ?></p></div></div>
            </div>
<?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

</div><!-- /.sx -->

<script>
(function () {
    var d = document, reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* scroll reveal (+ process line) */
    var els = [].slice.call(d.querySelectorAll('.sx-reveal, #sxSteps'));
    if ('IntersectionObserver' in window && !reduce) {
        var io = new IntersectionObserver(function (es) {
            es.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); } });
        }, { threshold: 0.12, rootMargin: '0px 0px -6% 0px' });
        els.forEach(function (el) { io.observe(el); });
    } else { els.forEach(function (el) { el.classList.add('is-in'); }); }

    /* count-up numbers */
    var counters = [].slice.call(d.querySelectorAll('[data-count]'));
    function runCount(el) {
        var end = parseFloat(el.getAttribute('data-count')), suf = el.getAttribute('data-suffix') || '', t0 = null, dur = 1600;
        function step(ts) {
            if (!t0) t0 = ts;
            var p = Math.min((ts - t0) / dur, 1), e = 1 - Math.pow(1 - p, 3);
            el.textContent = Math.round(end * e) + suf;
            if (p < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }
    if ('IntersectionObserver' in window && !reduce) {
        var co = new IntersectionObserver(function (es) {
            es.forEach(function (e) { if (e.isIntersecting) { runCount(e.target); co.unobserve(e.target); } });
        }, { threshold: 0.6 });
        counters.forEach(function (c) { co.observe(c); });
    }

    /* cursor spotlight on cards */
    d.addEventListener('pointermove', function (e) {
        var t = e.target.closest ? e.target.closest('[data-spot]') : null;
        if (!t) return;
        var r = t.getBoundingClientRect();
        t.style.setProperty('--mx', (e.clientX - r.left) + 'px');
        t.style.setProperty('--my', (e.clientY - r.top) + 'px');
    }, { passive: true });

    /* hero parallax */
    var hero = d.getElementById('sxHero');
    if (hero && !reduce && window.matchMedia('(pointer:fine)').matches) {
        hero.addEventListener('pointermove', function (e) {
            var r = hero.getBoundingClientRect();
            hero.style.setProperty('--px', ((e.clientX - r.left) / r.width - 0.5).toFixed(3));
            hero.style.setProperty('--py', ((e.clientY - r.top) / r.height - 0.5).toFixed(3));
        }, { passive: true });
        hero.addEventListener('pointerleave', function () { hero.style.setProperty('--px', 0); hero.style.setProperty('--py', 0); });
    }

    /* tab groups (click / keyboard, no auto-slide) */
    [].forEach.call(d.querySelectorAll('.sx-svc'), function (svc) {
        var tabs = [].slice.call(svc.querySelectorAll('[role="tab"]'));
        var select = function (tab, focus) {
            tabs.forEach(function (t) {
                var on = t === tab, p = d.getElementById(t.getAttribute('aria-controls'));
                t.setAttribute('aria-selected', on ? 'true' : 'false');
                t.tabIndex = on ? 0 : -1;
                if (p) {
                    p.hidden = !on;
                    if (on && !reduce) { p.classList.remove('is-anim'); void p.offsetWidth; p.classList.add('is-anim'); }
                }
            });
            if (focus) tab.focus();
            if (window.innerWidth < 992) {
                var pan = d.getElementById(tab.getAttribute('aria-controls'));
                if (pan && pan.getBoundingClientRect().top > window.innerHeight * .75) {
                    pan.scrollIntoView({ behavior: reduce ? 'auto' : 'smooth', block: 'nearest' });
                }
            }
        };
        tabs.forEach(function (t, i) {
            t.addEventListener('click', function () { select(t, false); });
            t.addEventListener('keydown', function (e) {
                var k = e.key, n = null;
                if (k === 'ArrowDown' || k === 'ArrowRight') n = tabs[(i + 1) % tabs.length];
                else if (k === 'ArrowUp' || k === 'ArrowLeft') n = tabs[(i - 1 + tabs.length) % tabs.length];
                else if (k === 'Home') n = tabs[0];
                else if (k === 'End') n = tabs[tabs.length - 1];
                if (n) { e.preventDefault(); select(n, true); }
            });
        });
    });

    /* FAQ accordion */
    var acc = d.getElementById('sxAcc');
    if (acc) {
        acc.addEventListener('click', function (e) {
            var b = e.target.closest('.sx-acc-btn');
            if (!b) return;
            var item = b.closest('.sx-acc-item'), open = !item.classList.contains('is-open');
            [].forEach.call(acc.querySelectorAll('.sx-acc-item.is-open'), function (o) {
                o.classList.remove('is-open'); o.querySelector('.sx-acc-btn').setAttribute('aria-expanded', 'false');
            });
            if (open) { item.classList.add('is-open'); b.setAttribute('aria-expanded', 'true'); }
        });
    }

    /* reading progress bar */
    var bar = d.getElementById('sxProgress');
    if (bar) {
        var upd = function () {
            var h = d.documentElement.scrollHeight - window.innerHeight;
            bar.style.width = (h > 0 ? Math.min(window.scrollY / h * 100, 100) : 0).toFixed(1) + '%';
        };
        upd(); window.addEventListener('scroll', upd, { passive: true }); window.addEventListener('resize', upd);
    }
    /* load Google map only when asked (keeps page fast) */
    var mb = d.getElementById('sxMapBtn');
    if (mb) {
        mb.addEventListener('click', function () {
            var box = d.getElementById('sxMap'), f = d.createElement('iframe');
            f.src = mb.getAttribute('data-src'); f.title = 'Map showing the Technofra office in Kandivali West, Mumbai';
            f.loading = 'lazy'; f.referrerPolicy = 'no-referrer-when-downgrade'; f.setAttribute('allowfullscreen', '');
            box.innerHTML = ''; box.appendChild(f);
        });
    }
})();
</script>


<?php include __DIR__ . '/footer.php'; ?>
