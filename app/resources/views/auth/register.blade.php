<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Registration &amp; Role Choice | Youco'Done</title>
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
        body {
            font-family: "Work Sans", sans-serif;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark min-h-screen flex items-stretch overflow-x-hidden">
<!-- Left Side: Inspirational Culinary Image (Desktop only) -->
<div class="hidden lg:flex lg:w-1/2 relative overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Elegant restaurant dining room with gourmet food" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAY1YVoZal0sa-razdMT7NITPY1xWofsVfl0oRSB33zpdw1ieuKIoxqLCFXo5cQ0qt6SsXMX_mdjck28dSFugLLRes1bIcCPSJIr0dRbFTKtFQ_WKDx5t4Xm3LwROK4v_joyAimVn7JNLKpyYA6lxCDb0aHT-584DsGxPcauG9WWMHkVsoi0vnNSEeoJUwHJCjdC-pbNfEH277-8PaCDLRV0TG11jBCr-gIQRxl-OIwqb1jsgXok-GwmRet4aND0q6yMnuCykvm7_Q");'>
</div>
<div class="absolute inset-0 bg-black/30 backdrop-blur-[2px]"></div>
<div class="relative z-10 flex flex-col justify-end p-20 text-white w-full">
<div class="mb-8">
<span class="bg-primary px-3 py-1 rounded-full text-xs font-bold tracking-widest uppercase">Experience Excellence</span>
<h1 class="text-6xl font-black mt-4 leading-tight tracking-tight">Discover the finest <br/> flavors in town.</h1>
<p class="text-xl mt-4 opacity-90 font-light max-w-md">Join thousands of food enthusiasts and restaurant owners in the world's premier dining network.</p>
</div>
</div>
</div>
<!-- Right Side: Registration Form -->
<div class="w-full lg:w-1/2 flex flex-col justify-center items-center p-6 sm:p-12 lg:p-24 bg-background-light dark:bg-background-dark">
<div class="w-full max-w-[480px]">
<!-- Branding/Logo Placeholder -->
<div class="flex items-center gap-2 mb-8">
<div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined">restaurant</span>
</div>
<span class="text-2xl font-black text-slate-900 dark:text-white">Youco'Done</span>
</div>
<!-- Page Heading Component -->
<div class="flex flex-col gap-2 mb-8">
<h2 class="text-[#111818] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">Join Youco'Done</h2>
<p class="text-[#638888] dark:text-slate-400 text-base font-normal leading-normal">Create your account to start your culinary journey</p>
</div>
<!-- Segmented Buttons (Role Selector) -->
<!-- Form Fields -->
<form method="POST" action="{{ route('register') }}" class="flex flex-col gap-4">
    @csrf
<div class="flex py-3 mb-4">
<div class="flex h-12 flex-1 items-center justify-center rounded-xl bg-slate-200 dark:bg-slate-800 p-1.5">
<label class="flex cursor-pointer h-full grow items-center justify-center overflow-hidden rounded-lg px-2 has-[:checked]:bg-white dark:has-[:checked]:bg-slate-700 has-[:checked]:shadow-md has-[:checked]:text-[#111818] dark:has-[:checked]:text-white text-[#638888] text-sm font-semibold transition-all">
<span class="truncate flex items-center gap-2">
<span class="material-symbols-outlined text-lg">person</span>
                            Diner
                        </span>
<input checked="" class="invisible w-0" name="role" type="radio" value="Diner"/>
</label>
<label class="flex cursor-pointer h-full grow items-center justify-center overflow-hidden rounded-lg px-2 has-[:checked]:bg-white dark:has-[:checked]:bg-slate-700 has-[:checked]:shadow-md has-[:checked]:text-[#111818] dark:has-[:checked]:text-white text-[#638888] text-sm font-semibold transition-all">
<span class="truncate flex items-center gap-2">
<span class="material-symbols-outlined text-lg">storefront</span>
                            Restaurant Owner
                        </span>
<input  class="invisible w-0" name="role" required type="radio" value="restaurateur"/>
</label>
</div>
</div>
<!-- Full Name Field -->
<div class="flex flex-col gap-1.5">
<label class="text-[#111818] dark:text-slate-200 text-sm font-semibold">Full Name</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">badge</span>
<input  name="name" value="{{ old('name') }}" required class="form-input flex w-full rounded-xl text-[#111818] dark:text-white border border-[#dce5e5] dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary/50 focus:border-primary h-14 placeholder:text-slate-400 pl-11 pr-4 text-base transition-all" placeholder="Enter your full name" type="text"/>
@error('name')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>
</div>
<!-- Email Field -->
<div class="flex flex-col gap-1.5">
<label class="text-[#111818] dark:text-slate-200 text-sm font-semibold">Email Address</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">mail</span>
<input name="email"value="{{ old('email') }}"  class="form-input flex w-full rounded-xl text-[#111818] dark:text-white border border-[#dce5e5] dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary/50 focus:border-primary h-14 placeholder:text-slate-400 pl-11 pr-4 text-base transition-all" placeholder="example@email.com" type="email" required/>
@error('name')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>
</div>
<!-- Phone Number Field -->
<div class="flex flex-col gap-1.5">
<label class="text-[#111818] dark:text-slate-200 text-sm font-semibold">Phone Number</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">call</span>
<input name="numero_de_telephone" value="{{ old('phone') }}"class="form-input flex w-full rounded-xl text-[#111818] dark:text-white border border-[#dce5e5] dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary/50 focus:border-primary h-14 placeholder:text-slate-400 pl-11 pr-4 text-base transition-all" placeholder="+1 (555) 000-0000" type="tel"/>
</div>
</div>
<!-- Password Field -->
<div class="flex flex-col gap-1.5">
<label class="text-[#111818] dark:text-slate-200 text-sm font-semibold">Password</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">lock</span>
<input name="password" required class="form-input flex w-full rounded-xl text-[#111818] dark:text-white border border-[#dce5e5] dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary/50 focus:border-primary h-14 placeholder:text-slate-400 pl-11 pr-12 text-base transition-all" placeholder="••••••••" type="password"/>
@error('password')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
<button class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-primary" type="button">
<span class="material-symbols-outlined">visibility</span>
</button>
</div>
</div>

<div class="flex flex-col gap-1.5">
    <div class="relative">
    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">lock</span>
    <label class="text-sm font-semibold">Confirm Password</label>
    <input name="password_confirmation" class="form-input flex w-full rounded-xl text-[#111818] dark:text-white border border-[#dce5e5] dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary/50 focus:border-primary h-14 placeholder:text-slate-400 pl-11 pr-12 text-base transition-all"  type="password" required placeholder="••••••••"
    />
    @error('password')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
<button class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-primary" type="button">
<span class="material-symbols-outlined">visibility</span>
</button>
</div>
</div>

<!-- Consent -->
<p class="text-xs text-[#638888] dark:text-slate-400 mt-2">
                    By clicking "Create Account", you agree to our <a class="text-primary hover:underline font-medium" href="#">Terms of Service</a> and <a class="text-primary hover:underline font-medium" href="#">Privacy Policy</a>.
                </p>
<!-- Create Account Button -->
<button class="mt-6 w-full h-14 bg-primary text-white text-lg font-bold rounded-xl shadow-lg shadow-primary/30 hover:shadow-primary/50 hover:scale-[1.01] active:scale-[0.98] transition-all flex items-center justify-center gap-2" type="submit">
                    Create Account
                    <span class="material-symbols-outlined">arrow_forward</span>
</button>
</form>
<!-- Footer Link -->
<div class="mt-8 text-center">
<p class="text-slate-600 dark:text-slate-400 font-medium">
                    Already have an account? 
                    <a class="text-primary font-bold hover:underline ml-1" href="#">Sign In</a>
</p>
</div>
</div>
</div>
</body></html>