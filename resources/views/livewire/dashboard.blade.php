<div class="w-full h-full min-h-full">
    @include('components/header')
        <div class="flex w-full flex-col overflow-x-auto p-5">
            <div class="grid md:grid-cols-3 grid-cols-1 gap-3">
                <div class="bg-cyan-500 flex h-28 rounded-md col-span-1">
                    <div class="h-full rounded-l-md px-2 flex justify-center items-center bg-cyan-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                    </div>
                    <div class="flex-1 p-2">
                        <h1 class="text-xl font-semibold">Turmas ativas</h1>
                        <p class="font-semibold text-4xl">15</p>
                    </div>
                </div>
                <div class="col-span-1 flex rounded-md bg-blue-500 h-28">
                    <div class="h-full rounded-l-md px-2 flex justify-center items-center bg-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                    </div>
                    <div class="flex-1 p-2">
                        <h1 class="text-xl font-semibold">Alunos ativos</h1>
                        <p class="font-semibold text-4xl">10</p>
                    </div>
                </div>
                <div class="col-span-1 flex rounded-md bg-orange-500 h-28">
                    <div class="h-full rounded-l-md px-2 flex justify-center items-center bg-orange-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                    </div>
                    <div class="flex-1 p-2">
                        <h1 class="text-xl font-semibold">Professores ativos</h1>
                        <p class="font-semibold text-4xl">20</p>
                    </div>
                </div>
            </div>
            
            <div class="grid w-full md:grid-cols-2 mt-5 gap-5 md:gap-2 grid-cols-1">
                <div class="h-60 md:h-80 bg-slate-100 shadow-md rounded-md">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="h-60 md:h-80 bg-slate-100 shadow-md rounded-md">
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
            <div class="grid w-full md:grid-cols-1 mt-5 gap-5 md:gap-2 grid-cols-1">
                <div class="h-60 md:h-80 bg-slate-100 shadow-md rounded-md">
                    <canvas id="myChart3"></canvas>
                </div>
            </div>
            
        </div>
        <script>
            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'bar',
                data: {
                labels: ['5º ANO', '6º ANO', '7º ANO', '8º ANO', '9º ANO'],
                datasets: [{
                    label: 'REPROVAÇÃO POR TURMA',
                    data: [12, 19, 9, 8, 15],
                    borderWidth: 1
                }]
                },
                options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                    beginAtZero: true
                    }
                }
                }
            });
        </script>
        <script>
            const ctx2 = document.getElementById('myChart2');

            new Chart(ctx2, {
                type: 'pie',
                data: {
                labels: ['5º ANO', '6º ANO', '7º ANO', '8º ANO', '9º ANO'],
                datasets: [{
                    label: 'TOTAL DE MATRÍCULAS POR TURMA',
                    data: [12, 19, 3, 5, 2],
                    borderWidth: 1
                }]
                },
                options: {
                    responsive:true,
                    maintainAspectRatio: false,
                scales: {
                    y: {
                    beginAtZero: true
                    }
                }
                }
            });
        </script>
        <script>
            const ctx3 = document.getElementById('myChart3');

            new Chart(ctx3, {
                type: 'line',
                data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
                },
                options: {
                    responsive:true,
                    maintainAspectRatio: false,
                scales: {
                    y: {
                    beginAtZero: true
                    }
                }
                }
            });
        </script>
        
    @include('components/footer')
</div>
