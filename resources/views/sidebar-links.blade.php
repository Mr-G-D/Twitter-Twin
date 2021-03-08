<ul>
    <li>
        <a href="{{ route('home')}}" class="font-bold text-lg mb-4 p-2 block">
            Home
        </a>
    </li>
    <li>
        <a href="/" class="font-bold text-lg mb-4 p-2 block">
            Explore
        </a>
    </li>
    <li>
        <a href="/" class="font-bold text-lg mb-4 p-2 block">
            Notifications
        </a>
    </li>
    <li>
        <a href="/" class="font-bold text-lg mb-4 p-2 block">
            Messages
        </a>
    </li>
    <li>
        <a href="/" class="font-bold text-lg mb-4 p-2 block">
            Bookmarks
        </a>
    </li>
    <li>
        <a href="/" class="font-bold text-lg mb-4 p-2 block">
            Lists
        </a>
    </li>
    <li>
        <a href="{{ route('profile', Auth::user()->name )}}" class="font-bold text-lg mb-4 p-2 block">
            Profile
        </a>
    </li>
    <li>
        <a href="/" class="font-bold text-lg mb-4 p-2 block">
            More
        </a>
    </li>

</ul>