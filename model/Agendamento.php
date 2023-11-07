<?php

require_once '../../conexao/conexao.php';

class Agendamento
{


    public function agendar($nomeUsuario,$dataAgendamento,$horaAgendamento)
    {
        global $pdo;
        $cmd = $pdo->prepare("INSERT INTO agendamento(nomeUsuario,dataAgendamento,horaAgendamento) 
                                    VALUES (:nu, :dt, :ha)");
        $cmd->bindValue(":nu", $nomeUsuario);
        $cmd->bindValue(":dt", $dataAgendamento);
        $cmd->bindValue(":ha", $horaAgendamento);
        $cmd->execute();
        return true;
    }

    public function buscarDados()
    {
        global $pdo;
        $res = array();
        $cmd = $pdo->query("SELECT a.codAgendamento,a.nomeUsuario,s.nomeServico,a.dataAgendamento,a.horaAgendamento
         FROM agendamento AS a 
        JOIN servico as s 
        ON a.codServico = s.codServico
        ORDER BY dataAgendamento");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function confirmarServico($id)
    {
        global $pdo;

        $cmd = $pdo->prepare("DELETE FROM agendamento WHERE codAgendamento = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
    }
}
