window.addEventListener('DOMContentLoaded', () => {
  showValues();
});

function showValues() {
  $.ajax({
    url: './modules/getUser.php',
    type: 'GET',
    dataType: 'json',
    success: (res) => {
      console.log('yes');
      console.log(res, 'here');

      if (res.success) {
        // document.querySelector('#firstnameInput').value = res.firstname;
        const inputList = document
          .querySelector('#formProfile')
          .querySelectorAll('input:not([type="submit"])');
        console.log(inputList);
        inputList.forEach((input) => {
          input.value = res[input.name];
        });
        editValues(res);
      }
    },
  });
}

function editValues(res) {
  let spansModify = document.querySelectorAll('.fa-edit');
  console.log(spansModify);
  spansModify.forEach((span) => {
    span.addEventListener('click', editThisValue);
  });
  function editThisValue() {
    let name = this.getAttribute('id');
    console.log(res[name]);
    if (
      document.querySelector(`form[name='profil'] input[name='${name}']`)
        .value !== res[name]
    ) {
      if (window.confirm('modify?')) {
        let val = document.querySelector(
          `form[name='profil'] input[name='${name}']`
        ).value;
        let data;
        switch (name) {
          case 'firstname':
            data = {
              firstname: val,
            };
            break;
          case 'lastname':
            data = {
              lastname: val,
            };
            break;
          case 'username':
            data = {
              username: val,
            };
            break;
        }
        $.ajax({
          url: './modules/modifyUser.php',
          type: 'POST',
          data: data,
          dataType: 'json',
          success: (res) => {
            if (res.success) {
              // showValues();
              location.reload();
            }
          },
        });
      }
    } else {
      alert('no modification has done!');
    }
  }
}
