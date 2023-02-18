@include('template/head')
@include('template/side')

  <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row mt-4">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">

                                <div class="card-body">
                                     <div class="row ">
                                     
                                        
									@yield('content')
                                      
								</div>
								</div>
								</div>
								</div>
								</div>
              </div>
            </div>
          </div>
          
@include('template/foot')