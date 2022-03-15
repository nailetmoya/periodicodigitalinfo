@props(['post'])
<article class="shadow-lg p-3 mb-8 bg-white rounded-lg overflow-hidden">
    @if ($post->image)
        <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt=""></a>
        
    @else
        <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2016/02/01/00/56/news-1172463_960_720.jpg" alt=""></a>
        
    @endif

             
                   
        <div class="px-6 py-4">
                    <h1 class="font-bold text-xl mb-2">
                        <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
                    </h1>
                    <div class="text-gray-700 text-base">
                        {!! $post->extract !!}
                    </div>
       </div>

          <div class="px-6 pt-4 pb-2"> 
              @foreach($post->tags as $tag) 
              <a href="{{route('posts.tag', $tag)}}" class="inline-block bg-{{$tag->color}}-600 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{$tag->name}}</a>
              @endforeach
            </div>

</article>