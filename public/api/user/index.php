<?php

// error_reporting(E_ALL);
// ini_set("display_errors", 1);

// GET: /api/user - retorna todos utilizadores
// PATCH: /api/user - retorna um utilizador
// POST: /api/user - adiciona um novo utilizador
// PUT: /api/user - altera o estado de um utilizador
// DELETE: /api/user - elimina um utilizador

// FONTE:
// https://medium.com/@dharshithasrimal/php-rest-api-7441197312d7

header("Content-Type: application/json");
include 'db.php';

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

match($method) {
    'GET' => handleGet($pdo),
    'PATCH' => handlePatch($pdo, $input),
    'POST' => handlePost($pdo, $input),
    'PUT' => handlePut($pdo, $input),
    'DELETE' => handleDelete($pdo, $input),
    default => handleDefault(json_encode(['message' => 'Invalid request method']))
};

function handleDefault(string $jsonData):void {
    echo $jsonData;
}

// GET: /api/user - retorna todos utilizadores
function handleGet(PDO $pdo):void {
    try {
        $sql = "SELECT * FROM user";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    } catch(PDOException $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
}

// PATCH: /api/user - retorna um utilizdor
function handlePatch(PDO $pdo, array $input) {
    try {
        $sql = "SELECT * FROM user WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $input['id']]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo json_encode($result);
    } catch(PDOException $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
}

// POST: /api/user - adiciona um novo utilizador
function handlePost(PDO $pdo, array $input):void {
    try {
        $sql = "INSERT INTO user (name, email) VALUES (:name, :email)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['name' => $input['name'], 'email' => $input['email']]);
        echo json_encode(['message' => 'User created successfully']);
    } catch(PDOException $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
}

// PUT: /api/user - altera o estado de um utilizador
function handlePut(PDO $pdo, array $input):void {
    try {
        $sql = "UPDATE user SET name = :name, email = :email WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['name' => $input['name'], 'email' => $input['email'], 'id' => $input['id']]);
        echo json_encode(['message' => 'User updated successfully']);
    } catch(PDOException $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
}

// DELETE: /api/user - elimina um utilizador
function handleDelete(PDO $pdo, array $input):void {
    try {
        $sql = "DELETE FROM user WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $input['id']]);
    echo json_encode(['message' => 'User deleted successfully']);
    } catch(PDOException $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
}
