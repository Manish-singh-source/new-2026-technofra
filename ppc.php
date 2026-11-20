<?php
$pageTitle = 'PPC Company in Mumbai | PPC Services | Technofra';
$metaDescription = 'Technofra is a PPC company in Mumbai offering Google Ads, Meta Ads and pay per click services focused on leads, clear reporting and ROI.';
$metaKeywords = ''; // meta keywords tag intentionally not output (search engines ignore it)
$bodyClass = 'hero-video-page';
$ogImage = 'https://technofra.com/assets/images/new/best-digital-marketing-agency-in-mumbai-team.webp'; // TODO: replace with a 1200x630 image for this page when ready

// FAQ content: rendered in the accordion AND reused for FAQPage structured data so they always match
// [question, plain answer (used in schema), optional HTML answer with links]
$pgFaqs = [
    ['What does a PPC company do?',
     'A PPC company plans, launches, manages and reports on pay per click advertising. That includes keyword research, ad creation, bidding, tracking and regular optimization on platforms like Google, Microsoft and Meta.'],
    ['How is a PPC agency different from a PPC company?',
     'The two names are often used the same way. We think of ourselves as a PPC company because we handle the full cycle, from strategy and setup to tracking and reporting. Some agencies focus only on setup or only on creative work.'],
    ['How long does it take to see results from PPC?',
     'Some clicks and leads can arrive within days. Most accounts need a few weeks of testing before costs become steady. We explain the timeline before you spend, so there are no surprises.'],
    ['Which platforms do you manage?',
     'We manage Google Ads, Microsoft Ads and Meta, which includes Facebook and Instagram. We can advise on other platforms if they suit your audience better.'],
    ['Do you offer Google Ads management services and Meta Ads management?',
     'Yes. Some businesses need both. Search ads capture people who are already looking, while Meta ads help you reach people who don\'t know they need you yet.'],
    ['How do you measure PPC success?',
     'We track click-through rate, conversion rate, cost per acquisition and return on ad spend. Where possible, we also check lead quality, because a cheap lead that never buys isn\'t a win.'],
    ['Will I receive regular reports?',
     'Yes. You get scheduled reports covering spend, results and the changes we made. If something in the report is unclear, you can ask us directly.'],
    ['Can PPC work for any business?',
     'Most businesses can benefit from PPC, but the right approach depends on your industry, your margins and your website. If a business is better off fixing its site first, we\'ll say so.'],
    ['How much do your PPC services cost?',
     'Pricing depends on the scope of work, your monthly ad spend and the platforms you use. We give a custom quote after a short call about your goals. Contact us to get started.'],
    ['What budget do I need to start PPC?',
     'There is no single minimum. The right starting budget depends on your industry, the cost per click in your market, and what a lead or sale is worth to you. We discuss how much you can comfortably spend each month, then plan a budget small enough to learn from and flexible enough to grow when the numbers support it.'],
    ['Do you guarantee leads or ROI?',
     'No. Results depend on your market, competition, offer, website and budget, so nobody can honestly promise exact leads or returns. What we do commit to is careful budget monitoring, proper conversion tracking, ongoing testing and honest reports, so you can see what your spend is doing and decide with real data.'],
    ['Who owns the ad account?',
     'You do. Your ad accounts should be in your name, with us given access to manage them. That way you keep your campaign history, audiences and data if we ever stop working together. We\'re happy to walk you through the setup and show you how to view your own account at any time.'],
];

// Areas shown in the local section. Edit this list to match the places you really serve.
$pgAreas = ['Kandivali', 'Borivali', 'Malad', 'Goregaon', 'Andheri', 'Powai'];

// Real proof (case studies / results). Leave empty and the section stays hidden. Fill in REAL figures only, e.g.:
// $pgProof = [['metric' => 'Real figure', 'title' => 'Client or project', 'text' => 'What was done and what changed']];

$pgProof = [];

$pgServices = ['Google Search Ads', 'Display and Remarketing Ads', 'Meta Ads Management', 'Microsoft Ads Management', 'LinkedIn Ads Management', 'Shopping and Ecommerce Ads', 'Landing Page Optimization', 'Conversion Tracking and Reporting', 'Google Ads Management Services', 'PPC Management Services'];
$pgFaqEntities = [];
foreach ($pgFaqs as $pgF) {
    $pgFaqEntities[] = ['@type' => 'Question', 'name' => $pgF[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $pgF[1]]];
}
$pgOffers = [];
foreach ($pgServices as $pgS) {
    $pgOffers[] = ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $pgS]];
}
$pgUrl = 'https://technofra.com/ppc';
$pgSchema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        ['@type' => 'ProfessionalService', '@id' => 'https://technofra.com/#organization', 'name' => 'Technofra', 'url' => 'https://technofra.com', 'logo' => 'https://technofra.com/assets/images/new/logo.png', 'image' => $ogImage, 'telephone' => '+918080803374', 'email' => 'info@technofra.com',
            'address' => ['@type' => 'PostalAddress', 'streetAddress' => 'Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West)', 'addressLocality' => 'Mumbai', 'addressRegion' => 'Maharashtra', 'postalCode' => '400067', 'addressCountry' => 'IN'],
            'areaServed' => ['@type' => 'City', 'name' => 'Mumbai'],
            'sameAs' => ['https://www.facebook.com/technofra/', 'https://x.com/Technofra_', 'https://www.linkedin.com/company/technofra/', 'https://youtube.com/@technofra', 'https://www.instagram.com/technofra.company/']],
        ['@type' => 'WebPage', '@id' => $pgUrl . '#webpage', 'url' => $pgUrl, 'name' => $pageTitle, 'description' => $metaDescription, 'about' => ['@id' => $pgUrl . '#service']],
        ['@type' => 'Service', '@id' => $pgUrl . '#service', 'name' => 'PPC Services in Mumbai', 'serviceType' => 'Pay Per Click Advertising', 'url' => $pgUrl, 'description' => $metaDescription, 'areaServed' => ['@type' => 'City', 'name' => 'Mumbai'], 'provider' => ['@id' => 'https://technofra.com/#organization'], 'hasOfferCatalog' => ['@type' => 'OfferCatalog', 'name' => 'PPC Services Services', 'itemListElement' => $pgOffers]],
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://technofra.com/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'PPC Company in Mumbai', 'item' => $pgUrl],
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
include __DIR__ . '/header.php';
?>

<style>
/* =========================================================
   SEO PAGE — premium animated design (scoped to .sx)
   Theme: Technofra blue on navy / soft blue
   ========================================================= */
.sx{--p:#36c5f3;--pt:#0b86b3;--p2:#7fd9f8;--b:#193463;--lil:#7fd9f8;--navy:#0b1b3d;--ink:#14264a;--muted:#5b6270;--soft:#f1fafe;--line:#d3edf9;
    font-family:var(--font-secondary,'Manrope',system-ui,-apple-system,'Segoe UI',sans-serif);color:var(--ink);line-height:1.6;overflow-x:clip;background:#fff}
.sx *,.sx *::before,.sx *::after{box-sizing:border-box}
.sx h1,.sx h2,.sx h3,.sx h4{font-family:var(--font-primary,'Sora',system-ui,sans-serif);margin:0;letter-spacing:-.03em;line-height:1.14;color:inherit}
.sx p{margin:0}
.sx a{text-decoration:none}
.sx img{max-width:100%;height:auto;display:block}
.sx ul{list-style:none;margin:0;padding:0}
.sx-wrap{width:100%;max-width:1240px;margin:0 auto;padding:0 clamp(1rem,.4rem + 2.6vw,2rem)}
.sx-sec{position:relative;padding:clamp(4rem,2.5rem + 5.5vw,7.5rem) 0}
.sx-eyebrow{display:inline-flex;align-items:center;gap:.65rem;font-size:.78rem;font-weight:800;letter-spacing:.16em;text-transform:uppercase;color:var(--p)}
.sx-eyebrow::before{content:"";width:34px;height:2px;border-radius:2px;background:linear-gradient(90deg,var(--p),var(--b))}
.sx-h2{font-size:clamp(2rem,1.2rem + 2.7vw,3.4rem);font-weight:800;margin-top:.9rem}
.sx-lead{font-size:clamp(1rem,.95rem + .3vw,1.14rem);color:var(--muted);line-height:1.85}
.sx-grad{background:linear-gradient(90deg,#7fd9f8,#36c5f3,#7fd9f8);background-size:200% auto;-webkit-background-clip:text;background-clip:text;color:transparent;animation:sxShine 6s linear infinite}
.sx-grad-d{background:linear-gradient(90deg,#0b86b3,#193463,#0b86b3);background-size:200% auto;-webkit-background-clip:text;background-clip:text;color:transparent;animation:sxShine 7s linear infinite}
.sx-head{max-width:820px;margin:0 auto clamp(2.5rem,2rem + 2vw,4rem);text-align:center}
.sx-head .sx-lead{margin-top:1.1rem}

/* ---------- buttons ---------- */
.sx-btn{position:relative;overflow:hidden;display:inline-flex;align-items:center;gap:.7rem;padding:1rem 1.8rem;border-radius:999px;font-weight:700;font-size:.98rem;color:#fff;border:0;cursor:pointer;
    background:linear-gradient(135deg,#1597c9 0%,#193463 100%);box-shadow:0 14px 34px rgba(25,52,99,.38);transition:transform .3s,box-shadow .3s}
.sx-btn::after{content:"";position:absolute;inset:0;background:linear-gradient(110deg,transparent 30%,rgba(255,255,255,.5) 50%,transparent 70%);transform:translateX(-130%);transition:transform .8s}
.sx-btn:hover{transform:translateY(-3px);box-shadow:0 22px 48px rgba(54,197,243,.5);color:#fff}
.sx-btn:hover::after{transform:translateX(130%)}
.sx-btn i{transition:transform .3s}
.sx-btn:hover i{transform:translateX(5px)}
.sx-btn.pulse{animation:sxPulse 2.8s ease-in-out infinite}
.sx-btn-ghost{background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.3);box-shadow:none;-webkit-backdrop-filter:blur(8px);backdrop-filter:blur(8px)}
.sx-btn-ghost:hover{background:rgba(255,255,255,.16);box-shadow:none}
.sx-btn-white{background:#fff;color:#193463;box-shadow:0 16px 38px rgba(6,16,40,.3)}
.sx-btn-white:hover{color:var(--p)}

/* ---------- reveal ---------- */
.sx-js .sx-reveal{opacity:0;transform:translateY(34px);transition:opacity .9s cubic-bezier(.2,.7,.2,1),transform .9s cubic-bezier(.2,.7,.2,1);transition-delay:var(--d,0s)}
.sx-js .sx-reveal.l{transform:translateX(-46px)}
.sx-js .sx-reveal.r{transform:translateX(46px)}
.sx-js .sx-reveal.z{transform:scale(.92)}
.sx-js .sx-reveal.is-in{opacity:1;transform:none}

/* ---------- HERO ---------- */
.sx-hero{position:relative;overflow:hidden;color:#fff;padding:clamp(8.5rem,7rem + 5vw,11rem) 0 clamp(6rem,5rem + 4vw,9rem);
    background:radial-gradient(900px 520px at 85% 15%,rgba(54,197,243,.65),transparent 60%),radial-gradient(800px 480px at 5% 95%,rgba(25,52,99,.5),transparent 60%),linear-gradient(160deg,#0a1a3a 0%,#193463 100%)}
.sx-hero-bg{position:absolute;inset:0;pointer-events:none}
.sx-orb{position:absolute;border-radius:50%;filter:blur(70px);opacity:.55;animation:sxDrift 16s ease-in-out infinite alternate}
.sx-orb.o1{width:380px;height:380px;background:#36c5f3;top:-90px;right:12%}
.sx-orb.o2{width:320px;height:320px;background:#193463;bottom:-80px;left:6%;animation-delay:-5s}
.sx-orb.o3{width:220px;height:220px;background:#36c5f3;top:40%;left:38%;opacity:.28;animation-delay:-9s}
.sx-grid{position:absolute;inset:-40px;background-image:linear-gradient(rgba(255,255,255,.06) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.06) 1px,transparent 1px);background-size:56px 56px;
    -webkit-mask-image:radial-gradient(ellipse 75% 70% at 60% 40%,#000 25%,transparent 75%);mask-image:radial-gradient(ellipse 75% 70% at 60% 40%,#000 25%,transparent 75%);animation:sxGridMove 22s linear infinite}
.sx-hero-grid{position:relative;z-index:2;display:grid;grid-template-columns:1.02fr .98fr;gap:clamp(2rem,4vw,4rem);align-items:center}
.sx-badge{display:inline-flex;align-items:center;gap:.65rem;padding:.55rem 1.1rem;border-radius:999px;font-size:.86rem;font-weight:700;background:rgba(255,255,255,.09);border:1px solid rgba(255,255,255,.22);-webkit-backdrop-filter:blur(8px);backdrop-filter:blur(8px)}
.sx-dot{width:9px;height:9px;border-radius:50%;background:#34d399;box-shadow:0 0 0 0 rgba(52,211,153,.7);animation:sxPing 2s infinite}
.sx-hero h1{font-size:clamp(2rem,1.1rem + 2.8vw,3.35rem);font-weight:800;margin:1.4rem 0 1.4rem;color:#fff}
.sx-hero h1 .ln{display:block}

.sx-hero-desc{font-size:clamp(1rem,.95rem + .3vw,1.15rem);color:rgba(255,255,255,.78);line-height:1.85;max-width:56ch}
.sx-actions{display:flex;flex-wrap:wrap;gap:1rem;margin-top:2rem}
.sx ul.sx-checks{margin-top:2.4rem}
.sx-checks{display:grid;grid-template-columns:repeat(2,auto);justify-content:start;gap:.8rem 2rem;margin-top:2.2rem}
.sx-checks li{display:flex;align-items:center;gap:.6rem;font-weight:600;font-size:.95rem;color:rgba(255,255,255,.92)}
.sx-checks i{color:#34d399}
.sx-hero-visual{position:relative;display:grid;place-items:center;min-height:clamp(300px,38vw,520px)}
.sx-ring{position:absolute;border-radius:50%;border:1.5px dashed rgba(255,255,255,.22);animation:sxSpin 46s linear infinite}
.sx-ring.r1{inset:2%}
.sx-ring.r2{inset:15%;animation-direction:reverse;border-color:rgba(54,197,243,.4);animation-duration:60s}
.sx-ring::before{content:"";position:absolute;top:-6px;left:50%;width:12px;height:12px;border-radius:50%;background:#7fd9f8;box-shadow:0 0 18px 4px rgba(54,197,243,.9)}
.sx-hero-img-wrap{position:relative;z-index:2;width:100%;max-width:600px;animation:sxFloat 7s ease-in-out infinite}
.sx-hero-img-wrap img{width:100%;filter:drop-shadow(0 34px 60px rgba(54,197,243,.55));transform:translate3d(calc(var(--px,0)*16px),calc(var(--py,0)*14px),0);transition:transform .25s ease-out}
.sx-chip{position:absolute;z-index:3;display:inline-flex;align-items:center;gap:.6rem;padding:.65rem 1rem;border-radius:16px;font-size:.84rem;font-weight:700;color:#fff;
    background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.28);-webkit-backdrop-filter:blur(12px);backdrop-filter:blur(12px);box-shadow:0 18px 40px rgba(6,16,40,.35);animation:sxBob 5.5s ease-in-out infinite}
.sx-chip i{width:30px;height:30px;border-radius:10px;display:grid;place-items:center;font-size:.85rem;background:linear-gradient(135deg,var(--p),var(--b))}
.sx-chip.c1{top:6%;left:0}
.sx-chip.c2{top:14%;right:-2%;animation-delay:-1.4s}
.sx-chip.c3{bottom:12%;left:2%;animation-delay:-2.6s}
.sx-chip.c4{bottom:4%;right:4%;animation-delay:-3.8s}
.sx-hero::after{content:"";position:absolute;left:-6%;right:-6%;bottom:-1px;height:70px;background:#fff;border-radius:50% 50% 0 0/100% 100% 0 0;z-index:3}
.sx-in{animation:sxIn 1s cubic-bezier(.2,.7,.2,1) both}

/* ---------- marquee ---------- */
.sx-marquee{position:relative;overflow:hidden;padding:1.6rem 0 .6rem;background:#fff}
.sx-marquee-track{display:flex;gap:0;width:max-content;animation:sxMarq 40s linear infinite}
.sx-marquee-track>div{gap:1rem!important;padding-right:1rem}
.sx-marquee:hover .sx-marquee-track{animation-play-state:paused}
.sx-marquee{padding:1.4rem 0 1rem}
.sx-marquee span{display:inline-flex;align-items:center;gap:.7rem;white-space:nowrap;padding:.75rem 1.5rem;border-radius:999px;background:#f1fafe;border:1px solid #d3edf9;box-shadow:0 8px 20px rgba(25,52,99,.07);font-family:var(--font-primary,'Sora',sans-serif);font-weight:700;font-size:clamp(1rem,.9rem + .6vw,1.3rem);letter-spacing:0;line-height:1.2;color:#193463;-webkit-font-smoothing:antialiased;text-rendering:optimizeLegibility}
.sx-marquee span i{order:-1;font-size:.85em;color:var(--p)}
@media (max-width:575px){.sx-marquee span{padding:.65rem 1.2rem;font-size:1rem}}
.sx-marquee::before,.sx-marquee::after{content:"";position:absolute;top:0;bottom:0;width:90px;z-index:2;pointer-events:none}
.sx-marquee::before{left:0;background:linear-gradient(90deg,#fff,transparent)}
.sx-marquee::after{right:0;background:linear-gradient(270deg,#fff,transparent)}

/* ---------- intro + counters ---------- */
.sx-intro{padding-top:clamp(2.5rem,2rem + 2vw,4.5rem)}
.sx-intro-grid{display:grid;grid-template-columns:1.1fr .9fr;gap:clamp(2rem,5vw,5rem);align-items:center}
.sx-intro-copy .sx-lead{margin-top:1.2rem}
.sx-intro-copy .sx-lead a{color:var(--p);font-weight:700;border-bottom:2px solid rgba(54,197,243,.3)}
.sx-stats{display:grid;gap:1.1rem}
.sx-stat{display:flex;align-items:center;gap:1.3rem;padding:1.5rem 1.7rem;border-radius:26px;background:linear-gradient(135deg,#fff,var(--soft));border:1px solid var(--line);box-shadow:0 18px 50px rgba(54,197,243,.1);animation:sxBob 7s ease-in-out infinite}
.sx-stat:nth-child(2){margin-left:clamp(0rem,3vw,2.5rem);animation-delay:-2s}
.sx-stat:nth-child(3){animation-delay:-4s}
.sx-stat b{font-family:var(--font-primary,'Sora',sans-serif);font-size:clamp(2.3rem,1.6rem + 2vw,3.5rem);font-weight:800;letter-spacing:-.04em;line-height:1;background:linear-gradient(135deg,var(--p),var(--b));-webkit-background-clip:text;background-clip:text;color:transparent;flex:none;white-space:nowrap;padding-right:.12em;min-width:3.9ch}
.sx-stat span{font-weight:700;color:var(--ink);line-height:1.35}

/* ---------- why (bento) ---------- */
.sx-soft{background:var(--soft)}
.sx-soft::before{content:"";position:absolute;top:-120px;right:-120px;width:420px;height:420px;border-radius:50%;background:radial-gradient(circle,rgba(54,197,243,.16),transparent 70%);pointer-events:none}
.sx-why-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1.1rem}
.sx-why{position:relative;overflow:hidden;padding:1.7rem 1.5rem 1.6rem;border-radius:24px;background:#fff;border:1px solid var(--line);transition:transform .4s cubic-bezier(.2,.7,.2,1),box-shadow .4s,border-color .4s}
.sx-why::before{content:"";position:absolute;inset:0;opacity:0;transition:opacity .4s;background:radial-gradient(320px circle at var(--mx,50%) var(--my,50%),rgba(54,197,243,.13),transparent 45%)}
.sx-why:hover{transform:translateY(-8px);border-color:rgba(54,197,243,.5);box-shadow:0 26px 60px rgba(54,197,243,.18)}
.sx-why:hover::before{opacity:1}
.sx-why::after{content:attr(data-n);position:absolute;right:1rem;top:.4rem;font-family:var(--font-primary,'Sora',sans-serif);font-size:3.6rem;font-weight:800;color:rgba(54,197,243,.07);line-height:1}
.sx-ico{position:relative;width:54px;height:54px;border-radius:17px;display:grid;place-items:center;color:#fff;font-size:1.2rem;background:linear-gradient(135deg,var(--p),var(--b));box-shadow:0 12px 28px rgba(54,197,243,.38);transition:transform .5s}
.sx-why:hover .sx-ico,.sx-svc:hover .sx-ico{transform:rotate(-8deg) scale(1.1)}
.sx-why p{position:relative;margin-top:1.15rem;font-weight:700;color:var(--ink);font-size:1rem;line-height:1.5}

/* ---------- services (dark) ---------- */
.sx-dark{color:#fff;background:radial-gradient(800px 420px at 15% 0%,rgba(54,197,243,.45),transparent 60%),radial-gradient(700px 420px at 95% 100%,rgba(25,52,99,.4),transparent 60%),#0b1b3d;overflow:hidden}
.sx-dark .sx-eyebrow{color:#8fe0fa}
.sx-dark .sx-lead{color:rgba(255,255,255,.72)}
.sx-dark::after{content:"";position:absolute;inset:0;pointer-events:none;background-image:radial-gradient(rgba(255,255,255,.07) 1.2px,transparent 1.2px);background-size:30px 30px;-webkit-mask-image:linear-gradient(180deg,transparent,#000 30%,#000 70%,transparent);mask-image:linear-gradient(180deg,transparent,#000 30%,#000 70%,transparent)}
.sx-dark .sx-wrap{position:relative;z-index:2}
.sx-svc-grid{display:grid;grid-template-columns:repeat(6,1fr);gap:1.2rem}
.sx-svc{position:relative;grid-column:span 2;overflow:hidden;padding:2rem 1.8rem 2.1rem;border-radius:28px;background:linear-gradient(160deg,rgba(255,255,255,.08),rgba(255,255,255,.02));border:1px solid rgba(255,255,255,.12);transition:transform .45s cubic-bezier(.2,.7,.2,1),border-color .4s,box-shadow .4s}
.sx-svc:nth-child(n+7){grid-column:span 3}
.sx-svc::before{content:"";position:absolute;inset:0;opacity:0;transition:opacity .4s;background:radial-gradient(420px circle at var(--mx,50%) var(--my,50%),rgba(54,197,243,.38),transparent 45%)}
.sx-svc:hover{transform:translateY(-8px);border-color:rgba(54,197,243,.6);box-shadow:0 30px 70px rgba(25,52,99,.35)}
.sx-svc:hover::before{opacity:1}
.sx-svc::after{content:attr(data-n);position:absolute;right:1.3rem;top:.9rem;font-family:var(--font-primary,'Sora',sans-serif);font-size:3.6rem;font-weight:800;color:rgba(255,255,255,.07);line-height:1}
.sx-svc>*{position:relative}
.sx-svc h3{margin-top:1.4rem;font-size:1.3rem;font-weight:700;color:#fff}
.sx-svc p{margin-top:.8rem;font-size:.97rem;line-height:1.75;color:rgba(255,255,255,.7)}
.sx-svc .bar{display:block;height:3px;width:46px;margin-top:1.4rem;border-radius:3px;background:linear-gradient(90deg,#7fd9f8,#36c5f3);transition:width .6s cubic-bezier(.2,.7,.2,1)}
.sx-svc:hover .bar{width:100%}

/* ---------- results ---------- */
.sx-results-grid{display:grid;grid-template-columns:.9fr 1.1fr;gap:clamp(2rem,5vw,5rem);align-items:start}
.sx-sticky{position:sticky;top:120px}
.sx-sticky .sx-lead{margin-top:1.2rem}
.sx-sticky .sx-btn{margin-top:2rem}
.sx-res-list{display:grid;gap:1.1rem}
.sx-res{position:relative;overflow:hidden;display:grid;grid-template-columns:64px 1fr;gap:1.4rem;align-items:start;padding:1.8rem 1.8rem 1.8rem 1.6rem;border-radius:26px;background:#fff;border:1px solid var(--line);box-shadow:0 14px 40px rgba(54,197,243,.07);transition:transform .4s cubic-bezier(.2,.7,.2,1),box-shadow .4s}
.sx-res::before{content:"";position:absolute;left:0;top:0;bottom:0;width:5px;background:linear-gradient(180deg,var(--p),var(--b));transform:scaleY(0);transform-origin:top;transition:transform .5s}
.sx-res:hover{transform:translateX(10px);box-shadow:0 26px 60px rgba(54,197,243,.17)}
.sx-res:hover::before{transform:scaleY(1)}
.sx-res .sx-ico{width:60px;height:60px;border-radius:20px;font-size:1.35rem}
.sx-res h3{font-size:1.28rem;font-weight:700;color:var(--ink)}
.sx-res p{margin-top:.55rem;color:var(--muted);line-height:1.75;font-size:.98rem}

/* ---------- process timeline ---------- */
.sx-timeline{position:relative;max-width:1020px;margin:0 auto;--fill:0%}
.sx-tl-line{position:absolute;left:50%;top:20px;bottom:20px;width:4px;margin-left:-2px;border-radius:4px;background:rgba(54,197,243,.15)}
.sx-tl-fill{display:block;width:100%;height:var(--fill);border-radius:4px;background:linear-gradient(180deg,var(--p),var(--b));box-shadow:0 0 20px rgba(54,197,243,.7)}
.sx-step{position:relative;display:grid;grid-template-columns:1fr 88px 1fr;align-items:center;margin-bottom:2.4rem}
.sx-step:last-child{margin-bottom:0}
.sx-node{grid-column:2;grid-row:1;justify-self:center;position:relative;z-index:2;width:60px;height:60px;border-radius:50%;display:grid;place-items:center;font-family:var(--font-primary,'Sora',sans-serif);font-weight:800;font-size:1.05rem;background:#fff;color:#8fa1c4;border:3px solid var(--line);transition:all .5s cubic-bezier(.2,.7,.2,1)}
.sx-step.is-on .sx-node{background:linear-gradient(135deg,var(--p),var(--b));color:#fff;border-color:#fff;transform:scale(1.12);box-shadow:0 0 0 9px rgba(54,197,243,.16),0 14px 32px rgba(54,197,243,.5)}
.sx-scard{grid-column:1;grid-row:1;padding:1.7rem 1.8rem;border-radius:26px;background:#fff;border:1px solid var(--line);box-shadow:0 16px 44px rgba(54,197,243,.08);transition:box-shadow .4s,border-color .4s,transform .4s}
.sx-step.right .sx-scard{grid-column:3}
.sx-step.is-on .sx-scard{border-color:rgba(54,197,243,.45);box-shadow:0 26px 64px rgba(54,197,243,.18)}
.sx-scard .top{display:flex;align-items:center;gap:1rem}
.sx-scard .sx-ico{width:46px;height:46px;border-radius:15px;font-size:1.05rem;flex:none}
.sx-scard h3{font-size:1.18rem;font-weight:700}
.sx-scard p{margin-top:.85rem;color:var(--muted);line-height:1.75;font-size:.97rem}

/* ---------- overview (image) ---------- */
.sx-ov{background:linear-gradient(180deg,#fff 0%,var(--soft) 100%);overflow:hidden}
.sx-ov-grid{display:grid;grid-template-columns:.95fr 1.05fr;gap:clamp(2rem,5vw,5rem);align-items:center}
.sx-ov-visual{position:relative;display:grid;place-items:center;padding:2rem 0}
.sx-ov-visual::before{content:"";position:absolute;inset:8% 4%;border-radius:50%;background:radial-gradient(circle,rgba(54,197,243,.35),rgba(25,52,99,.12) 55%,transparent 72%);filter:blur(30px);animation:sxPulseGlow 5s ease-in-out infinite}
.sx-orbit{position:absolute;inset:3%;border-radius:50%;border:1.5px dashed rgba(54,197,243,.38);animation:sxSpin 55s linear infinite}
.sx-orbit.b{inset:14%;border-color:rgba(25,52,99,.3);animation-direction:reverse;animation-duration:42s}
.sx-orbit::before{content:"";position:absolute;top:-7px;left:50%;width:14px;height:14px;border-radius:50%;background:var(--p);box-shadow:0 0 20px 5px rgba(54,197,243,.7)}
.sx-ov-img{position:relative;z-index:2;width:100%;max-width:520px;animation:sxFloat 7s ease-in-out infinite;filter:drop-shadow(0 30px 40px rgba(25,52,99,.28))}
.sx-ov-copy .top{display:flex;flex-wrap:wrap;align-items:center;gap:.8rem 1.2rem;margin-bottom:.2rem}
.sx-loc{display:inline-flex;align-items:center;gap:.5rem;padding:.45rem 1rem;border-radius:999px;font-size:.85rem;font-weight:700;color:var(--p);background:#fff;border:1px solid var(--line)}
.sx-ov-copy .sx-lead{margin-top:1.2rem}
.sx-ov-copy h3.lbl{margin-top:2rem;font-size:.82rem;letter-spacing:.14em;text-transform:uppercase;font-weight:800;color:var(--p)}
.sx-pill-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:.8rem;margin-top:1rem}
.sx-pill{display:flex;align-items:center;gap:.8rem;padding:.9rem 1rem;border-radius:16px;background:#fff;border:1px solid var(--line);font-weight:700;font-size:.95rem;line-height:1.35;transition:transform .3s,border-color .3s,box-shadow .3s}
.sx-pill i{flex:none;width:28px;height:28px;border-radius:50%;display:grid;place-items:center;font-size:.7rem;color:#fff;background:linear-gradient(135deg,var(--p),var(--b))}
.sx-pill:hover{transform:translateY(-4px);border-color:rgba(54,197,243,.5);box-shadow:0 16px 34px rgba(54,197,243,.15)}
.sx-ov-copy .sx-btn{margin-top:2rem}

/* ---------- CTA ---------- */
.sx-cta{padding:clamp(3rem,2rem + 3vw,5rem) 0}
.sx-cta-card{position:relative;overflow:hidden;text-align:center;color:#fff;border-radius:40px;padding:clamp(3.2rem,2rem + 5vw,6rem) clamp(1.4rem,5vw,5rem);
    background:linear-gradient(120deg,#193463,#36c5f3,#193463,#36c5f3);background-size:300% 300%;animation:sxGradient 14s ease infinite;box-shadow:0 34px 80px rgba(25,52,99,.38)}
.sx-cta-card .o{position:absolute;border-radius:50%;filter:blur(60px);opacity:.5;animation:sxDrift 14s ease-in-out infinite alternate}
.sx-cta-card .o1{width:300px;height:300px;background:#7fd9f8;top:-110px;left:-80px}
.sx-cta-card .o2{width:260px;height:260px;background:#36c5f3;bottom:-110px;right:-60px;animation-delay:-6s}
.sx-cta-card::after{content:"";position:absolute;inset:0;pointer-events:none;background-image:radial-gradient(rgba(255,255,255,.22) 1.4px,transparent 1.4px);background-size:26px 26px;-webkit-mask-image:radial-gradient(ellipse at center,transparent 35%,#000 100%);mask-image:radial-gradient(ellipse at center,transparent 35%,#000 100%)}
.sx-cta-in{position:relative;z-index:2;max-width:860px;margin:0 auto}
.sx-cta-card h2{font-size:clamp(2rem,1.2rem + 2.8vw,3.5rem);font-weight:800;color:#fff}
.sx-cta-card h2 span{color:#c9f0fd}
.sx-cta-card p{margin-top:1.1rem;font-size:clamp(1rem,.95rem + .3vw,1.12rem);line-height:1.85;color:rgba(255,255,255,.88)}
.sx-cta-card .sx-actions{justify-content:center;margin-top:2.2rem}

/* ---------- FAQ ---------- */
.sx-faq-grid{display:grid;grid-template-columns:.85fr 1.15fr;gap:clamp(2rem,5vw,5rem);align-items:start}
.sx-faq-side .sx-lead{margin-top:1.1rem;max-width:46ch}
.sx-faq-img{margin-top:2rem;max-width:380px;animation:sxFloat 7s ease-in-out infinite}
.sx-acc{display:grid;gap:1rem}
.sx-acc-item{border-radius:22px;background:#fff;border:1px solid var(--line);transition:box-shadow .4s,border-color .4s}
.sx-acc-item.is-open{border-color:rgba(54,197,243,.5);box-shadow:0 22px 56px rgba(54,197,243,.16)}
.sx-acc-btn{width:100%;display:flex;align-items:center;gap:1rem;padding:1.15rem 1.3rem;background:none;border:0;cursor:pointer;text-align:left;font:inherit;color:var(--ink)}
.sx-acc-n{flex:none;width:40px;height:40px;border-radius:50%;display:grid;place-items:center;font-family:var(--font-primary,'Sora',sans-serif);font-size:.82rem;font-weight:800;color:#fff;background:linear-gradient(135deg,var(--p),var(--b))}
.sx .sx-acc-btn{background:transparent;box-shadow:none;border-radius:22px;outline:0;-webkit-tap-highlight-color:transparent}
.sx .sx-acc-btn:hover,.sx .sx-acc-btn:focus,.sx .sx-acc-btn:active{background:transparent;color:var(--ink);outline:0;box-shadow:none}
.sx .sx-acc-btn:focus-visible{outline:2px solid var(--p);outline-offset:-3px}
.sx-acc-q{flex:1;font-family:var(--font-primary,'Sora',sans-serif);font-weight:700;font-size:1.04rem;line-height:1.4;letter-spacing:-.02em}
.sx-acc-t{flex:none;width:34px;height:34px;border-radius:50%;display:grid;place-items:center;border:1.5px solid var(--p);color:var(--p);transition:transform .4s,background .3s,color .3s}
.sx-acc-t i{font-size:.8rem;line-height:1;width:auto;height:auto;margin:0;color:inherit}
.sx-acc-item.is-open .sx-acc-t{transform:rotate(135deg);background:var(--p);color:#fff}
.sx-acc-panel{display:grid;grid-template-rows:0fr;transition:grid-template-rows .45s cubic-bezier(.2,.7,.2,1)}
.sx-acc-item.is-open .sx-acc-panel{grid-template-rows:1fr}
.sx-acc-in{overflow:hidden}
.sx-acc-in p{padding:0 1.5rem 1.5rem 4.6rem;color:var(--muted);line-height:1.8;font-size:.99rem}

/* ---------- keyframes ---------- */
@keyframes sxShine{to{background-position:200% center}}
@keyframes sxDrift{from{transform:translate(0,0) scale(1)}to{transform:translate(40px,-30px) scale(1.12)}}
@keyframes sxGridMove{to{transform:translate(56px,56px)}}
@keyframes sxSpin{to{transform:rotate(360deg)}}
@keyframes sxFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-16px)}}
@keyframes sxBob{0%,100%{transform:translateY(0)}50%{transform:translateY(-9px)}}
@keyframes sxPing{70%{box-shadow:0 0 0 10px rgba(52,211,153,0)}100%{box-shadow:0 0 0 0 rgba(52,211,153,0)}}
@keyframes sxMarq{to{transform:translateX(-50%)}}
@keyframes sxPulse{0%,100%{box-shadow:0 14px 34px rgba(54,197,243,.38)}50%{box-shadow:0 14px 34px rgba(54,197,243,.38),0 0 0 14px rgba(54,197,243,.14)}}
@keyframes sxPulseGlow{0%,100%{opacity:.8;transform:scale(1)}50%{opacity:1;transform:scale(1.08)}}
@keyframes sxGradient{0%,100%{background-position:0% 50%}50%{background-position:100% 50%}}
@keyframes sxIn{from{opacity:0;transform:translateY(30px) scale(.96)}to{opacity:1;transform:none}}

/* ---------- responsive ---------- */
@media (max-width:1199.98px){
  .sx-why-grid{grid-template-columns:repeat(2,1fr)}
  .sx-svc{grid-column:span 3}
  .sx-svc:nth-child(n+7){grid-column:span 3}
}
@media (max-width:991.98px){
  .sx-hero-grid,.sx-intro-grid,.sx-results-grid,.sx-ov-grid,.sx-faq-grid{grid-template-columns:1fr}
  .sx-hero{padding-top:8rem}
  .sx-hero-visual{min-height:0;margin-top:1rem}
  .sx-sticky{position:static}
  .sx-ov-visual{order:-1}
  .sx-stat:nth-child(2){margin-left:0}
  .sx-timeline{--lx:28px}
  .sx-tl-line{left:var(--lx);margin-left:-2px}
  .sx-step{grid-template-columns:56px 1fr;gap:1.2rem}
  .sx-node{grid-column:1;justify-self:start;width:56px;height:56px}
  .sx-scard,.sx-step.right .sx-scard{grid-column:2}
}
@media (max-width:767.98px){
  .sx-svc,.sx-svc:nth-child(n+7){grid-column:span 6}
  .sx-chip{font-size:.72rem;padding:.5rem .75rem}
  .sx-chip i{width:24px;height:24px;font-size:.7rem}
  .sx-chip.c2{right:0}
  .sx-checks{grid-template-columns:1fr}
  .sx-res{grid-template-columns:1fr;gap:1rem}
  .sx-res:hover{transform:translateY(-6px)}
  .sx-acc-in p{padding:0 1.3rem 1.4rem 1.3rem}
}
@media (max-width:575.98px){
  .sx-why-grid,.sx-pill-grid{grid-template-columns:1fr}
  .sx-actions .sx-btn{width:100%;justify-content:center}
  .sx-cta-card{border-radius:28px}
}
@media (prefers-reduced-motion:reduce){
  .sx *,.sx *::before,.sx *::after{animation:none!important;transition:none!important}
  .sx-js .sx-reveal{opacity:1!important;transform:none!important}
}
/* ---------- text contrast on light (cyan is for accents/gradients) ---------- */
.sx-eyebrow,.sx-loc,.sx-ov-copy h3.lbl{color:var(--pt)}
.sx-dark .sx-eyebrow{color:#8fe0fa}
.sx-intro-copy .sx-lead a,.sx-lead a.in,.sx-acc-in p a,.sx-link{color:var(--pt);font-weight:700;border-bottom:2px solid rgba(54,197,243,.4)}
.sx-link:hover,.sx-acc-in p a:hover{color:#193463}
.sx-acc-t{border-color:var(--pt);color:var(--pt)}
.sx-acc-item.is-open .sx-acc-t{background:#193463;border-color:#193463}
.sx-hero h1{font-size:clamp(2rem,1.1rem + 2.6vw,3.2rem)}
.sx-hero h1 .ln{white-space:normal}
.sx-dark .sx-lead a,.sx-cta-card a.in{color:#8fe0fa;font-weight:700;border-bottom:2px solid rgba(143,224,250,.45)}
.sx-sec p a.in{color:var(--pt);font-weight:700;border-bottom:2px solid rgba(54,197,243,.4)}
.sx-body p+p{margin-top:1.1rem}

/* ---------- hero: browser mockup (web) ---------- */
.sx-browser{position:relative;z-index:2;width:100%;max-width:560px;border-radius:20px;background:#fff;box-shadow:0 40px 90px rgba(3,10,30,.55),0 0 0 1px rgba(255,255,255,.18);overflow:hidden;animation:sxFloat 7s ease-in-out infinite;transform:translate3d(calc(var(--px,0)*14px),calc(var(--py,0)*12px),0)}
.sx-bar{display:flex;align-items:center;gap:.5rem;padding:.8rem 1rem;background:#eaf6fc;border-bottom:1px solid #d3edf9}
.sx-bar i{width:11px;height:11px;border-radius:50%;background:#ff6b6b}
.sx-bar i:nth-child(2){background:#ffd166}.sx-bar i:nth-child(3){background:#34d399}
.sx-url{margin-left:.6rem;flex:1;padding:.32rem .9rem;border-radius:999px;background:#fff;font-size:.74rem;font-weight:700;color:#193463;border:1px solid #d3edf9;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.sx-url b{color:#34d399;margin-right:.4rem}
.sx-bd{padding:1.1rem;background:linear-gradient(180deg,#fff,#f1fafe)}
.sx-nv{display:flex;align-items:center;gap:.6rem;margin-bottom:1rem}
.sx-nv span{height:9px;width:46px;border-radius:6px;background:#d3edf9}
.sx-nv span:first-child{width:74px;background:linear-gradient(90deg,#36c5f3,#193463)}
.sx-nv em{margin-left:auto;height:24px;width:70px;border-radius:999px;background:linear-gradient(135deg,#36c5f3,#193463)}
.sx-hb{padding:1.3rem;border-radius:16px;background:linear-gradient(135deg,#193463,#0b1b3d);color:#fff;position:relative;overflow:hidden}
.sx-hb::after{content:"";position:absolute;right:-30px;top:-30px;width:130px;height:130px;border-radius:50%;background:radial-gradient(circle,rgba(54,197,243,.7),transparent 70%)}
.sx-hb b{display:block;height:13px;width:70%;border-radius:7px;background:#fff;margin-bottom:.55rem}
.sx-hb b+b{width:48%;background:#7fd9f8}
.sx-hb u{display:block;height:7px;width:82%;border-radius:5px;background:rgba(255,255,255,.35);margin-top:.9rem;text-decoration:none}
.sx-hb u+u{width:60%;margin-top:.45rem}
.sx-hb s{display:inline-block;margin-top:1rem;height:26px;width:92px;border-radius:999px;background:#36c5f3;text-decoration:none;position:relative;z-index:2}
.sx-cards3{display:grid;grid-template-columns:repeat(3,1fr);gap:.7rem;margin-top:.9rem}
.sx-cards3 div{padding:.8rem;border-radius:14px;background:#fff;border:1px solid #d3edf9;box-shadow:0 8px 18px rgba(25,52,99,.07)}
.sx-cards3 i{display:grid;place-items:center;width:30px;height:30px;border-radius:10px;color:#fff;font-size:.8rem;background:linear-gradient(135deg,#36c5f3,#193463)}
.sx-cards3 span{display:block;height:7px;border-radius:5px;background:#d3edf9;margin-top:.6rem}
.sx-cards3 span+span{width:60%;margin-top:.35rem}
.sx-code{position:absolute;z-index:3;left:-4%;bottom:6%;width:240px;padding:.9rem 1rem;border-radius:16px;background:rgba(8,20,48,.92);border:1px solid rgba(127,217,248,.35);box-shadow:0 22px 50px rgba(3,10,30,.5);font-family:ui-monospace,Menlo,Consolas,monospace;font-size:.72rem;line-height:1.7;color:#9fb6d9;animation:sxBob 6s ease-in-out infinite}
.sx-code .k{color:#7fd9f8}.sx-code .s{color:#34d399}.sx-code .c{color:#6b84ad}
.sx-mini{position:absolute;z-index:3;right:-2%;bottom:-2%;width:128px;border-radius:22px;padding:.5rem;background:#0b1b3d;border:2px solid rgba(127,217,248,.5);box-shadow:0 24px 50px rgba(3,10,30,.5);animation:sxBob 5s ease-in-out infinite;animation-delay:-2s}
.sx-mini div{border-radius:16px;overflow:hidden;background:#fff;padding:.55rem}
.sx-mini b{display:block;height:46px;border-radius:9px;background:linear-gradient(135deg,#36c5f3,#193463)}
.sx-mini span{display:block;height:6px;border-radius:4px;background:#d3edf9;margin-top:.45rem}
.sx-mini span:nth-child(3){width:70%}

/* ---------- hero: phone mockup (social) ---------- */
.sx-phone{position:relative;z-index:2;width:min(300px,70%);border-radius:40px;padding:.7rem;background:linear-gradient(160deg,#27487f,#0b1b3d);border:2px solid rgba(127,217,248,.45);box-shadow:0 40px 90px rgba(3,10,30,.6),0 0 60px rgba(54,197,243,.25);animation:sxFloat 7s ease-in-out infinite;transform:translate3d(calc(var(--px,0)*14px),calc(var(--py,0)*12px),0)}
.sx-phone::before{content:"";position:absolute;top:.9rem;left:50%;width:86px;height:20px;margin-left:-43px;border-radius:12px;background:#0b1b3d;z-index:3}
.sx-scr{border-radius:30px;background:#fff;overflow:hidden;padding:2.4rem .9rem 1rem}
.sx-pf{display:flex;align-items:center;gap:.6rem}
.sx-pf i{width:38px;height:38px;border-radius:50%;display:grid;place-items:center;color:#fff;font-size:.9rem;background:linear-gradient(135deg,#36c5f3,#193463)}
.sx-pf b{display:block;font-size:.8rem;color:#14264a;line-height:1.2}.sx-pf small{font-size:.68rem;color:#6b7a95}
.sx-post{margin-top:.8rem;height:150px;border-radius:16px;position:relative;overflow:hidden;background:linear-gradient(135deg,#193463 0%,#36c5f3 100%)}
.sx-post::before{content:"";position:absolute;inset:auto -20% -40% auto;width:200px;height:200px;border-radius:50%;background:rgba(255,255,255,.18)}
.sx-post span{position:absolute;left:1rem;bottom:1rem;right:1rem;color:#fff;font-family:var(--font-primary,'Sora',sans-serif);font-weight:800;font-size:1rem;line-height:1.25}
.sx-acts{display:flex;gap:.9rem;margin:.75rem .2rem .4rem;color:#193463;font-size:1rem}
.sx-acts i:first-child{color:#ef4565}
.sx-ln{height:7px;border-radius:5px;background:#d3edf9;margin:.35rem .2rem 0}.sx-ln.s{width:62%}
.sx-float{position:absolute;z-index:3;padding:.8rem 1.1rem;border-radius:18px;color:#fff;background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.3);-webkit-backdrop-filter:blur(12px);backdrop-filter:blur(12px);box-shadow:0 18px 40px rgba(3,10,30,.4);animation:sxBob 5.5s ease-in-out infinite}
.sx-float b{display:block;font-family:var(--font-primary,'Sora',sans-serif);font-size:1.6rem;line-height:1;font-weight:800}
.sx-float span{font-size:.74rem;font-weight:600;opacity:.85}
.sx-float.f1{left:-2%;top:16%}.sx-float.f2{right:-2%;bottom:14%;animation-delay:-2.5s}

/* ---------- AEO answer box ---------- */
.sx-answer{position:relative;margin-top:1.6rem;padding:1.6rem 1.8rem 1.6rem 2rem;border-radius:24px;background:linear-gradient(135deg,#fff,#f1fafe);border:1px solid var(--line);box-shadow:0 18px 50px rgba(25,52,99,.1)}
.sx-answer::before{content:"";position:absolute;left:0;top:14px;bottom:14px;width:5px;border-radius:5px;background:linear-gradient(180deg,#36c5f3,#193463)}
.sx-answer h3{font-size:1.15rem;font-weight:800;color:var(--ink);margin-bottom:.6rem}
.sx-answer p{color:var(--ink);font-weight:600;line-height:1.75}

/* ---------- stack, work, contact ---------- */
.sx-stack{display:grid;grid-template-columns:repeat(3,1fr);gap:1.2rem}
.sx-stk{padding:1.8rem;border-radius:26px;background:#fff;border:1px solid var(--line);box-shadow:0 14px 40px rgba(25,52,99,.07);transition:transform .4s,box-shadow .4s}
.sx-stk:hover{transform:translateY(-8px);box-shadow:0 26px 60px rgba(25,52,99,.16)}
.sx-stk .sx-ico{width:48px;height:48px;border-radius:15px}
.sx-stk h3{margin-top:1.1rem;font-size:1.12rem;font-weight:800}
.sx-tags{display:flex;flex-wrap:wrap;gap:.5rem;margin-top:1rem}
.sx-tags span{padding:.4rem .85rem;border-radius:999px;font-size:.84rem;font-weight:700;color:#193463;background:#f1fafe;border:1px solid #d3edf9}
.sx-work{display:grid;grid-template-columns:repeat(4,1fr);gap:1.1rem}
.sx-wk{position:relative;overflow:hidden;border-radius:24px;background:#fff;border:1px solid var(--line);box-shadow:0 14px 40px rgba(25,52,99,.08);transition:transform .45s cubic-bezier(.2,.7,.2,1),box-shadow .4s}
.sx-wk:hover{transform:translateY(-8px);box-shadow:0 30px 70px rgba(25,52,99,.2)}
.sx-wk .im{aspect-ratio:500/460;overflow:hidden;background:#eaf6fc}
.sx-wk img{width:100%;height:100%;object-fit:cover;transition:transform .7s}
.sx-wk:hover img{transform:scale(1.08)}
.sx-wk .tx{padding:1.1rem 1.2rem 1.3rem}
.sx-wk h3{font-size:1.05rem;font-weight:800;color:var(--ink)}
.sx-wk p{margin-top:.3rem;font-size:.86rem;color:var(--muted);font-weight:600}
.sx-wk.wide{grid-column:span 1}
.sx-contact{display:grid;grid-template-columns:1fr 1fr;gap:1.1rem}
.sx-ct{display:flex;gap:1rem;align-items:flex-start;padding:1.4rem 1.5rem;border-radius:22px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.16)}
.sx-ct .sx-ico{flex:none;width:46px;height:46px;border-radius:15px;font-size:1rem}
.sx-ct h3{font-size:.8rem;letter-spacing:.14em;text-transform:uppercase;color:#8fe0fa;font-weight:800}
.sx-ct p,.sx-ct a{margin-top:.35rem;display:block;color:#fff;font-weight:600;line-height:1.6}
.sx-ct a:hover{color:#8fe0fa}
.sx-ct.full{grid-column:1/-1}
.sx-areas{display:flex;flex-wrap:wrap;gap:.5rem;margin-top:.8rem}
.sx-areas span{padding:.35rem .85rem;border-radius:999px;font-size:.84rem;font-weight:700;color:#fff;background:rgba(54,197,243,.18);border:1px solid rgba(143,224,250,.35)}
.sx-svc-grid.g12{grid-template-columns:repeat(6,1fr)}
.sx-svc-grid.g12 .sx-svc:last-child:nth-child(7){grid-column:1/-1}
.sx-svc a.in{color:#8fe0fa;font-weight:700;border-bottom:2px solid rgba(143,224,250,.45)}
.sx-two{display:grid;grid-template-columns:repeat(2,1fr);gap:1.1rem}
.sx-tile{display:flex;gap:1.1rem;align-items:flex-start;padding:1.5rem 1.6rem;border-radius:24px;background:#fff;border:1px solid var(--line);transition:transform .4s,box-shadow .4s,border-color .4s}
.sx-tile:hover{transform:translateY(-6px);border-color:rgba(54,197,243,.6);box-shadow:0 24px 56px rgba(25,52,99,.15)}
.sx-tile .sx-ico{flex:none;width:50px;height:50px}
.sx-tile h3{font-size:1.1rem;font-weight:800;color:var(--ink)}
.sx-tile p{margin-top:.4rem;color:var(--muted);line-height:1.7;font-size:.97rem}
.sx-note{margin-top:2rem;text-align:center;font-weight:700;color:var(--ink);font-size:1.05rem}
.sx-pill-grid.one{grid-template-columns:1fr}
@media (max-width:1199.98px){.sx-work{grid-template-columns:repeat(3,1fr)}.sx-stack{grid-template-columns:repeat(2,1fr)}}
@media (max-width:991.98px){.sx-code{display:none}.sx-two,.sx-contact{grid-template-columns:1fr}.sx-float.f1{left:2%}.sx-float.f2{right:2%}}
@media (max-width:767.98px){.sx-work{grid-template-columns:repeat(2,1fr)}.sx-stack{grid-template-columns:1fr}.sx-svc-grid.g12{grid-template-columns:1fr}.sx-svc-grid.g12 .sx-svc,.sx-svc-grid.g12 .sx-svc:last-child:nth-child(7){grid-column:auto}}
@media (max-width:480px){.sx-work{grid-template-columns:1fr}.sx-mini{display:none}}

/* =================== V2 UPGRADE =================== */
.sx-progress{position:fixed;top:0;left:0;height:3px;width:0;background:linear-gradient(90deg,#36c5f3,#193463);z-index:99999;box-shadow:0 0 12px rgba(54,197,243,.8)}
.sx-wrap[data-word]{position:relative}
.sx-wrap[data-word]::before{content:attr(data-word);position:absolute;right:0;top:-1.2rem;font-family:var(--font-primary,'Sora',sans-serif);font-weight:800;font-size:clamp(5rem,13vw,12rem);line-height:1;letter-spacing:-.05em;color:transparent;-webkit-text-stroke:1.5px rgba(25,52,99,.07);pointer-events:none;user-select:none;z-index:0}
.sx-dark .sx-wrap[data-word]::before{-webkit-text-stroke-color:rgba(255,255,255,.08)}
.sx-wrap[data-word]>*{position:relative;z-index:1}

/* trust strip overlapping hero */
.sx-trust{position:relative;z-index:6;margin-top:calc(-1 * clamp(3.4rem,2.4rem + 3vw,5rem));padding-bottom:.4rem}
.sx-trust-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:.4rem;padding:.9rem;border-radius:30px;background:rgba(255,255,255,.9);-webkit-backdrop-filter:blur(18px);backdrop-filter:blur(18px);border:1px solid #fff;box-shadow:0 34px 80px rgba(25,52,99,.22)}
.sx-tr{display:flex;align-items:center;gap:.95rem;padding:1rem 1.1rem;border-radius:22px;transition:background .3s,transform .3s}
.sx-tr:hover{background:#f1fafe;transform:translateY(-3px)}
.sx-tr .sx-ico{flex:none;width:50px;height:50px;border-radius:16px}
.sx-tr b{display:block;font-family:var(--font-primary,'Sora',sans-serif);font-size:1.45rem;font-weight:800;letter-spacing:-.03em;line-height:1.05;color:var(--ink)}
.sx-tr span.l{display:block;margin-top:.2rem;font-size:.84rem;font-weight:600;color:var(--muted);line-height:1.3}

/* bento */
.sx-bento{display:grid;grid-template-columns:repeat(12,1fr);gap:1.1rem}
.sx-bn{position:relative;grid-column:span 4;overflow:hidden;padding:1.9rem 1.7rem 2rem;border-radius:28px;background:linear-gradient(160deg,rgba(255,255,255,.09),rgba(255,255,255,.02));border:1px solid rgba(255,255,255,.14);transition:transform .45s cubic-bezier(.2,.7,.2,1),border-color .4s,box-shadow .4s}
.sx-bn.w3{grid-column:span 3}.sx-bn.w6{grid-column:span 6}.sx-bn.w8{grid-column:span 8}.sx-bn.w12{grid-column:span 12}
.sx-bn::before{content:"";position:absolute;inset:0;opacity:0;transition:opacity .4s;background:radial-gradient(420px circle at var(--mx,50%) var(--my,50%),rgba(54,197,243,.34),transparent 45%)}
.sx-bn:hover{transform:translateY(-8px);border-color:rgba(54,197,243,.65);box-shadow:0 30px 70px rgba(6,16,40,.4)}
.sx-bn:hover::before{opacity:1}
.sx-bn::after{content:attr(data-n);position:absolute;right:1.2rem;top:.7rem;font-family:var(--font-primary,'Sora',sans-serif);font-size:3.6rem;font-weight:800;color:rgba(255,255,255,.07);line-height:1}
.sx-bn>*{position:relative}
.sx-bn h3{margin-top:1.3rem;font-size:1.28rem;font-weight:700;color:#fff}
.sx-bn p{margin-top:.75rem;font-size:.97rem;line-height:1.75;color:rgba(255,255,255,.74)}
.sx-bn p a,.sx-bn h3 a{color:#8fe0fa;font-weight:700}
.sx-bn p a{border-bottom:2px solid rgba(143,224,250,.45)}
.sx-bn .more{display:inline-flex;align-items:center;gap:.5rem;margin-top:1.2rem;font-weight:700;font-size:.92rem;color:#8fe0fa}
.sx-bn .more i{transition:transform .3s}.sx-bn:hover .more i{transform:translateX(5px)}
.sx-bn.feat{background:linear-gradient(135deg,rgba(54,197,243,.3),rgba(25,52,99,.7));border-color:rgba(143,224,250,.5)}
.sx-bn.feat h3{font-size:1.5rem}
.sx-bn.row{display:grid;grid-template-columns:auto 1fr;gap:0 1.4rem;align-items:start}
.sx-bn.row h3{margin-top:0}
.sx-bento.light .sx-bn{background:#fff;border:1px solid var(--line);box-shadow:0 14px 40px rgba(25,52,99,.07)}
.sx-bento.light .sx-bn::after{color:rgba(25,52,99,.06)}
.sx-bento.light .sx-bn h3{color:var(--ink)}
.sx-bento.light .sx-bn p{color:var(--muted)}
.sx-bento.light .sx-bn p a{color:var(--pt);border-bottom-color:rgba(54,197,243,.4)}
.sx-bento.light .sx-bn:hover{border-color:rgba(54,197,243,.6);box-shadow:0 26px 60px rgba(25,52,99,.16)}
.sx-bento.light .sx-bn::before{background:radial-gradient(420px circle at var(--mx,50%) var(--my,50%),rgba(54,197,243,.16),transparent 45%)}
.sx-bento.light .sx-bn.feat{background:linear-gradient(135deg,#193463,#0b1b3d);border-color:#193463}
.sx-bento.light .sx-bn.feat h3{color:#fff}.sx-bento.light .sx-bn.feat p{color:rgba(255,255,255,.78)}
.sx-bento.light .sx-bn.feat::after{color:rgba(255,255,255,.08)}

/* pain / compare */
.sx-pains{display:grid;grid-template-columns:repeat(3,1fr);gap:1.1rem;margin-top:2rem}
.sx-pain{padding:1.6rem;border-radius:24px;background:linear-gradient(160deg,#fff,#f1fafe);border:1px solid var(--line);box-shadow:0 14px 36px rgba(25,52,99,.08);transition:transform .4s,box-shadow .4s}
.sx-pain:hover{transform:translateY(-6px);box-shadow:0 26px 56px rgba(25,52,99,.16)}
.sx-pain .sx-ico{width:46px;height:46px;border-radius:15px;background:linear-gradient(135deg,#193463,#0b1b3d)}
.sx-pain h3{margin-top:1rem;font-size:1.08rem;font-weight:800;color:var(--ink)}
.sx-pain p{margin-top:.5rem;color:var(--muted);font-size:.95rem;line-height:1.7}

/* testimonials */
.sx-chips-row{display:flex;flex-wrap:wrap;justify-content:center;gap:.6rem;margin-bottom:2.4rem}
.sx-chips-row span{display:inline-flex;align-items:center;gap:.5rem;padding:.55rem 1.1rem;border-radius:999px;font-weight:700;font-size:.88rem;color:#193463;background:#fff;border:1px solid var(--line);box-shadow:0 8px 20px rgba(25,52,99,.06)}
.sx-chips-row i{color:var(--pt)}
.sx-tst-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.2rem}
.sx-tst{position:relative;display:flex;flex-direction:column;padding:2rem 1.8rem 1.6rem;border-radius:28px;background:#fff;border:1px solid var(--line);box-shadow:0 16px 44px rgba(25,52,99,.08);transition:transform .45s,box-shadow .4s}
.sx-tst:hover{transform:translateY(-8px);box-shadow:0 30px 70px rgba(25,52,99,.18)}
.sx-tst .q{font-size:2.4rem;line-height:1;color:var(--p)}
.sx-tst blockquote{margin:.6rem 0 0;flex:1;color:var(--ink);line-height:1.8;font-size:.99rem;font-weight:500}
.sx-tst footer{display:flex;align-items:center;gap:.9rem;margin-top:1.5rem;padding-top:1.2rem;border-top:1px solid var(--line)}
.sx-tst footer img.av{width:54px;height:54px;border-radius:50%;object-fit:cover;border:3px solid #d3edf9;flex:none}
.sx-tst footer b{display:block;font-family:var(--font-primary,'Sora',sans-serif);font-size:1rem;color:var(--ink)}
.sx-tst footer img.lg{margin-left:auto;max-height:30px;max-width:92px;width:auto;object-fit:contain;opacity:.9}
.sx-stars{color:#36c5f3;font-size:.8rem;letter-spacing:.15em}

/* proof (case studies, filled via PHP array) */
.sx-proof{display:grid;grid-template-columns:repeat(3,1fr);gap:1.2rem;margin-top:2.4rem}
.sx-pr{padding:1.9rem;border-radius:28px;color:#fff;background:linear-gradient(135deg,#193463,#0b1b3d);box-shadow:0 24px 60px rgba(25,52,99,.3)}
.sx-pr b{display:block;font-family:var(--font-primary,'Sora',sans-serif);font-size:2.4rem;font-weight:800;letter-spacing:-.04em;line-height:1;background:linear-gradient(90deg,#7fd9f8,#36c5f3);-webkit-background-clip:text;background-clip:text;color:transparent}
.sx-pr h3{margin-top:.9rem;font-size:1.1rem;color:#fff}
.sx-pr p{margin-top:.5rem;color:rgba(255,255,255,.76);line-height:1.7;font-size:.95rem}

/* map + local */
.sx-local{display:grid;grid-template-columns:1fr 1fr;gap:clamp(1.5rem,4vw,3.5rem);align-items:stretch}
.sx-map{position:relative;min-height:380px;height:100%;border-radius:30px;overflow:hidden;border:1px solid rgba(255,255,255,.2);background:radial-gradient(circle at 50% 42%,rgba(54,197,243,.4),transparent 55%),linear-gradient(135deg,#14305e,#0b1b3d);box-shadow:0 30px 70px rgba(3,10,30,.45)}
.sx-map::before{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,.07) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.07) 1px,transparent 1px);background-size:44px 44px;-webkit-mask-image:radial-gradient(circle at 50% 45%,#000 20%,transparent 75%);mask-image:radial-gradient(circle at 50% 45%,#000 20%,transparent 75%)}
.sx-map-in{position:absolute;inset:0;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:1rem;padding:1.5rem;text-align:center;color:#fff}
.sx-pin{width:74px;height:74px;border-radius:50%;display:grid;place-items:center;font-size:1.7rem;color:#fff;background:linear-gradient(135deg,#36c5f3,#193463);box-shadow:0 0 0 12px rgba(54,197,243,.18),0 0 0 26px rgba(54,197,243,.09);animation:sxPulseGlow 3s ease-in-out infinite}
.sx-map-in p{max-width:30ch;font-weight:600;line-height:1.6;color:rgba(255,255,255,.9)}
.sx-map iframe{position:absolute;inset:0;width:100%;height:100%;border:0}
.sx-local-copy .sx-lead{margin-top:1.1rem}
.sx-local .sx-contact{margin-top:1.6rem;grid-template-columns:1fr 1fr}
.sx-btn-sm{padding:.8rem 1.4rem;font-size:.9rem}

/* industries */
.sx-ind{display:grid;grid-template-columns:repeat(3,1fr);gap:1.1rem}
.sx-in-c{position:relative;overflow:hidden;padding:1.7rem 1.6rem;border-radius:26px;background:#fff;border:1px solid var(--line);transition:transform .4s,box-shadow .4s,border-color .4s}
.sx-in-c::before{content:"";position:absolute;inset:0;opacity:0;transition:opacity .4s;background:radial-gradient(320px circle at var(--mx,50%) var(--my,50%),rgba(54,197,243,.16),transparent 45%)}
.sx-in-c:hover{transform:translateY(-8px);border-color:rgba(54,197,243,.6);box-shadow:0 26px 60px rgba(25,52,99,.16)}
.sx-in-c:hover::before{opacity:1}
.sx-in-c>*{position:relative}
.sx-in-c h3{margin-top:1.1rem;font-size:1.12rem;font-weight:800;color:var(--ink)}
.sx-in-c p{margin-top:.45rem;color:var(--muted);font-size:.95rem;line-height:1.7}

/* link strip */
.sx-links{display:flex;flex-wrap:wrap;justify-content:center;gap:.7rem;margin-top:2rem}
.sx-links a{display:inline-flex;align-items:center;gap:.55rem;padding:.7rem 1.2rem;border-radius:999px;font-weight:700;font-size:.92rem;color:#193463;background:#fff;border:1px solid var(--line);box-shadow:0 8px 20px rgba(25,52,99,.06);transition:transform .3s,border-color .3s,box-shadow .3s}
.sx-links a:hover{transform:translateY(-4px);border-color:rgba(54,197,243,.7);box-shadow:0 16px 34px rgba(25,52,99,.15);color:#193463}
.sx-links i{color:var(--pt)}
.sx-dark .sx-links a{background:rgba(255,255,255,.08);border-color:rgba(255,255,255,.2);color:#fff}
.sx-dark .sx-links i{color:#8fe0fa}

/* price banner */
.sx-price{display:flex;align-items:center;gap:1.2rem;margin-top:2rem;padding:1.3rem 1.6rem;border-radius:24px;background:linear-gradient(135deg,#fff,#f1fafe);border:1px solid var(--line);box-shadow:0 14px 40px rgba(25,52,99,.08)}
.sx-price p{color:var(--ink);font-weight:600;line-height:1.7}
.sx-price .sx-ico{flex:none}

.sx-ov-copy .sx-pill-grid{margin-top:1.6rem}
/* hero tuning */
.sx-hero-grid{grid-template-columns:1.12fr .88fr}
.sx-hero h1{font-size:clamp(1.9rem,.9rem + 2.3vw,3rem)}
.sx-dash{margin:3.2rem 0 3rem}
.sx-dash~.sx-chip.c1{top:2%;left:4%}.sx-dash~.sx-chip.c2{top:2%;right:2%}.sx-dash~.sx-chip.c3{bottom:0;left:6%}.sx-dash~.sx-chip.c4{bottom:0;right:6%}
@media (max-width:991.98px){.sx-hero-grid{grid-template-columns:1fr}}

/* ===== responsive hardening ===== */
.sx img{max-width:100%}
.sx-hero-grid>*,.sx-intro-grid>*,.sx-ov-grid>*,.sx-results-grid>*,.sx-faq-grid>*,.sx-local>*,.sx-two>*,.sx-ind>*,.sx-bento>*,.sx-why-grid>*,.sx-stack>*,.sx-work>*,.sx-gal>*,.sx-pains>*,.sx-tst-grid>*{min-width:0}
.sx h1,.sx h2,.sx h3,.sx p,.sx li,.sx figcaption,.sx blockquote,.sx a{overflow-wrap:break-word}
.sx-ind.c4{grid-template-columns:repeat(4,1fr)}.sx-ind.c5{grid-template-columns:repeat(5,1fr)}
.sx-ov-grid.wide{grid-template-columns:1.05fr .95fr}
.sx-pains.one{grid-template-columns:1fr;gap:.9rem;margin-top:1.6rem}
.sx-why-grid.c3{grid-template-columns:repeat(3,1fr)}
.sx-dash{max-width:100%}
.sx-hero-visual{min-width:0;max-width:100%}
.sx-tile h3{min-width:0}
/* photo components */
.sx-hero-img-wrap.photo{max-width:520px;width:100%}
.sx-hero-img-wrap.photo img{width:100%;height:auto;border-radius:34px;border:1px solid rgba(255,255,255,.35);box-shadow:0 40px 90px rgba(3,10,30,.55),0 0 70px rgba(54,197,243,.25)}
.sx-gal{display:grid;grid-template-columns:repeat(3,1fr);gap:1.2rem}
.sx-gl{position:relative;margin:0;overflow:hidden;border-radius:30px;background:#0b1b3d;box-shadow:0 24px 60px rgba(25,52,99,.22);transition:transform .5s cubic-bezier(.2,.7,.2,1),box-shadow .4s}
.sx-gl:hover{transform:translateY(-8px);box-shadow:0 34px 80px rgba(25,52,99,.34)}
.sx-gl img{display:block;width:100%;height:auto;aspect-ratio:3/4;object-fit:cover;transition:transform .8s}
.sx-gl:hover img{transform:scale(1.06)}
.sx-gl figcaption{position:absolute;left:0;right:0;bottom:0;padding:4.5rem 1.5rem 1.5rem;color:#fff;background:linear-gradient(180deg,transparent,rgba(8,20,48,.92) 62%)}
.sx-gl figcaption b{display:flex;align-items:center;gap:.7rem;font-family:var(--font-primary,'Sora',sans-serif);font-size:1.2rem}
.sx-gl figcaption b i{display:grid;place-items:center;width:36px;height:36px;border-radius:12px;font-size:.9rem;background:linear-gradient(135deg,#36c5f3,#193463)}
.sx-gl figcaption span{display:block;margin-top:.55rem;font-size:.93rem;line-height:1.65;color:rgba(255,255,255,.84)}
.sx-cta-card.split .sx-cta-in{max-width:1000px;display:grid;grid-template-columns:1.15fr .85fr;gap:2rem 3rem;align-items:center;text-align:left}
.sx-cta-card.split .sx-actions{justify-content:flex-start}
.sx-cta-card.split .sx-cta-img{display:block;width:100%;max-width:360px;height:auto;margin:0 auto;filter:drop-shadow(0 24px 40px rgba(3,10,30,.45))}
.sx-faq-img{max-width:100%;height:auto;border-radius:24px}
@media (max-width:1199.98px){.sx-ind.c4{grid-template-columns:repeat(2,1fr)}.sx-ind.c5{grid-template-columns:repeat(3,1fr)}.sx-gal{gap:.9rem}}
@media (max-width:991.98px){.sx-ov-grid.wide{grid-template-columns:1fr}.sx-why-grid.c3,.sx-ind.c5,.sx-ind{grid-template-columns:repeat(2,1fr)}.sx-gal{grid-template-columns:repeat(2,1fr)}.sx-cta-card.split .sx-cta-in{grid-template-columns:1fr;text-align:center}.sx-cta-card.split .sx-actions{justify-content:center}.sx-cta-card.split .sx-cta-img{max-width:260px;order:2}}
@media (max-width:767.98px){.sx-hero{padding-top:7rem}.sx-hero-img-wrap.photo{max-width:420px}}
@media (max-width:575.98px){.sx-ind,.sx-ind.c4,.sx-ind.c5,.sx-why-grid.c3,.sx-gal{grid-template-columns:1fr}.sx-kpis{grid-template-columns:repeat(2,1fr)}.sx-dash{padding:.8rem}.sx-tr{padding:.8rem}.sx-bn{padding:1.5rem 1.3rem}.sx-hero-visual .sx-chip{font-size:.72rem;padding:.45rem .7rem}.sx-gl img{aspect-ratio:4/5}.sx-pill-grid{grid-template-columns:1fr}.sx-map{min-height:260px}.sx-trust-grid{padding:.5rem}}

@media (max-width:1199.98px){.sx-bn.w3{grid-column:span 6}.sx-bn{grid-column:span 6}.sx-bn.w8{grid-column:span 12}.sx-tst-grid,.sx-proof,.sx-ind{grid-template-columns:repeat(2,1fr)}}
@media (max-width:991.98px){.sx-trust-grid{grid-template-columns:repeat(2,1fr)}.sx-local{grid-template-columns:1fr}.sx-map{min-height:300px}.sx-pains{grid-template-columns:1fr}}
@media (max-width:767.98px){.sx-bn,.sx-bn.w3,.sx-bn.w6,.sx-bn.w8{grid-column:span 12}.sx-tst-grid,.sx-proof,.sx-ind{grid-template-columns:1fr}.sx-bn.row{grid-template-columns:1fr}.sx-local .sx-contact{grid-template-columns:1fr}}
@media (max-width:480px){.sx-trust-grid{grid-template-columns:1fr}}

/* =================== LOOP ROWS (auto side-scroll, no arrows) =================== */
.sx-loop{position:relative}
.sx-pc{position:relative;display:flex;flex-direction:column;padding:1.7rem 1.6rem 1.8rem;border-radius:28px;background:#fff;border:1px solid var(--line);box-shadow:0 14px 40px rgba(25,52,99,.08);transition:transform .45s cubic-bezier(.2,.7,.2,1),box-shadow .4s,border-color .4s}
.sx-pc:hover{transform:translateY(-8px);border-color:rgba(54,197,243,.6);box-shadow:0 28px 64px rgba(25,52,99,.18)}
.sx-pc .num{position:absolute;right:1.1rem;top:.5rem;font-family:var(--font-primary,'Sora',sans-serif);font-size:3.8rem;font-weight:800;line-height:1;color:rgba(25,52,99,.07)}
.sx-pc .sx-ico{width:54px;height:54px;border-radius:17px}
.sx-pc h3{margin-top:1.1rem;font-size:1.15rem;font-weight:800;color:var(--ink)}
.sx-pc p{margin-top:.55rem;color:var(--muted);line-height:1.72;font-size:.95rem}
.sx-pc .step{margin-top:auto;padding-top:1rem;font-size:.74rem;font-weight:800;letter-spacing:.14em;text-transform:uppercase;color:var(--pt)}
.sx-dark .sx-pc{background:linear-gradient(160deg,rgba(255,255,255,.09),rgba(255,255,255,.02));border-color:rgba(255,255,255,.14);box-shadow:none}
.sx-dark .sx-pc h3{color:#fff}.sx-dark .sx-pc p{color:rgba(255,255,255,.74)}.sx-dark .sx-pc .num{color:rgba(255,255,255,.08)}
.sx-loop.always{display:flex!important;flex-wrap:nowrap;gap:var(--gap,1.1rem);overflow-x:auto;overflow-y:hidden;scrollbar-width:none;-ms-overflow-style:none;-webkit-overflow-scrolling:touch;overscroll-behavior-x:contain;scroll-snap-type:x proximity;padding:1rem .5rem 2rem;margin-top:-.4rem;cursor:grab;-webkit-mask-image:linear-gradient(90deg,transparent,#000 3.5%,#000 96.5%,transparent);mask-image:linear-gradient(90deg,transparent,#000 3.5%,#000 96.5%,transparent);grid-template-columns:none!important}
.sx-loop.always::-webkit-scrollbar,.sx-loop.m-only::-webkit-scrollbar{display:none}
.sx-loop.always>*{flex:0 0 var(--cw,320px)!important;width:var(--cw,320px)!important;max-width:84vw!important;scroll-snap-align:start;grid-column:auto!important;margin:0!important;transform:none}
.sx-loop.always.rows2{display:grid!important;grid-auto-flow:column;grid-template-rows:repeat(2,auto);grid-auto-columns:var(--cw,340px);flex-wrap:nowrap}
.sx-loop.always.rows2>*{width:auto!important;flex:none!important;max-width:none!important}
@media (max-width:991.98px){
.sx-loop.m-only{display:flex!important;flex-wrap:nowrap;gap:var(--gap,1.1rem);overflow-x:auto;overflow-y:hidden;scrollbar-width:none;-ms-overflow-style:none;-webkit-overflow-scrolling:touch;overscroll-behavior-x:contain;scroll-snap-type:x proximity;padding:1rem .5rem 2rem;margin-top:-.4rem;cursor:grab;-webkit-mask-image:linear-gradient(90deg,transparent,#000 3.5%,#000 96.5%,transparent);mask-image:linear-gradient(90deg,transparent,#000 3.5%,#000 96.5%,transparent);grid-template-columns:none!important}
.sx-loop.m-only>*{flex:0 0 var(--cw,320px)!important;width:var(--cw,320px)!important;max-width:84vw!important;scroll-snap-align:start;grid-column:auto!important;margin:0!important;transform:none}
.sx-loop.m-only.rows2{display:grid!important;grid-auto-flow:column;grid-template-rows:repeat(2,auto);grid-auto-columns:var(--cw,340px);flex-wrap:nowrap}
.sx-loop.m-only.rows2>*{width:auto!important;flex:none!important;max-width:none!important}
}
@media (max-width:575.98px){.sx-loop.always.rows2,.sx-loop.m-only.rows2{grid-auto-columns:min(var(--cw,340px),80vw)}}
.sx-loop.is-run{scroll-snap-type:none}
.sx-loop.dragging{cursor:grabbing;user-select:none}
.sx-loop.dragging a{pointer-events:none}
.sx-loop:focus-visible{outline:3px solid rgba(54,197,243,.7);outline-offset:4px;border-radius:24px}
.sx-loop .sx-clone{pointer-events:auto}
@media (prefers-reduced-motion:reduce){.sx-loop{scroll-snap-type:x mandatory}}
.sx-loop.rows2 .sx-bn::after{display:none}

/* =================== LESS SCROLL: tighter rhythm =================== */
.sx-sec{padding:clamp(2.8rem,1.9rem + 3.6vw,5rem) 0}
.sx-head{margin-bottom:clamp(1.6rem,1.2rem + 1.6vw,2.6rem)}
.sx-h2{font-size:clamp(1.75rem,1.1rem + 2.3vw,2.9rem)}
.sx-hero{padding-bottom:clamp(5rem,4rem + 3vw,7.5rem)}
.sx-hero-visual{grid-template-columns:minmax(0,1fr)}
.sx-results-stack{display:block}
.sx-results-stack .sx-sticky{max-width:900px;margin-bottom:.8rem;position:static}
.sx-results-stack .sx-contact{margin-top:1.4rem}
.sx-results-stack .sx-contact .sx-ct.full{grid-column:1/-1}
.sx-results-stack .sx-res-list{display:block}
.sx-pill{min-width:0}
.sx-sec .sx-lead{margin-top:.9rem}
@media (max-width:991.98px){.sx-ov-visual{order:0}.sx-ov-img{max-height:340px;width:auto;margin:0 auto}.sx-ov-visual{min-height:0}}
@media (max-width:575.98px){.sx-sec{padding:2.6rem 0}.sx-hero{padding-top:6.5rem}.sx-cta-card{padding:2.4rem 1.2rem}}

.sx-steps{display:grid;gap:1.1rem}
.sx-steps.n5{grid-template-columns:repeat(5,1fr)}.sx-steps.n6{grid-template-columns:repeat(3,1fr)}.sx-steps.n4{grid-template-columns:repeat(4,1fr)}
@media (max-width:1199.98px){.sx-steps.n5{grid-template-columns:repeat(3,1fr)}}
.sx-pc{height:100%}
.sx-results-stack .sx-res-list{display:grid;grid-template-columns:repeat(3,1fr);gap:1.1rem;margin-top:1.4rem}
.sx-results-stack .sx-res-list .sx-res{grid-template-columns:1fr;gap:.9rem;align-content:start;height:100%}
@media (max-width:1199.98px){.sx-results-stack .sx-res-list{grid-template-columns:repeat(2,1fr)}}

@media (min-width:1200px){.sx-results-stack .sx-res-list:has(.sx-res:nth-child(8):last-child),.sx-results-stack .sx-res-list:has(.sx-res:nth-child(4):last-child){grid-template-columns:repeat(4,1fr)}}

@media (max-width:767.98px){.sx-wrap[data-word]::before{display:none}.sx-loop.rows2:not(.pills){grid-template-rows:auto!important}.sx-dark::before{display:none}}
.sx-dash{position:relative;z-index:2;width:100%;max-width:560px;padding:1.1rem 1.1rem 1.2rem;border-radius:28px;background:linear-gradient(160deg,rgba(255,255,255,.15),rgba(255,255,255,.04));border:1px solid rgba(255,255,255,.24);-webkit-backdrop-filter:blur(10px);backdrop-filter:blur(10px);box-shadow:0 40px 80px rgba(5,16,60,.55),inset 0 1px 0 rgba(255,255,255,.28);animation:sxFloat 7s ease-in-out infinite}
.sx-dash-top{display:flex;align-items:center;gap:.45rem;margin-bottom:1rem;color:rgba(255,255,255,.85);font-size:.82rem;font-weight:700}
.sx-dash-top i{width:10px;height:10px;border-radius:50%;background:#ff5f57}.sx-dash-top i:nth-child(2){background:#febc2e}.sx-dash-top i:nth-child(3){background:#28c840}
.sx-dash-top span{margin-left:.6rem}
.sx-kpis{display:grid;grid-template-columns:repeat(4,1fr);gap:.6rem}
.sx-kpi{padding:.7rem .75rem;border-radius:16px;background:rgba(255,255,255,.09);border:1px solid rgba(255,255,255,.14)}
.sx-kpi .l{display:block;font-size:.7rem;font-weight:700;letter-spacing:.04em;color:rgba(255,255,255,.7);text-transform:uppercase}
.sx-kpi .t{display:flex;align-items:center;justify-content:space-between;margin-top:.45rem;color:#4ade80;font-size:.9rem}
.sx-kpi .t svg{width:44px;height:20px;overflow:visible}
.sx-kpi .t svg polyline{fill:none;stroke:#4ade80;stroke-width:2.4;stroke-linecap:round;stroke-linejoin:round}
.sx-chart{margin-top:.9rem;padding:.6rem .5rem 0;border-radius:18px;background:rgba(5,16,60,.35);border:1px solid rgba(255,255,255,.1)}
.sx-chart svg{display:block;width:100%;height:auto}
.sx-chart .ln1{fill:none;stroke:#7fd9f8;stroke-width:3.2;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:700;animation:sxDraw 2.6s .5s ease-out both}
.sx-chart .bar{fill:rgba(54,197,243,.5);transform-box:fill-box;transform-origin:bottom;animation:sxGrow 1.4s ease-out both}
.sx-serp{margin-top:.9rem;padding:.85rem 1rem;border-radius:16px;background:#fff;color:#0d1b3e;box-shadow:0 14px 34px rgba(5,16,60,.35)}
.sx-serp .u{display:flex;align-items:center;gap:.5rem;font-size:.72rem;color:#4b5563}
.sx-serp .u b{padding:.05rem .4rem;border:1px solid #4b5563;border-radius:4px;font-size:.66rem;color:#0d1b3e}
.sx-serp .tt{display:block;margin-top:.25rem;font-size:1rem;font-weight:700;color:#1a56db;line-height:1.3}
.sx-serp .d{display:block;margin-top:.2rem;font-size:.8rem;color:#4b5563;line-height:1.5}

@media (max-width:575.98px){.sx-kpis{grid-template-columns:repeat(2,minmax(0,1fr))}.sx-kpi .t svg{width:34px}.sx-dash-top span{font-size:.74rem}}

</style>

<script>document.documentElement.classList.add('sx-js');</script>
<div class="sx-progress" id="sxProgress" aria-hidden="true"></div>
<div class="sx">
<section class="sx-hero" id="sxHero">
    <div class="sx-hero-bg" aria-hidden="true"><span class="sx-grid"></span><span class="sx-orb o1"></span><span class="sx-orb o2"></span><span class="sx-orb o3"></span></div>
    <div class="sx-wrap sx-hero-grid">
        <div class="sx-hero-copy">
            <span class="sx-badge sx-in"><span class="sx-dot"></span>Google Ads &middot; Meta Ads &middot; Pay Per Click</span>
            <h1 class="sx-in" style="animation-delay:.12s"><span class="ln">PPC Company in Mumbai</span><span class="ln sx-grad">Focused on Leads, Sales</span><span class="ln">and Clear ROI</span></h1>
            <p class="sx-hero-desc sx-in" style="animation-delay:.24s">Technofra is a PPC company in Mumbai. We run Google Ads, Meta Ads and other pay per click campaigns for businesses that want customers, not just clicks. You get a team that plans the campaigns, watches the budget closely and explains the results in plain language.</p>
            <div class="sx-actions sx-in" style="animation-delay:.36s"><a href="/enquirynow" class="sx-btn pulse">Enquiry Now <i class="fa-solid fa-arrow-right"></i></a><a href="/contact" class="sx-btn sx-btn-ghost">Contact Us <i class="fa-solid fa-arrow-right"></i></a></div>
            <ul class="sx-checks sx-in" style="animation-delay:.48s"><li><i class="fa-solid fa-circle-check"></i>Google Ads &amp; Meta Ads</li><li><i class="fa-solid fa-circle-check"></i>Budget watched closely</li><li><i class="fa-solid fa-circle-check"></i>Plain-language reporting</li><li><i class="fa-solid fa-circle-check"></i>Customers, not just clicks</li></ul>
        </div>
        <div class="sx-hero-visual sx-in" style="animation-delay:.3s"><span class="sx-ring r1" aria-hidden="true"></span><span class="sx-ring r2" aria-hidden="true"></span>
            <div class="sx-dash" role="img" aria-label="PPC campaign dashboard showing click-through rate, conversion rate, cost per acquisition and return on ad spend, with a Google search ad from Technofra">
                <div class="sx-dash-top" aria-hidden="true"><i></i><i></i><i></i><span>Campaign Performance &middot; Illustrative</span></div>
                <div class="sx-kpis" aria-hidden="true">
                    <div class="sx-kpi"><span class="l">CTR</span><span class="t"><i class="fa-solid fa-arrow-trend-up"></i><svg viewBox="0 0 44 20" aria-hidden="true"><polyline points="0,16 10,12 20,13 30,7 44,3"/></svg></span></div>
                    <div class="sx-kpi"><span class="l">Conv. rate</span><span class="t"><i class="fa-solid fa-arrow-trend-up"></i><svg viewBox="0 0 44 20" aria-hidden="true"><polyline points="0,15 10,13 20,9 30,10 44,4"/></svg></span></div>
                    <div class="sx-kpi"><span class="l">CPA</span><span class="t"><i class="fa-solid fa-arrow-trend-down"></i><svg viewBox="0 0 44 20" aria-hidden="true"><polyline points="0,4 10,7 20,6 30,12 44,16"/></svg></span></div>
                    <div class="sx-kpi"><span class="l">ROAS</span><span class="t"><i class="fa-solid fa-arrow-trend-up"></i><svg viewBox="0 0 44 20" aria-hidden="true"><polyline points="0,17 12,13 22,14 32,8 44,2"/></svg></span></div>
                </div>
                <div class="sx-chart" aria-hidden="true">
                    <svg viewBox="0 0 520 150" preserveAspectRatio="none">
                        <defs><linearGradient id="ppcArea" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#7fd9f8" stop-opacity=".45"/><stop offset="1" stop-color="#7fd9f8" stop-opacity="0"/></linearGradient></defs>
                        <g><rect class="bar" x="18" y="110" width="26" height="40" rx="5" style="animation-delay:0.3s"/><rect class="bar" x="62" y="98" width="26" height="52" rx="5" style="animation-delay:0.4s"/><rect class="bar" x="106" y="102" width="26" height="48" rx="5" style="animation-delay:0.5s"/><rect class="bar" x="150" y="84" width="26" height="66" rx="5" style="animation-delay:0.6s"/><rect class="bar" x="194" y="90" width="26" height="60" rx="5" style="animation-delay:0.7s"/><rect class="bar" x="238" y="66" width="26" height="84" rx="5" style="animation-delay:0.8s"/><rect class="bar" x="282" y="72" width="26" height="78" rx="5" style="animation-delay:0.9s"/><rect class="bar" x="326" y="48" width="26" height="102" rx="5" style="animation-delay:1.0s"/><rect class="bar" x="370" y="54" width="26" height="96" rx="5" style="animation-delay:1.1s"/><rect class="bar" x="414" y="28" width="26" height="122" rx="5" style="animation-delay:1.2s"/><rect class="bar" x="458" y="34" width="26" height="116" rx="5" style="animation-delay:1.3s"/><rect class="bar" x="502" y="12" width="26" height="138" rx="5" style="animation-delay:1.4s"/></g>
                        <path d="M0 120 C60 112 90 100 130 104 S200 82 250 78 S330 86 380 56 S450 36 520 18 L520 150 L0 150 Z" fill="url(#ppcArea)"/>
                        <path class="ln1" d="M0 120 C60 112 90 100 130 104 S200 82 250 78 S330 86 380 56 S450 36 520 18"/>
                    </svg>
                </div>
                <div class="sx-serp">
                    <span class="u"><b>Ad</b>technofra.com &rsaquo; ppc</span>
                    <span class="tt">PPC Company in Mumbai | PPC Services | Technofra</span>
                    <span class="d">Google Ads, Meta Ads and pay per click services focused on leads, clear reporting and ROI.</span>
                </div>
            </div>
            <span class="sx-chip c1"><i class="fa-brands fa-google"></i>Google Ads</span>
            <span class="sx-chip c2"><i class="fa-brands fa-meta"></i>Meta Ads</span>
            <span class="sx-chip c3"><i class="fa-solid fa-rotate"></i>Remarketing</span>
            <span class="sx-chip c4"><i class="fa-solid fa-chart-line"></i>ROI Tracking</span>
        </div>
    </div>
</section><section class="sx-trust" aria-label="At a glance"><div class="sx-wrap"><div class="sx-trust-grid"><div class="sx-tr sx-reveal" style="--d:0.0s"><span class="sx-ico"><i class="fa-solid fa-layer-group"></i></span><div><b>6+</b><span class="l">PPC services under one roof</span></div></div><div class="sx-tr sx-reveal" style="--d:0.08s"><span class="sx-ico"><i class="fa-solid fa-rectangle-ad"></i></span><div><b>4</b><span class="l">Ad platforms: Google, Microsoft, Meta, LinkedIn</span></div></div><div class="sx-tr sx-reveal" style="--d:0.16s"><span class="sx-ico"><i class="fa-solid fa-chart-simple"></i></span><div><b>4</b><span class="l">Core metrics: CTR, conversion rate, CPA, ROAS</span></div></div><div class="sx-tr sx-reveal" style="--d:0.24s"><span class="sx-ico"><i class="fa-solid fa-location-dot"></i></span><div><b>Kandivali</b><span class="l">Office in Mumbai</span></div></div></div></div></section><div class="sx-marquee" aria-hidden="true"><div class="sx-marquee-track"><div style="display:flex;gap:3.2rem"><span>Google Ads<i class="fa-solid fa-star"></i></span><span>Meta Ads<i class="fa-solid fa-star"></i></span><span>Remarketing<i class="fa-solid fa-star"></i></span><span>Shopping Ads<i class="fa-solid fa-star"></i></span><span>Landing Pages<i class="fa-solid fa-star"></i></span><span>Conversion Tracking<i class="fa-solid fa-star"></i></span><span>Reporting<i class="fa-solid fa-star"></i></span><span>Microsoft Ads<i class="fa-solid fa-star"></i></span><span>LinkedIn Ads<i class="fa-solid fa-star"></i></span></div><div style="display:flex;gap:3.2rem"><span>Google Ads<i class="fa-solid fa-star"></i></span><span>Meta Ads<i class="fa-solid fa-star"></i></span><span>Remarketing<i class="fa-solid fa-star"></i></span><span>Shopping Ads<i class="fa-solid fa-star"></i></span><span>Landing Pages<i class="fa-solid fa-star"></i></span><span>Conversion Tracking<i class="fa-solid fa-star"></i></span><span>Reporting<i class="fa-solid fa-star"></i></span><span>Microsoft Ads<i class="fa-solid fa-star"></i></span><span>LinkedIn Ads<i class="fa-solid fa-star"></i></span></div></div></div><section class="sx-sec sx-intro"><div class="sx-wrap" data-word="PPC">
        <div class="sx-intro-grid">
        <div class="sx-intro-copy sx-body">
            <span class="sx-eyebrow sx-reveal">PPC Company in Mumbai</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Why hire a PPC company <span class="sx-grad-d">instead of running ads yourself</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Running ads yourself is possible. Many business owners start that way, usually after a friend tells them how easy it is. The trouble shows up a few weeks later, when the budget is gone, the clicks don't convert and nobody can say which keyword wasted the money.</p>
            <p class="sx-lead sx-reveal" style="--d:.22s">A PPC company spends its days inside these accounts, so it spots those problems early. We keep your spend focused on searches that match what you sell, and we stop what doesn't work before it drains your budget.</p>
        </div>
        <div class="sx-stats sx-loop m-only" tabindex="0" role="region" aria-label="Ad platforms" data-speed="34" style="--cw:290px">
            <div class="sx-tile r" data-spot><span class="sx-ico"><i class="fa-brands fa-google"></i></span><div><h3>Google Ads</h3><p>Search, display, remarketing and shopping campaigns.</p></div></div>
            <div class="sx-tile r" data-spot><span class="sx-ico"><i class="fa-brands fa-meta"></i></span><div><h3>Meta Ads</h3><p>Facebook and Instagram ads for awareness, leads and sales.</p></div></div>
            <div class="sx-tile r" data-spot><span class="sx-ico"><i class="fa-brands fa-microsoft"></i></span><div><h3>Microsoft Ads</h3><p>Search ads across Bing and other Microsoft results.</p></div></div>
        </div></div>
        <div class="sx-pains sx-loop m-only" tabindex="0" role="region" aria-label="PPC points" data-speed="34" style="--cw:290px">
            <div class="sx-pain" data-spot><span class="sx-ico"><i class="fa-solid fa-fire-flame-curved"></i></span><h3>Budget gone too fast</h3><p>Without close monitoring, spend drains on searches that were never going to buy.</p></div>
            <div class="sx-pain" data-spot><span class="sx-ico"><i class="fa-solid fa-arrow-pointer"></i></span><h3>Clicks that don't convert</h3><p>Traffic without the right keywords, ads and landing pages rarely turns into leads or sales.</p></div>
            <div class="sx-pain" data-spot><span class="sx-ico"><i class="fa-solid fa-circle-question"></i></span><h3>No idea what wasted money</h3><p>We spot the keyword and campaign problems early and stop what doesn't work.</p></div>
        </div></div></section><section class="sx-sec sx-soft"><div class="sx-wrap" data-word="PROCESS"><div class="sx-head"><span class="sx-eyebrow sx-reveal">Our Process</span><h2 class="sx-h2 sx-reveal" style="--d:.08s">PPC services company in Mumbai: <span class="sx-grad-d">how we work</span></h2><p class="sx-lead sx-reveal" style="--d:.16s">We start with a conversation about your business. What does a customer look like? What does one sale or lead bring in? How much can you spend each month without stress? Those answers shape everything else.</p></div><div class="sx-steps n5 sx-loop m-only" tabindex="0" role="region" aria-label="Process steps" data-speed="30" style="--cw:290px"><article class="sx-pc" data-spot><span class="num" aria-hidden="true">01</span><span class="sx-ico"><i class="fa-solid fa-comments"></i></span><h3>Understand your business</h3><p>We learn who your customer is, what one sale or lead brings in, and how much you can comfortably spend each month.</p><span class="step">Step 1 of 5</span></article><article class="sx-pc" data-spot><span class="num" aria-hidden="true">02</span><span class="sx-ico"><i class="fa-solid fa-keyboard"></i></span><h3>Keyword research and ad writing</h3><p>We build the account step by step. We research keywords and write ads for each search intent.</p><span class="step">Step 2 of 5</span></article><article class="sx-pc" data-spot><span class="num" aria-hidden="true">03</span><span class="sx-ico"><i class="fa-solid fa-rocket"></i></span><h3>Tracking and launch</h3><p>We set up tracking, then launch with a budget we can learn from.</p><span class="step">Step 3 of 5</span></article><article class="sx-pc" data-spot><span class="num" aria-hidden="true">04</span><span class="sx-ico"><i class="fa-solid fa-flask"></i></span><h3>Test and refine</h3><p>In the first few weeks we test headlines, audiences and bids. After that, we keep refining until the numbers settle into something predictable.</p><span class="step">Step 4 of 5</span></article><article class="sx-pc" data-spot><span class="num" aria-hidden="true">05</span><span class="sx-ico"><i class="fa-solid fa-file-lines"></i></span><h3>Regular reports</h3><p>You'll get regular reports, and you can ask us about any line.</p><span class="step">Step 5 of 5</span></article></div></div></section><section class="sx-sec sx-dark"><div class="sx-wrap" data-word="ADS"><div class="sx-head"><span class="sx-eyebrow sx-reveal">PPC Services</span><h2 class="sx-h2 sx-reveal" style="--d:.08s">Our <span class="sx-grad">PPC services in Mumbai</span></h2><p class="sx-lead sx-reveal" style="--d:.16s">Search, display, remarketing, social and shopping ads, backed by landing pages and tracking that show what your budget is doing. As a Google Ads agency in Mumbai and a Meta ads agency in Mumbai, we run each platform with the same care.</p></div><div class="sx-bento sx-loop always rows2" tabindex="0" role="region" aria-label="PPC services" data-speed="32" style="--cw:340px"><article class="sx-bn w6 feat" data-spot data-n="01"><span class="sx-ico"><i class="fa-solid fa-magnifying-glass"></i></span><h3>Google Search Ads</h3><p>When someone searches for what you sell, your ad can appear at the top of the results. This is where most of our clients see leads come in fastest. Our Google Ads campaign management covers keywords, negatives, ad copy, bids and landing pages in one place.</p></article><article class="sx-bn w6" data-spot data-n="02"><span class="sx-ico"><i class="fa-solid fa-rotate"></i></span><h3>Display and remarketing ads</h3><p>Most people don't buy on their first visit. Remarketing lets us reach people who already know your brand and bring them back at the right moment. If you also want steady traffic that doesn't cost per click, our <a href="/seo">SEO team</a> works on the same keywords from the organic side.</p></article><article class="sx-bn w6" data-spot data-n="03"><span class="sx-ico"><i class="fa-brands fa-meta"></i></span><h3>Meta ads management</h3><p>As a Meta ads agency in Mumbai, we run Facebook and Instagram ads for awareness, lead generation and sales. Meta works well for showing your offer to people who haven't searched for it yet. It also fits into a wider <a href="/social-media-marketing">social media marketing</a> plan, so your posts and ads tell the same story.</p></article><article class="sx-bn w6" data-spot data-n="04"><span class="sx-ico"><i class="fa-solid fa-bag-shopping"></i></span><h3>Shopping and ecommerce ads</h3><p>If you sell products, Google Shopping ads put your items in front of buyers with the price and photo already visible. For stores on <a href="/shopify-development">Shopify</a>, we check the product feed and store setup, so ads never point to pages that are broken or out of stock.</p></article><article class="sx-bn w6" data-spot data-n="05"><span class="sx-ico"><i class="fa-solid fa-window-maximize"></i></span><h3>Landing page optimization</h3><p>A good ad can still lose a customer on a slow or confusing page. We review your landing pages for layout, message and load speed. If a page needs a rebuild, our <a href="/web-design-and-development">web design and development</a> team can handle it.</p></article><article class="sx-bn w6" data-spot data-n="06"><span class="sx-ico"><i class="fa-solid fa-chart-column"></i></span><h3>Conversion tracking and reporting</h3><p>Without tracking, you're guessing. We set up tracking for calls, form fills and purchases, and we send reports that explain what changed and why. If your leads go into a CRM, we can connect that data as well. Our <a href="/crm-development">CRM development</a> team builds those connections, so tracking doesn't stop at the form submit.</p></article><article class="sx-bn w6" data-spot data-n="07"><span class="sx-ico"><i class="fa-brands fa-microsoft"></i></span><h3>Microsoft Ads</h3><p>Microsoft Ads shows your search ads to people using Bing and other Microsoft search results. We set it up alongside Google Ads, reuse your strongest keywords and ad copy, and track it separately, so you can see whether it earns its share of the budget.</p></article><article class="sx-bn w6" data-spot data-n="08"><span class="sx-ico"><i class="fa-brands fa-linkedin-in"></i></span><h3>LinkedIn Ads</h3><p>For B2B companies, LinkedIn Ads let you reach people by job title, industry and company type. We build lead-focused campaigns, test different creatives, and watch your cost per lead every week so the budget goes where it works.</p></article></div></div></section><section class="sx-sec sx-ov"><div class="sx-wrap sx-ov-grid" data-word="MANAGE">
        <div class="sx-ov-copy sx-body">
            <div class="top"><span class="sx-eyebrow sx-reveal">PPC Management</span><span class="sx-loc"><i class="fa-solid fa-location-dot"></i> Mumbai</span></div>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">PPC management services and <span class="sx-grad-d">PPC marketing services</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Ads perform best when they fit the rest of your marketing. Your paid search should match your website, your social presence and your content. Our <a href="/digital-marketing">digital marketing services in Mumbai</a> team can help you plan the full picture, including the <a href="/content-marketing">content marketing</a> that supports your ads.</p>
            <p class="sx-lead sx-reveal" style="--d:.2s">You don't have to buy everything at once. Most clients begin with one channel, see the results and expand from there.</p>
            <h3 class="lbl sx-reveal">Start small, grow with proof</h3>
            <ul class="sx-pill-grid sx-loop m-only rows2 pills" tabindex="0" role="region" aria-label="PPC management points" data-speed="28" style="--cw:210px">
                <li class="sx-pill"><i class="fa-solid fa-check"></i>Begin with one channel</li><li class="sx-pill"><i class="fa-solid fa-check"></i>See the results</li>
                <li class="sx-pill"><i class="fa-solid fa-check"></i>Expand from there</li><li class="sx-pill"><i class="fa-solid fa-check"></i>Ads that match your website</li>
                <li class="sx-pill"><i class="fa-solid fa-check"></i>Paid search plus social and content</li><li class="sx-pill"><i class="fa-solid fa-check"></i>Full-picture marketing plan</li>
            </ul>
            <a href="/contact" class="sx-btn sx-reveal">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="sx-ov-visual sx-reveal r"><span class="sx-orbit" aria-hidden="true"></span><span class="sx-orbit b" aria-hidden="true"></span>
            <img class="sx-ov-img" src="./assets/images/about/ppc-dashboard-800.webp" alt="3D PPC dashboard showing ad performance, conversions, ROAS, audience targeting, bid strategy, A/B testing and remarketing for a PPC company in Mumbai" width="800" height="852" loading="lazy" decoding="async"></div>
    </div></section><section class="sx-sec sx-dark"><div class="sx-wrap" data-word="GOOGLE"><div class="sx-head"><span class="sx-eyebrow sx-reveal">Google Ads</span><h2 class="sx-h2 sx-reveal" style="--d:.08s">Google Ads management services <span class="sx-grad">for growing businesses</span></h2><p class="sx-lead sx-reveal" style="--d:.16s">As a Google Ads agency in Mumbai, our Google Ads management services suit businesses that already know they want to advertise but don't have time to run it well. We handle the day-to-day work, and you get a clear summary every month.</p></div><div class="sx-ind c4 sx-loop m-only" tabindex="0" role="region" aria-label="Google Ads management tasks" data-speed="34" style="--cw:260px"><div class="sx-tile" data-spot style="flex-direction:column;gap:.8rem;background:rgba(255,255,255,.07);border-color:rgba(255,255,255,.16)"><span class="sx-ico"><i class="fa-solid fa-pause"></i></span><h3 style="color:#fff;font-size:1.05rem">Pausing wasteful keywords</h3><p style="color:rgba(255,255,255,.74);margin-top:0">We cut the searches that spend your budget without bringing customers.</p></div><div class="sx-tile" data-spot style="flex-direction:column;gap:.8rem;background:rgba(255,255,255,.07);border-color:rgba(255,255,255,.16)"><span class="sx-ico"><i class="fa-solid fa-flask"></i></span><h3 style="color:#fff;font-size:1.05rem">Testing new ad copy</h3><p style="color:rgba(255,255,255,.74);margin-top:0">We keep testing headlines and messages to improve results over time.</p></div><div class="sx-tile" data-spot style="flex-direction:column;gap:.8rem;background:rgba(255,255,255,.07);border-color:rgba(255,255,255,.16)"><span class="sx-ico"><i class="fa-solid fa-sliders"></i></span><h3 style="color:#fff;font-size:1.05rem">Adjusting bids</h3><p style="color:rgba(255,255,255,.74);margin-top:0">We adjust bids so spend follows what is working.</p></div><div class="sx-tile" data-spot style="flex-direction:column;gap:.8rem;background:rgba(255,255,255,.07);border-color:rgba(255,255,255,.16)"><span class="sx-ico"><i class="fa-solid fa-circle-check"></i></span><h3 style="color:#fff;font-size:1.05rem">Checking conversions</h3><p style="color:rgba(255,255,255,.74);margin-top:0">We confirm conversions are being recorded correctly.</p></div></div><p class="sx-lead sx-reveal" style="margin:2.4rem auto 0;max-width:820px;text-align:center;color:#fff;font-weight:600">You get a clear summary every month, and we flag problems before they become expensive.</p></div></section><section class="sx-sec sx-soft"><div class="sx-wrap" data-word="AGENCY"><div class="sx-head"><span class="sx-eyebrow sx-reveal">PPC Agency</span><h2 class="sx-h2 sx-reveal" style="--d:.08s">PPC advertising company and PPC agency work <span class="sx-grad-d">for every size of business</span></h2><p class="sx-lead sx-reveal" style="--d:.16s">Some clients come to us with a small monthly budget, and others run campaigns across several cities. Our approach stays the same either way. If you're comparing a PPC agency with an in-house hire, we can talk through what makes sense for your budget and team.</p></div><div class="sx-pains sx-loop m-only" tabindex="0" role="region" aria-label="PPC points" data-speed="34" style="--cw:290px"><div class="sx-pain" data-spot><span class="sx-ico"><i class="fa-solid fa-flag-checkered"></i></span><h3>Start with a clear goal</h3><p>Every account begins with what you want: leads, sales or enquiries, and what each one is worth to you.</p></div><div class="sx-pain" data-spot><span class="sx-ico"><i class="fa-solid fa-ruler"></i></span><h3>Measure what matters</h3><p>We track the numbers that connect to your business, not just the ones that look good in a report.</p></div><div class="sx-pain" data-spot><span class="sx-ico"><i class="fa-solid fa-arrow-trend-up"></i></span><h3>Grow only when the numbers support it</h3><p>Budgets and campaigns expand when the results justify it, whether you run in one city or several.</p></div></div><div class="sx-actions sx-reveal" style="justify-content:center;margin-top:2.2rem"><a href="/enquirynow" class="sx-btn">Enquire Now <i class="fa-solid fa-arrow-right"></i></a></div></div></section><section class="sx-sec"><div class="sx-wrap" data-word="ROI"><div class="sx-head"><span class="sx-eyebrow sx-reveal">Reporting</span><h2 class="sx-h2 sx-reveal" style="--d:.08s">How we measure <span class="sx-grad-d">PPC success</span></h2><p class="sx-lead sx-reveal" style="--d:.16s">We track click-through rate, conversion rate, cost per acquisition and return on ad spend. Where possible, we also check lead quality, because a cheap lead that never buys isn't a win.</p></div><div class="sx-ind c5 sx-loop m-only" tabindex="0" role="region" aria-label="PPC success metrics" data-speed="34" style="--cw:240px"><div class="sx-in-c" data-spot style="text-align:center"><span class="sx-ico"><i class="fa-solid fa-computer-mouse"></i></span><h3>Click-through rate</h3><p>How often people who see your ad choose to click it.</p></div><div class="sx-in-c" data-spot style="text-align:center"><span class="sx-ico"><i class="fa-solid fa-percent"></i></span><h3>Conversion rate</h3><p>How many visitors become calls, form fills or purchases.</p></div><div class="sx-in-c" data-spot style="text-align:center"><span class="sx-ico"><i class="fa-solid fa-hand-holding-dollar"></i></span><h3>Cost per acquisition</h3><p>What it costs you to win one lead or customer.</p></div><div class="sx-in-c" data-spot style="text-align:center"><span class="sx-ico"><i class="fa-solid fa-coins"></i></span><h3>Return on ad spend</h3><p>How much revenue your ad budget brings back.</p></div><div class="sx-in-c" data-spot style="text-align:center"><span class="sx-ico"><i class="fa-solid fa-user-check"></i></span><h3>Lead quality</h3><p>Whether the leads you get are the ones that actually buy.</p></div></div></div></section><section class="sx-sec">
    <div class="sx-wrap" data-word="INDUSTRIES">
        <div class="sx-head"><span class="sx-eyebrow sx-reveal">Industries We Serve</span><h2 class="sx-h2 sx-reveal" style="--d:.08s">PPC for <span class="sx-grad-d">Every Industry We Serve</span></h2><p class="sx-lead sx-reveal" style="--d:.16s">Campaigns are planned around your industry and the parts of Mumbai you want to reach. We work with:</p></div>
        <div class="sx-ind sx-loop m-only" tabindex="0" role="region" aria-label="Industries we serve" data-speed="30" style="--cw:300px"><div class="sx-in-c" data-spot><span class="sx-ico"><i class="fa-solid fa-bag-shopping"></i></span><h3>Retail and D2C brands</h3><p>Reach shoppers online and bring them to your store or website.</p></div><div class="sx-in-c" data-spot><span class="sx-ico"><i class="fa-solid fa-building"></i></span><h3>Real estate developers and brokers</h3><p>Generate property enquiries from buyers who are actively searching.</p></div><div class="sx-in-c" data-spot><span class="sx-ico"><i class="fa-solid fa-spa"></i></span><h3>Clinics, salons and wellness brands</h3><p>Help nearby customers find you and book with confidence.</p></div><div class="sx-in-c" data-spot><span class="sx-ico"><i class="fa-solid fa-utensils"></i></span><h3>Restaurants, cafes and cloud kitchens</h3><p>Keep your brand visible where people decide what to eat.</p></div><div class="sx-in-c" data-spot><span class="sx-ico"><i class="fa-solid fa-graduation-cap"></i></span><h3>Schools, coaching centres and edtech</h3><p>Reach parents and students when they compare options.</p></div><div class="sx-in-c" data-spot><span class="sx-ico"><i class="fa-solid fa-industry"></i></span><h3>B2B, manufacturing and IT services firms</h3><p>Build trust with the people who sign off on purchases.</p></div></div>
    </div>
</section><?php if (!empty($pgProof)): ?>
<section class="sx-sec sx-soft">
    <div class="sx-wrap">
        <div class="sx-head"><span class="sx-eyebrow sx-reveal">Results</span><h2 class="sx-h2 sx-reveal" style="--d:.08s">Campaign <span class="sx-grad-d">Results</span></h2><p class="sx-lead sx-reveal" style="--d:.16s">Real PPC results from businesses we have worked with.</p></div>
        <div class="sx-proof">
<?php foreach ($pgProof as $pgP): ?>
            <div class="sx-pr sx-reveal"><b><?php echo htmlspecialchars($pgP['metric'], ENT_QUOTES, 'UTF-8'); ?></b><h3><?php echo htmlspecialchars($pgP['title'], ENT_QUOTES, 'UTF-8'); ?></h3><p><?php echo htmlspecialchars($pgP['text'], ENT_QUOTES, 'UTF-8'); ?></p></div>
<?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?><section class="sx-sec sx-soft"><div class="sx-wrap" data-word="MUMBAI"><div class="sx-head"><span class="sx-eyebrow sx-reveal">Based in Mumbai</span><h2 class="sx-h2 sx-reveal" style="--d:.08s">Why businesses in <span class="sx-grad-d">Mumbai work with us</span></h2><p class="sx-lead sx-reveal" style="--d:.16s">We're based in Mumbai, so you can meet our team in person and get quick answers when something needs attention.</p></div><div class="sx-ind sx-loop m-only" tabindex="0" role="region" aria-label="About, portfolio and team links" data-speed="34" style="--cw:290px"><a class="sx-in-c" href="/portfolios" data-spot style="text-decoration:none;display:block"><span class="sx-ico"><i class="fa-solid fa-briefcase"></i></span><h3>Our portfolio</h3><p>Look through our portfolio to see past work.</p><span class="sx-link" style="display:inline-block;margin-top:.9rem">View portfolio <i class="fa-solid fa-arrow-right"></i></span></a><a class="sx-in-c" href="/about-us" data-spot style="text-decoration:none;display:block"><span class="sx-ico"><i class="fa-solid fa-building"></i></span><h3>About us</h3><p>Read about our background on the about us page.</p><span class="sx-link" style="display:inline-block;margin-top:.9rem">About Technofra <i class="fa-solid fa-arrow-right"></i></span></a><a class="sx-in-c" href="/our-team" data-spot style="text-decoration:none;display:block"><span class="sx-ico"><i class="fa-solid fa-people-group"></i></span><h3>Our team</h3><p>Meet the people who'll run your campaigns on the our team page.</p><span class="sx-link" style="display:inline-block;margin-top:.9rem">Meet the team <i class="fa-solid fa-arrow-right"></i></span></a></div></div></section><section class="sx-sec sx-dark">
    <div class="sx-wrap" data-word="MUMBAI">
        <div class="sx-local">
            <div class="sx-local-copy">
                <span class="sx-eyebrow sx-reveal">Visit or Call Us</span>
                <h2 class="sx-h2 sx-reveal" style="--d:.08s">PPC Company in Mumbai, <span class="sx-grad">Close to You</span></h2>
                <p class="sx-lead sx-reveal" style="--d:.16s">Our office is at Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai 400067. Meet us in person or work with us over calls and video meetings.</p>
                <div class="sx-areas sx-reveal" style="--d:.22s"><?php foreach ($pgAreas as $pgArea): ?><span><?php echo htmlspecialchars($pgArea, ENT_QUOTES, 'UTF-8'); ?></span><?php endforeach; ?></div>
                <div class="sx-contact">
                    <div class="sx-ct sx-reveal full"><span class="sx-ico"><i class="fa-solid fa-location-dot"></i></span><div><h3>Office</h3><p>Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai 400067</p></div></div>
                    <div class="sx-ct sx-reveal" style="--d:.08s"><span class="sx-ico"><i class="fa-solid fa-phone"></i></span><div><h3>Phone</h3><a href="tel:+918080803374">+91 8080 80 3374</a></div></div>
                    <div class="sx-ct sx-reveal" style="--d:.16s"><span class="sx-ico"><i class="fa-solid fa-envelope"></i></span><div><h3>Email</h3><a href="mailto:info@technofra.com">info@technofra.com</a></div></div>
                </div>
                <div class="sx-actions sx-reveal" style="--d:.24s"><a class="sx-btn sx-btn-white sx-btn-sm" href="https://www.google.com/maps/search/?api=1&amp;query=Ghanshyam+Enclave+New+Link+Road+Kandivali+West+Mumbai+400067" target="_blank" rel="noopener">Get Directions <i class="fa-solid fa-diamond-turn-right"></i></a><a class="sx-btn sx-btn-ghost sx-btn-sm" href="/contact">Contact Us <i class="fa-solid fa-arrow-right"></i></a></div>
            </div>
            <div class="sx-map sx-reveal r" id="sxMap">
                <div class="sx-map-in"><span class="sx-pin"><i class="fa-solid fa-location-dot"></i></span><p>Technofra, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai</p><button type="button" class="sx-btn sx-btn-ghost sx-btn-sm" id="sxMapBtn" data-src="https://www.google.com/maps?q=Ghanshyam+Enclave,+New+Link+Road,+Kandivali+West,+Mumbai+400067&amp;output=embed">Load Interactive Map <i class="fa-solid fa-map"></i></button></div>
            </div>
        </div>
    </div>
</section><section class="sx-cta">
    <div class="sx-wrap">
        <div class="sx-cta-card sx-reveal z">
            <span class="o o1" aria-hidden="true"></span><span class="o o2" aria-hidden="true"></span>
            <div class="sx-cta-in">
                <div><h2>Ready to Work With a <span>PPC Company in Mumbai?</span></h2>
                <p>Pricing depends on the scope of work, your monthly ad spend and the platforms you use. We give a custom quote after a short call about your goals.</p><p>Whether you need Google Ads management services, Meta Ads management or a full PPC marketing plan, tell us what you want to achieve and we'll show you how we would approach it.</p>
                <div class="sx-actions">
                    <a href="/enquirynow" class="sx-btn sx-btn-white">Enquiry Now <i class="fa-solid fa-arrow-right"></i></a>
                    <a href="/contact" class="sx-btn sx-btn-ghost">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
                </div></div>
            </div>
        </div>
    </div>
</section><section class="sx-sec sx-soft">
    <div class="sx-wrap sx-faq-grid">
        <div class="sx-faq-side sx-sticky">
            <span class="sx-eyebrow sx-reveal">FAQ</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Frequently asked questions about our <span class="sx-grad-d">PPC company</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Straight answers on PPC services, platforms, reporting, results and pricing.</p>
            <p class="sx-lead sx-reveal" style="margin-top:1rem">Talk to our PPC experts: <a class="in" href="tel:+918080803374">+91 8080 80 3374</a> &middot; <a class="in" href="mailto:info@technofra.com">info@technofra.com</a></p>
            <img class="sx-faq-img" src="./assets/images/about/faq-illustration.webp" width="800" height="565" loading="lazy" decoding="async" alt="Question mark illustration for frequently asked questions about PPC services in Mumbai">
        </div>
        <div class="sx-acc" id="sxAcc">
<?php foreach ($pgFaqs as $pgI => $pgF):
    $pgNum = str_pad((string) ($pgI + 1), 2, '0', STR_PAD_LEFT);
    $pgAns = (isset($pgF[2]) && $pgF[2] !== '') ? $pgF[2] : htmlspecialchars($pgF[1], ENT_QUOTES, 'UTF-8'); ?>
            <div class="sx-acc-item sx-reveal" style="--d:<?php echo min($pgI, 6) * 0.06; ?>s">
                <h3 class="sx-acc-h">
                    <button class="sx-acc-btn" type="button" aria-expanded="false" aria-controls="sxPanel<?php echo $pgNum; ?>" id="sxBtn<?php echo $pgNum; ?>">
                        <span class="sx-acc-n"><?php echo $pgNum; ?></span>
                        <span class="sx-acc-q"><?php echo htmlspecialchars($pgF[0], ENT_QUOTES, 'UTF-8'); ?></span>
                        <span class="sx-acc-t"><i class="fa-solid fa-plus"></i></span>
                    </button>
                </h3>
                <div class="sx-acc-panel" id="sxPanel<?php echo $pgNum; ?>" role="region" aria-labelledby="sxBtn<?php echo $pgNum; ?>">
                    <div class="sx-acc-in"><p><?php echo $pgAns; ?></p></div>
                </div>
            </div>
<?php endforeach; ?>
        </div>
    </div>
</section>
</div><!-- /.sx -->

<script>
(function () {
    var d = document, reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* scroll reveal */
    var els = [].slice.call(d.querySelectorAll('.sx-reveal'));
    if ('IntersectionObserver' in window && !reduce) {
        var io = new IntersectionObserver(function (es) {
            es.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); } });
        }, { threshold: 0.12, rootMargin: '0px 0px -6% 0px' });
        els.forEach(function (el) { io.observe(el); });
    } else { els.forEach(function (el) { el.classList.add('is-in'); }); }

    /* count-up numbers */
    var counters = [].slice.call(d.querySelectorAll('[data-count]'));
    function runCount(el) {
        var end = parseFloat(el.getAttribute('data-count')), suf = el.getAttribute('data-suffix') || '', t0 = null, dur = 1700;
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
    if (hero && !reduce) {
        hero.addEventListener('pointermove', function (e) {
            var r = hero.getBoundingClientRect();
            hero.style.setProperty('--px', ((e.clientX - r.left) / r.width - 0.5).toFixed(3));
            hero.style.setProperty('--py', ((e.clientY - r.top) / r.height - 0.5).toFixed(3));
        }, { passive: true });
        hero.addEventListener('pointerleave', function () { hero.style.setProperty('--px', 0); hero.style.setProperty('--py', 0); });
    }

    /* process timeline fills as you scroll */
    var tl = d.getElementById('sxTimeline');
    if (tl) {
        var steps = [].slice.call(tl.querySelectorAll('.sx-step'));
        var upd = function () {
            var r = tl.getBoundingClientRect(), mid = window.innerHeight * 0.55;
            var p = Math.min(Math.max((mid - r.top) / r.height, 0), 1);
            tl.style.setProperty('--fill', (p * 100).toFixed(1) + '%');
            steps.forEach(function (s) {
                var n = s.querySelector('.sx-node').getBoundingClientRect();
                s.classList.toggle('is-on', n.top + n.height / 2 < mid);
            });
        };
        upd();
        window.addEventListener('scroll', upd, { passive: true });
        window.addEventListener('resize', upd);
    }

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
})();
</script>
<script>
(function () {
    var d = document;
    var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var mq = window.matchMedia('(max-width: 991.98px)');
    var loops = [].slice.call(d.querySelectorAll('.sx-loop'));
    if (!loops.length) return;

    function Loop(el) {
        var self = this;
        this.el = el;
        this.speed = parseFloat(el.getAttribute('data-speed')) || 34;
        this.dir = el.getAttribute('data-dir') === 'rev' ? -1 : 1;
        this.pos = 0; this.loopW = 0; this.last = 0;
        this.hover = false; this.focus = false; this.user = false; this.visible = false;
        this.dragging = false; this.running = false; this.rt = 0;
        this.sx = 0; this.ss = 0; this.moved = 0;

        el.addEventListener('mouseenter', function () { self.hover = true; });
        el.addEventListener('mouseleave', function () { self.hover = false; });
        el.addEventListener('focusin', function () { self.focus = true; });
        el.addEventListener('focusout', function () { self.focus = false; });
        el.addEventListener('touchstart', function () { self.pause(3200); }, { passive: true });
        el.addEventListener('wheel', function (e) { if (Math.abs(e.deltaX) > Math.abs(e.deltaY)) self.pause(2500); }, { passive: true });
        el.addEventListener('scroll', function () {
            if (!self.running) return;
            var sl = el.scrollLeft;
            if (Math.abs(sl - Math.round(self.pos)) > 2) { self.pos = sl; self.wrapUser(); self.pause(2500); }
        }, { passive: true });
        el.addEventListener('pointerdown', function (e) {
            if (e.pointerType !== 'mouse' || e.button !== 0 || !self.running) return;
            self.dragging = true; self.moved = 0; self.sx = e.clientX; self.ss = el.scrollLeft;
        });
        window.addEventListener('pointermove', function (e) {
            if (!self.dragging) return;
            var dx = e.clientX - self.sx; self.moved = Math.max(self.moved, Math.abs(dx));
            if (self.moved > 4) { el.classList.add('dragging'); el.scrollLeft = self.ss - dx; self.pos = el.scrollLeft; self.wrapUser(); }
        });
        window.addEventListener('pointerup', function () {
            if (!self.dragging) return;
            self.dragging = false; el.classList.remove('dragging'); self.pause(1500);
        });
        if ('IntersectionObserver' in window) {
            new IntersectionObserver(function (es) { self.visible = es[0].isIntersecting; }, { rootMargin: '80px' }).observe(el);
        } else { this.visible = true; }
    }
    Loop.prototype.active = function () {
        return this.el.classList.contains('always') || (this.el.classList.contains('m-only') && mq.matches);
    };
    Loop.prototype.pause = function (ms) {
        var s = this; s.user = true; clearTimeout(s.rt);
        s.rt = setTimeout(function () { s.user = false; }, ms || 2500);
    };
    Loop.prototype.originals = function () {
        return [].slice.call(this.el.children).filter(function (c) { return !c.classList.contains('sx-clone'); });
    };
    Loop.prototype.clones = function () {
        return [].slice.call(this.el.children).filter(function (c) { return c.classList.contains('sx-clone'); });
    };
    Loop.prototype.build = function () {
        var el = this.el, orig = this.originals(), i, c, sets = 0;
        this.clones().forEach(function (n) { el.removeChild(n); });
        if (!orig.length) return;
        function addSet() {
            orig.forEach(function (o) {
                c = o.cloneNode(true);
                c.classList.add('sx-clone'); c.setAttribute('aria-hidden', 'true'); c.setAttribute('inert', '');
                [].forEach.call(c.querySelectorAll('[id]'), function (n) { n.removeAttribute('id'); });
                el.appendChild(c);
            });
            sets++;
        }
        addSet();
        this.measure();
        var need = Math.ceil((el.clientWidth + this.loopW) / Math.max(this.loopW, 1)) + 0;
        while (sets < need && sets < 4) { addSet(); }
        this.measure();
    };
    Loop.prototype.measure = function () {
        var o = this.originals(), cl = this.clones();
        if (!o.length || !cl.length) { this.loopW = 0; return; }
        this.loopW = cl[0].offsetLeft - o[0].offsetLeft;
    };
    Loop.prototype.wrapUser = function () {
        var el = this.el, w = this.loopW; if (!w) return;
        if (el.scrollLeft >= w) { el.scrollLeft -= w; this.pos = el.scrollLeft; }
        else if (el.scrollLeft <= 0) { el.scrollLeft += w; this.pos = el.scrollLeft; }
    };
    Loop.prototype.start = function () {
        var s = this;
        if (s.running) return;
        s.build();
        if (!s.loopW) return;
        s.running = true; s.el.classList.add('is-run');
        s.pos = s.dir < 0 ? s.loopW : 0; s.el.scrollLeft = s.pos; s.last = 0;
        requestAnimationFrame(function tick(ts) {
            if (!s.running) return;
            if (!s.last) s.last = ts;
            var dt = Math.min(ts - s.last, 64); s.last = ts;
            if (s.visible && !s.hover && !s.focus && !s.user && !s.dragging && !d.hidden) {
                s.pos += s.dir * s.speed * dt / 1000;
                if (s.pos >= s.loopW) s.pos -= s.loopW;
                if (s.pos < 0) s.pos += s.loopW;
                s.el.scrollLeft = s.pos;
            }
            requestAnimationFrame(tick);
        });
    };
    Loop.prototype.stop = function () {
        if (!this.running && !this.clones().length) return;
        this.running = false;
        var el = this.el;
        this.clones().forEach(function (n) { el.removeChild(n); });
        el.classList.remove('is-run', 'dragging'); el.scrollLeft = 0;
    };
    Loop.prototype.sync = function () {
        if (reduce) return;
        if (this.active()) { if (this.running) { this.measure(); } else { this.start(); } }
        else { this.stop(); }
    };

    var insts = loops.map(function (el) { return new Loop(el); });
    function syncAll() { insts.forEach(function (i) { i.sync(); }); }
    syncAll();
    window.addEventListener('load', function () { insts.forEach(function (i) { if (i.running) { i.stop(); } }); syncAll(); });
    if (mq.addEventListener) { mq.addEventListener('change', syncAll); } else if (mq.addListener) { mq.addListener(syncAll); }
    var rz; window.addEventListener('resize', function () { clearTimeout(rz); rz = setTimeout(function () { insts.forEach(function (i) { if (i.running) { i.stop(); } }); syncAll(); }, 200); });
})();
</script>
<script>
(function () {
    var d = document;
    var bar = d.getElementById('sxProgress');
    if (bar) {
        var upd = function () {
            var h = d.documentElement.scrollHeight - window.innerHeight;
            bar.style.width = (h > 0 ? Math.min(window.scrollY / h * 100, 100) : 0).toFixed(1) + '%';
        };
        upd(); window.addEventListener('scroll', upd, { passive: true }); window.addEventListener('resize', upd);
    }
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
