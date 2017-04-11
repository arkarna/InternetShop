<!doctype html>
<html>
<head>
	<link rel="icon" href="{$site_url}favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="{$site_url}favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=0.55, user-scalable=yes" />
	<title>{$site_name}</title>
	<meta charset="utf-8" />
	<link href='https://fonts.googleapis.com/css?family=PT+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{$site_url}{$template_directory}/css/style.css?ver=1.4">
	<script src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="{$site_url}{$template_directory}/js/main.js"></script>
 </head>
<body>
{if $smarty.get.type == 'is-admin'}
	{include file='admin/admin.tpl'}
{else}
	{include file='shop/shop.tpl'}
{/if}
</body>
</html>