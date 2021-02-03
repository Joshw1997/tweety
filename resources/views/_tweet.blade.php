<div class="d-lg-flex p-4 {{ $loop->last ? '' : 'border-bottom border-gray' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
            <img 
                src="{{ $tweet->user->avatar }}"
                alt=""
                class="rounded-circle mr-2"
                width="50"
                height="50"
            >
        </a>            
    </div>
    <div>
        <h5>
            <a href="{{ route('profile', $tweet->user) }}" class="font-bold mb-4 text-dark">
                {{ $tweet->user->name }}
            </a>            
        </h5>
        <p class="text-sm">
           {{ $tweet->body }}
        </p>
    </div>
</div>