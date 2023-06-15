<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class Produtos extends Controller
{
    public function create(Request $request)
    {
        $prod = new Produto;
        return view('produtos', [ 'produto' => $prod ] );
    }

    public function store( Request $request )
    {
        $prod               = new Produto;
        $prod->sku          = $request->sku;
        $prod->nome         = $request->nome;
        $prod->quantidade   = $request->quantidade;
        $prod->tipo         = $request->tipo;
        $prod->descricao    = $request->descricao;
        $prod->valor        = str_replace(",",".",$request->valor);
        $prod->tamanho      = $request->tamanho;
        $prod->banho        = $request->banho;

        $prod->save();

        return redirect('vprodutos');
    }

    public function edit($sku)
    {
        $prod = Produto::where('sku',$sku)->firstOrFail();
        return view('produtos', [ 'produto' => $prod ] );
    }

    public function update( Request $request )
    {
        $prod = Produto::where('sku',$request->skuhidden);

        $prod->update([
            'nome'         => $request->nome,
            'quantidade'   => $request->quantidade,
            'tipo'         => $request->tipo,
            'descricao'    => $request->descricao,
            'valor'        => str_replace(",",".",$request->valor),
            'tamanho'      => $request->tamanho,
            'banho'        => $request->banho
        ]);

        return redirect('vprodutos');
    }

    public function carrinho( Request $request, $sku )
    {
        $ip = md5($request->ip());
        $prod = Produto::where('sku',$sku)->firstOrFail();
        //session()->forget('carrinho');

        if ($request->session()->exists('carrinho')) {
            $qtd = 1;

            if ($request->session()->exists("carrinho.$ip.$sku")) {
                $qtd = session("carrinho.$ip.$sku.qtd") + 1;
            }
            $car = array(
                'sku' => $sku,
                'nome' => $prod->nome,
                'valor' => $prod->valor,
                'qtd' => $qtd
            );
            $request->session()->put("carrinho.$ip.$sku", $car);

        } else {
            $carrinho[$ip][$sku] = array(
                'sku' => $sku,
                'nome' => $prod->nome,
                'valor' => $prod->valor,
                'qtd' => 1
            );
            $request->session()->put('carrinho', $carrinho);
        }


    }

    public function forget(  )
    {
        session()->forget('carrinho');
    }
}

