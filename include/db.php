<?php
//Database connection USING Mysqli Object Oriented Programming
$Host="localhost";
$User="root";
$Pass="";
$Db="finalbca2018";
$conn =new mysqli($Host,$User,$Pass,$Db);
try
{
    if ($conn->connect_error)
    {
        throw new Exception("connection failed:".$conn->connect_error);
    }
    // else
    // {
    //     echo "Database Connected Successfully. Redirect code goes here.";
    // }
}
catch(Exception $e)
{
    echo $e->getMessage();
}

?>