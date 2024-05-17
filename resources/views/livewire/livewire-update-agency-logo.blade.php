<div>
    {{-- extract into component --}}
    @if (session('success'))
    <div class="bg-green-400 text-white p-4 rounded-sm">
        {{ session('success') }}
    </div>
    @endif
    
    <div class="rounded-full">
        @if ($photo) 
            <img src="{{ $photo->temporaryUrl() }}" class="rounded-full w-[100px]">
        @else
            <img src="{{ asset('storage/' . $currentLogo) }}" class="rounded-full w-[100px]">
        @endif
    </div>
    <div>
        <form wire:submit="update">
            <input type="file" wire:model="photo">
            <button type="submit">save</button>
        </form>
    </div>
</div>
