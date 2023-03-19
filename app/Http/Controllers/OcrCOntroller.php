<?php

namespace App\Http\Controllers;
use thiagoalessio\TesseractOCR\TesseractOCR;



class OcrCOntroller extends Controller
{
    public function tesseractOcr(){
        $ocr = new TesseractOCR();
        $ocr->image('teste.jpg');
        $teste = $ocr->run();

        $testeok = substr($teste,0 ,5);
        echo $testeok;

    }
}
