@extends('layouts/index')

@section('main')
    <div class="container m-5">
        <form action="{{Route('articles.update',$article)}}" method='post'>
            @if ($errors->any())
                <div class="errors p-3 bg red-500 text-red-100 font-thin rouneded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>   
            @endif
            @csrf
            @method('patch')
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">標題</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="{{$article->title}}" > 
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">內容</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content" >{{$article->content}}</textarea>
                </div>
            <button type="submit" class="btn btn-outline-primary">更新文章</button>
            <a href="{{route('posts')}}" class="btn btn-outline-secondary m-5">回文章列表</a>
        </form>
    </div>    
@endsection

