<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8">
  <title>Hello Smarty</title>
</head>
<body>

<ol>
{foreach $users as $i}
  <li>{$i.id} : {$i.name}</li>
{/foreach}
</ol>

{include file="footer.tpl"}

</body>
</html>
