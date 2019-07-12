@extends('layouts.app')

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
        {{--　ヘッダーナビ部分　--}}

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
                    <p style="text-align:left">はじめまして。屋宜　一馬（ヤギ　カズマ）と申します。</br>
                        医療業界で働いている中で業務のIT化の必要性を感じ</br>
                        プログラミングをスクールでメンターについてもらい</br>
                        未経験の状態から半年間勉強。</br>
                        現在もまだまだやるべきことが多く、あくせくしながら日々勉強</br>
                        一歩一歩前進している最中です。
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
                            <td>
                                <img src="/images/aws.jpg" alt="aws" class="icons">
                            </td>
                            <td>
                                <img src="/images/git.png" alt="git" class="icons">
                            </td>
                            <td>
                                <img src="/images/apache.jpg" alt="apache" class="icons">
                            </td>
                            <td>
                                <img src="/images/Linux.jpg" alt="Linux" class="icons">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>        
       {{-- /プロファイル --}}

       {{-- ワークス --}}
        <a id="works"></a>
        <h1>Works</h1>
        <table class="apptable">
            <tr><th>WEBアプリ</th><th>機能の説明</th></tr>
            <tr>
                <td>
                    <a href="https://www.vitalcheck.site" target="_blank"><img src="/images/scope.png" alt="scope" class="appicons"></a>
                </td>
                <td>
                    <p>
                        自分の体温や脈拍などのフィジカル基礎データを記録閲覧できるアプリ<br>
                        ログイン機能・CRUD機能・AWSにてEC2とRDSを使用
                    </p>
                </td>
            </tr>
          </table>
        {{-- /ワークス --}}

        {{-- コンタクト --}}
        <a id="Contact"></a>
        <div class="under">    
        <h1>Contact</h1>
        <ul class="list2">
            <li>
                <a href="mailto:im.aiming.mrt5151104@gmail.com">
                        im.aiming.mrt5151104@gmail.com
                </a>
            </li>
            <li>
                <a href="https://github.com/Siroyagix" target="_blank">https://github.com/Siroyagix</a>
            </li>
        </ul>
    </div>
   @endsection
