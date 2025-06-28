<?php
/*
### **10. Converter nota numérica em conceito**

- Entrada: nota de 0 a 10.
- Lógica:
    - A (9–10)
    - B (7–8.9)
    - C (5–6.9)
    - D (3–4.9)
    - E (0–2.9)
*/
$nota = $_GET["nota"];

if (($nota <=10) && ($nota >=9)){
echo "A";
}elseif (($nota <=8.9) && ($nota >=7)){
    echo "B";
}elseif (($nota <=6.9) && ($nota >=5)){
    echo "C";
}elseif (($nota <=4.9) && ($nota >=3)){
    echo "D";
}elseif (($nota <=2.9) && ($nota >=0)){
    echo "E";
}else{
    echo "Digite uma nota coerente";
}

?>