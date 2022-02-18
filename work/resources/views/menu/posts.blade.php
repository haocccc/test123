@extends('layouts/index')

@section('title','貼文')

@section('active3','active')

@section('main')
@if (Route::has('login'))
<div class="container m-5">
    <div class="row">
        <div class="col-xs-12">
            @if (Route::has('login'))
            @auth
            <a class="btn btn-outline-primary" href="{{route('articles.create')}}">新增文章</a>            
            @endauth
        @endif
        </div>
    </div>
</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">標題</th>
                    <th scope="col">日期</th>
                    <th scope="col">發布者</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($articles as $article)
                  <tr>
                    <th scope="row"></th>
                    <td><a href="{{route('articles.show',$article)}}">{{$article->title}}</a></td>
                    <td>{{$article->created_at}}</td>
                    <td class="flex">{{$article->user->name}}
                        @if (Route::has('login'))
                        @auth 
                        <a class="ml-4  btn btn-outline-primary" href="{{route('articles.edit',['article'=>$article->id])}}">編輯</a>
                        <form action="{{route('articles.destroy',$article)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="ml-4 btn btn-outline-danger">刪除</button>
                        </form>    
                        @endauth
                        @endif    
                    </td>
                  </tr>
                  @endforeach
                  {{ $articles->links() }}
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection