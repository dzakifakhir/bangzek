@extends('admin.navbar.navbar')

@section('content')
	<!-- Page content -->
	<div class="container-fluid mt--6">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-header">
						<a href="{{ route('produk.post') }}">Add product</a>
					 </div>
					<div class="table-responsive">
						<!-- Projects table -->
						<table class="table table-bordered">
							<thead class="thead-dark">
								<tr>
									<th scope="col">#</th>
									<th scope="col">nama</th>
									<th scope="col">harga</th>
									<th scope="col">stock</th>
									<th scope="col">action</th>
								</tr>
							</thead>
							<tbody>
								<!-- Loop -->
								@php $no = 1; @endphp
								@forelse($product as $row)
								<tr>
									<th scope="row">
										{{ $loop->iteration }}
									</th>
									<td>
										{{ $row->nama }}
									</td>
									<td>
										{{ $row->harga_satuan }}
									</td>
                  <td>
                    {{ $row->stock }}
                  </td>
									<td>
										<div class="d-flex">
											<a href="{{ route('produk.edit', $row->id) }}" class="btn btn-warning btn-sm mx-2"><i class="fa fa-edit"></i></a>
											<form action="{{ route('produk.delete', $row->id) }}" method="POST">
												@csrf
												@method('delete')
												<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
											</form>
										</div>
									</td>
								</tr>
								@empty
								<tr>
									<td colspan="4" class="text-center">Empty</td>
								</tr>
								@endforelse
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
@endsection
