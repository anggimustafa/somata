@extends('dashboard.layout')

@section('innerpage')
<div class="d-flex justify-content-between">
  <h1 class="m-5">Pendaftaran Anggota</h1>
</div>

<div class="tombol mx-5">
    <div class="col-12 col-md-4 me-3 d-inline">
        <a href="/pendaftaran_selesai?id={{ $data_user->Organisasi_id }}" class="btn btn-outline-success">Pendaftaran Selesai</a>
    </div>
    <div class="col-12 col-md-4 me-3 d-inline">
        <a href="/tahap_wawancara?id={{ $data_user->Organisasi_id }}" class="btn btn-outline-primary">Tahap Wawancara</a>
    </div>
    <div class="col-12 col-md-4 d-inline">
        <a href="/tahap_administrasi?id={{ $data_user->Organisasi_id }}" class="btn btn-warning">Tahap Administrasi</a>
    </div>
</div>

<div class="container-table bg-light rounded shadow border m-5">
  <h2 class="m-3">Daftar Calon Anggota</h2>
  <div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Aksi</th>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Fakultas</th>\
        <th scope="col">Angkatan</th>
        <th scope="col">No.HP</th>
        <th scope="col">Domisili</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($list_mahasiswa as $key=> $mahasiswa)
      <tr>
          <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modaldata" data-key="{{$key}}" >
                  Lihat
              </button>
          </td>
          <td>{{$mahasiswa->NIM}}</td>
          <td>{{$mahasiswa->Nama_Lengkap}}</td>
          <td>{{$mahasiswa->Email}}</td>
          <td>{{$mahasiswa->Jurusan}}</td>
          <td>{{$mahasiswa->Fakultas}}</td>
          <td>{{$mahasiswa->Angkatan}}</td>
          <td>{{$mahasiswa->No_HP}}</td>
          <td>{{$mahasiswa->Domisili}}</td>
      </tr>
      @empty
      <tr>
          <td colspan="9">Tidak ada data mahasiswa</td>
      </tr>
    @endforelse
    </tbody>
  </table>
  </div>
</div>


<div class="modal fade" id="Modaldata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-4" id="exampleModalLabel"><b>Data Diri Calon Anggota Organisasi</b></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-5 border-end border-success border-3">
              <div class="d-flex justify-content-center">
                <img id="img-mahasiswa" src="" alt="" style="border-radius:50px" width="300px">
              </div>
              <div class="bg-primary text-light rounded text-center mt-2">
                <p>Motivasi Ikut Organiasi</p>
              </div>
              <div class="text-center" style="margin:auto">
                <p><span id="modal-motivasi"></span></p>
              </div>
              <div class="tombol d-flex justify-content-around">
                <button id="btn-terima" data-nim="" type="button" class="col-5 btn btn-success text-light" data-bs-toggle="modal" data-bs-target="#ModalPenerimaan">
                  <b>Terima</b>
                </button>
                <button id="btn-tolak" data-nim="" type="button" class="col-5 btn btn-danger text-light" data-bs-toggle="modal" data-bs-target="#ModalPenolakan">
                  <b>Tolak</b>
                </button>
              </div>
            </div>
            <div class="col-7">
              <div class="row">
                <div class="col-4">
                  <p class="ms-3 mb-5 p-1">Nama</p>
                  <p class="ms-3 mb-5 p-1">NIM</p>
                  <p class="ms-3 mb-5 p-1">Email</p>
                  <p class="ms-3 mb-5 p-1">Jurusan</p>
                  <p class="ms-3 mb-5 p-1">Fakultas</p>
                  <p class="ms-3 mb-5 p-1">Angkatan</p>
                  <p class="ms-3 mb-5 p-1">No.HP</p>
                  <p class="ms-3 mb-5 p-1">Domisili</p>
                </div>
                <div class="col-8">
                  <p class="mb-5 bg-light rounded shadow-sm p-1" id="modal-nama"></p>
                  <p class="mb-5 bg-light rounded shadow-sm p-1" id="modal-nim"></p>
                  <p class="mb-5 bg-light rounded shadow-sm p-1" id="modal-email"></p>
                  <p class="mb-5 bg-light rounded shadow-sm p-1" id="modal-jurusan"></p>
                  <p class="mb-5 bg-light rounded shadow-sm p-1" id="modal-fakultas"></p>
                  <p class="mb-5 bg-light rounded shadow-sm p-1" id="modal-angkatan"></p>
                  <p class="mb-5 bg-light rounded shadow-sm p-1" id="modal-no_hp"></p>
                  <p class="mb-5 bg-light rounded shadow-sm p-1" id="modal-domisili"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



  <!-- Modal Penerimaan -->
  <div class="modal fade" id="ModalPenerimaan" tabindex="-1" aria-labelledby="ModalPenerimaanLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalPenerimaanLabel">Form Penerimaan Anggota Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <span>NIM : </span><h3></h3>
          <form action="/notifikasi" method="POST">
            @csrf
              <input id="nim-terima" type="hidden" name="nim" value="">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Judul</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Isi Pemberitahuan</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi"></textarea>
            </div>
            <div class="mb-3">
              <label for="link_group_wa" class="form-label">Link Group WA</label>
              <input type="text" class="form-control" id="link_group_wa" placeholder="Enter link group WA" name="link">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Langkah Selanjutnya</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="langkah"></textarea>
            </div>
            <input type="hidden" name="organisasi_id" value="{{$data_user->Organisasi_id}}">
            <input type="hidden" name="status" value="diterima">
            <input type="hidden" name="tahap" value="administrasi">
            <button type="submit" class="btn btn-success">Kirim</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

   <!-- Modal Penolakan -->
   <div class="modal fade" id="ModalPenolakan" tabindex="-1" aria-labelledby="ModalPenerimaanLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalPenerimaanLabel">Form Penolakan Anggota Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <span>NIM : </span><h3></h3>
          <form action="/notifikasi" method="POST">
            @csrf
              <input id="nim-tolak" type="hidden" name="nim" value="">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Judul</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Isi Pemberitahuan</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi"></textarea>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Langkah Selanjutnya</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="langkah"></textarea>
            </div>
            <input type="hidden" name="organisasi_id" value="{{$data_user->Organisasi_id}}">
            <input type="hidden" name="status" value="ditolak">
            <input type="hidden" name="tahap" value="administrasi">
            <button type="submit" class="btn btn-success">Kirim</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="rekrutmenModal" tabindex="-1" aria-labelledby="rekrutmenModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rekrutmenModalLabel">Form Pembuatan Postingan Rekrutmen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" placeholder="Masukkan judul">
          </div>
          <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" id="kategori">
              <option selected>Pilih kategori</option>
              <option value="1">Kategori 1</option>
              <option value="2">Kategori 2</option>
              <option value="3">Kategori 3</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="rentangWaktu" class="form-label">Rentang Waktu Pendaftaran</label>
            <input type="text" class="form-control" id="rentangWaktu" placeholder="Masukkan rentang waktu pendaftaran">
          </div>
          <div class="mb-3">
            <label for="isiPost" class="form-label">Isi Postingan</label>
            <input id="isiPost" type="hidden" name="content">
            <trix-editor input="isiPost"></trix-editor>
          </div>
          <div class="mb-3">
            <label for="gambarPostingan" class="form-label">Gambar Postingan</label>
            <input class="form-control" type="file" id="gambarPostingan">
          </div>
          <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

  <script>
    var modal = document.getElementById('Modaldata');
    modal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget; // Tombol yang diklik
        var key = button.getAttribute('data-key'); // Ambil nilai data-key dari tombol
        var mahasiswa = @json($list_mahasiswa); // Ubah data_postingan); // Ubah data_postingan menjadi JSON
        var motivasi = @json($motivasi);

        
        // Set nilai dari postingan yang sesuai ke dalam modal
        document.getElementById('modal-nama').textContent = mahasiswa[key].Nama_Lengkap;
        document.getElementById('modal-nim').textContent = mahasiswa[key].NIM;
        document.getElementById('modal-email').textContent = mahasiswa[key].Email;
        document.getElementById('modal-jurusan').textContent = mahasiswa[key].Jurusan;
        document.getElementById('modal-fakultas').textContent = mahasiswa[key].Fakultas;
        document.getElementById('modal-angkatan').textContent = mahasiswa[key].Angkatan;
        document.getElementById('modal-no_hp').textContent = mahasiswa[key].No_HP;
        document.getElementById('modal-domisili').textContent = mahasiswa[key].Domisili;
        document.getElementById('modal-motivasi').textContent = motivasi[key];

        document.getElementById('btn-terima').setAttribute('data-nim', mahasiswa[key].NIM);
        document.getElementById('btn-tolak').setAttribute('data-nim', mahasiswa[key].NIM);
        document.getElementById('img-mahasiswa').setAttribute('src', 'https://avatar.iran.liara.run/public/' + mahasiswa[key].Jurusan_id);

        console.log(mahasiswa[key].Jurusan_id);
    });
</script>

  <script>
    $(document).ready(function() {
      $('#ModalPenerimaan').on('shown.bs.modal', function() {
        $('#exampleModal').css('z-index', parseInt($('#exampleModal').css('z-index')) - 10);
        $('#ModalPenerimaan').css('z-index', parseInt($('#ModalPenerimaan').css('z-index')) + 10);
      });

      $('#ModalPenerimaan').on('hidden.bs.modal', function() {
        $('#exampleModal').css('z-index', '');
      });
    });
  </script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var btnTerima = document.getElementById('btn-terima');
    var modalPenerimaan = document.getElementById('ModalPenerimaan');

    btnTerima.addEventListener('click', function() {
      var nim = this.getAttribute('data-nim');
      
      // Masukkan NIM ke dalam modal
      modalPenerimaan.querySelector('h3').textContent = nim;
      document.getElementById('nim-terima').value = nim;
    });
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var btnTolak = document.getElementById('btn-tolak');
    var modalPenolakan = document.getElementById('ModalPenolakan');

    btnTolak.addEventListener('click', function() {
      var nim = this.getAttribute('data-nim');
      
      // Masukkan NIM ke dalam modal
      modalPenolakan.querySelector('h3').textContent = nim;
      document.getElementById('nim-tolak').value = nim;
    });
  });
</script>
@endsection()