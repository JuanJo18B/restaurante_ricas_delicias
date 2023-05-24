ck_efectivo.addEventListener("click",seleccionado)
ck_tarjeta.addEventListener("click",selecionado_2)
ck_transferencia.addEventListener("click",selecionado_3)
ck_beneficios.addEventListener("click",selecionado_4)

function seleccionado (evt){
    if (ck_efectivo.checked){
        ck_tarjeta.disabled = true
        ck_transferencia.disabled = true
        ck_beneficios.disabled = true
    }else{
        ck_efectivo.disabled = false
        ck_tarjeta.disabled = false
        ck_transferencia.disabled = false
        ck_beneficios.disabled = false
    }
}

function selecionado_2 (evt){
    if (ck_tarjeta.checked){
        ck_efectivo.disabled = true
        ck_transferencia.disabled = true
        ck_beneficios.disabled = true
    }else{
        ck_efectivo.disabled = false
        ck_tarjeta.disabled = false
        ck_transferencia.disabled = false
        ck_beneficios.disabled = false
    }
}

function selecionado_3 (evt){
    if (ck_transferencia.checked){
        ck_efectivo.disabled = true
        ck_beneficios.disabled = true
        ck_tarjeta.disabled = true
    }else{
        ck_efectivo.disabled = false
        ck_tarjeta.disabled = false
        ck_transferencia.disabled = false
        ck_beneficios.disabled = false
    }
}
function selecionado_4 (evt){
    if (ck_beneficios.checked){
        ck_efectivo.disabled = true
        ck_transferencia.disabled = true
        ck_tarjeta.disabled = true
    }else{
        ck_efectivo.disabled = false
        ck_tarjeta.disabled = false
        ck_transferencia.disabled = false
        ck_beneficios.disabled = false
    }
}