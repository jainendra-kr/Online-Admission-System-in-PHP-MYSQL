<?php

if(isset($_GET['a']))
{
    if(file_exists(('user/'.$_GET['a'].".php")))
    {
        include('user/'.$_GET['a'].".php");
    }
    else if(file_exists(('././'.$_GET['a'].".php")))
    {
        include('././'.$_GET['a'].".php");
    }
    else
    {
        print '<h4>Warning ! You are trying to violating our system.</h4>';
        var_dump($_SERVER);
    }
}



?>