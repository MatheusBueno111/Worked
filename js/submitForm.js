function submitForm() {
    var form = document.getElementById('user');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    var formData = new FormData(form);

    console.log('formData', formData.get('username'))
   
   $.ajax({
            url: "/MVC/public/login/form",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                alert('Form submitted!');
            },
            error: function(xhr, status, error) {
                alert('An error occurred.');
            }
        });
    });
}
