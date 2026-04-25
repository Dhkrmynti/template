<header class="sticky top-0 z-40 w-full flex items-center justify-between px-6 h-14 bg-surface-container-lowest border-b border-outline-variant shadow-sm transition-colors duration-300">
    <div class="flex items-center flex-1 gap-4">
        <button @click="sidebarOpen = !sidebarOpen" class="w-8 h-8 flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors cursor-pointer">
            <span class="material-symbols-outlined text-[20px]" x-text="sidebarOpen ? 'menu_open' : 'menu'"></span>
        </button>
        <div class="relative w-full max-w-md">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-sm">search</span>
            <input class="w-full pl-10 pr-4 py-1.5 bg-surface-container-high border-none rounded text-sm focus:ring-1 focus:ring-primary transition-all text-on-surface" placeholder="Search data, reports, or users..." type="text"/>
        </div>
    </div>
    <div class="flex items-center gap-4">
        <div class="flex items-center gap-2">
            <button @click="toggleDarkMode()" class="w-8 h-8 flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors cursor-pointer">
                <span class="material-symbols-outlined text-[20px]" x-text="darkMode ? 'light_mode' : 'dark_mode'"></span>
            </button>
            <button class="w-8 h-8 flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors cursor-pointer">
                <span class="material-symbols-outlined text-[20px]">notifications</span>
            </button>
        </div>
        <div class="h-6 w-px bg-outline-variant mx-1"></div>
        <div class="flex items-center gap-3 cursor-pointer">
            <span class="text-sm font-medium text-on-surface">Alex Rivers</span>
            <img alt="User profile photo" class="w-8 h-8 rounded-full border border-outline-variant object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDh-euMwu-jP_Tu9tp8CktGP19S8W5HqWxc27MZuscAGiIZGbbFkZwjrU9bDJ3gAhxtq5sn7I1NbfbWqWhesHF6QzzSuxhRQweLpTcP2PqTXk917rnahzqxjumYmylomw-mp_T0h4a-zQCRSJotHjIwrdQz2hdaCqC6uo1ScBqj6yDYTrvTIAf6oJhPx10KIIyG5v-fcrutJiqeyNHpwPYcH3hrvzgrcZm90K-ynRJyuiTlqL8kIy3ce7Q_jaWY0sA9odLqacT3rV7Q"/>
        </div>
    </div>
</header>
