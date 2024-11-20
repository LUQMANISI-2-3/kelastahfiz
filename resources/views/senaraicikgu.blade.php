@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="card">
				<h5 class="card">
					Laman Utama
				</h5>
				<div class="card-body">
					<p class="card-text">
						Senarai Pengguna
					</p>
					<p class="card-text">
						Senarai Murid
                    </p>
					<p class="card-text">
						Mata Pelajaran
                    </p>
				</div>
				<div class="csrd-footer">
					Keluar
		       	</div>
			</div>
	    </div>
		<div class="col-md-9">
			<table class="table">
				<thead>
					<tr>
						<th>
							IDmurid
						</th>
						<th>
							Nama Murid
						</th>
						<th>
							Tarikh Lahir
						</th>
						<th>
							Kelas
						</th>
                        <th>
							Alamat
						</th>
                        <th>
                            Status
						</th>
					</tr>
				</thead>
					<tr>
			</table>
		</div>
	</div>
</div>
@endsection

