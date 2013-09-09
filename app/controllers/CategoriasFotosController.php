<?php

class CategoriasFotosController extends BaseController {

    function index($cat_id) {
        $categoria = Categoria::findOrFail($cat_id);

        $arr = array(
            'nombre' => $categoria->nombre,

        );

        $arr['fotos'] = $categoria->fotos->toArray();



        return Response::json($arr);

    }
}