<x-guest-layout>
    <x-blog.pages.section color="white" title="{{ $title }}" textColor="black" textSize="large">
        <x-blog.pages.grid-5 class="mt-32">
        @foreach ($data as $post)
            @foreach ($post->post as $postValue )
              <x-blog.components.post-card :tagDetail="$postValue->tag" editRoute="{{ route('blog.edit', $postValue) }}" href="{{ route('blog.show', $postValue->slog)}}" :title="$postValue->title" :excerpt="$postValue->excerpt" :userName="$postValue->user->name" :date="$postValue->updated_at" />
            @endforeach
          @endforeach
        </x-blog.pages.grid-5>
        <x-blog.pages.grid-1>
            <x-blog.components.paginate>
                {{-- {{ $post->post->links() }} --}}
            </x-blog.components.paginate>
        </x-blog.pages.grid-1>
    </x-blog.pages.section>
</x-guest-layout>