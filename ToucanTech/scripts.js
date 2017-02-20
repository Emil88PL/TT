
   $(function() {
        $('#schools').change(function(){
            $('.colors').hide();
            $('#' + $(this).val()).show();
        });
    });
