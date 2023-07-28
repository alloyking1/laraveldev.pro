
<x-guest-layout>
    
    @foreach ($postDetail as $post )
    
    @php
        $meta_description = $post->meta->meta_description;
        $meta_keywords = $post->meta->meta_keywords;
        $meta_robots = $post->meta->meta_robots
    @endphp
    @section('title', "$post->title")
    @section('meta_description', "$meta_description") 
    @section('meta_keywords', "$meta_keywords")
    @section('meta_robots', "$meta_robots")

    <div class="w-4/5 mx-auto">
        <div class="pt-10">
            <a href="{{ URL::previous() }}"
               class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all py-20">
                < Back to previous page
            </a>
        </div> 

        <h4 class="text-left sm:text-center text-2xl sm:text-4xl md:text-5xl font-bold text-gray-900 py-10 sm:py-20">
            {{ $post->title }}
        </h4>

        <p class=" italic">
            Categories:
            {{-- @foreach ($post->categories as $category)
                    {{ $category->title }}
            @endforeach --}}
        </p>

        <div class="block lg:flex flex-row">
            <div class="basis-9/12 text-center sm:block sm:text-left">
                <span class="text-left sm:text-center sm:text-left sm:inline block text-gray-900 pb-10 sm:pt-0 pt-0 sm:pt-10 pl-0 -mt-8 sm:-mt-0">
                    Made by:
                    <a
                        href=""
                        class="font-bold text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all py-20">
                        {{ $post->user->name }}
                    </a>
                    On 17-07-2022
                </span>
            </div>
        </div>

        <div class="pt-10 pb-10 text-gray-900 text-xl">
            <p class="font-bold text-2xl text-black pt-10">
                {{ $post->excerpt }}
            </p>

            <p class="text-base text-black pt-10">
                {!! $post->body !!}
            </p>
        </div>
    </div>
    @endforeach
</x-guest-layout>