@extends('layouts.app')

@section('content')
<div class="container-fluid">
	
	<div class="row">
		<div class="col-md-12">
			<form role="form" actions="{{ route('borangmurid') }}" method="POST">
				@csrf
				<div class="form-group">
					 
					<label for="namamurid">
						Nama Murid
					</label>
					<input type="text" class="form-control" name="namamurid" />
				</div> 

				<div class="form-group">
					<label for="jantina">Jantina</label>
					<div>
						<input type="radio" name="jantina" value="Lelaki"> Lelaki
						<input type="radio" name="jantina" value="Perempuan"> Perempuan
					</div>
				</div>

				<div class="form-group">
					 
					<label for="tarikhlahir">
						Tarikh Lahir
					</label>
					<input type="date" class="form-control" name="tarikhlahir" />
				</div> 
				<div class="form-group">
					 
					<label for="kelas">
						Kelas
					</label>
					<input type="text" class="form-control" name="kelas" />
				</div> 
				<div class="form-group">
					 
					 <label for="alamat">
						 Alamat
					 </label>
					 <input type="text" class="form-control" name="alamat" />
				 </div> 
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>
	</div>
</div>
@endsection