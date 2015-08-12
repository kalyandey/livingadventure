var updateCount = 0;
$(function(){
    // $("#createsupplierfrm").validate({
    //    errorPlacement: function(error, element)
    //    {
    //        error.insertAfter(element);
    //    }
    //});
     
    $(".update_profile").click(function(){
        if (updateCount ==0) {
            $(".profile_form .form-control").show();
            $(".profile_form .form-pass").show();
            
            $(".profile_form .textval").hide();
            $(this).text('Save');
            updateCount = 1;
            return false;
        }
        
    });
});