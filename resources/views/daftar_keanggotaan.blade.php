@php
    setlocale(LC_TIME, 'id_ID.utf8');
@endphp
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

    <div class="container-fluid">
        <div class="row mt-5 mx-5">
            <div class="d-flex">
                <h1 class="col-5 bg-info me-3 p-2" style="border-radius:5px"><b>DAFTAR KEANGGOTAAN</b></h3>
                <div class="col-7 garis">
                    <svg width="700px" height="5" viewBox="0 0 623 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.99758 1.5C1.16916 1.50134 0.498668 2.17399 0.500002 3.00242C0.501336 3.83084 1.17399 4.50133 2.00242 4.5L1.99758 1.5ZM2.00242 4.5L623.002 3.5L622.998 0.500002L1.99758 1.5L2.00242 4.5Z" fill="#04521C"/>
                    </svg>
                </div>
            </div>

    @isset($data_postingan)
        @if(!$data_postingan->isEmpty())
            @foreach ($data_postingan as $key => $postingan)
            <div class="card border-2 border-dark my-3">
                <div class="row">
                    <div class="gambar-post col-4">
                        <img src="{{ Storage::url($postingan->url_gambar) }}" class="card-img" alt="" id="postinganImg">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h5 class="card-title"><b>{{$postingan->judul}}</b></h5>
                            <p class="card-text">{!! $postingan->isi !!}</p>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <img class="d-inline" src="img/Frame.svg" alt="">&nbsp;&nbsp; Kategori {{$postingan->Nama_Kategori}} &nbsp;&nbsp;|&nbsp;&nbsp;
                                    <img class="d-inline" src="img/Frame (1).svg" alt="">&nbsp;&nbsp; {{ strftime('%d %B %Y', strtotime($postingan->tanggal_pembukaan_pendaftaran)) }} - {{ strftime('%d %B %Y', strtotime($postingan->tanggal_penutupan_pendaftaran)) }}
                                </div>
                                <div>
                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-key="{{ $key }}">
                                    <img class="d-flex justify-content-end" src="img/Frame (2).svg" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="text-center m-5 p-5" ><h3>Belum ada Rekrutmen Organisasi.</h3></div>
            @endif
    @endisset

        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content p-3">
    <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><b id="modal-judul"></b></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <img class="d-inline" src="img/Frame.svg" alt="">&nbsp;&nbsp; Kategori <span id="modal-kategori"></span> &nbsp;&nbsp;|&nbsp;&nbsp;
                    <img class="d-inline" src="img/Frame (1).svg" alt="">&nbsp;&nbsp; <span id="modal-tanggal-open"></span> - <span id="modal-tanggal-close"></span>
                </div>

                <div class="row mt-3">
                    <div class="col-6 p-3">
                        <img id="modal-gambar" src="" alt="" width="500px" style="border-radius:10px;">
                    </div>
                    <div class="col-6 p-3">
                        <p id="modal-isi"></p>
                    </div>
                </div>
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a id="join-button" href="#" type="button" class="btn btn-dark text-light">BERGABUNG MENJADI ANGGOTA <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</div>
    
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

@isset($data_postingan)
  @if(!$data_postingan->isEmpty())
<script>
    var modal = document.getElementById('exampleModal');
    modal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget; // Tombol yang diklik
        var key = button.getAttribute('data-key'); // Ambil nilai data-key dari tombol
        var postingan = @json($data_postingan); // Ubah data_postingan menjadi JSON
        var userNIM = "{{ $user->NIM }}"; // Get the user's NIM

        // Set nilai dari postingan yang sesuai ke dalam modal
        document.getElementById('modal-judul').textContent = postingan[key].judul;
        document.getElementById('modal-kategori').textContent = postingan[key].Nama_Kategori;
        document.getElementById('modal-tanggal-open').textContent = '{{ date('d F Y', strtotime($postingan->tanggal_pembukaan_pendaftaran)) }}';
        document.getElementById('modal-tanggal-close').textContent = '{{ date('d F Y', strtotime($postingan->tanggal_penutupan_pendaftaran)) }}';
        document.getElementById('modal-gambar').setAttribute('src', '{{ Storage::url('') }}' + postingan[key].url_gambar);
        document.getElementById('modal-isi').innerHTML = postingan[key].isi;
        document.getElementById('join-button').setAttribute('href', '/form_pendaftaran?nim=' + userNIM + '&postingan_id=' + postingan[key].id);
    });
</script>
    @else
    @endif
    @endisset

    <script src="https://kit.fontawesome.com/32e58e3754.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>