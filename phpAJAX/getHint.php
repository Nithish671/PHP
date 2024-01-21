<!DOCTYPE html>
<html>
    <head>
        <title>PHP AJAX</title>
</head>
<body>
<?php 
$s[] = "Nithish";
$s[] = "Selva";
$s[] = "Goku";
$s[] = "Luffy";
$s[] = "Eren";
$s[] = "Aizen";
$s[] = "Boa";
$s[] = "Chopper";
$s[] = "Dofflamingo";
$s[] = "Franky";
$s[] = "Henry";
$s[] = "Itachi";
$s[] = "Jackie Chan";
$s[] = "Krillin";
$s[] = "Logan";
$s[] = "Manjiro";
$s[] = "Oggy";
$s[] = "Piggy";
$s[] = "Query";
$s[] = "Roger";
$s[] = "Takemichi";
$s[] = "Ultra Instinct";
$s[] = "Vegeta";
$s[] = "World";
$s[] = "X-Men";
$s[] = "Yonko";
$s[] = "Zeno";

$q = $_REQUEST['q'];

$hint = "";

if($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($s as $n) {
        if(stristr($q, substr($n, 0, $len))) {
            if($hint === "") {
                $hint = $n;
            } else {
                $hint .= ", $n";
            }
        }
    }
}

echo $hint === "" ? "no suggestion" : $hint;
?>
</body>
</html>