<?php
    function verifcarSalario($cargo){
        if ($cargo=='Gerência'){
            $salario = 4000;
        }
        else if($cargo ==  'Financeiro'){
            $salario = 3200;
        }
        else if($cargo ==  'Recepção'){
            $salario = 1500;
        }
        else if($cargo ==  'Administrativo'){
            $salario = 2000;
        }
        else if($cargo ==  'Jurídico'){
            $salario = 2500;
        }
        return $salario;
    }
    function atualizarSalario($salario, $tempoServico){
        if($tempoServico<=3){
            $aumento = (6/100)*$salario;
        }
        else if ($tempoServico>3 && $tempoServico<=5){
            $aumento = (7.5/100)*$salario;
        }
        else if ($tempoServico>5 && $tempoServico<=7){
            $aumento = (9/100)*$salario;
        }
        else if ($tempoServico>7){
            $aumento = (10/100)*$salario;
        }
        $salarioComAumento = $salario + $aumento;
        return $salarioComAumento;
    }
    function efetuarLogin($email, $senha){
        if ($email == 'admin@admin.com' && $senha == 'admin123'){
            return true;
        } else{
            return false;
        }
    }
?>