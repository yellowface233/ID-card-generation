<?php
    include 'Settings.php';
?>
<!DOCTYPE HTML>
<html data-open lang="zh-CN">
<head>
	<meta charset="<?php echo $charset; ?>" />
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<meta name="description" content="<?php echo $description; ?>" />
	<title data-pt id="pt"><?php echo $title; ?></title>
	<script src="core.js" data-corejs></script>
	<meta name="yf:copyright" content="Powered by YellowFace" />
	<meta name="og:url" content="<?php echo $url; ?>" />
        <style>p{text-align:center;}</style>
</head>
<body>
    <table width="728" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:2px; border:1px solid #E3E3E3;">
  <tr>
<td>
 <p>在线身份证号码生成器，只供参考,随机生成,不能作为真正的身份证件号码使用！</p><p><strong style="color:red">切记不可用于非法活动，否则后果自负！</strong></p></td>
</tr>
<td width="701" height="30" align="center">城市选择：
    <select id="province" name="province" onchange="showselect()"><option value="">选择省</option></select>　<select id="citys2" name="citys2" onchange="showselect3()"><option value="">选择城市</option></select>　<select id="citys" name="citys"><option value="">相关地区</option></select></td>
  </tr>
	<tr>
		<td height="30" align="center">出生日期：<select id="years" name="years" ></select> 年 <select id="months" name="months" ></select> 月 <select id="days" name="days" ></select> 日</td>
	</tr>
	<tr>
		<td height="30" align="center">性别：
	    <input type="radio" name="sexs" value="1" /> 男
	    <input type="radio" name="sexs" value="0" /> 女</td>
	</tr>
	<tr>
		
    <td height="30" align="center">生成多个身份证号： 
      <select id="nums" name="nums" ></select></td>
	</tr>
	<tr>
		<td height="30" align="center"><input type="button" name="Submit" value="生成身份证号码" onclick="showID()" style="cursor:pointer;" /></td>
	</tr>
	<tr>
		<td height="30" align="center"></td>
	</tr>
	<tr>
		<td height="30" id="showID"  align="center"></tr>
</table>
<p></p>
<p align="center">Powered by YellowFace!</p>
</body>
</html>
