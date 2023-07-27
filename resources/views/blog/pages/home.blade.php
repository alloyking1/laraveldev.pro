<x-guest-layout>
  <x-blog.pages.section color="green" textColor="black" textSize="large">
    <div class="p-32">
    <div class="text-center grid place-content-center justify-center">
      <x-blog.text.text textSize="header1" color="black" value="Building a content power house for" class="font-black font-serif"/>
      <x-blog.text.text textSize="header1" class="text-green-700 font-mono text-4xl" value="Laravel Devs"/>
      <div class="my-8">
        <x-blog.text.text textSize="small" value="Laravel News is one of the largest websites in the Laravel universe. It’s the official blog of Laravel and is a fantastic resource for all things Laravel. The Zaengle team built the previous version of the site in 2016 and we are honored to work with the Laravel News team on a new build."/>
      </div>
    </div>
  </div>
  </x-blog.pages.section>

  <x-blog.pages.section color="white" title="Recent Posts" textColor="black" textSize="large">
    <x-blog.pages.grid-5 class="mt-32">
        @foreach ($recentPost as $post)
          <x-blog.components.post-card :tagDetail="$post->tag" editRoute="{{ route('blog.edit', $post) }}" href="{{ route('blog.show', $post)}}" :title="$post->title" :excerpt="$post->excerpt" :userName="$post->user->name" :date="$post->updated_at" />
        @endforeach
    </x-blog.pages.grid-5>
</x-blog.pages.section>

<x-blog.pages.section color="gray" title="Laravel Packages" textColor="black" textSize="large">
  <x-blog.pages.grid-3 class="mt-32">
      @foreach ($recentPost as $post)
        <x-blog.components.post-card :tagDetail="$post->tag" editRoute="{{ route('blog.edit', $post) }}" href="{{ route('blog.show', $post)}}" :title="$post->title" :excerpt="$post->excerpt" :userName="$post->user->name" :date="$post->updated_at" />
      @endforeach
  </x-blog.pages.grid-3>
</x-blog.pages.section>
</x-guest-layout>