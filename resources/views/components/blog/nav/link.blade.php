@props([
    'link' => '#',
    'text' => '',
])

        <a :href="{{ $link }}" {{ $attributes->class(['block mt-4 lg:inline-block lg:mt-0 font-bold text-gray-400 hover:text-teal-200 mr-4 hover:cursor-pointer'])}}>
    <x-blog.text.text color="white" textSize="x-small" :value="$text"/>
</a>