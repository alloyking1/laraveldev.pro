@props([
    'color',
    'textColor' => null,
    'textSize' => null,
    'title' => null,
    'sub-title'=> null
])

<div {{ $attributes->merge(['class' => 'h-full md:p-32 p-12'])->class([
    'bg-black' => $color === 'black', 
    'bg-gray-100' => $color === 'white',
    'bg-gray-200' => $color === 'gray',
    'bg-gray-50' => $color === 'logoGreen',
    'bg-[rgb(240 250 249/var(--tw-bg-opacity))]' => $color === 'green',
    
    'bg-blue-900' => $color === 'blue',
]) }}>
    <div {{ $attributes->when($title)->merge(['class' => 'font-bold']) }}>
        <x-blog.text.text :color="$textColor" :textSize="$textSize" :value="$title"/>
    </div>
 {{ $slot }}
</div>