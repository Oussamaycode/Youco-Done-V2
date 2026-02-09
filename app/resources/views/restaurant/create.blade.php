<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Create/Edit Restaurant - Youco'Done</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
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
                        "display": ["Work Sans", "sans-serif"]
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
        body { font-family: 'Work Sans', sans-serif; }
        .form-input:focus { border-color: #17cfcf; --tw-ring-color: #17cfcf; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#111818] dark:text-white transition-colors duration-200">
<div class="layout-container flex h-full grow flex-col min-h-screen">
<!-- Top Navigation Bar -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#dce5e5] dark:border-[#2a3f3f] bg-white dark:bg-[#1a2e2e] px-10 py-3 sticky top-0 z-50">
<div class="flex items-center gap-4 text-[#111818] dark:text-white">
<div class="size-6 text-primary">
<svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z"></path>
</svg>
</div>
<h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">Youco'Done</h2>
</div>
<div class="flex flex-1 justify-end gap-8 items-center">
<div class="flex items-center gap-9 hidden lg:flex">
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Dashboard</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Reservations</a>
<a class="text-sm font-medium text-primary" href="#">Restaurants</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Analytics</a>
</div>
<button class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-primary text-[#111818] text-sm font-bold">
                    Profile
                </button>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border border-[#dce5e5] dark:border-[#2a3f3f]" data-alt="User profile avatar headshot" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA396RMioDVFnNq_7jKKyvNUgyBM9dov50tAwByvCJyDVUoba0s7fGYqavqVHLrB0dsa9knpOHteBfRDiSUXJMit-x5ogfphauMkym1VtmaI-QIvpDZJH8RvtdeLCM0-V3aora8hFdp9uPIwRhMRA7xUJcJzmDAYzUBxpsUkC7JvAsmk3FVvntgwee1FLiILTjpN8OddHhuCiQW7AG74APPv4BnuxIUKmxDXnGlaZnnP-k3EhBNbktaa3L5NSxGGvgTchOme3I9J5I");'></div>
</div>
</header>
<main class="flex-1 max-w-[1200px] mx-auto w-full px-4 sm:px-10 py-8">
<!-- Page Heading -->
<div class="flex flex-wrap justify-between items-end gap-4 mb-8">
<div class="flex flex-col gap-2">
<p class="text-[#111818] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">Create New Restaurant</p>
<p class="text-[#638888] dark:text-[#a1b8b8] text-base font-normal">Step-by-step setup to get your business listed.</p>
</div>
<div class="flex gap-3">
<button class="flex items-center justify-center rounded-lg h-10 px-4 bg-[#f0f4f4] dark:bg-[#1a2e2e] text-[#111818] dark:text-white text-sm font-bold">
<span class="material-symbols-outlined mr-2 text-lg">visibility</span> View Preview
                    </button>
<button class="flex items-center justify-center rounded-lg h-10 px-4 bg-primary text-[#111818] text-sm font-bold">
                        Publish Changes
                    </button>
</div>
</div>
<div class="flex flex-col md:flex-row gap-8">
<!-- Sidebar Nav -->
<aside class="w-full md:w-64 flex-shrink-0">
<div class="sticky top-24 space-y-2 bg-white dark:bg-[#1a2e2e] p-4 rounded-xl border border-[#dce5e5] dark:border-[#2a3f3f]">
<h3 class="px-3 pb-2 text-xs font-bold uppercase tracking-wider text-[#638888]">Setup Progress</h3>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/20 text-primary font-bold" href="#basic-info">
<span class="material-symbols-outlined">info</span>
<span class="text-sm">Basic Info</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#f0f4f4] dark:hover:bg-[#2a3f3f] transition-colors" href="#location">
<span class="material-symbols-outlined">location_on</span>
<span class="text-sm">Location</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#f0f4f4] dark:hover:bg-[#2a3f3f] transition-colors" href="#hours">
<span class="material-symbols-outlined">schedule</span>
<span class="text-sm">Hours &amp; Capacity</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#f0f4f4] dark:hover:bg-[#2a3f3f] transition-colors" href="#photos">
<span class="material-symbols-outlined">image</span>
<span class="text-sm">Photos</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#f0f4f4] dark:hover:bg-[#2a3f3f] transition-colors" href="#menu">
<span class="material-symbols-outlined">restaurant_menu</span>
<span class="text-sm">Menu Management</span>
</a>
</div>
</aside>
<!-- Form Content -->
<div class="flex-1 space-y-12 pb-20">
<!-- Basic Info Section -->
<form method='POST' action='{{route("restaurant.store")}}'>
   @csrf
<section class="bg-white dark:bg-[#1a2e2e] rounded-xl border border-[#dce5e5] dark:border-[#2a3f3f] overflow-hidden" id="basic-info">
<h2 class="text-xl font-bold px-6 py-4 border-b border-[#dce5e5] dark:border-[#2a3f3f]">Basic Information</h2>
<div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="col-span-2">
<label class="flex flex-col gap-2">
<span class="text-sm font-medium">Restaurant Name</span>
<input name="nom" class="form-input w-full rounded-lg border-[#dce5e5] dark:bg-[#112121] dark:border-[#2a3f3f] h-12 px-4" placeholder="e.g. The Golden Spoon" type="text"/>
</label>
</div>
<div class="col-span-2 md:col-span-1">
<label class="flex flex-col gap-2">
<span class="text-sm font-medium">Cuisine Type</span>
<select name="typecuisine" required
    class="form-input w-full rounded-lg border-[#dce5e5] dark:bg-[#112121] dark:border-[#2a3f3f] h-12 px-4">

    <option value="" disabled selected>Select Cuisine</option>

    @foreach ($typecuisines as $typecuisine)
        <option value="{{ $typecuisine->id }}">
            {{ $typecuisine->nom }}
        </option>
    @endforeach
</select>

</label>
</div>
<div class="col-span-2 md:col-span-1">
<label class="flex flex-col gap-2">
<span class="text-sm font-medium">Price Range</span>
<select  class="form-input w-full rounded-lg border-[#dce5e5] dark:bg-[#112121] dark:border-[#2a3f3f] h-12 px-4">
<option>$ (Budget)</option>
<option>$$ (Moderate)</option>
<option>$$$ (Fine Dining)</option>
</select>
</label>
</div>
<div class="col-span-2">
<label class="flex flex-col gap-2">
<span class="text-sm font-medium">Description</span>
<textarea class="form-input w-full rounded-lg border-[#dce5e5] dark:bg-[#112121] dark:border-[#2a3f3f] min-h-[120px] p-4" placeholder="Tell guests what makes your restaurant special..."></textarea>
</label>
</div>
</div>
</section>
<!-- Location Section -->
<section class="bg-white dark:bg-[#1a2e2e] rounded-xl border border-[#dce5e5] dark:border-[#2a3f3f] overflow-hidden" id="location">
<h2 class="text-xl font-bold px-6 py-4 border-b border-[#dce5e5] dark:border-[#2a3f3f]">Location</h2>
<div class="p-6 space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="col-span-2">
<label class="flex flex-col gap-2">
<span class="text-sm font-medium">Street Address</span>
<input name="street_address" class="form-input w-full rounded-lg border-[#dce5e5] dark:bg-[#112121] dark:border-[#2a3f3f] h-12 px-4" placeholder="123 Culinary Ave" type="text"/>
</label>
</div>
<div class="col-span-1">
<label class="flex flex-col gap-2">
<span class="text-sm font-medium">City</span>
<input name="city" class="form-input w-full rounded-lg border-[#dce5e5] dark:bg-[#112121] dark:border-[#2a3f3f] h-12 px-4" placeholder="San Francisco" type="text"/>
</label>
</div>
<div class="col-span-1">
<label class="flex flex-col gap-2">
<span class="text-sm font-medium">Zip Code</span>
<input name="zip_code" class="form-input w-full rounded-lg border-[#dce5e5] dark:bg-[#112121] dark:border-[#2a3f3f] h-12 px-4" placeholder="94103" type="text"/>
</label>
</div>
</div>
<div class="rounded-xl overflow-hidden border border-[#dce5e5] dark:border-[#2a3f3f] relative group">
<div class="h-[250px] w-full bg-[#f0f4f4] dark:bg-[#2a3f3f] bg-cover bg-center" data-location="San Francisco" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB6MYMHMwUOdcVjffspAuwSm4Gu8kX8fMvqGD6hf4cK85_ksAij_Asn1vL5_iN3n-jh3sSroKMLCjwV4TzxBvtxyxkrZ7RcnbHfK_cKEjY-Go4lj0wE_00Prsv9f019HawZmTmiKyLqKeyLqYSt3Nxh2Qc2WhCfqWPmiJVi73U-d1qKi4srWRstM8k-MZ-wdKmUSp9rJ-uAeUjeVua3k93lie4GparIA81NjgdcfjFya_Bfi7kA9_MgasT_TcIKvKiaqWm_fTFHo4w');">
<div class="absolute inset-0 bg-black/10 flex items-center justify-center">
<div class="bg-white dark:bg-[#1a2e2e] p-3 rounded-lg shadow-xl flex items-center gap-2">
<span class="material-symbols-outlined text-primary">location_on</span>
<span class="font-bold text-sm">Drop Pin to Verify</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Capacity & Hours Section -->
<section class="bg-white dark:bg-[#1a2e2e] rounded-xl border border-[#dce5e5] dark:border-[#2a3f3f] overflow-hidden" id="hours">
<div class="flex items-center justify-between px-6 py-4 border-b border-[#dce5e5] dark:border-[#2a3f3f]">
<h2 class="text-xl font-bold">Capacity &amp; Hours</h2>
<div class="flex items-center gap-4">
<label class="flex items-center gap-2">
<span class="text-xs font-medium">Total Seats:</span>
<input name="capacite" class="w-16 h-8 rounded border-[#dce5e5] dark:bg-[#112121] text-sm" type="number" value="45"/>
</label>
</div>
</div>
<div class="p-6">
<div class="space-y-4">
<div class="grid grid-cols-7 gap-4 text-center pb-4 text-xs font-bold text-[#638888]">
<div>MON</div><div>TUE</div><div>WED</div><div>THU</div><div>FRI</div><div class="text-primary">SAT</div><div class="text-primary">SUN</div>
</div>
<div class="space-y-3">
<!-- Monday -->
<div class="flex items-center justify-between p-3 rounded-lg bg-background-light dark:bg-[#112121] border border-[#dce5e5] dark:border-[#2a3f3f]">
<div class="flex items-center gap-4 w-1/4">
<input checked="" class="rounded text-primary focus:ring-primary h-5 w-5" type="checkbox"/>
<span class="font-medium">Monday</span>
</div>
<div class="flex items-center gap-4 flex-1 justify-end">
<input class="h-10 rounded-lg border-[#dce5e5] dark:bg-[#1a2e2e] text-sm" type="time" value="09:00"/>
<span class="text-[#638888]">to</span>
<input class="h-10 rounded-lg border-[#dce5e5] dark:bg-[#1a2e2e] text-sm" type="time" value="22:00"/>
</div>
</div>
<!-- Friday -->
<div class="flex items-center justify-between p-3 rounded-lg bg-background-light dark:bg-[#112121] border border-[#dce5e5] dark:border-[#2a3f3f]">
<div class="flex items-center gap-4 w-1/4">
<input checked="" class="rounded text-primary focus:ring-primary h-5 w-5" type="checkbox"/>
<span class="font-medium">Friday</span>
</div>
<div class="flex items-center gap-4 flex-1 justify-end">
<input class="h-10 rounded-lg border-[#dce5e5] dark:bg-[#1a2e2e] text-sm" type="time" value="09:00"/>
<span class="text-[#638888]">to</span>
<input class="h-10 rounded-lg border-[#dce5e5] dark:bg-[#1a2e2e] text-sm" type="time" value="23:30"/>
</div>
</div>
<!-- Weekend -->
<div class="flex items-center justify-between p-3 rounded-lg bg-primary/5 border border-primary/20">
<div class="flex items-center gap-4 w-1/4">
<input checked="" class="rounded text-primary focus:ring-primary h-5 w-5" type="checkbox"/>
<span class="font-medium">Saturday</span>
</div>
<div class="flex items-center gap-4 flex-1 justify-end">
<input class="h-10 rounded-lg border-primary/30 dark:bg-[#1a2e2e] text-sm" type="time" value="10:00"/>
<span class="text-[#638888]">to</span>
<input class="h-10 rounded-lg border-primary/30 dark:bg-[#1a2e2e] text-sm" type="time" value="00:00"/>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Photos Section -->
<section class="bg-white dark:bg-[#1a2e2e] rounded-xl border border-[#dce5e5] dark:border-[#2a3f3f] overflow-hidden" id="photos">
<h2 class="text-xl font-bold px-6 py-4 border-b border-[#dce5e5] dark:border-[#2a3f3f]">Restaurant Photos</h2>
<div class="p-6">
<div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
<div class="aspect-square rounded-xl border-2 border-dashed border-[#dce5e5] dark:border-[#2a3f3f] flex flex-col items-center justify-center gap-2 hover:border-primary cursor-pointer transition-colors group">
<span class="material-symbols-outlined text-4xl text-[#638888] group-hover:text-primary">add_a_photo</span>
<span class="text-xs font-medium">Add Photo</span>
</div>
<div class="aspect-square rounded-xl bg-cover bg-center relative group" data-alt="Close up of gourmet dish" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDGfnV4W15xlg50GNWrMJgzpbsbenGKUaI9-1tYHZnoekP865YBaRNP6biSr4w93HHjnhCBSKH_BGavLpOpZ4l3dyPaYOBs-2NqpdqGx7a3L0TAQ0MCXSK8HTjnmzgsdto5yPEEQeiATNdUgJbBgdJLcIZDP8y5dC7p3ryeIQl4pov_ocdHTrlBrXq2NnChWhhYjEg144U6nigqnPl6c3FMaPSdODvOv8F-jaG5aMNYwybbhLMU24Dp5ZpkfV8MtoDiihSDw5AHLRg');">
<div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-2 rounded-xl">
<button class="bg-white p-1 rounded-full text-red-500"><span class="material-symbols-outlined text-sm">delete</span></button>
<button class="bg-white p-1 rounded-full text-primary"><span class="material-symbols-outlined text-sm">edit</span></button>
</div>
<div class="absolute top-2 left-2 bg-primary text-[#111818] text-[10px] font-bold px-2 py-0.5 rounded uppercase">Cover</div>
</div>
<div class="aspect-square rounded-xl bg-cover bg-center relative" data-alt="Interior of modern restaurant" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDGunNFACT3VJ50E_85hNdFuiFogEqYwT_4FKubkBx7gZq6WObL4YU9dIwiRGx343z7l7Iu8_xoVxUluOM8LHk3ajlMkdPAvD691QIorROWS4h7HzVKGO_YFsmd1Nz851YoTv4J-fspeHn9vUrZpsFkUgVZ2DMRR5H6EZtJVIeC1BAh3ygRlE7KZE1c2z2kIj9wwkQHHZsHoHoyI8NS95vOX3bRCQPlDhZlm_-V-1BhiNjGh4DudXoEPGYvyr-3r3nJM9q5HhacA1c');"></div>
<div class="aspect-square rounded-xl bg-cover bg-center relative" data-alt="Chef preparing food" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC92Z-qlhjBV2H_L70STUbN_5I986-evrTZ6vk2GMGPvws6dI1OzvFEKmd_3CVNug279-IU94yHD5dXr1MHx3NczIQ-nmYDZov9jjgIfCry3cjJPy4uk9A5KZITiT63vM_11_xdX49RXJOIZpgQOaWJ9uVaYSXaEeJudulnYdAasthBX-79Hx0UUrRTjl_TD4Z8g8pKnH0QYgnW60TeNtPCVuZ5gAWIvZx8XA0BabAHHwvxs9yXpHUfk01FMnC72_9-RZbttDLVUJo');"></div>
</div>
</div>
</section>
<!-- Menu Management Section -->
<section class="bg-white dark:bg-[#1a2e2e] rounded-xl border border-[#dce5e5] dark:border-[#2a3f3f] overflow-hidden" id="menu">
<div class="flex items-center justify-between px-6 py-4 border-b border-[#dce5e5] dark:border-[#2a3f3f]">
<h2 class="text-xl font-bold">Menu Management</h2>
<button class="text-sm font-bold text-primary flex items-center gap-1">
<span class="material-symbols-outlined text-lg">add</span> Add Category
                            </button>
</div>
<div class="p-6 space-y-8">
<!-- Category Block -->
<div>
<div class="flex items-center justify-between mb-4">
<h3 class="font-bold flex items-center gap-2">
                                        Main Courses <span class="text-xs font-normal text-[#638888]">(4 items)</span>
</h3>
<button class="text-[#638888]"><span class="material-symbols-outlined">more_horiz</span></button>
</div>
<div class="space-y-3">
<!-- Menu Item -->
<div class="flex flex-col sm:flex-row gap-4 p-4 rounded-xl border border-[#dce5e5] dark:border-[#2a3f3f] bg-background-light/50 dark:bg-[#112121]/50">
<div class="w-full sm:w-1/4">
<label class="text-[10px] font-bold uppercase text-[#638888] mb-1 block">Item Name</label>
<input class="form-input w-full h-10 rounded border-[#dce5e5] dark:bg-[#1a2e2e] text-sm font-medium" type="text" value="Truffle Tagliatelle"/>
</div>
<div class="flex-1">
<label class="text-[10px] font-bold uppercase text-[#638888] mb-1 block">Description</label>
<input class="form-input w-full h-10 rounded border-[#dce5e5] dark:bg-[#1a2e2e] text-sm" type="text" value="Fresh pasta with seasonal black truffles and parmesan cream"/>
</div>
<div class="w-24">
<label class="text-[10px] font-bold uppercase text-[#638888] mb-1 block">Price</label>
<input class="form-input w-full h-10 rounded border-[#dce5e5] dark:bg-[#1a2e2e] text-sm text-center" type="text" value="$28.00"/>
</div>
<div class="flex items-end pb-1 gap-2">
<button class="h-8 w-8 rounded bg-[#f0f4f4] dark:bg-[#2a3f3f] flex items-center justify-center text-red-500">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</div>
<!-- Menu Item -->
<div class="flex flex-col sm:flex-row gap-4 p-4 rounded-xl border border-[#dce5e5] dark:border-[#2a3f3f]">
<div class="w-full sm:w-1/4">
<label class="text-[10px] font-bold uppercase text-[#638888] mb-1 block">Item Name</label>
<input class="form-input w-full h-10 rounded border-[#dce5e5] dark:bg-[#1a2e2e] text-sm" placeholder="e.g. Ribeye Steak" type="text"/>
</div>
<div class="flex-1">
<label class="text-[10px] font-bold uppercase text-[#638888] mb-1 block">Description</label>
<input class="form-input w-full h-10 rounded border-[#dce5e5] dark:bg-[#1a2e2e] text-sm" placeholder="Ingredients, dietary info..." type="text"/>
</div>
<div class="w-24">
<label class="text-[10px] font-bold uppercase text-[#638888] mb-1 block">Price</label>
<input class="form-input w-full h-10 rounded border-[#dce5e5] dark:bg-[#1a2e2e] text-sm text-center" placeholder="0.00" type="text"/>
</div>
<div class="flex items-end pb-1 gap-2">
<button class="h-10 px-4 rounded-lg bg-primary text-[#111818] text-sm font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-sm">add</span> Add
                                            </button>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</main>
<!-- Sticky Footer Actions -->
<footer class="fixed bottom-0 left-0 right-0 bg-white/80 dark:bg-[#1a2e2e]/80 backdrop-blur-md border-t border-[#dce5e5] dark:border-[#2a3f3f] z-40">
<div class="max-w-[1200px] mx-auto px-10 py-4 flex justify-between items-center">
<div class="flex items-center gap-2 text-sm text-[#638888]">
<span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                    All changes autosaved at 10:45 AM
                </div>
<div class="flex gap-4">
<button class="px-6 py-2.5 rounded-lg border border-[#dce5e5] dark:border-[#2a3f3f] text-sm font-bold">Save Draft</button>
<button type="submit" class="px-8 py-2.5 rounded-lg bg-primary text-[#111818] text-sm font-bold shadow-lg shadow-primary/20">Next Section: Menu</button>
</form>
</div>
</div>
</footer>
</div>
</body></html>