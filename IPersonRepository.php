<?php
require_once ('Person.php');
interface IPersonRepository {
    function Insert(Person $person);
    function Update(Person $person, $id);
    function Delete($id);
    function GetOne($id);
}
