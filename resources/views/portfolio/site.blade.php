<x-guest-layout>
 
    <x-blog.seo.page-meta
        title="Laraveldev.pro - portfolio website for laravel developers | software developers portfolio website | free."
        description="providing laravel coding tutorials for laravel developers - laravel blog | laravel news | laravel jobs | laravel updates | laravel packages | all things laravel "
        keywords="laravel,coding,tallstack,livewire,laraveldeveloper,laravel jobs, laravel news, learn laravel, laravel LMS, laravel saas, laravel coding, laravel architect, whats new in laravel - x"
        robots="laravel,coding,tallstack,livewire,laraveldeveloper,laravel jobs, laravel news, learn laravel, laravel LMS, laravel saas, laravel coding, laravel architect, whats new in laravel - x"
      />
    @foreach($portfolio as $userPortfolio)
        <x-blog.pages.section color="gray" textColor="black" textSize="large" class="">
            <x-blog.pages.grid-2 class="">

                <div class="rounded-full">
                    <img src="{{ asset('storage/' . $userPortfolio->profile_img ) }}" class="rounded-full shadow-lg w-50 h-auto" alt="">
                </div>

                <div class="text-left grid place-content-center justify-center">
                    <x-blog.text.text textSize="header2" color="black" :value="$userPortfolio->greeting" class="font-black"/>
            
                    <div class="max-w-2xl mx-auto mt-4">
                        <x-blog.text.text textSize="x-small"
                        color="black"
                        class="font-thin"
                        :value="$userPortfolio->about"/>
                    </div>
                    <div>
                        <form action="">
                            <div class="flex mt-4">
                                <input type="Enter your email" class="p-2 w-48 md:w-80 rounded-md mr-2 border border-white bg-gray-100">
                                <x-primary-button>Require offer</x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>

                
            </x-blog.pages.grid-2>
        </x-blog.pages.section>
        
        <x-blog.pages.section color="offWhite" title="What I do" textColor="black" textSize="large">
            
            <x-blog.pages.grid-5 class="mt-4">
                @foreach ($userPortfolio->services as $service)
                    <x-blog.components.portfolio-services-card 
                    :name="$service->name" 
                    :description="$service->description" 
                    />
                @endforeach
            </x-blog.pages.grid-5>
            <div class="">

                <div class="text-center pb-4 mt-24">
                    <x-blog.text.text color="black" textSize="medium" value="My Skills"/>
                </div>
                <div class="flex justify-center max-w-2xl mx-auto">
                    @foreach ($userPortfolio->skills as $skill )
                    <x-blog.components.post-tag :text="$skill" :color="array_rand(['sky' => 'sky','black' => 'black', 'green' => 'green', 'orange' => 'orange', 'blue' => 'blue'], 1)"/>
                        @endforeach
                </div>
            </div>
                
        </x-blog.pages.section>

        <x-blog.pages.section color="gray" title="Projects" textColor="black" textSize="large">
            <x-blog.text.text textSize="x-small" color="black" class="font-thin" value="Whether you have a mobile app idea that needs to come to life or a website that"/>
            <x-blog.pages.grid-2 class="mt-16 grid md:grid-cols-5">
                @foreach ($userPortfolio->projects as $project)
                    <x-blog.components.portfolio-project-card 
                    :name="$project->name" 
                    :description="$project->description" 
                    :link="$project->link" 
                    :image="$project->img" 
                    />
                @endforeach
            </x-blog.pages.grid-2>
        </x-blog.pages.section> 

        <x-blog.pages.section color="white" title="Find me" textColor="black" textSize="large">
            <x-blog.text.text textSize="x-small" class="text-gray-700 text-4xl mt-4" value="Other places you can find me"/>
            
            <x-blog.pages.grid-2 class="">
                <div class="border">
                    <x-blog.text.text textSize="large" class="text-gray-700 text-4xl mt-4" value="My Resume"/>
                    <embed src="{{ asset('storage/' . $userPortfolio->cv ) }}" width="800px" height="2100px" />
                </div>
                <div class="border">
                    <x-blog.text.text textSize="large" class="text-gray-700 text-4xl mt-4" value="Social Media"/>
                    <x-blog.pages.grid-1 class="">
                        <div>facebook</div>
                        <div>Twitter</div>
                        <div>Github</div>
                    </x-blog.pages.grid-1>
                </div>
            </x-blog.pages.grid-2>
                
        </x-blog.pages.section> 
    @endforeach
  
</x-guest-layout>
