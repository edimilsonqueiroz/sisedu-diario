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
    <div x-on:click="show = false" class="fixed inset-0 bg-gray-900 opacity-30"></div>
    <div class="bg-white rounded m-auto fixed inset-0 md:max-w-4xl max-w-[96%] h-28" style="max-height:800px;">
        @if(isset($title))
        <div class="py-3 flex items-center justify-center">{{ $title}}</div>
        @endif
            <div>{{ $body }}</div>
            <div>{{ $footer }}</div>
    </div>
</div>