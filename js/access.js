function access() {
  var form = document.getElementById('permission');
  form.addEventListener('submit', (event) => {
      event.preventDefault();
  var formData = new FormData(form);


  console.log('formData', formData.get('username'), formData.get('password'));
 
 $.ajax({
          url: "/MVC/public/signup/formpermission",
          type: "POST",
          data: formData,
          processData: false,
          contentType: false,
          success: function(response) {
              alert('Form submitteddddddddddddddd!');
          },
          error: function(xhr, status, error) {
              alert('An error occurred.');
          }
      });
  });
}