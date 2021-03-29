@forelse ($tweets as $tweet)
    @include('tweet')
@empty
<div class="border border-blue-500 rounded-lg my-2 font-serif">
            <p class="text-sm text-center p-4">
                No Tweets Yet
            </p>
</div>
@endforelse
            {{ $tweets->links() }}

