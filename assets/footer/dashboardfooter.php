              <?php if($link !== $linkl ){ ?>
     
         <footer>
            <div class="footer clearfix mb-0 text-muted">
               <div class="float-start">
                  <p>2021 &copy; Mazer</p>
               </div>
               <div class="float-end">
                  <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="http://ahmadsaugi.com">A. Saugi</a></p>
               </div>
            </div>
         </footer>
         <?php } ?>
      </div>
   </div>
   	<script src="../../assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
   	<script src="../../assets/js/table.js"></script>
   <script src="../../assets/vendor/ck/ckeditor.js"></script>
      <script src="../../assets/vendor/ckfinder/ckfinder.js" ></script>
       <script>
       ClassicEditor
        .create( document.querySelector( '#editor' ),{
           ckfinder: {
                uploadUrl: 'http://localhost:8002/assets/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
            },
           alignment: {
            options: [ 'left', 'right' ]
        },
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', '|', 'bulletedList', 'numberedList', 'undo', 'redo', 'uploadImage', 'ckfinder', 'MediaEmbed', 'insertTable', 'indent','outdent', 'alignment:left' ]
        
        })
        .then( editor => {    } )
        .catch( function( error ) {
            console.error( error );
        } );
    </script>
   <script src="../../assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
   <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
   <script src="../../assets/vendor/apexcharts/apexcharts.js"></script>
   <script src="../../assets/js/dashboard.js"></script>
   <script src="../../assets/js/main1.js"></script>
   <script src="../../assets/vendor/toastify/toastify.js"></script>
   <script src="../../assets/js/toastify.js"></script>
</body>

</html>