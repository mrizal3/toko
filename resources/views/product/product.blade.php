@extends('master')

@section('content')
	
                        <div class="col">

                        
                        	<h3>List Product</h3>
                            <a href="/product/create" class="btn btn-primary">+Tambah Product</a>
                            <table class="table table-bordered mt-4">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>QTY</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($products as $pro)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pro->name }}</td>
                                        <td>{{ $pro->price }}</td>
                                        <td>{{ $pro->quantity }}</td>
                                        <td>
                                            <form action="/product/{{ $pro->id }}" method="post">
                                                @csrf 
                                                @method('delete')
                                            <a href="galeri/{{ $pro->id }}/galeri" class="btn btn-success btn-sm">
                                                <i class="fas fa-image"></i></a>
                                                
                                            <a href="/product/{{ $pro->id }}/edit" class="btn btn-warning btn-sm">
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


                

@endsection