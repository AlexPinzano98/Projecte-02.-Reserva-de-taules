window.onload=function(){ // Definimos la variable modal al cargar la pagina
  modal = document.getElementById("myModal");
}
function openModal(id,name,correo){ // Abrir el modal al hacer click
  modal.style.display = "block";
  document.getElementById("id").value = id;
  document.getElementById("name").value = name;
  document.getElementById("correo").value = correo;
}
function closeModal(){ // Cerrar el modal al hacer click en la X
  modal.style.display = "none";
}
window.onclick = function(event) { // Cerrar el modal al clicar fuera de el
  if (event.target == modal) {
    modal.style.display = "none";
  }
}