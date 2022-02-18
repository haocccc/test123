@extends('layouts/index')

@section('main')
    <div class=" m-5">
        <h1 class="display-6 alert alert-primary">{{$article->title}}</h1>
        <p class="m-3">{{$article->content}}</p>
        <a href="{{route('posts')}}" class="btn btn-outline-secondary m-5">回文章列表</a>
    </div>
@endsection