<?php
// start multidimensional array


function returnInformation()
{
    return [
        [0 => ['name' => 'RickS', 'age' => 19, 'gender' => 'Male', 'birthdate' => date('04 09 2004'), 'city' => 'Almere', 'country' => 'Nederland', 'email' => '', 'phone' => '', 'url' => '', 'address' => '']],
        [1 => ['name' => 'RickB', 'age' => 26, 'gender' => 'Male', 'birthdate' => date('04 09 1997'), 'city' => '', 'country' => 'Nederland', 'email' => '', 'phone' => '', 'url' => '', 'address' => '']],
        [2 => ['name' => 'Djimairo', 'age' => 16, 'gender' => 'Male', 'birthdate' => date('08 01 2007'), 'city' => 'Almere', 'country' => 'Nederland', 'email' => '', 'phone' => '', 'url' => '', 'address' => '']]
    ];
}
function listAttributes()
{
    // check if id has a value
    if (isset($_GET['id'])) {
        //set id to variable $id and set id from link to variable $member
        $id = $_GET['id'];
        $memberID = returnInformation()[$id];
        // check if the provided id exists in the array
        if (isset($memberID)) {
            // then print all the values from that person in the array
            foreach ($memberID as $attribute) {
                foreach ($attribute as $key => $value) {
                    //if a value is empty then don't show that one and go to the next
                    if ($value != '') {
                        echo "<b>" . ucfirst($key) . "</b>: " . ucfirst($value) . "<br>";
                    }
                }
            }
            // print a line to finish it off
            echo "<hr>";
            return;
        }
    }
    // if a person is not found, print a message
    echo "Not found";
}
