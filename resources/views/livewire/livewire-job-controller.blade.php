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
                <x-blog.text.text textSize="header2" color="white" value="The official Laravel job board" class="font-black"/>
        
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
                    @foreach ($jobs as $job )
                    <a href="{{ $job->application_link }}" target="_blank" class="text-black">
                        <x-blog.components.card-long>
                            <div class="flex justify-between">
                                <div class="flex">
                                    <div class="hidden md:block bg-white shadow rounded-lg border p-4 -ml-[3rem] mr-3">
                                        @if ($job->logo == NULL)
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-[40px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                          </svg>
                                          @else
                                          <img src="{{ asset('storage/' . $job->logo) }}" class="w-[3rem]">
                                       
                                          
                                        @endif
                                       
                                    </div>
                                    <div class="grid">
                                        <x-blog.text.text textSize="x-small"
                                            color="black"
                                            class="font-thin text-lg"
                                            :value="$job->company_name"/>
                                            <p class="text-lg font-bold text-black">{{ $job->title }}</p>

                                        <p class="font-thin text-sm">{{ $job->contract }} - <span>{{ $job->salary }}</span></p>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1">
                                    <div class="flex items-start gap-1">
                                        <div class="!mb-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[20px]">
                                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                                            </svg>
                                        </div>
                                          <div class="sm:flex gap-1">
                                              {{ $job->location }} 
                                              <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-[20px]">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                                  </svg>
                                                      
                                                </div> 
                                            <span class="text-xs md:text-base">{{ $job->created_at->diffForHumans() }}</span>
                                          </div>
                                    </div>
                                    <div class="md:flex justify-end">
                                        @foreach ($job->skills as $skill)
                                            <x-blog.components.post-tag :text="$skill->name" :color="array_rand(['sky' => 'sky', 'green' => 'green', 'orange' => 'orange', 'blue' => 'blue'], 1)"/>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </x-blog.components.card-long>
                    </a>
                    @endforeach
                    
                </x-blog.pages.grid-1>
                
            </div>
        </x-blog.pages.section> 
    </div>
