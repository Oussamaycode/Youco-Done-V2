<!DOCTYPE html>

<html class="light" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Youco'Done - Accueil Exploration Client</title>
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
                        "primary": "#2bee7c",
                        "background-light": "#f6f8f7",
                        "background-dark": "#102218",
                    },
                    fontFamily: {
                        "display": ["Work Sans", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#0d1b13] dark:text-white transition-colors duration-300">
<div class="relative flex min-h-screen w-full flex-col max-w-[480px] mx-auto overflow-x-hidden shadow-2xl bg-white dark:bg-background-dark pb-20">
<!-- Top Navigation -->
<header class="sticky top-0 z-50 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md px-4 pt-6 pb-2">
<div class="flex items-center justify-between mb-4">
<div class="flex items-center gap-3">
<div class="size-10 shrink-0 bg-primary/20 rounded-full flex items-center justify-center overflow-hidden border-2 border-primary">
<div class="w-full h-full bg-cover bg-center" data-alt="Portrait of a happy customer smiling" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBJ-Ax2MmRjsBlHV-tgG-po6Y4mAHKdOH2UkUW8BRwMZF_BtrM0tfa344dcGjnLQpQBzwNDNizTOfnIczZYqtfZbsd-IzbTMCsVFcLer1v82LLwmBEmHTFQm3qzJ_utq1Bu8FMP6pBu7U-HwWTP04j06T-aMDwepqjc8d8_hbgPM9LepHA1NSn-DChads0Y8btxLt3ocKSxQCmo2OgGy2bqUZrlO9BsqWppyqlNetN7EzfXSbb4aA6mUgjVKzlQTSRh_wJR9gNGeocv');"></div>
</div>
<div>
<p class="text-xs text-slate-500 dark:text-slate-400 font-medium">Bon appétit,</p>
<h2 class="text-lg font-bold leading-tight">Mélissa 👋</h2>
</div>
</div>
<div class="flex gap-2">
<button class="p-2 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-200">
<span class="material-symbols-outlined text-[24px]">notifications</span>
</button>
</div>
</div>
<!-- Search Bar Component -->
<div class="pb-2">
<label class="flex flex-col min-w-40 h-12 w-full">
<div class="flex w-full flex-1 items-stretch rounded-xl h-full shadow-sm">
<div class="text-primary flex border-none bg-slate-100 dark:bg-slate-800 items-center justify-center pl-4 rounded-l-xl">
<span class="material-symbols-outlined">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-r-xl text-[#0d1b13] dark:text-white focus:outline-0 focus:ring-0 border-none bg-slate-100 dark:bg-slate-800 placeholder:text-slate-400 px-4 pl-2 text-sm font-normal leading-normal" placeholder="Ville, cuisine ou restaurant" value=""/>
<div class="flex items-center pr-3 bg-slate-100 dark:bg-slate-800 rounded-r-xl">
<span class="material-symbols-outlined text-slate-400 text-sm">tune</span>
</div>
</div>
</label>
</div>
</header>
<!-- Chips Component (Categories) -->
<section class="mt-2">
<div class="flex gap-3 px-4 py-2 overflow-x-auto no-scrollbar">
<button class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-primary px-5 shadow-sm shadow-primary/30">
<span class="material-symbols-outlined text-[18px] text-white">restaurant</span>
<p class="text-white text-sm font-semibold">Tous</p>
</button>
<button class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-white dark:bg-slate-800 border border-slate-100 dark:border-slate-700 px-4">
<span class="material-symbols-outlined text-[18px] text-orange-500">local_pizza</span>
<p class="text-sm font-medium">Italien</p>
</button>
<button class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-white dark:bg-slate-800 border border-slate-100 dark:border-slate-700 px-4">
<span class="material-symbols-outlined text-[18px] text-red-500">set_meal</span>
<p class="text-sm font-medium">Sushi</p>
</button>
<button class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-white dark:bg-slate-800 border border-slate-100 dark:border-slate-700 px-4">
<span class="material-symbols-outlined text-[18px] text-blue-500">bakery_dining</span>
<p class="text-sm font-medium">Français</p>
</button>
<button class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-white dark:bg-slate-800 border border-slate-100 dark:border-slate-700 px-4">
<span class="material-symbols-outlined text-[18px] text-green-600">eco</span>
<p class="text-sm font-medium">Vegan</p>
</button>
</div>
</section>
<!-- Section Header -->
<section>
<div class="flex items-center justify-between px-4 pt-6 pb-3">
<h2 class="text-xl font-bold tracking-tight">À la une cette semaine</h2>
<button class="text-primary text-sm font-semibold">Voir tout</button>
</div>
<!-- Carousel Component -->
<div class="flex overflow-x-auto no-scrollbar snap-x snap-mandatory">
<div class="flex items-stretch px-4 gap-4">
<!-- Card 1 -->
<div class="flex h-full flex-1 flex-col gap-3 rounded-xl min-w-[280px] snap-start">
<div class="relative w-full aspect-[16/10] bg-center bg-no-repeat bg-cover rounded-2xl shadow-lg" data-alt="Delicious pasta carbonara in a rustic plate" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBUKxxkbqgWIHyHRnuGk6tubyN5rC_Cs3_4j5V1hJbHV1UJglrBoeLN-htsrlYAN6y1VFjha_D5r3vrB0yxSoNwj3HijQi3pO-dmLXhgwEyhCYAJ_uNt6kS42MSyp2BzSFX3WkbQNLx4tKsEiBuTFoeZc4jk54h8DaJ8AuFhdgnlHDmYSeetoKHNxstNUIfOnOhS7SVcJ6_vpiIlmGvJ22oUfCi4rR6YsL1ASNGpS6BSoJ6rKLX8eH4fbQJq-40DXPAsjnNxzPhWZ2a");'>
<div class="absolute top-3 right-3 bg-white/90 dark:bg-black/80 backdrop-blur-sm px-2 py-1 rounded-lg flex items-center gap-1 shadow-sm">
<span class="material-symbols-outlined text-yellow-500 text-[16px] fill-current">star</span>
<span class="text-xs font-bold">4.9</span>
</div>
</div>
<div class="px-1">
<div class="flex justify-between items-start">
<p class="text-base font-bold leading-tight">Osteria del Corso</p>
<p class="text-primary font-bold text-sm">€€€</p>
</div>
<p class="text-slate-500 dark:text-slate-400 text-xs font-medium mt-1">Italien • 1.2 km • Paris 8e</p>
</div>
</div>
<!-- Card 2 -->
<div class="flex h-full flex-1 flex-col gap-3 rounded-xl min-w-[280px] snap-start">
<div class="relative w-full aspect-[16/10] bg-center bg-no-repeat bg-cover rounded-2xl shadow-lg" data-alt="Beautifully arranged sushi platter with salmon" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAaFxqQINM5RAaMq9n6i1tV_U4fUTqFwnMIHI0oBSXvQwZcL0UR1j-bdl65BjwUS-mXC_oBX6x3u1AumhN6qTQ7Uye9Rt5NNSHt1bbEHiXxWFT3uz10J0eEMyThDBIBN80F5-bKuZG5mAhZy9BduGM_Ei0W0Cu2giNsWWsFOFQBNes5EH_rFRY46XjiXPar6zrHSKqz3a5s1g31VQSa9HJQTZCMOl50AmSvu5Y84ARYnstemw61d7Y2Mv31p1gNUcvn59M6vSCUp54P");'>
<div class="absolute top-3 right-3 bg-white/90 dark:bg-black/80 backdrop-blur-sm px-2 py-1 rounded-lg flex items-center gap-1 shadow-sm">
<span class="material-symbols-outlined text-yellow-500 text-[16px] fill-current">star</span>
<span class="text-xs font-bold">4.7</span>
</div>
</div>
<div class="px-1">
<div class="flex justify-between items-start">
<p class="text-base font-bold leading-tight">Yuzu Zen</p>
<p class="text-primary font-bold text-sm">€€€€</p>
</div>
<p class="text-slate-500 dark:text-slate-400 text-xs font-medium mt-1">Japonais • 0.8 km • Paris 1er</p>
</div>
</div>
</div>
</div>
</section>
<!-- Section: Popular Near You (List Style) -->
<section class="px-4 pt-8">
<h2 class="text-xl font-bold tracking-tight mb-4">Populaire à proximité</h2>
<div class="space-y-6">
<!-- List Item 1 -->
<div class="flex gap-4 group">
<div class="size-24 shrink-0 rounded-2xl bg-cover bg-center shadow-md" data-alt="Gourmet hamburger with melted cheese and fries" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCyj_1LfUCbtFR5D2OBcHQiRRdtFF5mZwKi8KMQYX5zFSmA5cDPDb3Y0ZTUcujCSS8-EFh7B9DyDYJyt-D-2knnPnf5ROwalV48mGG246BAlXNmARpZm7UeYk9F5z6foe4EK3o7p51ADbLIlQt78tsj_lTdlHepr1jzCtZIuhLglQ7gPpJkHDahD8PAf8_cnXOKAzwGV7w-4vc1N7Z31mydgD4jyaqpedGrq0Bhj6waMriYcq-5twYViEqE_WF5k2LlwvEKIv6mnCkn');"></div>
<div class="flex flex-col justify-center flex-1">
<div class="flex justify-between items-center">
<h3 class="font-bold text-base">Le Petit Burger</h3>
<button class="text-slate-300">
<span class="material-symbols-outlined">favorite</span>
</button>
</div>
<p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Burgers • 500m • Rapide</p>
<div class="flex items-center gap-2 mt-2">
<div class="flex items-center text-xs font-bold text-slate-700 dark:text-slate-200 bg-slate-100 dark:bg-slate-800 px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px] text-yellow-500 fill-current mr-1">star</span> 4.5
                            </div>
<span class="text-[10px] text-slate-400 font-medium">(1.2k avis)</span>
</div>
</div>
</div>
<!-- List Item 2 -->
<div class="flex gap-4 group">
<div class="size-24 shrink-0 rounded-2xl bg-cover bg-center shadow-md" data-alt="Traditional French bakery display with croissants" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCI1rRSDQgMXHrMgwyARUzYrMm1IGiyyFiG9HOnlHtHmsu3Tko9-A6iXUa0KyjPpKsSMxKM3tApPaKEgakkgXoaagNUVHdkI7E0ZYMW2ZiFnWtRGx3FQOXfxPGQrzVKe9pTZajaMHkltsVo2uHQZAzurKlyI5F_vBJrNcz5HuZe9_jPy52QymNYVGxUD2XjXYOfTmNSEv3CF_g3LBl1bC9VSv_t9pC_OLAGClXYOY-zFX37Py8G6TEm2vaxAe_4OhEk9VHfBsZiMbnU');"></div>
<div class="flex flex-col justify-center flex-1">
<div class="flex justify-between items-center">
<h3 class="font-bold text-base">Maison Gourmande</h3>
<button class="text-primary">
<span class="material-symbols-outlined fill-current">favorite</span>
</button>
</div>
<p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Boulangerie • 2.4 km • Tradition</p>
<div class="flex items-center gap-2 mt-2">
<div class="flex items-center text-xs font-bold text-slate-700 dark:text-slate-200 bg-slate-100 dark:bg-slate-800 px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px] text-yellow-500 fill-current mr-1">star</span> 4.8
                            </div>
<span class="text-[10px] text-slate-400 font-medium">(840 avis)</span>
</div>
</div>
</div>
<!-- List Item 3 -->
<div class="flex gap-4 group">
<div class="size-24 shrink-0 rounded-2xl bg-cover bg-center shadow-md" data-alt="Authentic colorful street tacos with lime" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCQMo0HwhqY7zh8NSf8xdzAzX6FUpQ62gSZlWL3xOX8rDhcFgSbQ2asbA1HZdt1xA_5aRNeJkF3LPH-UDNsDWdWkp2AYYnkC0EECVfD_krkqrSLl6GdKvdmNcEuxGFGuFBJpFKtmTHC7uNH95MpBVl4jvwlKbmrLxw8nCF5MQNf_p-_V42H5afbfFlypIecRUY6-cqiJH1jKQqYfp663mHiocdrJ_ePEOpm7F3rbxq8eI9M8aGxjbA1HCI7Aue37hj3nyGsLPri4Nfl');"></div>
<div class="flex flex-col justify-center flex-1">
<div class="flex justify-between items-center">
<h3 class="font-bold text-base">Tacopedia</h3>
<button class="text-slate-300">
<span class="material-symbols-outlined">favorite</span>
</button>
</div>
<p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Mexicain • 3.1 km • €€</p>
<div class="flex items-center gap-2 mt-2">
<div class="flex items-center text-xs font-bold text-slate-700 dark:text-slate-200 bg-slate-100 dark:bg-slate-800 px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px] text-yellow-500 fill-current mr-1">star</span> 4.3
                            </div>
<span class="text-[10px] text-slate-400 font-medium">(2.5k avis)</span>
</div>
</div>
</div>
</div>
</section>
<!-- Map Section (Preview) -->
<section class="px-4 pt-8">
<div class="relative w-full h-32 rounded-2xl overflow-hidden bg-slate-200 dark:bg-slate-800 border border-slate-100 dark:border-slate-700 flex items-center justify-center">
<div class="absolute inset-0 bg-cover bg-center opacity-70 grayscale" data-location="Paris" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCBnKc9LZca2j2oafrhdj7wlTwCQv2yUulW9oVLsc32YLS_QvOLgCWk3Yy9TgEKnis2l4KY3L4XvnZqkp7GfVus2Ew2UJ8exeyGIRGC66MTME6wM6dIFBv9o0Fp2P0OJ6YO5arGZlZfP8on-KBhCmVVRj3MkGFQbOi7tUbZwSpF6PzDMB6egpJGVPeb0zT4o-dPO3xd4q6rimzQn70eMc04-KKgdnnFTAO6X3Edpetphys8A--uSkmkPUqRG3dp4MOO1F3MhjBNpXNI');"></div>
<div class="relative z-10 text-center">
<button class="bg-primary text-white px-6 py-2 rounded-full font-bold shadow-lg flex items-center gap-2">
<span class="material-symbols-outlined text-[20px]">map</span>
                        Explorer la carte
                    </button>
</div>
</div>
</section>
<!-- Space for Footer -->
<div class="h-10"></div>
<!-- Bottom Navigation Bar (iOS style) -->
<nav class="fixed bottom-0 left-1/2 -translate-x-1/2 w-full max-w-[480px] bg-white/90 dark:bg-background-dark/95 backdrop-blur-xl border-t border-slate-200 dark:border-slate-800 flex justify-around items-center h-20 px-6 pb-4">
<button class="flex flex-col items-center gap-1 text-primary">
<span class="material-symbols-outlined fill-current">explore</span>
<span class="text-[10px] font-bold">Explorer</span>
</button>
<button class="flex flex-col items-center gap-1 text-slate-400">
<span class="material-symbols-outlined">calendar_month</span>
<span class="text-[10px] font-medium">Résas</span>
</button>
<button class="flex flex-col items-center gap-1 text-slate-400">
<span class="material-symbols-outlined">favorite</span>
<span class="text-[10px] font-medium">Favoris</span>
</button>
<button class="flex flex-col items-center gap-1 text-slate-400">
<span class="material-symbols-outlined">person</span>
<span class="text-[10px] font-medium">Profil</span>
</button>
</nav>
</div>
</body></html>