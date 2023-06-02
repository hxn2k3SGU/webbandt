var usernameInput = document.querySelectorAll('#username')[0];
var passwordInput = document.querySelectorAll('#password')[0];
var form =  document.querySelectorAll('form')[0];

function showError(input, message) {
    let parent = input.parentElement;
    let small = parent.querySelectorAll('small')[0];
    parent.classList.add('error');
    small.innerText = message;
}

function showSuccess(input){
    let parent = input.parentElement;
    let small = parent.querySelectorAll('small')[0];
    parent.classList.remove('error');
    small.innerText = '';
}

function checkEmpty(input){
    if (input.value == '') {
        showError(input, 'Không được bỏ trống');
    } else {
        showSuccess(input);
    }
}

form.addEventListener('submit', function(e){
    e.preventDefault();
    checkEmpty(usernameInput);
    checkEmpty(passwordInput);
});
