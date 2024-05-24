
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Edit agency') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">         
        <div>
            <x-blog.components.card title="Edit job" subtitle="ksjdflkjsldfjsldjfksldfjslkfjslk">

                <div class="mt-4 grid grid-cols-1 gap-2">
                    <div class="mt-1">
                        <livewire:livewire-update-job-logo :id="$this->id" />
                    </div>
                </div>
                <div>
                    @if (session('success'))
                        <div class="bg-green-400 text-white p-4 rounded-sm">
                            {{ session('success') }}
                        </div>
                    @endif
        
                    <form wire:submit="save">

                        <div class="mt-4 grid grid-cols-2 gap-2">
                            <div class="mt-1">
                                <x-text-input wire:model="form.company_name" placeholder="Company Name" class="block mt-1 w-full" type="text" autofocus autocomplete="form.company_name" />
                                <x-input-error :messages="$errors->get('form.company_name')" class="mt-2" />
                            </div>
                            <div class="mt-1">
                                <x-text-input wire:model="form.title" placeholder="Job title" class="block mt-1 w-full" type="text" autofocus autocomplete="form.title" />
                                <x-input-error :messages="$errors->get('form.title')" class="mt-2" />
                            </div>                  
                        </div>
         
                        <div class="mt-4 grid grid-cols-2 gap-2">
                             <div class="mt-1">
                                 <x-text-input wire:model="form.contract" placeholder="Contract" class="block mt-1 w-full" type="text" autofocus autocomplete="form.contract" />
                                 <x-input-error :messages="$errors->get('form.contract')" class="mt-2" />
                             </div>
                             <div class="mt-1">
                                 <x-text-input wire:model="form.location" placeholder="location" class="block mt-1 w-full" type="text" autofocus autocomplete="form.location" />
                                 <x-input-error :messages="$errors->get('form.location')" class="mt-2" />
                             </div>
                         </div>
         
                        <div class="mt-4">
                            <textarea placeholder="Job description" wire:model="form.description" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="3" cols="80" type="text"></textarea>
                            <x-input-error :messages="$errors->get('form.description')" class="mt-2" />
                        </div>
         
                        <div class="mt-4">
                            <textarea placeholder="About company" wire:model="form.about_company" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="6" cols="80" type="text"></textarea>
                            <x-input-error :messages="$errors->get('form.about_company')" class="mt-2" />
                        </div>
         
         
                        <div class="mt-4 grid grid-cols-2 gap-2">
                         <div class="mt-1">
                             <x-text-input wire:model="form.salary" placeholder="$50,000 - $150,000" class="block mt-1 w-full" type="text" autofocus autocomplete="form.salary" />
                             <x-input-error :messages="$errors->get('form.salary')" class="mt-2" />
                         </div>
                         <div class="mt-1">
                             <x-text-input wire:model="form.application_link" placeholder="Job application link" class="block mt-1 w-full" type="text" autofocus autocomplete="job.application_link" />
                             <x-input-error :messages="$errors->get('form.application_link')" class="mt-2" />
                         </div>
                     </div>
         
                     <div class="mt-4 grid grid-cols-2 gap-2">
                            <div class="mt-1">
                             <x-multi-select-dropdown list="skills" selectedOptions="selectedOptions">
                                 <x-input-error :messages="$errors->get('form.selectedOptions')" class="mt-2" /> 
                             </x-multi-select-dropdown>
                            </div>
                        </div>
         
                        <div class="mt-4 flex justify-between"> 
                        <button
                            type="submit"
                            class="uppercase mt-15 bg-green-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-2xl">
                            Save
                        </button>
                        <button 
                        type="button"
                        wire:click="delete"
                        wire:confirm.prompt="Are you sure you want to delete this job?\n\nType DELETE to confirm|DELETE"
                            class="uppercase mt-15 bg-red-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-2xl">
                            Delete
                        </button>
                     </div>
                    </form>
                </div>
            </x-blog.components.card>
        </div>
    </div>
</div>
