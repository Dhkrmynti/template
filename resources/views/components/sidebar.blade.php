<aside class="flex flex-col h-screen w-64 fixed left-0 top-0 py-4 bg-slate-50 dark:bg-slate-950 border-r border-slate-200 dark:border-slate-800 z-50 transition-transform duration-300" 
       :class="{ 'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen }">
    <div class="px-6 mb-8">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-xl bg-primary flex items-center justify-center text-white shadow-lg shadow-primary/20">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </div>
            <div>
                <h1 class="text-xl font-black tracking-tighter text-on-surface">AdminOS</h1>
                <p class="text-[10px] uppercase tracking-widest text-secondary font-bold">v2.4.0</p>
            </div>
        </div>
    </div>
    
    <nav class="flex-1 space-y-6 px-3 overflow-y-auto custom-scrollbar pb-6">
        <!-- Main Section -->
        <div>
            <h5 class="px-4 text-[10px] font-black uppercase tracking-[0.2em] text-secondary/40 mb-2">Main</h5>
            <div class="space-y-1">
                <a class="flex items-center gap-3 px-3 py-2 text-[13px] font-bold tracking-tight transition-all duration-200 ease-in-out {{ request()->routeIs('dashboard') ? 'text-primary bg-primary/5 border-r-2 border-primary' : 'text-on-surface-variant hover:bg-surface-container-high' }}" 
                   href="{{ route('dashboard') }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Dashboard
                </a>
            </div>
        </div>

        <!-- Management Section -->
        <div>
            <h5 class="px-4 text-[10px] font-black uppercase tracking-[0.2em] text-secondary/40 mb-2">Management</h5>
            <div class="space-y-1">
                <a class="flex items-center gap-3 px-3 py-2 text-[13px] font-bold tracking-tight transition-all duration-200 ease-in-out {{ request()->routeIs('users.index') ? 'text-primary bg-primary/5 border-r-2 border-primary' : 'text-on-surface-variant hover:bg-surface-container-high' }}" 
                   href="{{ route('users.index') }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Users
                </a>
                <a class="flex items-center gap-3 px-3 py-2 text-[13px] font-bold tracking-tight transition-all duration-200 ease-in-out {{ request()->routeIs('customers') ? 'text-primary bg-primary/5 border-r-2 border-primary' : 'text-on-surface-variant hover:bg-surface-container-high' }}" 
                   href="{{ route('customers') }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1-4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Customers
                </a>
            </div>
        </div>

        <!-- Business & Ops Section -->
        <div>
            <h5 class="px-4 text-[10px] font-black uppercase tracking-[0.2em] text-secondary/40 mb-2">Business & Ops</h5>
            <div class="space-y-1">
                <a class="flex items-center gap-3 px-3 py-2 text-[13px] font-bold tracking-tight transition-all duration-200 ease-in-out {{ request()->routeIs('finances') ? 'text-primary bg-primary/5 border-r-2 border-primary' : 'text-on-surface-variant hover:bg-surface-container-high' }}" 
                   href="{{ route('finances') }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75m0 3v.75m0 3v.75m0 3v.75m0 3v.75m0 3V18m15 0v.75m0-3.75v.75m0-3v.75m0-3v.75m0-3v.75m0-3V4.5m-15 0h15" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Financials
                </a>
                <a class="flex items-center gap-3 px-3 py-2 text-[13px] font-bold tracking-tight transition-all duration-200 ease-in-out {{ request()->routeIs('files') ? 'text-primary bg-primary/5 border-r-2 border-primary' : 'text-on-surface-variant hover:bg-surface-container-high' }}" 
                   href="{{ route('files') }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-18.75 0a2.25 2.25 0 0 0-2.25 2.25v4.5A2.25 2.25 0 0 0 4.5 21.75h15a2.25 2.25 0 0 0 2.25-2.25v-4.5a2.25 2.25 0 0 0-2.25-2.25m-18.75 0V7.5A2.25 2.25 0 0 1 4.5 5.25h15A2.25 2.25 0 0 1 21.75 7.5v5.25" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    File Manager
                </a>
            </div>
        </div>

        <!-- Support & Security Section -->
        <div>
            <h5 class="px-4 text-[10px] font-black uppercase tracking-[0.2em] text-secondary/40 mb-2">Support & Audit</h5>
            <div class="space-y-1">
                <a class="flex items-center gap-3 px-3 py-2 text-[13px] font-bold tracking-tight transition-all duration-200 ease-in-out {{ request()->routeIs('notifications') ? 'text-primary bg-primary/5 border-r-2 border-primary' : 'text-on-surface-variant hover:bg-surface-container-high' }}" 
                   href="{{ route('notifications') }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Notifications
                </a>
                <a class="flex items-center gap-3 px-3 py-2 text-[13px] font-bold tracking-tight transition-all duration-200 ease-in-out {{ request()->routeIs('support') ? 'text-primary bg-primary/5 border-r-2 border-primary' : 'text-on-surface-variant hover:bg-surface-container-high' }}" 
                   href="{{ route('support') }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Support Hub
                </a>
                <a class="flex items-center gap-3 px-3 py-2 text-[13px] font-bold tracking-tight transition-all duration-200 ease-in-out {{ request()->routeIs('logs') ? 'text-primary bg-primary/5 border-r-2 border-primary' : 'text-on-surface-variant hover:bg-surface-container-high' }}" 
                   href="{{ route('logs') }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    System Logs
                </a>
            </div>
        </div>

        <!-- Account Section -->
        <div>
            <h5 class="px-4 text-[10px] font-black uppercase tracking-[0.2em] text-secondary/40 mb-2">Account</h5>
            <div class="space-y-1">
                <a class="flex items-center gap-3 px-3 py-2 text-[13px] font-bold tracking-tight transition-all duration-200 ease-in-out {{ request()->routeIs('settings') ? 'text-primary bg-primary/5 border-r-2 border-primary' : 'text-on-surface-variant hover:bg-surface-container-high' }}" 
                   href="{{ route('settings') }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.35 1.5a1.5 1.5 0 0 1 3 0V3a1.5 1.5 0 0 1-3 0V1.5ZM10.35 21a1.5 1.5 0 0 1 3 0v1.5a1.5 1.5 0 0 1-3 0V21ZM1.5 10.35a1.5 1.5 0 0 1 0 3H3a1.5 1.5 0 0 1 0-3H1.5ZM21 10.35a1.5 1.5 0 0 1 0 3h1.5a1.5 1.5 0 0 1 0-3H21ZM5.03 5.03a1.5 1.5 0 0 1 2.12 0L8.19 6.09a1.5 1.5 0 0 1-2.12 2.12L5.03 7.15a1.5 1.5 0 0 1 0-2.12ZM15.81 15.81a1.5 1.5 0 0 1 2.12 0l1.06 1.06a1.5 1.5 0 1 1-2.12 2.12l-1.06-1.06a1.5 1.5 0 0 1 0-2.12ZM5.03 18.97a1.5 1.5 0 0 1 0-2.12l1.06-1.06a1.5 1.5 0 1 1 2.12 2.12l-1.06 1.06a1.5 1.5 0 0 1-2.12 0ZM15.81 8.19a1.5 1.5 0 0 1 0-2.12l1.06-1.06a1.5 1.5 0 1 1 2.12 2.12l-1.06 1.06a1.5 1.5 0 0 1 0-2.12ZM12 8.25a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5Z" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Settings
                </a>
            </div>
        </div>
    </nav>

    <div class="px-6 border-t border-outline-variant/30 pt-4 mt-auto">
        <a class="flex items-center gap-3 px-3 py-2 text-error/60 hover:text-error hover:bg-error/5 text-[13px] font-black tracking-tight transition-all rounded-xl" href="#">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            Logout
        </a>
    </div>
</aside>
