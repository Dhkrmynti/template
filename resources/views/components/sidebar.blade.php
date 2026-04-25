<aside class="flex flex-col h-screen w-64 fixed left-0 top-0 py-4 bg-slate-50 dark:bg-slate-950 border-r border-slate-200 dark:border-slate-800 z-50 transition-transform duration-300" 
       :class="{ 'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen }">
    <div class="px-6 mb-8">
        <div class="flex items-center gap-3">
            <div class="w-8 h-8 rounded bg-primary flex items-center justify-center text-white">
                <span class="material-symbols-outlined text-sm">terminal</span>
            </div>
            <div>
                <h1 class="text-xl font-black tracking-tighter text-on-surface">AdminOS</h1>
                <p class="text-[10px] uppercase tracking-widest text-secondary font-bold">v2.4.0</p>
            </div>
        </div>
    </div>
    
    <nav class="flex-1 space-y-1 px-3">
        <a class="flex items-center gap-3 px-3 py-2 text-primary bg-surface-container-low border-r-2 border-primary text-[13px] font-medium tracking-tight transition-all duration-200 ease-in-out" href="#">
            <span class="material-symbols-outlined">dashboard</span>
            Dashboard
        </a>
        <a class="flex items-center gap-3 px-3 py-2 text-on-surface-variant hover:bg-surface-container-high text-[13px] font-medium tracking-tight transition-all duration-200 ease-in-out" href="#">
            <span class="material-symbols-outlined">insights</span>
            Analytics
        </a>
        <a class="flex items-center gap-3 px-3 py-2 text-on-surface-variant hover:bg-surface-container-high text-[13px] font-medium tracking-tight transition-all duration-200 ease-in-out" href="#">
            <span class="material-symbols-outlined">group</span>
            Users
        </a>
        <a class="flex items-center gap-3 px-3 py-2 text-on-surface-variant hover:bg-surface-container-high text-[13px] font-medium tracking-tight transition-all duration-200 ease-in-out" href="#">
            <span class="material-symbols-outlined">folder_open</span>
            Projects
        </a>
        <a class="flex items-center gap-3 px-3 py-2 text-on-surface-variant hover:bg-surface-container-high text-[13px] font-medium tracking-tight transition-all duration-200 ease-in-out" href="#">
            <span class="material-symbols-outlined">inventory_2</span>
            Inventory
        </a>
    </nav>
    
    <div class="px-6 mt-auto">
        <a class="flex items-center gap-3 px-3 py-2 text-on-surface-variant hover:bg-surface-container-high text-[13px] font-medium tracking-tight" href="#">
            <span class="material-symbols-outlined">logout</span>
            Logout
        </a>
    </div>
</aside>
