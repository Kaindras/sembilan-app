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
                       @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                    </ul>
                </div>
            </div>
        @endif --}}
            <!-- Modal body -->
            <form action="/dashboard" method="POST">
                @csrf

                {{-- No SPPD --}}
                <div class="mb-4">
                    <label for="no_sppd" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                        SPPD</label>
                    <input type="text" name="no_sppd" id="no_sppd"
                        class="@error('no_sppd') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type No Sppd" value="{{ old('no_sppd') }}">
                    @error('no_sppd')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Tugas SPPD --}}
                <div class="mb-4">

                    <label for="hal_tugas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tujuan
                        Tugas</label><select name="hal_tugas" id="hal_tugas"
                        class="@error('hal_tugas') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="" value="">Select Assigment</option>
                        <option value="CPIB Kapal" @selected(old('hal_tugas') == 'CPIB Kapal')>CPIB Kapal</option>
                        <option value="CBIB" @selected(old('hal_tugas') == 'CBIB')>CBIB</option>
                        <option value="CPIB" @selected(old('hal_tugas') == 'CPIB')>CPIB</option>
                        <option value="CPPIB" @selected(old('hal_tugas') == 'CPPIB')>CPPIB</option>
                        <option value="CPOIB" @selected(old('hal_tugas') == 'CP0IB')>CPPIB</option>
                        <option value="CDOIB" @selected(old('hal_tugas') == 'CDOIB')>CDOIB</option>
                        <option value="HACCP" @selected(old('hal_tugas') == 'HACPP')>HACCP</option>
                        <option value="SPDI" @selected(old('hal_tugas') == 'SPDI')>SPDI</option>
                        <option value="SKP" @selected(old('hal_tugas') == 'SKP')>SKP</option>
                    </select>
                    @error('hal_tugas')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Tanggal SPPD --}}
                <div class="mb-4">
                    <label for="tgl_sppd" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        SPPD</label>
                    <input type="date" name="tgl_sppd" id="tgl_sppd"
                        class="@error('tgl_sppd') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type" value="{{ old('tgl_sppd') }}">
                    @error('tgl_sppd')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Ketua Tim --}}
                <div class="mb-4">
                    <label for="nm_ketua" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ketua
                        Tim</label><select name="nm_ketua" id="nm_ketua"
                        class="@error('nm_ketua') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="" value="">Select Name</option>
                        <option value="Ni Desak Nyoman Pradnyani, S.St.Pi, M.Sc" @selected(old('nm_ketua') == 'Ni Desak Nyoman Pradnyani, S.St.Pi, M.Sc')>Ni Desak
                            Nyoman Pradnyani, S.St.Pi, M.Sc</option>
                        <option value="Kusmayadi, S.Pi, MP" @selected(old('nm_ketua') == 'Kusmayadi, S.Pi, MP')>Kusmayadi, S.Pi, MP</option>
                        <option value="Raden Gatot Perdana, A.Pi, M.MPi" @selected(old('nm_ketua') == 'Raden Gatot Perdana, A.Pi, M.MPi')>Raden Gatot
                            Perdana, A.Pi, M.MPi</option>
                        <option value="drh. Putu Eka Sudaryatma, Ph.D" @selected(old('nm_ketua') == 'drh. Putu Eka Sudaryatma, Ph.D')>drh. Putu Eka
                            Sudaryatma, Ph.D</option>
                        <option value="Ni Ketut Sri Widiarti, S.Pi" @selected(old('nm_ketua') == 'Ni Ketut Sri Widiarti, S.Pi')>Ni Ketut Sri Widiarti,
                            S.Pi</option>
                        <option value="Siti Nurlatifah, S.St.Pi, M.Si" @selected(old('nm_ketua') == 'Siti Nurlatifah, S.St.Pi, M.Si')>Siti Nurlatifah,
                            S.St.Pi, M.Si</option>
                        <option value="Ni Luh Sunarsih, S.St.Pi" @selected(old('nm_ketua') == 'Ni Luh Sunarsih, S.St.Pi')>Ni Luh Sunarsih, S.St.Pi
                        </option>
                        <option value="Octovianus, S.St.Pi, M.P" @selected(old('nm_ketua') == 'Octovianus, S.St.Pi, M.P')>Octovianus, S.St.Pi, M.P
                        </option>
                        <option value="Ni Ketut Wijasari, A.Md" @selected(old('nm_ketua') == 'Ni Ketut Wijasari, A.Md')>Ni Ketut Wijasari, A.Md
                        </option>
                        <option value="Pebrianto, A.Md" @selected(old('nm_ketua') == 'Pebrianto, A.Md')>Pebrianto, A.Md</option>
                        <option value="Imanuddin Razaq, S.Pi" @selected(old('nm_ketua') == 'Imanuddin Razaq, S.Pi')>Imanuddin Razaq, S.Pi
                        </option>
                        <option value="Sephia Anjani, S.Si" @selected(old('nm_ketua') == 'Sephia Anjani, S.Si')>Sephia Anjani, S.Si</option>
                        <option value="Aris Jatmiko, A.Md" @selected(old('nm_ketua') == 'Aris Jatmiko, A.Md')>Aris Jatmiko, A.Md</option>
                        <option value="drh. Adam Saba Anggara" @selected(old('nm_ketua') == 'drh. Adam Saba Anggara')>drh. Adam Saba Anggara
                        </option>
                        <option value="Ni Made Swigani Umita, S.Tr.Pi" @selected(old('nm_ketua') == 'Ni Made Swigani Umita, S.Tr.Pi')>Ni Made Swigani
                            Umita, S.Tr.Pi</option>
                        <option value="Heri Kurniawan, S.St.Pi., M.P" @selected(old('nm_ketua') == 'Heri Kurniawan, S.St.Pi., M.P')>Heri Kurniawan,
                            S.St.Pi., M.P</option>
                        <option value="Ari Tri Ramdhani" @selected(old('nm_ketua') == 'Ari Tri Ramdhani')>Ari Tri Ramdhani</option>
                        <option value="Yurike Kurnila Prastika" @selected(old('nm_ketua') == 'Yurike Kurnila Prastika')>Yurike Kurnila Prastika
                        </option>
                        <option value="Inna Safira" @selected(old('nm_ketua') == 'Inna Safira')>Inna Safira</option>
                        <option value="Lestari, S.Si" @selected(old('nm_ketua') == 'Lestari, S.Si')>Lestari, S.Si</option>
                    </select>
                    @error('nm_ketua')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span
                                class="font-medium">{{ $message }}</span></p>
                    @enderror
                </div>

                {{-- Anggota_1 Tim --}}
                <div class="mb-4">
                    <label for="nm_anggota_1"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Anggota Tim</label><select
                        name="nm_anggota_1" id="nm_anggota_1"
                        class="@error('nm_anggota_1') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="" value="">Select Name</option>
                        <option value="Ni Desak Nyoman Pradnyani, S.St.Pi, M.Sc" @selected(old('nm_anggota_1') == 'Ni Desak Nyoman Pradnyani, S.St.Pi, M.Sc')>Ni Desak
                            Nyoman Pradnyani, S.St.Pi, M.Sc</option>
                        <option value="Kusmayadi, S.Pi, MP" @selected(old('nm_anggota_1') == 'Kusmayadi, S.Pi, MP')>Kusmayadi, S.Pi, MP</option>
                        <option value="Raden Gatot Perdana, A.Pi, M.MPi" @selected(old('nm_anggota_1') == 'Raden Gatot Perdana, A.Pi, M.MPi')>Raden Gatot
                            Perdana, A.Pi, M.MPi</option>
                        <option value="drh. Putu Eka Sudaryatma, Ph.D" @selected(old('nm_anggota_1') == 'drh. Putu Eka Sudaryatma, Ph.D')>drh. Putu Eka
                            Sudaryatma, Ph.D</option>
                        <option value="Ni Ketut Sri Widiarti, S.Pi" @selected(old('nm_anggota_1') == 'Ni Ketut Sri Widiarti, S.Pi')>Ni Ketut Sri Widiarti,
                            S.Pi</option>
                        <option value="Siti Nurlatifah, S.St.Pi, M.Si" @selected(old('nm_anggota_1') == 'Siti Nurlatifah, S.St.Pi, M.Si')>Siti Nurlatifah,
                            S.St.Pi, M.Si</option>
                        <option value="Ni Luh Sunarsih, S.St.Pi" @selected(old('nm_anggota_1') == 'Ni Luh Sunarsih, S.St.Pi')>Ni Luh Sunarsih, S.St.Pi
                        </option>
                        <option value="Octovianus, S.St.Pi, M.P" @selected(old('nm_anggota_1') == 'Octovianus, S.St.Pi, M.P')>Octovianus, S.St.Pi, M.P
                        </option>
                        <option value="Ni Ketut Wijasari, A.Md" @selected(old('nm_anggota_1') == 'Ni Ketut Wijasari, A.Md')>Ni Ketut Wijasari, A.Md
                        </option>
                        <option value="Pebrianto, A.Md" @selected(old('nm_anggota_1') == 'Pebrianto, A.Md')>Pebrianto, A.Md</option>
                        <option value="Imanuddin Razaq, S.Pi" @selected(old('nm_anggota_1') == 'Imanuddin Razaq, S.Pi')>Imanuddin Razaq, S.Pi
                        </option>
                        <option value="Sephia Anjani, S.Si" @selected(old('nm_anggota_1') == 'Sephia Anjani, S.Si')>Sephia Anjani, S.Si</option>
                        <option value="Aris Jatmiko, A.Md" @selected(old('nm_anggota_1') == 'Aris Jatmiko, A.Md')>Aris Jatmiko, A.Md</option>
                        <option value="drh. Adam Saba Anggara" @selected(old('nm_anggota_1') == 'drh. Adam Saba Anggara')>drh. Adam Saba Anggara
                        </option>
                        <option value="Ni Made Swigani Umita, S.Tr.Pi" @selected(old('nm_anggota_1') == 'Ni Made Swigani Umita, S.Tr.Pi')>Ni Made Swigani
                            Umita, S.Tr.Pi</option>
                        <option value="Heri Kurniawan, S.St.Pi., M.P" @selected(old('nm_anggota_1') == 'Heri Kurniawan, S.St.Pi., M.P')>Heri Kurniawan,
                            S.St.Pi., M.P</option>
                        <option value="Ari Tri Ramdhani" @selected(old('nm_anggota_1') == 'Ari Tri Ramdhani')>Ari Tri Ramdhani</option>
                        <option value="Yurike Kurnila Prastika" @selected(old('nm_anggota_1') == 'Yurike Kurnila Prastika')>Yurike Kurnila Prastika
                        </option>
                        <option value="Inna Safira" @selected(old('nm_anggota_1') == 'Inna Safira')>Inna Safira</option>
                        <option value="Lestari, S.Si" @selected(old('nm_anggota_1') == 'Lestari, S.Si')>Lestari, S.Si</option>
                        <option value="Moh. Qosyim Ayyubi, S.Pi" @selected(old('nm_anggota_1') == 'Moh. Qosyim Ayyubi, S.Pi')>Moh. Qosyim Ayyubi, S.Pi
                        </option>
                        <option value="Febri Ansori, A.Md" @selected(old('nm_anggota_1') == 'Febri Ansori, A.Md')>Febri Ansori, A.Md</option>
                        <option value="M. Agus Mustakim, A.MdPi., S.Pi" @selected(old('nm_anggota_1') == 'M. Agus Mustakim, A.MdPi., S.Pi')>M. Agus
                            Mustakim, A.MdPi., S.Pi</option>
                        <option value="I Gede Yoga Vikananda Giri, S.Pi" @selected(old('nm_anggota_1') == 'I Gede Yoga Vikananda Giri, S.Pi')>I Gede Yoga
                            Vikananda Giri, S.Pi</option>
                    </select>
                    @error('nm_anggota_1')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span
                                class="font-medium">{{ $message }}</span></p>
                    @enderror
                </div>

                {{-- Anggota_2 Tim --}}
                <div class="mb-4">
                    <label for="nm_anggota_2"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Anggota 2</label><select
                        name="nm_anggota_2" id="nm_anggota_2"
                        class="@error('nm_anggota_2') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="" value="">Select Name</option>
                        <option value="Ni Desak Nyoman Pradnyani, S.St.Pi, M.Sc" @selected(old('nm_anggota_2') == 'Ni Desak Nyoman Pradnyani, S.St.Pi, M.Sc')>Ni Desak
                            Nyoman Pradnyani, S.St.Pi, M.Sc</option>
                        <option value="Kusmayadi, S.Pi, MP" @selected(old('nm_anggota_2') == 'Kusmayadi, S.Pi, MP')>Kusmayadi, S.Pi, MP</option>
                        <option value="Raden Gatot Perdana, A.Pi, M.MPi" @selected(old('nm_anggota_2') == 'Raden Gatot Perdana, A.Pi, M.MPi')>Raden Gatot
                            Perdana, A.Pi, M.MPi</option>
                        <option value="drh. Putu Eka Sudaryatma, Ph.D" @selected(old('nm_anggota_2') == 'drh. Putu Eka Sudaryatma, Ph.D')>drh. Putu Eka
                            Sudaryatma, Ph.D</option>
                        <option value="Ni Ketut Sri Widiarti, S.Pi" @selected(old('nm_anggota_2') == 'Ni Ketut Sri Widiarti, S.Pi')>Ni Ketut Sri
                            Widiarti,
                            S.Pi</option>
                        <option value="Siti Nurlatifah, S.St.Pi, M.Si" @selected(old('nm_anggota_2') == 'Siti Nurlatifah, S.St.Pi, M.Si')>Siti Nurlatifah,
                            S.St.Pi, M.Si</option>
                        <option value="Ni Luh Sunarsih, S.St.Pi" @selected(old('nm_anggota_2') == 'Ni Luh Sunarsih, S.St.Pi')>Ni Luh Sunarsih, S.St.Pi
                        </option>
                        <option value="Octovianus, S.St.Pi, M.P" @selected(old('nm_anggota_2') == 'Octovianus, S.St.Pi, M.P')>Octovianus, S.St.Pi, M.P
                        </option>
                        <option value="Ni Ketut Wijasari, A.Md" @selected(old('nm_anggota_2') == 'Ni Ketut Wijasari, A.Md')>Ni Ketut Wijasari, A.Md
                        </option>
                        <option value="Pebrianto, A.Md" @selected(old('nm_anggota_2') == 'Pebrianto, A.Md')>Pebrianto, A.Md</option>
                        <option value="Imanuddin Razaq, S.Pi" @selected(old('nm_anggota_2') == 'Imanuddin Razaq, S.Pi')>Imanuddin Razaq, S.Pi
                        </option>
                        <option value="Sephia Anjani, S.Si" @selected(old('nm_anggota_2') == 'Sephia Anjani, S.Si')>Sephia Anjani, S.Si</option>
                        <option value="Aris Jatmiko, A.Md" @selected(old('nm_anggota_2') == 'Aris Jatmiko, A.Md')>Aris Jatmiko, A.Md</option>
                        <option value="drh. Adam Saba Anggara" @selected(old('nm_anggota_2') == 'drh. Adam Saba Anggara')>drh. Adam Saba Anggara
                        </option>
                        <option value="Ni Made Swigani Umita, S.Tr.Pi" @selected(old('nm_anggota_2') == 'Ni Made Swigani Umita, S.Tr.Pi')>Ni Made Swigani
                            Umita, S.Tr.Pi</option>
                        <option value="Heri Kurniawan, S.St.Pi., M.P" @selected(old('nm_anggota_2') == 'Heri Kurniawan, S.St.Pi., M.P')>Heri Kurniawan,
                            S.St.Pi., M.P</option>
                        <option value="Ari Tri Ramdhani" @selected(old('nm_anggota_2') == 'Ari Tri Ramdhani')>Ari Tri Ramdhani</option>
                        <option value="Yurike Kurnila Prastika" @selected(old('nm_anggota_2') == 'Yurike Kurnila Prastika')>Yurike Kurnila Prastika
                        </option>
                        <option value="Inna Safira" @selected(old('nm_anggota_2') == 'Inna Safira')>Inna Safira</option>
                        <option value="Lestari, S.Si" @selected(old('nm_anggota_2') == 'Lestari, S.Si')>Lestari, S.Si</option>
                        <option value="Moh. Qosyim Ayyubi, S.Pi" @selected(old('nm_anggota_2') == 'Moh. Qosyim Ayyubi, S.Pi')>Moh. Qosyim Ayyubi, S.Pi
                        </option>
                        <option value="Febri Ansori, A.Md" @selected(old('nm_ketua') == 'Febri Ansori, A.Md')>Febri Ansori, A.Md</option>
                        <option value="M. Agus Mustakim, A.MdPi., S.Pi" @selected(old('nm_anggota_2') == 'M. Agus Mustakim, A.MdPi., S.Pi')>M. Agus
                            Mustakim, A.MdPi., S.Pi</option>
                        <option value="I Gede Yoga Vikananda Giri, S.Pi" @selected(old('nm_anggota_2') == 'I Gede Yoga Vikananda Giri, S.Pi')>I Gede Yoga
                            Vikananda Giri, S.Pi</option>
                        <option value="Renest Danardono, S.T., M.Kom" @selected(old('nm_anggota_2') == 'Renest Danardono, S.T., M.Kom')>Renest Danardono,
                            S.T., M.Kom</option>
                        <option value="Bakti Dwi Prasetiyono, S.Sos" @selected(old('nm_anggota_2') == 'Bakti Dwi Prasetiyono, S.Sos')>Bakti Dwi
                            Prasetiyono, S.Sos</option>
                        <option value="Ida Ayu Ratnaningsih, A.Md" @selected(old('nm_anggota_2') == 'Ida Ayu Ratnaningsih, A.Md')>Ida Ayu Ratnaningsih,
                            A.Md</option>
                        <option value="Eka Indra Supriyatna, A.Md" @selected(old('nm_anggota_2') == 'Eka Indra Supriyatna, A.Md')>Eka Indra Supriyatna,
                            A.Md</option>
                        <option value="Ni Made Nadiyani, S.E" @selected(old('nm_anggota_2') == 'Ni Made Nadiyani, S.E')>Ni Made Nadiyani, S.E
                        </option>
                        <option value="Efendi Setiawan, S.H" @selected(old('nm_anggota_2') == 'Efendi Setiawan, S.H')>Efendi Setiawan, S.H
                        </option>
                        <option value="I Dewa Gede Eka Saputra" @selected(old('nm_anggota_2') == 'I Dewa Gede Eka Saputra')>I Dewa Gede Eka Saputra
                        </option>
                        <option value="Gregori Rama Darantiah Ruing, S.T" @selected(old('nm_anggota_2') == 'Gregori Rama Darantiah Ruing, S.T')>Gregori Rama
                            Darantiah Ruing, S.T
                        </option>
                        <option value="Anjali Nur Shoimah" @selected(old('nm_anggota_2') == 'Anjali Nur Shoimah')>Anjali Nur Shoimah</option>
                        <option value="I Kadek Erce Kerthabumi" @selected(old('nm_anggota_2') == 'I Kadek Erce Kerthabumi')>I Kadek Erce Kerthabumi
                        </option>
                        <option value="Ida Ayu Mirah Meliana Dewi, S.Si" @selected(old('nm_anggota_2') == 'Ida Ayu Mirah Meliana Dewi, S.Si')>Ida Ayu Mirah
                            Meliana Dewi, S.Si</option>
                        <option value="Ni Putu Sinta Berliana, S.Si" @selected(old('nm_anggota_2') == 'Ni Putu Sinta Berliana, S.Si')>Ni Putu Sinta
                            Berliana, S.Si</option>
                        <option value="Alit Yosua Ellsabda" @selected(old('nm_anggota_2') == 'Alit Yosua Ellsabda')>Alit Yosua Ellsabda</option>
                        <option value="I Dewa Gede Alit Ardika, S.Si" @selected(old('nm_anggota_2') == 'I Dewa Gede AlitArdika, S.Si')>I Dewa Gede Alit
                            Ardika, S.Si</option>
                        <option value="Jujun Junaedi" @selected(old('nm_anggota_2') == 'Jujun Junaedi')>Jujun Junaedi</option>
                        <option value="Komang Ariadi Saputra" @selected(old('nm_anggota_2') == 'Komang Ariadi Saputra')>Komang Ariadi Saputra
                        </option>
                        <option value="A.A Mirah Puspitasari" @selected(old('nm_anggota_2') == 'A.A Mirah Puspitasari')>A.A Mirah Puspitasari
                        </option>
                        <option value="Abdul Mukti" @selected(old('nm_anggota_2') == 'Abdul Mukti')>Abdul Mukti</option>
                        <option value="Ketut Adiyasa Merya Saputra" @selected(old('nm_anggota_2') == 'Ketut Adiyasa Merya')>Ketut Adiyasa Merya
                            Saputra</option>
                        <option value="Yanto" @selected(old('nm_anggota_2') == 'Yanto')>Yanto</option>
                        <option value="Sri Wardani" @selected(old('nm_anggota_2') == 'Sri Wardani')>Sri Wardani</option>

                    </select>
                    @error('nm_anggota_2')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span
                                class="font-medium">{{ $message }}</span></p>
                    @enderror
                </div>

                {{-- Anggota_3 Tim --}}
                <div class="mb-4">
                    <label for="nm_anggota_3"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Anggota 3</label><select
                        name="nm_anggota_3" id="nm_anggota_3"
                        class="@error('nm_anggota_3') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="" value="">Select Name</option>
                        <option value="Ni Desak Nyoman Pradnyani, S.St.Pi, M.Sc" @selected(old('nm_anggota_3') == 'Ni Desak Nyoman Pradnyani, S.St.Pi, M.Sc')>Ni Desak
                            Nyoman Pradnyani, S.St.Pi, M.Sc</option>
                        <option value="Kusmayadi, S.Pi, MP" @selected(old('nm_anggota_3') == 'Kusmayadi, S.Pi, MP')>Kusmayadi, S.Pi, MP</option>
                        <option value="Raden Gatot Perdana, A.Pi, M.MPi" @selected(old('nm_anggota_3') == 'Raden Gatot Perdana, A.Pi, M.MPi')>Raden Gatot
                            Perdana, A.Pi, M.MPi</option>
                        <option value="drh. Putu Eka Sudaryatma, Ph.D" @selected(old('nm_anggota_3') == 'drh. Putu Eka Sudaryatma, Ph.D')>drh. Putu Eka
                            Sudaryatma, Ph.D</option>
                        <option value="Ni Ketut Sri Widiarti, S.Pi" @selected(old('nm_anggota_3') == 'Ni Ketut Sri Widiarti, S.Pi')>Ni Ketut Sri
                            Widiarti,
                            S.Pi</option>
                        <option value="Siti Nurlatifah, S.St.Pi, M.Si" @selected(old('nm_anggota_3') == 'Siti Nurlatifah, S.St.Pi, M.Si')>Siti Nurlatifah,
                            S.St.Pi, M.Si</option>
                        <option value="Ni Luh Sunarsih, S.St.Pi" @selected(old('nm_anggota_3') == 'Ni Luh Sunarsih, S.St.Pi')>Ni Luh Sunarsih,
                            S.St.Pi
                        </option>
                        <option value="Octovianus, S.St.Pi, M.P" @selected(old('nm_anggota_3') == 'Octovianus, S.St.Pi, M.P')>Octovianus, S.St.Pi,
                            M.P
                        </option>
                        <option value="Ni Ketut Wijasari, A.Md" @selected(old('nm_anggota_3') == 'Ni Ketut Wijasari, A.Md')>Ni Ketut Wijasari, A.Md
                        </option>
                        <option value="Pebrianto, A.Md" @selected(old('nm_anggota_3') == 'Pebrianto, A.Md')>Pebrianto, A.Md</option>
                        <option value="Imanuddin Razaq, S.Pi" @selected(old('nm_anggota_3') == 'Imanuddin Razaq, S.Pi')>Imanuddin Razaq, S.Pi
                        </option>
                        <option value="Sephia Anjani, S.Si" @selected(old('nm_anggota_3') == 'Sephia Anjani, S.Si')>Sephia Anjani, S.Si</option>
                        <option value="Aris Jatmiko, A.Md" @selected(old('nm_anggota_3') == 'Aris Jatmiko, A.Md')>Aris Jatmiko, A.Md</option>
                        <option value="drh. Adam Saba Anggara" @selected(old('nm_anggota_3') == 'drh. Adam Saba Anggara')>drh. Adam Saba Anggara
                        </option>
                        <option value="Ni Made Swigani Umita, S.Tr.Pi" @selected(old('nm_anggota_3') == 'Ni Made Swigani Umita, S.Tr.Pi')>Ni Made Swigani
                            Umita, S.Tr.Pi</option>
                        <option value="Heri Kurniawan, S.St.Pi., M.P" @selected(old('nm_anggota_3') == 'Heri Kurniawan, S.St.Pi., M.P')>Heri Kurniawan,
                            S.St.Pi., M.P</option>
                        <option value="Ari Tri Ramdhani" @selected(old('nm_anggota_3') == 'Ari Tri Ramdhani')>Ari Tri Ramdhani</option>
                        <option value="Yurike Kurnila Prastika" @selected(old('nm_anggota_3') == 'Yurike Kurnila Prastika')>Yurike Kurnila Prastika
                        </option>
                        <option value="Inna Safira" @selected(old('nm_anggota_3') == 'Inna Safira')>Inna Safira</option>
                        <option value="Lestari, S.Si" @selected(old('nm_anggota_3') == 'Lestari, S.Si')>Lestari, S.Si</option>
                        <option value="Moh. Qosyim Ayyubi, S.Pi" @selected(old('nm_anggota_3') == 'Moh. Qosyim Ayyubi, S.Pi')>Moh. Qosyim Ayyubi,
                            S.Pi
                        </option>
                        <option value="Febri Ansori, A.Md" @selected(old('nm_ketua') == 'Febri Ansori, A.Md')>Febri Ansori, A.Md</option>
                        <option value="M. Agus Mustakim, A.MdPi., S.Pi" @selected(old('nm_anggota_3') == 'M. Agus Mustakim, A.MdPi., S.Pi')>M. Agus
                            Mustakim, A.MdPi., S.Pi</option>
                        <option value="I Gede Yoga Vikananda Giri, S.Pi" @selected(old('nm_anggota_3') == 'I Gede Yoga Vikananda Giri, S.Pi')>I Gede Yoga
                            Vikananda Giri, S.Pi</option>
                        <option value="Renest Danardono, S.T., M.Kom" @selected(old('nm_anggota_3') == 'Renest Danardono, S.T., M.Kom')>Renest Danardono,
                            S.T., M.Kom</option>
                        <option value="Bakti Dwi Prasetiyono, S.Sos" @selected(old('nm_anggota_3') == 'Bakti Dwi Prasetiyono, S.Sos')>Bakti Dwi
                            Prasetiyono, S.Sos</option>
                        <option value="Ida Ayu Ratnaningsih, A.Md" @selected(old('nm_anggota_3') == 'Ida Ayu Ratnaningsih, A.Md')>Ida Ayu Ratnaningsih,
                            A.Md</option>
                        <option value="Eka Indra Supriyatna, A.Md" @selected(old('nm_anggota_3') == 'Eka Indra Supriyatna, A.Md')>Eka Indra Supriyatna,
                            A.Md</option>
                        <option value="Ni Made Nadiyani, S.E" @selected(old('nm_anggota_3') == 'Ni Made Nadiyani, S.E')>Ni Made Nadiyani, S.E
                        </option>
                        <option value="Efendi Setiawan, S.H" @selected(old('nm_anggota_3') == 'Efendi Setiawan, S.H')>Efendi Setiawan, S.H
                        </option>
                        <option value="I Dewa Gede Eka Saputra" @selected(old('nm_anggota_3') == 'I Dewa Gede Eka Saputra')>I Dewa Gede Eka Saputra
                        </option>
                        <option value="Gregori Rama Darantiah Ruing, S.T" @selected(old('nm_anggota_3') == 'Gregori Rama Darantiah Ruing, S.T')>Gregori Rama
                            Darantiah Ruing, S.T
                        </option>
                        <option value="Anjali Nur Shoimah" @selected(old('nm_anggota_3') == 'Anjali Nur Shoimah')>Anjali Nur Shoimah</option>
                        <option value="I Kadek Erce Kerthabumi" @selected(old('nm_anggota_3') == 'I Kadek Erce Kerthabumi')>I Kadek Erce Kerthabumi
                        </option>
                        <option value="Ida Ayu Mirah Meliana Dewi, S.Si" @selected(old('nm_anggota_3') == 'Ida Ayu Mirah Meliana Dewi, S.Si')>Ida Ayu Mirah
                            Meliana Dewi, S.Si</option>
                        <option value="Ni Putu Sinta Berliana, S.Si" @selected(old('nm_anggota_3') == 'Ni Putu Sinta Berliana, S.Si')>Ni Putu Sinta
                            Berliana, S.Si</option>
                        <option value="Alit Yosua Ellsabda" @selected(old('nm_anggota_3') == 'Alit Yosua Ellsabda')>Alit Yosua Ellsabda</option>
                        <option value="I Dewa Gede Alit Ardika, S.Si" @selected(old('nm_anggota_3') == 'I Dewa Gede AlitArdika, S.Si')>I Dewa Gede Alit
                            Ardika, S.Si</option>
                        <option value="Jujun Junaedi" @selected(old('nm_anggota_3') == 'Jujun Junaedi')>Jujun Junaedi</option>
                        <option value="Komang Ariadi Saputra" @selected(old('nm_anggota_3') == 'Komang Ariadi Saputra')>Komang Ariadi Saputra
                        </option>
                        <option value="A.A Mirah Puspitasari" @selected(old('nm_anggota_3') == 'A.A Mirah Puspitasari')>A.A Mirah Puspitasari
                        </option>
                        <option value="Abdul Mukti" @selected(old('nm_anggota_3') == 'Abdul Mukti')>Abdul Mukti</option>
                        <option value="Ketut Adiyasa Merya Saputra" @selected(old('nm_anggota_3') == 'Ketut Adiyasa Merya')>Ketut Adiyasa Merya
                            Saputra</option>
                        <option value="Yanto" @selected(old('nm_anggota_3') == 'Yanto')>Yanto</option>
                        <option value="Sri Wardani" @selected(old('nm_anggota_3') == 'Sri Wardani')>Sri Wardani</option>

                    </select>
                    @error('nm_anggota_3')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span
                                class="font-medium">{{ $message }}</span></p>
                    @enderror
                </div>

                {{-- Anggota_4 Tim --}}
                <div class="mb-4">
                    <label for="nm_anggota_4"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Anggota 4</label><select
                        name="nm_anggota_4" id="nm_anggota_4"
                        class="@error('nm_anggota_4') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="" value="">Select Name</option>
                        <option value="Ni Desak Nyoman Pradnyani, S.St.Pi, M.Sc" @selected(old('nm_anggota_4') == 'Ni Desak Nyoman Pradnyani, S.St.Pi, M.Sc')>Ni
                            Desak
                            Nyoman Pradnyani, S.St.Pi, M.Sc</option>
                        <option value="Kusmayadi, S.Pi, MP" @selected(old('nm_anggota_4') == 'Kusmayadi, S.Pi, MP')>Kusmayadi, S.Pi, MP</option>
                        <option value="Raden Gatot Perdana, A.Pi, M.MPi" @selected(old('nm_anggota_4') == 'Raden Gatot Perdana, A.Pi, M.MPi')>Raden Gatot
                            Perdana, A.Pi, M.MPi</option>
                        <option value="drh. Putu Eka Sudaryatma, Ph.D" @selected(old('nm_anggota_4') == 'drh. Putu Eka Sudaryatma, Ph.D')>drh. Putu Eka
                            Sudaryatma, Ph.D</option>
                        <option value="Ni Ketut Sri Widiarti, S.Pi" @selected(old('nm_anggota_4') == 'Ni Ketut Sri Widiarti, S.Pi')>Ni Ketut Sri
                            Widiarti,
                            S.Pi</option>
                        <option value="Siti Nurlatifah, S.St.Pi, M.Si" @selected(old('nm_anggota_4') == 'Siti Nurlatifah, S.St.Pi, M.Si')>Siti Nurlatifah,
                            S.St.Pi, M.Si</option>
                        <option value="Ni Luh Sunarsih, S.St.Pi" @selected(old('nm_anggota_4') == 'Ni Luh Sunarsih, S.St.Pi')>Ni Luh Sunarsih,
                            S.St.Pi
                        </option>
                        <option value="Octovianus, S.St.Pi, M.P" @selected(old('nm_anggota_4') == 'Octovianus, S.St.Pi, M.P')>Octovianus, S.St.Pi,
                            M.P
                        </option>
                        <option value="Ni Ketut Wijasari, A.Md" @selected(old('nm_anggota_4') == 'Ni Ketut Wijasari, A.Md')>Ni Ketut Wijasari, A.Md
                        </option>
                        <option value="Pebrianto, A.Md" @selected(old('nm_anggota_4') == 'Pebrianto, A.Md')>Pebrianto, A.Md</option>
                        <option value="Imanuddin Razaq, S.Pi" @selected(old('nm_anggota_4') == 'Imanuddin Razaq, S.Pi')>Imanuddin Razaq, S.Pi
                        </option>
                        <option value="Sephia Anjani, S.Si" @selected(old('nm_anggota_4') == 'Sephia Anjani, S.Si')>Sephia Anjani, S.Si</option>
                        <option value="Aris Jatmiko, A.Md" @selected(old('nm_anggota_4') == 'Aris Jatmiko, A.Md')>Aris Jatmiko, A.Md</option>
                        <option value="drh. Adam Saba Anggara" @selected(old('nm_anggota_4') == 'drh. Adam Saba Anggara')>drh. Adam Saba Anggara
                        </option>
                        <option value="Ni Made Swigani Umita, S.Tr.Pi" @selected(old('nm_anggota_4') == 'Ni Made Swigani Umita, S.Tr.Pi')>Ni Made Swigani
                            Umita, S.Tr.Pi</option>
                        <option value="Heri Kurniawan, S.St.Pi., M.P" @selected(old('nm_anggota_4') == 'Heri Kurniawan, S.St.Pi., M.P')>Heri Kurniawan,
                            S.St.Pi., M.P</option>
                        <option value="Ari Tri Ramdhani" @selected(old('nm_anggota_4') == 'Ari Tri Ramdhani')>Ari Tri Ramdhani</option>
                        <option value="Yurike Kurnila Prastika" @selected(old('nm_anggota_4') == 'Yurike Kurnila Prastika')>Yurike Kurnila Prastika
                        </option>
                        <option value="Inna Safira" @selected(old('nm_anggota_4') == 'Inna Safira')>Inna Safira</option>
                        <option value="Lestari, S.Si" @selected(old('nm_anggota_4') == 'Lestari, S.Si')>Lestari, S.Si</option>
                        <option value="Moh. Qosyim Ayyubi, S.Pi" @selected(old('nm_anggota_4') == 'Moh. Qosyim Ayyubi, S.Pi')>Moh. Qosyim Ayyubi,
                            S.Pi
                        </option>
                        <option value="Febri Ansori, A.Md" @selected(old('nm_ketua') == 'Febri Ansori, A.Md')>Febri Ansori, A.Md</option>
                        <option value="M. Agus Mustakim, A.MdPi., S.Pi" @selected(old('nm_anggota_4') == 'M. Agus Mustakim, A.MdPi., S.Pi')>M. Agus
                            Mustakim, A.MdPi., S.Pi</option>
                        <option value="I Gede Yoga Vikananda Giri, S.Pi" @selected(old('nm_anggota_4') == 'I Gede Yoga Vikananda Giri, S.Pi')>I Gede Yoga
                            Vikananda Giri, S.Pi</option>
                        <option value="Renest Danardono, S.T., M.Kom" @selected(old('nm_anggota_4') == 'Renest Danardono, S.T., M.Kom')>Renest Danardono,
                            S.T., M.Kom</option>
                        <option value="Bakti Dwi Prasetiyono, S.Sos" @selected(old('nm_anggota_4') == 'Bakti Dwi Prasetiyono, S.Sos')>Bakti Dwi
                            Prasetiyono, S.Sos</option>
                        <option value="Ida Ayu Ratnaningsih, A.Md" @selected(old('nm_anggota_4') == 'Ida Ayu Ratnaningsih, A.Md')>Ida Ayu Ratnaningsih,
                            A.Md</option>
                        <option value="Eka Indra Supriyatna, A.Md" @selected(old('nm_anggota_4') == 'Eka Indra Supriyatna, A.Md')>Eka Indra Supriyatna,
                            A.Md</option>
                        <option value="Ni Made Nadiyani, S.E" @selected(old('nm_anggota_4') == 'Ni Made Nadiyani, S.E')>Ni Made Nadiyani, S.E
                        </option>
                        <option value="Efendi Setiawan, S.H" @selected(old('nm_anggota_4') == 'Efendi Setiawan, S.H')>Efendi Setiawan, S.H
                        </option>
                        <option value="I Dewa Gede Eka Saputra" @selected(old('nm_anggota_4') == 'I Dewa Gede Eka Saputra')>I Dewa Gede Eka Saputra
                        </option>
                        <option value="Gregori Rama Darantiah Ruing, S.T" @selected(old('nm_anggota_4') == 'Gregori Rama Darantiah Ruing, S.T')>Gregori Rama
                            Darantiah Ruing, S.T
                        </option>
                        <option value="Anjali Nur Shoimah" @selected(old('nm_anggota_4') == 'Anjali Nur Shoimah')>Anjali Nur Shoimah</option>
                        <option value="I Kadek Erce Kerthabumi" @selected(old('nm_anggota_4') == 'I Kadek Erce Kerthabumi')>I Kadek Erce Kerthabumi
                        </option>
                        <option value="Ida Ayu Mirah Meliana Dewi, S.Si" @selected(old('nm_anggota_4') == 'Ida Ayu Mirah Meliana Dewi, S.Si')>Ida Ayu Mirah
                            Meliana Dewi, S.Si</option>
                        <option value="Ni Putu Sinta Berliana, S.Si" @selected(old('nm_anggota_4') == 'Ni Putu Sinta Berliana, S.Si')>Ni Putu Sinta
                            Berliana, S.Si</option>
                        <option value="Alit Yosua Ellsabda" @selected(old('nm_anggota_4') == 'Alit Yosua Ellsabda')>Alit Yosua Ellsabda</option>
                        <option value="I Dewa Gede Alit Ardika, S.Si" @selected(old('nm_anggota_4') == 'I Dewa Gede AlitArdika, S.Si')>I Dewa Gede Alit
                            Ardika, S.Si</option>
                        <option value="Jujun Junaedi" @selected(old('nm_anggota_4') == 'Jujun Junaedi')>Jujun Junaedi</option>
                        <option value="Komang Ariadi Saputra" @selected(old('nm_anggota_4') == 'Komang Ariadi Saputra')>Komang Ariadi Saputra
                        </option>
                        <option value="A.A Mirah Puspitasari" @selected(old('nm_anggota_4') == 'A.A Mirah Puspitasari')>A.A Mirah Puspitasari
                        </option>
                        <option value="Abdul Mukti" @selected(old('nm_anggota_4') == 'Abdul Mukti')>Abdul Mukti</option>
                        <option value="Ketut Adiyasa Merya Saputra" @selected(old('nm_anggota_4') == 'Ketut Adiyasa Merya')>Ketut Adiyasa Merya
                            Saputra</option>
                        <option value="Yanto" @selected(old('nm_anggota_4') == 'Yanto')>Yanto</option>
                        <option value="Sri Wardani" @selected(old('nm_anggota_4') == 'Sri Wardani')>Sri Wardani</option>

                    </select>
                    @error('nm_anggota_4')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span
                                class="font-medium">{{ $message }}</span></p>
                    @enderror
                </div>

                {{-- Data Pemilik --}}
                <div class="mb-4">
                    <label for="pemilik_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Pemilik</label><select name="pemilik_id" id="pemilik_id"
                        class="@error('pemilik_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="" value="">Select name</option>
                        @foreach (App\Models\Pemilik::get() as $pemilik)
                            <option value="{{ $pemilik->id }}" @selected(old('pemilik_id') == $pemilik->id)>
                                {{ $pemilik->nm_pemilik }}
                            </option>
                        @endforeach
                    </select>
                    @error('pemilik_id')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span
                                class="font-medium">{{ $message }}</span></p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="nama_kapal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Kapal</label>
                    <input type="text" name="nama_kapal" id="nama_kapal"
                        class="@error('nama_kapal') bg-red-50 bg-gray-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type vessel" value="{{ old('nama_kapal') }}">
                    @error('nama_kapal')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span
                                class="font-medium">{{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="flex gap-2">
                    <button type="submit"
                        class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd" />
                        </svg>
                        Add new Vessel
                    </button>
                    <a href="/dashboard"
                        class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                        <svg aria-hidden="true" class="w-5 h-5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        Cancel
                    </a>
                </div>
            </form>
        </div>





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
