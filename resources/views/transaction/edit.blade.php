@extends('master')

@section('content')
                        <div class="col">
    
 
                        <h3>Edit Transaksi {{ $data->uuid }}</h3>
                         <form action="{{ route('transaction.update', $data->id) }}" method="post" >
                             @csrf @method('put')
                             <div class="form-group">
                                 <div class="row">
                                     <div class="col-12">
                                         <label for="name" class="form-control-label">Nama</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ? old('name') : $data->name }}">
                                        @error('name') <div class="badge badge-danger">{{ $message }}</div> @enderror
                                   </div><div class="col-12">
                                         <label for="email" class="form-control-label">Email</label>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ? old('email') : $data->email }}">
                                        @error('email') <div class="badge badge-danger">{{ $message }}</div> @enderror
                                   </div><div class="col-12">
                                         <label for="number" class="form-control-label">Number</label>
                                        <input type="number" name="number" class="form-control @error('number') is-invalid @enderror" value="{{ old('number') ? old('number') : $data->number }}">
                                        @error('number') <div class="badge badge-danger">{{ $message }}</div> @enderror
                                   </div><div class="col-12">
                                         <label for="address" class="form-control-label">Alamat</label>
                                        <input type="address" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') ? old('address') : $data->address }}">
                                        @error('address') <div class="badge badge-danger">{{ $message }}</div> @enderror
                                   </div><div class="col-12">
                                         <label for="transaction_total" class="form-control-label">Total Transaksi</label>
                                        <input type="transaction_total" name="transaction_total" class="form-control @error('transaction_total') is-invalid @enderror" value="{{ old('transaction_total') ? old('transaction_total') : $data->transaction_total }}">
                                        @error('transaction_total') <div class="badge badge-danger">{{ $message }}</div> @enderror
                                   </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                     <button type="submit" class="btn btn-primary btn-block">
                                         + Update Transaksi 
                                     </button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>

                    </div>
                </div>
            </div>
     

@endsection