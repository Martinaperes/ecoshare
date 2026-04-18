<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Login | EcoShare Nairobi</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Work+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                "surface": "#fafaf5",
                "secondary": "#944a00",
                "on-tertiary": "#ffffff",
                "surface-container-low": "#f4f4ef",
                "on-surface-variant": "#414941",
                "secondary-fixed": "#ffdcc5",
                "on-primary": "#ffffff",
                "inverse-primary": "#a0d3a5",
                "surface-container-high": "#e8e8e3",
                "error-container": "#ffdad6",
                "on-primary-container": "#afe2b3",
                "on-surface": "#1a1c19",
                "primary-fixed": "#bcefc0",
                "on-secondary-fixed-variant": "#713700",
                "surface-container-highest": "#e3e3de",
                "surface-container": "#eeeee9",
                "secondary-container": "#fc8f34",
                "on-primary-fixed": "#00210a",
                "surface-variant": "#e3e3de",
                "surface-tint": "#3a6843",
                "outline-variant": "#c1c9be",
                "on-tertiary-fixed-variant": "#404a34",
                "on-secondary-fixed": "#301400",
                "inverse-surface": "#2f312e",
                "on-error": "#ffffff",
                "tertiary": "#3e4832",
                "on-tertiary-fixed": "#151e0b",
                "surface-bright": "#fafaf5",
                "on-secondary-container": "#663100",
                "on-primary-fixed-variant": "#22502d",
                "inverse-on-surface": "#f1f1ec",
                "tertiary-fixed": "#dbe7c8",
                "primary-container": "#386641",
                "surface-container-lowest": "#ffffff",
                "primary": "#204e2b",
                "tertiary-container": "#566048",
                "surface-dim": "#dadad5",
                "error": "#ba1a1a",
                "primary-fixed-dim": "#a0d3a5",
                "secondary-fixed-dim": "#ffb783",
                "on-tertiary-container": "#cedabc",
                "on-background": "#1a1c19",
                "on-secondary": "#ffffff",
                "background": "#fafaf5",
                "tertiary-fixed-dim": "#bfcbad",
                "on-error-container": "#93000a",
                "outline": "#727970"
              },
              "borderRadius": {
                "DEFAULT": "0.25rem",
                "lg": "0.5rem",
                "xl": "0.75rem",
                "full": "9999px"
              },
              "fontFamily": {
                "headline": ["Plus Jakarta Sans"],
                "body": ["Work Sans"],
                "label": ["Work Sans"]
              }
            }
          }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .signature-gradient {
            background: linear-gradient(135deg, #204e2b 0%, #386641 100%);
        }
        .signature-gradient:hover {
            filter: brightness(1.1);
        }
        body { min-height: max(884px, 100dvh); }
    </style>
</head>
<body class="bg-surface font-body text-on-surface antialiased selection:bg-primary-fixed">
    <!-- TopAppBar -->
    <header class="bg-[#fafaf5] dark:bg-[#1a1c19] flex justify-between items-center w-full px-6 h-16 fixed top-0 z-50 border-b border-outline-variant/10">
        <a href="{{ url('/') }}" class="text-[#204e2b] dark:text-[#d0e8d0] hover:bg-[#eeeee9] dark:hover:bg-[#2e312c] transition-colors p-2 rounded-full active:scale-95 duration-200">
            <span class="material-symbols-outlined">close</span>
        </a>
        <h1 class="text-xl font-extrabold text-[#204e2b] dark:text-[#d0e8d0] tracking-tighter font-headline">EcoShare Nairobi</h1>
        <div class="w-10"></div> <!-- Spacer for center alignment -->
    </header>

    <main class="min-h-[calc(100vh-64px)] pt-16 flex items-center justify-center p-4 md:p-8">
        <div class="max-w-6xl w-full grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
            <!-- Left Side: Editorial Content / Visual -->
            <div class="lg:col-span-7 hidden lg:flex flex-col justify-between p-12 bg-surface-container-low rounded-[2.5rem] overflow-hidden relative min-h-[600px] border border-outline-variant/10">
                <div class="relative z-10">
                    <h2 class="text-5xl font-headline font-extrabold text-primary tracking-tight leading-tight mb-8">
                        Cultivating Community <br/>Through Conscious Sharing.
                    </h2>
                    <p class="text-xl text-on-surface-variant max-w-md font-light leading-relaxed">
                        Join Nairobi's premier redistribution network. Your surplus is someone else's sustainability.
                    </p>
                </div>
                <div class="relative z-10 flex gap-6">
                    <div class="bg-white/40 backdrop-blur-md p-6 rounded-3xl flex items-center gap-4 border border-white/20 shadow-xl">
                        <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center text-on-primary shadow-lg">
                            <span class="material-symbols-outlined text-3xl">eco</span>
                        </div>
                        <div>
                            <p class="text-lg font-black text-primary leading-none">12k+ Tons</p>
                            <p class="text-[10px] font-black uppercase tracking-widest text-on-surface-variant mt-1">Waste Prevented</p>
                        </div>
                    </div>
                    <div class="bg-white/40 backdrop-blur-md p-6 rounded-3xl flex items-center gap-4 border border-white/20 shadow-xl">
                        <div class="w-14 h-14 bg-secondary rounded-2xl flex items-center justify-center text-white shadow-lg">
                            <span class="material-symbols-outlined text-3xl">volunteer_activism</span>
                        </div>
                        <div>
                            <p class="text-lg font-black text-secondary leading-none">50k+ Lives</p>
                            <p class="text-[10px] font-black uppercase tracking-widest text-on-surface-variant mt-1">Impacted</p>
                        </div>
                    </div>
                </div>
                <!-- Abstract Organic Background Element -->
                <div class="absolute top-0 right-0 w-full h-full opacity-10 pointer-events-none transform translate-x-1/4 -translate-y-1/4 scale-150">
                    <img class="w-full h-full object-cover rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmhcz1JObc21ZNkWAms6YPoRXdI2uBnXiLW2VqAwNaiNuvexTHhovD6ewVjs5Xk5DBUwgke1FrueHcbK1zH8zyAwe7fqJ8RJh6sxjkIg6d8xa8iDnEJs0K8cSBmnKsxNG4WcHGxc112EkVCRgRz99Do3g8FWBfQwgbcz4PFUze8hZweedJMTrzqr-O8JDtMPXDoagoazMXIeVH-7G0GLmEgZss91cWydOH96cgg0oNVERgFDtbEUPS8hTCyYxdfLhoBGf2pVcXFr4"/>
                </div>
            </div>

            <!-- Right Side: Login Form -->
            <div class="lg:col-span-5 flex flex-col justify-center py-8 lg:px-8">
                <div class="mb-12 text-center lg:text-left">
                    <span class="inline-block px-4 py-1.5 bg-tertiary-container text-on-tertiary-container rounded-full text-[10px] font-black uppercase tracking-[0.2em] mb-6 shadow-sm ring-1 ring-white/20">
                        Welcome Back
                    </span>
                    <h3 class="text-4xl font-headline font-black text-on-surface tracking-tight">Sign in</h3>
                </div>

                @if (session('status'))
                    <div class="mb-8 p-4 bg-primary-fixed/30 text-primary rounded-2xl font-bold text-xs border border-primary/10 transition-all animate-pulse">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-8">
                    @csrf
                    <!-- Input Fields -->
                    <div class="space-y-6">
                        <div class="space-y-2">
                            <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-on-surface-variant px-2" for="email">Email or Phone</label>
                            <div class="relative group">
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                                    class="w-full bg-surface-container-low border-0 rounded-2xl px-6 py-5 pl-14 font-bold text-primary focus:ring-4 focus:ring-primary/10 focus:bg-white transition-all duration-300 placeholder:text-outline/40 outline-none" 
                                    placeholder="name@example.com"/>
                                <span class="material-symbols-outlined absolute left-6 top-1/2 -translate-y-1/2 text-primary opacity-40 group-focus-within:opacity-100 transition-opacity">mail</span>
                            </div>
                            @error('email')
                                <p class="text-xs text-error font-bold mt-2 ml-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <div class="flex justify-between items-center px-2">
                                <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-on-surface-variant" for="password">Password</label>
                                @if (Route::has('password.request'))
                                    <a class="text-[10px] font-black text-secondary uppercase tracking-[0.2em] hover:text-primary transition-colors" href="{{ route('password.request') }}">Forgot?</a>
                                @endif
                            </div>
                            <div class="relative group">
                                <input id="password" type="password" name="password" required autocomplete="current-password"
                                    class="w-full bg-surface-container-low border-0 rounded-2xl px-6 py-5 pl-14 font-bold text-primary focus:ring-4 focus:ring-primary/10 focus:bg-white transition-all duration-300 placeholder:text-outline/40 outline-none" 
                                    placeholder="••••••••"/>
                                <span class="material-symbols-outlined absolute left-6 top-1/2 -translate-y-1/2 text-primary opacity-40 group-focus-within:opacity-100 transition-opacity">lock</span>
                            </div>
                            @error('password')
                                <p class="text-xs text-error font-bold mt-2 ml-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center px-2">
                        <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                            <input id="remember_me" type="checkbox" name="remember" class="w-5 h-5 rounded-lg border-outline-variant text-primary focus:ring-primary focus:ring-offset-0 transition-all">
                            <span class="ms-3 text-sm font-bold text-on-surface-variant group-hover:text-primary transition-colors">Keep me signed in</span>
                        </label>
                    </div>

                    <!-- Primary Action -->
                    <button class="w-full signature-gradient text-on-primary font-headline font-black py-6 rounded-2xl shadow-xl shadow-primary/10 hover:shadow-primary/30 active:scale-[0.98] transition-all duration-300 text-lg" type="submit">
                        Enter Dashboard
                    </button>
                </form>

                <!-- Divider -->
                <div class="relative my-10">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-outline-variant/20"></div>
                    </div>
                    <div class="relative flex justify-center text-xs">
                        <span class="px-6 bg-surface text-[10px] font-black uppercase tracking-[0.2em] text-on-surface-variant">Secure Identity</span>
                    </div>
                </div>

                <!-- Registration Link -->
                <div class="mt-4 text-center">
                    <p class="text-sm font-medium text-on-surface-variant">
                        New to the movement? 
                        <a class="text-primary font-black uppercase text-xs tracking-widest hover:text-secondary transition-colors ml-2" href="{{ route('register') }}">Join Community</a>
                    </p>
                </div>
            </div>
        </div>
    </main>

    <footer class="p-8 text-center text-[10px] font-black text-outline/40 uppercase tracking-[0.3em]">
        © 2024 EcoShare Nairobi • Built for Community Resilience
    </footer>
</body>
</html>
