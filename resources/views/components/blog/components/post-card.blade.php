@props([
    'title',
    'excerpt',
    'href' => '#',
    'editRoute' => '#',
    'userName',
    'date',
    'route',
    'tagDetail' => null,
])

<div {{ $attributes->merge(['class' => 'w-full rounded-xs bg-white shadow-sm rounded-md p-4 pb-0']) }}>
        <div class="w-11/12 mx-auto pb-10">
            @foreach ($tagDetail as $tag )
                <x-blog.components.post-tag :text="$tag->name" :color="array_rand(['sky' => 'sky','black' => 'black', 'green' => 'green', 'orange' => 'orange', 'blue' => 'blue'], 1)"/>
            @endforeach
            
            <a href="{{ $href }}">
                <h2 class="text-gray-900 text-xl font-bold pt-6 pb-0 sm:pt-0 hover:text-gray-700 link link-underline link-underline-black break-words">
                        {{ $title }}
                </h2>

                <p class="text-gray-500 text-xs py-8 w-full break-words">
                    {{ $excerpt }}
                </p>

                <div class="text-gray-500 text-xm">
                    <p class="text-[9px] hover:text-[#fed7aa]">Made by {{ $userName  }} on {{ $date->format('d/m/y') }} </p>
                </div>
            </a>

        {{-- <div class="py-4 text-blue-200">
            {{-- fix error.. if auth user === post_user_id 
           @if (Auth::user())
               <a href="{{ $editRoute }}">Edit Post</a>
           @endif
        </div> --}}
        </div>
</div>


<style>
	.link-underline {
		border-bottom-width: 0;
		background-image: linear-gradient(transparent, transparent), linear-gradient(#fff, #fff);
		background-size: 0 3px;
		background-position: 0 100%;
		background-repeat: no-repeat;
		transition: background-size .5s ease-in-out;
	}

	.link-underline-black {
		background-image: linear-gradient(transparent, transparent), linear-gradient(rgb(14, 8, 12), rgb(14, 9, 12))
	}

	.link-underline:hover {
		background-size: 100% 3px;
		background-position: 0 100%
	}
</style>