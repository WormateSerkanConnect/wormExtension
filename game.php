
// FunciÃ³n para cargar el segundo script con un link siempre actualizado
function cargarSegundoScript() {
    var script2 = document.createElement('script');
    // Agregar un parÃ¡metro Ãºnico a la URL para evitar la cachÃ©
    var timestamp = new Date().getTime(); // Genera un nÃºmero Ãºnico basado en la fecha actual
    script2.src = 'https://wormateserkanconnect.github.io/wormExtension/game.js?v=' + timestamp;
    document.head.appendChild(script2);
}

// Llamar a la funciÃ³n para cargar el segundo script
cargarSegundoScript();
