<?php
$v1="var1";
$v2="var2";
$v3="var3";
$v4="var4";
$v5="var5";
$v6="var6";
$v7="var7";
$v8="var8";
$v9="var9";
$v10="var10";

for($i=1; $i<=10; $i++)
    echo ${"v".$i}."<br>";

for($i=1; $i<=10; $i++) {
    $nome = "var$i";
    echo $$nome;
}
