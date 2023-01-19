const btn = document.querySelector('#btn')
btn.addEventListener('click', () =>{
    const date = new Date();
    if (window.confirm("OK to go to A, Cancel to B")) {
        window.location.href = `http://localhost/A1/screenA.php?date=${date}`;
    }else{
        window.location.href = `http://localhost/A1/screenB.php?date=${date}`;
    }
})