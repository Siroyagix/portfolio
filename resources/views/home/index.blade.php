@extends('layouts.app')

@section('title', "Yagi's Profile")

@section('content')
    {{-- ヘッダーナビ部分 --}}
    <div class="titleback">
        <a id="home"></a>
        <p class="title">"Yagi's Profile"</p>
        <ul class="clearfix ulset">
            <li class="list1"><a href="/">Home</a></li>
            <li class="list1"><a href="#Profile">Profile</a></li>
            <li class="list1"><a href="#works">Works</a></li>
            <li class="list1"><a href="#Contact">Contact</a></li>
        </ul>
    </div>
    {{-- /ヘッダーナビ部分 --}}

    {{-- プロファイル --}}
    <a id="Profile"></a>
    <h1>Profile</h1>

    <table class="table">
        <tr>
            <td>
                <img src="/images/facemodel.png" alt="get picture" class="pull-left" class="facemodel">
            </td>
            <td>
                <h2>自己紹介</h2>
                <p style="text-align:left">はじめまして。ヤギカズマと申します。</br>
                    医療業界で激務に追われるうちに必要なのはICT化だと思い立ち</br>
                    プログラムの世界に飛び込みました。</br>
                    未経験からの挑戦で現在、日々成長中です。
                </p>
                <h2>経験したことのある技術</h2>
                <table>
                    <tr>
                        <td>
                            <img src="/images/mysql.png" alt="mysql" class="icons">
                        </td>
                        <td>
                            <img src="/images/PHP.png" alt="php" class="icons">
                        </td>
                        <td>
                            <img src="/images/laravel.jpg" alt="laravel" class="icons">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    {{-- /プロファイル --}}

    {{-- ワークス --}}
    <a id="works"></a>
    <h1>works</h1>
    <table class="table">
        <tr>
            <th>バイタルチェック</th>
            <th>書評ブログ</th>
        </tr>
        <tr>
            <td>
                <img src="/images/scope.png" alt="scope" class="workicons">
            </td>
            <td>
                <img src="/images/library.png" alt="library" class="workicons">
            </td>
        </tr>
    </table>
    {{-- /ワークス --}}

    {{-- コンタクト --}}
    <a id="Contact"></a>
    <div class="under">
        <h1>Contact</h1>
        <ul class="list2">
            <li>
                <a href="mailto:yagikaz@gmail.com">
                    yagikaz@gmail.com
                </a>
            </li>
            <li>
                <a href="https://github-myprofile.com">https://github-myprofile.com</a>
            </li>
        </ul>
    </div>
@endsection
