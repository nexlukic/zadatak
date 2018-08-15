<?php
require_once ('IPersonRepository.php');
require_once ('PersonRepository.php');


$person=new Person('Nemanja','Lukic',183,70,'1996-07-27');
$erros=[];
$regFirstName='/^[A-Z][a-z]{3,30}$/';
$regLastName='/^[A-Z][a-z]{3,30}$/';
$regHeight='/^[1-9][0-9]{2}$/';
$regWeight='/^[1-9][0-9]{1,2}$/';
$regBirthday='/^([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))$/';


if(!preg_match($regFirstName,$person->getFirstName())){
    array_push($erros,'Ime nije u dobrom formatu');
}
if(!preg_match($regLastName,$person->getLastName())){
    array_push($erros,'Prezime nije u dobrom formatu');
}
if(!preg_match($regHeight,$person->getHeight())){
    array_push($erros,'Visina nije u dobrom formatu');
}
if(!preg_match($regWeight,$person->getWeight())){
    array_push($erros,'Tezina nije u dobrom formatu');
}
if(!preg_match($regBirthday,$person->getBirthday())){
    array_push($erros,'Datum rodjenja nije u dobrom formatu');
}


if(count($erros)>0){
        foreach($erros as $e){
            echo '<p>'.$e.'</p>';
            
        }
}
else{
        $personRepository= new PersonRepository();
        try{
            $personRepository->Insert($person);
            echo 'Covek je uspesno dodat u bazu';
        }catch(Exception $e){
            echo $e->getMessage();
        }
}

?>