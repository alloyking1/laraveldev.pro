<x-guest-layout>
    <x-blog.seo.page-meta
      title="Laraveldev.pro"
      description="providing laravel coding tutorials for laravel developers "
      keywords="laravel,coding,tallstack,livewire,laraveldeveloper,laravel jobs, laravel news"
      robots="laravel,coding,tallstack,livewire,laraveldeveloper,laravel jobs, laravel news"
    />

    <x-blog.pages.section color="black" textColor="white" textSize="large" class="relative">
        <div class="">
          <div class="text-center grid place-content-center justify-center">
            <x-blog.text.text textSize="header2" color="white" value="The official Laravel job board" class="font-black"/>
    
            <div class="max-w-2xl mx-auto mt-4">
              <x-blog.text.text textSize="x-small"
              color="white"
              class="font-thin"
              value="LaraJobs is our first stop whenever we're hiring a Laravel role. We've hired 10 Laravel developers in the last few years, all thanks to LaraJobs.” — Matthew Hall, ArborXR"/>
            
              <x-blog.pages.grid-1 class="mt-4">
                @forelse ($jobs as $job)
                    <a href="{{ $job->application_link }}" target="_blank" class="text-black">
                        <x-blog.components.job-card :job="$job"/>
                    </a>
                @empty
                    <x-blog.components.card-long>
                        <x-blog.text.text textSize="xx-small" color="gray" value="Silence is golden!" class=""/>
                    </x-blog.components.card-long>
                @endforelse
                </x-blog.pages.grid-1>

                <div class="flex justify-end">
                    <a href="{{ route('jobs.all') }}" class="border rounded-sm p-1 text-xs mt-2">
                        <div class="text-white">All jobs >></div>
                    </a>
                </div>
            </div>
          </div>
        </div>
    </x-blog.pages.section>


    <x-blog.pages.section color="black" textColor="white" textSize="large" class="relative">
        <div class="shadow-lg border border-gray-50 p-16 pb-24 rounded-2xl">
            <x-blog.pages.grid-2 class="pt-8">

                <div class="text-center grid place-content-center justify-center md:mr-6">
                    <x-blog.text.text textSize="header2" color="white" value="Consider hiring a Laravel agency" class="font-black"/>
            
                    <div class="max-w-2xl mx-auto mt-4">
                        <x-blog.text.text textSize="x-small"
                        color="white"
                        class="font-thin"
                        value="LaraJobs is our first stop whenever we're hiring a Laravel role. We've hired 10 Laravel developers in the last few years, all thanks to LaraJobs.” — Matthew Hall, ArborXR"/>
                    </div>
                </div>
                
                <x-blog.pages.grid-1 class="mt-4">
                    @forelse ($agencies as $agency)
                        <a href="{{ route('agency.show', $agency) }}" target="_blank" class="text-black">
                            <x-blog.components.agency-card :agency="$agency"/>
                        </a>
                    @empty
                        <x-blog.components.card-long>
                            <x-blog.text.text textSize="xx-small" color="gray" value="Silence is golden!" class=""/>
                        </x-blog.components.card-long>
                    @endforelse
                </x-blog.pages.grid-1>
                
            </x-blog.pages.grid-2>
            <div class="flex justify-end">
                <a href="{{ route('agency.all') }}" class="border rounded-sm p-1 text-xs mt-2">
                    <div class="text-white">See more >></div>
                </a>
            </div>
        </div>
    </x-blog.pages.section>


    {{-- <x-blog.pages.section color="black" textColor="white" textSize="large" class="relative">
        <div class="">
            <x-blog.pages.grid-2 class="pt-32">

                <div>
                    <img src="https://images.pexels.com/photos/1181676/pexels-photo-1181676.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                </div>

                <div class="text-center grid place-content-center justify-center">
                    <x-blog.text.text textSize="header2" color="white" value="Get a free portfolio website" class="font-black"/>
            
                    <div class="max-w-2xl mx-auto mt-4">
                        <x-blog.text.text textSize="x-small"
                        color="white"
                        class="font-thin"
                        value="LaraJobs is our first stop whenever we're hiring a Laravel role. We've hired 10 Laravel developers in the last few years, all thanks to LaraJobs.” — Matthew Hall, ArborXR"/>
                    </div>
                </div>

                
            </x-blog.pages.grid-2>
        </div>
    </x-blog.pages.section> --}}
</x-guest-layout>