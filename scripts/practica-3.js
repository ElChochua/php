// Función cambiar color de fondo
function changeBackgroundColor() {
    var backgroundColorInput = document.getElementById("background-color-input");
    var backgroundColor = backgroundColorInput.value;
    document.body.style.backgroundColor = backgroundColor;
    document.cookie = "backgroundColor=" + backgroundColor + "; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
}

// Función cambiar color de enlaces y guardar en cookie
function changeLinksColor() {
    var linkColorInput = document.getElementById("link-color-input").value;
    var links = document.getElementsByTagName("a");
    for (var i = 0; i < links.length; i++) {
        links[i].style.color = linkColorInput;
    }
    document.cookie = "linksColor=" + linkColorInput + "; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
}

function changeBackgroundLinksColor() {
    var linkBackgroundColorInput = document.getElementById("link-background-color-input").value;
    var links = document.getElementsByTagName("a");
    for (var i = 0; i < links.length; i++) {
        links[i].style.backgroundColor = linkBackgroundColorInput;
    }
    document.cookie = "linksBackgroundColor=" + linkBackgroundColorInput + "; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
}

function setImageSizeSmall() {
    var images = document.querySelectorAll("img:not(.no-effect)");
    for (var i = 0; i < images.length; i++) {
        images[i].style.width = "25%"; // Cambiar el ancho de la imagen
        images[i].style.height = "auto"; // Cambiar la altura de la imagen
    }
    // Guardar el tamaño de las imágenes como "chicas" en una cookie
    document.cookie = "setImagesSize=small; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
}

function setImageSizeSmall() {
    var images = document.querySelectorAll("img:not(.no-effect)");
    for (var i = 0; i < images.length; i++) {
        images[i].style.width = "50%"; // Cambiar el ancho de la imagen
        images[i].style.height = "auto"; // Cambiar la altura de la imagen
    }
    // Guardar el tamaño de las imágenes como "chicas" en una cookie
    document.cookie = "setImagesSize=medium; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
}

function setImageSizeLarge() {
    var images = document.querySelectorAll("img:not(.no-effect)");
    for (var i = 0; i < images.length; i++) {
        images[i].style.width = "80%"; // Cambiar el ancho de la imagen
        images[i].style.height = "auto"; // Cambiar la altura de la imagen
    }
    // Guardar el tamaño de las imágenes como "chicas" en una cookie
    document.cookie = "setImagesSize=large; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
}

// Función para establecer bordes a las imágenes
function setImageBorder() {
    var imageBorder = document.getElementById("image-border-input").value;
    var images = document.getElementsByTagName("img");

    for (var i = 0; i < images.length; i++) {
        images[i].style.border = imageBorder + "px solid black";
    }

    // Guardar solo el valor numérico en la cookie
    document.cookie = "setImageBorder=" + imageBorder + "; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
}

// Función para el tamaño de los bordes
function setBorderWidth() {
    var imageWidth = document.getElementById("border-size-input").value;
    var images = document.getElementsByTagName("img");

    for (var i = 0; i < images.length; i++) {
        images[i].style.borderWidth = imageWidth + "px"; // Añadir la unidad de medida "px"
    }

    // Guardar el tamaño de los bordes en una cookie
    document.cookie = "setBorderWidth=" + imageWidth + "; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
}

function setColoredBorder() {
    var borderColor = document.getElementById("border-color-input").value;
    var images = document.getElementsByTagName("img");
    for (var i = 0; i < images.length; i++) {
        images[i].style.borderColor = borderColor;
    }
    // Guardar el color del borde en una cookie
    document.cookie = "coloredBorder=" + borderColor + "; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
}

function addShadow() {

    var images = document.getElementsByTagName("img");
    for (var i = 0; i < images.length; i++) {
        images[i].style.boxShadow = "10px 10px 20px rgba(0, 0, 0, 0.7)";
    }
    // Guardar el estado de la sombra en una cookie
    document.cookie = "addShadow=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
}

function paragraphsFontColor() {
    var fontColor = document.getElementById("paragraph-color-input").value;
    var allFontText = document.getElementsByTagName("p");
    for (var i = 0; i < allFontText.length; i++) {
        allFontText[i].style.color = fontColor;
    }
    // Guardar el color de la fuente en una cookie
    document.cookie = "fontColor=" + fontColor + "; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
}

function setParagraphFontSize(size) {
    var paragraphs = document.getElementsByTagName("p");
    for (var i = 0; i < paragraphs.length; i++) {
        paragraphs[i].style.fontSize = getFontSizeValue(size);
    }
    // Guardar el tamaño de fuente en una cookie
    document.cookie = "paragraphFontSize=" + size + "; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
}

function getFontSizeValue(size) {
    switch (size) {
        case 'small':
            return '12px';
        case 'medium':
            return '16px';
        case 'large':
            return '20px';
        default:
            return 'inherit';
    }
}

// Función para cambiar el color del título y guardar en una cookie
function changeTitleColor() {
    var titleColorInput = document.getElementById("title-color-input");
    var title = document.querySelector("h1");

    if (title) {
        var color = titleColorInput.value;
        title.style.color = color;

        // Guardar el color del título en una cookie
        document.cookie = "titleColor=" + color + "; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
    }
}

// Funciones para cambiar el tamaño de fuente del título y guardar en cookies
function setTitleFontSize(size) {
    var title = document.querySelector("h1");
    if (title) {
        title.style.fontSize = getTitleFontSizeValue(size);

        // Guardar el tamaño de fuente del título en una cookie
        document.cookie = "titleFontSize=" + size + "; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
    }
}

function getTitleFontSizeValue(size) {
    switch (size) {
        case 'small':
            return '18px';
        case 'medium':
            return '24px';
        case 'large':
            return '30px';
        default:
            return 'inherit';
    }
}

// Función para cambiar el color del subtítulo y guardar en una cookie
function changeSubtitleColor() {
    var subtitleColorInput = document.getElementById("subtitle-color-input-ip");
    var subtitle = document.querySelector("h2");

    if (subtitle) {
        var color = subtitleColorInput.value;
        subtitle.style.color = color;

        // Guardar el color del subtítulo en una cookie
        document.cookie = "subtitleColor=" + color + "; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
    }
}

function init() {
    var backgroundColorCookie = getCookie("backgroundColor");
    if (backgroundColorCookie) {
        document.body.style.backgroundColor = backgroundColorCookie;
    }

    /* Enlaces */
    var colorEnlacesCookie = getCookie("linksColor");
    if (colorEnlacesCookie) {
        var enlaces = document.getElementsByTagName("a");
        for (var i = 0; i < enlaces.length; i++) {
            enlaces[i].style.color = colorEnlacesCookie;
        }
    }

    var colorFondoEnlacesCookie = getCookie("linksBackgroundColor");
    if (colorFondoEnlacesCookie) {
        var enlaces = document.getElementsByTagName("a");
        for (var i = 0; i < enlaces.length; i++) {
            enlaces[i].style.backgroundColor = colorFondoEnlacesCookie;
        }
    }

    // Cookie cargada del tamaño de las imágenes
    var setImageSizeCookie = getCookie("setImagesSize");
    if (setImageSizeCookie) {
        if (setImageSizeCookie === "small") {
            setImageSizeSmall();
        } else if (setImageSizeCookie === "medium") {
            setImageSizeMedium();
        } else if (setImageSizeCookie === "large") {
            setImageSizeLarge();
        }
    }

    // Cookie cargada para el borde de las imágenes
    var setImageBorderCookie = getCookie("setImageBorder");
    if (setImageBorderCookie) {
        var images = document.getElementsByTagName("img");
        for (var i = 0; i < images.length; i++) {
            images[i].style.border = setImageBorderCookie + "px solid black";
        }
    }

    var setBorderWidthCookie = getCookie("setBorderWidth");
    if (setBorderWidthCookie) {
        var images = document.getElementsByTagName("img");
        for (var i = 0; i < images.length; i++) {
            images[i].style.borderWidth = setBorderWidthCookie + "px";
        }
    }

    var setColoredBorderCookie = getCookie("coloredBorder");
    if (setColoredBorderCookie) {
        var images = document.getElementsByTagName("img");
        for (var i = 0; i < images.length; i++) {
            images[i].style.borderColor = setColoredBorderCookie;
        }
    }

    var addShadowCookie = getCookie("addShadow");
    if (addShadowCookie === "true") {
        addShadow();
    }

    var getParagraphFontColorCookie = getCookie("fontColor");
    if (getParagraphFontColorCookie) {
        var textContainer = document.getElementsByTagName("p");
        for (var i = 0; i < textContainer.length; i++) {
            textContainer[i].style.color = getParagraphFontColorCookie;
        }
    }

    var fontSizeCookie = getCookie("paragraphFontSize");
    if (fontSizeCookie) {
        var paragraphs = document.getElementsByTagName("p");
        for (var i = 0; i < paragraphs.length; i++) {
            paragraphs[i].style.fontSize = getFontSizeValue(fontSizeCookie);
        }
    }

    var titleColorCookie = getCookie("titleColor");
    var title = document.querySelector("h1");

    if (titleColorCookie && title) {
        title.style.color = titleColorCookie;
    }

    var titleFontSizeCookie = getCookie("titleFontSize");
    var title = document.querySelector("h2");

    if (titleFontSizeCookie && title) {
        title.style.fontSize = getTitleFontSizeValue(titleFontSizeCookie);
    }

    var subtitleColorCookie = getCookie("subtitleColor");
    var subtitle = document.querySelector("h3");
    if (subtitle) {
        subtitle.style.color = subtitleColorCookie;
    }
    

    var imagesSizeCookie = getCookie("imagesSize");
    if (imagesSizeCookie) {
        setImagesSize(imagesSizeCookie);
    }
}

// Función para restablecer la configuración a como la tenía
function restoreConfigPath() {

    // Eliminamos las cookies
    var cookies = document.cookie.split("; ");
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        var eqPos = cookie.indexOf("=");
        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
    }

    // Recargar la página
    location.reload();
}

function getCookie(name) {
    var nameEQ = name + "=";
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        while (cookie.charAt(0) == ' ') {
            cookie = cookie.substring(1, cookie.length);
        }
        if (cookie.indexOf(nameEQ) == 0) {
            return cookie.substring(nameEQ.length, cookie.length);
        }
    }
    return null;
}

window.onload = function () {
    init();
};