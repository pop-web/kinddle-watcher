document.addEventListener('DOMContentLoaded', () => {
    const deleteForms  = document.querySelectorAll(".delete_form")
    deleteForms.forEach((deleteForm) => {
        deleteForm.addEventListener("submit", () => {
            if(!window.confirm('マイリストから削除しますか？')){
                return false;
            }
            deleteForm.submit()
        })
    })
})
