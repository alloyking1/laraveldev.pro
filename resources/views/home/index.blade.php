<x-guest-layout>
    <x-blog.seo.page-meta
      title="Laravel Tutorials & Best Practices | Learn PHP & Laravel Development | LaravelDev.pro"
      description="Learn Laravel development through comprehensive tutorials, books, courses, best practices, and expert tips. Join our community of PHP/Laravel developers to enhance your skills and stay updated with the latest Laravel trends."
      keywords="laravel tutorials, laravel development, php development, laravel best practices, laravel tips, laravel learning, web development, php framework, laravel documentation, laravel community"
      robots="laravel,tutorials,books,courses,best practices,expert tips,php,laravel development,web development,php framework,laravel documentation,laravel community"
    />

    <x-blog.pages.section color="black" textColor="white" textSize="large" class="relative">
        <div class="h-screen mt-16">
          <div class="text-center grid place-content-center justify-center">
            <x-blog.text.text textSize="header2" color="white" value="Learn Laravel | Tutorials, Tips & Best Practices" class="font-black"/>
    
            <div class="max-w-2xl mx-auto mt-4">
              <x-blog.text.text textSize="x-small"
              color="white"
              class="font-thin"
              value="We are dedicated to making you a better Laravel developer through a wide range of resources to help you learn and grow as a PHP/Laravel developer."/>
            
                <x-blog.pages.grid-1 class="mt-16">
                    <x-blog.text.text color="white" class="" textSize="medium" value="Join our community of Laravel professionals for expert insights and advanced tutorials"/>
                    <div class="">
                        <x-blog.components.email-list/>
                    </div>
                </x-blog.pages.grid-1>
            </div>
          </div>
        </div>
    </x-blog.pages.section>


    {{-- <x-blog.pages.section color="black" textColor="white" textSize="large" class="relative">
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
    </x-blog.pages.section> --}}
</x-guest-layout>