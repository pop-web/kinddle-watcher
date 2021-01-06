@extends('layouts.app')
@push('scripts')
    <script src="{{ mix('/js/deleteAccount.js') }}"></script>
@endpush
@section('content')
    <div class="container">
        <h2 class="mt-5">設定</h2>
        <div class="row mt-4">
            <div class="col-md-3">
                <div id="avatar">
                    @if($config->file_name)
                        <img src="{{ $config->file_url }}" class="rounded">
                    @else
                        <img src="{{ asset('/images/user_sample.png') }}" alt="ユーザ画像" class="rounded">
                    @endif
                </div>
            </div>
            <div class="col-md-9 mt-2 mx-auto mt-md-0">
                <div class="py-2">
                    <i class="far fa-envelope fa-lg fa-fw mr-1"></i>
                    {{ $config->email }}
                </div>
                <div class="py-2">
                    <i class="far fa-bell fa-lg fa-fw mr-1"></i>
                    @if($config->notice == 1)
                        メール通知設定中
                    @else
                        メール通知しない
                    @endif
                </div>
                <a href="{{ route('config.create') }}" class="btn btn-primary mt-3" type="submit">設定変更</a>
            </div>
        </div>
        <div class="mt-3">
            <form method="POST" action="{{ route('config.destroy',$config->id) }}" id="delete_user" onsubmit="return false" >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-info btn-sm ml-auto d-block">アカウント削除</button>
            </form>
        </div>
    </div>
@endsection
