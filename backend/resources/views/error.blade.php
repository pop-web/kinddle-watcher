@extends('layouts.app')
@section('content')
@php
$status_code = $exception->getStatusCode();
$message = $exception->getMessage();
if (! $message) {
    switch ($status_code) {
        case 400:
            $message = 'Bad Request';
            break;
        case 401:
            $message = '認証に失敗しました';
            break;
        case 403:
            $message = 'アクセス権がありません';
            break;
        case 404:
            $message = '存在しないページです';
            break;
        case 408:
            $message = 'タイムアウトです';
            break;
        case 414:
            $message = 'リクエストURIが長すぎます';
            break;
        case 419:
            $message = '不正なリクエストです';
            break;
        case 500:
            $message = 'Internal Server Error';
            break;
        case 503:
            $message = 'Service Unavailable';
            break;
        default:
            $message = 'エラー';
            break;
    }
}
@endphp
<div class="container">
    <h2>{{ $status_code }} エラー</h2>
    <p>{{ $message }}</p>
    <a class="btn btn-primary" href="{{ url('/') }}">トップページへ</a>
</div>
@endsection
