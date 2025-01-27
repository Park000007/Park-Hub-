$("#submit_add_stock_product").click(function(){
    var name = $("#add_name_stock_product").val();
    var list = $("#add_list_stock_product").val();
    var image = $("#add_image_stock_product").val();
    var type = "add_stock_product";
    $.ajax({
        type:"POST",
        url:"./api/bypluemv2/settings_stock_product.php",
        dataType:"json",
        data:{name,list,image,type},
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
function del_stock_product(id){
    var type = "del_stock_product";
    Swal.fire({
        title: 'คุณแน่ใจหรือไม่!',
        text: "คุณแน่ใจหรือไม่ที่ต้องการลบสินค้า",
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
                url:"./api/bypluemv2/settings_stock_product.php",
                dataType:"json",
                data:{id,type},
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
}
function submit_edit_stock_product(id){
    var name = $("#edit_name_stock_product").val();
    var list = $("#edit_list_stock_product").val();
    var image = $("#edit_image_stock_product").val();
    var type = "edit_stock_product";
    $.ajax({
        type:"POST",
        url:"./api/bypluemv2/settings_stock_product.php",
        dataType:"json",
        data:{id,name,list,image,type},
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