//Show all entries
$.post("php/index.php", {dhtype: "All"}, function(output){
        $(".jumbotron").html(output);
});

$(document).ready(function(){
        //Selected filter
        $(".btn-lg").click(function(){
                $(".btn-lg").removeAttr("id");
                $(this).attr("id","tselected");
                $.post("php/index.php", {dhtype: $(this).text()}, function(output){
                        $(".jumbotron").html(output);
                });
        });

        //Inserting review into table
        $(".jumbotron").on("click", ".rsubmit", function(){
                $.post("php/review.php", {rname: $('#uname').val(), rreview: $('#ureview').val(), rrate: $('#urate').val(), dhid: $('.thisid').attr('id')}, function(output){
                        alert(output);
                });
        });

        //Complete description of service
        $(".jumbotron").on("click", ".moreinf", function(){
                var formData = new FormData();
                formData.append('dhid',this.id);

                $.ajax({
                        url: 'php/detail.php',
                        type: "post",
                        data: formData,
                        cache: false,
                        contentType : false,
                        processData : false,
                        dataType: "text",
                        success: function(response){
                                var array = JSON.parse(response);
                                $(".tentry").slideUp();
                                $(".jumbotron").empty();

                                var content;
                                for( i = 0 ; i < array.length ; i ++){
                                        $(".jumbotron").append("<div class='card w-100'>"+
                                                                        "<div class='row'>"+
                                                                                "<div class='col-md-3'>"+
                                                                                        "<img class='card-img' src='ico.jpg' alt='Card image cap'>"+
                                                                                        "</br>"+
                                                                                        "<h6 class='mb-2 text-muted thisid' id="+ array[i]['dhID'] +"> Dom. Help ID: "+ array[i]['dhID'] +"</h6>"+
                                                                                        "<p class='card-text'>Area: " + array[i]['serviceArea'] +"</p>"+
                                                                                "</div>"+
                                                                                "<div class='col-md-7'>"+
                                                                                        "<h1 class='card-title'>" + array[i]['firstName'] + " " + array[i]['lastName'] + "</h3>"+
                                                                                        "<h3 class='text-muted'>" + array[i]['category'] + "</h3>"+
                                                                                        "<p class='card-text'>" + array[i]['description'] +"</p>"+
                                                                                        "<button type='button' class='btn btn-outline-Success dhreview' data-toggle='collapse' href='#collapseExample' aria-expanded='false' aria-controls='collapseExample'>Write Review</button>"+
                                                                                        "<div class='collapse' id='collapseExample'>"+
                                                                                                "<div class='card card-block'>"+
                                                                                                        "<div class='form-group row'>"+
                                                                                                                "<label for='uname' class='col-2 col-form-label'>Name</label>"+
                                                                                                                "<div class='col-10'>"+
                                                                                                                        "<input class='form-control' type='text' id='uname'>"+
                                                                                                                "</div>"+
                                                                                                        "</div>"+
                                                                                                        "<div class='form-group row'>"+
                                                                                                                "<label for='ureview' class='col-2 col-form-label'>Review</label>"+
                                                                                                                "<div class='col-10'>"+
                                                                                                                        "<input class='form-control' type='text' id='ureview'>"+
                                                                                                                "</div>"+
                                                                                                        "</div>"+
                                                                                                        "<div class='form-group row'>"+
                                                                                                                "<label for='urate' class='col-2 col-form-label'>Rating (?/10)</label>"+
                                                                                                                "<div class='col-10'>"+
                                                                                                                        "<input class='form-control' type='text' id='urate'>"+
                                                                                                                "</div>"+
                                                                                                        "</div>"+
                                                                                                        "<button type='button' class='btn btn-success rsubmit'>Submit</button>"+
                                                                                                "</div>"+
                                                                                        "</div>"+
                                                                                        "</br>"+
                                                                                        "<div class='reviewc'>"+
                                                                                        "</div>"+
                                                                                "</div>"+
                                                                                "<div class='col-md-2'>"+
                                                                                        "<a href='index.html' class='btn btn-outline-danger float-right backb' role='button'>Back</a>"+
                                                                                "</div>"+
                                                                        "</div>"+
                                                                "</div>"
                                        );
                                        greview();
                                }

                                // $('.jumbotron').fadeIn();           
                        },
                        error: function(response){
                                alert("ajax error" + response);
                        }
                });
        });


});

function greview(){
        var formData = new FormData();
        formData.append('dhid',$(".thisid").attr("id"));

        $.ajax({
                url: 'php/getReview.php',
                type: "post",
                data: formData,
                cache: false,
                contentType : false,
                processData : false,
                dataType: "text",
                success: function(response){
                        var array = JSON.parse(response);
                        var content;

                        for( i = 0 ; i < array.length ; i ++){
                                $(".reviewc").append("<div class='card'>"+
                                                                "<div class='card-block'>"+
                                                                        "<div class='clearfix'>"+
                                                                                "<h4 class='card-title float-left'> "+ array[i]['uName'] +"</h4>"+
                                                                                "<button type='button' class='btn btn-primary disabled float-right'>" + array[i]['rating'] +"</button>"+
                                                                        "</div>"+
                                                                        "<p class='card-text'>" + array[i]['review'] +"</p>"+
                                                                "</div>"+
                                                        "</div>"
                                );
                        }

                        // $('.jumbotron').fadeIn();           
                },
                error: function(response){
                        alert("ajax error" + response);
                }
        });
};