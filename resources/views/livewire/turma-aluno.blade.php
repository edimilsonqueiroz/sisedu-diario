<div class="w-full h-full overflow-x-hidden">
@include('components/header-turma')
    <div class="p-3 w-full overflow-y-auto">
        <div class="grid md:grid-cols-5 grid-cols-1 gap-4">
            <div class="bg-white col-span-1 md:col-span-2 h-96 rounded-md shadow-md">
                <div class="flex items-center justify-between flex-col h-full w-full">
                    <div class="bg-slate-100 px-3 rounded-tl-md rounded-tr-md flex items-center h-10 w-full">
                        <h1 class="text-xl">Alunos sem turma</h1>
                    </div>
                    <div class="flex-1 w-full overflow-y-auto p-2">
                        <input placeholder="Pesquisar pelo nome" class="outline-0 border-2 border-gray-200 rounded-md my-3 p-2 w-full" type="text"/>
                        @foreach($students as $student)
                            <div class="bg-slate-200 my-1 flex items-center rounded-md p-2">
                                <div class="flex items-center p-2"><input wire:model="student_school" id="checked-checkbox" name="student_school[]" type="checkbox" value="{{$student->id}}" class="w-4 h-4 rounded-lg outline-0"></div>
                                <div class="flex flex-col">
                                    <h3 class="uppercase font-semibold">{{$student->name}}</h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="bg-slate-100 px-3 rounded-bl-md rounded-br-md flex items-center h-10 w-full"></div>
                </div>
            </div>
            <div class="bg-white col-span-1 h-28 md:h-96 rounded-md shadow-md">
                <div class="flex h-full justify-center items-center flex-col">
                    <button wire:click="addStudentClass" class="bg-cyan-600 py-1 flex items-center px-2 mb-2 md:mb-8 w-44 text-white rounded-md border-0">Adicionar na turma <i class="bi bi-arrow-right ml-1"></i></button>
                    <button wire:click="removeStudentClass" class="bg-cyan-600 py-1 flex items-center px-2 mb-2 md:mt-8 w-44 text-white rounded-md border-0"><i class="bi bi-arrow-left mr-1"></i> Remover da turma</button>
                </div>
            </div>
            <div class="bg-white col-span-1 md:col-span-2 h-96 rounded-md shadow-md">
                <div class="flex items-center justify-between flex-col h-full w-full">
                    <div class="bg-slate-100 px-3 rounded-tl-md rounded-tr-md flex items-center h-10 w-full">
                        <h1 class="text-xl">Alunos da turma</h1>
                    </div>
                    <div class="flex-1 w-full overflow-y-auto p-2">
                        <input placeholder="Pesquisar pelo nome" class="outline-0 border-2 border-gray-200 rounded-md my-3 p-2 w-full" type="text"/>
                        @foreach($students_turma as $student_turma)
                        <div class="bg-slate-200 my-1 flex items-center rounded-md p-2">
                            <div class="flex items-center p-2"><input wire:model="student_turma" id="checked-checkbox" name="student_turma[]" type="checkbox" value="{{$student_turma->id}}" class="w-4 h-4 rounded-lg outline-0"></div>
                            <div class="flex flex-col">
                                <h3 class="uppercase font-semibold">{{$student_turma->name}}</h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="bg-slate-100 px-3 rounded-bl-md rounded-br-md flex items-center h-10 w-full"></div>
                </div>
            </div>
        </div>
    </div>
@include('components/footer')
</div>
