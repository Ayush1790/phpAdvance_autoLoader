<?php
session_start();
$_SESSION['currency'] = array("RUPPEE" => "1", "USD" => "0.012", "EURO" => "0.011", "SOL" => "0.046");
$products = array(
    "Electronics" => array(
        "Television" => array(
            array(
                "id" => "PR001",
                "name" => "MAX-001",
                "brand" => "Samsung"
            ),
            array(
                "id" => "PR002",
                "name" => "BIG-301",
                "brand" => "Bravia"
            ),
            array(
                "id" => "PR003",
                "name" => "APL-02",
                "brand" => "Apple"
            )
        ),
        "Mobile" => array(
            array(
                "id" => "PR004",
                "name" => "GT-1980",
                "brand" => "Samsung"
            ),
            array(
                "id" => "PR005",
                "name" => "IG-5467",
                "brand" => "Motorola"
            ),
            array(
                "id" => "PR006",
                "name" => "IP-8930",
                "brand" => "Apple"
            )
        )
    ),
    "Jewelry" => array(
        "Earrings" => array(
            array(
                "id" => "PR007",
                "name" => "ER-001",
                "brand" => "Chopard"
            ),
            array(
                "id" => "PR008",
                "name" => "ER-002",
                "brand" => "Mikimoto"
            ),
            array(
                "id" => "PR009",
                "name" => "ER-003",
                "brand" => "Bvlgari"
            )
        ),
        "Necklaces" => array(
            array(
                "id" => "PR010",
                "name" => "NK-001",
                "brand" => "Piaget"
            ),
            array(
                "id" => "PR011",
                "name" => "NK-002",
                "brand" => "Graff"
            ),
            array(
                "id" => "PR012",
                "name" => "NK-003",
                "brand" => "Tiffany"
            )
        )
    )
);
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
            conversion($_POST['first'], $_POST['second'], $_POST['amt']);
            break;
        case 'changeItem':
            changeItem($_POST['text']);
            break;
        case 'changeItemsValue':
            changeItemsValue($_POST['text'], $_POST['text1']);
            break;
        case 'showTable':
            showTable($_POST['text'], $_POST['text1'], $_POST['text2']);
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
function conversion($first, $second, $amt)
{
    $val = $amt / $_SESSION['currency'][$first];
    $val = $val * $_SESSION['currency'][$second];
    echo $val;
}
function changeItem($val)
{

    $str = "<option >Select Any Value</option>";
    foreach ($GLOBALS['products'][$val] as $key => $value) {
        $str .= "<option>$key</option>";
    }
    echo $str;
}
function changeItemsValue($val, $val1)
{

    $str = "<option >Select Any Value</option>";
    foreach ($GLOBALS['products'][$val][$val1] as $key => $value) {
        $str .= "<option>$value[id]</option>";
    }
    echo $str;
}
function showTable($val,$val1,$val2){
    $str= "<tr></tr><th>id</th><th>Name</th><th>brand</th><th>Sub Category</th><th>Category</th></tr>";
    foreach ($GLOBALS['products'][$val][$val1] as $key => $value) {
        if($value['id']==$val2){
            $str.= "<tr><td>$val2</td><td>$value[name]</td><td>$value[brand]</td><td>$val1</td><td>$val</td></tr>";
        }
    }
    echo $str;
}