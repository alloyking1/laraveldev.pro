
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
    <x-blog.components.card>
        <div x-data="{open:true, step: @entangle('step')}">
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
                {{-- separate into different files and routes --}}
                @if ($this->step == 1)
                   <x-portfolio.step-one/>
                @endif
                @if ($this->step == 2)
                    <x-portfolio.step-two/>
                @endif
                @if ($this->step == 3)
                    <x-portfolio.step-three/>
                @endif
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