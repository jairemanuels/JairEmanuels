<?php
include "includes/discord.inc.php";
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jaïr - Taken</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/js/typewrite.js"></script>
</head>

<body class="h-screen flex items-center justify-center bg-gray-100">

    <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
        <svg viewBox="0 0 814 834" width="100%" height="100%" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-0 left-0 z-0">
            <g filter="url(#filter0_f_104_157)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M295.115 59.1601C344.418 64.1227 399.334 40.4798 441.012 67.2809C482.661 94.0626 488.246 151.559 508.835 196.591C527.488 237.392 545.396 276.528 556.545 319.983C570.739 375.303 618.533 441.446 583.159 486.285C545.494 534.028 461.66 487.789 405.59 511.331C359.85 530.535 342.527 592.628 295.115 607.223C243.654 623.064 186.93 613.909 136.883 594.048C82.7959 572.583 15.6167 546.343 0.266022 490.214C-15.9307 430.991 59.9401 381.348 61.9299 319.983C63.8166 261.798 -2.69996 212.564 11.1028 156.008C24.7487 100.095 76.7396 54.6731 131.214 36.0975C184.338 17.982 239.269 53.5388 295.115 59.1601Z" fill="url(#paint0_linear_104_157)" fill-opacity="0.5" />
            </g>
            <defs>
                <filter id="filter0_f_104_157" x="-220" y="-187" width="1033.94" height="1020.28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feGaussianBlur stdDeviation="109" result="effect1_foregroundBlur_104_157" />
                </filter>
                <linearGradient id="paint0_linear_104_157" x1="-269.581" y1="326.139" x2="286.88" y2="895.603" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#F5D6FA" />
                    <stop offset="1" stop-color="#E6E0FE" />
                </linearGradient>
            </defs>
        </svg>
    </div>

    <div class="absolute left-0 top-0 z-10 w-full">
        <header class="container mx-auto mt-4">
            <?php include "includes/ui/menu.inc.php"; ?>
        </header>
    </div>

    <div class="container mx-auto my-10" id="contentWrapper">
        <div class="relative iframe-wrapper">
            <iframe src="https://v2-embednotion.com/352f42d3887a436ea929fd498c8c00a0" class="responsive-iframe"></iframe>
            <div class="overlay"></div>
        </div>
    </div>

    <style>
        .iframe-wrapper {
            height: 80vh;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: margin-top 0.3s ease-in-out;
        }

        .responsive-iframe {
            width: 100%;
            height: 100%;
            border: 2px solid #ccc;
            border-radius: 10px;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 80px;
            background-color: #f3f4f6;
            z-index: 1;
        }

        /* Breder maken op pc's */
        @media (min-width: 1024px) {
            .iframe-wrapper {
                max-width: 1000px;
                margin: 0 auto;
            }
        }

        /* Hoogte verhogen en marge toevoegen op mobiele apparaten */
        @media (max-width: 500px) {
            .iframe-wrapper {
                height: 79vh;
                margin-top: 20vh;
                /* Voeg marge toe aan de bovenkant */
            }
        }
    </style>
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var menuButton = document.querySelector('[data-collapse-toggle]');
            var menu = document.getElementById('navbar-default');
            var contentWrapper = document.getElementById('contentWrapper');

            menuButton.addEventListener('click', function() {
                if (menu.classList.contains('hidden')) {
                    menu.classList.remove('hidden');
                    contentWrapper.style.marginTop = '40vh';
                } else {
                    menu.classList.add('hidden');
                    contentWrapper.style.marginTop = '0';
                }
            });
        });
    </script>
</body>

</html>