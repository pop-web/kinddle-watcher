@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <img src="{{ asset('/images/kv.png') }}" alt="kv" class="w-100">
    </div>
    <div class="col-md-4">
        <h1 class="h2">
            Kinddle本の価格を<br />常に監視し、通知する
        </h1>
        <div class="mt-3">
            <a class="btn btn-primary btn-lg rounded-pill" role="button" href="{{ route('register') }}">新規登録はこちら</a>
        </div>
    </div>
    </div>
</div>
@endsection
