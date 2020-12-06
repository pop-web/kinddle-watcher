@extends('layouts.app')
@push('scripts')
    <script src="{{ mix('/js/showItemModal.js') }}"></script>
    <script src="{{ mix('/js/deleteItem.js') }}"></script>
@endpush
@section('content')
<div class="container">
    <form id="submitItemForm" onsubmit="return false">
        <div class="form-group">
            <label for="exampleInputPassword1">Amazon URL</label>
            <input type="text" class="form-control" autofocus placeholder="AmazonURLを入力" id="itemForm">
        </div>
        <button type="submit" class="btn btn-primary">
            <span id="submitText">送信</span>
            <span id="loadingText" class="d-none">
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
            </span>
        </button>
    </form>
    <h2 class="mt-5">マイリスト</h2>
    <div class="row">
        @foreach($items as $item)
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <div class="card border-0 rounded-0 bg-transparent mb-4">
                <form method="POST" action="{{ route('mypage.delete') }}" class="delete_form" onsubmit="return false">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="item_id" value="{{ $item->id }}">
                    <button type="submit" class="btn btn-sm px-1">
                        <i class="fas fa-times-circle fa-2x"></i>
                    </button>
                </form>
                <a href="{{ $item->url }}&tag=watakushiha-22" target="_blank"><img class="card-img-top shadow-sm" src="{{ $item->img_url }}" alt="{{ $item->title }}"></a>
                <div class="card-body mt-2 p-0">
                    <div class="card-text">
                        <div>{{ mb_strimwidth($item->title,0,36,'...','utf8') }}</div>
                        <div class="d-flex justify-content-end mt-2">
                            <span class="bg-primary text-white rounded-pill px-2">￥{{number_format( $item->registration_price)}}</span>
                        </div>
                    </div>
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
                    <div class="d-flex justify-content-center mt-3">
                        <div class="h5 bg-primary text-white rounded-pill py-1 px-2" id="itemPrice"></div>
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
                    <input type="hidden" name="registration_price" value="" id="hiddenItemPrice">
                    <button type="submit" class="btn btn-primary">登録</button>
                </div>
            </form>
        </div>
    </div>
</div>
