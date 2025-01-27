$("#submit_set_web").click(function(){
    var set_title = $("#set_title").val();
    var set_logo = $("#set_logo").val();
    var set_phone = $("#set_phone").val();
    var set_contact = $("#set_contact").val();
    var set_banner = $("#set_banner").val();
    var set_info = $("#set_info").val();
    var set_page = $("#set_page").val();
    var set_clip = $("#set_clip").val();
    $.ajax({
        type:"POST",
        url:"./api/bypluemv2/settings_web.php",
        dataType:"json",
        data:{set_title,set_logo,set_phone,set_contact,set_banner,set_info,set_page,set_clip},
        success:function(data){
            if (data.status == "success") {
                Swal.fire({
                    icon: 'success',
                    title: 'สำเร็จ!',
                    text: data.message,
                }).then(function(){
                    window.location.reload();
                })
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด!',
                    text: data.message,
                })
            }
        }
    })
})