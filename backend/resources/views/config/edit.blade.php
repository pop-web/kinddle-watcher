@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="mt-5">プロフィール</h2>
        <div class="row mt-4">
            <div class="col-md-2">
                <img src="https://picsum.photos/200/200" class="rounded img-fluid mx-auto mx-0 d-block">
            </div>
            <div class="col-md-10 mt-4 mx-auto mt-md-0">
                <form method="POST" action="{{ route('config.update') }}">
                    @csrf
                    <div class="form-group">
                        <i class="far fa-envelope fa-lg fa-fw mr-2"></i>
                        <input type="text" name="email" value="{{ $config->email }}" class="px-2">
                    </div>
                    <div class="form-group">
                        <div class="form-group mt-3">
                            <input type="checkbox" name="notice" id="mailCheck" value="1" @if( $config->notice == true ) checked @endif>
                            <label class="form-check-label ml-1" for="mailCheck">セール価格のメール通知をする</label>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">変更する</button>
                </form>
            </div>
        </div>
    </div>
@endsection
