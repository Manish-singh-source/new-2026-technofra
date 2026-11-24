<?php
$pageTitle = 'Content Marketing Company in Mumbai | Technofra';
$metaDescription = 'Technofra is a content marketing company in Mumbai offering content strategy, SEO blogs and website copy that bring traffic, leads and trust. Get a free quote.';
$metaKeywords = '';
$bodyClass = 'hero-video-page';
$canonicalUrl = 'https://technofra.com/content-marketing';
$ogImage = 'https://technofra.com/assets/images/new/cm/content-marketing-hero.webp';

// FAQ content: rendered in the accordion AND reused for FAQPage structured data so they always match
$pgFaqs = [
    ['What does a content marketing company in Mumbai do?',
     'A Content Marketing Company in Mumbai plans, writes and publishes content that helps local and national businesses get found online and win customers. At Technofra, that covers content strategy, blogs, website copy, landing pages, emails, lead magnets and monthly performance reporting.'],
    ['How much do content marketing services cost in Mumbai?',
     'It depends on how much content you need and how often. A one-time website copy project is priced differently from an ongoing monthly blog plan. We share a clear quote after a short call about your goals, and our packages are flexible enough for startups as well as larger brands.'],
    ['How long does content marketing take to show results?',
     'Most businesses see early movement in rankings and traffic within 6 to 12 weeks. Stronger, steadier growth in leads usually builds over 4 to 6 months. Content keeps working long after it goes live, so results tend to compound over time.'],
    ['Do you offer blog writing services in Mumbai for small businesses?',
     'Yes. Our Blog Writing Services in Mumbai suit small businesses, startups and growing brands alike. We can start with as few as four posts a month, each researched around keywords your customers actually search for.'],
    ['What\'s the difference between content writing and content marketing?',
     'Content writing is creating the words. Content marketing is the full plan around them: what to write, who it\'s for, where it\'s published, how it ranks and how it turns readers into leads. As a Content Writing Company in Mumbai and a content marketer, we handle both.'],
    ['Will the content be SEO friendly?',
     'Yes, every piece is. We work as an SEO Content Marketing Agency, so each page or blog includes keyword research, a search-friendly structure, meta tags, internal links and FAQs. We also format content so AI search tools can understand and quote it.'],
    ['Do you write content for every industry?',
     'We write for real estate, healthcare, education, manufacturing, retail, IT, finance, hospitality and more. Before writing, we learn your industry\'s language, your customers\' questions and how your competitors talk, so the content sounds like it came from an insider.'],
    ['Is the content original and written by people?',
     'Yes. Our writers research and write every piece themselves, and an editor checks it for accuracy, tone and plagiarism before you see it. You get content that\'s original, fact-checked and written to sound like your brand.'],
];

$pgUrl = $canonicalUrl;
$pgFaqLead = 'Straight answers to the questions Mumbai businesses ask before hiring a content marketing company.';
$pgFaqAlt = 'Frequently asked questions about content marketing services in Mumbai';
$pgFaqEntities = [];
foreach ($pgFaqs as $pgF) {
    $pgFaqEntities[] = ['@type' => 'Question', 'name' => $pgF[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $pgF[1]]];
}
$pgOffers = [];
foreach (['Content Strategy Services', 'Blog Writing Services in Mumbai', 'Website Content Writing Services', 'Landing Page and Campaign Copy', 'Lead Magnets and Downloadables', 'Social Media and Email Content', 'Content Optimisation and Reporting'] as $pgO) {
    $pgOffers[] = ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $pgO]];
}
$pgSchema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        ['@type' => 'Organization', '@id' => 'https://technofra.com/#organization', 'name' => 'Technofra', 'url' => 'https://technofra.com/', 'logo' => 'https://technofra.com/assets/images/new/logo.png', 'image' => $ogImage, 'telephone' => '+918080803374', 'email' => 'info@technofra.com',
            'address' => ['@type' => 'PostalAddress', 'streetAddress' => 'Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West)', 'addressLocality' => 'Mumbai', 'addressRegion' => 'Maharashtra', 'postalCode' => '400067', 'addressCountry' => 'IN'],
            'areaServed' => ['@type' => 'City', 'name' => 'Mumbai'],
            'sameAs' => ['https://www.facebook.com/technofra/', 'https://x.com/Technofra_', 'https://www.linkedin.com/company/technofra/', 'https://youtube.com/@technofra', 'https://www.instagram.com/technofra.company/']],
        ['@type' => 'WebPage', '@id' => $pgUrl . '#webpage', 'url' => $pgUrl, 'name' => $pageTitle, 'description' => $metaDescription, 'about' => ['@id' => $pgUrl . '#service']],
        ['@type' => 'Service', '@id' => $pgUrl . '#service', 'name' => 'Content Marketing Services in Mumbai', 'serviceType' => 'Content Marketing', 'url' => $pgUrl, 'description' => $metaDescription, 'areaServed' => ['@type' => 'City', 'name' => 'Mumbai'], 'provider' => ['@id' => 'https://technofra.com/#organization'], 'hasOfferCatalog' => ['@type' => 'OfferCatalog', 'name' => 'Content Marketing Services', 'itemListElement' => $pgOffers]],
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://technofra.com/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Content Marketing Company in Mumbai', 'item' => $pgUrl],
        ]],
        ['@type' => 'FAQPage', 'mainEntity' => $pgFaqEntities],
    ],
];
$pgFlags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG;
$extraHead = '<meta name="twitter:card" content="summary_large_image">'
    . '<meta name="twitter:title" content="' . htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') . '">'
    . '<meta name="twitter:description" content="' . htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8') . '">'
    . '<meta name="twitter:image" content="' . htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') . '">'
    . '<link rel="preload" as="image" href="./assets/images/new/cm/content-marketing-hero.webp" fetchpriority="high">'
    . '<script type="application/ld+json">' . json_encode($pgSchema, $pgFlags) . '</script>';
$forceBlackHeader = true; // light hero: use dark logo + dark header button
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
.sx-js .sx-reveal{opacity:0;transform:translateY(18px);transition:opacity .7s cubic-bezier(.2,.7,.2,1),transform .7s cubic-bezier(.2,.7,.2,1);transition-delay:var(--d,0s)}
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

<style>
/* =================== WOW LAYER =================== */
/* magnetic buttons */
.sx .sx-btn{transform:translate3d(var(--bx,0px),var(--by,0px),0)}
.sx .sx-btn:hover{transform:translate3d(var(--bx,0px),calc(var(--by,0px) - 3px),0)}
/* split headings */
.wx-w{display:inline-block;overflow:hidden;vertical-align:top;padding-bottom:.08em;margin-bottom:-.08em}
.wx-w>i{display:inline-block;font-style:normal;transform:translate3d(0,108%,0) rotate(4deg);transform-origin:0 100%;transition:transform 1s cubic-bezier(.16,.84,.24,1);transition-delay:calc(var(--i,0) * 45ms)}
.wx-split.is-in .wx-w>i{transform:none}
.sx-grad .wx-w>i,.sx-grad.wx-w>i{background:inherit;background-size:inherit;-webkit-background-clip:text;background-clip:text;color:transparent;animation:inherit}
/* statement scrub */
.px-statement p.big .wx-sw{opacity:var(--o,.14);transition:opacity .15s linear}
.px-statement p.big .dim{color:inherit}
/* expanding dark sections */

/* aurora */
.wx-aurora{position:absolute;inset:0;z-index:0;pointer-events:none;overflow:hidden}
.wx-aurora i{position:absolute;width:60vw;max-width:900px;aspect-ratio:1;border-radius:50%;opacity:.5;will-change:transform}
.wx-aurora i:nth-child(1){left:-15%;top:-30%;background:radial-gradient(circle,rgba(54,197,243,.55),transparent 62%);animation:wxA1 18s ease-in-out infinite}
.wx-aurora i:nth-child(2){right:-20%;top:10%;background:radial-gradient(circle,rgba(109,93,246,.6),transparent 62%);animation:wxA2 22s ease-in-out infinite}
.wx-aurora i:nth-child(3){left:25%;bottom:-45%;background:radial-gradient(circle,rgba(236,72,153,.28),transparent 62%);animation:wxA1 26s ease-in-out infinite reverse}
@keyframes wxA1{50%{transform:translate(12vw,10vh) scale(1.2)}}
@keyframes wxA2{50%{transform:translate(-14vw,8vh) scale(1.15)}}
/* 3D tilt */
.wx-tilt{transform:perspective(1000px) rotateX(var(--rx,0deg)) rotateY(var(--ry,0deg)) translateZ(0);transition:transform .45s cubic-bezier(.2,.7,.2,1),box-shadow .5s}
.wx-tilt:hover{transform:perspective(1000px) rotateX(var(--rx,0deg)) rotateY(var(--ry,0deg)) translateY(-6px)}
/* velocity band */
.wx-band{position:relative;overflow:hidden;padding:clamp(1.2rem,1rem + 1.5vw,2.4rem) 0;background:#fff}
.wx-band .wx-row{display:flex;white-space:nowrap;will-change:transform}
.wx-band .wx-row span{flex:none;font-family:var(--font-primary,'Sora',sans-serif);font-weight:800;letter-spacing:-.04em;line-height:1;font-size:clamp(3rem,1.5rem + 6vw,7.5rem);padding-right:.5em;color:transparent;-webkit-text-stroke:1.5px rgba(25,52,99,.2)}
.wx-band .wx-row span em{font-style:normal;-webkit-text-stroke:0;background:linear-gradient(90deg,#0b86b3,#6d5df6);-webkit-background-clip:text;background-clip:text;color:transparent}
.wx-band .wx-row+.row{margin-top:.2em}
/* stacked process cards */
.wx-stack{position:relative;display:grid;gap:0;max-width:1080px;margin:0 auto}
.wx-stack>li{position:sticky;top:calc(112px + var(--i) * 18px);margin-bottom:22vh}
.wx-stack>li:last-child{margin-bottom:0}
.wx-sc{position:relative;display:grid;grid-template-columns:1.25fr .75fr;align-items:center;min-height:300px;border-radius:34px;overflow:hidden;color:#fff;background:radial-gradient(600px 300px at 100% 0%,rgba(109,93,246,.55),transparent 60%),radial-gradient(500px 300px at 0% 100%,rgba(54,197,243,.4),transparent 60%),#0b1b3d;box-shadow:0 -10px 60px rgba(11,27,61,.18),0 40px 80px rgba(11,27,61,.25);transform:scale(var(--s,1));transform-origin:50% 0}
.wx-sc::after{content:"";position:absolute;inset:0;background:#0b1b3d;opacity:var(--dim,0);pointer-events:none}
.wx-sc .tx{position:relative;z-index:1;padding:clamp(1.6rem,1.1rem + 2vw,3rem)}
.wx-sc .k{font-size:.78rem;font-weight:800;letter-spacing:.18em;text-transform:uppercase;color:#8fe0fa}
.wx-sc h3{margin-top:.7rem;font-size:clamp(1.5rem,1.1rem + 1.6vw,2.5rem);color:#fff;letter-spacing:-.04em}
.wx-sc p{margin-top:.8rem;color:rgba(255,255,255,.78);line-height:1.75;font-size:1.02rem;max-width:46ch}
.wx-sc p a{color:#8fe0fa;font-weight:700;border-bottom:2px solid rgba(143,224,250,.45)}
.wx-sc .vz{position:relative;align-self:stretch;display:grid;place-items:center;min-height:240px}
.wx-sc .vz .big{position:absolute;right:-.06em;bottom:-.2em;font-family:var(--font-primary,'Sora',sans-serif);font-weight:800;font-size:clamp(9rem,6rem + 8vw,15rem);line-height:1;color:transparent;-webkit-text-stroke:2px rgba(255,255,255,.1)}
.wx-sc .vz .orb{position:relative;width:clamp(110px,9vw,150px);aspect-ratio:1;border-radius:38px;display:grid;place-items:center;font-size:clamp(2.6rem,2rem + 1.5vw,3.6rem);background:linear-gradient(135deg,#36c5f3,#6d5df6);box-shadow:0 30px 60px rgba(54,197,243,.35),inset 0 0 0 1px rgba(255,255,255,.3);transform:rotate(-8deg)}
.wx-sc .vz .ring{position:absolute;width:250px;aspect-ratio:1;border-radius:50%;border:1.5px dashed rgba(143,224,250,.35);animation:sxSpin 40s linear infinite}
.wx-sc .vz .ring+.ring{width:340px;border-color:rgba(184,173,255,.2);animation-direction:reverse;animation-duration:60s}
/* horizontal pinned gallery */
.wx-hpin{position:relative}
.wx-hpin .stick{position:sticky;top:0;height:100vh;height:100svh;display:flex;flex-direction:column;justify-content:center;overflow:hidden;padding-top:96px;box-sizing:border-box}
.wx-hpin .px-head{margin-bottom:clamp(1rem,.6rem + 1.4vw,2rem)}
.wx-track{display:flex;gap:clamp(1rem,1.6vw,1.6rem);padding:0 max(1rem,calc((100vw - 1240px) / 2 + 2rem));will-change:transform;width:max-content}
.wx-pc{position:relative;flex:none;width:clamp(220px,min(28vw,100vh - 420px),430px);text-decoration:none;color:inherit}
.wx-pc .im{position:relative;aspect-ratio:1;border-radius:28px;overflow:hidden;background:#0b1b3d;box-shadow:0 30px 60px rgba(25,52,99,.18)}
.wx-pc .im img{width:100%;height:100%;object-fit:cover;transform:scale(1.12) translate3d(calc(var(--px,0) * -24px),0,0)}
.wx-pc .im::after{content:"";position:absolute;inset:0;background:linear-gradient(180deg,transparent 55%,rgba(8,20,48,.55))}
.wx-pc .meta{display:flex;align-items:center;justify-content:space-between;gap:1rem;margin-top:1rem}
.wx-pc h3{font-size:clamp(1.1rem,.95rem + .5vw,1.4rem);color:var(--ink)}
.wx-pc p{font-size:.88rem;font-weight:700;color:var(--muted)}
.wx-pc .go{flex:none;width:46px;height:46px;border-radius:50%;display:grid;place-items:center;color:#fff;background:linear-gradient(135deg,#36c5f3,#6d5df6);transform:rotate(-45deg);transition:transform .4s}
.wx-pc:hover .go{transform:none}
.wx-pc .idx{position:absolute;left:1rem;top:1rem;z-index:2;padding:.35rem .7rem;border-radius:999px;font-size:.75rem;font-weight:800;letter-spacing:.1em;color:#193463;background:rgba(255,255,255,.9)}
.wx-pc.end .im{display:grid;place-items:center;text-align:center;color:#fff;background:linear-gradient(135deg,#193463,#6d5df6)}
.wx-pc.end .im::after{display:none}
.wx-pc.end .im span{position:relative;z-index:1;display:grid;justify-items:center;gap:1rem;font-family:var(--font-primary,'Sora',sans-serif);font-weight:800;font-size:clamp(1.3rem,1rem + 1vw,1.9rem);line-height:1.15;padding:1.5rem}
.wx-pc.end .im i{width:70px;height:70px;border-radius:50%;display:grid;place-items:center;font-size:1.4rem;background:#fff;color:#6d5df6}
.wx-hbar{width:min(1240px,calc(100% - 2rem));height:3px;margin:clamp(1rem,2vw,1.8rem) auto 0;border-radius:3px;background:rgba(25,52,99,.1);overflow:hidden}
.wx-hbar i{display:block;height:100%;width:calc(var(--hp,0) * 100%);background:linear-gradient(90deg,#36c5f3,#6d5df6)}
/* coverflow phones */
.wx-cover .wx-track{perspective:1400px;align-items:center}
.wx-ph{flex:none;width:clamp(150px,min(16vw,(100vh - 430px) * .46),240px);margin:0;transform:rotateY(var(--ry,0deg)) scale(var(--sc,1)) translateZ(0);will-change:transform}
.wx-ph img{width:100%;height:auto;border-radius:32px;filter:drop-shadow(0 34px 40px rgba(25,52,99,.28))}
.wx-ph figcaption{margin-top:.9rem;text-align:center;font-weight:800;color:var(--ink);opacity:var(--op,1)}
.wx-ph figcaption small{display:block;font-weight:600;color:var(--muted);font-size:.8rem}
/* responsive demo */
.wx-rd{margin-top:1.2rem;border-radius:20px;overflow:hidden;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.16)}
.wx-rd-bar{display:flex;align-items:center;gap:.8rem;padding:.6rem .8rem;background:rgba(255,255,255,.06)}
.wx-rd-bar .dots{display:flex;gap:5px}.wx-rd-bar .dots i{width:9px;height:9px;border-radius:50%;background:#ff5f57}.wx-rd-bar .dots i:nth-child(2){background:#febc2e}.wx-rd-bar .dots i:nth-child(3){background:#28c840}
.wx-rd-bar .url{flex:1;padding:.3rem .7rem;border-radius:8px;background:rgba(255,255,255,.08);font-size:.78rem;color:rgba(255,255,255,.7)}
.wx-rd-bar .tg{display:flex;gap:.3rem;padding:.2rem;border-radius:10px;background:rgba(255,255,255,.08)}
.sx .wx-rd-bar .tg button{width:34px;height:30px;border:0;border-radius:8px;background:transparent;color:rgba(255,255,255,.7);cursor:pointer;display:grid;place-items:center;font-size:.85rem}
.sx .wx-rd-bar .tg button.on{background:#fff;color:#193463}
.wx-rd-stage{height:300px;display:flex;justify-content:center;padding:1rem;background:linear-gradient(180deg,rgba(255,255,255,.04),rgba(255,255,255,.0))}
.wx-rd-site{container-type:inline-size;width:calc(var(--w,100) * 1%);height:100%;overflow:hidden;border-radius:14px;background:#fff;color:#14264a;transition:width .9s cubic-bezier(.65,0,.35,1),border-radius .9s;box-shadow:0 20px 50px rgba(0,0,0,.3)}
.wx-rd-site.ph{border-radius:24px}
.rs-nav{display:flex;align-items:center;gap:.8rem;padding:.55rem .8rem;border-bottom:1px solid #eef2f8}
.rs-nav b{width:56px;height:10px;border-radius:5px;background:linear-gradient(90deg,#36c5f3,#6d5df6)}
.rs-nav span{display:flex;gap:.6rem;margin-left:auto}.rs-nav span i{width:30px;height:6px;border-radius:3px;background:#d6def0}
.rs-nav .bg{display:none;margin-left:auto;font-size:.9rem;color:#193463}
.rs-hero{display:grid;grid-template-columns:1.1fr .9fr;gap:.8rem;align-items:center;padding:.9rem}
.rs-hero h4{font-family:var(--font-primary,'Sora',sans-serif);font-size:1.05rem;line-height:1.15;margin:0;color:#12152e}
.rs-hero .l{display:block;height:6px;border-radius:3px;background:#e3eaf5;margin-top:6px}.rs-hero .l.s{width:60%}
.rs-hero .b{display:inline-block;margin-top:.6rem;padding:.3rem .7rem;border-radius:999px;font-size:.66rem;font-weight:800;color:#fff;background:linear-gradient(135deg,#1597c9,#193463)}
.rs-hero .art{height:90px;border-radius:12px;background:linear-gradient(135deg,#36c5f3,#6d5df6);position:relative;overflow:hidden}
.rs-hero .art::after{content:"";position:absolute;width:60px;height:60px;border-radius:50%;right:-10px;top:-10px;background:rgba(255,255,255,.25)}
.rs-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:.6rem;padding:0 .9rem .9rem}
.rs-cards i{height:62px;border-radius:10px;background:#f3f6fd;border:1px solid #e6ecf5}
@container (max-width:560px){.rs-cards{grid-template-columns:repeat(2,1fr)}.rs-nav span i:nth-child(n+3){display:none}}
@container (max-width:340px){.rs-hero{grid-template-columns:1fr}.rs-hero .art{order:-1;height:70px}.rs-cards{grid-template-columns:1fr}.rs-nav span{display:none}.rs-nav .bg{display:block}}
/* typing terminal */
.wx-term{margin:1.1rem 0 0;padding:.9rem 1rem;border-radius:16px;background:#0a1530;border:1px solid rgba(255,255,255,.12);font:600 12.5px/1.65 ui-monospace,SFMono-Regular,Menlo,Consolas,monospace;color:#c9d6ff;white-space:pre;overflow:hidden;min-height:118px}
.wx-term .t{color:#7fd9f8}.wx-term .a{color:#b8adff}.wx-term .s{color:#86efac}
.wx-term::after{content:"";display:inline-block;width:7px;height:14px;margin-left:2px;vertical-align:-2px;background:#7fd9f8;animation:wxBlink 1s steps(1) infinite}
@keyframes wxBlink{50%{opacity:0}}
/* bento tile spans */
.px-bento>.w6{grid-column:1/-1}
.px-tile.rd{display:grid;grid-template-columns:.8fr 1.2fr;gap:1.5rem;align-items:center}
.px-tile.rd .wx-rd{margin-top:0}
@media (max-width:991.98px){
  .wx-stack>li{top:calc(96px + var(--i) * 12px);margin-bottom:14vh}
  .wx-sc{grid-template-columns:1fr;min-height:0}
  .wx-sc .vz{display:none}
  .px-tile.rd{grid-template-columns:1fr}
}
@media (max-width:767.98px){
  .wx-stack>li{position:relative;top:auto;margin-bottom:.8rem}
  .wx-sc{transform:none!important;border-radius:24px}
  .wx-sc::after{display:none}
  .wx-sc .tx{padding:1.3rem 1.2rem}
  .wx-sc p{font-size:.94rem}
  .wx-hpin{height:auto!important}
  .wx-hpin .stick{position:relative;height:auto;padding:2.6rem 0}
  .wx-track{transform:none!important;overflow-x:auto;width:auto;scroll-snap-type:x mandatory;padding:0 1rem 1rem;scrollbar-width:none;-webkit-overflow-scrolling:touch}
  .wx-track::-webkit-scrollbar{display:none}
  .wx-pc,.wx-ph{scroll-snap-align:center}
  .wx-pc{width:74vw}
  .wx-ph{width:52vw;transform:none!important}
  .wx-hbar{display:none}
  .wx-rd-stage{height:240px}
  .wx-term{font-size:11px}
}
@media (prefers-reduced-motion:reduce){
  .wx-aurora i,.wx-sc .vz .ring{animation:none!important}
  .wx-w>i{transform:none!important;transition:none!important}
  .wx-stack>li{position:relative;top:auto;margin-bottom:1rem}
  .wx-hpin{height:auto!important}.wx-hpin .stick{position:relative;height:auto;padding:3rem 0}
  .wx-track{transform:none!important;overflow-x:auto;width:auto}
  .wx-ph{transform:none!important}
  .px-statement p.big .wx-sw{opacity:1!important}
}

/* slim service ticker */
.wx-tick{position:relative;overflow:hidden;padding:1.05rem 0;background:#0b1b3d;-webkit-mask-image:linear-gradient(90deg,transparent,#000 6%,#000 94%,transparent);mask-image:linear-gradient(90deg,transparent,#000 6%,#000 94%,transparent)}
.wx-tick-in{display:flex;align-items:center;gap:1.6rem;width:max-content;animation:pxMarq 42s linear infinite}
.wx-tick-in span{flex:none;font-family:var(--font-primary,'Sora',sans-serif);font-weight:700;font-size:clamp(.95rem,.85rem + .4vw,1.2rem);letter-spacing:-.01em;color:#fff;white-space:nowrap}
.wx-tick-in i{flex:none;font-size:.8rem;color:#8fe0fa}
.wx-tick:hover .wx-tick-in{animation-play-state:paused}
/* apps we build */
.ab-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1rem}
.ab-card{position:relative;overflow:hidden;min-height:430px;padding:1.6rem 1.6rem 0;display:flex;flex-direction:column;background:linear-gradient(180deg,#fff 0%,#fff 45%,#eef1ff 100%) padding-box,linear-gradient(140deg,rgba(54,197,243,.55),rgba(109,93,246,.18) 40%,rgba(109,93,246,.55)) border-box}
.ab-ic{width:48px;height:48px;border-radius:15px;display:grid;place-items:center;color:#fff;font-size:1.1rem;background:linear-gradient(135deg,#36c5f3,#6d5df6);box-shadow:0 12px 26px rgba(109,93,246,.3)}
.ab-card h3{margin-top:1rem;font-size:1.15rem;color:var(--ink)}
.ab-card p{margin-top:.45rem;color:var(--muted);line-height:1.65;font-size:.93rem}
.ab-ph{position:relative;margin-top:auto;height:220px;display:flex;justify-content:center}
.ab-ph::before{content:"";position:absolute;left:50%;bottom:-60px;width:260px;height:260px;margin-left:-130px;border-radius:50%;background:radial-gradient(circle,rgba(109,93,246,.28),transparent 65%)}
.ab-ph img{position:relative;width:52%;max-width:190px;height:auto;align-self:flex-start;margin-top:1.2rem;border-radius:26px 26px 0 0;box-shadow:0 -10px 40px rgba(25,52,99,.18);transition:transform .6s cubic-bezier(.2,.7,.2,1)}
.ab-card:hover .ab-ph img{transform:translateY(-14px)}
@media (max-width:991.98px){.ab-grid{grid-template-columns:repeat(2,1fr)}}
@media (max-width:575.98px){.ab-grid{grid-template-columns:1fr}.ab-card{min-height:0}.ab-ph{height:190px}}
@media (prefers-reduced-motion:reduce){.wx-tick-in{animation:none}}

/* ===== performance mode: nothing waits, nothing re-animates on scroll ===== */
.sx-js .sx-reveal{opacity:1!important;transform:none!important;transition:none!important}
.wx-aurora i{animation:none!important}
.wx-tilt,.wx-tilt:hover{transform:none}
.wx-tilt:hover{transform:translateY(-4px)}
.px-card::after{display:none}
.sx .sx-btn,.sx .sx-btn:hover{transform:none}
.sx .sx-btn:hover{transform:translateY(-2px)}
.wx-sc{transform:none!important}.wx-sc::after{display:none}
.wx-pc .im img{transform:none}
.wx-pc .im img,.wx-sc .vz .ring{will-change:auto}
.wx-sc .vz .ring{animation:none}
.wx-ph{transition:none}
.sx-progress{width:100%!important;transform-origin:0 50%;transform:scaleX(var(--sp,0))}
</style>

<script>document.documentElement.classList.add('sx-js');</script>
<div class="sx-progress" id="sxProgress" aria-hidden="true"></div>
<div class="sx">
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


<!-- ================= HERO ================= -->
<section class="sx-hero" id="sxHero">
    <div class="sx-wrap">
        <div class="sx-hero-grid">
            <div class="sx-hero-copy">
                <span class="sx-badge sx-in"><span class="sx-dot"></span>Content Marketing Company in Mumbai</span>
                <h1 class="sx-in" style="animation-delay:.05s"><span class="ln">Content Marketing Company</span><span class="ln sx-grad">in Mumbai</span><span class="ln">That Turns Words Into Leads</span></h1>
                <p class="sx-hero-desc sx-in" style="animation-delay:.1s">Looking for a Content Marketing Company in Mumbai that writes content people actually read? Technofra plans, writes and optimises content that ranks on Google, answers your customers' questions and brings in real enquiries. From blogs and website pages to campaign copy and email, we create content with one job in mind: helping your business grow.</p>
                <div class="sx-actions sx-in" style="animation-delay:.15s"><a href="enquirynow.php" class="sx-btn">Enquire Now <i class="fa-solid fa-arrow-right"></i></a><a href="#services" class="sx-btn sx-btn-line">Our Services <i class="fa-solid fa-arrow-right"></i></a></div>
                <ul class="sx-checks sx-in" style="animation-delay:.2s">
                    <li><i class="fa-solid fa-circle-check"></i>Content Strategy</li>
                    <li><i class="fa-solid fa-circle-check"></i>SEO Blog Writing</li>
                    <li><i class="fa-solid fa-circle-check"></i>Website &amp; Landing Page Copy</li>
                    <li><i class="fa-solid fa-circle-check"></i>Ready for AI Search</li>
                </ul>
            </div>
            <div class="sx-hero-visual sx-in" style="animation-delay:.1s">
                <div class="sx-hero-img land"><img src="./assets/images/new/cm/content-marketing-hero.webp" width="1000" height="750" fetchpriority="high" decoding="async" alt="Content marketing company in Mumbai: blog posts, social media, email campaigns and content strategy on a laptop" onerror="this.onerror=null;this.src='./assets/images/about/hero-dashboard2.png'"></div>
            </div>
        </div>
        <div class="sx-stats sx-in" style="animation-delay:.25s" aria-label="At a glance">
            <div class="sx-st"><span class="sx-ico"><i class="fa-solid fa-layer-group"></i></span><div><b data-count="7">7</b><span class="l">Content services under one roof</span></div></div>
            <div class="sx-st"><span class="sx-ico"><i class="fa-solid fa-route"></i></span><div><b data-count="6">6</b><span class="l">Step process, discovery to reporting</span></div></div>
            <div class="sx-st"><span class="sx-ico"><i class="fa-solid fa-briefcase"></i></span><div><b data-count="8" data-suffix="+">8+</b><span class="l">Industries we write for</span></div></div>
            <div class="sx-st"><span class="sx-ico"><i class="fa-solid fa-location-dot"></i></span><div><b>Kandivali</b><span class="l">Office in Mumbai</span></div></div>
        </div>
    </div>
</section>

<!-- ================= WHAT IT DOES ================= -->
<section class="sx-sec">
    <div class="sx-wrap">
        <div class="sx-about">
            <div class="sx-about-visual sx-reveal">
                <img src="./assets/images/new/cm/content-strategist.webp" width="700" height="933" loading="lazy" decoding="async" alt="Content strategist at a Mumbai content marketing company planning a content calendar on a tablet" style="max-height:540px;width:auto;margin:0 auto;object-fit:cover">
                <div class="tag" aria-hidden="true"><span class="sx-ico"><i class="fa-solid fa-bullseye"></i></span><div><b>Every piece</b><span>A purpose, a keyword, a place</span></div></div>
            </div>
            <div class="sx-body">
                <span class="sx-eyebrow sx-reveal">Content Marketing Explained</span>
                <h2 class="sx-h2 sx-reveal">What Does a Content Marketing Company in Mumbai <span class="sx-grad">Actually Do?</span></h2>
                <p class="sx-lead sx-reveal">A content marketing company plans, creates and publishes useful content that attracts the right audience and turns them into customers. Instead of pushing ads at people, it earns their attention with answers, ideas and information they're already looking for.</p>
                <p class="sx-lead sx-reveal" style="color:var(--ink);font-weight:700">For a Mumbai business, that usually means:</p>
                <div class="sx-list sx-reveal" style="margin-top:.8rem">
                    <div class="sx-wy mini" data-spot><span class="sx-ico"><i class="fa-brands fa-google"></i></span><h3>Ranking on Google for searches your buyers make every day</h3></div>
                    <div class="sx-wy mini" data-spot><span class="sx-ico"><i class="fa-solid fa-signs-post"></i></span><h3>Explaining your services clearly so visitors know what to do next</h3></div>
                    <div class="sx-wy mini" data-spot><span class="sx-ico"><i class="fa-solid fa-handshake"></i></span><h3>Building trust before a prospect ever picks up the phone</h3></div>
                    <div class="sx-wy mini" data-spot><span class="sx-ico"><i class="fa-solid fa-wand-magic-sparkles"></i></span><h3>Showing up in AI answers from ChatGPT, Gemini and Google AI Overviews</h3></div>
                    <div class="sx-wy mini" data-spot><span class="sx-ico"><i class="fa-solid fa-recycle"></i></span><h3>Creating content your sales and social teams can reuse for months</h3></div>
                </div>
                <p class="sx-lead sx-reveal">Good content keeps working long after it's published. A blog written today can still bring in leads two years from now.</p>
            </div>
        </div>
        <div class="sx-card2 stack sx-reveal">
            <div class="top">
                <div>
                    <span class="sx-eyebrow">The Real Problem</span>
                    <h2 class="sx-h2 sm">Not a content problem. <span class="sx-grad">A content-without-a-plan problem.</span></h2>
                </div>
                <div>
                    <p class="sx-lead">Most businesses don't have a content problem. They have a content-without-a-plan problem. Blogs get published once in a while, service pages say the same thing as every competitor, and nobody's quite sure what's working. We fix that by giving every piece of content a purpose, a keyword and a place in your customer's journey.</p>
                    <a href="enquirynow.php" class="sx-btn">Enquire Now <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= SERVICES (tabs) ================= -->
<?php
$sxTabs = [
    ['fa-solid fa-chess-knight', 'Content Strategy Services', 'Every strong content plan starts with research. Our Content Strategy Services look at your audience, your competitors and the keywords that matter to your business. You get a clear roadmap: what topics to cover, which pages to build, how often to publish and how each piece connects to a sales goal. No guesswork, no random posting.'],
    ['fa-solid fa-pen-nib', 'Blog Writing Services in Mumbai', 'Our Blog Writing Services in Mumbai give you well-researched articles that answer the real questions your customers type into Google. Each blog is built around a target keyword, written in a natural voice and structured with headings, FAQs and internal links. The result is better rankings, longer time on page and more readers who trust you. You can read examples on the <a href="blog.php">Technofra blog</a>.'],
    ['fa-solid fa-laptop-code', 'Website Content Writing Services', 'Your website is often the first conversation a buyer has with you. Our Website Content Writing Services turn your home, about and service pages into copy that\'s clear, benefit-focused and easy to act on. We pair the words with the design work of our <a href="web-design-and-development.php">web design and development</a> team, so the copy and layout work together. Building on WordPress or Shopify? We write content that fits right into your <a href="wordpress.php">WordPress website</a> or <a href="shopify-development.php">Shopify store</a>.'],
    ['fa-solid fa-bullhorn', 'Landing Page and Campaign Copy', 'Running ads? Your landing page decides whether that click turns into a lead. We write focused, persuasive landing page copy that matches your ad message and pushes visitors toward one clear action. It works hand in hand with our <a href="ppc.php">PPC management services</a> to lower your cost per lead.'],
    ['fa-solid fa-file-arrow-down', 'Lead Magnets and Downloadables', 'eBooks, checklists, guides and industry reports give visitors a reason to share their email. We write and structure lead magnets that are genuinely useful, so your list grows with people who are actually interested.'],
    ['fa-solid fa-share-nodes', 'Social Media and Email Content', 'One good blog can become ten social posts and a newsletter. We repurpose your core content for LinkedIn, Instagram and email so your message stays consistent everywhere. Want us to run the channels too? Our <a href="social-media-marketing.php">social media marketing</a> team can take it from there.'],
    ['fa-solid fa-chart-line', 'Content Optimisation and Reporting', 'We don\'t publish and forget. We track rankings, traffic, engagement and leads, then update older content that\'s slipping. You get a simple monthly report that tells you what\'s working and what we\'re doing next.'],
];
$sxTabTotal = str_pad((string) count($sxTabs), 2, '0', STR_PAD_LEFT);
$sxBR = ['bg' => 'linear-gradient(135deg,#36c5f3,#6d5df6)', 'fg' => '#fff'];
$sxMocks = [
    $sxBR + ['type' => 'kw', 'icon' => 'fa-solid fa-chess-knight', 'title' => 'Content roadmap', 'sub' => 'Topics grouped by intent', 'rows' => [['content marketing mumbai', 86, 'Buy'], ['blog writing services', 70, 'Buy'], ['what is content marketing', 58, 'Info'], ['content agency near me', 46, 'Local'], ['seo blog ideas', 34, 'Info']]],
    $sxBR + ['type' => 'content', 'icon' => 'fa-solid fa-pen-nib', 'title' => 'Blog draft', 'sub' => 'Ready for editor review', 'h1' => 'How to Choose the Right Interior Designer in Mumbai', 'h2' => 'Questions to ask before you hire', 'chips' => ['Target keyword', 'Internal links', 'FAQ section'], 'meter' => 'SEO score', 'pct' => 88, 'float' => [['fa-solid fa-arrow-trend-up', 'Ranks and gets read']]],
    $sxBR + ['type' => 'landing', 'icon' => 'fa-solid fa-laptop-code', 'title' => 'Service page copy', 'sub' => 'Clear, benefit-focused', 'head' => 'Say what you do in one line', 'btn' => 'Book a call', 'form' => 'Send enquiry', 'kpis' => [['Reading level', 'Easy'], ['Clear next step', 'Yes']]],
    $sxBR + ['type' => 'landing', 'icon' => 'fa-solid fa-bullhorn', 'title' => 'Campaign landing page', 'sub' => 'Matches the ad message', 'head' => 'Free site visit this weekend', 'btn' => 'Claim your slot', 'form' => 'Get a callback', 'kpis' => [['One goal', 'Lead'], ['Message match', 'Ad = page']]],
    $sxBR + ['type' => 'email', 'icon' => 'fa-solid fa-file-arrow-down', 'title' => 'Lead magnet', 'sub' => 'Free guide download', 'from' => 'Your Business', 'subject' => 'Your free 2026 buyer checklist is ready', 'btn' => 'Download the guide', 'kpis' => [['Format', 'PDF guide'], ['Pages', '12'], ['Gated by', 'Email']]],
    ['icon' => 'fa-brands fa-linkedin-in', 'bg' => '#0a66c2', 'fg' => '#fff', 'type' => 'li', 'title' => 'LinkedIn post', 'sub' => 'Repurposed from your blog', 'name' => 'Your Company', 'meta' => 'Company page · 1d', 'text' => '5 lessons from our latest project, in under a minute.', 'head' => 'From one blog to ten posts', 'likes' => '214', 'comments' => '19', 'chips' => ['Blog', 'LinkedIn', 'Instagram', 'Newsletter']],
    $sxBR + ['type' => 'dash', 'icon' => 'fa-solid fa-chart-line', 'title' => 'Content report', 'sub' => 'Monthly summary', 'kpis' => [['Organic visits', '9,840', '+24%'], ['Top-10 keywords', '58', '+11'], ['Leads', '112', '+18%']], 'chart' => 'Organic visits by month', 'bars' => [30, 37, 42, 48, 55, 61, 70, 82]],
];
?>
<section class="sx-sec sx-dark" id="services">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">What We Do</span>
            <h2 class="sx-h2 sx-reveal">Our <span class="sx-grad">Content Marketing Services</span></h2>
            <p class="sx-lead sx-reveal">We offer complete, professional content writing services under one roof, so you don't have to juggle three freelancers and an agency.</p>
        </div>
        <div class="sx-svc sx-reveal">
            <div class="sx-tablist" role="tablist" aria-label="Content marketing services">
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
                        <div class="sx-actions"><a href="enquirynow.php" class="sx-btn sx-btn-white">Discuss This Service <i class="fa-solid fa-arrow-right"></i></a></div>
                    </div>
                </article>
<?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<div class="wx-tick" aria-hidden="true"><div class="wx-tick-in"><span>Content strategy</span><i class="fa-solid fa-star-of-life"></i><span>SEO blog writing</span><i class="fa-solid fa-star-of-life"></i><span>Website copy</span><i class="fa-solid fa-star-of-life"></i><span>Landing pages</span><i class="fa-solid fa-star-of-life"></i><span>Lead magnets</span><i class="fa-solid fa-star-of-life"></i><span>Social &amp; email content</span><i class="fa-solid fa-star-of-life"></i><span>Monthly reporting</span><i class="fa-solid fa-star-of-life"></i><span>Content strategy</span><i class="fa-solid fa-star-of-life"></i><span>SEO blog writing</span><i class="fa-solid fa-star-of-life"></i><span>Website copy</span><i class="fa-solid fa-star-of-life"></i><span>Landing pages</span><i class="fa-solid fa-star-of-life"></i><span>Lead magnets</span><i class="fa-solid fa-star-of-life"></i><span>Social &amp; email content</span><i class="fa-solid fa-star-of-life"></i><span>Monthly reporting</span><i class="fa-solid fa-star-of-life"></i></div></div>

<!-- ================= SEO CONTENT AGENCY ================= -->
<section class="sx-sec">
    <div class="sx-wrap sx-about rev">
        <div class="sx-body">
            <span class="sx-eyebrow sx-reveal">SEO + AI Search</span>
            <h2 class="sx-h2 sx-reveal">Why We Work as an <span class="sx-grad">SEO Content Marketing Agency</span>, Not Just Writers</h2>
            <p class="sx-lead sx-reveal">Writing well isn't enough if nobody finds the page. As an SEO Content Marketing Agency, we build search into every piece from day one. That includes keyword research, search intent mapping, on-page structure, meta tags, internal linking and schema-ready FAQs.</p>
            <p class="sx-lead sx-reveal">We also write for the new way people search. More buyers now ask ChatGPT, Gemini or Google's AI Overviews before they click a link. So we format content with direct answers, clear definitions and well-labelled sections that AI tools can understand and quote. That's how your brand shows up in both search results and AI answers.</p>
            <p class="sx-lead sx-reveal">Our content team works side by side with our <a href="seo.php">SEO services</a> team, so technical fixes, link building and content all pull in the same direction.</p>
            <ul class="sx-chips sx-reveal"><li><i class="fa-solid fa-check"></i>Keyword research</li><li><i class="fa-solid fa-check"></i>Search intent mapping</li><li><i class="fa-solid fa-check"></i>On-page structure</li><li><i class="fa-solid fa-check"></i>Meta tags</li><li><i class="fa-solid fa-check"></i>Internal linking</li><li><i class="fa-solid fa-check"></i>Schema-ready FAQs</li></ul>
        </div>
        <div class="sx-reveal">
            <div class="sx-mock" aria-hidden="true" style="border-radius:28px;min-height:420px"><div class="mk mk--serp"><div class="mk-h"><span class="mk-b" style="background:linear-gradient(135deg,#36c5f3,#6d5df6);color:#fff"><i class="fa-solid fa-wand-magic-sparkles"></i></span><span class="mk-tt"><b>AI answer</b><small>Search and AI overview</small></span><em>Sample</em></div><div class="mk-bd">
                <div class="mk-q"><i class="fa-solid fa-magnifying-glass"></i>what does a content marketing company do</div>
                <div class="mk-r hl"><span class="mk-tag">AI Overview</span><b style="color:#14264a">A content marketing company plans, creates and publishes useful content that attracts the right audience…</b><i class="ln"></i><i class="ln s"></i><span class="mk-sl"><u>Source: yourbusiness.com</u></span></div>
                <div class="mk-r"><span class="mk-rank">#1</span><small>yourbusiness.com › content-marketing</small><b>Content Marketing Company in Mumbai</b><i class="ln"></i><i class="ln s"></i></div>
                <div class="mk-r"><small>competitor.com</small><b class="sk"></b><i class="ln"></i></div>
            </div></div><span class="mk-f f1"><i class="fa-solid fa-quote-left"></i>Quoted by AI tools</span><span class="mk-f f2"><i class="fa-solid fa-ranking-star"></i>Ranks in search</span></div>
        </div>
    </div>
</section>

<!-- ================= PROCESS ================= -->
<section class="sx-sec sx-soft">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">Our Process</span>
            <h2 class="sx-h2 sx-reveal">How We Work: Our <span class="sx-grad">Content Marketing Process</span></h2>
        </div>
        <ol class="sx-steps n6" id="sxSteps">
            <li class="sx-step sx-reveal"><span class="dot"><i class="fa-solid fa-comments"></i></span><div class="card"><span class="k">Step 01</span><h3>Discovery call</h3><p>We learn about your business, customers, goals and what's been tried before.</p></div></li>
            <li class="sx-step sx-reveal"><span class="dot"><i class="fa-solid fa-magnifying-glass-chart"></i></span><div class="card"><span class="k">Step 02</span><h3>Research and audit</h3><p>We review your current content, study competitors and pick target keywords.</p></div></li>
            <li class="sx-step sx-reveal"><span class="dot"><i class="fa-solid fa-calendar-days"></i></span><div class="card"><span class="k">Step 03</span><h3>Content strategy</h3><p>You get a content calendar with topics, formats, keywords and publishing dates.</p></div></li>
            <li class="sx-step sx-reveal"><span class="dot"><i class="fa-solid fa-pen-nib"></i></span><div class="card"><span class="k">Step 04</span><h3>Writing and editing</h3><p>Our writers draft, and an editor checks tone, accuracy and SEO before you review.</p></div></li>
            <li class="sx-step sx-reveal"><span class="dot"><i class="fa-solid fa-paper-plane"></i></span><div class="card"><span class="k">Step 05</span><h3>Publishing and promotion</h3><p>We publish, optimise and share content across the right channels.</p></div></li>
            <li class="sx-step sx-reveal"><span class="dot"><i class="fa-solid fa-chart-line"></i></span><div class="card"><span class="k">Step 06</span><h3>Tracking and improving</h3><p>We measure results every month and refine what isn't performing.</p></div></li>
        </ol>
    </div>
</section>

<!-- ================= WHY + INDUSTRIES ================= -->
<section class="sx-sec">
    <div class="sx-wrap sx-split">
        <div>
            <span class="sx-eyebrow sx-reveal">Why Technofra</span>
            <h2 class="sx-h2 sm sx-reveal">Why Choose Technofra as Your <span class="sx-grad">Content Marketing Company in Mumbai</span></h2>
            <p class="sx-lead sx-reveal">There are plenty of writers in the city. Here's what makes us a different kind of Content Writing Company in Mumbai:</p>
            <div class="sx-why">
                <article class="sx-wy sx-reveal" data-spot><span class="sx-ico"><i class="fa-solid fa-location-dot"></i></span><div><h3>Local understanding</h3><p>We're based in Kandivali West, so we know how Mumbai buyers think, search and decide.</p></div></article>
                <article class="sx-wy sx-reveal" data-spot><span class="sx-ico"><i class="fa-solid fa-user-pen"></i></span><div><h3>People-first writing</h3><p>Every piece is written and edited by real people who care about tone, clarity and accuracy.</p></div></article>
                <article class="sx-wy sx-reveal" data-spot><span class="sx-ico"><i class="fa-solid fa-magnifying-glass-chart"></i></span><div><h3>SEO built in</h3><p>Content is planned around keywords and search intent, not added as an afterthought.</p></div></article>
                <article class="sx-wy sx-reveal" data-spot><span class="sx-ico"><i class="fa-solid fa-layer-group"></i></span><div><h3>One team, every channel</h3><p>Content, SEO, design, ads and social media all sit under the same roof.</p></div></article>
                <article class="sx-wy sx-reveal" data-spot><span class="sx-ico"><i class="fa-solid fa-file-lines"></i></span><div><h3>Clear reporting</h3><p>You always know what was published, how it's performing and what's next.</p></div></article>
                <article class="sx-wy sx-reveal" data-spot><span class="sx-ico"><i class="fa-solid fa-sliders"></i></span><div><h3>Flexible packages</h3><p>Startups, SMEs and large brands each get a plan that fits their budget.</p></div></article>
            </div>
            <p class="sx-lead sx-reveal">As a full-service Content Creation Agency in Mumbai, we're more than a vendor. Think of us as your in-house content team, without the hiring cost. Want to see the kind of work we do? Browse our <a href="portfolios.php">portfolio</a> or learn more <a href="about-us.php">about us</a>.</p>
        </div>
        <aside class="sx-ind sx-reveal">
            <span class="sx-eyebrow">Industries</span>
            <h2 class="sx-h2 sm">Industries We <span class="sx-grad">Create Content For</span></h2>
            <p class="sx-lead">We've written for a wide mix of sectors, and we adapt the voice for each one:</p>
            <ul>
                <li><i class="fa-solid fa-building"></i>Real estate and construction</li>
                <li><i class="fa-solid fa-stethoscope"></i>Healthcare and clinics</li>
                <li><i class="fa-solid fa-graduation-cap"></i>Education and EdTech</li>
                <li><i class="fa-solid fa-industry"></i>Manufacturing and B2B</li>
                <li><i class="fa-solid fa-bag-shopping"></i>Retail and eCommerce</li>
                <li><i class="fa-solid fa-microchip"></i>IT, SaaS and technology</li>
                <li><i class="fa-solid fa-landmark"></i>Finance and professional services</li>
                <li><i class="fa-solid fa-plane"></i>Travel and hospitality</li>
            </ul>
            <p class="sx-lead" style="margin-top:1.1rem">Before writing a single word, we learn your industry's terms and your customers' biggest questions. That's how our professional content writing services sound like they came from someone inside your business.</p>
        </aside>
    </div>
</section>

<!-- ================= WORKS WITH YOUR MARKETING ================= -->
<section class="sx-sec sx-dark">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">Full-Service</span>
            <h2 class="sx-h2 sx-reveal">Content That Works With the <span class="sx-grad">Rest of Your Marketing</span></h2>
            <p class="sx-lead sx-reveal">Content works best when it isn't on its own. Because Technofra is a full <a href="digital-marketing.php">digital marketing agency</a>, your content can plug straight into:</p>
        </div>
        <div class="sx-grid c5">
            <a class="sx-wy col sx-reveal" href="seo.php" data-spot><span class="sx-ico"><i class="fa-solid fa-magnifying-glass-chart"></i></span><div><h3>Search engine optimisation</h3><p>to push rankings higher</p></div></a>
            <a class="sx-wy col sx-reveal" href="ppc.php" data-spot><span class="sx-ico"><i class="fa-solid fa-bullseye"></i></span><div><h3>Paid ads (PPC)</h3><p>that send traffic to well-written landing pages</p></div></a>
            <a class="sx-wy col sx-reveal" href="social-media-marketing.php" data-spot><span class="sx-ico"><i class="fa-solid fa-share-nodes"></i></span><div><h3>Social media marketing</h3><p>to spread every blog further</p></div></a>
            <a class="sx-wy col sx-reveal" href="ui-ux.php" data-spot><span class="sx-ico"><i class="fa-solid fa-pen-ruler"></i></span><div><h3>UI/UX design</h3><p>so your content is easy to read on any screen</p></div></a>
            <a class="sx-wy col sx-reveal" href="https://markidentitiez.com/" target="_blank" rel="noopener" data-spot><span class="sx-ico"><i class="fa-solid fa-gem"></i></span><div><h3>Branding</h3><p>to keep your voice and visuals consistent</p></div></a>
        </div>
    </div>
</section>

<!-- ================= CTA ================= -->
<section class="sx-cta">
    <div class="sx-wrap">
        <div class="sx-cta-card sx-reveal">
            <div class="sx-cta-in">
                <div>
                    <span class="sx-eyebrow">Free Content Review</span>
                    <h2>Let's Build Content That Brings You Customers</h2>
                    <p>If you're searching for a Content Marketing Company in Mumbai that cares about results as much as words, let's talk. Tell us about your business, and we'll share a free content review and a plan to get you ranking, engaging and converting.</p>
                    <div class="sx-actions"><a href="contact.php" class="sx-btn sx-btn-white">Contact Us Today <i class="fa-solid fa-arrow-right"></i></a><a href="tel:+918080803374" class="sx-btn sx-btn-ghost">Call +91 8080 80 3374 <i class="fa-solid fa-phone"></i></a></div>
                </div>
                <div class="sx-contact">
                    <div class="sx-ct"><span class="sx-ico"><i class="fa-solid fa-location-dot"></i></span><div><h3>Office</h3><p>Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai 400067</p></div></div>
                    <div class="sx-ct"><span class="sx-ico"><i class="fa-solid fa-phone"></i></span><div><h3>Phone</h3><a href="tel:+918080803374">+91 8080 80 3374</a></div></div>
                    <div class="sx-ct"><span class="sx-ico"><i class="fa-solid fa-envelope"></i></span><div><h3>Email</h3><a href="mailto:info@technofra.com">info@technofra.com</a></div></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= FAQ ================= -->
<section class="sx-sec sx-soft">
    <div class="sx-wrap">
        <div class="sx-faq-top">
        <div>
            <span class="sx-eyebrow sx-reveal">FAQ</span>
            <h2 class="sx-h2 sm sx-reveal" style="--d:.06s"><?php echo $pgFaqH ?? 'Frequently Asked <span class="sx-grad">Questions</span>'; ?></h2>
            <p class="sx-lead sx-reveal" style="--d:.12s"><?php echo $pgFaqLead; ?></p>
        </div>
<img class="sx-faq-img sx-reveal" src="./assets/images/about/faq-illustration.webp" width="800" height="565" loading="lazy" decoding="async" alt="<?php echo htmlspecialchars($pgFaqAlt, ENT_QUOTES, 'UTF-8'); ?>">
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
        }, { threshold: 0.01, rootMargin: '0px 0px 12% 0px' });
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
            bar.style.setProperty('--sp', (h > 0 ? Math.min(window.scrollY / h, 1) : 0).toFixed(4));
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


<script>
(function () {
    var d = document, de = d.documentElement;
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var fine = window.matchMedia('(pointer: fine)').matches;
    var mq = window.matchMedia('(max-width: 767.98px)');
    function clamp(v, a, b) { return v < a ? a : v > b ? b : v; }

    /* ---------- split headings into words ---------- */
    function split(el) {
        var i = 0, walk = function (node) {
            [].slice.call(node.childNodes).forEach(function (c) {
                if (c.nodeType === 3) {
                    var parts = c.textContent.split(/(\s+)/), frag = d.createDocumentFragment();
                    parts.forEach(function (p) {
                        if (!p) return;
                        if (/^\s+$/.test(p)) { frag.appendChild(d.createTextNode(' ')); return; }
                        var w = d.createElement('span'); w.className = 'wx-w';
                        var inner = d.createElement('i'); inner.textContent = p; inner.style.setProperty('--i', i++);
                        w.appendChild(inner); frag.appendChild(w);
                    });
                    node.replaceChild(frag, c);
                } else if (c.nodeType === 1 && !c.classList.contains('wx-w')) walk(c);
            });
        };
        walk(el); return i;
    }
    var heads = [].slice.call(d.querySelectorAll('.wx-split'));
    if (!reduce) {
        heads.forEach(split);
        var hio = new IntersectionObserver(function (es) { es.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-in'); hio.unobserve(e.target); } }); }, { threshold: 0.2 });
        heads.forEach(function (h) { if (h.tagName === 'H1') requestAnimationFrame(function () { setTimeout(function () { h.classList.add('is-in'); }, 60); }); else hio.observe(h); });
    } else heads.forEach(function (h) { h.classList.add('is-in'); });

    var stms = [];

    /* ---------- aurora in dark sections ---------- */
    [].forEach.call(d.querySelectorAll('.sx-dark'), function (s) {
        var a = d.createElement('div'); a.className = 'wx-aurora'; a.setAttribute('aria-hidden', 'true'); a.innerHTML = '<i></i><i></i><i></i>'; s.insertBefore(a, s.firstChild);
    });

    /* ---------- responsive demo ---------- */
    [].forEach.call(d.querySelectorAll('[data-rd]'), function (rd) {
        var site = rd.querySelector('.wx-rd-site'), bs = [].slice.call(rd.querySelectorAll('.tg button')), k = 0, auto = null;
        function set(i) { k = i; bs.forEach(function (b, j) { b.classList.toggle('on', j === i); b.setAttribute('aria-pressed', j === i ? 'true' : 'false'); }); site.style.setProperty('--w', bs[i].getAttribute('data-w')); site.classList.toggle('ph', i === 2); }
        bs.forEach(function (b, j) { b.addEventListener('click', function () { set(j); clearInterval(auto); auto = null; }); });
        if (!reduce) new IntersectionObserver(function (es) { es.forEach(function (e) { if (e.isIntersecting && !auto) auto = setInterval(function () { set((k + 1) % bs.length); }, 2600); else if (!e.isIntersecting && auto) { clearInterval(auto); auto = null; } }); }, { threshold: 0.4 }).observe(rd);
    });

    /* ---------- typing terminal ---------- */
    [].forEach.call(d.querySelectorAll('.wx-term[data-code]'), function (t) {
        var src = t.getAttribute('data-code').replace(/\\n/g, '\n');
        function esc(x) { return x.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;'); }
        function hl(s) { return (s.match(/<\/?[a-z0-9]*|[a-z\-]+="[^"]*"?|[\s\S]/g) || []).map(function (k) {
            if (k.charAt(0) === '<') { var m = k.match(/^(<\/?)(.*)$/); return esc(m[1]) + '<span class="t">' + m[2] + '</span>'; }
            var at = k.match(/^([a-z\-]+)=("[^"]*"?)$/); if (at) return '<span class="a">' + at[1] + '</span>=<span class="s">' + esc(at[2]) + '</span>';
            return esc(k); }).join(''); }
        if (reduce) { t.innerHTML = hl(src); return; }
        var n = 0, run = function () { n += 2; t.innerHTML = hl(src.slice(0, n)); if (n < src.length) setTimeout(run, 28); };
        new IntersectionObserver(function (es, o) { es.forEach(function (e) { if (e.isIntersecting) { run(); o.disconnect(); } }); }, { threshold: 0.5 }).observe(t);
    });

    if (reduce) { stms.forEach(function (s) { s.ws.forEach(function (w) { w.style.setProperty('--o', 1); }); }); return; }

    /* ---------- scroll engine ---------- */
    var bands = [].slice.call(d.querySelectorAll('.wx-band'));
    var stacks = [].slice.call(d.querySelectorAll('.wx-stack'));
    var pins = [].slice.call(d.querySelectorAll('.wx-hpin'));
    var lastY = window.scrollY, vel = 0, bandX = 0;
    function sizePins() {
        pins.forEach(function (s) {
            var tr = s.querySelector('.wx-track');
            if (mq.matches) { s.style.height = ''; s._dist = 0; return; }
            s._dist = Math.max(0, tr.scrollWidth - window.innerWidth);
            s.style.height = (window.innerHeight + s._dist) + 'px';
        });
    }
    function frame() {
        var vh = window.innerHeight, vw = window.innerWidth, y = window.scrollY;
        vel += ((y - lastY) - vel) * 0.2; lastY = y;
        if (0) stms.forEach(function (s) {
            var r = s.el.getBoundingClientRect(); if (r.bottom < -50 || r.top > vh + 50) return;
            var p = clamp((vh * 0.88 - r.top) / (r.height + vh * 0.45), 0, 1) * s.ws.length * 1.15;
            s.ws.forEach(function (w, i) { w.style.setProperty('--o', (0.14 + 0.86 * clamp(p - i, 0, 1)).toFixed(2)); });
        });
        bandX = y * 0.45;
        bands.forEach(function (b) {
            var r = b.getBoundingClientRect(); if (r.bottom < 0 || r.top > vh) return;
            var rows = b.querySelectorAll('.wx-row'), sk = clamp(vel * -0.25, -10, 10);
            [].forEach.call(rows, function (row, k) {
                var w = row.scrollWidth / 2 || 1, x = (bandX % w);
                row.style.transform = 'translate3d(' + (k ? x - w : -x).toFixed(1) + 'px,0,0) skewX(' + sk.toFixed(2) + 'deg)';
            });
        });
        pins.forEach(function (s) {
            if (mq.matches || !s._dist) return;
            var r = s.getBoundingClientRect(); if (r.bottom < 0 || r.top > vh) return;
            var p = clamp(-r.top / (s.offsetHeight - vh), 0, 1), tr = s.querySelector('.wx-track');
            tr.style.transform = 'translate3d(' + (-p * s._dist).toFixed(1) + 'px,0,0)';
            s.style.setProperty('--hp', p.toFixed(3));
            if (s.classList.contains('wx-cover')) [].forEach.call(tr.children, function (it) {
                var q = it.getBoundingClientRect(), c = ((q.left + q.width / 2) - vw / 2) / vw;
                if (s.classList.contains('wx-cover')) {
                    it.style.setProperty('--ry', clamp(-c * 70, -40, 40).toFixed(1) + 'deg');
                    it.style.setProperty('--sc', (1 - Math.min(Math.abs(c) * 0.35, 0.22)).toFixed(3));
                    it.style.setProperty('--op', (1 - Math.min(Math.abs(c) * 1.4, 0.7)).toFixed(2));
                }
            });
        });
        running = Math.abs(vel) > 0.08 ? requestAnimationFrame(frame) : 0;
    }
    var running = 0; function kick() { if (!running) running = requestAnimationFrame(frame); }
    sizePins(); window.addEventListener('resize', function () { sizePins(); kick(); }); window.addEventListener('load', function () { sizePins(); kick(); });
    window.addEventListener('scroll', kick, { passive: true });
    kick();
})();
</script>
<?php include __DIR__ . '/footer.php'; ?>
