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
            icon="payments" 
            comparison="vs. last month $21,957" />
        
        <x-stat-card 
            label="Users" 
            value="1,842" 
            trend="4.3%" 
            icon="person_add" 
            iconBg="bg-orange-50 dark:bg-orange-950/30" 
            iconColor="text-orange-600" 
            comparison="vs. last month 1,766" />
        
        <x-stat-card 
            label="Orders" 
            value="642" 
            trend="2.1%" 
            trendUp="false" 
            icon="shopping_cart" 
            iconBg="bg-emerald-50 dark:bg-emerald-950/30" 
            iconColor="text-emerald-600" 
            comparison="vs. last month 656" />
        
        <x-stat-card 
            label="Conversion" 
            value="3.4%" 
            trend="0.8%" 
            icon="ads_click" 
            iconBg="bg-purple-50 dark:bg-purple-950/30" 
            iconColor="text-purple-600" 
            comparison="vs. last month 2.6%" />
    </div>

    <!-- Main Grid Layout -->
    <div class="grid grid-cols-12 gap-6">
        <!-- Revenue Chart Placeholder -->
        <div class="col-span-12 lg:col-span-8 bg-white dark:bg-slate-900 p-6 rounded-lg border border-slate-200 dark:border-slate-800 shadow-sm transition-colors duration-300">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-[16px] font-bold text-on-surface">Revenue Forecast</h3>
                    <p class="text-[12px] text-secondary">Projected growth vs actual performance</p>
                </div>
                <div class="flex gap-2">
                    <button class="px-3 py-1 text-[11px] font-semibold border border-slate-200 dark:border-slate-700 rounded-md bg-white dark:bg-slate-800 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">Daily</button>
                    <button class="px-3 py-1 text-[11px] font-semibold bg-primary text-white rounded-md">Monthly</button>
                </div>
            </div>
            <div class="h-64 w-full bg-slate-50 dark:bg-slate-950/50 relative overflow-hidden rounded border border-dashed border-slate-200 dark:border-slate-800 flex items-center justify-center">
                <div class="absolute inset-0 p-4 opacity-30 flex items-end justify-between">
                    @for ($i = 0; $i < 10; $i++)
                        <div class="w-6 bg-primary {{ $i % 3 == 0 ? 'h-3/4 opacity-100' : 'h-1/2 opacity-20' }} transition-all duration-700 hover:h-full"></div>
                    @endfor
                </div>
                <p class="text-[12px] text-slate-400 z-10 font-medium">[ Revenue Visualization Area ]</p>
            </div>
        </div>

        <!-- Progress Widget -->
        <div class="col-span-12 lg:col-span-4 bg-white dark:bg-slate-900 p-6 rounded-lg border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col justify-between transition-colors duration-300">
            <div>
                <h3 class="text-[16px] font-bold text-on-surface dark:text-white mb-1">Target Goals</h3>
                <p class="text-[12px] text-secondary dark:text-slate-400 mb-6">Q3 Operational Objectives</p>
                <div class="space-y-6">
                    <div>
                        <div class="flex justify-between text-[11px] mb-1">
                            <span class="text-on-surface dark:text-slate-200 font-semibold">Active Subscriptions</span>
                            <span class="text-secondary dark:text-slate-400">85%</span>
                        </div>
                        <div class="w-full h-2 bg-slate-100 dark:bg-slate-800 rounded-full">
                            <div class="h-full bg-primary rounded-full transition-all duration-1000" style="width: 85%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-[11px] mb-1">
                            <span class="text-on-surface dark:text-slate-200 font-semibold">Customer Retention</span>
                            <span class="text-secondary dark:text-slate-400">62%</span>
                        </div>
                        <div class="w-full h-2 bg-slate-100 dark:bg-slate-800 rounded-full">
                            <div class="h-full bg-primary rounded-full transition-all duration-1000" style="width: 62%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-[11px] mb-1">
                            <span class="text-on-surface dark:text-slate-200 font-semibold">Server Uptime</span>
                            <span class="text-secondary dark:text-slate-400">99.9%</span>
                        </div>
                        <div class="w-full h-2 bg-slate-100 dark:bg-slate-800 rounded-full">
                            <div class="h-full bg-emerald-500 rounded-full transition-all duration-1000" style="width: 99.9%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-6 border-t border-slate-100 dark:border-slate-800">
                <button class="w-full flex items-center justify-center gap-2 py-2 text-[13px] font-semibold text-primary border border-primary/20 bg-primary/5 hover:bg-primary/10 rounded-lg transition-colors">
                    <span class="material-symbols-outlined text-sm">download</span>
                    Generate Report
                </button>
            </div>
        </div>

        <!-- Recent Transactions -->
        <div class="col-span-12 lg:col-span-8 bg-white dark:bg-slate-900 rounded-lg border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden transition-colors duration-300">
            <div class="p-6 border-b border-slate-100 dark:border-slate-800 flex justify-between items-center">
                <div>
                    <h3 class="text-[16px] font-bold text-on-surface">Recent Transactions</h3>
                    <p class="text-[12px] text-secondary">Latest 5 ledger activities</p>
                </div>
                <button class="text-[11px] text-primary font-bold hover:underline">View All</button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-slate-50 dark:bg-slate-950/50 border-b border-slate-100 dark:border-slate-800">
                        <tr>
                            <th class="px-6 py-3 text-[11px] font-bold text-secondary dark:text-slate-400 uppercase tracking-wider">Entity</th>
                            <th class="px-6 py-3 text-[11px] font-bold text-secondary dark:text-slate-400 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-[11px] font-bold text-secondary dark:text-slate-400 uppercase tracking-wider text-right">Amount</th>
                            <th class="px-6 py-3 text-[11px] font-bold text-secondary dark:text-slate-400 uppercase tracking-wider text-right">Date</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50 dark:divide-slate-800">
                        @foreach([
                            ['name' => 'Morgan Smith', 'id' => 'TR-9941', 'status' => 'COMPLETED', 'amount' => '$1,240.00', 'date' => 'Today, 2:45 PM'],
                            ['name' => 'Apex Logistics', 'id' => 'TR-9940', 'status' => 'PENDING', 'amount' => '$890.50', 'date' => 'Oct 12, 11:30 AM'],
                            ['name' => 'Vera Digital', 'id' => 'TR-9939', 'status' => 'COMPLETED', 'amount' => '$3,400.00', 'date' => 'Oct 11, 4:20 PM']
                        ] as $tx)
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded bg-surface-container-high flex items-center justify-center text-on-surface-variant font-bold text-[10px]">
                                        {{ substr($tx['name'], 0, 1) }}{{ substr(strrchr($tx['name'], ' '), 1, 1) }}
                                    </div>
                                    <div>
                                        <p class="text-[14px] font-semibold text-on-surface dark:text-white">{{ $tx['name'] }}</p>
                                        <p class="text-[10px] text-slate-400">Order #{{ $tx['id'] }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[10px] font-bold {{ $tx['status'] === 'COMPLETED' ? 'bg-emerald-50 text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400' : 'bg-orange-50 text-orange-700 dark:bg-orange-900/30 dark:text-orange-400' }}">
                                    {{ $tx['status'] }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right text-[14px] font-semibold text-on-surface">{{ $tx['amount'] }}</td>
                            <td class="px-6 py-4 text-right text-[12px] text-secondary">{{ $tx['date'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Activity Timeline -->
        <div class="col-span-12 lg:col-span-4 bg-white dark:bg-slate-900 p-6 rounded-lg border border-slate-200 dark:border-slate-800 shadow-sm transition-colors duration-300">
            <h3 class="text-[16px] font-bold text-on-surface mb-6">Activity Timeline</h3>
            <div class="space-y-6 relative before:absolute before:left-[11px] before:top-2 before:bottom-0 before:w-0.5 before:bg-slate-100 dark:before:bg-slate-800">
                <div class="relative pl-8">
                    <div class="absolute left-0 top-1 w-6 h-6 rounded-full bg-primary-container flex items-center justify-center border-4 border-white dark:border-slate-900 shadow-sm">
                        <span class="material-symbols-outlined text-[12px] text-white" style="font-variation-settings: 'FILL' 1;">bolt</span>
                    </div>
                    <p class="text-[12px] font-semibold text-on-surface dark:text-white">Server auto-scaling triggered</p>
                    <p class="text-[10px] text-secondary dark:text-slate-400">Scale out: 2 new nodes added to Cluster-A.</p>
                    <span class="text-[10px] text-slate-400 font-medium">12 mins ago</span>
                </div>
                <div class="relative pl-8">
                    <div class="absolute left-0 top-1 w-6 h-6 rounded-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center border-4 border-white dark:border-slate-900 shadow-sm">
                        <span class="material-symbols-outlined text-[12px] text-slate-500 dark:text-slate-400">upload_file</span>
                    </div>
                    <p class="text-[12px] font-semibold text-on-surface dark:text-white">Monthly export completed</p>
                    <p class="text-[10px] text-secondary dark:text-slate-400">User activity logs for Sept exported to S3.</p>
                    <span class="text-[10px] text-slate-400 font-medium">2 hours ago</span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
