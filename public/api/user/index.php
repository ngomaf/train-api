<?php

// error_reporting(E_ALL);
// ini_set("display_errors", 1);

// GET - retorna todas as tarefas
// PATCH - retorna uma tarefas
// POST - adiciona uma nova tarefa
// PUT - marca uma tarefa como concluída
// DELETE - deleta uma tarefa

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

// GET - retorna todas as tarefas
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

// PATCH - retorna uma tarefas
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

// POST - adiciona uma nova tarefa
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

// PUT - marca uma tarefa como concluída
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

// DELETE - deleta uma tarefa
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
