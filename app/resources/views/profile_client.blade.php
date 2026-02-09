<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>User Profile &amp; Favorites - Youco'Done</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
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
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .filled-icon {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#111818] dark:text-white transition-colors duration-200">
<div class="flex min-h-screen w-full">
<!-- Sidebar Navigation -->
<aside class="w-80 flex-shrink-0 border-r border-[#dce5e5] dark:border-[#2d3a3a] bg-white dark:bg-[#1a2a2a] hidden lg:flex flex-col">
<div class="p-6 flex flex-col h-full">
<div class="flex items-center gap-3 mb-8">
<div class="bg-primary size-10 rounded-full flex items-center justify-center text-white">
<span class="material-symbols-outlined">restaurant_menu</span>
</div>
<span class="text-xl font-black tracking-tight">Youco'Done</span>
</div>
<div class="flex flex-col gap-6 flex-1">
<div class="flex gap-3 items-center">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-12" data-alt="User avatar placeholder with smiling face" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAt0n-4lT8Jhddn_MPGfvHWgHpn6yEbz3ifkeG6ycHT7zJ5m3TlyoQDHTDt3T9O0iMMcMUN8pM81uGSOdDpEzF8DfLzHMLhg0BnVPCEhmkr8Pg9F7-Ed1nd6JZDY7cxqVZ85QUVlMoU7w7KHn93WboZh8aDVvm-BmqkLIIiwCTCYxOGDhghGEkhkro_yN3lCSaokEzhG07eRi92VIx4b4gY70CLDRNfvjdggreviPOBIL2OEg6EWq4_8lGGdvvDZlG_NgbKQ7Zs5G4");'></div>
<div class="flex flex-col">
<h1 class="text-[#111818] dark:text-white text-base font-semibold leading-none mb-1">{{$user->name}}</h1>
<p class="text-[#638888] dark:text-[#a0bcbc] text-xs font-normal">Customer Account</p>
</div>
</div>
<nav class="flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-3 rounded-lg bg-primary/10 text-primary group" href="#">
<span class="material-symbols-outlined filled-icon">person</span>
<p class="text-sm font-semibold">Personal Info</p>
</a>
<a class="flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-background-light dark:hover:bg-background-dark text-[#111818] dark:text-[#e0eded] transition-colors" href="#">
<span class="material-symbols-outlined">calendar_month</span>
<p class="text-sm font-medium">My Reservations</p>
</a>
<a class="flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-background-light dark:hover:bg-background-dark text-[#111818] dark:text-[#e0eded] transition-colors" href="#">
<span class="material-symbols-outlined">favorite</span>
<p class="text-sm font-medium">Favorites</p>
</a>
<a class="flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-background-light dark:hover:bg-background-dark text-[#111818] dark:text-[#e0eded] transition-colors mt-4" href="#">
<span class="material-symbols-outlined">settings</span>
<p class="text-sm font-medium">Security</p>
</a>
</nav>
</div>
<div class="pt-6 border-t border-[#dce5e5] dark:border-[#2d3a3a]">
<button class="flex w-full items-center justify-center gap-2 rounded-lg h-11 px-4 bg-red-50 text-red-600 dark:bg-red-900/20 dark:text-red-400 text-sm font-bold transition-colors">
<span class="material-symbols-outlined text-lg">logout</span>
<span>Sign Out</span>
</button>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 overflow-y-auto">
<div class="max-w-[1024px] mx-auto py-8 px-6 lg:px-10">
<!-- Page Heading -->
<form method="POST" action="{{ route('profile.update') }}"> 
@csrf
@method('PATCH')
<div class="flex flex-col gap-2 mb-8">
<p class="text-[#111818] dark:text-white text-4xl font-black leading-tight tracking-tight">User Profile</p>
<p class="text-[#638888] dark:text-[#a0bcbc] text-base font-normal">Update your personal information and manage your saved restaurants.</p>
</div>
<!-- Personal Information Section -->
<section class="bg-white dark:bg-[#1a2a2a] rounded-xl border border-[#dce5e5] dark:border-[#2d3a3a] overflow-hidden mb-10 shadow-sm">
<div class="px-6 py-5 border-b border-[#dce5e5] dark:border-[#2d3a3a]">
<h2 class="text-[#111818] dark:text-white text-[20px] font-bold">Personal Information</h2>
</div>
<div class="p-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
<label class="flex flex-col gap-2">
<span class="text-[#111818] dark:text-[#e0eded] text-sm font-semibold"></span>
<input name="name" class="form-input w-full rounded-lg text-[#111818] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dce5e5] dark:border-[#2d3a3a] bg-white dark:bg-[#112121] h-12 px-4 text-base transition-all" type="text" value="{{$user->name}}" />
</label>
<label class="flex flex-col gap-2">
<span class="text-[#111818] dark:text-[#e0eded] text-sm font-semibold">Email Address</span>
<input name="email" class="form-input w-full rounded-lg text-[#111818] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dce5e5] dark:border-[#2d3a3a] bg-white dark:bg-[#112121] h-12 px-4 text-base transition-all" type="email" value="{{$user->email}}"/>
</label>
<label class="flex flex-col gap-2 md:col-span-1">
<span class="text-[#111818] dark:text-[#e0eded] text-sm font-semibold">Phone Number</span>
<input name="numero_de_telephone" class="form-input w-full rounded-lg text-[#111818] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dce5e5] dark:border-[#2d3a3a] bg-white dark:bg-[#112121] h-12 px-4 text-base transition-all" type="tel" value="{{$user->numero_de_telephone}}"/>
</label>
<div class="flex items-end">
<p class="text-[#638888] dark:text-[#a0bcbc] text-xs pb-3 italic">Verified account details ensure smooth booking confirmations.</p>
</div>
</div>
<div class="flex justify-end pt-4 border-t border-[#dce5e5] dark:border-[#2d3a3a]">
<button type="submit" class="min-w-[160px] cursor-pointer rounded-lg h-12 px-6 bg-primary text-[#111818] text-sm font-bold shadow-md hover:bg-primary/90 transition-all flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-lg">save</span>
<span>Update Profile</span>
</button>
</div>
</div>
</form>
</section>
<!-- Favorites Section Header -->
<div class="flex items-center justify-between mb-6">
<h2 class="text-[#111818] dark:text-white text-[22px] font-bold leading-tight tracking-tight">My Favorites</h2>
<a class="text-primary text-sm font-bold hover:underline" href="#">Browse More</a>
</div>
<!-- Favorites Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Restaurant Card 1 -->
<div class="bg-white dark:bg-[#1a2a2a] rounded-xl border border-[#dce5e5] dark:border-[#2d3a3a] overflow-hidden group hover:shadow-lg transition-shadow">
<div class="relative h-48 w-full bg-center bg-cover" data-alt="Modern Italian restaurant interior with warm lighting" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAPUXvJXIPDEZYUdORP6r533gAKbR2nQ1HLLMkVG1wzT00eI5K0P80zuUOzugd44ll1ciyxfcUPayhdnnII4HbzqKBAzv1SU08gmB4Q27hLAe1j7vSBSa6Dz9-mIgyumuOwMbLICx23ZMmtT8xg995-jQjk1zemPzT1Co1wGK3cQuQIJOfL5vZiL_hAzozaxl4oO2TeDozGwYj8f9f1d4e3gN6gSMHrvu9OrtRQPeovTvREMtQNFvsLybPz1CaEHGdDO3VdKUwzTkA");'>
<button class="absolute top-3 right-3 bg-white/90 dark:bg-[#112121]/80 p-2 rounded-full text-red-500 shadow-sm hover:scale-110 transition-transform">
<span class="material-symbols-outlined filled-icon">favorite</span>
</button>
</div>
<div class="p-4">
<div class="flex justify-between items-start mb-1">
<h3 class="text-[#111818] dark:text-white font-bold text-lg">L'Osteria Moderna</h3>
<div class="flex items-center gap-1 bg-yellow-50 dark:bg-yellow-900/20 px-1.5 py-0.5 rounded text-yellow-700 dark:text-yellow-400 text-xs font-bold">
<span class="material-symbols-outlined text-sm filled-icon">star</span>
<span>4.9</span>
</div>
</div>
<p class="text-[#638888] dark:text-[#a0bcbc] text-sm mb-3">Italian • $$$ • 0.8 miles away</p>
<button class="w-full py-2 bg-background-light dark:bg-[#112121] text-[#111818] dark:text-white text-sm font-bold rounded-lg border border-[#dce5e5] dark:border-[#2d3a3a] hover:bg-primary hover:text-white hover:border-primary transition-colors">
                                Book a Table
                            </button>
</div>
</div>
<!-- Restaurant Card 2 -->
<div class="bg-white dark:bg-[#1a2a2a] rounded-xl border border-[#dce5e5] dark:border-[#2d3a3a] overflow-hidden group hover:shadow-lg transition-shadow">
<div class="relative h-48 w-full bg-center bg-cover" data-alt="Authentic sushi bar with fresh seafood display" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC31da7vSIST4Z0zMOrvacI_x8TOkGwgVj-NZvRvNNCaxFq9pR9_yoGTT1Ot8oDAEYYY5wy76exXQJDhunQdrgwjssk2EBwe4b3Q7Yxh_z0uPPmFvCPvBhlzZgnlb5URjQ3FzG6AhG4i09sxoEji14jnYDZxfqsCADsNZgs4mjKeBDwXqJR1mNmEtVeW3axn4DePiXTUCpsNWLNVM-BSDAULW_qzZsjwz9w8I9s3gdtndgf7zc9T7b_N4T01YqLC2WeOWcFQWLpR4o");'>
<button class="absolute top-3 right-3 bg-white/90 dark:bg-[#112121]/80 p-2 rounded-full text-red-500 shadow-sm hover:scale-110 transition-transform">
<span class="material-symbols-outlined filled-icon">favorite</span>
</button>
</div>
<div class="p-4">
<div class="flex justify-between items-start mb-1">
<h3 class="text-[#111818] dark:text-white font-bold text-lg">Sakura Zen</h3>
<div class="flex items-center gap-1 bg-yellow-50 dark:bg-yellow-900/20 px-1.5 py-0.5 rounded text-yellow-700 dark:text-yellow-400 text-xs font-bold">
<span class="material-symbols-outlined text-sm filled-icon">star</span>
<span>4.7</span>
</div>
</div>
<p class="text-[#638888] dark:text-[#a0bcbc] text-sm mb-3">Japanese • $$$$ • 1.2 miles away</p>
<button class="w-full py-2 bg-background-light dark:bg-[#112121] text-[#111818] dark:text-white text-sm font-bold rounded-lg border border-[#dce5e5] dark:border-[#2d3a3a] hover:bg-primary hover:text-white hover:border-primary transition-colors">
                                Book a Table
                            </button>
</div>
</div>
<!-- Restaurant Card 3 -->
<div class="bg-white dark:bg-[#1a2a2a] rounded-xl border border-[#dce5e5] dark:border-[#2d3a3a] overflow-hidden group hover:shadow-lg transition-shadow">
<div class="relative h-48 w-full bg-center bg-cover" data-alt="Cozy brunch spot with rustic wooden tables" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCpR2J9L3ZNoiASYT-c7mx3-0DntTsHv5PpVpxL6gy3aKSnBgrjEhDXTrhgs1WCTvkVy0h_pQtzFosJR8fgFjv_MoH4ueKJ-Avn83yIMV21noWG15zgWQigC0xUKJJhcpc7inJJDwFPrzPo39goupMn6WPxMyFneJHaOqwBMqMhIv15iboP_vin-Q45oB0vVpWF9TzniHxDf0KRgdenT6SJRAMNy2lq-nLHy8jTvXE_yfgwTl_CMitGtZ0DRmIe_gc4jP5l0lxCCwA");'>
<button class="absolute top-3 right-3 bg-white/90 dark:bg-[#112121]/80 p-2 rounded-full text-red-500 shadow-sm hover:scale-110 transition-transform">
<span class="material-symbols-outlined filled-icon">favorite</span>
</button>
</div>
<div class="p-4">
<div class="flex justify-between items-start mb-1">
<h3 class="text-[#111818] dark:text-white font-bold text-lg">The Green Garden</h3>
<div class="flex items-center gap-1 bg-yellow-50 dark:bg-yellow-900/20 px-1.5 py-0.5 rounded text-yellow-700 dark:text-yellow-400 text-xs font-bold">
<span class="material-symbols-outlined text-sm filled-icon">star</span>
<span>4.5</span>
</div>
</div>
<p class="text-[#638888] dark:text-[#a0bcbc] text-sm mb-3">Vegan • $$ • 0.5 miles away</p>
<button class="w-full py-2 bg-background-light dark:bg-[#112121] text-[#111818] dark:text-white text-sm font-bold rounded-lg border border-[#dce5e5] dark:border-[#2d3a3a] hover:bg-primary hover:text-white hover:border-primary transition-colors">
                                Book a Table
                            </button>
</div>
</div>
</div>
<!-- Quick Help / Empty State Context (Visual only) -->
<div class="mt-12 p-8 border-2 border-dashed border-[#dce5e5] dark:border-[#2d3a3a] rounded-xl flex flex-col items-center justify-center text-center">
<div class="bg-background-light dark:bg-[#1a2a2a] p-4 rounded-full mb-4">
<span class="material-symbols-outlined text-4xl text-[#638888]">explore</span>
</div>
<h4 class="text-lg font-bold text-[#111818] dark:text-white mb-2">Want to discover more?</h4>
<p class="text-[#638888] dark:text-[#a0bcbc] max-w-md mb-6">Explore the latest restaurants added to Youco'Done and save your favorites to access them quickly.</p>
<a href='{{route("restaurant.index")}}' class="px-6 py-3 bg-primary/20 text-[#111818] dark:text-primary font-bold rounded-lg hover:bg-primary/30 transition-colors">
                        Explore Restaurants
</a>
</div>
</div>
</main>
</div>
</body></html>