@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('item.create') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputPassword1">Amazon URL</label>
            <input type="text" class="form-control" name="url" value="{{ old('url') }}"  autofocus placeholder="AmazonURLを入力">

            @if($errors->any())
            <ul class="list-unstyled mt-1">
                @foreach($errors->all() as $message)
                    <li class="alert alert-danger" role="alert">{{ $message }}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">登録</button>
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
