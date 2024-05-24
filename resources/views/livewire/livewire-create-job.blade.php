<x-blog.components.card>
    <div x-data={open:false}>
        {{-- extract into component --}}
        @if (session('success'))
        <div class="bg-green-400 text-white p-4 rounded-sm">
            {{ session('success') }}
        </div>
    @endif
       <div class="flex justify-between">
           <div>
               <h1 class="md:text-3xl text-4xl font-black">Create Job</h1>
               <p class="text-gray-900 text-xs font-thin">Use the form below to add your agency..</p>
           </div>
           <div> 
               <div x-on:click="open = ! open">
                   <x-blog.btn.btn-primary x-on:click="open = ! open"/>
               </div>
           </div>
       </div>

       <div x-show="open">
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
                   <div class="mt-1">
                       <p class="text-xs">
                           @if ($logo) 
                               <img src="{{ $logo->temporaryUrl() }}">
                           @endif
                       </p>
                       <x-text-input placeholder="Featured image" type="file" wire:model="logo" class="block mt-1 w-full" autofocus autocomplete="logo" />
                       <x-input-error :messages="$errors->get('form.logo')" class="mt-2" /> 
                       
                   </div>
               </div>

               <div class="mt-4 flex justify-between"> 
               <button
                   type="submit"
                   class="uppercase mt-15 bg-green-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-2xl">
                   Save
               </button>
            </div>
           </form>
       </div>
   </div>
    
    <div>
        <x-blog.text.text textSize="header2" color="black" value="Your Jobs" class="font-black font-serif"/>
        @forelse ($userJobs->jobs as $jobs)
        <a href="{{ route('jobs.update',['id' => $jobs->id]) }}" wire:navigate>
            <div class="rounded-sm p-10 bg-white w-full flex justify-between mb-2 shadow">
                <div>
                    <img src="{{ asset('storage/' . $jobs->logo) }}" class="rounded-full w-[100px]">
                </div>
                <div>
                    {{ $jobs->title }} || {{ $jobs->salary }}
                </div>
            </div>
        </a>
        @empty
            <h3>You have not posted any job</h3>
        @endforelse
    </div>
</x-blog-components.card>