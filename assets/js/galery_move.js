
let time = 30;
let pxDisplay =  (innerWidth/2)
let galery = document.getElementById("container_galery");
let galerySon = document.getElementById("container_galery_son");
let fondo = document.getElementById("fondo");
const color = ["#762476", "#9b5410", "#009d5b", "#eeeeee"];
let sizeComplet = galerySon.clientWidth+28.8;
let sizeDisplay = 0;
i = -(galery.clientWidth);

setInterval('move()', time);
console.log(innerWidth/2)
console.log(galery.clientWidth)
console.log(sizeComplet)
console.log("tamaños completos")
console.log(galerySon.clientWidth+29)
console.log(sizeComplet + (galerySon.clientHeight+29))

let cantidad = 0;

if(innerWidth/2 < 760){
    sizeDisplay =  768 - (innerWidth/2);
}else if(innerWidth/2 > 760){
    sizeDisplay =  768 - (innerWidth/2);
}else{
    sizeDisplay = 0;
}

for (let i = 1; i <= 100; i++) {
    const sizeSon = galerySon.clientWidth+28.8
    if(Math.round(galery.clientWidth) == Math.round(sizeComplet)){
        cantidad = i;
        console.log(cantidad);
        i = 100;
    }else{
        console.log(sizeComplet)
        sizeComplet = sizeComplet + sizeSon
        console.log(i)
        console.log(sizeComplet)
    }
}
console.log(cantidad);

function move() {
    i++
    if (i == Math.round(pxDisplay)) {
        i = -(galery.clientWidth);
        let contador = i + "px";
        sonTime = 0
        galery.style.right = contador;
        console.log(contador)
        fondo.style.backgroundImage = `url(./assets/img/${file}/${image})`
    } else {
        let contador = i + "px";
        galery.style.right = contador;
        chageColor(cantidad, sizeDisplay);
    }
}

function chageColor(can, dis){
    let sonTime = (galery.clientWidth/can)

    for (let j = 0; j <= can; j++) {
        if (Math.round(i+dis) == Math.round(sonTime)) {
            fondo.style.backgroundImage = `url(./assets/img/${file}/${images[j]})`
            console.log(images[j])
            console.log(Math.round(sonTime))
            console.log(Math.round(i+dis))
            console.log(sizeComplet/4)
            console.log(j)
        }
        sonTime = sonTime + galery.clientWidth/can;
    }
}
