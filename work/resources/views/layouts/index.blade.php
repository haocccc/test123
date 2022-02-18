<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Myblog - @yield('title')</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                      <a class="nav-link @yield('active1')" aria-current="page" href="{{ route('index') }}">首頁</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link @yield('active2')" href="{{ route('works') }}">作品</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link @yield('active3')" href="{{ route('posts') }}">貼文</a>
                    </li>
                                   
                                    @if (Route::has('login'))
                                        @auth
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-jet-dropdown-link>
                                            </form>
                                        @else
                                                <a href="{{ route('login') }}" class="nav-link" >登入</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link @yield('active5')" href="{{ route('register') }}">註冊</a>
                                                </li>
                                            @endif
                                        @endauth
                                    @endif
                                 
                    {{-- <li class="nav-item">
                        <a class="nav-link @yield('active4')" href="{{ route('login') }}">登入</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('active5')" href="{{ route('register') }}">註冊</a>
                    </li> --}}
                </ul>
            </div>
          </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                @if (session()->has('notice'))
                    <div class="bg-pink-300 text-red-100 font-thin rouneded">
                        {{session()->get('notice')}}
                    </div>
                @endif
                <div>@yield('main')</div>
            </div>
          </div>
    </div>
    <div class="footer">
    <h2>©王冠皓. ALL RIGHTS RESERVED</h2>
    </div>
    <script>src="https://code.jquery.com/jquery-1.12.4.min.js"</script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
