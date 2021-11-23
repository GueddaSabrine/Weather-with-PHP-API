import { showNewDates } from './ui.js';

function getDates(locCity, key) {
  fetch(
    `https://api.openweathermap.org/data/2.5/weather?q=${locCity}&appid=${key}`
  )
    .then((response) => {
      if (response.ok) {
        return response.json();
      }
      return false;
    })
    .then((res) => {
      showNewDates(res);
    })
    .catch((error) => {
      console.error('gestion erreur : ', error.message);
      const title = document.getElementById('w-location');
      title.style.color = 'red';

      if (error.message == 'dates.main is undefined') {
        alert("The city name it's not correct !");
        //Afficher un message d'erreur
        title.innerHTML = 'Retry in english !';
      } else {
        title.innerHTML = 'Retry !';
      }
      return error;
    });
}

export { getDates };
