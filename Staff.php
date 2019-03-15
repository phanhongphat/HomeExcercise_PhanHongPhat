
<?php
class Staff extends Person
{

  function __construct()
  {
    //$this->firstName=$fname;
    //$this->lastName=$lname;
    //$this->yearOfBirth=$year;
    //$this->teachingSubjects=array();
    //$this->department=$address;
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
