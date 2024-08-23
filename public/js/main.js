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

document.querySelectorAll('.icon').forEach(function (icon) {
    icon.addEventListener('mouseenter', function () {
        anime({
            targets: icon,
            scale: 1.3,
            color: '#ffffff', // Cambia el color al pasar el mouse
            duration: 500,
            easing: 'easeOutElastic(1, .8)'
        });
    });

    icon.addEventListener('mouseleave', function () {
        anime({
            targets: icon,
            scale: 1.0,
            color: '#ffffff', // Regresa al color original
            duration: 500,
            easing: 'easeOutElastic(1, .8)'
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('.nav-link');

    links.forEach(link => {
        link.addEventListener('mouseover', function () {
            anime({
                targets: link,
                scale: [1, 1.1],
                duration: 300,
                easing: 'easeOutQuart'
            });
        });

        link.addEventListener('mouseout', function () {
            anime({
                targets: link,
                scale: [1.1, 1],
                duration: 300,
                easing: 'easeOutQuart'
            });
        });
    });
});