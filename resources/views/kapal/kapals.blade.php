<x-layout :title=$title>
<div class="py-4 px-4 mx-auto max-w-screen-xl lg:px-15">
    
<form class="mb-8 max-w-md mx-auto" action="">  
    @if (request('pemilik'))
    <input type="hidden" name='pemilik' value="{{ request('pemilik') }}">
    @endif

     @if (request('inspektur'))
    <input type="hidden" name='inspektur' value="{{ request('inspektur') }}">
    @endif
        
<label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"   xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search data" autofocus autocomplete="off" name="search" />
        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>
</form>  
{{ $kapals->links() }}
    <div class="mt-4 grid gap-8 lg:grid-cols-3 md:grid-cols-2">
        @forelse ($kapals as $kapal )
            @if (!@empty($kapal->no_sertifikat))
          <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
              <div class="flex justify-between items-center mb-5 text-gray-600">
              </div>
              <h2 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> <a href="/kapals/{{ $kapal['id'] }}" class="hover:underline">{{ $kapal->nama_kapal }}</a></h2>
              <a href="/kapals?pemilik={{ $kapal->inspektur->name }}"> 
                <span class="{{ $kapal->inspektur->color }} mt-0 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path d="M11 9a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"/>
                 <path fill-rule="evenodd" d="M9.896 3.051a2.681 2.681 0 0 1 4.208 0c.147.186.38.282.615.255a2.681 2.681 0 0 1 2.976 2.975.681.681 0 0 0 .254.615 2.681 2.681 0 0 1 0 4.208.682.682 0 0 0-.254.615 2.681 2.681 0 0 1-2.976 2.976.681.681 0 0 0-.615.254 2.682 2.682 0 0 1-4.208 0 .681.681 0 0 0-.614-.255 2.681 2.681 0 0 1-2.976-2.975.681.681 0 0 0-.255-.615 2.681 2.681 0 0 1 0-4.208.681.681 0 0 0 .255-.615 2.681 2.681 0 0 1 2.976-2.975.681.681 0 0 0 .614-.255ZM12 6a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z" clip-rule="evenodd"/>
                <path d="M5.395 15.055 4.07 19a1 1 0 0 0 1.264 1.267l1.95-.65 1.144 1.707A1 1 0 0 0 10.2 21.1l1.12-3.18a4.641 4.641 0 0 1-2.515-1.208 4.667 4.667 0 0 1-3.411-1.656Zm7.269 2.867 1.12 3.177a1 1 0 0 0 1.773.224l1.144-1.707 1.95.65A1 1 0 0 0 19.915 19l-1.32-3.93a4.667 4.667 0 0 1-3.4 1.642 4.643 4.643 0 0 1-2.53 1.21Z"/>
                </svg>
                Certificated
                </span></a>
            
            <a href="/kapals?inspektur={{ $kapal->inspektur->name }}">
              <div class="flex justify-between items-center">
                  <div class="flex items-center space-x-4">
                      {{-- <img class="w-7 h-7 rounded-full" 
                      src="{{ $kapal->inspektur->avatar ? asset('storage/' . $kapal->inspektur->avatar) : asset('img/default-avatar.png') }}" alt="{{ $kapal->nama_kapal }}" /> --}}

                      <span class=" mt-4 font-medium text-xs dark:text-white">
                         Validity period: {{ $kapal->tgl_inspeksi}}
                      </span>
                  </div></a>
                  <a href="/kapals/{{ $kapal->id }}" class="inline-flex text-xs items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                      Detail
                      <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
          </article> 
           @endif
           @empty
            <div>
                <p class="font-semibold text-sx my-4">  
                    Data not found!
                    <a href="/kapals" class="block text-blue-500 hover:underline">&laquo; Back to all reports.</a>
                </p>
            </div>
        @endforelse
      </div>  
  </div>
                    </div>
                </x-layout>
                   
                 
                
                
        
    