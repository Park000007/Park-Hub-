$(".del_script").click(function(){
    var id_product = $(this).attr("id_product");
    var name_script = $(this).attr("name_script");
    var type = "del_script";
    Swal.fire({
        title: 'คุณแน่ใจหรือไม่!',
        text: "คุณแน่ใจที่ต้องการลบสินค้า "+name_script,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'ใช่',
        cancelButtonText: 'ไม่'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type:"POST",
                url:"./api/bypluemv2/settings_script.php",
                dataType:"json",
                data:{id_product,type},
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
        }
    })
})
$("#submit_add_script").click(function(){
    var name_script = $("#name_script").val();
    var image_script = $("#image_script").val();
    var price_script = $("#price_script").val();
    var details_script = $("#details_script").val();
    var type = "add_script";
    $.ajax({
        type:"POST",
        url:"./api/bypluemv2/settings_script.php",
        dataType:"json",
        data:{name_script,image_script,price_script,details_script,type},
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
$("#submit_edit_script").click(function(){
    var name_ed = $("#name_ed").val();
    var image_ed = $("#image_ed").val();
    var price_ed = $("#price_ed").val();
    var details_ed = $("#details_ed").val();
    var type = "edit_script";
    var id_ed = $(this).attr("id_product_edit");
    $.ajax({
        type:"POST",
        url:"./api/bypluemv2/settings_script.php",
        dataType:"json",
        data:{name_ed,image_ed,price_ed,details_ed,type,id_ed},
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