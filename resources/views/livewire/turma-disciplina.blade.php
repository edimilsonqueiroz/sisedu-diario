<div class="w-full h-full overflow-x-hidden">
@include('components/header-turma')
    <div class="p-3 w-full overflow-y-auto">
        <div class="bg-white grid md:grid-cols-3 grid-cols-1 gap-4 p-2 rounded-md shadow-md">
            <input placeholder="Pesquisa por descrição" class="col-span-1 py-2 outline-0 border-2 rounded-md border-gray-300 px-2" type="text"/>
            <input class="col-span-1 py-2 outline-0 border-2 rounded-md border-gray-300 px-2" type="date"/>
            <div class="col-span-1 flex justify-center items-center">
                <button x-data x-on:click="$dispatch('open-modal', { name: 'cadastro-disciplina' })" class="bg-teal-600 text-white py-2 px-3 rounded-md shadow-md border-0"><i class="bi bi-plus-circle"></i> Adicionar disciplina</button>
            </div>
        </div>
        <div class="bg-white h-96 mt-2 rounded-md shadow-md">

            <div class="flex items-center justify-between flex-col h-full w-full">
                    <div class="bg-slate-100 px-3 rounded-tl-md rounded-tr-md flex items-center h-10 w-full">
                        <h1 class="text-xl">Disciplinas da turma</h1>
                    </div>
                    <div class="flex-1 w-full overflow-y-auto p-2">
                        <div class="bg-slate-200 my-1 flex items-center justify-between rounded-md p-2">
                            <div class="flex-1 flex-col">
                                <h3 class="uppercase font-semibold">Disciplina 1</h3>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 px-3 py-4 rounded-bl-md rounded-br-md flex items-center justify-end h-10 w-full">
                        
                    </div>
            </div>
        </div>
    </div>

@include('components/footer')

    <form>
        <x-modal.modal-lg name="cadastro-disciplina" title="Cadastrar Disciplina">
            <x-slot:body>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-2">
                    <div class="flex col-span-2 flex-col p-1">
                        <label for="disciplina">Disciplina</label>
                        <input id="disciplina" type="text" class="border-2 p-2 outline-0 border-gray-200 rounded-md">
                    </div>
                    <div class="flex col-span-2 flex-col p-1">
                        <fieldset class="border-2 overflow-auto px-2 border-gray-300 w-full rounded-md">
                            <legend class="px-2 font-semibold">Dias da semana</legend>
                            <div class="grid grid-cols-2 p-2 md:grid-cols-3 gap-1">
                                <div class="flex col-span-1 text-left">
                                    <input type="checkbox" id="segunda-feira" class="mr-2">
                                    <label for="segunda-feira">Segunda-feira</label>
                                </div>
                                <div class="flex col-span-1 text-left">
                                    <input type="checkbox" id="terca-feira" class="mr-2">
                                    <label for="terca-feira">Terça-feira</label>
                                </div>
                                <div class="flex col-span-1">
                                    <input type="checkbox" id="quarta-feira" class="mr-2">
                                    <label for="quarta-feira">Quarta-feira</label>
                                </div>
                                <div class="flex col-span-1">
                                    <input type="checkbox" id="quinta-feira" class="mr-2">
                                    <label for="quinta-feira">Quinta-feira</label>
                                </div>
                                <div class="flex col-span-1">
                                    <input type="checkbox" id="sexta-feira" class="mr-2">
                                    <label for="sexta-feira">Sexta-feira</label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="flex col-span-2 flex-col p-1">
                        <fieldset class="border-2 p-3 border-gray-300 w-full rounded-md">
                            <legend class="px-2 font-semibold">Selecione um professor(a)</legend>
                            <input id="search_teacher" placeholder="Pesquisar pelo nome do professor(a)" type="text" class="border-2 mb-2 px-2 py-1 w-full outline-0 border-gray-200 rounded-md">
                            <div class="overflow-auto p-2 h-40">
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-1">
                                    <div class="bg-slate-200  flex col-span-3 rounded-md py-1 px-2">
                                        <input name="teacher[]" type="radio">
                                        <div class="w-full ml-2">
                                            <p class="uppercase font-semibold">Professor 1</p>
                                        </div>
                                    </div>
                                    <div class="bg-slate-200  flex col-span-3 rounded-md py-1 px-2">
                                        <input name="teacher[]" type="radio">
                                        <div class="w-full ml-2">
                                            <p class="uppercase font-semibold">Professor 1</p>
                                        </div>
                                    </div>
                                    <div class="bg-slate-200  flex col-span-3 rounded-md py-1 px-2">
                                        <input name="teacher[]" type="radio">
                                        <div class="w-full ml-2">
                                            <p class="uppercase font-semibold">Professor 1</p>
                                        </div>
                                    </div>
                                    <div class="bg-slate-200  flex col-span-3 rounded-md py-1 px-2">
                                        <input name="teacher[]" type="radio">
                                        <div class="w-full ml-2">
                                            <p class="uppercase font-semibold">Professor 1</p>
                                        </div>
                                    </div>
                                    <div class="bg-slate-200  flex col-span-3 rounded-md py-1 px-2">
                                        <input name="teacher[]" type="radio">
                                        <div class="w-full ml-2">
                                            <p class="uppercase font-semibold">Professor 1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                
                
            </x-slot>
            <x-slot:footer>
            <button class="bg-slate-400 rounded-md px-3 py-1 mb-2 border-2 border-slate-400"><i class="bi bi-x-circle"></i> Fechar</button>
            <button class="bg-teal-600 border-2 border-teal-600 ml-2 mb-2 rounded-md px-3 py-1"><i class="bi bi-check2-circle"></i> Salvar</button>
            </x-slot>
        </x-modal.modal-lg>
    </form>

</div>
