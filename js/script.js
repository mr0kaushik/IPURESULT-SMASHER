
$(document).ready(function (){
    $(searchbtn).click(function(e){
            e.preventDefault();
            var inputRoll = $('input[name=enrollment-no').val();
            $.ajax({
                type: "POST",
                url: "getresult.php",
                data: {
                    "search_post_btn" : 1,
                    "id" : inputRoll,
                },
                dataType : "text",
                success : function(response) {
                    /*
                    var peopleHTML = "";
                    for(var key in response){
                        peopleHTML += "<tr>";
                            peopleHTML += "<td>" + response[key]["Roll_Number"] + "<td>";
                            peopleHTML += "<td>" + response[key]["Name"] + "<td>";
                        peopleHTML += "<tr>";
                    }
                    */
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
