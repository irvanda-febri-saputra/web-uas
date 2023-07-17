<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use DataTables;
use Alert;



class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('modules.dosen.index');
    }

    public function getDosen(Request $request)
    {
        if ($request->ajax()) {
            $dosen = Dosen::all();
            return DataTables::of($dosen)
                ->editColumn('aksi', function ($dosen) {
                    return view('partials._action', [
                        'model' => $dosen,
                        'delete_url' => route('dosen.destroy', $dosen->id),
                        'edit_url' => route('dosen.edit', $dosen->id)
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
        return view('modules.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dosen = Dosen::create($request->all());

        Alert::success('Berhasil', 'Data berhasil disimpan');
        return redirect()->route('dosen.index');
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
    public function edit(Dosen $dosen)
    {
        return view('modules.dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        $dosen->update($request->all());
        Alert::success('Berhasil', 'Data berhasil diupdate');
        return redirect()->route('dosen.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->destroy($dosen->id);
        Alert::success('Berhasil', 'Data berhasil dihapus');
        return redirect()->route('dosen.index');
    }
}
