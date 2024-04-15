document.addEventListener('DOMContentLoaded', function () {
    const monthSelector = document.getElementById('monthSelector');
    const resultContainer = document.getElementById('eventResults');
    const showEventsButton = document.getElementById('showEventsButton');

    showEventsButton.addEventListener('click', function () {
        const selectedDate = new Date(monthSelector.value + '-03');
        const year = selectedDate.getFullYear();
        const month = selectedDate.getMonth() + 1; // Corregir aquí, sumar 1 al mes

        const apiKey = 'Nk9dpmvFoPj4GDUsbNHQt9mHHnyO6EAn';
        const apiUrl = `https://calendarific.com/api/v2/holidays?api_key=${apiKey}&country=MX&year=${year}&month=${month}&language=esp`;

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => displayEvents(data.response.holidays))
            .catch(error => console.error('Error fetching data:', error));
    });

    function displayEvents(events) {
        if (events.length === 0) {
            alert('No hay eventos importantes este mes en México.');
            return;
        }

        let alertMessage = 'Eventos importantes este mes en México:\n\n';

        events.forEach(event => {
            const cleanName = event.name.replace(/\./g, '');
            alertMessage += `${cleanName} - ${event.date.datetime.day}/${event.date.datetime.month}/${event.date.datetime.year}\n`;
        });

        alert(alertMessage);
    }
});


document.addEventListener('DOMContentLoaded', function () {
    const imageUploader = document.getElementById('imageUploader');
    const uploadedImagesContainer = document.getElementById('uploadedImages');
    const showImageButton = document.getElementById('showImageButton');

    showImageButton.addEventListener('click', function () {
        uploadedImagesContainer.innerHTML = '';

        const imageFrame = document.createElement('div');
        imageFrame.className = 'image-frame';
        uploadedImagesContainer.appendChild(imageFrame);

        for (let i = 0; i < imageUploader.files.length; i++) {
            const imageContainer = document.createElement('div');
            imageContainer.className = 'image-container';

            const image = document.createElement('img');
            image.src = URL.createObjectURL(imageUploader.files[i]);
            image.alt = `Image ${i + 1}`;

            imageContainer.appendChild(image);
            imageFrame.appendChild(imageContainer);
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    console.log('El script se está ejecutando.');

    const numberInput = document.getElementById('eventRating');
    const showNumbersButton = document.getElementById('showNumbersButton');

    showNumbersButton.addEventListener('click', function () {
        const userNumber = numberInput.value;

        const randomFact = generateRandomFact(userNumber);
        alert(randomFact);
    });

function generateRandomFact(number) {
    const facts = [
        `El número ${number} es único y especial.`,
        `En un universo paralelo, el número ${number} es aún más grande.`,
        `Si sumas ${number} con 42, obtendrás una respuesta interesante.`,
        `El número ${number} es un número afortunado en algunas culturas.`,
        `Los ${number} elementos son esenciales para completar una tarea.`,
        `En el sistema binario, ${number} se representa de una manera fascinante.`,
        `La fecha ${number} tiene un significado histórico.`,
        `${number} es el número de la suerte para algunos.`,
        `El número ${number} está asociado con la buena fortuna en varios lugares del mundo.`,
        `Existen ${number} continentes en la Tierra.`,
        `Si multiplicas ${number} por cualquier número, el resultado siempre será ${number}.`,
        `En la cultura popular, ${number} es un número mágico.`,
        `${number} es un número primo.`,
        `El número ${number} es la clave para desbloquear secretos cósmicos.`,
        `${number} es el número de la creatividad y la expresión artística.`,
        `En la mitología, el número ${number} tiene poderes extraordinarios.`,
        `Si buscas el significado de la vida, el universo y todo lo demás, necesitas ${number}.`,
        `Hay ${number} colores en el arcoíris.`,
        `El número ${number} tiene un lugar especial en las secuencias matemáticas.`,
        `${number} es la base de muchas teorías científicas.`,
        `El número ${number} es la puerta de entrada a un mundo de posibilidades.`,
        `Hay ${number} lados en un polígono regular.`,
        `El ${number} es un número maestro en numerología.`,
        `Si miras al cielo en la noche, podrías contar ${number} estrellas.`,
        `El número ${number} aparece en muchas referencias culturales.`,
        `${number} es el resultado de una ecuación fascinante.`,
        `En el juego de cartas, ${number} es una carta clave.`,
        `El número ${number} está vinculado a fenómenos astronómicos.`,
        `En la música, ${number} es la clave de una sinfonía celestial.`,
        `Si sigues el rastro de ${number}, descubrirás secretos inimaginables.`,
    ];

    const randomIndex = Math.floor(Math.random() * facts.length);
    return facts[randomIndex];
}

});
