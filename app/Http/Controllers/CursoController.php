<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Bienvenido a la pagina de cursos desde el controlador";
    }
    public function create(){
        return "En esta pagina podras crear tus cursos desde el controlador";
    }
    public function show($curso, $categoria = null){
        if($categoria){
            return "Bienvenido al curso $curso, de la categoria $categoria";
        }else{
            return "Bienvenido al curso $curso";
        }        
    }
}
