// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    });

    var firstName = document.getElementById('firstName');
    var lastName = document.getElementById('lastName');
    var cardFirstName = document.getElementById('cardFirstName');
    var cardLastName = document.getElementById('cardLastName');

    firstName.addEventListener('input', function (event) {
      cardFirstName.innerHTML = firstName.value + ' ';
    });

    lastName.addEventListener('input', function (event) {
      cardLastName.innerHTML = lastName.value;
    });

})()
