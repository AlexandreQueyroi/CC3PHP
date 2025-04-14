<!-- Travail réalisé par Alexandre QUEYROI - 1A3 -->

<!DOCTYPE html>
<html lang="fr">

<?php
include_once 'config.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CC3 PHP - Alexandre QUEYROI 1A3</title>

    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="flex container-fluid text-center bg-green-300 py-3">
            <?php
            if (!isset($_GET['departement'])) {
                $homeColor = "text-blue-400";
            } else {
                $homeColor = "text-gray-800";
            }
            ?>
            <a href="index.php" class="Hlink mx-4 flex flex-col text-sm <?= $homeColor ?>">Accueil</a>
            <?php
            $sql = "SELECT (departement) FROM sites";
            $stmt = $conn->query($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $department = [];
            foreach ($result as $row) {
                if (in_array($row['departement'], $department)) {
                    continue;
                }
                if (isset($_GET['departement']) && $_GET['departement'] == $row['departement']) {
                    $depColor = "text-blue-400";
                } else {
                    $depColor = "text-gray-800";
                }
                echo '<a href="index.php?departement=' . $row['departement'] . '" class="Hlink flex flex-col mx-2 text-sm ' . $depColor . '">' . $row['departement'] . '</a>';
                $department[] = $row['departement'];
            }
            ?>
        </div>
    </header>
    <container>