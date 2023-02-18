@extends('master')

@section('content')
    
                        <div class="col">

                            <h3>List Foto Barang <small>{{ $product->name }}</small></h3>
                            
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Photo</th>
                                        <th>Default</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($data as $pro)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pro->product->name}}</td>
                                        <td>
                                        <img src="{{ $pro->photo }}" alt="" width="50" />            
                                        </td>
                                        <td>
                                            {{ $pro->is_default ? "YA" : "NO" }}            
                                        </td>
                                        <td>
                                            <form action="{{ route('product-galeri.destroy', $pro->id) }}" method="post">
                                                @csrf 
                                                @method('delete')
                                         
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