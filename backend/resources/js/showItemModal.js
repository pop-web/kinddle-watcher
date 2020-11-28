const axios = require('axios').default;

document.addEventListener('DOMContentLoaded', () => {
    const submitItemForm  = document.querySelector("#submitItemForm")
    const itemForm = document.querySelector("#itemForm")
    const submitText = document.querySelector("#submitText")
    const loadingText = document.querySelector("#loadingText")
    const itemTitle = document.querySelector("#showItemModal .modal-body h5")
    const itemUrl = document.querySelector("#showItemModal .modal-body a")
    const itemImgUrl = document.querySelector("#showItemModal .modal-body img")
    const itemPrice = document.querySelector("#itemPrice")
    const hiddenUrlInput = document.querySelector("#hiddenUrlInput")
    const hiddenTitleInput = document.querySelector("#hiddenTitleInput")
    const hiddenImgUrl = document.querySelector("#hiddenImgUrl")
    const hiddenItemPrice = document.querySelector("#hiddenItemPrice")
    submitItemForm.addEventListener("submit",async (event) => {

        submitText.classList.add("d-none")
        loadingText.classList.remove("d-none")
        try{
            if(!itemForm.value) throw { errMsg : "URLを入力してください。" }
            const { data } = await axios.post('/scrape',{targetUrl : itemForm.value})
            itemTitle.innerHTML = data.title
            itemUrl.setAttribute('href', data.url);
            itemImgUrl.setAttribute('src', data.img_url);
            itemPrice.innerHTML = data.price;

            hiddenTitleInput.value = data.title
            hiddenUrlInput.value = data.url
            hiddenImgUrl.value = data.img_url
            hiddenItemPrice.value = data.price
        }catch (e) {
            if(e.errMsg) {
                alert(e.errMsg)
            }else {
                alert(e)
            }
            submitText.classList.remove("d-none")
            loadingText.classList.add("d-none")
            return
        }
        submitText.classList.remove("d-none")
        loadingText.classList.add("d-none")
        $("#showItemModal").modal('show') // BootStrap Modal
    })
})
