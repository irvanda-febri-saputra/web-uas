<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use DataTables;
use Alert;
use App\Models\Matkul;
use App\Models\Nilai;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('modules.nilai.index');
    }

    public function getNilai(Request $request)
    {
        if ($request->ajax()) {
            $nilai = Nilai::with('mahasiswa', 'matkul');
            return DataTables::of($nilai)
                ->editColumn('aksi', function (
                    $nilai
                ) {
                    return view('partials._action', [
                        'model' => $nilai,
                        'delete_url' => route('nilai.destroy', $nilai->id),
                        'edit_url' => route('nilai.edit', $nilai->id)
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

        $mahasiswa = Mahasiswa::select('nama', 'id')->get();
        $matkul = Matkul::select('kd_matkul', 'nama_matkul', 'id')->get();
        return view('modules.nilai.create', compact('mahasiswa', 'matkul'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $nilai = Nilai::create($request->all());

        Alert::success('Berhasil', 'Data berhasil disimpan');
        return redirect()->route('nilai.index');
        
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
    public function edit(Nilai $nilai)
    {
        $mahasiswa = Mahasiswa::select('nama', 'id')->get();
        $matkul = Matkul::select('kd_matkul', 'nama_matkul', 'id')->get();
        return view('modules.nilai.edit', compact('nilai', 'mahasiswa', 'matkul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nilai $nilai)
    {
        $nilai->update($request->all());
        Alert::success('Berhasil', 'Data berhasil diupdate');
        return redirect()->route('nilai.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai)
    {
        $nilai->destroy($nilai->id);
        Alert::success('Berhasil', 'Data berhasil dihapus');
        return redirect()->route('nilai.index');
    }
}
