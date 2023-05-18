<?php

namespace App\Http\Controllers;

use App\Models\Sasaran;
use App\Models\Indikator;
use App\Models\EvaluasiPegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SasaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tambahSasaran()
    {
        return view('pegawai.sasaran_kerja.sasaran', [
            "title" => "Matriks"
        ]);
    }

    public function matriks(){
        $sasaran = Sasaran::all();
        return view('pegawai.sasaran_kerja.matriks', compact('sasaran'), [
            "title" => "Matriks"
        ]);
    }

    public function sasaranView(){
        $sasaran = Sasaran::all();
        return view(
            'pegawai.sasaran_kerja.tambah-sasaran',
            compact('sasaran'),
            [
                "title" => "Sasaran kerja"
            ]
        );
    }
    /**
     * Show the form for creating a new resource.
     */
    public function storeSasaran(Request $request)
    {
        $validasi = $request->validate([
            "sasaran_kerja" => "required",
            // "indikator_keberhasilan" => "required"
        ]);  

        $create = Sasaran::create($validasi);
        return redirect()->route('tambahSasaran');
    }

    public function deleteSasaran($id){
        // $indikators = Indikator::where('sasaran_id', $id)->get();
        // foreach($indikators as $indikator){
        //     $indikator->id;
        // }
        // DB::table('indikators')->where('sasaran_id', $id)->delete();
        // $sasaran = Sasaran::find($id);
        // $sasaran->delete();
        // return redirect()->route('sasaranView');
        $data = DB::table('sasarans')
        ->leftJoin('indikators','sasarans.id', '=','indikators.sasaran_id')
        ->where('sasarans.id', $id); 
        DB::table('indikators')->where('sasaran_id', $id)->truncate();                           
        $data->truncate();
        return redirect()->route('sasaranView');
    }

    public function tambahIndikator($id){
        $sasaran = Sasaran::find($id);
        // ddd($sasaran);
        return view('pegawai.sasaran_kerja.indikator', compact('sasaran'), [
            "title" => "Indikator Keberhasilan",
            "indikators" => $sasaran->indikator
        ]);
    }

    public function storeIndikator(Request $request, $id){
        $data = [];
        foreach($request->input('indikators') as $indikator){
            $data[] = [
                'sasaran_id' => $id,
                'teks_indikator' => $indikator
            ];
        }
        Indikator::upsert($data, ['sasaran_id', 'teks_indikator']);
        return redirect()->route('indikatorView', $id);

    }

    public function hapusIndikator($id, $idIndikator){
        DB::table('indikators')->where('indikators.id', $idIndikator)->delete();;                           
        return redirect()->route('indikatorView', $id);
    }

    public function display($record){
        $realisasi = EvaluasiPegawai::find($record);
        return view('filament.resources.evaluasi-pegawai-resource.pages.realisasi-view', compact('realisasi'));
    }

}