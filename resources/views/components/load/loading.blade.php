@props(['name'])
<div 
    x-data = "{ show: false, name: '{{ $name }}' }"
    x-show = "show"
    x-on:open-loading.window = "show = ($event.detail.name === name)"
    x-on:close-loading.window = "show = false"
    x-on:keydown.escape.window = "show = false"
    style="display:none;"
>
    <div class="fixed inset-0 z-40 bg-gray-800 opacity-60"></div>
    <div class="z-50 inset-0 absolute flex justify-center items-center">
        <img class="m-auto" src="{{asset('load/load.gif')}}">
    </div>
</div>