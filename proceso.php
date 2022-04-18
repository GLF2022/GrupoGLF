<?php

$numero_nodos = $_POST['numero_nodos'];
$tipo_grafo = $_POST['tipo_grafo'];

$etiquetados = isset($_POST['cbEtiquetados']);
if ($etiquetados == 1) {
$etiquetados = 1;
} else {
$etiquetados = 0;
}

echo "<h2> Informacion del Grafo </h2>";
echo "Numero de nodos a usar: " . $numero_nodos;
if($numero_nodos>1) echo " Nodos" . "<br/>"; else echo " Nodo" . "<br/>";
echo "Tipo de Grafo: " . $tipo_grafo . "<br/>";
if($etiquetados==1)echo "Grafo etiquetado: Sí" . "<br/>"; else echo "Grafo etiquetado: No" . "<br/>";
?>