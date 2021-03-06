<?php
$mail_datas = $this->options['mail_data'];
$smtp_hostname = $this->options['smtp_hostname'];
$newmem_admin_mail = $this->options['newmem_admin_mail'];
$updmem_admin_mail = $this->options['updmem_admin_mail'];
$updmem_customer_mail = $this->options['updmem_customer_mail'];
$delmem_admin_mail = $this->options['delmem_admin_mail'];
$delmem_customer_mail = $this->options['delmem_customer_mail'];
$put_customer_name = $this->options['put_customer_name'];
$email_attach_feature = $this->options['email_attach_feature'];
$put_email_attach_file_extension = $this->options['email_attach_file_extension'];
$put_email_attach_file_size = $this->options['email_attach_file_size'];
?>
<div class="wrap">
<div class="usces_admin">
<h1>Welcart Shop <?php _e('E-mail Setting','usces'); ?></h1>
<?php usces_admin_action_status(); ?>
<form action="" method="post" name="option_form" id="option_form">
<input name="usces_option_update" type="submit" class="button button-primary" value="<?php _e('change decision','usces'); ?>" />
<div id="poststuff" class="metabox-holder">

<div class="postbox">
<h3 class="hndle"><span><?php _e('SMTP server host','usces'); ?></span><a style="cursor:pointer;" onclick="toggleVisibility('ex_smtp_host');"> (<?php _e('explanation', 'usces'); ?>) </a></h3>
<div class="inside">
<table class="form_table">
	<tr>
		<th width="150"><?php _e('Host name','usces'); ?></th>
		<td><input name="smtp_hostname" id="smtp_hostname" type="text" class="mail_title" value="<?php echo $smtp_hostname; ?>" /></td>
		<td>&nbsp;</td>
	</tr>
</table>
<hr size="1" color="#CCCCCC" />
<div id="ex_smtp_host" class="explanation"><?php _e('This is a field setting the host name of a server for email transmission of a message. When the transmission of a message is not possible in localhost, a SMTP server is necessary.','usces'); ?></div>
</div>
</div><!--postbox-->

<div class="postbox">
<h3 class="hndle"><span><?php _e('Mail Options','usces'); ?></span><a style="cursor:pointer;" onclick="toggleVisibility('ex_mail_options');"> (<?php _e('explanation', 'usces'); ?>) </a></h3>
<div class="inside">
<table class="form_table">
	<tr>
		<th width="150"><a style="cursor:pointer;" onclick="toggleVisibility('ex_newmem_admin_mail');"><?php _e('New sign-in completion email','usces'); ?></a></th>
		<td width="10"><input name="newmem_admin_mail" type="radio" id="newmem_admin_mail_0" value="0"<?php if(0 == $newmem_admin_mail) echo ' checked="checked"'; ?> /></td>
		<td width="100"><label for="newmem_admin_mail_0"><?php _e("Don't send",'usces'); ?></label></td>
		<td width="10"><input name="newmem_admin_mail" type="radio" id="newmem_admin_mail_1" value="1"<?php if(1 == $newmem_admin_mail) echo ' checked="checked"'; ?> /></td>
		<td width="100"><label for="newmem_admin_mail_1"><?php _e("Send",'usces'); ?></label></td>
		<td><div id="ex_newmem_admin_mail" class="explanation"><?php _e('When there is a new sign-in, transmit a report email to a manager.', 'usces'); ?></div></td>
	</tr>
	<tr>
		<th width="150"><a style="cursor:pointer;" onclick="toggleVisibility('ex_updmem_admin_mail');"><?php _e('Member update completion email to admin','usces'); ?></a></th>
		<td width="10"><input name="updmem_admin_mail" type="radio" id="updmem_admin_mail_0" value="0"<?php if(0 == $updmem_admin_mail) echo ' checked="checked"'; ?> /></td>
		<td width="100"><label for="updmem_admin_mail_0"><?php _e("Don't send",'usces'); ?></label></td>
		<td width="10"><input name="updmem_admin_mail" type="radio" id="updmem_admin_mail_1" value="1"<?php if(1 == $updmem_admin_mail) echo ' checked="checked"'; ?> /></td>
		<td width="100"><label for="updmem_admin_mail_1"><?php _e("Send",'usces'); ?></label></td>
		<td><div id="ex_updmem_admin_mail" class="explanation"><?php _e('When the member information has been changed, transmit a report mail to the manager.', 'usces'); ?></div></td>
	</tr>
	<tr>
		<th width="150"><a style="cursor:pointer;" onclick="toggleVisibility('ex_updmem_customer_mail');"><?php _e('Member update completion email to customer','usces'); ?></a></th>
		<td width="10"><input name="updmem_customer_mail" type="radio" id="updmem_customer_mail_0" value="0"<?php if(0 == $updmem_customer_mail) echo ' checked="checked"'; ?> /></td>
		<td width="100"><label for="updmem_customer_mail_0"><?php _e("Don't send",'usces'); ?></label></td>
		<td width="10"><input name="updmem_customer_mail" type="radio" id="updmem_customer_mail_1" value="1"<?php if(1 == $updmem_customer_mail) echo ' checked="checked"'; ?> /></td>
		<td width="100"><label for="updmem_customer_mail_1"><?php _e("Send",'usces'); ?></label></td>
		<td><div id="ex_updmem_customer_mail" class="explanation"><?php _e('When the member information has been changed, , transmit a guide mail to customer.', 'usces'); ?></div></td>
	</tr>
	<tr>
		<th width="150"><a style="cursor:pointer;" onclick="toggleVisibility('ex_delmem_admin_mail');"><?php _e('Member removal completion email to admin','usces'); ?></a></th>
		<td width="10"><input name="delmem_admin_mail" type="radio" id="delmem_admin_mail_0" value="0"<?php if(0 == $delmem_admin_mail) echo ' checked="checked"'; ?> /></td>
		<td width="100"><label for="delmem_admin_mail_0"><?php _e("Don't send",'usces'); ?></label></td>
		<td width="10"><input name="delmem_admin_mail" type="radio" id="delmem_admin_mail_1" value="1"<?php if(1 == $delmem_admin_mail) echo ' checked="checked"'; ?> /></td>
		<td width="100"><label for="delmem_admin_mail_1"><?php _e("Send",'usces'); ?></label></td>
		<td><div id="ex_delmem_admin_mail" class="explanation"><?php _e('When a member is unsubscribed, transmit a report mail to the manager.', 'usces'); ?></div></td>
	</tr>
	<tr>
		<th width="150"><a style="cursor:pointer;" onclick="toggleVisibility('ex_delmem_customer_mail');"><?php _e('Member removal completion email to customer','usces'); ?></a></th>
		<td width="10"><input name="delmem_customer_mail" type="radio" id="delmem_customer_mail_0" value="0"<?php if(0 == $delmem_customer_mail) echo ' checked="checked"'; ?> /></td>
		<td width="100"><label for="delmem_customer_mail_0"><?php _e("Don't send",'usces'); ?></label></td>
		<td width="10"><input name="delmem_customer_mail" type="radio" id="delmem_customer_mail_1" value="1"<?php if(1 == $delmem_customer_mail) echo ' checked="checked"'; ?> /></td>
		<td width="100"><label for="delmem_customer_mail_1"><?php _e("Send",'usces'); ?></label></td>
		<td><div id="ex_delmem_customer_mail" class="explanation"><?php _e('When a member is unsubscribed, transmit a guide mail to customer.', 'usces'); ?></div></td>
	</tr>
	<tr>
		<th width="150"><a style="cursor:pointer;" onclick="toggleVisibility('ex_put_customer_name');"><?php _e('Customer name','usces'); ?></a></th>
		<td width="10"><input name="put_customer_name" type="radio" id="put_customer_name_0" value="0"<?php if(0 == $put_customer_name) echo ' checked="checked"'; ?> /></td>
		<td width="100"><label for="put_customer_name_0"><?php _e("Non-indication",'usces'); ?></label></td>
		<td width="10"><input name="put_customer_name" type="radio" id="put_customer_name_1" value="1"<?php if(1 == $put_customer_name) echo ' checked="checked"'; ?> /></td>
		<td width="100"><label for="put_customer_name_1"><?php _e("Indication",'usces'); ?></label></td>
		<td><div id="ex_put_customer_name" class="explanation"><?php _e('At the beginning of the mail text, put customer name.', 'usces'); ?></div></td>
	</tr>
	<tr>
		<th width="150"><a style="cursor:pointer;" onclick="toggleVisibility('ex_email_attach_feature');"><?php _e('Attachment file for administrator email','usces'); ?></a></th>
		<td width="10"><input name="email_attach_feature" type="radio" id="email_attach_feature_0" value="0"<?php if(0 == $email_attach_feature) echo ' checked="checked"'; ?> /></td>
		<td width="100"><label for="email_attach_feature_0"><?php _e("Do not Use",'usces'); ?></label></td>
		<td width="10"><input name="email_attach_feature" type="radio" id="email_attach_feature_1" value="1"<?php if(1 == $email_attach_feature) echo ' checked="checked"'; ?> /></td>
		<td width="100"><label for="email_attach_feature_1"><?php _e("Use",'usces'); ?></label></td>
		<td><div id="ex_email_attach_feature" class="explanation"><?php _e('A file can be attached to the management e-mail sent from the order data edit page.', 'usces'); ?></div></td>
	</tr>
	<tr class="email_attach_feature">
		<th width="150"><a style="cursor:pointer;" onclick="toggleVisibility('ex_put_file_extension');"><?php _e('Extensions of attachments', 'usces'); ?></a></th>
		<td colspan="4"><input name="email_attach_file_extension" id="email_attach_file_extension" type="text" class="regular-text" value="<?php echo esc_attr($put_email_attach_file_extension); ?>" /></td>
		<td><div id="ex_put_file_extension" class="explanation"><?php _e('Enter the file extension of the email attachment (jpg, png, pdf, etc.) separated by commas.', 'usces'); ?><?php _e('If not entered, the extension will not be checked.', 'usces'); ?></div></td>
	</tr>
	<tr class="email_attach_feature">
		<th width="150"><a style="cursor:pointer;" onclick="toggleVisibility('ex_put_file_size');"><?php _e('Maximum size of email attachment', 'usces'); ?></a></th>
		<td colspan="4"><input name="email_attach_file_size" id="email_attach_file_size" type="number" min="0" step="1" class="small-text" value="<?php echo esc_attr($put_email_attach_file_size); ?>" />Mb</td>
		<td><div id="ex_put_file_size" class="explanation"><?php _e('Enter the maximum file size (MB) of the email attached file.', 'usces'); ?><?php _e('If not entered, the file size is not checked.', 'usces'); ?></div></td>
	</tr>
</table>
<hr size="1" color="#CCCCCC" />
<div id="ex_mail_options" class="explanation"><?php _e('Notification mail transmission setting, other.','usces'); ?></div>
</div>
</div><!--postbox-->

<div class="postbox">
<h3 class="hndle"><span><?php _e('Thanks email(automatic transmission)', 'usces'); ?></span><a style="cursor:pointer;" onclick="toggleVisibility('ex_thakyou_mail');"> (<?php _e('explanation', 'usces'); ?>) </a></h3>
<div class="inside">
<table class="form_table">
	<tr>
	    <th width="150"><?php _e('Title', 'usces'); ?></th>
	    <td><input name="title[thankyou]" id="title[thankyou]" type="text" class="mail_title" value="<?php echo esc_attr($mail_datas['title']['thankyou']); ?>" /></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('header', 'usces'); ?></th>
	    <td><textarea name="header[thankyou]" id="header[thankyou]" class="mail_header"><?php echo esc_html($mail_datas['header']['thankyou']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('footer', 'usces'); ?></th>
	    <td><textarea name="footer[thankyou]" id="footer[thankyou]" class="mail_footer"><?php echo esc_html($mail_datas['footer']['thankyou']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
</table>
<hr size="1" color="#CCCCCC" />
<div id="ex_thakyou_mail" class="explanation"><?php _e('This is an email transmitting a message for a visitor at the time of an order.', 'usces'); ?></div>
</div>
</div><!--postbox-->

<div class="postbox">
<h3 class="hndle"><span><?php _e('Order email(automatic transmission)', 'usces'); ?></span><a style="cursor:pointer;" onclick="toggleVisibility('ex_order_mail');"> (<?php _e('explanation', 'usces'); ?>) </a></h3>
<div class="inside">
<table class="form_table">
	<tr>
	    <th width="150"><?php _e('Title', 'usces'); ?></th>
	    <td><input name="title[order]" id="title[order]" type="text" class="mail_title" value="<?php echo esc_attr($mail_datas['title']['order']); ?>" /></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('header', 'usces'); ?></th>
	    <td><textarea name="header[order]" id="header[order]" class="mail_header"><?php echo esc_html($mail_datas['header']['order']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('footer', 'usces'); ?></th>
	    <td><textarea name="footer[order]" id="footer[order]" class="mail_footer"><?php echo esc_html($mail_datas['footer']['order']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
</table>
<hr size="1" color="#CCCCCC" />
<div id="ex_order_mail" class="explanation"><?php echo sprintf(__('This is an email transmitting a message for owner of shop(%s).', 'usces'), $this->options['order_mail']); ?></div>
</div>
</div><!--postbox-->

<div class="postbox">
<h3 class="hndle"><span><?php _e('Inquiry receptionist email(automatic transmission)', 'usces'); ?></span><a style="cursor:pointer;" onclick="toggleVisibility('ex_inquiry_mail');"> (<?php _e('explanation', 'usces'); ?>) </a></h3>
<div class="inside">
<table class="form_table">
	<tr>
	    <th width="150"><?php _e('Title', 'usces'); ?></th>
	    <td><input name="title[inquiry]" id="title[inquiry]" type="text" class="mail_title" value="<?php echo esc_attr($mail_datas['title']['inquiry']); ?>" /></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('header', 'usces'); ?></th>
	    <td><textarea name="header[inquiry]" id="header[inquiry]" class="mail_header"><?php echo esc_html($mail_datas['header']['inquiry']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('footer', 'usces'); ?></th>
	    <td><textarea name="footer[inquiry]" id="footer[inquiry]" class="mail_footer"><?php echo esc_html($mail_datas['footer']['inquiry']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
</table>
<hr size="1" color="#CCCCCC" />
<div id="ex_inquiry_mail" class="explanation"><?php _e('This is an e-mail which will be sent aytomatically to your customers at the contact from customer.', 'usces'); ?></div>
</div>
</div><!--postbox-->

<div class="postbox">
<h3 class="hndle"><span><?php _e('Conformation e-mail of membership registeration.', 'usces'); ?></span><a style="cursor:pointer;" onclick="toggleVisibility('ex_membercomp_mail');"> (<?php _e('explanation', 'usces'); ?>) </a></h3>
<div class="inside">
<table class="form_table">
	<tr>
	    <th width="150"><?php _e('Title', 'usces'); ?></th>
	    <td><input name="title[membercomp]" id="title[membercomp]" type="text" class="mail_title" value="<?php echo esc_attr($mail_datas['title']['membercomp']); ?>" /></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('header', 'usces'); ?></th>
	    <td><textarea name="header[membercomp]" id="header[membercomp]" class="mail_header"><?php echo esc_html($mail_datas['header']['membercomp']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('footer', 'usces'); ?></th>
	    <td><textarea name="footer[membercomp]" id="footer[membercomp]" class="mail_footer"><?php echo esc_html($mail_datas['footer']['membercomp']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
</table>
<hr size="1" color="#CCCCCC" />
<div id="ex_membercomp_mail" class="explanation"><?php _e('This is an e-mail which will be snnt automatically to your customers when their membership registration is completed.', 'usces'); ?></div>
</div>
</div><!--postbox-->


<div class="postbox">
<h3 class="hndle"><span><?php _e('Shipping complete email (sent from the admin)', 'usces'); ?></span><a style="cursor:pointer;" onclick="toggleVisibility('ex_completionmail_mail');"> (<?php _e('explanation', 'usces'); ?>) </a></h3>
<div class="inside">
<table class="form_table">
	<tr>
	    <th width="150"><?php _e('Title', 'usces'); ?></th>
	    <td><input name="title[completionmail]" id="title[completionmail]" type="text" class="mail_title" value="<?php echo esc_attr($mail_datas['title']['completionmail']); ?>" /></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('header', 'usces'); ?></th>
	    <td><textarea name="header[completionmail]" id="header[completionmail]" class="mail_header"><?php echo esc_html($mail_datas['header']['completionmail']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('footer', 'usces'); ?></th>
	    <td><textarea name="footer[completionmail]" id="footer[completionmail]" class="mail_footer"><?php echo esc_html($mail_datas['footer']['completionmail']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
</table>
<hr size="1" color="#CCCCCC" />
<div id="ex_completionmail_mail" class="explanation"><?php _e('This is an email transmitted manual operation to than a management screen, when the shipment of the article was completed.', 'usces'); ?></div>
</div>
</div><!--postbox-->

<div class="postbox">
<h3 class="hndle"><span><?php _e('Order confirmation email (sent from the admin)', 'usces'); ?></span><a style="cursor:pointer;" onclick="toggleVisibility('ex_ordermail_mail');"> (<?php _e('explanation', 'usces'); ?>) </a></h3>
<div class="inside">
<table class="form_table">
	<tr>
	    <th width="150"><?php _e('Title', 'usces'); ?></th>
	    <td><input name="title[ordermail]" id="title[ordermail]" type="text" class="mail_title" value="<?php echo esc_attr($mail_datas['title']['ordermail']); ?>" /></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('header', 'usces'); ?></th>
	    <td><textarea name="header[ordermail]" id="header[ordermail]" class="mail_header"><?php echo esc_html($mail_datas['header']['ordermail']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('footer', 'usces'); ?></th>
	    <td><textarea name="footer[ordermail]" id="footer[ordermail]" class="mail_footer"><?php echo esc_html($mail_datas['footer']['ordermail']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
</table>
<hr size="1" color="#CCCCCC" />
<div id="ex_ordermail_mail" class="explanation"><?php _e('This is an email transmitted manual operation to than a management screen, when you registered a new order.', 'usces'); ?></div>
</div>
</div><!--postbox-->

<div class="postbox">
<h3 class="hndle"><span><?php _e('Confirmation mail for change of orders. (sent by admin.)', 'usces'); ?></span><a style="cursor:pointer;" onclick="toggleVisibility('ex_changemail_mail');"> (<?php _e('explanation', 'usces'); ?>) </a></h3>
<div class="inside">
<table class="form_table">
	<tr>
	    <th width="150"><?php _e('Title', 'usces'); ?></th>
	    <td><input name="title[changemail]" id="title[changemail]" type="text" class="mail_title" value="<?php echo esc_attr($mail_datas['title']['changemail']); ?>" /></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('header', 'usces'); ?></th>
	    <td><textarea name="header[changemail]" id="header[changemail]" class="mail_header"><?php echo esc_html($mail_datas['header']['changemail']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('footer', 'usces'); ?></th>
	    <td><textarea name="footer[changemail]" id="footer[changemail]" class="mail_footer"><?php echo esc_html($mail_datas['footer']['changemail']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
</table>
<hr size="1" color="#CCCCCC" />
<div id="ex_changemail_mail" class="explanation"><?php _e('This is an e-mail which will be sent manually from admin screen, when there is changes of order.', 'usces'); ?></div>
</div>
</div><!--postbox-->

<div class="postbox">
<h3 class="hndle"><span><?php _e('Mail for Confirmation of payment. ( sent from admin)', 'usces'); ?></span><a style="cursor:pointer;" onclick="toggleVisibility('ex_receiptmail_mail');"> (<?php _e('explanation', 'usces'); ?>) </a></h3>
<div class="inside">
<table class="form_table">
	<tr>
	    <th width="150"><?php _e('Title', 'usces'); ?></th>
	    <td><input name="title[receiptmail]" id="title[receiptmail]" type="text" class="mail_title" value="<?php echo esc_attr($mail_datas['title']['receiptmail']); ?>" /></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('header', 'usces'); ?></th>
	    <td><textarea name="header[receiptmail]" id="header[receiptmail]" class="mail_header"><?php echo esc_html($mail_datas['header']['receiptmail']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('footer', 'usces'); ?></th>
	    <td><textarea name="footer[receiptmail]" id="footer[receiptmail]" class="mail_footer"><?php echo esc_html($mail_datas['footer']['receiptmail']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
</table>
<hr size="1" color="#CCCCCC" />
<div id="ex_receiptmail_mail" class="explanation"><?php _e('This is an e-mail which will be sent to customers when their transfer payment is confirmed.', 'usces'); ?></div>
</div>
</div><!--postbox-->

<div class="postbox">
<h3 class="hndle"><span><?php _e('Estimate email (sent from the admin)', 'usces'); ?></span><a style="cursor:pointer;" onclick="toggleVisibility('ex_mitumorimail_mail');"> (<?php _e('explanation', 'usces'); ?>) </a></h3>
<div class="inside">
<table class="form_table">
	<tr>
	    <th width="150"><?php _e('Title', 'usces'); ?></th>
	    <td><input name="title[mitumorimail]" id="title[mitumorimail]" type="text" class="mail_title" value="<?php echo esc_attr($mail_datas['title']['mitumorimail']); ?>" /></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('header', 'usces'); ?></th>
	    <td><textarea name="header[mitumorimail]" id="header[mitumorimail]" class="mail_header"><?php echo esc_html($mail_datas['header']['mitumorimail']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('footer', 'usces'); ?></th>
	    <td><textarea name="footer[mitumorimail]" id="footer[mitumorimail]" class="mail_footer"><?php echo esc_html($mail_datas['footer']['mitumorimail']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
</table>
<hr size="1" color="#CCCCCC" />
<div id="ex_mitumorimail_mail" class="explanation"><?php _e('This is an email transmitted manual operation to than a management screen, when you  registered an estimate.', 'usces'); ?></div>
</div>
</div><!--postbox-->

<div class="postbox">
<h3 class="hndle"><span><?php _e('E-mail for confirmation of cancellation. (sent from admin)', 'usces'); ?></span><a style="cursor:pointer;" onclick="toggleVisibility('ex_cancelmail_mail');"> (<?php _e('explanation', 'usces'); ?>) </a></h3>
<div class="inside">
<table class="form_table">
	<tr>
	    <th width="150"><?php _e('Title', 'usces'); ?></th>
	    <td><input name="title[cancelmail]" id="title[cancelmail]" type="text" class="mail_title" value="<?php echo esc_attr($mail_datas['title']['cancelmail']); ?>" /></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('header', 'usces'); ?></th>
	    <td><textarea name="header[cancelmail]" id="header[cancelmail]" class="mail_header"><?php echo esc_html($mail_datas['header']['cancelmail']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('footer', 'usces'); ?></th>
	    <td><textarea name="footer[cancelmail]" id="footer[cancelmail]" class="mail_footer"><?php echo esc_html($mail_datas['footer']['cancelmail']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
</table>
<hr size="1" color="#CCCCCC" />
<div id="ex_cancelmail_mail" class="explanation"><?php _e('This is an e-mail which will be sent when order has been canselled.', 'usces'); ?></div>
</div>
</div><!--postbox-->

<div class="postbox">
<h3 class="hndle"><span><?php _e('Other e-mails(sent from admin)', 'usces'); ?></span><a style="cursor:pointer;" onclick="toggleVisibility('ex_othermail_mail');"> (<?php _e('explanation', 'usces'); ?>) </a></h3>
<div class="inside">
<table class="form_table">
	<tr>
	    <th width="150"><?php _e('Title', 'usces'); ?></th>
	    <td><input name="title[othermail]" id="title[othermail]" type="text" class="mail_title" value="<?php echo esc_attr($mail_datas['title']['othermail']); ?>" /></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('header', 'usces'); ?></th>
	    <td><textarea name="header[othermail]" id="header[othermail]" class="mail_header"><?php echo esc_html($mail_datas['header']['othermail']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
	    <th><?php _e('footer', 'usces'); ?></th>
	    <td><textarea name="footer[othermail]" id="footer[othermail]" class="mail_footer"><?php echo esc_html($mail_datas['footer']['othermail']); ?></textarea></td>
		<td>&nbsp;</td>
	</tr>
</table>
<hr size="1" color="#CCCCCC" />
<div id="ex_othermail_mail" class="explanation"><?php _e('e-mail which will be sent on temporaly basis', 'usces'); ?></div>
</div>
</div><!--postbox-->

<?php do_action( 'usces_action_admin_mailform' ); ?>


</div><!--poststuff-->
<input name="usces_option_update" type="submit" class="button button-primary" value="<?php _e('change decision','usces'); ?>" />
<?php wp_nonce_field( 'admin_mail', 'wc_nonce' ); ?>
</form>
</div><!--usces_admin-->
</div><!--wrap-->