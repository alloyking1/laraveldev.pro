<x-guest-layout>
    <div>
        <x-blog.seo.page-meta
        title="Laraveldev.pro"
        description="providing laravel coding tutorials for laravel developers "
        keywords="laravel,coding,tallstack,livewire,laraveldeveloper,laravel jobs, laravel news"
        robots="laravel,coding,tallstack,livewire,laraveldeveloper,laravel jobs, laravel news"
        />
        <x-blog.pages.section color="black" textColor="white" textSize="large" class="relative">
            <div class="">
                @if ($agency->feature_img == NULL)
                    <div class="border mx-auto rounded-full w-[30px] p-6">
                        <x-blog.components.no-logo-svg class="text-white w-[5rem]"/>
                    </div>
                @else
                    <div class="border max-w-xl mx-auto rounded-full w-[15px] p-6 bg-white">
                        <div class="grid grid-cols-2 gap-1">
                            <div>
                                <img src="{{ asset('storage/' . $agency->feature_img) }}" class="w-[12px] rounded-full">
                            </div>
                        </div>
                        
                    </div>
                @endif
                <div class="text-center grid place-content-center justify-center">
                    <x-blog.text.text textSize="header2" color="white" :value="$agency->name" class="font-black"/>
            
                    <div class="max-w-2xl mx-auto mt-4">
                        <x-blog.text.text textSize="x-small" color="white" class="font-thin" :value="$agency->short_description"/>
                        <x-blog.components.post-tag :text="$agency->headquarters" :color="array_rand(['sky' => 'sky', 'green' => 'green', 'orange' => 'orange', 'blue' => 'blue'], 1)"/>
                        <x-blog.components.post-tag :text="$agency->project_size" :color="array_rand(['sky' => 'sky', 'green' => 'green', 'orange' => 'orange', 'blue' => 'blue'], 1)"/>
                    </div>
                </div>
            </div>
        </x-blog.pages.section>
        
        <x-blog.pages.section color="white" title="" textColor="black" textSize="large">
           
            <div class="max-w-4xl mx-auto mt-4">
                {{-- <div class="rounded-2xl shadow-2xl p-6 bg-white -mt-[10rem] md:-mt-[10rem] z-10"> --}}
                    <x-blog.text.text textSize="header3" color="black" :value="$agency->about_company" class="font-black"/>
                        <a
                        href="{{ $agency->website }}"
                        class="py-3 text-base font-medium px-7 text-dark dark:text-black hover:text-primary -mr-4"
                        >
                      <x-danger-button>Visit {{ $agency->name }}</x-danger-button>
                      </a>
                {{-- </div> --}}
            </div>
        </x-blog.pages.section> 
    </div>
    
</x-guest-layout>
