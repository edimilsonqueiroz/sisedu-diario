<div class="w-full h-full overflow-x-hidden">
@include('components/header-turma')
    <div class="p-3 w-full overflow-y-auto">
            <div class="bg-white rounded-md shadow-md h-20 mb-5">

            </div>
            <form>
                <div class="bg-white h-96 rounded-md shadow-md">
                    <div class="flex items-center justify-between flex-col h-full w-full">
                        <div class="bg-slate-100 px-3 rounded-tl-md rounded-tr-md flex items-center h-10 w-full">
                            <h1 class="text-xl">Registro de frequência</h1>
                        </div>
                        <div class="flex-1 w-full overflow-y-auto p-2">
                            <div class="bg-slate-200 my-1 flex items-center justify-between rounded-md p-2">
                                <div class="flex-1 flex-col">
                                    <h3 class="uppercase font-semibold">Carlos Augusto Medeiros</h3>
                                </div>
                                <div class="flex-2 flex items-center p-2">
                                    <div class="flex justify-center items-center mx-1 flex-col">
                                        <input id="default-radio-p" type="checkbox" value="" name="frequencia[]" class="w-4 h-4 outline-0">
                                    </div>
                                </div>
                            </div>
                            <div class="bg-slate-200 my-1 flex items-center justify-between rounded-md p-2">
                                <div class="flex-1 flex-col">
                                    <h3 class="uppercase font-semibold">Manoel Cesar de Oliveira</h3>
                                </div>
                                <div class="flex-2 flex items-center p-2">
                                    <div class="flex justify-center items-center mx-1 flex-col">
                                        <input id="default-radio-p" type="checkbox" value="" name="frequencia[]" class="w-4 h-4 outline-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-slate-100 px-3 py-4 rounded-bl-md rounded-br-md flex items-center justify-end h-10 w-full">
                        <button class="bg-slate-400 rounded-md px-3 py-1 mb-2 border-2 border-slate-400"><i class="bi bi-x-circle"></i> Limpar</button>
                        <button class="bg-teal-600 border-2 border-teal-600 ml-2 mb-2 rounded-md px-3 py-1"><i class="bi bi-check2-circle"></i> Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
    </div>
@include('components/footer')
</div>
