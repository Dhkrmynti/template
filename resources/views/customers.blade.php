<x-app-layout>
    <x-slot name="title">CRM - Customers - AdminOS</x-slot>

    <!-- Header Section -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h2 class="font-display text-[24px] font-black tracking-tight text-on-surface transition-colors duration-300">Customer Relationship</h2>
            <p class="text-[14px] text-secondary mt-1">Manage customer profiles, loyalty stages, and purchase history.</p>
        </div>
        <div class="flex gap-2">
            <button class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-slate-900 border border-outline-variant text-on-surface font-bold text-[12px] rounded-xl hover:bg-surface-container-low transition-colors shadow-sm uppercase tracking-wider">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                Export
            </button>
            <button class="flex items-center gap-2 px-4 py-2 bg-primary text-on-primary font-bold text-[12px] rounded-xl hover:opacity-90 transition-opacity shadow-lg shadow-primary/20 uppercase tracking-wider">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                Add Customer
            </button>
        </div>
    </div>

    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        @foreach([
            ['label' => 'Total Customers', 'value' => '12,482', 'growth' => '+12%', 'icon' => 'users'],
            ['label' => 'Active This Month', 'value' => '3,842', 'growth' => '+5%', 'icon' => 'user-check'],
            ['label' => 'Avg. CLV', 'value' => '$420.00', 'growth' => '+8%', 'icon' => 'banknotes'],
            ['label' => 'Churn Rate', 'value' => '2.4%', 'growth' => '-15%', 'icon' => 'arrow-trending-down']
        ] as $stat)
        <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-sm transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="p-2 bg-primary/5 text-primary rounded-xl">
                    @if($stat['icon'] === 'users')
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    @elseif($stat['icon'] === 'user-check')
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    @elseif($stat['icon'] === 'banknotes')
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75m0 3v.75m0 3v.75m0 3v.75m0 3V18m15 0v.75m0-3.75v.75m0-3v.75m0-3v.75m0-3v.75m0-3V4.5m-15 0h15M3.75 4.5l.3-.3a48.811 48.811 0 0 1 14.4 0l.3.3m-15 0v1.125c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V4.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    @else
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 0 1 5.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    @endif
                </div>
                <span class="text-[11px] font-black {{ str_contains($stat['growth'], '+') ? 'text-emerald-500' : 'text-error' }} bg-surface-container-high px-2 py-1 rounded-lg">
                    {{ $stat['growth'] }}
                </span>
            </div>
            <h4 class="text-secondary/60 text-[11px] font-black uppercase tracking-wider mb-1">{{ $stat['label'] }}</h4>
            <div class="text-on-surface text-2xl font-black tracking-tight">{{ $stat['value'] }}</div>
        </div>
        @endforeach
    </div>

    <!-- Customer Table -->
    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant shadow-sm overflow-hidden flex flex-col transition-all duration-300">
        <div class="p-4 border-b border-outline-variant bg-surface-container-low/50 flex flex-wrap gap-4 items-center">
            <div class="flex-1 min-w-[240px]">
                <div class="relative group">
                    <svg class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-secondary/50 group-focus-within:text-primary transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <input class="w-full h-10 bg-white dark:bg-slate-900 border border-outline-variant rounded-xl text-[13px] pl-10 focus:ring-4 focus:ring-primary/10 focus:border-primary transition-all text-on-surface placeholder:text-secondary/40" placeholder="Search customer ID, name, or email..." type="text"/>
                </div>
            </div>
            <div class="flex gap-2">
                <button class="h-10 px-4 flex items-center gap-2 bg-white dark:bg-slate-900 border border-outline-variant rounded-xl text-[13px] font-bold text-on-surface-variant hover:border-primary transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 12H13.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    Filters
                </button>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-surface-container-low/30 border-b border-outline-variant/10">
                    <tr>
                        <th class="p-4 font-black text-[10px] text-secondary/60 uppercase tracking-widest">Customer</th>
                        <th class="p-4 font-black text-[10px] text-secondary/60 uppercase tracking-widest">Loyalty Status</th>
                        <th class="p-4 font-black text-[10px] text-secondary/60 uppercase tracking-widest">Total Spend</th>
                        <th class="p-4 font-black text-[10px] text-secondary/60 uppercase tracking-widest">Last Order</th>
                        <th class="p-4 font-black text-[10px] text-secondary/60 uppercase tracking-widest text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/5">
                    @foreach([
                        ['name' => 'James Wilson', 'email' => 'james.w@gmail.com', 'loyalty' => 'Platinum', 'spend' => '$4,250.00', 'last' => 'Oct 24, 2023', 'avatar' => 'https://i.pravatar.cc/150?u=james'],
                        ['name' => 'Sophia Martinez', 'email' => 'sophia.m@outlook.com', 'loyalty' => 'Gold', 'spend' => '$2,120.50', 'last' => 'Yesterday', 'avatar' => 'https://i.pravatar.cc/150?u=sophia'],
                        ['name' => 'William Brown', 'email' => 'will.b@techcorp.io', 'loyalty' => 'Silver', 'spend' => '$890.00', 'last' => '2 days ago', 'avatar' => 'https://i.pravatar.cc/150?u=will'],
                        ['name' => 'Isabella Garcia', 'email' => 'isabella.g@webmail.com', 'loyalty' => 'Platinum', 'spend' => '$5,800.00', 'last' => 'Oct 20, 2023', 'avatar' => 'https://i.pravatar.cc/150?u=isabella'],
                        ['name' => 'Ethan Hunt', 'email' => 'ehunt@mi6.gov', 'loyalty' => 'Bronze', 'spend' => '$150.00', 'last' => 'Sep 12, 2023', 'avatar' => 'https://i.pravatar.cc/150?u=ethan']
                    ] as $cust)
                    <tr class="group hover:bg-primary/5 transition-all">
                        <td class="p-4">
                            <div class="flex items-center gap-3">
                                <img alt="" class="w-10 h-10 rounded-xl border border-outline-variant object-cover" src="{{ $cust['avatar'] }}"/>
                                <div>
                                    <div class="text-[14px] font-black text-on-surface group-hover:text-primary transition-colors">{{ $cust['name'] }}</div>
                                    <div class="text-[11px] text-secondary/60 font-medium">{{ $cust['email'] }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="p-4">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest
                                {{ $cust['loyalty'] === 'Platinum' ? 'bg-indigo-500/10 text-indigo-500' : 
                                   ($cust['loyalty'] === 'Gold' ? 'bg-amber-500/10 text-amber-500' : 
                                   ($cust['loyalty'] === 'Silver' ? 'bg-slate-500/10 text-slate-500' : 'bg-orange-500/10 text-orange-500')) }}">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z"></path>
                                </svg>
                                {{ $cust['loyalty'] }}
                            </span>
                        </td>
                        <td class="p-4 text-[13px] font-black text-on-surface">{{ $cust['spend'] }}</td>
                        <td class="p-4 text-[12px] font-medium text-secondary/70">{{ $cust['last'] }}</td>
                        <td class="p-4 text-right">
                            <button class="p-2 hover:bg-primary/10 rounded-xl transition-all text-secondary/40 hover:text-primary">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.036 12.322a1.012 1.012 0 0 1 0-.644C3.399 9.049 6.827 7.5 12 7.5s8.601 1.549 9.963 4.178c.07.135.07.296 0 .431-1.362 2.629-4.791 4.178-9.963 4.178s-8.601-1.549-9.963-4.178Z" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="p-4 border-t border-outline-variant bg-surface-container-low/30 text-center">
            <button class="text-[12px] font-black text-primary hover:underline transition-all">View All Active Customers</button>
        </div>
    </div>
</x-app-layout>
