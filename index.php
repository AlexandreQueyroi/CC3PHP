<!-- Travail réalisé par Alexandre QUEYROI - 1A3 -->

<?php
include_once 'header.php';

?>

<?php
if (isset($_GET['departement'])) {
    $departement = $_GET['departement'];
    $sql = "SELECT * FROM sites WHERE (departement = :departement)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':departement', $departement, PDO::PARAM_INT);
} else {
    $sql = "SELECT * FROM sites ORDER BY RAND() LIMIT 12";
    $stmt = $conn->query($sql);
}

$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<div class='container mx-auto mt-4'>
    <div class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4'>";
include_once 'functions.php';
foreach ($result as $row) {
    card($row['nom'], $row['image'], $row['departement'], $row['id']);
}
echo "</div>
    </div>";
?>

<?php
include_once 'footer.php';