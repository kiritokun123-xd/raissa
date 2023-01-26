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

$html = 'Ahora puede imprimir fácilmente texto mezclando diferentes estilos: <b>negrita</b>, <i>itálica</i>,
<u>subrayado</u>, o ¡ <b><i><u>todos a la vez</u></i></b>!<br><br>También puede incluir enlaces en el
texto, como <a href="http://www.fpdf.org">www.fpdf.org</a>, o en una imagen: pulse en el logotipo.';

$obs = '<b>OBSERVACIONES: </b>'.$pedido->observacion;

$pdf = new PDF();
$pdf->AddPage();
// Primera página
$pdf->SetFont('Arial','B',15);
$pdf->AliasNbPages();
// Movernos a la derecha
// Título
$pdf->Cell(16,16,'',1,0,'C');
$pdf->SetFont('Arial','B',11);
$pdf->Cell(74,16, utf8_decode(' PEDIDO DE TAPIZ Nº: '. $pedido->id),1,0,'L');
$pdf->Cell(11);

//Tabla 1
$pdf->SetFont('Arial','',10);
$pdf->Cell(33,7,' ORDEN TRIMOTO',1,0,'L');
$pdf->Cell(57,7,utf8_decode(' Nº:') . $pedido->ord_trimoto ,1,0,'L');$pdf->Ln(7);$pdf->Cell(101);
$pdf->Cell(33,7,' FECHA INICIO',1,0,'L');
$pdf->Cell(57,7,' ' . utf8_decode(date_format(date_create($pedido->fecha_ini),'d-m-Y')) ,1,0,'L');$pdf->Ln(7);$pdf->Cell(101);
$pdf->Cell(33,7,' FECHA ENTREGA',1,0,'L');
$pdf->Cell(57,7,' ' . utf8_decode(date_format(date_create($pedido->fecha_fin),'d-m-Y')),1,0,'L');$pdf->Ln(7);$pdf->Cell(101);
$pdf->Cell(33,7,' CLIENTE',1,0,'L');
$pdf->Cell(57,7,' ' . utf8_decode($pedido->cliente),1,0,'L');$pdf->Ln(7);$pdf->Cell(101);
$pdf->Cell(33,7,' RESPONSABLE',1,0,'L');
$pdf->Cell(57,7,' ' . utf8_decode($pedido->responsable),1,0,'L');$pdf->Ln(7);$pdf->Cell(101);


//ESPACIO ALTO
$pdf->Ln(-18);

//Tabla 3
$pdf->SetFont('Arial','',10);
$pdf->Cell(35,8,' MODELO TRIMOTO',1,0,'L');
$pdf->Cell(55,8,' '. utf8_decode($pedido->mod_trimoto),1,0,'L');$pdf->Ln(8);
$pdf->Cell(35,8,' CODIGO',1,0,'L');
$pdf->Cell(55,8,' '. utf8_decode($pedido->cod_trimoto),1,0,'L');$pdf->Ln(8);
$pdf->Cell(35,8,' COLOR',1,0,'L');
$pdf->Cell(55,8,' '. utf8_decode($pedido->col_trimoto),1,0,'L');$pdf->Ln(8);

//ESPACIO ALTO
$pdf->Ln(1);
$pdf->Cell(101);

//Tabla 4
$pdf->SetFont('Arial','',10);
$pdf->Cell(33,8,' MODELO TECHO',1,0,'L');
$pdf->Cell(57,8,' '. utf8_decode($pedido->mod_techo),1,0,'L');$pdf->Ln(8);$pdf->Cell(101);
$pdf->Cell(33,8,' TECHO',1,0,'L');
$pdf->Cell(57,8,' '. utf8_decode($pedido->techo),1,0,'L');$pdf->Ln(8);$pdf->Cell(101);
$pdf->Cell(33,8,' MEDIA LUNA',1,0,'L');
$pdf->Cell(57,8,' '. utf8_decode($pedido->med_luna),1,0,'L');$pdf->Ln(8);$pdf->Cell(101);
$pdf->Cell(33,8,' FRANJA',1,0,'L');
$pdf->Cell(57,8,' '. utf8_decode($pedido->franja),1,0,'L');$pdf->Ln(8);$pdf->Cell(101);
$pdf->Cell(33,8,' FILO TECHO',1,0,'L');
$pdf->Cell(57,8,' '. utf8_decode($pedido->fil_techo),1,0,'L');$pdf->Ln(8);$pdf->Cell(101);

//ESPACIO ALTO
$pdf->Ln(-40);

//IMAGEN COBERTOR
$pdf->SetFont('Arial','',10);
$pdf->Cell(90,50,' IMAGEN COBERTOR',1,0,'C');

//ESPACIO ALTO
$pdf->Ln(51);
$pdf->Cell(10);

//IMAGEN MOTO
$pdf->SetFont('Arial','',10);
$pdf->Cell(170,100,' IMAGEN MOTO PERFIL',1,0,'C');

//IMAGENES
$pdf->Image('../public_html/imagenes/loguito.jpg',11,11,14,14,'','/');
//IMAGEN COBERTOR
$pdf->Image('../public_html/imagenes/' . $pedido->ima_cobertor ,10,52,90,50,'');
//IMAGEN MOTO
$pdf->Image('../public_html/imagenes/' . $pedido->ima_trimoto,20,103,170,100,'');



//espacio
$pdf->Ln(100);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,8,'OBSERVACIONES:',0,0,'L');
$pdf->Ln(6);
//$pdf->Cell(100);
$pdf->SetFont('Arial','',9);
$pdf->MultiCell(190,3.5, utf8_decode($pedido->observacion),1,'L');
//debuguear($pdf);
$pdf->Output('I',utf8_decode($pedido->cliente . '-ORDENPRODUCCION.pdf'),'UTF-8');
?>