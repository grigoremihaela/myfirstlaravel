@section('foot')

<!-- Scripts  -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>  

<!-- flash messaging -->
<script>
        $('#flash-overlay-modal').modal();
    //     $('div.alert').not('.alert-important').delay(3000).slideUp(300);
</script>

<!-- script js for select multiple tags -->
<script type="text/javascript">
    $('#tag_list').select2({
    	placeholder: "Choose a tag",
    	tags:true
    });
</script>

@show
 