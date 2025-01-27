$("#submit_add_game_new").click(function(){
    var name = $("#add_name_game_new").val();
    var details = $("#add_details_game_new").val();
    var image = $("#add_image_game_new").val();
    var type = "add_game_new";
    $.ajax({
        type:"POST",
        url:"./api/bypluemv2/settings_game_new.php",
        dataType:"json",
        data:{name,details,image,type},
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
function del_game_new(id){
    var type = "del_game_new";
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
                url:"./api/bypluemv2/settings_game_new.php",
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
function submit_edit_game_new(id){
    var name = $("#edit_name_game_new").val();
    var details = $("#edit_details_game_new").val();
    var image = $("#edit_image_game_new").val();
    var type = "edit_game_new";
    $.ajax({
        type:"POST",
        url:"./api/bypluemv2/settings_game_new.php",
        dataType:"json",
        data:{id,name,details,image,type},
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