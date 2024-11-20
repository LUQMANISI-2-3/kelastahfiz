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
							
						</th>
						<th>
							
						</th>
						<th>
							
						</th>
						<th>
							Status
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Default
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection

