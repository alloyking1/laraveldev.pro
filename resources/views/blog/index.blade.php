{{-- <x-guest-layout postMetaTag="{{ $posts }}"> --}}
<x-guest-layout>
    <x-blog.pages.section color="white" title="Blog Posts" textColor="black" textSize="large">
        <x-blog.pages.grid-5 class="mt-32">
            @foreach ($posts as $post)
              <x-blog.components.post-card :tagDetail="$post->tag" editRoute="{{ route('blog.edit', $post) }}" href="{{ route('blog.show', $post)}}" :title="$post->title" :excerpt="$post->excerpt" :userName="$post->user->name" :date="$post->updated_at" />
            @endforeach
        </x-blog.pages.grid-5>
        <x-blog.pages.grid-1>
            <x-blog.components.paginate>
                {{ $posts->links() }}
            </x-blog.components.paginate>
        </x-blog.pages.grid-1>
    </x-blog.pages.section>
</x-guest-layout>