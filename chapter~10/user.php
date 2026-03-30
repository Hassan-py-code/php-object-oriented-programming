


<?php  
 

  class User{
      
       private $conn;
       private $table = "users";

      public $id;
      public $name;
      public $email;

      public function __construct($db)
      {
         $this->conn = $db;
      }

    //   create
    public function create(){
        
       $sql = "INSERT INTO {$this->table}(name , email) values(:name , :email)";
       $stmt=$this->conn->prepare($sql);
       return $stmt->execute(["name" => $this->name , "email"=> $this->email]);

    }

   // create function read
    public function read(){
         $sql ="SELECT * FROM {$this->table}";
         $stmt = $this->conn->query($sql);
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

     // UPDATE
    public function update() {
        $sql = "UPDATE {$this->table} SET nom=:nom, email=:email WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['nom' => $this->name, 'email' => $this->email, 'id' => $this->id]);
    }

    // DELETE any
    public function delete() {
        $sql = "DELETE FROM {$this->table} WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['id' => $this->id]);
    }




  }





?>