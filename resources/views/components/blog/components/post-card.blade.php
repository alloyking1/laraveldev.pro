@props([
    'title',
    'excerpt',
    'href' => '#',
    'userName',
    'date',
    'route'
])

<div {{ $attributes->merge(['class' => 'w-full rounded-xl drop-shadow-xl bg-white shadow-sm rounded-sm p-8']) }}>
        <div class="w-11/12 mx-auto pb-10">
            <a href="{{ $href }}">
                <h2 class="text-gray-900 text-2xl font-bold pt-6 pb-0 sm:pt-0 hover:text-gray-700 transition-all">
                        {{ $title }}
                </h2>

                <p class="text-gray-900 text-lg py-8 w-full break-words">
                    
                        {{ $excerpt }}
                
                </p>

                <span class="text-gray-500 text-sm sm:text-base">
                    Made by:
                        <a href="{{ $href }}"
                        class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all">
                            {{ $userName }}
                        </a>
                    on {{ $date->format('d/m/y') }}
                </span>
            </a>

           
        </div>
</div>