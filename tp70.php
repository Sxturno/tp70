<html>
<head>
<title>TP70</title>
</head>
<body>
<?php

$Nombre=$_REQUEST['n1'];
$HorasT=$_REQUEST['n2'];
$SueldoPh=$_REQUEST['n3'];

class Menu{
    private $Nombre;
    private $HorasT;
    private $SueldoPh;

    public function inicializar($nom, $ht, $sph)
    {
        $this->Nombre=$nom;
        $this->HorasT=$ht;
        $this->SueldoPh=$sph;

    }
    public function imprimir()
    {
        echo $this->Nombre;
        echo '<br>';
    }
    public function calcular()
    {
        $mult=$this->HorasT * $this->SueldoPh;
        echo $mult;
    }
}
$Menu =new Menu();
$Menu->inicializar($Nombre, $HorasT, $SueldoPh);
$Menu->imprimir();
$Menu->calcular();

?>
</body>
</html>
