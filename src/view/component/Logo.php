<?php
function Logo($props)
{
    $type = "primary"; // Logo type
    $text = "Homework"; // Logo inne text
    $size = "verysmall"; // Logo size
    extract($props);
?>
    <style>
        /* default */
        .logo {
            padding: 15px;
            display: flex;
            align-items: center;
            gap: var(--gap-spacing-verysmall);

            >svg {
                height: var(--font-size-title-<?=$size?>);
            }

            >h1 {
                font-size: var(--font-size-title-<?=$size?>);
                color: rgb(var(--color-primary01));          
            }
        }
        /* primary */
        .logo.primary {
            >h1 {
            }
        }
        /* white */
        .logo.white {
        }
    </style>
    <a href="/" class="logo component <?=$type?>">
        <svg width="29" height="26" viewBox="0 0 29 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_543_23)">
                <path d="M3.79147 1.68103L7.90077 0.160133C8.04036 0.10847 8.19555 0.17982 8.24722 0.319409L15.8585 20.8842C16.1629 21.7069 15.742 22.6224 14.9194 22.9269L11.6791 24.1261C11.4954 24.1941 11.2914 24.0998 11.2237 23.9168L3.34967 2.64199C3.20633 2.25469 3.40416 1.82437 3.79147 1.68103Z" fill="url(#paint0_linear_543_23)"/>
                <path d="M7.38248 0.0351345L7.99624 0.112017C8.16269 0.132868 8.28136 0.28483 8.26044 0.451888L5.29 24.165C5.15193 25.2672 4.14457 26.0503 3.04235 25.9122L2.40378 25.8323C0.901471 25.6441 -0.164788 24.2717 0.0233244 22.77L2.38454 3.92032C2.69101 1.46885 4.93048 -0.272016 7.38248 0.0351345Z" fill="url(#paint1_linear_543_23)"/>
                <path d="M14.4012 7.8571L17.8282 5.87853C18.1203 5.70986 18.4945 5.81011 18.6631 6.10225L26.6549 19.9444C27.1151 20.7416 26.8416 21.7624 26.0444 22.2226L23.0184 23.9697C22.9048 24.0353 22.7598 23.9964 22.6943 23.8829L14.0971 8.99205C13.868 8.59531 14.0042 8.087 14.4009 7.85794L14.4012 7.8571Z" fill="url(#paint2_linear_543_23)"/>
                <path d="M23.3821 24.2484L23.1646 24.2286C22.8772 24.2024 22.6658 23.9479 22.692 23.6611L23.5635 14.1035C23.7119 12.476 25.1537 11.2752 26.7811 11.4236C28.1213 11.5458 29.1101 12.733 28.9879 14.0731L28.4446 20.0314C28.2111 22.592 25.9427 24.4813 23.3821 24.2478L23.3821 24.2484Z" fill="url(#paint3_linear_543_23)"/>
                <path d="M18.1094 5.77908L18.1805 5.78556C18.3439 5.80046 18.4648 5.94563 18.4499 6.10905L17.2274 19.5164C16.9679 22.3619 14.447 24.4615 11.6015 24.2021L11.5304 24.1956C11.367 24.1807 11.2461 24.0355 11.261 23.8721L12.4835 10.4647C12.743 7.61925 15.2639 5.51962 18.1094 5.77908Z" fill="url(#paint4_linear_543_23)"/>
            </g>
            <defs>
                <linearGradient id="paint0_linear_543_23" x1="13.6852" y1="23.1809" x2="5.66374" y2="0.962087" gradientUnits="userSpaceOnUse">
                <stop offset="1" stop-color="#34D170"/>
                </linearGradient>
                <linearGradient id="paint1_linear_543_23" x1="1.50418" y1="25.6185" x2="6.21398" y2="2.87067" gradientUnits="userSpaceOnUse">
                <stop offset="1" stop-color="#39E079"/>
                </linearGradient>
                <linearGradient id="paint2_linear_543_23" x1="28.6617" y1="21.7973" x2="19.0272" y2="5.35744" gradientUnits="userSpaceOnUse">
                <stop offset="1" stop-color="#34D170"/>
                </linearGradient>
                <linearGradient id="paint3_linear_543_23" x1="29.4746" y1="11.4805" x2="27.9096" y2="23.2442" gradientUnits="userSpaceOnUse">
                <stop offset="1" stop-color="#39E079"/>
                </linearGradient>
                <linearGradient id="paint4_linear_543_23" x1="11.5991" y1="24.3196" x2="14.1186" y2="7.46639" gradientUnits="userSpaceOnUse">
                <stop offset="1" stop-color="#39E079"/>
                </linearGradient>
                <clipPath id="clip0_543_23">
                <rect width="29" height="25.928" fill="white"/>
                </clipPath>
            </defs>
        </svg>
        <h1><?=$text?></h1>
    </a>
<?php
}
?>