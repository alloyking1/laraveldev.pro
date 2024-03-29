<nav class="flex items-center justify-between flex-wrap bg-black p-6" x-data="{ open: false }">
    <div class="flex items-center flex-shrink-0 text-gray-100 mr-6">
        <a href="{{ route('home') }}">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-500" />
        </a>
    </div>
    
    <div class="block lg:hidden" @click="open = ! open">
      <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
      </button>
    </div>


      <div class="w-full hidden flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
        <a href="{{ route('home') }}" class="block mt-4 lg:inline-block lg:mt-0 font-bold text-gray-400 hover:text-teal-200 mr-4 hover:cursor-pointer">
          <x-blog.text.text color="white" textSize="x-small" value="Home"/>
        </a>
        <a href="{{ route('tutorial') }}" class="block mt-4 lg:inline-block lg:mt-0 font-bold text-gray-400 hover:text-teal-200 mr-4 hover:cursor-pointer">
          <x-blog.text.text color="white" textSize="x-small" value="Tutorials"/>
        </a>
        <a href="{{ route('packages') }}" class="block mt-4 lg:inline-block lg:mt-0 font-bold text-gray-400 hover:text-teal-200 mr-4 hover:cursor-pointer">
          <x-blog.text.text color="white" textSize="x-small" value="Packages"/>
        </a>
        <a href="{{ route('blog-post') }}" class="block mt-4 lg:inline-block lg:mt-0 font-bold text-gray-400 hover:text-teal-200 mr-4 hover:cursor-pointer">
          <x-blog.text.text color="white" textSize="x-small" value="Blog"/>
        </a>
        </div>
      </div>
 

    <div :class="{'block': open, 'hidden': ! open}" class="w-full lg:items-center lg:w-auto lg:hidden hidden">
      <div class="text-sm lg:flex-grow">
        <a href="{{ route('home') }}" class="block mt-4 lg:inline-block lg:mt-0 font-bold text-gray-400 hover:text-teal-200 mr-4 hover:cursor-pointer">
          <x-blog.text.text color="white" textSize="x-small" value="Home"/>
        </a>
        <a href="{{ route('tutorial') }}" class="block mt-4 lg:inline-block lg:mt-0 font-bold text-gray-400 hover:text-teal-200 mr-4 hover:cursor-pointer">
          <x-blog.text.text color="white" textSize="x-small" value="Tutorials"/>
        </a>
        <a href="{{ route('packages') }}" class="block mt-4 lg:inline-block lg:mt-0 font-bold text-gray-400 hover:text-teal-200 mr-4 hover:cursor-pointer">
          <x-blog.text.text color="white" textSize="x-small" value="Packages"/>
        </a>
        <a href="{{ route('blog-post') }}" class="block mt-4 lg:inline-block lg:mt-0 font-bold text-gray-400 hover:text-teal-200 mr-4 hover:cursor-pointer">
          <x-blog.text.text color="white" textSize="x-small" value="Blog"/>
        </a>
      </div>
    </div>
  </nav>