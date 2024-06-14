
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
    <x-blog.components.card>
        <div x-data={open:true}>
        <x-blog.components.flash-message status="{{ session('success') }}"/>

        <div class="flex justify-between">
            <div>
                <h1 class="md:text-3xl text-4xl text-gray-700">Portfolios</h1>
            </div>
            <div> 
                <div x-on:click="open = ! open">
                    <x-primary-button>
                        <div>Create Portfolio</div>
                    </x-primary-button>
                </div>
            </div>
        </div>

        <div x-show="open">
            <form wire:submit="save">
                <div class="mt-4 grid grid-cols-5 -gap-2">
                    <div class="mt-1">
                        <x-text-input disabled placeholder="{{'https://'. env('APP_NAME').'/' }}" class="block mt-1 w-full rounded-r-none" type="text" autofocus autocomplete="form.company_name" />
                    </div>
                    <div class="mt-1 col-span-4">
                        <div class="flex w-full">
                            <x-portfolio.available-name-check />
                        </div>
                    </div>                 
                </div>

                <div class="mt-1 grid gap-2">
                    <div class="mt-1">
                        <x-text-input wire:model="form.contract" placeholder="Greeting" class="block mt-1 w-full" type="text" autofocus autocomplete="form.contract" />
                        <x-input-error :messages="$errors->get('form.contract')" class="mt-2" />
                    </div>
                </div>

                <div class="mt-4">
                    <textarea placeholder="About you" wire:model="form.about_you" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="6" cols="80" type="text"></textarea>
                    <x-input-error :messages="$errors->get('form.about_you')" class="mt-2" />
                </div>


                <div class="mt-2 grid grid-cols-3 gap-2">
                    <div class="mt-1">
                        <x-text-input wire:model="form.salary" placeholder="LinkedIn" class="block mt-1 w-full" type="text" autofocus autocomplete="form.salary" />
                        <x-input-error :messages="$errors->get('form.salary')" class="mt-2" />
                    </div>
                    <div class="mt-1">
                        <x-text-input wire:model="form.application_link" placeholder="Twitter" class="block mt-1 w-full" type="text" autofocus autocomplete="job.application_link" />
                        <x-input-error :messages="$errors->get('form.application_link')" class="mt-2" />
                    </div>
                    <div class="mt-1">
                        <x-text-input wire:model="form.application_link" placeholder="Github" class="block mt-1 w-full" type="text" autofocus autocomplete="job.application_link" />
                        <x-input-error :messages="$errors->get('form.application_link')" class="mt-2" />
                    </div>
                </div>

                <div class="mt-2 grid grid-cols-1 gap-2">
                    <div class="mt-1">
                        <x-text-input wire:model="form.contract" placeholder="Enter skills (PHP,Laravel)" class="block mt-1 w-full" type="text" autofocus autocomplete="form.contract" />
                        <x-input-error :messages="$errors->get('form.contract')" class="mt-2" />
                        <div>
                            <p class="text-xs text-gray-400">You can enter more than one skill separated with ","</p>
                        </div>
                    </div>
                </div>
                

                <div class="mt-4 flex justify-between"> 
                <x-primary-button class="bg-green-500">
                    Continue
                </x-primary-button>
                </div>
            </form>
            <div class="py-4">
                <hr>
            </div>
        </div>
    </div>
        
        <div>
            <x-blog.pages.grid-1 class="pt-4">
                {{-- @forelse ($userJobs->jobs  as $jobs )
                <a href="{{ route('jobs.update',['id' => $jobs->id]) }}" wire:navigate>
                    <x-blog.components.job-card :job="$jobs"/>
                </a>
                @empty
                    <x-blog.components.card-long>
                        <x-blog.text.text textSize="xx-small" color="gray" value="Let the world see your Job!" class=""/>
                    </x-blog.components.card-long>
                @endforelse --}}
                
            </x-blog.pages.grid-1>
        </div>
    </x-blog-components.card>
</div>