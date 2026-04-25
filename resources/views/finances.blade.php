<x-app-layout>
    <x-slot name="title">Finances - AdminOS</x-slot>

    <!-- Header Section -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h2 class="font-display text-[24px] font-black tracking-tight text-on-surface transition-colors duration-300">Financial Insights</h2>
            <p class="text-[14px] text-secondary mt-1">Monitor revenue, expenses, and transaction health in real-time.</p>
        </div>
        <div class="flex gap-2">
            <button class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-slate-900 border border-outline-variant text-on-surface font-bold text-[12px] rounded-xl hover:bg-surface-container-low transition-colors shadow-sm uppercase tracking-wider">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                Statement
            </button>
            <button class="flex items-center gap-2 px-4 py-2 bg-emerald-600 text-white font-bold text-[12px] rounded-xl hover:opacity-90 transition-opacity shadow-lg shadow-emerald-500/20 uppercase tracking-wider">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                New Entry
            </button>
        </div>
    </div>

    <!-- Financial KPI Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="md:col-span-2 bg-surface-container-lowest p-8 rounded-3xl border border-outline-variant shadow-sm relative overflow-hidden group">
            <div class="flex items-start justify-between relative z-10">
                <div>
                    <h4 class="text-secondary/60 text-[11px] font-black uppercase tracking-widest mb-2">Total Revenue</h4>
                    <div class="text-on-surface text-4xl font-black tracking-tighter mb-4">$124,592.50</div>
                    <div class="flex items-center gap-2">
                        <span class="flex items-center gap-1 text-[12px] font-black text-emerald-500 bg-emerald-500/10 px-2 py-0.5 rounded-full">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            24.5%
                        </span>
                        <span class="text-[12px] text-secondary/40 font-bold">vs last month</span>
                    </div>
                </div>
                <div class="w-16 h-16 rounded-2xl bg-emerald-500/10 flex items-center justify-center text-emerald-600">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75m0 3v.75m0 3v.75m0 3v.75m0 3v.75m0 3V18m15 0v.75m0-3.75v.75m0-3v.75m0-3v.75m0-3v.75m0-3V4.5m-15 0h15" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
            </div>
            <!-- Decorative Chart Shape -->
            <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-emerald-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
        </div>

        <div class="bg-surface-container-lowest p-8 rounded-3xl border border-outline-variant shadow-sm transition-all hover:border-error/20">
            <h4 class="text-secondary/60 text-[11px] font-black uppercase tracking-widest mb-2">Operational Costs</h4>
            <div class="text-on-surface text-3xl font-black tracking-tighter mb-4">$32,140.00</div>
            <div class="text-[12px] text-secondary/40 font-bold mb-4">65% of budget allocated</div>
            <div class="w-full h-2 bg-surface-container-low rounded-full overflow-hidden">
                <div class="w-[65%] h-full bg-error rounded-full"></div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
        <!-- Transaction List -->
        <div class="md:col-span-8 bg-surface-container-lowest rounded-3xl border border-outline-variant shadow-sm overflow-hidden flex flex-col transition-all duration-300">
            <div class="p-6 border-b border-outline-variant flex items-center justify-between">
                <h3 class="font-black text-[16px] text-on-surface uppercase tracking-tight">Recent Transactions</h3>
                <button class="text-[11px] font-black text-primary uppercase tracking-widest hover:underline">View History</button>
            </div>
            <div class="divide-y divide-outline-variant/10">
                @foreach([
                    ['desc' => 'AWS Cloud Infrastructure', 'category' => 'Infrastructure', 'date' => 'Oct 24, 2023', 'amount' => '-$1,240.00', 'status' => 'Completed'],
                    ['desc' => 'Apple Enterprise Purchase', 'category' => 'Hardware', 'date' => 'Oct 22, 2023', 'amount' => '-$5,800.00', 'status' => 'Pending'],
                    ['desc' => 'Stripe Payout - Sales', 'category' => 'Income', 'date' => 'Oct 20, 2023', 'amount' => '+$12,450.00', 'status' => 'Completed'],
                    ['desc' => 'Vercel Pro Subscription', 'category' => 'Software', 'date' => 'Oct 18, 2023', 'amount' => '-$40.00', 'status' => 'Completed']
                ] as $tx)
                <div class="p-4 flex items-center justify-between hover:bg-surface-container-low transition-colors group">
                    <div class="flex items-center gap-4">
                        <div class="p-3 bg-surface-container-high text-secondary rounded-2xl group-hover:bg-primary/10 group-hover:text-primary transition-all">
                            @if(str_contains($tx['amount'], '+'))
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            @else
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 19.5v-15m0 0l6.75 6.75M12 4.5L5.25 11.25" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            @endif
                        </div>
                        <div>
                            <div class="text-[14px] font-black text-on-surface">{{ $tx['desc'] }}</div>
                            <div class="text-[11px] text-secondary/50 font-bold uppercase tracking-wider">{{ $tx['category'] }} • {{ $tx['date'] }}</div>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="text-[14px] font-black {{ str_contains($tx['amount'], '+') ? 'text-emerald-500' : 'text-on-surface' }}">{{ $tx['amount'] }}</div>
                        <div class="text-[10px] font-bold uppercase tracking-widest text-secondary/40">{{ $tx['status'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Wallet/Method Section -->
        <div class="md:col-span-4 space-y-6">
            <div class="bg-primary p-6 rounded-3xl shadow-xl shadow-primary/30 text-on-primary relative overflow-hidden group">
                <div class="relative z-10">
                    <h4 class="text-[10px] font-black uppercase tracking-widest opacity-60 mb-8">Main Balance</h4>
                    <div class="text-[13px] font-bold mb-1">Total Available Funds</div>
                    <div class="text-3xl font-black tracking-tighter mb-8">$842,102.00</div>
                    <div class="flex items-center justify-between">
                        <div class="text-[12px] font-bold tracking-widest uppercase">AdminOS Platinum Card</div>
                        <svg class="w-10 h-8" fill="currentColor" viewBox="0 0 32 24" xmlns="http://www.w3.org/2000/svg"><circle cx="10" cy="12" fill="white" fill-opacity="0.5" r="8"/><circle cx="22" cy="12" fill="white" fill-opacity="0.5" r="8"/></svg>
                    </div>
                </div>
                <!-- Glassmorphism Effect -->
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full group-hover:scale-125 transition-transform duration-700"></div>
            </div>

            <div class="bg-surface-container-lowest p-6 rounded-3xl border border-outline-variant shadow-sm transition-all duration-300">
                <h4 class="text-secondary/60 text-[11px] font-black uppercase tracking-widest mb-6">Payment Analytics</h4>
                <div class="space-y-4">
                    @foreach([
                        ['label' => 'Direct Sales', 'pct' => '72%', 'color' => 'bg-emerald-500'],
                        ['label' => 'Subscribers', 'pct' => '18%', 'color' => 'bg-primary'],
                        ['label' => 'Other Revenue', 'pct' => '10%', 'color' => 'bg-amber-500']
                    ] as $item)
                    <div class="space-y-1.5">
                        <div class="flex items-center justify-between text-[11px] font-black uppercase tracking-wider">
                            <span class="text-secondary">{{ $item['label'] }}</span>
                            <span class="text-on-surface">{{ $item['pct'] }}</span>
                        </div>
                        <div class="w-full h-1.5 bg-surface-container-low rounded-full overflow-hidden">
                            <div class="h-full {{ $item['color'] }} transition-all duration-700" style="width: {{ $item['pct'] }}"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
