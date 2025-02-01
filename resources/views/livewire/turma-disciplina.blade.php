<div class="w-full h-full overflow-x-hidden">
@include('components/header-turma')
    <div class="p-3 w-full overflow-y-auto">
        <div class="bg-white grid md:grid-cols-3 grid-cols-1 gap-4 p-2 rounded-md shadow-md">
            <input placeholder="Pesquisa por descrição" class="col-span-1 py-2 outline-0 border-2 rounded-md border-gray-300 px-2" type="text"/>
            <input class="col-span-1 py-2 outline-0 border-2 rounded-md border-gray-300 px-2" type="date"/>
            <div class="col-span-1 flex justify-center items-center">
                <button x-data x-on:click="$dispatch('open-modal', { name: 'cadastro-disciplina' })" class="bg-teal-600 text-white py-2 px-3 rounded-md shadow-md border-0">Adicionar disciplina</button>
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
                                <h3 class="uppercase font-semibold">Aula 1</h3>
                            </div>
                        </div>
                        <div class="bg-slate-200 my-1 flex items-center rounded-md p-2">
                            <div class="flex-1 flex-col">
                                <h3 class="uppercase font-semibold">Aula 2</h3>
                            </div>
                        </div>
                        <div class="bg-slate-200 my-1 flex items-center rounded-md p-2">
                            <div class="flex-1 flex-col">
                                <h3 class="uppercase font-semibold">Aula 4</h3>
                            </div>
                        </div>
                        <div class="bg-slate-200 my-1 flex items-center rounded-md p-2">
                            <div class="flex-1 flex-col">
                                <h3 class="uppercase font-semibold">Aula 5</h3>
                            </div>
                        </div>
                        <div class="bg-slate-200 w-full my-1 flex items-center rounded-md p-2">
                            <div class="flex-1 flex-col">
                                <h3 class="uppercase font-semibold">Aula 6</h3>
                            </div>
                        </div>
                        <div class="bg-slate-200 my-1 flex items-center justify-between rounded-md p-2">
                            <div class="flex-1 flex-col">
                                <h3 class="uppercase font-semibold">Aula 7</h3>
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
        <x-modal.modal-md name="cadastro-disciplina" title="Cadastrar Disciplina">
            <x-slot:body>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-2">
                    <div class="flex flex-col p-1">
                        <label for="disciplina">Disciplina</label>
                        <input id="disciplina" type="text" class="border-2 p-2 outline-0 border-gray-200 rounded-md">
                    </div>
                    <div class="flex flex-col p-1">
                        <label for="data">Data</label>
                        <input id="data" type="date" class="border-2 p-2 outline-0 border-gray-200 rounded-md">
                    </div>
                </div>
                <div class="grid md:grid-cols-1 p-1 grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="conteudo">Conteudo</label>
                        <textarea id="conteudo" class="border-2 p-2 outline-0 border-gray-200 rounded-md" rows="5"></textarea>
                    </div>
                </div>
                
            </x-slot>
            <x-slot:footer>
                <button>Fechar</button>
                <button class="bg-">Salvar</button>
            </x-slot>
        </x-modal.modal-md>
    </form>

</div>
