<?php
$pageTitle = 'Social Media Marketing Agency in Mumbai | Technofra';
$metaDescription = 'Technofra is a social media marketing agency in Mumbai offering social media marketing services, strategy, content and ads that turn followers into leads.';
$metaKeywords = '';
$ogImage = 'https://technofra.com/assets/images/new/best-digital-marketing-agency-in-mumbai-team.webp';

// FAQ content: rendered in the accordion AND reused for FAQPage structured data so they always match
$smFaqs = [
    ['How much do social media marketing services cost in Mumbai?',
     'It depends on how many platforms you need, how many posts and reels go out each month, whether video shoots are involved, and your ad budget. Most small businesses start with one or two platforms and grow from there. We price our social media marketing services as a fixed monthly quote, shared after a short call, so you know the cost before anything starts.'],
    ['How long does social media marketing take to show results?',
     'Paid ads can bring in leads within the first couple of weeks. Organic growth takes longer, and most brands see steady engagement and enquiries after about three months of consistent posting. We set realistic targets for the first 90 days so you can judge progress against them.'],
    ['Which social media platforms should my business be on?',
     'Go where your customers already spend time. For most consumer brands that means Instagram and Facebook, with YouTube for longer video. B2B companies usually get more out of LinkedIn. We\'d rather do two platforms well than five badly, and we\'ll recommend the right mix during your strategy session.'],
    ['What is included in your Social Media Strategy and Planning?',
     'You get an audit of your current pages, audience and competitor research, platform selection, content pillars, tone of voice, a posting schedule, campaign ideas for the next 90 days and the KPIs we\'ll report on. It all comes as a written plan you can refer back to.'],
    ['How do I pick from the best social media marketing companies in Mumbai?',
     'Ask for case studies with real numbers from businesses like yours. Find out who will actually handle your account, check whether content is made in-house, and read the contract for lock-in periods and account ownership. A good social media marketing agency will answer all of this without hesitation.'],
    ['Do you run paid ads as well as organic content?',
     'Yes. We manage Meta and LinkedIn ad campaigns alongside your organic posts, and our PPC team can add Google Ads when search makes sense for your business. We\'ll explain upfront how your ad spend and our management fee are split.'],
    ['How often will you post on my pages?',
     'We agree on a schedule at the start, based on your goals and budget. Consistency matters more than volume: three strong posts a week beat a daily post nobody remembers. You see the calendar in advance, so nothing goes live without your approval.'],
    ['How do you measure the success of social media marketing?',
     'We track reach and engagement, but the numbers we focus on are the ones tied to your business: enquiries, website visits, sales, cost per lead and return on ad spend. You\'ll see all of it in a monthly report, with a short note on what we\'re changing next.'],
    ['Why hire a social media marketing agency instead of a freelancer?',
     'One person rarely covers strategy, design, copy, video, ads and analytics equally well. An agency gives you a full team, often for less than building one yourself, plus experience from running campaigns across many brands. You also don\'t lose momentum when someone goes on leave or moves on.'],
    ['Where is Technofra located?',
     'Technofra\'s office is at Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai 400067. We\'re happy to meet Mumbai clients in person or work with you over video calls.'],
];

$smServices = ['Content Calendars and Campaign Planning', 'Creative Post Design', 'Instagram and Facebook Marketing', 'LinkedIn Brand Marketing', 'Reels and Short Video Content', 'Paid Social Ads', 'Analytics and Reporting'];
$smFaqEntities = [];
foreach ($smFaqs as $smFaq) {
    $smFaqEntities[] = ['@type' => 'Question', 'name' => $smFaq[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $smFaq[1]]];
}
$smOffers = [];
foreach ($smServices as $smName) {
    $smOffers[] = ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $smName]];
}
$smOrg = ['@type' => 'ProfessionalService', '@id' => 'https://technofra.com/#organization', 'name' => 'Technofra', 'url' => 'https://technofra.com', 'logo' => 'https://technofra.com/assets/images/new/logo.png', 'image' => $ogImage, 'telephone' => '+918080803374', 'email' => 'info@technofra.com',
    'address' => ['@type' => 'PostalAddress', 'streetAddress' => 'Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West)', 'addressLocality' => 'Mumbai', 'addressRegion' => 'Maharashtra', 'postalCode' => '400067', 'addressCountry' => 'IN'],
    'areaServed' => ['@type' => 'City', 'name' => 'Mumbai'],
    'sameAs' => ['https://www.facebook.com/technofra/', 'https://x.com/Technofra_', 'https://www.linkedin.com/company/technofra/', 'https://youtube.com/@technofra', 'https://www.instagram.com/technofra.company/']];
$smSchema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        $smOrg,
        ['@type' => 'WebPage', '@id' => 'https://technofra.com/social-media-marketing#webpage', 'url' => 'https://technofra.com/social-media-marketing', 'name' => $pageTitle, 'description' => $metaDescription, 'about' => ['@id' => 'https://technofra.com/social-media-marketing#service']],
        ['@type' => 'Service', '@id' => 'https://technofra.com/social-media-marketing#service', 'name' => 'Social Media Marketing Agency in Mumbai', 'serviceType' => 'Social Media Marketing', 'url' => 'https://technofra.com/social-media-marketing', 'description' => $metaDescription, 'areaServed' => ['@type' => 'City', 'name' => 'Mumbai'], 'provider' => ['@id' => 'https://technofra.com/#organization'], 'hasOfferCatalog' => ['@type' => 'OfferCatalog', 'name' => 'Social Media Marketing Services', 'itemListElement' => $smOffers]],
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://technofra.com/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Social Media Marketing Agency in Mumbai', 'item' => 'https://technofra.com/social-media-marketing'],
        ]],
        ['@type' => 'FAQPage', 'mainEntity' => $smFaqEntities],
    ],
];
$flags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG;
$extraHead = '<meta name="twitter:card" content="summary_large_image">'
    . '<meta name="twitter:title" content="' . htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') . '">'
    . '<meta name="twitter:description" content="' . htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8') . '">'
    . '<meta name="twitter:image" content="' . htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') . '">'
    . '<script type="application/ld+json">' . json_encode($smSchema, $flags) . '</script>';
$bodyClass = 'hero-video-page';
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

.sx-hero-visual .sx-chip.c1{top:4%;left:10%}.sx-hero-visual .sx-chip.c4{bottom:2%;right:10%}.sx-hero-visual .sx-chip.c3{bottom:4%;left:4%}
.sx-float.f1{top:10%;left:-5%}.sx-float.f2{bottom:9%;right:-4%}
@media (max-width:991.98px){.sx-float.f1{left:2%}.sx-float.f2{right:2%}}
@media (max-width:575.98px){.sx-float.f1{left:0}.sx-float.f2{right:0}.sx-hero-visual .sx-phone{margin:2.8rem 0 3rem}}

</style>

<script>document.documentElement.classList.add('sx-js');</script>
<div class="sx">

<!-- ================= HERO ================= -->
<section class="sx-hero" id="sxHero">
    <div class="sx-hero-bg" aria-hidden="true"><span class="sx-grid"></span><span class="sx-orb o1"></span><span class="sx-orb o2"></span><span class="sx-orb o3"></span></div>
    <div class="sx-wrap sx-hero-grid">
        <div class="sx-hero-copy">
            <span class="sx-badge sx-in"><span class="sx-dot"></span>49+ Brands Supported &middot; 98% Client Satisfaction</span>
            <h1 class="sx-in" style="animation-delay:.12s">
                <span class="ln">Social Media Marketing</span>
                <span class="ln sx-grad">Agency in Mumbai</span>
                <span class="ln">That Turns Followers Into Customers</span>
            </h1>
            <p class="sx-hero-desc sx-in" style="animation-delay:.24s">Technofra is a social media marketing agency in Mumbai, based in Kandivali West, that helps businesses get seen, get talked about and get real enquiries from Instagram, Facebook and LinkedIn. Anyone can post every day. Posting things people actually stop scrolling for, and turning that attention into calls, DMs and orders, is the hard part. That's the part we're good at.</p>
            <div class="sx-actions sx-in" style="animation-delay:.36s">
                <a href="enquirynow.php" class="sx-btn pulse">Talk to Our Team <i class="fa-solid fa-arrow-right"></i></a>
                <a href="portfolios.php" class="sx-btn sx-btn-ghost">View Our Work <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <ul class="sx-checks sx-in" style="animation-delay:.48s">
                <li><i class="fa-solid fa-circle-check"></i>Strategy &amp; 90-Day Plan</li>
                <li><i class="fa-solid fa-circle-check"></i>Reels &amp; Creative Design</li>
                <li><i class="fa-solid fa-circle-check"></i>Meta &amp; LinkedIn Ads</li>
                <li><i class="fa-solid fa-circle-check"></i>Reports on Leads, Not Likes</li>
            </ul>
        </div>
        <div class="sx-hero-visual sx-in" style="animation-delay:.3s" >
            <span class="sx-ring r1" aria-hidden="true"></span><span class="sx-ring r2" aria-hidden="true"></span>
            <div class="sx-hero-img-wrap photo"><img src="./assets/images/new/smm-hero-social-media-marketing-mumbai-900.webp" srcset="./assets/images/new/smm-hero-social-media-marketing-mumbai-600.webp 600w, ./assets/images/new/smm-hero-social-media-marketing-mumbai-900.webp 900w" sizes="(max-width: 991px) 88vw, 520px" width="900" height="900" fetchpriority="high" decoding="async" alt="Social media marketing agency in Mumbai dashboard showing a content calendar, top performing post, new reel and audience growth across Instagram, Facebook and LinkedIn" onerror="this.onerror=null;this.removeAttribute('srcset');this.src='./assets/images/new/smmabout.png'"></div>
            <div class="sx-float f1" aria-hidden="true"><b>49+</b><span>Brands supported</span></div>
            <div class="sx-float f2" aria-hidden="true"><b>98%</b><span>Client satisfaction</span></div>
        </div>
    </div>
</section>

<section class="sx-trust" aria-label="At a glance"><div class="sx-wrap"><div class="sx-trust-grid"><div class="sx-tr sx-reveal" style="--d:0.0s"><span class="sx-ico"><i class="fa-solid fa-layer-group"></i></span><div><b>7</b><span class="l">Social media services</span></div></div><div class="sx-tr sx-reveal" style="--d:0.08s"><span class="sx-ico"><i class="fa-solid fa-route"></i></span><div><b>5</b><span class="l">Step strategy process</span></div></div><div class="sx-tr sx-reveal" style="--d:0.16s"><span class="sx-ico"><i class="fa-solid fa-briefcase"></i></span><div><b>6</b><span class="l">Industries we work with</span></div></div><div class="sx-tr sx-reveal" style="--d:0.24s"><span class="sx-ico"><i class="fa-solid fa-location-dot"></i></span><div><b>Kandivali</b><span class="l">Office in Mumbai</span></div></div></div></div></section>
<!-- ================= MARQUEE ================= -->
<div class="sx-marquee" aria-hidden="true"><div class="sx-marquee-track"><div style="display:flex;gap:3.2rem"><span>Instagram Marketing<i class="fa-solid fa-star"></i></span><span>Facebook Marketing<i class="fa-solid fa-star"></i></span><span>LinkedIn Branding<i class="fa-solid fa-star"></i></span><span>Reels &amp; Short Video<i class="fa-solid fa-star"></i></span><span>Paid Social Ads<i class="fa-solid fa-star"></i></span><span>Content Calendars<i class="fa-solid fa-star"></i></span><span>Creative Post Design<i class="fa-solid fa-star"></i></span><span>Monthly Reporting<i class="fa-solid fa-star"></i></span></div><div style="display:flex;gap:3.2rem"><span>Instagram Marketing<i class="fa-solid fa-star"></i></span><span>Facebook Marketing<i class="fa-solid fa-star"></i></span><span>LinkedIn Branding<i class="fa-solid fa-star"></i></span><span>Reels &amp; Short Video<i class="fa-solid fa-star"></i></span><span>Paid Social Ads<i class="fa-solid fa-star"></i></span><span>Content Calendars<i class="fa-solid fa-star"></i></span><span>Creative Post Design<i class="fa-solid fa-star"></i></span><span>Monthly Reporting<i class="fa-solid fa-star"></i></span></div></div></div>

<!-- ================= INTRO ================= -->
<section class="sx-sec sx-intro">
    <div class="sx-wrap sx-intro-grid">
        <div class="sx-intro-copy sx-body">
            <span class="sx-eyebrow sx-reveal">Social Media Marketing Agency in Mumbai</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Every Post Ties Back to <span class="sx-grad-d">Something You Care About</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">If you've worked with an agency before, you probably know the drill. A pretty content calendar, a few stock-photo quotes, and a monthly report full of "impressions" nobody can explain. We work differently. Every post we plan ties back to something you care about, whether that's footfall at your store, leads for your sales team or orders on your website.</p>
            <p class="sx-lead sx-reveal" style="--d:.24s">So far we've supported 49+ brands, and our clients rate us at 98% satisfaction. If you're looking for a social media marketing agency in Mumbai that treats your money like its own, <a href="enquirynow.php">talk to our team</a>.</p>
        </div>
        <div class="sx-stats sx-loop m-only" tabindex="0" role="region" aria-label="Highlights" data-speed="34" style="--cw:290px">
            <div class="sx-stat r"><b data-count="49" data-suffix="+">49+</b><span>Brands supported so far</span></div>
            <div class="sx-stat r"><b data-count="98" data-suffix="%">98%</b><span>Client satisfaction rating</span></div>
            <div class="sx-stat r"><b data-count="90" data-suffix="">90</b><span>Day written plan for every new brand</span></div>
        </div>
    </div>
</section>

<!-- ================= WHAT DOES AN AGENCY DO ================= -->
<section class="sx-sec sx-soft">
    <div class="sx-wrap sx-ov-grid wide">
        <div class="sx-ov-copy sx-body">
            <span class="sx-eyebrow sx-reveal">The Basics</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">What Does a <span class="sx-grad-d">Social Media Marketing Agency</span> Do?</h2>
            <div class="sx-answer sx-reveal" style="--d:.16s">
                <p>A social media marketing agency plans, creates, publishes and manages content and ads for your brand on platforms like Instagram, Facebook, LinkedIn and YouTube. It replies to your audience, tracks what's working and adjusts the plan, so your channels bring in followers who become leads and paying customers.</p>
            </div>
            <p class="sx-lead sx-reveal" style="--d:.24s">In practice, hiring a social media marketing agency means you stop worrying about what to post on Tuesday. You get people who handle the thinking, the design, the writing, the video and the numbers, and a clear report that shows what your money did.</p>
        </div>
        <div class="sx-ov-visual sx-reveal r" aria-hidden="true">
            <span class="sx-orbit"></span><span class="sx-orbit b"></span>
            <div class="sx-pill-grid one" style="position:relative;z-index:2;width:100%;max-width:420px">
                <div class="sx-pill"><i class="fa-solid fa-lightbulb"></i>Plan &mdash; strategy and content calendar</div>
                <div class="sx-pill"><i class="fa-solid fa-pen-nib"></i>Create &mdash; design, writing and video</div>
                <div class="sx-pill"><i class="fa-solid fa-paper-plane"></i>Publish &mdash; organic posts and paid ads</div>
                <div class="sx-pill"><i class="fa-solid fa-comments"></i>Manage &mdash; replies to comments and DMs</div>
                <div class="sx-pill"><i class="fa-solid fa-chart-line"></i>Track &mdash; what works, then adjust</div>
            </div>
        </div>
    </div>
</section>

<!-- ================= SERVICES ================= -->
<section class="sx-sec sx-dark">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">What We Do</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Social Media Marketing <span class="sx-grad">Services We Offer</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Our social media marketing services cover everything from the first audit to the monthly report. Take the full package, or pick only the parts you need.</p>
        </div>
        <div class="sx-svc-grid g12 sx-loop always" tabindex="0" role="region" aria-label="Social media marketing services" data-speed="32" style="--cw:340px">
            <article class="sx-svc" data-spot data-n="01"><span class="sx-ico"><i class="fa-solid fa-calendar-days"></i></span><h3>Content Calendars and Campaign Planning</h3><p>We map out a monthly calendar around your launches, your offers and the moments Mumbai actually pays attention to: Ganesh Chaturthi, Navratri, Diwali, monsoon sales and year-end. Each calendar comes out of our social media strategy and planning work, so every post has a job. You approve it once and we take it from there. It also lines up with your <a class="in" href="content-marketing.php">content marketing</a>, so your blog, emails and posts tell the same story.</p><span class="bar"></span></article>
            <article class="sx-svc" data-spot data-n="02"><span class="sx-ico"><i class="fa-solid fa-palette"></i></span><h3>Creative Post Design</h3><p>Carousels, static posts, stories and ad creatives designed around your brand, not a template half your competitors are already using. Our designers work closely with our <a class="in" href="ui-ux.php">UI/UX team</a>, so the look stays consistent from your feed to your website.</p><span class="bar"></span></article>
            <article class="sx-svc" data-spot data-n="03"><span class="sx-ico"><i class="fa-brands fa-instagram"></i></span><h3>Instagram and Facebook Marketing</h3><p>For consumer brands, Instagram and Facebook are usually where new customers first come across you. We grow your following with posts, reels and stories made for your audience, reply to comments and DMs, and tidy up your profile and highlights so visitors know exactly what to do next. Selling online? We send that traffic to a <a class="in" href="shopify-development.php">Shopify store</a> built to convert.</p><span class="bar"></span></article>
            <article class="sx-svc" data-spot data-n="04"><span class="sx-ico"><i class="fa-brands fa-linkedin-in"></i></span><h3>LinkedIn Brand Marketing</h3><p>For B2B companies, founders and professional firms, LinkedIn is where buying decisions quietly get made. We write and design posts for your company page and your leadership team, so you build trust with the people who actually sign off on purchases.</p><span class="bar"></span></article>
            <article class="sx-svc" data-spot data-n="05"><span class="sx-ico"><i class="fa-solid fa-clapperboard"></i></span><h3>Reels and Short Video Content</h3><p>Short video is where the reach is right now. We come up with reel ideas, write the hooks and scripts, plan the shoot and edit the final cut. Each one is tied to something you want to sell or say, not just a trending audio.</p><span class="bar"></span></article>
            <article class="sx-svc" data-spot data-n="06"><span class="sx-ico"><i class="fa-solid fa-rectangle-ad"></i></span><h3>Paid Social Ads</h3><p>Organic reach only goes so far. When you need eyes on a launch or a steady flow of leads, our <a class="in" href="ppc.php">paid marketing (PPC)</a> team runs targeted Meta and LinkedIn campaigns, tests different creatives and watches your cost per lead every week.</p><span class="bar"></span></article>
            <article class="sx-svc" data-spot data-n="07"><span class="sx-ico"><i class="fa-solid fa-chart-column"></i></span><h3>Analytics and Reporting</h3><p>Every month you get a plain-English report: what we posted, what worked, what didn't, how many leads or sales came from social, and what we're changing next. No vanity numbers padding out the slides.</p><span class="bar"></span></article>
        </div>
    </div>
</section>

<!-- ================= GALLERY ================= -->
<section class="sx-sec sx-soft">
    <div class="sx-wrap" data-word="CREATE">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">How It Comes Together</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Create. Engage. <span class="sx-grad-d">Measure.</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Every month follows the same loop: make content people stop scrolling for, talk to the audience it brings in, and report on what it did for your business.</p>
        </div>
        <div class="sx-gal sx-loop m-only" tabindex="0" role="region" aria-label="Create, engage and measure" data-speed="34" style="--cw:300px">
            <figure class="sx-gl"><img src="./assets/images/new/social-media-content-creation-mumbai-480.webp" srcset="./assets/images/new/social-media-content-creation-mumbai-480.webp 480w, ./assets/images/new/social-media-content-creation-mumbai-720.webp 720w" sizes="(max-width: 575px) 84vw, (max-width: 991px) 44vw, 380px" width="720" height="962" loading="lazy" decoding="async" alt="Social media content creator filming a reel next to a content plan and social media strategy board" onerror="this.onerror=null;this.removeAttribute('srcset');this.src='./assets/images/new/smm1.png'"><figcaption><b><i class="fa-solid fa-clapperboard"></i>Create</b><span>We come up with reel ideas, write the hooks and scripts, plan the shoot and edit the final cut.</span></figcaption></figure>
            <figure class="sx-gl"><img src="./assets/images/new/social-media-audience-engagement-mumbai-480.webp" srcset="./assets/images/new/social-media-audience-engagement-mumbai-480.webp 480w, ./assets/images/new/social-media-audience-engagement-mumbai-720.webp 720w" sizes="(max-width: 575px) 84vw, (max-width: 991px) 44vw, 380px" width="720" height="962" loading="lazy" decoding="async" alt="Group of friends reacting to a social media post on a phone with like, comment and share icons" onerror="this.onerror=null;this.removeAttribute('srcset');this.src='./assets/images/new/smm3.png'"><figcaption><b><i class="fa-solid fa-comments"></i>Engage</b><span>We reply to comments and DMs so no lead goes cold, and tidy your profile so visitors know what to do next.</span></figcaption></figure>
            <figure class="sx-gl"><img src="./assets/images/new/social-media-analytics-reporting-mumbai-480.webp" srcset="./assets/images/new/social-media-analytics-reporting-mumbai-480.webp 480w, ./assets/images/new/social-media-analytics-reporting-mumbai-720.webp 720w" sizes="(max-width: 575px) 84vw, (max-width: 991px) 44vw, 380px" width="720" height="962" loading="lazy" decoding="async" alt="Social media analytics dashboard on a laptop and an Instagram profile on a phone showing engagement, reach and followers" onerror="this.onerror=null;this.removeAttribute('srcset');this.src='./assets/images/new/smm2.png'"><figcaption><b><i class="fa-solid fa-chart-column"></i>Measure</b><span>A plain-English monthly report: what worked, what didn't, and how many leads or sales came from social.</span></figcaption></figure>
        </div>
    </div>
</section>

<!-- ================= PROCESS ================= -->
<section class="sx-sec">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">Our Process</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Our <span class="sx-grad-d">Social Media Strategy and Planning</span> Process</h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Good social media strategy and planning is the difference between posting and marketing. Here's how we start with every new brand:</p>
        </div>
        <div class="sx-steps n5 sx-loop m-only" tabindex="0" role="region" aria-label="Process steps" data-speed="30" style="--cw:290px"><article class="sx-pc" data-spot><span class="num" aria-hidden="true">01</span><span class="sx-ico"><i class="fa-solid fa-magnifying-glass-chart"></i></span><h3>Audit and discovery</h3><p>We look at your current pages, your competitors and your past results, then sit down with you to understand your goals, customers and budget.</p><span class="step">Step 1 of 5</span></article><article class="sx-pc" data-spot><span class="num" aria-hidden="true">02</span><span class="sx-ico"><i class="fa-solid fa-users-viewfinder"></i></span><h3>Audience and competitor research</h3><p>We find out who's buying, where they spend time online, and what the brands around you are doing well (and not so well).</p><span class="step">Step 2 of 5</span></article><article class="sx-pc" data-spot><span class="num" aria-hidden="true">03</span><span class="sx-ico"><i class="fa-solid fa-clipboard-list"></i></span><h3>Strategy and a 90-day plan</h3><p>You get a written strategy covering platforms, content types, posting frequency, tone of voice and the numbers we'll be judged on.</p><span class="step">Step 3 of 5</span></article><article class="sx-pc" data-spot><span class="num" aria-hidden="true">04</span><span class="sx-ico"><i class="fa-solid fa-paper-plane"></i></span><h3>Create, publish and engage</h3><p>We produce the content, schedule it, and handle comments and messages so no lead goes cold.</p><span class="step">Step 4 of 5</span></article><article class="sx-pc" data-spot><span class="num" aria-hidden="true">05</span><span class="sx-ico"><i class="fa-solid fa-chart-line"></i></span><h3>Measure and improve</h3><p>We review results every month and move budget and effort toward whatever is bringing in business.</p><span class="step">Step 5 of 5</span></article></div>
        <p class="sx-note sx-reveal">Want to see how we think about content? Our <a class="in" href="blog.php">blog</a> has more.</p>
    </div>
</section>

<!-- ================= WHY ================= -->
<section class="sx-sec sx-soft">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">Why Technofra</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Why Choose Technofra as Your <span class="sx-grad-d">Social Media Marketing Agency in Mumbai</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Plenty of agencies can make a nice-looking post. Here's what you get with us:</p>
        </div>
        <div class="sx-res-list sx-loop m-only" tabindex="0" role="region" aria-label="Why choose Technofra" data-speed="30" style="--cw:360px;max-width:980px;margin:0 auto">
            <article class="sx-res" data-spot><span class="sx-ico"><i class="fa-solid fa-location-dot"></i></span><div><h3>We know the Mumbai market</h3><p>We write in English, Hindi or Hinglish depending on who you're talking to, and we time campaigns around local festivals and buying seasons.</p></div></article>
            <article class="sx-res" data-spot><span class="sx-ico"><i class="fa-solid fa-bullseye"></i></span><div><h3>We report on leads, not likes</h3><p>Followers are nice. Enquiries pay the bills. Our reports show both, but we hold ourselves to the second.</p></div></article>
            <article class="sx-res" data-spot><span class="sx-ico"><i class="fa-solid fa-layer-group"></i></span><div><h3>Everything under one roof</h3><p>Social works best alongside a fast website, solid SEO and a way to capture leads. We do all of it in-house, so you're not juggling four vendors.</p></div></article>
            <article class="sx-res" data-spot><span class="sx-ico"><i class="fa-solid fa-people-group"></i></span><div><h3>You talk to the people doing the work</h3><p>You'll always know who is handling your account and how to reach them. Meet <a class="in" href="our-team.php">our team</a> or read more <a class="in" href="about-us.php">about Technofra</a>.</p></div></article>
            <article class="sx-res" data-spot><span class="sx-ico"><i class="fa-solid fa-award"></i></span><div><h3>Work you can check</h3><p>49+ brands supported and a 98% client satisfaction rate. Have a look at our <a class="in" href="portfolios.php">portfolio</a> before you decide.</p></div></article>
        </div>
    </div>
</section>

<!-- ================= HOW TO PICK ================= -->
<section class="sx-sec sx-dark">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">Choosing an Agency</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">How to Pick From the <span class="sx-grad">Best Social Media Marketing Companies in Mumbai</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">If you're comparing the best social media marketing companies in Mumbai, the shortlist gets long fast. These questions usually make the choice easier:</p>
        </div>
        <div class="sx-two sx-loop m-only" tabindex="0" role="region" aria-label="Agency selection and digital marketing links" data-speed="30" style="--cw:340px">
            <div class="sx-tile l"><span class="sx-ico"><i class="fa-solid fa-chart-simple"></i></span><div><p style="color:var(--ink);font-weight:700">Can they show results for businesses like yours, with real numbers and not just screenshots of likes?</p></div></div>
            <div class="sx-tile r"><span class="sx-ico"><i class="fa-solid fa-user-check"></i></span><div><p style="color:var(--ink);font-weight:700">Who exactly will work on your account, and can you speak to them directly?</p></div></div>
            <div class="sx-tile l"><span class="sx-ico"><i class="fa-solid fa-house-laptop"></i></span><div><p style="color:var(--ink);font-weight:700">Is the content made in-house, or are design and video outsourced?</p></div></div>
            <div class="sx-tile r"><span class="sx-ico"><i class="fa-solid fa-file-lines"></i></span><div><p style="color:var(--ink);font-weight:700">What will they report every month, and how do they define success?</p></div></div>
            <div class="sx-tile l"><span class="sx-ico"><i class="fa-solid fa-lock-open"></i></span><div><p style="color:var(--ink);font-weight:700">Is there a long lock-in, and do you keep your pages and content if you leave?</p></div></div>
            <div class="sx-tile r"><span class="sx-ico"><i class="fa-solid fa-diagram-project"></i></span><div><p style="color:var(--ink);font-weight:700">Can they help beyond social, with your website, SEO and ads, when you need it?</p></div></div>
        </div>
        <p class="sx-lead sx-reveal" style="margin:2.4rem auto 0;max-width:820px;text-align:center;color:#fff;font-weight:700">We're happy to answer every one of these on a call. And if another agency is a better fit for you, we'll say so.</p>
    </div>
</section>

<!-- ================= WHO IT'S FOR ================= -->
<section class="sx-sec">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">Industries</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Who Our <span class="sx-grad-d">Social Media Marketing Services</span> Are For</h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">As a social media marketing agency in Mumbai, we work with startups, local businesses and established companies. Our social media marketing services are shaped around your industry, because what works for a cafe in Bandra won't work for a steel manufacturer in Bhiwandi. We work with:</p>
        </div>
        <div class="sx-why-grid c3 sx-loop m-only" tabindex="0" role="region" aria-label="Industries we work with" data-speed="30" style="--cw:280px">
            <div class="sx-why" data-spot data-n="01"><span class="sx-ico"><i class="fa-solid fa-bag-shopping"></i></span><p>Retail and D2C brands selling online or in-store</p></div>
            <div class="sx-why" data-spot data-n="02"><span class="sx-ico"><i class="fa-solid fa-building"></i></span><p>Real estate developers and brokers</p></div>
            <div class="sx-why" data-spot data-n="03"><span class="sx-ico"><i class="fa-solid fa-spa"></i></span><p>Clinics, salons and wellness brands</p></div>
            <div class="sx-why" data-spot data-n="04"><span class="sx-ico"><i class="fa-solid fa-utensils"></i></span><p>Restaurants, cafes and cloud kitchens</p></div>
            <div class="sx-why" data-spot data-n="05"><span class="sx-ico"><i class="fa-solid fa-graduation-cap"></i></span><p>Schools, coaching centres and edtech</p></div>
            <div class="sx-why" data-spot data-n="06"><span class="sx-ico"><i class="fa-solid fa-industry"></i></span><p>B2B, manufacturing and IT services firms</p></div>
        </div>
    </div>
</section>

<!-- ================= REST OF DIGITAL MARKETING ================= -->
<section class="sx-sec sx-soft">
    <div class="sx-wrap">
        <div class="sx-head">
            <span class="sx-eyebrow sx-reveal">Full-Service</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Social Media Marketing Works Better With the <span class="sx-grad-d">Rest of Your Digital Marketing</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Social media brings people in. What happens next depends on the rest of your setup. Because Technofra is a full-service <a class="in" href="digital-marketing.php">digital marketing</a> company, we can join the dots in a way a standalone social media marketing agency usually can't:</p>
        </div>
        <div class="sx-two sx-loop m-only" tabindex="0" role="region" aria-label="Agency selection and digital marketing links" data-speed="30" style="--cw:340px">
            <div class="sx-tile l" data-spot><span class="sx-ico"><i class="fa-solid fa-laptop-code"></i></span><div><h3>Your website</h3><p>Traffic from social should land on a site that loads fast and makes it easy to act. Our <a class="in" href="web-design-and-development.php">web design and development</a> team builds them, on <a class="in" href="wordpress.php">WordPress</a> or fully custom.</p></div></div>
            <div class="sx-tile r" data-spot><span class="sx-ico"><i class="fa-solid fa-magnifying-glass"></i></span><div><h3>Search</h3><p>People who see you on Instagram often Google you next. <a class="in" href="seo.php">Search engine optimization (SEO)</a> makes sure they find you, not a competitor.</p></div></div>
            <div class="sx-tile l" data-spot><span class="sx-ico"><i class="fa-solid fa-address-book"></i></span><div><h3>Leads and follow-ups</h3><p>Every enquiry from social can flow straight into a CRM so your sales team follows up on time. We build <a class="in" href="crm-development.php">custom CRM software</a>, and our My CRM app lets you manage leads from your phone.</p></div></div>
            <div class="sx-tile r" data-spot><span class="sx-ico"><i class="fa-solid fa-gem"></i></span><div><h3>Brand identity</h3><p>If your logo, colours or tone need work before you go big on social, our branding studio <a class="in" href="https://markidentitiez.com/" target="_blank" rel="noopener">Mark Identitiez</a> can help.</p></div></div>
        </div>
        <p class="sx-lead sx-reveal" style="margin:2.4rem auto 0;max-width:860px;text-align:center">Whether you're starting from zero or your pages have gone quiet, we'll show you where you stand and what we'd do about it. No jargon, no pressure.</p>
    </div>
</section>

<!-- ================= CONTACT ================= -->
<section class="sx-sec sx-dark">
    <div class="sx-wrap sx-results-stack">
        <div class="sx-sticky">
            <span class="sx-eyebrow sx-reveal">Get in Touch</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Talk to a <span class="sx-grad">Social Media Marketing Agency in Mumbai</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Call us on +91 8080 80 3374, email info@technofra.com or <a class="in" href="enquirynow.php">send us an enquiry</a>. You can also <a class="in" href="contact.php">visit our office</a> in Kandivali (West), Mumbai.</p>
        </div>
        <div class="sx-contact">
            <div class="sx-ct sx-reveal r full"><span class="sx-ico"><i class="fa-solid fa-location-dot"></i></span><div><h3>Office</h3><p>Office No. 501, 5th Floor, Ghanshyam Enclave, New Link Road, Kandivali (West), Mumbai 400067</p></div></div>
            <div class="sx-ct sx-reveal r" style="--d:.08s"><span class="sx-ico"><i class="fa-solid fa-phone"></i></span><div><h3>Phone</h3><a href="tel:+918080803374">+91 8080 80 3374</a></div></div>
            <div class="sx-ct sx-reveal r" style="--d:.16s"><span class="sx-ico"><i class="fa-solid fa-envelope"></i></span><div><h3>Email</h3><a href="mailto:info@technofra.com">info@technofra.com</a></div></div>
        </div>
    </div>
</section>

<!-- ================= CTA ================= -->
<section class="sx-cta">
    <div class="sx-wrap">
        <div class="sx-cta-card split sx-reveal z">
            <span class="o o1" aria-hidden="true"></span><span class="o o2" aria-hidden="true"></span>
            <div class="sx-cta-in">
                <div>
                    <h2>Turn Followers Into <span>Leads and Customers</span></h2>
                    <p>Whether you're starting from zero or your pages have gone quiet, we'll show you where you stand and what we'd do about it. No jargon, no pressure.</p>
                    <div class="sx-actions">
                        <a href="enquirynow.php" class="sx-btn sx-btn-white">Send an Enquiry <i class="fa-solid fa-arrow-right"></i></a>
                        <a href="tel:+918080803374" class="sx-btn sx-btn-ghost">Call +91 8080 80 3374 <i class="fa-solid fa-phone"></i></a>
                    </div>
                </div>
                <img class="sx-cta-img" src="./assets/images/new/social-media-marketing-team-mumbai-640.webp" width="640" height="640" loading="lazy" decoding="async" alt="Smiling social media marketing specialist with a tablet surrounded by follower growth, engagement rate and top performing post cards" onerror="this.onerror=null;this.removeAttribute('srcset');this.src='./assets/images/new/smmbanner.png'">
            </div>
        </div>
    </div>
</section>

<!-- ================= FAQ ================= -->
<section class="sx-sec sx-soft">
    <div class="sx-wrap sx-faq-grid">
        <div class="sx-faq-side sx-sticky">
            <span class="sx-eyebrow sx-reveal">FAQ</span>
            <h2 class="sx-h2 sx-reveal" style="--d:.08s">Frequently Asked Questions About Our <span class="sx-grad-d">Social Media Marketing Services</span></h2>
            <p class="sx-lead sx-reveal" style="--d:.16s">Straight answers on cost, timelines, platforms, ads and how we measure success.</p>
            <img class="sx-faq-img" src="./assets/images/new/social-media-faq-mumbai-640.webp" width="640" height="496" loading="lazy" decoding="async" alt="3D FAQ speech bubble with Instagram, Facebook, LinkedIn, YouTube and TikTok icons for frequently asked questions about social media marketing in Mumbai" onerror="this.onerror=null;this.removeAttribute('srcset');this.src='./assets/images/new/smmfq.png'">
        </div>
        <div class="sx-acc" id="sxAcc">
<?php foreach ($smFaqs as $smIndex => $smFaq):
    $smNum = str_pad((string) ($smIndex + 1), 2, '0', STR_PAD_LEFT); ?>
            <div class="sx-acc-item sx-reveal" style="--d:<?php echo min($smIndex, 6) * 0.06; ?>s">
                <h3 class="sx-acc-h">
                    <button class="sx-acc-btn" type="button" aria-expanded="false" aria-controls="sxPanel<?php echo $smNum; ?>" id="sxBtn<?php echo $smNum; ?>">
                        <span class="sx-acc-n"><?php echo $smNum; ?></span>
                        <span class="sx-acc-q"><?php echo htmlspecialchars($smFaq[0], ENT_QUOTES, 'UTF-8'); ?></span>
                        <span class="sx-acc-t"><i class="fa-solid fa-plus"></i></span>
                    </button>
                </h3>
                <div class="sx-acc-panel" id="sxPanel<?php echo $smNum; ?>" role="region" aria-labelledby="sxBtn<?php echo $smNum; ?>">
                    <div class="sx-acc-in"><p><?php echo htmlspecialchars($smFaq[1], ENT_QUOTES, 'UTF-8'); ?></p></div>
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
