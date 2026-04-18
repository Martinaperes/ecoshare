<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Manage @yield('title', 'Admin Dashboard') | EcoShare Nairobi</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Work+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
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
                        "secondary": "#944a00",
                        "secondary-container": "#fc8f34",
                        "secondary-fixed": "#ffdcc5",
                        "tertiary": "#3e4832",
                        "tertiary-container": "#566048",
                        "tertiary-fixed": "#dbe7c8",
                        "surface": "#fafaf5",
                        "on-surface": "#1a1c19",
                        "on-surface-variant": "#414941",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#f4f4ef",
                        "surface-container": "#eeeee9",
                        "surface-container-high": "#e8e8e3",
                        "surface-container-highest": "#e3e3de",
                        "outline-variant": "#c1c9be",
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
        body { font-family: 'Work Sans', sans-serif; }
        h1, h2, h3, h4 { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass-panel {
            background: rgba(250, 250, 245, 0.8);
            backdrop-filter: blur(20px);
        }
    </style>
    @yield('styles')
</head>
<body class="bg-surface text-on-surface selection:bg-primary-fixed selection:text-on-primary-fixed">
    <!-- TopAppBar -->
    <header class="fixed top-0 z-50 w-full bg-[#fafaf5]/80 backdrop-blur-md flex justify-between items-center px-6 py-4 border-b border-outline-variant/10">
        <div class="flex items-center gap-4">
            <span class="material-symbols-outlined text-primary cursor-pointer md:hidden" data-icon="menu">menu</span>
            <h1 class="font-headline font-bold text-2xl tracking-tight text-primary">EcoShare Admin</h1>
        </div>
        <div class="flex items-center gap-5">
            <span class="material-symbols-outlined text-tertiary-container cursor-pointer hover:text-primary transition-colors" data-icon="search">search</span>
            <div class="relative">
                <span class="material-symbols-outlined text-tertiary-container cursor-pointer hover:text-primary transition-colors" data-icon="notifications">notifications</span>
                <span class="absolute -top-1 -right-1 w-2 h-2 bg-error rounded-full ring-2 ring-surface"></span>
            </div>
            <div class="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center border-2 border-primary overflow-hidden shadow-sm">
                <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6xYWBCRtXCtJSha4cwOEl1piPL_-CtSFrM0Ya3YOF4wzEa4kI9b7cxMGaaWwI4NJYAn7FQwQ9aW-CXleclUQEfWTcMv96Xq4R64yYWh4fDT2u9FnE92Ub20vIOjHvR4ILY1WyLvcC5pSqwP_rsANDQmu61Mf95GGskhEjb_c2xmVk4xt4SBpb_zhnNMQwciktUgtPDzmSJoaZLU2qDNCBUDHn5PXuvludoSJ4TeyVFgGT-enuIT4tTwB55GoAmG0NT36yDvRXt8s"/>
            </div>
        </div>
    </header>

    <!-- NavigationDrawer (Sidebar) -->
    <aside class="fixed left-0 top-0 h-full w-72 bg-[#fafaf5] flex flex-col p-4 space-y-2 pt-24 hidden md:flex border-r border-outline-variant/20 shadow-sm">
        <div class="px-4 py-8 mb-6 flex items-center gap-4 bg-primary-container/10 rounded-3xl mx-2 border border-primary/5">
            <div class="w-12 h-12 rounded-xl bg-primary-container flex items-center justify-center text-on-primary-container shadow-lg shadow-primary/10">
                <span class="material-symbols-outlined" data-icon="hub">hub</span>
            </div>
            <div>
                <p class="font-black text-primary text-sm tracking-tight">Nairobi Hub</p>
                <p class="text-[10px] text-tertiary-container font-black uppercase tracking-widest opacity-60">Global Admin</p>
            </div>
        </div>
        <nav class="flex flex-col space-y-2 px-2">
            <a class="flex items-center gap-4 px-6 py-4 rounded-2xl {{ request()->is('admin') ? 'bg-primary text-on-primary shadow-xl shadow-primary/20' : 'text-on-surface-variant hover:bg-surface-container-low' }} transition-all duration-300" href="{{ url('/admin') }}">
                <span class="material-symbols-outlined" data-icon="insights">insights</span>
                <span class="text-sm font-headline font-bold">Analytics</span>
            </a>
            <a class="flex items-center gap-4 px-6 py-4 rounded-2xl text-on-surface-variant hover:bg-surface-container-low transition-all duration-300" href="#">
                <span class="material-symbols-outlined" data-icon="handshake">handshake</span>
                <span class="text-sm font-headline font-bold">Partners</span>
            </a>
            <a class="flex items-center gap-4 px-6 py-4 rounded-2xl text-on-surface-variant hover:bg-surface-container-low transition-all duration-300" href="#">
                <span class="material-symbols-outlined" data-icon="local_shipping">local_shipping</span>
                <span class="text-sm font-headline font-bold">Logistics</span>
            </a>
            <a class="flex items-center gap-4 px-6 py-4 rounded-2xl text-on-surface-variant hover:bg-surface-container-low transition-all duration-300" href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span class="text-sm font-headline font-bold">System Settings</span>
            </a>
        </nav>
    </aside>

    @yield('content')

    <!-- Footer -->
    <footer class="md:ml-72 bg-surface-container-low/50 flex flex-col md:flex-row justify-between items-center px-10 py-8 border-t border-outline-variant/10 mt-auto">
        <p class="text-xs text-tertiary-container font-medium">© 2024 EcoShare Nairobi. Premium Network. All rights reserved.</p>
        <div class="flex gap-8 mt-4 md:mt-0">
            <a class="text-[10px] font-black uppercase tracking-widest text-tertiary-container hover:text-primary transition-colors" href="#">Privacy</a>
            <a class="text-[10px] font-black uppercase tracking-widest text-tertiary-container hover:text-primary transition-colors" href="#">Support</a>
            <a class="text-[10px] font-black uppercase tracking-widest text-tertiary-container hover:text-primary transition-colors" href="#">Terms</a>
        </div>
    </footer>

    @yield('scripts')
</body>
</html>
