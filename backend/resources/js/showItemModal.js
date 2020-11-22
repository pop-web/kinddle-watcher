const axios = require('axios').default;

document.addEventListener('DOMContentLoaded', () => {
    const showItemModalBtn  = document.querySelector("#showItemModalBtn")
    const showItemModalBody = document.querySelector("#showItemModal .modal-body")
    const itemForm = document.querySelector("#itemForm")
    const submitText = document.querySelector("#submitText")
    const loadingText = document.querySelector("#loadingText")
    showItemModalBtn.addEventListener("click",async () => {
        submitText.classList.add("d-none")
        loadingText.classList.remove("d-none")
        let title
        try{
            const { data,status } = await axios.post('/scrape',{targetUrl : itemForm.value})
            title = data.title
        }catch (e) {
            //alert(e)
        }
        submitText.classList.remove("d-none")
        loadingText.classList.add("d-none")
        //showItemModalBody.innerHTML = title
        $("#showItemModal").modal('show') // BootStrap Modal
    })
})
