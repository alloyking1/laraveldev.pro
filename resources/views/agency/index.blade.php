<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agency') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" x-data="{open:false}">
            <div x-on:click="open = ! open">
                <x-blog.btn.btn-primary x-on:click="open = ! open"/>
            </div>
            <div x-show="open">
                <livewire:livewire-create-agency x-show="{open}"/> 
            </div>

           <livewire:livewire-agency-list/>
        </div>
    </div>
</x-app-layout>
