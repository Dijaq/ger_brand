<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class WebController extends Controller
{
    public function index()
    {
        return view('web.inicio');
    }

    public function contacto()
    {
        return view('web.contacto');
    }

    public function cotiza()
    {
        return view('web.cotiza');
    }

    public function servicios_tipo()
    {
        return view('web.cotiza-aqui');
    }

    public function servicios()
    {
        return view('web.servicios');
    }

    public function servisio_disenio_web()
    {
        return view('web.pagina_indivual_servicio');
    }

    public function blog()
    {
        return view('web.blog');
    }
    public function blog_articulo()
    {
        return view('web.blog-articulo');
    }

    public function soporte()
    {
        return view('web.soporte');
    }
    public function soporte_articulo()
    {
        return view('web.soporte-articulo');
    }

    public function generar_pdf()
    {
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('web.documento');
        $pdf->setPaper("A4");
        //return view('web.pdf');
        return $pdf->download('archivo.pdf');
    }

}
