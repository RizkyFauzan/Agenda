@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

            </div>
        </div>
    </div>
</div>
@endsection
<!-- Menghubungkan dengan view template master -->
@extends('master')
	<p>
		<label>ini label</label>
			<li>ini pake li</li>
			<li>ini juga</li>
		
	</p>
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

    <p>Ini Ada di Hume.blade.php</p>
    <p>ini juga</p>
@endsection   
