<x-app-layout>
    <x-slot name="title">Support Hub - AdminOS</x-slot>

    <!-- Header Section -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h2 class="font-display text-[24px] font-black tracking-tight text-on-surface transition-colors duration-300">Support Hub</h2>
            <p class="text-[14px] text-secondary mt-1">Manage user queries, technical tickets, and platform assistance.</p>
        </div>
        <div class="flex gap-2">
            <button class="flex items-center gap-2 px-4 py-2 bg-primary text-on-primary text-[12px] font-black rounded-xl hover:opacity-90 transition-all uppercase tracking-wider shadow-lg shadow-primary/20">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                Create Ticket
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 pb-20">
        <!-- Ticket Stats -->
        <div class="md:col-span-12 grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach([
                ['label' => 'Open Tickets', 'val' => '24', 'col' => 'text-primary', 'bg' => 'bg-primary/5'],
                ['label' => 'Waiting Response', 'val' => '8', 'col' => 'text-amber-500', 'bg' => 'bg-amber-500/5'],
                ['label' => 'Resolved Today', 'val' => '156', 'col' => 'text-emerald-500', 'bg' => 'bg-emerald-500/5'],
                ['label' => 'Avg. Speed', 'val' => '12m', 'col' => 'text-indigo-500', 'bg' => 'bg-indigo-500/5']
            ] as $s)
            <div class="bg-surface-container-lowest p-6 rounded-3xl border border-outline-variant shadow-sm transition-all duration-300">
                <h4 class="text-[10px] font-black uppercase tracking-widest text-secondary/50 mb-1">{{ $s['label'] }}</h4>
                <div class="text-2xl font-black {{ $s['col'] }}">{{ $s['val'] }}</div>
            </div>
            @endforeach
        </div>

        <!-- Ticket List Area -->
        <div class="md:col-span-8 bg-surface-container-lowest rounded-3xl border border-outline-variant shadow-sm overflow-hidden flex flex-col transition-all duration-300">
            <div class="p-6 border-b border-outline-variant flex items-center justify-between">
                <h3 class="font-black text-[15px] text-on-surface uppercase tracking-tight">Active Tickets</h3>
                <div class="flex items-center gap-1 bg-surface-container-low p-1 rounded-xl border border-outline-variant/30">
                    <button class="px-3 py-1 text-[10px] font-black uppercase bg-white dark:bg-slate-900 rounded-lg shadow-sm text-primary transition-all">Priority</button>
                    <button class="px-3 py-1 text-[10px] font-black uppercase text-secondary/50 hover:text-on-surface transition-all">Latest</button>
                </div>
            </div>
            
            <div class="divide-y divide-outline-variant/5">
                @foreach([
                    ['id' => '#TK-8412', 'user' => 'Sarah J.', 'title' => 'Cannot access billing dashboard', 'time' => '12m ago', 'status' => 'Urgent', 'avatar' => 'https://i.pravatar.cc/150?u=sarah'],
                    ['id' => '#TK-8409', 'user' => 'Will Mark', 'title' => 'Request for API key increase', 'time' => '45m ago', 'status' => 'Medium', 'avatar' => 'https://i.pravatar.cc/150?u=will'],
                    ['id' => '#TK-8401', 'user' => 'Elena R.', 'title' => 'Dark mode toggle is glitching', 'time' => '2h ago', 'status' => 'Low', 'avatar' => 'https://i.pravatar.cc/150?u=elena'],
                    ['id' => '#TK-8395', 'user' => 'James Bo', 'title' => 'Account verification pending', 'time' => '5h ago', 'status' => 'Urgent', 'avatar' => 'https://i.pravatar.cc/150?u=james']
                ] as $tk)
                <div class="p-5 flex items-start gap-4 hover:bg-surface-container-low/30 transition-all group cursor-pointer">
                    <img alt="" class="w-10 h-10 rounded-full border border-outline-variant" src="{{ $tk['avatar'] }}"/>
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-1">
                            <span class="text-[10px] font-black text-secondary/40 uppercase tracking-widest">{{ $tk['id'] }} • {{ $tk['user'] }}</span>
                            <span class="text-[10px] font-medium text-secondary/40">{{ $tk['time'] }}</span>
                        </div>
                        <h4 class="text-[14px] font-black text-on-surface group-hover:text-primary transition-colors mb-2">{{ $tk['title'] }}</h4>
                        <span class="inline-flex items-center px-2 py-0.5 rounded-lg text-[9px] font-black uppercase tracking-widest
                            {{ $tk['status'] === 'Urgent' ? 'bg-error/10 text-error' : ($tk['status'] === 'Medium' ? 'bg-amber-500/10 text-amber-500' : 'bg-primary/10 text-primary') }}">
                            ● {{ $tk['status'] }}
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="p-4 border-t border-outline-variant bg-surface-container-low/30 text-center">
                <button class="text-[11px] font-black text-primary uppercase tracking-widest hover:underline">Browse All Ticket Archive</button>
            </div>
        </div>

        <!-- Quick Chat / Experts Sidebar -->
        <div class="md:col-span-4 space-y-6">
            <div class="bg-surface-container-highest p-6 rounded-3xl border border-outline-variant shadow-sm transition-all duration-300">
                <h4 class="text-on-surface text-[14px] font-black uppercase tracking-tight mb-4">Online Experts</h4>
                <div class="space-y-4">
                    @foreach([
                        ['name' => 'David Systems', 'role' => 'Infrastructure', 'online' => true],
                        ['name' => 'Maya Creative', 'role' => 'UX Design', 'online' => true],
                        ['name' => 'Root Admin', 'role' => 'Security', 'online' => false]
                    ] as $ex)
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="relative">
                                <div class="w-10 h-10 rounded-xl bg-surface-container-low border border-outline-variant flex items-center justify-center text-[12px] font-black text-secondary">
                                    {{ substr($ex['name'], 0, 1) }}{{ substr(strrchr($ex['name'], ' '), 1, 1) }}
                                </div>
                                @if($ex['online'])
                                    <div class="absolute -bottom-1 -right-1 w-3 h-3 bg-emerald-500 border-2 border-surface-container-highest rounded-full"></div>
                                @endif
                            </div>
                            <div>
                                <div class="text-[13px] font-black text-on-surface">{{ $ex['name'] }}</div>
                                <div class="text-[10px] text-secondary/50 font-bold uppercase tracking-wider">{{ $ex['role'] }}</div>
                            </div>
                        </div>
                        <button class="p-2 hover:bg-white dark:hover:bg-slate-900 rounded-xl transition-all text-primary">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </button>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="bg-indigo-600 p-6 rounded-3xl shadow-xl shadow-indigo-500/20 text-white relative overflow-hidden group">
                <div class="relative z-10">
                    <h4 class="text-[14px] font-black uppercase tracking-tight mb-2">Need Direct Help?</h4>
                    <p class="text-[12px] opacity-70 mb-6 leading-relaxed">Our premium support team is available 24/7 for Enterprise accounts.</p>
                    <button class="w-full py-3 bg-white text-indigo-600 text-[11px] font-black rounded-2xl uppercase tracking-[0.2em] hover:scale-105 active:scale-95 transition-all">Start Live Chat</button>
                </div>
                <svg class="absolute -bottom-6 -right-6 w-32 h-32 text-white/10 group-hover:scale-110 transition-transform duration-700" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.644 1.59a.75.75 0 0 1 .712 0l9.75 5.25a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.712 0l-9.75-5.25a.75.75 0 0 1 0-1.32l9.75-5.25Z"></path><path d="m3.276 12.227 7.905 4.257a.75.75 0 0 0 .713 0l7.905-4.257 3.008 1.62a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.712 0L2.69 15.167a.75.75 0 0 1 0-1.32l.586-.316ZM3.276 17.227l7.905 4.257a.75.75 0 0 0 .713 0l7.905-4.257 3.008 1.62a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.712 0L2.69 20.167a.75.75 0 0 1 0-1.32l.586-.316Z"></path></svg>
            </div>
        </div>
    </div>
</x-app-layout>
