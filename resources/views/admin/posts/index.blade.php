@extends('layouts.admin')

@section("content")

<table>
    <thead>
        <tr>
            <td>id</td>
            <td>title</td>
            <td>dettagli</td>
        </tr>
        
    </thead>
    <tbody>
        @foreach($postsList as $post)

            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td><br>
            </tr>
            
        @endforeach
    </tbody>
</table>


@endsection

