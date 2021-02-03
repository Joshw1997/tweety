<div class="w-10 rounded p-3" style="background-color: #7ab8eb !important;">
    
    <h3 class="font-bold mb-4">Following</h3>
    
    <ul class="list-unstyled">
        @foreach (auth()->user()->follows as $user)
        <li class="mb-4">
            <div>
                <a href="{{ route('profile', $user) }}" class="d-flex align-items-center text-sm text-dark">
                    <img 
                        src="{{ $user->avatar }}"
                        alt=""
                        class="rounded-circle mr-2"
                        width="40"
                        height="40"
                    >
                    {{ $user->name }}
                </a>
            </div>
        </li>
        @endforeach
    </ul>

</div>