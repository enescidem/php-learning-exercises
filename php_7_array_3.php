<?php 
//çok boyutlu diziler 
$student=
[
    [
        ["ali ","kerim ","osman ","semih ","ahmet " ],
        ["erkek ","kadin "],
        ["1A","1B","1C"]
    ],
    [
        ["ali ","kerim ","osman ","semih ","ahmet " ],
        ["erkek ","kadin "],
        ["1A","1B","1C"]
    ]    
];

echo $student[1][0][1]." ".$student[0][1][0]." ".$student[1][2][0]."<br/>";
echo $student[0][0][1]." ".$student[1][1][0]." ".$student[0][2][1]."<br/>";
echo $student[0][0][2]." ".$student[0][1][0]." ".$student[1][2][2]."<br/>";
echo $student[0][0][3]." ".$student[1][1][0]." ".$student[0][2][0]."<br/>";
echo $student[1][0][4]." ".$student[0][1][0]." ".$student[0][2][2]."<br/>";


?>