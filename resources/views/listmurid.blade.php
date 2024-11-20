
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
			<a href="{{ route('borangmurid') }}" role="button" class="btn btn-primary">Tambah Murid</a>
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
				<tbody>
					<tr>
						@foreach ($murids as $murid)
						<td>
							{{ $murid->idmurid }}
						</td>
						<td>
							{{ $murid->namamurid }}
						</td>
						<td>
						    {{ $murid->tarikhlahir }}
						</td>
						<td>
							{{ $murid->kelas }}
						</td>
                        <td>
                            {{ $murid->alamat }}
						</td>
                        <td>
                            {{ $murid->status }}
						</td>
						<td>
							<a href="/ubahmurid/{{ $murid->idmurid }}" class="btn btn-warning">Ubah</a>
							<a href="{{ route('padammurid', $murid->idmurid) }}" class="btn btn-danger">Padam</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
@endauth