//validar contraceñas
function validarContraseña(){
  var contraseña = document.getElementById('contraseña');
  var validacion_contraseña = document.getElementById('validacion_contraseña');

  var errorDiv = document.getElementById('error_contraseña');
  if (contraseña.value != validacion_contraseña.value) {
    validacion_contraseña.setCustomValidity('Las contraseñas no coinciden.');
    errorDiv.textContent = 'Las contraseñas no coinciden.';
  } else {
    validacion_contraseña.setCustomValidity('');
    errorDiv.textContent = '';
  }
};

//validar contraseña
contraseña.addEventListener('input', function (event) {
  var contraseña = document.getElementById('contraseña');
  var validacion_contraseña = document.getElementById('validacion_contraseña');

  var min_max_contraseña = document.getElementById('min_max_contraseña');
  var num_contraseña = document.getElementById('num_contraseña');
  var mayus_contraseña = document.getElementById('mayus_contraseña');

  if (contraseña.value.length < 8) {
    min_max_contraseña.classList.remove("text-success");
    min_max_contraseña.classList.add("text-danger");
  } else {
    min_max_contraseña.classList.remove("text-danger");
    min_max_contraseña.classList.add("text-success");
  }
  if (contraseña.value.match(/[0-9]/)) {
    num_contraseña.classList.remove("text-danger");
    num_contraseña.classList.add("text-success");
  } else {
    num_contraseña.classList.remove("text-success");
    num_contraseña.classList.add("text-danger");
  }
  if (contraseña.value.match(/[A-Z]/)) {
    mayus_contraseña.classList.remove("text-danger");
    mayus_contraseña.classList.add("text-success");
  }else {
    mayus_contraseña.classList.remove("text-success");
    mayus_contraseña.classList.add("text-danger");
  }
});

validacion_contraseña.addEventListener('input', validarContraseña );
contraseña.addEventListener('input',validarContraseña);


