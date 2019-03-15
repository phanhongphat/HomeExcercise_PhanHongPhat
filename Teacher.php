
<?php
class Teacher extends Person
{

  function __construct($fname=null, $lname=null, $year=null, $subject=null, $address=null)
  {
    $this->firstName=$fname;
    $this->lastName=$lname;
    $this->yearOfBirth=$year;
    $this->teachingSubjects=$subject;
    $this->department=$address;
  }

  private $teachingSubjects=array();
  private $department;

    public function setdepartment($department)
    {
        $this->department = $department;
    }

    public function getdepartment()
    {

        return $this->department;
    }

    public function setteachingSubjects($teachingSubjects)
    {
        $teachingSubjects=array(
      ('basic PHP'),
      ('advanced PHP'),
      ('Calculus')
      );

        $this->teachingSubjects = $teachingSubjects;
    }

    public function getteachingSubjects()
    {
        return $this->teachingSubjects;
    }

}

?>
