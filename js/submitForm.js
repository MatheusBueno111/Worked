function submitForm() {
    var form = document.getElementById('user');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    var formData = new FormData(form);
    

    console.log('formData', formData.get('username'))
   
    var xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          alert('Form submitted!');
        } else {
          alert('An error then.');
        }
      }
    };
    console.log(xhr)
    xhr.open('POST', '/public/login/form', true);
    xhr.send(formData);
  });
 
}
