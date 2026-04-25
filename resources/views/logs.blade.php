<x-app-layout>
    <x-slot name="title">Activity Logs - AdminOS</x-slot>

    <!-- Header Section -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h2 class="font-display text-[24px] font-black tracking-tight text-on-surface transition-colors duration-300">System Logs</h2>
            <p class="text-[14px] text-secondary mt-1">Audit trail of all administrative actions and system events.</p>
        </div>
        <div class="flex gap-2">
            <button class="h-10 px-4 bg-white dark:bg-slate-900 border border-outline-variant text-[12px] font-bold text-on-surface-variant rounded-xl hover:bg-surface-container-low transition-all uppercase tracking-wider">
                Clear All Logs
            </button>
            <button class="h-10 px-4 bg-white dark:bg-slate-900 border border-outline-variant text-[12px] font-bold text-on-surface-variant rounded-xl hover:bg-surface-container-low transition-all uppercase tracking-wider">
                Download PDF
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 pb-12">
        <!-- Filters Sidebar (Internal) -->
        <div class="md:col-span-3 space-y-6">
            <div class="bg-surface-container-lowest p-6 rounded-3xl border border-outline-variant shadow-sm transition-all duration-300">
                <h4 class="text-on-surface text-[14px] font-black uppercase tracking-tight mb-4">Filter Log</h4>
                <div class="space-y-4">
                    <div class="space-y-1.5">
                        <label class="text-[10px] font-black uppercase tracking-widest text-secondary/50">Log Level</label>
                        <select class="w-full h-10 bg-surface-container-low border border-outline-variant rounded-xl text-[12px] font-bold text-on-surface px-4 focus:ring-4 focus:ring-primary/10">
                            <option>All Levels</option>
                            <option>Information</option>
                            <option>Warning</option>
                            <option>Security/Alert</option>
                        </select>
                    </div>
                    <div class="space-y-1.5">
                        <label class="text-[10px] font-black uppercase tracking-widest text-secondary/50">User Action</label>
                        <select class="w-full h-10 bg-surface-container-low border border-outline-variant rounded-xl text-[12px] font-bold text-on-surface px-4 focus:ring-4 focus:ring-primary/10">
                            <option>All Users</option>
                            <option>Administrators</option>
                            <option>Editors</option>
                        </select>
                    </div>
                    <button class="w-full py-2.5 bg-primary text-on-primary text-[11px] font-black rounded-xl uppercase tracking-[0.2em] shadow-lg shadow-primary/20">Apply Filters</button>
                </div>
            </div>

            <div class="bg-surface-container-high/50 p-6 rounded-3xl border border-outline-variant/30">
                <h5 class="text-[11px] font-black uppercase tracking-widest text-secondary/60 mb-2">Log Volume</h5>
                <p class="text-[13px] font-medium text-on-surface">You have <span class="font-black text-primary">1,240</span> events logged in the last 24 hours.</p>
            </div>
        </div>

        <!-- Log Timeline Area -->
        <div class="md:col-span-9 bg-surface-container-lowest rounded-3xl border border-outline-variant shadow-sm overflow-hidden transition-all duration-300">
            <div class="p-6 border-b border-outline-variant flex items-center justify-between">
                <h3 class="font-black text-[15px] text-on-surface uppercase tracking-tight">Timeline Activity</h3>
                <div class="flex items-center gap-2">
                    <div class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></div>
                    <span class="text-[10px] font-black text-emerald-500 uppercase tracking-widest">Live Updates On</span>
                </div>
            </div>

            <div class="p-6 relative">
                <!-- Vertical Line -->
                <div class="absolute left-11 top-6 bottom-6 w-px bg-outline-variant/30"></div>

                <div class="space-y-8 relative z-10">
                    @foreach([
                        ['title' => 'Security: Failed login attempt', 'user' => 'System (Auto)', 'time' => '2 mins ago', 'level' => 'Security', 'desc' => 'Suspicious activity detected from IP 192.168.1.1. Account source: admin_root'],
                        ['title' => 'Profile: Personal info updated', 'user' => 'Sarah Jenkins', 'time' => '15 mins ago', 'level' => 'Info', 'desc' => 'Updated full name and job title fields'],
                        ['title' => 'Project: New milestone created', 'user' => 'Marcus Thompson', 'time' => '1 hour ago', 'level' => 'Info', 'desc' => 'Campaign Q4 Launch - Milestone: Creative Review reached'],
                        ['title' => 'Database: Performance Warning', 'user' => 'System (Cron)', 'time' => '3 hours ago', 'level' => 'Warning', 'desc' => 'Query execution time exceeded 2000ms on table `transactions`'],
                        ['title' => 'Settings: Theme preference changed', 'user' => 'David Miller', 'time' => '5 hours ago', 'level' => 'Info', 'desc' => 'Interface switched to "High Contrast Dark Mode"']
                    ] as $log)
                    <div class="flex items-start gap-6 group">
                        <div class="mt-1">
                            @if($log['level'] === 'Security')
                                <div class="w-10 h-10 rounded-2xl bg-error/10 text-error flex items-center justify-center shadow-lg shadow-error/10 ring-4 ring-white dark:ring-slate-950">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </div>
                            @elseif($log['level'] === 'Warning')
                                <div class="w-10 h-10 rounded-2xl bg-amber-500/10 text-amber-500 flex items-center justify-center ring-4 ring-white dark:ring-slate-950">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </div>
                            @else
                                <div class="w-10 h-10 rounded-2xl bg-primary/10 text-primary flex items-center justify-center ring-4 ring-white dark:ring-slate-950">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </div>
                            @endif
                        </div>
                        <div class="flex-1 space-y-1">
                            <div class="flex items-center justify-between">
                                <h4 class="text-[14px] font-black text-on-surface group-hover:text-primary transition-colors">{{ $log['title'] }}</h4>
                                <span class="text-[11px] font-bold text-secondary/40">{{ $log['time'] }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-[10px] font-black uppercase tracking-widest 
                                    {{ $log['level'] === 'Security' ? 'text-error' : ($log['level'] === 'Warning' ? 'text-amber-500' : 'text-primary') }}">
                                    {{ $log['level'] }}
                                </span>
                                <span class="text-outline-variant/30 text-[10px]">•</span>
                                <span class="text-[12px] font-bold text-secondary">{{ $log['user'] }}</span>
                            </div>
                            <p class="text-[12px] text-secondary/70 leading-relaxed bg-surface-container-low/30 p-2 rounded-lg mt-2 group-hover:bg-primary/5 transition-all">
                                {{ $log['desc'] }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="p-6 border-t border-outline-variant bg-surface-container-low/30 text-center">
                <button class="text-[11px] font-black text-primary uppercase tracking-widest hover:underline">Load Older Logs</button>
            </div>
        </div>
    </div>
</x-app-layout>
