<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Conexão com o model 
use App\Models\Medicamento;

class CadastroRemedio extends Controller
{
    //Carrega os movimentos do usuário logado
    public function get_medicamento(){
        $user_id = auth()->user()->id;
        //Load registros onde o tipo=receita e user_id=$user_id
        $medicamentos = Medicamento::where('user_id', $user_id)->get();
    

        $parametros = [
            'medicamentos' => $medicamentos,
        ];
        dd($parametros);
        //return view('dashboard', $parametros);
    }
    
    
    //Método gravar para armazenar o movimento
    public function gravar(Request $request){
        
        $medicamento = new Medicamento;

        $medicamento->id_user = auth()->user()->id;
        $medicamento->nome = $request->nome;
        $medicamento->dt_inicio = $request->dt_inicio;
        $medicamento->dt_fim = $request->dt_fim;
        $medicamento->dosagem = $request->dosagem;
        $medicamento->horarios = $request->horarios;
        $medicamento->continuo = $request->continuo;

        $medicamento->save();

        //Após gravar os dados, redireciona para a rota "extrato"
        return redirect('dashboard');
    }

    //Carrega o formulário de edição com os dados do registro
    public function get_movimento($id){
        //Carrega o movimento onde o id = $id
        $movimento = Fin_movimento::findOrFail($id);

        return view('form_atualiza', ['movimento' => $movimento]);
    }

    public function atualizar(Request $request){
        Fin_movimento::findOrFail($request->id)->update($request->all());

        return redirect('extrato');
    }

    public function deletar($id){
        Fin_movimento::findorFail($id)->delete();

        return redirect('extrato');
    }
}