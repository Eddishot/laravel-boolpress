@extends('layouts.admin')

@section("content")
<button>
    <a class="btn btn-primary" href="{{route("admin.posts.create")}}">crea
    </a>
</button>

{{-- <table>
    <thead>
        <tr>
            <td>id</td>
            <td>title</td>
            <td>content</td>
        </tr>
        
    </thead>
    <tbody>
        @foreach($postsList as $post)

            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td><br>
            </tr>
            <a href=" {{ route('admin.posts.show', $post->id)}} ">dettagli</a>
            
        @endforeach
    </tbody>
</table> --}}

<ul id="app"  class="list-group">
    @foreach($postsList as $post)
    <li class="list-group-item d-flex align-items-center justify-content-between">
        <div>
            {{$post->title}}<br>
           <br>
           {{-- {{ $post->user->name}} --}}
           
        </div>
  
        <div>
            <a href="{{route('admin.posts.show', $post->id)}}"
              class="btn btn-link">
              Mostra
            </a>
            {{-- <a href="{{route("admin.posts.edit", $post->id)}}"
              class="btn btn-link">
              Modifica
            </a> --}}
        </div>
        <a href="{{route("admin.posts.edit", $post->id)}}"
            class="btn btn-link">
            Modifica
          </a>
        

    </li>
    @endforeach

</ul>


@endsection

