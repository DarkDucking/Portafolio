<x-app-layout titulo="Ver Curso">

    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600"> {{$curso->name}}  </h1>
        
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- contenido principal -->
            <div class="lg:col-span-2">
            
                <figure>
                    @if ($curso->image)
                        <img class="w-full h-80 object-cover object-center" src="{{Storage::url($curso->image->url)}}" alt="">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849825_960_720.jpg" alt="">
                    @endif
                </figure> 

                <div class="text-lg text-gray-500 mt-4">
                <b>Requisitos: </b>{!!$curso->extract!!}
                </div>

                <div class="text-base text-gray-500 mt-4">
                {!!$curso->body!!}
                </div>    
            
            </div>
            <!-- contenido relacionado -->
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{$curso->categoria->name}}</h1>   
        
            <ul>
                @foreach($similares as $similar)
                    <li class="mb-4">
                        <a class= "flex" href="{{route('cursos.show',$similar)}}">
                       @if($similar->image)
                        <img class="w-36 h-20 objcet-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                    @else
                    <img class="w-36 h-20 objcet-cover object-center" src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849825_960_720.jpg" alt="">
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