<?php

class Person {
    private $name;
    
    public function __construct($name = 'constructor name default'){
        $this->name = $name;
    }

    public function getName(){ 
        return $this->name; 
    }
    
    public function setName($name = 'default'){ 
        $this->name = $name; 
    }
}

// $p1 = new Person();
// $p1->setName("Jane Doe");
// echo $p1->getName() . "<br/>";

class Student extends Person {
    private $s_id;
    public function __construct($name, $s_id){
        parent::__construct($name);
        $this->s_id = $s_id;
    }

    public function getStudentID(){
        return $this->s_id;
    }

    public function setStudentID($s_id = '##_####'){
        $this->s_id = $s_id;
    }
}

$s1 = new Student('James Gosling', 'S1-2022');

$students = [];

$students[] = $s1;
$students[] = new Student('Jane Doe', 'S2-2022');
$students[] = new Student('Rasmus Lerdorf', 'S3-2022');
$students[] = new Student('Mark Collins', 'S4-2022');
$students[] = new Student('Frank Doe', 'S5-2022');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  </head>
  <body>
      
    <table class="table-bordered table-striped table-hover table-sm">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Student Name</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student) { ?>
            <tr>
                <td><?php echo $student->getStudentID(); ?></td>
                <td><?php echo $student->getName(); ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

  </body>
</html>