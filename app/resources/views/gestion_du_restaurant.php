<!DOCTYPE html>

<html class="light" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Gestion du Restaurant - Youco'Done</title>
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
<style>.material-symbols-outlined {
    font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24
    }
body {
    font-family: "Work Sans", sans-serif
    }
.custom-select-arrow {
    appearance: none;
    background-image: url(https://lh3.googleusercontent.com/aida-public/AB6AXuAcsgtfLaHgNVhKr_zdlwdfNfgyTiKpcT7GDF-TvDyC0-Lra3Y3GztgzRzhbDH6sTfRPRnPv4cCyPA_8e0nGRGwOrSEL0t1y1pcWKK3K8raowrFty6Y-M8-Oy6GcM8fjhoLt8xXoVCsfyFcVa5NwcsojIkZS9px41s9BRDy3UnpC8TF4eixafI3PpXrJmUfh5HfkJz7hEjRfs7gIIE8a4LmReAWwoSpS8t3R_nAOzR3G6u8gwCXQKdGyJHB_pMZsUGF6DThPRdEXPMH);
    background-repeat: no-repeat;
    background-position: right 1rem center
    }</style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark min-h-screen">
<div class="relative flex h-auto min-h-screen w-full flex-col bg-background-light dark:bg-background-dark group/design-root overflow-x-hidden">
<!-- TopAppBar -->
<div class="flex items-center bg-background-light dark:bg-background-dark p-4 pb-2 justify-between sticky top-0 z-50 border-b border-primary/10">
<div class="text-[#0d1b13] dark:text-white flex size-12 shrink-0 items-center cursor-pointer">
<span class="material-symbols-outlined" style="font-size: 24px;">arrow_back_ios</span>
</div>
<h2 class="text-[#0d1b13] dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] flex-1 text-center">Gestion du Restaurant</h2>
<div class="flex w-12 items-center justify-end">
<button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 bg-transparent text-[#0d1b13] dark:text-white gap-2 text-base font-bold leading-normal tracking-[0.015em] min-w-0 p-0">
<span class="material-symbols-outlined" style="font-size: 24px;">check</span>
</button>
</div>
</div>
<!-- Progress Indicators -->
<div class="flex w-full flex-row items-center justify-center gap-3 py-5 bg-background-light dark:bg-background-dark">
<div class="h-2 w-12 rounded-full bg-primary"></div>
<div class="h-2 w-12 rounded-full bg-[#cfe7d9] dark:bg-primary/20"></div>
<div class="h-2 w-12 rounded-full bg-[#cfe7d9] dark:bg-primary/20"></div>
</div>
<!-- Section 1: Informations Générales -->
<div class="px-4">
<h3 class="text-[#0d1b13] dark:text-white tracking-light text-2xl font-bold leading-tight pb-2 pt-5">Informations Générales</h3>
<p class="text-[#4c9a6c] dark:text-primary/70 text-sm mb-4">Parlez-nous de l'essentiel de votre établissement.</p>
<div class="space-y-4">
<!-- Name Field -->
<div class="flex max-w-[480px] flex-wrap items-end gap-4 py-3">
<label class="flex flex-col min-w-40 flex-1">
<p class="text-[#0d1b13] dark:text-white text-base font-medium leading-normal pb-2">Nom du restaurant</p>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0d1b13] dark:text-white focus:outline-0 focus:ring-0 border border-[#cfe7d9] dark:border-primary/30 bg-background-light dark:bg-background-dark focus:border-primary h-14 placeholder:text-[#4c9a6c] p-[15px] text-base font-normal leading-normal" placeholder="Ex: Le Petit Bistro" value="Le Gardenia"/>
</label>
</div>
<!-- Cuisine Type Field -->
<div class="flex max-w-[480px] flex-wrap items-end gap-4 py-3">
<label class="flex flex-col min-w-40 flex-1">
<p class="text-[#0d1b13] dark:text-white text-base font-medium leading-normal pb-2">Type de cuisine</p>
<select class="custom-select-arrow form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0d1b13] dark:text-white focus:outline-0 focus:ring-0 border border-[#cfe7d9] dark:border-primary/30 bg-background-light dark:bg-background-dark focus:border-primary h-14 placeholder:text-[#4c9a6c] p-[15px] text-base font-normal leading-normal">
<option value="gastronomique">Gastronomique</option>
<option value="italien">Italien</option>
<option value="asiatique">Asiatique</option>
<option value="vegan">Vegan / Végétarien</option>
<option value="bistrot">Bistrot Traditionnel</option>
</select>
</label>
</div>
</div>
</div>
<!-- Section 2: Logistique -->
<div class="px-4 mt-8">
<h3 class="text-[#0d1b13] dark:text-white tracking-light text-2xl font-bold leading-tight pb-2">Logistique &amp; Emplacement</h3>
<div class="space-y-4">
<!-- Location Field -->
<div class="flex max-w-[480px] flex-wrap items-end gap-4 py-3">
<label class="flex flex-col min-w-40 flex-1">
<p class="text-[#0d1b13] dark:text-white text-base font-medium leading-normal pb-2">Adresse</p>
<div class="relative">
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0d1b13] dark:text-white focus:outline-0 focus:ring-0 border border-[#cfe7d9] dark:border-primary/30 bg-background-light dark:bg-background-dark focus:border-primary h-14 placeholder:text-[#4c9a6c] p-[15px] pr-12 text-base font-normal leading-normal" placeholder="15 Rue de la Paix, Paris" value=""/>
<span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-primary">location_on</span>
</div>
</label>
</div>
<!-- Map Preview -->
<div class="w-full h-32 rounded-xl overflow-hidden mb-4 border border-[#cfe7d9] dark:border-primary/30">
<img class="w-full h-full object-cover" data-alt="Map showing restaurant location in Paris" data-location="Paris, France" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4wwX33a--vWFXXbyNMb-MpH4MaucScDMhvhBm0bnGUawq2Pi07VKdAgab9jOMahvgOn4imJVNkXzhsL7S-NVWR1_ecQ7qDX7-BxleoSbPRj_tano9TeVRFe3T5w7-GwvkYc2fRF-fO20mFaSGgg5BOZk5O4uBRS-yvmxfTE4_JHqY_fOyaxMzloQzpqlf0S2jrTC7j7GeXeA-6cQ_7kpzXIPL8oYZ2_yA0xBSF6_PyM37c5JCasb95mEai2V4FKi0g5qkaezJg_cZ"/>
</div>
<!-- Capacity Field -->
<div class="flex max-w-[480px] flex-wrap items-end gap-4 py-3">
<label class="flex flex-col min-w-40 flex-1">
<p class="text-[#0d1b13] dark:text-white text-base font-medium leading-normal pb-2">Capacité maximale (couverts)</p>
<div class="flex items-center gap-4">
<button class="size-12 rounded-xl border border-primary/30 flex items-center justify-center text-primary">
<span class="material-symbols-outlined">remove</span>
</button>
<input class="form-input flex-1 h-14 text-center rounded-xl border border-[#cfe7d9] dark:border-primary/30 bg-background-light dark:bg-background-dark text-lg font-bold" type="number" value="45"/>
<button class="size-12 rounded-xl border border-primary/30 flex items-center justify-center text-primary">
<span class="material-symbols-outlined">add</span>
</button>
</div>
</label>
</div>
</div>
</div>
<!-- Section 3: Media -->
<div class="px-4 mt-8 pb-32">
<h3 class="text-[#0d1b13] dark:text-white tracking-light text-2xl font-bold leading-tight pb-2">Visuels</h3>
<p class="text-[#4c9a6c] dark:text-primary/70 text-sm mb-4">Ajoutez des photos pour attirer vos clients.</p>
<div class="grid grid-cols-2 gap-4">
<div class="aspect-square rounded-xl border-2 border-dashed border-primary/40 flex flex-col items-center justify-center gap-2 bg-primary/5">
<span class="material-symbols-outlined text-primary" style="font-size: 32px;">add_a_photo</span>
<span class="text-xs font-medium text-primary">Ajouter</span>
</div>
<div class="relative aspect-square rounded-xl overflow-hidden group">
<img class="w-full h-full object-cover" data-alt="Main dining area of a modern restaurant" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-rZFxKu0Tg9cye5MEtEPY0gMO8OQ5fh7F9EBg8EDRnzgx25A5kvII9KSED6azu55sY3t75Vfres6eecBs7e8Fc2pSl5Je74kLJ_IE0eWL45PtvqwX88P6tFKC-nKAC42cRRCWHhqYZA9N94_RXASi8uCJdes77gVkvwOgqkikxyP4So9o0WnJzQD_EP9r8q586r86VrA6PwUnE6Hv_LR12QUIWjaxXrKSYIdXXWiBqYRwyJrZgx8QX0NSvhAV-xpaEAjjQa_6AXES"/>
<button class="absolute top-2 right-2 bg-black/50 text-white size-7 rounded-full flex items-center justify-center backdrop-blur-sm">
<span class="material-symbols-outlined text-sm">close</span>
</button>
</div>
</div>
</div>
<!-- Sticky Bottom Navigation -->
<div class="fixed bottom-0 left-0 right-0 p-4 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-lg border-t border-primary/10 flex gap-4">
<button class="flex-1 h-14 rounded-xl border border-primary text-primary font-bold text-base transition-colors hover:bg-primary/10">
                Précédent
            </button>
<button class="flex-[2] h-14 rounded-xl bg-primary text-background-dark font-bold text-base shadow-lg shadow-primary/20 transition-transform active:scale-95">
                Enregistrer &amp; Continuer
            </button>
</div>
</div>
</body></html>