function closeBtn(){
$(function(){
    $('#ajax_modal').children('.centered').slideUp("fast",function(){
        $('#ajax_modal').fadeOut();
});
});
}

$(document).ready(function(){
//jquery
var ajax_anim = {
    name:"#ajax_modal",
    start:function(){
    $(this.name).children('.centered').html('<div class="lds-css ng-scope"><div style="width:100%;height:100%" class="lds-eclipse"><div></div></div></div>');
    $(this.name).fadeIn("fast",function(){
        $(this).children('.centered').slideDown("fast");
    });
},
    response:function(msg){
        $(this.name).children('.centered').html('<section id="hire_ajax" class="centered_box"><div class="row"><div class="hb-modal-head col-sm-12"><h3 align="center" class="kaushan-lg" style="color:#f50044;">Silverslopes</h3><hr></div><div class="col-sm-4"><h2 style="color:#f50044;">THANKS!</h2></div>'+
            '<div class="col-sm-8">'+
            '<h4>'+msg+'</h4>'+
          '</div><div class="hb-modal-foot col-sm-12"><div class="clearfix"><button onclick="closeBtn()" class="float-right"><span class="lnr lnr-checkmark-circle"></span> Dismiss</button></div></div></div></section>');
    },
    failed:function(){
        $(this.name).children('.centered').html('<h3 style="text-align:center;color:#f50044;">Unable to process request <br /> Please try again later!!<br><button onclick="closeBtn()" id="closeBtn"><span class="lnr lnr-cross-circle"></span> Close</button></h3>');
    },
    stop:function(){
        $(this.name).fadeOut();
    }
}
//ajax
$('#joinForm').off('submit').on('submit',function(){
    ajax_anim.start();
    var form = $(this);
    var formData = form.serialize();

    $.ajax({
        url:form.attr("action"),
        method:form.attr("method"),
        data:formData,
        dataType:'json',
        success:function(data){
            if(data.success == true){
            ajax_anim.response(data.messages);
            }else{
                ajax_anim.failed();
            }
        }
    });
    return false;
});

//end of jquert
});
