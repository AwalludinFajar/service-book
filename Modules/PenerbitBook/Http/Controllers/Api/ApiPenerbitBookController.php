<?php

namespace Modules\PenerbitBook\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\PenerbitBook\Entities\PenerbitBook;

class ApiPenerbitBookController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return PenerbitBook::all();
        // return view('penerbitbook::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('penerbitbook::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->json()->all();

        $penerbit = PenerbitBook::create([
          'nama_penerbit' => $data['nm_penerbit'],
          'alamat_penerbit' => $data['alamat'],
          'kontak' => $data['kontak']
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
        return view('penerbitbook::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('penerbitbook::edit');
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

        $penerbit = PenerbitBook::findOrFail($data['id']);
        $penerbit->delete();

        return response()->json(['message' => 'Delete Success']);
    }
}
