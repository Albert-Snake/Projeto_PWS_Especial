<?php
class DossierEmprestimo extends CalculadoraPlano {
    public $Data;
    public $Nome;
    public $Despesas;
    public $Credito;
    public $NumPrestacoes;
    public $montante;
    public $prestacaoAbater;

    public function Guardar($data, $nome, $despesas, $credito, $numprestacoes, $montante, $prestacaoAbater){
        $this->Data = $data;
        $this->Nome = $nome;
        $this->Despesas = $despesas;
        $this->Credito = $credito;
        $this->NumPrestacoes = $numprestacoes;
        $this->montante = $montante;
        $this->prestacaoAbater = $prestacaoAbater;
        $this->start($this->Credito, $this->NumPrestacoes);
    }

    public function Mostrar(){
        $prestacoes = [$this->Data, $this->Nome, $this->Despesas,
            $this->Credito, $this->NumPrestacoes, $this->montante, $this->prestacaoAbater];

        return $prestacoes;
    }

    public function PlanoAbatimento(){
        $dividaPaga = 0;
        $pagamentoMensal = number_format((double)($this->Credito/$this->NumPrestacoes), 2, ".", "");
        $diaAtual = date('d');
        $mesAtual = date('m');
        $anoAtual = date('Y');
        $dataAtual = $diaAtual.'-'.$mesAtual.'-'.$anoAtual;

        $prestacoes = array();

        for($i = 1; $i<=$this->NumPrestacoes; $i++){
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

            $faltaPagar = ($this->Credito-$dividaPaga >= 0) ? $this->Credito-$dividaPaga : 0;
            $prestacoes[] = [$dataAtual, $pagamentoMensal, $faltaPagar];
        }
        return $prestacoes;
    }
}
?>