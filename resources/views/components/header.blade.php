<div class="w-full h-full overflow-hidden">
    <div x-data="{openSidebar: true}" class="w-full flex h-full">
        <div x-transition  :class="{'translate-x-0': !openSidebar}" class="w-64 bg-slate-600 h-full transform transition ease-in-out flex flex-col fixed left-0 top-0 bottom-0 max-h-full md:fixed z-30 duration-200 -translate-x-full md:-translate-x-0">
            <div class="w-full h-20 flex items-center justify-center text-gray-100 font-semibold">
                <x-icones.icone-school/>
                <h1 class="ml-2">SISEDU-DIÁRIO</h1>
            </div>
            
            <nav class="flex-1 bg-slate-500 py-5 w-full overflow-y-auto">
                    
                    <ul  class="w-full px-5 text-gray-100 text-lg font-semibold">
                        <li class="hover:bg-gray-300 mt-2  flex items-center w-full @if($page == 'Dashboard') my-1 bg-gray-300 text-gray-700 @endif hover:text-gray-700 rounded-md p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>

                            <a class="w-full ml-1" href="{{route('dashboard')}}">Home</a>
                        </li>
                    </ul>
                    <div class="bg-slate-700 text-slate-200 pl-4 mt-5 mb-2 py-2 font-semibold">CADASTRO</div>
                    <ul class="w-full px-5 text-gray-100 text-lg font-semibold">
                        <li class="hover:bg-gray-300 w-full flex items-center @if($page == 'User') my-1 bg-gray-300 text-gray-700 @endif hover:text-gray-700 rounded-md p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>

                            <a wire:navigate class="w-full ml-1" href="{{route('users')}}">Usuários</a>
                        </li>
                        <li class="hover:bg-gray-300 w-full flex items-center @if($page == 'Schools') my-1 bg-gray-300 text-gray-700 @endif hover:text-gray-700 rounded-md p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                            </svg>

                            <a wire:navigate class="w-full ml-1" href="{{route('escolas')}}">Escolas</a>
                        </li>
                        <li class="hover:bg-gray-300 flex items-center @if($page == 'Classes') my-1 bg-gray-300 text-gray-700 @endif w-full hover:text-gray-700 rounded-md p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125Z" />
                            </svg>

                            <a wire:navigate class="w-full ml-1" href="{{route('turmas')}}">Turmas</a>
                        </li>
                        <li class="hover:bg-gray-300 flex items-center @if($page == 'Student') my-1 bg-gray-300 text-gray-700 @endif w-full hover:text-gray-700 rounded-md p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
                            </svg>

                            <a wire:navigate class="w-full ml-1" href="{{route('matriculas')}}">Matrículas</a>
                        </li>
                        <li class="hover:bg-gray-300 flex items-center @if($page == 'Disciplines') my-1 bg-gray-300 text-gray-700 @endif w-full hover:text-gray-700 rounded-md p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                            </svg>

                            <a wire:navigate class="w-full ml-1" href="{{route('disciplinas')}}">Disciplinas</a>
                        </li>
                        
                    </ul>
                <div class="bg-slate-700 text-slate-200 pl-4 my-2 py-2 font-semibold">MOVIMENTO</div>
                <ul class="w-full px-5 text-gray-100 text-lg font-semibold">
                    <li class="hover:bg-gray-300 w-full flex items-center @if($page == 'TurmaAluno') my-1 bg-gray-300 text-gray-700 @endif hover:text-gray-700 rounded-md p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                        </svg>

                        <a wire:navigate class="w-full ml-1" href="{{route('turma-aluno')}}">Turma X Aluno</a>
                    </li>
                    <li class="hover:bg-gray-300 w-full flex items-center @if($page == 'TurmaProfessor') my-1 bg-gray-300 text-gray-700 @endif hover:text-gray-700 rounded-md p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                        </svg>

                        <a wire:navigate class="w-full ml-1" href="{{route('turma-professor')}}">Turma X Professor</a>
                    </li>
                    <li class="hover:bg-gray-300 w-full flex items-center @if($page == 'TurmaDisciplina') my-1 bg-gray-300 text-gray-700 @endif hover:text-gray-700 rounded-md p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                        </svg>
                        
                        <a wire:navigate class="w-full ml-1" href="{{route('turma-disciplina')}}">Turma X Disciplina</a>
                    </li>
                    <li class="hover:bg-gray-300 w-full flex items-center @if($page == 'Diario') my-1 bg-gray-300 text-gray-700 @endif hover:text-gray-700 rounded-md p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                        </svg>

                        <a wire:navigate class="w-full ml-1" href="{{route('diarios')}}">Diário</a>
                    </li>
                </ul>
                <div class="bg-slate-700 text-slate-200 pl-4 mt-2 py-2 font-semibold">CONFIGURAÇÕES DA CONTA</div>
            </nav>
            
            <div class="w-full h-20 flex items-center font-semibold text-gray-100 text-lg justify-center">
                <button class="md:hidden w-full flex items-center justify-center" x-on:click="openSidebar = true">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
                    </svg>
                </button>
                <button x-data x-on:click="$dispatch('open-modal', { name: 'confirmation logout' })" class="hidden w-full md:flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                    </svg>
                </button>
            </div>
        </div>
        <div x-data="openLogout" class="flex-1 h-full flex flex-col md:ml-64 overflow-hidden">
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
            <div id="logout" x-show="open"  @click.outside="open = false" class="fixed hidden shadow-md rounded-md top-12 right-16 w-40 h-20 z-20 bg-slate-200">
               <ul class="h-full w-full">
                    <li class="hover:bg-slate-300 w-full flex rounded-tl-md rounded-tr-md py-2 px-2"><i class="bi bi-person-fill mr-2"></i><a class="w-full" href="/dashboard/profile">Perfil</a></li>
                    <li class="hover:bg-slate-300 w-full flex rounded-bl-md rounded-br-md py-2 px-2"><a class="w-full" href="/dashboard/logout"><i class="bi bi-box-arrow-left mr-2"></i>Sair do Sistema</a></li>
               </ul>
            </div>

                <x-modal.confirmation name="confirmation logout" title="Confirmação">
                    <x-slot:body>
                        <span class="text-lg">Deseja realmente sair dos sistema?</span>
                    </x-slot>
                    <x-slot:footer>
                        <button x-data x-on:click="show = false" class="mx-2 border-2 rounded shadow px-2 border-slate-400 bg-slate-400"><i class="bi bi-x-lg"></i> Fechar</button>
                        <a wire:navigate href="{{route('logout')}}" class="mx-2 border-2 border-teal-500 px-2 bg-teal-500 rounded shadow"><i class="bi bi-check2-all"></i> Sim</a>
                    </x-slot>
                </x-modal.confirmation>

            <div class="w-full h-full flex flex-1 overflow-hidden">