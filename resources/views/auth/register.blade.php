<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Join our Community | EcoShare Nairobi</title>
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
            "fontFamily": {
                "headline": ["Plus Jakarta Sans"],
                "body": ["Work Sans"],
            }
          }
        }
      }
    </script>
    <style>
        body { font-family: 'Work Sans', sans-serif; -webkit-font-smoothing: antialiased; }
        h1, h2, h3 { font-family: 'Plus Jakarta Sans', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .signature-gradient {
            background: linear-gradient(135deg, #204e2b 0%, #386641 100%);
        }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #fafaf5; }
        ::-webkit-scrollbar-thumb { background: #e3e3de; border-radius: 10px; }
        body { min-height: max(884px, 100dvh); }
    </style>
</head>
<body class="bg-surface text-on-surface antialiased min-h-screen flex flex-col selection:bg-primary-fixed">
    <!-- TopAppBar -->
    <header class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-6 h-16 bg-[#fafaf5]/80 backdrop-blur-md border-b border-outline-variant/10">
        <div class="flex items-center gap-4">
            <a href="{{ url('/') }}" class="hover:bg-surface-container-low transition-colors p-2 rounded-full active:scale-95 duration-200">
                <span class="material-symbols-outlined text-primary">close</span>
            </a>
            <span class="text-xl font-extrabold text-primary tracking-tighter font-headline">EcoShare Nairobi</span>
        </div>
        <div class="hidden md:flex gap-8 items-center">
            <a class="text-[10px] font-black uppercase tracking-widest text-on-surface-variant hover:text-primary transition-colors" href="#">About Hub</a>
            <a class="text-[10px] font-black uppercase tracking-widest text-on-surface-variant hover:text-primary transition-colors" href="#">Impact Garden</a>
            <a class="text-[10px] font-black uppercase tracking-widest text-primary font-bold bg-primary-fixed px-5 py-2.5 rounded-xl border border-primary/5" href="#">Sign Up</a>
        </div>
    </header>

    <main class="flex-grow pt-24 pb-20 px-4 md:px-8 max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
        <!-- Left: Branding & Story -->
        <section class="lg:col-span-5 space-y-12 lg:sticky lg:top-24">
            <div class="relative">
                <h1 class="text-5xl md:text-6xl font-black tracking-tighter leading-[1.05] text-primary">
                    Join the <span class="text-secondary italic font-light">Living Tapestry</span> of Nairobi.
                </h1>
                <div class="mt-8 space-y-6 max-w-md">
                    <p class="text-xl text-on-surface-variant leading-relaxed font-medium opacity-80">
                        Become part of a professional network dedicated to organic redistribution. Your presence strengthens our city's fabric.
                    </p>
                </div>
                
                <!-- Editorial Image -->
                <div class="relative mt-16 w-full aspect-[4/3] rounded-[2.5rem] overflow-hidden shadow-2xl ring-1 ring-primary/5">
                    <img class="w-full h-full object-cover transition-transform duration-[20s] hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDiWrhuQbR1jPGwsZj3QzdlKvAi_GJogpYv3udkPPOmTl760QYyLJzj0-lowGPXafx9FmPaPbmTrn-1HjRJ-k2Za8lWeILFBtJQ7wts54xMirj5CT7KMwuF6XqdwIEaEwrtw33y0myeN18_0E3t2IxFybXQQUDLtsQ401mFpxuZUxpWAMhIEW85GhAUnijPAvqYTFb9zFcZqGJuN-0vI6NZD5-HTyTBjeA0dLzycpX-AsQHFJeosgl_KkstwBbDa21wlC9wF8ii5o"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/30 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 p-8 bg-white/60 backdrop-blur-2xl rounded-3xl border border-white/40 shadow-2xl">
                        <div class="flex items-center gap-4">
                            <div class="flex -space-x-4">
                                @foreach([1,2,3] as $i)
                                <div class="w-10 h-10 rounded-full border-4 border-white bg-surface-container-highest overflow-hidden">
                                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYmdjL1dTaK0m-2XT3dKLi2iAtjjz_ZkeAxgRUomRKfcdDjGtyiB3pB73G89HthVbyzlDNL01186La8eUCj2S7bWkgJdQasXLwjglJia9bhlU3P04gGedB4LRFIs5IiFGY751-L7vpv5JD-dZkn9THrmRcWNwXBszxMQI84YEUPBFDSv1sGJ2O4EAvp9pkzs9dDgX0-DC4D9ShkG_5Dg__ORHQRAaHVf3YcrRIlC41iQ8fUdtbNVcTlRejEhU-PNXFeR6TaSyHx60" class="w-full h-full object-cover">
                                </div>
                                @endforeach
                            </div>
                            <span class="text-[10px] font-black text-primary uppercase tracking-[0.2em] opacity-80">1,200+ Members Active Today</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Right: Registration Form -->
        <section class="lg:col-span-7 bg-surface-container-low/50 p-10 md:p-16 rounded-[3.5rem] relative overflow-hidden shadow-inner border border-outline-variant/5">
            <div class="absolute top-0 right-0 w-80 h-80 bg-secondary/5 rounded-full blur-[100px] -mr-40 -mt-40"></div>
            
            <div class="relative z-10 max-w-xl mx-auto">
                <div class="mb-14 text-center lg:text-left">
                    <h2 class="text-4xl font-headline font-black text-primary tracking-tight mb-4">Create your identity</h2>
                    <p class="text-on-surface-variant font-medium opacity-80">Select your role to start making an impact in Nairobi.</p>
                </div>

                <form method="POST" action="{{ route('register') }}" class="space-y-10">
                    @csrf
                    
                    <!-- Role Selection -->
                    <div class="grid grid-cols-3 gap-4">
                        @foreach(['donor' => ['volunteer_activism', 'Donor'], 'volunteer' => ['handshake', 'Agent'], 'ngo' => ['diversity_3', 'Recipient']] as $role => $meta)
                        <label class="cursor-pointer group h-full">
                            <input type="radio" name="role" value="{{ $role }}" class="hidden peer" {{ $role == 'donor' ? 'checked' : '' }} />
                            <div class="flex flex-col items-center justify-center p-6 rounded-2xl bg-white/50 border-2 border-transparent transition-all duration-300 peer-checked:bg-primary peer-checked:text-white peer-checked:shadow-2xl peer-checked:shadow-primary/20 hover:bg-white group-hover:scale-[1.02] h-full shadow-sm">
                                <span class="material-symbols-outlined mb-3 text-3xl">{{ $meta[0] }}</span>
                                <span class="text-[10px] font-black uppercase tracking-widest text-center">{{ $meta[1] }}</span>
                            </div>
                        </label>
                        @endforeach
                    </div>
                    @error('role')
                        <p class="text-xs text-error font-bold mt-2 ml-2">{{ $message }}</p>
                    @enderror

                    <!-- Input Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-8">
                        <div class="space-y-3">
                            <label class="text-[10px] font-black uppercase tracking-widest text-on-surface ml-2 opacity-60">Full Name</label>
                            <input name="name" value="{{ old('name') }}" required class="w-full bg-white border-0 rounded-2xl px-6 py-4 focus:ring-4 focus:ring-primary/10 transition-all placeholder:text-outline/30 font-bold text-primary shadow-sm outline-none" placeholder="Wanjiku Kamau" type="text"/>
                            @error('name') <p class="text-xs text-error font-bold">{{ $message }}</p> @enderror
                        </div>
                        <div class="space-y-3">
                            <label class="text-[10px] font-black uppercase tracking-widest text-on-surface ml-2 opacity-60">Phone Number</label>
                            <input name="phone" value="{{ old('phone') }}" required class="w-full bg-white border-0 rounded-2xl px-6 py-4 focus:ring-4 focus:ring-primary/10 transition-all placeholder:text-outline/30 font-bold text-primary shadow-sm outline-none" placeholder="+254..." type="tel"/>
                            @error('phone') <p class="text-xs text-error font-bold">{{ $message }}</p> @enderror
                        </div>
                        <div class="space-y-3 md:col-span-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-on-surface ml-2 opacity-60">Email Address</label>
                            <input name="email" value="{{ old('email') }}" required class="w-full bg-white border-0 rounded-2xl px-6 py-4 focus:ring-4 focus:ring-primary/10 transition-all placeholder:text-outline/30 font-bold text-primary shadow-sm outline-none" placeholder="wanjiku@example.com" type="email"/>
                            @error('email') <p class="text-xs text-error font-bold">{{ $message }}</p> @enderror
                        </div>
                        <div class="space-y-3 md:col-span-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-on-surface ml-2 opacity-60">Secure Password</label>
                            <div class="relative group">
                                <input name="password" required class="w-full bg-white border-0 rounded-2xl px-6 py-4 focus:ring-4 focus:ring-primary/10 transition-all placeholder:text-outline/30 font-bold text-primary shadow-sm outline-none" placeholder="••••••••" type="password"/>
                                <span class="material-symbols-outlined absolute right-6 top-1/2 -translate-y-1/2 text-outline/40 cursor-pointer hover:text-primary transition-colors">visibility</span>
                            </div>
                            @error('password') <p class="text-xs text-error font-bold">{{ $message }}</p> @enderror
                        </div>
                        <div class="space-y-3 md:col-span-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-on-surface ml-2 opacity-60">Confirm Password</label>
                            <input name="password_confirmation" required class="w-full bg-white border-0 rounded-2xl px-6 py-4 focus:ring-4 focus:ring-primary/10 transition-all placeholder:text-outline/30 font-bold text-primary shadow-sm outline-none" placeholder="••••••••" type="password"/>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <button class="w-full signature-gradient text-white font-black uppercase tracking-[0.2em] text-xs py-6 rounded-2xl shadow-xl shadow-primary/10 hover:shadow-primary/30 transition-all active:scale-[0.98] duration-300" type="submit">
                        Complete Onboarding
                    </button>

                    <!-- Divider -->
                    <div class="relative flex items-center justify-center py-2">
                        <div class="absolute inset-0 flex items-center bg-outline-variant/10 h-0.5 mt-2 rounded-full"></div>
                        <span class="relative bg-[#fafaef] px-6 text-[10px] font-black text-outline uppercase tracking-widest">Or join with Secure Auth</span>
                    </div>

                    <p class="text-center text-sm font-medium text-on-surface-variant">
                        Already have an account? 
                        <a class="text-primary font-black uppercase text-xs tracking-widest hover:text-secondary transition-all ml-2" href="{{ route('login') }}">Log in here</a>
                    </p>
                </form>
            </div>
        </section>
    </main>

    <footer class="mt-auto py-16 px-8 bg-surface-container border-t border-outline-variant/10">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-12">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-white">
                    <span class="material-symbols-outlined">eco</span>
                </div>
                <span class="font-headline font-black text-xl text-primary tracking-tighter">EcoShare Nairobi</span>
            </div>
            <div class="flex flex-wrap justify-center gap-10 text-[10px] font-black uppercase tracking-widest text-on-surface-variant">
                <a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
                <a class="hover:text-primary transition-colors" href="#">Terms of Work</a>
                <a class="hover:text-primary transition-colors" href="#">Impact Garden</a>
            </div>
            <div class="text-[10px] font-black text-outline/60 uppercase tracking-widest">
                © 2024 Nairobi Community Initiative.
            </div>
        </div>
    </footer>
</body>
</html>
