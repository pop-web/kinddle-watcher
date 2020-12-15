document.addEventListener('DOMContentLoaded', () => {
    const deleteUser  = document.querySelector("#delete_user")
    deleteUser.addEventListener("submit", () => {
        if(!window.confirm('アカウント削除しますか？')){
            return false;
        }
        deleteUser.submit()
    })
})
