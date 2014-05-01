<div class="box">
<form action="{$SECUREURL}/cart/process/{$token}/" method="post">
  <input type="hidden" name="handler" value="manual_payment" />
  <h3>{$mplabel}</h3>
  <p>{$mpdesc}</p>
  <input type="submit" name="submit" class="btn button" value="Continue" />
  <div class="clear"></div>
</form>
</div>