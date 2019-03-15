<?php include "Person.php" ?>
<?php
class Students extends Person
{

  function __construct($fname=null, $lname=null, $year=null, $courses=null, $point=null)
  {
    $this->firstName=$fname;
    $this->lastName=$lname;
    $this->yearOfBirth=$year;
    $this->selectedCourses=array();
    $this->greditPoint=$point;
  }

  private $selectedCourses=array();
  private $greditPoint;

    public function setgreditPoint($greditPoint)
    {
        $this->greditPoint = $greditPoint;
    }

    public function getgreditPoint()
    {

        return $this->greditPoint;
    }

    public function setselectedCourses($selectedCourses)
    {
        $selectedCourses=array(
      ('basic PHP'),
      ('advanced PHP'),
      ('Calculus')
      );

      
        //array_push($this->selectedCourses,$selectedCourses);
        $this->selectedCourses = $selectedCourses;
    }

    public function getselectedCourses()
    {
        return $this->selectedCourses;
    }

}

?>
