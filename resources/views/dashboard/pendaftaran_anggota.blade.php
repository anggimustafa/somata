@extends('dashboard.layout')

@section('innerpage')
<div class="d-flex justify-content-between">
  <h1 class="m-5">Pendaftaran Anggota</h1>
</div>

@isset($data_postingan)
  @if(!$data_postingan->isEmpty())
    <div class="col-12">
      <div class="card border-2 border-dark shadow my-3 mx-5">
        <div class="row">
          <div class="gambar-post col-4">
            <img src="{{ Storage::url($data_postingan->first()->url_gambar) }}" class="card-img" alt="" id="postinganImg">
          </div>
          <div class="col-8">
            <div class="card-body">
              <h5 class="card-title"><b>{{ $data_postingan->first()->judul }}</b></h5>
              <p class="card-text">{!! $data_postingan->first()->isi !!}</p>
              <div class="d-flex justify-content-between">
                <div>
                  <img class="d-inline" src="img/Frame.svg" alt="">&nbsp;&nbsp; Kategori {{ $data_postingan->first()->Nama_Kategori }} &nbsp;&nbsp;|&nbsp;&nbsp;
                  <img class="d-inline" src="img/Frame (1).svg" alt="">&nbsp;&nbsp; {{ strftime('%d %B %Y', strtotime($data_postingan->first()->tanggal_pembukaan_pendaftaran)) }} - {{ strftime('%d %B %Y', strtotime($data_postingan->first()->tanggal_penutupan_pendaftaran)) }}
                </div>
                <div>
                  <a class="btn btn-info mx-3" href="/tahap_administrasi?id={{ $data_user->Organisasi_id }}">
                    <h5>Lihat Pendaftar</h5>
                  </a>
                </div>
                  <div class="btn-hapus mx-3"><form action="{{ route('postingan.destroy', $data_postingan->first()->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus postingan ini?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">
                          <h5>Hapus Postingan</h5>
                      </button>
                  </form> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @else
  <div class="btn btn-outline-info m-5" data-bs-toggle="modal" data-bs-target="#rekrutmenModal">Buat Postingan Rekrutmen</div>
  @endif
@endisset


  <!-- Modal -->
<div class="modal fade" id="rekrutmenModal" tabindex="-1" aria-labelledby="rekrutmenModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rekrutmenModalLabel">Form Pembuatan Postingan Rekrutmen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="/postingan" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" placeholder="Masukkan judul" name="judul">
          </div>
          <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" id="kategori" name="kategori">
              @foreach($data_kategori as $kategori)
                <option value="{{$kategori->Kategori_id}}">{{$kategori->Nama_Kategori}}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="dateInput" class="form-label">Pembukaan Pendaftaran</label>
            <input type="date" class="form-control" id="dateInput" name="datePembukaan">
          </div>
          <div class="mb-3">
            <label for="dateInput" class="form-label">Penutupan Pendaftaran</label>
            <input type="date" class="form-control" id="dateInput" name="datePenutupan">
          </div>
          <div class="mb-3">
            <label for="isiPost" class="form-label">Isi Postingan</label>
            <input id="isiPost" type="hidden" name="isi">
            <trix-editor input="isiPost"></trix-editor>
          </div>
          <div class="mb-3">
            <label for="gambarPostingan" class="form-label">Gambar Postingan</label>
            <input class="form-control" type="file" id="gambarPostingan" name="gambar" required>
          </div>
          <input id="isiPost" type="hidden" name="organisasi_id" value="{{$data_user->Organisasi_id}}">
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
@endsection()