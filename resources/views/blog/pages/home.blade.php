<x-guest-layout>
  <x-blog.pages.section color="green" textColor="black" textSize="large">
    <div class="p-32">
    <div class="text-center grid place-content-center justify-center">
      <x-blog.text.text textSize="header1" color="black" value="A resource power house for" class="font-black font-serif"/>
      <x-blog.text.text textSize="header1" class="text-green-700 font-mono text-4xl" value="Laravel Devs"/>
      <div class="my-8">
        <x-blog.text.text textSize="small" value="
        We are passionate about empowering Laravel developers from all walks of life. Whether you're a seasoned professional or just starting your 
        journey in the world of Laravel development, our mission is to provide you with top-notch content that will enrich your skills,
         expand your knowledge, and fuel your passion for crafting exceptional web applications
        
        "/>
      </div>
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