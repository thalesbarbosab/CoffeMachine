<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mensagem = null;
        $tipoCafe = null;
        switch ($request->selTipo) {
            case '1':
                $tipoCafe = [
                    "descricao" => "Capuccino",
                    "valor"     => "3.5"
                ];
                break;

            case '2':
                $tipoCafe = [
                    "descricao" => "Mocha",
                    "valor"     => "4"
                ];
                break;
            case '3':
                $tipoCafe = [
                    "descricao" => "Café com leite ",
                    "valor"     => "3"
                ];
                break;

            default:
                $mensagem = "Selecione um dos tipos de café disponíveis";
                break;
        }
        $umcent = $request->umcent * 0.01;
        $cincocent = $request->cincocent * 0.05;
        $dezcent = $request->dezcent * 0.10;
        $vintecincocent = $request->vintecincocent * 0.25;
        $cinquentacent = $request->cinquentacent * 0.50;
        $umreal = $request->umreal * 1;
        $troco = 0;
        $pagamentoAceito = $dezcent + $vintecincocent + $cinquentacent + $umreal;
        $pagamentoNaoAceito = $umcent + $cincocent;
        $pagamentoTotal =  $pagamentoAceito + $pagamentoNaoAceito ;
        if($pagamentoTotal == 0){
            $mensagem = "[Coloque suas moedas antes de solicitar] ";
            return redirect('/')->with('mensagem',$mensagem);
        }
        if($pagamentoAceito >= $tipoCafe['valor'])
        {
            $mensagem =  " [Seu ". $tipoCafe['descricao']." está sendo preparado] ";
            $troco = $pagamentoAceito - $tipoCafe['valor'];
            if($troco>0)
            {
                $mensagem.= " [troco = R$ ".$troco."] ";
            }
        }else{
            $mensagem = "[O valor de pagamento não pode comprar ".$tipoCafe['descricao']."] ";
        }
        if($pagamentoNaoAceito>0)
        {
            $mensagem.= "[As moedas de 1 e 5 centavos não estao sendo aceitas, total pago nao aceito de ".number_format($pagamentoNaoAceito,2,',','.')."] ";
            $trocoTotal = $troco + $pagamentoNaoAceito;
            $mensagem.= "[troco total = R$ ".number_format($trocoTotal,2,',','.')."] ";
        }
        return redirect('/')->with('mensagem',$mensagem);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
