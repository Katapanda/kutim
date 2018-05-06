<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use yajra\DataTables\Datatables;


use App\Models\Document;

class DocumentController extends Controller
{
    public function index()
    {
        return view('admin.modules.document.index');
    }
    public function editisi($id)
    {
        $document = Document::find($id);
        return view('admin.modules.document.editdocument', ['isi' => $document]);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $input['document'] = null;

        if ($request->hasFile('document')){
            $input['document'] = '/upload/document/'.str_slug($input['nama_document'], '-').'.'.$request->document->getClientOriginalExtension();
            $request->document->move(public_path('/upload/document/'), $input['document']);
        }

        Document::create($input);

        return response()->json([
            'success' => true,
            'message' => 'Document Berhasil Di Tambah'
        ]);
    }
    public function edit($id)
    {
        $document = Document::find($id);
        return $document;
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $document = Document::find($id);

        $input['document'] = $document->document;

        if ($request->hasFile('document')){
            if (!$document->document == NULL){
                unlink(public_path($document->document));
            }
            $input['document'] = '/upload/document/'.str_slug($input['nama_document'], '-').'.'.$request->document->getClientOriginalExtension();
            $request->document->move(public_path('/upload/document/'), $input['document']);
        }

        $document->update($input);

        return response()->json([
            'success' => true,
            'message' => 'Document Updated'
        ]);
        // return $document;
    }
    public function ubah(Request $request, $id)
    {
        $input = $request->all();
        $document = Document::find($id);

        $input['document'] = $document->document;

        if ($request->hasFile('document')){
            if (!$document->document == NULL){
                unlink(public_path($document->document));
            }
            $input['document'] = '/upload/document/'.str_slug($input['nama_document'], '-').'.'.$request->document->getClientOriginalExtension();
            $request->document->move(public_path('/upload/document/'), $input['document']);
        }

        if ($document->update($input)) {
            return redirect()->action('DocumentController@index')->with(['success' => 'Berhasil Ubah Data']);
        } else {
            return redirect()->action('DocumentController@index')->with(['error' => 'Mohon Maaf Terjad Kesalahan, Data Tidak Berhasil DI Ubah']);
        }
    }
    public function destroy($id)
    {
        
        $document = Document::findOrFail($id);

        if (!$document->document == NULL){
            unlink(public_path($document->document));
        }

        Document::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Document Deleted'
        ]);
    }

    public function apiDocument(Request $request)
    {
        // $document = Document::all();
        $document = Document::select(['id', 'nama_document', 'isi_document', 'document']);
        // print_r($agenda);
        return Datatables::of($document)
            ->filter(function ($query) use ($request) {
                if ($request->has('nama_document')) {
                    $query->where('nama_document', 'like', "%{$request->get('nama_document')}%");
                }

                if ($request->has('isi_document')) {
                    $query->where('isi_document', 'like', "%{$request->get('isi_document')}%");
                }
            })
            ->addColumn('isi_document', function($document){
                return $document->isi_document;
            })
            ->addColumn('document', function($document){
                if ($document->document == NULL){
                    return 'No Image';
                }
                return "<embed src='". url($document->document) ."' type='application/pdf' width='400px%' height='200px'></embed>"; 
            })
            ->addColumn('action', function($document){
                return 
                    '<a onclick="deleteData('. $document->id .')" class="btn btn-inverse-danger waves-effect waves-light btn-sm">
                            <i class="icofont icofont-delete-alt"></i> Delete</a>';
            })
            ->rawColumns(['isi_document','document','action'])->make(true);
    }
}
