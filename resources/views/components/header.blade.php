<div class="w-full h-full">
    <div x-data="{openSidebar: true}" class="w-full flex h-full">
        <div x-transition  :class="{'translate-x-0': !openSidebar}" class="w-64 bg-slate-600 h-full transform transition ease-in-out flex flex-col fixed left-0 top-0 bottom-0 max-h-full md:fixed z-30 duration-200 -translate-x-full md:-translate-x-0">
            <div class="w-full h-20 flex items-center justify-center text-gray-100 font-semibold">
                <x-icones.icone-school/>
                <h1 class="ml-2">SISEDU-DIÁRIO</h1>
            </div>
            <nav class="flex-1 bg-slate-500 py-5 w-full overflow-y-auto">
                <ul class="w-full px-5 text-gray-100 text-lg font-semibold">
                    <li class="hover:bg-gray-300  flex items-center w-full @if($page == 'Dashboard') my-1 bg-gray-300 text-gray-700 @endif hover:text-gray-700 rounded-md p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>

                        <a wire:navigate class="w-full ml-1" href="/dashboard">Home</a>
                    </li>
                    <li class="hover:bg-gray-300 w-full flex items-center @if($page == 'User') my-1 bg-gray-300 text-gray-700 @endif hover:text-gray-700 rounded-md p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>

                        <a wire:navigate class="w-full ml-1" href="/dashboard/users">Usuários</a>
                    </li>
                    <li class="hover:bg-gray-300 flex items-center w-full hover:text-gray-700 rounded-md p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                        </svg>

                        <a class="w-full ml-1" href="/dashboard/equipments">Equipamentos</a>
                    </li>
                    <li class="hover:bg-gray-300 w-full flex items-center hover:text-gray-700 rounded-md p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                        </svg>

                        <a class="w-full ml-1" href="/dashboard/maintenances">Manutenções</a>
                    </li>
                </ul>
            </nav>
            <div x-data="{openModal: false}" class="w-full h-20 flex items-center font-semibold text-gray-100 text-lg justify-center">
                <button class="md:hidden w-full flex items-center justify-center" x-on:click="openSidebar = true">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
                    </svg>
                </button>
                <button @click="openModal = true" class="hidden w-full md:flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                    </svg>
                </button>

                <div x-show="openModal"  class="fixed shadow left-64 ml-2 bottom-2 hidden md:flex z-20 rounded-md w-64 h-28 items-center font-normal flex-col justify-center text-gray-600 bg-slate-200" @click.outside="openModal = false">
                    <div class="h-5"></div>
                    <div class="text-center w-full py-2">
                        Deseja sair do sistema?
                    </div>
                    <div class="flex items-center justify-end w-full px-2">
                        <button class="mr-2 bg-slate-500 rounded-md px-3 text-gray-100" @click="openModal = false">Fechar</button>
                        <a href="/dashboard/logout">Ok</a>
                    </div>
                </div>

            </div>
        </div>
        <div x-data="openLogout" class="flex-1 h-full flex flex-col md:ml-64">
            <header class="bg-gray-50 h-16 md:px-3 px-2 shadow flex items-center justify-between">
                <button x-on:click="openSidebar = false">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                    </svg>
                </button>
                <button @click="toggle" class="flex">
                    <span class="mr-1">{{ auth()->user()->name }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
            </header>
            <div id="logout" x-show="open"  @click.outside="open = false" class="fixed hidden rounded-md top-12 right-16 w-40 h-20 z-20 bg-slate-200">
               <ul class="h-full w-full">
                    <li class="hover:bg-slate-300 w-full flex rounded-tl-md rounded-tr-md py-2 px-2"><i class="bi bi-person-fill mr-2"></i><a class="w-full" href="/dashboard/profile">Perfil</a></li>
                    <li class="hover:bg-slate-300 w-full flex rounded-bl-md rounded-br-md py-2 px-2"><a class="w-full" href="/dashboard/logout"><i class="bi bi-box-arrow-left mr-2"></i>Sair do Sistema</a></li>
               </ul>
            </div>
            <div class="bg-gray-300 w-full h-full p-3 py-5  flex flex-1 overflow-y-auto">