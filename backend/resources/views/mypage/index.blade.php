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
    <div class="row mt-5">
        @foreach($items as $item)
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="{{ $item->img_url }}" alt="{{ $item->title }}">
                <div class="card-body">
                    <p class="card-text">
                        {{ mb_strimwidth($item->title,0,36,'...','utf8') }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
<!-- Modal -->
<div class="modal fade" id="showItemModal" tabindex="-1" role="dialog" aria-labelledby="showItemModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="{{ route('mypage.create') }}">
                <div class="modal-header">
                    <h5 class="modal-title" id="commonModalLabel">マイリスト登録</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="" target="_blank"><img src="" alt="" class="w-50 mx-auto d-block"></a>
                    <h5 class="text-center mt-3"></h5>
                    <div class="d-flex justify-content-center mt-3 text-danger">
                        <div class="h5 bg-danger text-white rounded-pill py-2 px-3" id="itemPrice"></div>
                    </div>
                    <div class="form-group form-check text-center mt-3">
                        <input type="checkbox" class="form-check-input" id="mailCheck">
                        <label class="form-check-label" for="mailCheck">セール価格になったらメール通知をする</label>
                    </div>
                </div>
                <div class="modal-footer">
                    @csrf
                    <input type="hidden" name="url" value="" id="hiddenUrlInput">
                    <input type="hidden" name="title" value="" id="hiddenTitleInput">
                    <input type="hidden" name="img_url" value="" id="hiddenImgUrl">
                    <input type="hidden" name="price" value="" id="hiddenItemPrice">
                    <button type="submit" class="btn btn-primary">登録</button>
                </div>
            </form>
        </div>
    </div>
</div>
