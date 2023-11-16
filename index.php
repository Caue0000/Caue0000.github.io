<?php
require_once('./Models/Usuario.php');

$usuarios = [];
$cont = 0;

do {
    echo "Opções do menu
    [1] Cadastrar jaleco
    [2] Listar usuários
    [3] Listar um usuário
    [4] Editar um usuário
    [5] Excluir um usuário
    [6] Sair \n";

    $option = readline("Digite uma opção: ");

    if ($option == 1) {
        $usuarios[$cont] = new Usuario();
        $usuarios[$cont]->cadastrarUsuario();
        $cont++;
    } elseif ($option == 2) {
        for ($i = 0; $i < $cont; $i++) {
            $usuarios[$i]->imprimiDados();
            echo "\n";
        }
    } elseif ($option == 3) {
        for ($i = 0; $i < $cont; $i++) {
            echo $i + 1 . " ";
        }

        $id = readline("Digite o ID do usuário: ");
        for ($i = 0; $i < $cont; $i++) {
            if ($id == $usuarios[$i]->getId()) {
                echo $usuarios[$i]->imprimiDados();
            }
        }
    } elseif ($option == 4){
        for ($i = 0; $i < $cont; $i++) {
            echo $i + 1 . " ";
        }

        $id = readline("Digite o ID do usuário: ");
        for ($i = 0; $i < $cont; $i++) {
            if ($id == $usuarios[$i]->getId()) {
                $usuarios[$i]->cadastrarUsuario();
            }
            echo "Cadastro realizado com sucesso!";
        }
    } elseif ($option == 5) {
        for ($i = 0; $i < $cont; $i++) {
            echo $i + 1 . " ";
        }

        $id = readline(" <- Digite o ID do usuário: ");
        for ($i = 0; $i < $cont; $i++) {
            if ($id == $usuarios[$i]->getId()) {
                $usuarios[$i]->delete();
            }
            echo "Deleted!";
        }

    } 

    else {
        echo "Escolha outro número!";
    }
} while ($option != 6);
