@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form role="form">
				<div class="form-group">
					 
					<label for="namamurid">
						Nama Murid
					</label>
					<input type="text" class="form-control" id="namamurid" />
				</div>
                <label for="tarikhlahir">
						Tarikh Lahir
					</label>
                    <input type="date" class="form-control" id="tarikhlahir" />
                <div class="form-group">
					<label for="jantina">Jantina</label>
					<div>
						<input type="radio" name="jantina" value="Lelaki"> Lelaki
						<input type="radio" name="jantina" value="Perempuan"> Perempuan
					</div>
				</div>

                
				<div class="form-group">
					 
					<label for="kelas">
						Kelas
					</label>
					<input type="text" class="form-control" id="kelas" />
                </div>
                <label for="alamat">
						Alamat
					</label>
                <textarea class="form-control" id="alamat"></textarea>

			
				
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>
	</div>
</div>




@endsection