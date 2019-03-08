<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/myprofile.css">
        <title>@yield('title')</title>
    </head>
    <body>
        <a id="@yield('one')"></a>
        <h1 class="titlename">@yield('title')</h1>
        <ul class="clearfix ulset">
            <li class="list1"><a href="#@yield('one')">@yield('one')</a></li>
            <li class="list1"><a href="#@yield('two')">@yield('two')</a></li>
            <li class="list1"><a href="#@yield('three')">@yield('three')</a></li>
            <li class="list1"><a href="#@yield('four')">@yield('four')</a></li>
        </ul>
        <a id="@yield('two')"></a>
        <h1>@yield('two')</h1>
        <img src="" alt="get picture">
        <h1>自己紹介</h1>
        @yield('mytext')
        <a id="@yield('three')"></a>
        <h1>@yield('three')</h1>
        <p style="text-align:center;">@yield('workstext')</p>
        <ul>
            <li>@yield('work1')</li>
            <li>@yield('work2')</li>
        </ul>
        <a id="@yield('four')"></a>
        <h1>@yield('four')</h1>
        <p style="text-align:center;">@yield('mail')</br>
            @yield('github')</p>
    </body>
</html>


