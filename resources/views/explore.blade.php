@extends('layouts.app')

@section('title', 'Explore Community Needs')

@section('content')
<main class="pt-24 lg:pt-32 pb-32 px-4 md:px-6 max-w-7xl mx-auto space-y-12 lg:space-y-16">
    <!-- Search & Filter Bar: Professional & Compact -->
    <section class="bg-surface-container-low p-4 rounded-[2rem] md:rounded-[3rem] shadow-inner border border-outline-variant/5">
        <div class="flex flex-col lg:flex-row gap-4 items-stretch lg:items-center">
            <div class="relative flex-1 group">
                <input class="w-full bg-white border-0 rounded-2xl md:rounded-full px-8 py-5 md:px-14 md:py-6 font-bold text-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none shadow-sm placeholder:text-outline/30 text-sm md:text-base" placeholder="Search for food nodes or textile requests..." type="text"/>
                <span class="material-symbols-outlined absolute left-5 top-1/2 -translate-y-1/2 text-primary opacity-40 group-focus-within:opacity-100 hidden md:block">search</span>
            </div>
            <div class="flex gap-2">
                <button class="flex-1 lg:flex-none px-6 md:px-10 py-5 lg:py-6 bg-white rounded-2xl md:rounded-full font-black text-[10px] md:text-xs text-primary uppercase tracking-[0.2em] shadow-sm hover:shadow-xl transition-all border border-outline-variant/10 flex items-center justify-center gap-3">
                    <span class="material-symbols-outlined text-sm md:text-base">tune</span>
                    Filter
                </button>
                <button class="flex-1 lg:flex-none px-6 md:px-10 py-5 lg:py-6 bg-primary text-on-primary rounded-2xl md:rounded-full font-black text-[10px] md:text-xs uppercase tracking-[0.2em] shadow-xl hover:-translate-y-1 transition-all flex items-center justify-center">
                    Discover
                </button>
            </div>
        </div>
    </section>

    <!-- Grid Layout: Premium Bento Style -->
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 lg:gap-10">
        @php
            $items = [
                ['type' => 'FOOD', 'title' => 'Fresh Excess: Sopa Lodge', 'location' => 'Lower Kabete', 'time' => 'Expires in 4h', 'qty' => '50 Portions', 'color' => 'secondary', 'icon' => 'restaurant'],
                ['type' => 'TEXTILE', 'title' => 'Linens Needed: NGO Hub', 'location' => 'Kibera Drive', 'time' => 'High Priority', 'qty' => '20 Sets', 'color' => 'primary', 'icon' => 'checkroom'],
                ['type' => 'FOOD', 'title' => 'Bakery Surplus: Java House', 'location' => 'CBD Branch', 'time' => 'Available Now', 'qty' => '30 Packs', 'color' => 'secondary', 'icon' => 'bakery_dining'],
                ['type' => 'LOGISTICS', 'title' => 'Pickup Agent Needed', 'location' => 'Westlands Node', 'time' => 'Route Active', 'qty' => '3 Drops', 'color' => 'tertiary', 'icon' => 'local_shipping'],
                ['type' => 'TEXTILE', 'title' => 'Uniform Collection', 'location' => 'Industrial Area', 'time' => 'Scheduled', 'qty' => '100+ Pieces', 'color' => 'primary', 'icon' => 'apparel'],
                ['type' => 'FOOD', 'title' => 'Event Surplus: KICC', 'location' => 'City Square', 'time' => 'Urgent', 'qty' => '500+ Meals', 'color' => 'secondary', 'icon' => 'groups'],
            ];
        @endphp

        @foreach($items as $item)
        <div class="group bg-white rounded-[2.5rem] md:rounded-[3rem] p-8 space-y-8 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-outline-variant/10 flex flex-col justify-between">
            <div class="space-y-6">
                <div class="flex justify-between items-start">
                    <div class="w-14 h-14 bg-{{ $item['color'] }}-container/20 rounded-2xl flex items-center justify-center text-{{ $item['color'] }} group-hover:rotate-6 transition-transform">
                        <span class="material-symbols-outlined text-3xl">{{ $item['icon'] }}</span>
                    </div>
                    <span class="px-4 py-1.5 rounded-full bg-surface-container text-[9px] font-black tracking-[0.2em] text-on-surface-variant opacity-60">#{{ $item['type'] }}</span>
                </div>
                <div>
                    <h3 class="text-2xl font-headline font-black text-primary tracking-tight mb-3 leading-tight">{{ $item['title'] }}</h3>
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center gap-2 text-on-surface-variant opacity-70">
                            <span class="material-symbols-outlined text-sm">location_on</span>
                            <span class="text-xs font-bold">{{ $item['location'] }}</span>
                        </div>
                        <div class="flex items-center gap-2 text-{{ $item['color'] }}">
                            <span class="material-symbols-outlined text-sm">schedule</span>
                            <span class="text-xs font-black uppercase tracking-widest">{{ $item['time'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="pt-6 border-t border-outline-variant/10 flex items-center justify-between">
                <div>
                    <p class="text-[9px] font-black text-on-surface-variant uppercase tracking-widest opacity-40 mb-1 leading-none">Net Impact</p>
                    <p class="font-headline font-black text-primary text-lg leading-none">{{ $item['qty'] }}</p>
                </div>
                <button class="px-6 py-4 bg-primary text-on-primary rounded-2xl font-black text-[10px] uppercase tracking-widest hover:shadow-lg active:scale-95 transition-all shadow-md">
                    Claim Route
                </button>
            </div>
        </div>
        @endforeach
    </section>

    <!-- Global Map Call: Premium Section -->
    <section class="pb-12">
        <div class="bg-primary rounded-[3rem] md:rounded-[4rem] p-8 md:p-16 lg:p-20 text-on-primary overflow-hidden relative shadow-2xl">
            <div class="relative z-10 max-w-2xl text-center lg:text-left mx-auto lg:mx-0">
                <h2 class="text-3xl md:text-5xl lg:text-6xl font-headline font-black mb-8 leading-[1.1] tracking-tighter">View Nairobi's <br/>Live Flow Plate.</h2>
                <div class="flex flex-col sm:flex-row gap-6 items-center lg:items-end">
                    <button class="w-full sm:w-auto px-10 py-6 bg-white text-primary rounded-2xl md:rounded-full font-headline font-black text-lg transition-all hover:bg-primary-fixed shadow-2xl active:scale-95">Open Live Map</button>
                    <div class="flex items-center gap-5">
                        <div class="flex -space-x-5">
                            @foreach([1,2,3] as $i)
                            <div class="w-12 h-12 rounded-full border-4 border-primary bg-surface-container-highest overflow-hidden shadow-lg">
                                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYmdjL1dTaK0m-2XT3dKLi2iAtjjz_ZkeAxgRUomRKfcdDjGtyiB3pB73G89HthVbyzlDNL01186La8eUCj2S7bWkgJdQasXLwjglJia9bhlU3P04gGedB4LRFIs5IiFGY751-L7vpv5JD-dZkn9THrmRcWNwXBszxMQI84YEUPBFDSv1sGJ2O4EAvp9pkzs9dDgX0-DC4D9ShkG_5Dg__ORHQRAaHVf3YcrRIlC41iQ8fUdtbNVcTlRejEhU-PNXFeR6TaSyHx60" class="w-full h-full object-cover">
                            </div>
                            @endforeach
                        </div>
                        <p class="text-[10px] font-black uppercase tracking-[0.2em] opacity-70">78 Active Agents</p>
                    </div>
                </div>
            </div>
            <!-- Topography decoration -->
            <div class="absolute inset-0 opacity-10 pointer-events-none">
                <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(circle_at_70%_30%,_rgba(255,255,255,0.2),_transparent)]"></div>
            </div>
        </div>
    </section>
</main>
@endsection
