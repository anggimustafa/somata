@extends('dashboard.layout')

@section('innerpage')
<div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Admin Dashboard</h3>
                <h6 class="op-7 mb-2">Home</h6>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center"
                        >
                          <img src="img/Group1.png" alt="" srcset="">
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-3 border-start border-danger">
                        <div class="numbers">
                          <p class="card-category">Pendaftaran</p>
                          <h4 class="card-title"><b>{{ $pendaftars }}</b></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center"
                        >
                        <img src="img/Group2.png" alt="" srcset="">
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-3  border-start border-danger ">
                        <div class="numbers">
                          <p class="card-category">Kegiatan</p>
                          <h4 class="card-title"><b>10</b></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center"
                        >
                        <img src="img/Group3.png" alt="" srcset="">
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-3  border-start border-danger">
                        <div class="numbers">
                          <p class="card-category">Berita</p>
                          <h4 class="card-title"><b>4</b></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center"
                        >
                        <img src="img/Group4.png" alt="" srcset="">
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-3  border-start border-danger">
                        <div class="numbers">
                          <p class="card-category">Program Kerja</p>
                          <h4 class="card-title"><b>5</b></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Perbandingan Pendaftar</div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="myChartLegend"></div>
                    <div class="chart-container" style="min-height: 375px">
                      <canvas id="statisticsChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Kegiatan Terlaksana</div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="myChartLegend"></div>
                    <div id="chart-container">
                        <canvas id="doughnutChart"  style="width: 427px; height: 427px;"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              

            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Event Calendar</div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                                <th>Kegiatan</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Lokasi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                                <td>Rapat Pengurus Bulan Mei 2024</td>
                                <td><i class="fa-solid fa-circle fa-2xs" style="color: #ff0000;"></i>   Offline</td>
                                <td>5 Mei</td>
                                <td>13:30 WIB</td>
                                <td>Sekretariat</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                                <td>Bersih Bersih Sekretariat</td>
                                <td><i class="fa-solid fa-circle fa-2xs" style="color: #ff0000;"></i>   Offline</td>
                                <td>26 Mei</td>
                                <td>09:30 WIB</td>
                                <td>Sekretariat</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                                <td>Rapat Pengurus Bulan Juni</td>
                                <td><i class="fa-solid fa-circle fa-2xs" style="color: #ff0000;"></i>   Offline</td>
                                <td>5 Juni</td>
                                <td>13:30 WIB</td>
                                <td>Sekretariat</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                                <td>Latihan Rutin</td>
                                <td><i class="fa-solid fa-circle fa-2xs" style="color: #ff0000;"></i>   Offline</td>
                                <td>8 Juni</td>
                                <td>19:30 WIB</td>
                                <td>Sekretariat</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                                <td>Pembentukan Panitia Penerimaan Anggota Baru</td>
                                <td><i class="fa-solid fa-circle fa-2xs" style="color: #00ff33;"></i>   Online</td>
                                <td>12 Juni</td>
                                <td>19:30 WIB</td>
                                <td>Google Meet</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Notifikasi</div>
                    </div>
                  </div>
                  <div class="card-body" style="width: auto;height: 600px; overflow: auto;">
                    <img src="../img/notif.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
