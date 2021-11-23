import { deleteCityFromFavorites } from './deleteFavorites.js';
import { showThisLocation } from './storage.js';

function getFavorites() {
  console.log('here, get fav');

  $.ajax({
    url: './modules/getFavorites.php',
    type: 'GET',
    dataType: 'json',
    success: (res) => {
      console.log('yes');
      console.log(res, 'here');

      if (res.success) {
        showFavorites(res.msj);
      } else {
        showFavorites();
      }
    },
  });
}

function showFavorites(res = '') {
  let favorites = document.querySelector('#favorites');
  let html = '';
  if (res) {
    res.forEach((city, index) => {
      html += ` <p><button id= ${city} class='favoriteCity'>${city} </button> <span  id= ${city} class="far fa-trash-alt btn btn-danger"></span></p>`;
    });
  }
  console.log(html);
  favorites.innerHTML = html;
  deleteThisFavorite();
  searchWeatherForThisCity();
}
function deleteThisFavorite() {
  let spansDelete = document.querySelectorAll('.fa-trash-alt');
  console.log(spansDelete);
  spansDelete.forEach((span) => {
    span.addEventListener('click', deleteCityFromFavorites);
  });
}
function searchWeatherForThisCity() {
  let favoriteCitys = document.querySelectorAll('.favoriteCity');
  favoriteCitys.forEach((favCity) => {
    favCity.addEventListener('click', showThisLocation);
  });
}

export { getFavorites };
