<x-app-layout>
    <x-slot name="title">File Manager - AdminOS</x-slot>

    <!-- Header Section -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h2 class="font-display text-[24px] font-black tracking-tight text-on-surface transition-colors duration-300">File Manager</h2>
            <p class="text-[14px] text-secondary mt-1">Manage, upload, and organize your digital assets and documents.</p>
        </div>
        <div class="flex gap-2">
            <button class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-slate-900 border border-outline-variant text-[12px] font-black text-on-surface hover:bg-surface-container-low rounded-xl transition-all uppercase tracking-wider shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                New Folder
            </button>
            <button class="flex items-center gap-2 px-4 py-2 bg-primary text-on-primary text-[12px] font-black rounded-xl hover:opacity-90 transition-all uppercase tracking-wider shadow-lg shadow-primary/20">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                Upload File
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
        <!-- Folders Grid -->
        <div class="md:col-span-12">
            <h3 class="text-[11px] font-black uppercase tracking-widest text-secondary/50 mb-4 ml-1">Quick Access Folders</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                @foreach([
                    ['name' => 'Documents', 'count' => '1.2k files', 'color' => 'text-primary'],
                    ['name' => 'Project Assets', 'count' => '450 files', 'color' => 'text-amber-500'],
                    ['name' => 'Financials', 'count' => '82 files', 'color' => 'text-emerald-500'],
                    ['name' => 'Marketing', 'count' => '210 files', 'color' => 'text-indigo-500'],
                    ['name' => 'Branding', 'count' => '12 files', 'color' => 'text-error'],
                    ['name' => 'Archives', 'count' => '3.4k files', 'color' => 'text-secondary']
                ] as $folder)
                <div class="bg-surface-container-lowest p-5 rounded-3xl border border-outline-variant shadow-sm hover:border-primary/30 hover:bg-surface-container-low transition-all group cursor-pointer">
                    <div class="w-12 h-12 mb-4 rounded-2xl bg-surface-container-high/50 flex items-center justify-center {{ $folder['color'] }} group-hover:bg-white dark:group-hover:bg-slate-900 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-18.75 0a2.25 2.25 0 0 0-2.25 2.25v4.5A2.25 2.25 0 0 0 4.5 21.75h15a2.25 2.25 0 0 0 2.25-2.25v-4.5a2.25 2.25 0 0 0-2.25-2.25m-18.75 0V7.5A2.25 2.25 0 0 1 4.5 5.25h15A2.25 2.25 0 0 1 21.75 7.5v5.25" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="text-[14px] font-black text-on-surface truncate">{{ $folder['name'] }}</div>
                    <div class="text-[11px] text-secondary/50 font-bold uppercase tracking-wider">{{ $folder['count'] }}</div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Recent Files Table -->
        <div class="md:col-span-12 bg-surface-container-lowest rounded-3xl border border-outline-variant shadow-sm overflow-hidden flex flex-col transition-all duration-300">
            <div class="p-6 border-b border-outline-variant flex items-center justify-between">
                <h3 class="font-black text-[15px] text-on-surface uppercase tracking-tight">Recent Files</h3>
                <div class="flex gap-2">
                    <button class="p-2 hover:bg-surface-container-low rounded-xl transition-all text-secondary/40 hover:text-on-surface">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                    <button class="p-2 hover:bg-surface-container-low rounded-xl transition-all text-secondary/40 hover:text-on-surface">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-surface-container-low/30 border-b border-outline-variant/10">
                        <tr>
                            <th class="p-4 font-black text-[10px] text-secondary/60 uppercase tracking-widest">File Name</th>
                            <th class="p-4 font-black text-[10px] text-secondary/60 uppercase tracking-widest">Shared With</th>
                            <th class="p-4 font-black text-[10px] text-secondary/60 uppercase tracking-widest">Size</th>
                            <th class="p-4 font-black text-[10px] text-secondary/60 uppercase tracking-widest">Last Modified</th>
                            <th class="p-4 font-black text-[10px] text-secondary/60 uppercase tracking-widest text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant/5">
                        @foreach([
                            ['name' => 'Quarterly_Report_Q3.pdf', 'type' => 'PDF', 'size' => '2.4 MB', 'date' => 'Oct 24, 2023', 'color' => 'text-error'],
                            ['name' => 'Project_Hero_Image.jpg', 'type' => 'Image', 'size' => '1.1 MB', 'date' => 'Oct 22, 2023', 'color' => 'text-primary'],
                            ['name' => 'User_Research_Data.csv', 'type' => 'Sheet', 'size' => '84 KB', 'date' => 'Oct 20, 2023', 'color' => 'text-emerald-500'],
                            ['name' => 'Architecture_v2.fig', 'type' => 'Figma', 'size' => '15.2 MB', 'date' => 'Oct 18, 2023', 'color' => 'text-indigo-500'],
                            ['name' => 'Contract_Signed.docx', 'type' => 'Doc', 'size' => '120 KB', 'date' => 'Yesterday', 'color' => 'text-primary']
                        ] as $file)
                        <tr class="group hover:bg-surface-container-low/50 transition-all">
                            <td class="p-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 flex-shrink-0 rounded-xl bg-surface-container-high/50 flex items-center justify-center {{ $file['color'] }} group-hover:bg-white dark:group-hover:bg-slate-900 transition-all">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </div>
                                    <div>
                                        <div class="text-[14px] font-black text-on-surface group-hover:text-primary transition-colors">{{ $file['name'] }}</div>
                                        <div class="text-[11px] text-secondary/40 font-bold uppercase tracking-wider">{{ $file['type'] }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="p-4">
                                <div class="flex -space-x-2">
                                    <img alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-slate-950" src="https://i.pravatar.cc/150?u=1"/>
                                    <img alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-slate-950" src="https://i.pravatar.cc/150?u=2"/>
                                    <div class="w-6 h-6 rounded-full border-2 border-white dark:border-slate-950 bg-surface-container-high text-[8px] font-black flex items-center justify-center">+4</div>
                                </div>
                            </td>
                            <td class="p-4 text-[13px] font-bold text-secondary/70">{{ $file['size'] }}</td>
                            <td class="p-4 text-[12px] font-medium text-secondary/50">{{ $file['date'] }}</td>
                            <td class="p-4 text-right">
                                <button class="p-2 hover:bg-surface-container-high rounded-xl transition-all text-secondary/30 hover:text-on-surface">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
