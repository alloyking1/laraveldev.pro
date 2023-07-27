@props([
    'value',
    'color' => 'black',
    'textSize' => null,
])
<div {{ $attributes->merge(['class' => 'bg-none'])->class([
    'text-white' => $color === 'white',
    'text-black' => $color === 'black',
    'text-green-700' => $color === 'green',
    'md:text-8xl text-5xl' => $textSize === 'header1',
    'md:text-6xl text-5xl' => $textSize === 'header2',
    'md:text-4xl text-3xl' => $textSize === 'large',
    'md:text-3xl text-2xl' => $textSize === 'medium',
    'md:text-2xl text-1xl' => $textSize === 'small',
    'md:text-base text-xs' => $textSize === 'x-small',
    // 'text-white' => $color === 'white',
]) }}>
    {{ $value }}
</div>