            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{ asset('') }}assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('') }}assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="{{ asset('') }}assets/libs/js/main-js.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
                        ClassicEditor
                                .create( document.querySelector( '.ckeditor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );

                                // jQuery(document).ready(function(){
                                //     $('#myModal').on('show.bs.modal', function(e){
                                //         var button = $(e.relatedTarget);
                                //         var modal = $(this);
                                //         modal.find('.modal-body').load(button.data("remote"));  
                                //         modal.find('.modal-title').html(button.data("title"));  
                                //     });
                                // });
                                jQuery(document).ready(function(){
                                    $('#myModal').on('show.bs.modal',function(e){
                                        var button = $(e.relatedTarget);
                                        var modal = $(this);
                                        modal.find('.modal-body').load(button.data('remote'));
                                        modal.find('.modal-title').html(button.data('title'));
                                    });
                                });
                </script>

<div class="modal" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <i class="fa fa-spinner fa-spin"></i>
            </div>
        </div>
    </div>
</div>

{{-- 
<div class="modal" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <i class="fa fa-spinner fa-spin"></i>
            </div>
        </dv>
    </div>
</div> --}}


































</body>
 
</html>