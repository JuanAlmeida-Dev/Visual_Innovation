<?php
require_once '../../conexao/conexao.php';

class Servico
{

    public function buscarDados()
    {
        global $pdo;
        $res = array();
        $cmd = $pdo->query("SELECT s.codServico,s.nomeServico, s.tempoEstimado,s.valorServico,
        s.dataServico
         FROM servico AS s ORDER BY nomeServico");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    //FUNÇÃO PARA CADASTRAR PESSOAS NO BANCO DE DADOS
    public function cadastrarServico($nome, $tempoEstimado, $valor, $dataServico)
    {
        global $pdo;

        //ANTES DE CADASTRAR VERIFICAR SE JA TEM O EMAIL CADASTRADO 
        $cmd = $pdo->prepare("SELECT codServico FROM servico WHERE nomeServico = :n");
        $cmd->bindValue(":n", $nome);
        $cmd->execute();
        if ($cmd->rowCount() > 0) //email ja cadastrado no banco 
        {
?>
            <div class="alert alert-danger text-center mt-2" role="alert">
                Serviço já está cadastrado!
            </div>

<?php
            //echo "<script>alert('Serviço já está cadastrado!');</script>";
            return false;
        } else {
            $cmd = $pdo->prepare("INSERT INTO servico (nomeServico,tempoEstimado,valorServico,
             dataServico)

                VALUES(:n,:tmp,:vl,:d)");
            $cmd->bindValue(":n", $nome);
            $cmd->bindValue(":tmp", $tempoEstimado);
            $cmd->bindValue(":vl", $valor);
            $cmd->bindValue(":d", $dataServico);
            $cmd->execute();
            return true;
        }
    }

    public function buscarDadosServico($id)
    {
        global $pdo;

        $cmd = $pdo->prepare("SELECT * FROM servico WHERE codServico = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
        $res = $cmd->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    public function excluirServico($id)
    {
        global $pdo;

        $cmd = $pdo->prepare("DELETE FROM servico WHERE codServico = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
    }

    public function atualizarDados($id, $nome, $tempoEstimado, $valor, $dataServico)
    {
        global $pdo;
        $cmd = $pdo->prepare("UPDATE servico SET nomeServico = :n, tempoEstimado = :t, 
        valorServico = :v, dataServico = :d WHERE codServico = :id");
        $cmd->bindValue(":id", $id);
        $cmd->bindValue(":n", $nome);
        $cmd->bindValue(":t", $tempoEstimado);
        $cmd->bindValue(":v", $valor);
        $cmd->bindValue(":d", $dataServico);
        $cmd->execute();
        return true;

    }
}

?>
