//index

function CheckBtn1Data()
{
 
    var phone = $('.name').val();  //电话号码
	var requestType = 'GetRegedit';
	if(phone == '')
	{
		alert('手机号码不能为空，将作为您的后续凭证');
		return ;
	}
   $.get('js/main.php',{"request_type":requestType,"phone":phone},function(tmp)
   {
		alert(tmp);
		//window.location = tmp;
   }
   );
}