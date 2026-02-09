<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Youco'Done | Find Your Perfect Table</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
        body { font-family: 'Work Sans', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#111818] dark:text-white transition-colors duration-300">
<!-- Top Navigation -->
<header class="sticky top-0 z-50 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-[#f0f4f4] dark:border-[#2a3a3a]">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-16">
<div class="flex items-center gap-3">
<div class="size-8 text-primary">
<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z" fill="currentColor"></path>
</svg>
</div>
<span class="text-xl font-black tracking-tight dark:text-white">Youco'Done</span>
</div>
<div class="hidden md:flex items-center gap-8">
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">List your restaurant</a>
<div class="flex items-center gap-3">
<a href="\login"  class="px-5 py-2 text-sm font-bold bg-[#f0f4f4] dark:bg-[#2a3a3a] rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">Login</a>
<a href="register" class="px-5 py-2 text-sm font-bold bg-primary text-white rounded-lg hover:brightness-110 transition-all">Signup</a>
</div>
</div>
<div class="md:hidden">
<span class="material-symbols-outlined text-3xl">menu</span>
</div>
</div>
</div>
</header>
<main class="flex flex-col">
<!-- Hero Section -->
<section class="relative w-full @container">
<div class="px-4 py-8 md:px-10 lg:px-40">
<div class="flex min-h-[520px] flex-col gap-8 bg-cover bg-center bg-no-repeat rounded-xl items-center justify-center p-6 shadow-2xl overflow-hidden" data-alt="Modern restaurant interior with warm lighting" style='background-image: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.7) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDrG-UP_XrRrxQeCGuXK7xs6bubJggGg5sfy_YkN5I43hy6OC2GMreB_H-BGFh2x4pXqn7p3doH6M4WPDBilS2pHGz9yv-rCRzwKbGNU35frp0saNnmmjyn7GygaeDZPzJIN04TPgr2jDn0k5JpKQLtJFzDwwwPrnQRB_HpvAa1d2bpsrPauEfLyj9r0dgflgiS_wmMjJ2-F21hPju0RA-w3SrbAaz2OhTsQe4Woq3SpcIITuxnEs8d3JpiXLgNrCbjA2ku9D5kKnE");'>
<div class="flex flex-col gap-4 text-center max-w-2xl">
<h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-tight">
                            Find your table for any occasion.
                        </h1>
<p class="text-gray-200 text-base md:text-lg font-medium">
                            Discover the best restaurants and book your table instantly.
                        </p>
</div>
<!-- Enhanced Search Bar -->
<div class="w-full max-w-4xl bg-white dark:bg-background-dark p-2 rounded-xl shadow-2xl flex flex-col md:flex-row items-center gap-2">
<div class="flex flex-1 w-full items-center border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-700 px-3 py-2">
<span class="material-symbols-outlined text-gray-400 mr-2">location_on</span>
<input class="w-full border-none focus:ring-0 text-sm bg-transparent placeholder:text-gray-400 dark:text-white" placeholder="Location" type="text"/>
</div>
<div class="flex flex-1 w-full items-center border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-700 px-3 py-2">
<span class="material-symbols-outlined text-gray-400 mr-2">restaurant</span>
<input class="w-full border-none focus:ring-0 text-sm bg-transparent placeholder:text-gray-400 dark:text-white" placeholder="Cuisine or restaurant" type="text"/>
</div>
<div class="flex flex-1 w-full items-center px-3 py-2">
<span class="material-symbols-outlined text-gray-400 mr-2">schedule</span>
<input class="w-full border-none focus:ring-0 text-sm bg-transparent placeholder:text-gray-400 dark:text-white" placeholder="Time" type="text"/>
</div>
<button class="w-full md:w-auto px-8 py-3 bg-primary text-[#112121] font-bold rounded-lg hover:brightness-105 transition-all">
                            Search
                        </button>
</div>
</div>
</div>
</section>
<!-- Cuisine Categories -->
<section class="px-4 py-10 md:px-10 lg:px-40">
<div class="flex items-center justify-between mb-6 px-4">
<h2 class="text-2xl font-bold tracking-tight">Explore by Cuisine</h2>
<a class="text-primary font-semibold text-sm hover:underline" href="#">View all</a>
</div>
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 p-4">
<div class="flex flex-col items-center gap-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-[#1a2e2e] p-6 hover:border-primary hover:shadow-md transition-all cursor-pointer group">
<div class="bg-primary/10 rounded-full p-4 group-hover:bg-primary/20 transition-colors">
<span class="material-symbols-outlined text-primary text-3xl">restaurant_menu</span>
</div>
<span class="font-bold text-sm">Italian</span>
</div>
<div class="flex flex-col items-center gap-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-[#1a2e2e] p-6 hover:border-primary hover:shadow-md transition-all cursor-pointer group">
<div class="bg-primary/10 rounded-full p-4 group-hover:bg-primary/20 transition-colors">
<span class="material-symbols-outlined text-primary text-3xl">ramen_dining</span>
</div>
<span class="font-bold text-sm">Japanese</span>
</div>
<div class="flex flex-col items-center gap-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-[#1a2e2e] p-6 hover:border-primary hover:shadow-md transition-all cursor-pointer group">
<div class="bg-primary/10 rounded-full p-4 group-hover:bg-primary/20 transition-colors">
<span class="material-symbols-outlined text-primary text-3xl">bakery_dining</span>
</div>
<span class="font-bold text-sm">French</span>
</div>
<div class="flex flex-col items-center gap-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-[#1a2e2e] p-6 hover:border-primary hover:shadow-md transition-all cursor-pointer group">
<div class="bg-primary/10 rounded-full p-4 group-hover:bg-primary/20 transition-colors">
<span class="material-symbols-outlined text-primary text-3xl">dinner_dining</span>
</div>
<span class="font-bold text-sm">Mexican</span>
</div>
<div class="flex flex-col items-center gap-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-[#1a2e2e] p-6 hover:border-primary hover:shadow-md transition-all cursor-pointer group">
<div class="bg-primary/10 rounded-full p-4 group-hover:bg-primary/20 transition-colors">
<span class="material-symbols-outlined text-primary text-3xl">kebab_dining</span>
</div>
<span class="font-bold text-sm">Steaks</span>
</div>
<div class="flex flex-col items-center gap-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-[#1a2e2e] p-6 hover:border-primary hover:shadow-md transition-all cursor-pointer group">
<div class="bg-primary/10 rounded-full p-4 group-hover:bg-primary/20 transition-colors">
<span class="material-symbols-outlined text-primary text-3xl">eco</span>
</div>
<span class="font-bold text-sm">Vegan</span>
</div>
</div>
</section>
<!-- Featured Restaurants Grid -->
<section class="px-4 py-10 md:px-10 lg:px-40 bg-white dark:bg-[#152626]/50">
<div class="flex items-center justify-between mb-8 px-4">
<h2 class="text-2xl font-bold tracking-tight">Trending restaurants in your area</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4">
<!-- Card 1 -->
<div class="group flex flex-col overflow-hidden rounded-xl border border-gray-100 dark:border-gray-800 bg-white dark:bg-background-dark hover:shadow-xl transition-all">
<div class="relative h-60 overflow-hidden">
<div class="absolute top-3 right-3 z-10 bg-white/90 dark:bg-black/50 p-1.5 rounded-full cursor-pointer hover:text-red-500 transition-colors">
<span class="material-symbols-outlined">favorite</span>
</div>
<img class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Gourmet dish presentation at a fine dining restaurant" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAF1LDK8Kxz9QkNfO66gS-PTTZj0Sl6gvTeJbxMJVeeR_guBDtIG6n5iSOtQvkjTrmzXdroi4FXxc7mecw1bCaZbUGQI7jUaKDSWh9Eyw-MOp99XZ6sKSu6BB8HqJiSw6BMLRFnIBDo386jtksNYPpbEAEYnjfduDwg8lJX8DX9Jj0xdPspqKMBYlyIXo12vVmOO9A_37lVgBwyqMdw60_2NIO990e5SRQOBUvto-6vsUtmjp1ZtJ5Gz2aEF5Hp9bVn1uBrv9U_Zg"/>
</div>
<div class="p-5 flex flex-col gap-2">
<div class="flex justify-between items-start">
<h3 class="text-lg font-bold group-hover:text-primary transition-colors">The Luminary Grill</h3>
<div class="flex items-center gap-1 bg-green-100 dark:bg-green-900/30 px-2 py-0.5 rounded text-green-700 dark:text-green-400 text-xs font-bold">
<span>4.8</span>
<span class="material-symbols-outlined text-xs">star</span>
</div>
</div>
<p class="text-gray-500 dark:text-gray-400 text-sm">Contemporary American • $$$ • Manhattan</p>
<div class="flex items-center gap-2 mt-2">
<span class="material-symbols-outlined text-primary text-sm">confirmation_number</span>
<span class="text-xs font-semibold text-gray-600 dark:text-gray-300">Booked 52 times today</span>
</div>
<button class="mt-4 w-full py-2 bg-primary/10 text-primary hover:bg-primary hover:text-white font-bold rounded-lg transition-all">Book Now</button>
</div>
</div>
<!-- Card 2 -->
<div class="group flex flex-col overflow-hidden rounded-xl border border-gray-100 dark:border-gray-800 bg-white dark:bg-background-dark hover:shadow-xl transition-all">
<div class="relative h-60 overflow-hidden">
<div class="absolute top-3 right-3 z-10 bg-white/90 dark:bg-black/50 p-1.5 rounded-full cursor-pointer hover:text-red-500 transition-colors">
<span class="material-symbols-outlined">favorite</span>
</div>
<img class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Close up of sushi platter in Japanese restaurant" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBp0mUcH5rcKgeFICQHVDyVq1OAGMcE7v_cWK_lWvDq_pbpD_zggXm7-iM0M605_OCjS1kumvOlZfz8H9zH7EkBpzk5yXx2eJpbax8V7GYGth4WSL0sohlbX9Xn0tQySVmE6f-OoBprZ3VR_O7rFhCDzuDCxZsok0pKvbIj_S24TiYrSEKgNpsPF7gTQw50554zL3zCvpVCb5Q2BQeQGFjaaOaYGbCrjS7GtldlpQVP8ox64TGLhv6nvWYXBsoNNWKRWZcllJX4Uuk"/>
</div>
<div class="p-5 flex flex-col gap-2">
<div class="flex justify-between items-start">
<h3 class="text-lg font-bold group-hover:text-primary transition-colors">Sora Sushi Bar</h3>
<div class="flex items-center gap-1 bg-green-100 dark:bg-green-900/30 px-2 py-0.5 rounded text-green-700 dark:text-green-400 text-xs font-bold">
<span>4.9</span>
<span class="material-symbols-outlined text-xs">star</span>
</div>
</div>
<p class="text-gray-500 dark:text-gray-400 text-sm">Japanese • $$$$ • Downtown</p>
<div class="flex items-center gap-2 mt-2">
<span class="material-symbols-outlined text-primary text-sm">confirmation_number</span>
<span class="text-xs font-semibold text-gray-600 dark:text-gray-300">New &amp; Popular</span>
</div>
<button class="mt-4 w-full py-2 bg-primary/10 text-primary hover:bg-primary hover:text-white font-bold rounded-lg transition-all">Book Now</button>
</div>
</div>
<!-- Card 3 -->
<div class="group flex flex-col overflow-hidden rounded-xl border border-gray-100 dark:border-gray-800 bg-white dark:bg-background-dark hover:shadow-xl transition-all">
<div class="relative h-60 overflow-hidden">
<div class="absolute top-3 right-3 z-10 bg-white/90 dark:bg-black/50 p-1.5 rounded-full cursor-pointer hover:text-red-500 transition-colors">
<span class="material-symbols-outlined">favorite</span>
</div>
<img class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Elegant bar setting with craft cocktails" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbz-ikpBrTUivM_rYLrnINkPdaxjwCmOCv9CpZFUz1kmCvffFf3uMgfchXccThsqbaAoab4_HKQNXL0UgvGy2CnyCWbsUoWC47axRNBIfG1qWy49uXmZkqyS4SMgQ21mtvIGaW9-50xmwCEuUHfrtAr0heNB7TIp5FcrSH3LPZSa8U5lpppVpxzU8jtD5-ZO2ulZXzzOMHYFDV8Ek4DLJRXvYfuilh8YYOfoh07HT7LXjUNwQJi1bN_0cvOf3AFxDpvBZIhCBRcpo"/>
</div>
<div class="p-5 flex flex-col gap-2">
<div class="flex justify-between items-start">
<h3 class="text-lg font-bold group-hover:text-primary transition-colors">Veridian Bistro</h3>
<div class="flex items-center gap-1 bg-green-100 dark:bg-green-900/30 px-2 py-0.5 rounded text-green-700 dark:text-green-400 text-xs font-bold">
<span>4.6</span>
<span class="material-symbols-outlined text-xs">star</span>
</div>
</div>
<p class="text-gray-500 dark:text-gray-400 text-sm">French Fusion • $$ • Brooklyn</p>
<div class="flex items-center gap-2 mt-2">
<span class="material-symbols-outlined text-primary text-sm">confirmation_number</span>
<span class="text-xs font-semibold text-gray-600 dark:text-gray-300">Waitlist available</span>
</div>
<button class="mt-4 w-full py-2 bg-primary/10 text-primary hover:bg-primary hover:text-white font-bold rounded-lg transition-all">Book Now</button>
</div>
</div>
</div>
</section>
<!-- How it Works Section -->
<section class="px-4 py-20 md:px-10 lg:px-40 bg-background-light dark:bg-background-dark">
<div class="text-center mb-16">
<h2 class="text-3xl md:text-4xl font-black mb-4">How Youco'Done Works</h2>
<p class="text-gray-500 max-w-xl mx-auto">Reserving your next dining experience has never been easier. Follow these three simple steps.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
<div class="flex flex-col items-center gap-4">
<div class="size-20 bg-primary/20 rounded-full flex items-center justify-center mb-2">
<span class="material-symbols-outlined text-primary text-4xl">search</span>
</div>
<h3 class="text-xl font-bold">1. Discover</h3>
<p class="text-sm text-gray-500 leading-relaxed px-4">Browse through thousands of curated restaurants based on your location and mood.</p>
</div>
<div class="flex flex-col items-center gap-4">
<div class="size-20 bg-primary/20 rounded-full flex items-center justify-center mb-2">
<span class="material-symbols-outlined text-primary text-4xl">event_available</span>
</div>
<h3 class="text-xl font-bold">2. Book Instantly</h3>
<p class="text-sm text-gray-500 leading-relaxed px-4">Choose your date and time, and secure your table with a single click. No phone calls needed.</p>
</div>
<div class="flex flex-col items-center gap-4">
<div class="size-20 bg-primary/20 rounded-full flex items-center justify-center mb-2">
<span class="material-symbols-outlined text-primary text-4xl">celebration</span>
</div>
<h3 class="text-xl font-bold">3. Enjoy the Meal</h3>
<p class="text-sm text-gray-500 leading-relaxed px-4">Arrive at the restaurant and enjoy your dining experience. Your table is waiting for you.</p>
</div>
</div>
</section>
<!-- Newsletter / Footer CTA -->
<section class="px-4 py-16 md:px-10 lg:px-40 bg-primary/10 border-y border-primary/20">
<div class="flex flex-col md:flex-row items-center justify-between gap-8">
<div class="flex-1">
<h2 class="text-2xl font-bold mb-2">Join our foodie community</h2>
<p class="text-gray-600 dark:text-gray-400">Get early access to reservations and exclusive restaurant perks.</p>
</div>
<div class="flex w-full md:w-auto gap-2">
<input class="flex-1 md:w-80 rounded-lg border-gray-200 focus:border-primary focus:ring-primary dark:bg-background-dark dark:border-gray-700" placeholder="Enter your email" type="email"/>
<button class="bg-primary text-[#112121] px-6 py-2 font-bold rounded-lg whitespace-nowrap">Join Now</button>
</div>
</div>
</section>
</main>
<!-- Simple Footer -->
<footer class="bg-white dark:bg-[#0c1a1a] border-t border-[#f0f4f4] dark:border-[#1a2e2e] py-12 px-4 md:px-10 lg:px-40">
<div class="flex flex-col md:flex-row justify-between gap-10">
<div class="flex flex-col gap-4">
<div class="flex items-center gap-3">
<div class="size-6 text-primary">
<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z" fill="currentColor"></path>
</svg>
</div>
<span class="text-lg font-bold">Youco'Done</span>
</div>
<p class="text-sm text-gray-500 max-w-xs">Helping you find the perfect table for every celebration, date night, and casual meal since 2024.</p>
</div>
<div class="grid grid-cols-2 sm:grid-cols-3 gap-8">
<div class="flex flex-col gap-3">
<h4 class="font-bold text-sm">Company</h4>
<a class="text-sm text-gray-500 hover:text-primary" href="#">About</a>
<a class="text-sm text-gray-500 hover:text-primary" href="#">Careers</a>
</div>
<div class="flex flex-col gap-3">
<h4 class="font-bold text-sm">Restaurants</h4>
<a class="text-sm text-gray-500 hover:text-primary" href="#">Add Restaurant</a>
<a class="text-sm text-gray-500 hover:text-primary" href="#">Owner Portal</a>
</div>
<div class="flex flex-col gap-3">
<h4 class="font-bold text-sm">Support</h4>
<a class="text-sm text-gray-500 hover:text-primary" href="#">Help Center</a>
<a class="text-sm text-gray-500 hover:text-primary" href="#">Contact Us</a>
</div>
</div>
</div>
<div class="mt-12 pt-8 border-t border-gray-100 dark:border-gray-800 flex flex-col md:flex-row justify-between gap-4 text-xs text-gray-400">
<p>© 2024 Youco'Done Inc. All rights reserved.</p>
<div class="flex gap-6">
<a class="hover:text-primary" href="#">Privacy Policy</a>
<a class="hover:text-primary" href="#">Terms of Service</a>
</div>
</div>
</footer>
</body></html>