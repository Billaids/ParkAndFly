

$(document).ready(function() {
   
    
    $("#booking").validate({
     
        rules: {  

            from: {
                required: true
            },

            to: {
                required: true
            }
        },

        messages: {                       
            from:'<img src="sources/img/cancel_16.png" alt="!" height="16" width="16" />',
            to:'<img src="sources/img/cancel_16.png" alt="!" height="16" width="16" />'            
        }
    });
});