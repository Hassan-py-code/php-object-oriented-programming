



<?php  
 

    class Article{

          public $title;
          public $content;

          public function display(){
              return "Title: " . $this->title . "Content: " . $this->content;
          }

    }

    $article1 = new Article();
    $article1->title = "Object oriented programming";
    $article1->content = " (OOP) facilitates modularity and maintenance.";

    echo $article1->display();

    echo "<br> <br>";


    $article2 = new Article();
    $article2->title = "Introduction (oop)";
    $article2->content = "php is language";
    echo "<br> " . $article2->display();



?>