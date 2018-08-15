<?php
require_once ('IPersonRepository.php');
require_once ('Person.php');


class PersonRepository implements IPersonRepository{
        private $conn;

        public function __construct(){
        $this->conn=new PDO('mysql:host=localhost;dbname=zadatak', 'root', '');
    }

    public function Insert(Person $person){
        $query = "INSERT INTO covek(ime,prezime,visina,tezina,datum) VALUES(?,?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $firstName=$person->getFirstName();
        $lastName=$person->getLastName();
        $height=$person->getHeight();
        $weight=$person->getWeight();
        $birthday=$person->getBirthday();

        try{
            $stmt->execute([$firstName,$lastName,$height,$weight,$birthday]);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    function Update(Person $person, $id){}

    function Delete($id){}

    function GetOne($id){}
}