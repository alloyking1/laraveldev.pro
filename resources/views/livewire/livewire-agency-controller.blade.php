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
                      value="Effortlessly outsource your project or seamlessly integrate Laravel experts into your team when you hire an Agency or Laravel consultant"/>
                    
                    </div>
                  </div>
                </div>
            </x-blog.pages.section>
           
            <x-blog.pages.section color="white" title="" textColor="black" textSize="large" class="md:-mt-8">
                <div class="max-w-4xl mx-auto mt-4">
                    <x-blog.pages.grid-1 class="-mt-10">
                        @foreach ($agencies as $agency )
                        <a href="{{ route('agency.show', $agency) }}" target="_blank" class="text-black">
                          <x-blog.components.agency-card :agency="$agency"/>
                          </a>
                        @endforeach
                        
                    </x-blog.pages.grid-1>
                    
                </div>
            </x-blog.pages.section> 
        </div>
    
</div>
