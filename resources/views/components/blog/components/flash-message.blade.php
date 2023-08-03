@props([
    'status' => 'success', //or error
    'message',
])

<div>

    @switch($status != null)
        @case($status === 'success')
            @if (session()->has($message))
                <div class="bg-green-500 text-white font-bold rounded-t px-4">
                    {{ session()->get($message) }}
                </div>
            @endif
            @break
        @case($status === 'error')
            @if (session()->has($message))
                <div class="bg-red-500 text-white font-bold rounded-t px-4">
                    {{ session()->get($message) }}
                </div>
            @endif
            @break
        @default
            
    @endswitch
    
</div>