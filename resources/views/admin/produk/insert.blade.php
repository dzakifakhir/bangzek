@extends('admin.navbar.navbar')

@section('content')
	<!-- Page content -->
	<div class="container-fluid mt--12">
		<div class="row">
			<div class="col-xl-12">
				<div class="card-fluid">
          <p></p>
          <h2>Tambah</h2>
          @if(session('success'))
							<div class="alert alert-primary">
								{!! session('success') !!}
							</div>
					@endif
          <form action="{{ route('produk.post.send') }}" method="post" class="needs-validation" novalidate="" enctype="multipart/form-data">
						@csrf
            <div class="form-group">
              <label for="exampleInputEmail1">nama produk</label>
              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">harga</label>
              <input type="number" name="harga_satuan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">stock</label>
              <input type="number" name="stock" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          <button type="submit" class="btn btn-primary">Upload</button>
          </form>
            </div>
              </div>
               </div>
                 </div>
@endsection
