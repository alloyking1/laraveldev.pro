<x-blog.components.card title="Create Agency" subtitle="Use the form below to add your agency..">
    <form
        action=""
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <div class="mt-4 grid grid-cols-3 gap-2">
            <div class="mt-1">
                <x-text-input id="name" placeholder="Name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('min_to_read')" class="mt-2" />
            </div>
            <div class="mt-1">
                <x-text-input id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                <x-input-error :messages="$errors->get('min_to_read')" class="mt-2" />
            </div>
            <div class="mt-2">
                <x-input-error :messages="$errors->get('type')" class="" />
                    <select name="type" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" id="">
                        <option value="#" disabled selected hidden>Consultant type</option>
                        @foreach (App\Enums\AgencyTypeEnum::cases() as $item)
                            <option value="{{ $item }}"> {{ $item }}</option>
                        @endforeach
                    </select>
            </div>
        </div>

        <div class="mt-4 grid grid-cols-3 gap-2">
            <div class="mt-1">
                <x-input-error :messages="$errors->get('headquarters')" class="" />
                    <select name="headquarters" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" id="">
                        <option value="#" disabled selected hidden>Company headquaters</option>
                        @foreach (App\Enums\ContinentEnum::cases() as $item)
                            <option value="{{ $item }}"> {{ $item }}</option>
                        @endforeach
                    </select>
            </div>
            <div class="mt-1">
                <x-input-error :messages="$errors->get('headquarters')" class="" />
                    <select name="size" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" id="">
                        <option value="#" disabled selected hidden>Company size</option>
                        @foreach (App\Enums\TeamSizeEnum::cases() as $item)
                            <option value="{{ $item }}"> {{ $item }}</option>
                        @endforeach
                    </select>
            </div>
            <div class="mt-2">
                <x-input-error :messages="$errors->get('type')" class="" />
                    <select name="type" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" id="">
                        <option value="#" disabled selected hidden>Consultant type</option>
                        @foreach (App\Enums\AgencyTypeEnum::cases() as $item)
                            <option value="{{ $item }}"> {{ $item }}</option>
                        @endforeach
                    </select>
            </div>
        </div>




        <div class="mt-4">
            <textarea placeholder="Enter Excerpt" :value="old('excerpt')" name="excerpt" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="6" cols="80" type="text"></textarea>
            <x-input-error :messages="$errors->get('excerpt')" class="mt-2" />
        </div>
        <div class="mt-4 grid grid-cols-3 gap-2">
            <div>
                <x-text-input id="min_to_read" placeholder="Minutes to read" class="block mt-1 w-full" type="number" name="min_to_read" :value="old('min_to_read')" required autofocus autocomplete="min_to_read" />
                <x-input-error :messages="$errors->get('min_to_read')" class="mt-2" />
            </div>
            <div class="mt-1">
                <x-input-error :messages="$errors->get('category')" class="" />
                    {{-- <select name="category" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" id="">
                        <option value="#" disabled>Select Category</option>
                        @foreach ($category as $each)
                            <option value="{{ $each->id }}"> {{ $each->title }}</option>
                        @endforeach
                    </select> --}}
            </div>
            <div class="mt-1">
                <x-input-error :messages="$errors->get('tag')" class="" />
                    {{-- <select name="tag" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" id="">
                        <option value="#" disabled>Select Tag</option>
                        @foreach ($tag as $item)
                            <option value="{{ $item->id }}"> {{ $item->title }}</option>
                        @endforeach
                    </select> --}}
            </div>
        </div>

        {{-- <div class="mt-4">
        <x-forms.tinymce-editor name="body" value=""/>
        </div> --}}

        <div class="mt-4">
            <x-input-label for="is_published" :value="__('Published')" />
            <x-text-input id="is_published" placeholder="Minutes to read" class="block mt-1" type="checkbox" name="is_published" :value="old('is_published')" autofocus autocomplete="min_to_read" />
            <x-input-error :messages="$errors->get('is_published')" class="mt-2" />
        </div>

        <div class="mt-4 grid grid-cols-3 gap-2">
            <div class="mt-4">
                <x-text-input id="meta_description" placeholder="Meta Description.." class="block mt-1 w-full" type="text" name="meta_description" :value="old('meta_description')" required autofocus autocomplete="meta_description" />
                <x-input-error :messages="$errors->get('meta_description')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-text-input id="meta_keywords" placeholder="Meta Keywords.." class="block mt-1 w-full" type="text" name="meta_keywords" :value="old('meta_keywords')" required autofocus autocomplete="meta_keywords" />
                <x-input-error :messages="$errors->get('meta_keywords')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-text-input id="meta_robots" placeholder="Meta Robots..." class="block mt-1 w-full" type="text" name="meta_robots" :value="old('meta_robots')" required autofocus autocomplete="meta_robots" />
                <x-input-error :messages="$errors->get('meta_robots')" class="mt-2" />
            </div>
        </div>

        <div class="mt-4">
                <x-input-error :messages="$errors->get('grade')" class="" />
                    <select name="grade" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" id="">
                        <option value="#" disabled selected hidden>Select Grade for post</option>
                        @foreach (App\Enums\BlogPostGradeEnum::cases() as $item)
                            <option value="{{ $item }}"> {{ $item }}</option>
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