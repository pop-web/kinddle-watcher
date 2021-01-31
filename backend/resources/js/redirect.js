window.onload = () => {
    let count = 3
    setInterval(() => {
        count--;
        let id = document.querySelector('#timer').textContent=count;
        if(count <= 0) {
            clearInterval(id);
            location.href='/';
        }
    },1000)
};
