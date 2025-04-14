<!-- Travail réalisé par Alexandre QUEYROI - 1A3 -->

<?php


function card($nom, $image, $departement, $id)
{
    echo "<div class='bg-white rounded-lg shadow-md p-4'>
            <img src='" . $image . "' alt='" . $nom . "' class='w-full h-32 object-cover rounded-t-lg'>
            <h2 class='text-lg font-semibold mt-2'>" . $nom . "</h2>
            <a href='site.php?id=" . $id . "' class='text-blue-500 hover:underline'>Voir le site</a>
        </div>";
}