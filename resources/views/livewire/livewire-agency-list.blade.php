
<div>
    <x-blog.text.text textSize="header2" color="black" value="Your Company" class="font-black font-serif"/>
    @forelse ($userAgency->agency as $agencies)
    <div class="rounded-sm p-10 bg-white w-full grid grid-cols-1 mb-2 shadow">
        {{ $agencies->name }}
    </div>
    @empty
        <h3>No agency added</h3>
    @endforelse
</div>