<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Owner Dashboard Overview - Youco'Done</title>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .active-nav {
            background-color: #17cfcf33;
            color: #17cfcf;
        }
    </style> 
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#111818] dark:text-white antialiased">
<div class="flex min-h-screen">
<!-- Sidebar Navigation -->
<aside class="w-64 border-r border-[#dce5e5] dark:border-[#2a3a3a] bg-white dark:bg-[#1a2b2b] flex flex-col fixed h-full">
<div class="p-6 flex items-center gap-3">
<div class="bg-primary size-10 rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined">restaurant_menu</span>
</div>
<div>
<h1 class="text-lg font-bold leading-none">Youco'Done</h1>
<p class="text-[#638888] text-xs font-medium">Owner Portal</p>
</div>
</div>
<nav class="flex-1 px-4 space-y-2 mt-4">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg active-nav" href="#">
<span class="material-symbols-outlined text-[22px]">dashboard</span>
<span class="text-sm font-semibold">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#638888] hover:bg-[#f0f4f4] dark:hover:bg-[#233535] transition-colors" href="#">
<span class="material-symbols-outlined text-[22px]">storefront</span>
<span class="text-sm font-semibold">My Restaurants</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#638888] hover:bg-[#f0f4f4] dark:hover:bg-[#233535] transition-colors" href="#">
<span class="material-symbols-outlined text-[22px]">calendar_today</span>
<span class="text-sm font-semibold">Reservations</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#638888] hover:bg-[#f0f4f4] dark:hover:bg-[#233535] transition-colors" href="#">
<span class="material-symbols-outlined text-[22px]">analytics</span>
<span class="text-sm font-semibold">Analytics</span>
</a>
</nav>
<div class="p-4 border-t border-[#dce5e5] dark:border-[#2a3a3a]">
<div class="flex items-center gap-3 px-3 py-2">
<div class="size-9 rounded-full bg-cover bg-center" data-alt="Profile picture of restaurant owner" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD2NFRn_6AuDJR3OCl2NQGxGAcTd5pLaQwR0fo9x5MFzK9CSipD0HlqejZWsH_UQiXyneg97wg7p_-LJwDgVmezqXnr8IYUgBCy5kOYqIWgqmxtR4envuEr0Pwbb0FO0ydvcpibjQLt5xB-1rhkWKlVmIhpo-6A5fK1jQTUHgJcajJkh7RfHHy_gn8C0YLGGxazNMTUm5J48NR7Is-R_aZ5wVWcfsqQKMxpGqi2G7plfqqPG0afdm-xAjMAGQ-kJpVVaQAYV-tTVPk')"></div>
<div class="flex-1 min-w-0">
<p class="text-sm font-bold truncate">{{$user->name}}</p>
<p class="text-xs text-[#638888] truncate">Premium Owner</p>
</div>
</div>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 ml-64">
<!-- Top Navbar -->
<header class="flex items-center justify-between px-8 py-4 bg-white dark:bg-[#1a2b2b] border-b border-[#dce5e5] dark:border-[#2a3a3a] sticky top-0 z-10">
<div class="flex items-center gap-6 flex-1">
<h2 class="text-xl font-bold">Dashboard</h2>
<div class="relative w-full max-w-md">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#638888] text-xl">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-[#f0f4f4] dark:bg-[#233535] border-none rounded-lg focus:ring-2 focus:ring-primary text-sm placeholder-[#638888]" placeholder="Search reservations or guests..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4 ml-4">
<button class="size-10 flex items-center justify-center rounded-lg bg-[#f0f4f4] dark:bg-[#233535] text-[#111818] dark:text-white">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="size-10 flex items-center justify-center rounded-lg bg-[#f0f4f4] dark:bg-[#233535] text-[#111818] dark:text-white">
<span class="material-symbols-outlined">settings</span>
</button>
<a href='{{route("restaurant.create")}}' class="bg-primary text-white px-4 py-2 rounded-lg text-sm font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-lg">add</span>
                        New Restaurant
</a>
</div>
</header>
<div class="p-8 space-y-8">
<!-- Stats Section -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-white dark:bg-[#1a2b2b] p-6 rounded-xl border border-[#dce5e5] dark:border-[#2a3a3a] shadow-sm">
<div class="flex justify-between items-start mb-4">
<p class="text-sm font-medium text-[#638888]">Total Bookings this Week</p>
<span class="bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded">+12%</span>
</div>
<p class="text-3xl font-bold">142</p>
<p class="text-xs text-[#638888] mt-2 italic">vs. 127 last week</p>
</div>
<div class="bg-white dark:bg-[#1a2b2b] p-6 rounded-xl border border-[#dce5e5] dark:border-[#2a3a3a] shadow-sm">
<div class="flex justify-between items-start mb-4">
<p class="text-sm font-medium text-[#638888]">New Customers</p>
<span class="bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded">+5%</span>
</div>
<p class="text-3xl font-bold">28</p>
<p class="text-xs text-[#638888] mt-2 italic">unique guests registered</p>
</div>
<div class="bg-white dark:bg-[#1a2b2b] p-6 rounded-xl border border-[#dce5e5] dark:border-[#2a3a3a] shadow-sm">
<div class="flex justify-between items-start mb-4">
<p class="text-sm font-medium text-[#638888]">Today's Guests</p>
<span class="bg-primary/10 text-primary text-xs font-bold px-2 py-1 rounded">Expected</span>
</div>
<p class="text-3xl font-bold">54</p>
<p class="text-xs text-[#638888] mt-2 italic">Across 3 establishments</p>
</div>
</div>
<!-- Upcoming Reservations Today -->
<section>
<div class="flex items-center justify-between mb-4">
<h3 class="text-xl font-bold">Upcoming Reservations Today</h3>
<a class="text-primary text-sm font-bold hover:underline" href="#">View all reservations</a>
</div>
<div class="bg-white dark:bg-[#1a2b2b] rounded-xl border border-[#dce5e5] dark:border-[#2a3a3a] overflow-hidden shadow-sm">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-[#f6f8f8] dark:bg-[#233535] border-b border-[#dce5e5] dark:border-[#2a3a3a]">
<th class="px-6 py-4 text-sm font-semibold text-[#638888]">Guest Name</th>
<th class="px-6 py-4 text-sm font-semibold text-[#638888]">Time</th>
<th class="px-6 py-4 text-sm font-semibold text-[#638888]">Guests</th>
<th class="px-6 py-4 text-sm font-semibold text-[#638888]">Restaurant</th>
<th class="px-6 py-4 text-sm font-semibold text-[#638888]">Status</th>
</tr>
</thead>
<tbody class="divide-y divide-[#dce5e5] dark:divide-[#2a3a3a]">
<tr>
<td class="px-6 py-4 text-sm font-medium">John Doe</td>
<td class="px-6 py-4 text-sm text-[#638888]">18:30</td>
<td class="px-6 py-4 text-sm text-[#638888]">4</td>
<td class="px-6 py-4 text-sm text-[#638888]">Le Petit Bistro</td>
<td class="px-6 py-4">
<span class="px-3 py-1 bg-primary/20 text-primary text-xs font-bold rounded-full">Confirmed</span>
</td>
</tr>
<tr>
<td class="px-6 py-4 text-sm font-medium">Jane Smith</td>
<td class="px-6 py-4 text-sm text-[#638888]">19:15</td>
<td class="px-6 py-4 text-sm text-[#638888]">2</td>
<td class="px-6 py-4 text-sm text-[#638888]">Sushi Garden</td>
<td class="px-6 py-4">
<span class="px-3 py-1 bg-[#f0f4f4] dark:bg-[#233535] text-[#111818] dark:text-white text-xs font-bold rounded-full">Pending</span>
</td>
</tr>
<tr>
<td class="px-6 py-4 text-sm font-medium">Robert Brown</td>
<td class="px-6 py-4 text-sm text-[#638888]">20:00</td>
<td class="px-6 py-4 text-sm text-[#638888]">6</td>
<td class="px-6 py-4 text-sm text-[#638888]">Le Petit Bistro</td>
<td class="px-6 py-4">
<span class="px-3 py-1 bg-primary/20 text-primary text-xs font-bold rounded-full">Confirmed</span>
</td>
</tr>
<tr>
<td class="px-6 py-4 text-sm font-medium">Michael Ross</td>
<td class="px-6 py-4 text-sm text-[#638888]">20:30</td>
<td class="px-6 py-4 text-sm text-[#638888]">3</td>
<td class="px-6 py-4 text-sm text-[#638888]">The Grill House</td>
<td class="px-6 py-4">
<span class="px-3 py-1 bg-red-100 text-red-600 text-xs font-bold rounded-full">Cancelled</span>
</td>
</tr>
</tbody>
</table>
</div>
</section>
<!-- Managed Restaurants -->
<section>
<div class="flex items-center justify-between mb-4">
<h3 class="text-xl font-bold">Managed Restaurants</h3>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
<!-- Restaurant Card 1 -->
<div class="bg-white dark:bg-[#1a2b2b] rounded-xl border border-[#dce5e5] dark:border-[#2a3a3a] overflow-hidden flex shadow-sm group">
<div class="w-40 h-auto bg-cover bg-center shrink-0" data-alt="Interior of Le Petit Bistro restaurant" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDFOjsJ1EsGreDEx2LJP9m2AXBqhv0sC2fbwk30xKlinoJLBw0dhRFtCvn7kqKl9jUZFVRJeeof5KQ8POaqForwXseJRjpKCgLfHR3MLmYodV-cKz-ch9P2hTqBx1_9U1seR0m4cW5alr1SDCZWhRb0lG_2hcKSGcOqOp0UgWeCROF2jmWpNiuI8DxgxzQ8bp9KrHmAmvZdCuE715YP34_Py_NY5M_WM1L1xFGN6SIcAhEbG71RDSdkBkhm4fuPJWGFXABi1J7VNh0')"></div>
<div class="p-5 flex-1 flex flex-col justify-between">
<div>
<div class="flex justify-between items-start">
<h4 class="font-bold text-lg">Le Petit Bistro</h4>
<span class="px-2 py-0.5 bg-green-100 text-green-700 text-[10px] font-black uppercase rounded tracking-wider">Open</span>
</div>
<p class="text-sm text-[#638888] flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-base">location_on</span> Paris, France
                                    </p>
</div>
<div class="flex items-center gap-2 mt-4">
<button class="flex-1 bg-[#f0f4f4] dark:bg-[#233535] hover:bg-primary/10 hover:text-primary transition-colors text-[#111818] dark:text-white py-2 rounded-lg text-sm font-bold flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-lg">edit</span>
                                        Edit
                                    </button>
<button class="size-9 bg-red-50 text-red-500 hover:bg-red-100 transition-colors rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</div>
</div>
<!-- Restaurant Card 2 -->
<div class="bg-white dark:bg-[#1a2b2b] rounded-xl border border-[#dce5e5] dark:border-[#2a3a3a] overflow-hidden flex shadow-sm">
<div class="w-40 h-auto bg-cover bg-center shrink-0" data-alt="Sushi Garden restaurant with Japanese decor" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDUiZkHZqZa5aB5Mv49sM3IrNSSwvaOUhIG1o1QqqBoFt_lV_cxYe_DuqhIYR84DyHU1hHve89qhRsWCMcwhKqoTV3TplpBU94-M5a2QvUA5T8MpjHOrb3eA36CbZUHW1CZx4lAqgm5SUixQpTrDFVr2QbtTQqMGpkLb_vjmTmprqAK9J_wS2tMo9VoMJg3lXsFNKIgskZYt5bsZvF_ahuu59vWU99Rt3P2EAc3K4yraTdwZUTyOUN30rs5K6snxfOG0RUbKPxsnOQ')"></div>
<div class="p-5 flex-1 flex flex-col justify-between">
<div>
<div class="flex justify-between items-start">
<h4 class="font-bold text-lg">Sushi Garden</h4>
<span class="px-2 py-0.5 bg-green-100 text-green-700 text-[10px] font-black uppercase rounded tracking-wider">Open</span>
</div>
<p class="text-sm text-[#638888] flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-base">location_on</span> Tokyo, Japan
                                    </p>
</div>
<div class="flex items-center gap-2 mt-4">
<button class="flex-1 bg-[#f0f4f4] dark:bg-[#233535] hover:bg-primary/10 hover:text-primary transition-colors text-[#111818] dark:text-white py-2 rounded-lg text-sm font-bold flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-lg">edit</span>
                                        Edit
                                    </button>
<button class="size-9 bg-red-50 text-red-500 hover:bg-red-100 transition-colors rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</div>
</div>
<!-- Restaurant Card 3 -->
<div class="bg-white dark:bg-[#1a2b2b] rounded-xl border border-[#dce5e5] dark:border-[#2a3a3a] overflow-hidden flex shadow-sm">
<div class="w-40 h-auto bg-cover bg-center shrink-0" data-alt="Rustic Grill House interior with wooden tables" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB1_byp5-HFoow7OrfoZU1GftGbYDlPQHt_-zxeQcQqqyBBrHNdHi59YvcQSJzlA-gTVTdLUrV5kja-GLmJNhcic-TQ-tEz2FjxqXGBR6DEk5rcytWQYr-HjVOAgXkOLorfmPs4GMUF-Fgk8zuprer7p719YjRBUCBIvWfkCqukf-qSfpL8HXa2REPTankcBtYFiQ1gwMRxFJokymtaLstYf3Lxk_SLwJ-R7NlaXIimZuHZ8hJLP2QjebaUGHGDFt8do3uxLI0GpsE')"></div>
<div class="p-5 flex-1 flex flex-col justify-between">
<div>
<div class="flex justify-between items-start">
<h4 class="font-bold text-lg">The Grill House</h4>
<span class="px-2 py-0.5 bg-gray-100 text-gray-500 text-[10px] font-black uppercase rounded tracking-wider">Closed</span>
</div>
<p class="text-sm text-[#638888] flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-base">location_on</span> New York, USA
                                    </p>
</div>
<div class="flex items-center gap-2 mt-4">
<button class="flex-1 bg-[#f0f4f4] dark:bg-[#233535] hover:bg-primary/10 hover:text-primary transition-colors text-[#111818] dark:text-white py-2 rounded-lg text-sm font-bold flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-lg">edit</span>
                                        Edit
                                    </button>
<button class="size-9 bg-red-50 text-red-500 hover:bg-red-100 transition-colors rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</div>
</div>
</div>
</section>
</div>
</main>
</div>
</body></html>