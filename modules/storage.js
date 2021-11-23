import { getDates } from './weather.js';
let key = '24095b0ade89230111de2af7cc802c6e';

function saveNewLocation() {
  // event.preventDefault();
  let inputs = document.querySelector('form').querySelectorAll('input');
  let loc = {};
  inputs.forEach((input) => {
    loc[input.id] = input.value;
  });
  localStorage.setItem('location', JSON.stringify(loc));
  $('#locModal').modal('hide');

  getDates(loc.city, key);
}

function showThisLocation() {
  let nameCity = this.getAttribute('id');
  localStorage.setItem('location', JSON.stringify(nameCity));
  getDates(nameCity, key);
  console.log(nameCity);
}

export { saveNewLocation, key, showThisLocation };
