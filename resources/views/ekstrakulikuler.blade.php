<x-layout>
          

    <div class="title">
        <h1 class="text-center">UNIT KEGIATAN MAHASISWA</h1>
        <p class="text-center">
          Beberapa Unit Kegiatan Mahasiswa Yang Ada di STT Cipasung
        </p>
      </div>


      <div class="container ekstrakulikuler">
        {{-- <a href="ukm/kelapa.html" class="perEkstrakulikuler"> --}}
        <a href ="{{url('/kelapa') }}" class="perEkstrakulikuler">
        {{-- <a class="nav-link" href="{{ url('/kelapa') }}"></a> --}}
          <img src="images/ukm/kelapa.png" alt="KELAPA" />
          <p>KELAPA</p>
        </a>

        <a href ="{{url('/kerohanian') }}" class="perEkstrakulikuler">
          <img src="images/ukm/kerohanian.png" alt="Kerohanian" />
          <p>Kerohanian</p>
        </a>

        <a href ="{{url('/olahraga') }}" class="perEkstrakulikuler">
          <img src="images/ukm/olahraga.png" alt="Olahraga" />
          <p>Olahraga</p>
        </a>

        <a href ="{{url('/silat') }}" class="perEkstrakulikuler">
          <img src="images/ukm/silat.png" alt="silat" />
          <p>Pencak Silat</p>
        </a>

        <a href ="{{url('/sanggar') }}" class="perEkstrakulikuler">
          <img src="images/ukm/sanggar.png" alt="Sanggar" />
          <p>Sanggar</p>
        </a>

        <a href ="{{url('/dignity') }}" class="perEkstrakulikuler">
          <img src="images/ukm/dignity.png" alt="Dignity" />
          <p>Dignity</p>
        </a>

        <a href ="{{url('/proclub') }}" class="perEkstrakulikuler">
          <img src="images/ukm/proclub.png" alt="ProClub" />
          <p>ProClub</p>
        </a>

        <a href ="{{url('/rilis') }}" class="perEkstrakulikuler">
          <img src="images/ukm/rilis.png" alt="Rilis" />
          <p>Rilis</p>
        </a>

        <a href ="{{url('/kdd') }}" class="perEkstrakulikuler">
          <img src="images/ukm/kdd.png" alt="KDD" />
          <p>KDD</p>
        </a>
      </div>

    </div>

    <br>
    <br>
    <br>

</x-layout>