<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <x-livewire-alert::scripts />
    </head>
    <body class="w-screen h-screen overflow-hidden bg-slate-200">
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
        <script>
            function mostrarSenha(){
                var inputPass = document.getElementById('senha');
                var btnShowPass = document.getElementById('btn-senha');

                if(inputPass.type === 'password'){
                    inputPass.setAttribute('type','text');
                    btnShowPass.classList.replace('bi-eye','bi-eye-slash');
                }else{
                    inputPass.setAttribute('type','password');
                    btnShowPass.classList.replace('bi-eye-slash','bi-eye');
                }
            }
        </script> 
        
    </body>
</html>
