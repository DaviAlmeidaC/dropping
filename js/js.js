const time = document.querySelector('.img_relogio1')

const tempo = () =>{

     setInterval(() => {
    const correndo = Number(time.innerHTML);
    time.innerHTML = correndo + 1;
    }, 1000);
}

window.onload = () =>{
    tempo()
}
