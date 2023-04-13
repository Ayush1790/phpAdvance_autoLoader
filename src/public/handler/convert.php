<?php
session_start();
$_SESSION['currency']=array("RUPPEE"=>"1","USD"=>"0.012","EURO"=>"0.011","SOL"=>"0.046");
if (isset($_POST)) {
    switch ($_POST['action']) {
        case 'changeUpper':
            changeUpper($_POST['text']);
            break;
        case 'changeLower':
            changeLower($_POST['text']);
            break;
        case 'removeSpecial':
            removeSpecial($_POST['text']);
            break;
        case 'conversion':
            conversion($_POST['first'],$_POST['second'],$_POST['amt']);
            break;
    }
}

function changeUpper($data)
{
    echo strtoupper($data);
}
function changeLower($data)
{
    echo strtolower($data);
}
function removeSpecial($data)
{
    $str = "";
    for ($i = 0; $i < strlen($data); $i++) {
        if (ord($data[$i]) <= 127)
            $str .= $data[$i];
    }
    echo $str;
}
function conversion($first,$second,$amt){
     $val=$amt/$_SESSION['currency'][$first];
     $val=$val*$_SESSION['currency'][$second];
     echo $val;

}