window.onload = () => {
    let count = 10
    let id = setInterval(() => {
        count--;
        document.querySelector('#timer').textContent=count;
        if(count <= 0) {
            clearInterval(id);
            location.href='/';
        }
    },1000)
};
