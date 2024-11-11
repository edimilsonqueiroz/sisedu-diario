<div class="w-full h-full overflow-x-hidden">
@include('components/header')
    <div class="p-3 w-full overflow-y-auto">
        <div class="bg-white mb-5 w-full rounded-md justify-between items-center flex flex-col md:flex-row p-4 shadow-md">
            <div class="flex flex-col md:w-[50%] px-2 w-full">
                <label class="text-xl" for="">Nome da Escola</label>
                <select wire:model.live="school" class="outline-none text-xl border-2 rounded-md p-3 border-gray-400">
                    <option value="">Todas as escolas</option>
                    @foreach($schools as $school)
                      <option value="{{$school->id}}">{{$school->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex mt-5 md:mt-0 px-2 flex-col md:w-[50%] w-full">
                <label class="text-xl" for="">Ano da Turma</label>
                <select wire:model.live="year" class="outline-none text-xl border-2 rounded-md p-3 border-gray-400">
                    <option value="">Todas os anos</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                </select>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            @foreach($turmas as $turma)
            <a href="{{route('turma-registro', $turma->id)}}">
                <div class="bg-slate-100 flex shadow-md rounded-md col-span-1">
                    <div class="rounded-l-md px-2 flex justify-center items-center bg-cyan-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                    </div>
                    <div class="flex-1 p-2">
                        <label for="">Turma:</label>
                        <h1 class="text-xl font-semibold">{{$turma->name}}</h1>
                        <label for="">Nome da Escola:</label>
                        @foreach($turma->school()->get() as $escola)
                        <h2 class="font-semibold">{{$escola->name}}</h2>
                        @endforeach
                        <label for="">Total de alunos: 25</label>
                    </div>
                </div>
            </a>
            @endforeach
            <x-load.loading name="loading"/>
        </div>
    </div>
@include('components/footer')
</div>