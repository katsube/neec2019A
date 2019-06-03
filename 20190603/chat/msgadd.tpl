<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8">
  <title>Hello Smarty</title>
</head>
<body>

{if $mode === 'add'}
  {if $result}
    <h3>登録成功</h3>
  {else}
    <h3>登録失敗</h3>
  {/if}
{else}
  <form action="/chat/msgadd.php">
    <input type="hidden" name="mode" value="add">
    <select name="user_id">
      {foreach $users as $i}
         <option value="{$i.id}">{$i.name}</option>
      {/foreach}
    </select>
    <br>
    メッセージ:<input type="text" name="msg"><br>
    <button>登録</button>
  </form>
{/if}

{include file="footer.tpl"}

</body>
</html>
