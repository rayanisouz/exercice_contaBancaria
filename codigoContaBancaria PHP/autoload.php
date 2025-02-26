<?php
spl_autoload_register(function (string $nomeCompletoDaClasse){
    $caminhoArquivo = str_replace(search:'src\\banco', replace:'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace(search:'\\', replace:DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if (file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    }
});