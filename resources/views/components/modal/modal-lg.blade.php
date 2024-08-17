@props(['name','title'])
<div
 x-data = "{ show: false, name: '{{ $name }}' }"
 x-show = "show"
 x-on:open-modal.window = "show = ($event.detail.name === name)"
 x-on:close-modal.window = "show = !($event.detail.name === name)"
 x-on:keydown.escape.window = "show = false"
 style="display:none;"
 x-transition.scale.origin.top.right
 x-transition.opacity
 x-transition.duration.200ms
 class="fixed z-50 inset-0">
    <div x-on:click="show = false" class="fixed inset-0 bg-gray-800 opacity-20"></div>
    <div class="bg-white shadow-md rounded m-auto fixed inset-0 md:max-w-4xl max-w-[96%]" style="height:400px;">
        <div class="flex flex-col h-full min-h-full">
            <div class="h-10 max-h-10 bg-slate-400">
                @if(isset($title))
                <div class="py-3 flex items-center justify-center">{{ $title}}</div>
                @endif
            </div>
            <div class="flex-1 bg-red-400">
                <div class="h-full mim-h-full flex flex-col">
                    {{ $body }}
                </div>
            </div>
            <div class="h-10 max-h-10 bg-slate-500">{{ $footer }}</div>
        </div>
    </div>
</div>