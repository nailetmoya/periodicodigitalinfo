<x-app-layout>
  <div class="container py-8"> 
    <di class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8">
    <h1 class="uppercase text-center text-3xl font-bold">Etiqueta: <span class="text-{{$tag->color}}-600">{{$tag->name}}</span></h1>
         @foreach ($posts as $post)
       <x-card-post :post="$post" />

         @endforeach
         <div class="mt-4">
             {{$posts->links()}}
         </div>
    </di>
  </div>
</x-app-layout>