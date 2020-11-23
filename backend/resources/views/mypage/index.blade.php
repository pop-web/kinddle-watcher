@extends('layouts.app')

@section('content')
<div class="container">
    <form>
        <div class="form-group">
            <label for="exampleInputPassword1">Amazon URL</label>
            <input type="text" class="form-control" autofocus placeholder="AmazonURLを入力" id="itemForm">
        </div>
    </form>
    <button type="button" class="btn btn-primary" id="showItemModalBtn">
        <span id="submitText">送信</span>
        <span id="loadingText" class="d-none">
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            Loading...
        </span>
    </button>
    <div class="list-group mt-5">
        @foreach($items as $item)
            <a href="{{ $item->url }}" class="list-group-item" target="_blank">
                {{ $item->title }}
            </a>
        @endforeach
    </div>
</div>
@endsection
