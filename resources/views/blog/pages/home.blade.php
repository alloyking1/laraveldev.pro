<x-guest-layout>

  <div class="grid grid-cols-1 place-content-center justify-center text-center px-16 mt-40 md:mt-0">
    <h1 class="md:text-6xl text-3xl font-black">Laraveldev.pro</h1>
      <p class="text-gray-400 text-sm mt-4">
        Your ultimate destination for insightful articles, tips, 
        <br/>and tutorials on everything related to Laravel development.
      </p>
      <div class="flex justify-center mt-4">
        <a href="{{ route('blog.list') }}" class="font-black border border-black text-black px-24 p-2 rounded-md">
          Explore
        </a>
      </div>
  </div>
</x-guest-layout>