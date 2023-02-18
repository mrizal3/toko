@extends('master')

@section('content')
	

    
                            <!-- ============================================================== -->
                            <!-- sales  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">New Costumer</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{ $count }}</h1>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end sales  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- new customer  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Sales</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{ $count }}</h1>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Order</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">Rp.{{ $income }}</h1>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end new customer  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            
                        </div>
                                      <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Recent Orders</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Transaction Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($items as $pro)
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

                     
                    </tr>
                    @endforeach

                </tbody>
            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
            <!-- ============================================================== -->
           
         

@endsection