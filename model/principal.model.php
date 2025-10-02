<?php

define('USUARIOS_JSON', __DIR__.'/banco_simulacao/usuarios_dados.json');

function carregar_usuarios()
{
    if(!file_exists(USUARIOS_JSON))
    {
        return [];
    }
    $json = file_get_contents(USUARIOS_JSON);
    return json_decode($json, true); 
}

function buscar_dados_usuario_por_id($id_usuario) 
{
    $usuarios = carregar_usuarios();
    
    foreach ($usuarios as $usuario) {
        if (isset($usuario['id']) && (int)$usuario['id'] === (int)$id_usuario) {
            return $usuario;
        }
    }
    
    return null;
}