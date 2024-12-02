if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('/sw.js')
    .then(function(registration) {
      console.log('Service Worker registrado con éxito:', registration);
    })
    .catch(function(error) {
      console.log('Falló la registración del Service Worker:', error);
    });
} else {
  console.log('Service Workers no son soportados en este navegador.');
}
