<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agency') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-blog.btn.btn-primary href="{{ route('agency.create') }}"/>
            <x-blog.components.layout>
                @forelse ($userAgency->agency as $agencies)
                    {{ $agencies }}
                @empty
                    <h3>No agency added</h3>
                @endforelse
            </x-blog.components.layout>
        </div>
    </div>
</x-app-layout>
