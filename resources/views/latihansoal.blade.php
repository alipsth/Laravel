<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	@foreach($pegawai as $data)
	@if ($data['jabatan'] == "Manager")
		@php $jabatan = 5000000; @endphp
	@elseif ($data['jabatan'] == "Sekretaris")
		@php $jabatan = 3500000; @endphp
	@elseif ($data['jabatan'] == "Staff")
		@php $jabatan = 2500000; @endphp
	@endif

	@if ($data['jam_kerja'] > 250)
		@php $bonus = 0.10 * $jabatan; @endphp
	@elseif ($data['jam_kerja'] >= 200)
		@php $bonus = 0.5 * $jabatan; @endphp
	@else 
		@php $bonus = 0; @endphp
	@endif

		@php $ppn = 0.25 * $jabatan; @endphp
		@php $gaber = ($jabatan + $bonus) - $ppn; @endphp <br>
		Nama  : {{ $data['nama'] }} <br>
		Agama : {{ $data['agama'] }} <br>
		Jabatan : {{ $data['jabatan'] }} <br>
		Jam kerja : {{ $data['jam_kerja'] }} <br>
		Gaji : {{ $jabatan}} <br>
		Bonus : {{ $bonus}} <br>
		PPN : {{ $ppn}} <br>
		Gaji Bersih : {{ $gaber}} <br>
		<hr>
	@endforeach
		
</body>
</html>
