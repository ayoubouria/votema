<?php
//connect to database
$conn = mysqli_connect('localhost', 'ayoub1', 'test123', 'vote');
//chack connection
if (!$conn) {
    echo "not connected to database" . mysqli_connect_error();
}
