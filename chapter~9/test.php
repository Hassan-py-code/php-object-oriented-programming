




<?php  

  require "ArticleEncapsule.php";

  $article = new Article();
  $article->setTitle("POO en Php");
  $article->setContent("<p>introduction</p>");

  echo $article->display();
  


?>