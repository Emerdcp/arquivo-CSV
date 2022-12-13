<?php
$pessoas = array(
    ["Nome","Idade","Cidade"],
    ["Emerson","33","Americana"],
    ["Kadu","5","Santa Bárbara Oeste"],
    ["Eduardo","8","Campinas"]
);

//echo, print --> string
//print_r --> array
/*echo "<pre>";
print_r($pessoas);
echo "</pre>";
------->Demonstração de como ficaria
for($i =0; $i < count($pessoas); $i++){
    print_r($pessoas[$i]);
    for($j = 0; $j < count($pessoas[$i]);$j++){
        echo "=====";
        echo $pessoas[$i][$j];
        echo "=====";
    }
    echo "<hr>";
}*/

/* ---- Um modelo de como fazer
echo "<pre>";
print_r($pessoas);
echo "</pre>";
$arquivo = fopen("dados.csv","a+");
for($i = 0; $i < count($pessoas); $i++){
    fputcsv($arquivo,$pessoas[$i],";");
}
*/
//Melhorado de como criar um CSV
$arquivo = fopen("dados.csv","a+");
foreach($pessoas as $uma_pessoa){
    fputcsv($arquivo,$uma_pessoa,";");
}

fclose($arquivo);
?>
