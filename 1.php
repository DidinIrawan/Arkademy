<?php
$name        = "Muhammad Nur Faizi";
$age        = 23;
$address     = "Jl. Watudakon No.126 Mojokerto";
$hobbies     = array("Programming", "Learn Somthing New", "Gaming");
$is_married  = false;
$list_school      = [
                'Universitas' => 'Universitas Islam Majapahit',
                'year_in' => 2015,
                'year_out'=> 2019,
                'major'=> 'Teknik Informatika'
               ];
$skills      = [
                'skill_name' => 'PHP',
                'level' => 'Beginner'
               ];
$interest_in_coding = true;

function biodata($name, $age, $address, $hobbies, $is_married, $list_school, $skills, $interest_in_coding){
        
    return json_encode(array(
        'name' => $name,
        'age' => $age,
        'address' => $address,
        'hobbies' => $hobbies,
        'is_married' => $is_married,
        'list_school' => $list_school,
        'skills' => $skills

        ),
     JSON_PRETTY_PRINT);
}

echo biodata($name, $age, $address, $hobbies, $is_married, $list_school, $skills, $interest_in_coding);