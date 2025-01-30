<div class="w-full h-full overflow-x-hidden">
@include('components/header-turma')
    <div class="p-3 w-full overflow-y-auto">
        <div class="bg-white p-2 rounded-md shadow-md">
            <form class="flex">
                <div class="flex flex-1 flex-col">
                    <label for="">Conteúdo</label>
                    <textarea class="border-2 p-2 rounded-md border-gray-400 outline-0" rows="5" name="" id=""></textarea>
                </div>
                <div class="flex w-60 ml-4 flex-2 flex-col">
                    <div class="flex flex-col">
                        <label for="">Data</label>
                        <input class="outline-0 border-2 rounded-md p-1 border-gray-400" type="date"> 
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="flex flex-col p-1 justify-between">
                            <label for="">Hora Inicio</label>
                            <input class="outline-0 border-2 rounded-md p-1 border-gray-400" type="time"> 
                        </div>
                        <div class="flex flex-col p-1 justify-between">
                            <label for="">Hora Fim</label>
                            <input class="outline-0 border-2 rounded-md p-1 border-gray-400" type="time"> 
                        </div>
                    </div>
                    
                    <button class="border-0 py-2 mt-3 rounded-md bg-teal-600 shadow-md">Salvar</button>
                </div>
            </form>
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
</div>
