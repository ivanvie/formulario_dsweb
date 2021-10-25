<?php

    function alertErro($msg)
    {
        echo '<div class="alert alert-danger text-center" role="alert">';
            echo $msg;
        echo '</div>';   
    }
    function alertSucesso($msg)
    {
        echo '<div class="alert alert-success text-center" role="alert">';
        echo $msg;
        echo '</div>';
    }
    function pag_inicial_consulta()
    {
        echo '<div class="row justify-content-center">';
        echo '<a href="lista_dados.php" class="btn btn-primary text-center ml-3">Ver dados</a>';
        echo '<a href="index.php" class="btn btn-primary text-center ml-3">Cadastrar</a>';
        echo '</div>';
    }
?>