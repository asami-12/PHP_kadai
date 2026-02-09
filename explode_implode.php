<?php
// 元の文字列：「；」で区切られると想定
$base_string = "Stollen;Panettpne;Pandoro;Kouglof;Lussekatter";
echo "元の文字列 \n";
var_dump($base_string);

// explode()で、;のところで分解
$exploded_array = explode(";",$base_string);
echo "\n explodeした配列 \n";
var_dump($exploded_array);

// implode()で、,(カンマ)でつなげて再組立て
$imploded_strung = implode(",",$exploded_array);
echo "\n implodeで繋げた文字列 \n";
var_dump($imploded_strung);
