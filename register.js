$("#submit_register").click(function(){
    var username = $("#username").val();
    var password = $("#password").val();
    var password_cm = $("#password_cm").val();
    var email = $("#email").val();
    var phonenumber = $("#phonenumber").val();
    var captcha = $("#g-recaptcha-response").val();
    $.ajax({
        type:"POST",
        url:"./api/bypluemv1/register.php",
        dataType:"json",
        data:{username,password,password_cm,email,phonenumber,captcha},
        success:function(data){
            if (data.status == "success") {
                Swal.fire({
                    icon: 'success',
                    title: 'สำเร็จ!',
                    text: data.message,
                }).then(function(){
                    window.location.href = '/home';
                })
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด!',
                    text: data.message,
                })
                grecaptcha.reset();
            }
        }
    })
})