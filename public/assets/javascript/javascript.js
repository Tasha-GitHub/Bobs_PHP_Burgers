$(document).ready(function(){


    $("#submitBtn").on("click", function(event){
        //prevent page refresh for now
        event.preventDefault();
        var burger = $("#burger").val().trim();
        var token = $("#token").val().trim();
        var data = {
            '_token': token,
            'name': burger
        };

        console.log(data);
        if(data.length === 0){
            alert("please fill out burger name")
        }else {
            $.ajax({
                type:"POST",
                url:"/burger",
                data:data
            }).done(function(){
                //refresh the page on successful post
                location.reload();
            });
        }
    });
    //changes burgers ordered status from false to true
    $(".orderBtn").on("click", function(event){
        //prevent page refresh for now
       event.preventDefault();
       console.log("order");

       var data_id = $(this).data("id");
       var token = $(this).data("token");
        console.log(token);

       $.ajax({
           type:"PUT",
           url:"/burger/"+data_id,
           data: {
               "_token": token,
               'id': data_id
           }
       }).done(function(){
           location.reload();
       });
    });

    //removes burger from DB
    $(".deleteBtn").on("click", function(event){
        //prevent page refresh for now
        event.preventDefault();

        var data_id = $(this).data("id");
        var token = $(this).data("token");
        console.log("clicked");

        $.ajax({
            type: "DELETE",
            url:"/burger/"+data_id,
            data:{
                '_token' :token
            }
        }).done(function(){
            location.reload();
        });
    });
});