<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.6/dist/vue-multiselect.min.css">
    <script type="text/javascript">
        window.Laravel = {!! json_encode([
            'baseUrl' => url('/'),
            'csrf_token' => csrf_token(),
            'auth_token' => "auth()->user()->api_token",
        ]) !!}
    </script>
</head>
<body>
<div id="app">
    @guest
    @else
        <div class="menu-app">
            <ul class="list-unstyled">
                <a href="{{ url('/') }}" class="icon-logo">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="30px" height="30px">
                        <image  x="0px" y="0px" width="30px" height="30px"  xlink:href="data:img/png;base64,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" />
                    </svg>
                </a>
                <a class="text-logo text-dark text-decoration-none font-weight-bold" href="{{ url('/') }}">
                    <h1 class="m-0">{{ config('app.name', 'Laravel') }}</h1>
                </a>
                <a href="{{ url('/') }}" class="text-decoration-none text-dark">
                    <li class="">
                        <i class="fa fa-home icon"></i>
                        <span class="item-text">Home</span>
                    </li>
                </a>
                <li class="">
                    <i class="fa fa-search icon"></i>
                    <span class="item-text">Search</span>
                </li>
                <a href="{{ route('chat.index') }}" class="text-dark text-decoration-none">
                    <li class="">
                        <i class="far fa-comment-dots icon"></i>
                        <span class="item-text">Messages</span>

                    </li>
                </a>
                <li class="" data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#modal-new-post">
                    <i class="far fa-plus-square icon"></i>
                    <span class="item-text">Create</span>
                </li>

                <a href="{{ route('profile.index',['user'=> Auth::user()->username]) }}" class="text-dark text-decoration-none">
                    <li class="d-flex">
                        <img src="{{ Auth::user()->profile->getImage() }}" class="rounded-circle" style="margin-right: 18px;width: 26px;height: 26px;" alt="">
                        <span class="item-text">Profile</span>
                    </li>
                </a>
            </ul>
        </div>

        <new-post-modal user="{{Auth::user()}}"></new-post-modal>
        <new-chat-modal></new-chat-modal>
    @endguest

    <main >
        @yield('content')
    </main>
</div>
</body>
</html>
