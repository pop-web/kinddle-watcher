@extends('layouts.app')

@section('content')
<div class="container">
    <section class="row align-items-center">
        <div class="col-md-7">
            <img src="{{ asset('/images/kv.png') }}" alt="kv" class="w-100">
        </div>
        <div class="col-md-5 mt-3 mt-md-0">
            <h1 class="h1 font-weight-bold">
                Kinddle本のセールを<br class="d-none d-lg-block"/>監視し、通知する
            </h1>
            <p class="h5 mt-3">電子書籍Kinddleを登録しておき、<br />セール価格になったらメール通知します。</p>
            <div class="mt-3 text-center text-md-left">
{{--                <a class="btn btn-primary btn-lg rounded-pill" role="button" href="{{ route('register') }}">新規登録はこちら</a>--}}
                <a class="btn btn-primary btn-lg rounded-pill disabled" role="button" href="{{ route('register') }}">新規登録停止中</a>
            </div>
            <div class="mt-3 text-center text-md-left">
{{--                <a href="{{ route('login') }}"><u>ログインはこちら</u></a>--}}
            </div>
        </div>
    </section>
    <section class="mt-5">
        <h1 class="h2 font-weight-bold text-center"><span class="line-marker">KinddleWatcherはこんな方にオススメです</span></h1>
        <div class="row mt-5">
            <div class="col-sm-4">
                <div class="card bg-light">
                    <img src="{{ asset('/images/feature01.png') }}" alt="Kinddle本をセール中に購入したい" class="w-100">
                    <div class="card-body">
                        <h2 class="card-title">Kinddle本をセール中に購入したい</h2>
                        <p class="card-text">欲しいkinddle書籍をタイミングよくセール中に安く購入することができます。</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-light">
                    <img src="{{ asset('/images/feature02.png') }}" alt="セールを狙っているKinddle本を管理したい" class="w-100">
                    <div class="card-body">
                        <h2 class="card-title">セールを狙っているKinddle本を管理したい</h2>
                        <p class="card-text">
                            セール価格を狙っているkinddle書籍だけを登録し、管理することができるため、価格を一目でチェックすることができます。
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-light">
                    <img src="{{ asset('/images/feature03.png') }}" alt="セール価格になったらメール通知してほしい" class="w-100">
                    <div class="card-body">
                        <h2 class="card-title">セール価格になったらメール通知してほしい</h2>
                        <p class="card-text">登録したkinddle書籍がセール価格になった時にメール通知機能を備えています。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
