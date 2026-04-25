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

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
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
</body>
</html>
