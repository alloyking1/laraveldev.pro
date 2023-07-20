<x-guest-layout>
    <div class="w-4/5 mx-auto pb-10">
        <div class="pt-10">
            <a href="{{ route('landing') }}"
               class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all py-20">
                < Back to home page
            </a>
        </div> 
        <div class="text-center pt-20">
            <h1 class="text-3xl text-gray-700">
                Recent Blog Posts
            </h1>
            <hr class="border border-1 border-gray-300 mt-10">
        </div>

    </div>

  
    <x-blog.components.layout>
        @foreach ($posts as $post)
            <x-blog.components.post-card href="{{ route('blog.show', $post)}}" :title="$post->title" :excerpt="$post->excerpt" :userName="$post->user->name" :date="$post->updated_at" />
        @endforeach
    </x-blog.components.layout>
    <x-blog.components.paginate>
        {{ $posts->links() }}
    </x-blog.components.paginate>

    

</x-guest-layout>