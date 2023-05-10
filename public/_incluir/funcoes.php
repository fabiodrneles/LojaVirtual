<!-- esta função serve para formatar o estilo de moeda dos produtos no formato brasileiro. -->
<?php
    function real_format($valor) {
        $valor  = number_format($valor,2,",",".");
        return "R$ " . $valor;
    }
?>