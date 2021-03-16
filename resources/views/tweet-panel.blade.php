<div class="border border-blue-400 rounded-lg py-6 px-8 mb-4">
    <form method="POST" action={{ route('tweet') }} >
        @csrf
        <textarea name="body" class="outline-none w-full h-auto bg-gray-100 py-2 px-2" placeholder="What is up?"></textarea>
        @error('body')
            <p class="py-2 px-2 w-60 mt-2 text-sm bg-red-100 border border-red-500 rounded-md text-red-500">{{ $message }}</p>        
        @enderror
        <hr class="my-4 ">
        <footer class="flex justify-between">
            <img class="rounded-full mr-2" style="width: 40px" src="{{ Auth()->user()->avatar }}" alt="img">
            <button type="submit" class="border-none bg-blue-500 rounded-lg shadow-md hover:shadow-xs p-2 text-white">Tweet</button>
        </footer>
    </form>
</div>