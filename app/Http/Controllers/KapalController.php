<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kapal;
use App\Models\Pemilik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class KapalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kapals = Kapal::all();
        return view('dashboard.index', ['kapals' => $kapals]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  
     $kapals = Kapal::all();
    //  $pemiliks = Pemilik::all();
    //  $data = [];
    //  foreach(DB::table('pemiliks') as $row){
    //     $data[] = $row;
    //  }
    //  dd($pemiliks);
    return view('dashboard.create', ['kapals' => $kapals]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    Validator::make($request->all(), [
        'pemilik_id' => 'required|string',
        'nama_kapal' => 'required|unique:kapals',
        'no_sertifikat' => 'required|unique:kapals',
        'grade' => 'required|string|max:1',
        'ukuran' => 'required|alpha_num',
        'daerah_tangkap' => 'required|string',
        'alat_tangkap' => 'required|string',
        'lama_trip' => 'required|alpha_num',
        'jenis_ikan' => 'required|string',
        'penanganan' => 'required|string',
        'suhu' => 'required|alpha_num',
        'suhu_palka' => 'required|alpha_num',
        'nilai_organoleptik' => 'required|alpha_num',
        'estimasi_berat' => 'required|alpha_num',
        'tipe_kapal' => 'required|string',
        'tgl_inspeksi' => 'required|date',
        'pelabuhan_pangkalan' => 'required|string',
        'kapal_aktif' => 'required|string',
        'uraian' => 'required|string',
        'catatan' => 'required|string',
        'pemilik_id' => 'required|exists:pemiliks,id',
        'foto' => 'required|string',
        'sertifikat' => 'required|string',
    ], [
        'required' => 'field :attribute ini harus di isi!',
        'unique' => 'feld :attribute harus unik!',

    ], [
        'pemilik_id' => 'nama pemilik',
        'nama_kapal' => 'nama kapal',
        'no_sertifikat' => 'nomor sertifikat',
        'grade' => 'grade',
        'ukuran' => 'ukuran',
        'daerah_tangkap' => 'daerah penangkapan',
        'alat_tangkap' => 'alat penangkap',
        'lama_trip' => 'lama trip pelayaran',
        'jenis_ikan' => 'jenis ikan',
        'penanganan' => 'cara penanganan',
        'suhu' => 'suhu',
        'suhu_palka' => 'suhu pada palka',
        'nilai_organoleptik' => 'nilai organoleptik',
        'estimasi_berat' => 'estimasi berat',
        'tipe_kapal' => 'tipe kapal',
        'tgl_inspeksi' => 'tanggal inspeksi',
        'pelabuhan_pangkalan' => 'pelabuhan pangkalan',
        'kapal_aktif' => 'kapal aktif',
        'uraian' => 'uraian',
        'catatan' => 'catatan',
        'foto' => 'foto',
        'sertifikat' => 'foto',

    ])->validate();

    // Simpan kapal dengan pemilik_id
    Kapal::create([
        'nama_kapal' => $request->nama_kapal,
        'no_sertifikat' => $request->no_sertifikat,
        'grade' => $request->grade,
        'pemilik_id' => $request->pemilik_id,
        'inspektur_id' => Auth::user()->id, // benar
        'ukuran' => $request->ukuran,
        'daerah_tangkap' => $request->daerah_tangkap,
        'alat_tangkap' => $request->alat_tangkap,
        'lama_trip' => $request->lama_trip,
        'jenis_ikan' => $request->jenis_ikan,
        'penanganan' => $request->penanganan,
        'suhu' => $request->suhu,
        'suhu_palka' => $request->suhu_palka,
        'nilai_organoleptik' => $request->nilai_organoleptik,
        'estimasi_berat' => $request->estimasi_berat,
        'tipe_kapal' => $request->tipe_kapal,
        'tgl_inspeksi' => $request->tgl_inspeksi,
        'pelabuhan_pangkalan' => $request->pelabuhan_pangkalan,
        'kapal_aktif' => $request->kapal_aktif,
        'uraian' => $request->uraian,
        'catatan' => $request->catatan,
        'foto' => $request->foto,
        'sertifikat' => $request->sertifikat,
    ]);
    return redirect('/dashboard')->with(['success'=> 'Data kamu berhasil diupdate']);
}


    /**
     * Display the specified resource.
     */
    public function show(Kapal $kapal)
    {
     
       return view('dashboard.show', ['kapal' => $kapal]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kapal $kapal)
    {
        return view('dashboard.edit', ['kapal' => $kapal]);
    }

    /**
     * Update the specified resource in storage.
     */


public function update(Request $request, Kapal $kapal)
{
    $request->validate([
        'pemilik_id'        => 'required|exists:pemiliks,id',
        'nama_kapal'        => 'required|unique:kapals,nama_kapal,' . $kapal->id,
        'no_sertifikat'     => 'required|unique:kapals,no_sertifikat,' . $kapal->id,
        'grade'             => 'required|string|max:1',
        'ukuran'            => 'required|alpha_num',
        'daerah_tangkap'    => 'required|string',
        'alat_tangkap'      => 'required|string',
        'lama_trip'         => 'required|alpha_num',
        'jenis_ikan'        => 'required|string',
        'penanganan'        => 'required|string',
        'suhu'              => 'required|alpha_num',
        'suhu_palka'        => 'required|alpha_num',
        'nilai_organoleptik'=> 'required|alpha_num',
        'estimasi_berat'    => 'required|alpha_num',
        'tipe_kapal'        => 'required|string',
        'tgl_inspeksi'      => 'required|date',
        'pelabuhan_pangkalan'=> 'required|string',
        'kapal_aktif'       => 'required|string',
        'uraian'            => 'required|string',
        'catatan'           => 'required|string',
        'foto'              => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        'sertifikat'        => 'nullable|file|mimes:pdf|max:5120', // max 5MB
    ], [
        'required' => 'Field :attribute ini harus diisi!',
        'unique'   => 'Field :attribute harus unik!',
    ]);

    // ✅ Update field teks
    $kapal->update([
        'nama_kapal'        => $request->nama_kapal,
        'no_sertifikat'     => $request->no_sertifikat,
        'grade'             => $request->grade,
        'pemilik_id'        => $request->pemilik_id,
        'inspektur_id'      => Auth::user()->id, // user login
        'ukuran'            => $request->ukuran,
        'daerah_tangkap'    => $request->daerah_tangkap,
        'alat_tangkap'      => $request->alat_tangkap,
        'lama_trip'         => $request->lama_trip,
        'jenis_ikan'        => $request->jenis_ikan,
        'penanganan'        => $request->penanganan,
        'suhu'              => $request->suhu,
        'suhu_palka'        => $request->suhu_palka,
        'nilai_organoleptik'=> $request->nilai_organoleptik,
        'estimasi_berat'    => $request->estimasi_berat,
        'tipe_kapal'        => $request->tipe_kapal,
        'tgl_inspeksi'      => $request->tgl_inspeksi,
        'pelabuhan_pangkalan'=> $request->pelabuhan_pangkalan,
        'kapal_aktif'       => $request->kapal_aktif,
        'uraian'            => $request->uraian,
        'catatan'           => $request->catatan,
    ]);

    // ✅ Update Foto
    if ($request->hasFile('foto')) {
        if ($kapal->foto && Storage::disk(config('filesystems.default_public_disk'))->exists($kapal->foto)) {
            Storage::disk(config('filesystems.default_public_disk'))->delete($kapal->foto);
        }
        $file = $request->file('foto');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('img', $filename, config('filesystems.default_public_disk'));
        $kapal->foto = $path;
    }

    // ✅ Update Sertifikat
    if ($request->hasFile('sertifikat')) {
        
        if ($kapal->sertifikat && Storage::disk(config('filesystems.default_public_disk'))->exists($kapal->sertifikat)) {
            Storage::disk(config('filesystems.default_public_disk'))->delete($kapal->sertifikat);
        }
        $file = $request->file('sertifikat');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('doc', $filename, config('filesystems.default_public_disk'));
        $kapal->sertifikat = $path;
    }


    $kapal->save();

    return redirect('/dashboard')->with(['success' => 'Data kapal berhasil diupdate!']);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kapal $kapal)
    {
        $kapal->delete();
        return redirect('/dashboard')->with(['success' => 'Data berhasil terhapus !']);
    }
}


 