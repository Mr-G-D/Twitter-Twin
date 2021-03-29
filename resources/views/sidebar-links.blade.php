<ul>
    <li>
        <a href="{{ route('home')}}" class="font-bold text-lg mb-4 p-2 block">
            Home
        </a>
    </li>
    <li>
        <a href="{{ route('explore')}}" class="font-bold text-lg mb-4 p-2 block">
            Explore
        </a>
    </li>
    <li>
        <a href="{{ route('profile', Auth::user()->username )}}" class="font-bold text-lg mb-4 p-2 block">
            Profile
        </a>
    </li>
    <li>
        <a href="{{ route('logout')}}" class="font-bold text-lg mb-4 p-2 block">
            Logout
        </a>
    </li>

</ul>