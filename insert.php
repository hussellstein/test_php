<?php

$conn = mysqli_connect("localhost","root","root","opentutorials");
$sql = "
INSERT INTO topic (
    title,
    description,
    created
)  VALUES (
    'MySQL',
    'MySQL is Good',
    NOW()
)";
$result = mysqli_query ($conn, $sql);
if($result === false) {
    echo mysqli_error($conn)
}

?>