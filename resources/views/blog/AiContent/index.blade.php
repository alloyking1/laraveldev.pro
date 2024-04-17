<x-app-layout>
    {{-- create prompts --}}
    <div class="w-4/5 mx-auto pb-32">

        <div class="m-auto pt-20">
            <div class="pb-8">
                @if ($errors->any())
                    <div class="bg-red-500 text-white font-bold rounded-t px-4">
                        Something went wrong...
                    </div>
                    <ul class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-4 text-red-700">
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <div class="pb-8">
                <x-blog.components.flash-message status="success" message="success"/>
                <x-blog.components.flash-message status="error" message="error"/>
            </div>

            <x-blog.components.card title="Ai prompt" subtitle="Enter prompt for post to be created by AI">
            {{-- <form action="{{ route('blog.ai-prompt.save', ['id' => $category ? $category->id : null] ) }}" method="POST"> --}}
            <form action="{{ route('blog.ai-prompt.save') }}" method="POST">
                @csrf
                <div class="mt-4">
                    <x-text-input id="title" placeholder="title" class="block mt-1 w-full" type="text" name="title" :value="old('category', $category->title ?? '')" required autofocus autocomplete="category" />
                    <x-input-error :messages="$errors->get('category')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <textarea placeholder="Enter Excerpt" :value="old('description', $category->description ?? '')" name="description" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="6" cols="30" type="text">
                    {{ $category->description ?? '' }}
                    </textarea>
                    <x-input-error :messages="$errors->get('excerpt')" class="mt-2" />
                </div>

                <div class="mt-4 flex justify-between">
                <button
                    type="submit"
                    class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-2xl">
                    Save category
                </button>
                </div>
            </form>
            </x-blog-components.card>
    </div>
    {{-- display prompts --}}
    {{-- <div class="py-12">
        
        <div class="max-w-7xl mx-auto w-full sm:px-6 lg:px-8">
            <x-blog.pages.grid-1>
                <x-blog.btn.btn-primary href="{{ route('category.create') }}" text="New Category"/>
                <x-blog.components.admin-table :th="['title', 'description', 'edit']">
                    
                    @foreach ($category as $item)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4 text-gray-900">
                            {{ $item->title }}
                        </td>
                        <td class="px-6 py-4 text-gray-900">
                            {{ $item->description }}
                        </td>
                        <td class="px-6 py-4 text-gray-900">
                            <x-blog.nav.link text="Tutorials" link="{{ route('category.create', $item->id) }}" text="Edit"/> 
                        </td>
                    </tr>
                    @endforeach
                </x-blog.components.admin-table>

            </x-blog.pages.grid-1>

        
        </div>
    </div>
     --}}
</x-app-layout>