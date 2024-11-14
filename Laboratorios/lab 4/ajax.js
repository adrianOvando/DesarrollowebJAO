function showTab(tabId) {
    const tabs = document.querySelectorAll('.tab-content');
    tabs.forEach(tab => tab.style.display = 'none');
    
    document.getElementById(tabId).style.display = 'block';


    const tabButtons = document.querySelectorAll('.tab');
    tabButtons.forEach(button => button.classList.remove('active'));

    if (tabId === 'compose') {
        document.querySelector('.compose-button').classList.add('active');
    } else {
        document.querySelector(`.tab[onclick="showTab('${tabId}')"]`).classList.add('active');
    }
}




function openModal(asunto, mensaje) {
    document.getElementById('modalAsunto').innerText = asunto;
    document.getElementById('modalMensaje').innerText = mensaje;
    document.getElementById('modal').style.display = 'block';
}


function closeModal() {
    document.getElementById('modal').style.display = 'none';
}


function sendMessage() {
    const correo = document.getElementById('correo').value;
    const asunto = document.getElementById('asunto').value;
    const mensaje = document.getElementById('mensaje').value;

    if (correo && asunto && mensaje) {
        alert(`Mensaje enviado a ${correo} con asunto "${asunto}"`);
        document.getElementById('composeForm').reset();
        showTab('sent');
    } else {
        alert("Por favor, complete todos los campos.");
    }
}