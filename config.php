<!-- Travail réalisé par Alexandre QUEYROI - 1A3 -->

<?php
define("servername", "localhost");
define("username", "root");
define("password", "");
define("dbname", "patrimoine_idf");

try {
    $conn = new PDO("mysql:host=" . servername . ";dbname=" . dbname, username, password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    http_response_code(500);
    die("Connection failed: " . $e->getMessage());
}
?>