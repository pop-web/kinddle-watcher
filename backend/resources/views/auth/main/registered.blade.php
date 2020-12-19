@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center font-weight-bold bg-light">本会員登録完了</div>

                    <div class="card-body bg-light">
                        <p>本会員登録が完了しました。</p>
                        <a href="{{url('/login')}}" class="sg-btn">ログイン画面へ</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
