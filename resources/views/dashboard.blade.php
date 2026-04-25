<x-app-layout>
    <div class="mb-8">
        <h2 class="font-display text-[24px] font-black tracking-tight text-on-surface transition-colors duration-300">System Overview</h2>
        <p class="text-[14px] text-secondary">Real-time performance metrics and operational monitoring.</p>
    </div>

    <!-- KPI Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <x-stat-card 
            label="Revenue" 
            value="$24,592" 
            trend="12%" 
            comparison="vs. last month $21,957">
            <x-slot name="icon">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.501c-.758 0-1.317.562-1.317 1.318M3.75 4.5l16.5.001c.758 0 1.317.562 1.317 1.318M3.75 4.5v15a1.318 1.318 0 0 0 1.318 1.318M3.75 4.5l1.318 1.318m16.5-1.318A1.318 1.318 0 0 1 21 5.819v15a1.318 1.318 0 0 1-1.318 1.318M21 5.819l-1.318 1.318M3.75 18.75v-13.5m0 0l1.318 1.318m16.5 13.5v-13.5m0 0l-1.318 1.318m-13.5 1.318v-13.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </x-slot>
        </x-stat-card>
        
        <x-stat-card 
            label="Users" 
            value="1,842" 
            trend="4.3%" 
            iconBg="bg-orange-500/10" 
            iconColor="text-orange-600" 
            comparison="vs. last month 1,766">
            <x-slot name="icon">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </x-slot>
        </x-stat-card>
        
        <x-stat-card 
            label="Orders" 
            value="642" 
            trend="2.1%" 
            trendUp="false" 
            iconBg="bg-emerald-500/10" 
            iconColor="text-emerald-600" 
            comparison="vs. last month 656">
            <x-slot name="icon">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.617 2.899-6.996a.631.631 0 0 0-.593-.829H6.181m1.319 7.825L6.181 6.375M7.5 14.25l-1.319-7.875m1.319 7.825h11.218m-11.218 0a3 3 0 0 1-3 3m14.218-3a3 3 0 0 0 3 3" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </x-slot>
        </x-stat-card>
        
        <x-stat-card 
            label="Conversion" 
            value="3.4%" 
            trend="0.8%" 
            iconBg="bg-purple-500/10" 
            iconColor="text-purple-600" 
            comparison="vs. last month 2.6%">
            <x-slot name="icon">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M18 15.75l-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M3 10.5h2.25m.386-4.773 1.591-1.591" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </x-slot>
        </x-stat-card>
    </div>

    <!-- Main Grid Layout -->
    <div class="grid grid-cols-12 gap-6 pb-8">
        <!-- Revenue Chart Placeholder -->
        <div class="col-span-12 lg:col-span-8 bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm transition-all duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-[17px] font-black text-on-surface tracking-tight">Revenue Forecast</h3>
                    <p class="text-[12px] text-secondary/60">Projected growth vs actual performance</p>
                </div>
                <div class="flex gap-2 bg-surface-container-low p-1 rounded-lg">
                    <button class="px-4 py-1.5 text-[11px] font-bold border border-transparent rounded-md text-secondary hover:text-on-surface transition-colors">Daily</button>
                    <button class="px-4 py-1.5 text-[11px] font-bold bg-white dark:bg-slate-800 text-primary rounded-md shadow-sm border border-outline-variant/10">Monthly</button>
                </div>
            </div>
            <div class="h-64 w-full bg-surface-container-low/30 relative overflow-hidden rounded-xl border border-dashed border-outline-variant flex items-center justify-center">
                <div class="absolute inset-0 p-6 opacity-40 flex items-end justify-between gap-4">
                    @for ($i = 0; $i < 12; $i++)
                        <div class="flex-1 bg-primary/20 {{ $i % 3 == 0 ? 'h-3/4 bg-primary' : 'h-1/2' }} rounded-t-sm transition-all duration-700 hover:h-full"></div>
                    @endfor
                </div>
                <div class="z-10 bg-surface-container-lowest/80 backdrop-blur-sm px-4 py-2 rounded-lg border border-outline-variant/50">
                    <p class="text-[12px] text-on-surface font-black tracking-tight">[ Revenue Visualization Area ]</p>
                </div>
            </div>
        </div>

        <!-- Progress Widget -->
        <div class="col-span-12 lg:col-span-4 bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm flex flex-col justify-between transition-all duration-300">
            <div>
                <h3 class="text-[17px] font-black text-on-surface tracking-tight mb-1">Target Goals</h3>
                <p class="text-[12px] text-secondary/60 mb-8">Q3 Operational Objectives</p>
                <div class="space-y-6">
                    <div>
                        <div class="flex justify-between text-[11px] mb-2 font-bold uppercase tracking-wider text-secondary/70">
                            <span>Active Subscriptions</span>
                            <span class="text-on-surface">85%</span>
                        </div>
                        <div class="w-full h-2.5 bg-surface-container-low rounded-full overflow-hidden">
                            <div class="h-full bg-primary rounded-full transition-all duration-1000" style="width: 85%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-[11px] mb-2 font-bold uppercase tracking-wider text-secondary/70">
                            <span>Customer Retention</span>
                            <span class="text-on-surface">62%</span>
                        </div>
                        <div class="w-full h-2.5 bg-surface-container-low rounded-full overflow-hidden">
                            <div class="h-full bg-secondary rounded-full transition-all duration-1000" style="width: 62%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-[11px] mb-2 font-bold uppercase tracking-wider text-secondary/70">
                            <span>Server Uptime</span>
                            <span class="text-emerald-600">99.9%</span>
                        </div>
                        <div class="w-full h-2.5 bg-surface-container-low rounded-full overflow-hidden">
                            <div class="h-full bg-emerald-500 rounded-full transition-all duration-1000" style="width: 99.9%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 pt-6 border-t border-outline-variant/30">
                <button class="w-full flex items-center justify-center gap-2 py-3 text-[13px] font-bold text-primary border border-primary/20 bg-primary/5 hover:bg-primary/10 rounded-xl transition-all active:scale-[0.98]">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Generate Report
                </button>
            </div>
        </div>

        <!-- Recent Transactions -->
        <div class="col-span-12 lg:col-span-8 bg-surface-container-lowest rounded-2xl border border-outline-variant shadow-sm overflow-hidden transition-all duration-300">
            <div class="p-6 border-b border-outline-variant/30 flex justify-between items-center">
                <div>
                    <h3 class="text-[17px] font-black text-on-surface tracking-tight">Recent Transactions</h3>
                    <p class="text-[12px] text-secondary/60">Latest 5 ledger activities</p>
                </div>
                <button class="text-[11px] text-primary font-black uppercase tracking-widest hover:underline transition-all">View All</button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-surface-container-low/50 border-b border-outline-variant/30">
                        <tr>
                            <th class="px-6 py-4 text-[10px] font-black text-secondary/70 uppercase tracking-[0.2em]">Entity</th>
                            <th class="px-6 py-4 text-[10px] font-black text-secondary/70 uppercase tracking-[0.2em]">Status</th>
                            <th class="px-6 py-4 text-[10px] font-black text-secondary/70 uppercase tracking-[0.2em] text-right">Amount</th>
                            <th class="px-6 py-4 text-[10px] font-black text-secondary/70 uppercase tracking-[0.2em] text-right">Date</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant/10">
                        @foreach([
                            ['name' => 'Morgan Smith', 'id' => 'TR-9941', 'status' => 'COMPLETED', 'amount' => '$1,240.00', 'date' => 'Today, 2:45 PM'],
                            ['name' => 'Apex Logistics', 'id' => 'TR-9940', 'status' => 'PENDING', 'amount' => '$890.50', 'date' => 'Oct 12, 11:30 AM'],
                            ['name' => 'Vera Digital', 'id' => 'TR-9939', 'status' => 'COMPLETED', 'amount' => '$3,400.00', 'date' => 'Oct 11, 4:20 PM']
                        ] as $tx)
                        <tr class="hover:bg-surface-container-low/30 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-surface-container-high flex items-center justify-center text-on-surface-variant font-black text-[12px] transition-transform group-hover:scale-105">
                                        {{ substr($tx['name'], 0, 1) }}{{ substr(strrchr($tx['name'], ' '), 1, 1) }}
                                    </div>
                                    <div>
                                        <p class="text-[14px] font-bold text-on-surface group-hover:text-primary transition-colors">{{ $tx['name'] }}</p>
                                        <p class="text-[11px] text-secondary/50 font-medium tracking-tight">Order #{{ $tx['id'] }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-[10px] font-black tracking-widest {{ $tx['status'] === 'COMPLETED' ? 'bg-emerald-500/10 text-emerald-600' : 'bg-amber-500/10 text-amber-600' }}">
                                    {{ $tx['status'] }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right text-[14px] font-bold text-on-surface tracking-tight">{{ $tx['amount'] }}</td>
                            <td class="px-6 py-4 text-right text-[12px] text-secondary font-medium">{{ $tx['date'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Activity Timeline -->
        <div class="col-span-12 lg:col-span-4 bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm transition-all duration-300">
            <h3 class="text-[17px] font-black text-on-surface tracking-tight mb-8">Activity Timeline</h3>
            <div class="space-y-8 relative before:absolute before:left-[15px] before:top-2 before:bottom-0 before:w-0.5 before:bg-outline-variant/30">
                <div class="relative pl-10">
                    <div class="absolute left-0 top-1 w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center border-4 border-surface-container-lowest shadow-sm">
                        <svg class="w-3.5 h-3.5 text-primary" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"></path>
                        </svg>
                    </div>
                    <p class="text-[13px] font-bold text-on-surface leading-tight">Server auto-scaling triggered</p>
                    <p class="text-[11px] text-secondary/70 mt-1 font-medium leading-relaxed">Scale out: 2 new nodes added to Cluster-A for load balancing.</p>
                    <span class="text-[10px] text-secondary/40 font-bold uppercase tracking-wider mt-2 inline-block">12 mins ago</span>
                </div>
                <div class="relative pl-10">
                    <div class="absolute left-0 top-1 w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center border-4 border-surface-container-lowest shadow-sm">
                        <svg class="w-3.5 h-3.5 text-secondary" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <p class="text-[13px] font-bold text-on-surface leading-tight">Monthly export completed</p>
                    <p class="text-[11px] text-secondary/70 mt-1 font-medium leading-relaxed">User activity logs for Sept exported to S3 storage bucket.</p>
                    <span class="text-[10px] text-secondary/40 font-bold uppercase tracking-wider mt-2 inline-block">2 hours ago</span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
