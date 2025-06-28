<?php
/*
### **7. Classificar faixa etária**

- Entrada: idade.
- Lógica:
    - 0–12: criança
    - 13–17: adolescente
    - 18–59: adulto
    - 60+: idoso
     */
$idade = $_GET["idade"];

if(($idade >= 0) && ($idade<= 12)){
    echo "Criança";
}elseif (($idade >= 13) && ($idade<= 17)) {
    echo "Adolescente";
}elseif (($idade >= 18) && ($idade<= 59)){
    echo "Adulto";
}elseif ($idade > 60){
    echo "idoso";
}else{
    echo "idade incoerente";
}


?>
