<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOMATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-body-light border-3 border-bottom ">
        <div class="container-fluid">
            <a class="navbar-brand mx-3" href="/beranda?nim={{$user->NIM}}">
                <img src="img/Logo Somata.png" width="150px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex justify-content-end collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link py-3 px-4  text-dark" href="#">Berita Terkini</a>
                    <a class="nav-link py-3 px-4  text-dark" href="#">Kategori Organisasi</a>
                    <a class="nav-link py-3 px-4  text-dark" href="#">Daftar Keanggotaan</a>
                    <a class="nav-link py-3 px-4  text-dark" href="#">Jadwal Kegiatan</a>
                </div>
            </div>
            <div class="d-flex justify-content-end mx-5">
                <a class="border border-dark rounded btn text-center" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#profilModal">
                    <img src="https://api.dicebear.com/9.x/adventurer/svg?seed={{$user->NIM}}" alt="" width="35px">
                    <span class="mx-2">Profil</span>
                </a>
            </div>
        </div>
    </nav>
    
  <div class="main-content">
    <div class="form-content">
        <h1 class="text-center mt-5"><b>Pendaftaran Anggota Baru</b></h1>
        <h6 class="text-center mt-2 mb-4">Daftar untuk menjadi bagian dari Organisasi</h6>

        <form action="/pendaftaran_anggota" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Motivasi Ikut Organisasi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="motivasi"></textarea>
            </div>
                <input type="hidden" name="nim" value="{{$user->NIM}}">
                <input type="hidden" name="postingan_id" value="{{$postingan_id}}">
            <button type="submit" class="btn btn-info" style="width:100%;"><b>Daftar</b></button>
        </form>
    </div>
  </div>
  <br><br><br><br><br><br><br><br>


    <!-- Modal -->
<div class="modal fade" id="profilModal" tabindex="-1" aria-labelledby="profilModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #bec2c2;">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background-color: #bec2c2;">
        <div class="row">
            <div class="col-6 mx-3 bg-light shadow rounded py-2" style="height:650px ;overflow-y:auto;">
                <h5 class="text-center"><b>Notifikasi</b></h5>
                @foreach ($notifikasi as $item)
                <div class="notif bg-secondary rounded text-light p-3 m-2">
                    <h5 class="mb-2">{{$item->judul}}</h5>
                    <div class="d-flex justify-content-start mb-2">
                        @if ($item->status == 'diterima')
                            <div class="btn btn-success mx-2">Diterima</div>
                        @endif
                        @if ($item->status == 'ditolak')
                            <div class="btn btn-danger mx-2">Ditolak</div>
                        @endif
                        <div class="btn btn-info mx-2">Tahap : {{$item->tahap}}</div>
                        <div class="btn btn-primary">Organisasi : {{$item->Nama_Organisasi}}</div>
                    </div>
                    <p class="mb-2">{{$item->isi}}</p>
                    <p class="border m-1 p-1">{{$item->grupWA}}</p>
                    <p>{{$item->langkah}}</p>

                </div>
                @endforeach
            </div>
            <div class="col-5  mx-3 bg-light shadow rounded py-2">
                <h5 class="text-center"><b>Profil</b></h5>
                <div class="d-flex justify-content-center mb-3">
                    <img src="https://api.dicebear.com/9.x/adventurer/svg?seed={{$user->NIM}}" alt="" style="border-radius:50px" width="200px">
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-4">
                        <p class="ms-3 p-1">Nama</p>
                        <p class="ms-3 p-1">NIM</p>
                        <p class="ms-3 p-1">Email</p>
                        <p class="ms-3 p-1">Fakultas</p>
                        <p class="ms-3 p-1">Jurusan</p>
                        <p class="ms-3 p-1">Angkatan</p>
                        <p class="ms-3 p-1">No.HP</p>
                        <p class="ms-3 p-1">Domisili</p>
                        </div>
                        <div class="col-8">
                        <p class="bg-light rounded shadow-sm p-1">{{$user->Nama_Lengkap}}</p>
                        <p class="bg-light rounded shadow-sm p-1">{{$user->NIM}}</p>
                        <p class="bg-light rounded shadow-sm p-1">{{$user->Email}}</p>
                        <p class="bg-light rounded shadow-sm p-1">{{$fakultas->Nama_Fakultas}}</p>
                        <p class="bg-light rounded shadow-sm p-1">{{$jurusan->Nama_Jurusan}}</p>
                        <p class="bg-light rounded shadow-sm p-1">{{$user->Angkatan}}</p>
                        <p class="bg-light rounded shadow-sm p-1">{{$user->No_HP}}</p>
                        <p class="bg-light rounded shadow-sm p-1">{{$user->Domisili}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer" style="background-color: #bec2c2;">
      <div class="d-flex justify-content-end">
            <a class="btn btn-danger text-light" href="/">Logout</a>
        </div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>