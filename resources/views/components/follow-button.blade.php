@unless (current_user()->is($user))
<form method="POST" action="/profiles/{{ $user->name }}/follow">
    @csrf
    <button type="submit"
        class="btn btn-primary rounded shadow py-2 px-4 text-white text-xs"
    >
        {{ current_user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
    </button>            
</form>
@endunless