<?php

Route::get('noticias', function()
{
// Obtengo todas las Noticias presentes en la base de datos.
    $noticias = Noticia::all();
// Retorno las Noticias, por defecto se transforman a formato JSON.
    return $noticias;
});
