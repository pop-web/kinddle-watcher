@extends('layouts.app')

@section('content')
<div class="container">
    <section class="row align-items-center">
        <div class="col-md-7">
            <img src="{{ asset('/images/kv.png') }}" alt="kv" class="w-100">
        </div>
        <div class="col-md-5">
            <h1 class="h1 font-weight-bold">
                Kinddle本のセールを<br />監視し、通知する
            </h1>
            <p class="h5">電子書籍Kinddleに登録し管理<br>セール価格になったらメール通知します。</p>
            <div class="mt-3">
                <a class="btn btn-primary btn-lg rounded-pill" role="button" href="{{ route('register') }}">新規登録はこちら</a>
            </div>
            <div class="mt-3">
                <a href="{{ route('login') }}"><u>ログインはこちら</u></a>
            </div>
        </div>
    </section>
    <section style="margin-top: 6rem">
        <h1 class="h2 font-weight-bold text-center">KinddleWatcherはこんな方にオススメです</h1>
        <div class="row mt-5">
            <div class="col-sm-4">
                <div class="card bg-light">
                    <img src="{{ asset('/images/feature01.png') }}" alt="Kinddle本をセール中に購入したい">
                    <div class="card-body">
                        <h2 class="card-title">Kinddle本をセール中に購入したい</h2>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-light">
                    <img src="{{ asset('/images/feature02.png') }}" alt="セールを狙っているKinddle本を管理したい">
                    <div class="card-body">
                        <h2 class="card-title">セールを狙っているKinddle本を管理したい</h2>
                        <p class="card-text">
                            With supporting text below as a natural lead-in to additional content.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-light">
                    <img src="{{ asset('/images/feature03.png') }}" alt="セール価格になったらメール通知してほしい">
                    <div class="card-body">
                        <h2 class="card-title">セール価格になったらメール通知してほしい</h2>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
