<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'EcoShare Nairobi') | Community Redistribution</title>
    
    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    
    <!-- Tailwind CDN with Plugins -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#204e2b",
                        "primary-container": "#386641",
                        "primary-fixed": "#bcefc0",
                        "on-primary": "#ffffff",
                        "on-primary-fixed": "#00210a",
                        "secondary": "#944a00",
                        "secondary-container": "#fc8f34",
                        "secondary-fixed": "#ffdcc5",
                        "tertiary": "#3e4832",
                        "tertiary-container": "#566048",
                        "tertiary-fixed": "#dbe7c8",
                        "background": "#fafaf5",
                        "surface": "#fafaf5",
                        "on-surface": "#1a1c19",
                        "on-surface-variant": "#414941",
                        "surface-container-low": "#f4f4ef",
                        "surface-container-highest": "#e3e3de",
                        "outline-variant": "#c1c9be",
                        "error": "#ba1a1a",
                    },
                    "fontFamily": {
                        "headline": ["Plus Jakarta Sans"],
                        "body": ["Work Sans"],
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
        body { font-family: 'Work Sans', sans-serif; -webkit-font-smoothing: antialiased; }
        h1, h2, h3, h4 { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
    @yield('styles')
</head>
<body class="bg-background text-on-surface min-h-screen">
    <!-- Top Bar -->
    <header class="fixed top-0 w-full z-50 flex justify-between items-center px-6 py-4 bg-[#fafaf5]/80 dark:bg-[#1a1c19]/80 backdrop-blur-md border-b border-outline-variant/10">
        <div class="flex items-center gap-4">
            <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-primary-container flex items-center justify-center text-on-primary-fixed shadow-lg shadow-primary/10 group-hover:rotate-6 transition-transform">
                    <span class="material-symbols-outlined">eco</span>
                </div>
                <span class="text-2xl font-black text-primary tracking-tighter font-headline">EcoShare</span>
            </a>
        </div>
        
        <div class="flex items-center gap-5">
            <button class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors">search</button>
            <button class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors">notifications</button>
            
            @auth
                <div class="flex items-center gap-3 pl-4 border-l border-outline-variant/20">
                    <div class="text-right hidden sm:block">
                        <p class="text-[10px] font-black uppercase tracking-widest text-primary">{{ Auth::user()->role ?? 'Member' }}</p>
                        <p class="text-xs font-bold text-on-surface">{{ Auth::user()->name }}</p>
                    </div>
                    <div class="w-10 h-10 rounded-full border-2 border-primary/20 p-0.5 shadow-sm">
                        <div class="w-full h-full rounded-full bg-surface-container-highest overflow-hidden">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYmdjL1dTaK0m-2XT3dKLi2iAtjjz_ZkeAxgRUomRKfcdDjGtyiB3pB73G89HthVbyzlDNL01186La8eUCj2S7bWkgJdQasXLwjglJia9bhlU3P04gGedB4LRFIs5IiFGY751-L7vpv5JD-dZkn9THrmRcWNwXBszxMQI84YEUPBFDSv1sGJ2O4EAvp9pkzs9dDgX0-DC4D9ShkG_5Dg__ORHQRAaHVf3YcrRIlC41iQ8fUdtbNVcTlRejEhU-PNXFeR6TaSyHx60" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <!-- Simple Logout for demo -->
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="material-symbols-outlined text-on-surface-variant hover:text-error transition-colors text-xl">logout</button>
                    </form>
                </div>
            @else
                <div class="flex items-center gap-4 pl-4 border-l border-outline-variant/20">
                    <a href="{{ route('login') }}" class="text-xs font-black uppercase tracking-widest text-on-surface-variant hover:text-primary transition-colors">Login</a>
                    <a href="{{ route('register') }}" class="px-5 py-2.5 bg-primary text-on-primary rounded-xl text-xs font-black uppercase tracking-widest shadow-lg shadow-primary/20 hover:shadow-primary/40 transition-all active:scale-95">Join</a>
                </div>
            @endauth
        </div>
    </header>

    <!-- Header/Hero space -->
    @isset($header)
        <div class="pt-24 px-6 max-w-7xl mx-auto">
            {{ $header }}
        </div>
    @endisset

    <!-- Main Content Area -->
    <main>
        @yield('content')
        @isset($slot)
            {{ $slot }}
        @endisset
    </main>


    <!-- BottomNavBar -->
    <nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-8 pt-4 bg-[#fafaf5]/90 dark:bg-[#1a1c19]/90 backdrop-blur-xl shadow-[0_-8px_32px_rgba(0,0,0,0.06)] rounded-t-[3rem] border-t border-outline-variant/10">
        <a href="{{ url('/') }}" class="flex flex-col items-center justify-center {{ request()->is('/') ? 'text-primary bg-primary-fixed' : 'text-on-surface-variant hover:text-primary' }} rounded-2xl px-6 py-2 transition-all duration-300">
            <span class="material-symbols-outlined mb-1" style="{{ request()->is('/') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">home</span>
            <span class="text-[10px] font-bold uppercase tracking-widest">Home</span>
        </a>
        <a href="{{ url('/donate') }}" class="flex flex-col items-center justify-center {{ request()->is('donate') ? 'text-primary bg-primary-fixed' : 'text-on-surface-variant hover:text-primary' }} rounded-2xl px-6 py-2 transition-all duration-300">
            <span class="material-symbols-outlined mb-1" style="{{ request()->is('donate') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">add_circle</span>
            <span class="text-[10px] font-bold uppercase tracking-widest">Donate</span>
        </a>
        <a href="{{ url('/explore') }}" class="flex flex-col items-center justify-center {{ request()->is('explore') ? 'text-primary bg-primary-fixed' : 'text-on-surface-variant hover:text-primary' }} rounded-2xl px-6 py-2 transition-all duration-300">
            <span class="material-symbols-outlined mb-1" style="{{ request()->is('explore') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">explore</span>
            <span class="text-[10px] font-bold uppercase tracking-widest">Explore</span>
        </a>
        <a href="{{ url('/impact') }}" class="flex flex-col items-center justify-center {{ request()->is('impact') ? 'text-primary bg-primary-fixed' : 'text-on-surface-variant hover:text-primary' }} rounded-2xl px-6 py-2 transition-all duration-300">
            <span class="material-symbols-outlined mb-1" style="{{ request()->is('impact') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">monitoring</span>
            <span class="text-[10px] font-bold uppercase tracking-widest">Impact</span>
        </a>
    </nav>

    @yield('scripts')
</body>
</html>
