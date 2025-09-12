        <!-- Modal content -->
        <div class="max-w-2xl relative p-4 bg-white rounded-lg border dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Add Vessel</h3>
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
            <form action="/dashboard" method="POST">
                @csrf
          


           

             <div class="mb-4">
                <label for="sppd_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor SPPD</label><select name="sppd_id" id="sppd" class="@error('sppd_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected="" value="">Select name</option>
                    @foreach (App\Models\Sppd::get() as $sppd )
                    <option value="{{ $sppd->id }}" @selected(old('sppd_id') == $sppd->id)>{{ $sppd->no_sppd }}</option>
                    @endforeach
                    </select>
                    @error('sppd_id')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                    @enderror
            </div>
        

            <div class="mb-4">
                <label for="pemilik_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pemilik</label><select name="pemilik_id" id="pemilik" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected="" value="">Select name</option>
                    @foreach (App\Models\Pemilik::get() as $pemilik )
                    <option value="{{ $pemilik->id }}" @selected(old('pemilik_id') == $pemilik->id)>{{ $pemilik->nama }}</option>
                    @endforeach
                    </select>
                    @error('pemilik_id')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                    @enderror
            </div>
                    <div class="mb-4">
                        <label for="nama_kapal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kapal</label>
                        <input type="text" name="nama_kapal" id="nama_kapal" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type vessel" value="{{ old('nama_kapal') }}">
                        @error('nama_kapal')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
                    </div> 


                <div class="flex gap-2">
                <button type="submit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    Add new Vessel
                </button>
                <a href="/dashboard" class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                    <svg aria-hidden="true" class="w-5 h-5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                    Cancel
                </a>
                </div>
            </form>
        </div>

                   

   
{{-- {{ var_dump($pemiliks) }} --}}

      {{-- SPPD
            
            <div class="mb-4">
                        <label for="hal_tugas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor SPPD</label>
                        <input type="text" name="hal_tugas" id="hal_tugas" class="@error('pemilik_id') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type vessel" value="{{ old('hal_tugas') }}">
                        @error('hal_tugas')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
            </div> 

            <div class="mb-4">
                        <label for="tgl_tugas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Inspeksi</label>
                        <input type="date" name="tgl_tugas" id="tgl_tugas" class="@error('tgl_tugas') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type" value="{{ old('tgl_tugas') }}">
                        @error('tgl_tugas')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
             </div>

             <div class="mb-4">
                        <label for="nm_ketua" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ketua Tim Petugas</label>
                        <input type="text" name="nm_ketua" id="nm_ketua" class="@error('nm_ketua') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type vessel" value="{{ old('nm_ketua') }}">
                        @error('nm_ketua')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
            </div> 

            <div class="mb-4">
                        <label for="nm_anggota_1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Anggota 1</label>
                        <input type="text" name="nm_anggota_1" id="nm_anggota_1" class="@error('nm_anggota_1') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type vessel" value="{{ old('nm_anggota_1') }}">
                        @error('nm_anggota_1')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
            </div> 

            <div class="mb-4">
                        <label for="nm_anggota_2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Anggota 2</label>
                        <input type="text" name="nm_anggota_2" id="nm_anggota_2" class="@error('nm_anggota_2') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type vessel" value="{{ old('nm_anggota_2') }}">
                        @error('nm_anggota_2')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
            </div> 

            <div class="mb-4">
                        <label for="nm_anggota_3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Anggota 3</label>
                        <input type="text" name="nm_anggota_3" id="nm_anggota_3" class="@error('nm_anggota_3') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type vessel" value="{{ old('nm_anggota_3') }}">
                        @error('nm_anggota_3')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
            </div> 
                    <div class="mb-4">
                        <label for="nm_anggota_4" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Anggota 4</label>
                        <input type="text" name="nm_anggota_4" id="nm_anggota_4" class="@error('nm_anggota_4') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type vessel" value="{{ old('nm_anggota_4') }}">
                        @error('nm_anggota_4')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                        @enderror
            </div>  --}}