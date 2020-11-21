$(function () {
    // Amazonアイテム表示モーダル
    $("#showItemModalBtn").on("click",function () {
        const itemUrl = $("#itemForm").val()
        $("#showItemModal .modal-body").html(itemUrl)
        $("#showItemModal").modal('toggle')
    })
})
