<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;

class PDFController extends Controller
{
    
    public function generate_pdf(Request $post) {
    
    $data1 = $post::all();
    $pdf = \PDF::loadView('generate_pdf',compact('data1'));
        return $pdf->stream('title.pdf');
}
}
