<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'AdminOS - Premium Dashboard' }}</title>

    <!-- Dark Mode Persistence Script -->
    <script>
        (function() {
            const darkMode = localStorage.getItem('darkMode');
            if (darkMode === 'true' || (!(darkMode) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
                document.documentElement.style.colorScheme = 'dark';
            } else {
                document.documentElement.classList.remove('dark');
                document.documentElement.style.colorScheme = 'light';
            }
        })();
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }
    </style>
</head>
<body x-data="{ 
          darkMode: localStorage.getItem('darkMode') === 'true',
          sidebarOpen: true,
          toggleDarkMode() {
              this.darkMode = !this.darkMode;
              localStorage.setItem('darkMode', this.darkMode);
              this.updateTheme();
          },
          updateTheme() {
              if (this.darkMode) {
                  document.documentElement.classList.add('dark');
                  document.documentElement.style.colorScheme = 'dark';
              } else {
                  document.documentElement.classList.remove('dark');
                  document.documentElement.style.colorScheme = 'light';
              }
          }
      }"
      x-init="updateTheme()"
      x-cloak
      class="bg-background text-on-surface antialiased transition-colors duration-300">
    <div class="flex min-h-screen">
        <x-sidebar />

        <div class="flex-1 flex flex-col transition-all duration-300" :class="{ 'ml-64': sidebarOpen, 'ml-0': !sidebarOpen }">
            <x-topbar />

            <main class="p-6">
                {{ $slot }}
            </main>
        </div>
    </div>

    <!-- Layout Specific Components -->
    <button @click="toggleDarkMode()" 
            class="fixed bottom-24 right-8 w-14 h-14 bg-surface-container-high text-primary rounded-full shadow-lg flex items-center justify-center hover:scale-105 active:scale-95 transition-transform z-50 border border-outline-variant">
        <span class="material-symbols-outlined text-[24px]" x-text="darkMode ? 'light_mode' : 'dark_mode'"></span>
    </button>

    <button class="fixed bottom-8 right-8 w-14 h-14 bg-primary text-on-primary rounded-full shadow-lg flex items-center justify-center hover:scale-105 active:scale-95 transition-transform z-50">
        <span class="material-symbols-outlined text-[24px]">add</span>
    </button>
</body>
</html>
