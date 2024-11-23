var elFirstName = document.getElementById('firstName');
var elLastName = document.getElementById('lastName');
var elPassword = document.getElementById('password');
var elUsername = document.getElementById('username');
var elEmail = document.getElementById('email');
var elPhone = document.getElementById('phone');
var elComments = document.getElementById('comments');

var firstAndLastNameRegex = /^(?=.{2,})([a-zA-Z'-]+)$/;
var emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var phoneRegex = /^\d{10}$/;

function validateData(minLength, inputGroup, inputStatus, inputEl, validationRegex) {
  var elStatus = document.getElementById(inputStatus);
  var elGroup = document.getElementById(inputGroup);
  var elInput = document.getElementById(inputEl);
  // what the user entered in the field
  var formValue = elInput.value

  if (formValue.length < minLength) {
    // length validation
    elStatus.innerHTML = inputEl.toUpperCase() + ' must be ' + minLength + ' characters or more';
    elGroup.classList.add('has-error');
  } else if (validationRegex != null && !validationRegex.test(formValue)) {
    // regex validation
    elStatus.innerHTML = inputEl.toUpperCase() + ' is impropperly formatted';
    elGroup.classList.add('has-error');
  } else {
    // validation passed
    elStatus.innerHTML = '';
    elGroup.classList.remove('has-error');
    elGroup.classList.add('has-success');
  }
}

elFirstName.addEventListener('blur', function () {
  validateData(2, 'firstNameGroup', 'firstNameStatus', 'firstName', firstAndLastNameRegex);
}, false);

elLastName.addEventListener('blur', function () {
  validateData(2, 'lastNameGroup', 'lastNameStatus', 'lastName', firstAndLastNameRegex);
}, false);

elUsername.addEventListener('blur', function () {
  validateData(6, 'usernameGroup', 'usernameStatus', 'username', null);
}, false);

elPassword.addEventListener('blur', function () {
  validateData(6, 'passwordGroup', 'passwordStatus', 'password', null);
}, false);

elComments.addEventListener('blur', function () {
  validateData(1, 'commentsGroup', 'commentsStatus', 'comments', null);
}, false);

elEmail.addEventListener('blur', function () {
  validateData(null, 'emailGroup', 'emailStatus', 'email', emailRegex);
}, false);

elPhone.addEventListener('blur', function () {
  validateData(1, 'phoneGroup', 'phoneStatus', 'phone', phoneRegex);
}, false);