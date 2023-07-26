@props([
    'color',
    'textColor' => 'white',
    'title' => null,
    'sub-title'=> null
])

<div {{ $attributes->merge(['class' => 'h-full md:p-32 p-12'])->class([
    'bg-black' => $color === 'black', 
    'bg-gray-100' => $color === 'white',
    'bg-gray-200' => $color === 'gray',
]) }}>
    <div {{ $attributes->when($title)->merge(['class' => 'font-bold']) }}>
        <x-blog.text.large :color="$textColor" :value="$title"/>
    </div>
 {{ $slot }}
</div>