<x-app-layout>
    <x-slot name="title">Settings - AdminOS</x-slot>

    <!-- Header Section -->
    <div class="mb-8">
        <h2 class="font-display text-[24px] font-black tracking-tight text-on-surface transition-colors duration-300">Settings</h2>
        <p class="text-[14px] text-secondary mt-1">Manage your account preferences and system configurations.</p>
    </div>

    <div class="max-w-4xl mx-auto pb-10">
        <!-- Settings Bento Layout -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <!-- Profile Section -->
            <section class="md:col-span-8 bg-surface-container-lowest border border-outline-variant rounded-2xl p-6 shadow-sm transition-all duration-300">
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-[17px] text-on-surface tracking-tight">Profile Information</h3>
                    </div>
                    <button class="px-4 py-1.5 bg-primary/10 text-primary font-bold text-[11px] rounded-lg uppercase tracking-widest hover:bg-primary/20 transition-all">Edit</button>
                </div>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="font-black text-[10px] text-secondary/60 uppercase tracking-[0.15em] block ml-1">Full Name</label>
                            <input class="w-full h-11 bg-surface-container-low border border-outline-variant focus:ring-4 focus:ring-primary/10 focus:border-primary rounded-xl px-4 font-medium text-[14px] text-on-surface transition-all" type="text" value="Alexander Hamilton"/>
                        </div>
                        <div class="space-y-2">
                            <label class="font-black text-[10px] text-secondary/60 uppercase tracking-[0.15em] block ml-1">Job Title</label>
                            <input class="w-full h-11 bg-surface-container-low border border-outline-variant focus:ring-4 focus:ring-primary/10 focus:border-primary rounded-xl px-4 font-medium text-[14px] text-on-surface transition-all" type="text" value="Senior Systems Administrator"/>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="font-black text-[10px] text-secondary/60 uppercase tracking-[0.15em] block ml-1">Email Address</label>
                        <input class="w-full h-11 bg-surface-container-low border border-outline-variant focus:ring-4 focus:ring-primary/10 focus:border-primary rounded-xl px-4 font-medium text-[14px] text-on-surface transition-all" type="email" value="alexander.h@adminos.io"/>
                    </div>
                    <div class="space-y-2">
                        <label class="font-black text-[10px] text-secondary/60 uppercase tracking-[0.15em] block ml-1">Bio</label>
                        <textarea class="w-full bg-surface-container-low border border-outline-variant focus:ring-4 focus:ring-primary/10 focus:border-primary rounded-xl py-3 px-4 font-medium text-[14px] text-on-surface transition-all resize-none" rows="3">Managing core infrastructure and cloud resources for the Enterprise division.</textarea>
                    </div>
                </form>
            </section>

            <!-- Avatar Card -->
            <section class="md:col-span-4 bg-surface-container-lowest border border-outline-variant rounded-2xl p-6 shadow-sm flex flex-col items-center justify-center text-center transition-all duration-300">
                <div class="relative group cursor-pointer mb-6">
                    <img alt="Profile image upload" class="w-28 h-28 rounded-full border-4 border-surface-container-highest shadow-xl object-cover transition-transform group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCv4tiXKitDnyXljCu3ZDz7EeFo-RV_hEAYSUNVIMmRt4KaVbeuHrkHDoQYsikpIzH5RYjrgc787JQnY-i0YvKc10noRY8gPjT5sAskg_AjY01W02V_5u3CHG7b7xG-hAwBQhZkLiqCfc1KH7L1jA1uzExUyV5QmfpT-1KBft1tzd5qGfUYvDlY9wS2WxCa4qz8h_O272ZZlJHzGGskYT7drbCPcuaM99F3tvPQHI7n8HnqVL2vQ4SOg4SiFZIXusM1PJlK2QONEia_"/>
                    <div class="absolute inset-0 bg-black/40 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </div>
                <h4 class="font-bold text-[17px] text-on-surface mb-1">Your Photo</h4>
                <p class="text-[11px] text-secondary/60 mb-6">PNG or JPG, max 5MB</p>
                <button class="w-full py-2.5 text-[12px] font-bold text-primary border border-primary/20 bg-primary/5 hover:bg-primary/10 rounded-xl transition-all">Update Avatar</button>
            </section>

            <!-- Account & Security Section -->
            <section class="md:col-span-12 bg-surface-container-lowest border border-outline-variant rounded-2xl p-6 shadow-sm transition-all duration-300">
                <div class="flex items-center gap-3 mb-8 border-b border-outline-variant/30 pb-6">
                    <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-[17px] text-on-surface tracking-tight">Account & Security</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Password -->
                    <div class="space-y-4">
                        <h4 class="font-black text-[10px] text-on-surface uppercase tracking-[0.15em]">Change Password</h4>
                        <p class="text-[12px] text-secondary/60 leading-relaxed">Update your account password regularly to maintain security.</p>
                        <button class="w-full py-2.5 text-[12px] font-bold text-on-surface-variant bg-surface-container-low border border-outline-variant/50 rounded-xl hover:bg-surface-container-high transition-all">Reset Password</button>
                    </div>
                    <!-- 2FA -->
                    <div class="space-y-4">
                        <h4 class="font-black text-[10px] text-on-surface uppercase tracking-[0.15em]">Two-Factor Auth</h4>
                        <p class="text-[12px] text-secondary/60 leading-relaxed">Current Status: <span class="text-error font-black">Disabled</span></p>
                        <button class="w-full py-2.5 text-[12px] font-bold bg-primary text-on-primary rounded-xl hover:opacity-90 shadow-lg shadow-primary/20 transition-all">Enable 2FA</button>
                    </div>
                    <!-- Login History -->
                    <div class="space-y-4">
                        <h4 class="font-black text-[10px] text-on-surface uppercase tracking-[0.15em]">Session Manager</h4>
                        <p class="text-[12px] text-secondary/60 leading-relaxed">Currently active sessions across 3 devices.</p>
                        <button class="w-full py-2.5 text-[12px] font-bold text-on-surface-variant bg-surface-container-low border border-outline-variant/50 rounded-xl hover:bg-surface-container-high transition-all">View Sessions</button>
                    </div>
                </div>
            </section>

            <!-- Notification Section -->
            <section class="md:col-span-7 bg-surface-container-lowest border border-outline-variant rounded-2xl p-6 shadow-sm transition-all duration-300">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-[17px] text-on-surface tracking-tight">Notifications</h3>
                </div>
                <div class="space-y-6">
                    <div class="flex items-center justify-between p-3 rounded-xl hover:bg-surface-container-low transition-colors">
                        <div>
                            <p class="text-[14px] font-bold text-on-surface">Security Alerts</p>
                            <p class="text-[12px] text-secondary/60">Get notified of suspicious login attempts.</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input checked="" class="sr-only peer" type="checkbox"/>
                            <div class="w-11 h-6 bg-outline-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary transition-all"></div>
                        </label>
                    </div>
                    <div class="flex items-center justify-between p-3 rounded-xl hover:bg-surface-container-low transition-colors">
                        <div>
                            <p class="text-[14px] font-bold text-on-surface">Weekly Reports</p>
                            <p class="text-[12px] text-secondary/60">Receive analytical digests every Monday.</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input checked="" class="sr-only peer" type="checkbox"/>
                            <div class="w-11 h-6 bg-outline-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary transition-all"></div>
                        </label>
                    </div>
                    <div class="flex items-center justify-between p-3 rounded-xl hover:bg-surface-container-low transition-colors">
                        <div>
                            <p class="text-[14px] font-bold text-on-surface">Project Updates</p>
                            <p class="text-[12px] text-secondary/60">Activity notifications for joined projects.</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input class="sr-only peer" type="checkbox"/>
                            <div class="w-11 h-6 bg-outline-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary transition-all"></div>
                        </label>
                    </div>
                </div>
            </section>

            <!-- Preferences Section -->
            <section class="md:col-span-5 bg-surface-container-lowest border border-outline-variant rounded-2xl p-6 shadow-sm transition-all duration-300">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 12H13.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-[17px] text-on-surface tracking-tight">Preferences</h3>
                </div>
                <div class="space-y-6">
                    <div class="space-y-2">
                        <label class="font-black text-[10px] text-secondary/60 uppercase tracking-[0.15em] block ml-1">Default View</label>
                        <select class="w-full h-11 bg-surface-container-low border border-outline-variant focus:ring-4 focus:ring-primary/10 focus:border-primary rounded-xl px-4 font-medium text-[14px] text-on-surface transition-all">
                            <option>Dashboard Overview</option>
                            <option>Project Analytics</option>
                            <option>User Directory</option>
                        </select>
                    </div>
                    <div class="space-y-2">
                        <label class="font-black text-[10px] text-secondary/60 uppercase tracking-[0.15em] block ml-1">Time Zone</label>
                        <select class="w-full h-11 bg-surface-container-low border border-outline-variant focus:ring-4 focus:ring-primary/10 focus:border-primary rounded-xl px-4 font-medium text-[14px] text-on-surface transition-all">
                            <option>(UTC-05:00) Eastern Time</option>
                            <option>(UTC-08:00) Pacific Time</option>
                            <option>(UTC+00:00) Greenwich Mean Time</option>
                        </select>
                    </div>
                    <div class="space-y-2">
                        <label class="font-black text-[10px] text-secondary/60 uppercase tracking-[0.15em] block ml-1">Interface Language</label>
                        <select class="w-full h-11 bg-surface-container-low border border-outline-variant focus:ring-4 focus:ring-primary/10 focus:border-primary rounded-xl px-4 font-medium text-[14px] text-on-surface transition-all">
                            <option>English (United States)</option>
                            <option>German (Deutsch)</option>
                            <option>Spanish (Español)</option>
                        </select>
                    </div>
                </div>
            </section>

            <!-- Footer Actions -->
            <div class="md:col-span-12 flex justify-end gap-3 py-6 border-t border-outline-variant/30 mt-6">
                <button class="px-8 py-2.5 font-bold text-[12px] text-secondary uppercase tracking-widest border border-outline-variant rounded-xl hover:bg-surface-container-low transition-all">Discard Changes</button>
                <button class="px-8 py-2.5 font-bold text-[12px] bg-primary text-on-primary rounded-xl hover:opacity-90 shadow-lg shadow-primary/20 uppercase tracking-widest transition-all">Save Settings</button>
            </div>
        </div>
    </div>
</x-app-layout>
