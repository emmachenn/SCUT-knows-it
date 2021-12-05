//用户登录





<?php require_once 'inc/inc.php'; ?>

<?php if(isset($_s['user_login']))
{
	echo ("<script>alert('请不要重复登录');location.href='user_info.php';</script>");
	exit;
} ?>

<?php include  'header.php'; ?>


<div class="wrapper">
  	<form action="admin/actions.php?act=user.login" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" width="100%" class="table">
		<tr>
			<th colspan="2">用户登录</th>
		</tr>
		<tr>
			<td>帐号</td>
			<td>
				<input type="text" name="passport" style="width:200px" />
			</td>
		</tr>
		<tr>
			<td>密码</td>
			<td>
				<input type="password" name="pwd1" style="width:200px" />
			</td>
		</tr>
		<tr>
			<td width="120">&nbsp;</td>
			<td><input type="submit" value="提交" class="submit"></td>
		</tr>
	</table>
  	</form>
</div>

<?php include  'footer.php'; ?>
</body>
</html>