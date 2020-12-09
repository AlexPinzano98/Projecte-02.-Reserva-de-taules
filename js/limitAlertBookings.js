window.addEventListener('load', () => {
	let message = document.getElementById('message');
	let numBooking = document.querySelectorAll('tbody > tr').length;

	if (document.getElementById('idSala') != null) {

        message.innerHTML = `<h3> Numero de reservas:  ${numBooking}</h3>`;

	}	
});