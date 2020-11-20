@extends('layouts.app')

@section('content')
<div class="container">
    <form>
        <div class="form-group">
            <label for="exampleInputPassword1">Amazon URL</label>
            <input type="text" class="form-control" autofocus placeholder="AmazonURLを入力">
        </div>
        <button type="button" class="btn btn-primary" id="createItemModal">
            送信
        </button>
    </form>
    <div class="list-group mt-5">
        @foreach($items as $item)
            <a href="{{ route('item.index', ['item_id' => $item->id]) }}" class="list-group-item">
                {{ $item->title }}
            </a>
        @endforeach
    </div>
</div>
@endsection
