<h1 class=" text-xl mb-4 font-bold">Following</h1>

<ul>
    @foreach (Auth::user()->follows as $user)
        <li class="mb-4">
            <div class="flex items-center text-sm">
                <img class="rounded-full mr-2" src="{{ $user->avatar }}" alt="img">
                {{ $user->name }}
            </div>
        </li>
    @endforeach
</ul>   