<nav class="flex items-center justify-between flex-wrap bg-black p-6" x-data="{ open: false }">
    <div class="flex items-center flex-shrink-0 text-gray-100 mr-6">
        <a href="{{ route('dashboard') }}">
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
         <x-blog.nav.link text="Home" link="{{ route('home') }}"/>
         <x-blog.nav.link text="Blog" link="{{ route('pages.blog') }}"/>
         <x-blog.nav.link text="Packages" link="{{ route('pages.blog') }}"/>
         <x-blog.nav.link text="Tutorials" link="{{ route('pages.blog') }}"/>
        </div>
        {{-- <div>
          <a href="#" class="inline-block text-sm px-6 py-4 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-800 hover:bg-white mt-4 lg:mt-0">Login</a>
        </div> --}}
      </div>
 

    <div :class="{'block': open, 'hidden': ! open}" class="w-full lg:items-center lg:w-auto lg:hidden hidden">
      <div class="text-sm lg:flex-grow">
        <x-blog.nav.link text="Home" link="{{ route('home') }}"/>
        <x-blog.nav.link text="Blog" link="{{ route('pages.blog') }}"/>
        <x-blog.nav.link text="Blog" link="{{ route('pages.blog') }}"/>
      </div>
      {{-- <div>
        <a href="#" class="inline-block text-sm px-6 py-4 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-800 hover:bg-white mt-4 lg:mt-0">Request Leave</a>
      </div> --}}
    </div>
  </nav>