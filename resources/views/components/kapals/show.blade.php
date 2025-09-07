<main class="pt-8 pb-8 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
            <a href="/dashboard" class="text-xs text-blue-500 hover:underline">&laquo; Back All Reports &raquo;</a>
              <address class="flex items-center mb-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      {{-- <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos"> --}}
                      <div>
                          <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $kapal->nama_kapal }}</a>
                          <p class="text-base text-gray-500 dark:text-gray-400">{{ $kapal->pemilik->nama }}</p>
                          <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Alamat : {{ $kapal->pemilik->alamat }}</time></p>
                          <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Tanggal Inspeksi : {{ $kapal->tgl_inspeksi }}</time></p>
                      </div>
                  </div>
              </address>
            </header>   

{{-- Gallery --}}


<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
        <img class="h-auto max-w-xs rounded-lg" src="{{ $kapal->foto ? asset('storage/' . $kapal->foto) : asset('img/kapal_01.jpeg') }}" alt="{{ $kapal->nama_kapal}}" id="foto-preview">
    </div>
    <div>
        
        @if($kapal->sertifikat)
        <embed src="{{ asset('storage/' . $kapal->sertifikat) }}" type="application/pdf" width="100%" height="300px" />
        @endif
        </div>
        <div>
            @if($kapal->sertifikat)
    <a href="{{ asset('storage/' . $kapal->sertifikat) }}" target="_blank">Lihat Sertifikat (PDF)</a>
   @endif

        </div>
</div>
            
          <h4>Data Inspeksi</h4>
          <table>
              <tbody>
                    <tr>
                    <td><strong>Nama Kapal</strong></td>
                    <td>{{ $kapal->nama_kapal }}</td>
                    </tr>

                    <tr>
                    <td><strong>Sertifikat</strong></td>
                    <td>{{ $kapal->no_sertifikat }}</td>
                    </tr>

                    <tr>
                    <td><strong>Grade</strong></td>
                    <td>{{ $kapal->grade }}</td>
                    </tr>

                <tr>
                     <td><strong>Ukuran</strong></td>
                    <td>{{ $kapal->ukuran}} M</td>
                    </tr>
                  
                     <tr>
                     <td><strong>Daerah Penangakapan</strong></td>
                    <td>{{ $kapal->daerah_tangkap}}</td>
                    </tr>

                     <tr>
                     <td><strong>Alat Tangkap</strong></td>
                    <td>{{ $kapal->alat_tangkap}}</td>
                    </tr>

                    <tr>
                     <td><strong>Lama Trip</strong></td>
                    <td>{{ $kapal->lama_trip}}</td>
                    </tr>
                     <tr>
                     <td><strong>Jenis Ikan</strong></td>
                    <td>{{ $kapal->jenis_ikan}}</td>
                    </tr>
                     <tr>
                     <td><strong>Penanganan</strong></td>
                    <td>{{ $kapal->penanganan}}</td>
                    </tr>
                     <tr>
                     <td><strong>Suhu</strong></td>
                    <td>{{ $kapal->suhu}}</td>
                    </tr>
                     <tr>
                     <td><strong>Suhu Palka</strong></td>
                    <td>{{ $kapal->suhu_palka}}</td>
                    </tr>
                     <tr>
                     <td><strong>Nilai Organoleptik</strong></td>
                    <td>{{ $kapal->nilai_organoleptik}}</td>
                    </tr>
                     <tr>
                     <td><strong>Estimasi Berat</strong></td>
                    <td>{{ $kapal->estimasi_berat}}</td>
                    </tr>
                     <tr>
                     <td><strong>Tipe Kapal</strong></td>
                    <td>{{ $kapal->tipe_kapal}}</td>
                    </tr>
                     <tr>
                     <td><strong>Tanggal Inspeksi</strong></td>
                    <td>{{ $kapal->tgl_inspeksi}}</td>
                    </tr>
                     <tr>
                     <td><strong>Pelabuhan Pangakalan</strong></td>
                    <td>{{ $kapal->pelabuhan_pangkalan}}</td>
                    </tr>
                     <tr>
                     <td><strong>Status Akfif</strong></td>
                    <td>{{ $kapal->kapal_aktif}}</td>
                    </tr>
                     <tr>
                     <td><strong>Uraian</strong></td>
                    <td>{{ $kapal->uraian}}</td>
                    </tr>

                    <tr>
                     <td><strong>Catatan Inspeksi</strong></td>
                    <td>{{ $kapal->catatan}}</td>
                    </tr>
                     <tr>
                     <td><strong>Petugas Inspeksi</strong></td>
                    <td>{{ $kapal->inspektur->name}}</td>
                    </tr>
               
                      
                    
                      
              </tbody>
          </table>
         <div class="flex gap-4 items-center">
                    <button type="button" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg aria-hidden="true" class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                        </svg>
                        Edit
                    </button>
                <button type="button" class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                    <svg aria-hidden="true" class="w-5 h-5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                    Delete
                </button>
            </div>
    <a href="/dashboard" class="text-xs text-blue-500 hover:underline">&laquo; Back All Reports &raquo;</a>
    </div>
</main>