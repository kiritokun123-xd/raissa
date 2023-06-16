<?php

class PDF extends FPDF
{
protected $B = 0;
protected $I = 0;
protected $U = 0;
protected $HREF = '';
// Cabecera de página
// function variables($pedido){

// }
// function Header()
// {
//     // Logo
//     //$this->Image('logo.png',10,8,33);
//     // Arial bold 15
//     $this->SetFont('Arial','B',15);
//     // Movernos a la derecha
//     $this->Cell(5);
//     // Título
//     $this->Cell(30,30,'IMAGEN',1,0,'C');
//     $this->SetFont('Arial','B',8);
//     $this->Cell(48,30,'PROFESIONALES COSECA SAC',1,0,'C');
//     $this->SetFont('Arial','B',12);
//     $this->Cell(55,30,'ORDEN DE PRODUCCION',1,0,'C');
//     $this->Cell(50,30,utf8_decode('FECHA: '),1,0,'L');
//     // Salto de línea
//     $this->Ln(35);
//     $this->Cell(5);
//     $this->Cell(80,20,utf8_decode('FECHA DE ENTREGA:'),1,1,'L');
//     $this->Ln(10);
// }


// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}



function WriteHTML($html)
{
    // Intérprete de HTML
    $html = str_replace("\n",' ',$html);
    $a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
    foreach($a as $i=>$e)
    {
        if($i%2==0)
        {
            // Text
            if($this->HREF)
                $this->PutLink($this->HREF,$e);
            else
                $this->Write(5,$e);
        }
        else
        {
            // Etiqueta
            if($e[0]=='/')
                $this->CloseTag(strtoupper(substr($e,1)));
            else
            {
                // Extraer atributos
                $a2 = explode(' ',$e);
                $tag = strtoupper(array_shift($a2));
                $attr = array();
                foreach($a2 as $v)
                {
                    if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                        $attr[strtoupper($a3[1])] = $a3[2];
                }
                $this->OpenTag($tag,$attr);
            }
        }
    }
}

function OpenTag($tag, $attr)
{
    // Etiqueta de apertura
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,true);
    if($tag=='A')
        $this->HREF = $attr['HREF'];
    if($tag=='BR')
        $this->Ln(5);
}

function CloseTag($tag)
{
    // Etiqueta de cierre
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,false);
    if($tag=='A')
        $this->HREF = '';
}

function SetStyle($tag, $enable)
{
    // Modificar estilo y escoger la fuente correspondiente
    $this->$tag += ($enable ? 1 : -1);
    $style = '';
    foreach(array('B', 'I', 'U') as $s)
    {
        if($this->$s>0)
            $style .= $s;
    }
    $this->SetFont('',$style);
}

function PutLink($URL, $txt)
{
    // Escribir un hiper-enlace
    $this->SetTextColor(0,0,255);
    $this->SetStyle('U',true);
    $this->Write(5,$txt,$URL);
    $this->SetStyle('U',false);
    $this->SetTextColor(0);
}
}

$descrip = '<b>Descripción de la compra: </b>'.$pedidos[0]->descripcion.'<br><br>';

$pdf = new PDF();
$pdf->AddPage();
// Primera página
$pdf->SetFont('Arial','B',15);
$pdf->AliasNbPages();
// Movernos a la derecha
$pdf->Cell(5);
// Título
$pdf->Cell(30,30,'IMAGEN',1,0,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(103,30,utf8_decode('ORDEN DE COMPRA N°' . $pedidos[0]->id),1,0,'C');

$pdf->Cell(50,30,utf8_decode('FECHA: ' . date_format(date_create($pedidos[0]->fecha),'d-m-Y')),1,0,'L');
// Salto de línea


$pdf->Ln(40);
$pdf->Image('../public_html/imagenes/logopedido.png',15,10,30,30,'','/');

$pdf->SetLeftMargin(15);
$pdf->SetFontSize(10);
$pdf->WriteHTML(utf8_decode($descrip));
$pdf->SetFontSize(14);

$pdf->SetFont('Arial','B',14);
$pdf->Cell(30,10,utf8_decode('CODIGO'),1,0,'C');
$pdf->Cell(93,10,utf8_decode('DESCRIPCION'),1,0,'C');
$pdf->Cell(30,10,utf8_decode('UM'),1,0,'C');
$pdf->Cell(30,10,utf8_decode('CANTIDAD'),1,1,'C');

foreach($pedidos as $pedido) :
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,6,utf8_decode($pedido->codigo),1,0,'C');
$pdf->Cell(93,6,utf8_decode($pedido->articulo),1,0,'C');
$pdf->Cell(30,6,utf8_decode($pedido->um),1,0,'C');
$pdf->Cell(30,6,utf8_decode($pedido->cantidad),1,1,'C');
endforeach;

//debuguear($pdf);
$pdf->Output('I',utf8_decode($pedidos[0]->id . '-ORDENCOMPRA.pdf'),'UTF-8');
?>