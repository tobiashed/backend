<?php

$breed = $_GET['breed'];
$sub_breed = $_GET['sub_breed'];

$data = file_get_contents(
"https://dog.ceo/api/breed/$breed/images" );
$array = json_decode($data, true);
$data2 = file_get_contents(
"https://dog.ceo/api/breed/$breed/$sub_breed/images" );
$array2 = json_decode($data2, true);
foreach ($array['message'] as $key => $value) {
    echo "<img src='" . $value . "'width='100'>";
        foreach ($array2['message'] as $key => $value) {
            echo "<img src='" . $value . "'width='100'>";
        }
}

?>