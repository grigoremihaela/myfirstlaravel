@section('foot')

<!-- Scripts  -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script> 

<!-- react JS -->
<script src="//cdnjs.cloudflare.com/ajax/libs/react/0.13.3/react.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/react/0.13.3/JSXTransformer.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.2/marked.min.js"></script>

<script type="text/jsx" src="/js/components/HelloWorld.js"></script>
<script type="text/jsx" src="/js/components/Avatar.js"></script>
<script type="text/jsx" src="/js/components/Counter.js"></script>
<script type="text/jsx;harmony=true" src="scripts/example.js"></script>

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
 