function enviarFormulario(event) {
    event.preventDefault();

    let formData = new FormData(document.getElementById('formulario'));

    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'process.php', true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            document.getElementById('respuesta').innerHTML = xhr.responseText;

            if(xhr.responseText === "Datos guardados exitosamente") {
                document.getElementById('formulario').reset();
                setTimeout(function() {
                    location.reload();
                }, 500);  
            }
        } else {
            document.getElementById('respuesta').innerHTML = 'Error al enviar los datos';
        }
    };

    xhr.send(formData);
}
