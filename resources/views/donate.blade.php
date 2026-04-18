@extends('layouts.app')

@section('title', 'Donor Dashboard')

@section('content')
<main class="pt-24 lg:pt-32 pb-32 px-4 md:px-6 max-w-7xl mx-auto space-y-16 lg:space-y-24">
    <!-- Premium Header: Personal Impact -->
    <section class="relative">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            <div class="lg:col-span-8 space-y-6 lg:space-y-8 text-center lg:text-left">
                <div class="inline-flex items-center gap-3 px-4 py-1.5 bg-primary-fixed/30 rounded-full border border-primary/10 transition-all hover:bg-primary-fixed/50 group cursor-default">
                    <span class="w-2 h-2 rounded-full bg-primary animate-ping"></span>
                    <span class="text-[9px] font-black uppercase tracking-[0.2em] text-primary">Live Network Active</span>
                </div>
                <h1 class="text-4xl md:text-6xl lg:text-8xl font-headline font-black text-primary leading-[1] tracking-tighter">
                    Abundance <br/><span class="text-secondary italic font-light">flows through you.</span>
                </h1>
                <p class="text-lg md:text-xl text-on-surface-variant max-w-xl mx-auto lg:mx-0 leading-relaxed font-medium opacity-80">
                    Welcome back, {{ Auth::user()->name }}. Your contributions fuel Nairobi's heart. Every listing below is a promise of community resilience.
                </p>
                
                <!-- Impact Mini-Stats -->
                <div class="flex flex-wrap justify-center lg:justify-start gap-8 md:gap-12 pt-4">
                    <div class="space-y-1">
                        <p class="text-[9px] font-black uppercase tracking-[0.2em] text-on-surface-variant opacity-60">My Total Impact</p>
                        <div class="flex items-baseline gap-2">
                            <span class="text-3xl md:text-4xl font-headline font-black text-primary">124</span>
                            <span class="text-xs font-bold text-on-surface-variant">kg shared</span>
                        </div>
                    </div>
                    <div class="hidden sm:block w-px h-12 bg-outline-variant/20"></div>
                    <div class="space-y-1">
                        <p class="text-[9px] font-black uppercase tracking-[0.2em] text-on-surface-variant opacity-60">Nairobi Rank</p>
                        <div class="flex items-baseline gap-2">
                            <span class="text-3xl md:text-4xl font-headline font-black text-secondary">#12</span>
                            <span class="text-xs font-bold text-on-surface-variant">Top Giver</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-4 relative group px-6 lg:px-0">
                <div class="relative rounded-[3rem] lg:rounded-[3.5rem] overflow-hidden aspect-[4/5] shadow-2xl transition-all duration-700 group-hover:scale-[1.02] lg:group-hover:-rotate-2 ring-1 ring-primary/5">
                    <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCA0A9ELmvTU53Hs8uvce7H5ysdgzR3hRoxMA1WW6tz3psRwOK2XLaBAzKlUlFMujNQU7Drx4AOhJwOGokEBSUzN4-r7v5u4GarKsyyprvlS6Qs7zO5wm0UqGt239NrW82NQiEGvmPAD5_4m1LOsJTEnYdEh0IWhwYEZtC0ybBtVfO9usFiIP2GX2PfnOQZ-ZJYmNOwdy3sPqB_9alMfOSQzJUIv1_944xUjRo2oBJDDuZcqNw2Pn2YDQ-CjU9XcTqdFxCby-OgAy8"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/40 to-transparent"></div>
                </div>
                <!-- Float Badge -->
                <div class="absolute -bottom-6 lg:-bottom-10 -right-2 lg:-right-12 bg-white p-6 md:p-8 rounded-[2rem] lg:rounded-[2.5rem] shadow-2xl border border-outline-variant/10 backdrop-blur-xl animate-float max-w-[160px] md:max-w-none">
                    <span class="material-symbols-outlined text-3xl md:text-4xl text-secondary mb-2 md:mb-3 transition-transform group-hover:rotate-12">park</span>
                    <p class="text-[9px] font-black uppercase tracking-widest text-on-surface-variant mb-1">CO₂ Offset</p>
                    <p class="text-2xl md:text-3xl font-headline font-black text-primary">2.4 Tons</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Donation Listing Station -->
    <section class="grid grid-cols-1 xl:grid-cols-12 gap-8 lg:gap-10">
        <!-- Main Form Hub -->
        <div class="xl:col-span-8 bg-surface-container-low rounded-[3rem] md:rounded-[4rem] p-8 md:p-12 lg:p-16 border border-outline-variant/10 shadow-inner">
            <div class="flex flex-col sm:flex-row justify-between items-start gap-8 mb-12 lg:mb-16">
                <div>
                    <h2 class="text-3xl md:text-4xl font-headline font-black text-primary tracking-tight mb-2">Listing Station</h2>
                    <p class="text-on-surface-variant font-medium opacity-70">Add to the cycle. Precision ensures dignity.</p>
                </div>
                <div class="flex gap-2 self-end sm:self-auto">
                    <button class="w-12 h-12 md:w-14 md:h-14 bg-white rounded-xl md:rounded-2xl flex items-center justify-center text-primary shadow-sm hover:shadow-xl transition-all border border-outline-variant/10">
                        <span class="material-symbols-outlined">restaurant</span>
                    </button>
                    <button class="w-12 h-12 md:w-14 md:h-14 bg-primary text-on-primary rounded-xl md:rounded-2xl flex items-center justify-center shadow-lg transition-all">
                        <span class="material-symbols-outlined">checkroom</span>
                    </button>
                </div>
            </div>

            <form class="space-y-8 md:space-y-12">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 text-left">
                    <div class="space-y-8">
                        <div class="space-y-3">
                            <label class="text-[9px] font-black uppercase tracking-widest text-on-surface-variant ml-4 opacity-60">Item Identity</label>
                            <input class="w-full bg-white border-0 rounded-2xl md:rounded-3xl px-6 py-5 md:px-8 md:py-6 font-bold text-primary focus:ring-4 focus:ring-primary/10 transition-all shadow-sm outline-none placeholder:text-outline/30 text-sm md:text-base" placeholder="e.g. Traditional Maasai Shuka"/>
                        </div>
                        <div class="space-y-3">
                            <label class="text-[9px] font-black uppercase tracking-widest text-on-surface-variant ml-4 opacity-60">Condition / State</label>
                            <select class="w-full bg-white border-0 rounded-2xl md:rounded-3xl px-6 py-5 md:px-8 md:py-6 font-bold text-primary focus:ring-4 focus:ring-primary/10 transition-all shadow-sm outline-none appearance-none text-sm md:text-base">
                                <option>Gently Used (Grade A)</option>
                                <option>Like New</option>
                                <option>Upcycle Opportunity</option>
                            </select>
                        </div>
                    </div>
                    <div class="space-y-8">
                        <div class="space-y-3">
                            <label class="text-[9px] font-black uppercase tracking-widest text-on-surface-variant ml-4 opacity-60">Pickup Window</label>
                            <input type="datetime-local" class="w-full bg-white border-0 rounded-2xl md:rounded-3xl px-6 py-5 md:px-8 md:py-6 font-bold text-primary focus:ring-4 focus:ring-primary/10 transition-all shadow-sm outline-none text-sm md:text-base"/>
                        </div>
                        <div class="space-y-3">
                            <label class="text-[9px] font-black uppercase tracking-widest text-on-surface-variant ml-4 opacity-60">Location Node</label>
                            <div class="relative">
                                <input class="w-full bg-white border-0 rounded-2xl md:rounded-3xl px-6 py-5 md:px-14 lg:px-8 md:py-6 pl-14 md:pl-16 font-bold text-primary focus:ring-4 focus:ring-primary/10 transition-all shadow-sm outline-none text-sm md:text-base" value="Westlands Collection Point"/>
                                <span class="material-symbols-outlined absolute left-6 top-1/2 -translate-y-1/2 text-primary opacity-40">location_on</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <button class="w-full signature-gradient text-white font-headline font-black py-6 md:py-8 rounded-[2rem] md:rounded-[2.5rem] flex items-center justify-center gap-4 text-lg md:text-xl shadow-2xl shadow-primary/20 hover:shadow-primary/40 active:scale-[0.98] transition-all">
                        Commit to Community
                        <span class="material-symbols-outlined font-black">arrow_right_alt</span>
                    </button>
                    <p class="text-center text-[9px] font-black uppercase tracking-[0.3em] text-on-surface-variant mt-8 opacity-40 leading-relaxed px-4">By committing, you ensure goods are ready for vetted agents to deliver professionally.</p>
                </div>
            </form>
        </div>

        <!-- Sidebar Activity/Info -->
        <div class="xl:col-span-4 h-full">
            <div class="bg-secondary p-8 md:p-12 rounded-[2.5rem] md:rounded-[3.5rem] text-on-secondary relative overflow-hidden group shadow-2xl h-full flex flex-col justify-between">
                <div class="relative z-10 text-left">
                    <div class="w-14 h-14 md:w-16 md:h-16 bg-white/10 rounded-2xl md:rounded-[1.5rem] flex items-center justify-center mb-6 md:mb-8 border border-white/10 shadow-inner group-hover:rotate-6 transition-transform">
                        <span class="material-symbols-outlined text-3xl md:text-4xl">inventory</span>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-headline font-black tracking-tight mb-4 leading-tight">Professional <br/>Redistribution</h3>
                    <p class="text-on-secondary/70 font-medium leading-relaxed text-sm md:text-base">Our logistics partners observe strict hygiene and preservation protocols for every transfer.</p>
                </div>
                <div class="relative z-10 mt-10 md:mt-12 bg-white/5 p-6 rounded-2xl md:rounded-3xl border border-white/10 backdrop-blur-md">
                    <div class="flex items-center gap-4">
                        <div class="w-2 h-10 bg-white/20 rounded-full overflow-hidden">
                            <div class="w-full h-2/3 bg-white rounded-full transition-all duration-1000"></div>
                        </div>
                        <p class="text-[10px] font-black uppercase tracking-widest opacity-80 leading-tight">Hub Capacity: <span class="block text-lg font-black mt-1 text-white">68% Active</span></p>
                    </div>
                </div>
                <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-white/5 rounded-full blur-[80px] pointer-events-none"></div>
            </div>
        </div>
    </section>

    <!-- User's Personalized Deliveries -->
    <section class="space-y-10 lg:space-y-12 pb-12">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-6 px-4">
            <div class="text-left">
                <h2 class="text-3xl md:text-5xl font-headline font-black text-primary tracking-tighter">My Active Cycle</h2>
                <p class="text-on-surface-variant font-medium mt-2 text-sm md:text-base opacity-70">Showing your current contributions to the local flow.</p>
            </div>
            <a href="#" class="inline-flex items-center gap-4 text-[9px] font-black uppercase tracking-[0.2em] text-primary group">
                Cycle Archive
                <div class="w-10 h-10 md:w-12 md:h-12 bg-primary-fixed rounded-xl md:rounded-2xl flex items-center justify-center transition-all group-hover:rotate-12 group-hover:bg-primary group-hover:text-on-primary">
                    <span class="material-symbols-outlined text-sm md:text-base">history</span>
                </div>
            </a>
        </div>

        <div class="bg-surface-container-low/50 rounded-[2.5rem] md:rounded-[4rem] p-4 md:p-8 border border-outline-variant/10 shadow-inner">
            <div class="space-y-6">
                @forelse($donations as $donation)
                <div class="bg-white p-6 md:p-10 rounded-[2rem] md:rounded-[3rem] flex flex-col lg:flex-row lg:items-center justify-between gap-8 md:gap-10 hover:shadow-2xl transition-all duration-500 border border-outline-variant/5 shadow-sm text-left">
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-6 md:gap-10">
                        <div class="w-20 h-20 md:w-28 md:h-28 rounded-2xl md:rounded-[2rem] overflow-hidden flex-shrink-0 shadow-xl ring-8 ring-surface-container-low transition-transform duration-700 hover:scale-110">
                            <img class="w-full h-full object-cover" src="{{ $donation['img'] ?? 'https://lh3.googleusercontent.com/aida-public/AB6AXuCtkUguK-Oi-G-6rflZQt-YlKJZ0sz8H9WkVCmRlhbpuvacdGOBXX7UhEHzTQTxZvSbDF3MweP4JMnwUagBC6S1mSf7j2lTzB_QS-TPMkw4hdnbsDsntltnD6-y50Zhhb_e34qnS_UoiiXbrMKtOCwNFGj9MQ1-Eb0MDBqvBjvIi7B1CvPuwRR4-reA5GvFcaHkX_UPW5LV2udca689qI_JfnlA-p7btW4Iv4KGsXmnnSN4x6ar-yyUyzOis7zvWw0cRJ-vgftYiiM' }}"/>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-center gap-4">
                                <span class="px-3 py-1 rounded-full bg-primary/5 text-[9px] font-black text-primary uppercase tracking-widest border border-primary/10">In Flight</span>
                                <span class="text-[9px] font-black uppercase tracking-widest text-on-surface-variant opacity-40">{{ $donation['time'] ?? 'Just now' }}</span>
                            </div>
                            <h4 class="text-2xl md:text-3xl font-headline font-black text-primary tracking-tight leading-tight">{{ $donation['name'] }}</h4>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-secondary text-sm">hail</span>
                                <p class="text-[10px] md:text-sm font-bold text-on-surface-variant">Agent <span class="text-primary">{{ $donation['agent'] ?? 'En Route' }}</span> is handling pickup</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between lg:justify-end gap-8 border-t lg:border-t-0 border-outline-variant/10 pt-6 lg:pt-0">
                        <div class="text-left lg:text-right">
                            <p class="text-[9px] font-black uppercase tracking-widest text-on-surface-variant opacity-60 mb-1">ETA Arrival</p>
                            <p class="text-2xl md:text-3xl font-headline font-black text-primary">{{ $donation['eta'] ?? '16:00' }}</p>
                        </div>
                        <button class="w-16 h-16 md:w-20 md:h-20 bg-primary-fixed text-primary rounded-[1.5rem] md:rounded-[2rem] flex items-center justify-center hover:bg-primary hover:text-on-primary transition-all shadow-lg active:scale-95">
                            <span class="material-symbols-outlined text-2xl md:text-3xl">map</span>
                        </button>
                    </div>
                </div>
                @empty
                <!-- Professional Empty State -->
                <div class="py-20 lg:py-32 flex flex-col items-center text-center space-y-8 lg:space-y-10 group">
                    <div class="relative">
                        <div class="absolute inset-0 bg-primary/5 rounded-full blur-3xl group-hover:bg-primary/10 transition-colors"></div>
                        <div class="relative w-24 h-24 md:w-32 md:h-32 bg-white rounded-full flex items-center justify-center shadow-2xl border border-outline-variant/10 text-outline/20">
                            <span class="material-symbols-outlined text-5xl md:text-6xl group-hover:rotate-12 transition-transform duration-500">eco</span>
                        </div>
                    </div>
                    <div class="space-y-3 px-6 max-w-sm mx-auto">
                        <h3 class="text-2xl md:text-3xl font-headline font-black text-primary tracking-tight">Your cycle is clear.</h3>
                        <p class="text-sm md:text-base text-on-surface-variant font-medium leading-relaxed opacity-70">Nairobi is ready for your next contribution. Start the rhythm by listing surplus above.</p>
                    </div>
                    <div>
                        <button class="px-8 py-4 md:px-10 md:py-5 bg-primary/10 text-primary rounded-2xl font-black text-[10px] md:text-xs uppercase tracking-[0.3em] border border-primary/5 hover:bg-primary hover:text-on-primary transition-all shadow-sm">Initiate First Listing</button>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>
</main>

<style>
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
</style>
@endsection
