<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8">
  <title>Hello Smarty</title>
</head>
<body>

<ol>
{foreach $msgs as $i}
  <li>{$i.user_id}|{$i.msg}</li>
{/foreach}
</ol>

{include file="footer.tpl"}

</body>
</html>
