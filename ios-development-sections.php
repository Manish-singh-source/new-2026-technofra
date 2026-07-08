<style>
  .tf-ios-page {
    background: var(--color-surface-white);
    color: var(--color-heading);
  }

  .tf-ios-page .tf-section {
    position: relative;
    overflow: hidden;
    padding: clamp(92px, 15vw, 150px) 0;
  }

  .tf-ios-page .tf-section__kicker {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 16px;
    font-size: 12px;
    font-weight: var(--f-bold);
    letter-spacing: 0.22em;
    text-transform: uppercase;
    color: var(--color-primary);
  }

  .tf-ios-page .tf-section__kicker::before {
    content: "";
    width: 28px;
    height: 2px;
    border-radius: 999px;
    background: var(--gradient-btn-1);
  }

  .tf-ios-page .tf-section__title {
    margin: 0;
    font-family: var(--font-primary);
    font-size: clamp(2rem, 4vw, 4.75rem);
    line-height: 0.98;
    letter-spacing: -0.04em;
    color: var(--color-heading);
  }

  .tf-ios-page .tf-section__title strong,
  .tf-ios-page .tf-hero__title strong,
  .tf-ios-page .tf-highlight {
    background: var(--gradient-btn-1);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    -webkit-text-fill-color: transparent;
  }

  .tf-ios-page .tf-section__lead {
    margin: 18px auto 0;
    max-width: 64ch;
    font-size: clamp(1rem, 1.4vw, 1.25rem);
    line-height: 1.7;
    color: var(--color-content-black2);
  }

  .tf-ios-page .tf-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    min-height: 52px;
    padding: 0 22px;
    border-radius: 999px;
    border: 1px solid transparent;
    font-size: 14px;
    font-weight: var(--f-bold);
    text-decoration: none;
    transition: var(--transition-1);
    white-space: nowrap;
  }

  .tf-ios-page .tf-btn--primary {
    background: var(--gradient-btn-1);
    color: var(--color-content-white);
    box-shadow: 0 18px 40px rgba(56, 71, 172, 0.28);
  }

  .tf-ios-page .tf-btn--primary:hover {
    transform: translateY(-2px);
    color: var(--color-content-white);
  }

  .tf-ios-page .tf-btn--ghost {
    background: rgba(255, 255, 255, 0.03);
    color: var(--color-content-white);
    border-color: rgba(255, 255, 255, 0.14);
  }

  .tf-ios-page .tf-btn--ghost:hover {
    border-color: rgba(255, 255, 255, 0.35);
    color: var(--color-content-white);
  }

  .tf-ios-page .tf-card-surface {
    border-radius: 28px;
    background: rgba(255, 255, 255, 0.92);
    border: 1px solid rgba(16, 24, 40, 0.08);
    box-shadow: 0 24px 60px rgba(15, 23, 42, 0.08);
  }

  .tf-ios-page .tf-phone {
    position: relative;
    margin-inline: auto;
    width: min(100%, 246px);
    aspect-ratio: 0.57;
    border-radius: 34px;
    padding: 12px;
    background: linear-gradient(180deg, #101114 0%, #0c0d12 100%);
    box-shadow: 0 38px 70px rgba(8, 12, 28, 0.45);
  }

  .tf-ios-page .tf-phone::before {
    content: "";
    position: absolute;
    inset: 9px;
    border-radius: 28px;
    background: var(--tf-phone-screen, linear-gradient(180deg, #f4f7ff 0%, #d9e3ff 100%));
    overflow: hidden;
  }

  .tf-ios-page .tf-phone::after {
    content: "";
    position: absolute;
    top: 8px;
    left: 50%;
    transform: translateX(-50%);
    width: 38%;
    height: 22px;
    border-radius: 0 0 16px 16px;
    background: #07080d;
    z-index: 2;
    box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.04);
  }

  .tf-ios-page .tf-phone__screen {
    position: absolute;
    inset: 21px 16px 14px;
    z-index: 1;
    display: grid;
    gap: 10px;
    padding-top: 28px;
  }

  .tf-ios-page .tf-phone__topbar {
    height: 10px;
    border-radius: 999px;
    background: rgba(17, 24, 39, 0.12);
  }

  .tf-ios-page .tf-phone__header {
    display: flex;
    justify-content: space-between;
    gap: 12px;
    align-items: center;
    font-size: 11px;
    font-weight: var(--f-bold);
    color: #0f172a;
  }

  .tf-ios-page .tf-phone__chip {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 5px 10px;
    border-radius: 999px;
    background: rgba(99, 102, 241, 0.11);
    color: #4f46e5;
    font-size: 10px;
    font-weight: var(--f-bold);
  }

  .tf-ios-page .tf-phone__panel {
    border-radius: 18px;
    padding: 13px;
    background: rgba(255, 255, 255, 0.88);
    border: 1px solid rgba(15, 23, 42, 0.08);
    box-shadow: 0 12px 24px rgba(15, 23, 42, 0.08);
  }

  .tf-ios-page .tf-phone__panel--accent {
    background: linear-gradient(135deg, #6b5cff 0%, #2e8dff 100%);
    color: var(--color-content-white);
    border: 0;
  }

  .tf-ios-page .tf-phone__panel-title {
    margin: 0 0 6px;
    font-size: 12px;
    font-weight: var(--f-bold);
    line-height: 1.25;
  }

  .tf-ios-page .tf-phone__panel-text {
    margin: 0;
    font-size: 10px;
    line-height: 1.45;
    color: inherit;
    opacity: 0.84;
  }

  .tf-ios-page .tf-phone__mini-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 8px;
  }

  .tf-ios-page .tf-phone__mini-card {
    height: 58px;
    border-radius: 14px;
    background: linear-gradient(145deg, #eef3ff 0%, #dbe8ff 100%);
  }

  .tf-ios-page .tf-phone__mini-card--purple {
    background: linear-gradient(145deg, #8a63ff 0%, #5867f9 100%);
  }

  .tf-ios-page .tf-phone__mini-card--teal {
    background: linear-gradient(145deg, #27c2d8 0%, #37c0a6 100%);
  }

  .tf-ios-page .tf-phone__chart {
    height: 74px;
    border-radius: 16px;
    background:
      linear-gradient(180deg, rgba(255, 255, 255, 0.78), rgba(255, 255, 255, 0.3)),
      linear-gradient(135deg, #d8e6ff 0%, #edf2ff 100%);
    position: relative;
    overflow: hidden;
  }

  .tf-ios-page .tf-phone__chart::before,
  .tf-ios-page .tf-phone__chart::after {
    content: "";
    position: absolute;
    inset: auto 12px 18px;
    height: 2px;
    background: rgba(79, 70, 229, 0.18);
    box-shadow:
      0 -14px 0 rgba(79, 70, 229, 0.28),
      0 -28px 0 rgba(79, 70, 229, 0.14);
    transform: skewX(-16deg);
  }

  .tf-ios-page .tf-phone__chart::after {
    inset: 0;
    background: linear-gradient(135deg, transparent 0 38%, rgba(79, 70, 229, 0.22) 38% 40%, transparent 40% 60%, rgba(45, 132, 255, 0.22) 60% 62%, transparent 62%);
    transform: none;
    box-shadow: none;
  }

  .tf-ios-page .tf-hero {
    background:
      radial-gradient(circle at 15% 22%, rgba(114, 83, 255, 0.18), transparent 18%),
      radial-gradient(circle at 83% 27%, rgba(60, 165, 255, 0.16), transparent 16%),
      radial-gradient(circle at 42% 92%, rgba(148, 88, 255, 0.14), transparent 18%),
      linear-gradient(180deg, #050608 0%, #090a0f 72%, #050608 100%);
    color: var(--color-content-white);
  }

  .tf-ios-page .tf-hero::before,
  .tf-ios-page .tf-hero::after {
    content: "";
    position: absolute;
    inset: auto;
    border-radius: 999px;
    filter: blur(18px);
    pointer-events: none;
  }

  .tf-ios-page .tf-hero::before {
    width: 500px;
    height: 500px;
    left: -220px;
    bottom: -200px;
    background: radial-gradient(circle, rgba(106, 92, 255, 0.28) 0%, rgba(106, 92, 255, 0.04) 52%, transparent 70%);
  }

  .tf-ios-page .tf-hero::after {
    width: 420px;
    height: 420px;
    right: -200px;
    top: -150px;
    background: radial-gradient(circle, rgba(45, 132, 255, 0.2) 0%, rgba(45, 132, 255, 0.03) 56%, transparent 72%);
  }

  .tf-ios-page .tf-hero__eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 18px;
    color: rgba(255, 255, 255, 0.74);
    font-size: 12px;
    font-weight: var(--f-bold);
    letter-spacing: 0.24em;
    text-transform: uppercase;
  }

  .tf-ios-page .tf-hero__eyebrow::before {
    content: "";
    width: 28px;
    height: 2px;
    border-radius: 999px;
    background: var(--gradient-3);
  }

  .tf-ios-page .tf-hero__content {
    position: relative;
    z-index: 3;
    max-width: 980px;
    margin-inline: auto;
    text-align: center;
  }

  .tf-ios-page .tf-hero__title {
    margin: 0;
    font-family: var(--font-primary);
    font-size: clamp(3rem, 6.2vw, 6.6rem);
    line-height: 0.95;
    letter-spacing: -0.06em;
    text-align: center;
    color: #ffd
  }

  .tf-ios-page .tf-hero__accent {
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    -webkit-text-fill-color: transparent;
  }

  .tf-ios-page .tf-hero__accent--violet {
    background-image: linear-gradient(90deg, #a86bff 0%, #7669ff 100%);
  }

  .tf-ios-page .tf-hero__accent--blue {
    background-image: linear-gradient(90deg, #4e93ff 0%, #2b7dff 100%);
  }

  .tf-ios-page .tf-hero__lead {
    margin: 20px 0 0;
    max-width: 50ch;
    font-size: clamp(1rem, 1.35vw, 1.2rem);
    line-height: 1.75;
    color: rgba(255, 255, 255, 0.72);
    text-align: center;
    margin-inline: auto;
  }

  .tf-ios-page .tf-hero__buttons {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 14px;
    margin-top: 28px;
  }

  .tf-ios-page .tf-hero__button {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-height: 58px;
    padding: 5px 24px;
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.18);
    font-size: 15px;
    font-weight: var(--f-semibold);
    letter-spacing: -0.01em;
    transition: var(--transition-1);
  }

  .app-store-text {
    display: block;
    font-size: 22px;
  }

  .tf-ios-page .tf-hero__button:hover {
    transform: translateY(-2px);
  }

  .tf-ios-page .tf-hero__button--ghost {
    color: var(--color-content-white);
    background: rgba(255, 255, 255, 0.02);
    box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.05);
  }

  .tf-ios-page .tf-hero__button--ghost:hover {
    color: var(--color-content-white);
    border-color: rgba(255, 255, 255, 0.36);
  }

  .tf-ios-page .tf-hero__button--primary {
    color: var(--color-content-white);
    background: linear-gradient(90deg, #7a63ff 0%, #3d8bff 100%);
    border-color: rgba(96, 126, 255, 0.42);
    box-shadow: 0 16px 36px rgba(70, 98, 214, 0.34);
  }

  .tf-ios-page .tf-hero__button--primary:hover {
    color: var(--color-content-white);
  }

  .tf-ios-page .tf-hero__button i {
    font-size: 30px;
  }

  .tf-ios-page .tf-hero__decor {
    position: absolute;
    inset: 0;
    pointer-events: none;
    z-index: 1;
  }

  .tf-ios-page .tf-hero__streak {
    position: absolute;
    width: 82px;
    height: 2px;
    border-radius: 999px;
    background: linear-gradient(90deg, rgba(110, 130, 255, 0) 0%, rgba(132, 86, 255, 0.9) 45%, rgba(104, 189, 255, 0.9) 100%);
    filter: blur(0.2px);
    opacity: 0.9;
  }

  .tf-ios-page .tf-hero__streak::before {
    content: "";
    position: absolute;
    inset: -5px auto auto 4px;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(132, 86, 255, 0.8) 0%, rgba(132, 86, 255, 0.15) 55%, transparent 72%);
    filter: blur(1px);
    opacity: 0.8;
  }

  .tf-ios-page .tf-hero__streak--left {
    top: 74px;
    left: 52px;
    transform: rotate(22deg);
  }

  .tf-ios-page .tf-hero__streak--right {
    top: 82px;
    right: 70px;
    transform: rotate(-24deg);
  }

  .tf-ios-page .tf-hero__apple {
    position: absolute;
    top: 180px;
    right: clamp(10px, 6vw, 100px);
    font-size: clamp(96px, 12vw, 150px);
    line-height: 1;
    color: transparent;
    -webkit-text-stroke: 1.2px rgba(79, 117, 255, 0.42);
    opacity: 0.36;
    z-index: 1;
  }

  .tf-ios-page .tf-hero__phone-stage {
    position: relative;
    z-index: 3;
    width: min(100%, 1180px);
    margin: clamp(34px, 5vw, 58px) auto 0;
    min-height: clamp(380px, 50vw, 710px);
  }

  .tf-ios-page .tf-hero__phone-cluster {
    position: relative;
    width: 100%;
    height: 100%;
  }

  .tf-ios-page .tf-hero__phone {
    position: absolute;
    bottom: 0;
    border-radius: 36px;
    padding: 12px;
    background: linear-gradient(180deg, #11131a 0%, #07080c 100%);
    box-shadow: 0 34px 70px rgba(4, 7, 16, 0.56);
  }

  .tf-ios-page .tf-hero__phone::before {
    content: "";
    position: absolute;
    inset: 9px;
    border-radius: 28px;
    background: var(--tf-hero-phone-bg, linear-gradient(180deg, #eef2ff 0%, #d6e1ff 100%));
    overflow: hidden;
  }

  .tf-ios-page .tf-hero__phone::after {
    content: "";
    position: absolute;
    top: 8px;
    left: 50%;
    transform: translateX(-50%);
    width: 38%;
    height: 22px;
    border-radius: 0 0 16px 16px;
    background: #07080d;
    z-index: 2;
  }

  .tf-ios-page .tf-hero__phone-inner {
    position: absolute;
    inset: 21px 16px 14px;
    z-index: 1;
    border-radius: 24px;
    overflow: hidden;
    background: var(--tf-hero-phone-screen, linear-gradient(180deg, #eef2ff 0%, #d6e1ff 100%));
  }

  .tf-ios-page .tf-hero__phone-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .tf-ios-page .tf-hero__phone-content {
    position: absolute;
    inset: 0;
    display: grid;
    gap: 10px;
    padding: 18px 16px 16px;
  }

  .tf-ios-page .tf-hero__phone-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 8px;
    font-size: 11px;
    font-weight: var(--f-bold);
    color: #0f172a;
  }

  .tf-ios-page .tf-hero__phone-badge {
    display: inline-flex;
    align-items: center;
    padding: 5px 10px;
    border-radius: 999px;
    background: rgba(102, 91, 255, 0.12);
    color: #5f57ff;
    font-size: 10px;
  }

  .tf-ios-page .tf-hero__phone-panel {
    border-radius: 18px;
    padding: 14px;
    background: rgba(255, 255, 255, 0.88);
    border: 1px solid rgba(15, 23, 42, 0.08);
    box-shadow: 0 12px 24px rgba(15, 23, 42, 0.07);
  }

  .tf-ios-page .tf-hero__phone-panel--accent {
    background: linear-gradient(135deg, #725bff 0%, #338fff 100%);
    color: var(--color-content-white);
    border: 0;
  }

  .tf-ios-page .tf-hero__phone-title {
    margin: 0 0 6px;
    font-size: 12px;
    line-height: 1.25;
    font-weight: var(--f-bold);
  }

  .tf-ios-page .tf-hero__phone-text {
    margin: 0;
    font-size: 10px;
    line-height: 1.5;
    color: inherit;
    opacity: 0.84;
  }

  .tf-ios-page .tf-hero__phone-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 8px;
  }

  .tf-ios-page .tf-hero__phone-chip {
    height: 60px;
    border-radius: 15px;
    background: linear-gradient(145deg, #eef3ff 0%, #dbe8ff 100%);
  }

  .tf-ios-page .tf-hero__phone-chip--violet {
    background: linear-gradient(145deg, #8b63ff 0%, #5c6cf8 100%);
  }

  .tf-ios-page .tf-hero__phone-chip--teal {
    background: linear-gradient(145deg, #2fc0d6 0%, #38c0a6 100%);
  }

  .tf-ios-page .tf-hero__phone-chart {
    height: 76px;
    border-radius: 16px;
    background:
      linear-gradient(180deg, rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.34)),
      linear-gradient(135deg, #d8e6ff 0%, #edf2ff 100%);
    position: relative;
    overflow: hidden;
  }

  .tf-ios-page .tf-hero__phone-chart::before,
  .tf-ios-page .tf-hero__phone-chart::after {
    content: "";
    position: absolute;
    inset: auto 12px 18px;
    height: 2px;
    background: rgba(79, 70, 229, 0.18);
    box-shadow:
      0 -14px 0 rgba(79, 70, 229, 0.28),
      0 -28px 0 rgba(79, 70, 229, 0.14);
    transform: skewX(-16deg);
  }

  .tf-ios-page .tf-hero__phone-chart::after {
    inset: 0;
    background: linear-gradient(135deg, transparent 0 38%, rgba(79, 70, 229, 0.22) 38% 40%, transparent 40% 60%, rgba(45, 132, 255, 0.22) 60% 62%, transparent 62%);
    transform: none;
    box-shadow: none;
  }

  .tf-ios-page .tf-hero__phone--left {
    --tf-hero-phone-bg: linear-gradient(180deg, #f4f7ff 0%, #dde6ff 100%);
    left: calc(50% - 430px);
    width: min(100%, 250px);
    transform: translateY(14px) rotate(-12deg) scale(0.96);
    z-index: 1;
  }

  .tf-ios-page .tf-hero__phone--center {
    --tf-hero-phone-bg: linear-gradient(180deg, #11131a 0%, #0b0d14 100%);
    left: 50%;
    width: min(100%, 302px);
    transform: translateX(-50%);
    z-index: 3;
  }

  .tf-ios-page .tf-hero__phone--right {
    --tf-hero-phone-bg: linear-gradient(180deg, #f5f8ff 0%, #e6ecfb 100%);
    left: calc(50% + 180px);
    width: min(100%, 250px);
    transform: translateY(20px) rotate(11deg) scale(0.96);
    z-index: 2;
  }

  .tf-ios-page .tf-hero__phone--left .tf-hero__phone-inner,
  .tf-ios-page .tf-hero__phone--right .tf-hero__phone-inner {
    color: #0f172a;
  }

  .tf-ios-page .tf-hero__phone--center .tf-hero__phone-inner {
    background: #090c14;
  }

  .tf-ios-page .tf-hero__phone--center .tf-hero__phone-content {
    padding: 18px 14px 14px;
    color: var(--color-content-white);
  }

  .tf-ios-page .tf-hero__phone--center .tf-hero__phone-head {
    color: rgba(255, 255, 255, 0.92);
  }

  .tf-ios-page .tf-hero__phone--center .tf-hero__phone-panel {
    background: linear-gradient(135deg, #6d58ff 0%, #338fff 100%);
    color: var(--color-content-white);
    border: 0;
  }

  .tf-ios-page .tf-hero__phone--center .tf-hero__phone-chart {
    height: 74px;
  }
  }

  .tf-ios-page .tf-hero-visual {
    position: relative;
    min-height: 650px;
    display: grid;
    place-items: end center;
  }

  .tf-ios-page .tf-hero-visual::before {
    content: "";
    position: absolute;
    left: 50%;
    bottom: 70px;
    width: min(88vw, 640px);
    height: min(88vw, 360px);
    transform: translateX(-50%);
    border-radius: 50%;
    background: radial-gradient(circle at center, rgba(128, 96, 255, 0.4) 0%, rgba(76, 95, 255, 0.16) 32%, transparent 70%);
    filter: blur(10px);
  }

  .tf-ios-page .tf-hero-visual__stack {
    position: relative;
    width: 100%;
    height: 100%;
    display: grid;
    place-items: end center;
    padding-bottom: 16px;
  }

  .tf-ios-page .tf-hero-visual__stack .tf-phone {
    position: absolute;
    width: min(100%, 246px);
  }

  .tf-ios-page .tf-hero-visual__stack .tf-phone--left {
    --tf-phone-screen: linear-gradient(180deg, #fbfcff 0%, #dce7ff 100%);
    left: 0;
    bottom: 38px;
    transform: translateX(-4%) rotate(-10deg) scale(0.96);
    z-index: 1;
  }

  .tf-ios-page .tf-hero-visual__stack .tf-phone--center {
    --tf-phone-screen: linear-gradient(180deg, #0f172a 0%, #18233d 100%);
    width: min(100%, 286px);
    bottom: 0;
    z-index: 3;
  }

  .tf-ios-page .tf-hero-visual__stack .tf-phone--right {
    --tf-phone-screen: linear-gradient(180deg, #fcfdff 0%, #edf1f7 100%);
    right: 0;
    bottom: 18px;
    transform: translateX(8%) rotate(8deg) scale(0.97);
    z-index: 2;
  }

  .tf-ios-page .tf-hero-visual__stack .tf-phone--left .tf-phone__screen,
  .tf-ios-page .tf-hero-visual__stack .tf-phone--right .tf-phone__screen {
    color: #0f172a;
  }

  .tf-ios-page .tf-phone__metric {
    display: grid;
    gap: 4px;
    padding: 12px 13px;
    border-radius: 16px;
    background: rgba(255, 255, 255, 0.92);
    box-shadow: inset 0 0 0 1px rgba(15, 23, 42, 0.07);
  }

  .tf-ios-page .tf-phone__metric strong {
    font-size: 15px;
    line-height: 1;
    color: #0f172a;
  }

  .tf-ios-page .tf-phone__metric span {
    font-size: 10px;
    line-height: 1.35;
    color: #64748b;
  }

  .tf-ios-page .tf-phone__list {
    display: grid;
    gap: 10px;
  }

  .tf-ios-page .tf-phone__list-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    padding: 10px 12px;
    border-radius: 14px;
    background: rgba(15, 23, 42, 0.04);
    font-size: 10px;
    color: #0f172a;
  }

  .tf-ios-page .tf-phone__list-item b {
    font-size: 11px;
  }

  .tf-ios-page .tf-stat-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 14px;
  }

  .tf-ios-page .tf-stat {
    padding: 22px;
    text-align: center;
  }

  .tf-ios-page .tf-stat strong {
    display: block;
    font-family: var(--font-primary);
    font-size: clamp(1.6rem, 3vw, 2.5rem);
    line-height: 1;
    color: var(--color-primary);
  }

  .tf-ios-page .tf-stat span {
    display: block;
    margin-top: 8px;
    font-size: 14px;
    line-height: 1.6;
    color: var(--color-content-black2);
  }

  .tf-ios-page .tf-about {
    position: relative;
    overflow: hidden;
    background:
      radial-gradient(circle at 75% 30%, rgba(117, 90, 255, 0.12), transparent 18%),
      radial-gradient(circle at 88% 82%, rgba(63, 122, 255, 0.15), transparent 15%),
      linear-gradient(180deg, #f7f7fb 0%, #f2f4fa 100%);
  }

  .tf-ios-page .tf-about__layout {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: clamp(28px, 4vw, 64px);
  }

  .tf-ios-page .tf-about__content,
  .tf-ios-page .tf-about__visual {
    width: 100%;
    min-width: 0;
  }

  .tf-ios-page .tf-about__eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 18px;
    color: var(--color-primary);
    font-size: 12px;
    font-weight: var(--f-bold);
    letter-spacing: 0.28em;
    text-transform: uppercase;
  }

  .tf-ios-page .tf-about__eyebrow-line {
    width: 38px;
    height: 2px;
    border-radius: 999px;
    background: var(--color-primary);
    flex: 0 0 auto;
  }

  .tf-ios-page .tf-about__title {
    margin: 0;
    color: var(--color-heading);
    font-size: clamp(2.4rem, 4.8vw, 4.6rem);
    line-height: 0.98;
    font-weight: var(--f-black);
    letter-spacing: -0.05em;
  }

  .tf-ios-page .tf-about__title-accent {
    display: block;
    background: linear-gradient(90deg, #1767ff 0%, #7d59ff 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    -webkit-text-fill-color: transparent;
  }

  .tf-ios-page .tf-about__lead {
    max-width: 60ch;
    margin: 22px 0 0;
    color: var(--color-content-black2);
    font-size: clamp(16px, 1.35vw, 19px);
    line-height: 1.72;
  }

  .tf-ios-page .tf-about__stats {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 14px;
    margin-top: 34px;
  }

  .tf-ios-page .tf-about__stat {
    padding: 24px 22px 22px;
    text-align: center;
    border-radius: 24px;
    background: rgba(255, 255, 255, 0.92);
    border: 1px solid rgba(15, 23, 42, 0.05);
    box-shadow: 0 18px 34px rgba(15, 23, 42, 0.05);
  }

  .tf-ios-page .tf-about__stat strong {
    display: block;
    font-family: var(--font-primary);
    font-size: clamp(1.5rem, 2.4vw, 2.15rem);
    line-height: 1;
    color: #1757d8;
  }

  .tf-ios-page .tf-about__stat span {
    display: block;
    margin-top: 8px;
    color: #6b7280;
    font-size: 14px;
    line-height: 1.55;
  }

  .tf-ios-page .tf-about__visual {
    position: relative;
    min-height: clamp(520px, 52vw, 760px);
  }

  .tf-ios-page .tf-about__visual::before {
    content: "";
    position: absolute;
    left: 50%;
    bottom: 0;
    width: min(92vw, 760px);
    height: min(92vw, 440px);
    transform: translateX(-12%);
    border-radius: 50%;
    background: radial-gradient(circle, rgba(111, 91, 255, 0.24) 0%, rgba(79, 123, 255, 0.16) 35%, transparent 72%);
    filter: blur(14px);
  }

  .tf-ios-page .tf-about__phones {
    position: absolute;
    inset: 0;
  }

  .tf-ios-page .tf-about__image {
    position: absolute;
    bottom: 0;
    width: min(100%, 340px);
    height: auto;
    display: block;
    object-fit: contain;
    filter: drop-shadow(0 30px 60px rgba(25, 30, 55, 0.18));
    transform-origin: center bottom;
  }

  .tf-ios-page .tf-about__image--back {
    left: calc(50% - 390px);
    transform: translateY(14px) rotate(-8deg);
    z-index: 1;
  }

  .tf-ios-page .tf-about__image--front {
    left: calc(50% - 120px);
    width: min(100%, 320px);
    transform: translateY(0) rotate(6deg);
    z-index: 2;
  }

  .tf-ios-page .tf-vision-layout {
    position: relative;
    margin-top: 34px;
    min-height: 460px;
  }

  .tf-ios-page .tf-vision-arc {
    position: absolute;
    left: 50%;
    bottom: 0;
    width: min(92vw, 700px);
    height: min(92vw, 310px);
    transform: translateX(-50%);
    border-radius: 999px 999px 0 0;
    background: radial-gradient(circle at 50% 0%, rgba(9, 14, 28, 0.98) 0 65%, transparent 66%);
    z-index: 0;
  }

  .tf-ios-page .tf-vision-device {
    position: absolute;
    bottom: 28px;
    z-index: 2;
  }

  .tf-ios-page .tf-vision-device--left {
    left: 10%;
    transform: rotate(-14deg);
  }

  .tf-ios-page .tf-vision-device--center {
    left: 50%;
    transform: translateX(-50%);
    width: min(100%, 272px);
    z-index: 3;
  }

  .tf-ios-page .tf-vision-device--right {
    right: 10%;
    transform: rotate(12deg);
  }

  .tf-ios-page .tf-vision-side {
    max-width: 280px;
  }

  .tf-ios-page .tf-vision-side h3 {
    margin: 18px 0 10px;
    font-size: 28px;
    line-height: 1.05;
    color: var(--color-heading);
  }

  .tf-ios-page .tf-vision-side p {
    margin: 0;
    font-size: 15px;
    line-height: 1.75;
    color: var(--color-content-black2);
  }

  .tf-ios-page .tf-process {
    position: relative;
    overflow: hidden;
    background-color: #faf9f3;
    background-image:
      radial-gradient(circle at 1px 1px, rgba(17, 17, 17, 0.055) 1px, transparent 1.2px),
      radial-gradient(circle at 10px 10px, rgba(255, 255, 255, 0.5) 0, rgba(255, 255, 255, 0) 62%);
    background-size: 18px 18px, 100% 100%;
  }

  .tf-ios-page .tf-process__header {
    max-width: 900px;
    margin: 0 auto 52px;
  }

  .tf-ios-page .tf-process__eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 18px;
    color: var(--color-primary);
    font-size: 12px;
    font-weight: var(--f-bold);
    letter-spacing: 0.28em;
    text-transform: uppercase;
  }

  .tf-ios-page .tf-process__eyebrow-line {
    width: 38px;
    height: 2px;
    border-radius: 999px;
    background: var(--color-primary);
    flex: 0 0 auto;
  }

  .tf-ios-page .tf-process__title {
    margin: 0;
    color: var(--color-heading);
    font-size: clamp(36px, 4.6vw, 68px);
    line-height: 0.98;
    font-weight: var(--f-black);
    letter-spacing: -0.04em;
    text-transform: uppercase;
  }

  .tf-ios-page .tf-process__title span {
    display: block;
    color: var(--color-primary);
  }

  .tf-ios-page .tf-process__lead {
    max-width: 760px;
    margin: 18px auto 0;
    color: var(--color-content-black2);
    font-size: clamp(17px, 1.4vw, 21px);
    line-height: 1.5;
  }

  .tf-ios-page .tf-process__track {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    gap: clamp(8px, 0.9vw, 16px);
    flex-wrap: nowrap;
  }

  .tf-ios-page .tf-process__step {
    position: relative;
    flex: 1 1 0;
    min-width: 0;
    max-width: 138px;
    text-align: center;
  }

  .tf-ios-page .tf-process__badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    margin-bottom: 22px;
    border-radius: 50%;
    background: var(--color-primary);
    color: var(--color-content-white);
    font-size: 14px;
    font-weight: var(--f-bold);
    letter-spacing: 0.04em;
    box-shadow: 0 8px 20px rgba(3, 51, 102, 0.14);
  }

  .tf-ios-page .tf-process__icon-circle {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 122px;
    height: 122px;
    margin: 0 auto 16px;
    border-radius: 50%;
    border: 1px solid rgba(17, 17, 17, 0.12);
    background: rgba(255, 255, 255, 0.58);
  }

  .tf-ios-page .tf-process__icon-circle svg {
    width: 56px;
    height: 56px;
    stroke: #111827;
    stroke-width: 1.8;
    fill: none;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .tf-ios-page .tf-process__step h3 {
    margin: 0;
    color: var(--color-heading);
    font-size: 17px;
    line-height: 1.25;
    font-weight: var(--f-bold);
    letter-spacing: 0.02em;
    text-transform: uppercase;
  }

  .tf-ios-page .tf-process__underline {
    display: block;
    width: 30px;
    height: 3px;
    margin: 10px auto 12px;
    border-radius: 999px;
    background: var(--color-primary);
  }

  .tf-ios-page .tf-process__step p {
    margin: 0;
    color: var(--color-content-black2);
    font-size: 14px;
    line-height: 1.6;
  }

  .tf-ios-page .tf-process__arrow {
    display: flex;
    align-items: center;
    justify-content: center;
    align-self: center;
    flex: 0 0 auto;
    width: 28px;
    color: rgba(17, 17, 17, 0.34);
    font-size: 34px;
    line-height: 1;
    transform: translateY(-10px);
  }

  @media (max-width: 1024px) {
    .tf-ios-page .tf-process__track {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 28px 22px;
      align-items: start;
    }

    .tf-ios-page .tf-process__step {
      max-width: none;
      width: 100%;
    }

    .tf-ios-page .tf-process__arrow {
      display: none;
    }

    .tf-ios-page .tf-process__title {
      font-size: clamp(30px, 5vw, 54px);
      line-height: 1;
    }

    .tf-ios-page .tf-process__lead {
      max-width: 680px;
      font-size: 16px;
    }
  }

  @media (max-width: 639.98px) {
    .tf-ios-page .tf-process__header {
      margin-bottom: 30px;
    }

    .tf-ios-page .tf-process__eyebrow {
      gap: 10px;
      font-size: 10px;
      letter-spacing: 0.2em;
    }

    .tf-ios-page .tf-process__title {
      font-size: clamp(26px, 9.5vw, 38px);
      letter-spacing: -0.05em;
    }

    .tf-ios-page .tf-process__lead {
      max-width: 320px;
      font-size: 15px;
      line-height: 1.45;
    }

    .tf-ios-page .tf-process__track {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
    }

    .tf-ios-page .tf-process__step {
      width: min(100%, 320px);
      max-width: 320px;
    }

    .tf-ios-page .tf-process__icon-circle {
      width: 112px;
      height: 112px;
      margin-bottom: 14px;
    }

    .tf-ios-page .tf-process__icon-circle svg {
      width: 52px;
      height: 52px;
    }

    .tf-ios-page .tf-process__step h3 {
      font-size: 16px;
    }

    .tf-ios-page .tf-process__underline {
      width: 28px;
      margin-top: 8px;
      margin-bottom: 10px;
    }

    .tf-ios-page .tf-process__step p {
      font-size: 13px;
      line-height: 1.55;
    }

    .tf-ios-page .tf-process__arrow {
      display: flex;
      width: auto;
      height: 18px;
      margin: -2px 0;
      transform: rotate(90deg);
      transform-origin: center;
      font-size: 30px;
      line-height: 1;
    }
  }

  .tf-ios-page .tf-faq {
    position: relative;
    overflow: hidden;
    background:
      radial-gradient(circle at 14% 18%, rgba(120, 102, 255, 0.16), transparent 24%),
      radial-gradient(circle at 78% 14%, rgba(61, 124, 255, 0.08), transparent 22%),
      linear-gradient(180deg, #040507 0%, #08090f 100%);
    color: var(--color-content-white);
  }

  .tf-ios-page .tf-faq__eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 18px;
    color: var(--color-primary);
    font-size: 12px;
    font-weight: var(--f-bold);
    letter-spacing: 0.26em;
    text-transform: uppercase;
  }

  .tf-ios-page .tf-faq__eyebrow-line {
    width: 38px;
    height: 2px;
    border-radius: 999px;
    background: var(--color-primary);
    flex: 0 0 auto;
  }

  .tf-ios-page .tf-faq__title {
    margin: 0;
    color: var(--color-content-white);
    font-size: clamp(2.7rem, 4.8vw, 4.9rem);
    line-height: 0.96;
    font-weight: var(--f-black);
    letter-spacing: -0.05em;
  }

  .tf-ios-page .tf-faq__title-line {
    display: block;
  }

  .tf-ios-page .tf-faq__title-accent {
    color: #7b78ff;
  }

  .tf-ios-page .tf-faq__lead {
    max-width: 780px;
    margin: 18px 0 0;
    color: rgba(255, 255, 255, 0.72);
    font-size: clamp(16px, 1.35vw, 21px);
    line-height: 1.65;
  }

  .tf-ios-page .tf-faq__layout {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: clamp(28px, 4vw, 56px);
  }

  .tf-ios-page .tf-faq__media-col,
  .tf-ios-page .tf-faq__content-col {
    width: 100%;
    min-width: 0;
  }

  .tf-ios-page .tf-faq__media {
    position: relative;
    max-width: 520px;
    margin: 0 auto;
    padding: 12px 0;
  }

  .tf-ios-page .tf-faq__media::before {
    content: "";
    position: absolute;
    inset: 8% 8% 10% 0;
    border-radius: 36px;
    background: radial-gradient(circle, rgba(111, 96, 255, 0.25) 0%, rgba(111, 96, 255, 0.08) 38%, transparent 70%);
    filter: blur(20px);
  }

  .tf-ios-page .tf-faq__media img {
    position: relative;
    z-index: 1;
    width: 100%;
    height: auto;
    display: block;
    /* transform: rotate(-8deg); */
    transform-origin: center;
    /* filter: drop-shadow(0 28px 52px rgba(0, 0, 0, 0.55)); */
    /* mix-blend-mode: multiply; */
  }

  .tf-ios-page .tf-faq__accordion {
    margin-top: 30px;
  }

  .tf-ios-page .tf-faq__item {
    padding: 0 0 16px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.12);
  }

  .tf-ios-page .tf-faq__toggle {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 18px;
    padding: 20px 0 14px;
    min-height: 44px;
    background: transparent;
    border: 0;
    color: var(--color-content-white);
    text-align: left;
    box-shadow: none;
  }

  .tf-ios-page .tf-faq__toggle:focus {
    outline: none;
  }

  .tf-ios-page .tf-faq__question {
    flex: 1 1 auto;
    min-width: 0;
    margin: 0;
    font-size: clamp(18px, 1.5vw, 26px);
    line-height: 1.32;
    font-weight: var(--f-bold);
    letter-spacing: -0.02em;
    white-space: normal;
  }

  .tf-ios-page .tf-faq__chevron {
    flex: 0 0 auto;
    width: 13px;
    height: 13px;
    margin-top: 8px;
    border-right: 2px solid rgba(255, 255, 255, 0.9);
    border-bottom: 2px solid rgba(255, 255, 255, 0.9);
    transform: rotate(45deg);
    transition: transform 0.2s ease;
  }

  .tf-ios-page .tf-faq__toggle:not(.collapsed) .tf-faq__chevron {
    transform: rotate(-135deg);
    margin-top: 12px;
  }

  .tf-ios-page .tf-faq__answer {
    padding: 0 0 6px;
    color: rgba(255, 255, 255, 0.68);
    font-size: 15px;
    line-height: 1.78;
    max-width: 900px;
  }

  .tf-ios-page .tf-faq__answer p {
    margin: 0;
  }

  .tf-ios-page .tf-portfolio {
    background:
      radial-gradient(circle at 85% 10%, rgba(84, 112, 255, 0.08), transparent 18%),
      linear-gradient(180deg, #fff 0%, #f5f8ff 100%);
  }

  .tf-ios-page .tf-portfolio-card {
    position: relative;
    overflow: hidden;
    border-radius: 30px;
    background: #fff;
    border: 1px solid rgba(15, 23, 42, 0.08);
    box-shadow: 0 20px 46px rgba(15, 23, 42, 0.08);
    transition: transform var(--transition-1), box-shadow var(--transition-1);
  }

  .tf-ios-page .tf-portfolio-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 28px 52px rgba(15, 23, 42, 0.12);
  }

  .tf-ios-page .tf-portfolio-card__image {
    position: relative;
    aspect-ratio: 0.58;
    background: linear-gradient(180deg, #f5f8ff 0%, #e2ebff 100%);
    padding: 12px;
  }

  .tf-ios-page .tf-portfolio-card__image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 22px;
    display: block;
  }

  .tf-ios-page .tf-portfolio-card__image::before {
    content: "";
    position: absolute;
    top: 8px;
    left: 50%;
    transform: translateX(-50%);
    width: 42%;
    height: 18px;
    border-radius: 0 0 14px 14px;
    background: rgba(12, 15, 27, 0.9);
    z-index: 2;
  }

  .tf-ios-page .tf-portfolio-card__meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
    padding: 16px 18px 18px;
  }

  .tf-ios-page .tf-portfolio-card__meta h3 {
    margin: 0;
    font-size: 16px;
    line-height: 1.25;
    color: var(--color-heading);
  }

  .tf-ios-page .tf-portfolio-card__meta span {
    font-size: 12px;
    font-weight: var(--f-bold);
    color: var(--color-primary);
  }

  .tf-ios-page .tf-portfolio-cta {
    margin-top: 28px;
  }

  @media (min-width: 1025px) {
    .tf-ios-page .tf-about__layout {
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      gap: clamp(32px, 4vw, 72px);
    }

    .tf-ios-page .tf-about__content {
      flex: 0 1 48%;
      max-width: 48%;
    }

    .tf-ios-page .tf-about__visual {
      flex: 1 1 52%;
      max-width: 52%;
    }
  }

  @media (max-width: 1199px) {
    .tf-ios-page .tf-hero__phone-stage {
      min-height: 600px;
    }

    .tf-ios-page .tf-vision-layout {
      min-height: 420px;
    }

    .tf-ios-page .tf-hero__phone--left {
      left: calc(50% - 380px);
    }

    .tf-ios-page .tf-hero__phone--right {
      left: calc(50% + 140px);
    }

    .tf-ios-page .tf-about__visual {
      min-height: 620px;
    }

    .tf-ios-page .tf-about__phone--back {
      left: calc(50% - 334px);
      width: min(100%, 240px);
    }

    .tf-ios-page .tf-about__phone--front {
      left: calc(50% - 126px);
      width: min(100%, 230px);
    }
  }

  @media (max-width: 1024px) {
    .tf-ios-page .tf-about__layout {
      align-items: center;
    }

    .tf-ios-page .tf-about__content {
      max-width: 820px;
      text-align: center;
    }

    .tf-ios-page .tf-about__eyebrow {
      justify-content: center;
    }

    .tf-ios-page .tf-about__lead {
      margin-inline: auto;
    }

    .tf-ios-page .tf-about__stats {
      max-width: 560px;
      margin-inline: auto;
    }

    .tf-ios-page .tf-about__visual {
      max-width: 760px;
      min-height: 560px;
    }

    .tf-ios-page .tf-about__image--back {
      left: calc(50% - 320px);
      width: min(100%, 296px);
    }

    .tf-ios-page .tf-about__image--front {
      left: calc(50% - 122px);
      width: min(100%, 280px);
    }
  }

  @media (max-width: 991px) {
    .tf-ios-page .tf-hero__title {
      text-align: center;
    }

    .tf-ios-page .tf-hero__lead,
    .tf-ios-page .tf-hero__eyebrow,
    .tf-ios-page .tf-hero__actions,
    .tf-ios-page .tf-hero__notes {
      justify-content: center;
      text-align: center;
      margin-left: auto;
      margin-right: auto;
    }

    .tf-ios-page .tf-hero-visual {
      min-height: 500px;
    }

    .tf-ios-page .tf-hero__content {
      max-width: 760px;
    }

    .tf-ios-page .tf-hero__title {
      font-size: clamp(2.6rem, 8vw, 4.8rem);
    }

    .tf-ios-page .tf-hero__phone-stage {
      min-height: 540px;
    }

    .tf-ios-page .tf-hero__phone--left {
      left: calc(50% - 310px);
      width: min(100%, 210px);
    }

    .tf-ios-page .tf-hero__phone--center {
      width: min(100%, 250px);
    }

    .tf-ios-page .tf-hero__phone--right {
      left: calc(50% + 100px);
      width: min(100%, 210px);
    }

    .tf-ios-page .tf-hero-visual__stack .tf-phone--left {
      left: -6%;
    }

    .tf-ios-page .tf-hero-visual__stack .tf-phone--right {
      right: -6%;
    }

    .tf-ios-page .tf-stat-grid {
      grid-template-columns: 1fr;
    }

    .tf-ios-page .tf-vision-layout {
      min-height: 980px;
    }

    .tf-ios-page .tf-vision-side {
      max-width: 100%;
    }

    .tf-ios-page .tf-vision-side--left,
    .tf-ios-page .tf-vision-side--right {
      margin: 0 auto 18px;
      text-align: center;
    }

    .tf-ios-page .tf-vision-device--left {
      left: 6%;
    }

    .tf-ios-page .tf-vision-device--right {
      right: 6%;
    }

    .tf-ios-page .tf-faq__title {
      font-size: clamp(2.3rem, 5vw, 3.9rem);
    }

    .tf-ios-page .tf-faq__media {
      max-width: 460px;
    }
  }

  @media (min-width: 1025px) {
    .tf-ios-page .tf-faq__layout {
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
      gap: clamp(36px, 4vw, 72px);
    }

    .tf-ios-page .tf-faq__media-col {
      flex: 0 1 42%;
      max-width: 42%;
    }

    .tf-ios-page .tf-faq__content-col {
      flex: 1 1 58%;
      max-width: 58%;
    }

    .tf-ios-page .tf-faq__title {
      max-width: 12ch;
    }
  }

  @media (max-width: 1024px) {
    .tf-ios-page .tf-faq__layout {
      align-items: center;
    }

    .tf-ios-page .tf-faq__media {
      max-width: 440px;
    }

    .tf-ios-page .tf-faq__content-col {
      max-width: 860px;
      text-align: center;
    }

    .tf-ios-page .tf-faq__eyebrow {
      justify-content: center;
    }

    .tf-ios-page .tf-faq__lead {
      margin-inline: auto;
    }

    .tf-ios-page .tf-faq__title {
      margin-inline: auto;
      max-width: 13ch;
    }
  }

  @media (max-width: 767px) {
    .tf-ios-page .tf-section {
      padding: 64px 0;
    }

    .tf-ios-page .tf-hero {
      padding-top: 92px;
      padding-bottom: 72px;
    }

    .tf-ios-page .tf-hero__content {
      max-width: 100%;
    }

    .tf-ios-page .tf-hero__title {
      font-size: clamp(2.5rem, 11vw, 4rem);
      max-width: 100%;
    }

    .tf-ios-page .tf-hero__lead {
      max-width: 42ch;
    }

    .tf-ios-page .tf-hero__buttons {
      width: 100%;
      gap: 10px;
    }

    .tf-ios-page .tf-hero__button {
      flex: 1 1 220px;
      min-height: 54px;
      padding: 0 18px;
      font-size: 14px;
    }

    .tf-ios-page .tf-hero__phone-stage {
      min-height: 1160px;
      margin-top: 30px;
    }

    .tf-ios-page .tf-hero__phone {
      left: 50%;
      transform: translateX(-50%);
      width: min(100%, 300px);
    }

    .tf-ios-page .tf-hero__phone--left {
      top: 0;
      bottom: auto;
      transform: translateX(-50%) rotate(-8deg);
    }

    .tf-ios-page .tf-hero__phone--center {
      top: 354px;
      bottom: auto;
      transform: translateX(-50%);
      width: min(100%, 320px);
    }

    .tf-ios-page .tf-hero__phone--right {
      top: 724px;
      bottom: auto;
      transform: translateX(-50%) rotate(8deg);
    }

    .tf-ios-page .tf-hero__phone-content {
      padding: 16px 14px 14px;
    }

    .tf-ios-page .tf-hero__streak--left {
      left: 18px;
    }

    .tf-ios-page .tf-hero__streak--right {
      right: 18px;
    }

    .tf-ios-page .tf-hero__apple {
      top: 130px;
      right: 12px;
      font-size: 90px;
    }

    .tf-ios-page .tf-stat {
      padding-inline: 16px;
    }

    .tf-ios-page .tf-about__content {
      text-align: center;
    }

    .tf-ios-page .tf-about__title {
      font-size: clamp(2rem, 7vw, 3.25rem);
      max-width: 14ch;
      margin-inline: auto;
    }

    .tf-ios-page .tf-about__lead {
      max-width: 46ch;
      margin-inline: auto;
      font-size: 15px;
    }

    .tf-ios-page .tf-about__stats {
      max-width: 560px;
      margin-inline: auto;
    }

    .tf-ios-page .tf-about__visual {
      min-height: 520px;
    }

    .tf-ios-page .tf-about__phone {
      width: min(100%, 220px);
    }

    .tf-ios-page .tf-about__phone--back {
      left: calc(50% - 290px);
    }

    .tf-ios-page .tf-about__phone--front {
      left: calc(50% - 95px);
      width: min(100%, 208px);
    }

    .tf-ios-page .tf-faq__media {
      max-width: 380px;
    }

    .tf-ios-page .tf-faq__media img {
      transform: rotate(-6deg);
    }

    .tf-ios-page .tf-faq__title {
      font-size: clamp(1.95rem, 8.1vw, 3rem);
      line-height: 1.03;
      max-width: 14ch;
    }

    .tf-ios-page .tf-faq__lead {
      font-size: 15px;
      max-width: 40ch;
    }

    .tf-ios-page .tf-faq__accordion {
      margin-top: 26px;
    }

    .tf-ios-page .tf-faq__toggle {
      gap: 14px;
      padding: 18px 0 13px;
    }

    .tf-ios-page .tf-faq__question {
      font-size: 17px;
    }

    .tf-ios-page .tf-faq__answer {
      font-size: 14px;
      line-height: 1.7;
    }
  }

  @media (max-width: 639.98px) {
    .tf-ios-page .tf-about__layout {
      gap: 22px;
    }

    .tf-ios-page .tf-about__content {
      text-align: left;
    }

    .tf-ios-page .tf-about__eyebrow {
      margin-bottom: 16px;
    }

    .tf-ios-page .tf-about__title {
      font-size: clamp(1.85rem, 9vw, 2.6rem);
      line-height: 1.02;
      max-width: 13ch;
    }

    .tf-ios-page .tf-about__lead {
      max-width: 100%;
      font-size: 14px;
      line-height: 1.58;
    }

    .tf-ios-page .tf-about__stats {
      grid-template-columns: 1fr;
      max-width: 380px;
    }

    .tf-ios-page .tf-about__stat {
      padding: 18px 14px 16px;
      border-radius: 20px;
    }

    .tf-ios-page .tf-about__stat strong {
      font-size: clamp(1.2rem, 5vw, 1.75rem);
    }

    .tf-ios-page .tf-about__stat span {
      font-size: 12px;
      line-height: 1.45;
    }

    .tf-ios-page .tf-about__visual {
      min-height: 440px;
    }

    .tf-ios-page .tf-about__image {
      max-width: 170px;
    }

    .tf-ios-page .tf-about__image--back {
      left: calc(50% - 170px);
      transform: translateY(12px) rotate(-10deg);
    }

    .tf-ios-page .tf-about__image--front {
      left: calc(50% - 50px);
      width: min(100%, 158px);
      transform: translateY(6px) rotate(7deg);
    }

    .tf-ios-page .tf-faq__layout {
      gap: 24px;
    }

    .tf-ios-page .tf-faq__media {
      max-width: 320px;
      padding: 0;
    }

    .tf-ios-page .tf-faq__media img {
      transform: rotate(-4deg);
    }

    .tf-ios-page .tf-faq__title {
      font-size: clamp(1.8rem, 8.4vw, 2.55rem);
      max-width: 13ch;
    }

    .tf-ios-page .tf-faq__lead {
      font-size: 14px;
      max-width: 34ch;
      line-height: 1.55;
    }

    .tf-ios-page .tf-faq__accordion {
      margin-top: 22px;
      width: 100%;
    }

    .tf-ios-page .tf-faq__item {
      padding-bottom: 14px;
    }

    .tf-ios-page .tf-faq__toggle {
      padding: 16px 0 12px;
      gap: 12px;
      min-height: 44px;
    }

    .tf-ios-page .tf-faq__question {
      font-size: 16px;
      line-height: 1.35;
    }

    .tf-ios-page .tf-faq__answer {
      font-size: 13px;
      line-height: 1.65;
    }

    .tf-ios-page .tf-faq__chevron {
      margin-top: 4px;
    }
  }

  @media (max-width: 577px) {
    .tf-ios-page .tf-hero__button {
      flex: 1 1 180px;
    }

    .tf-ios-page .tf-hero__title {
      font-size: clamp(2.3rem, 12vw, 3.8rem);
    }
  }

  @media (max-width: 480px) {
    .tf-ios-page .tf-hero__phone-stage {
      min-height: 1100px;
    }

    .tf-ios-page .tf-hero__phone--left,
    .tf-ios-page .tf-hero__phone--center,
    .tf-ios-page .tf-hero__phone--right {
      width: min(100%, 280px);
    }

    .tf-ios-page .tf-hero__phone--center {
      top: 340px;
    }

    .tf-ios-page .tf-hero__phone--right {
      top: 680px;
    }
  }

  @media (max-width: 390px) {
    .tf-ios-page .tf-hero__title {
      font-size: clamp(2.1rem, 12vw, 3.4rem);
    }

    .tf-ios-page .tf-hero__phone-stage {
      min-height: 1020px;
    }

    .tf-ios-page .tf-hero__phone--center {
      top: 320px;
    }

    .tf-ios-page .tf-hero__phone--right {
      top: 645px;
    }
  }
</style>

<main>
  <section class="tf-hero tf-section">
    <div class="container position-relative">
      <div class="tf-hero__decor" aria-hidden="true">
        <span class="tf-hero__streak tf-hero__streak--left"></span>
        <span class="tf-hero__streak tf-hero__streak--right"></span>
        <span class="tf-hero__apple"><i class="fab fa-apple"></i></span>
      </div>
      <div class="tf-hero__content">
        <!-- <div class="tf-hero__eyebrow">IOS APP DEVELOPMENT</div> -->
        <h1 class="tf-hero__title">
          <span>Build Powerful</span>
          <br />
          <span><span class="tf-hero__accent tf-hero__accent--violet">iOS</span> Apps in <span class="tf-hero__accent tf-hero__accent--blue">Mumbai</span></span>
        </h1>
        <p class="tf-hero__lead">Elegant, high-performance. User-friendly. iPhone applications that help startups and businesses grow.</p>
        <div class="tf-hero__buttons">
          <a class="tf-hero__button tf-hero__button--ghost" href="https://www.apple.com/app-store/" target="_blank" rel="noopener">
            <i class="fab fa-apple" aria-hidden="true"></i>
            <span>Download on the
              <span class="app-store-text">App Store
              </span>
            </span>
          </a>
          <a class="tf-hero__button tf-hero__button--primary" href="contact.php">
            <i class="fas fa-paper-plane" aria-hidden="true"></i>
            <span>Start Your Project</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="tf-about tf-section">
    <div class="container">
      <div class="tf-about__layout">
        <div class="tf-about__content">
          <div class="tf-about__eyebrow">
            <span class="tf-about__eyebrow-line" aria-hidden="true"></span>
            <span>ABOUT OUR SERVICE</span>
          </div>
          <h2 class="tf-about__title">
            <span>Create High-Performance</span>
            <span class="tf-about__title-accent">iOS Applications</span>
          </h2>
          <p class="tf-about__lead">We design and develop elegant, secure, and scalable iOS apps for startups, brands, and enterprises in Mumbai. From UI/UX design to App Store launch, we build iPhone experiences that are smooth, modern, and growth-focused.</p>
          <div class="tf-about__stats">
            <div class="tf-about__stat">
              <strong>120+</strong>
              <span>iOS projects delivered</span>
            </div>
            <div class="tf-about__stat">
              <strong>4.9★</strong>
              <span>Client satisfaction</span>
            </div>
            <div class="tf-about__stat">
              <strong>10+</strong>
              <span>Years of experience</span>
            </div>
          </div>
        </div>
        <div class="tf-about__visual" aria-hidden="true">
          <div class="tf-about__phones">
            <img class="tf-about__image tf-about__image--back" src="assets/images/about/left-side.png" alt="">
            <img class="tf-about__image tf-about__image--front" src="assets/images/about/right-side.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="tf-section">
    <div class="container">
      <div class="text-center">
        <div class="tf-section__kicker justify-content-center">iOS App Development</div>
        <h2 class="tf-section__title">Vision &amp; <strong>Mission</strong></h2>
        <p class="tf-section__lead">We build high-performance, secure, and user-friendly iOS applications that empower businesses and deliver exceptional experiences.</p>
      </div>
      <div class="tf-vision-layout">
        <div class="tf-vision-arc"></div>
        <div class="tf-vision-device tf-vision-device--left d-none d-lg-block">
          <div class="tf-phone" style="width:220px; --tf-phone-screen: linear-gradient(180deg, #fcfdff 0%, #eef2ff 100%);">
            <div class="tf-phone__screen">
              <div class="tf-phone__panel">
                <h3 class="tf-phone__panel-title">Our Vision</h3>
                <p class="tf-phone__panel-text">To be a leading app development partner delivering innovative digital experiences.</p>
              </div>
              <div class="tf-phone__chart"></div>
            </div>
          </div>
        </div>
        <div class="tf-vision-device tf-vision-device--center">
          <div class="tf-phone" style="width: min(100%, 272px); --tf-phone-screen: linear-gradient(180deg, #eff4ff 0%, #d7e3ff 100%);">
            <div class="tf-phone__screen">
              <div class="tf-phone__panel tf-phone__panel--accent">
                <h3 class="tf-phone__panel-title">Vision &amp; Mission in motion</h3>
                <p class="tf-phone__panel-text">A clear product direction backed by measurable outcomes.</p>
              </div>
              <div class="tf-phone__metric">
                <strong>Clarity first</strong>
                <span>Strategy, design, and engineering working together.</span>
              </div>
              <div class="tf-phone__chart"></div>
            </div>
          </div>
        </div>
        <div class="tf-vision-device tf-vision-device--right d-none d-lg-block">
          <div class="tf-phone" style="width:220px; --tf-phone-screen: linear-gradient(180deg, #fcfdff 0%, #edf3ff 100%);">
            <div class="tf-phone__screen">
              <div class="tf-phone__panel">
                <h3 class="tf-phone__panel-title">Our Mission</h3>
                <p class="tf-phone__panel-text">To craft reliable, elegant products that create lasting business value.</p>
              </div>
              <div class="tf-phone__mini-grid">
                <div class="tf-phone__mini-card tf-phone__mini-card--purple"></div>
                <div class="tf-phone__mini-card tf-phone__mini-card--teal"></div>
                <div class="tf-phone__mini-card"></div>
                <div class="tf-phone__mini-card"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="tf-section tf-process">
    <div class="container">
      <div class="tf-process__header text-center">
        <div class="tf-process__eyebrow">
          <span class="tf-process__eyebrow-line" aria-hidden="true"></span>
          <span>IOS APP DEVELOPMENT PROCESS</span>
        </div>
        <h2 class="tf-process__title"><span>iOS APP</span> DEVELOPMENT PROCESS</h2>
        <p class="tf-process__lead">A simple and effective process to build high-quality iOS applications.</p>
      </div>

      <div class="tf-process__track" role="list" aria-label="iOS app development process steps">
        <div class="tf-process__step" role="listitem">
          <span class="tf-process__badge">01</span>
          <div class="tf-process__icon-circle" aria-hidden="true">
            <svg viewBox="0 0 64 64" focusable="false" aria-hidden="true">
              <path d="M32 10c-8 0-14 6.1-14 14 0 5.3 2.9 9.8 7.2 12.3V42h13.6v-5.7C43.1 30.1 46 25.3 46 20c0-7.9-6-10-14-10Z" />
              <path d="M26 46h12" />
              <path d="M27.5 52h9" />
              <path d="M23 20h3m15 0h3m-1.8-9.2 2.1-2.1m-28.7 2.1-2.1-2.1" />
              <path d="M18.5 31.5 15 33m30.5-1.5 3.5 1.5" />
            </svg>
          </div>
          <h3>DISCOVER</h3>
          <span class="tf-process__underline" aria-hidden="true"></span>
          <p>Understand your idea, business goals and user needs.</p>
        </div>

        <div class="tf-process__arrow" aria-hidden="true">&rarr;</div>

        <div class="tf-process__step" role="listitem">
          <span class="tf-process__badge">02</span>
          <div class="tf-process__icon-circle" aria-hidden="true">
            <svg viewBox="0 0 64 64" focusable="false" aria-hidden="true">
              <rect x="12" y="10" width="40" height="44" rx="3.5" />
              <path d="M12 20h40" />
              <path d="M18 28h12" />
              <path d="M34 28h10" />
              <path d="M18 36h7" />
              <path d="M34 36h10" />
              <path d="M22 18l10 8 10-8" />
              <path d="M22 26l10-8 10 8" />
              <rect x="17" y="40" width="12" height="10" rx="1.5" />
            </svg>
          </div>
          <h3>PLAN &amp; DESIGN</h3>
          <span class="tf-process__underline" aria-hidden="true"></span>
          <p>Plan features, create UI/UX design and interactive prototypes.</p>
        </div>

        <div class="tf-process__arrow" aria-hidden="true">&rarr;</div>

        <div class="tf-process__step" role="listitem">
          <span class="tf-process__badge">03</span>
          <div class="tf-process__icon-circle" aria-hidden="true">
            <svg viewBox="0 0 64 64" focusable="false" aria-hidden="true">
              <rect x="10" y="14" width="44" height="36" rx="4" />
              <path d="M10 22h44" />
              <path d="M22 38 30 30l-8-8" />
              <path d="M42 22 34 30l8 8" />
              <path d="M27 39h10" />
            </svg>
          </div>
          <h3>DEVELOP</h3>
          <span class="tf-process__underline" aria-hidden="true"></span>
          <p>Build the app using Swift, iOS SDK and best practices.</p>
        </div>

        <div class="tf-process__arrow" aria-hidden="true">&rarr;</div>

        <div class="tf-process__step" role="listitem">
          <span class="tf-process__badge">04</span>
          <div class="tf-process__icon-circle" aria-hidden="true">
            <svg viewBox="0 0 64 64" focusable="false" aria-hidden="true">
              <rect x="18" y="8" width="28" height="48" rx="5" />
              <path d="M22 16h20" />
              <path d="M32 42c5 0 9-4 9-9s-4-9-9-9-9 4-9 9 4 9 9 9Z" />
              <path d="M28.8 33.2 31 35.5l4.6-5.3" />
              <path d="M22 48h20" />
            </svg>
          </div>
          <h3>TEST</h3>
          <span class="tf-process__underline" aria-hidden="true"></span>
          <p>Test for performance, usability and security across devices.</p>
        </div>

        <div class="tf-process__arrow" aria-hidden="true">&rarr;</div>

        <div class="tf-process__step" role="listitem">
          <span class="tf-process__badge">05</span>
          <div class="tf-process__icon-circle" aria-hidden="true">
            <svg viewBox="0 0 64 64" focusable="false" aria-hidden="true">
              <path d="M24 40c-5-5-6-12-2.6-17.2l3.1-4.9 11.5 11.5 4.8 4.8c-5.2 3.4-12.1 2.4-16.8-2.2Z" />
              <path d="M32 24 44 12" />
              <path d="M43 13l8 8" />
              <path d="M21.5 42.5 15 49" />
              <path d="M38 36l10 10" />
              <path d="M18 48h28" />
              <path d="M26 20l4-4 4 4-4 4Z" />
            </svg>
          </div>
          <h3>LAUNCH</h3>
          <span class="tf-process__underline" aria-hidden="true"></span>
          <p>Deploy to App Store and make your app live.</p>
        </div>

        <div class="tf-process__arrow" aria-hidden="true">&rarr;</div>

        <div class="tf-process__step" role="listitem">
          <span class="tf-process__badge">06</span>
          <div class="tf-process__icon-circle" aria-hidden="true">
            <svg viewBox="0 0 64 64" focusable="false" aria-hidden="true">
              <path d="M32 17a15 15 0 1 0 15 15" />
              <path d="M32 8v7" />
              <path d="M32 49v7" />
              <path d="M8 32h7" />
              <path d="M49 32h7" />
              <path d="M14.5 14.5l5 5" />
              <path d="M44.5 44.5l5 5" />
              <path d="M49 14.5l-5 5" />
              <path d="M19.5 44.5l-5 5" />
              <circle cx="32" cy="32" r="12.5" />
            </svg>
          </div>
          <h3>SUPPORT</h3>
          <span class="tf-process__underline" aria-hidden="true"></span>
          <p>Monitor, maintain and update your app for better performance.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="tf-faq tf-section">
    <div class="container">
      <div class="tf-faq__layout">
        <div class="tf-faq__media-col">
          <div class="tf-faq__media">
            <img src="assets/images/faq/faq-img.png" alt="Technofra iOS app development FAQ preview" loading="lazy">
          </div>
        </div>
        <div class="tf-faq__content-col">
          <div class="tf-faq__eyebrow">
            <span class="tf-faq__eyebrow-line" aria-hidden="true"></span>
            <span>FAQ</span>
          </div>
          <h2 class="tf-faq__title">
            <span class="tf-faq__title-line">Everything You Need to Know</span>
            <span class="tf-faq__title-line">About <span class="tf-faq__title-accent">iOS App Development</span></span>
          </h2>
          <p class="tf-faq__lead">We've kept the most common questions here so you can move from idea to launch with less friction and more clarity.</p>

          <div class="accordion tf-faq__accordion" id="tfFaqAccordion">
            <div class="tf-faq__item">
              <h3 class="accordion-header mb-0" id="tfFaqHeading1">
                <button class="tf-faq__toggle" type="button" data-bs-toggle="collapse" data-bs-target="#tfFaqCollapse1" aria-expanded="true" aria-controls="tfFaqCollapse1">
                  <span class="tf-faq__question">What platforms do you develop iOS apps for?</span>
                  <span class="tf-faq__chevron" aria-hidden="true"></span>
                </button>
              </h3>
              <div id="tfFaqCollapse1" class="accordion-collapse collapse show" aria-labelledby="tfFaqHeading1" data-bs-parent="#tfFaqAccordion">
                <div class="tf-faq__answer">
                  <p>We develop iOS apps for iPhone, iPad, Apple Watch, and Apple TV, ensuring a seamless experience across all Apple devices.</p>
                </div>
              </div>
            </div>

            <div class="tf-faq__item">
              <h3 class="accordion-header mb-0" id="tfFaqHeading2">
                <button class="tf-faq__toggle collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tfFaqCollapse2" aria-expanded="false" aria-controls="tfFaqCollapse2">
                  <span class="tf-faq__question">Which technologies do you use for iOS app development?</span>
                  <span class="tf-faq__chevron" aria-hidden="true"></span>
                </button>
              </h3>
              <div id="tfFaqCollapse2" class="accordion-collapse collapse" aria-labelledby="tfFaqHeading2" data-bs-parent="#tfFaqAccordion">
                <div class="tf-faq__answer">
                  <p>We use Swift, SwiftUI, UIKit, Combine, Core Data, and the latest iOS frameworks to build secure, scalable, and high-performance apps.</p>
                </div>
              </div>
            </div>

            <div class="tf-faq__item">
              <h3 class="accordion-header mb-0" id="tfFaqHeading3">
                <button class="tf-faq__toggle collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tfFaqCollapse3" aria-expanded="false" aria-controls="tfFaqCollapse3">
                  <span class="tf-faq__question">How long does it take to develop an iOS app?</span>
                  <span class="tf-faq__chevron" aria-hidden="true"></span>
                </button>
              </h3>
              <div id="tfFaqCollapse3" class="accordion-collapse collapse" aria-labelledby="tfFaqHeading3" data-bs-parent="#tfFaqAccordion">
                <div class="tf-faq__answer">
                  <p>The timeline depends on the app's complexity and features. A simple app may take 4-6 weeks, while complex apps may take 3-6 months or more.</p>
                </div>
              </div>
            </div>

            <div class="tf-faq__item">
              <h3 class="accordion-header mb-0" id="tfFaqHeading4">
                <button class="tf-faq__toggle collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tfFaqCollapse4" aria-expanded="false" aria-controls="tfFaqCollapse4">
                  <span class="tf-faq__question">Will you upload the app to the App Store?</span>
                  <span class="tf-faq__chevron" aria-hidden="true"></span>
                </button>
              </h3>
              <div id="tfFaqCollapse4" class="accordion-collapse collapse" aria-labelledby="tfFaqHeading4" data-bs-parent="#tfFaqAccordion">
                <div class="tf-faq__answer">
                  <p>Yes, we manage the complete App Store deployment process, including account setup, submissions, and approvals.</p>
                </div>
              </div>
            </div>

            <div class="tf-faq__item">
              <h3 class="accordion-header mb-0" id="tfFaqHeading5">
                <button class="tf-faq__toggle collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tfFaqCollapse5" aria-expanded="false" aria-controls="tfFaqCollapse5">
                  <span class="tf-faq__question">Do you provide support after the app is launched?</span>
                  <span class="tf-faq__chevron" aria-hidden="true"></span>
                </button>
              </h3>
              <div id="tfFaqCollapse5" class="accordion-collapse collapse" aria-labelledby="tfFaqHeading5" data-bs-parent="#tfFaqAccordion">
                <div class="tf-faq__answer">
                  <p>Absolutely! We provide maintenance, feature updates, and technical support to keep your app up-to-date and running smoothly.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="tf-portfolio tf-section">
    <div class="container">
      <div class="text-center">
        <div class="tf-section__kicker justify-content-center">Our Work</div>
        <h2 class="tf-section__title">Explore Our Portfolio Showcase</h2>
        <p class="tf-section__lead">A selection of modern digital products we design and build to help brands deliver exceptional experiences.</p>
        <div class="tf-portfolio-cta">
          <a class="tf-btn tf-btn--primary" href="portfolios.php">
            <span>View All Projects</span>
            <i class="fas fa-arrow-right" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-2 row-cols-xl-5 g-4 mt-4">
        <div class="col">
          <article class="tf-portfolio-card">
            <div class="tf-portfolio-card__image">
              <img src="assets/images/project/project2-1.png" alt="Portfolio preview 1">
            </div>
            <div class="tf-portfolio-card__meta">
              <h3>Health App UI</h3>
              <span>iOS</span>
            </div>
          </article>
        </div>
        <div class="col">
          <article class="tf-portfolio-card">
            <div class="tf-portfolio-card__image">
              <img src="assets/images/project/project2-3.png" alt="Portfolio preview 2">
            </div>
            <div class="tf-portfolio-card__meta">
              <h3>Service Dashboard</h3>
              <span>App</span>
            </div>
          </article>
        </div>
        <div class="col">
          <article class="tf-portfolio-card">
            <div class="tf-portfolio-card__image">
              <img src="assets/images/project/project3-1.png" alt="Portfolio preview 3">
            </div>
            <div class="tf-portfolio-card__meta">
              <h3>Commerce Experience</h3>
              <span>UX</span>
            </div>
          </article>
        </div>
        <div class="col">
          <article class="tf-portfolio-card">
            <div class="tf-portfolio-card__image">
              <img src="assets/images/project/project3-2.png" alt="Portfolio preview 4">
            </div>
            <div class="tf-portfolio-card__meta">
              <h3>Brand Launch</h3>
              <span>Design</span>
            </div>
          </article>
        </div>
        <div class="col">
          <article class="tf-portfolio-card">
            <div class="tf-portfolio-card__image">
              <img src="assets/images/project/project12-1.png" alt="Portfolio preview 5">
            </div>
            <div class="tf-portfolio-card__meta">
              <h3>Product Flow</h3>
              <span>Mobile</span>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
</main>
