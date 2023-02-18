<table class="table table-bordered" w-100>
	<tr>
		<th>Nama</th>
		<td>{{ $data->name }}</td>
	</tr>
	<tr>
		<th>Email</th>
		<td>{{ $data->email }}</td>
	</tr>
	<tr>
		<th>Nomor</th>
		<td>{{ $data->number }}</td>
	</tr>
	<tr>
		<th>ALamat</th>
		<td>{{ $data->address }}</td>
	</tr>
	<tr>
		<th>Total Transaksi</th>
		<td>{{ $data->transaction_total }}</td>
	</tr>
	<tr>
		<th>Status Transaksi</th>
		<td>{{ $data->transaction_status }}</td>
	</tr>
	
	<tr>
		<th>Pembeli Product</th>

		<table class="table table-bordered w-100">
			<tr>
				<th>Nama</th>
				<th>Tipe</th>
				<th>Harga</th>
			</tr>

			@foreach ($data->Details as $detail)
				<tr>
					<td>{{ $detail->product->name }}</td>
					<td>{{ $detail->product->type }}</td>
					<td>{{ $detail->product->price }}</td>
				</tr>
			@endforeach
		</table>
	</tr>
</table>

<div class="row">
	<div class="col-4">
		<a href="transaction/{{ $data->id }}/set-status?status=SUCCESS" class="btn btn-success btn-block">
			<i class="fas fa-check-circle"></i> Set SUCCES
		</a>
	</div><div class="col-4">
		<a href="transaction/{{ $data->id }}/set-status?status=FAILED" class="btn btn-danger btn-block">
			<i class="fas fa-times-circle fa-spin"></i> Set FAILED
		</a>
	</div><div class="col-4">
		<a href="transaction/{{ $data->id }}/set-status?status=PENDING" class="btn btn-info btn-block">
			<i class="fas fa-spinner fa-spin"></i> Set PENDING
		</a>
	</div>
</div>
