
$('.mb2').click(function(){

	if($('#username').val()==''){
		
		zeroModal.alert('账号不能为空');
		return false;
	}
	if($('#password').val()==''){
		zeroModal.alert('密码不能为空');
		return false;
	}
	$('#login_form').submit();
});