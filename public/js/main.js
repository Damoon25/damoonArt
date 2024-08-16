document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.custom-card2 .open-modal');

    buttons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault(); // Prevenir la acción predeterminada del enlace

            // Encuentra la tarjeta correspondiente al botón clicado
            const card = this.closest('.custom-card2');

            // Extrae los datos de la tarjeta
            const title = card.querySelector('h3').innerText;
            const fullText = card.querySelector('.full-text').innerText;
            const imageSrc = card.querySelector('.card-img-top').src;

            // Codifica el mensaje personalizado para WhatsApp
            const message = encodeURIComponent(`Hola, ¿cómo está? Me gustaría saber más sobre el tratamiento de ${title}`);

            // Construye la URL de WhatsApp
            const whatsappUrl = `https://wa.me/+5492215777160?text=${message}`;

            // Muestra el modal con SweetAlert2
            Swal.fire({
                title: `<h3 class="titleModal" style="color: var(--link);">${title}</h3>`,
                html: `<img src="${imageSrc}" alt="${title}" style="max-width: 100%; margin-bottom: 15px; border-radius: 10px;">
           <p class="minText text-start" style="color: var(--link) !important;">${fullText}</p>`,
                background: 'var(--color2)',
                showCloseButton: true, // Ocultar el botón de cerrar
                showCancelButton: false,
                focusConfirm: false, // Desactivar el foco automático en el botón de confirmar
                confirmButtonText: `<a href="${whatsappUrl}" target="_blank" style="text-decoration:none; color:white;">Comunicarme por Whatsapp</a>`,
                customClass: {
                    popup: 'custom-modal',
                    confirmButton: 'custom-modal-button'
                },
                backdrop: `
                    rgba(0, 0, 0, 0.6)
                    left top
                    no-repeat
        `,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            });
        });
    });
});