<h1 class=" text-xl mb-4 font-bold">Connections</h1>

<ul>
    @foreach (range(1,8) as $index)
        <li class="mb-4">
            <div class="flex items-center text-sm">
                <img class="rounded-full mr-2" src="https://i.pravatar.cc/40" alt="img">
                John Doe
            </div>
        </li>
    @endforeach
</ul>