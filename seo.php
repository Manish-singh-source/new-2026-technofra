<?php
$pageTitle = 'SEO Agency in Mumbai | SEO Services Company | Technofra';
$metaDescription = 'Looking for the best SEO agency in Mumbai? Technofra provides result-driven SEO services to improve rankings, organic traffic, leads and online visibility.';
$metaKeywords = 'SEO agency in Mumbai, SEO company in Mumbai, SEO services in Mumbai, Local SEO services in Mumbai, Technical SEO, On-page SEO, Off-page SEO and link building, SEO audit, Best SEO services in Mumbai, Top SEO agency in Mumbai, SEO company in Kandivali, Local SEO services in Kandivali, Affordable SEO services in Mumbai, SEO company in Mumbai for small business, Ecommerce SEO';

// FAQ content: rendered in the accordion AND reused for FAQPage structured data so they always match
$seoFaqs = [
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
];

$seoServiceNames = ['On-Page SEO', 'Technical SEO', 'Local SEO', 'Keyword Research & Strategy', 'Content SEO', 'Off-Page SEO & Link Building', 'SEO Audit', 'SEO Reporting & Performance Tracking'];
$seoFaqEntities = [];
foreach ($seoFaqs as $seoFaq) {
    $seoFaqEntities[] = ['@type' => 'Question', 'name' => $seoFaq[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $seoFaq[1]]];
}
$seoOffers = [];
foreach ($seoServiceNames as $seoName) {
    $seoOffers[] = ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $seoName]];
}
$seoSchema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            '@id' => 'https://technofra.com/seo#service',
            'name' => 'SEO Services in Mumbai',
            'serviceType' => 'Search Engine Optimization',
            'url' => 'https://technofra.com/seo',
            'description' => $metaDescription,
            'areaServed' => ['@type' => 'City', 'name' => 'Mumbai'],
            'provider' => ['@type' => 'Organization', 'name' => 'Technofra', 'url' => 'https://technofra.com', 'logo' => 'https://technofra.com/logo.png'],
            'hasOfferCatalog' => ['@type' => 'OfferCatalog', 'name' => 'SEO Services', 'itemListElement' => $seoOffers],
        ],
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://technofra.com/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'SEO Agency in Mumbai', 'item' => 'https://technofra.com/seo'],
            ],
        ],
        ['@type' => 'FAQPage', 'mainEntity' => $seoFaqEntities],
    ],
];
$extraHead = '<script type="application/ld+json">' . json_encode($seoSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) . '</script>';
include __DIR__ . '/header.php';

?>

<style>
/* =========================================================
   SEO PAGE — premium animated design (scoped to .sx)
   Theme: Technofra blue on navy / soft blue
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
</style>

<script>document.documentElement.classList.add('sx-js');</script>
<div class="sx">

<!-- ================= HERO ================= -->
<section class="sx-hero" id="sxHero">
    <div class="sx-hero-bg" aria-hidden="true"><span class="sx-grid"></span><span class="sx-orb o1"></span><span class="sx-orb o2"></span><span class="sx-orb o3"></span></div>
    <div class="sx-wrap sx-hero-grid">
        <div class="sx-hero-copy">
            <span class="sx-badge sx-in"><span class="sx-dot"></span>#1 SEO Company in India</span>
            <h1 class="sx-in" style="animation-delay:.12s">
                <span class="ln">SEO Agency in Mumbai</span>
                <span class="ln sx-grad">for Higher Rankings</span>
                <span class="ln">&amp; Business Growth</span>
            </h1>
            <p class="sx-hero-desc sx-in" style="animation-delay:.24s">Looking for a reliable SEO agency in Mumbai to improve your website rankings, organic traffic, and online visibility? Technofra is an experienced SEO company in Mumbai offering result-driven SEO strategies designed around your business goals.</p>
            <div class="sx-actions sx-in" style="animation-delay:.36s">
                <a href="enquirynow.php" class="sx-btn pulse">Enquiry Now <i class="fa-solid fa-arrow-right"></i></a>
                <a href="contact.php" class="sx-btn sx-btn-ghost">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <ul class="sx-checks sx-in" style="animation-delay:.48s">
                <li><i class="fa-solid fa-circle-check"></i>Customized SEO Strategies</li>
                <li><i class="fa-solid fa-circle-check"></i>Transparent Reporting</li>
                <li><i class="fa-solid fa-circle-check"></i>Local SEO in Mumbai</li>
                <li><i class="fa-solid fa-circle-check"></i>Ethical Link Building</li>
            </ul>
        </div>
        <div class="sx-hero-visual sx-in" style="animation-delay:.3s">
            <span class="sx-ring r1" aria-hidden="true"></span><span class="sx-ring r2" aria-hidden="true"></span>
            <div class="sx-hero-img-wrap">
                <img src="./assets/images/about/hero-dashboard3.webp" alt="SEO agency in Mumbai dashboard showing keyword rankings, organic traffic, conversions and an upward growth trend" width="1000" height="750" fetchpriority="high" decoding="async">
            </div>
            <span class="sx-chip c1"><i class="fa-solid fa-magnifying-glass"></i>Keyword Research</span>
            <span class="sx-chip c2"><i class="fa-solid fa-gears"></i>Technical SEO</span>
            <span class="sx-chip c3"><i class="fa-solid fa-location-dot"></i>Local SEO</span>
            <span class="sx-chip c4"><i class="fa-solid fa-link"></i>Link Building</span>
        </div>
    </div>
</section>

<!-- ================= MARQUEE ================= -->
<div class="sx-marquee" aria-hidden="true"><div class="sx-marquee-track"><div style="display:flex;gap:3.2rem"><span>Technical SEO<i class="fa-solid fa-star"></i></span><span>On-Page SEO<i class="fa-solid fa-star"></i></span><span>Local SEO<i class="fa-solid fa-star"></i></span><span>Keyword Research<i class="fa-solid fa-star"></i></span><span>Content SEO<i class="fa-solid fa-star"></i></span><span>Link Building<i class="fa-solid fa-star"></i></span><span>SEO Audit<i class="fa-solid fa-star"></i></span><span>Performance Tracking<i class="fa-solid fa-star"></i></span></div><div style="display:flex;gap:3.2rem" aria-hidden="true"><span>Technical SEO<i class="fa-solid fa-star"></i></span><span>On-Page SEO<i class="fa-solid fa-star"></i></span><span>Local SEO<i class="fa-solid fa-star"></i></span><span>Keyword Research<i class="fa-solid fa-star"></i></span><span>Content SEO<i class="fa-solid fa-star"></i></span><span>Link Building<i class="fa-solid fa-star"></i></span><span>SEO Audit<i class="fa-solid fa-star"></i></span><span>Performance Tracking<i class="fa-solid fa-star"></i></span></div></div></div>

<!-- ================= INTRO ================= -->
<section class="sx-sec sx-intro">
    <div class="sx-wrap sx-intro-grid">
        <div class="sx-intro-copy">
            <span class="sx-eyebrow sx-reveal">SEO Company in Mumbai</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Experienced <span class="sx-grad-d">SEO Company in Mumbai</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Our SEO services in Mumbai combine technical SEO, on-page optimization, <a href="content-marketing.php">content strategy</a>, local SEO, keyword research, link building, and performance tracking. We focus on attracting relevant visitors who are more likely to become enquiries, customers, and long-term business opportunities.</p>
            <p class="sx-lead sx-reveal" style="--d:.24s">Whether you are a local business, startup, eCommerce brand, professional service provider, or established company, our SEO team creates a customized strategy to help your website compete for valuable search terms and generate sustainable organic growth.</p>
        </div>
        <div class="sx-stats">
            <div class="sx-stat sx-reveal r"><b data-count="320" data-suffix="K+">320K+</b><span>Organic clicks generated for our clients</span></div>
            <div class="sx-stat sx-reveal r" style="--d:.12s"><b data-count="8" data-suffix="">8</b><span>SEO services under one roof</span></div>
            <div class="sx-stat sx-reveal r" style="--d:.24s"><b data-count="6" data-suffix="">6</b><span>Step process from audit to continuous optimization</span></div>
        </div>
    </div>
</section>

<!-- ================= WHY ================= -->
<section class="sx-sec sx-soft">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">Why Technofra</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Why Choose Technofra as Your <span class="sx-grad-d">SEO Company in Mumbai</span>?</h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Choosing the right SEO partner can make a significant difference to your website's visibility and lead generation. At Technofra, we combine SEO expertise, content planning, technical improvements, and data-driven optimization to create a complete search growth strategy.</p>
            <p class="sx-lead sx-reveal" style="--d:.22s">As a performance-focused SEO service provider in Mumbai, we work on the areas that have the greatest impact on search visibility and conversions.</p>
        </div>
        <div class="sx-why-grid">
                <div class="sx-why sx-reveal" data-spot data-n="01" style="--d:0.0s">
                    <span class="sx-ico"><i class="fa-solid fa-bullseye"></i></span>
                    <p>Customized SEO strategies based on your business objectives</p>
                </div>
                <div class="sx-why sx-reveal" data-spot data-n="02" style="--d:0.08s">
                    <span class="sx-ico"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <p>Keyword research focused on search intent and business value</p>
                </div>
                <div class="sx-why sx-reveal" data-spot data-n="03" style="--d:0.16s">
                    <span class="sx-ico"><i class="fa-solid fa-gears"></i></span>
                    <p>Technical SEO improvements for better crawling and indexing</p>
                </div>
                <div class="sx-why sx-reveal" data-spot data-n="04" style="--d:0.24s">
                    <span class="sx-ico"><i class="fa-solid fa-file-pen"></i></span>
                    <p>On-page optimization for important landing pages</p>
                </div>
                <div class="sx-why sx-reveal" data-spot data-n="05" style="--d:0.0s">
                    <span class="sx-ico"><i class="fa-solid fa-location-dot"></i></span>
                    <p>Local SEO strategies for Mumbai-based businesses</p>
                </div>
                <div class="sx-why sx-reveal" data-spot data-n="06" style="--d:0.08s">
                    <span class="sx-ico"><i class="fa-solid fa-pen-to-square"></i></span>
                    <p>Content optimization and SEO-focused content planning</p>
                </div>
                <div class="sx-why sx-reveal" data-spot data-n="07" style="--d:0.16s">
                    <span class="sx-ico"><i class="fa-solid fa-link"></i></span>
                    <p>Ethical link building and authority development</p>
                </div>
                <div class="sx-why sx-reveal" data-spot data-n="08" style="--d:0.24s">
                    <span class="sx-ico"><i class="fa-solid fa-chart-column"></i></span>
                    <p>Transparent performance reporting and tracking</p>
                </div>
        </div>
    </div>
</section>

<!-- ================= SERVICES ================= -->
<section class="sx-sec sx-dark">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">SEO Services</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Our <span class="sx-grad">SEO Services</span> in Mumbai</h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">We provide comprehensive SEO solutions for businesses looking to increase their search visibility and generate qualified organic traffic.</p>
        </div>
        <div class="sx-svc-grid">
                <article class="sx-svc sx-reveal" data-spot data-n="01" style="--d:0.0s">
                    <span class="sx-ico"><i class="fa-solid fa-file-pen"></i></span>
                    <h3>On-Page SEO</h3>
                    <p>Our on-page SEO service improves the relevance and structure of your website pages. We optimize page titles, meta descriptions, headings, URLs, internal links, content, images, and other important on-page elements.</p>
                    <span class="bar"></span>
                </article>
                <article class="sx-svc sx-reveal" data-spot data-n="02" style="--d:0.1s">
                    <span class="sx-ico"><i class="fa-solid fa-gears"></i></span>
                    <h3>Technical SEO</h3>
                    <p>Technical SEO creates a strong foundation for your website's organic performance. Our team identifies and resolves issues related to crawlability, indexing, website structure, page speed, mobile usability, redirects, canonical tags, structured data, and Core Web Vitals.</p>
                    <span class="bar"></span>
                </article>
                <article class="sx-svc sx-reveal" data-spot data-n="03" style="--d:0.2s">
                    <span class="sx-ico"><i class="fa-solid fa-location-dot"></i></span>
                    <h3>Local SEO</h3>
                    <p>If your business serves customers in Mumbai or specific locations, local SEO can help you reach people searching for your services nearby. Our strategy can include Google Business Profile optimization, local keyword targeting, location-focused landing pages, citations, and review strategy.</p>
                    <span class="bar"></span>
                </article>
                <article class="sx-svc sx-reveal" data-spot data-n="04" style="--d:0.0s">
                    <span class="sx-ico"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <h3>Keyword Research &amp; Strategy</h3>
                    <p>We identify relevant keywords based on search volume, competition, user intent, and business value, then build keyword groups around the services, products, locations, and questions that matter to your customers.</p>
                    <span class="bar"></span>
                </article>
                <article class="sx-svc sx-reveal" data-spot data-n="05" style="--d:0.1s">
                    <span class="sx-ico"><i class="fa-solid fa-pen-to-square"></i></span>
                    <h3>Content SEO</h3>
                    <p>High-quality content helps search engines understand your expertise and gives potential customers useful information before they make a decision. We create and optimize service pages, landing pages, blogs, FAQs, and supporting content.</p>
                    <span class="bar"></span>
                </article>
                <article class="sx-svc sx-reveal" data-spot data-n="06" style="--d:0.2s">
                    <span class="sx-ico"><i class="fa-solid fa-link"></i></span>
                    <h3>Off-Page SEO &amp; Link Building</h3>
                    <p>We work on building your website's authority through ethical link acquisition, relevant citations, brand mentions, outreach, and other sustainable off-page SEO activities.</p>
                    <span class="bar"></span>
                </article>
                <article class="sx-svc sx-reveal" data-spot data-n="07" style="--d:0.0s">
                    <span class="sx-ico"><i class="fa-solid fa-clipboard-check"></i></span>
                    <h3>SEO Audit</h3>
                    <p>Our SEO audit identifies technical problems, content gaps, keyword opportunities, indexing issues, on-page weaknesses, competitor gaps, and other factors affecting your website's organic performance.</p>
                    <span class="bar"></span>
                </article>
                <article class="sx-svc sx-reveal" data-spot data-n="08" style="--d:0.1s">
                    <span class="sx-ico"><i class="fa-solid fa-chart-line"></i></span>
                    <h3>SEO Reporting &amp; Performance Tracking</h3>
                    <p>We monitor keyword rankings, organic traffic, landing-page performance, conversions, and other important SEO metrics. Regular reporting helps identify what is working and where further optimization is required.</p>
                    <span class="bar"></span>
                </article>
        </div>
    </div>
</section>

<!-- ================= RESULTS ================= -->
<section class="sx-sec">
    <div class="sx-wrap sx-results-grid">
        <div class="sx-sticky">
            <span class="sx-eyebrow sx-reveal">Business Results</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Best SEO Services in Mumbai Focused on <span class="sx-grad-d">Business Results</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">SEO should be more than achieving higher rankings. The right strategy should help your business attract relevant users and turn organic visibility into enquiries and sales. Our approach focuses on:</p>
            <a href="enquirynow.php" class="sx-btn sx-reveal" style="--d:.24s">Enquire Now <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="sx-res-list">
                <article class="sx-res sx-reveal r" style="--d:0.0s">
                    <span class="sx-ico"><i class="fa-solid fa-magnifying-glass-chart"></i></span>
                    <div><h3>Better Search Visibility</h3><p>Improve your website's presence for relevant searches and reach potential customers when they are actively looking for your products or services.</p></div>
                </article>
                <article class="sx-res sx-reveal r" style="--d:0.08s">
                    <span class="sx-ico"><i class="fa-solid fa-bullseye"></i></span>
                    <div><h3>Qualified Organic Traffic</h3><p>Target high-intent keywords and optimize landing pages to attract visitors who are more likely to engage with your business.</p></div>
                </article>
                <article class="sx-res sx-reveal r" style="--d:0.16s">
                    <span class="sx-ico"><i class="fa-solid fa-envelope-open-text"></i></span>
                    <div><h3>More Leads &amp; Enquiries</h3><p>Build search-focused pages that answer customer needs and create clear paths toward enquiries, calls, bookings, or purchases.</p></div>
                </article>
                <article class="sx-res sx-reveal r" style="--d:0.24s">
                    <span class="sx-ico"><i class="fa-solid fa-seedling"></i></span>
                    <div><h3>Sustainable Organic Growth</h3><p>SEO is a long-term investment. We continuously improve technical performance, content quality, authority, and keyword coverage to support consistent growth.</p></div>
                </article>
        </div>
    </div>
</section>

<!-- ================= PROCESS ================= -->
<section class="sx-sec sx-soft">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">Our Process</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">How Our <span class="sx-grad-d">SEO Process</span> Works</h2>
        </div>
        <div class="sx-timeline" id="sxTimeline">
            <div class="sx-tl-line" aria-hidden="true"><span class="sx-tl-fill"></span></div>
            <div class="sx-step">
                <span class="sx-node">01</span>
                <div class="sx-scard sx-reveal l">
                    <div class="top"><span class="sx-ico"><i class="fa-solid fa-magnifying-glass-chart"></i></span><h3>SEO Audit &amp; Research</h3></div>
                    <p>We analyze your website, existing rankings, competitors, technical performance, content, backlinks, and keyword opportunities.</p>
                </div>
            </div>
            <div class="sx-step right">
                <span class="sx-node">02</span>
                <div class="sx-scard sx-reveal r">
                    <div class="top"><span class="sx-ico"><i class="fa-solid fa-clipboard-list"></i></span><h3>Keyword Strategy</h3></div>
                    <p>We develop a keyword map based on search intent, business priorities, locations, services, and potential opportunities.</p>
                </div>
            </div>
            <div class="sx-step">
                <span class="sx-node">03</span>
                <div class="sx-scard sx-reveal l">
                    <div class="top"><span class="sx-ico"><i class="fa-solid fa-gear"></i></span><h3>On-Page &amp; Technical Optimization</h3></div>
                    <p>Our team optimizes important pages and addresses technical issues that can affect crawling, indexing, rankings, and user experience.</p>
                </div>
            </div>
            <div class="sx-step right">
                <span class="sx-node">04</span>
                <div class="sx-scard sx-reveal r">
                    <div class="top"><span class="sx-ico"><i class="fa-solid fa-pen-nib"></i></span><h3>Content Development</h3></div>
                    <p>We improve existing content and create new SEO-focused pages, blogs, FAQs, and supporting content to expand your organic search presence.</p>
                </div>
            </div>
            <div class="sx-step">
                <span class="sx-node">05</span>
                <div class="sx-scard sx-reveal l">
                    <div class="top"><span class="sx-ico"><i class="fa-solid fa-location-dot"></i></span><h3>Authority &amp; Local SEO</h3></div>
                    <p>Where appropriate, we strengthen local visibility, citations, relevant mentions, and website authority through sustainable off-page activities.</p>
                </div>
            </div>
            <div class="sx-step right">
                <span class="sx-node">06</span>
                <div class="sx-scard sx-reveal r">
                    <div class="top"><span class="sx-ico"><i class="fa-solid fa-chart-line"></i></span><h3>Monitoring &amp; Continuous Optimization</h3></div>
                    <p>We track rankings, organic traffic, conversions, and page performance and continuously refine the strategy based on data.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= OVERVIEW + IMAGE ================= -->
<section class="sx-sec sx-ov">
    <div class="sx-wrap sx-ov-grid">
        <div class="sx-ov-visual sx-reveal z">
            <span class="sx-orbit" aria-hidden="true"></span><span class="sx-orbit b" aria-hidden="true"></span>
            <img class="sx-ov-img" src="./assets/images/about/seo-analytics-dashboard-800.webp"
                 srcset="./assets/images/about/seo-analytics-dashboard-520.webp 520w, ./assets/images/about/seo-analytics-dashboard-800.webp 800w"
                 sizes="(max-width: 991px) 90vw, 520px" width="800" height="809" loading="lazy" decoding="async"
                 alt="3D SEO analytics dashboard with rising rankings, organic traffic growth, keyword search and link building icons for an SEO agency in Mumbai">
        </div>
        <div class="sx-ov-copy">
            <div class="top sx-reveal"><span class="sx-eyebrow">SEO Overview</span><span class="sx-loc"><i class="fa-solid fa-location-dot"></i>SEO Company in Mumbai</span></div>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Why Businesses Choose <span class="sx-grad-d">Technofra</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Technofra combines SEO strategy with practical execution. Instead of focusing only on rankings, we consider how search visibility contributes to qualified traffic, enquiries, conversions, and overall business growth.</p>
            <h3 class="lbl sx-reveal">Our SEO approach is built around</h3>
            <div class="sx-pill-grid">
                        <div class="sx-pill sx-reveal" style="--d:0.0s"><i class="fa-solid fa-check"></i><span>Business-focused keyword targeting</span></div>
                        <div class="sx-pill sx-reveal" style="--d:0.06s"><i class="fa-solid fa-check"></i><span>Technical and on-page SEO</span></div>
                        <div class="sx-pill sx-reveal" style="--d:0.12s"><i class="fa-solid fa-check"></i><span>Local search optimization</span></div>
                        <div class="sx-pill sx-reveal" style="--d:0.18s"><i class="fa-solid fa-check"></i><span>Content strategy</span></div>
                        <div class="sx-pill sx-reveal" style="--d:0.24s"><i class="fa-solid fa-check"></i><span>Conversion-focused landing pages</span></div>
                        <div class="sx-pill sx-reveal" style="--d:0.3s"><i class="fa-solid fa-check"></i><span>Transparent performance tracking</span></div>
                        <div class="sx-pill sx-reveal" style="--d:0.36s"><i class="fa-solid fa-check"></i><span>Continuous optimization</span></div>
            </div>
            <a href="contact.php" class="sx-btn sx-reveal">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- ================= CTA ================= -->
<section class="sx-cta">
    <div class="sx-wrap">
        <div class="sx-cta-card sx-reveal z">
            <span class="o o1" aria-hidden="true"></span><span class="o o2" aria-hidden="true"></span>
            <div class="sx-cta-in">
                <h2>Best <span>SEO Agency in Mumbai</span> for Local &amp; Growing Businesses</h2>
                <p>If you are searching for a top SEO agency in Mumbai that understands both search engines and business objectives, Technofra can help you build a stronger organic presence.</p>
                <p>From local businesses targeting Mumbai customers to growing brands competing across multiple locations, our SEO strategies are tailored to your market, audience, competition, and growth goals.</p>
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
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Frequently Asked <span class="sx-grad-d">Questions</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Find answers to common questions about our SEO services, process, and how we help businesses grow online.</p>
            <img class="sx-faq-img" src="./assets/images/about/faq-illustration.webp" width="800" height="565" loading="lazy" decoding="async" alt="Magnifying glass and question mark illustration for frequently asked questions about SEO services in Mumbai">
        </div>
        <div class="sx-acc" id="sxAcc">
<?php foreach ($seoFaqs as $seoIndex => $seoFaq):
    $seoNum = str_pad((string) ($seoIndex + 1), 2, '0', STR_PAD_LEFT); ?>
            <div class="sx-acc-item sx-reveal" style="--d:<?php echo $seoIndex * 0.06; ?>s">
                <h3 class="sx-acc-h">
                    <button class="sx-acc-btn" type="button" aria-expanded="false" aria-controls="sxPanel<?php echo $seoNum; ?>" id="sxBtn<?php echo $seoNum; ?>">
                        <span class="sx-acc-n"><?php echo $seoNum; ?></span>
                        <span class="sx-acc-q"><?php echo htmlspecialchars($seoFaq[0], ENT_QUOTES, 'UTF-8'); ?></span>
                        <span class="sx-acc-t"><i class="fa-solid fa-plus"></i></span>
                    </button>
                </h3>
                <div class="sx-acc-panel" id="sxPanel<?php echo $seoNum; ?>" role="region" aria-labelledby="sxBtn<?php echo $seoNum; ?>">
                    <div class="sx-acc-in"><p><?php echo htmlspecialchars($seoFaq[1], ENT_QUOTES, 'UTF-8'); ?></p></div>
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
