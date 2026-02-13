<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Secure Reservation Payment | Youco'Done</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                        "paypal-yellow": "#ffc439",
                    },
                    fontFamily: {
                        "display": ["Work Sans", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style type="text/tailwindcss">
        body { font-family: "Work Sans", sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }#tab-stripe:checked ~ .tab-content-stripe { display: block; }
        #tab-stripe:checked ~ .tab-label-stripe { border-bottom-color: #17cfcf; color: #17cfcf; }
        #tab-paypal:checked ~ .tab-content-paypal { display: block; }
        #tab-paypal:checked ~ .tab-label-paypal { border-bottom-color: #17cfcf; color: #17cfcf; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#111818] dark:text-white transition-colors duration-200">
<div class="layout-container flex h-full grow flex-col min-h-screen">
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-gray-200 dark:border-gray-800 bg-white dark:bg-background-dark px-6 md:px-10 py-3 sticky top-0 z-50">
<div class="flex items-center gap-4 text-[#111818] dark:text-white">
<div class="size-8 text-primary">
<svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z" fill="currentColor"></path>
</svg>
</div>
<h2 class="text-xl font-bold leading-tight tracking-tight">Youco'Done</h2>
</div>
<div class="flex flex-1 justify-end gap-8 items-center">
<div class="hidden md:flex items-center gap-9">
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Explore</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">My Reservations</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Support</a>
</div>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border border-gray-200" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDMFEM4oaX7dlhzkRmA0YbuURBzxgHHYeIz44VW92lCHoFKrS9CyzoJrVlv5Likua9q74jAyybUCUby2cTaANs5_6TBzCxB4fwhjuBe6yT6my2ir_VnK2XkokSIOQRthF1gKKN-yUe8BXibQQbO8zyTW7VBh04YlQAbDtEkiPwyLd6niWJrHqMPSKjDm23M_ToJIlxBTh4ND7kUcENTpW5AcDsFkqrUlT255SeEtmdb_JiouftZ8RpP_28XhtvLhymq2sMe9QNushk");'></div>
</div>
</header>
<main class="flex-1 max-w-[1200px] mx-auto w-full px-4 md:px-10 py-8">
<div class="flex items-center gap-2 mb-8 text-sm text-gray-500 dark:text-gray-400">
<a class="hover:text-primary" href="#">Reservation</a>
<span class="material-symbols-outlined text-xs">chevron_right</span>
<a class="hover:text-primary" href="#">Details</a>
<span class="material-symbols-outlined text-xs">chevron_right</span>
<span class="text-gray-900 dark:text-white font-semibold">Stripe &amp; PayPal Checkout</span>
</div>
<div class="flex flex-col lg:flex-row gap-12">
<div class="lg:w-5/12 space-y-6">
<div class="sticky top-24">
<h1 class="text-3xl font-black mb-2 tracking-tight">Reservation Summary</h1>
<p class="text-gray-500 dark:text-gray-400 mb-6">Review your booking before final payment.</p>
<div class="bg-white dark:bg-background-dark border border-gray-200 dark:border-gray-800 rounded-xl overflow-hidden shadow-sm">
<div class="h-48 bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCb7ivTQDnIQ60sTGaECTQL-21FTO7KFVIldRV36SOHN8jGW05IzN3js2llV-eyps_pTnPVFpkNI1-7KxTH2WKSIA78-ZTMggH-xkGce9BMGdUqTZ6t-5eXdPLGEYaXpls8zr8m6AGVtF1xKL38H_oxI6RP9B-o6y7qo35RkJ1AOG5drxWsq81cjnxHqelNWRGthS7qgWWxP4zSXYMAra1HlQ-daOlcgA8LmymUjgPf2XsVWcRuk0-Ye6tqL_hm6FNs61MG5KmGpNg");'></div>
<div class="p-6 space-y-4">
<div>
<h3 class="text-xl font-bold">Le Petit Bistro</h3>
<p class="text-gray-500 text-sm">Fine French Cuisine • Paris, FR</p>
</div>
<div class="grid grid-cols-1 gap-3 border-y border-gray-100 dark:border-gray-800 py-4">
<div class="flex items-center gap-3 text-sm">
<span class="material-symbols-outlined text-primary">calendar_today</span>
<span>Thursday, Oct 24, 2023</span>
</div>
<div class="flex items-center gap-3 text-sm">
<span class="material-symbols-outlined text-primary">schedule</span>
<span>7:30 PM (Local Time)</span>
</div>
<div class="flex items-center gap-3 text-sm">
<span class="material-symbols-outlined text-primary">group</span>
<span>4 Guests</span>
</div>
</div>
<div class="space-y-2 pt-2">
<div class="flex justify-between text-sm text-gray-500">
<span>Reservation Deposit</span>
<span class="font-medium">$20.00</span>
</div>
<div class="flex justify-between text-sm text-gray-500">
<span>Service Fee</span>
<span class="font-medium">$5.00</span>
</div>
<div class="flex justify-between text-lg font-bold border-t border-dashed border-gray-200 dark:border-gray-800 pt-3 mt-2">
<span>Total Due Now</span>
<span class="text-primary">$25.00</span>
</div>
</div>
</div>
</div>
<div class="mt-6 flex items-start gap-3 p-4 bg-primary/10 rounded-lg">
<span class="material-symbols-outlined text-primary">info</span>
<p class="text-xs text-gray-600 dark:text-gray-300 leading-relaxed">
                            Secure payment processed through encrypted channels. Your reservation is guaranteed once payment is complete.
                        </p>
</div>
</div>
</div>
<div class="lg:w-7/12 space-y-8">
<div class="bg-white dark:bg-background-dark border border-gray-200 dark:border-gray-800 rounded-xl shadow-sm overflow-hidden">
<div class="relative flex items-center border-b border-gray-100 dark:border-gray-800">
<input checked="" class="hidden" id="tab-stripe" name="payment-method" type="radio"/>
<label class="tab-label-stripe flex-1 flex items-center justify-center gap-2 py-5 cursor-pointer font-bold text-sm transition-all border-b-2 border-transparent text-gray-400" for="tab-stripe">
<span class="material-symbols-outlined text-xl">credit_card</span>
                            Credit Card (Stripe)
                        </label>
<input class="hidden" id="tab-paypal" name="payment-method" type="radio"/>
<label class="tab-label-paypal flex-1 flex items-center justify-center gap-2 py-5 cursor-pointer font-bold text-sm transition-all border-b-2 border-transparent text-gray-400" for="tab-paypal">
<span class="material-symbols-outlined text-xl">account_balance_wallet</span>
                            PayPal
                        </label>
<div class="tab-content-stripe hidden absolute top-full left-0 w-full p-6 md:p-8 bg-white dark:bg-background-dark">
<form class="space-y-6">
<div class="space-y-1.5">
<label class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400">Cardholder Name</label>
<input name="cardholder-name" class="w-full h-11 px-4 rounded-lg border border-gray-200 dark:border-gray-800 bg-gray-50 dark:bg-gray-900 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" placeholder="John Doe" type="text"/>
</div>
<div class="space-y-1.5">
<label class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400">Card Information</label>
<div class="relative">
<div class="w-full h-11 px-4 flex items-center gap-3 rounded-lg border border-gray-200 dark:border-gray-800 bg-gray-50 dark:bg-gray-900 focus-within:border-primary focus-within:ring-1 focus-within:ring-primary transition-all">
<span class="material-symbols-outlined text-gray-400">credit_card</span>
<input name="card" class="bg-transparent border-none p-0 focus:ring-0 flex-1" placeholder="4242 4242 4242 4242" type="text"/>
<div class="flex gap-1">
<img alt="Visa" class="h-4 opacity-50" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-UbsZNZ2Scit_CLZqeTMXX9k8lj_RzUZ1S_xZ-IOHUw2aZ9C1z0WZgN_BmOC7xeXyvhgwTfb3stGGWUC-ygCktN2HSA99xCAD0GBfjpzj6vlE5fnf9fMIZtwBiyNqmo89XUMn1nwCaJIHnWUSqMcEE-0RQ3cumFp5WYGPqVIgGR30Lm6B0pBJFlZPASByHvcZEu3zPxyqu2_DMR58sszsC3QWtYO0Zvcx1IRX3fB6Bq23xONp1EVU6jq8baVZ5KglySPRziImFIg"/>
<img alt="Mastercard" class="h-4 opacity-50" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWhGQz974DU8JYuIYUDaOA2oMyqhKTZlBSFlDVzCeHEDo9uvOR3TjXHRYQ9DMqSRZFGt4DbAUuJ1zjxWY7RbGWNtD_oNv_U7aOSwSn83hyW7qXjSjm4PpxvYnwoOT8sHFQmO80aXag_nwuiekDW-x0mCaJzXvuGZuye_Y0_ZmQ0nYjXrMF3in5AFQ6BqIVUL1eDe89BXkwt6znL9VEIL8vJlLLlQaF_ak29QAgvP1ezQ4pyeg3GHYChj3gqvthmZXDt6LY5dbqQBY"/>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="space-y-1.5">
<label class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400">Expiry Date</label>
<input class="w-full h-11 px-4 rounded-lg border border-gray-200 dark:border-gray-800 bg-gray-50 dark:bg-gray-900 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" placeholder="MM / YY" type="text"/>
</div>
<div class="space-y-1.5">
<label class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400">CVC</label>
<div class="relative">
<input class="w-full h-11 px-4 rounded-lg border border-gray-200 dark:border-gray-800 bg-gray-50 dark:bg-gray-900 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" placeholder="•••" type="password"/>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 text-lg cursor-help">help</span>
</div>
</div>
</div>
<button class="w-full h-14 bg-primary hover:bg-[#15baba] text-[#111818] font-bold rounded-xl transition-all shadow-lg shadow-primary/20 flex items-center justify-center gap-2 text-lg mt-8" type="submit">
<span class="material-symbols-outlined">lock</span>
                                    Pay $25.00 via Stripe
                                </button>
<p class="text-center text-[10px] text-gray-400 uppercase tracking-widest mt-4">
                                    Protected by 256-bit SSL Encryption
                                </p>
</form>
</div>
<div class="tab-content-paypal hidden absolute top-full left-0 w-full p-6 md:p-8 bg-white dark:bg-background-dark text-center min-h-[350px] flex flex-col justify-center">
<div class="mb-8">
<div class="size-16 bg-paypal-yellow/10 text-paypal-yellow rounded-full flex items-center justify-center mx-auto mb-4">
<span class="material-symbols-outlined text-4xl">payments</span>
</div>
<h3 class="text-xl font-bold mb-2">Fast &amp; Secure with PayPal</h3>
<p class="text-gray-500 text-sm max-w-sm mx-auto">You will be redirected to PayPal to complete your purchase securely. After payment, you will return here.</p>
</div>
<button class="w-full h-14 bg-paypal-yellow hover:brightness-95 transition-all rounded-xl shadow-md flex items-center justify-center px-6">
<img alt="PayPal" class="h-6" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCRyL__MquOlhJCpAbE4-6O8rjtJm9SwAyVzb0bpcVCWzHItCLNuzOO9J6j1J-ryrhjgBL58UGwx9x5GoHVtJSIbaqyNp7C5fql_onZphoKDzueyoZJadnT6Av_1UbXaYohwzoLJTVjzqVU0zoh2OWeDhQn1NbcN_--tIGwUboi2GsBTSCpPRk3KMSEbrrPRZYRfUVXeyA1KlaL3EUyWsBpL3-i4QVV-_15WKxx4DpTM3m7rdQl28oIV9-BDWWomuDapryHHVAOBgQ" style="mix-blend-mode: multiply;"/>
<span class="ml-2 font-black text-blue-900 italic text-lg">Pay with PayPal</span>
</button>
<div class="mt-8 flex justify-center gap-6 opacity-40">
<img alt="Accepted Cards" class="h-8 object-contain grayscale" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdWdG7zhUKAgtuUKG_5lB6U1ekBfB2pK7S780q6r7ZvVR0di-Z-yX7nfboNc6o6DMQDeHYLgVRqtxz_Wb-QwcRtsr5ttfvamTxnG8S3vve_-WnC_xl8-czYdFAb9yjpzUDqGvSm0Zvq191-yQgalA1vw0ExtmGGwRWE0o9XiB6d1At-IFUWbxb0h_VJCl_zBlr4i8sCUpQ72-Mx2TTi--jnlQPeBm51gl85_p6-YcsrXiVwXugNF7dveFfNUzXgm44SjzYwQslf8M"/>
</div>
</div>
</div>
<div class="h-[440px]"></div>
</div>
<div class="flex flex-wrap justify-between items-center gap-4 px-2">
<div class="flex items-center gap-2 text-gray-400">
<span class="material-symbols-outlined text-primary text-xl">verified_user</span>
<div class="leading-none">
<p class="text-[10px] font-bold uppercase">Stripe</p>
<p class="text-[9px] uppercase tracking-tighter">Verified Provider</p>
</div>
</div>
<div class="flex items-center gap-2 text-gray-400">
<span class="material-symbols-outlined text-primary text-xl">gpp_good</span>
<div class="leading-none">
<p class="text-[10px] font-bold uppercase">PayPal</p>
<p class="text-[9px] uppercase tracking-tighter">Secure Checkout</p>
</div>
</div>
<div class="flex items-center gap-2 text-gray-400">
<span class="material-symbols-outlined text-primary text-xl">lock</span>
<div class="leading-none">
<p class="text-[10px] font-bold uppercase">PCI DSS</p>
<p class="text-[9px] uppercase tracking-tighter">Compliant Storage</p>
</div>
</div>
<div class="flex items-center gap-2 text-gray-400">
<span class="material-symbols-outlined text-primary text-xl">encrypted</span>
<div class="leading-none">
<p class="text-[10px] font-bold uppercase">SSL 256-bit</p>
<p class="text-[9px] uppercase tracking-tighter">End-to-End Encrypted</p>
</div>
</div>
</div>
</div>
</div>
</main>
<footer class="bg-white dark:bg-background-dark border-t border-gray-200 dark:border-gray-800 py-10 mt-auto">
<div class="max-w-[1200px] mx-auto px-10 flex flex-col md:flex-row justify-between items-center gap-6">
<div class="flex items-center gap-2">
<div class="size-6 text-primary">
<svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z" fill="currentColor"></path>
</svg>
</div>
<span class="font-bold">Youco'Done</span>
<span class="text-gray-400 text-sm ml-2">© 2023. All rights reserved.</span>
</div>
<div class="flex gap-6 text-sm text-gray-500">
<a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
<a class="hover:text-primary transition-colors" href="#">Contact</a>
</div>
</div>
</footer>
</div>

</body></html>