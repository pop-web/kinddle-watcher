@extends('layouts.app')
@push('scripts')
    <script src="{{ mix('/js/redirect.js') }}"></script>
@endpush
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center font-weight-bold bg-light">仮会員登録完了</div>

                    <div class="card-body text-center bg-light">
                        <p>この度は、ご登録いただき、誠にありがとうございます。</p>
                        <p>
                            ご本人様確認のため、ご登録いただいたメールアドレスに、<br>
                            本登録のご案内のメールが届きます。
                        </p>
                        <p>
                            そちらに記載されているURLにアクセスし、<br>
                            アカウントの本登録を完了させてください。
                        </p>
                        <a class="btn btn-primary" href="{{ route('home') }}">トップへ</a>
                        <p class="mt-5"><span id="timer">3</span>秒後にトップページで移動します...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
