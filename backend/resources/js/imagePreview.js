document.addEventListener('DOMContentLoaded', () => {
    const uploadInput  = document.querySelector("#upload-img-btn input")
    uploadInput.addEventListener('change', () => {
        const fileReader = new FileReader();
        fileReader.onload = (function () {
            document.querySelector('#avatar img').src = fileReader.result;
        });
        fileReader.readAsDataURL(uploadInput.files[0]);
    })
})
