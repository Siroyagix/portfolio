<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/myprofile.css">
        <title>@yield('title')</title>
    </head>
    <body>
            <div class="body">
        <a id="@yield('one')"></a>
        <h1>@yield('title')</h1>
        <div class="section1">
        <ul class="clearfix ulset">
            <li class="list1"><a href="#@yield('one')">@yield('one')</a></li>
            <li class="list1"><a href="#@yield('two')">@yield('two')</a></li>
            <li class="list1"><a href="#@yield('three')">@yield('three')</a></li>
            <li class="list1"><a href="#@yield('four')">@yield('four')</a></li>
        </ul>
        </div>
        
        <a id="@yield('two')"></a>
        <h1>@yield('two')</h1>
        <div class="seciton2">
        <img src="/storage/facemodel.png" alt="get picture">
        </div>
        <h1>自己紹介</h1>
        <div class="section3">
        @yield('mytext')
        </div>
        <a id="@yield('three')"></a>
        <h1>@yield('three')</h1>
        <div class="section4">
        <p>@yield('workstext')</p>
        <ul>
            <li class="list2">@yield('work1')</li>
            <li class="list2">@yield('work2')</li>
        </ul>
        </div>
        <a id="@yield('four')"></a>
        <h1>@yield('four')</h1>
        <div class="seciton5">
        <p>@yield('mail')</br>
            @yield('github')</p>
        </div>
    </div>
    </body>
</html>


