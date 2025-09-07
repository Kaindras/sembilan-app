@push('style')
<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
<link
    href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
    rel="stylesheet"
/>
@endpush
        <div class="max-w-2xl relative p-4 bg-white rounded-lg border dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Edit Vessel</h3>
            </div>
            {{-- Validate Message --}}
        {{-- @if ($errors->any())
            <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <svg class="shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Danger</span>
                <div>
                    <span class="font-medium">Ensure that these requirements are met:</span>
                    <ul class="mt-1.5 list-disc list-inside">
                       @foreach ($errors->all() as $error )
                           <li>{{ $error }}</li>
                       @endforeach
                    </ul>
                </div>
            </div>
        @endif --}}
                
            
            
                <!-- Modal body -->
            <form action="/dashboard/{{ $kapal->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
            <div class="mb-4">
                <label for="pemilik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pemilik</label><select name="pemilik_id" id="pemilik" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                

                <option selected="" value="">Select name</option>
                    @foreach (App\Models\Pemilik::get() as $pemilik )
                    <option value="{{ $pemilik->id }}" @selected((old('pemilik_id') ?? $pemilik->id) == $pemilik->id)>{{ $pemilik->nama }}</option>
                    @endforeach
                    </select>
                    @error('pemilik_id')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                    @enderror
            </div>
                    <div class="mb-4">
                        <label for="nama_kapal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kapal</label>
                        <input type="text" name="nama_kapal" id="nama_kapal" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type vessel" autofocus value="{{ old('nama_kapal') ?? $kapal->nama_kapal }}">
                        @error('nama_kapal')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                        </div> 

                    <div class="mb-4">
                        <label for="no_sertifikat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Sertifikat</label>
                        <input type="text" name="no_sertifikat" id="no_sertifikat" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type Certificate" value="{{ old('no_sertifikat') ?? $kapal->no_sertifikat }}">
                         @error('no_sertifikat')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                     <div class="mb-4">
                        <label for="grade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Grade</label>
                        <input type="text" name="grade" id="grade" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type grade" value="{{ old('grade') ?? $kapal->grade }}">
                         @error('grade')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="ukuran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ukuran Kapal</label>
                        <input type="text" name="ukuran" id="ukuran" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('ukuran') ?? $kapal->ukuran }}">
                         @error('ukuran')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="daerah_tangkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Daerah Tangkap</label>
                        <input type="text" name="daerah_tangkap" id="daerah_tangkap" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('daerah_tangkap') ?? $kapal->daerah_tangkap }}">
                         @error('daerah_tangkap')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="alat_tangkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alat Tangkap</label>
                        <input type="text" name="alat_tangkap" id="alat_tangkap" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('alat_tangkap') ?? $kapal->alat_tangkap }}">
                         @error('alat_tangkap')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                     <div class="mb-4">
                        <label for="lama_trip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lama Trip</label>
                        <input type="text" name="lama_trip" id="lama_trip" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('lama_trip') ?? $kapal->lama_trip }}">
                         @error('lama_trip')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="jenis_ikan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Ikan</label>
                        <input type="text" name="jenis_ikan" id="jenis_ikan" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('jenis_ikan') ?? $kapal->jenis_ikan }}">
                         @error('jenis_ikan')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="penanganan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penanganan</label>
                        <input type="text" name="penanganan" id="penanganan" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('penanganan') ?? $kapal->penanganan }}">
                        @error('penanganan')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="suhu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Suhu</label>
                        <input type="text" name="suhu" id="suhu" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('suhu') ?? $kapal->suhu }}">
                        @error('suhu')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="suhu_palka" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Suhu Palka</label>
                        <input type="text" name="suhu_palka" id="suhu_palka" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('suhu_palka') ?? $kapal->suhu_palka }}">
                        @error('suhu_palka')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="nilai_organoleptik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nilai Organoleptik</label>
                        <input type="text" name="nilai_organoleptik" id="nilai_organoleptik" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('nilai_organoleptik') ?? $kapal->nilai_organoleptik }}">
                        @error('nilai_organoleptik')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="estimasi_berat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat Estimasi</label>
                        <input type="text" name="estimasi_berat" id="estimasi_berat" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('estimasi_berat') ?? $kapal->estimasi_berat }}">
                        @error('estimasi_berat')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="tipe_kapal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Kapal</label>
                        <input type="text" name="tipe_kapal" id="tipe_kapal" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('tipe_kapal') ?? $kapal->tipe_kapal }}">
                        @error('tipe_kapal')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="tgl_inspeksi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Inspeksi</label>
                        <input type="date" name="tgl_inspeksi" id="tgl_inspeksi" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('tgl_inspeksi') ?? $kapal->tgl_inspeksi }}">
                        @error('tgl_inspeksi')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                        
                    </div>

                    <div class="mb-4">
                        <label for="pelabuhan_pangkalan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pelabuhan Pangkalan</label>
                        <input type="text" name="pelabuhan_pangkalan" id="pelabuhan_pangkalan" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('pelabuhan_pangkalan') ?? $kapal->pelabuhan_pangkalan }}">
                        @error('pelabuhan_pangkalan')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="kapal_aktif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kapal Aktif</label>
                        <input type="boolean" name="kapal_aktif" id="kapal_aktif" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('kapal_aktif') ?? $kapal->kapal_aktif }}">
                        @error('kapal_aktif')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                  
                    <div class="sm:col-span-2 mb-4">
                        <label for="uraian" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Uraian Inspeksi</label><textarea name="uraian" id="uraian" rows="4" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write description here" value="{{ old('uraian') ?? $kapal->uraian }}"></textarea>
                        @error('uraian')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:col-span-2 mb-4">
                        <label for="catatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan Inspektur</label><textarea  name="catatan" id="catatan" rows="4" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write note here" value="{{ old('catatan') ?? $kapal->catatan }}"></textarea>
                        @error('catatan')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                               {{-- Upload Foto Kapal --}}
                <div class="pdf">
                    <label class="block mb-2 text-sm font-medium text-gray-800 dark:text-white" for="kapal">Upload Foto Kapal</label>
                    <input class="@error('foto') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="foto_help" id="foto" name="foto" type="file" accept="file/pdf, image/png, image/jpg, image/jpeg">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="foto_help"> .png or .jpg !</div> 
                   
                    @error('foto')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                    @enderror
                    <div>
                    <img class="rounded-sm w-36 h-36" src="{{ $kapal->foto ? asset($kapal->foto) : asset('/img/logo_navapp.png') }}" alt="{{ $kapal->nama_kapal }}" id="foto-preview"> </div>
                </div>

                {{-- Upload Sertifikat --}}
                <div class="pdf">
                    <label class="block mb-2 text-sm font-medium text-gray-800 dark:text-white" for="sertifikat">Upload Sertifikat</label>
                    <input class="@error('sertifikat') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="sertifikat_help" id="sertifikat" name="sertifikat" type="file">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="sertifikat_help"> File must.pdf !</div> 
                   
                     @error('sertifikat')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                    @enderror
                    <div>
                    <img class="rounded-sm w-36 h-36" src="{{ $kapal->sertifikat ? asset('/img/' . $kapal->sertifikat) : asset('/file/kapal_01.jpg') }}" alt="{{ $kapal->nama_kapal }}" id="foto-preview"> </div>
                    </div>
                
                <div class="flex gap-2">
                <button type="submit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Update Vessel
                </button>
                <a href="/dashboard" class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                    Cancel
                </a>
                </div>
            </form>
        </div>

                   
@push('script')
   
<script>
      const input = document.getElementById('foto');
  const previewPhoto = () => {
    const file = input.files;
    if (file) {
      const fileReader = new FileReader();
      const preview = document.getElementById('foto-preview');
      fileReader.onload = function(event) {
        preview.setAttribute('src', event.target.result);
      }
      fileReader.readAsDataURL(file[0]);
    }
  }
  input.addEventListener("change", previewPhoto);
</script>
{{-- <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
<script>
    FilePond.registerPlugin(FilePondPluginImagePreview);
    FilePond.registerPlugin(FilePondPluginFileValidateType);


    const inputElement = document.querySelector('#foto');
    const pond = FilePond.create(inputElement,{
            acceptedFileTypes: ['image/*'],
            maxFileSize: '2MB',

    });
</script> --}}

@endpush