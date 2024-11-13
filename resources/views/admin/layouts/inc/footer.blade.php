

            <!-- Footer Start -->
            <!-- <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Life-Connect</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            /*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            <!-- Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Footer End -->
        </div>
        <!-- Content End -->


    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    <script>
        	
        new DataTable('#example');
    </script>
    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- My script -->
     <script src="{{ asset('js/index.js') }}"></script>
     <script>
  const quill = new Quill('#editor', {
    theme: 'snow'
  });
</script>

<!-- include summernote css/js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>

<script>
  
  $(document).ready(function() {
//   $('#summernote').summernote();
  $('#summernote').summernote({
        placeholder: 'Wrtie your content here',
        tabsize: 2,
        height: 150
      });

    //   $('#summernote').summernote({
	// 	        height: 400,
	// 	        toolbar: [
	// 	            [ 'style', [ 'style' ] ],
	// 	            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
	// 	            [ 'fontname', [ 'fontname' ] ],
	// 	            [ 'fontsize', [ 'fontsize' ] ],
	// 	            [ 'color', [ 'color' ] ],
	// 	            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
	// 	            [ 'table', [ 'table' ] ],
	// 				['insert',['picture','video','link']],
	// 	            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
	// 	        ]
	// 	    });
});
</script>
</body>

</html>