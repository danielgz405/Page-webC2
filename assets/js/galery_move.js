
let time = 30;
let pxDisplay =  (innerWidth/2)
let galery = document.getElementById("container_galery");
let galerySon = document.getElementById("container_galery_son");
let fondo = document.getElementById("fondo");
const color = ["#762476", "#9b5410", "#009d5b"];
let sizeComplet = galerySon.clientWidth+28.8;
i = -(galery.clientWidth);

setInterval('move()', time);
console.log(innerWidth/2)
console.log(galery.clientWidth)
console.log(sizeComplet)
console.log("tamaños completos")
console.log(galerySon.clientWidth+29)
console.log(sizeComplet + (galerySon.clientHeight+29))

let cantidad = 0;

for (let i = 1; i <= 100; i++) {
    const sizeSon = galerySon.clientWidth+28.8
    if(Math.round(galery.clientWidth) == Math.round(sizeComplet)){
        cantidad = i;
        console.log(cantidad);
        realizaProceso(cantidad)
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
    if (i == pxDisplay) {
        i = -(galery.clientWidth);
        let contador = i + "px";
        galery.style.right = contador;
        console.log(contador)
        fondo.style.background = "#4E63C3"
    } else {
        let contador = i + "px";
        let sonTime = (galery.clientWidth/cantidad)
        galery.style.right = contador;

        for (let j = 0; j < cantidad; j++) {
            console.log(i)
            console.log(sonTime)
            if (i == Math.round(sonTime)) {
                fondo.style.background = color[j]
                console.log(color[j])
            }
            sonTime = sonTime + galery.clientWidth/cantidad;
        }
    }
}
