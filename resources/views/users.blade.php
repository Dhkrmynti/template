<x-app-layout>
    <x-slot name="title">User Management - AdminOS</x-slot>

    <!-- Page Header -->
    <div class="flex justify-between items-end mb-8">
        <div>
            <h2 class="font-display text-[24px] font-black tracking-tight text-on-surface transition-colors duration-300">User Management</h2>
            <p class="text-[14px] text-secondary mt-1">Manage your team members, permissions, and account status.</p>
        </div>
        <div class="flex gap-2">
            <button class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-slate-900 border border-outline-variant text-on-surface font-bold text-[12px] rounded-xl hover:bg-surface-container-low transition-colors shadow-sm uppercase tracking-wider">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                Export CSV
            </button>
            <button class="flex items-center gap-2 px-4 py-2 bg-primary text-on-primary font-bold text-[12px] rounded-xl hover:opacity-90 transition-opacity shadow-lg shadow-primary/20 uppercase tracking-wider">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                Add New User
            </button>
        </div>
    </div>

    <!-- Table Container -->
    <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant shadow-sm overflow-hidden flex flex-col h-[calc(100vh-220px)] transition-all duration-300">
        <!-- Table Filters Toolbar -->
        <div class="p-4 border-b border-outline-variant bg-surface-container-low/50 flex flex-wrap gap-4 items-center">
            <div class="flex-1 min-w-[240px]">
                <div class="relative group">
                    <svg class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-secondary/50 group-focus-within:text-primary transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <input class="w-full h-10 bg-white dark:bg-slate-900 border border-outline-variant rounded-xl text-[13px] pl-10 focus:ring-4 focus:ring-primary/10 focus:border-primary transition-all text-on-surface placeholder:text-secondary/40" placeholder="Filter by name, email, or role..." type="text"/>
                </div>
            </div>
            <div class="flex gap-2 items-center">
                <select class="h-10 bg-white dark:bg-slate-900 border border-outline-variant rounded-xl text-[13px] px-4 focus:ring-4 focus:ring-primary/10 focus:border-primary text-on-surface transition-all">
                    <option>All Statuses</option>
                    <option>Active</option>
                    <option>Pending</option>
                    <option>Inactive</option>
                </select>
                <select class="h-10 bg-white dark:bg-slate-900 border border-outline-variant rounded-xl text-[13px] px-4 focus:ring-4 focus:ring-primary/10 focus:border-primary text-on-surface transition-all">
                    <option>All Roles</option>
                    <option>Administrator</option>
                    <option>Editor</option>
                    <option>Viewer</option>
                </select>
                <button class="h-10 w-10 flex items-center justify-center bg-white dark:bg-slate-900 border border-outline-variant rounded-xl text-secondary hover:text-primary hover:border-primary transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Scrollable Table Area -->
        <div class="flex-1 overflow-auto custom-scrollbar">
            <table class="w-full border-collapse text-left">
                <thead class="sticky top-0 z-10 bg-surface-container-high/90 backdrop-blur-md shadow-sm">
                    <tr>
                        <th class="p-4 w-10">
                            <input class="rounded-md border-outline-variant text-primary focus:ring-primary/20 w-4 h-4" type="checkbox"/>
                        </th>
                        <th class="p-4 font-black text-[10px] text-secondary/70 uppercase tracking-[0.2em]">
                            <div class="flex items-center gap-1 cursor-pointer hover:text-on-surface transition-colors">
                                User
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 19.5v-15m0 0-6.75 6.75M12 4.5l6.75 6.75" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </th>
                        <th class="p-4 font-black text-[10px] text-secondary/70 uppercase tracking-[0.2em]">Role</th>
                        <th class="p-4 font-black text-[10px] text-secondary/70 uppercase tracking-[0.2em]">
                            <div class="flex items-center gap-1 cursor-pointer hover:text-on-surface transition-colors">
                                Last Active
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </th>
                        <th class="p-4 font-black text-[10px] text-secondary/70 uppercase tracking-[0.2em]">Status</th>
                        <th class="p-4 font-black text-[10px] text-secondary/70 uppercase tracking-[0.2em] text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/10">
                    @foreach([
                        ['name' => 'Sarah Jenkins', 'email' => 'sarah.j@adminos.io', 'role' => 'Administrator', 'active' => '2 mins ago', 'status' => 'Active', 'avatar' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDxvoKhJ-alYRCbtIHk7fyE6BVbHz-awd9xg-CSi1_9-dCud-aM3VrrIWkxalDnxCx4d0Vaqfrx045Kv6RQ5FyvzZ8Jt5P6gTxyf_SZCqKdAnOybBM1xXebwaaXzvRXniZ9z133gsj9Yr1IGmQhpSetpFCgyMDVciLSUiJ2rcpnMLPVzRs17Tl3nHOXh5_WHE-A2V6W8Sk15OX52tpyZkHoBvKKFbJMyk9r-WvrZeILKeBfBS3oGR7McodyKsQ2biGYVIdCe4u2R06n'],
                        ['name' => 'Marcus Thompson', 'email' => 'm.thompson@adminos.io', 'role' => 'Editor', 'active' => 'Yesterday, 4:12 PM', 'status' => 'Pending', 'avatar' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC1TRbLWVnVgvtxEhjEazOLg1s3-jRSm5stW9HVfLcfP26Gov2kFmBN5UYtbct84gDzxVQSfgxnr_Bwqyk6qxp3RamDvjTsLDbTSIwj88jHHteax5Vzn77u1BmE0A_MtQbTTteCWL9vSEw-z8gytbqMNJ0fErqnOMV-GFLs3M_pdMCQxg8iSVLojoTuXGXh1PqBrUDS2bxPO3HPJIfL5Ka8eXKZmtcRiyKOvx_0rIaRhcySFk8dvjcVwEQSrXes801EEHr8MHB-6yKO'],
                        ['name' => 'Laura Chen', 'email' => 'lchen@enterprise.com', 'role' => 'Viewer', 'active' => 'Oct 12, 2023', 'status' => 'Inactive', 'avatar' => null],
                        ['name' => 'David Miller', 'email' => 'david.m@adminos.io', 'role' => 'Administrator', 'active' => '5 mins ago', 'status' => 'Active', 'avatar' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBB01ThOyvkIte9R2sfU6hxVFJ_pIWD0-6-lhooLSJRRG4wnOfT9Ho7K1b2Zlf88QW0PeZE8h2MGMjMmGji5BdtpLUPiGarVYUK7dZEnCW-7DZpPAaZlGx48LW5CHEDWKmeSDnbidmrsBF0_xgAGcPis55lRYQ7AFSLtQFLyk-rg3luxQ7WLxDd7HgAuQNX17Dqyq_obPt_r1zMqplBrmxF2bg29xUDvdyBGDoYVVaeaEloiNs3bkKYa2N8O0cQhG0eT6-TrtNSj_Ny'],
                        ['name' => 'Elena Rodriguez', 'email' => 'e.rodriguez@adminos.io', 'role' => 'Editor', 'active' => 'Oct 20, 2023', 'status' => 'Active', 'avatar' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBROxZxoKHfA4s4fShEH0vsUe6eZCAZF91WZX_ZPkIzoqYZ29SKEnaDQeRE-LTEs0O0pyCBAq1D0XqoZn_-xB7qfmuhEYp1uGWwmFHKx4csqYgkFU1pxXL0xPasHqLoqz3rAALGZlPpf3T8qHMfgEEVnO29SyAxuzp3VOWP0_ZiAu14e7K_OT9Dem68aUtN-dA4WJ6ARsYAJZjXz5KK9Lmnp7G_OXh83WeVsY-tNBkRn2_eBw9NepjxgYccXXtQRoGb9Z8ybLb9jW5n']
                    ] as $user)
                    <tr class="hover:bg-surface-container-low transition-colors group">
                        <td class="p-4">
                            <input class="rounded-md border-outline-variant text-primary focus:ring-primary/20 w-4 h-4" type="checkbox"/>
                        </td>
                        <td class="p-4">
                            <div class="flex items-center gap-3">
                                @if($user['avatar'])
                                    <img alt="Avatar" class="w-9 h-9 rounded-full object-cover border-2 border-outline-variant group-hover:border-primary transition-all" src="{{ $user['avatar'] }}"/>
                                @else
                                    <div class="w-9 h-9 rounded-full bg-surface-container-highest flex items-center justify-center text-primary font-black text-[12px] border-2 border-outline-variant group-hover:border-primary transition-all uppercase">
                                        {{ substr($user['name'], 0, 1) }}{{ substr(strrchr($user['name'], ' '), 1, 1) }}
                                    </div>
                                @endif
                                <div>
                                    <div class="font-bold text-[14px] text-on-surface group-hover:text-primary transition-colors">{{ $user['name'] }}</div>
                                    <div class="text-[11px] text-secondary/60">{{ $user['email'] }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-[13px] text-secondary font-medium">{{ $user['role'] }}</td>
                        <td class="p-4 text-[13px] text-secondary font-medium">{{ $user['active'] }}</td>
                        <td class="p-4">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-[10px] font-black tracking-widest uppercase
                                {{ $user['status'] === 'Active' ? 'bg-emerald-500/10 text-emerald-600' : 
                                   ($user['status'] === 'Pending' ? 'bg-amber-500/10 text-amber-600' : 
                                   'bg-surface-container-high text-secondary') }}">
                                {{ $user['status'] }}
                            </span>
                        </td>
                        <td class="p-4 text-right">
                            <div class="flex justify-end gap-1 opacity-0 group-hover:opacity-100 transition-all transform translate-x-2 group-hover:translate-x-0">
                                <button class="p-2 hover:bg-primary/10 rounded-xl transition-colors text-secondary hover:text-primary">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                                <button class="p-2 hover:bg-error/10 rounded-xl transition-colors text-secondary hover:text-error">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination Footer -->
        <div class="p-4 border-t border-outline-variant bg-surface-container-low flex items-center justify-between">
            <div class="text-[12px] text-secondary/60">
                Showing <span class="font-black text-on-surface">1</span> to <span class="font-black text-on-surface">5</span> of <span class="font-black text-on-surface">248</span> users
            </div>
            <div class="flex items-center gap-6">
                <div class="flex items-center gap-2">
                    <span class="text-[11px] font-bold text-secondary/50 uppercase tracking-wider">Rows:</span>
                    <select class="bg-transparent border-none text-[12px] font-black text-on-surface focus:ring-0 cursor-pointer">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                    </select>
                </div>
                <div class="flex items-center gap-2">
                    <button class="w-9 h-9 flex items-center justify-center rounded-xl border border-outline-variant bg-white dark:bg-slate-900 text-secondary hover:bg-primary/5 hover:text-primary transition-all disabled:opacity-20 shadow-sm" disabled="">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.75 19.5 8.25 12l7.5-7.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div class="flex gap-1.5">
                        <button class="w-8 h-8 flex items-center justify-center rounded-xl bg-primary text-on-primary text-[12px] font-black shadow-lg shadow-primary/20">1</button>
                        <button class="w-8 h-8 flex items-center justify-center rounded-xl bg-white dark:bg-slate-900 border border-outline-variant text-secondary hover:text-primary hover:border-primary transition-all text-[12px] font-bold">2</button>
                        <button class="w-8 h-8 flex items-center justify-center rounded-xl bg-white dark:bg-slate-900 border border-outline-variant text-secondary hover:text-primary hover:border-primary transition-all text-[12px] font-bold">3</button>
                    </div>
                    <button class="w-9 h-9 flex items-center justify-center rounded-xl border border-outline-variant bg-white dark:bg-slate-900 text-secondary hover:bg-primary/5 hover:text-primary transition-all shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="m8.25 4.5 7.5 7.5-7.5 7.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
