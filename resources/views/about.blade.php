@extends('layouts.app')

@section('title', 'Our Mission | EcoShare Nairobi')

@section('content')
<main class="pt-24 pb-32">
    <!-- Hero Section -->
    <section class="px-6 py-16 md:py-24 max-w-7xl mx-auto overflow-hidden">
        <div class="grid md:grid-cols-2 gap-12 items-center text-left">
            <div class="relative z-10">
                <span class="inline-block py-1 px-4 rounded-full bg-tertiary-container text-on-tertiary-container text-[10px] font-black uppercase tracking-widest mb-6 border border-outline-variant/20">Our Mission</span>
                <h1 class="text-5xl md:text-7xl font-headline font-black text-primary leading-[1.1] tracking-tighter mb-8">
                    Nairobi's <br/>Circular Rhythm
                </h1>
                <p class="text-xl text-on-surface-variant leading-relaxed max-w-lg mb-10 font-medium opacity-80">
                    Bridging the gap between abundance and urgency. We transform local surplus into community sustenance, one meal and one garment at a time.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('register') }}" class="px-8 py-4 bg-primary text-on-primary rounded-2xl font-black text-xs uppercase tracking-widest hover:shadow-2xl transition-all active:scale-95 flex items-center gap-2 shadow-lg shadow-primary/20">
                        Join the Movement
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="aspect-square rounded-[3rem] overflow-hidden rotate-3 hover:rotate-0 transition-transform duration-500 shadow-2xl ring-1 ring-primary/5">
                    <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVR3o5HEwOu4ygPxnNfeLSgmHz11x1MfsVLomTwOHoO7XrqzIOI6-wUwc6az0zop0Gp0mGT8BhHSMWIholBUEKKX-OCr89dGtcB1dRwWZBe69A-XK2e3U2zWOEAnEs3IwEuOZNs-2Z1fukDjcd9Oz3Y39gCr7gnZOg-zIcMx0dK4bqF8OLLNN25GCSkhqs6Zd3bU-sMJH9_jSdqY_RG29N4LkKubxNbo5cAMRQXWtOc0z7eSDY--uBvKW4391gfvltxbjpci6J6oQ"/>
                </div>
                <!-- Small float overlay -->
                <div class="absolute -bottom-6 -left-6 w-40 h-40 md:w-48 md:h-48 rounded-[2rem] overflow-hidden border-8 border-background shadow-2xl -rotate-6 hidden sm:block">
                    <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBzQZQzWHv6wOkwRQQwW2fc3TET9Wjahy2nnN7xmH8Ma-RziMAhXAzAjHrEwfdh0DveAx9b-dv1H_EJYWI2eT82v4OUjZphiVGSGhH8DkEOxZ2PEoUPEF7n1Levyjz5ehzE6uDyMmBNyqGxNxrc1-7z32WAYvhxPusPziyJeQ9FRuCjMqsxA9Ix6KK8Ex4PPK7TTpHJoz0C4huB6oMGBPNkJaDHqi7H2vENr95mf4fumEJFqQDDvH9_6g3sUsV0connBMTiJgW-ZFE"/>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="bg-surface-container-low py-24 px-6 md:px-12 rounded-[4rem] mx-4 md:mx-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-12 gap-16 items-center">
                <div class="md:col-span-5 order-2 md:order-1 text-left">
                    <div class="space-y-6">
                        <h2 class="text-4xl md:text-5xl font-headline font-black text-primary tracking-tighter">Rooted in Purpose</h2>
                        <p class="text-lg text-on-surface-variant leading-relaxed font-medium opacity-80">
                            Our journey began in the vibrant hubs of Westlands and CBD. We witnessed a stark paradox: while restaurant chains faced massive daily surplus, many of our neighbors in nearby settlements went without.
                        </p>
                        <p class="text-lg text-on-surface-variant leading-relaxed font-medium opacity-80">
                            Simultaneously, the 'Mitumba' textile trade was flooding landfills. We decided to rewrite this narrative. EcoShare Nairobi was born to synchronize these rhythms turning waste into a resource for dignity.
                        </p>
                        <div class="pt-6">
                            <div class="flex items-center gap-6 p-6 bg-white rounded-[2rem] shadow-sm border border-outline-variant/10">
                                <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1;">restaurant</span>
                                </div>
                                <div>
                                    <p class="text-xl font-headline font-black text-primary">5,000+ Meals Saved</p>
                                    <p class="text-xs font-bold text-on-surface-variant uppercase tracking-widest opacity-60">Monthly Redistribution</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-7 order-1 md:order-2">
                    <div class="grid grid-cols-2 gap-4 md:gap-6">
                        <div class="space-y-4 md:space-y-6 pt-12">
                            <img class="rounded-3xl w-full h-64 object-cover shadow-xl" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_AbiXLJPHX-r-VW0xDaK3K2SbdDwB6hCa23rlChdFeOZH71P9_SlA5oS7Z4iBMJe_rBxguItZ4QGmVf_nM1bcEfz_WtdP3c_B8qZ7Z7sqnD4O4zUV8WyqrLqEZSNhJ5iiENJNeSNbnkImkLZ225-fxPjnljCY5IuUK5PLBBxlDzD2pt-t2vsTBfugujeltfKJRYu0np5ErY8F-Yj0PYr9DmEI6Atzn1mr1oQiX99d9onuU08qAomzzLA6kbVQ55szr8dvI8wP60w"/>
                            <img class="rounded-3xl w-full h-48 object-cover shadow-lg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2DJ_5N3nkCdfHXqcWR0g8htFCs5em2xa0-PdtbqoXTlLEpvbizxTRE4OQCJqlS_JhJC3iZtXU6deRgtyjllO-AltuUsIL_R-wnwnlGrYLHeD-Fd44UHfH7SPd1rnAjjkRSwcV-nEBFDs7Umi51DBYnyzb3n6x0o-9PWFH2JHlpPKUrq5KxOz6RpVLrN8NkyEmRBoOe7RRHuX9dFl3chAVy3QjVqlJCmDaEKruz8wvqlU_hw3B0Sb40ui_fKyfG49NGi5s0O9G08E"/>
                        </div>
                        <div class="space-y-4 md:space-y-6">
                            <img class="rounded-3xl w-full h-48 object-cover shadow-lg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0np0q0zs1cc2HWwpvmx5D9mbVv4ckjsyLI3H15VzNsgt8AGyTbagexzihmv-hSB0-S6E7kEEUo7CjbZXnPcqYJnANuVeQhhpoEm9glk0SAP6t-M7E_rM227msgCJwr3LDZw8VXM3eVAR8cBgp3oy4E7JHKYre3x3Ug-4Nj_xEzv383T2kwDMNPy_7rImF8mHIdfTPenEFf5wsYSpoJdl_In0Dfj8LcFWrd0YfPXHYVuk1KCKfBx8B2LagxNOZDby4gG7r-Xx2rhY"/>
                            <img class="rounded-3xl w-full h-64 object-cover shadow-xl" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNS9bV2OxpXRXTLKrBRlO2RDKLTPr_sze7utT2W_zGCXoycaK1Q7G7YP2ZuewPoma0aYfiTjj66qdBkPPmeW_iqIWRKj6qjVCC4vSskzuy0ac1l0GBqQ1mSyrUhx_0lw1wQaVaHCXJTeUjB7RwQnOAGYSymqsDxU-1gxNkhV3LUsBUyv8zMc3Vzpe5lj1CtuT6BL0Mx6fG0ExiZuYd_bw4uYivubBbSyUCoodp740xpckKf2EN_aUMYQ5Md0kNgKMG5DVTVBKXyYw"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem vs Solution (Bento Grid) -->
    <section class="py-24 px-6 max-w-7xl mx-auto space-y-16">
        <h2 class="text-4xl md:text-5xl font-headline font-black text-center text-primary tracking-tighter">The Shift We're Making</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 text-left">
            <!-- Waste Card -->
            <div class="md:col-span-1 bg-error/5 p-8 md:p-10 rounded-[2.5rem] flex flex-col justify-between border border-error/5">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-error/10 flex items-center justify-center text-error mb-8">
                        <span class="material-symbols-outlined text-3xl">delete_sweep</span>
                    </div>
                    <h3 class="text-2xl font-headline font-black text-error mb-4 tracking-tight">The Linear Waste</h3>
                    <p class="text-on-surface-variant font-medium opacity-80">Over 40% of food produced in Kenya is lost or wasted before it reaches the consumer, while clothing ends up in overflowing landfills.</p>
                </div>
                <div class="mt-12 pt-6 border-t border-error/10 flex items-end">
                    <span class="text-6xl font-headline font-black text-error opacity-40">40%</span>
                </div>
            </div>
            <!-- Solution Main Card -->
            <div class="md:col-span-2 bg-primary p-10 md:p-14 rounded-[3rem] text-on-primary relative overflow-hidden shadow-2xl">
                <div class="relative z-10 h-full flex flex-col justify-between">
                    <div>
                        <div class="w-16 h-16 rounded-2xl bg-white/20 flex items-center justify-center text-white mb-8 backdrop-blur-md border border-white/10">
                            <span class="material-symbols-outlined text-3xl">all_inclusive</span>
                        </div>
                        <h3 class="text-3xl md:text-4xl font-headline font-black mb-6 tracking-tight">The EcoShare Circle</h3>
                        <p class="text-primary-fixed text-lg md:text-xl max-w-md font-medium">We use real-time logistics to rescue surplus and redistribute it to community kitchens and vocational training centers.</p>
                    </div>
                    <div class="flex gap-12 mt-12">
                        <div class="flex flex-col">
                            <span class="text-4xl font-headline font-black">12k+</span>
                            <span class="text-[10px] font-black uppercase tracking-[0.2em] opacity-60">Kgs Saved</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-4xl font-headline font-black">45</span>
                            <span class="text-[10px] font-black uppercase tracking-[0.2em] opacity-60">Partners</span>
                        </div>
                    </div>
                </div>
                <!-- Decorative element -->
                <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-white/5 rounded-full blur-[100px] pointer-events-none"></div>
            </div>
            <!-- Logistics Card -->
            <div class="md:col-span-2 bg-surface-container p-8 md:p-12 rounded-[2.5rem] flex flex-col md:flex-row items-center gap-10 border border-outline-variant/10">
                <div class="w-full md:w-1/3 aspect-video md:aspect-square rounded-3xl overflow-hidden shadow-lg">
                    <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvhkHay3nvTnOM6zTju4C4eGMhvn5rVDNvbq9QRIlA8MN8bxBpKq6SfKMP-gBbl5Cf8ZIjCMpRFwTiyKV_Ir6wr25QFkQRACgxFYtNSoC_NxwrE8UWYJNO9krI1kMzYrf75WePPbGb1dSR8Byx6Ty2OiIktrCPbomaTUBTLn13NH5hWl2BJDqXcEal7drnQ1oVKZ5VY8vklV2a5bfofyrPlHd8AKUMvLRjtAxqYX5oXa1IPnrd9Tg-Hd0yfJnmh0tAO14Unpu0s"/>
                </div>
                <div class="flex-1">
                    <h3 class="text-2xl md:text-3xl font-headline font-black text-primary mb-4 tracking-tight">Smart Redistribution</h3>
                    <p class="text-on-surface-variant font-medium opacity-80 mb-6">Our logistics network connects restaurant surplus directly to those in need within 2 hours of pickup.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-4 py-1.5 bg-white rounded-full text-[10px] font-black text-primary uppercase tracking-widest border border-primary/10">Zero Waste</span>
                        <span class="px-4 py-1.5 bg-white rounded-full text-[10px] font-black text-primary uppercase tracking-widest border border-primary/10">Rapid Response</span>
                    </div>
                </div>
            </div>
            <!-- Textiles Card -->
            <div class="md:col-span-1 bg-secondary-fixed/30 p-8 md:p-10 rounded-[2.5rem] border border-secondary/10">
                <div class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center text-secondary mb-8">
                    <span class="material-symbols-outlined text-3xl">checkroom</span>
                </div>
                <h3 class="text-2xl font-headline font-black text-secondary mb-4 tracking-tight">Textile Revival</h3>
                <p class="text-on-surface-variant font-medium opacity-80">We collect surplus garments and upcycle them through local artisans, creating livelihoods and reducing pollution.</p>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="bg-surface py-24 px-6 overflow-hidden">
        <div class="max-w-7xl mx-auto text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-headline font-black text-primary mb-4 tracking-tighter">Guided by Humanity</h2>
            <p class="text-on-surface-variant text-lg font-medium opacity-70 max-w-2xl mx-auto">Our actions are anchored in a philosophy that prioritizes the planet and people equally.</p>
        </div>
        <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-16">
            <div class="flex flex-col items-center text-center group">
                <div class="w-24 h-24 rounded-[2.5rem] bg-surface-container-low flex items-center justify-center text-primary mb-8 group-hover:scale-110 transition-transform duration-500 shadow-sm border border-outline-variant/10">
                    <span class="material-symbols-outlined text-5xl" style="font-variation-settings: 'FILL' 1;">groups_3</span>
                </div>
                <h3 class="text-2xl font-headline font-black text-primary mb-4 tracking-tight">Community</h3>
                <p class="text-on-surface-variant font-medium leading-relaxed opacity-70">Success isn't measured in kilos, but in the connections we build between different Nairobi neighborhoods.</p>
            </div>
            <div class="flex flex-col items-center text-center group">
                <div class="w-24 h-24 rounded-[2.5rem] bg-surface-container-low flex items-center justify-center text-primary mb-8 group-hover:scale-110 transition-transform duration-500 shadow-sm border border-outline-variant/10">
                    <span class="material-symbols-outlined text-5xl" style="font-variation-settings: 'FILL' 1;">park</span>
                </div>
                <h3 class="text-2xl font-headline font-black text-primary mb-4 tracking-tight">Sustainability</h3>
                <p class="text-on-surface-variant font-medium leading-relaxed opacity-70">We aim for a circular system that regenerates our environment and restores our local ecosystems.</p>
            </div>
            <div class="flex flex-col items-center text-center group">
                <div class="w-24 h-24 rounded-[2.5rem] bg-surface-container-low flex items-center justify-center text-primary mb-8 group-hover:scale-110 transition-transform duration-500 shadow-sm border border-outline-variant/10">
                    <span class="material-symbols-outlined text-5xl" style="font-variation-settings: 'FILL' 1;">handshake</span>
                </div>
                <h3 class="text-2xl font-headline font-black text-primary mb-4 tracking-tight">Dignity</h3>
                <p class="text-on-surface-variant font-medium leading-relaxed opacity-70">Every individual deserves access to quality resources with respect, choice, and transparency.</p>
            </div>
        </div>
    </section>

    <!-- Community Partners -->
    <section class="py-24 px-6 max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6 text-left">
            <div class="max-w-xl">
                <h2 class="text-4xl font-headline font-black text-primary mb-4 tracking-tighter">Community Stewards</h2>
                <p class="text-on-surface-variant text-lg font-medium opacity-70">The local businesses and community leaders making this rhythm possible every day.</p>
            </div>
            <button class="text-primary font-black uppercase tracking-widest text-xs flex items-center gap-2 group">
                View All Partners
                <span class="material-symbols-outlined group-hover:translate-x-2 transition-transform">north_east</span>
            </button>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 lg:gap-10">
            @php
                $partners = ['CHICKEN INN', 'KFC KENYA', "J'S FRESH BAR", 'JAVA HOUSE'];
            @endphp
            @foreach($partners as $partner)
            <div class="p-10 bg-surface-container rounded-[2rem] flex items-center justify-center grayscale hover:grayscale-0 transition-all opacity-40 hover:opacity-100 border border-outline-variant/5">
                <span class="text-xl font-headline font-black text-primary tracking-tighter">{{ $partner }}</span>
            </div>
            @endforeach
        </div>
    </section>

    <!-- CTA Section -->
    <section class="px-6 mb-12">
        <div class="max-w-7xl mx-auto rounded-[4rem] bg-secondary p-12 md:p-24 text-center text-on-secondary relative overflow-hidden shadow-2xl">
            <div class="relative z-10">
                <h2 class="text-4xl md:text-7xl font-headline font-black mb-8 max-w-3xl mx-auto tracking-tighter leading-none">Ready to bridge the gap?</h2>
                <p class="text-xl mb-12 opacity-80 max-w-xl mx-auto font-medium">Whether you are a business owner or a community volunteer, there is a seat at our table for you.</p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    @auth
                    <a href="{{ route('donate') }}" class="px-10 py-6 bg-white text-secondary rounded-2xl md:rounded-full font-headline font-black text-lg hover:bg-surface-container transition-all active:scale-95 shadow-2xl">
                        Manage My Hub
                    </a>
                    @else
                    <a href="{{ route('register', ['role' => 'organization']) }}" class="px-10 py-6 bg-white text-secondary rounded-2xl md:rounded-full font-headline font-black text-lg hover:bg-surface-container transition-all active:scale-95 shadow-2xl">
                        Register Organization
                    </a>
                    @endauth
                    
                    <a href="{{ route('explore') }}" class="px-10 py-6 bg-primary text-white rounded-2xl md:rounded-full font-headline font-black text-lg hover:shadow-2xl transition-all active:scale-95">
                        Discover Flow
                    </a>
                </div>

            </div>
            <!-- Glassy shapes -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-primary/20 rounded-full blur-[100px] translate-y-1/2 -translate-x-1/2"></div>
        </div>
    </section>
</main>
@endsection
