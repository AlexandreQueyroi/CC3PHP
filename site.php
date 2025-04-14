<!-- Travail réalisé par Alexandre QUEYROI - 1A3 -->

<?php
include_once 'header.php';
?>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM sites WHERE (id = :id)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if (empty($result)) {
    echo "<h1 class='text-2xl font-bold mt-4'>Aucun site trouvé</h1>";
    exit;
}
?>
<div class="flex container mx-auto mt-4">
    <div class="w-1/2 flex flex-col pr-4">
        <h1 class="text-4xl font-bold mt-4"><?= $result['nom'] ?></h1>
        <p class="text-2xl font-sb mt-4"><?= $result['adresse'] ?></p>
        <p class="text-lg mt-4"><?= $result['commentaires'] ?></p>
    </div>
    <div class="w-1/2 flex flex-col pl-4">
        <img src="<?= $result['image'] ?>" alt="<?= $result['nom'] ?>" class="w-full object-cover mt-4 mx-4 p-4">
    </div>
</div>

<?php
include_once 'footer.php';
?>