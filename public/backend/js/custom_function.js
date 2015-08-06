$(function(){
    $(".delMultiBtn").click(function(){
       
        if ($(".multiRecordCheck:checked").length == 0) {
            alert('Select atleast one record');
        }else{
             var c = confirm('Are you sure to delete these records?');
            if (c==true) {
                var url ='';
                var type = $(this).data('element');var val =[];
                $('.multiRecordCheck:checked').each(function(){
                    
                    val.push($(this).val());
                   
                });
                val = val.join("-");
                 switch(type){
                    case 'user':
                        url = './users/delete_multi/'+val
                    break;
                }
                if (url!='') {
                    window.location.href = url;
                }
                
            }
        }
        
    });
});