import { getFavorites } from './getFavorites.js';

function showNewDates(dates) {
  document.querySelector('#w-location').textContent = dates.name;
  document.querySelector(
    '#w-humidity'
  ).textContent = `Humidity : ${dates.main.humidity}`;
  document.querySelector(
    '#w-wind'
  ).textContent = `Wind speed : ${dates.wind.speed}`;
  document.querySelector('#w-desc').textContent = dates.sys.country;
  document.querySelector('#w-feels-like').textContent = `Feels like : ${(
    dates.main.feels_like - 273
  ).toFixed(2)}°C`;
  let img = document.querySelector('#w-icon');
  img.setAttribute(
    'src',
    `https://openweathermap.org/img/wn/${dates.weather[0].icon}@2x.png`
  );
}

function maybeAddToFavorites() {
  console.log('maybe add to fav');
  let town = document.querySelector('#w-location').textContent;
  console.log(town);
  $.ajax({
    url: 'favorites.php',
    type: 'POST',
    data: {
      city: town,
    },
    dataType: 'json',
    success: (res) => {
      let message = document.querySelector('#message');
      console.log(message);
      let showMsg = document.querySelector('#showMessage');
      showMsg.textContent = res.msj;
      message.classList.remove('hide');
      getFavorites();

      setTimeout(function () {
        message.classList.add('hide');
      }, 3000);
      console.log(res);
    },
  });
}

export { showNewDates, maybeAddToFavorites };
