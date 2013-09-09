<?php

class CategoriasFotosController extends BaseController {

    function index($cat_id) {
        $categoria = Categoria::findOrFail($cat_id);


        return Response::json($categoria->fotos);

    }
}