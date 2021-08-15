<?php
class CalculadoraPlano
{
    private $credito;
    private $numPrest;

    public function start($credito, $numPrest){
        $this->credito = $credito;
        $this->numPrest = $numPrest;
    }

    public function calculaPlano(){
        $dividaPaga = 0;
        $pagamentoMensal = number_format((double)($this->credito/$this->numPrest), 2, ".", "");
        $diaAtual = date('d');
        $mesAtual = date('m');
        $anoAtual = date('Y');
        $dataAtual = $diaAtual.'-'.$mesAtual.'-'.$anoAtual;

        $prestacoes = array();

        for($i = 1; $i<=$this->numPrest; $i++){
            $dividaPaga += $pagamentoMensal;
            if($mesAtual==12){
                $mesAtual = 1;
                $anoAtual++;
            }else{
                $mesAtual++;
            }
            if($mesAtual<10) $mesAtual = "0" . $mesAtual;

            $time = strtotime($dataAtual);
            $dataAtual = date("d-m-Y", strtotime("+1 month", $time));

            $faltaPagar = ($this->credito-$dividaPaga >= 0) ? $this->credito-$dividaPaga : 0;
            $prestacoes[] = [$dataAtual, $pagamentoMensal, $faltaPagar];
        }
        return $prestacoes;
    }

    function despesasAcrescidas(){
        $despesaCredito = $this->credito * 0.02;
        $dataPrimeira = date('d-m-Y');;
        $time = strtotime($dataPrimeira);
        $dataPrimeira = date("d-m-Y", strtotime("+1 month", $time));

        $despesasAcrescidas = [$despesaCredito, $dataPrimeira];

        return $despesasAcrescidas;
    }
}
?>