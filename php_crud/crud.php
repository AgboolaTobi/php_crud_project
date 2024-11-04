<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=crud_db', 'root', 'temmylove'); // For MySQL
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}


function createUser($name, $email) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    return $stmt->execute([$name, $email]);
}


function getUsers() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM users");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUserById($id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


function updateUser($id, $name, $email) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
    return $stmt->execute([$name, $email, $id]);
}


function deleteUser($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    return $stmt->execute([$id]);
}
?>
