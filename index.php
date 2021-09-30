<?php

require "Controller/SysHomeController.php";


//$page = isset($_GET["page"]) ? $_GET["page"] : "index"; --Ficou deprecated--


//Novo formato: A variável $page recebe -> Caso "page" receba($_GET) valor, o codigo vai pra página indicada,
//senão("??") vai pra o "index".
$page = $_GET["page"] ?? "index";


$controle = new SysHomeController();



switch ($page) {
    case "index";
    $controle->App();
    break;
    case "login";
    $controle->Login();
    break;
    case "painel";
    $controle->Panel();
    break;
}
