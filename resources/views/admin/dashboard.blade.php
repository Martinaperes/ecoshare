@extends('layouts.admin')

@section('title', 'System Analytics')

@section('content')
<main class="md:ml-72 pt-28 pb-12 px-6 lg:px-12 min-h-screen">
    <!-- Summary Section: Bento Grid -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
        <!-- Card 1: Active Collections -->
        <div class="bg-white p-10 rounded-[2.5rem] flex flex-col justify-between h-56 group hover:bg-primary transition-all duration-500 shadow-sm hover:shadow-2xl hover:-translate-y-1 border border-outline-variant/10">
            <div class="flex justify-between items-start">
                <div class="p-3 bg-primary/5 rounded-2xl group-hover:bg-white/10 transition-colors shadow-inner">
                    <span class="material-symbols-outlined text-primary text-3xl group-hover:text-on-primary transition-colors" data-icon="cycle">cycle</span>
                </div>
                <span class="bg-primary-container text-on-primary-container text-[10px] px-3 py-1 rounded-full font-black uppercase tracking-widest shadow-lg group-hover:bg-white group-hover:text-primary transition-all">Live Status</span>
            </div>
            <div>
                <h3 class="text-6xl font-headline font-black text-on-surface group-hover:text-on-primary transition-colors tracking-tighter">42</h3>
                <p class="text-[10px] text-tertiary-container font-black group-hover:text-on-primary/70 transition-colors uppercase tracking-[0.2em] mt-2">Active Collections</p>
            </div>
        </div>
        <!-- Card 2: Total Partners -->
        <div class="bg-white p-10 rounded-[2.5rem] flex flex-col justify-between h-56 group hover:bg-secondary transition-all duration-500 shadow-sm hover:shadow-2xl hover:-translate-y-1 border border-outline-variant/10">
            <div class="flex justify-between items-start">
                <div class="p-3 bg-secondary/5 rounded-2xl group-hover:bg-white/10 transition-colors shadow-inner">
                    <span class="material-symbols-outlined text-secondary text-3xl group-hover:text-on-secondary transition-colors" data-icon="handshake">handshake</span>
                </div>
                <span class="bg-secondary-container text-on-secondary-container text-[10px] px-3 py-1 rounded-full font-black uppercase tracking-widest shadow-lg group-hover:bg-white group-hover:text-secondary transition-all">+12.4%</span>
            </div>
            <div>
                <h3 class="text-6xl font-headline font-black text-on-surface group-hover:text-on-secondary transition-colors tracking-tighter">158</h3>
                <p class="text-[10px] text-tertiary-container font-black group-hover:text-on-secondary/70 transition-colors uppercase tracking-[0.2em] mt-2">Total Partners</p>
            </div>
        </div>
        <!-- Card 3: Daily Impact -->
        <div class="bg-white p-10 rounded-[2.5rem] flex flex-col justify-between h-56 group hover:bg-tertiary transition-all duration-500 shadow-sm hover:shadow-2xl hover:-translate-y-1 border border-outline-variant/10">
            <div class="flex justify-between items-start">
                <div class="p-3 bg-tertiary/5 rounded-2xl group-hover:bg-white/10 transition-colors shadow-inner">
                    <span class="material-symbols-outlined text-tertiary text-3xl group-hover:text-on-tertiary transition-colors" data-icon="eco">eco</span>
                </div>
                <div class="flex gap-1.5 items-end">
                    @foreach([1, 0.6, 0.3] as $op)
                    <div class="w-1.5 h-6 bg-tertiary-fixed group-hover:bg-white rounded-full" style="opacity: {{ $op }}"></div>
                    @endforeach
                </div>
            </div>
            <div>
                <h3 class="text-6xl font-headline font-black text-on-surface group-hover:text-on-tertiary transition-colors tracking-tighter">1,240</h3>
                <p class="text-[10px] text-tertiary-container font-black group-hover:text-on-tertiary/70 transition-colors uppercase tracking-[0.2em] mt-2">Daily Impact (kg)</p>
            </div>
        </div>
    </section>

    <!-- Middle Section: Pending Approvals -->
    <section class="mb-16">
        <div class="flex items-center justify-between mb-10 px-4">
            <div>
                <h2 class="text-4xl font-headline font-black text-primary tracking-tight">Pending Approvals</h2>
                <p class="text-on-surface-variant font-medium mt-1">Action required for new community nodes in Nairobi</p>
            </div>
            <button class="text-primary font-black text-[10px] uppercase tracking-widest h-12 px-6 border border-outline-variant rounded-full hover:bg-primary-container/10 transition-all">View All Nodes</button>
        </div>
        <div class="bg-surface-container-low/50 rounded-[3rem] p-6 shadow-inner border border-outline-variant/10">
            <div class="space-y-4">
                <!-- Approval Item 1 -->
                <div class="p-8 bg-white rounded-[2.5rem] flex flex-col lg:flex-row lg:items-center justify-between gap-8 hover:shadow-xl transition-all border border-outline-variant/5">
                    <div class="flex items-center gap-6">
                        <div class="w-20 h-20 rounded-2xl bg-surface-container-highest flex-shrink-0 overflow-hidden shadow-lg ring-4 ring-primary-container/5">
                            <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5_IKGUMcgrfdQvNaPdlfQacKw6XLNrW3jpF5KwneSHnIgcnQaNj-esjNKF6cE-OQpoNFECFq5zc6qOLsEQyXlyAWx3G0cDCSSH0JjIPMn9JsO-qshbOdTZW9t2RFmUG-avFPPUJBoABeGMjs8wVUYckhNAJ12sSK8-z4CJRkSDqEEd57LslVLp2zOi70-RqBtlHyHooU1m8QBNmsCc0awEz4vQRh9lzcK9VpJl0BTCiw4-kf6jHBvVRX8VTI_U7VmI8gek81m-ko"/>
                        </div>
                        <div>
                            <h4 class="font-black text-2xl text-primary tracking-tight">The Java House, Westlands</h4>
                            <div class="flex items-center gap-4 mt-2">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[18px] text-secondary" style="font-variation-settings: 'FILL' 1;">restaurant</span>
                                    <p class="text-[10px] text-secondary font-black uppercase tracking-[0.1em]">Restaurant Partner</p>
                                </div>
                                <span class="w-1.5 h-1.5 rounded-full bg-outline-variant"></span>
                                <p class="text-xs text-on-surface-variant font-medium">Applied 2h ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <button class="px-8 py-4 rounded-2xl border-2 border-outline-variant/30 text-primary font-black text-xs uppercase tracking-widest hover:bg-primary-container/10 transition-all active:scale-95">Review Docs</button>
                        <button class="px-8 py-4 rounded-2xl bg-primary text-on-primary font-black text-xs uppercase tracking-widest shadow-xl shadow-primary/10 hover:shadow-primary/30 transition-all active:scale-95">Verify Partner</button>
                    </div>
                </div>

                <!-- Approval Item 2 -->
                <div class="p-8 bg-white rounded-[2.5rem] flex flex-col lg:flex-row lg:items-center justify-between gap-8 hover:shadow-xl transition-all border border-outline-variant/5">
                    <div class="flex items-center gap-6">
                        <div class="w-20 h-20 rounded-2xl bg-surface-container-highest flex-shrink-0 overflow-hidden shadow-lg ring-4 ring-tertiary-container/5">
                            <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXwxfHjgTQMj94j3KNhK5v9DsUj456B8jP7jQoN1g_1K7yUS9trY9Eo-fvX4HWaGnyFbnCR6iywXAZ6l9ZM2ORR8URRnOSONOPUY0ZZJmNMO4Kost9FFLNVg_PlOy2BsfwH97dUDXdXE1AjdB3MrNcps1o154njnfjysJYkap2zYi2M_6wqFns-ahXNq-AJZvPjtRihYW7w-QZtWx-rIWYsHKkHqvNQD9kh3BgyzGNOtWNs4O8My7p4T9GXTfuG42S9XNMJIIlh0U"/>
                        </div>
                        <div>
                            <h4 class="font-black text-2xl text-primary tracking-tight">Kilimani Community Hub</h4>
                            <div class="flex items-center gap-4 mt-2">
                                <div class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[18px] text-tertiary" style="font-variation-settings: 'FILL' 1;">volunteer_activism</span>
                                    <p class="text-[10px] text-tertiary font-black uppercase tracking-[0.1em]">Donation Center</p>
                                </div>
                                <span class="w-1.5 h-1.5 rounded-full bg-outline-variant"></span>
                                <p class="text-xs text-on-surface-variant font-medium">Applied 5h ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <button class="px-8 py-4 rounded-2xl border-2 border-outline-variant/30 text-primary font-black text-xs uppercase tracking-widest hover:bg-primary-container/10 transition-all active:scale-95">Review Docs</button>
                        <button class="px-8 py-4 rounded-2xl bg-primary text-on-primary font-black text-xs uppercase tracking-widest shadow-xl shadow-primary/10 hover:shadow-primary/30 transition-all active:scale-95">Verify Partner</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lower Section: Live Logistics -->
    <section class="grid grid-cols-1 xl:grid-cols-3 gap-12 items-start">
        <!-- Map Visualization -->
        <div class="xl:col-span-2 relative h-[600px] rounded-[3.5rem] overflow-hidden bg-surface-container-high shadow-2xl shadow-primary/5 group border border-outline-variant/20">
            <div class="absolute inset-0 grayscale contrast-[1.1] opacity-60">
                <img class="w-full h-full object-cover transition-transform duration-[10000ms] group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjMbVqmZxflxySfGktDe42CHcEx7mICQlpG627vszLvQt1-8UHEKUanZz3u_kd9WWwo7Zw3c-XSkpV1NGy0wzh8ch_UlL87dHmBvbMDVZg_qiQF3NBynRh9s12v-wqQKhynYXt6lj3KwqvawDed9KY8HDq47ukFUiUoFiHwcZlnnBGU6k4XgbrQM3GG5gyyvSNK1BUYPElr7x97DMzdMxB41ufZS3OwVDhvuGs74_4yhXzc_X905KJL3PsxyC9BWpemtlY0xBK6oQ"/>
            </div>
            <!-- Mock Map Points -->
            <div class="absolute top-[28%] left-[35%] group/point cursor-pointer z-10">
                <div class="relative">
                    <div class="absolute -inset-4 bg-primary/20 rounded-full animate-ping"></div>
                    <div class="w-6 h-6 bg-primary ring-4 ring-on-primary rounded-full relative z-10 shadow-2xl"></div>
                    <div class="absolute top-10 left-1/2 -translate-x-1/2 bg-white/90 backdrop-blur-md px-5 py-3 rounded-2xl shadow-2xl border border-primary/10 whitespace-nowrap opacity-0 group-hover/point:opacity-100 transition-all scale-90 group-hover/point:scale-100">
                        <p class="text-[10px] font-black text-primary uppercase tracking-widest">Van #402 — Westlands</p>
                        <p class="text-xs font-bold text-on-surface mt-0.5">85% Capacity</p>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-[35%] right-[28%] group/point cursor-pointer z-10">
                <div class="relative">
                    <div class="absolute -inset-4 bg-secondary/20 rounded-full animate-ping"></div>
                    <div class="w-6 h-6 bg-secondary ring-4 ring-on-secondary rounded-full relative z-10 shadow-2xl"></div>
                    <div class="absolute top-10 left-1/2 -translate-x-1/2 bg-white/90 backdrop-blur-md px-5 py-3 rounded-2xl shadow-2xl border border-secondary/10 whitespace-nowrap opacity-0 group-hover/point:opacity-100 transition-all scale-90 group-hover/point:scale-100">
                        <p class="text-[10px] font-black text-secondary uppercase tracking-widest">Carrier #12 — CBD</p>
                        <p class="text-xs font-bold text-on-surface mt-0.5">Dispatched @ 10:20</p>
                    </div>
                </div>
            </div>
            <!-- Overlay Controls -->
            <div class="absolute top-10 right-10 flex flex-col gap-3">
                <button class="w-14 h-14 bg-white/80 backdrop-blur-md rounded-2xl shadow-xl flex items-center justify-center text-primary hover:bg-white active:scale-95 transition-all border border-white/40">
                    <span class="material-symbols-outlined font-black">add</span>
                </button>
                <button class="w-14 h-14 bg-white/80 backdrop-blur-md rounded-2xl shadow-xl flex items-center justify-center text-primary hover:bg-white active:scale-95 transition-all border border-white/40">
                    <span class="material-symbols-outlined font-black">remove</span>
                </button>
            </div>
            <div class="absolute bottom-10 left-10 right-10">
                <div class="glass-panel px-10 py-6 rounded-3xl flex items-center justify-between border border-white/40 shadow-2xl">
                    <div class="flex items-center gap-5">
                        <div class="w-3 h-3 rounded-full bg-primary animate-pulse"></div>
                        <div>
                            <h3 class="font-black text-primary text-xl tracking-tight">Live Logistics Engine</h3>
                            <p class="text-[10px] font-black text-tertiary-container uppercase tracking-widest opacity-60">8 Drivers Active across 3 Zones</p>
                        </div>
                    </div>
                    <button class="p-4 bg-primary text-on-primary rounded-2xl shadow-lg active:scale-95 transition-all">
                        <span class="material-symbols-outlined">fullscreen</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Logistics List -->
        <div class="bg-surface-container p-10 rounded-[3rem] flex flex-col h-[600px] border border-outline-variant/10 shadow-inner">
            <h3 class="font-black text-primary text-2xl mb-8 flex items-center gap-4">
                <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">delivery_dining</span>
                </div>
                Active Units
            </h3>
            <div class="space-y-10 flex-grow overflow-y-auto pr-4 scrollbar-hide">
                <!-- Delivery Item 1 -->
                <div class="relative pl-10 border-l-4 border-primary/30">
                    <div class="absolute -left-[14px] top-0 w-6 h-6 bg-primary rounded-full border-4 border-surface shadow-lg"></div>
                    <p class="text-[10px] font-black text-primary uppercase tracking-[0.2em] mb-2">In Progress</p>
                    <h4 class="font-black text-xl text-on-surface tracking-tight">Westlands Cluster</h4>
                    <p class="text-sm text-on-surface-variant leading-relaxed mt-2">Collecting from 4 restaurants. En route to Kibera Education Centre.</p>
                    <div class="mt-4 flex items-center gap-4">
                        <div class="flex-1 h-2 bg-white rounded-full overflow-hidden shadow-inner">
                            <div class="h-full bg-primary rounded-full transition-all duration-1000" style="width: 65%;"></div>
                        </div>
                        <span class="text-xs font-black text-primary">65%</span>
                    </div>
                </div>
                <!-- Delivery Item 2 -->
                <div class="relative pl-10 border-l-4 border-secondary/30">
                    <div class="absolute -left-[14px] top-0 w-6 h-6 bg-secondary rounded-full border-4 border-surface shadow-lg"></div>
                    <p class="text-[10px] font-black text-secondary uppercase tracking-[0.2em] mb-2">New Dispatch</p>
                    <h4 class="font-black text-xl text-on-surface tracking-tight">CBD Grid</h4>
                    <p class="text-sm text-on-surface-variant leading-relaxed mt-2">Carrier dispatched to Hilton Nairobi for bakery surplus collection.</p>
                    <div class="mt-4 flex items-center gap-4">
                        <div class="flex-1 h-2 bg-white rounded-full overflow-hidden shadow-inner">
                            <div class="h-full bg-secondary rounded-full transition-all duration-1000" style="width: 20%;"></div>
                        </div>
                        <span class="text-xs font-black text-secondary">20%</span>
                    </div>
                </div>
                <!-- Delivery Item 3 -->
                <div class="relative pl-10 border-l-4 border-tertiary/30">
                    <div class="absolute -left-[14px] top-0 w-6 h-6 bg-tertiary rounded-full border-4 border-surface shadow-lg"></div>
                    <p class="text-[10px] font-black text-tertiary uppercase tracking-[0.2em] mb-2">Finalizing</p>
                    <h4 class="font-black text-xl text-on-surface tracking-tight">Kilimani Route</h4>
                    <p class="text-sm text-on-surface-variant leading-relaxed mt-2">Distribution complete at 3 centers. Return to hub initiated.</p>
                    <div class="mt-4 flex items-center gap-4">
                        <div class="flex-1 h-2 bg-white rounded-full overflow-hidden shadow-inner">
                            <div class="h-full bg-tertiary rounded-full transition-all duration-1000" style="width: 100%;"></div>
                        </div>
                        <span class="text-xs font-black text-tertiary">100%</span>
                    </div>
                </div>
            </div>
            <button class="mt-10 w-full py-6 bg-primary text-on-primary font-black uppercase tracking-widest text-xs rounded-2xl flex items-center justify-center gap-4 shadow-xl shadow-primary/20 hover:shadow-primary/40 active:scale-[0.98] transition-all">
                <span class="material-symbols-outlined">add_circle</span>
                Dispatch New Unit
            </button>
        </div>
    </section>
</main>
@endsection
