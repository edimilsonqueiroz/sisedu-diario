<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
        
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <x-livewire-alert::scripts />
    </head>
    <body class="w-screen h-screen overflow-x-hidden">
        {{ $slot }}
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('openLogout', () => ({
                    open: false,
        
                    toggle() {
                        const logout = document.getElementById('logout');

                        if(logout.classList.contains('hidden')){
                            logout.classList.remove('hidden');
                            logout.classList.add('flex');
                        }

                        this.open = ! this.open
                        
                    },
                }))
            })
        </script>
        
    </body>
</html>
