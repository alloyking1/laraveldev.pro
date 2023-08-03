<x-guest-layout>
    <x-blog.pages.section color="white" title="{{ $title }}" textColor="black" textSize="large">
        <x-blog.pages.grid-5 class="mt-32">
            {{-- @foreach ($posts as $post)
              <x-blog.components.post-card :tagDetail="$post->tag" editRoute="{{ route('blog.edit', $post) }}" href="{{ route('blog.show', $post)}}" :title="$post->title" :excerpt="$post->excerpt" :userName="$post->user->name" :date="$post->updated_at" />
            @endforeach --}}
        @foreach ($data as $post)
            @foreach ($post->post as $postValue )
              <x-blog.components.post-card :tagDetail="$postValue->tag" editRoute="{{ route('blog.edit', $postValue) }}" href="{{ route('blog.show', $postValue)}}" :title="$postValue->title" :excerpt="$postValue->excerpt" :userName="$postValue->user->name" :date="$postValue->updated_at" />
            @endforeach
          @endforeach
        </x-blog.pages.grid-5>
        <x-blog.pages.grid-1>
            <x-blog.components.paginate>
                {{-- {{ $data->links() }} --}}
            </x-blog.components.paginate>
        </x-blog.pages.grid-1>
    </x-blog.pages.section>
</x-guest-layout>