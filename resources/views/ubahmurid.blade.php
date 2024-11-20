@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form role="form" actions="/ubahmurid/{{ $murid->idmurid }}" method="POST">
				@csrf
                @method('PUT')
				<div class="form-group">
					 
					<label for="namamurid">
						Nama Murid
					</label>
					<input type="text" class="form-control" name="namamurid" value="{{$murid->namamurid}}" />
				</div> 

				<div class="form-group">
					<label for="jantina">Jantina</label>
					<div>
                        @if ($murid->jantina == 'Lelaki')
							<input type="radio" name="jantina" value="Lelaki" checked> Lelaki
							<input type="radio" name="jantina" value="Perempuan"> Perempuan
						@else
							<input type="radio" name="jantina" value="Lelaki"> Lelaki
							<input type="radio" name="jantina" value="Perempuan" checked> Perempuan
						@endif
					</div>
				</div>

				<div class="form-group">
					 
					<label for="tarikhlahir">
						Tarikh Lahir
					</label>
					<input type="date" class="form-control" name="tarikhlahir" value="{{$murid->tarikhlahir}}" />
				</div> 
				<div class="form-group">
					 
					<label for="kelas">
						Kelas
					</label>
					<input type="text" class="form-control" name="kelas" value="{{$murid->kelas}}" />
				</div> 
				<div class="form-group">
					 
					 <label for="alamat">
						 Alamat
					 </label>
					<textarea class="form-control" name="alamat" rows="3">{{$murid->alamat}}</textarea>
					
				 </div> 
                 <div class="form-group">

					<label for="status">Status</label>
					<select class="form-control" name="status">
						<option value="Aktif">Aktif</option>
						<option value="Tidak Aktif">Tidak Aktif</option>
					</select>
				</div> 
				
                 <button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>
	</div>
</div>
@endsection