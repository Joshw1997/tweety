<x-app>
    <header class="mb-6 position-relative">
        <div class="position-relative">
            <img 
                src="/images/default-profile-banner.jpg" 
                alt=""
                class="mb-2 w-100 h-100"
            >

            <img 
                src="{{ $user->avatar }}"
                alt=""
                class="rounded-circle mr-2 position-absolute fixed-bottom"
                style="left: 50%; transform: translateX(-50%) translateY(50%);"
                width="150"
            >
        </div>

        <div class="d-lg-flex justify-content-between mb-4" style="align-items: center;">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="d-lg-flex">
                @can ('edit', $user)
                    <a 
                        href="{{ $user->path('edit') }}" 
                        class="rounded border border-gray-300 py-2 px-4 text-dark text-xs mr-2"
                    >
                        Edit Profile
                    </a>
                @endcan
                
                <x-follow-button :user="$user"></x-follow-button>

            </div>
        </div>

        <p class="text-sm">
            The name's Bugs. Bugs Bunny. Don't wear it out. Bugs is an anthropomorphic gray
            and white rabbit or hare who is famous for his flippant, insouciant personality.
            He is also characterized by a Brooklyn accent, his portrayal as a trickster,
            and his catch phrase "Eh... What's up, doc?"
        </p>

    </header>

    <hr>

    @include ('_timeline',[
        'tweets' => $user->tweets
    ])
</x-app>
