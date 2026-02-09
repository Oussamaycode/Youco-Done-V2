<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Analytics &amp; Management - Youco'Done</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
            font-family: 'Work Sans', sans-serif;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#111818] dark:text-white min-h-screen">
<div class="flex h-screen overflow-hidden">
<!-- SideNavBar -->
<aside class="w-64 flex-shrink-0 border-r border-[#dce5e5] dark:border-white/10 bg-white dark:bg-background-dark flex flex-col justify-between p-4">
<div class="flex flex-col gap-8">
<div class="flex gap-3 items-center">
<div class="bg-primary rounded-full size-10 flex items-center justify-center text-white">
<span class="material-symbols-outlined">restaurant</span>
</div>
<div class="flex flex-col">
<h1 class="text-[#111818] dark:text-white text-base font-bold leading-none">Youco'Done</h1>
<p class="text-[#638888] text-xs font-normal leading-normal">Platform Admin</p>
</div>
</div>
<nav class="flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary" href="#">
<span class="material-symbols-outlined text-[24px]">dashboard</span>
<p class="text-sm font-semibold">Dashboard</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-[#638888] hover:bg-background-light dark:hover:bg-white/5 rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined text-[24px]">storefront</span>
<p class="text-sm font-medium">Restaurants</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-[#638888] hover:bg-background-light dark:hover:bg-white/5 rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined text-[24px]">group</span>
<p class="text-sm font-medium">User Management</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-[#638888] hover:bg-background-light dark:hover:bg-white/5 rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined text-[24px]">analytics</span>
<p class="text-sm font-medium">Reporting</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-[#638888] hover:bg-background-light dark:hover:bg-white/5 rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined text-[24px]">settings</span>
<p class="text-sm font-medium">Settings</p>
</a>
</nav>
</div>
<div class="flex flex-col gap-1 border-t border-[#dce5e5] dark:border-white/10 pt-4">
<div class="flex items-center gap-3 px-3 py-2 text-[#638888] cursor-pointer hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-[24px]">logout</span>
<p class="text-sm font-medium">Logout</p>
</div>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 flex flex-col overflow-y-auto">
<!-- TopNavBar -->
<header class="sticky top-0 z-10 flex items-center justify-between border-b border-[#dce5e5] dark:border-white/10 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md px-8 py-4">
<div class="flex items-center gap-4">
<h2 class="text-[#111818] dark:text-white text-xl font-bold tracking-tight">Admin Analytics &amp; Management</h2>
</div>
<div class="flex items-center gap-6">
<label class="relative flex items-center min-w-64 h-10">
<span class="material-symbols-outlined absolute left-3 text-[#638888]">search</span>
<input class="w-full h-full rounded-lg bg-[#f0f4f4] dark:bg-white/5 border-none pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary text-[#111818] dark:text-white placeholder:text-[#638888]" placeholder="Search across platform..."/>
</label>
<div class="flex items-center gap-3">
<div class="text-right hidden sm:block">
<p class="text-sm font-semibold leading-none">Alex Rivera</p>
<p class="text-xs text-[#638888]">Super Admin</p>
</div>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-primary" data-alt="Professional portrait of a male platform administrator" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAUmxP3p_LNOmSw25vaqVQ6aZ_PNxrd9BJO-gDsHW866POCRk3s9Z2Vyel50dv2Jkp2Am4xjN1EBsEID_ulo5L6jEE7rDTtjHbiRpVdDmTOQTy4aHcx9svQSOYqelHk66IFap8ykwjDPEUI55q5MiKujKE8p__m9u1c_FLXEDN4su3Iv7eHdZWFal8MYU5o-B_zWTLT3iYi6kcieEdrHdoVs5pivwWEX2bmeGQtW57AB7WkZcyiHTWbi6j_dE_VpDsqNCiIdzen7fc");'></div>
</div>
</div>
</header>
<div class="p-8 space-y-8">
<!-- Stats Section -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="flex flex-col gap-2 rounded-xl p-6 bg-white dark:bg-white/5 border border-[#dce5e5] dark:border-white/10 shadow-sm">
<div class="flex justify-between items-start">
<p class="text-[#638888] text-sm font-medium">Total Active Restaurants</p>
<span class="material-symbols-outlined text-primary">store</span>
</div>
<p class="text-[#111818] dark:text-white text-3xl font-bold">128</p>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-[#078832] text-sm">trending_up</span>
<p class="text-[#078832] text-sm font-medium">+5.2% <span class="text-[#638888] font-normal">vs last month</span></p>
</div>
</div>
<div class="flex flex-col gap-2 rounded-xl p-6 bg-white dark:bg-white/5 border border-[#dce5e5] dark:border-white/10 shadow-sm">
<div class="flex justify-between items-start">
<p class="text-[#638888] text-sm font-medium">Total Users</p>
<span class="material-symbols-outlined text-primary">person</span>
</div>
<p class="text-[#111818] dark:text-white text-3xl font-bold">1,452</p>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-[#078832] text-sm">trending_up</span>
<p class="text-[#078832] text-sm font-medium">+12.1% <span class="text-[#638888] font-normal">vs last month</span></p>
</div>
</div>
<div class="flex flex-col gap-2 rounded-xl p-6 bg-white dark:bg-white/5 border border-[#dce5e5] dark:border-white/10 shadow-sm">
<div class="flex justify-between items-start">
<p class="text-[#638888] text-sm font-medium">Total Bookings</p>
<span class="material-symbols-outlined text-primary">calendar_today</span>
</div>
<p class="text-[#111818] dark:text-white text-3xl font-bold">8,940</p>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-[#078832] text-sm">trending_up</span>
<p class="text-[#078832] text-sm font-medium">+8.4% <span class="text-[#638888] font-normal">vs last month</span></p>
</div>
</div>
</div>
<!-- Restaurant Management Section -->
<section>
<div class="flex flex-col md:flex-row md:items-center justify-between mb-6 gap-4">
<div>
<h2 class="text-[#111818] dark:text-white text-2xl font-bold tracking-tight">Restaurant Management</h2>
<p class="text-[#638888] text-sm">Manage active listings and handle removal requests.</p>
</div>
<div class="flex gap-3">
<button class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg font-semibold transition-all">
<span class="material-symbols-outlined">add</span>
                                Add Restaurant
                            </button>
</div>
</div>
<div class="bg-white dark:bg-white/5 border border-[#dce5e5] dark:border-white/10 rounded-xl overflow-hidden shadow-sm">
<!-- SearchBar Component Integration -->
<div class="p-4 border-b border-[#dce5e5] dark:border-white/10 bg-background-light/30 dark:bg-white/5">
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#638888]">search</span>
<input class="w-full h-12 rounded-lg bg-white dark:bg-background-dark border border-[#dce5e5] dark:border-white/10 pl-10 pr-4 text-base focus:ring-2 focus:ring-primary transition-all text-[#111818] dark:text-white placeholder:text-[#638888]" placeholder="Search restaurants by name, owner or location..."/>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-background-light dark:bg-white/5 text-[#111818] dark:text-white border-b border-[#dce5e5] dark:border-white/10">
<th class="px-6 py-4 text-sm font-bold uppercase tracking-wider">Restaurant</th>
<th class="px-6 py-4 text-sm font-bold uppercase tracking-wider">Owner</th>
<th class="px-6 py-4 text-sm font-bold uppercase tracking-wider">Status</th>
<th class="px-6 py-4 text-sm font-bold uppercase tracking-wider">Revenue</th>
<th class="px-6 py-4 text-sm font-bold uppercase tracking-wider text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-[#dce5e5] dark:divide-white/10">
<tr class="hover:bg-background-light/50 dark:hover:bg-white/5 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-10 rounded-lg bg-cover bg-center" data-alt="Interior of a luxury italian restaurant" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAvGRdr_9lvq4hVjAxbbkIxsJkM_Frxot-gpAuzlnG5CPV9Epmiv9KZ8KdZUM-rlBzr3sZRWp3qllfsc5dpaP_xGaEWpWeMP0LmK_6QNa9dILmA5hEZx06FigpqLUlCp7u1I3MRmoW9lpPOdJpke4UFoqb-FCK-sL0H4EhymkIMSnnk2Uz3zhuj5MMrRwUMf3S77ji_LYZZCHjdhj0_zX39WOMogpAuB0hmvKsBGXJBZL44jPBvolu73psem7QXPAYhIr-2lQGTWF4');"></div>
<div>
<p class="font-semibold text-[#111818] dark:text-white">The Golden Crust</p>
<p class="text-xs text-[#638888]">Brooklyn, NY</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm text-[#111818] dark:text-white">Mario Batali</td>
<td class="px-6 py-4">
<span class="px-2.5 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 uppercase tracking-wide">Active</span>
</td>
<td class="px-6 py-4 text-sm font-medium text-[#111818] dark:text-white">$12,450.00</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2">
<button class="p-2 hover:bg-primary/10 text-primary rounded-lg transition-colors">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-2 hover:bg-red-100 dark:hover:bg-red-900/30 text-red-500 rounded-lg transition-colors">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-background-light/50 dark:hover:bg-white/5 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-10 rounded-lg bg-cover bg-center" data-alt="Modern sushi bar setup" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCVjInZQjdP9i5MlXbBs72dECbxbQwjwYiZT4-VcYiCiyQNnRi7yWPdjnlDXT8hESXLPyogR8r35GahdAsMM4Nf752wXopMbrZLMOd3Tru4E6v4r-A4Dyf0mA2cPIuhqFfYSU-e7XVLHkPNiKrSmsVJsonCBqPzcCQ--8ikLeKSAUDUnZljeGCWzdiWXb1zX7Ix6Gtu3EuGtf5iytPb5V2-vEL7XdsSfkcayKqJugVzB8NF3m5M6WzV1e_-n5hCuFrDYRJc44QeKFI');"></div>
<div>
<p class="font-semibold text-[#111818] dark:text-white">Sakura Zen</p>
<p class="text-xs text-[#638888]">San Francisco, CA</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm text-[#111818] dark:text-white">Yuki Tanaka</td>
<td class="px-6 py-4">
<span class="px-2.5 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-700 dark:bg-amber-900/30 dark:text-amber-400 uppercase tracking-wide">Pending</span>
</td>
<td class="px-6 py-4 text-sm font-medium text-[#111818] dark:text-white">$0.00</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2">
<button class="p-2 hover:bg-primary/10 text-primary rounded-lg transition-colors">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button class="p-2 hover:bg-red-100 dark:hover:bg-red-900/30 text-red-500 rounded-lg transition-colors">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</section>
<!-- User Management Section -->
<section>
<div class="flex flex-col md:flex-row md:items-center justify-between mb-6 gap-4">
<div>
<h2 class="text-[#111818] dark:text-white text-2xl font-bold tracking-tight">User Management</h2>
<p class="text-[#638888] text-sm">Assign roles and manage platform access permissions.</p>
</div>
</div>
<div class="bg-white dark:bg-white/5 border border-[#dce5e5] dark:border-white/10 rounded-xl overflow-hidden shadow-sm">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-background-light dark:bg-white/5 text-[#111818] dark:text-white border-b border-[#dce5e5] dark:border-white/10">
<th class="px-6 py-4 text-sm font-bold uppercase tracking-wider">User</th>
<th class="px-6 py-4 text-sm font-bold uppercase tracking-wider">Date Joined</th>
<th class="px-6 py-4 text-sm font-bold uppercase tracking-wider">Assign Role</th>
<th class="px-6 py-4 text-sm font-bold uppercase tracking-wider text-right">Activity</th>
</tr>
</thead>
<tbody class="divide-y divide-[#dce5e5] dark:divide-white/10">
<tr class="hover:bg-background-light/50 dark:hover:bg-white/5 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-9 rounded-full bg-cover bg-center" data-alt="Portrait of a smiling female platform user" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA51Tu96pCHHfa381r8C5o6wjRxgiRx8N67XmEKSeiILiVA-03M1iKWcFI3F3BOnojyMALqCWJLW93Cs_ZidS2ayheEjItJMHA1RVZIbyY7ij3etp7UtMwTLiEmxoAM2NFbRWpFmdgoylvgLXeh6MelsCK5l9nljay-sctYJ4mT-kzWa7zZw1k3KJpwBk7zJsLGwZEZISKuPkJdS3Dmzcgw_rMUXIJ-ZR9N6ZntXW9dDzV-VCOTIeBMoa8eZZX6IZwbf4lm0fT0vWA');"></div>
<div>
<p class="font-semibold text-[#111818] dark:text-white text-sm">Sarah Jenkins</p>
<p class="text-xs text-[#638888]">sarah.j@example.com</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm text-[#638888]">Oct 12, 2023</td>
<td class="px-6 py-4">
<select class="form-select bg-[#f0f4f4] dark:bg-background-dark border-none rounded-lg text-sm text-[#111818] dark:text-white focus:ring-primary min-w-[140px]">
<option value="client">Client</option>
<option selected="" value="owner">Owner</option>
<option value="admin">Admin</option>
</select>
</td>
<td class="px-6 py-4 text-right">
<p class="text-xs text-[#638888]">Active 2h ago</p>
</td>
</tr>
<tr class="hover:bg-background-light/50 dark:hover:bg-white/5 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-9 rounded-full bg-cover bg-center" data-alt="Portrait of a young man with glasses" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDNklkKf-7OdSuB9aD23-DLpIF4rwPm6Wc0-vWSKVKbVoAzVj0OuQ9yrR3X8elYbinrc7je4dCU9PXxeapScQNLX77YSgSknzL9mxwgCSatQY1iG-UPeV6V7-iRuHmNVcoO2EbBK0PJnI0uBKzgjKxgMiFSW5dns_DMnOQvcuXvAF0HfNuhGXhkPFaozGPMI9mIP8UgUVvRqZQgFRCJyDN-JAqfX_qUzwqSJoFK1nBiJwzUAxbLCwT7VTXbJaGrD6ajR2N2WLj0YRs');"></div>
<div>
<p class="font-semibold text-[#111818] dark:text-white text-sm">David Chen</p>
<p class="text-xs text-[#638888]">d.chen@gmail.com</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-sm text-[#638888]">Nov 05, 2023</td>
<td class="px-6 py-4">
<select class="form-select bg-[#f0f4f4] dark:bg-background-dark border-none rounded-lg text-sm text-[#111818] dark:text-white focus:ring-primary min-w-[140px]">
<option selected="" value="client">Client</option>
<option value="owner">Owner</option>
<option value="admin">Admin</option>
</select>
</td>
<td class="px-6 py-4 text-right">
<p class="text-xs text-[#638888]">Active 1d ago</p>
</td>
</tr>
</tbody>
</table>
</div>
<div class="p-4 flex items-center justify-between bg-background-light/30 dark:bg-white/5 text-sm text-[#638888]">
<p>Showing 1 to 2 of 1,452 users</p>
<div class="flex gap-2">
<button class="px-3 py-1 border border-[#dce5e5] dark:border-white/10 rounded hover:bg-white dark:hover:bg-white/10 transition-colors">Prev</button>
<button class="px-3 py-1 bg-primary text-white rounded">1</button>
<button class="px-3 py-1 border border-[#dce5e5] dark:border-white/10 rounded hover:bg-white dark:hover:bg-white/10 transition-colors">2</button>
<button class="px-3 py-1 border border-[#dce5e5] dark:border-white/10 rounded hover:bg-white dark:hover:bg-white/10 transition-colors">Next</button>
</div>
</div>
</div>
</section>
<!-- Spacer -->
<div class="h-10"></div>
</div>
</main>
</div>
</body></html>