<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/myprofile.css">
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="titleback">
     <a id="@yield('one')"></a>
        <p class="title">@yield('title')</p>
        <ul class="clearfix ulset">
            <li class="list1"><a href="#@yield('one')">@yield('one')</a></li>
            <li class="list1"><a href="#@yield('two')">@yield('two')</a></li>
            <li class="list1"><a href="#@yield('three')">@yield('three')</a></li>
            <li class="list1"><a href="#@yield('four')">@yield('four')</a></li>
        </ul>
        </div>
        
        <a id="@yield('two')"></a>
        <h1>@yield('two')</h1>
        
        <table class="table">
            <tr>
                <td>
                   <img src="/storage/facemodel.png" alt="get picture" class="pull-left" class="facemodel">
                </td>
                <td>
                    <h2>自己紹介</h2>
                     <p>@yield('mytext')</p>
                    <h2>@yield('experience')</h2>
                    <table>
                        <tr>
                            <td>
                                <img src="/storage/mysql.png" alt="mysql" class="icons">
                            </td>
                            <td>
                                <img src="/storage/PHP.png" alt="php" class="icons">
                            </td>
                            <td>
                                <img src="/storage/laravel.jpg" alt="laravel" class="icons">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        

        <a id="@yield('three')"></a>
        <h1>@yield('three')</h1>
        <table class="table">
            <tr>
                <th>@yield('work1')</th><th>@yield('work2')</th>
            </tr>
            <tr>
                <td><img src="/storage/scope.png" alt="scope" class="workicons"></td>
                <td><img src="/storage/library.png" alt="library" class="workicons"></td>
            </tr>
        </table>                

        <a id="@yield('four')"></a>
        <div class="under">
        <h1>@yield('four')</h1>
        <ul class="list2">
            <li>@yield('mail')</li>
            <li>@yield('github')</li>
        </ul>
    </div>
    </body>
</html>


