document.addEventListener('DOMContentLoaded', function() {
    const showItemModalBtn  = document.querySelector("#showItemModalBtn")
    const showItemModalBody = document.querySelector("#showItemModal .modal-body")
    const itemFormValue = document.querySelector("#itemForm")
    showItemModalBtn.addEventListener("click",function () {
        showItemModalBody.innerHTML = itemFormValue.value
        $("#showItemModal").modal('toggle')
    })
})
