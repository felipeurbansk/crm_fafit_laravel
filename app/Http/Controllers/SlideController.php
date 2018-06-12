<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use DB;

class SlideController extends Controller
{
    public function index(){
        $slide = Slide::orderBy('id', 'desc')->paginate(5);
        return view('adm.slide.index',compact('slide'));
    }

    public function cadastro(){
        return view('adm.slide.form');
    }

    public function salvar(Request $req){
        $slide = $req->all();
        if($req->hasFile('img')){
            $imagem = $req->img;
            $slide['img'] = time().'_'.$imagem->getClientOriginalName();
            $imagem->move("img/slide/",$slide['img']);
            $slide['link'] = 'img/slide/'.$slide['img'];
        }
        
        DB::beginTransaction();
        try{
            Slide::create($slide);
            DB::commit();
            return redirect()->route('adm.slide')->with('sucesso','Slide criado com sucesso');
        }catch(Exception $e){
            DB::rollback();
            return back()->with('error','Não foi possível adicionar o slide. Tente novamente!');
        }

    }

    public function editar($id){
        $slide = Slide::find($id);
        return view('adm.slide.form', compact('slide'));
    }

    public function atualizar(Request $req){
        $slide = $req->all();
        if($req->hasFile('img')){
            $imagem = $req->img;
            $slide['img'] = time().'_'.$imagem->getClientOriginalName();
            $imagem->move("img/slide/",$slide['img']);
            $slide['link'] = 'img/slide/'.$slide['img'];
        }
        DB::beginTransaction();
        try{
            Slide::find($req['id'])->update($slide);
            DB::commit();
            return redirect()->route('adm.slide')->with('sucesso','Slide atualizado com sucesso!');
        }catch(Exception $e){
            DB::rollback();
            return back()->with('error','Não foi possivel atualizar o slide.');
        }
    }

    public function excluir($id){
        DB::beginTransaction();
        try{
            Slide::find($id)->delete();
            DB::commit();
            return redirect()->route('adm.slide')->with('sucesso','Slide excluido com sucesso!');
        }catch(Exception $e){
            DB::rollback();
            return back()->with('error', 'Slide não pode ser excluido');
        }
    }
}
