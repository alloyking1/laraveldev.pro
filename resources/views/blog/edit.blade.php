<x-app-layout>
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

            @foreach ($post as $postValue )
                <x-blog.components.card title="Edit Post" subtitle="Use the form below to edit post..">
                    <form
                        action="{{ route('blog.update', $postValue->id) }}"
                        method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="mt-4">
                            <x-text-input id="title" placeholder="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $postValue->title ?? '' )" required autofocus autocomplete="title" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <textarea placeholder="Enter Excerpt" :value="old('excerpt', $postValue->excerpt)" name="excerpt" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="6" cols="80" type="text">
                            {{ $postValue->excerpt }}
                            </textarea>
                            <x-input-error :messages="$errors->get('excerpt')" class="mt-2" />
                        </div>
                        <div class="mt-4 grid grid-cols-3 gap-2">
                            <div>
                                <x-text-input id="min_to_read" placeholder="Minutes to read" class="block mt-1 w-full" type="number" name="min_to_read" :value="old('min_to_read', $postValue->min_to_read ?? '')" required autofocus autocomplete="min_to_read" />
                                <x-input-error :messages="$errors->get('min_to_read')" class="mt-2" />
                            </div>
                            <div class="mt-1">
                                <x-input-error :messages="$errors->get('category')" class="" />
                                <select name="category" multiple class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" id="">
                                    
                                    <option value="#" disabled>Select Category</option>
                                    @foreach ($category as $otherCategories)
                                        @if (in_array($otherCategories->title, array_values($selectedCategory)))
                                            <option value="{{ $otherCategories->id }}" selected> {{ $otherCategories->title }}</option>
                                        @else
                                            <option value="{{ $otherCategories->id}}"> {{ $otherCategories->title }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            
                            </div>

                            <div class="mt-1">
                                <x-input-error :messages="$errors->get('tag')" class="" />
                                    <select name="tag" multiple class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" id="">
                                        <option value="#" disabled>Select Tag</option>
                                            @foreach ($tag as $selectedTag )
                                                @if (in_array($selectedTag->name, array_values($selectedTags)))
                                                    <option value="{{ $selectedTag->id }}" selected> {{ $selectedTag->name }}</option>
                                                @else
                                                    <option value="{{ $selectedTag->id }}"> {{ $selectedTag->name }}</option>
                                                @endif
                                            @endforeach
                                    </select>
                            </div>
                        </div>

                        <div class="mt-4">
                        <x-forms.tinymce-editor name="body" value="{{ $postValue->body }}"/>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="is_published" :value="__('Published')" />
                            <x-text-input id="is_published" placeholder="Minutes to read" class="block mt-1" type="checkbox" name="is_published" :value="old('is_published')" autofocus autocomplete="min_to_read" />
                            <x-input-error :messages="$errors->get('is_published')" class="mt-2" />
                        </div>

                        <div class="mt-4 grid grid-cols-3 gap-2">
                            <div class="mt-4">
                                <x-text-input id="meta_description" placeholder="Meta Description.." class="block mt-1 w-full" type="text" name="meta_description" :value="old('meta_description', $postValue->meta->meta_description ?? '')" required autofocus autocomplete="meta_description" />
                                <x-input-error :messages="$errors->get('meta_description')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-text-input id="meta_keywords" placeholder="Meta Keywords.." class="block mt-1 w-full" type="text" name="meta_keywords" :value="old('meta_keywords', $postValue->meta->meta_keywords ?? '')" required autofocus autocomplete="meta_keywords" />
                                <x-input-error :messages="$errors->get('meta_keywords')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-text-input id="meta_robots" placeholder="Meta Robots..." class="block mt-1 w-full" type="text" name="meta_robots" :value="old('meta_robots', $postValue->meta->meta_robots ?? '')" required autofocus autocomplete="meta_robots" />
                                <x-input-error :messages="$errors->get('meta_robots')" class="mt-2" />
                            </div>
                        </div>

                        <div class="mt-4">
                        <x-input-error :messages="$errors->get('grade')" class="" />
                            <select name="grade" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" id="">
                                <option value="#" disabled>Select Grade</option>
                                @foreach (App\Enums\BLogPostGradeEnum::cases() as $item)
                                    @if($postValue->grade->name == $item->value)
                                        <option value="{{ $item }}" selected> {{ $item->value }}</option>
                                    @else
                                        <option value="{{ $item }}"> {{ $item->value }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>


                        <div class="mt-4 flex justify-between">
                        <button
                            type="submit"
                            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-2xl">
                            Save Post
                        </button>
                        <button
                            type="submit"
                            class="uppercase mt-15 bg-green-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-2xl">
                            Publish post
                        </button>
                        </div>
                    </form>
                </x-blog-components.card>
            @endforeach
    </div>

</x-app-layout>