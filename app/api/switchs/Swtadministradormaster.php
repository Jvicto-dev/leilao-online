<?php

namespace App\api\switchs;

use App\api\Session;
use \App\api\classes\AdministradorClass;
use App\api\classes\MasterClass;
use App\api\Sql;

class Swtadministradormaster
{
    public function switch($action, $values)
    {
        switch ($action) {

            case "get-bancos":
                echo json_encode(AdministradorClass::getBancos($values));
                break;

            case "cadastrar-banco":
                echo json_encode(AdministradorClass::cadastrarBanco($values));
                break;

            case "deletar-banco":
                echo json_encode(AdministradorClass::deletarBanco($values));
                break;

            case "update-banco":
                echo json_encode(AdministradorClass::updateBanco($values));
                break;

                /////////////////////////////////////////////////////////////

            case "get-categorias":
                echo json_encode(AdministradorClass::getCategorias($values));
                break;

            case "cadastrar-categoria":
                echo json_encode(AdministradorClass::cadastrarCategorias($values));
                break;

            case "deletar-categoria":
                echo json_encode(AdministradorClass::deletarCategoria($values));
                break;

            case "update-categoria":
                echo json_encode(AdministradorClass::updateCategoria($values));
                break;

                /////////////////////////////////////////////////////////////

            case "get-transacoes":
                echo json_encode(AdministradorClass::getTransacoes($values));
                break;

            case "get-transacoes-by-tipo":
                echo json_encode(AdministradorClass::getTransacoesByTipo($values));
                break;

            case "get-despesas-pendentes":
                echo json_encode(AdministradorClass::getDespesasPendentes($values));
                break;

            case "get-despesas-pendentes-por-dia":
                echo json_encode(AdministradorClass::getDespesasPendentesPorDia($values));
                break;

            case "get-transacoes-pendentes-aprovacao":
                echo json_encode(MasterClass::getTransacoesPendentesAprovacao($values));
                break;


            case "cadastrar-transacao": // aqui é master class
                echo json_encode(MasterClass::cadastrarTransacao($values));
                break;

            case "cadastrar-transacao-recorrente":
                echo json_encode(MasterClass::cadastrarTransacaoRecoorente($values));
                break;

            case "cadastrar-transacao-recorrente-investimento": // nova função, adicionar ao ADM normal
                echo json_encode(MasterClass::cadastrarTransacaoRecoorenteInvestimento($values));
                break;

            case "cadastrar-transacao-recorrente-despesa": // nova função, adicionar ao ADM normal
                echo json_encode(MasterClass::cadastrarTransacaoRecoorenteDespesa($values));
                break;

            case "deletar-transacao":
                echo json_encode(AdministradorClass::deletarTransacao($values));
                break;

            case "alterar-status-transacao":
                echo json_encode(AdministradorClass::alterarStatusTransacao($values));
                break;

                /////////////////////////////////////////////////////////////

            case "get-veiculos":
                echo json_encode(AdministradorClass::getVeiculos($values));
                break;

            case "get-infor-veiculo":
                echo json_encode(AdministradorClass::getInforVeiculo($values));
                break;

            case "update-status-parcela":
                echo json_encode(AdministradorClass::updateStatusParcela($values));
                break;

            case "cadastrar-veiculo":
                echo json_encode(AdministradorClass::cadastrarVeiculo($values));
                break;

            case "update-value-parcela-individual":
                echo json_encode(AdministradorClass::updateValorParcelaIndividual($values));
                break;

            case "update-value-data-individual":
                echo json_encode(AdministradorClass::updateValorDataIndividual($values));
                break;

            case "editar-veiculo-geral":
                echo json_encode(AdministradorClass::editarVeiculoGeral($values));
                break;

            case "deletar-veiculo":
                echo json_encode(AdministradorClass::deletarVeiculo($values));
                break;

            case "get-infor-transacao":
                echo json_encode(AdministradorClass::getInforTransacao($values));
                break;

            case "editar-boleto":
                echo json_encode(AdministradorClass::editarBoleto($values));
                break;

                /////////////////////////////////////////////////////////////
            case "get-vendas":
                echo json_encode(AdministradorClass::getVendas($values));
                break;

            case "deletar-venda":
                echo json_encode(AdministradorClass::deletarVenda($values));
                break;

            case "adicionar-venda": // aqui é master class
                echo json_encode(MasterClass::adicionarVenda($values));
                break;

            case "get-venda-individual":
                echo json_encode(AdministradorClass::getVendaIndividual($values));
                break;

            case "update-venda":
                echo json_encode(AdministradorClass::updateVenda($values));
                break;

            case "get-infor-Bi":
                echo json_encode(AdministradorClass::getInforBi($values));
                break;

            case "get-infor-Bi-select":
                echo json_encode(AdministradorClass::getInforBiSelect($values));
                break;

            case "get-infor-Bi-despesas":
                echo json_encode(AdministradorClass::getInforBiDespesas($values));
                break;

            case "select-infor-Bi-despesas":
                echo json_encode(AdministradorClass::getInforBiSelectDespesas($values));
                break;

            case "get-infor-Bi-investimento":
                echo json_encode(AdministradorClass::getInforBiInvestimento($values));
                break;

            case "select-infor-Bi-investimentos":
                echo json_encode(AdministradorClass::getInforBiSelectInvestimentos($values));
                break;

                /////////////////////////////////////////////////////////////
            case "get-recebimentos":
                echo json_encode(AdministradorClass::getRecebimentos($values));
                break;

            case "deletar-recebimento":
                echo json_encode(AdministradorClass::deletarRecebimento($values));
                break;

            case "cadastrar-recebimento": // aqui é master class
                echo json_encode(MasterClass::cadastrarRecebimento($values));
                break;

            case "cadastrar-recebimento-parcelado": // aqui é master class
                echo json_encode(MasterClass::cadastrarRecebimentoParcelado($values));
                break;

            case "get-infor-recebimento-id":
                echo json_encode(AdministradorClass::getInforRecebimentoId($values));
                break;

            case "update-recebimento":
                echo json_encode(AdministradorClass::updateRecebimento($values));
                break;

            case "update-status-recebimento":
                echo json_encode(AdministradorClass::updateStatusRecebimento($values));
                break;

                /////////////////////////////////////////////////////////////

            case "get-infor-Bi-select-despesas-pdf":
                echo json_encode(AdministradorClass::getInforBiSelectDespesasPDF($values));
                break;

            case "get-infor-Bi-select-investimentos-pdf":
                echo json_encode(AdministradorClass::getInforBiSelectInvestimentosPDF($values));
                break;

                /////////////////////////////////////////////////////////////
            case "get-infor-Bi-vendas":
                echo json_encode(AdministradorClass::getInforBiVendas($values));
                break;

            case "get-infor-Bi-vendas-select-mes":
                echo json_encode(AdministradorClass::getInforBiSelectVendasMes($values));
                break;

            case "imprimir-Pdf-Mes-Vendas":
                echo json_encode(AdministradorClass::imprimirPdfMesVendas($values));
                break;

            case "get-all-dash":
                echo json_encode(AdministradorClass::getAllDash($values));
                break;

                /////////////////////////////////////////////////////////////

            case "status-aprovacao-master-transacao":
                echo json_encode(MasterClass::statusAprovacaoTransacao($values));
                break;

            case "status-aprovacao-master-venda":
                echo json_encode(MasterClass::statusAprovacaoVenda($values));
                break;

            case "status-aprovacao-master-recebimento":
                echo json_encode(MasterClass::statusAprovacaoRecebimento($values));
                break;
        }
    }
}
