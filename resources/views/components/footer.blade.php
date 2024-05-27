<div>
    <x-blog.pages.section color="black" title="" textColor="white" textSize="large">
        <x-blog.pages.grid-1 class="text-center w-full">
            <x-blog.text.text color="white" textSize="medium" value="Subscribe to Our Mailing List"/>
            <div class="py-2">

                <x-blog.components.email-list/>
            </div>

            <div class="max-w-4xl mx-auto">
                <x-blog.text.text color="white" class="font-bold" textSize="small" value="The process was drop-dead simple, and we were shocked by the quality and volume of responses we got by posting on LaraJobs – miles above the usual job boards."/>
                
                <x-blog.text.text color="white" class="font-bold p-2" textSize="small" value="Tommy McGuire"/>

               <div class="gird grid-cols-1 place-content-center">
                <div class="flex justify-center md:gap-12 gap-4 text-gray-500 py-4">
                        <div class="text-xl">
                            <a href="{{ route('jobs.all') }}" class="text-gray-500 hover:text-gray-300" wire:navigate>Jobs</a>    
                        </div>
                        <div class="text-xl">
                            <a href="{{ route('agency.all') }}" class="text-gray-500 hover:text-gray-300" wire:navigate>Consultants</a>    
                        </div>
                        <div class="text-xl">
                            <a href="{{ route('jobs.all') }}" class="text-gray-500 hover:text-gray-300" wire:navigate>Portfolio</a>    
                        </div>
                        <div class="text-xl">
                            <a href="{{ route('home') }}" class="text-gray-500 hover:text-gray-300" wire:navigate>Blog</a>    
                        </div>
                </div>
                <div class="text-gray-500">
                    Built by UserScape in partnership with Laravel News
                    <div>
                        © {{ '20'. date('y') }}
                    </div>
                </div>
               </div>
            </div>
        </x-blog.pages.grid-1>
    </x-blog.pages.section>
</div>