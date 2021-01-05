@extends('layouts.app')
@push('scripts')
    <script src="{{ mix('/js/imagePreview.js') }}"></script>
@endpush
@section('content')
    <div class="container">
        <h2 class="mt-5">設定</h2>
        <form method="POST" action="{{ route('config.store') }}" enctype="multipart/form-data">
            <div class="row mt-4">
                <div class="col-md-2">
                    <div id="avatar">
                        @if($config->file_name)
                            <img src="{{ $config->file_url }}" class="rounded-circle">
                        @else
                            <img src="{{ asset('/images/user_sample.png') }}" alt="ユーザ画像" class="rounded-circle">
                        @endif
                        <label id="upload-img-btn">
                            <i class="fas fa-camera-retro"></i>
                            <input type="file" name="file_name" style="display:none">
                        </label>
                    </div>
                </div>
                <div class="col-md-10 mt-3 mt-md-0">
                    @csrf
                    <div class="form-group d-flex align-items-center">
                        <i class="far fa-envelope fa-lg fa-fw mr-2"></i>
                        <input type="text" name="email" value="{{ old('email',$config->email) }}"
                               class="px-2 form-control d-inline-block @error('email') is-invalid @enderror">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="form-group mt-3">
                            <input type="checkbox" name="notice" id="mailCheck" value="1"
                                   @if( $config->notice == true ) checked @endif>
                            <label class="form-check-label ml-1" for="mailCheck">セール価格のメール通知をする</label>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit">変更する</button>
                        <a href="{{route('config.index') }}" class="btn btn-outline-primary">キャンセル</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
