


<?php


require 'database.php';

   $db = (new Database())->getConnection();
   $stmt = $db->query("SELECT * FROM articles");

    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($articles as $article) {
    echo $article['titre'] . " - " . $article['auteur'] . "<br>";
}
