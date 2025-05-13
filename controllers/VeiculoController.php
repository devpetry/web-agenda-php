<?php
require_once 'models/Veiculo.php';

class VeiculoController
{
    public function index()
    {
        $veiculos = Veiculo::all();
        include 'views/index.php';
    }

    public function create()
    {
        include 'views/create.php';
    }

    public function store()
    {
        Veiculo::create($_POST);
        header('Location: index.php');
    }

    public function edit($id)
    {
        $veiculo = Veiculo::find($id);
        include 'views/edit.php';
    }

    public function update($id)
    {
        Veiculo::update($id, $_POST);
        header('Location: index.php');
    }

    public function delete($id)
    {
        Veiculo::delete($id);
        header('Location: index.php');
    }
}
