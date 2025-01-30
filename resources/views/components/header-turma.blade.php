<div class="w-full h-full overflow-hidden">
    <div x-data="{openSidebar: true}" class="w-full flex h-full">
        <div x-transition  :class="{'translate-x-0': !openSidebar}" class="w-64 bg-slate-600 h-full transform transition ease-in-out flex flex-col fixed left-0 top-0 bottom-0 max-h-full md:fixed z-30 duration-200 -translate-x-full md:-translate-x-0">
            <div class="w-full h-20 flex items-center justify-center text-gray-100 font-semibold">
                <x-icones.icone-school/>
                <h1 class="ml-2">SISEDU-DIÁRIO</h1>
            </div>
            
            <nav class="flex-1 bg-slate-500 py-5 w-full overflow-y-auto">
                    
                <ul  class="w-full px-3 text-gray-100 text-lg font-semibold">
                    <li class="hover:bg-gray-300 mt-2  flex items-center w-full @if($page == 'Dashboard') my-1 bg-gray-300 text-gray-700 @endif hover:text-gray-700 rounded-md p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>

                        <a class="w-full ml-1" href="{{route('dashboard')}}">Home</a>
                    </li>
                </ul>
            
                <div class="bg-slate-700 text-slate-200 pl-4 my-2 py-2 font-semibold">REGISTRO</div>
                <ul class="w-full px-3 text-gray-100 text-lg font-semibold">
                    
                    <li class="hover:bg-gray-300 w-full flex items-center @if($page == 'TurmaConteudo') my-1 bg-gray-300 text-gray-700 @endif  hover:text-gray-700 rounded-md p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                        </svg>

                        <a wire:navigate class="w-full ml-1" href="{{route('turma-conteudo', $turma->id)}}">Conteudo</a>
                    </li>
                    <li class="hover:bg-gray-300 w-full flex items-center @if($page == 'TurmaFrequencia') my-1 bg-gray-300 text-gray-700 @endif  hover:text-gray-700 rounded-md p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                        </svg>

                        <a wire:navigate class="w-full ml-1" href="{{route('turma-frequencia',$turma->id)}}">Frequencia</a>
                    </li>
                    <li class="hover:bg-gray-300 w-full flex items-center @if($page == 'TurmaNota') my-1 bg-gray-300 text-gray-700 @endif  hover:text-gray-700 rounded-md p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                        </svg>

                        <a wire:navigate class="w-full ml-1" href="{{route('turma-nota',$turma->id)}}">Notas</a>
                    </li>
                </ul>
                <div class="bg-slate-700 text-slate-200 pl-4 my-2 py-2 font-semibold">ENTURMAÇÃO</div>
                <ul class="w-full px-3 text-gray-100 text-lg font-semibold">
                    <li class="hover:bg-gray-300 w-full flex items-center @if($page == 'TurmaProfessor') my-1 bg-gray-300 text-gray-700 @endif  hover:text-gray-700 rounded-md p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                        </svg>

                        <a wire:navigate class="w-full ml-1" href="{{route('turma-professor', $turma->id)}}">Professores</a>
                    </li>
                    <li class="hover:bg-gray-300 w-full flex items-center @if($page == 'TurmaAluno') my-1 bg-gray-300 text-gray-700 @endif   hover:text-gray-700 rounded-md p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                        </svg>

                        <a wire:navigate class="w-full ml-1" href="{{route('turma-aluno', $turma->id)}}">Aluno</a>
                    </li>
                </ul>
                <div class="bg-slate-700 text-slate-200 pl-4 mb-2 mt-2 py-2 font-semibold">CONFIGURAÇÕES DA CONTA</div>
                <ul class="w-full px-3 text-gray-100 text-lg font-semibold">
                    <li class="hover:bg-gray-300 w-full flex items-center @if($page == 'Profile') my-1 bg-gray-300 text-gray-700 @endif hover:text-gray-700 rounded-md p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>

                        <a wire:navigate class="w-full ml-1" href="{{route('profile')}}">Perfil</a>
                    </li>
                    <li class="hover:bg-gray-300 w-full flex items-center my-1 hover:text-gray-700 rounded-md p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                    </svg>

                        <a wire:navigate class="w-full ml-1" href="#">Mudar senha</a>
                    </li>
                </ul>
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
                    <li class="hover:bg-slate-300 w-full flex rounded-tl-md rounded-tr-md py-2 px-2"><i class="bi bi-person-fill mr-2"></i><a wire:navigate class="w-full" href="/dashboard/profile">Perfil</a></li>
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