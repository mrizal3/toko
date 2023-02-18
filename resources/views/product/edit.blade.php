@extends('master')

@section('content')
    
                        <div class="col">
                            
                         <form action="/product/{{ $products->id }}" method="post">
                             @csrf @method('put')
                             <div class="form-group">
                                 <div class="row">
                                     <div class="col-12">
                                         <label for="name" class="form-control-label">Nama Barang</label>
                                         <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ? old('name') : $products->name }}">
                                         @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                                     </div>
                                     <div class="col-12">
                                         <label for="type" class="form-control-label">Tipe</label>
                                         <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') ? old('type') : $products->type }}">
                                         @error('type') <div class="text-muted">{{ $message }}</div> @enderror
                                     </div>
                                     <div class="col-12">
                                         <label for="description" class="form-control-label">Deskripsi</label>
                                         <textarea name="description" class="ckeditor form-control  @error('description') is-invalid @enderror">{{ old('description') ? old('description') : $products->description }}</textarea>
                                         @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                                     </div>
                                     <div class="col-12">
                                         <label for="Price" class="form-control-label">Harga Barang</label>
                                         <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price')? old('price') : $products->price }}">
                                         @error('price') <div class="text-muted">{{ $message }}</div> @enderror
                                        </div> 
                                        <div class="col-12">
                                         <label for="Quantity" class="form-control-label">kuantitas</label>
                                         <input type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity') ? old('quantity') : $products->quantity }}">
                                         @error('quantity') <div class="text-muted">{{ $message }}</div> @enderror
                                        </div> 
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <button type="submit" class="btn btn-primary btn-block">
                                         + Tambah
                                     </button>
                                 </div>
                             </div>
                         </form>
                 </div>
             </div>
         </div>
     </div>

         

@endsection