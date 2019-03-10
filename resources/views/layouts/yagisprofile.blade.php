<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/myprofile.css">
        <title>@yield('title')</title>
    </head>
    <body>
     <a id="@yield('one')"></a>
        <h1 class="title" style="background-image:/storage/topimage.jgp">@yield('title')</h1>
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
        
        <table class="table">
            <tr>
                <td>
                   <img src="/storage/facemodel.png" alt="get picture" class="pull-left" class="facemodel">
                </td>
                <td>
                    <h2>自己紹介</h2>
                     <p>@yield('mytext')</p>
                    <h2>よく使用する技術</h2>
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
        <div class="section4">
        <table class="table">
            <tr>
                <th>@yield('work1')</th><th>@yield('work2')</th>
            </tr>
            <tr>
                <td><img src="/storage/scope.png" alt="scope" class="workicons"></td>
                <td><img src="/storage/library.png" alt="library" class="workicons"></td>
            </tr>
        </table>                
        </div>

        <a id="@yield('four')"></a>
        <h1>@yield('four')</h1>
        <ul class="list2">
            <li>@yield('mail')</li>
            <li>@yield('github')</li>
        </ul>
    </body>
</html>


