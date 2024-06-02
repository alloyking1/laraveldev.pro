<x-guest-layout>
    <x-blog.seo.page-meta
      title="Laraveldev.pro - laravel consultants |laravel agencies | post laravel agency | laravel consultants recruitment"
      description="A laravel jobboard for Laravel agencies and developers with a deep technical blog for Laravel developers - posting laravel jobs | posting vue.js jobs | posting laravel TALL stack jobs | find laravel jobs | apply to laravel jobs online | get hired as a laravel developer"
      keywords="laravel,job,recruitment,laravel-hire,job-board,laraveljobs.com, laravelnews.com, laracast, laraveldev.pro, laravel hire"
      robots="laravel,job,recruitment,laravel-hire,job-board,laraveljobs.com, laravelnews.com, laracast, laraveldev.pro, laravel hire"
    />

    <x-blog.pages.section color="black" textColor="white" textSize="large" class="relative">
        <div class="">
          <div class="text-center grid place-content-center justify-center">
            <x-blog.text.text textSize="header2" color="white" value="Looking to hire a Laravel dev?" class="font-black"/>
    
            <div class="max-w-2xl mx-auto mt-4">
              <x-blog.text.text textSize="x-small"
              color="white"
              class="font-thin"
              value="Post your job and receive an impressive number of high-quality applications from top developers. Start finding the perfect fit for your project today!"/>
            
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
                        value="Streamline your hiring process and get exceptional Laravel solutions today by Partner with top Laravel agencies"/>
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
</x-guest-layout>