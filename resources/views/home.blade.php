@extends('layouts.app')
@extends('layouts.header')
@section('content')
  <div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
      <div class="col-lg-8 d-flex align-items-strech">
        <div class="card w-100">
          <div class="card-body">
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
              <div class="mb-3 mb-sm-0">
                <h5 class="card-title fw-semibold">Prosentase Penerima Beasiswa</h5>
              </div>
              <div>
                <select class="form-select">
                  <option value="1">March 2023</option>
                  <option value="2">April 2023</option>
                  <option value="3">May 2023</option>
                  <option value="4">June 2023</option>
                </select>
              </div>
            </div>
            <div id="chart"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="row">
          <div class="col-lg-12">
            <!-- Yearly Breakup -->
            <div class="card overflow-hidden">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Prosentase lolos</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3">15 Peserta</h4>
                    <div class="d-flex align-items-center">
                      <div class="me-4">
                        <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                        <span class="fs-2">Lolos</span>
                      </div>
                      <div>
                        <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                        <span class="fs-2">Pendaftar</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-center">
                      <div id="breakup"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <!-- Monthly Earnings -->
            <div class="card">
              <div class="card-body">
                <div class="row alig n-items-start">
                  <div class="col-8">
                    <h5 class="card-title mb-9 fw-semibold"> Monthly Earnings </h5>
                    <h4 class="fw-semibold mb-3">$6,820</h4>
                    <div class="d-flex align-items-center pb-1">
                      <span
                        class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                        <i class="ti ti-arrow-down-right text-danger"></i>
                      </span>
                      <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                      <p class="fs-3 mb-0">last year</p>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-end">
                      <div
                        class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                        <i class="ti ti-currency-dollar fs-6"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="earning"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <div class="mb-4">
              <h5 class="card-title fw-semibold">Timeline Beasiswa</h5>
            </div>
            <ul class="timeline-widget mb-0 position-relative mb-n5">
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">09/10/23</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1">Pembukaan Pendaftaran</div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">20/10/23</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1">Penutupan Pendaftaran
                </div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">21/10/23</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1">Seleksi Beasiswa</div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">26/10/23</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1">Data Penerima dikirim ke server
                </div>
              </li>
              <li class="timeline-item d-flex position-relative overflow-hidden">
                <div class="timeline-time text-dark flex-shrink-0 text-end">28/10/23</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                  <span class="timeline-badge-border d-block flex-shrink-0"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">Pengumuman Beasiswa
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Daftar Penerima Beasiswa</h5>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Id</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Nama dan Prodi</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">NIM</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Status</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">1</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">Fachry Rizky .P</h6>
                      <span class="fw-normal">Teknik Informatika</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">E41212057</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-success rounded-3 fw-semibold">Lolos</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">1</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">Fachry Rizky .P</h6>
                      <span class="fw-normal">Teknik Informatika</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">E41212057</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-success rounded-3 fw-semibold">Lolos</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">1</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">Fachry Rizky .P</h6>
                      <span class="fw-normal">Teknik Informatika</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">E41212057</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-success rounded-3 fw-semibold">Lolos</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">1</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">Fachry Rizky .P</h6>
                      <span class="fw-normal">Teknik Informatika</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">E41212057</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-success rounded-3 fw-semibold">Lolos</span>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>>
    <div class="py-6 px-6 text-center">
      <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
          class="pe-1 text-primary text-decoration-underline">AdminMart.com</a></p>
    </div>
  </div>
</div>
</div>
@endsection
