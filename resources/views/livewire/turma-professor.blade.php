<div class="w-full h-full overflow-x-hidden">
@include('components/header-turma')
    <div class="p-3 w-full overflow-y-auto">
        <div class="grid md:grid-cols-5 grid-cols-1 gap-4">
            <div class="bg-white col-span-1 md:col-span-2 h-96 rounded-md shadow-md">
                <div class="flex items-center justify-between flex-col h-full w-full">
                    <div class="bg-slate-100 px-3 rounded-tl-md rounded-tr-md flex items-center h-10 w-full">
                        <h1 class="text-xl">Lista de professores</h1>
                    </div>
                    <div class="flex-1 w-full overflow-y-auto p-2">
                        <div class="bg-slate-200 my-1 flex items-center rounded-md p-2">
                            <div class="flex items-center p-2"><input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 outline-0"></div>
                            <div class="flex flex-col">
                                <h3 class="uppercase font-semibold">Carlos Augusto Medeiros</h3>
                            </div>
                        </div>
                        <div class="bg-slate-200 my-1 flex items-center rounded-md p-2">
                            <div class="flex items-center p-2"><input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 outline-0"></div>
                            <div class="flex flex-col">
                                <h3 class="uppercase font-semibold">Sávio Meireles Carvalho</h3>
                            </div>
                        </div>
                        <div class="bg-slate-200 my-1 flex items-center rounded-md p-2">
                           <div class="flex items-center p-2"><input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 outline-0"></div>
                            <div class="flex flex-col">
                                <h3 class="uppercase font-semibold">Maria Eduarda Silva Coelho</h3>
                            </div>
                        </div>
                        <div class="bg-slate-200 my-1 flex items-center rounded-md p-2">
                            <div class="flex items-center p-2"><input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 outline-0"></div>
                            <div class="flex flex-col">
                                <h3 class="uppercase font-semibold">Geovane Silva Malheiros</h3>
                            </div>
                        </div>
                        <div class="bg-slate-200 my-1 flex items-center rounded-md p-2">
                            <div class="flex items-center p-2"><input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 outline-0"></div>
                            <div class="flex flex-col">
                                <h3 class="uppercase font-semibold">Erica Tavares Silveira</h3>
                            </div>
                        </div>
                        <div class="bg-slate-200 my-1 flex items-center rounded-md p-2">
                            <div class="flex items-center p-2"><input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 outline-0"></div>
                            <div class="flex flex-col">
                                <h3 class="uppercase font-semibold">Manoel Bandeira de Melo</h3>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 px-3 rounded-bl-md rounded-br-md flex items-center h-10 w-full"></div>
                </div>
            </div>
            <div class="bg-white col-span-1 h-28 md:h-96 rounded-md shadow-md">
                <div class="flex h-full justify-center items-center flex-col">
                    <button class="bg-cyan-600 py-1 flex items-center px-2 mb-2 md:mb-8 w-44 text-white rounded-md border-0">Adicionar na turma <i class="bi bi-arrow-right ml-1"></i></button>
                    <button class="bg-cyan-600 py-1 flex items-center px-2 mb-2 md:mt-8 w-44 text-white rounded-md border-0"><i class="bi bi-arrow-left mr-1"></i> Remover da turma</button>
                </div>
            </div>
            <div class="bg-white col-span-1 md:col-span-2 h-96 rounded-md shadow-md">
                <div class="flex items-center justify-between flex-col h-full w-full">
                    <div class="bg-slate-100 px-3 rounded-tl-md rounded-tr-md flex items-center h-10 w-full">
                        <h1 class="text-xl">Professores da turma</h1>
                    </div>
                    <div class="flex-1 w-full overflow-y-auto p-2">
                        <div class="bg-slate-200 my-1 flex items-center rounded-md p-2">
                            <div class="flex items-center p-2"><input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 outline-0"></div>
                            <div class="flex flex-col">
                                <h3 class="uppercase font-semibold">Carlos Augusto Medeiros</h3>
                            </div>
                        </div>
                        <div class="bg-slate-200 my-1 flex items-center rounded-md p-2">
                            <div class="flex items-center p-2"><input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 outline-0"></div>
                            <div class="flex flex-col">
                                <h3 class="uppercase font-semibold">Sávio Meireles Carvalho</h3>
                            </div>
                        </div>
                        <div class="bg-slate-200 my-1 flex items-center rounded-md p-2">
                           <div class="flex items-center p-2"><input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 outline-0"></div>
                            <div class="flex flex-col">
                                <h3 class="uppercase font-semibold">Maria Eduarda Silva Coelho</h3>
                            </div>
                        </div>
                        <div class="bg-slate-200 my-1 flex items-center rounded-md p-2">
                            <div class="flex items-center p-2"><input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 outline-0"></div>
                            <div class="flex flex-col">
                                <h3 class="uppercase font-semibold">Geovane Silva Malheiros</h3>
                            </div>
                        </div>
                        <div class="bg-slate-200 my-1 flex items-center rounded-md p-2">
                            <div class="flex items-center p-2"><input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 outline-0"></div>
                            <div class="flex flex-col">
                                <h3 class="uppercase font-semibold">Erica Tavares Silveira</h3>
                            </div>
                        </div>
                        <div class="bg-slate-200 my-1 flex items-center rounded-md p-2">
                            <div class="flex items-center p-2"><input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 outline-0"></div>
                            <div class="flex flex-col">
                                <h3 class="uppercase font-semibold">Manoel Bandeira de Melo</h3>
                            </div>
                        </div>
                    </div>
                    <div class="bg-slate-100 px-3 rounded-bl-md rounded-br-md flex items-center h-10 w-full"></div>
                </div>
            </div>
        </div>
    </div>
@include('components/footer')
</div>
