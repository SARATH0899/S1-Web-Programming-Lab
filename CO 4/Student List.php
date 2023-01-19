<?php
    $student = array("Sarath"=>"5","Amal"=>"4","Hiran"=>"2","Abhinand"=>"0","Rahul"=>"1","Sreerag"=>"3");
    print_r($student);
    echo "<br><br><br><br>";
    asort($student);
    echo "Sorted array in Ascending order is:";
    echo "<br>";
    print_r($student);
    echo "<br><br>";
    arsort($student);
    echo "Sorted array in Descending order is:";
    echo "<br>";
    print_r($student); 
?>