<x-blog.components.card title="Create Agency" subtitle="Use the form below to add your agency..">
    <form wire:submit="save">

        <div class="mt-4 grid grid-cols-3 gap-2">
            <div class="mt-1">
                <x-text-input wire:model="form.name" placeholder="Organization Name" class="block mt-1 w-full" type="text" autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('form.name')" class="mt-2" />
            </div>
            <div class="mt-1">
                <x-text-input wire:model="form.email" placeholder="Email" class="block mt-1 w-full" type="email" autofocus autocomplete="email" />
                <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
            </div>
            <div class="mt-2">
                    <select wire:model="form.type" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" id="">
                        <option value="" disabled selected hidden>Consultant type</option>
                        @foreach (App\Enums\AgencyTypeEnum::cases() as $item)
                            <option value="{{ $item }}"> {{ $item }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('form.type')" class="" />
            </div>
        </div>

        <div class="mt-4 grid grid-cols-3 gap-2">
            <div class="mt-1">
               
                    <select wire:model="form.headquarters" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" id="">
                        <option value="" disabled selected hidden>Company headquaters</option>
                        @foreach (App\Enums\ContinentEnum::cases() as $item)
                            <option value="{{ $item }}"> {{ $item }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('form.headquarters')" class="" />
            </div>
            <div class="mt-1">
               
                    <select wire:model="form.size" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" id="">
                        <option value="" disabled selected hidden>Company size</option>
                        @foreach (App\Enums\TeamSizeEnum::cases() as $item)
                            <option value="{{ $item }}"> {{ $item }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('form.size')" class="" />
            </div>
            <div class="mt-1">
                
                    <select wire:model="form.project_size" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                        <option value="" disabled selected hidden>Minimum Project Size</option>
                        @foreach (App\Enums\ProjectSizeEnum::cases() as $projectSize)
                            <option value="{{ $projectSize }}"> {{ $projectSize }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('form.project_size')" class="" />
            </div>
        </div>

        <div class="mt-4 grid grid-cols-2 gap-2">
            <div class="mt-1">
                <x-text-input placeholder="Website link" class="block mt-1 w-full" type="text" wire:model="form.website"  autofocus autocomplete="website" />
                <x-input-error :messages="$errors->get('form.website')" class="mt-2" />
            </div>
            <div class="mt-1">
                <x-text-input placeholder="Video link" class="block mt-1 w-full" type="text" wire:model="form.video" autofocus autocomplete="video" />
                <x-input-error :messages="$errors->get('form.video')" class="mt-2" />
            </div>
        </div>

        <div class="mt-4">
            <textarea placeholder="Short description" wire:model="form.short_description" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="3" cols="80" type="text"></textarea>
            <x-input-error :messages="$errors->get('form.short_description')" class="mt-2" />
        </div>

        {{--  --}}
        <div class="mt-4">
            <textarea placeholder="About" wire:model="form.about_company" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="6" cols="80" type="text"></textarea>
            <x-input-error :messages="$errors->get('form.about_company')" class="mt-2" />
        </div>

        <div class="mt-4 grid grid-cols-2 gap-2">
            <div class="mt-1">
                <p class="text-xs">
                    Youtube video. Note: please use the embed URL. (https://www.youtube.com/embed/0Rq-yHAwYjQ)
                </p>
                <x-text-input placeholder="Company logo" class="block mt-1 w-full" type="text" wire:model="form.logo" autofocus autocomplete="logo" />
                <x-input-error :messages="$errors->get('form.logo')" class="mt-2" />
            </div>
            <div class="mt-1">
                <p class="text-xs">
                    Youtube video. Note: please use the embed URL. (https://www.youtube.com/embed/0Rq-yHAwYjQ)
                </p>
                <x-text-input placeholder="Featured image" class="block mt-1 w-full" type="text" wire:model="form.feature_img" autofocus autocomplete="feature_img" />
                <x-input-error :messages="$errors->get('form.feature_img')" class="mt-2" />
                   
            </div>
        </div>

        <div class="mt-4 flex justify-between"> 
        <button
            type="submit"
            class="uppercase mt-15 bg-green-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-2xl">
            Publish post
        </button>
        </div>
    </form>
    </x-blog-components.card>