{{-- <x-guest-layout> --}}
   

    <div>
        <x-blog.seo.page-meta
        title="Laraveldev.pro"
        description="providing laravel coding tutorials for laravel developers "
        keywords="laravel,coding,tallstack,livewire,laraveldeveloper,laravel jobs, laravel news"
        robots="laravel,coding,tallstack,livewire,laraveldeveloper,laravel jobs, laravel news"
      />
        <x-blog.pages.section color="black" textColor="white" textSize="large" class="relative">
            <div class="">
              <div class="text-center grid place-content-center justify-center">
                <x-blog.text.text textSize="header2" color="white" value="The Laraveldev.pro job board" class="font-black"/>
        
                <div class="max-w-2xl mx-auto mt-4">
                  <x-blog.text.text textSize="x-small"
                  color="white"
                  class="font-thin"
                  value="Gain maximum visibility for your Laravel job posting by showcasing it to thousands of talented Laravel developers that visit Laraveldev.pro"/>
                
                </div>
              </div>
            </div>
        </x-blog.pages.section>
       
        <x-blog.pages.section color="white" title="" textColor="black" textSize="large" class="md:-mt-8">
            <div class="max-w-4xl mx-auto">
                <x-blog.pages.grid-1 class="">
                  @foreach ($jobs as $job )
                    <a href="{{ $job->application_link }}" target="_blank" class="text-black">
                      <x-blog.components.job-card :job="$job"/>
                    </a>
                   @endforeach
                    
                </x-blog.pages.grid-1>
                
            </div>
        </x-blog.pages.section> 
    </div>
