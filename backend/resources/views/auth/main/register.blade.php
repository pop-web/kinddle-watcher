@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">本会員登録</div>

                    @isset($message)
                        <div class="card-body">
                            {{$message}}
                        </div>
                    @endisset
                    @empty($message)
                    <div class="card-body">
                        <form method="POST" action="{{ route('register.main.check') }}">
                            @csrf
                            <input type="hidden" name="email_token" value="{{ $email_token }}">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">名前</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('email') }}" autocomplete="name">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        確認画面へ
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endempty
                </div>
            </div>
        </div>
    </div>
@endsection
