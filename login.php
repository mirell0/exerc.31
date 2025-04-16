<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: home.html");
        } else {
            echo "<script>alert('Senha incorreta!'); window.location.href='index.html';</script>";
        }
    } else {
        echo "<script>alert('Usuário não encontrado!'); window.location.href='index.html';</script>";
    }
    
    $stmt->close();
    $conn->close();
}
?>
