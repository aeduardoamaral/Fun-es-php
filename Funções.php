<?php
    function aula(){
        echo "<hr/>Olá mundo!<br/>";

        echo "Aula sobre funções<hr/>";
    }
    aula();

    function soma($n1,$n2){
        $res=$n1+$n2;
        echo "<br/>Soma de $n1 com $n2 = $res<br/>";

    }
    soma(3,7);


    echo "<br/><hr/><br/>";

    function soma2($n1,$n2){
        $res=$n1+$n2;
        return $res;
        
    }

    $so=soma2(10,5);
    echo "<br/>Resultado = $so<br/>";
    
    echo "<br/><hr/><br/>";
    
    $so=soma2(1,1);
    echo "<br/>Resultado = $so<br/>";


    echo "<br/><hr/><br/>";



    $valores=array(1,3,5,7,9,12,6,4,20,18);
    function media($val){
        $tam=count($val);
        $soma=0;
        for($i=0;$i<$tam;$i++){
            $soma+=$val[$i];
        }
        return $soma/$tam;
    }
    $med=media($valores);
    echo "<br/>Média = $med<br/>";
?>