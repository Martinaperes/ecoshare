@extends('layouts.app')

@section('title', 'Community Impact Garden')

@section('content')
<main class="pt-24 lg:pt-32 pb-32 px-4 md:px-6 max-w-7xl mx-auto space-y-12 lg:space-y-20">
    <!-- Header: The Garden of Good -->
    <section class="text-center space-y-6 max-w-3xl mx-auto px-4">
        <div class="inline-flex items-center gap-3 px-5 py-2 bg-secondary/10 rounded-full border border-secondary/10">
            <span class="material-symbols-outlined text-secondary text-sm">eco</span>
            <span class="text-[10px] font-black uppercase tracking-[0.2em] text-secondary">Nairobi District Analytics</span>
        </div>
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-headline font-black text-primary leading-[1.1] tracking-tighter">
            Our Shared <br/><span class="text-secondary italic font-light">Community Garden.</span>
        </h1>
        <p class="text-base md:text-lg text-on-surface-variant leading-relaxed font-medium opacity-70">
            Visualizing the breathing rhythm of Nairobi's organic redistribution. Every data point is a meal shared or a garment repurposed.
        </p>
    </section>

    <!-- Global Stats Grid -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
        @php
            $stats = [
                ['title' => 'MEALS SHARED', 'val' => '12.4k', 'unit' => 'Portions', 'color' => 'secondary', 'icon' => 'restaurant'],
                ['title' => 'GARMENTS SAVED', 'val' => '3.8k', 'unit' => 'Pieces', 'color' => 'primary', 'icon' => 'checkroom'],
                ['title' => 'CO2 OFFSET', 'val' => '15.2', 'unit' => 'Tons', 'color' => 'tertiary', 'icon' => 'energy_savings_leaf'],
            ];
        @endphp
        @foreach($stats as $stat)
        <div class="bg-surface-container-low rounded-[3rem] p-8 md:p-10 border border-outline-variant/10 shadow-inner group hover:bg-white hover:shadow-2xl transition-all duration-500">
            <div class="flex justify-between items-start mb-8">
                <div class="w-14 h-14 md:w-16 md:h-16 bg-{{ $stat['color'] }}-container/20 rounded-2xl flex items-center justify-center text-{{ $stat['color'] }} group-hover:rotate-12 transition-transform">
                    <span class="material-symbols-outlined text-3xl md:text-4xl">{{ $stat['icon'] }}</span>
                </div>
                <div class="h-10 w-24 bg-surface-container rounded-full overflow-hidden p-1">
                    <div class="h-full w-2/3 bg-{{ $stat['color'] }} rounded-full opacity-30"></div>
                </div>
            </div>
            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-on-surface-variant opacity-60 mb-2">{{ $stat['title'] }}</p>
            <div class="flex items-baseline gap-2">
                <span class="text-4xl md:text-5xl font-headline font-black text-primary">{{ $stat['val'] }}</span>
                <span class="text-xs font-bold text-on-surface-variant">{{ $stat['unit'] }}</span>
            </div>
        </div>
        @endforeach
    </section>

    <!-- Visual Analytics: Live Rhythm -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10">
        <!-- Main Chart Area -->
        <div class="lg:col-span-8 bg-white rounded-[3rem] md:rounded-[4rem] p-8 md:p-12 lg:p-16 border border-outline-variant/10 shadow-sm relative overflow-hidden group">
            <div class="relative z-10 space-y-12">
                <div class="flex flex-col sm:flex-row justify-between items-start gap-6">
                    <div>
                        <h3 class="text-3xl font-headline font-black text-primary tracking-tight mb-2">Weekly Pulse</h3>
                        <p class="text-on-surface-variant font-medium opacity-70">Redistribution activity over the last 7 cycles.</p>
                    </div>
                    <div class="flex bg-surface-container p-1 rounded-2xl md:rounded-full">
                        <button class="px-5 md:px-6 py-2 md:py-3 bg-white text-primary font-black text-[9px] md:text-xs uppercase tracking-widest rounded-full shadow-sm">Daily</button>
                        <button class="px-5 md:px-6 py-2 md:py-3 text-on-surface-variant font-black text-[9px] md:text-xs uppercase tracking-widest rounded-full opacity-60 hover:opacity-100 transition-opacity">Weekly</button>
                    </div>
                </div>
                
                <!-- Mock Chart Visual -->
                <div class="h-[250px] md:h-[350px] flex items-end justify-between gap-1 md:gap-4 px-2 md:px-8">
                    @foreach([40, 65, 45, 80, 55, 90, 70] as $h)
                    <div class="flex-1 group/bar relative">
                        <div class="w-full bg-primary-container/20 rounded-t-2xl md:rounded-t-3xl transition-all duration-1000 origin-bottom hover:bg-primary/20 cursor-pointer" style="height: {{ $h }}%;">
                            <div class="absolute bottom-0 w-full bg-primary rounded-t-2xl md:rounded-t-3xl transition-all duration-700" style="height: {{ $h - 20 }}%;"></div>
                        </div>
                        <div class="absolute -top-10 left-1/2 -translate-x-1/2 bg-primary text-on-primary px-3 py-1 rounded-lg text-[10px] font-black opacity-0 group-hover/bar:opacity-100 transition-opacity whitespace-nowrap">{{ $h }}%</div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Decorative Grain -->
            <div class="absolute inset-0 opacity-[0.03] pointer-events-none bg-[url('https://www.transparenttextures.com/patterns/asfalt-light.png')]"></div>
        </div>

        <!-- Leaderboard Sidebar -->
        <div class="lg:col-span-4 bg-surface-container-low rounded-[3rem] md:rounded-[4rem] p-8 md:p-12 border border-outline-variant/10 shadow-inner space-y-10">
            <h3 class="text-2xl font-headline font-black text-primary tracking-tight">Impact Leaders</h3>
            <div class="space-y-8">
                @php
                    $leaders = [
                        ['name' => 'Chicken Inn Group', 'val' => '4.2k', 'initials' => 'CI'],
                        ['name' => 'Artcaffe Coffee', 'val' => '3.8k', 'initials' => 'AC'],
                        ['name' => 'NGO Nairobi Hub', 'val' => '2.9k', 'initials' => 'NH'],
                        ['name' => 'Textile Artisans', 'val' => '2.1k', 'initials' => 'TA'],
                    ];
                @endphp
                @foreach($leaders as $leader)
                <div class="flex items-center justify-between group cursor-default">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 md:w-14 md:h-14 bg-white rounded-2xl flex items-center justify-center font-headline font-black text-secondary border border-outline-variant/10 shadow-sm transition-transform group-hover:scale-110">{{ $leader['initials'] }}</div>
                        <div>
                            <p class="font-bold text-primary group-hover:text-secondary transition-colors text-sm md:text-base">{{ $leader['name'] }}</p>
                            <p class="text-[9px] font-black uppercase tracking-widest text-on-surface-variant opacity-40">Verified Tier 1</p>
                        </div>
                    </div>
                    <span class="text-lg md:text-xl font-headline font-black text-primary opacity-60">{{ $leader['val'] }}</span>
                </div>
                @endforeach
            </div>
            <button class="w-full py-5 border-2 border-outline-variant/30 rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] text-on-surface-variant hover:border-primary hover:text-primary transition-all active:scale-95">Full Data Explorer</button>
        </div>
    </section>
</main>
@endsection
