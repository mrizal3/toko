            @extends('master')

            @section('content')

                        <div class="col">

        
            <h3>List Transaksi </h3>
            <table class="table table-bordered">
            	<thead>
            		<tr>
            			<th>No</th>
            			<th>Name</th>
            			<th>Email</th>
                        <th>Number</th>
                        <th>Transaction Total</th>
                        <th>Status</th>
                        <th>Action</th> 
            		</tr>
            	</thead>
            	<tbody>
            		
            		@foreach ($data as $pro)
            		<tr>
            			<td>{{ $loop->iteration }}</td>
            			<td>{{ $pro->name }}</td>
            			<td>{{ $pro->email }}</td>
                        <td>{{ $pro->number }}</td>
                        <td>Rp.{{ $pro->transaction_total}}</td>
                        <td>
                        	@if ($pro->transaction_status == "PENDING")
                        		<span class="badge badge-info">
                        	@elseif($pro->transaction_status == "SUCCESS")
                        		<span class="badge badge-success">
                        	@elseif($pro->transaction_status == "FAILED")
                        		<span class="badge badge-danger">
                        	@else
                        	<span>
                        	@endif

                        	{{ $pro->transaction_status }}

                        </span>
                    </td>

                        <td>
                                @if ($pro->transaction_status == "PENDING")
                                <a href="transaction/{{ $pro->id }}/set-status?status=SUCCESS" class="btn btn-success btn-sm">
                                    <i class="fas fa-check"></i>
                                </a>
                                <a href="transaction/{{ $pro->id }}/set-status?status=FAILED" class="btn btn-danger btn-sm">
                              <i class="fas fa-book"></i>      
                                </a>
                            @endif
                        	
                            {{-- jquery --}}
                           
                      
                           
                            <form action="{{ route('transaction.destroy', $pro->id) }}" method="post">
                                @csrf 
                                @method('delete')
                          


                                <a href="#myModal"
                                    data-remote="{{ route('transaction.show', $pro->id) }}"
                                    data-toggle="modal"
                                    data-target="#myModal"
                                    data-title="Detail Transaksi {{ $pro->uuid }}" class="btn btn-success btn-sm" 
                                >
                                    <i class="fas fa-eye"></i>
                                </a>
                           
                            <a href="{{ route('transaction.edit', $pro->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-pencil-alt"></i></a>

                            {{-- delete Data --}}
                            <button type="submit" onclick="return confirm('Anda Yakin')" class="btn btn-danger btn-sm">
                            	<i class="fa fa-trash"></i>
                            </button>
                            </form>
                        </td>
            		</tr>
            		@endforeach

            	</tbody>
            </table>


            </div>

            </div>
            </div>
            </div>
            </div>

            @endsection