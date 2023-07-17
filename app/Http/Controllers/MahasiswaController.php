<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use DataTables;
use Alert;



class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('modules.mahasiswa.index');
    }

    public function getMahasiswa(Request $request)
    {
        if ($request->ajax()) {
            $mahasiswa = Mahasiswa::all();
            return DataTables::of($mahasiswa)
                ->editColumn('aksi', function ($mahasiswa) {
                    return view('partials._action', [
                        'model' => $mahasiswa,
                        'delete_url' => route('mahasiswa.destroy', $mahasiswa->id),
                        'edit_url' => route('mahasiswa.edit', $mahasiswa->id)
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
        return view('modules.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mahasiswa = Mahasiswa::create($request->all());

        Alert::success('Berhasil', 'Data berhasil disimpan');
        return redirect()->route('mahasiswa.index');
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
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('modules.mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update($request->all());
        Alert::success('Berhasil', 'Data berhasil diupdate');
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->destroy($mahasiswa->id);
        Alert::success('Berhasil', 'Data berhasil dihapus');
        return redirect()->route('mahasiswa.index');
    }
}
