% rebase("layout")
<form class="form-horizontal" method="post" action="/tweet">
  <div class="form-group">
    <label class="col-sm-2 control-label" for="InputTextarea">ツイートする</label>
      <div class="col-sm-10">
        <textarea name="content" placeholder="今どんな気持ち？" rows="3" class="form-control" ></textarea>
      </div>
  </div>
  <button type="submit" class="btn btn-default pull-right">送信</button>
</form>
