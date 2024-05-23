
<!-- ====== Navbar Section Start -->
<header class="bg-black"
    x-data="
    {
    navbarOpen: false
    }
    "
  class="flex items-center w-full bg-white dark:bg-dark"
  >
  <div class="max-w-6xl mx-auto">
    <div class="relative flex items-center justify-between -mx-4">
        <div class="max-w-full px-4 w-60">
          <a href="{{ route('lander') }}" class="block w-full py-5">
          <img
              src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-primary.svg"
              alt="logo"
              class="dark:hidden"
              />
          <img
              src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-white.svg"
              alt="logo"
              class="hidden dark:block"
              />
          </a>
        </div>
        <div class="flex items-center justify-between w-full px-4">
          <div>
              <button
                @click="navbarOpen = !navbarOpen"
                :class="navbarOpen && 'navbarTogglerActive' "
                id="navbarToggler"
                class="border-teal-400 absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
                >
              <span
                class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"
                ></span>
              <span
                class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"
                ></span>
              <span
                class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"
                ></span>
              </button>
              
              <nav
                :class="!navbarOpen && 'hidden' "
                id="navbarCollapse"
                class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none dark:bg-dark-2 lg:dark:bg-transparent"
                >
                <ul class="block lg:flex">
                    <li>
                      <a href="{{ route('jobs.all') }}" class="block mt-4 lg:inline-block lg:mt-0 font-bold text-gray-400 hover:text-teal-200 mr-4 hover:cursor-pointer"  wire:navigate>
                        <x-blog.text.text color="white" textSize="x-small" value="Jobs"/>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('agency.all') }}" class="block mt-4 lg:inline-block lg:mt-0 font-bold text-gray-400 hover:text-teal-200 mr-4 hover:cursor-pointer"  wire:navigate>
                        <x-blog.text.text color="white" textSize="x-small" value="Consultants"/>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('lander') }}" class="block mt-4 lg:inline-block lg:mt-0 font-bold text-gray-400 hover:text-teal-200 mr-4 hover:cursor-pointer"  wire:navigate>
                        <x-blog.text.text color="white" textSize="x-small" value="Portforlio"/>
                      </a>
                    </li>
                    {{-- <li>
                      <a href="{{ route('tutorial') }}" class="block mt-4 lg:inline-block lg:mt-0 font-bold text-gray-400 hover:text-teal-200 mr-4 hover:cursor-pointer" wire:navigate>
                        <x-blog.text.text color="white" textSize="x-small" value="Tutorials"/>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('packages') }}" class="block mt-4 lg:inline-block lg:mt-0 font-bold text-gray-400 hover:text-teal-200 mr-4 hover:cursor-pointer" wire:navigate>
                        <x-blog.text.text color="white" textSize="x-small" value="Packages"/>
                      </a>
                    </li> --}}

                    <li>
                      {{-- <a href="{{ route('blog-post') }}" class="block mt-4 lg:inline-block lg:mt-0 font-bold text-gray-400 hover:text-teal-200 mr-4 hover:cursor-pointer" wire:navigate>
                        <x-blog.text.text color="white" textSize="x-small" value="Blog"/>
                      </a> --}}
                      <a href="{{ route('home') }}" class="block mt-4 lg:inline-block lg:mt-0 font-bold text-gray-400 hover:text-teal-200 mr-4 hover:cursor-pointer" wire:navigate>
                        <x-blog.text.text color="white" textSize="x-small" value="Blog"/>
                      </a>
                    </li>
                </ul>
              </nav>
          </div>

          <div class="justify-end hidden pr-16 sm:flex lg:pr-0">
              <a
                href="{{ route('login') }}"
                class="py-3 text-base font-medium px-7 text-dark dark:text-white hover:text-primary -mr-4"
                >
              <x-danger-button>Post a job</x-danger-button>
              </a>
              <a
                href="javascript:void(0)"
                class="py-3 text-base font-medium text-white rounded-md bg-primary px-7 hover:bg-primary/90 -ml-6"
                >
                <x-primary-button>My account</x-primary-button>
              </a>
          </div>
        </div>
    </div>
  </div>
</header>
<!-- ====== Navbar Section End -->