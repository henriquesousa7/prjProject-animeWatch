<?php

function chamaView(string $caminho, $dados = null){
    $CI = get_instance();

    if($dados === null){
        $CI->load->view('templates/header');
        $CI->load->view($caminho);
        $CI->load->view('templates/footer');
    }else{
        $CI->load->view('templates/header');
        $CI->load->view($caminho, $dados);
        $CI->load->view('templates/footer');
    }
}