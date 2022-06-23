<?php
// create fuction with an exception
function checkNum($number)
{
    if($number>1)
    {
        throw new Exception("value must be 1 or below");

    }
    return true;
}
try
{
    checkNum(2);
    //if the exception is throw this text will not be show
    echo 'if you see this,the number is 1 or below';

}
//catch exception
catch(Exception $e)
{
    echo 'Message:' .$e->getMessage();
}



?>