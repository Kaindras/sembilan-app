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
                          
                          <p class="text-base text-gray-900 dark:text-gray-400">Pemilik : {{ $kapal->pemilik->nm_pemilik }}</p>
                          <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Nomor Izin : {{ $kapal->pemilik->siup }}</time></p>
                          <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Tanggal Inspeksi : {{ $kapal->tgl_inspeksi }}</time></p>
                          <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Petugas Inspeksi :1. {{ $kapal->sppd->nm_ketua }}</time></p>
                          <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Petugas Inspeksi :2. {{ $kapal->sppd->nm_anggota_1 }}</time></p>
                          <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Petugas Inspeksi :3. {{ $kapal->sppd->nm_anggota_2 }}</time></p>
                          <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Petugas Inspeksi :4. {{ $kapal->sppd->nm_anggota_3 }}</time></p>
                          
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
                        <td><strong>No Izin</strong></td>
                      <td>{{ $kapal->no_izin }}</td>
                    </tr>
                    
                    <tr>
                    <td><strong>Nomor Sertifikat</strong></td>
                    <td>{{ $kapal->no_sertifikat }}</td>
                    </tr>
                    <tr>
                        <td><strong>Download Sertifikat</strong></td>
                        <td>
            @if($kapal->sertifikat)
            <a href="{{ asset('storage/' . $kapal->sertifikat) }}" target="_blank">Lihat Sertifikat (PDF)</a>
             @endif</td>
                    </tr>

                <tr>
                    <td><strong>Masa Berlaku</strong></td>
                    <td>{{ $kapal->masa_berlaku }}</td>
                </tr>

                    <tr>
                    <td><strong>Grade</strong></td>
                    <td>{{ $kapal->grade }}</td>
                    </tr>
                    <tr>
                    <td><strong>Awak Kapal Bersertifikat CPIB Awak Kapal</strong></td>
                    <td>{{ $kapal->sertifikat_abk }}</td>
                    </tr>

                    <tr>
                    <td><strong>Memiliki Personil Tetap Penanggung Jawab Mutu (QA)</strong></td>
                    <td>{{ $kapal->sertifikat_qa}}</td>
                    </tr>

                    <tr>
                    <td><strong>Mempunyai Manual HACPP</strong></td>
                    <td>{{ $kapal->manual_haccp }}</td>
                    </tr>

                    <tr>
                     <td><strong>Ukuran Kapal</strong></td>
                    <td>{{ $kapal->ukuran_kapal}} GT </td>
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
                    <td>Fresh / Frozen {{ $kapal->hasil_tangkap}}</td>
                </tr>
                <tr>
                     <td><strong>Suhu Produk</strong></td>
                    <td> -{{ $kapal->suhu_produk}} Celcius</td>
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
                    <td>{{ $kapal->estimasi_berat}} Ton</td>
                    </tr>
                     <tr>
                     <td><strong>Jenis Produk</strong></td>
                    <td>{{ $kapal->jenis_produk }}</td>
                    </tr>
                     <tr>
                     <td><strong>Jenis Kapal</strong></td>
                    <td>{{ $kapal->jenis_kapal}}</td>
                    </tr>
                  
                    
                <tr>
                    <td><strong>Pelabuhan Domisili (Asal)</strong></td>
                    <td>{{ $kapal->pelabuhan_domisili }}</td>
                </tr>
                <tr>
                    <td><strong>Izin Pelabuhan Pangakalan (Sandar) </strong></td>
                     <td>{{ $kapal->pelabuhan_sandar_1 }} - {{ $kapal->pelabuhan_sandar_2 }}</td>
                </tr>
                     <tr>
                     <td><strong>Status Akfif</strong></td>
                    <td>{{ $kapal->kapal_aktif}}</td>
                    </tr>
                       <tr>
                    <td><strong>Tanggal_inspeksi</strong></td>
                    <td>{{ $kapal->tgl_inspeksi}}</td>
                    </tr>
                     {{-- <tr>
                     <td><strong>Petugas Inspeksi</strong></td>
                    <td>{{ $kapal->sppd->nm_ketua}}</td>
                    </tr> --}}
               
                      
                    
                      
              </tbody>
          </table>
    <a href="/kapals" class="text-xs text-blue-500 hover:underline">&laquo; Back All Reports &raquo;</a>
    </div>  
</main>
    </x-layout>
     
            