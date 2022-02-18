@extends('layouts/index')

@section('title','作品')

@section('active2','active')

@section('main')

<div class="container m-5">
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">作品</th>
                    <th scope="col">簡介</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"></th>
                    <td><a href="">初學php製作的網頁</a></td>
                    <td>初學php製作的網頁，麵條式代碼。</td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
