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
            
                


              <x-blog.pages.grid-5 class="mt-48">
                @foreach ($jobs as $job )
                    {{-- <x-blog.components.post-card :tagDetail="$postValue->tag" editRoute="{{ route('blog.edit', $postValue) }}" href="{{ route('blog.show', $postValue->slog)}}" :title="$postValue->title" :excerpt="$postValue->excerpt" :userName="$postValue->user->name" :date="$postValue->updated_at" /> --}}
                    <div class="rounded-2xl shadow-2xl p-6 bg-white -mt-[10rem] md:-mt-[10rem] z-10">
                        email list
                    </div>
                @endforeach
            </x-blog.pages.grid-5>
            </div>
          </div>
        </div>
    </x-blog.pages.section>
    {{-- <div class="max-w-6xl mx-auto">
        <div class="border-gray-50 w-auto"></div>
    </div> --}}
   
    {{-- <x-blog.pages.section color="white" title="" textColor="black" textSize="large">
        <div class="max-w-4xl mx-auto mt-4">
            <div class="rounded-2xl shadow-2xl p-6 bg-white -mt-[10rem] md:-mt-[10rem] z-10">
                email list
            </div>

            <x-blog.pages.grid-1 class="pt-32">
                @foreach ($jobs as $job )
                    <x-blog.components.card-long>
                        <div class="flex justify-between">
                            <div class="flex">
                                <div class="hidden md:block shadow rounded-lg border p-4 -ml-[3rem]">
                                    img
                                </div>
                                <div class="grid">
                                    <p>Company Name</p>
                                    <p>Job Title</p>
                                    <p>type<span>Salary</span></p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1">
                                <div>
                                    Remote, Uk only, 2wk
                                </div>
                                <div>
                                    cards, of, diff, skills
                                </div>
                            </div>
                        </div>
                    </x-blog.components.card-long>
                @endforeach
                
            </x-blog.pages.grid-1>
            
        </div>
    </x-blog.pages.section>  --}}

    {{-- <x-blog.pages.section color="gray" title="" textColor="black" textSize="large">
        sdfsldkfjsj
    </x-blog.pages.section> --}}

    {{-- <div class="border-1 bg-black rounded-md m-2 p-6"> --}}

        <x-blog.pages.section color="black" textColor="white" textSize="large" class="relative">
            <div class="shadow-lg border border-gray-50 p-16 pb-24 rounded-2xl">
                <x-blog.pages.grid-2 class="pt-32">
    
                    <div class="text-center grid place-content-center justify-center">
                        <x-blog.text.text textSize="header2" color="white" value="Consider hiring a Laravel agency" class="font-black"/>
                
                        <div class="max-w-2xl mx-auto mt-4">
                            <x-blog.text.text textSize="x-small"
                            color="white"
                            class="font-thin"
                            value="LaraJobs is our first stop whenever we're hiring a Laravel role. We've hired 10 Laravel developers in the last few years, all thanks to LaraJobs.” — Matthew Hall, ArborXR"/>
                        </div>
                    </div>
    
                    <div class="rounded-sm p-6 bg-white border-gray-100 shadow-md">
                        {{-- <img src="https://images.pexels.com/photos/1170412/pexels-photo-1170412.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""> --}}
                    </div>
                </x-blog.pages.grid-2>
            </div>
        </x-blog.pages.section>
    {{-- </div> --}}

    {{-- <x-blog.pages.section color="white" title="" textColor="black" textSize="large">
        <div class="max-w-4xl mx-auto mt-4">
            <x-blog.pages.grid-1 class="">
                @foreach ($agencies as $agency )
                    <x-blog.components.card-long>
                        <div class="flex justify-between">
                            <div class="flex">
                                <div class="hidden md:block shadow rounded-lg border p-4 -ml-[3rem]">
                                    img
                                </div>
                                <div class="grid">
                                    <p>Company Name</p>
                                    <p>Job Title</p>
                                    <p>type<span>Salary</span></p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1">
                                <div>
                                    Remote, Uk only, 2wk
                                </div>
                                <div>
                                    cards, of, diff, skills
                                </div>
                            </div>
                        </div>
                    </x-blog.components.card-long>
                @endforeach
                
            </x-blog.pages.grid-1>
            
        </div>
    </x-blog.pages.section>  --}}

    <x-blog.pages.section color="black" textColor="white" textSize="large" class="relative">
        <div class="">
            <x-blog.pages.grid-2 class="pt-32">

                <div>
                    <img src="https://images.pexels.com/photos/1181676/pexels-photo-1181676.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                    {{-- <img src="https://img.freepik.com/free-psd/design-banner-template_23-2148947824.jpg?t=st=1716477443~exp=1716478043~hmac=2d08b0516fbb71784fee998298aff4d281812267580a8b21e171c0a4d34a6710" alt=""> --}}
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
    </x-blog.pages.section>
</x-guest-layout>