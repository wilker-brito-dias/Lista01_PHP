<?php
/*### **13. Validador de idade para acesso ao sistema**

- Entrada: idade.
- Lógica: se for menor de 18, negar acesso. */
$idade = $_GET["idade"];
$acesso = 18;

if($idade >= $acesso){
    echo "Tendo $idade anos, voce tem acesso a pagina";
}else{
    echo "Por não ter idade suficiente, voce não tem acesso a pagina";
}
?>