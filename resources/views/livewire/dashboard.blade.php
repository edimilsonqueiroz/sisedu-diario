<div class="w-full h-full min-h-full">
    @include('components/header')
        <div class="flex w-full h-[1500px] flex-col">
            <div class="grid md:grid-cols-3 grid-cols-1 gap-3">
                <div class="bg-cyan-500 h-28 rounded-md col-span-1">
                    Layout 1
                </div>
                <div class="col-span-1 rounded-md bg-blue-500 h-28">
                    Layout 2
                </div>
                <div class="col-span-1 rounded-md bg-orange-500 h-28">
                    Layout 3
                </div>
            </div>
        </div>
    @include('components/footer')
</div>
