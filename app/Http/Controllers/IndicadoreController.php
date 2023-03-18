<?php

namespace App\Http\Controllers;

use App\Models\Indicadore;
use Illuminate\Http\Request;

/**
 * Class IndicadoreController
 * @package App\Http\Controllers
 */
class IndicadoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicadores = Indicadore::paginate();

        return view('indicadore.index', compact('indicadores'))
            ->with('i', (request()->input('page', 1) - 1) * $indicadores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indicadore = new Indicadore();
        return view('indicadore.create', compact('indicadore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Indicadore::$rules);

        $indicadore = Indicadore::create($request->all());

        return redirect()->route('indicadore.index')
            ->with('success', 'El Nuevo Indicador a sido creado con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indicadore = Indicadore::find($id);

        return view('indicadore.show', compact('indicadore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicadore = Indicadore::find($id);

        return view('indicadore.edit', compact('indicadore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Indicadore $indicadore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Indicadore $indicadore)
    {
        request()->validate(Indicadore::$rules);

        $indicadore->update($request->all());

        return redirect()->route('indicadore.index')
            ->with('success', 'Los datos del Indicador han sido actualizados con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $indicadore = Indicadore::find($id)->delete();

        return redirect()->route('indicadore.index')
            ->with('success', 'El Indicador a sido Eliminado con exito');
    }
}
