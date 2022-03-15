<x-app-layout>
  <!--  titulo -->
<div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>
        
    <!-- extract-contenido   -->  
        <di class="text-lg text-gray-500 mb-2">
        {!! $post->extract !!}
        </di>

      <!--   formato tres colummnas -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

      <div class="lg:col-span-2">
          <figure>
          @if ($post->image)
                       <img class="object-cover object-center w-full h-full" src="{{Storage::url($post->image->url)}}" alt="">
                   @else
                       <img class="object-cover object-center w-full h-full" src="https://cdn.pixabay.com/photo/2016/02/01/00/56/news-1172463_960_720.jpg" alt="">
                   @endif
          </figure>

          <div class="text-base text-gray-500 mt-4">
              {!! $post->body !!}
          </div>

      </div>

    <!--   contenido relacionado -->
      <aside>
          <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{$post->category->name}}</h1>
          <ul>
              @foreach ($similares as $similar)
              <li class="mb-4">
                  <a class="flex" href="{{route('posts.show', $similar)}}">
                      @if ($similar->image)
                      <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                      @else
                      <img class="object-cover object-center w-36 h-20" src="https://cdn.pixabay.com/photo/2016/02/01/00/56/news-1172463_960_720.jpg" alt="">
                       @endif
                      <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                    </a>
              </li>
              @endforeach 
          </ul>

      </aside>

      </div>
    </div>
</x-app-layout>