//    LOGIN

function CrearCuenta(){
    iniciar = document.getElementById('id_iniciar');
    crear = document.getElementById('id_crear');

    iniciar.style.transform='translateX(-100%)';
    crear.style.transform='translateX(0)';
}
function YaTengoCuenta(){
    iniciar = document.getElementById('id_iniciar');
    crear = document.getElementById('id_crear');

    iniciar.style.transform='translateX(0)';
    crear.style.transform='translateX(100%)';
}

//   HOME

setTimeout(CambiarD1,5000);
function CambiarD1(){
    d1 = document.getElementById('D1');
    d2 = document.getElementById('D2');

    d1.style.display='none';
    d2.style.display='block';
}

setTimeout(CambiarD2,10000);
function CambiarD2(){
    d2 = document.getElementById('D2');
    d3 = document.getElementById('D3');

    d2.style.display='none';
    d3.style.display='block';
}

setTimeout(CambiarD3,13000);
function CambiarD3(){
    d3 = document.getElementById('D3');
    d4 = document.getElementById('D4');

    d3.style.display='none';
    d4.style.display='block';
}

setTimeout(CambiarD4,18000);
function CambiarD4(){
    d4 = document.getElementById('D4');
    d5 = document.getElementById('D5');

    d4.style.display='none';
    d5.style.display='block';
}

setTimeout(RevelarPagina,24000);
function RevelarPagina(){
    dialogos = document.getElementById('id_dialogos');
    dialogos.style.display='none';

    header = document.getElementById('id_header');
    header.style.opacity='1';

    cuerpo = document.getElementById('id_cuerpo');
    cuerpo.style.opacity='1';

    body = document.getElementById('id_body');
    body.style.overflowY='scroll';
    body.style.backgroundImage='none';
}
