@section('title')
Tabunganku
@endsection
@extends('headfoo')
@section('content')

      <!-- MAIN START -->
      <!-- FIRST ROW -->

      <!-- FIRST ROW END -->
      <content>

        <div class="container-fluid">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <ul class="breadcrumba">
              <li><a href="{{URL::route('beranda')}}">Beranda</a></li>
              <li><a href="{{URL::route('layanan')}}">Layanan</a></li>
              <li><a href="{{URL::route('tabungan')}}">Tabungan</a></li>
              <li>Tabunganku</li>
            </ul>

          </div>
          <div class="col-sm-1"></div>
        </div>
          <div class="container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

              <img src="{{ asset('image')}}/fix/karir/karir1.png" alt="Los Angeles" style="width:100%;">

        </div>
        <div class="col-sm-1"></div>
      </div>

          <!--BERITA-->
<br>
          <div class="container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
              <div class="content">
              <div class="center">
                <h5>
                  <b>SYARAT & KETENTUAN</b>
                </h5>
              </div>
              </div>
              <div class="pagecontent">
                <div class="contenta">
                  <div class="contenta">
                    <h5><b>Syarat & Ketentuan :</b></h5>
                         <ul>
                           <li>Tabungan yang bersifat perorangan,</li>
                           <li>Tingkat suku bunga 4,00% /tahun,</li>
                           <li>Transaksi dapat dilakukan sewaktu-waktu, </li>
                           <li>Setoran awal sebesar rp. 10.000,- </li>
                           <li>Setoran selanjutnya tidak ada pembatasan,</li>
                           <li>Jumlah minimum penarikan sebesar rp. 50.000,- kecuali pada saat nasabah ingin menutup rekening,</li>
                           <li>Saldo minimal rekening rp. 10.000,- </li>
                           <li>Bebas biaya administrasi setiap bulannya,</li>
                           <li>Biaya tutup rekening dikenai biaya administrasi sebesar rp. 5.000,-</li>


                            </ul>




                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-1"></div>

          </div>

        </content>
@endsection
