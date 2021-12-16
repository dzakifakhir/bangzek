@extends('admin.navbar.navbar')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xl-12">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4>Add New</h4>
					</div>
					<div class="card-body">
						@if(session('success'))
							<div class="alert alert-primary">
								{!! session('success') !!}
							</div>
						@endif
            <form action="{{ route('produk.update', $product->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('post')
              <div class="form-group">
                <label for="exampleInputEmail1">nama produk</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $product->nama }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">harga</label>
                <input type="number" name="harga_satuan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $product->harga_satuan }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">stock</label>
                <input type="number" name="stock" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $product->stock }}">
              </div>
            <button type="submit" class="btn btn-primary">Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
