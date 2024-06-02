<x-guest-layout>
 
  <x-blog.seo.page-meta
      title="Laraveldev.pro - Laravel developer coding blog."
      description="providing laravel coding tutorials for laravel developers - laravel blog | laravel news | laravel jobs | laravel updates | laravel packages | all things laravel "
      keywords="laravel,coding,tallstack,livewire,laraveldeveloper,laravel jobs, laravel news, learn laravel, laravel LMS, laravel saas, laravel coding, laravel architect, whats new in laravel - x"
      robots="laravel,coding,tallstack,livewire,laraveldeveloper,laravel jobs, laravel news, learn laravel, laravel LMS, laravel saas, laravel coding, laravel architect, whats new in laravel - x"
    />

  <x-blog.pages.section color="gray" textColor="black" textSize="large" class="-mx-8">
      <div class="max-w-6xl mx-auto">

        <x-blog.pages.grid-3 class="py-6">
          <div class="col-span-2">
            <div class="">
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

  <x-blog.pages.section color="offWhite" title="Recent Tutorials" textColor="black" textSize="large">
    <x-blog.pages.grid-2 class="mt-16 grid md:grid-cols-5">

        @foreach ($recentPost as $post)
          @foreach ($post->post as $postValue )
            <x-blog.components.post-card :tagDetail="$postValue->tag" editRoute="{{ route('blog.edit', $postValue) }}" href="{{ route('blog.show', $postValue->slog)}}" :title="$postValue->title" :excerpt="$postValue->excerpt" :userName="$postValue->user->name" :date="$postValue->updated_at" />
          @endforeach
        @endforeach
    </x-blog.pages.grid-2>
  </x-blog.pages.section> 



  <x-blog.pages.section color="gray" title="Partners" textColor="black" textSize="large">
    <x-blog.text.text textSize="x-small" class="text-gray-700 text-4xl mt-4" value="This add space is for sell"/>
  </x-blog.pages.section> 
</x-guest-layout>