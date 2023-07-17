<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;
use DataTables;
use Alert;




class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('modules.matkul.index');
    }

    public function getMatkul(Request $request)
    {
        if ($request->ajax()) {
            $matkul = Matkul::all();
            return DataTables::of($matkul)
                ->editColumn('aksi', function (
                    $matkul
                ) {
                    return view('partials._action', [
                        'model' => $matkul,
                        'delete_url' => route('matkul.destroy', $matkul->id),
                        'edit_url' => route('matkul.edit', $matkul->id)
                    ]);
                })
                ->addIndexColumn()
                ->rawColumns(['aksi'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules.matkul.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $matkul = Matkul::create($request->all());

        Alert::success('Berhasil', 'Data berhasil disimpan');
        return redirect()->route('matkul.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matkul $matkul)
    {
        return view('modules.matkul.edit', compact('matkul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matkul $matkul)
    {
        $matkul->update($request->all());
        Alert::success('Berhasil', 'Data berhasil diupdate');
        return redirect()->route('matkul.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matkul $matkul)
    {
        $matkul->destroy($matkul->id);
        Alert::success('Berhasil', 'Data berhasil dihapus');
        return redirect()->route('matkul.index');
    }
}
