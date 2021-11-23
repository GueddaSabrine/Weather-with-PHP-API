import { getFavorites } from './getFavorites.js';
function deleteCityFromFavorites() {
  if (window.confirm('Do you want to delete this city from your favorites?')) {
    let nameCity = this.getAttribute('id');
    $.ajax({
      url: './modules/deleteFavorites.php',
      type: 'POST',
      data: {
        city: nameCity,
      },
      dataType: 'json',
      success: (res) => {
        console.log(res);
        if (res.success == true) {
          getFavorites();
          // location.reload();
        }
      },
    });
  }
}
export { deleteCityFromFavorites };
