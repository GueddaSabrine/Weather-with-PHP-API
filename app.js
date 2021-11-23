import { saveNewLocation, key } from './modules/storage.js';
import { maybeAddToFavorites } from './modules/ui.js';
import { getDates } from './modules/weather.js';
import { getFavorites } from './modules/getFavorites.js';

window.addEventListener('DOMContentLoaded', () => {
  async function getSession() {
    await $.ajax({
      url: 'verify_session.php',
      type: 'GET',
      success: (res) => {
        if (JSON.parse(res).success) {
          withSession();
        } else {
          withoutSession();
        }
      },
    });
  }
  getSession();
});

function withoutSession() {
  let butSave = document.querySelector('#w-change-btn');
  getDates('Paris', key);
  butSave.addEventListener('click', () => saveNewLocation());
}
function withSession() {
  let butSave = document.querySelector('#w-change-btn');
  let buttonSaveFavorites = document.querySelector('#addToFav');
  getDates('Paris', key);
  butSave.addEventListener('click', () => saveNewLocation());
  buttonSaveFavorites.addEventListener('click', maybeAddToFavorites);
  getFavorites();
}
