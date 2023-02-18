@extends('master')

@section('content')
                        <div class="col">
	
  
                         <form action="{{ route('product-galeri.store') }}" method="post" enctype="multipart/form-data">
                             @csrf
                             <div class="form-group">
                                 <div class="row">
                                     <div class="col-12">
                                         <label for="product_id" class="form-control-label">Nama Barang</label>
                                         <select name="product_id" id="" class="form-control @error('product_id') is-invalid @enderror">
                                         	@foreach ($data as $pro)
                                         		<option value="{{ $pro->id }}">{{ $pro->name }}</option>
                                         	@endforeach
                                         </select>
                                         @error('product_id')
                                         <div class="text-muted">
                                         	{{ $message }}
                                         </div>
                                         @enderror
                                     </div>
                                     <div class="col-12">
                                         <label for="photo" class="form-control-label">Photo</label>
                                         <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" value="{{ old('photo') }}" >
                                         @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
                                     </div> 
                                 </div>
                                    <div class="row mt-4">
                                    	<div class="col-12">
                                       <label for="is_default">Jadikan Default</label><br>
                                       <label>
                                       	<input type="checkbox" name="is_default" class="form-control @error('is_default') is-invalid @enderror" value="1" >Ya
                                       </label>
                                       &nbsp;
                                       <label>
                                       	<input type="checkbox" name="is_default" class="form-control @error('is_default') is-invalid @enderror" value="0">No
                                        <br>

                                       	@error('is_default')
                                       	<div class="text-muted">
                                       		{{ $message }}
                                       	</div>
                                       	@enderror
                                       </label>
                                     </div>
                                    	</div>
                                    </div>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <button type="submit" class="btn btn-primary btn-block">
                                         + Tambah Foto Barang
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