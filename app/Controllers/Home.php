<?php

namespace App\Controllers;

use App\Models\ProdutoModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function listar()
    {
        $produto_model = new ProdutoModel();
        $produtos = $produto_model
                            ->findAll();

        $data['produtos'] = $produtos;

        echo view('header');
        echo view('listar', $data);
        echo view('footer');
    }

    public function cadastrar()
    {
        $dados = $this->request
                        ->getVar();
        $produto_model = new ProdutoModel();
        $produto_model->insert($dados);
        $url = base_url('/web.local/public/listar?alert=successCreate');
        return redirect()->to($url);
    }

    public function excluir($ProdutoId)
    {
        $produto_model = new ProdutoModel();

        $produto_model
                ->where('ProdutoId', $ProdutoId)
                ->delete();
        
        $url = base_url('/web.local/public/listar?alert=successDelete');
        return redirect()->to($url);
    }
}