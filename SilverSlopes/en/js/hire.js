    function PrintContent() {
        var DocumentContainer = document.getElementById('ajax_modal');
        var WindowObject = window.open('', 'PrintWindow', 'width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes');
        WindowObject.document.writeln(DocumentContainer.innerHTML);
        WindowObject.document.close();
        WindowObject.focus();
        WindowObject.print();
        WindowObject.close();
    }
//
function closeBtn(){
$(function(){
    $('#ajax_modal').children('.centered').slideUp("fast",function(){
        $('#ajax_modal').fadeOut();
});
});
}
//jquery
$(function(){
//anding eventListener to close btn
//$('[data-close="hb-modal"]').on('click',function(){
//    var data = $(this).data("object");
//    $(data).children('.centered').slideUp("fast",function(){
//        $(data).fadeOut();
//    });
//});
//animation modal
var ajax_anim = {
    name:"#ajax_modal",
    start:function(){
    $(this.name).children('.centered').html('<div class="lds-css ng-scope"><div style="width:100%;height:100%" class="lds-eclipse"><div></div></div></div>');
    $(this.name).fadeIn("fast",function(){
        $(this).children('.centered').slideDown("fast");
    });
},
    response:function(inv,date,pstat,name,email,phone){
        $(this.name).children('.centered').html('<section id="hire_ajax" class="centered_box"><div class="row"><div class="hb-modal-head col-sm-12"><h3 align="center" class="kaushan-lg" style="color:#f50044;">Silverslopes</h3><hr></div><div class="col-sm-4"><h2 style="color:#f50044;">Order Complete!</h2><h4>We\'ll contact you shortly</h4></div>'+
            '<div class="col-sm-8">'+
            ' <div class="row">'+
            '     <div class="col-sm-6">'+
            '  <h4><span class="lnr lnr-license"></span> Invoice Num:</h4>'+
            '  <p>'+inv+'</p>'+
            '  <h4><span class="lnr lnr-calendar-full"></span> Date:</h4>'+
            '  <p>'+date+'</p>'+
            '  <h4><span class="lnr lnr-enter"></span> Payement status:</h4>'+
            '  <p>'+pstat+'</p>'+
            '     </div>'+
            '     <div class="col-sm-6">'+
            '  <h4><span class="lnr lnr-user"></span> Name:</h4>'+
            '  <p>'+name+'</p>'+
            '  <h4><span class="lnr lnr-envelope"></span> Email:</h4>'+
            '  <p>'+email+'</p>'+
            '  <h4><span class="lnr lnr-phone"></span> Phone Number:</h4>'+
            '  <p>'+phone+'</p>'+
            '     </div>'+
            ' </div>'+
          '</div><div class="hb-modal-foot col-sm-12"><div class="clearfix"><button id="printBtn" onclick="PrintContent()" class="btn float-right"><span class="lnr lnr-printer"></span> Print</button><button onclick="closeBtn()" class="float-right"><span class="lnr lnr-checkmark-circle"></span> Done</button></div></div></div></section>');
    },
    failed:function(){
        $(this.name).children('.centered').html('<h3 style="text-align:center;color:#f50044;">Unable to process request <br /> Please try again later!!<br><button onclick="closeBtn()" id="closeBtn"><span class="lnr lnr-cross-circle"></span> Close</button></h3>');
    },
    stop:function(){
        $(this.name).fadeOut();
    }
}

//modal for ajax
$('#hireForm').off('submit').on('submit',function(){
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
            ajax_anim.response(data.inv,data.date,data.pay_status,data.name,data.email,data.num);
            }else{
                ajax_anim.failed();
            }
        }
    });
    return false;
});

    //end of jquery
});
