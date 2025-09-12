<x-layout :title=$title>
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <main class="pt-8 pb-8 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
    <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
    <a href="/kapals" class="text-xs text-blue-500 hover:underline">&laquo; Back All Reports &raquo;</a>
        <header class="mb-4 lg:mb-6 not-format">
              <address class="flex items-center mb-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      <div>
                        <div>
                            <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $kapal->nama_kapal }}</a>
                        <img class="h-auto max-w-xs rounded-lg" src="{{ asset('storage/' . $kapal->foto) }}" alt="{{ $kapal->nama_kapal}}" id="foto-preview">
                        </div>
                          
                          <p class="text-base text-gray-900 dark:text-gray-400">Pemilik : {{ $kapal->pemilik->nama }}</p>
                          <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Alamat : {{ $kapal->pemilik->alamat }}</time></p>
                          <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Tanggal Inspeksi : {{ $kapal->tgl_inspeksi }}</time></p>
                          <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Petugas Inspeksi :1. {{ $kapal->inspektur->name }}</time></p>
                          <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Petugas Inspeksi :2. {{ $kapal->inspektur->name }}</time></p>
                          <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Petugas Inspeksi :3. {{ $kapal->inspektur->name }}</time></p>
                          <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Petugas Inspeksi :4. {{ $kapal->inspektur->name }}</time></p>
                          
                      </div>
                  </div>
              </address>
            </header>


          <h4>Data Inspeksi</h4>
          {{-- <p>A serif is a small shape or projection that appears at the beginning or end of a stroke on a letter.
          </p> --}}
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
                    <td><strong>Masa Berlaku</strong></td>
                    <td>{{ $kapal->no_sertifikat }}</td>
                </tr>

                    <tr>
                    <td><strong>Grade</strong></td>
                    <td>{{ $kapal->grade }}</td>
                    </tr>
                    <tr>
                    <td><strong>Awak Kapal Bersertifikat CPIB Awak Kapal</strong></td>
                    <td>{{ $kapal->grade }}</td>
                    </tr>

                    <tr>
                    <td><strong>Memilik Personil Tetap Penanggung Jawab Mutu (QA)</strong></td>
                    <td>{{ $kapal->grade }}</td>
                    </tr>

                    <tr>
                    <td><strong>Mempunyai Manual HACPP</strong></td>
                    <td>{{ $kapal->grade }}</td>
                    </tr>

                    <tr>
                     <td><strong>Ukuran Kapal</strong></td>
                    <td>{{ $kapal->ukuran}} GT </td>
                    </tr>
                  
                     <tr>
                     <td><strong>Daerah Penangkapan</strong></td>
                    <td>WPPRI/ FAO {{ $kapal->daerah_tangkap}}</td>
                    </tr>

                <td><strong>Lama Trip</strong></td>
                    <td>{{ $kapal->lama_trip}}  Bulan</td>
                    </tr>
                <tr>
                   <td><strong>Alat Tangkap</strong></td>
                   <td>{{ $kapal->alat_tangkap}}</td>
                </tr>
                <tr>
                     <td><strong> Hasil Tangkapan</strong></td>
                    <td>Fresh / Frozen {{ $kapal->jenis_ikan}}</td>
                </tr>
                <tr>
                     <td><strong>Suhu Produk</strong></td>
                    <td> -{{ $kapal->suhu}} Celcius</td>
                </tr>
                     <tr>
                     <td><strong>Suhu Palka</strong></td>
                    <td>-{{ $kapal->suhu_palka}} Celcius</td>
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
                     <td><strong>Jenis Kapal</strong></td>
                    <td>{{ $kapal->tipe_kapal}}</td>
                    </tr>
                     <tr>
                     <td><strong>Tanggal_inspeksi</strong></td>
                    <td>{{ $kapal->tanggal_inspeksi}}</td>
                    </tr>
                    
                <tr>
                    <td><strong>Pelabuhan Domisili (Asal)</strong></td>
                    <td>{{ $kapal->pelabuhan_pangkalan}}</td>
                </tr>
                <tr>
                    <td><strong>Izin Pelabuhan Pangakalan (Sandar) 1. </strong></td>
                    <td>{{ $kapal->pelabuhan_pangkalan}}</td>
                </tr>

                   <tr>
                    <td><strong>Izin Pelabuhan Pangakalan (Sandar) 2. </strong></td>
                    <td>{{ $kapal->pelabuhan_pangkalan}}</td>
                </tr>
                     <tr>
                     <td><strong>Status Akfif</strong></td>
                    <td>{{ $kapal->kapal_aktif}}</td>
                    </tr>

                     {{-- <tr>
                     <td><strong>Uraian</strong></td>
                    <td>{{ $kapal->uraian}}</td>
                    </tr>
                    <tr>
                     <td><strong>Catatan Inspeksi</strong></td>
                    <td>{{ $kapal->catatan}}</td>
                    </tr> --}}
                     <tr>
                     <td><strong>Petugas Inspeksi</strong></td>
                    <td>{{ $kapal->inspektur->name}}</td>
                    </tr>
               
                      
                    
                      
              </tbody>
          </table>
    <a href="/kapals" class="text-xs text-blue-500 hover:underline">&laquo; Back All Reports &raquo;</a>
    </div>  
</main>
    </x-layout>
     
            