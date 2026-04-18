<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Join the Collective | EcoShare Nairobi</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
                "primary": "#204e2b",
                "primary-fixed": "#bcefc0",
                "on-surface": "#1a1c19",
                "on-surface-variant": "#414941",
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
</head>
<body class="bg-surface text-on-surface font-body overflow-x-hidden" x-data="{ role: '{{ request('role', 'individual') }}' }">
    <div class="min-h-screen flex flex-col lg:flex-row">
        <!-- Brand Side: Narrative -->
        <div class="lg:w-1/2 bg-primary relative overflow-hidden flex flex-col justify-center p-12 lg:p-24 text-white">
            <div class="relative z-10 space-y-8">
                <a href="{{ url('/') }}" class="inline-flex items-center gap-2 group">
                    <span class="material-symbols-outlined text-primary-fixed group-hover:rotate-12 transition-transform">eco</span>
                    <span class="text-xl font-headline font-black tracking-tighter">EcoShare</span>
                </a>
                <h1 class="text-5xl lg:text-7xl font-headline font-black leading-[0.9] tracking-tighter">
                    Abundance <br/><span class="text-primary-fixed italic font-light">meets urgency.</span>
                </h1>
                <p class="text-xl text-primary-fixed/70 max-w-md font-medium leading-relaxed">
                    Join Nairobi's first verified community circular network. Whether you're sharing surplus or volunteering time, your node matters.
                </p>
                
                <div class="pt-8 grid grid-cols-2 gap-8">
                    <div>
                        <p class="text-[10px] font-black uppercase tracking-[0.2em] opacity-40 mb-2">Network Health</p>
                        <p class="text-2xl font-headline font-black">2.4k Nodes</p>
                    </div>
                    <div>
                        <p class="text-[10px] font-black uppercase tracking-[0.2em] opacity-40 mb-2">Active Flow</p>
                        <p class="text-2xl font-headline font-black">15 Tons/mo</p>
                    </div>
                </div>
            </div>
            
            <!-- Abstract background -->
            <div class="absolute inset-0 opacity-20 pointer-events-none">
                <div class="absolute -bottom-20 -right-20 w-96 h-96 bg-primary-fixed rounded-full blur-[120px]"></div>
                <div class="absolute top-0 left-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/asfalt-light.png')]"></div>
            </div>
        </div>

        <!-- Form Side -->
        <div class="lg:w-1/2 flex items-center justify-center p-6 md:p-12 lg:p-24 bg-white">
            <div class="w-full max-w-md space-y-10">
                <div class="space-y-2">
                    <h2 class="text-3xl font-headline font-black text-primary tracking-tight">Initiate Participation</h2>
                    <p class="text-on-surface-variant font-medium">Create your profile to start synchronization.</p>
                </div>

                <form method="POST" action="{{ route('register') }}" class="space-y-6">
                    @csrf
                    
                    <!-- Identity Mode -->
                    <div class="space-y-3">
                        <label class="text-[10px] font-black uppercase tracking-widest text-on-surface-variant opacity-60 ml-4">Account Type</label>
                        <div class="flex bg-surface p-1.5 rounded-2xl border border-outline-variant/10">
                            <button type="button" 
                                @click="role = 'individual'"
                                :class="role === 'individual' ? 'bg-primary text-white shadow-lg' : 'text-primary/40'"
                                class="flex-1 py-3 rounded-xl font-black text-[10px] uppercase tracking-widest transition-all duration-300">
                                Individual
                            </button>
                            <button type="button" 
                                @click="role = 'organization'"
                                :class="role === 'organization' ? 'bg-secondary text-white shadow-lg' : 'text-primary/40'"
                                class="flex-1 py-3 rounded-xl font-black text-[10px] uppercase tracking-widest transition-all duration-300">
                                Organization
                            </button>
                        </div>
                        <input type="hidden" name="role" :value="role">
                    </div>

                    <div class="space-y-4">
                        <!-- Business Name (Dynamic) -->
                        <div x-show="role === 'organization'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-2" class="space-y-2">
                            <label for="organization_name" class="text-[10px] font-black uppercase tracking-widest text-secondary ml-4">Organization / Hub Name</label>
                            <input id="organization_name" name="organization_name" placeholder="e.g. Westlands Fresh Hub" value="{{ old('organization_name') }}" class="w-full bg-surface border-0 rounded-2xl px-6 py-4 font-bold text-primary focus:ring-4 focus:ring-secondary/10 transition-all outline-none" type="text"/>
                            @error('organization_name') <p class="text-[10px] text-red-500 font-bold ml-4 mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="name" class="text-[10px] font-black uppercase tracking-widest text-on-surface-variant opacity-60 ml-4">Contact Person Name</label>
                            <input id="name" name="name" required placeholder="Full Name" value="{{ old('name') }}" class="w-full bg-surface border-0 rounded-2xl px-6 py-4 font-bold text-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none" type="text"/>
                            @error('name') <p class="text-[10px] text-red-500 font-bold ml-4 mt-1">{{ $message }}</p> @enderror
                        </div>
                        
                        <div class="space-y-2">
                            <label for="email" class="text-[10px] font-black uppercase tracking-widest text-on-surface-variant opacity-60 ml-4">Email Protocol</label>
                            <input id="email" name="email" required placeholder="email@ecoshare.co.ke" value="{{ old('email') }}" class="w-full bg-surface border-0 rounded-2xl px-6 py-4 font-bold text-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none" type="email"/>
                            @error('email') <p class="text-[10px] text-red-500 font-bold ml-4 mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="phone" class="text-[10px] font-black uppercase tracking-widest text-on-surface-variant opacity-60 ml-4">Communication Line</label>
                            <input id="phone" name="phone" required placeholder="+254..." value="{{ old('phone') }}" class="w-full bg-surface border-0 rounded-2xl px-6 py-4 font-bold text-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none" type="tel"/>
                            @error('phone') <p class="text-[10px] text-red-500 font-bold ml-4 mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label for="password" class="text-[10px] font-black uppercase tracking-widest text-on-surface-variant opacity-60 ml-4">Security Key</label>
                                <input id="password" name="password" required class="w-full bg-surface border-0 rounded-2xl px-6 py-4 font-bold text-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none" type="password"/>
                            </div>
                            <div class="space-y-2">
                                <label for="password_confirmation" class="text-[10px] font-black uppercase tracking-widest text-on-surface-variant opacity-60 ml-4">Confirm Key</label>
                                <input id="password_confirmation" name="password_confirmation" required class="w-full bg-surface border-0 rounded-2xl px-6 py-4 font-bold text-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none" type="password"/>
                            </div>
                        </div>
                        @error('password') <p class="text-[10px] text-red-500 font-bold ml-4 mt-1">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit" class="w-full bg-primary text-white font-headline font-black py-5 rounded-[1.5rem] shadow-xl shadow-primary/20 hover:shadow-primary/40 active:scale-95 transition-all text-xs uppercase tracking-[0.2em]">
                        Join the Rhythm
                    </button>

                    <p class="text-center text-sm font-medium text-on-surface-variant">
                        Already synced? <a href="{{ route('login') }}" class="text-primary font-black hover:underline">Secure Login</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
