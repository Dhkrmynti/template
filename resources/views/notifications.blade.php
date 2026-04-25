<x-app-layout>
    <x-slot name="title">Notifications Center - AdminOS</x-slot>

    <!-- Header Section -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h2 class="font-display text-[24px] font-black tracking-tight text-on-surface transition-colors duration-300">Notification Center</h2>
            <p class="text-[14px] text-secondary mt-1">Stay updated with the latest system alerts and team activities.</p>
        </div>
        <div class="flex gap-2">
            <button class="h-10 px-4 bg-primary text-on-primary text-[12px] font-black rounded-xl hover:opacity-90 transition-all uppercase tracking-wider shadow-lg shadow-primary/20">
                Mark All as Read
            </button>
        </div>
    </div>

    <div class="max-w-4xl mx-auto">
        <!-- Tabs -->
        <div class="flex items-center gap-1 bg-surface-container-low p-1 rounded-2xl border border-outline-variant/30 mb-6">
            @foreach(['All', 'Unread', 'System', 'Security'] as $tab)
            <button class="flex-1 py-2 text-[11px] font-black uppercase tracking-widest rounded-xl transition-all {{ $tab === 'All' ? 'bg-white dark:bg-slate-900 text-primary shadow-sm' : 'text-secondary/60 hover:text-on-surface' }}">
                {{ $tab }}
            </button>
            @endforeach
        </div>

        <!-- Notification List -->
        <div class="space-y-4">
            @foreach([
                ['type' => 'security', 'title' => 'New device login detected', 'time' => '10m ago', 'unread' => true, 'desc' => 'A new login from Chrome on Windows (Jakarta, ID) was registered to your account.'],
                ['type' => 'system', 'title' => 'Server Maintenance', 'time' => '2h ago', 'unread' => true, 'desc' => 'Scheduled maintenance will occur on Nov 1st at 02:00 AM UTC. Expect minor downtime.'],
                ['type' => 'project', 'title' => 'Sarah tagged you in a comment', 'time' => '5h ago', 'unread' => false, 'desc' => '"@Alex can you review the latest Q4 financial projections?" in Project AdminOS V2.'],
                ['type' => 'billing', 'title' => 'Monthly invoice is ready', 'time' => 'Yesterday', 'unread' => false, 'desc' => 'Your subscription invoice for October has been generated and is available for download.'],
                ['type' => 'security', 'title' => 'Password changed successfully', 'time' => '2 days ago', 'unread' => false, 'desc' => 'The password for alexander.h@adminos.io was changed from a recognized device.']
            ] as $notif)
            <div class="bg-surface-container-lowest p-5 rounded-2xl border border-outline-variant shadow-sm transition-all hover:border-primary/20 hover:bg-surface-container-low/30 group relative">
                @if($notif['unread'])
                    <div class="absolute top-6 left-2 w-1.5 h-1.5 rounded-full bg-primary shadow-[0_0_8px_rgba(var(--primary-rgb),0.6)]"></div>
                @endif
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 flex-shrink-0 rounded-2xl flex items-center justify-center
                        {{ $notif['type'] === 'security' ? 'bg-error/10 text-error' : 
                           ($notif['type'] === 'system' ? 'bg-amber-500/10 text-amber-500' : 
                           ($notif['type'] === 'project' ? 'bg-primary/10 text-primary' : 'bg-emerald-500/10 text-emerald-600')) }}">
                        @if($notif['type'] === 'security')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 9v3.75m0-10.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        @elseif($notif['type'] === 'system')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        @elseif($notif['type'] === 'project')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.303.025-.607.047-.912.066a48.323 48.323 0 0 1-14.716 0 48.113 48.113 0 0 1-.912-.066 2.193 2.193 0 0 1-1.98-2.193V10.608c0-.969.616-1.813 1.5-2.097a48.535 48.535 0 0 1 18.5 0Z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        @else
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        @endif
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-1">
                            <h4 class="text-[15px] font-black text-on-surface tracking-tight group-hover:text-primary transition-colors flex items-center gap-2">
                                {{ $notif['title'] }}
                                @if($notif['unread'])
                                    <span class="text-[10px] font-black text-primary bg-primary/10 px-2 py-0.5 rounded-full uppercase tracking-widest">New</span>
                                @endif
                            </h4>
                            <span class="text-[11px] font-bold text-secondary/40">{{ $notif['time'] }}</span>
                        </div>
                        <p class="text-[13px] text-secondary/70 leading-relaxed max-w-2xl">
                            {{ $notif['desc'] }}
                        </p>
                        <div class="mt-4 flex gap-2">
                            <button class="px-3 py-1.5 bg-surface-container border border-outline-variant text-[11px] font-black text-on-surface-variant uppercase tracking-widest rounded-lg hover:bg-surface-container-high transition-all">Actions</button>
                            <button class="px-3 py-1.5 bg-transparent text-[11px] font-black text-secondary/50 uppercase tracking-widest rounded-lg hover:text-error transition-all">Dismiss</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-10 mb-20 text-center">
            <button class="px-8 py-3 bg-surface-container-high text-secondary/60 text-[12px] font-black uppercase tracking-[0.2em] rounded-2xl hover:text-on-surface transition-all border border-outline-variant/30">
                Load All Archive
            </button>
        </div>
    </div>
</x-app-layout>
