@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">本会員登録確認</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register.main.registered') }}">
                            @csrf
                            <input type="hidden" name="email_token" value="{{ $email_token }}">
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">メールアドレス</label>

                                <div class="col-md-6 col-form-label">
                                    <span>{{$user->name}}</span>
                                    <input type="hidden" name="name" value="{{$user->name}}">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        本登録
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
