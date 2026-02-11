<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Restaurant Details &amp; Booking - Youco'Done</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#17cfcf",
                        "background-light": "#f6f8f8",
                        "background-dark": "#112121",
                    },
                    fontFamily: {
                        "display": ["Work Sans"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style type="text/tailwindcss">
        body {
            font-family: "Work Sans", sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#111818] dark:text-white min-h-screen">
<div class="layout-container flex flex-col min-h-screen">
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#dce5e5] dark:border-[#2a3a3a] bg-white dark:bg-[#112121] px-10 py-3 sticky top-0 z-50">
<div class="flex items-center gap-8">
<div class="flex items-center gap-4 text-[#111818] dark:text-white">
<div class="size-8 text-primary">
<svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z" fill="currentColor"></path>
</svg>
</div>
<h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">Youco'Done</h2>
</div>
<label class="flex flex-col min-w-40 h-10 max-w-64 hidden md:flex">
<div class="flex w-full flex-1 items-stretch rounded-lg h-full">
<div class="text-[#638888] flex border-none bg-[#f0f4f4] dark:bg-[#1e2e2e] items-center justify-center pl-4 rounded-l-lg">
<span class="material-symbols-outlined text-xl">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 border-none bg-[#f0f4f4] dark:bg-[#1e2e2e] text-[#111818] dark:text-white focus:ring-0 h-full placeholder:text-[#638888] px-4 rounded-r-lg text-sm" placeholder="Search restaurants..."/>
</div>
</label>
</div>
<div class="flex flex-1 justify-end gap-8 items-center">
<nav class="hidden lg:flex items-center gap-9">
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Explore</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Reservations</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Deals</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">About</a>
</nav>
<div class="flex gap-3">
<button class="flex items-center justify-center rounded-lg size-10 bg-[#f0f4f4] dark:bg-[#1e2e2e] text-[#111818] dark:text-white">
<span class="material-symbols-outlined text-xl">favorite</span>
</button>
<button class="flex items-center justify-center rounded-lg size-10 bg-[#f0f4f4] dark:bg-[#1e2e2e] text-[#111818] dark:text-white">
<span class="material-symbols-outlined text-xl">notifications</span>
</button>
</div>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border border-gray-200 dark:border-gray-700" data-alt="User profile picture" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCeCBv1l0MtL3US36UifMQJwRzfUcFcNKRVSZDZyczGf_6j-0vqmedPdzD2qCfAUtk7J5jbywzzSgXhh4s01VY_JHmb45nX2jaNV0vbvVY6G35TwIjXcZT0BwWeoFfnOZlOrp9uiLQEfeeVas06XRRi3Wucc6aDn_I5i5Y8UKghcLUi05uRrHPtC4YVp6fZIdzJ5xQQPL1vKFbODB5Tf9gEhBW-IRNzRP429Un058IgXmJJQzpCFG9GvU-iw06RcfBcrgQzrPr8czA");'></div>
</div>
</header>
<main class="flex-1 max-w-7xl mx-auto w-full px-4 md:px-10 py-6">
<div class="flex flex-wrap items-center gap-2 mb-6">
<a class="text-[#638888] text-sm font-medium hover:text-primary" href="#">Home</a>
<span class="material-symbols-outlined text-xs text-[#638888]">chevron_right</span>
<a class="text-[#638888] text-sm font-medium hover:text-primary" href="#">London</a>
<span class="material-symbols-outlined text-xs text-[#638888]">chevron_right</span>
<a class="text-[#638888] text-sm font-medium hover:text-primary" href="#">Fine Dining</a>
<span class="material-symbols-outlined text-xs text-[#638888]">chevron_right</span>
<span class="text-primary text-sm font-medium">The Azure Bistro</span>
</div>
<div class="flex flex-col gap-6 mb-8">
<div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4">
<div class="flex gap-6 items-center">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-xl min-h-32 w-32 shadow-sm" data-alt="The Azure Bistro Logo" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCgrw7BCyVPrY-A5KKRlum1n-npVNseRYVvLxT4bp4PdHc4p4EIY-LsWJypLLaHNfPxzEKqevvenMmL_s8uFic_OPsnN-OV8lnz1Fx-M0t6kJ2ucMfePC_xCfYYjJHII0TcIHh3qECvT8iTeo5jRwEqMXdkH3geIetOmf7-XhF1QB2Df-P_WPoRulW6FwHXlOqOOmqSxyTsrI0IaP0zR6_wocv6xY9C0Hfu---8nHAzifcXNHmsWWkj0jVneu6HNv5WtiF83AhIxXk");'></div>
<div class="flex flex-col">
<h1 class="text-[#111818] dark:text-white text-3xl font-bold leading-tight tracking-tight">The Azure Bistro</h1>
<div class="flex items-center gap-2 mt-1">
<div class="flex text-yellow-400">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star_half</span>
</div>
<p class="text-[#638888] text-sm font-medium">Modern French Cuisine • $$$ • 4.8 Stars (1.2k Reviews)</p>
</div>
<p class="text-[#638888] text-sm font-normal mt-1 flex items-center gap-1">
<span class="material-symbols-outlined text-base">location_on</span> 123 Gourmet Way, London
                        </p>
</div>
</div>
<div class="flex gap-3 w-full md:w-auto">
<button class="flex items-center justify-center gap-2 px-6 h-11 bg-[#f0f4f4] dark:bg-[#1e2e2e] text-[#111818] dark:text-white rounded-lg font-bold text-sm flex-1 md:flex-none">
<span class="material-symbols-outlined text-lg">share</span> Share
                    </button>
<button class="flex items-center justify-center gap-2 px-6 h-11 bg-primary text-white rounded-lg font-bold text-sm flex-1 md:flex-none">
<span class="material-symbols-outlined text-lg" style="font-variation-settings: 'FILL' 1">favorite</span> Added to Favorites
                    </button>
</div>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">
<div class="lg:col-span-2 space-y-8">
<div class="grid grid-cols-4 grid-rows-2 gap-3 h-[400px] rounded-xl overflow-hidden shadow-sm">
<div class="col-span-3 row-span-2 bg-cover bg-center" data-alt="Main restaurant dining area" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBV6YNo9MUjz9_gw15Wr9naNMthmfWiQLmorAbFPDknCWM2jwtXSjyCP6ciEAzk24MoNlPdwcj8eSqb7SryJTEddrzQEt-iO4IFJHY3gcuQ9ypMhvA83rOZavYksiDOBnNFBld_2U_sRybN5tYce2yeNAZ269LrvRiDrI_qNTwPO9la7mlvCJXpgDwX-3rlKPC15FLFZZBqMEL96g4yKQkMKj_qNRux0Pp-iSfS3gWZ8LPdeCy5NmOCoPu2Xr6twG-DiXO2O_0Zwfs");'></div>
<div class="col-span-1 row-span-1 bg-cover bg-center" data-alt="Artistic dish presentation" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB6XlVy_TcQMFWnJ3DPiTzrlbaJROgoAy4RRqA5sPAtNCWG_kVWW9Hv92poRdUzPwQB_tgXkQ2OEvYv6CpmUsALyTBdCzfxlXCXz2sAh-yBepm3OF9VgegUb_mSGLHtOiU7R0h2atQvH7YlcAPNsx7CrmIckoJOLkfkysy8UytO4ycMH5IWQLMOAfrbWSGDWySnrM8zcFhVMQDbiu9GJBy1xKg9EMUZ55NSStMUasEQQbXO5KJUsUhm6ZMLHo6fSRsYLBpatzxUtVc");'></div>
<div class="col-span-1 row-span-1 bg-cover bg-center" data-alt="Exterior view of restaurant" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDYvXG8XCn34oE440bW8Ja_3cTO4gzcPGhGVc9xKUpsA8OC6ijmHMqb7AERp141UVjX7DvqBT1EpIH9jjaa1sPp8vEzeMVdjw9VG7cFCzPIZcUhRi32e871LJbtSfF1PipcAr8NNjehMJZv4vwQb3sqRsJuXWJvKNU3hgjUmTazbSaGOLywRSyN27xWVhJvNlngmw3HTKD_WTtsgqATIaTcECDe7_Zvh5XvfzgQfUeH4koyFU27AzNCaROwyKC_HtewozD2o0IYUwc");'></div>
</div>
<div class="border-b border-[#dce5e5] dark:border-[#2a3a3a]">
<div class="flex gap-10">
<a class="flex flex-col items-center border-b-[3px] border-b-primary text-primary pb-3 pt-4 font-bold text-sm" href="#">About</a>
<a class="flex flex-col items-center border-b-[3px] border-b-transparent text-[#638888] pb-3 pt-4 font-bold text-sm hover:text-primary transition-colors" href="#">Menu</a>
<a class="flex flex-col items-center border-b-[3px] border-b-transparent text-[#638888] pb-3 pt-4 font-bold text-sm hover:text-primary transition-colors" href="#">Reviews</a>
<a class="flex flex-col items-center border-b-[3px] border-b-transparent text-[#638888] pb-3 pt-4 font-bold text-sm hover:text-primary transition-colors" href="#">Photos</a>
</div>
</div>
<section class="space-y-4">
<h3 class="text-xl font-bold text-[#111818] dark:text-white">Experience the Art of French Dining</h3>
<p class="text-[#638888] leading-relaxed">
                        Welcome to The Azure Bistro, where tradition meets contemporary culinary innovation. Located in the heart of London, our bistro offers an intimate atmosphere perfect for everything from business lunches to romantic dinners. Our award-winning chef, Jean-Pierre, crafts each dish using only the finest locally-sourced organic ingredients and classic French techniques.
                    </p>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-4">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">wifi</span>
<span class="text-sm font-medium">Free WiFi</span>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">directions_car</span>
<span class="text-sm font-medium">Valet Parking</span>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">deck</span>
<span class="text-sm font-medium">Outdoor Seating</span>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">wine_bar</span>
<span class="text-sm font-medium">Full Bar</span>
</div>
</div>
</section>
<section class="space-y-6">
<div class="flex justify-between items-center border-b border-[#f0f4f4] dark:border-[#2a3a3a] pb-2">
<h3 class="text-xl font-bold text-[#111818] dark:text-white">Popular Dishes</h3>
<button class="text-primary text-sm font-bold">View Full Menu</button>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex gap-4 p-4 rounded-lg bg-white dark:bg-[#1e2e2e] shadow-sm hover:shadow-md transition-shadow">
<div class="w-20 h-20 rounded-lg bg-cover bg-center shrink-0" data-alt="Beef Wellington" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCYGSx1ff482ZsIEOgSCN2LIR5ezXf0Euka1GNsfrjgILYPEN6QKj8TnfQ4XQn3wV6BEeSMX1OGBBNiwL-R1mHYoyxBzjHHpf-Ddu-kvUvZK0S2SDNmKdGdSee-MP-kFMytbO9Sg8pOszfs4zg2fb8CicEQCa4dncYpEptAeJSwvhky4MinmntGJA0lV1jtyEaTnHfG0cAKkddXYiYgX875mNbTdWBJlHri7ApaJmBxJaFH3iz8zyMMt3og_nVv9kBgpGGyys5C54g");'></div>
<div class="flex-1">
<div class="flex justify-between">
<h4 class="font-bold">Beef Wellington</h4>
<span class="text-primary font-bold">£42</span>
</div>
<p class="text-xs text-[#638888] mt-1">Prime beef fillet wrapped in puff pastry with duxelles and prosciutto.</p>
</div>
</div>
<div class="flex gap-4 p-4 rounded-lg bg-white dark:bg-[#1e2e2e] shadow-sm hover:shadow-md transition-shadow">
<div class="w-20 h-20 rounded-lg bg-cover bg-center shrink-0" data-alt="Pan Seared Scallops" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuChQglyCoQE_d00Gk34n-CIi_GylnyzwzL4XDXZ4JtISh87P5MH6FHKtbVMSUkFMBcTTJu8urCm4bMeVUSiUocz7tNP68n2Sy02Ne7YKAFMpVet4gY-MjcdF-aykzYbq_VyV6dAa75g5EV2Ph9FJJ7ON_db6gzxi2fztRp2oh4kZjbx_k3uiamblBlcoZ3bXfZT2WPStM-_pM_uKSA-AucnKew9MeeWU0pZ-0W9HLdjcCAHvZOXuIDJwztY3DMyfI3TLXewK8oB2lM");'></div>
<div class="flex-1">
<div class="flex justify-between">
<h4 class="font-bold">Pan Seared Scallops</h4>
<span class="text-primary font-bold">£28</span>
</div>
<p class="text-xs text-[#638888] mt-1">Diver-caught scallops with pea purée and pancetta crisps.</p>
</div>
</div>
</div>
</section>
<section class="space-y-6">
<div class="flex justify-between items-center border-b border-[#f0f4f4] dark:border-[#2a3a3a] pb-2">
<h3 class="text-xl font-bold text-[#111818] dark:text-white">User Reviews</h3>
<div class="flex items-center gap-2">
<span class="text-sm font-bold">4.8</span>
<div class="flex text-yellow-400">
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1">star</span>
</div>
<span class="text-xs text-[#638888]">(1.2k Reviews)</span>
</div>
</div>
<div class="space-y-6">
<div class="p-6 rounded-xl bg-white dark:bg-[#1e2e2e] shadow-sm border border-[#f0f4f4] dark:border-[#2a3a3a]">
<div class="flex justify-between mb-4">
<div class="flex gap-3 items-center">
<div class="w-10 h-10 rounded-full bg-cover" data-alt="Reviewer Avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA34uONxkqsyWEVBLub--5sWzZWUzx4Tt8jWIltA7w9yJti4_NtP-kAJssWSMhpeeQbV2D4MYNmm8GK9dthZCUdulkUQSeEpXVlAnRRZ_L1AYq6LOzGuE-_83CkjxEjlIQwWnc_nnBt1Udra8z4-ko-GzLQ5PHfK2w8bEFhRvhaEDOzFlWlvPlI99yS-0zPsxCyAxlOtiVFABmtsa0d_80VvO-bsZciC5lbCOlhQufGL5E9_QNTtR3m76I_jyicLTbl4Xh4TgUxfME");'></div>
<div>
<p class="text-sm font-bold">James Sterling</p>
<p class="text-[10px] text-[#638888]">2 days ago</p>
</div>
</div>
<div class="flex text-yellow-400">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
</div>
</div>
<p class="text-sm text-[#111818] dark:text-gray-200">The Beef Wellington was absolutely divine. The service was impeccable, making our anniversary truly special. Highly recommended!</p>
</div>
<div class="p-6 rounded-xl bg-white dark:bg-[#1e2e2e] shadow-sm border border-[#f0f4f4] dark:border-[#2a3a3a]">
<div class="flex justify-between mb-4">
<div class="flex gap-3 items-center">
<div class="w-10 h-10 rounded-full bg-cover" data-alt="Reviewer Avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAQF40Ym1w1n-eb3wsfpu6Bh0H8JWtuLvciyz5RfAk4bWpoHOk0zWG5jYx-GcQTkZ-xnBvdo4pbpJ3jBe7LzOfr00NAl_OgSE00tUk5_mN4P57EnG2ER_zdugJe3o1Ezw8YL7EhD3G_LHYl47eqRbg9LD8iOi0Fibv5qRTXqNeRvxjtMl3XOtFu4i5RUpUS8HmCwCSSKDZTKBheDzIfsXZ6B6dNX5C_GgPwAsVTxjgbhawraLExq0BrNIVq2jUs-E43YejzkvYHavs");'></div>
<div>
<p class="text-sm font-bold">Elena Moretti</p>
<p class="text-[10px] text-[#638888]">1 week ago</p>
</div>
</div>
<div class="flex text-yellow-400">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 0">star</span>
</div>
</div>
<p class="text-sm text-[#111818] dark:text-gray-200">Great atmosphere and a fantastic wine selection. The dessert menu is creative and surprising. Will definitely come back.</p>
</div>
</div>
<button class="w-full py-3 rounded-lg border-2 border-primary text-primary font-bold text-sm hover:bg-primary/5 transition-colors">Read All Reviews</button>
</section>
</div>
<div class="lg:col-span-1">
<div class="sticky top-24 space-y-4">
<div class="bg-white dark:bg-[#1e2e2e] p-6 rounded-2xl shadow-xl border border-[#dce5e5] dark:border-[#2a3a3a]">
<h3 class="text-xl font-bold mb-6 text-[#111818] dark:text-white">Book a Table</h3>
<div class="mb-5">
<label class="block text-xs font-bold text-[#638888] uppercase tracking-wider mb-2">Number of Guests</label>
<div class="relative">
<select class="form-select w-full bg-[#f0f4f4] dark:bg-[#2a3a3a] border-none rounded-lg h-12 text-sm focus:ring-primary appearance-none cursor-pointer">
<option>2 People</option>
<option>3 People</option>
<option>4 People</option>
<option>5 People</option>
<option>6+ People</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-3 text-[#638888] pointer-events-none">group</span>
</div>
</div>
<div class="mb-5">
<div class="flex justify-between items-center mb-2">
<label class="block text-xs font-bold text-[#638888] uppercase tracking-wider">Select Date</label>
<span class="text-[10px] text-primary font-bold uppercase tracking-tight">Nov 2023</span>
</div>
<div class="bg-[#f0f4f4] dark:bg-[#2a3a3a] rounded-lg p-3">
<div class="calendar-grid text-center mb-2">
<div class="text-[10px] font-bold text-[#638888] py-1">S</div>
<div class="text-[10px] font-bold text-[#638888] py-1">M</div>
<div class="text-[10px] font-bold text-[#638888] py-1">T</div>
<div class="text-[10px] font-bold text-[#638888] py-1">W</div>
<div class="text-[10px] font-bold text-[#638888] py-1">T</div>
<div class="text-[10px] font-bold text-[#638888] py-1">F</div>
<div class="text-[10px] font-bold text-[#638888] py-1">S</div>
</div>
<div class="calendar-grid text-center gap-1">
<div class="text-xs text-[#638888] py-2 opacity-30 cursor-not-allowed">29</div>
<div class="text-xs text-[#638888] py-2 opacity-30 cursor-not-allowed">30</div>
<div class="text-xs text-[#638888] py-2 opacity-30 cursor-not-allowed">31</div>
<button class="text-xs font-medium py-2 rounded hover:bg-white dark:hover:bg-[#3a4a4a] transition-colors">1</button>
<button class="text-xs font-medium py-2 rounded hover:bg-white dark:hover:bg-[#3a4a4a] transition-colors">2</button>
<button class="text-xs font-medium py-2 rounded hover:bg-white dark:hover:bg-[#3a4a4a] transition-colors">3</button>
<button class="text-xs font-medium py-2 rounded bg-primary text-white font-bold">4</button>
<button class="text-xs font-medium py-2 rounded hover:bg-white dark:hover:bg-[#3a4a4a] transition-colors">5</button>
<button class="text-xs font-medium py-2 rounded hover:bg-white dark:hover:bg-[#3a4a4a] transition-colors">6</button>
<button class="text-xs font-medium py-2 rounded hover:bg-white dark:hover:bg-[#3a4a4a] transition-colors">7</button>
<button class="text-xs font-medium py-2 rounded hover:bg-white dark:hover:bg-[#3a4a4a] transition-colors">8</button>
<button class="text-xs font-medium py-2 rounded hover:bg-white dark:hover:bg-[#3a4a4a] transition-colors">9</button>
<button class="text-xs font-medium py-2 rounded hover:bg-white dark:hover:bg-[#3a4a4a] transition-colors">10</button>
<button class="text-xs font-medium py-2 rounded hover:bg-white dark:hover:bg-[#3a4a4a] transition-colors">11</button>
<button class="text-xs font-medium py-2 rounded hover:bg-white dark:hover:bg-[#3a4a4a] transition-colors">12</button>
</div>
<div class="flex items-center gap-2 mt-2 px-1">
<span class="size-2 bg-primary rounded-full"></span>
<span class="text-[10px] text-[#638888]">Available for booking</span>
</div>
</div>
</div>
<div class="mb-6">
<label class="block text-xs font-bold text-[#638888] uppercase tracking-wider mb-2">Available Times</label>
<div class="grid grid-cols-4 gap-2">
<button class="h-9 text-[11px] font-bold rounded-lg border-2 border-[#dce5e5] dark:border-[#3a4a4a] hover:border-primary transition-colors text-[#111818] dark:text-white">18:00</button>
<button class="h-9 text-[11px] font-bold rounded-lg border-2 border-primary bg-primary text-white">18:30</button>
<button class="h-9 text-[11px] font-bold rounded-lg border-2 border-[#dce5e5] dark:border-[#3a4a4a] hover:border-primary transition-colors text-[#111818] dark:text-white">19:00</button>
<button class="h-9 text-[11px] font-bold rounded-lg border-2 border-[#dce5e5] dark:border-[#3a4a4a] hover:border-primary transition-colors text-[#111818] dark:text-white">19:30</button>
<button class="h-9 text-[11px] font-bold rounded-lg border-2 border-[#dce5e5] dark:border-[#3a4a4a] hover:border-primary transition-colors text-[#111818] dark:text-white">20:00</button>
<button class="h-9 text-[11px] font-bold rounded-lg border-2 border-[#dce5e5] dark:border-[#3a4a4a] hover:border-primary transition-colors text-[#111818] dark:text-white">20:30</button>
<button class="h-9 text-[11px] font-bold rounded-lg border-2 border-[#dce5e5] dark:border-[#3a4a4a] hover:border-primary transition-colors text-[#111818] dark:text-white">21:00</button>
<button class="h-9 text-[11px] font-bold rounded-lg border-2 border-[#dce5e5] dark:border-[#3a4a4a] opacity-50 cursor-not-allowed text-[#638888]">21:30</button>
</div>
</div>
<div class="mb-6 p-4 rounded-xl bg-primary/5 border border-primary/20">
<div class="flex justify-between items-start mb-2">
<div class="flex flex-col">
<span class="text-xs font-bold text-primary uppercase tracking-wider">Required Deposit</span>
<span class="text-xs text-[#638888]">Refundable up to 24h before</span>
</div>
<span class="text-xl font-bold text-primary">£20.00</span>
</div>
<div class="flex items-center gap-2 mt-3 pt-3 border-t border-primary/10">
<span class="material-symbols-outlined text-sm text-green-500" style="font-variation-settings: 'FILL' 1">verified_user</span>
<span class="text-[10px] font-medium text-[#638888]">Secure Payment Powered by Youco'Done</span>
</div>
</div>
<button class="w-full bg-primary text-white h-14 rounded-xl font-bold text-base shadow-lg shadow-primary/20 hover:bg-opacity-90 transition-all flex items-center justify-center gap-3">
<span class="material-symbols-outlined">payments</span>
                            Pay &amp; Confirm Reservation
                        </button>
<div class="flex items-center justify-center gap-1.5 mt-4">
<span class="material-symbols-outlined text-sm text-[#638888]">lock</span>
<span class="text-[10px] text-[#638888]">Encrypted &amp; secure checkout</span>
</div>
</div>
<div class="bg-white dark:bg-[#1e2e2e] p-4 rounded-2xl shadow-sm border border-[#dce5e5] dark:border-[#2a3a3a]">
<div class="w-full h-40 bg-gray-200 dark:bg-gray-800 rounded-lg mb-3 bg-cover bg-center" data-alt="Map location of the restaurant" data-location="London" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCu02zS8AMjYvjVmRrygwxBe3zWhIhu3XV1hHm53M3gD36BnwTI6H8Tm70GIKSlgH6fYppW4aIRFiUJRU1KqrYeb2DBleGw7hq_ccrrep2UZh6ZtDtZPD6JfNm_K1TS5iO9S5RNoGYr4DVdVwXIsduBpf2NxhtLQrT5OmnOnZgBmvMz-M9wdGTsUi3YytltcHmcZ3GiS3NURCb5LJB-bq4YisLC3xFghKKI-ZnMVwYReDaU7uq75GAO_nRze9clZhTGXorAs4E-okw');"></div>
<h4 class="text-sm font-bold">How to get here</h4>
<p class="text-xs text-[#638888] mt-1">Short walk from Piccadilly Circus Station. Valet service available at the front entrance.</p>
</div>
</div>
</div>
</div>
</main>
<footer class="bg-white dark:bg-[#112121] border-t border-[#dce5e5] dark:border-[#2a3a3a] py-12 mt-20">
<div class="max-w-7xl mx-auto px-10 grid grid-cols-1 md:grid-cols-4 gap-10">
<div class="col-span-1 md:col-span-2">
<div class="flex items-center gap-3 text-primary mb-4">
<span class="material-symbols-outlined text-3xl font-bold">restaurant_menu</span>
<h2 class="text-xl font-bold text-[#111818] dark:text-white">Youco'Done</h2>
</div>
<p class="text-[#638888] text-sm max-w-sm">Elevating your dining experiences since 2018. Discover, reserve, and enjoy the best culinary spots in your city.</p>
</div>
<div>
<h5 class="font-bold mb-4">For Diners</h5>
<ul class="space-y-2 text-sm text-[#638888]">
<li><a class="hover:text-primary" href="#">Browse Restaurants</a></li>
<li><a class="hover:text-primary" href="#">Loyalty Program</a></li>
<li><a class="hover:text-primary" href="#">Mobile App</a></li>
<li><a class="hover:text-primary" href="#">Help Center</a></li>
</ul>
</div>
<div>
<h5 class="font-bold mb-4">For Owners</h5>
<ul class="space-y-2 text-sm text-[#638888]">
<li><a class="hover:text-primary" href="#">List your Restaurant</a></li>
<li><a class="hover:text-primary" href="#">Owner Dashboard</a></li>
<li><a class="hover:text-primary" href="#">Success Stories</a></li>
<li><a class="hover:text-primary" href="#">Partnership Inquiries</a></li>
</ul>
</div>
</div>
<div class="max-w-7xl mx-auto px-10 pt-10 mt-10 border-t border-[#f0f4f4] dark:border-[#2a3a3a] flex flex-col md:flex-row justify-between gap-4">
<p class="text-xs text-[#638888]">© 2023 Youco'Done Inc. All rights reserved.</p>
<div class="flex gap-6">
<a class="text-xs text-[#638888] hover:text-primary" href="#">Privacy Policy</a>
<a class="text-xs text-[#638888] hover:text-primary" href="#">Terms of Service</a>
</div>
</div>
</footer>
</div>

</body></html>