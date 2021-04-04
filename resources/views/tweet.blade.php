
<div class="border border-gray-300 rounded-lg my-2">
    <div class="flex p-4 border-b border-b-gray-400">
            <div class=" flex-shrink-0 ">
                <a href="{{ route('profile', $tweet->user )}}">
                    <img class="rounded-full mr-2" src="{{ $tweet->user->avatar }}" style="width: 40px" alt="img">
                </a>

            </div>
        <div>
            <h5 class="font-bold mb-4">
                <a href="{{ route('profile', $tweet->user )}}">
                    {{$tweet->user->name}}
                </a>
            </h5>
            <p class="text-sm mb-3">
                {{$tweet->body}}
            </p>

            <div class="flex">
                
                <form class="Form" action="{{ route('like',$tweet->id) }}" method="post">
                    @csrf
                    <button type="submit" style="outline: none">
                        <div class="flex items-center mt-1 mx-2">
                            <i class="fa-heart mx-1 {{  $tweet->isLikedBy(Auth::user()) ? 'text-red-700 fas' : 'text-gray-500 far' }}"></i>
                            
                            <span class="text-xs text-gray-500">
                                {{ $tweet->likes? $tweet->likes: 0 }}
                            </span>
                        </div> 
                    </button>
                </form>

                <form action="{{ route('dislike',$tweet->id) }}" method="post">
                    @csrf
                    <button type="submit" style="outline: none">
                        <div class="flex items-center mt-1 mx-2">
                            <i class=" fa-thumbs-down mx-1 {{  $tweet->isDislikedBy(Auth::user()) ? 'fas text-blue-500' : 'far text-gray-500' }}"></i>
                            
                            <span class="text-xs text-gray-500">
                                {{ $tweet->dislikes ? $tweet->dislikes: 0 }}
                            </span>
                        </div>                        
                    </button>
                </form>


            </div>
        </div>
    </div>
</div>


{{-- @section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
	$('form.Form').on('submit',function(){
		url = $(this).attr('action'),
		type = $(this).attr('method'),
		data = {};


		$.ajax({
			url:url,
			type: type,
			data: data,
			success:function(response) {
				console.log(response);
				console.log("done");
			}
		})
		return false;

	})
</script>
@endsection --}}