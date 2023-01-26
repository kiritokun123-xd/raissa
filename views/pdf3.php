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
//$equipa = '<b>EQUIPAMIENTO: </b>'.$pedido->equipamiento.'<br><br>';
//$adicio = '<b>TAPIZ: </b>'.$pedido->adicional.'<br><br>';
//$obs = '<b>OBSERVACIONES: </b>'.$pedido->observacion;

$pdf = new PDF();
$pdf->AddPage();
// Primera página
$pdf->SetFont('Arial','B',15);
$pdf->AliasNbPages();
// Movernos a la derecha
$pdf->Cell(5);
// Título
$pdf->Cell(16,16,'',1,0,'C');
$pdf->SetFont('Arial','B',11);
$pdf->Cell(68,16,'PEDIDO DE TAPICES: No.'. $pedido->id ,1,0,'L');
$pdf->Cell(12);

//Tabla 1
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,5,' Orden Trimoto',1,0,'L');
$pdf->Cell(60,5,' No.' . $pedido->ord_trimoto,1,0,'L');$pdf->Ln(5);$pdf->Cell(101);
$pdf->Cell(30,5,' Fecha Inicio',1,0,'L');
$pdf->Cell(60,5,$pedido->fecha_ini,1,0,'L');$pdf->Ln(5);$pdf->Cell(101);
$pdf->Cell(30,5,' Fecha Fin',1,0,'L');
$pdf->Cell(60,5,$pedido->fecha_fin,1,0,'L');$pdf->Ln(5);$pdf->Cell(101);
$pdf->Cell(30,5,' Cliente',1,0,'L');
$pdf->Cell(60,5,$pedido->cliente,1,0,'L');$pdf->Ln(5);$pdf->Cell(101);
$pdf->Cell(30,5,' Responsable',1,0,'L');
$pdf->Cell(60,5,$pedido->responsable,1,0,'L');$pdf->Ln(5);$pdf->Cell(101);

//ESPACIO ALTO
$pdf->Ln(24);
$pdf->Cell(101);

//Tabla 2
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,5,' Modelo',1,0,'L');
$pdf->Cell(60,5,$pedido->mod_techo,1,0,'L');$pdf->Ln(5);$pdf->Cell(101);
$pdf->Cell(30,5,' Color Techo',1,0,'L');
$pdf->Cell(60,5,$pedido->col_techo,1,0,'L');$pdf->Ln(5);$pdf->Cell(101);
$pdf->Cell(30,5,' Media luna',1,0,'L');
$pdf->Cell(60,5,$pedido->medialuna,1,0,'L');$pdf->Ln(5);$pdf->Cell(101);
$pdf->Cell(30,5,' Franja',1,0,'L');
$pdf->Cell(60,5,$pedido->franja,1,0,'L');$pdf->Ln(5);$pdf->Cell(101);
$pdf->Cell(30,5,' Filo Techo',1,0,'L');
$pdf->Cell(60,5,$pedido->fil_techo,1,0,'L');$pdf->Ln(5);$pdf->Cell(101);

//ESPACIO ALTO
$pdf->Ln(4);

//Tabla 3
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,5,' Modelo Trimoto',1,0,'L');
$pdf->Cell(60,5,$pedido->mod_trimoto,1,0,'L');$pdf->Ln(5);
$pdf->Cell(30,5,' Codigo',1,0,'L');
$pdf->Cell(60,5,$pedido->cod_trimoto,1,0,'L');$pdf->Ln(5);
$pdf->Cell(30,5,' Color',1,0,'L');
$pdf->Cell(60,5,$pedido->col_trimoto,1,0,'L');$pdf->Ln(5);

//ESPACIO ALTO
$pdf->Ln(-5);
$pdf->Cell(95);

//Tabla 4
$pdf->SetFont('Arial','',10);
$pdf->Cell(45,8,' Color cobertor posterior',1,0,'L');
$pdf->Cell(51,8,$pedido->col_cob_post,1,0,'L');$pdf->Ln(8);$pdf->Cell(95);
$pdf->Cell(45,8,' Modelo ventana posterior',1,0,'L');
$pdf->Cell(51,8,$pedido->mod_ven_post,1,0,'L');$pdf->Ln(8);$pdf->Cell(95);
$pdf->Cell(45,8,' Filo de la ventana',1,0,'L');
$pdf->Cell(51,8,$pedido->fil_ventana,1,0,'L');$pdf->Ln(8);$pdf->Cell(95);
$pdf->Cell(45,8,' Aletas',1,0,'L');
$pdf->Cell(51,8,$pedido->aletas,1,0,'L');$pdf->Ln(8);$pdf->Cell(95);
$pdf->Cell(45,8,' Color de cobertor lateral',1,0,'L');
$pdf->Cell(51,8,$pedido->col_cob_late,1,0,'L');$pdf->Ln(8);$pdf->Cell(95);
$pdf->Cell(45,8,' Modelo de ventana lateral',1,0,'L');
$pdf->Cell(51,8,$pedido->mod_ven_lat,1,0,'L');$pdf->Ln(8);$pdf->Cell(95);
$pdf->Cell(45,8,' Dibujo 1 lateral',1,0,'L');
$pdf->Cell(51,8,$pedido->dib_lat,1,0,'L');$pdf->Ln(8);$pdf->Cell(95);

//ESPACIO ALTO
$pdf->Ln(6);
$pdf->Cell(23);
//Tabla 5
$pdf->SetFont('Arial','',9);
$pdf->Cell(32,8,'Color Puerta posterior',1,0,'L');
$pdf->Cell(30,8,$pedido->col_puer_post,1,0,'L');$pdf->Ln(8);$pdf->Cell(23);
$pdf->Cell(32,8,'Dibujo 2',1,0,'L');
$pdf->Cell(30,8,$pedido->dib_puer_post,1,0,'L');$pdf->Ln(8);$pdf->Cell(23);
$pdf->Cell(32,8,'Color Dibujo 2',1,0,'L');
$pdf->Cell(30,8,$pedido->col_dib_puer_post,1,0,'L');$pdf->Ln(8);$pdf->Cell(23);
$pdf->Cell(32,8,'Modelo Ventana',1,0,'L');
$pdf->Cell(30,8,$pedido->mod_ven_puer_post,1,0,'L');$pdf->Ln(8);$pdf->Cell(23);
$pdf->Cell(32,8,'Filo Ventana',1,0,'L');
$pdf->Cell(30,8,$pedido->fil_ven_puer_post,1,0,'L');$pdf->Ln(8);$pdf->Cell(23);

//ESPACIO ALTO
$pdf->Ln(-40);    
$pdf->Cell(127);
//Tabla 6
$pdf->SetFont('Arial','',9);
$pdf->Cell(32,8,'Color Puerta delantera',1,0,'L');
$pdf->Cell(31,8,$pedido->col_puer_del,1,0,'L');$pdf->Ln(8);$pdf->Cell(127);
$pdf->Cell(32,8,'Dibujo 3',1,0,'L');
$pdf->Cell(31,8,$pedido->dib_puer_del,1,0,'L');$pdf->Ln(8);$pdf->Cell(127);
$pdf->Cell(32,8,'Ventanita para abrir',1,0,'L');
$pdf->Cell(31,8,$pedido->vent_puer_del,1,0,'L');$pdf->Ln(8);$pdf->Cell(127);
$pdf->Cell(32,8,'Filo',1,0,'L');
$pdf->Cell(31,8,$pedido->fil_ven_puer_del,1,0,'L');$pdf->Ln(8);$pdf->Cell(127);

//ESPACIO ALTO
$pdf->Ln(13);
$pdf->Cell(30);
//Tabla 7
$pdf->SetFont('Arial','',9);
$pdf->Cell(30,8,'Modelo de mascara',1,0,'L');
$pdf->Cell(30,8,$pedido->mod_mascara,1,0,'L');$pdf->Ln(8);$pdf->Cell(30);
$pdf->Cell(30,8,'Color Mascara',1,0,'L');
$pdf->Cell(30,8,$pedido->col_mascara,1,0,'L');$pdf->Ln(8);$pdf->Cell(30);
$pdf->Cell(30,8,'Color del Filo',1,0,'L');
$pdf->Cell(30,8,$pedido->col_fil_mascara,1,0,'L');$pdf->Ln(8);$pdf->Cell(30);
$pdf->Cell(30,8,'Dibujo 4',1,0,'L');
$pdf->Cell(30,8,$pedido->dib_mascara,1,0,'L');$pdf->Ln(8);$pdf->Cell(30);
$pdf->Cell(30,8,'Color Dibujo 4',1,0,'L');
$pdf->Cell(30,8,$pedido->col_dib_mascara,1,0,'L');$pdf->Ln(8);$pdf->Cell(30);
$pdf->Cell(30,8,'Bolsillo',1,0,'L');
$pdf->Cell(30,8,$pedido->bol_mascara,1,0,'L');$pdf->Ln(8);$pdf->Cell(30);

//ESPACIO ALTO
$pdf->Ln(-48);    
$pdf->Cell(127);
//Tabla 8
$pdf->SetFont('Arial','',9);
$pdf->Cell(32,8,'Tamano',1,0,'L');
$pdf->Cell(31,8,$pedido->tam_individual,1,0,'L');$pdf->Ln(8);$pdf->Cell(127);
$pdf->Cell(32,8,'Color del individual',1,0,'L');
$pdf->Cell(31,8,$pedido->col_individual,1,0,'L');$pdf->Ln(8);$pdf->Cell(127);
$pdf->Cell(32,8,'Modelo de ventana',1,0,'L');
$pdf->Cell(31,8,$pedido->mod_ven_individual,1,0,'L');$pdf->Ln(8);$pdf->Cell(127);
$pdf->Cell(32,8,'Filo de ventana',1,0,'L');
$pdf->Cell(31,8,$pedido->fil_ven_individual,1,0,'L');$pdf->Ln(8);$pdf->Cell(127);
$pdf->Cell(32,8,'Huequito para mano',1,0,'L');
$pdf->Cell(31,8,$pedido->hue_individual,1,0,'L');$pdf->Ln(8);$pdf->Cell(127);
$pdf->Cell(32,8,'Bolsillos',1,0,'L');
$pdf->Cell(31,8,$pedido->bol_individual,1,0,'L');$pdf->Ln(8);$pdf->Cell(127);

//espacio
$pdf->Ln(0);
$pdf->Cell(75);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(30,8,'OBSERVACIONES:' ,0,0,'L');
//espacio

//$pdf->Cell(78,20,utf8_decode('FECHA DE ENTREGA: ' . date_format(date_create($pedido->fecha_ent),'d-m-Y')),1,0,'L');
//$pdf->Cell(40,20,utf8_decode('Nº' . $pedido->id),1,1,'C');

//IMAGENES
$pdf->Image('../public_html/imagenes/loguito.jpg',16,11,14,14,'','/');
$pdf->Image('../public_html/imagenes/1_1.jpg',16,28,75,57,'');
$pdf->Image('../public_html/imagenes/2_2.jpg',110,35,90,22,'');
$pdf->Image('../public_html/imagenes/3_3.jpg',12,110,85,47,'');
$pdf->Image('../public_html/imagenes/4_4.jpg',2,155,30,50,'');
$pdf->Image('../public_html/imagenes/5_5.jpg',100,155,35,50,'');
$pdf->Image('../public_html/imagenes/6_6.jpg',2,205,36,50,'');
$pdf->Image('../public_html/imagenes/7_7.jpg',102,208,32,45,'');

$pdf->Ln(5);
//$pdf->Cell(100);
$pdf->SetFont('Arial','',9);
$pdf->MultiCell(190,3.5,$pedido->observacion,1,'L');
//debuguear($pdf);

$pdf->Output('I',utf8_decode($pedido->cliente .'-ORDENPRODUCCION.pdf'),'UTF-8');
?>