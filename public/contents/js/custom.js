$(document).ready(function(){
    $(document).on("click", "#softDelete", function (){
        var deleteID = $(this).data('id');
        $(".modal_body #modal_id").val(deleteID); 
    });
}); 