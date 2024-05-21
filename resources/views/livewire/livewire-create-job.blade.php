<x-blog.components.card>
    
    <div>
        <x-blog.text.text textSize="header2" color="black" value="Your Jobs" class="font-black font-serif"/>
        @forelse ($userJobs->agency as $jobs)
        {{-- <a href="{{ route('agency.update',['id' => $agencies->id]) }}" wire:navigate> --}}
            <div class="rounded-sm p-10 bg-white w-full flex justify-between mb-2 shadow">
                <div>
                    <img src="{{ asset('storage/' . $jobs->feature_img) }}" class="rounded-full w-[100px]">
                </div>
                <div>
                    {{ $jobs->name }}
                </div>
            </div>
        {{-- </a> --}}
        @empty
            <h3>No agency added</h3>
        @endforelse
    </div>
</x-blog-components.card>