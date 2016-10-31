
$('input[name="username"]').blur(function(){
	var reg=/^[a-z0-9]{4,20}$/;
	var username=$(this).val();
	var that=this;
	$.get('checkUser.php',{'username':username},function(data){
		if(data==1){
			zeroModal.alert('该帐号已经被注册');
			$(that).val()='';
		}else {
			if(reg.test(username)){
				$(that).parent().css('border-color','green');
			}else{
				zeroModal.alert('账号不符合规范');
			}
			
		}
	});
});
$('input[name="password"]').blur(function(){
	var reg=/^(?![\d]+$)(?![a-zA-Z]+$)(?![^\da-zA-Z]+$).{6,20}$/;
	var password=$(this).val();
	//window.alert(reg.test(password));
	if(reg.test(password)){
		$(this).parent().css('border-color','green');
		
	}else{
		zeroModal.alert('密码不符合规范');
	}
});
$('input[name="repassword"]').blur(function(){
	if($('#password').val()!=$('#repassword').val()){
		zeroModal.alert('两次密码不一致');
	}else{
		$(this).parent().css('border-color','green');
	}
});
$('input[name="checkcode"]').blur(function(){
	$(this).parent().css('border-color','green');
});
$('.mb2').click(function(){
	if($('#username').val()==''){
		zeroModal.alert('账号不能为空');
		return false;
	}
	if($('#password').val()==''){
		zeroModal.alert('密码不能为空');
		return false;
	}
	if($('#repassword').val()==''){
		zeroModal.alert('确认密码不能为空');
		return false;
	}
	if($('#checkcode').val()==''){
		zeroModal.alert('验证码不能为空');
		return false;
	}
	if($('#password').val()!=$('#repassword').val()){
		zeroModal.alert('两次密码不一致');
		return false;
	}

	$('#register_form').submit();
});