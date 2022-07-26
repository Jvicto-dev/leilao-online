<?php

namespace App\api\classes;

use \App\api\Sql;

class MasterClass
{
    public static function cadastrarTransacao($array)
    {

        echo "<pre>";
        print_r($array);
        echo "</pre>";

        if ($array[4] == "") {
            // $array[3] = null;
            $array[4] = null;
        }

        // Se refere a categoria(investimento/despesas) Se for despesas, o status começa com 1, se não vai a zero 
        if ($array[7] == 2) {
            $array[7] = 1;
        } else {
            $array[7] = 0;
        }

        $cmd = "INSERT INTO `transacoes` 
        (
            `id_transacao`,
            `valor`,
            `id_banco_fk`, 
            `id_categoria_fk`, 
            `descricao`, 
            `data_vencimento`, 
            `day_week`,
            `day_month`,
            `status`, 
            `aprovacao`
        )
        VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, 2)";
        return Sql::insert($cmd, $array);
    }

    public static function cadastrarTransacaoRecoorente($array)
    {
        // echo "<pre>";
        // print_r($array);
        // echo "</pre>"; exit;

        $valor = $array[0];
        $banco = $array[1];
        $categoria = $array[2];
        $descricao = $array[3];
        $arr_datas = $array[4];
        $dia_semana = $array[5];
        $day_month = date('Y-m-d');
        $tipo_categoria = $array[6];
        $quantidade_projecao = $array[7];
        $verify = [];
        for ($i = 0; $i < $quantidade_projecao; $i++) {
            if (MasterClass::cadastrarTransacao([
                $valor,
                $banco,
                $categoria,
                $descricao,
                $arr_datas[$i],
                $dia_semana,
                $day_month,
                $tipo_categoria
            ])) {
                array_push($verify, 'V');
            } else {
                array_push($verify, 'F');
            }
        }

        if (in_array("F", $verify)) {
            return false;
        } else {
            return true;
        }
    }

    public static function cadastrarTransacaoRecoorenteInvestimento($array)
    {
        // echo "<pre>";
        // print_r($array);
        // echo "</pre>"; exit;

        $valor = $array[0];
        $banco = $array[1];
        $categoria = $array[2];
        $descricao = $array[3];
        $arr_datas = $array[4];
        $dia_semana = $array[5];
        // $day_month = date('Y-m-d');
        $tipo_categoria = $array[6];
        $quantidade_projecao = $array[7];
        $verify = [];
        for ($i = 0; $i < $quantidade_projecao; $i++) {
            if (MasterClass::cadastrarTransacao([
                $valor,
                $banco,
                $categoria,
                $descricao,
                null,
                $dia_semana,
                $arr_datas[$i],
                $tipo_categoria
            ])) {
                array_push($verify, 'V');
            } else {
                array_push($verify, 'F');
            }
        }

        if (in_array("F", $verify)) {
            return false;
        } else {
            return true;
        }
    }

    public static function cadastrarTransacaoRecoorenteDespesa($array)
    {
        // echo "<pre>";
        // print_r($array);
        // echo "</pre>"; exit;

        $valor = $array[0];
        $banco = $array[1];
        $categoria = $array[2];
        $descricao = $array[3];
        $arr_datas = $array[4];
        $dia_semana = $array[5];
        $day_month = date('Y-m-d');
        $tipo_categoria = $array[6];
        $quantidade_projecao = $array[7];
        $verify = [];
        for ($i = 0; $i < $quantidade_projecao; $i++) {
            if (MasterClass::cadastrarTransacao([
                $valor,
                $banco,
                $categoria,
                $descricao,
                $arr_datas[$i],
                $dia_semana,
                $day_month,
                $tipo_categoria
            ])) {
                array_push($verify, 'V');
            } else {
                array_push($verify, 'F');
            }
        }

        if (in_array("F", $verify)) {
            return false;
        } else {
            return true;
        }
    }


    public static function adicionarVenda($array)
    {
        // AdministradorClass::dd($array); exit;
        // echo "<pre>";
        // print_r($array);
        // echo "</pre>"; exit;


        $cmd = "INSERT INTO `vendas` (`id_vendas`, `nome`, `descricao`, `valor`, `day_month`, `aprovacao`) 
        VALUES (NULL, ?, ?, ?, ?, 2)";

        return Sql::insert($cmd, $array);
    }


    public static function cadastrarRecebimento($array)
    {
        $cmd = "INSERT INTO `recebimentos` (`id_recebimento`, `nome`, `valor`, `descricao`, `status`, `data_receber`, `aprovacao`)
        VALUES (NULL, ?, ?, ?, '1', ?, 2)";
        return Sql::insert($cmd, $array);
    }

    public static function statusAprovacaoTransacao($array)
    {
        $cmd = "UPDATE `transacoes` SET `aprovacao` = ? WHERE `transacoes`.`id_transacao` = ?";
        return Sql::insert($cmd, $array);
    }

    public function statusAprovacaoVenda($array)
    {
        $cmd = "UPDATE `vendas` SET `aprovacao` = ? WHERE `vendas`.`id_vendas` = ?";
        return Sql::insert($cmd, $array);
    }

    public static function statusAprovacaoRecebimento($array)
    {
        $cmd = "UPDATE `recebimentos` SET `aprovacao` = ? WHERE `recebimentos`.`id_recebimento` = ?";
        return Sql::insert($cmd, $array);
    }

    // public static function getDespesasPendentes($array){
    //     $cmd = "SELECT * FROM `transacoes`
    //     INNER JOIN categorias ON transacoes.id_categoria_fk = categorias.id_categorias
    //     INNER JOIN bancos ON transacoes.id_banco_fk = bancos.id_banco 
    //     WHERE categorias.id_tipo_ategoria_fk = 2 AND transacoes.status = 1
    //     ORDER BY transacoes.data_vencimento ASC";
    //     return Sql::use($cmd, $array);
    // }

    // public static function getDespesasPendentesPorDia($array){
    //     $cmd = "SELECT * FROM `transacoes`
    //     INNER JOIN categorias ON transacoes.id_categoria_fk = categorias.id_categorias
    //     INNER JOIN bancos ON transacoes.id_banco_fk = bancos.id_banco 
    //     WHERE categorias.id_tipo_ategoria_fk = 2 AND transacoes.status = 1 AND DATE(transacoes.data_vencimento) = ?
    //     ORDER BY transacoes.data_vencimento ASC";
    //     return Sql::use($cmd, $array);
    // }

    // busca apenas por aqueles que estejam pendentes de aprovação pelo adm
    public static function getTransacoesPendentesAprovacao($array)
    {
        $cmd = "SELECT * FROM `transacoes`
        INNER JOIN categorias ON transacoes.id_categoria_fk = categorias.id_categorias
        INNER JOIN bancos ON transacoes.id_banco_fk = bancos.id_banco 
        WHERE transacoes.aprovacao = 1
        ORDER BY transacoes.data_vencimento ASC";
        return Sql::use($cmd, []);
    }

    public static function cadastrarRecebimentoParcelado($array)
    {
        $q_parcelas = $array[3];
        $arr_valores = $array[2][1][0];
        $arr_datas = $array[2][1][1];
        $nome = $array[0];
        $descricao = $array[1];
        $validate = [];
        $cmd = "INSERT INTO `recebimentos` (`id_recebimento`, `nome`, `valor`, `descricao`, `status`, `data_receber`, `aprovacao`)
        VALUES (NULL, ?, ?, ?, '1', ?, 2)";

        for ($i = 0; $i < $q_parcelas; $i++) {
            $insere = Sql::returnInsert($cmd, [$nome, $arr_valores[$i], $descricao, $arr_datas[$i]]);
            if ($insere[1]) {
                array_push($validate, 'V');
            } else {
                array_push($validate, 'F');
            }
        }

        if (in_array("F", $validate)) {
            return false;
        } else {
            return true;
        }
    }
}
