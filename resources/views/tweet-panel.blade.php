<div class="border border-blue-400 rounded-lg py-6 px-8 mb-4">
    <form action="" >
        <textarea name="body" class="outline-none w-full h-auto bg-gray-100 py-2 px-2" placeholder="What is up?"></textarea>
        <hr class="my-4 ">
        <footer class="flex justify-between">
            <img class="rounded-full mr-2" src="{{ Auth::user()->email }}" alt="img">
            <button type="submit" class="border-none bg-blue-500 rounded-lg shadow-md hover:shadow-xs p-2 text-white">Tweet</button>
        </footer>
    </form>
</div>