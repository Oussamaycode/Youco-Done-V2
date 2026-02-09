<!DOCTYPE html>

<html class="light" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
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
                        "display": ["Work Sans"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body { font-family: 'Work Sans', sans-serif; }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark text-[#0d1b13] dark:text-white font-display min-h-screen pb-24">
<!-- Top Navigation Bar -->
<div class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between p-4 bg-gradient-to-b from-black/40 to-transparent">
<button class="bg-white/20 backdrop-blur-md rounded-full p-2 text-white">
<span class="material-symbols-outlined">arrow_back_ios_new</span>
</button>
<div class="flex gap-2">
<button class="bg-white/20 backdrop-blur-md rounded-full p-2 text-white">
<span class="material-symbols-outlined">share</span>
</button>
<button class="bg-white/20 backdrop-blur-md rounded-full p-2 text-white">
<span class="material-symbols-outlined text-primary fill-current">favorite</span>
</button>
</div>
</div>
<!-- Image Carousel Section -->
<div class="relative w-full overflow-x-auto snap-x snap-mandatory flex hide-scrollbar h-[350px]">
<div class="snap-center shrink-0 w-full h-full bg-center bg-cover" data-alt="Intérieur élégant du restaurant avec éclairage tamisé" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDa4KmrZAq0gss4StsKdxz3yTPM1PdO4AWjloS_pbFFXIZTRF48dRyNYqMeexz4iKxYTjRS2BR1LeTirRttNqeog1GDzsHUEXcE2ZC3yEoqoxzVxU7n6t0BkGnbj9JmH933IHS_mhFWXojaDeTIZalm-sP_pkpJX_yjfCPyGCUUNJSKB2_17LBx9rKLDnP0AXnSnqEk4d8Oz-wYG48-YjjWQ0j7XgaW3-RtpcL6jCLvpocss9-bfWwHW7x-L0J8ilJmmY8Cap3JxX6g');"></div>
<div class="snap-center shrink-0 w-full h-full bg-center bg-cover" data-alt="Plat gastronomique dressé artistiquement avec des fleurs comestibles" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAwQCkW3LzVl6YEhg1uHSKXimjYjWO8bIMZc_qdweWAXs3mxbgw_ePLnNLE53pHO1I3jiWiO-jxcoJvfOC6jY9mfNDKYuU3iqL6JlfVM_Le_DnW3UisDNLUJhCNFg1tv2zFYzoN-proGVmownGIszjeHNvwZWPe03JXMCt-unGTwTVXaRNCBvLEYs629Yn3SWj5Liag3y_RsG4etqGHtaH1W9kzhYh2IO5u0IzSBK5PnYIzglcLNgo9JYr0cR3d01bhklSAryhhB0nj');"></div>
<div class="snap-center shrink-0 w-full h-full bg-center bg-cover" data-alt="Table de restaurant avec verres de vin et nappe blanche" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBkHWiYz-MIDwVV7PWOvWORNLWzwZkVEsp5gv3QkLr1OAPV4j9DieQHuYpjn01VzDnEYI8lXhx5Mm5EblcUUocd6geA8SQll8e_2_OIf3WmCzXY-pF3J2M79aR1Q3X1tH3337AGjmKwQG3RdNJjtjlPpbSwJtCrfJdwlCxyg2cIV483BosAHcdcqIkhQb3fEPCQTDPG22mhuafZO8iF6SRDAW8liUYkt3tiVwvjZaZKMjD-7b3YnCN6HEROG-bL8yKlliuy1krgj5K8');"></div>
<!-- Pagination Indicator -->
<div class="absolute bottom-4 right-4 bg-black/60 text-white text-xs px-3 py-1 rounded-full backdrop-blur-sm">
            1 / 3
        </div>
</div>
<!-- Restaurant Header Information -->
<div class="px-4 py-6 bg-background-light dark:bg-background-dark -mt-6 rounded-t-3xl relative z-10">
<div class="flex justify-between items-start mb-2">
<div>
<h1 class="text-3xl font-bold tracking-tight text-[#0d1b13] dark:text-white">Le Jardin Suspendu</h1>
<p class="text-[#4c9a6c] dark:text-primary/80 font-medium mt-1 flex items-center gap-1">
                    Cuisine Française Moderne • 1.2 km
                </p>
</div>
<div class="bg-primary/20 text-primary px-3 py-1 rounded-lg flex items-center gap-1">
<span class="material-symbols-outlined text-sm">star</span>
<span class="font-bold">4.9</span>
</div>
</div>
<div class="flex gap-4 mt-4 overflow-x-auto hide-scrollbar">
<div class="flex items-center gap-2 bg-white dark:bg-background-dark border border-gray-100 dark:border-gray-800 px-4 py-2 rounded-xl shadow-sm whitespace-nowrap">
<span class="material-symbols-outlined text-primary">schedule</span>
<span class="text-sm font-medium">Ouvert (22:30)</span>
</div>
<div class="flex items-center gap-2 bg-white dark:bg-background-dark border border-gray-100 dark:border-gray-800 px-4 py-2 rounded-xl shadow-sm whitespace-nowrap">
<span class="material-symbols-outlined text-primary">euro_symbol</span>
<span class="text-sm font-medium">Gamme : $$$</span>
</div>
</div>
</div>
<!-- Description -->
<div class="px-4 mb-8">
<h3 class="text-xl font-bold mb-2">À propos</h3>
<p class="text-gray-600 dark:text-gray-400 leading-relaxed">
            Situé au dernier étage, Le Jardin Suspendu offre une expérience culinaire aérienne. Notre chef étoilé revisite les classiques de la gastronomie française avec des produits locaux et de saison. 
            <span class="text-primary font-semibold">... Lire plus</span>
</p>
</div>
<!-- Interactive Menu Preview -->
<div class="mb-8">
<div class="flex justify-between items-center px-4 mb-4">
<h3 class="text-xl font-bold">Nos Incontournables</h3>
<button class="text-primary font-semibold text-sm">Voir le menu</button>
</div>
<div class="flex overflow-x-auto gap-4 px-4 hide-scrollbar">
<!-- Dish Card 1 -->
<div class="min-w-[200px] bg-white dark:bg-gray-900 rounded-xl overflow-hidden border border-gray-100 dark:border-gray-800 shadow-sm">
<div class="h-32 bg-cover bg-center" data-alt="Côtelettes de d'agneau grillées avec garniture" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBA8JV07QTK-idyq598njmH0pY06TPdOE4D-5IaICayZg-SN2SPU8RbABF86z2ggWchiukcVwfiI8lIITvd_09MoaTP0vJmUQqnLcBr6PX3-er4MbiXlQXjjNE-XhLznnLuyJZjXLopljoW7Y-Z_XnLz9ZvSjJd_qiaQ5Q84uoyq9ESlTxoGykafqEbE8v2J_9knW53n-Pw9XjtBvGqF-dXJRk4j4Bwv9zDX9v6a_Tvay22GiCvuu4wGTf_jpEfFy75l3j9cFN2t-pD');"></div>
<div class="p-3">
<p class="font-bold text-sm">Carré d'Agneau</p>
<p class="text-primary font-bold text-sm mt-1">32,00 €</p>
</div>
</div>
<!-- Dish Card 2 -->
<div class="min-w-[200px] bg-white dark:bg-gray-900 rounded-xl overflow-hidden border border-gray-100 dark:border-gray-800 shadow-sm">
<div class="h-32 bg-cover bg-center" data-alt="Salade composée fraîche et colorée" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB53Tt3hlhZG7kR4jHx_TGBkQAi2RNJy9LK-cpy4t0CBUxB13RBFAUmtoJqn2llTb5iwGjuGEzxzbx6cjM93I-CwI5AT-aPin4uPxPh012ZxKMhiTNma5EacdZJ8KDb0oamInjnYArm5I5PHEGqOipS7_CyuWGqYIARgtkQ1KIXyzgEK6xcB81S6mbO1N9mgWJZdZpu_L5hCBBiJI7ecwos-wKKPf1zRfNk08PCO5CAWvvcaqZyvuWm5LsTsUg0zbnoO75VMIkdjkex');"></div>
<div class="p-3">
<p class="font-bold text-sm">Salade du Jardin</p>
<p class="text-primary font-bold text-sm mt-1">18,50 €</p>
</div>
</div>
<!-- Dish Card 3 -->
<div class="min-w-[200px] bg-white dark:bg-gray-900 rounded-xl overflow-hidden border border-gray-100 dark:border-gray-800 shadow-sm">
<div class="h-32 bg-cover bg-center" data-alt="Moelleux au chocolat fondant" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCOJVdeRUudfvKtnyMQimKiWPkFG29sKw24fP-JaLL06v1bMt-k0KxdVGhP8EqYOsH16Fs3hS3ohuwifRV35I2LFCnsCRAvF823GnDBw1kU5xhdBCgw3uF0WZVyco-qz74MaZBekpC7cSGcGM9NWcQEZHFWdEpIx_7jP-Xb0YRGKKsXWbGs7uj75S8xyO1s4lGd3ImsqEeNlPEV4isOv1MQCPAOEtplTVLkJXLGuHB762GOQEqqoEEENUxIgLIUKyT141iioQNEloyU');"></div>
<div class="p-3">
<p class="font-bold text-sm">Fondant Cœur Or</p>
<p class="text-primary font-bold text-sm mt-1">12,00 €</p>
</div>
</div>
</div>
</div>
<!-- Location & Opening Hours -->
<div class="px-4 mb-12">
<h3 class="text-xl font-bold mb-4">Informations</h3>
<div class="space-y-4">
<div class="flex items-start gap-4">
<div class="bg-primary/10 p-2 rounded-lg text-primary">
<span class="material-symbols-outlined">location_on</span>
</div>
<div>
<p class="font-semibold text-sm">Adresse</p>
<p class="text-gray-500 text-sm">12 Rue de la Paix, 75002 Paris</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="bg-primary/10 p-2 rounded-lg text-primary">
<span class="material-symbols-outlined">schedule</span>
</div>
<div class="flex-1">
<p class="font-semibold text-sm">Horaires d'ouverture</p>
<div class="mt-2 space-y-1">
<div class="flex justify-between text-sm text-gray-600 dark:text-gray-400">
<span>Lundi - Vendredi</span>
<span>12:00 - 14:30, 19:00 - 22:30</span>
</div>
<div class="flex justify-between text-sm text-[#0d1b13] dark:text-white font-bold">
<span>Samedi</span>
<span>19:00 - 23:30</span>
</div>
<div class="flex justify-between text-sm text-gray-400">
<span>Dimanche</span>
<span>Fermé</span>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Sticky Bottom CTA -->
<div class="fixed bottom-0 left-0 right-0 p-4 bg-white/80 dark:bg-background-dark/80 backdrop-blur-lg border-t border-gray-100 dark:border-gray-800 z-50">
<div class="max-w-md mx-auto flex items-center gap-4">
<div class="hidden sm:block">
<p class="text-xs text-gray-500">Prix moyen</p>
<p class="font-bold">45€ / pers.</p>
</div>
<button class="flex-1 bg-primary hover:bg-primary/90 text-black font-bold py-4 rounded-xl shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2">
<span class="material-symbols-outlined">calendar_month</span>
                Réserver une table
            </button>
</div>
</div>
</body></html>