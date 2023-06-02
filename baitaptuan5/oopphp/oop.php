<?php
class Person{
    protected $name;
    protected $age;

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name=$name;
    }
    private function calltoprvNameandage(){
        return"{$this->name} is {$this->age} years old. ";
    }  
    protected function calltoprtNameandage(){
        return "{$this->name} is {$this->age} years old. ";
    }
}
class employee extends Person{
    private $designation;
    private $salary;

    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getDesignation(){
        return $this->designation;
    }
    public function setDesignation($designation){
        $this->designation =$designation;
    }
    public function getSalary(){
       return $this->salary;
    }
    public function setSalary($salary){
        $this->salary= $salary;
    }
    public function getNameAndAge(){
        return $this->calltoprtNameandage();
    }
}
$employee = new employee();
$employee->setName('hieu ');
$employee->setAge(20 );
$employee->setDesignation('Lap trinh vien ');
$employee->setSalary('30 ');
echo $employee->getName() ."<br>"; 
echo $employee->getAge()."<br>";
echo $employee->getDesignation()."<br>";
echo $employee->getSalary()."<br>";
echo $employee->getNameAndAge()."<br>";
// không in ra được vì nó là phương thức protected nên chúng ta truy xuất thông qua lớp con là employ với phươg thức là public Bằng hàm
// getNameAndAge
// echo $employee->calltoprtNameandage();
?>