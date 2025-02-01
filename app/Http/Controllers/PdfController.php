<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;



class PdfController extends Controller
{
    public function index()
    {
        $pdf = Pdf::loadView('pdf.teste');
        return $pdf->stream();
    }
}
