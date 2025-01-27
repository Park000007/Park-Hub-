$(".submit_buyscript").click(function(){
    var id_product = $(this).attr("id_product");
    var name_script = $(this).attr("name_script");
    Swal.fire({
        iconColor: '#3085d6',
        textColor: '#3085d6',
        title: 'คุณแน่ใจหรือไม่!',
        text: "คุณแน่ใจที่ต้องการซื้อสินค้า "+name_script,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#757575',
        confirmButtonText: 'OK',
        cancelButtonText: 'Cancel'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type:"POST",
                url:"./api/bypluemv1/buyscript.php",
                dataType:"json",
                data:{id_product},
                success:function(data){
                    if (data.status == "success") {
                        Swal.fire({
                            icon: 'success',
                            title: 'สำเร็จ!',
                            text: data.message,
                        }).then(function(){
                            window.location.href = '/history_shop';
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