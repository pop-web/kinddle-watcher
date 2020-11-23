const axios = require('axios').default;

document.addEventListener('DOMContentLoaded', () => {
    const showItemModalBtn  = document.querySelector("#showItemModalBtn")
    const itemForm = document.querySelector("#itemForm")
    const submitText = document.querySelector("#submitText")
    const loadingText = document.querySelector("#loadingText")
    const itemTitle = document.querySelector("#showItemModal .modal-body h4")
    const itemUrl = document.querySelector("#showItemModal .modal-body a")
    const itemImgUrl = document.querySelector("#showItemModal .modal-body img")
    const hiddenUrlInput = document.querySelector("#hiddenUrlInput")
    const hiddenTitleInput = document.querySelector("#hiddenTitleInput")
    const hiddenImgUrl = document.querySelector("#hiddenImgUrl")
    showItemModalBtn.addEventListener("click",async () => {
        submitText.classList.add("d-none")
        loadingText.classList.remove("d-none")
        try{
            const { data } = await axios.post('/scrape',{targetUrl : itemForm.value})

            itemTitle.innerHTML = data.title
            itemUrl.setAttribute('href', data.url);
            itemImgUrl.setAttribute('src', data.img_url);

            hiddenTitleInput.value = data.title
            hiddenUrlInput.value = data.url
            hiddenImgUrl.value = data.img_url
        }catch (e) {
            //alert(e)
        }
        submitText.classList.remove("d-none")
        loadingText.classList.add("d-none")
        $("#showItemModal").modal('show') // BootStrap Modal
    })
})
