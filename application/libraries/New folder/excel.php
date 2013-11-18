<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
 *  ======================================= 
 *  Author     : Muhammad Surya Ikhsanudin 
 *  License    : Protected 
 *  Email      : mutofiyah@gmail.com 
 *   
 *  Dilarang merubah, mengganti dan mendistribusikan 
 *  ulang tanpa sepengetahuan Author 
 *  ======================================= 
 */  
require_once APPPATH."/third_party/PHPExcel.php"; 
 
class Excel extends PHPExcel { 
    public function __construct() { 
        parent::__construct(); 
    } 
}


/*Class Excel
{
function Excel()
{
require_once APPPATH."/third_party/PHPExcel.php"; 
}

function reader($filename = NULL)
{
$objReader = new PHPExcel_Reader_Excel5();

$objReader->setReadDataOnly(true);
$objPHPExcel = $objReader->load($filename);

$rowIterator = $objPHPExcel->getActiveSheet()->getRowIterator();

$sheet = $objPHPExcel->getActiveSheet();

$array_data = array();
foreach($rowIterator as $row)
{
$cellIterator = $row->getCellIterator();
$cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set
$rowIndex = $row->getRowIndex();

foreach ($cellIterator as $cell)
{
$array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();;
}
}
return $array_data;*/

