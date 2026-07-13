create same section using bootstrap and css. also make sure it is responsive on all devices. use font awesome icons where needed. use chatgpt provided image. 

create same section using bootstrap and css and don't change existing css. also make sure it is responsive on all devices. use font awesome icons where needed. use proper padding and margin and also it is responsive. make sure text never overlaps with images and other content also it will fits within it's parent container. grab the image attached in the section and give me that image in png format with transparent background.

use media queries for custom css where needed:

@media (max-width: 1919.98px) { /_ below extra large _/ }
@media (max-width: 1599.98px) { /_ below large desktop _/ }
@media (max-width: 1399.98px) { /_ below desktop _/ }
@media (max-width: 1199.98px) { /_ below laptop _/ }
@media (max-width: 991.98px) { /_ below tablet landscape _/ }
@media (max-width: 767.98px) { /_ below tablet portrait _/ }
@media (max-width: 575.98px) { /_ below small tablet/landscape phone _/ }
@media (max-width: 479.98px) { /_ below large phone _/ }
@media (max-width: 359.98px) { /_ below small phone _/ }

use typography such as following:
/\* ============================================
RESPONSIVE TYPOGRAPHY SCALE
Uses clamp(min, preferred, max) so text scales
fluidly between mobile (~320px) and desktop (~1440px)
with no media queries needed.

clamp(MIN, PREFERRED, MAX)

- MIN: smallest size (mobile floor)
- PREFERRED: fluid value tied to viewport width (vw)
- MAX: largest size (desktop ceiling)
  ============================================ \*/

:root {
/_ Headings _/
--h1: clamp(2rem, 1.4rem + 3vw, 3.5rem); /_ 32px → 56px _/
--h2: clamp(1.75rem, 1.3rem + 2.2vw, 2.75rem);/_ 28px → 44px _/
--h3: clamp(1.5rem, 1.2rem + 1.5vw, 2.25rem); /_ 24px → 36px _/
--h4: clamp(1.25rem, 1.1rem + 1vw, 1.75rem); /_ 20px → 28px _/
--h5: clamp(1.125rem, 1rem + 0.6vw, 1.375rem);/_ 18px → 22px _/
--h6: clamp(1rem, 0.95rem + 0.3vw, 1.125rem); /_ 16px → 18px _/

/_ Body text _/
--p-large: clamp(1.125rem, 1rem + 0.5vw, 1.25rem); /_ 18px → 20px _/
--p: clamp(1rem, 0.95rem + 0.25vw, 1.0625rem); /_ 16px → 17px _/
--p-small: clamp(0.875rem, 0.85rem + 0.15vw, 0.9375rem); /_ 14px → 15px _/
--caption: clamp(0.75rem, 0.72rem + 0.15vw, 0.8125rem); /_ 12px → 13px _/

/_ Line heights (pair with above) _/
--lh-heading: 1.2;
--lh-body: 1.6;
--lh-tight: 1.3;

/_ Optional: letter spacing for large headings _/
--ls-heading: -0.02em;
}

/_ ============================================
APPLY THE SCALE
============================================ _/

h1, .h1 {
font-size: var(--h1);
line-height: var(--lh-heading);
letter-spacing: var(--ls-heading);
font-weight: 700;
}

h2, .h2 {
font-size: var(--h2);
line-height: var(--lh-heading);
letter-spacing: var(--ls-heading);
font-weight: 700;
}

h3, .h3 {
font-size: var(--h3);
line-height: var(--lh-tight);
font-weight: 600;
}

h4, .h4 {
font-size: var(--h4);
line-height: var(--lh-tight);
font-weight: 600;
}

h5, .h5 {
font-size: var(--h5);
line-height: var(--lh-tight);
font-weight: 600;
}

h6, .h6 {
font-size: var(--h6);
line-height: var(--lh-tight);
font-weight: 600;
text-transform: uppercase;
letter-spacing: 0.05em;
}

p, .p {
font-size: var(--p);
line-height: var(--lh-body);
}

.p-large {
font-size: var(--p-large);
line-height: var(--lh-body);
}

.p-small {
font-size: var(--p-small);
line-height: var(--lh-body);
}

.caption, small {
font-size: var(--caption);
line-height: var(--lh-body);
}
