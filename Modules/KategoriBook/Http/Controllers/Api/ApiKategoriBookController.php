<?php

namespace Modules\KategoriBook\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\KategoriBook\Entities\KategoriBook;

class ApiKategoriBookController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return KategoriBook::all();
        // return view('kategoribook::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('kategoribook::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->json()->all();

        $kategori = KategoriBook::create([
          'nama_kategori' => $data['nm_kategori'],
          'keterangan'    => $data['ket']
        ]);

        return response()->json(['message' => 'Success Input']);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('kategoribook::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('kategoribook::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy(Request $request)
    {
        $data = $request->json()->all();

        $kategori = KategoriBook::findOrFail($data['id']);
        $kategori->delete();

        return response()->json(['message' => 'Delete Success']);
    }
}
