var usernameInput = document.querySelectorAll('#username')[0];
var emailInput = document.querySelectorAll('#email')[0];
var passwordInput = document.querySelectorAll('#password')[0];
var repasswordInput = document.querySelectorAll('#re-password')[0];
var form = document.querySelectorAll('form')[0];

function showError(input, message) {
    let parent = input.parentElement;
    let small = parent.querySelectorAll('small')[0];
    parent.classList.add('error');
    small.innerText = message;
}

function showSuccess(input) {
    let parent = input.parentElement;
    let small = parent.querySelectorAll('small')[0];
    parent.classList.remove('error');
    small.innerText = '';
}

function checkEmpty(input) {
    input.value = input.value.trim();

    if (input.value == '') {
        showError(input, 'Không được bỏ trống');
    } else {
        showSuccess(input);
    }
}

function checkMail(email) {
    const re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if (!re.test(email.value)) {
        showError(email, 'Sai định dạng mail');
    } else {
        showSuccess(email);
    }
}
function checkUsername(usernameInput){
    const re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,32}$/
    if(!re.test(usernameInput.value)){      
        showError(usernameInput, "Yêu cầu 8-32 ký tự , một chữ hoa , một chữ thường")
    }else{
        showSuccess(usernameInput)
    }
}
function checkMatchPass(passwordInput , repasswordInput){   
    if(passwordInput.value != repasswordInput.value){
        showError(repasswordInput , "Mật khẩu không khớp");
    } 
}
form.addEventListener('submit', function (e) {
    e.preventDefault();
    
    checkEmpty(usernameInput);
    checkEmpty(emailInput);
    checkEmpty(passwordInput);
    checkEmpty(repasswordInput); 
    checkUsername(usernameInput);
    checkMail(emailInput);
    checkMatchPass(passwordInput , repasswordInput)
});