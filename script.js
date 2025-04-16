function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    
    if (username.trim() == "") {
        alert("Por favor, insira um nome de usuário.");
        return false;
    }
    
    if (password.trim() == "") {
        alert("Por favor, insira uma senha.");
        return false;
    }
    
    return true;
}
