@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ユーザ登録を完了してください</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                新しいリンクをあなたのメールアドレスに送信しました。
                            </div>
                        @endif

                        メールに記載されているリンクをクリックして、登録手続きを完了してください。
                        メールが届いていなければ、
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">こちらをクリックして再送信してください。
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
