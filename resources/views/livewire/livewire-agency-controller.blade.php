<div>
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
                    <x-blog.text.text textSize="header2" color="white" value="Find Laravel consultants to hire" class="font-black"/>
            
                    <div class="max-w-2xl mx-auto mt-4">
                      <x-blog.text.text textSize="x-small"
                      color="white"
                      class="font-thin"
                      value="LaraJobs is our first stop whenever we're hiring a Laravel role. We've hired 10 Laravel developers in the last few years, all thanks to LaraJobs.” — Matthew Hall, ArborXR"/>
                    
                    </div>
                  </div>
                </div>
            </x-blog.pages.section>
           
            <x-blog.pages.section color="white" title="" textColor="black" textSize="large">
                <div class="max-w-4xl mx-auto mt-4">
                    <div class="rounded-2xl shadow-2xl p-6 bg-white -mt-[10rem] md:-mt-[10rem] z-10">
                        email list
                    </div>
        
                    <x-blog.pages.grid-1 class="pt-32">
                        @foreach ($agencies as $agency )
                            <x-blog.components.agency-card :agency="$agency"/>
                        @endforeach
                        
                    </x-blog.pages.grid-1>
                    
                </div>
            </x-blog.pages.section> 
        </div>
    
</div>
