
$(document).ready(function (){
    
    $(searchbtn).click(function(e){
            e.preventDefault();
            var inputRoll = $('input[name=enrollment-no]').val();
                $.ajax({
                type: "POST",
                url: "getresult.php",
                data: {
                    "search_post_btn" : 1,
                    "id" : inputRoll,
                },
                dataType : "text",
                success : function(response) {
                    $("#userdata").html(response);
                }
            });
            
    });

    $('input[name=enrollment-no').keypress(function(e){
        if(e.which==13){
            $(searchbtn).click();
        }
    });

});


