document.addEventListener('DOMContentLoaded', () => {
    const deleteForms  = document.querySelectorAll(".delete_form")
    deleteForms.forEach((deleteForm) => {
        deleteForm.addEventListener("submit", () => {
            if(!window.confirm('本当に削除しますか？')){
                window.alert('キャンセルされました');
                return false;
            }
            deleteForm.submit()
        })
    })
})
