
<?php
class Teacher extends Person
{

  function __construct()
  {
    //$this->firstName=$fname;
    //$this->lastName=$lname;
    //$this->yearOfBirth=$year;
    //$this->teachingSubjects=array();
    //$this->department=$address;
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

      
        //array_push($this->selectedCourses,$selectedCourses);
        $this->teachingSubjects = $teachingSubjects;
    }

    public function getteachingSubjects()
    {
        return $this->teachingSubjects;
    }

}

?>
