<x-master>

    <section style="padding-left: 2rem; padding-right: 2rem;">
        <main class="container mx-auto">
            <div class="d-lg-flex justify-content-between">
                @if (auth()->check())
                    <div class="w-10">
                        @include ('_sidebar-links')
                    </div>
                @endif
    
                <div class="p-2 flex-fill ml-5 mr-5" style="max-width: 700px;">
                    {{ $slot }}
                </div>

                @if (auth()->check())
                    <div class="w-10">
                        @include ('_friends-list')
                    </div>
                @endif
            </div>
        </main>
    </section>

</x-master>        