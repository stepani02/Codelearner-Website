function validateForm() {
    var password = document.getElementById('password').value;
    var confirm_password = document.getElementById('confirm_password').value;
    var error_message = document.getElementById('error_message');

    if (password !== confirm_password) {
        error_message.innerHTML = "Passwords do not match.";
        return false; 
    } else {
        error_message.innerHTML = ""; 
        return true;
    }
}

function closeModal() {
    document.getElementById('modal').style.display = 'none';
}

function redirectToLogin() {
    window.location.href = 'Account1.php'; 
}

function showRegistrationSuccessMessage() {
    document.getElementById('modal').style.display = 'block';
}