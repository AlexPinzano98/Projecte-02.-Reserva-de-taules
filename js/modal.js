window.onload=function(){ // Definimos la variable modal al cargar la pagina
  modal = document.getElementById("myModal");
}
function openModal(id,name,correo,perfil){ // Abrir el modal al hacer click
  modal.style.display = "block";
  document.getElementById("id").value = id;
  document.getElementById("name").value = name;
  document.getElementById("correo").value = correo;
  switch (perfil) {
    case '1':
      document.getElementById("camarero").selected = "true";
      break;
    case '2':
      document.getElementById("mantenimiento").selected = "true";
      break;
    case '3':
      document.getElementById("administrador").selected = "true";
      break;
    default:
      break;
  }

}
function abrirModal(){ // Abrir el modal al hacer click
  modal.style.display = "block";
}
function closeModal(){ // Cerrar el modal al hacer click en la X
  modal.style.display = "none";
}
window.onclick = function(event) { // Cerrar el modal al clicar fuera de el
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
/* VALIDAR FORMULARIO */
function validacionForm() {
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var pas1 = document.getElementById('password').value;
  var pas2 = document.getElementById('password2').value;
  // Comprovamos que los campos no esten vacios
  if((name=='')||(email=='')||(pas1=='')||(pas2=='')){
      document.getElementsByClassName('msg-error')[0].innerHTML = "Introduce todos los datos";
  } else if((pas1 != pas2)){ // Comprovamos que las contraseñas sean iguales
      document.getElementsByClassName('msg-error')[0].innerHTML = "Las contraseñas no coinciden";
  } else { // 
      return true;
  }
  return false;
}

function validacionReserva() {
  var fecha = document.getElementById('fecha').value;
  var capacidad = document.getElementById('capacidad').value;

  console.log(fecha.getMonth())

  return false;
  // Comprovamos que los campos no esten vacios
  if((fecha=='')||(capacidad=='')){
      document.getElementsByClassName('msg-error')[0].innerHTML = "Introduce todos los datos";
  } else if((pas1 != pas2)){ // Comprovamos que la fecha no sea real
    

      document.getElementsByClassName('msg-error')[0].innerHTML = "La fecha es anterior a la actual";
  } else { // 
      return true;
  }
  return false;
}