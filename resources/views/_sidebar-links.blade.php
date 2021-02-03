<ul class="list-unstyled">
    <li>
        <a class="font-weight-bold text-dark mb-4" href="{{ route('home') }}">Home</a>
    </li>
    <li>
        <a class="font-weight-bold text-dark mb-4" href="/">Explore</a>
    </li>
    <li>
        <a class="font-weight-bold text-dark mb-4" href="/">Notifications</a>
    </li>
    <li>
        <a class="font-weight-bold text-dark mb-4" href="/">Messages</a>
    </li>
    <li>
        <a class="font-weight-bold text-dark mb-4" href="/">Bookmarks</a>
    </li>
    <li>
        <a class="font-weight-bold text-dark mb-4" href="/">Lists</a>
    </li>
    <li>
        <a class="font-weight-bold text-dark mb-4" href="{{ route('profile', auth()->user()) }}">Profile</a>
    </li>
    <li>
        <a class="font-weight-bold text-dark mb-4" href="/">More</a>
    </li>
</ul>