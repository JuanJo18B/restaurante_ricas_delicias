let soy_empleado = document.getElementById('div_empleado')
let check = document.getElementById('ch_empleado')
var ck_mesero = document.getElementById('ck_mesero')
var ck_cocinero = document.getElementById('ck_cocinero')
var ck_gerente = document.getElementById('ck_gerente')

check.addEventListener("click",empleado)
ck_mesero.addEventListener("click",seleccionado)
ck_cocinero.addEventListener("click",selecionado_2)
ck_gerente.addEventListener("click",selecionado_3)

function empleado(evt) {
    if(check.checked){
        soy_empleado.style.display = 'block'
    }
    else{
        soy_empleado.style.display = 'none'
    }
}
function seleccionado (evt){
    if (ck_mesero.checked){
        ck_cocinero.disabled = true
        ck_gerente.disabled = true
    }else{
        ck_cocinero.disabled = false
        ck_mesero.disabled = false
        ck_gerente.disabled = false
    }
}

function selecionado_2 (evt){
    if (ck_cocinero.checked){
        ck_mesero.disabled = true
        ck_gerente.disabled = true
    }else{
        ck_cocinero.disabled = false
        ck_mesero.disabled = false
        ck_gerente.disabled = false
    }
}

function selecionado_3 (evt){
    if (ck_gerente.checked){
        ck_cocinero.disabled = true
        ck_mesero.disabled = true
    }else{
        ck_cocinero.disabled = false
        ck_mesero.disabled = false
        ck_gerente.disabled = false
    }
}