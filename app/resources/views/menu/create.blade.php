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
<div>

<form method='POST' action='{{route("menu.create")}}' >
    @csrf
<div class="w-full sm:w-1/4">
<label class="text-[10px] font-bold uppercase text-[#638888] mb-1 block">Menu Name</label>
<input name="nom" class="form-input w-full h-10 rounded border-[#dce5e5] dark:bg-[#1a2e2e] text-sm" placeholder="e.g. Ribeye Steak" type="text"/>
</div>
<button type="submit" id="savemenuname" class="px-8 py-2.5 rounded-lg bg-primary text-[#111818] text-sm font-bold shadow-lg shadow-primary/20">Save</butoon>
</form>

</div>
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

<form method="POST" action='{{route("plat.store")}}'>
    @csrf
<div class="flex flex-col sm:flex-row gap-4 p-4 rounded-xl border border-[#dce5e5] dark:border-[#2a3f3f]"  id="menu-container">
<div class="w-full sm:w-1/4">
<label class="text-[10px] font-bold uppercase text-[#638888] mb-1 block">Item Name</label>
<input name="nom" class="form-input w-full h-10 rounded border-[#dce5e5] dark:bg-[#1a2e2e] text-sm" placeholder="e.g. Ribeye Steak" type="text"/>
</div>
<div class="flex-1">
<label class="text-[10px] font-bold uppercase text-[#638888] mb-1 block">Description</label>
<input name="description" class="form-input w-full h-10 rounded border-[#dce5e5] dark:bg-[#1a2e2e] text-sm" placeholder="Ingredients, dietary info..." type="text"/>
</div>
<div class="w-24">
<label class="text-[10px] font-bold uppercase text-[#638888] mb-1 block">Price</label>
<input name="prix" class="form-input w-full h-10 rounded border-[#dce5e5] dark:bg-[#1a2e2e] text-sm text-center" placeholder="0.00" type="text"/>
</div>
<div class="flex items-end pb-1 gap-2">
<button type="submit"
        class="add-item h-10 px-4 rounded-lg bg-primary text-[#111818] text-sm font-bold flex items-center gap-1">
    <span class="material-symbols-outlined text-sm">add</span> Add
</button>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</main>


<footer class="fixed bottom-0 left-0 right-0 bg-white/80 dark:bg-[#1a2e2e]/80 backdrop-blur-md border-t border-[#dce5e5] dark:border-[#2a3f3f] z-40">
<div class="max-w-[1200px] mx-auto px-10 py-4 flex justify-between items-center">
<div class="flex items-center gap-2 text-sm text-[#638888]">
<span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                    All changes autosaved at 10:45 AM
                </div>
<div class="flex gap-4">
<a href='{{route("restaurant.index")}}' class="px-6 py-2.5 rounded-lg border border-[#dce5e5] dark:border-[#2a3f3f] text-sm font-bold">Save Draft</a>

</form>
</div>
</div>
</footer>
</div>
<script>
document.addEventListener("click", function (e) {

    // ➕ Add menu item



    if (e.target.closest(".add-item")) {

        const template = document.getElementById("menu-item-template");
        const clone = template.content.cloneNode(true);

        e.target.closest(".space-y-3").appendChild(clone);
    }

    // 🗑 Remove menu item
    if (e.target.closest(".remove-item")) {
        e.target.closest(".menu-item").remove();
    }
});
</script>

</body></html>
<template id="menu-item-template">
    <form method='POST' action='{{route("plat.store")}}' >
        @csrf
    <div class="menu-item flex flex-col sm:flex-row gap-4 p-4 rounded-xl border border-[#dce5e5] dark:border-[#2a3f3f]">
        <div class="w-full sm:w-1/4">
            <label class="text-[10px] font-bold uppercase text-[#638888] mb-1 block">Item Name</label>
            <input class="form-input w-full h-10 rounded border-[#dce5e5]" type="text" name="nom">
        </div>

        <div class="flex-1">
            <label class="text-[10px] font-bold uppercase text-[#638888] mb-1 block">Description</label>
            <input class="form-input w-full h-10 rounded border-[#dce5e5]" type="text" name="item_description[]">
        </div>

        <div class="w-24">
            <label class="text-[10px] font-bold uppercase text-[#638888] mb-1 block">Price</label>
            <input class="form-input w-full h-10 rounded border-[#dce5e5] text-center" type="number" step="0.01" name="prix">
        </div>

        <div class="flex items-end pb-1">
            <button type="submit"
            class="add-item h-10 px-4 rounded-lg bg-primary text-[#111818] text-sm font-bold flex items-center gap-1">
            <span class="material-symbols-outlined text-sm">add</span> Add
            </button>
        </div>
    </div>
    </form>
</template>
