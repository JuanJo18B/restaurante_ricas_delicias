let soy_empleado = document.getElementById('div_empleado')
let check = document.getElementById('ch_empleado')

check.addEventListener("click",empleado)

function empleado(evt) {
    if(check.checked){
        soy_empleado.style.display = 'block'
    }
    else{
        soy_empleado.style.display = 'none'
    }
}
