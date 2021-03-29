<h1 class=" text-xl mb-4 font-bold">Following</h1>

<ul>
    @forelse (Auth::user()->follows as $user)
        <li class="mb-4">
            <a href="{{ route('profile', $user->username )}}">
                <div class="flex items-center text-sm">
                    <img class="rounded-full mr-2" src="{{ $user->avatar }}" style="width: 40px" alt="img">
                    {{ $user->name }}
                </div>
            </a>
        </li>

    @empty
    <div class=" rounded-lg my-2 font-serif">
        <p class="text-sm text-center p-4">
            No Friends Yet
        </p>
    </div>
    @endforelse
</ul>   