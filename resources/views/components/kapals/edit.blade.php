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
            {{-- <div class="mb-4">
                <label for="pemilik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pemilik</label><select name="pemilik_id" id="pemilik" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" disabled>
                <option selected="" value="">Select name</option>
                    @foreach (App\Models\Pemilik::get() as $pemilik )
                    <option value="{{ $pemilik->id }}" @selected((old('pemilik_id') ?? $pemilik->id) == $pemilik->id)>{{ $pemilik->nm_pemilik }}</option>
                    @endforeach
                    </select>
                    @error('pemilik_id')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                    @enderror
            </div> --}}
               <div class="mb-4">
                        <label for="no_sppd" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor SPPD</label>
                        <input type="text" name="no_sppd" id="no_sppd" class="@error('no_sppd') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type vessel" autofocus value="{{ old('no_sppd') ?? $kapal->sppd->no_sppd }}" disabled>
                        @error('no_sppd')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div> 

                 <div class="mb-4">
                        <label for="nm_pemilik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pemilik</label>
                        <input type="text" name="nm_pemilik" id="nm_pemilik" class="@error('nm_pemilik') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="{{ $kapal->pemilik->nm_pemilik }}" autofocus value="{{ old('nm_pemilik') ?? $kapal->pemilik->nm_pemilik }}" disabled>
                        @error('nm_pemilik')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div> 

                    <div class="mb-4">
                        <label for="nama_kapal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kapal</label>
                        <input type="text" name="nama_kapal" id="nama_kapal" class="@error('nama_kapal') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type vessel" autofocus value="{{ old('nama_kapal') ?? $kapal->nama_kapal }}" disabled>
                        @error('nama_kapal')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div> 

                    <div class="mb-4">
                        <label for="no_izin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Izin Kapal</label>
                        <input type="text" name="no_izin" id="no_izin" class="@error('no_izin') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type vessel" autofocus value="{{ old('no_izin') ?? $kapal->no_izin }}">
                        @error('no_izin')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div> 

                        <div class="mb-4">
                        <label for="no_sertifikat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Sertifikat</label>
                        <input type="text" name="no_sertifikat" id="no_sertifikat" class="@error('no_sertifikat') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type Certificate" value="{{ old('no_sertifikat') ?? $kapal->no_sertifikat }}">
                         @error('no_sertifikat')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                     <div class="mb-4">
                        <label for="masa_berlaku" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masa Berlaku Sampai Dengan</label>
                        <input type="date" name="masa_berlaku" id="masa_berlaku" class="@error('masa_berlaku') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type Certificate" value="{{ old('masa_berlaku') ?? $kapal->masa_berlaku }}">
                         @error('masa_berlaku')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

            <div class="mb-4">
                <label for="grade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Grade</label><select name="grade" id="grade" class="@error('grade') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected="" value="">Select Grade</option>
                    <option value="A" @selected(old('grade', $kapal->grade) == 'A')>A</option>
                    <option value="B" @selected(old('grade', $kapal->grade) == 'B')>B</option>
                    <option value="C" @selected(old('grade', $kapal->grade) == 'C')>C</option>
                    <option value="D" @selected(old('grade', $kapal->grade) == 'D')>D</option>
                    <option value="E" @selected(old('grade', $kapal->grade) == 'E')>E</option>
                    </select>
                    @error('grade')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                    @enderror
            </div>

             <div class="mb-4">
                <label for="sertifikat_abk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Awak Kapal Memiliki Sertifikat CPIB Kapal</label><select name="sertifikat_abk" id="sertifikat_abk" class="@error('sertifikat_abk') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected="" value="">Select sertifikat abk</option>
                       <option value="Memiliki" @selected(old('sertifikat_abk', $kapal->sertifikat_abk) == 'Memiliki')>Memiliki</option>
                    <option value="Proses" @selected(old('sertifikat_abk', $kapal->sertifikat_abk) == 'Proses')>Proses</option>
                    <option value="Tidak Memiliki" @selected(old('sertifikat_abk', $kapal->sertifikat_abk) == 'Tidak Memiliki')>Tidak Memiliki</option>
                    </select>
                    @error('sertifikat_abk')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                    @enderror
            </div>


             <div class="mb-4">
                <label for="sertifikat_qa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Personil Tetap Penanggung Jawab Mutu Memiliki Sertifikat QA</label><select name="sertifikat_qa" id="sertifikat_qa" class="@error('sertifikat_qa') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected="" value="">Select Sertifikat QA</option>
                     <option value="Memiliki" @selected(old('sertifikat_qa', $kapal->sertifikat_qa) == 'Memiliki')>Memiliki</option>
                    <option value="Proses" @selected(old('sertifikat_qa', $kapal->sertifikat_qa) == 'Proses')>Proses</option>
                    <option value="Tidak Memiliki" @selected(old('sertifikat_qa', $kapal->sertifikat_qa) == 'Tidak Memiliki')>Tidak Memiliki</option>
                    </select>
                    @error('sertifikat_qa')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                    @enderror
            </div>

             <div class="mb-4">
                <label for="manual_haccp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pedoman HACPP</label><select name="manual_haccp" id="manual_haccp" class="@error('manual_haccp') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected="" value="">Select manual_haccp</option>
                    <option value="Memiliki" @selected(old('manual_haccp', $kapal->manual_haccp) == 'Memiliki')>Memiliki</option>
                    <option value="Proses" @selected(old('manual_haccp', $kapal->manual_haccp) == 'Proses')>Proses</option>
                    <option value="Tidak Memiliki" @selected(old('manual_haccp', $kapal->manual_haccp) == 'Tidak Memiliki')>Tidak Memiliki</option>
                    </select>
                    @error('manual_haccp')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                    @enderror
            </div>

            {{-- Ukuran Kapal --}}
        <div class="mb-4">
                <label for="ukuran_kapal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ukuran Kapal</label><select name="ukuran_kapal" id="ukuran_kapal" class="@error('ukuran_kapal') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected="" value="">Select Ukuran Kapal</option>
                    <option value="< 5" @selected(old('ukuran_kapal', $kapal->ukuran_kapal) == '< 5')> &lt; 5 GT</option>
                    <option value="5-10" @selected(old('ukuran_kapal', $kapal->ukuran_kapal) == '5-10')> &gt; 5-10 GT</option>
                    <option value="30-100" @selected(old('ukuran_kapal', $kapal->ukuran_kapal) =='30-100')> &gt; 30-100 GT</option>
                    <option value="> 100" @selected(old('ukuran_kapal', $kapal->ukuran_kapal) == '> 100')> &gt; 100 GT</option>
                    </select>
                    @error('ukuran_kapal')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                    @enderror
        </div>

            {{-- Wilayah Penangkapan --}}
             <div class="mb-4">
                <label for="daerah_tangkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wilayah Tangkap</label><select name="daerah_tangkap" id="daerah_tangkap" class="@error('daerah_tangkap') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected="" value="">Wilayah Tangkap WPPRI/FAO</option>
                    <option value="WPP-RI 713,WPP-RI 573" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP-RI 713,WPP-RI 573')>WPP-RI 713,WPP-RI 573</option>
                    <option value="WPP-RI 573,WPP-RI 713" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP-RI 573,WPP-RI 713')>WPP-RI 573,WPP-RI 713</option>
                    <option value="Laut Lepas S. Hindia" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) =='Laut Lepas S. Hindia')>Laut Lepas S. Hindia</option>
                    <option value="Laut Lepas S. Hindia, WPP NRI 572, WPP NRI 573, ZEEI WPP NRI 572, ZEEI WPP NRI 573" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'Laut Lepas S. Hindia, WPP NRI 572, WPP NRI 573, ZEEI WPP NRI 572, ZEEI WPP NRI 573')>Laut Lepas S. Hindia, WPP NRI 572, WPP NRI 573, ZEEI WPP NRI 572, ZEEI WPP NRI 573</option>
                    <option value="Laut Lepas S. Hindia, ZEEI WPP NRI 572 (ZEEI S. Hindia Barat Sumatera), ZEEI WPP NRI 573 (ZEEI S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara dan ZEEI L. Timor bagian Barat)" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'Laut Lepas S. Hindia, ZEEI WPP NRI 572 (ZEEI S. Hindia Barat Sumatera), ZEEI WPP NRI 573 (ZEEI S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara dan ZEEI L. Timor bagian Barat)')>Laut Lepas S. Hindia, ZEEI WPP NRI 572 (ZEEI S. Hindia Barat Sumatera), ZEEI WPP NRI 573 (ZEEI S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara dan ZEEI L. Timor bagian Barat)</option>
                    <option value="Laut Lepas S. Hindia, ZEEI WPP NRI 572, ZEEI WPP NRI 573" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'Laut Lepas S. Hindia, ZEEI WPP NRI 572, ZEEI WPP NRI 573')>Laut Lepas S. Hindia, ZEEI WPP NRI 572, ZEEI WPP NRI 573</option>
                    <option value="WPP NRI 572 (S. Hindia Barat Sumatera dan Sl. Sunda), WPP NRI 573 (S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara L. Sawu dan L. Timor bagian Barat)" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 572 (S. Hindia Barat Sumatera dan Sl. Sunda), WPP NRI 573 (S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara L. Sawu dan L. Timor bagian Barat)')>WPP NRI 572 (S. Hindia Barat Sumatera dan Sl. Sunda), WPP NRI 573 (S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara L. Sawu dan L. Timor bagian Barat)</option>
                    <option value="WPP NRI 572, WPP NRI 573" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 572, WPP NRI 573')>WPP NRI 572, WPP NRI 573</option>
                    <option value="WPP NRI 572, WPP NRI 573, ZEEI WPP NRI 572, ZEEI WPP NRI 573" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 572, WPP NRI 573, ZEEI WPP NRI 572, ZEEI WPP NRI 573')>WPP NRI 572, WPP NRI 573, ZEEI WPP NRI 572, ZEEI WPP NRI 573</option>
                    <option value="WPP NRI 573" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 573')>WPP NRI 573</option>
                    <option value="WPP NRI 573 (S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara L. Sawu dan L. Timor bagian Barat)" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 573 (S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara L. Sawu dan L. Timor bagian Barat)')>WPP NRI 573 (S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara L. Sawu dan L. Timor bagian Barat)</option>
                    <option value="WPP NRI 573 (S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara L. Sawu dan L. Timor bagian Barat), ZEEI WPP NRI 573 (ZEEI S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara dan ZEEI L. Timor bagian Barat)" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 573 (S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara L. Sawu dan L. Timor bagian Barat), ZEEI WPP NRI 573 (ZEEI S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara dan ZEEI L. Timor bagian Barat)')>WPP NRI 573 (S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara L. Sawu dan L. Timor bagian Barat), ZEEI WPP NRI 573 (ZEEI S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara dan ZEEI L. Timor bagian Barat)</option>
                    <option value="WPP NRI 573 (S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara L. Sawu dan L. Timor bagian Barat), ZEEI WPP NRI 573 (ZEEI S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara dan ZEEI L. Timor bagian Barat) 150 mil keatas" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 573 (S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara L. Sawu dan L. Timor bagian Barat), ZEEI WPP NRI 573 (ZEEI S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara dan ZEEI L. Timor bagian Barat) 150 mil keatas')>WPP NRI 573 (S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara L. Sawu dan L. Timor bagian Barat), ZEEI WPP NRI 573 (ZEEI S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara dan ZEEI L. Timor bagian Barat) 150 mil keatas</option>
                    <option value="WPP NRI 573, ZEEI WPP NRI 573" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 573, ZEEI WPP NRI 573')>WPP NRI 573, ZEEI WPP NRI 573</option>
                    <option value="WPP NRI 713 (Sl. Makassar - Tl. Bone - L. Flores - dan L. Bali)" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 713 (Sl. Makassar - Tl. Bone - L. Flores - dan L. Bali)')>WPP NRI 713 (Sl. Makassar - Tl. Bone - L. Flores - dan L. Bali)</option>
                    <option value="WPP NRI 715 , WPP NRI 718, ZEEI WPP NRI 718" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 715 , WPP NRI 718, ZEEI WPP NRI 718')>WPP NRI 715 , WPP NRI 718, ZEEI WPP NRI 718</option>
                    <option value="WPP NRI 716, WPP NRI 717, ZEEI WPP NRI 716, ZEEI WPP NRI 717" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 716, WPP NRI 717, ZEEI WPP NRI 716, ZEEI WPP NRI 717')>WPP NRI 716, WPP NRI 717, ZEEI WPP NRI 716, ZEEI WPP NRI 717</option>
                    <option value="WPP NRI 718 (L. Aru - L. Arafura - dan L. Timor bagian Timur), ZEEI WPP NRI 718 (ZEEI L. Arafura dan ZEEI L. Timor bagian Timur)" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 718 (L. Aru - L. Arafura - dan L. Timor bagian Timur), ZEEI WPP NRI 718 (ZEEI L. Arafura dan ZEEI L. Timor bagian Timur)')>WPP NRI 718 (L. Aru - L. Arafura - dan L. Timor bagian Timur), ZEEI WPP NRI 718 (ZEEI L. Arafura dan ZEEI L. Timor bagian Timur)</option>
                    <option value="WPP NRI 718, ZEEI WPP NRI 718" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 718, ZEEI WPP NRI 718')>WPP NRI 718, ZEEI WPP NRI 718</option>
                    <option value="WPP NRI 718, ZEEI WPP NRI 718" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 718, ZEEI WPP NRI 718')>WPP NRI 718, ZEEI WPP NRI 718</option>
                    <option value="WPP NRI 718, ZEEI WPP NRI 718" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 718, ZEEI WPP NRI 718')>WPP NRI 718, ZEEI WPP NRI 718</option>
                    <option value="WPP NRI 718, ZEEI WPP NRI 718" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 718, ZEEI WPP NRI 718')>WPP NRI 718, ZEEI WPP NRI 718</option>
                    <option value="ZEEI WPP NRI 572, ZEEI WPP NRI 573" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'ZEEI WPP NRI 572, ZEEI WPP NRI 573')>ZEEI WPP NRI 572, ZEEI WPP NRI 573.</option>
                    <option value="ZEEI WPP NRI 573" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'ZEEI WPP NRI 573')>ZEEI WPP NRI 573</option>
                    <option value="ZEEI WPP NRI 573 (ZEEI S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara dan ZEEI L. Timor bagian Barat)" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'ZEEI WPP NRI 573 (ZEEI S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara dan ZEEI L. Timor bagian Barat)')>ZEEI WPP NRI 573 (ZEEI S. Hindia Selatan Jawa hingga Selatan Nusa Tenggara dan ZEEI L. Timor bagian Barat)</option>
                    <option value="ZEEI WPP NRI 716, ZEEI WPP NRI 717" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'ZEEI WPP NRI 716, ZEEI WPP NRI 717')>ZEEI WPP NRI 716, ZEEI WPP NRI 717</option>
                    <option value="ZEEI WPP NRI 718" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'ZEEI WPP NRI 718')>ZEEI WPP NRI 718</option>
                    <option value="ZEEI WPP NRI 718 (ZEEI L. Arafura dan ZEEI L. Timor bagian Timur)" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'ZEEI WPP NRI 718 (ZEEI L. Arafura dan ZEEI L. Timor bagian Timur)')>ZEEI WPP NRI 718 (ZEEI L. Arafura dan ZEEI L. Timor bagian Timur)</option>
                    <option value="WPP NRI 573-Perairan Samudera Hindia Sebelah Selatan Jawa hingga sebelah Selatan Nusa Tenggara, Laut Sawu dan Laut Timor Bagian Barat
                    " @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 573-Perairan Samudera Hindia Sebelah Selatan Jawa hingga sebelah Selatan Nusa Tenggara, Laut Sawu dan Laut Timor Bagian Barat
                    ')>WPP NRI 573-Perairan Samudera Hindia Sebelah Selatan Jawa hingga sebelah Selatan Nusa Tenggara, Laut Sawu dan Laut Timor Bagian Barat
                    </option>
                    <option value="WPP NRI 572, WPP NRI 573-Perairan Samudera Hindia Sebelah Barat Sumatera dan Selat Sunda, Perairan Samudera Hindia Sebelah Selatan Jawa hingga sebelah Selatan Nusa Tenggara, Laut Sawu dan Laut Timor Bagian Barat
                    " @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 572, WPP NRI 573-Perairan Samudera Hindia Sebelah Barat Sumatera dan Selat Sunda, Perairan Samudera Hindia Sebelah Selatan Jawa hingga sebelah Selatan Nusa Tenggara, Laut Sawu dan Laut Timor Bagian Barat
                    ')>WPP NRI 572, WPP NRI 573-Perairan Samudera Hindia Sebelah Barat Sumatera dan Selat Sunda, Perairan Samudera Hindia Sebelah Selatan Jawa hingga sebelah Selatan Nusa Tenggara, Laut Sawu dan Laut Timor Bagian Barat
                    </option>
                    <option value="WPP NRI 573, ZEEI WPP NRI 573-Perairan Samudera Hindia Sebelah Selatan Jawa hingga sebelah Selatan Nusa Tenggara, Laut Sawu dan Laut Timor Bagian Barat
                    " @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 573, ZEEI WPP NRI 573-Perairan Samudera Hindia Sebelah Selatan Jawa hingga sebelah Selatan Nusa Tenggara, Laut Sawu dan Laut Timor Bagian Barat
                    ')>WPP NRI 573, ZEEI WPP NRI 573-Perairan Samudera Hindia Sebelah Selatan Jawa hingga sebelah Selatan Nusa Tenggara, Laut Sawu dan Laut Timor Bagian Barat
                    </option>
                    <option value="WPP NRI 713 (Sl. Makassar - Tl. Bone - L. Flores - dan L. Bali)-Perairan Selat Makassar, Teluk Bone, Laut Flores, dan Laut Bali
                    " @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP NRI 713 (Sl. Makassar - Tl. Bone - L. Flores - dan L. Bali)-Perairan Selat Makassar, Teluk Bone, Laut Flores, dan Laut Bali
                    ')>WPP NRI 713 (Sl. Makassar - Tl. Bone - L. Flores - dan L. Bali)-Perairan Selat Makassar, Teluk Bone, Laut Flores, dan Laut Bali
                    </option>
                    <option value="Jalur Penangkapan Ikan II WPP NRI 573 Di Wilayah Administrasi Provinsi Bali, Jalur Penangkapan Ikan II WPP NRI 713 Di Wilayah Administrasi Provinsi Bali" @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'Jalur Penangkapan Ikan II WPP NRI 573 Di Wilayah Administrasi Provinsi Bali, Jalur Penangkapan Ikan II WPP NRI 713 Di Wilayah Administrasi Provinsi Bali')>Jalur Penangkapan Ikan II WPP NRI 573 Di Wilayah Administrasi Provinsi Bali, Jalur Penangkapan Ikan II WPP NRI 713 Di Wilayah Administrasi Provinsi Bali</option>
                    <option value="WPP-RI 573,WPP-RI 713-Perairan Samudera Hindia sebelah selatan Jawa hingga sebelah selatan Nusa Tenggara, Laut Sawu, dan Laut Timor bagian Barat), dan Laut Lepas (Samudera Hindia),Perairan Selat Makassar, Teluk Bone, Laut Flores, dan Laut Bali
                    " @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP-RI 573,WPP-RI 713-Perairan Samudera Hindia sebelah selatan Jawa hingga sebelah selatan Nusa Tenggara, Laut Sawu, dan Laut Timor bagian Barat), dan Laut Lepas (Samudera Hindia),Perairan Selat Makassar, Teluk Bone, Laut Flores, dan Laut Bali
                    ')>WPP-RI 573,WPP-RI 713-Perairan Samudera Hindia sebelah selatan Jawa hingga sebelah selatan Nusa Tenggara, Laut Sawu, dan Laut Timor bagian Barat), dan Laut Lepas (Samudera Hindia),Perairan Selat Makassar, Teluk Bone, Laut Flores, dan Laut Bali
                    </option>
                    <option value="WPP-RI 713,WPP-RI 573-Perairan Selat Makassar, Teluk Bone, Laut Flores, dan Laut Bali,Perairan Samudera Hindia sebelah selatan Jawa hingga sebelah selatan Nusa Tenggara, Laut Sawu, dan Laut Timor bagian Barat), dan Laut Lepas (Samudera Hindia)
                    " @selected(old('daerah_tangkap', $kapal->daerah_tangkap) == 'WPP-RI 713,WPP-RI 573-Perairan Selat Makassar, Teluk Bone, Laut Flores, dan Laut Bali,Perairan Samudera Hindia sebelah selatan Jawa hingga sebelah selatan Nusa Tenggara, Laut Sawu, dan Laut Timor bagian Barat), dan Laut Lepas (Samudera Hindia)
                    ')>WPP-RI 713,WPP-RI 573-Perairan Selat Makassar, Teluk Bone, Laut Flores, dan Laut Bali,Perairan Samudera Hindia sebelah selatan Jawa hingga sebelah selatan Nusa Tenggara, Laut Sawu, dan Laut Timor bagian Barat), dan Laut Lepas (Samudera Hindia)
                    </option>
                    </select>
                    @error('daerah_tangkap')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                    @enderror
            </div>

                    {{-- Lama Pelayaran --}}
                    <div class="mb-4">
                        <label for="lama_trip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lama Trip</label>
                        <input type="text" name="lama_trip" id="lama_trip" class="@error('lama_trip') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('lama_trip') ?? $kapal->lama_trip }}">
                         @error('lama_trip')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>
            {{-- Alat Tangkap --}}
                
                <div class="mb-4">
                <label for="alat_tangkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alat Penangkap</label><select name="alat_tangkap" id="alat_tangkap" class="@error('alat_tangkap') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected="" value="">Select Alat Tangkap</option>
                    <option value="Pengangkut" @selected(old('alat_tangkap', $kapal->alat_tangkap) == 'Pengangkut')>Pengangkut</option>
                    <option value="Pancing Ulur Tuna" @selected(old('alat_tangkap', $kapal->alat_tangkap) == 'Pancing Ulur Tuna')>Pancing Ulur Tuna</option>
                    <option value="Jala Jatuh Berkapal" @selected(old('alat_tangkap', $kapal->alat_tangkap) =='Jala Jatuh Berkapal')>Jala Jatuh Berkapal</option>
                    <option value="Jaring Insang Hanyut" @selected(old('alat_tangkap', $kapal->alat_tangkap) == 'Jaring Insang Hanyut')>Jaring Insang Hanyut</option>
                    <option value="Jaring Insang Tetap" @selected(old('alat_tangkap', $kapal->alat_tangkap) == 'Jaring Insang Tetap')>Jaring Insang Tetap</option>
                    <option value="Pancing Cumi" @selected(old('alat_tangkap', $kapal->alat_tangkap) == 'Pancing Cumi')>Pancing Cumi</option>
                    <option value="Pancing Ulur" @selected(old('alat_tangkap', $kapal->alat_tangkap) == 'Pancing Ulur')>Pancing Ulur</option>
                    <option value="Pukat Cincin Pelagis Besar Dengan Satu Kapal" @selected(old('alat_tangkap', $kapal->alat_tangkap) == 'Pukat Cincin Pelagis Besar Dengan Satu Kapal')>Pukat Cincin Pelagis Besar Dengan Satu Kapal</option>
                    <option value="Pukat Cincin Pelagis Kecil Dengan Satu Kapal" @selected(old('alat_tangkap', $kapal->alat_tangkap) == 'Pukat Cincin Pelagis Kecil Dengan Satu Kapal')>Pukat Cincin Pelagis Kecil Dengan Satu Kapal</option>
                    <option value="Rawai Dasar" @selected(old('alat_tangkap', $kapal->alat_tangkap) == 'Rawai Dasar')>Rawai Dasar</option>
                    <option value="Rawai Tuna" @selected(old('alat_tangkap', $kapal->alat_tangkap) == 'Rawai Tuna')>Rawai Tuna</option>
                    <option value="Pukat Cincin Pelagis Kecil 2 Kapal" @selected(old('alat_tangkap', $kapal->alat_tangkap) == 'Pukat Cincin Pelagis Kecil 2 Kapal')>Pukat Cincin Pelagis Kecil 2 Kapal</option>
                    </select>
                    @error('alat_tangkap')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                    @enderror
            </div>

                    {{-- hasil Tangkap --}}

                     <div class="mb-4">
                        <label for="hasil_tangkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil Tangkap</label>
                        <input type="text" name="hasil_tangkap" id="hasil_tangkap" class="@error('hasil_tangkap') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('hasil_tangkap') ?? $kapal->hasil_tangkap }}">
                         @error('hasil_tangkap')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Suhu Produk --}}
                    <div class="mb-4">
                        <label for="suhu_produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Suhu Produk</label>
                        <input type="text" name="suhu_produk" id="suhu_produk" class="@error('suhu_produk') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('suhu_produk') ?? $kapal->suhu_produk }}">
                         @error('suhu_produk')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- Suhu Palka --}}
                    <div class="mb-4">
                        <label for="suhu_palka" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Suhu Palka</label>
                        <input type="text" name="suhu_palka" id="suhu_palka" class="@error('suhu_palka') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('suhu_palka') ?? $kapal->suhu_palka }}">
                        @error('suhu_palka')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- Nilai Organoleptik --}}
                     <div class="mb-4">
                        <label for="nilai_organoleptik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nilai Organoleptik</label>
                        <input type="text" name="nilai_organoleptik" id="nilai_organoleptik" class="@error('nilai_organoleptik') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('nilai_organoleptik') ?? $kapal->nilai_organoleptik }}">
                        @error('nilai_organoleptik')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Jenis Produk --}}

            <div class="mb-4">
                <label for="jenis_produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Produk</label><select name="jenis_produk" id="jenis_produk" class="@error('jenis_produk') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected="" value="">Select Jenis Produk</option>
                    <option value="Frozen Cephalopod" @selected(old('jenis_produk', $kapal->jenis_produk) == 'Frozen Cephalopod')> Frozen Cephalopod</option>
                    <option value="Frozen Fish" @selected(old('jenis_produk', $kapal->jenis_produk) == 'Frozen Fish')>Frozen Fish</option>
                    <option value="Frozen Tuna, Frozen Pelagic Fish" @selected(old('jenis_produk', $kapal->jenis_produk) =='Frozen Tuna, Frozen Pelagic Fish')>Frozen Tuna, Frozen Pelagic Fish</option>
                    </select>
                    @error('jenis_produk')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                    @enderror
            </div>

            {{-- Estimasi Berat --}}
                    <div class="mb-4">
                        <label for="estimasi_berat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat Estimasi</label>
                        <input type="text" name="estimasi_berat" id="estimasi_berat" class="@error('estimasi_berat') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('estimasi_berat') ?? $kapal->estimasi_berat }}">
                        @error('estimasi_berat')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Jenis Kapal --}}
                     <div class="mb-4">
                <label for="jenis_kapal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kapal</label><select name="jenis_kapal" id="jenis_kapal" class="@error('jenis_kapal') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected="" value="">Select Jenis Kapal</option>
                    <option value="Penangkap" @selected(old('jenis_kapal', $kapal->jenis_kapal) == 'Penangkap')> Penangkap</option>
                    <option value="Pengangkut" @selected(old('jenis_kapal', $kapal->jenis_kapal) == 'Pengangkut')>Pengangkut</option>
                    <option value="Penampung" @selected(old('jenis_kapal', $kapal->jenis_kapal) == 'Penampung')>Penampung</option>
                    </select>
                    @error('jenis_kapal')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                    @enderror
            </div>
                    {{-- Pelabuhan Domisili --}}
                    <div class="mb-4">
                        <label for="pelabuhan_domisili" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pelabuhan Domisili/Asal</label>
                        <input type="text" name="pelabuhan_domisili" id="pelabuhan_domisili" class="@error('pelabuhan_domisili') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('pelabuhan_domisili') ?? $kapal->pelabuhan_domisili }}">
                        @error('pelabuhan_domisili')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                 {{-- Pelabuhan Sandar 1 --}}
                    <div class="mb-4">
                        <label for="pelabuhan_sandar_1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pelabuhan Sandar 1</label>
                        <input type="text" name="pelabuhan_sandar_1" id="pelabuhan_sandar_1" class="@error('pelabuhan_sandar_1') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('pelabuhan_sandar_1') ?? $kapal->pelabuhan_sandar_1 }}">
                        @error('pelabuhan_sandar_1')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Pelabuhan Sandar 2 --}}
                    <div class="mb-4">
                        <label for="pelabuhan_sandar_2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pelabuhan Sandar 2</label>
                        <input type="text" name="pelabuhan_sandar_2" id="pelabuhan_sandar_2" class="@error('pelabuhan_sandar_2') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('pelabuhan_sandar_2') ?? $kapal->pelabuhan_sandar_2 }}">
                        @error('pelabuhan_sandar_2')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Status Kapal Aktif / Tidak Aktif --}}
                     {{-- Alat Tangkap --}}
                
                <div class="mb-4">
                <label for="kapal_aktif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Kapal</label><select name="kapal_aktif" id="kapal_aktif" class="@error('kapal_aktif') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected="" value="">Select Aktif / Tidak Aktif</option>
                    <option value="Aktif" @selected(old('kapal_aktif', $kapal->kapal_aktif) == 'Aktif')>Aktif</option>
                    <option value="Tidak Aktif" @selected(old('kapal_Tidak ', $kapal->kapal_aktif) == 'Tidak Aktif')>Tidak Aktif</option>
                    </select>
                    @error('kapal_aktif')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                    @enderror
            </div>

                    {{-- Tanggal Inspeksi --}}
                    <div class="mb-4">
                        <label for="tgl_inspeksi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Inspeksi</label>
                        <input type="date" name="tgl_inspeksi" id="tgl_inspeksi" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('tgl_inspeksi') ?? $kapal->tgl_inspeksi }}">
                        @error('tgl_inspeksi')
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
                    <img class="rounded-sm w-36 h-36" src="{{ asset($kapal->foto)}}" alt="{{ $kapal->nama_kapal }}" id="foto-preview"> </div>
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
                    <img class="rounded-sm w-36 h-36" src="{{ asset('storage/' . $kapal->sertifikat) }}" alt="{{ $kapal->nama_kapal }}" id="foto-preview"> </div>
                    </div>
                
                <div class="flex gap-2">

                {{-- save upadate --}}
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


                