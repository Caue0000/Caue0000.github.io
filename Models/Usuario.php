<?php


class usuario
{
    private $id;
    private $nome;
    private $idade;
    private $sexo;
    private $cpf;
    private $email;
    private $senha;

    /*function __construct($id, $nome, $idade, $sexo, $cpf, $email, $senha)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
    }*/


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    function cadastrarUsuario()
    {

        echo "Cadastro de usuário \n";
        $this->setId(readline("Id: "));
        $this->setNome(readline("Nome: "));
        $this->setIdade(readline("Idade: "));
        $this->setSexo(readline("Sexo: "));
        $this->setCpf(readline("Cpf: "));
        $this->setEmail(readline("Email: "));
        $this->setSenha(readline("Senha: "));
    }
    function imprimiDados()
    {
        echo "ID -> " . $this->getId() . "\n";
        echo "Nome -> " . $this->getNome() . "\n";
        echo "Idade -> " . $this->getIdade() . "\n";
        echo "Sexo -> " . $this->getSexo() . "\n";
        echo "Cpf -> " . $this->getCpf() . "\n";
        echo "Email -> " . $this->getEmail() . "\n";
        echo "Senha -> " . $this->getSenha() . "\n";
    }

    function editarUsuario()
    {
        echo "Editar usuário";

        $this->setId(readline("Id: "));
        $this->setNome(readline("Nome: "));
        $this->setIdade(readline("Idade: "));
        $this->setSexo(readline("Sexo: "));
        $this->setCpf(readline("Cpf: "));
        $this->setEmail(readline("Email: "));
        $this->setSenha(readline("Senha: "));
    }

    function delete()
    {
        echo "Deletar usuário";

        $this->setId(null);
        $this->setNome(null);
        $this->setIdade(null);
        $this->setSexo(null);
        $this->setCpf(null);
        $this->setEmail(null);
        $this->setSenha(null);

    }
}
