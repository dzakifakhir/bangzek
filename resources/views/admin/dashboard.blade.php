@extends('admin.navbar.navbar')

@section('content')
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Product</h5>
                      <span class="h2 font-weight-bold mb-0">{{ $total }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total users</h5>
                      <span class="h2 font-weight-bold mb-0">{{ $totalusers }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Transaction</h5>
                      <span class="h2 font-weight-bold mb-0">Rp {{ $transaction }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">harga</th>
                    <th scope="col">stock</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Loop -->
                  @forelse($prodct_list as $row)
                  <tr>
                    <th scope="row">
                      {{ Str::limit($row->nama) }}
                    </th>
                    <td>
                      {{ $row->harga_satuan }}
                    </td>
                    <td>
                      {{ $row->stock }}
                    </td>
                    <td>
                      {{ $row->created_at }}
                    </td>
                  </tr>
                  @empty
  								<tr>
  									<td colspan="4" class="text-center">Empty</td>
  								</tr>
								  @endforelse
                </tbody>
              </table>
              <div style="display:flex;justify-content:center;margin-top:25px;">
                  {{ $prodct_list->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
