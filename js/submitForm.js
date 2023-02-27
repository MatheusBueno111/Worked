function submitForm() {
  var form = document.getElementById('user');
  var formData = new FormData(form);

  fetch('/public/login/save', {
      method: 'POST',
      body: formData
  })
  .then(function(response) {
      if (response.ok) {
          alert('Form submitted!');
      } else {
          alert('An error then.');
      }
  })
  .catch(function(error) {
      console.log(error);
      alert('An error occurred.');
  });
}