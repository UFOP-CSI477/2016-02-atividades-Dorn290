<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Compra;
use App\Produto;
use App\User;
use App\Carrinho;

class CompraController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(Auth::check()) {
         $compras = DB::select( DB::raw("SELECT * FROM compras WHERE users_id = :id"), array( 'id' => Auth::id() ));
         return view('compras.index')->with('compras', $compras);
      } else {
         redirect('/');
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, array(
          'produtos_id' => 'required',
          'users_id' => 'required',
          'quantidade' => 'max:191',
          'data' => 'required',
      ));

      $compra = new Compra;

      $compra->produtos_id = $request->produtos_id;
      $compra->users_id = $request->users_id;
      $compra->quantidade = $request->quantidade;
      $compra->data = $request->data;
      $compra->save();

      //Session::flash('success', 'Novo evento cadastrado!');

      return view('compras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($users_id)
     {
         $compras = Compra::with('users')->where('users_id', $users_id)->get();
         return view('compras.show')->with('compras', $compras);
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $compra = Compra::findOrFail($id);
      return view('compras.edit')->with('compras', $compra);
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
        session()->flash('info', 'Compra atualizada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $compra = Compra::findOrFail($id);
      $compra->delete();
      session()->flash('info', 'Compra excluída!');
      return redirect('/compras');
    }
}
