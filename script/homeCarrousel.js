var imagenes=['img/teques1.jpg','img/teques2.jpg','img/teques3.jpg','img/teques4.jpg'],
    cont=0;
    console.log("1");
function carrousel(contenedor){
    console.log(imagenes[cont]);
    contenedor.addEventListener('click', e => {
        let atras= contenedor.querySelector('.atras'),
            adelante = contenedor.querySelector('.adelante'),
            img=contenedor.querySelector('img'),
            tgt = e.target;

        
        if(tgt==atras){
            if(cont>0){
                img.src=imagenes[cont -1];
                cont--;
                console.log(imagenes[cont]);
            }else{
                img.src=imagenes[imagenes.length -1 ];
                cont=imagenes.length-1;
            }
        }else if(tgt==adelante){
            if(cont<imagenes.length-1){
                img.src=imagenes[cont +1];
                cont++;
            }else{
                img.src=imagenes[0];
                cont=0;
            }
        }
    });
}

document.addEventListener("DOMContentLoaded",()=>{
    let contenedor = document.querySelector('.carrousel');
    console.log("3");
    carrousel(contenedor);
});