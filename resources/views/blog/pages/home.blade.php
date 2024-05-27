<x-guest-layout>
  <x-blog.seo.page-meta
    title="Laraveldev.pro"
    description="providing laravel coding tutorials for laravel developers "
    keywords="laravel,coding,tallstack,livewire,laraveldeveloper,laravel jobs, laravel news"
    robots="laravel,coding,tallstack,livewire,laraveldeveloper,laravel jobs, laravel news"
  />

  <x-blog.pages.section color="gray" textColor="black" textSize="large" class="-mx-8">
      <div class="max-w-6xl mx-auto">

        <x-blog.pages.grid-3 class="py-6">
          <div class="col-span-2">
            <div class="">
              {{-- <x-blog.text.text textSize="header2" color="black" value="Blog" class="font-bold"/> --}}
              <p class="sm:text-6xl text-5xl font-black text-black hidden sm:block">Laraveldev Blog</p>
              <p class="sm:text-6xl text-5xl font-black text-black sm:hidden">Blog</p>
              <x-blog.text.text textSize="x-small" class="text-gray-700 text-4xl mt-4" value="All the latest Laravel News posts"/>
            </div>
          </div>
  
          <div class="my-4 md:my-0">
            <x-blog.components.card-long>
  
              <div class="text-red-600 font-bold">Join our Slack</div>
              <div>
                <p class="text-sm text-gray-700 font-thin">This is some fancy text about why you should join!</p>
              </div>
            </x-blog.components.card-long>
          </div>
        </x-blog.pages.grid-3>
      </div>
  </x-blog.pages.section>

  {{-- @foreach ($recentPost as $post) --}}
  {{-- @if (count($post->post) > 1) --}}
    
  <x-blog.pages.section color="offWhite" title="Recent Tutorials" textColor="black" textSize="large">
    <x-blog.pages.grid-5 class="mt-16">

        @foreach ($recentPost as $post)
          @foreach ($post->post as $postValue )
            <x-blog.components.post-card :tagDetail="$postValue->tag" editRoute="{{ route('blog.edit', $postValue) }}" href="{{ route('blog.show', $postValue->slog)}}" :title="$postValue->title" :excerpt="$postValue->excerpt" :userName="$postValue->user->name" :date="$postValue->updated_at" />
          @endforeach
        @endforeach
    </x-blog.pages.grid-5>
  </x-blog.pages.section> 

  {{-- @endif --}}
  {{-- @endforeach --}}


  <x-blog.pages.section color="gray" title="Partners" textColor="black" textSize="large">
    <x-blog.text.text textSize="x-small" class="text-gray-700 text-4xl mt-4" value="These add spaces are for sell.."/>
    {{-- <x-blog.pages.grid-5 class="mt-16">

        @foreach ($recentPost as $post)
          @foreach ($post->post as $postValue )
            <x-blog.components.post-card :tagDetail="$postValue->tag" editRoute="{{ route('blog.edit', $postValue) }}" href="{{ route('blog.show', $postValue->slog)}}" :title="$postValue->title" :excerpt="$postValue->excerpt" :userName="$postValue->user->name" :date="$postValue->updated_at" />
          @endforeach
        @endforeach
    </x-blog.pages.grid-5> --}}
    {{-- <x-blog.pages.grid-1 class="pt-32">
      @foreach ($agencies as $agency )
          <x-blog.components.agency-card :agency="$agency"/>
      @endforeach
      
  </x-blog.pages.grid-1> --}}
  </x-blog.pages.section> 



  {{-- @foreach ($recentPackages as $post)
  @if (count($post->post) > 1)
  
    <x-blog.pages.section color="gray" title="Laravel Packages" textColor="black" textSize="large">
      <x-blog.pages.grid-3 class="mt-32">
          @foreach ($recentPackages as $post)
            @foreach ($post->post as $postValue )
              <x-blog.components.post-card :tagDetail="$postValue->tag" editRoute="{{ route('blog.edit', $postValue) }}" href="{{ route('blog.show', $postValue->slog)}}" :title="$postValue->title" :excerpt="$postValue->excerpt" :userName="$postValue->user->name" :date="$postValue->updated_at" />
            @endforeach
          @endforeach
      </x-blog.pages.grid-3>
    </x-blog.pages.section>
  @endif
@endforeach --}}



{{-- @foreach ($recentPackages as $post)
  @if (count($post->post) > 1)
  
    <x-blog.pages.section color="gray" title="Partners" textColor="black" textSize="large">
      <x-blog.pages.grid-3 class="mt-32">
          @foreach ($recentPackages as $post)
            @foreach ($post->post as $postValue )
              <x-blog.components.post-card :tagDetail="$postValue->tag" editRoute="{{ route('blog.edit', $postValue) }}" href="{{ route('blog.show', $postValue->slog)}}" :title="$postValue->title" :excerpt="$postValue->excerpt" :userName="$postValue->user->name" :date="$postValue->updated_at" />
            @endforeach
          @endforeach
      </x-blog.pages.grid-3>
    </x-blog.pages.section>
  @endif
@endforeach --}}




{{-- @foreach ($recentNews as $post)
  @if (count($post->post) > 1)
<x-blog.pages.section color="lightGray" title="Laravel News" textColor="black" textSize="large">
  <x-blog.pages.grid-3 class="mt-32">
      @foreach ($recentNews as $post)
        @foreach ($post->post as $postValue )
          <x-blog.components.post-card :tagDetail="$postValue->tag" editRoute="{{ route('blog.edit', $postValue) }}" href="{{ route('blog.show', $postValue->slog)}}" :title="$postValue->title" :excerpt="$postValue->excerpt" :userName="$postValue->user->name" :date="$postValue->updated_at" />
        @endforeach
      @endforeach
  </x-blog.pages.grid-3>
</x-blog.pages.section>
@endif
@endforeach --}}

</x-guest-layout>