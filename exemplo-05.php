<?php

$nome = "Fernando";

function teste() {
    global $nome;
    echo $nome;
}

teste();

?>