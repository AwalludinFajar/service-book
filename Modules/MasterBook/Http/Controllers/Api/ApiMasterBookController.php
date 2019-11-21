<?php

namespace Modules\MasterBook\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\MasterBook\Entities\MasterBook;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Session;
use Modules\KategoriBook\Entities\KategoriBook;
use Modules\PenerbitBook\Entities\PenerbitBook;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ApiMasterBookController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
      return MasterBook::with('KategoriBook')->with('PenerbitBook')->with('JumlahBook')->get();
        // return view('masterbook::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('masterbook::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
      $data = $request->json()->all();

      $didecode = base64_decode($data['cover_buku']);
      $filename = $data['judulbuku'].'_'.date('d-M-Y').'.jpg';
      Storage::disk('public')->put($filename, $didecode);

      $book = MasterBook::create([
        'idkategori'  => $data['idkategori'],
        'idpenerbit'  => $data['idpenerbit'],
        'judul_buku'  => $data['judulbuku'],
        'sinopsis'    => $data['sinopsis'],
        'pengarang'   => $data['pengarang'],
        'thn_terbit'  => $data['thnterbit'],
        'cover_buku'  => 'storage/'.$filename,
        'status'      => $data['status'],
        'idjumlah'    => $data['idjumlah'],
        'create_at'   => date('d-M-Y'),
        'update_at'   => date('d-M-Y')
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
        return view('masterbook::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('masterbook::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
      $data = $request->json()->all();

      $book = MasterBook::findOrFail($id);
      // dd($book);
      // date('d-M-Y')

      if (file_exists($data['cover_buku'])) {
        unlink($data['cover_buku']);
      }

      $didecode = base64_decode($book->cover_buku);
      $filename = $book->judul_buku.'_'.date('d-M-Y').'.jpg';
      Storage::disk('public')->put($filename, $didecode);

      $book->idkategori = $data['idkategori'];
      $book->idpenerbit = $data['idpenerbit'];
      $book->judul_buku = $data['judulbuku'];
      $book->sinopsis   = $data['sinopsis'];
      $book->pengarang  = $data['pengarang'];
      $book->thn_terbit = $data['thnterbit'];
      $book->cover_buku = 'storage/'.$filename;
      $book->status     = $data['status'];
      $book->idjumlah   = $data['idjumlah'];
      $book->updated_at = $data['updateat'];
      $book->save();

      return response()->json(['message' => 'Update Success']);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy(Request $request)
    {
        $data = $request->json()->all();

        $book = MasterBook::findOrFail($data['id']);
        if(file_exists($book['cover_buku'])) {
          unlink($book['cover_buku']);
        }

        $book->delete();

        return response()->json(['message' => 'Delete Success']);
    }
}
