@props([
    'value',
    'color' => 'black'
])
<div {{ $attributes->merge(['class' => 'md:text-5xl text-3xl'])->class([
    'text-white' => $color === 'white',
    'text-black' => $color === 'black',
    // 'text-white' => $color === 'white',
]) }}>
    {{ $value }}
</div>