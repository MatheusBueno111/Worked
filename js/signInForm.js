function signInForm() {
  var form = document.getElementById('signIn');
  form.addEventListener('submit', (event) => {
      event.preventDefault();
  var formData = new FormData(form);
 
 $.ajax({
          url: "/MVC/public/signin/checkSignIn",
          type: "POST",
          data: formData,
          processData: false,
          contentType: false,
          success: function(response) {
              alert('submittt sign in')
          },
          error: function(xhr, status, error) {
              alert('An error occurred.');
          }
      });
  });
}