<?php
include "includes/discord.inc.php";
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jaïr - Projecten</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/js/typewrite.js"></script> <!-- Add this line to include the Typewriter.js script -->
</head>

<body class="max-w-screen px-1">

    <div class="overflow-hidden">
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

    <div class="absolute left-0 top-0 z-10 sm:z-50 w-full">
        <header class="container mx-auto mt-4">
            <?php include "includes/ui/menu.inc.php"; ?>
        </header>
        <section class="mt-32">
            <h1 id="typewriter" class="text-center text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl text-black font-bold w-3/4 lg:w-1/2 mx-auto"></h1>

            <div class="text-center mt-6 flex justify-center gap-2">
                <svg class="h-5 sm:mr-2" viewBox="0 -28.5 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                </svg>
                </a>

            </div>
        </section>

        <section class="container mx-auto mt-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Begin project item -->
                <div class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center">
                    <img src="/assets/images/Screenshot_2024-07-09_at_11.20.11_3.jpeg" alt="Project 1 Logo" class="custom-img mb-4">
                    <h1>CalSync</h1>
                    <br>
                    <a href="https://github.com/Cybon1/CalendarToolBreeze" class="bg-gray-800 text-white py-2 px-4 rounded-full hover:bg-gray-700" target="_blank">View on GitHub</a>
                </div>
                <!-- Repeat project items as needed -->
                <!-- Add more projects here -->
            </div>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const typewriter = new Typewriter('#typewriter', {
                loop: false,
                delay: 75,
                cursor: '|',
            });

            typewriter.typeString('Projecten').start();
        });
    </script>
</body>

</html>