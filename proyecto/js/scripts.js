/* funcion para desplegar el menu*/
function displaymenu() {
    document.getElementById("menu").style.display = "block";
}
/* funcion para esconder el menu*/
function hidemenu() {
    document.getElementById("menu").style.display = "none";
}

/* funcion para obtener el valor de el sabor de helado */
function compra() {
    var sabor = document.getElementsByName('sabores');
    var comple = document.getElementsByName('complemento');
    var cont = 0;
    for (i = 0; i < sabor.length; i++) {
        for (x = 0; x < comple.length; x++) {
            if (comple[x].checked) {
                cont = cont + 1;
            }
        }
        if (sabor[i].checked === true) {
            if (cont < 3) {
                alert("EL COSTO DEL HELADO ES $" + parseInt(sabor[i].value));
            }
            if (cont >= 3 && cont <= 4) {
                alert("EL COSTO DEL HELADO ES $" + (parseInt(sabor[i].value) + 5));
            }
            if (cont >= 5 && cont <= 6) {
                alert("EL COSTO DEL HELADO ES $" + (parseInt(sabor[i].value) + 15));
            }
        }
        break;
    }
    if (sabor[i].checked === false) {

        if (cont < 3) {
            alert("EL COSTO DEL HELADO ES $" + parseInt(sabor[i].value));
        }
        if (cont >= 3 && cont <= 4) {
            alert("EL COSTO DEL HELADO ES $" + (parseInt(sabor[i].value) + 5));
        }
        if (cont >= 5 && cont <= 6) {
            alert("EL COSTO DEL HELADO ES $" + (parseInt(sabor[i].value) + 15));
        }
    }
}