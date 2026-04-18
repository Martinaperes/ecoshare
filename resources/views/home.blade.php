@extends('layouts.app')

@section('title', 'Nairobi Community Redistribution')

@section('content')
<main class="pt-24 pb-32">
    <!-- Hero Section: Organic Editorialism -->
    <section class="px-4 md:px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center mb-16 lg:mb-24">
        <div class="lg:col-span-7 z-10 text-center lg:text-left">
            <span class="inline-block px-4 py-1.5 rounded-full bg-tertiary-container text-on-tertiary-container text-[10px] font-black uppercase tracking-widest mb-6 border border-outline-variant/20">Nairobi's Circular Rhythm</span>
            <h2 class="text-4xl md:text-5xl lg:text-7xl font-extrabold font-headline text-primary leading-[1.1] tracking-tight mb-8">
                Abundance is <br/>
                <span class="text-secondary italic font-light">meant to be shared.</span>
            </h2>
            <p class="text-base md:text-lg lg:text-xl text-on-surface-variant max-w-xl mx-auto lg:mx-0 mb-10 leading-relaxed opacity-80">
                Join Nairobi's premium community network reducing food waste and textile pollution through dignified redistribution. Every surplus item is a new beginning.
            </p>
            <div class="flex flex-col sm:flex-row flex-wrap gap-4 justify-center lg:justify-start px-4 sm:px-0">
                <a href="{{ url('/donate') }}" class="w-full sm:w-auto px-10 py-5 bg-primary text-on-primary rounded-2xl font-black text-xs uppercase tracking-widest hover:shadow-2xl hover:-translate-y-1 transition-all active:scale-95 bg-gradient-to-br from-primary to-primary-container shadow-lg shadow-primary/20 text-center">
                    Donate Now
                </a>
                <a href="{{ route('register') }}" class="w-full sm:w-auto px-10 py-5 border-2 border-primary text-primary rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-primary-fixed transition-all active:scale-95 text-center">
                    Volunteer
                </a>
            </div>
        </div>
        <div class="lg:col-span-5 relative mt-8 lg:mt-0 px-4 md:px-0">
            <div class="relative w-full aspect-[4/5] rounded-[2.5rem] lg:rounded-[3rem] overflow-hidden shadow-2xl z-10 lg:rotate-3 transition-transform hover:rotate-0 duration-500">
                <img alt="Nairobi Market" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC5LD5bXoL4jVn_uR4GQHo_BErL12r9jLiXqm4ywK4Y704101wLBBHFLgOyN9RmLewVR8Zz5hElNlstH5CQeDG-nW7Dr64vO2z6zPHGWh0zM5WndS12fv5kNM_tq6JnkYSfZ-rJ87epkAQ17XIG4o-ArKRbbWPzimLnTQWcvCbMTN0wXAZCZroiycfwCL9esdAl7tD1UVvlpcGLEFu1JsSvcLJUtlk0tbrjLG0VQBj-TWxsBjEhYNeq_hujQKolOj4_4fGN-BxNVfo"/>
                <div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent"></div>
            </div>
            <div class="absolute -top-6 -left-6 md:-top-10 md:-left-10 w-32 h-32 md:w-48 md:h-48 bg-secondary-fixed rounded-full -z-10 blur-3xl opacity-30 animate-pulse"></div>
            <div class="absolute -bottom-6 -right-6 md:-bottom-10 md:-right-10 w-48 h-48 md:w-64 md:h-64 bg-primary-fixed rounded-full -z-10 blur-3xl opacity-30 animate-pulse" style="animation-delay: 1s;"></div>
        </div>
    </section>

    <!-- Impact Badges -->
    <section class="px-4 md:px-6 mb-24 overflow-x-auto scrollbar-hide py-4">
        <div class="flex flex-nowrap sm:flex-wrap gap-4 justify-start sm:justify-center min-w-max sm:min-w-0">
            @php
                $badges = [
                    ['icon' => 'eco', 'color' => 'primary', 'val' => '1.2 Tons', 'label' => 'CO2 Saved'],
                    ['icon' => 'restaurant', 'color' => 'secondary', 'val' => '4.5k Meals', 'label' => 'Redistributed'],
                    ['icon' => 'checkroom', 'color' => 'tertiary', 'val' => '820 Items', 'label' => 'Textiles Saved'],
                ];
            @endphp
            @foreach($badges as $badge)
            <div class="flex items-center gap-4 bg-white dark:bg-inverse-surface px-6 py-4 rounded-full border border-outline-variant/10 shadow-sm hover:shadow-md transition-shadow">
                <span class="material-symbols-outlined text-{{ $badge['color'] }}" style="font-variation-settings: 'FILL' 1;">{{ $badge['icon'] }}</span>
                <div>
                    <span class="font-bold text-{{ $badge['color'] }} block text-lg leading-none">{{ $badge['val'] }}</span>
                    <span class="text-on-surface-variant text-[10px] uppercase font-black tracking-widest opacity-60">{{ $badge['label'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- How It Works: Bento Grid Layout -->
    <section class="px-4 md:px-6 lg:px-12 mb-24">
        <div class="mb-12 text-center lg:text-left">
            <h3 class="text-3xl md:text-4xl font-black font-headline text-primary mb-4 tracking-tight">The Cycle of Good</h3>
            <div class="h-1.5 w-24 bg-secondary rounded-full mx-auto lg:mx-0"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-10">
            @php
                $steps = [
                    ['icon' => 'volunteer_activism', 'bg' => 'secondary-container', 'title' => '1. Donate', 'desc' => 'List your surplus food or gently used textiles via our premium app interface in seconds.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCQL_RdPRXLpuuxwLufqjZc1rkwred9BcCDCT2a7jgcciTaw_hrD1k4BHb6RcsQ21ABuoWJquVRLTq6JJmzn19h3a68hSo_82Z2Grf5qj7s-VlCJToS1llvNQ6wnrU1D_4SS3cFKLTYoP9BiMzb6_0o0N2YBoE3O_pjHTagqX3as74vRZct3NrLgrM0lCL_CF8hqsvgvBJpnxR7Xb28QtltAI9Xmzi8tpeIvL74YBuNKI2dqIxv3HrzUd2S6DhaV-bZLwVrEJ_C4zM'],
                    ['icon' => 'local_shipping', 'bg' => 'primary-container', 'title' => '2. Collect', 'desc' => 'Our vetted logistics partners and volunteers handle the heavy lifting with professional care.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB0T9Q5bwS41yYkTnFgcTcXgAK3HKLT7J0BhUqEwDEa3Nz9KJHvOeqp3hGOVG0TK5_EqBKZWZmYpADJguBGhhZoWidD7khlwTV6lzYlwLhuZVEE0Mj5hsoSvsKmrLmlIel8YBQZI3byTSy74c4HwBAIEXibniozONBPjpn9TjhDLxCnMCy-v8Oyw0k2PAK6uUXHj8f4ExD43_38QmaOShLjp5Bs2n5pg_9oEcADgSlrgs0A6NyZ5lEl9lZlay7URtr6FJLGQvgjwSM'],
                    ['icon' => 'handshake', 'bg' => 'tertiary-container', 'title' => '3. Distribute', 'desc' => 'Real-time mapping ensures goods reach verified community hubs where they\'re needed most.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBjOPVW3nF696ExehCbKn37XiSa_WLddIPwELARzW9Ruu4zybtw9KtMShW_z6QzYM3s4kMAweyZfe-XIPr3BuOTIHhDtjjpOH7N_rAG34GXoXOYBtopJ7Q17EDUk0pu-hZATx7Xnu8LBhqUYDUOenQPN6nKXjQjDe2PKs_0MVF7sFiFbhGUXCmELODXTiOMOhEpSHleArV89huJYUBBlyHc0G8DxMPtv88EK6rhGkIttdxZdlsriJiBdYOXe1YTrqa6LW8Qpjdnj0E'],
                ];
            @endphp
            @foreach($steps as $step)
            <div class="group relative bg-surface-container-low rounded-[2.5rem] p-8 transition-all hover:bg-white hover:shadow-xl hover:-translate-y-2 border border-outline-variant/5">
                <div class="w-16 h-16 bg-{{ $step['bg'] }} rounded-2xl flex items-center justify-center mb-8 text-on-{{ $step['bg'] }} group-hover:rotate-6 transition-transform shadow-lg shadow-primary/5">
                    <span class="material-symbols-outlined text-3xl">{{ $step['icon'] }}</span>
                </div>
                <h4 class="text-2xl font-black mb-4 text-primary font-headline tracking-tight">{{ $step['title'] }}</h4>
                <p class="text-on-surface-variant mb-6 leading-relaxed opacity-80">{{ $step['desc'] }}</p>
                <div class="rounded-3xl overflow-hidden h-48 ring-1 ring-outline-variant/20">
                    <img class="w-full h-full object-cover transition-transform group-hover:scale-110 duration-700" src="{{ $step['img'] }}"/>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="px-4 md:px-6 lg:px-12 mb-12">
        <div class="relative bg-primary rounded-[3rem] md:rounded-[4rem] p-8 md:p-16 lg:p-20 overflow-hidden shadow-2xl">
            <div class="absolute inset-0 opacity-20 pointer-events-none">
                <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-primary-container via-transparent to-transparent"></div>
            </div>
            <div class="relative z-10 max-w-2xl mx-auto lg:mx-0 text-center lg:text-left">
                <h3 class="text-3xl md:text-5xl font-black font-headline text-on-primary mb-6 leading-tight tracking-tight">Be the change Nairobi breathes.</h3>
                <p class="text-on-primary/80 text-lg mb-10 leading-relaxed font-medium">Get weekly updates on your impact and opportunities to participate in exclusive redistribution events.</p>
                
                @if(session('success'))
                    <div class="mb-6 p-4 bg-white/10 text-white font-bold rounded-2xl backdrop-blur-md border border-white/20">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="flex flex-col sm:flex-row gap-4">
                    @csrf
                    <input name="email" class="flex-1 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl px-6 py-4 text-on-primary placeholder:text-on-primary/60 focus:ring-2 focus:ring-secondary outline-none transition-all" placeholder="Your email address" type="email" required/>
                    <button type="submit" class="px-8 py-4 bg-secondary text-on-secondary rounded-2xl font-black uppercase tracking-widest hover:bg-secondary-container hover:shadow-lg transition-all active:scale-95 shadow-xl shadow-secondary/20">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection
