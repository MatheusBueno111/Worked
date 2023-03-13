function submitForm() {
    var form = document.getElementById('user');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    var formData = new FormData(form);

  
    console.log('formData', formData.get('username'), formData.get('cidade'), formData.get('estado'), formData.get('descricao'));
   
   $.ajax({
            url: "/MVC/public/info/form",
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
