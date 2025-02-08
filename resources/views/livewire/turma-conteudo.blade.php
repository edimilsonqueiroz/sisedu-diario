<div class="w-full h-full overflow-x-hidden">
@include('components/header-turma')
    <div class="p-3 w-full overflow-y-auto">
        <div class="bg-white grid md:grid-cols-4 grid-cols-1 gap-4 p-2 rounded-md shadow-md">
            <select name="" id="" class="col-span-1 py-2 outline-0 border-2 rounded-md border-gray-300 px-2">
                <option value="1º Bimestre">1º Bimestre</option>
                <option value="2º Bimestre">2º Bimestre</option>
                <option value="3º Bimestre">3º Bimestre</option>
                <option value="4º Bimestre">4º Bimestre</option>
            </select>
            <select id="disciplina" class="border-2 p-2 outline-0 border-gray-200 rounded-md">
                <option value="">Língua Portuguesa</option>
                <option value="">Geografia</option>
                <option value="">História</option>
            </select>
            <input class="col-span-1 py-2 outline-0 border-2 rounded-md border-gray-300 px-2" type="date"/>
            <div class="col-span-1 flex justify-center items-center">
                <button x-data x-on:click="$dispatch('open-modal', { name: 'cadastro-conteudo' })" class="bg-teal-600 text-white py-2 px-3 rounded-md shadow-md border-0"><i class="bi bi-plus-circle"></i> Adicionar conteudo</button>
            </div>
        </div>
        <div class="bg-white h-96 mt-2 rounded-md shadow-md">

            <div class="flex items-center justify-between flex-col h-full w-full">
                    <div class="bg-slate-100 px-3 rounded-tl-md rounded-tr-md flex items-center h-10 w-full">
                        <h1 class="text-xl">Conteudos registrados</h1>
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
        <x-modal.modal-md name="cadastro-conteudo" title="Cadastrar conteudo">
            <x-slot:body>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-2">
                    <div class="flex flex-col p-1 col-span-2">
                        <label for="disciplina">Disciplina</label>
                        <select id="disciplina" class="border-2 p-2 outline-0 border-gray-200 rounded-md">
                            <option value="">Língua Portuguesa</option>
                            <option value="">Geografia</option>
                            <option value="">História</option>
                        </select>
                    </div>
                    <div class="flex flex-col p-1 col-span-1">
                        <label for="bimestre">Bimestre</label>
                        <select id="bimestre" class="border-2 p-2 outline-0 border-gray-200 rounded-md">
                            <option value="1º Bimestre">1º Bimestre</option>
                            <option value="2º Bimestre">2º Bimestre</option>
                            <option value="3º Bimestre">3º Bimestre</option>
                            <option value="4º Bimestre">4º Bimestre</option>
                        </select>
                    </div>
                    <div class="flex flex-col p-1 col-span-1">
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
                <button class="bg-slate-400 rounded-md px-3 py-1 mb-2 border-2 border-slate-400"><i class="bi bi-x-circle"></i> Fechar</button>
                <button class="bg-teal-600 border-2 border-teal-600 ml-2 mb-2 rounded-md px-3 py-1"><i class="bi bi-check2-circle"></i> Salvar</button>
            </x-slot>
        </x-modal.modal-md>
    </form>

</div>
