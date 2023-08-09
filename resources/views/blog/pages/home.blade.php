<x-guest-layout>
  <x-blog.seo.page-meta
    title="Laraveldev.pro"
    description="providing laravel coding tutorials for laravel developers "
    keywords="laravel,coding,tallstack,livewire,laraveldeveloper,laravel jobs, laravel news"
    robots="laravel,coding,tallstack,livewire,laraveldeveloper,laravel jobs, laravel news"
  />

  <x-blog.pages.section color="green" textColor="black" textSize="large">
    <div class="px-32 py-16">
    <div class="text-center grid place-content-center justify-center">
      <x-blog.text.text textSize="header1" color="black" value="A resource power house for" class="font-black font-serif"/>
      <x-blog.text.text textSize="header1" class="text-green-700 font-mono text-4xl" value="Laravel Devs"/>
    </div>
  </div>
  </x-blog.pages.section>

  <x-blog.pages.section color="white" title="Recent Tutorials" textColor="black" textSize="large">
    <x-blog.pages.grid-5 class="mt-32">
        @foreach ($recentPost as $post)
          @foreach ($post->post as $postValue )
            <x-blog.components.post-card :tagDetail="$postValue->tag" editRoute="{{ route('blog.edit', $postValue) }}" href="{{ route('blog.show', $postValue->slog)}}" :title="$postValue->title" :excerpt="$postValue->excerpt" :userName="$postValue->user->name" :date="$postValue->updated_at" />
          @endforeach
        @endforeach
    </x-blog.pages.grid-5>
</x-blog.pages.section>

<x-blog.pages.section color="gray" title="Laravel Packages" textColor="black" textSize="large">
  <x-blog.pages.grid-3 class="mt-32">
      @foreach ($recentPackages as $post)
        @foreach ($post->post as $postValue )
          <x-blog.components.post-card :tagDetail="$postValue->tag" editRoute="{{ route('blog.edit', $postValue) }}" href="{{ route('blog.show', $postValue->slog)}}" :title="$postValue->title" :excerpt="$postValue->excerpt" :userName="$postValue->user->name" :date="$postValue->updated_at" />
        @endforeach
      @endforeach
  </x-blog.pages.grid-3>
</x-blog.pages.section>

<x-blog.pages.section color="lightGray" title="Laravel News" textColor="black" textSize="large">
  <x-blog.pages.grid-3 class="mt-32">
      @foreach ($recentNews as $post)
        @foreach ($post->post as $postValue )
          <x-blog.components.post-card :tagDetail="$postValue->tag" editRoute="{{ route('blog.edit', $postValue) }}" href="{{ route('blog.show', $postValue->slog)}}" :title="$postValue->title" :excerpt="$postValue->excerpt" :userName="$postValue->user->name" :date="$postValue->updated_at" />
        @endforeach
      @endforeach
  </x-blog.pages.grid-3>
</x-blog.pages.section>
</x-guest-layout>