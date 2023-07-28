
<x-guest-layout>
    
    @foreach ($postDetail as $post )
    
    @if ($post->meta)
        @php
            $meta_description = $post->meta->meta_description;
            $meta_keywords = $post->meta->meta_keywords;
            $meta_robots = $post->meta->meta_robots
        @endphp
        @section('title', "$post->title")
        @section('meta_description', "$meta_description") 
        @section('meta_keywords', "$meta_keywords")
        @section('meta_robots', "$meta_robots")
    @endif

    <x-blog.pages.section color="black" textColor="white" textSize="large">
        <div class="px-32">
            <div class="text-center grid place-content-center justify-center">
            <x-blog.text.text textSize="header2" color="white" value="{{ $post->title }}" class="font-black font-serif"/>
            <x-blog.text.text textSize="large"  color="gray" class="font-mono mt-8" value="{{ $post->excerpt }}"/>
                <x-blog.pages.grid-1>
                    <div class="mt-4">
                        @foreach ($post->tag as $tag )
                        <x-blog.components.post-tag :text="$tag->name" :color="array_rand(['sky' => 'sky', 'green' => 'green', 'orange' => 'orange', 'blue' => 'blue'], 1)"/>
                    @endforeach
                    </div>
                </x-blog.pages.grid-1>
            </div>
        </div>
        
    </x-blog.pages.section>
    
    <x-blog.pages.grid-1 class="mt-16 mb-32">
        <div class="mx-8 md:mx-auto">
            <x-blog.text.text textSize="x-small"  color="gray" class="font-mono mt-8">
                {!! $post->body !!}
            </x-blog.text.text>
        </div> 
    </x-blog.pages.grid-1>



    <x-blog.pages.grid-1>
        <span class="sm:text-left text-center sm:inline block text-gray-900 pb-10 sm:pt-0 pt-0 pl-0 -mt-8 sm:-mt-0 mx-32">
            Author:
            <a
                href="https://twitter.com/alloyking_1"
                target="_blank"
                class="font-bold text-green-500 hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all py-20">
                {{ $post->user->name }}
            </a>
            on {{ date('d-m-Y', strtotime($post->created_at)) }}
        </span>
    </x-blog.pages.grid-1>
    

    
    @endforeach
</x-guest-layout>