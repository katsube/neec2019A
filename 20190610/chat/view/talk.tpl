<form action="/chat/go.php/talk/add">
  <input type="text" name="msg">
  <button>書き込み</button>
</form>

<ul>
{foreach $msg as $i}
  <li>{$i.name}:{$i.msg}</li>
{/foreach}
</ul>
