<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Secure User Login | Youco'Done</title>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark min-h-screen">
<div class="flex h-screen w-full overflow-hidden">
<!-- Left Side: Immersive Culinary Image -->
<div class="hidden lg:flex lg:w-1/2 relative">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Exquisite fine dining table setting with gourmet dishes and candles" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD9GKJAym1PCHahD2vydSTpTMluV0sNetvFBC4YbYWtyl76E1sFCOkIn0RcR5D5_aUxAu67aMA41dEhQSBym837EbjCAIFqfphCWF16sWJNwz6SpNMQQ0MIx43Bara3JPTq8RCe1MNrARQYo9MCVefc3TpT5YpCn6M_j11OjmPbF63ZgW63nj2OTEoneTufHbo7NICTjnx3CrHqArFKk82y5zHIPPAnf5tulh3G1VNuUkx_Tvse4Kz6gbvcr_WZTrhUCyXAma-VqeE');">
</div>
<div class="absolute inset-0 bg-black/30 backdrop-blur-[2px]"></div>
<div class="relative z-10 flex flex-col justify-between p-12 text-white h-full w-full">
<div class="flex items-center gap-3">
<div class="size-8 bg-primary rounded-lg flex items-center justify-center">
<svg class="text-white size-6" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z" fill="currentColor"></path>
</svg>
</div>
<span class="text-2xl font-bold tracking-tight">Youco'Done</span>
</div>
<div>
<h2 class="text-4xl font-bold mb-4 leading-tight">Elevate Your Dining <br/>Experience</h2>
<p class="text-lg text-white/80 max-w-md">Access your exclusive reservations and discover the world's finest culinary destinations.</p>
</div>
</div>
</div>
<!-- Right Side: Login Form -->
<div class="w-full lg:w-1/2 flex flex-col items-center justify-center px-6 py-12 bg-white dark:bg-background-dark">
<div class="w-full max-w-[440px] flex flex-col">
<!-- Header -->
<div class="mb-8 lg:hidden flex items-center gap-3 self-start">
<div class="size-6 bg-primary rounded">
<svg class="text-white size-4" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z" fill="currentColor"></path>
</svg>
</div>
<span class="text-xl font-bold text-[#111818] dark:text-white">Youco'Done</span>
</div>
<div class="flex flex-col gap-2 mb-8">
<h1 class="text-[#111818] dark:text-white tracking-tight text-3xl font-bold">Welcome back</h1>
<p class="text-[#638888] dark:text-gray-400 text-base">Please enter your details to access your reservations.</p>
</div>
<!-- Form -->
<form class="flex flex-col gap-5">
<div class="flex flex-col gap-2">
<label class="text-[#111818] dark:text-white text-sm font-medium">Email</label>
<input class="w-full h-12 rounded-lg border border-[#dce5e5] dark:border-gray-700 bg-white dark:bg-gray-800 text-[#111818] dark:text-white px-4 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-[#638888]" placeholder="e.g. alex@example.com" type="email"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-[#111818] dark:text-white text-sm font-medium">Password</label>
<div class="relative">
<input class="w-full h-12 rounded-lg border border-[#dce5e5] dark:border-gray-700 bg-white dark:bg-gray-800 text-[#111818] dark:text-white px-4 pr-12 focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-[#638888]" placeholder="Enter your password" type="password"/>
<button class="absolute right-4 top-1/2 -translate-y-1/2 text-[#638888] hover:text-primary transition-colors" type="button">
<span class="material-symbols-outlined">visibility</span>
</button>
</div>
</div>
<div class="flex items-center justify-between mt-1">
<label class="flex items-center gap-2 cursor-pointer group">
<input class="size-4 rounded border-[#dce5e5] text-primary focus:ring-primary transition-all" type="checkbox"/>
<span class="text-sm text-[#111818] dark:text-gray-300 group-hover:text-primary transition-colors">Remember me</span>
</label>
<a class="text-sm font-medium text-primary hover:underline" href="#">Forgot password?</a>
</div>
<button class="w-full h-12 bg-primary hover:bg-[#14b8b8] text-white font-bold rounded-lg transition-colors flex items-center justify-center gap-2 mt-2 shadow-sm" type="submit">
                        Sign In
                    </button>
</form>
<!-- Social Logins -->
<div class="relative my-8">
<div class="absolute inset-0 flex items-center">
<div class="w-full border-t border-[#dce5e5] dark:border-gray-700"></div>
</div>
<div class="relative flex justify-center text-xs uppercase">
<span class="bg-white dark:bg-background-dark px-3 text-[#638888]">Or continue with</span>
</div>
</div>
<div class="grid grid-cols-2 gap-4">
<button class="flex items-center justify-center gap-2 h-11 border border-[#dce5e5] dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
<svg class="size-5" viewbox="0 0 24 24">
<path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
<path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
<path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"></path>
<path d="M12 5.38c1.62 0 3.06.56 4.21 1.66l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path>
</svg>
<span class="text-sm font-medium text-[#111818] dark:text-white">Google</span>
</button>
<button class="flex items-center justify-center gap-2 h-11 border border-[#dce5e5] dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
<svg class="size-5 dark:fill-white" fill="currentColor" viewbox="0 0 24 24">
<path d="M12.152 6.896c-.948 0-2.415-1.078-3.96-1.04-2.04.027-3.91 1.183-4.961 3.014-2.117 3.675-.546 9.103 1.519 12.09 1.013 1.454 2.208 3.09 3.792 3.03 1.52-.065 2.09-.987 3.935-.987 1.831 0 2.35.987 3.96.948 1.637-.026 2.676-1.48 3.676-2.948 1.156-1.688 1.636-3.325 1.662-3.415-.039-.013-3.182-1.221-3.22-4.857-.026-3.04 2.48-4.494 2.597-4.559-1.429-2.09-3.623-2.324-4.39-2.376-2-.156-3.675 1.09-4.61 1.09zM15.53 3.83c.843-1.012 1.4-2.427 1.245-3.83-1.207.052-2.662.805-3.532 1.818-.78.896-1.454 2.338-1.273 3.714 1.338.104 2.715-.688 3.559-1.702z"></path>
</svg>
<span class="text-sm font-medium text-[#111818] dark:text-white">Apple</span>
</button>
</div>
<!-- Footer -->
<p class="mt-10 text-center text-sm text-[#638888] dark:text-gray-400">
                    New to Youco'Done? 
                    <a class="font-bold text-primary hover:underline ml-1" href="#">Create an account</a>
</p>
</div>
</div>
</div>
</body></html>