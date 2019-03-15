
<?php
class Staff extends Person
{

  function __construct($fname=null, $lname=null, $year=null, $job=null)
  {
    $this->firstName=$fname;
    $this->lastName=$lname;
    $this->yearOfBirth=$year;
    $this->vacancy=$job;
  }

  private $vacancy;

    public function setvacancy($vacancy)
    {
        $this->vacancy = $vacancy;
    }

    public function getvacancy()
    {
        return $this->vacancy;
    }
}

?>
