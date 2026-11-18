<?php
$pageTitle = 'PPC Company in Mumbai | PPC Services | Technofra';
$metaDescription = 'Technofra is a PPC company in Mumbai offering Google Ads, Meta Ads and pay per click services focused on leads, clear reporting and ROI.';
$metaKeywords = ''; // meta keywords tag intentionally not output (search engines ignore it); keywords live in on-page content

// FAQ content: rendered in the accordion AND reused for FAQPage structured data so they always match
$ppcFaqs = [
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
];

$ppcServiceNames = ['Google Search Ads', 'Display and Remarketing Ads', 'Meta Ads Management', 'Shopping and Ecommerce Ads', 'Landing Page Optimization', 'Conversion Tracking and Reporting', 'Google Ads Management Services', 'PPC Management Services'];
$ppcFaqEntities = [];
foreach ($ppcFaqs as $ppcFaq) {
    $ppcFaqEntities[] = ['@type' => 'Question', 'name' => $ppcFaq[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $ppcFaq[1]]];
}
$ppcOffers = [];
foreach ($ppcServiceNames as $ppcName) {
    $ppcOffers[] = ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $ppcName]];
}
$ppcOrg = ['@type' => 'Organization', '@id' => 'https://technofra.com/#organization', 'name' => 'Technofra', 'url' => 'https://technofra.com', 'logo' => 'https://technofra.com/logo.png'];
$ppcSchema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            '@id' => 'https://technofra.com/ppc#service',
            'name' => 'PPC Services in Mumbai',
            'serviceType' => 'Pay Per Click Advertising',
            'url' => 'https://technofra.com/ppc',
            'description' => $metaDescription,
            'areaServed' => ['@type' => 'City', 'name' => 'Mumbai'],
            'provider' => ['@id' => 'https://technofra.com/#organization'],
            'hasOfferCatalog' => ['@type' => 'OfferCatalog', 'name' => 'Pay Per Click Services', 'itemListElement' => $ppcOffers],
        ],
        $ppcOrg + [
            '@type' => ['Organization', 'ProfessionalService'],
            'telephone' => '+91 8080 80 3374',
            'email' => 'info@technofra.com',
            'address' => ['@type' => 'PostalAddress', 'streetAddress' => 'Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West)', 'addressLocality' => 'Mumbai', 'addressRegion' => 'Maharashtra', 'postalCode' => '400067', 'addressCountry' => 'IN'],
            'areaServed' => ['@type' => 'City', 'name' => 'Mumbai'],
        ],
        [
            '@type' => 'WebPage',
            '@id' => 'https://technofra.com/ppc#webpage',
            'url' => 'https://technofra.com/ppc',
            'name' => $pageTitle,
            'description' => $metaDescription,
            'inLanguage' => 'en-IN',
            'isPartOf' => ['@type' => 'WebSite', 'name' => 'Technofra', 'url' => 'https://technofra.com'],
            'about' => ['@id' => 'https://technofra.com/ppc#service'],
        ],
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://technofra.com/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'PPC Company in Mumbai', 'item' => 'https://technofra.com/ppc'],
            ],
        ],
        ['@type' => 'FAQPage', 'mainEntity' => $ppcFaqEntities],
    ],
];
$extraHead = '<script type="application/ld+json">' . json_encode($ppcSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) . '</script>';
include __DIR__ . '/header.php';

?>

<style>
/* =========================================================
   PPC PAGE — premium animated design (scoped to .sx)
   Theme: Technofra blue on navy / soft blue (same system as seo.php)
   ========================================================= */
.sx{--p:#1763ff;--p2:#5da5ff;--b:#0d58f2;--lil:#5da5ff;--navy:#0a1440;--ink:#0d1b3e;--muted:#5b6270;--soft:#f4f8ff;--line:#dce8ff;
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
.sx-grad{background:linear-gradient(90deg,#5da5ff,#38bdf8,#5da5ff);background-size:200% auto;-webkit-background-clip:text;background-clip:text;color:transparent;animation:sxShine 6s linear infinite}
.sx-grad-d{background:linear-gradient(90deg,#1763ff,#0d58f2,#1763ff);background-size:200% auto;-webkit-background-clip:text;background-clip:text;color:transparent;animation:sxShine 7s linear infinite}
.sx-head{max-width:820px;margin:0 auto clamp(2.5rem,2rem + 2vw,4rem);text-align:center}
.sx-head .sx-lead{margin-top:1.1rem}

/* ---------- buttons ---------- */
.sx-btn{position:relative;overflow:hidden;display:inline-flex;align-items:center;gap:.7rem;padding:1rem 1.8rem;border-radius:999px;font-weight:700;font-size:.98rem;color:#fff;border:0;cursor:pointer;
    background:linear-gradient(135deg,var(--p) 0%,var(--b) 100%);box-shadow:0 14px 34px rgba(23,99,255,.38);transition:transform .3s,box-shadow .3s}
.sx-btn::after{content:"";position:absolute;inset:0;background:linear-gradient(110deg,transparent 30%,rgba(255,255,255,.5) 50%,transparent 70%);transform:translateX(-130%);transition:transform .8s}
.sx-btn:hover{transform:translateY(-3px);box-shadow:0 22px 48px rgba(23,99,255,.5);color:#fff}
.sx-btn:hover::after{transform:translateX(130%)}
.sx-btn i{transition:transform .3s}
.sx-btn:hover i{transform:translateX(5px)}
.sx-btn.pulse{animation:sxPulse 2.8s ease-in-out infinite}
.sx-btn-ghost{background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.3);box-shadow:none;-webkit-backdrop-filter:blur(8px);backdrop-filter:blur(8px)}
.sx-btn-ghost:hover{background:rgba(255,255,255,.16);box-shadow:none}
.sx-btn-white{background:#fff;color:#0f1d59;box-shadow:0 16px 38px rgba(5,16,60,.3)}
.sx-btn-white:hover{color:var(--p)}

/* ---------- reveal ---------- */
.sx-js .sx-reveal{opacity:0;transform:translateY(34px);transition:opacity .9s cubic-bezier(.2,.7,.2,1),transform .9s cubic-bezier(.2,.7,.2,1);transition-delay:var(--d,0s)}
.sx-js .sx-reveal.l{transform:translateX(-46px)}
.sx-js .sx-reveal.r{transform:translateX(46px)}
.sx-js .sx-reveal.z{transform:scale(.92)}
.sx-js .sx-reveal.is-in{opacity:1;transform:none}

/* ---------- HERO ---------- */
.sx-hero{position:relative;overflow:hidden;color:#fff;padding:clamp(8.5rem,7rem + 5vw,11rem) 0 clamp(6rem,5rem + 4vw,9rem);
    background:radial-gradient(900px 520px at 85% 15%,rgba(23,99,255,.65),transparent 60%),radial-gradient(800px 480px at 5% 95%,rgba(13,88,242,.5),transparent 60%),linear-gradient(160deg,#071238 0%,#0f1d59 100%)}
.sx-hero-bg{position:absolute;inset:0;pointer-events:none}
.sx-orb{position:absolute;border-radius:50%;filter:blur(70px);opacity:.55;animation:sxDrift 16s ease-in-out infinite alternate}
.sx-orb.o1{width:380px;height:380px;background:#1763ff;top:-90px;right:12%}
.sx-orb.o2{width:320px;height:320px;background:#0d58f2;bottom:-80px;left:6%;animation-delay:-5s}
.sx-orb.o3{width:220px;height:220px;background:#38bdf8;top:40%;left:38%;opacity:.28;animation-delay:-9s}
.sx-grid{position:absolute;inset:-40px;background-image:linear-gradient(rgba(255,255,255,.06) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.06) 1px,transparent 1px);background-size:56px 56px;
    -webkit-mask-image:radial-gradient(ellipse 75% 70% at 60% 40%,#000 25%,transparent 75%);mask-image:radial-gradient(ellipse 75% 70% at 60% 40%,#000 25%,transparent 75%);animation:sxGridMove 22s linear infinite}
.sx-hero-grid{position:relative;z-index:2;display:grid;grid-template-columns:1.02fr .98fr;gap:clamp(2rem,4vw,4rem);align-items:center}
.sx-badge{display:inline-flex;align-items:center;gap:.65rem;padding:.55rem 1.1rem;border-radius:999px;font-size:.86rem;font-weight:700;background:rgba(255,255,255,.09);border:1px solid rgba(255,255,255,.22);-webkit-backdrop-filter:blur(8px);backdrop-filter:blur(8px)}
.sx-dot{width:9px;height:9px;border-radius:50%;background:#34d399;box-shadow:0 0 0 0 rgba(52,211,153,.7);animation:sxPing 2s infinite}
.sx-hero h1{font-size:clamp(2rem,1.1rem + 2.8vw,3.35rem);font-weight:800;margin:1.4rem 0 1.4rem;color:#fff}
.sx-hero h1 .ln{display:block}
@media (min-width:1200px){.sx-hero h1 .ln{white-space:nowrap}}
.sx-hero-desc{font-size:clamp(1rem,.95rem + .3vw,1.15rem);color:rgba(255,255,255,.78);line-height:1.85;max-width:56ch}
.sx-actions{display:flex;flex-wrap:wrap;gap:1rem;margin-top:2rem}
.sx ul.sx-checks{margin-top:2.4rem}
.sx-checks{display:grid;grid-template-columns:repeat(2,auto);justify-content:start;gap:.8rem 2rem;margin-top:2.2rem}
.sx-checks li{display:flex;align-items:center;gap:.6rem;font-weight:600;font-size:.95rem;color:rgba(255,255,255,.92)}
.sx-checks i{color:#34d399}
.sx-hero-visual{position:relative;display:grid;place-items:center;min-height:clamp(300px,38vw,520px)}
.sx-ring{position:absolute;border-radius:50%;border:1.5px dashed rgba(255,255,255,.22);animation:sxSpin 46s linear infinite}
.sx-ring.r1{inset:2%}
.sx-ring.r2{inset:15%;animation-direction:reverse;border-color:rgba(93,165,255,.4);animation-duration:60s}
.sx-ring::before{content:"";position:absolute;top:-6px;left:50%;width:12px;height:12px;border-radius:50%;background:#5da5ff;box-shadow:0 0 18px 4px rgba(93,165,255,.9)}
.sx-hero-img-wrap{position:relative;z-index:2;width:100%;max-width:600px;animation:sxFloat 7s ease-in-out infinite}
.sx-hero-img-wrap img{width:100%;filter:drop-shadow(0 34px 60px rgba(23,99,255,.55));transform:translate3d(calc(var(--px,0)*16px),calc(var(--py,0)*14px),0);transition:transform .25s ease-out}
.sx-chip{position:absolute;z-index:3;display:inline-flex;align-items:center;gap:.6rem;padding:.65rem 1rem;border-radius:16px;font-size:.84rem;font-weight:700;color:#fff;
    background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.28);-webkit-backdrop-filter:blur(12px);backdrop-filter:blur(12px);box-shadow:0 18px 40px rgba(5,16,60,.35);animation:sxBob 5.5s ease-in-out infinite}
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
.sx-marquee span{display:inline-flex;align-items:center;gap:.7rem;white-space:nowrap;padding:.75rem 1.5rem;border-radius:999px;background:#f4f8ff;border:1px solid #dce8ff;box-shadow:0 8px 20px rgba(18,56,132,.07);font-family:var(--font-primary,'Sora',sans-serif);font-weight:700;font-size:clamp(1rem,.9rem + .6vw,1.3rem);letter-spacing:0;line-height:1.2;color:#0f1d59;-webkit-font-smoothing:antialiased;text-rendering:optimizeLegibility}
.sx-marquee span i{order:-1;font-size:.85em;color:var(--p)}
@media (max-width:575px){.sx-marquee span{padding:.65rem 1.2rem;font-size:1rem}}
.sx-marquee::before,.sx-marquee::after{content:"";position:absolute;top:0;bottom:0;width:90px;z-index:2;pointer-events:none}
.sx-marquee::before{left:0;background:linear-gradient(90deg,#fff,transparent)}
.sx-marquee::after{right:0;background:linear-gradient(270deg,#fff,transparent)}

/* ---------- intro + counters ---------- */
.sx-intro{padding-top:clamp(2.5rem,2rem + 2vw,4.5rem)}
.sx-intro-grid{display:grid;grid-template-columns:1.1fr .9fr;gap:clamp(2rem,5vw,5rem);align-items:center}
.sx-intro-copy .sx-lead{margin-top:1.2rem}
.sx-intro-copy .sx-lead a{color:var(--p);font-weight:700;border-bottom:2px solid rgba(23,99,255,.3)}
.sx-stats{display:grid;gap:1.1rem}
.sx-stat{display:flex;align-items:center;gap:1.3rem;padding:1.5rem 1.7rem;border-radius:26px;background:linear-gradient(135deg,#fff,var(--soft));border:1px solid var(--line);box-shadow:0 18px 50px rgba(23,99,255,.1);animation:sxBob 7s ease-in-out infinite}
.sx-stat:nth-child(2){margin-left:clamp(0rem,3vw,2.5rem);animation-delay:-2s}
.sx-stat:nth-child(3){animation-delay:-4s}
.sx-stat b{font-family:var(--font-primary,'Sora',sans-serif);font-size:clamp(2.3rem,1.6rem + 2vw,3.5rem);font-weight:800;letter-spacing:-.04em;line-height:1;background:linear-gradient(135deg,var(--p),var(--b));-webkit-background-clip:text;background-clip:text;color:transparent;flex:none;white-space:nowrap;padding-right:.12em;min-width:3.9ch}
.sx-stat span{font-weight:700;color:var(--ink);line-height:1.35}

/* ---------- why (bento) ---------- */
.sx-soft{background:var(--soft)}
.sx-soft::before{content:"";position:absolute;top:-120px;right:-120px;width:420px;height:420px;border-radius:50%;background:radial-gradient(circle,rgba(23,99,255,.16),transparent 70%);pointer-events:none}
.sx-why-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1.1rem}
.sx-why{position:relative;overflow:hidden;padding:1.7rem 1.5rem 1.6rem;border-radius:24px;background:#fff;border:1px solid var(--line);transition:transform .4s cubic-bezier(.2,.7,.2,1),box-shadow .4s,border-color .4s}
.sx-why::before{content:"";position:absolute;inset:0;opacity:0;transition:opacity .4s;background:radial-gradient(320px circle at var(--mx,50%) var(--my,50%),rgba(23,99,255,.13),transparent 45%)}
.sx-why:hover{transform:translateY(-8px);border-color:rgba(23,99,255,.5);box-shadow:0 26px 60px rgba(23,99,255,.18)}
.sx-why:hover::before{opacity:1}
.sx-why::after{content:attr(data-n);position:absolute;right:1rem;top:.4rem;font-family:var(--font-primary,'Sora',sans-serif);font-size:3.6rem;font-weight:800;color:rgba(23,99,255,.07);line-height:1}
.sx-ico{position:relative;width:54px;height:54px;border-radius:17px;display:grid;place-items:center;color:#fff;font-size:1.2rem;background:linear-gradient(135deg,var(--p),var(--b));box-shadow:0 12px 28px rgba(23,99,255,.38);transition:transform .5s}
.sx-why:hover .sx-ico,.sx-svc:hover .sx-ico{transform:rotate(-8deg) scale(1.1)}
.sx-why p{position:relative;margin-top:1.15rem;font-weight:700;color:var(--ink);font-size:1rem;line-height:1.5}

/* ---------- services (dark) ---------- */
.sx-dark{color:#fff;background:radial-gradient(800px 420px at 15% 0%,rgba(23,99,255,.45),transparent 60%),radial-gradient(700px 420px at 95% 100%,rgba(13,88,242,.4),transparent 60%),#0a1440;overflow:hidden}
.sx-dark .sx-eyebrow{color:#8cc0ff}
.sx-dark .sx-lead{color:rgba(255,255,255,.72)}
.sx-dark::after{content:"";position:absolute;inset:0;pointer-events:none;background-image:radial-gradient(rgba(255,255,255,.07) 1.2px,transparent 1.2px);background-size:30px 30px;-webkit-mask-image:linear-gradient(180deg,transparent,#000 30%,#000 70%,transparent);mask-image:linear-gradient(180deg,transparent,#000 30%,#000 70%,transparent)}
.sx-dark .sx-wrap{position:relative;z-index:2}
.sx-svc-grid{display:grid;grid-template-columns:repeat(6,1fr);gap:1.2rem}
.sx-svc{position:relative;grid-column:span 2;overflow:hidden;padding:2rem 1.8rem 2.1rem;border-radius:28px;background:linear-gradient(160deg,rgba(255,255,255,.08),rgba(255,255,255,.02));border:1px solid rgba(255,255,255,.12);transition:transform .45s cubic-bezier(.2,.7,.2,1),border-color .4s,box-shadow .4s}
.sx-svc:nth-child(n+7){grid-column:span 3}
.sx-svc::before{content:"";position:absolute;inset:0;opacity:0;transition:opacity .4s;background:radial-gradient(420px circle at var(--mx,50%) var(--my,50%),rgba(93,165,255,.38),transparent 45%)}
.sx-svc:hover{transform:translateY(-8px);border-color:rgba(93,165,255,.6);box-shadow:0 30px 70px rgba(18,56,132,.35)}
.sx-svc:hover::before{opacity:1}
.sx-svc::after{content:attr(data-n);position:absolute;right:1.3rem;top:.9rem;font-family:var(--font-primary,'Sora',sans-serif);font-size:3.6rem;font-weight:800;color:rgba(255,255,255,.07);line-height:1}
.sx-svc>*{position:relative}
.sx-svc h3{margin-top:1.4rem;font-size:1.3rem;font-weight:700;color:#fff}
.sx-svc p{margin-top:.8rem;font-size:.97rem;line-height:1.75;color:rgba(255,255,255,.7)}
.sx-svc .bar{display:block;height:3px;width:46px;margin-top:1.4rem;border-radius:3px;background:linear-gradient(90deg,#5da5ff,#38bdf8);transition:width .6s cubic-bezier(.2,.7,.2,1)}
.sx-svc:hover .bar{width:100%}

/* ---------- results ---------- */
.sx-results-grid{display:grid;grid-template-columns:.9fr 1.1fr;gap:clamp(2rem,5vw,5rem);align-items:start}
.sx-sticky{position:sticky;top:120px}
.sx-sticky .sx-lead{margin-top:1.2rem}
.sx-sticky .sx-btn{margin-top:2rem}
.sx-res-list{display:grid;gap:1.1rem}
.sx-res{position:relative;overflow:hidden;display:grid;grid-template-columns:64px 1fr;gap:1.4rem;align-items:start;padding:1.8rem 1.8rem 1.8rem 1.6rem;border-radius:26px;background:#fff;border:1px solid var(--line);box-shadow:0 14px 40px rgba(23,99,255,.07);transition:transform .4s cubic-bezier(.2,.7,.2,1),box-shadow .4s}
.sx-res::before{content:"";position:absolute;left:0;top:0;bottom:0;width:5px;background:linear-gradient(180deg,var(--p),var(--b));transform:scaleY(0);transform-origin:top;transition:transform .5s}
.sx-res:hover{transform:translateX(10px);box-shadow:0 26px 60px rgba(23,99,255,.17)}
.sx-res:hover::before{transform:scaleY(1)}
.sx-res .sx-ico{width:60px;height:60px;border-radius:20px;font-size:1.35rem}
.sx-res h3{font-size:1.28rem;font-weight:700;color:var(--ink)}
.sx-res p{margin-top:.55rem;color:var(--muted);line-height:1.75;font-size:.98rem}

/* ---------- process timeline ---------- */
.sx-timeline{position:relative;max-width:1020px;margin:0 auto;--fill:0%}
.sx-tl-line{position:absolute;left:50%;top:20px;bottom:20px;width:4px;margin-left:-2px;border-radius:4px;background:rgba(23,99,255,.15)}
.sx-tl-fill{display:block;width:100%;height:var(--fill);border-radius:4px;background:linear-gradient(180deg,var(--p),var(--b));box-shadow:0 0 20px rgba(23,99,255,.7)}
.sx-step{position:relative;display:grid;grid-template-columns:1fr 88px 1fr;align-items:center;margin-bottom:2.4rem}
.sx-step:last-child{margin-bottom:0}
.sx-node{grid-column:2;grid-row:1;justify-self:center;position:relative;z-index:2;width:60px;height:60px;border-radius:50%;display:grid;place-items:center;font-family:var(--font-primary,'Sora',sans-serif);font-weight:800;font-size:1.05rem;background:#fff;color:#8fa1c4;border:3px solid var(--line);transition:all .5s cubic-bezier(.2,.7,.2,1)}
.sx-step.is-on .sx-node{background:linear-gradient(135deg,var(--p),var(--b));color:#fff;border-color:#fff;transform:scale(1.12);box-shadow:0 0 0 9px rgba(23,99,255,.16),0 14px 32px rgba(23,99,255,.5)}
.sx-scard{grid-column:1;grid-row:1;padding:1.7rem 1.8rem;border-radius:26px;background:#fff;border:1px solid var(--line);box-shadow:0 16px 44px rgba(23,99,255,.08);transition:box-shadow .4s,border-color .4s,transform .4s}
.sx-step.right .sx-scard{grid-column:3}
.sx-step.is-on .sx-scard{border-color:rgba(23,99,255,.45);box-shadow:0 26px 64px rgba(23,99,255,.18)}
.sx-scard .top{display:flex;align-items:center;gap:1rem}
.sx-scard .sx-ico{width:46px;height:46px;border-radius:15px;font-size:1.05rem;flex:none}
.sx-scard h3{font-size:1.18rem;font-weight:700}
.sx-scard p{margin-top:.85rem;color:var(--muted);line-height:1.75;font-size:.97rem}

/* ---------- overview (image) ---------- */
.sx-ov{background:linear-gradient(180deg,#fff 0%,var(--soft) 100%);overflow:hidden}
.sx-ov-grid{display:grid;grid-template-columns:.95fr 1.05fr;gap:clamp(2rem,5vw,5rem);align-items:center}
.sx-ov-visual{position:relative;display:grid;place-items:center;padding:2rem 0}
.sx-ov-visual::before{content:"";position:absolute;inset:8% 4%;border-radius:50%;background:radial-gradient(circle,rgba(23,99,255,.35),rgba(13,88,242,.12) 55%,transparent 72%);filter:blur(30px);animation:sxPulseGlow 5s ease-in-out infinite}
.sx-orbit{position:absolute;inset:3%;border-radius:50%;border:1.5px dashed rgba(23,99,255,.38);animation:sxSpin 55s linear infinite}
.sx-orbit.b{inset:14%;border-color:rgba(13,88,242,.3);animation-direction:reverse;animation-duration:42s}
.sx-orbit::before{content:"";position:absolute;top:-7px;left:50%;width:14px;height:14px;border-radius:50%;background:var(--p);box-shadow:0 0 20px 5px rgba(23,99,255,.7)}
.sx-ov-img{position:relative;z-index:2;width:100%;max-width:520px;animation:sxFloat 7s ease-in-out infinite;filter:drop-shadow(0 30px 40px rgba(18,56,132,.28))}
.sx-ov-copy .top{display:flex;flex-wrap:wrap;align-items:center;gap:.8rem 1.2rem;margin-bottom:.2rem}
.sx-loc{display:inline-flex;align-items:center;gap:.5rem;padding:.45rem 1rem;border-radius:999px;font-size:.85rem;font-weight:700;color:var(--p);background:#fff;border:1px solid var(--line)}
.sx-ov-copy .sx-lead{margin-top:1.2rem}
.sx-ov-copy h3.lbl{margin-top:2rem;font-size:.82rem;letter-spacing:.14em;text-transform:uppercase;font-weight:800;color:var(--p)}
.sx-pill-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:.8rem;margin-top:1rem}
.sx-pill{display:flex;align-items:center;gap:.8rem;padding:.9rem 1rem;border-radius:16px;background:#fff;border:1px solid var(--line);font-weight:700;font-size:.95rem;line-height:1.35;transition:transform .3s,border-color .3s,box-shadow .3s}
.sx-pill i{flex:none;width:28px;height:28px;border-radius:50%;display:grid;place-items:center;font-size:.7rem;color:#fff;background:linear-gradient(135deg,var(--p),var(--b))}
.sx-pill:hover{transform:translateY(-4px);border-color:rgba(23,99,255,.5);box-shadow:0 16px 34px rgba(23,99,255,.15)}
.sx-ov-copy .sx-btn{margin-top:2rem}

/* ---------- CTA ---------- */
.sx-cta{padding:clamp(3rem,2rem + 3vw,5rem) 0}
.sx-cta-card{position:relative;overflow:hidden;text-align:center;color:#fff;border-radius:40px;padding:clamp(3.2rem,2rem + 5vw,6rem) clamp(1.4rem,5vw,5rem);
    background:linear-gradient(120deg,#0f1d59,#1763ff,#0d58f2,#1763ff);background-size:300% 300%;animation:sxGradient 14s ease infinite;box-shadow:0 34px 80px rgba(18,56,132,.38)}
.sx-cta-card .o{position:absolute;border-radius:50%;filter:blur(60px);opacity:.5;animation:sxDrift 14s ease-in-out infinite alternate}
.sx-cta-card .o1{width:300px;height:300px;background:#5da5ff;top:-110px;left:-80px}
.sx-cta-card .o2{width:260px;height:260px;background:#38bdf8;bottom:-110px;right:-60px;animation-delay:-6s}
.sx-cta-card::after{content:"";position:absolute;inset:0;pointer-events:none;background-image:radial-gradient(rgba(255,255,255,.22) 1.4px,transparent 1.4px);background-size:26px 26px;-webkit-mask-image:radial-gradient(ellipse at center,transparent 35%,#000 100%);mask-image:radial-gradient(ellipse at center,transparent 35%,#000 100%)}
.sx-cta-in{position:relative;z-index:2;max-width:860px;margin:0 auto}
.sx-cta-card h2{font-size:clamp(2rem,1.2rem + 2.8vw,3.5rem);font-weight:800;color:#fff}
.sx-cta-card h2 span{color:#bcd7ff}
.sx-cta-card p{margin-top:1.1rem;font-size:clamp(1rem,.95rem + .3vw,1.12rem);line-height:1.85;color:rgba(255,255,255,.88)}
.sx-cta-card .sx-actions{justify-content:center;margin-top:2.2rem}

/* ---------- FAQ ---------- */
.sx-faq-grid{display:grid;grid-template-columns:.85fr 1.15fr;gap:clamp(2rem,5vw,5rem);align-items:start}
.sx-faq-side .sx-lead{margin-top:1.1rem;max-width:46ch}
.sx-faq-img{margin-top:2rem;max-width:380px;animation:sxFloat 7s ease-in-out infinite}
.sx-acc{display:grid;gap:1rem}
.sx-acc-item{border-radius:22px;background:#fff;border:1px solid var(--line);transition:box-shadow .4s,border-color .4s}
.sx-acc-item.is-open{border-color:rgba(23,99,255,.5);box-shadow:0 22px 56px rgba(23,99,255,.16)}
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
@keyframes sxPulse{0%,100%{box-shadow:0 14px 34px rgba(23,99,255,.38)}50%{box-shadow:0 14px 34px rgba(23,99,255,.38),0 0 0 14px rgba(23,99,255,.14)}}
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

/* =========================================================
   PPC additions (hero dashboard, cards, metrics, links)
   ========================================================= */
@keyframes sxDraw{from{stroke-dashoffset:700}to{stroke-dashoffset:0}}
@keyframes sxGrow{from{transform:scaleY(.15)}to{transform:scaleY(1)}}
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
.sx-chart .ln1{fill:none;stroke:#5da5ff;stroke-width:3.2;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:700;animation:sxDraw 2.6s .5s ease-out both}
.sx-chart .bar{fill:rgba(93,165,255,.5);transform-box:fill-box;transform-origin:bottom;animation:sxGrow 1.4s ease-out both}
.sx-serp{margin-top:.9rem;padding:.85rem 1rem;border-radius:16px;background:#fff;color:#0d1b3e;box-shadow:0 14px 34px rgba(5,16,60,.35)}
.sx-serp .u{display:flex;align-items:center;gap:.5rem;font-size:.72rem;color:#4b5563}
.sx-serp .u b{padding:.05rem .4rem;border:1px solid #4b5563;border-radius:4px;font-size:.66rem;color:#0d1b3e}
.sx-serp .tt{display:block;margin-top:.25rem;font-size:1rem;font-weight:700;color:#1a56db;line-height:1.3}
.sx-serp .d{display:block;margin-top:.2rem;font-size:.8rem;color:#4b5563;line-height:1.5}
.sx-svc p a,.sx-svc p a:visited{color:#8cc0ff;border-bottom:1px solid rgba(140,192,255,.55)}
.sx-svc p a:hover{color:#fff;border-bottom-color:#fff}
.sx-trio,.sx-quad,.sx-metrics,.sx-linkcards{display:grid;gap:1.1rem;margin-top:2.4rem}
.sx-trio{grid-template-columns:repeat(3,1fr)}
.sx-quad{grid-template-columns:repeat(4,1fr)}
.sx-metrics{grid-template-columns:repeat(5,1fr)}
.sx-linkcards{grid-template-columns:repeat(3,1fr)}
.sx-tcard{position:relative;overflow:hidden;padding:1.7rem 1.55rem;border-radius:24px;background:linear-gradient(160deg,#fff,var(--soft));border:1px solid var(--line);box-shadow:0 14px 40px rgba(23,99,255,.08);transition:transform .4s cubic-bezier(.2,.7,.2,1),box-shadow .4s}
.sx-tcard:hover{transform:translateY(-6px);box-shadow:0 26px 60px rgba(23,99,255,.18)}
.sx-tcard h3{margin-top:1.1rem;font-size:1.15rem;font-weight:700;color:var(--ink)}
.sx-tcard p{margin-top:.6rem;font-size:.96rem;line-height:1.7;color:var(--muted)}
.sx-tcard p a{color:var(--p);font-weight:700;border-bottom:1px solid rgba(23,99,255,.35)}
.sx-metric{text-align:center}
.sx-metric .sx-ico{margin:0 auto}
.sx-lc{display:flex;flex-direction:column;align-items:flex-start;color:var(--ink)}
.sx-lc .go{display:inline-flex;align-items:center;gap:.5rem;margin-top:1.1rem;font-weight:800;font-size:.92rem;color:var(--p)}
.sx-lc .go i{transition:transform .3s}.sx-lc:hover .go i{transform:translateX(5px)}
.sx-addr{margin-top:1.6rem;display:flex;flex-wrap:wrap;gap:1.2rem 2rem;padding:1.3rem 1.5rem;border-radius:22px;background:var(--soft);border:1px solid var(--line);font-size:.95rem;color:var(--ink)}
.sx-addr span{display:inline-flex;align-items:flex-start;gap:.7rem;line-height:1.55}
.sx-addr i{margin-top:.25rem;color:var(--p)}
.sx-addr a{color:var(--ink);font-weight:700}
.sx-hero-visual{padding:3.9rem 0}
.sx-hero-visual .sx-chip.c1{top:0;left:3%}
.sx-hero-visual .sx-chip.c2{top:0;right:2%;left:auto}
.sx-hero-visual .sx-chip.c3{bottom:0;left:2%;top:auto}
.sx-hero-visual .sx-chip.c4{bottom:0;right:5%;top:auto}
.sx-help{display:flex;align-items:center;gap:1rem;margin-top:2rem;padding:1.2rem 1.4rem;border-radius:22px;background:linear-gradient(135deg,#fff,var(--soft));border:1px solid var(--line);box-shadow:0 16px 38px rgba(23,99,255,.1)}
.sx-help .sx-ico{flex:none}
.sx-help b{display:block;font-family:var(--font-primary,'Sora',sans-serif);font-size:1.05rem;color:var(--ink)}
.sx-help a{display:block;color:var(--muted);font-size:.95rem;line-height:1.6}.sx-help a:hover{color:var(--p)}
.sx-quad{margin-bottom:0}
.sx-note{display:flex;align-items:center;gap:1rem;margin:clamp(2.6rem,2rem + 2vw,3.6rem) 0 0;padding:1.15rem 1.6rem;border-radius:22px;border:1px solid #dce8ff;background:linear-gradient(135deg,#f4f8ff 0%,#eaf2ff 100%);box-shadow:0 14px 34px rgba(18,56,132,.09);color:#0f1d59;font-weight:600;line-height:1.65;position:relative;overflow:hidden}
.sx-note::before{content:"";position:absolute;left:0;top:0;bottom:0;width:5px;background:linear-gradient(180deg,#1763ff,#5da5ff)}
.sx-note-ico{flex:0 0 46px;width:46px;height:46px;border-radius:14px;display:grid;place-items:center;background:linear-gradient(135deg,#1763ff,#0f1d59);color:#fff;font-size:1.05rem;box-shadow:0 10px 22px rgba(23,99,255,.3)}
.sx-note-txt{flex:1;margin:0}
@media (max-width:575px){.sx-note{align-items:flex-start;padding:1rem 1.1rem}.sx-note-ico{flex-basis:40px;width:40px;height:40px}}
.sx-ov-visual .sx-ov-img{max-width:540px}
@media (max-width:1199.98px){.sx-metrics{grid-template-columns:repeat(3,1fr)}.sx-quad{grid-template-columns:repeat(2,1fr)}}
@media (max-width:991.98px){.sx-trio,.sx-linkcards{grid-template-columns:1fr}.sx-dash{max-width:520px}}
@media (max-width:767.98px){.sx-metrics{grid-template-columns:repeat(2,1fr)}.sx-quad{grid-template-columns:1fr}.sx-kpis{grid-template-columns:repeat(2,1fr)}}
@media (max-width:480px){.sx-metrics{grid-template-columns:1fr}}
@media (prefers-reduced-motion:reduce){.sx-chart .ln1,.sx-chart .bar,.sx-dash{animation:none!important}}

</style>

<script>document.documentElement.classList.add('sx-js');</script>
<div class="sx">

<!-- ================= HERO ================= -->
<section class="sx-hero" id="sxHero">
    <div class="sx-hero-bg" aria-hidden="true"><span class="sx-grid"></span><span class="sx-orb o1"></span><span class="sx-orb o2"></span><span class="sx-orb o3"></span></div>
    <div class="sx-wrap sx-hero-grid">
        <div class="sx-hero-copy">
            <span class="sx-badge sx-in"><span class="sx-dot"></span>Google Ads &middot; Meta Ads &middot; Pay Per Click</span>
            <h1 class="sx-in" style="animation-delay:.12s">
                <span class="ln">PPC Company in Mumbai</span>
                <span class="ln sx-grad">Focused on Leads, Sales</span>
                <span class="ln">and Clear ROI</span>
            </h1>
            <p class="sx-hero-desc sx-in" style="animation-delay:.24s">Technofra is a PPC company in Mumbai. We run Google Ads, Meta Ads and other pay per click campaigns for businesses that want customers, not just clicks. You get a team that plans the campaigns, watches the budget closely and explains the results in plain language.</p>
            <div class="sx-actions sx-in" style="animation-delay:.36s">
                <a href="enquirynow.php" class="sx-btn pulse">Enquiry Now <i class="fa-solid fa-arrow-right"></i></a>
                <a href="contact.php" class="sx-btn sx-btn-ghost">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <ul class="sx-checks sx-in" style="animation-delay:.48s">
                <li><i class="fa-solid fa-circle-check"></i>Google Ads &amp; Meta Ads</li>
                <li><i class="fa-solid fa-circle-check"></i>Budget watched closely</li>
                <li><i class="fa-solid fa-circle-check"></i>Plain-language reporting</li>
                <li><i class="fa-solid fa-circle-check"></i>Customers, not just clicks</li>
            </ul>
        </div>
        <div class="sx-hero-visual sx-in" style="animation-delay:.3s">
            <span class="sx-ring r1" aria-hidden="true"></span><span class="sx-ring r2" aria-hidden="true"></span>
            <div class="sx-dash" role="img" aria-label="PPC campaign dashboard showing click-through rate, conversion rate, cost per acquisition and return on ad spend, with a Google search ad from Technofra">
                <div class="sx-dash-top" aria-hidden="true"><i></i><i></i><i></i><span>Campaign Performance</span></div>
                <div class="sx-kpis" aria-hidden="true">
                    <div class="sx-kpi"><span class="l">CTR</span><span class="t"><i class="fa-solid fa-arrow-trend-up"></i><svg viewBox="0 0 44 20" aria-hidden="true"><polyline points="0,16 10,12 20,13 30,7 44,3"/></svg></span></div>
                    <div class="sx-kpi"><span class="l">Conv. rate</span><span class="t"><i class="fa-solid fa-arrow-trend-up"></i><svg viewBox="0 0 44 20" aria-hidden="true"><polyline points="0,15 10,13 20,9 30,10 44,4"/></svg></span></div>
                    <div class="sx-kpi"><span class="l">CPA</span><span class="t"><i class="fa-solid fa-arrow-trend-down"></i><svg viewBox="0 0 44 20" aria-hidden="true"><polyline points="0,4 10,7 20,6 30,12 44,16"/></svg></span></div>
                    <div class="sx-kpi"><span class="l">ROAS</span><span class="t"><i class="fa-solid fa-arrow-trend-up"></i><svg viewBox="0 0 44 20" aria-hidden="true"><polyline points="0,17 12,13 22,14 32,8 44,2"/></svg></span></div>
                </div>
                <div class="sx-chart" aria-hidden="true">
                    <svg viewBox="0 0 520 150" preserveAspectRatio="none">
                        <defs><linearGradient id="ppcArea" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#5da5ff" stop-opacity=".45"/><stop offset="1" stop-color="#5da5ff" stop-opacity="0"/></linearGradient></defs>
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
</section>

<!-- ================= <span>Google Ads<i class="fa-solid fa-star"></i></span><span>Meta Ads<i class="fa-solid fa-star"></i></span><span>Remarketing<i class="fa-solid fa-star"></i></span><span>Shopping Ads<i class="fa-solid fa-star"></i></span><span>Landing Pages<i class="fa-solid fa-star"></i></span><span>Conversion Tracking<i class="fa-solid fa-star"></i></span><span>Reporting<i class="fa-solid fa-star"></i></span><span>Microsoft Ads<i class="fa-solid fa-star"></i></span>UEE ================= -->
<div class="sx-marquee" aria-hidden="true"><div class="sx-marquee-track"><div style="display:flex;gap:3.2rem"><span>Google Ads<i class="fa-solid fa-star"></i></span><span>Meta Ads<i class="fa-solid fa-star"></i></span><span>Remarketing<i class="fa-solid fa-star"></i></span><span>Shopping Ads<i class="fa-solid fa-star"></i></span><span>Landing Pages<i class="fa-solid fa-star"></i></span><span>Conversion Tracking<i class="fa-solid fa-star"></i></span><span>Reporting<i class="fa-solid fa-star"></i></span><span>Microsoft Ads<i class="fa-solid fa-star"></i></span></div><div style="display:flex;gap:3.2rem" aria-hidden="true"><span>Google Ads<i class="fa-solid fa-star"></i></span><span>Meta Ads<i class="fa-solid fa-star"></i></span><span>Remarketing<i class="fa-solid fa-star"></i></span><span>Shopping Ads<i class="fa-solid fa-star"></i></span><span>Landing Pages<i class="fa-solid fa-star"></i></span><span>Conversion Tracking<i class="fa-solid fa-star"></i></span><span>Reporting<i class="fa-solid fa-star"></i></span><span>Microsoft Ads<i class="fa-solid fa-star"></i></span></div></div></div>

<!-- ================= WHY HIRE ================= -->
<section class="sx-sec sx-intro">
    <div class="sx-wrap sx-intro-grid">
        <div class="sx-intro-copy">
            <span class="sx-eyebrow sx-reveal">PPC Company in Mumbai</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Why hire a <span class="sx-grad-d">PPC company</span> instead of running ads yourself</h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Running ads yourself is possible. Many business owners start that way, usually after a friend tells them how easy it is. The trouble shows up a few weeks later, when the budget is gone, the clicks don't convert and nobody can say which keyword wasted the money.</p>
            <p class="sx-lead sx-reveal" style="--d:.24s">A PPC company spends its days inside these accounts, so it spots those problems early. We keep your spend focused on searches that match what you sell, and we stop what doesn't work before it drains your budget.</p>
        </div>
        <div class="sx-stats">
            <div class="sx-stat sx-reveal r"><b data-count="6" data-suffix="">6</b><span>Pay per click services under one roof</span></div>
            <div class="sx-stat sx-reveal r" style="--d:.12s"><b data-count="3" data-suffix="">3</b><span>Ad platforms managed: Google, Microsoft and Meta</span></div>
            <div class="sx-stat sx-reveal r" style="--d:.24s"><b data-count="4" data-suffix="">4</b><span>Core metrics tracked: CTR, conversion rate, CPA and ROAS</span></div>
        </div>
    </div>
    <div class="sx-wrap">
        <div class="sx-trio">
            <div class="sx-tcard sx-reveal"><span class="sx-ico"><i class="fa-solid fa-wallet"></i></span><h3>Budget gone too fast</h3><p>Without close monitoring, spend drains on searches that were never going to buy.</p></div>
            <div class="sx-tcard sx-reveal" style="--d:.08s"><span class="sx-ico"><i class="fa-solid fa-arrow-pointer"></i></span><h3>Clicks that don't convert</h3><p>Traffic without the right keywords, ads and landing pages rarely turns into leads or sales.</p></div>
            <div class="sx-tcard sx-reveal" style="--d:.16s"><span class="sx-ico"><i class="fa-solid fa-magnifying-glass-minus"></i></span><h3>No idea what wasted money</h3><p>We spot the keyword and campaign problems early and stop what doesn't work.</p></div>
        </div>
    </div>
</section>

<!-- ================= HOW WE WORK ================= -->
<section class="sx-sec sx-soft">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">Our Process</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s"><span class="sx-grad-d">PPC services company in Mumbai:</span> how we work</h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">We start with a conversation about your business. What does a customer look like? What does one sale or lead bring in? How much can you spend each month without stress? Those answers shape everything else.</p>
        </div>
        <div class="sx-timeline" id="sxTimeline">
            <div class="sx-tl-line" aria-hidden="true"><span class="sx-tl-fill"></span></div>
            <div class="sx-step"><span class="sx-node">01</span><div class="sx-scard sx-reveal l"><div class="top"><span class="sx-ico"><i class="fa-solid fa-comments"></i></span><h3>Understand your business</h3></div><p>We learn who your customer is, what one sale or lead brings in, and how much you can comfortably spend each month.</p></div></div>
            <div class="sx-step right"><span class="sx-node">02</span><div class="sx-scard sx-reveal r"><div class="top"><span class="sx-ico"><i class="fa-solid fa-magnifying-glass-chart"></i></span><h3>Keyword research and ad writing</h3></div><p>We build the account step by step. We research keywords and write ads for each search intent.</p></div></div>
            <div class="sx-step"><span class="sx-node">03</span><div class="sx-scard sx-reveal l"><div class="top"><span class="sx-ico"><i class="fa-solid fa-bullseye"></i></span><h3>Tracking and launch</h3></div><p>We set up tracking, then launch with a budget we can learn from.</p></div></div>
            <div class="sx-step right"><span class="sx-node">04</span><div class="sx-scard sx-reveal r"><div class="top"><span class="sx-ico"><i class="fa-solid fa-flask"></i></span><h3>Test and refine</h3></div><p>In the first few weeks we test headlines, audiences and bids. After that, we keep refining until the numbers settle into something predictable.</p></div></div>
            <div class="sx-step"><span class="sx-node">05</span><div class="sx-scard sx-reveal l"><div class="top"><span class="sx-ico"><i class="fa-solid fa-chart-line"></i></span><h3>Regular reports</h3></div><p>You'll get regular reports, and you can ask us about any line.</p></div></div>
        </div>
    </div>
</section>

<!-- ================= SERVICES ================= -->
<section class="sx-sec sx-dark">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">PPC Services</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Our <span class="sx-grad">pay per click services</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Search, display, remarketing, social and shopping ads, backed by landing pages and tracking that show what your budget is doing.</p>
        </div>
        <div class="sx-svc-grid">
            <article class="sx-svc sx-reveal" data-spot data-n="01"><span class="sx-ico"><i class="fa-brands fa-google"></i></span><h3>Google Search Ads</h3><p>When someone searches for what you sell, your ad can appear at the top of the results. This is where most of our clients see leads come in fastest. Our Google Ads campaign management covers keywords, negatives, ad copy, bids and landing pages in one place.</p><span class="bar"></span></article>
            <article class="sx-svc sx-reveal" data-spot data-n="02" style="--d:.1s"><span class="sx-ico"><i class="fa-solid fa-rotate"></i></span><h3>Display and remarketing ads</h3><p>Most people don't buy on their first visit. Remarketing lets us reach people who already know your brand and bring them back at the right moment. If you also want steady traffic that doesn't cost per click, our <a href="seo.php">SEO team</a> works on the same keywords from the organic side.</p><span class="bar"></span></article>
            <article class="sx-svc sx-reveal" data-spot data-n="03" style="--d:.2s"><span class="sx-ico"><i class="fa-brands fa-meta"></i></span><h3>Meta ads management</h3><p>We run Facebook and Instagram ads for awareness, lead generation and sales. Meta works well for showing your offer to people who haven't searched for it yet. It also fits into a wider <a href="social-media-marketing.php">social media marketing</a> plan, so your posts and ads tell the same story.</p><span class="bar"></span></article>
            <article class="sx-svc sx-reveal" data-spot data-n="04"><span class="sx-ico"><i class="fa-solid fa-cart-shopping"></i></span><h3>Shopping and ecommerce ads</h3><p>If you sell products, Google Shopping ads put your items in front of buyers with the price and photo already visible. For stores on <a href="shopify-development.php">Shopify</a>, we check the product feed and store setup, so ads never point to pages that are broken or out of stock.</p><span class="bar"></span></article>
            <article class="sx-svc sx-reveal" data-spot data-n="05" style="--d:.1s"><span class="sx-ico"><i class="fa-solid fa-window-maximize"></i></span><h3>Landing page optimization</h3><p>A good ad can still lose a customer on a slow or confusing page. We review your landing pages for layout, message and load speed. If a page needs a rebuild, our <a href="web-design-and-development.php">web design and development</a> team can handle it.</p><span class="bar"></span></article>
            <article class="sx-svc sx-reveal" data-spot data-n="06" style="--d:.2s"><span class="sx-ico"><i class="fa-solid fa-chart-column"></i></span><h3>Conversion tracking and reporting</h3><p>Without tracking, you're guessing. We set up tracking for calls, form fills and purchases, and we send reports that explain what changed and why. If your leads go into a CRM, we can connect that data as well. Our <a href="crm-development.php">CRM development</a> team builds those connections, so tracking doesn't stop at the form submit.</p><span class="bar"></span></article>
        </div>
    </div>
</section>

<!-- ================= MANAGEMENT + IMAGE ================= -->
<section class="sx-sec sx-ov">
    <div class="sx-wrap sx-ov-grid">
        <div class="sx-ov-visual sx-reveal z">
            <span class="sx-orbit" aria-hidden="true"></span><span class="sx-orbit b" aria-hidden="true"></span>
            <img class="sx-ov-img" src="./assets/images/about/ppc-dashboard-800.webp"
                 srcset="./assets/images/about/ppc-dashboard-520.webp 520w, ./assets/images/about/ppc-dashboard-800.webp 800w"
                 sizes="(max-width: 991px) 90vw, 540px" width="800" height="852" loading="lazy" decoding="async"
                 alt="3D PPC dashboard showing ad performance, conversions, ROAS, audience targeting, bid strategy, A/B testing and remarketing for a PPC company in Mumbai">
        </div>
        <div class="sx-ov-copy">
            <div class="top sx-reveal"><span class="sx-eyebrow">PPC Management</span><span class="sx-loc"><i class="fa-solid fa-location-dot"></i>PPC Company in Mumbai</span></div>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">PPC management services and <span class="sx-grad-d">PPC marketing services</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Ads perform best when they fit the rest of your marketing. Your paid search should match your website, your social presence and your content. Our <a href="digital-marketing.php">digital marketing</a> team can help you plan the full picture, including the <a href="content-marketing.php">content marketing</a> that supports your ads.</p>
            <p class="sx-lead sx-reveal" style="--d:.24s">You don't have to buy everything at once. Most clients begin with one channel, see the results and expand from there.</p>
            <h3 class="lbl sx-reveal">Start small, grow with proof</h3>
            <div class="sx-pill-grid">
                <div class="sx-pill sx-reveal"><i class="fa-solid fa-check"></i><span>Begin with one channel</span></div>
                <div class="sx-pill sx-reveal" style="--d:.06s"><i class="fa-solid fa-check"></i><span>See the results</span></div>
                <div class="sx-pill sx-reveal" style="--d:.12s"><i class="fa-solid fa-check"></i><span>Expand from there</span></div>
                <div class="sx-pill sx-reveal" style="--d:.18s"><i class="fa-solid fa-check"></i><span>Ads that match your website</span></div>
                <div class="sx-pill sx-reveal" style="--d:.24s"><i class="fa-solid fa-check"></i><span>Paid search plus social and content</span></div>
                <div class="sx-pill sx-reveal" style="--d:.3s"><i class="fa-solid fa-check"></i><span>Full-picture marketing plan</span></div>
            </div>
            <a href="contact.php" class="sx-btn sx-reveal">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- ================= GOOGLE ADS MANAGEMENT ================= -->
<section class="sx-sec sx-soft">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">Google Ads</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s"><span class="sx-grad-d">Google Ads management services</span> for growing businesses</h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Our Google Ads management services suit businesses that already know they want to advertise but don't have time to run it well. We handle the day-to-day work, and you get a clear summary every month.</p>
        </div>
        <div class="sx-quad">
            <div class="sx-tcard sx-reveal"><span class="sx-ico"><i class="fa-solid fa-ban"></i></span><h3>Pausing wasteful keywords</h3><p>We cut the searches that spend your budget without bringing customers.</p></div>
            <div class="sx-tcard sx-reveal" style="--d:.08s"><span class="sx-ico"><i class="fa-solid fa-pen-nib"></i></span><h3>Testing new ad copy</h3><p>We keep testing headlines and messages to improve results over time.</p></div>
            <div class="sx-tcard sx-reveal" style="--d:.16s"><span class="sx-ico"><i class="fa-solid fa-sliders"></i></span><h3>Adjusting bids</h3><p>We adjust bids so spend follows what is working.</p></div>
            <div class="sx-tcard sx-reveal" style="--d:.24s"><span class="sx-ico"><i class="fa-solid fa-clipboard-check"></i></span><h3>Checking conversions</h3><p>We confirm conversions are being recorded correctly.</p></div>
        </div>
        <div class="sx-note sx-reveal"><span class="sx-note-ico" aria-hidden="true"><i class="fa-solid fa-chart-pie"></i></span><p class="sx-note-txt">You get a clear summary every month, and we flag problems before they become expensive.</p></div>
    </div>
</section>

<!-- ================= EVERY SIZE ================= -->
<section class="sx-sec">
    <div class="sx-wrap sx-results-grid">
        <div class="sx-sticky">
            <span class="sx-eyebrow sx-reveal">PPC Agency</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s"><span class="sx-grad-d">PPC advertising company</span> and PPC agency work for every size of business</h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Some clients come to us with a small monthly budget, and others run campaigns across several cities. Our approach stays the same either way.</p>
            <p class="sx-lead sx-reveal" style="--d:.22s">If you're comparing a PPC agency with an in-house hire, we can talk through what makes sense for your budget and team.</p>
            <a href="enquirynow.php" class="sx-btn sx-reveal" style="--d:.28s">Enquire Now <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="sx-res-list">
            <article class="sx-res sx-reveal r"><span class="sx-ico"><i class="fa-solid fa-flag-checkered"></i></span><div><h3>Start with a clear goal</h3><p>Every account begins with what you want: leads, sales or enquiries, and what each one is worth to you.</p></div></article>
            <article class="sx-res sx-reveal r" style="--d:.08s"><span class="sx-ico"><i class="fa-solid fa-gauge-high"></i></span><div><h3>Measure what matters</h3><p>We track the numbers that connect to your business, not just the ones that look good in a report.</p></div></article>
            <article class="sx-res sx-reveal r" style="--d:.16s"><span class="sx-ico"><i class="fa-solid fa-seedling"></i></span><div><h3>Grow only when the numbers support it</h3><p>Budgets and campaigns expand when the results justify it, whether you run in one city or several.</p></div></article>
        </div>
    </div>
</section>

<!-- ================= MEASURE ================= -->
<section class="sx-sec sx-dark">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">Reporting</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">How we measure <span class="sx-grad">PPC success</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">We track click-through rate, conversion rate, cost per acquisition and return on ad spend. Where possible, we also check lead quality, because a cheap lead that never buys isn't a win.</p>
        </div>
        <div class="sx-svc-grid" style="grid-template-columns:repeat(5,1fr)">
            <article class="sx-svc sx-reveal" data-spot style="grid-column:auto;text-align:center"><span class="sx-ico" style="margin:0 auto"><i class="fa-solid fa-arrow-pointer"></i></span><h3>Click-through rate</h3><p>How often people who see your ad choose to click it.</p></article>
            <article class="sx-svc sx-reveal" data-spot style="grid-column:auto;text-align:center;--d:.08s"><span class="sx-ico" style="margin:0 auto"><i class="fa-solid fa-bullseye"></i></span><h3>Conversion rate</h3><p>How many visitors become calls, form fills or purchases.</p></article>
            <article class="sx-svc sx-reveal" data-spot style="grid-column:auto;text-align:center;--d:.16s"><span class="sx-ico" style="margin:0 auto"><i class="fa-solid fa-coins"></i></span><h3>Cost per acquisition</h3><p>What it costs you to win one lead or customer.</p></article>
            <article class="sx-svc sx-reveal" data-spot style="grid-column:auto;text-align:center;--d:.24s"><span class="sx-ico" style="margin:0 auto"><i class="fa-solid fa-chart-line"></i></span><h3>Return on ad spend</h3><p>How much revenue your ad budget brings back.</p></article>
            <article class="sx-svc sx-reveal" data-spot style="grid-column:auto;text-align:center;--d:.32s"><span class="sx-ico" style="margin:0 auto"><i class="fa-solid fa-user-check"></i></span><h3>Lead quality</h3><p>Whether the leads you get are the ones that actually buy.</p></article>
        </div>
    </div>
</section>

<!-- ================= WHY MUMBAI ================= -->
<section class="sx-sec">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">Based in Mumbai</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Why businesses in <span class="sx-grad-d">Mumbai</span> work with us</h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">We're based in Mumbai, so you can meet our team in person and get quick answers when something needs attention.</p>
        </div>
        <div class="sx-linkcards">
            <a class="sx-tcard sx-lc sx-reveal" href="portfolios.php"><span class="sx-ico"><i class="fa-solid fa-briefcase"></i></span><h3>Our portfolio</h3><p>Look through our portfolio to see past work.</p><span class="go">View portfolio <i class="fa-solid fa-arrow-right"></i></span></a>
            <a class="sx-tcard sx-lc sx-reveal" style="--d:.08s" href="about-us.php"><span class="sx-ico"><i class="fa-solid fa-building"></i></span><h3>About us</h3><p>Read about our background on the about us page.</p><span class="go">About Technofra <i class="fa-solid fa-arrow-right"></i></span></a>
            <a class="sx-tcard sx-lc sx-reveal" style="--d:.16s" href="our-team.php"><span class="sx-ico"><i class="fa-solid fa-people-group"></i></span><h3>Our team</h3><p>Meet the people who'll run your campaigns on the our team page.</p><span class="go">Meet the team <i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
        <div class="sx-addr sx-reveal">
            <span><i class="fa-solid fa-location-dot"></i>Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai - 400067</span>
            <span><i class="fa-solid fa-phone"></i><a href="tel:+918080803374">+91 8080 80 3374</a></span>
            <span><i class="fa-solid fa-envelope"></i><a href="mailto:info@technofra.com">info@technofra.com</a></span>
        </div>
    </div>
</section>

<!-- ================= CTA ================= -->
<section class="sx-cta">
    <div class="sx-wrap">
        <div class="sx-cta-card sx-reveal z">
            <span class="o o1" aria-hidden="true"></span><span class="o o2" aria-hidden="true"></span>
            <div class="sx-cta-in">
                <h2>Ready to Work With a <span>PPC Company in Mumbai</span>?</h2>
                <p>Pricing depends on the scope of work, your monthly ad spend and the platforms you use. We give a custom quote after a short call about your goals.</p>
                <p>Whether you need Google Ads management services, Meta Ads management or a full PPC marketing plan, tell us what you want to achieve and we'll show you how we would approach it.</p>
                <div class="sx-actions">
                    <a href="enquirynow.php" class="sx-btn sx-btn-white">Enquiry Now <i class="fa-solid fa-arrow-right"></i></a>
                    <a href="contact.php" class="sx-btn sx-btn-ghost">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= FAQ ================= -->
<section class="sx-sec sx-soft">
    <div class="sx-wrap sx-faq-grid">
        <div class="sx-faq-side sx-sticky">
            <span class="sx-eyebrow sx-reveal">FAQ</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Frequently asked questions about our <span class="sx-grad-d">PPC company</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Straight answers on PPC services, platforms, reporting, results and pricing.</p>
            <div class="sx-help sx-reveal" style="--d:.24s"><span class="sx-ico"><i class="fa-solid fa-headset"></i></span><div><b>Talk to our PPC experts</b><a href="tel:+918080803374">+91 8080 80 3374</a><a href="mailto:info@technofra.com">info@technofra.com</a></div></div>
        </div>
        <div class="sx-acc" id="sxAcc">
<?php foreach ($ppcFaqs as $ppcIndex => $ppcFaq):
    $ppcNum = str_pad((string) ($ppcIndex + 1), 2, '0', STR_PAD_LEFT); ?>
            <div class="sx-acc-item sx-reveal" style="--d:<?php echo $ppcIndex * 0.06; ?>s">
                <h3 class="sx-acc-h">
                    <button class="sx-acc-btn" type="button" aria-expanded="false" aria-controls="sxPanel<?php echo $ppcNum; ?>" id="sxBtn<?php echo $ppcNum; ?>">
                        <span class="sx-acc-n"><?php echo $ppcNum; ?></span>
                        <span class="sx-acc-q"><?php echo htmlspecialchars($ppcFaq[0], ENT_QUOTES, 'UTF-8'); ?></span>
                        <span class="sx-acc-t"><i class="fa-solid fa-plus"></i></span>
                    </button>
                </h3>
                <div class="sx-acc-panel" id="sxPanel<?php echo $ppcNum; ?>" role="region" aria-labelledby="sxBtn<?php echo $ppcNum; ?>">
                    <div class="sx-acc-in"><p><?php echo htmlspecialchars($ppcFaq[1], ENT_QUOTES, 'UTF-8'); ?></p></div>
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


<?php include __DIR__ . '/footer.php'; ?>
