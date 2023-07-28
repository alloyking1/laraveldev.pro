
@props([
    'cols' => 3
])

<div {{ $attributes->merge(['class' => 'grid grid-cols-1 md:px-32 place-contents-center gap-4'])->class([
]) }}>
    {{ $slot }}
</div>