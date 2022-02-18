@extends('layouts/index')

@section('title','首頁')

@section('active1','active')

@section('main')

<div id="header" class="header">
    <div class="photo">
        <img src="{{asset('files/IMG_0050.JPG')}}">
        <h2>王冠皓</h2>
    </div>
    <div class="mail">
        <ul>
            <li><img src="{{asset('files/Icon-location.png')}}"></li>
            <li><a href="https://www.google.com.tw/maps/@24.2201031,120.9558744,10z?hl=zh-TW" target="_blank"><h2>Taichung</h2></a></li>
        </ul>
        <ul>
            <li><img src="{{asset('files/Icon-mail.png')}}"></li>
            <li><a href="https://mail.google.com/mail/u/0/"  target="_blank"><h2>kuanhao0605@gmail.com</h2></a></li>
        </ul>
        <ul>
            <li><img src="{{asset('files/icon-github.png')}}"></li>
            <li><a href="https://github.com/haocccc"  target="_blank"><h2>haoccc</h2></a></li>
        </ul>
    </div>
</div>
<div class="content">
    <h2>Modern Web Skills</h2>
    <div class="skill">
        <div class="html">
            <img src="{{asset('files/img-skill-icon-1.png')}}">
            <h3>Web Layout</h3>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JS</li>
            </ul>
        </div>
        <div class="js">
            <img src="{{asset('files/img-skill-icon-2.png')}}">
            <h3>JavaScript</h3>
            <ul>
                <li>AJAX/JSON</li>
            </ul>
        </div>
        <div class="dev">
            <img src="{{asset('files/img-skill-icon-3.png')}}">
            <h3>Other</h3>
            <ul>
                <li>Github</li>
                <li>PHP Laravel</li>
                <li>MySQL</li>
            </ul>
        </div>
    </div>
    <h2>Experience</h2>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="alert alert-success"><h3>2021/12 - 2022-02  自學網頁設計</h3></div>
            </div>
          </div>
    </div>

    <h2>About ME</h2>
    <div class="aboutme">
        <img src="{{asset('files/IMG_0920.JPG')}}"  height="70px" width="200px">
        <div class="autobio">
            <p>
                畢業後在福華大飯店任職兩年，因為疫情關係決定轉職嘗試不同行業，有著強烈的好奇心，勇於嘗試新鮮的事物，靠著網路上與朋友的指導，自學一陣子，還是初學者階段，也還在繼續學習新的知識，想快速踏入職場，了解前端工程師的工作內容，以及與團隊配合的方式
            </p>
        </div>
    </div>
</div>

@endsection