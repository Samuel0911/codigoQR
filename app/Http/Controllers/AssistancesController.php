<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\User;
use App\Assistance;
use Carbon\Carbon;

class AssistancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $assistances = Assistance::orderBy('id', 'ASC')->paginate(5);
        return view('admin.assistances.index')->with('assistances', $assistances);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date = Carbon::now();
        $date1 = Carbon::now();
        $users = User::all();//con esto le pasamos los datos de la tabla users
        return view('admin.assistances.create')

                ->with('users', $users)
                ->with('date', $date)
                ->with('date1', $date1);//parametros para manipular los campos de la tabla users
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assistance = new Assistance($request->all());
        $assistance->save();

        Flash::success("Se ha registrado de forma exitosa! ");
        
        return redirect()->route('admin.assistances.index');
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
        $assistance = Assistance::find($id);

        return view('admin.assistances.edit',['assistance'=>$assistance]);
        
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

        $assistance = Assistance::find($id);
        $assistance->fill($request->all());

        $assistance->save();
        Flash::warning('La asistencia ha sido edita correctamente');
        return redirect()->route('admin.assistances.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assistance = Assistance::find($id);
        $assistance->delete();

         Flash::error('La asistencia ha sido elimanda correctamente');
        return redirect()->route('admin.assistances.index');
    }

}
