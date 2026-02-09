<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Restaurant Search Results | Youco'Done</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
<style>
        body {
            font-family: "Work Sans", sans-serif;
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #e2e8f0;
            border-radius: 10px;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark min-h-screen font-display transition-colors duration-300">
<!-- Top Navigation Bar -->
<header class="sticky top-0 z-50 bg-white dark:bg-background-dark border-b border-[#f0f4f4] dark:border-white/10 px-6 md:px-10 py-3">
<div class="max-w-[1440px] mx-auto flex items-center justify-between gap-4">
<div class="flex items-center gap-8">
<div class="flex items-center gap-2 text-primary">
<div class="size-8">
<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z" fill="currentColor"></path>
</svg>
</div>
<h2 class="text-[#111818] dark:text-white text-xl font-bold leading-tight tracking-tight">Youco'Done</h2>
</div>
<div class="hidden md:flex flex-col min-w-[300px] h-10">
<div class="flex w-full flex-1 items-stretch rounded-lg h-full overflow-hidden bg-[#f0f4f4] dark:bg-white/5 border border-transparent focus-within:border-primary">
<div class="text-[#638888] flex items-center justify-center pl-4">
<span class="material-symbols-outlined text-[20px]">search</span>
</div>
<input class="w-full border-none bg-transparent text-[#111818] dark:text-white focus:ring-0 placeholder:text-[#638888] px-4 text-sm" placeholder="Search cuisines, restaurants..." value=""/>
</div>
</div>
</div>
<div class="flex items-center gap-6">
<nav class="hidden lg:flex items-center gap-6">
<a class="text-[#111818] dark:text-white text-sm font-medium hover:text-primary transition-colors" href="#">Explore</a>
<a class="text-[#111818] dark:text-white text-sm font-medium hover:text-primary transition-colors" href="#">Reservations</a>
<a class="text-[#111818] dark:text-white text-sm font-medium hover:text-primary transition-colors" href="#">Favorites</a>
</nav>
<div class="flex items-center gap-4">
<button class="flex items-center justify-center rounded-lg h-10 w-10 bg-[#f0f4f4] dark:bg-white/5 text-[#111818] dark:text-white hover:bg-primary/20 transition-colors">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="size-10 rounded-full border-2 border-primary/20 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="User profile avatar smiling" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDgez-mNM6fm5j0HWaySAaSfRrss3sWvRDYb8IpRZoRYHFx0aUH01aATHgQJ1V6sXURe3NZcxzWbxQr4NGht-Mm-EPyXrcmTz9_TSApRDax7_nu4RNzMdIx7KPb5uZWfoyliBtM1NR7lfb8aFJrlklYqDC9Y29k-LdeBt3FG29J9yicNBn59tU612CIG0lEZ1PuD8bA3BqbbOVtlE4p2NujmIbCkzoHtGTkYMzFkogBvkkX-jX220MgAEdGwQBN5q-wB-CKL7KVdwg"/>
</div>
</div>
</div>
</div>
</header>
<main class="flex flex-col h-[calc(100vh-64px)] overflow-hidden">
<!-- Filter Bar -->
<div class="bg-white dark:bg-background-dark border-b border-[#f0f4f4] dark:border-white/10 px-6 py-3 flex items-center justify-between">
<div class="flex gap-3 overflow-x-auto custom-scrollbar pb-1">
<button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f0f4f4] dark:bg-white/5 px-4 text-[#111818] dark:text-white border border-transparent hover:border-primary transition-all">
<span class="text-sm font-medium">Cuisine Type</span>
<span class="material-symbols-outlined text-[18px]">expand_more</span>
</button>
<button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f0f4f4] dark:bg-white/5 px-4 text-[#111818] dark:text-white border border-transparent hover:border-primary transition-all">
<span class="text-sm font-medium">Price Range</span>
<span class="material-symbols-outlined text-[18px]">expand_more</span>
</button>
<button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f0f4f4] dark:bg-white/5 px-4 text-[#111818] dark:text-white border border-transparent hover:border-primary transition-all">
<span class="text-sm font-medium">Rating</span>
<span class="material-symbols-outlined text-[18px]">expand_more</span>
</button>
<button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f0f4f4] dark:bg-white/5 px-4 text-[#111818] dark:text-white border border-transparent hover:border-primary transition-all">
<span class="text-sm font-medium">Distance</span>
<span class="material-symbols-outlined text-[18px]">expand_more</span>
</button>
</div>
<div class="hidden sm:flex items-center gap-2">
<span class="text-[#638888] text-xs font-medium uppercase tracking-wider">Sort By:</span>
<select class="bg-transparent border-none text-sm font-bold text-[#111818] dark:text-white focus:ring-0 py-0 pl-0">
<option>Recommended</option>
<option>Highest Rated</option>
<option>Newest</option>
</select>
</div>
</div>
<div class="flex flex-1 overflow-hidden">
<!-- Sidebar Map -->
<div class="hidden lg:block w-1/3 xl:w-1/4 border-r border-[#f0f4f4] dark:border-white/10 relative">
<div class="absolute inset-0 bg-[#e5e7eb] dark:bg-background-dark">
<img class="w-full h-full object-cover grayscale-[0.5] contrast-[0.8]" data-alt="City map with various restaurant pins highlighted in primary color" data-location="New York City Manhattan Map" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBfy0wY9eEnCj4LtJo9_yD1_fSiITn2zvs5Sg9CZtjnhky294ZMupcz71Rx6Qb-yks9W-56aJ2DWiEcru2M-qkYbtiAtmO8vNSUG_8gCzzLkq-4PltoEwIrjVyAgll2vEzXMLLxoSqwVFxlUWVYmUgAtRZurLyYa3Hp8CZZ8fkCNmZ92kqUNSvESvdxvyrY_CJz44p6iRiuJlML6DgwcyIGrOthWKHGVGsNogSrZ4U_GF8-2SRN8qHXo0xtSm_D0owEp2-8v3x2nCA"/>
<!-- Overlay Controls -->
<div class="absolute top-4 left-4 flex flex-col gap-2">
<button class="bg-white dark:bg-background-dark p-2 rounded shadow-md text-[#111818] dark:text-white hover:text-primary">
<span class="material-symbols-outlined">add</span>
</button>
<button class="bg-white dark:bg-background-dark p-2 rounded shadow-md text-[#111818] dark:text-white hover:text-primary">
<span class="material-symbols-outlined">remove</span>
</button>
</div>
</div>
</div>
<!-- Content Area -->
<div class="flex-1 flex flex-col overflow-y-auto custom-scrollbar">
<div class="px-6 pt-6">
<h1 class="text-[#111818] dark:text-white text-2xl font-bold leading-tight">124 restaurants found in Manhattan</h1>
<p class="text-[#638888] text-sm mt-1">Book a table today and earn 2x points</p>
</div>
<!-- Grid of Restaurant Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 p-6">
<!-- Card 1 -->
<div class="group bg-white dark:bg-white/5 rounded-xl overflow-hidden border border-[#f0f4f4] dark:border-white/10 shadow-sm hover:shadow-lg transition-all duration-300">
<div class="relative aspect-video">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Modern interior of a luxury seafood restaurant" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCflR9fevHxi1mdYpBQVwwXLPMsKLP69ErTkLaPlUd3Oo_yHIPA9u5EsXqYkiLnv9dZLzvvNfj6eb5SMr3CC4Sww_Te8iCwBkXZIEPFktfrO9PH0cGGNQUgwr2TJaceqWniKFzOus2POitGzE_4_h6ZB7GoAl97K03wZ-aNxOJniyJaoWlTWOKs_5nKHcUZXXgj2B3tqT-iVTv-zqCXeoPw-zut4npq9OfC77V6_LWaBkhGwBgB6VcB31aMaLJ_c_R6YH08dz7boug"/>
<button class="absolute top-3 right-3 p-2 rounded-full bg-white/80 backdrop-blur-sm text-[#111818] hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-[20px]">favorite</span>
</button>
<div class="absolute bottom-3 left-3 px-2 py-1 bg-primary text-white text-[10px] font-bold rounded uppercase">Promoted</div>
</div>
<div class="p-4 flex flex-col gap-3">
<div>
<h3 class="text-[#111818] dark:text-white text-lg font-bold">The Blue Lobster</h3>
<div class="flex items-center justify-between mt-1">
<p class="text-[#638888] text-sm">Seafood • $$$ • Upper East Side</p>
<div class="flex items-center gap-1 text-primary">
<span class="material-symbols-outlined text-[16px] fill-1">star</span>
<span class="text-sm font-bold text-[#111818] dark:text-white">4.8</span>
<span class="text-[#638888] text-xs font-normal">(240)</span>
</div>
</div>
</div>
<button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-2.5 rounded-lg transition-colors flex items-center justify-center gap-2">
                                Book Now
                            </button>
</div>
</div>
<!-- Card 2 -->
<div class="group bg-white dark:bg-white/5 rounded-xl overflow-hidden border border-[#f0f4f4] dark:border-white/10 shadow-sm hover:shadow-lg transition-all duration-300">
<div class="relative aspect-video">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Cozy indian dining room with warm lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBE4tFtvgO0Q0SRUBc2YNdUyivfe11PCKR7NRp5s6nULPiiMtygsXgSZ_UGIHzbflirw8LOBQZl9W3Pdx5cSDcZogexTb3pYR2MSLSlby8DYexucHVcMWQv0oKiJL_38jzbZhB7cAYm1x_uPV6AllrIbzEcZmxhvo0XPzs5ewt11CObnEqkfeFKeFg6XzJOASfsJYHN_5r9MB4wfb03KSb8SN021KsCMPm00upATmr3udcCwGfIGC4YgdoYSnKDier-6OKELmfg0MM"/>
<button class="absolute top-3 right-3 p-2 rounded-full bg-white/80 backdrop-blur-sm text-red-500">
<span class="material-symbols-outlined text-[20px] fill-1">favorite</span>
</button>
</div>
<div class="p-4 flex flex-col gap-3">
<div>
<h3 class="text-[#111818] dark:text-white text-lg font-bold">Saffron Spice</h3>
<div class="flex items-center justify-between mt-1">
<p class="text-[#638888] text-sm">Indian • $$ • Chelsea</p>
<div class="flex items-center gap-1 text-primary">
<span class="material-symbols-outlined text-[16px] fill-1">star</span>
<span class="text-sm font-bold text-[#111818] dark:text-white">4.5</span>
<span class="text-[#638888] text-xs font-normal">(180)</span>
</div>
</div>
</div>
<button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-2.5 rounded-lg transition-colors flex items-center justify-center gap-2">
                                Book Now
                            </button>
</div>
</div>
<!-- Card 3 -->
<div class="group bg-white dark:bg-white/5 rounded-xl overflow-hidden border border-[#f0f4f4] dark:border-white/10 shadow-sm hover:shadow-lg transition-all duration-300">
<div class="relative aspect-video">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Rustic italian pasta house interior" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCTFXyd4G-uEjQmb5UiOh9fczy9Bq_Q2arcLe25ygzMgCufVBJQUxPXWc4ERHX6x0faWVVdZLUW5CVF-b3O0ueYhoVSy3_orkGrvvjJVMOHFqkr6Uk5jAAriHSzF75ZH9S3e-eCv-E5E2hqMYXMOvsmnIdQb0gc7Z1LiHP1xp23V_gAvxYdQiq4D4SBkmP_Hd9xyWXm279Ka71ZwCmpcZEcvjSw87EodvVp5nt89WE0QM-ua2F-dTK_6MC3PZ8wX6OFhUxs7nEc898"/>
<button class="absolute top-3 right-3 p-2 rounded-full bg-white/80 backdrop-blur-sm text-[#111818] hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-[20px]">favorite</span>
</button>
</div>
<div class="p-4 flex flex-col gap-3">
<div>
<h3 class="text-[#111818] dark:text-white text-lg font-bold">Pasta Palace</h3>
<div class="flex items-center justify-between mt-1">
<p class="text-[#638888] text-sm">Italian • $$ • Greenwich Village</p>
<div class="flex items-center gap-1 text-primary">
<span class="material-symbols-outlined text-[16px] fill-1">star</span>
<span class="text-sm font-bold text-[#111818] dark:text-white">4.2</span>
<span class="text-[#638888] text-xs font-normal">(310)</span>
</div>
</div>
</div>
<button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-2.5 rounded-lg transition-colors flex items-center justify-center gap-2">
                                Book Now
                            </button>
</div>
</div>
<!-- Card 4 -->
<div class="group bg-white dark:bg-white/5 rounded-xl overflow-hidden border border-[#f0f4f4] dark:border-white/10 shadow-sm hover:shadow-lg transition-all duration-300">
<div class="relative aspect-video">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Lush green vegan restaurant with plants" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_eahnd0yNoZHdWAZeqIKAPXTzGhy4QxEAQHS3MS86txbpVlqbD0aTQp6kherFdOGcL2NV6tdpPvC-tNxuw5i7oLt0Snmy8lBpyER99chofXoHPvv1PJ2LILgFYtevQG_xJAfCSzOiogysA372pDg8F2jzuXJ8XFoXJwS4joEBqwiu-rOhKyaDvTlYGuZ2ydCC4SDUSZChDiR2NQ3Q9DEl_oUPQ022oNjT04JXhRC6ygu_ATO7OyohZQhhMLxpkawM85NjiiHqXbo"/>
<button class="absolute top-3 right-3 p-2 rounded-full bg-white/80 backdrop-blur-sm text-[#111818] hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-[20px]">favorite</span>
</button>
</div>
<div class="p-4 flex flex-col gap-3">
<div>
<h3 class="text-[#111818] dark:text-white text-lg font-bold">Green Garden</h3>
<div class="flex items-center justify-between mt-1">
<p class="text-[#638888] text-sm">Vegan • $$$ • Soho</p>
<div class="flex items-center gap-1 text-primary">
<span class="material-symbols-outlined text-[16px] fill-1">star</span>
<span class="text-sm font-bold text-[#111818] dark:text-white">4.7</span>
<span class="text-[#638888] text-xs font-normal">(95)</span>
</div>
</div>
</div>
<button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-2.5 rounded-lg transition-colors flex items-center justify-center gap-2">
                                Book Now
                            </button>
</div>
</div>
<!-- Card 5 -->
<div class="group bg-white dark:bg-white/5 rounded-xl overflow-hidden border border-[#f0f4f4] dark:border-white/10 shadow-sm hover:shadow-lg transition-all duration-300">
<div class="relative aspect-video">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Minimalist japanese sushi bar setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCP6MibZPdpRm05yPIjcst5bOu4gNwhSud4LV7Gz_DFFAWUHnd35z64E0BNzEEyBwlZlom4M_ELaPN6iK3Gnx5jcey7KU_4IFBtTyuBDLwnjnlo50MaBW09tSEM5al7OppzxNYYGof_77i8flrSpOcc2c42Ej6K6ayumWrK8uXsoThlof4SiGLUZ1ReOJ65rIcHL0XVggsM7IEH7kxpkZ7-QPEvrGHK5ltTimQMUcRsoTKh-Yc_hTQCHz9mQUjZ1T9R4sSCAvwjLRk"/>
<button class="absolute top-3 right-3 p-2 rounded-full bg-white/80 backdrop-blur-sm text-[#111818] hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-[20px]">favorite</span>
</button>
</div>
<div class="p-4 flex flex-col gap-3">
<div>
<h3 class="text-[#111818] dark:text-white text-lg font-bold">Sushi Zen</h3>
<div class="flex items-center justify-between mt-1">
<p class="text-[#638888] text-sm">Japanese • $$$$ • Midtown</p>
<div class="flex items-center gap-1 text-primary">
<span class="material-symbols-outlined text-[16px] fill-1">star</span>
<span class="text-sm font-bold text-[#111818] dark:text-white">4.9</span>
<span class="text-[#638888] text-xs font-normal">(420)</span>
</div>
</div>
</div>
<button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-2.5 rounded-lg transition-colors flex items-center justify-center gap-2">
                                Book Now
                            </button>
</div>
</div>
<!-- Card 6 -->
<div class="group bg-white dark:bg-white/5 rounded-xl overflow-hidden border border-[#f0f4f4] dark:border-white/10 shadow-sm hover:shadow-lg transition-all duration-300">
<div class="relative aspect-video">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Classic wood-paneled American steakhouse" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBs-e5nMLgzHEXlDh2k7W-hAQ3RcX54dux8jlwl0_cT9QYzyI3d2Th5rdlwU9RIQVQmEkVSYB1vevARv3f3c1kf9LpCGlrxUUzLvBgtoGeAB0yHZKrb-_bQA2ekEOIGRDdxA6pw60JRXnl_Sr4vhJlZvbv_Pcvi8P7lM7F-jseBfY9nelGqTRcqcN8Z00qsCBTJewmXjg2WtnRLHCC94c4yxtyLYeF6a0kwUL0HiGKfYv6MGSfMfMtkiY9WEaoshVNQrZxM8Zautqk"/>
<button class="absolute top-3 right-3 p-2 rounded-full bg-white/80 backdrop-blur-sm text-[#111818] hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-[20px]">favorite</span>
</button>
</div>
<div class="p-4 flex flex-col gap-3">
<div>
<h3 class="text-[#111818] dark:text-white text-lg font-bold">Steakhouse 71</h3>
<div class="flex items-center justify-between mt-1">
<p class="text-[#638888] text-sm">American • $$$$ • Financial District</p>
<div class="flex items-center gap-1 text-primary">
<span class="material-symbols-outlined text-[16px] fill-1">star</span>
<span class="text-sm font-bold text-[#111818] dark:text-white">4.6</span>
<span class="text-[#638888] text-xs font-normal">(150)</span>
</div>
</div>
</div>
<button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-2.5 rounded-lg transition-colors flex items-center justify-center gap-2">
                                Book Now
                            </button>
</div>
</div>
</div>
<!-- Pagination -->
<div class="mt-auto p-8 flex items-center justify-center gap-2 border-t border-[#f0f4f4] dark:border-white/10 bg-white/50 dark:bg-background-dark/50 backdrop-blur-sm">
<button class="flex items-center justify-center size-10 rounded-lg border border-[#f0f4f4] dark:border-white/10 hover:bg-primary hover:text-white transition-colors">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="flex items-center justify-center size-10 rounded-lg bg-primary text-white font-bold">1</button>
<button class="flex items-center justify-center size-10 rounded-lg hover:bg-primary/10 dark:text-white transition-colors">2</button>
<button class="flex items-center justify-center size-10 rounded-lg hover:bg-primary/10 dark:text-white transition-colors">3</button>
<span class="text-[#638888] px-2">...</span>
<button class="flex items-center justify-center size-10 rounded-lg hover:bg-primary/10 dark:text-white transition-colors">12</button>
<button class="flex items-center justify-center size-10 rounded-lg border border-[#f0f4f4] dark:border-white/10 hover:bg-primary hover:text-white transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
</div>
</main>
<!-- Floating Map Toggle (Mobile Only) -->
<button class="lg:hidden fixed bottom-6 left-1/2 -translate-x-1/2 z-50 bg-primary text-white px-6 py-3 rounded-full shadow-xl flex items-center gap-2 font-bold">
<span class="material-symbols-outlined">map</span>
        View Map
    </button>
</body></html>