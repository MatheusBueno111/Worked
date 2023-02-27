function submitForm() {
    var form = document.getElementById('user');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    var formData = new FormData(form);
    

    console.log('formData', formData.get('username'))
   
    fetch('/public/login/formDataInfos', {
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
 });
}
