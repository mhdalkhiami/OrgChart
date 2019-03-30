function buildSponsorTree(sponsor, downlines, treeDiv, scrollFlag) {
    if(scrollFlag == 1) {
        $("#"+treeDiv).addClass("table-responsive");
        //Append hierarchy diagram div
        $("#"+treeDiv).append('<div class="hv-hierarchy" style="margin:0; height:300px;"><div class="hv-wrapper"><div class="hv-item"></div></div></div>');
        //Append items to diagram
        $(".hv-item").append('<br/><div class="hv-item-parent"><p style="border:1px solid #85C1E9"><img src="images/company_logo.png" style="width:30px ; height: 40px;"><br>'+sponsor['username']+'<br>'+sponsor['id']+'<br><button class="btn btn-success btn-cons p-0" style="min-width: 100px"><span>0</span><br><span>'+sponsor['created_at']+'</span></button></p></div>');
        $(".hv-item").append('<div class="hv-item-children"></div>');

        if(downlines.length > 0) {
            $.each(downlines, function(key, val) {
                $(".hv-item-children").append('<div class="hv-item-child"><p id="'+downlines[key]['client_id']+'" onclick="treeBranchClick(this)"><img src="images/company_logo.png" style="width:30px ; height: 40px;"><br>'+downlines[key]['username']+'<br>'+downlines[key]['client_id']+'<br><button class="btn btn-success btn-cons p-0" style="min-width: 100px"><span>0</span><br><span>'+downlines[key]['created_at']+'</span></button></p></div>');
            });
        }
        else {
            $(".hv-item-children").append('<div class="hv-item-child"><p style="box-shadow: unset"><img src="images/user.png" style="width: 50px;"><br><?php echo $translations['M01031'][$language]; /* Empty */ ?></p></div>');
        }
    }

    if(scrollFlag == 0) {
        //Append carousel
        $("#"+treeDiv).append('<div id="treeCarousel" class="carousel slide" data-ride="carousel"><ol class="carousel-indicators"></ol><div class="carousel-inner"></div><a class="left carousel-control" href="#treeCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#treeCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span><span class="sr-only">Next</span></a></div>');

        if(downlines.length > 0) {
            var j = 0; var d = 0;
            for(var i = 0; i < Math.ceil(downlines.length / 5); i++) {
                if(j == 0) {
                    //Append 1st carousel
                    $(".carousel-indicators").append('<li data-target="#treeCarousel" data-slide-to="'+j+'" class="active"></li>');
                    $(".carousel-inner").append('<div id="diagram'+j+'" class="item active"></div>');
                    //Append hierarchy diagram div
                    $("#diagram"+j).append('<div class="hv-hierarchy" style="margin:0; height:300px;"><div class="hv-wrapper"><div class="hv-item"></div></div></div>');
                    //Append items to diagram
                    $("#diagram"+j+" .hv-item").append('<br/><div class="hv-item-parent"><p>'+sponsor['username']+'</p></div>');
                    $("#diagram"+j+" .hv-item").append('<div class="hv-item-children"></div>');

                    for(var z = 0; z < 5; z++) {
                        $("#diagram"+j+" .hv-item-children").append('<div class="hv-item-child"><p id="'+downlines[d]['client_id']+'" onclick="treeBranchClick(this)">'+downlines[d]['username']+'</p></div>');
                        d++;
                        if(d == (downlines.length))
                            return false;
                    }
                }//Append 2nd carousel onwards
                else {
                    $(".carousel-indicators").append('<li data-target="#treeCarousel" data-slide-to="'+j+'"></li>');
                    $(".carousel-inner").append('<div id="diagram'+j+'" class="item"></div>');
                    //Append hierarchy diagram div
                    $("#diagram"+j).append('<div class="hv-hierarchy" style="margin:0; height:300px;"><div class="hv-wrapper"><div class="hv-item"></div></div></div>');
                    //Append items to diagram
                    $("#diagram"+j+" .hv-item").append('<br/><div class="hv-item-parent"><p>'+sponsor['username']+'</p></div>');
                    $("#diagram"+j+" .hv-item").append('<div class="hv-item-children"></div>');

                    for(var z = 0; z < 5; z++) {
                        $("#diagram"+j+" .hv-item-children").append('<div class="hv-item-child"><p id="'+downlines[d]['client_id']+'" onclick="treeBranchClick(this)">'+downlines[d]['username']+'</p></div>');
                        d++;
                        if(d == (downlines.length))
                            return false;
                    }
                }

                j++;

                if(d == (downlines.length))
                    return false;
            }
        }
        else {
            //Append 1st carousel
            $(".carousel-indicators").append('<li data-target="#treeCarousel" data-slide-to="0" class="active"></li>');
            $(".carousel-inner").append('<div id="diagram0" class="item active"></div>');
            //Append hierarchy diagram div
            $("#diagram0").append('<div class="hv-hierarchy" style="margin:0; height:300px;"><div class="hv-wrapper"><div class="hv-item"></div></div></div>');
            //Append items to diagram
            $("#diagram0 .hv-item").append('<br/><div class="hv-item-parent"><p>'+sponsor['username']+'</p></div>');
            $("#diagram0 .hv-item").append('<div class="hv-item-children"></div>');

            $("#diagram0 .hv-item-children").append('<div class="hv-item-child"><p><?php echo $translations['M01031'][$language]; /* Empty */ ?></p></div>');
        }
    }
}



