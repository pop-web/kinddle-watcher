const axios = require('axios').default;

document.addEventListener('DOMContentLoaded', () => {
    const showItemModalBtn  = document.querySelector("#showItemModalBtn")
    const showItemModalBody = document.querySelector("#showItemModal .modal-body")
    const itemForm = document.querySelector("#itemForm")
    showItemModalBtn.addEventListener("click",async () => {
        const { data } = await axios.post('/scrape',{targetUrl : itemForm.value})
        showItemModalBody.innerHTML = data.title
        $("#showItemModal").modal('toggle') // BootStrap Modal
    })
})
