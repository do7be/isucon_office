<h2>タイムライン</h2>
<div class="row panel panel-primary" id="timeline">
  <div class="col-md-4">
    <dl>
      <dt>name</dt><dd id="prof-name"><?php h($user['name']) ?></dd>
      <dt>email</dt><dd id="prof-email"><?php h($user['email']) ?></dd>
      <dt>following</dt><dd id="prof-following"><a href="/following"><?php h($following[0]['c']) ?></a></dd>
      <dt>followers</dt><dd id="prof-followers"><a href="/followers"><?php h($followers[0]['c']) ?></a></dd>
    </dl>
  </div>

  <?php foreach ($tweets as $tweet) { ?>
    <div class="tweet">
      <div class="user">
        <a href="/user/<?php h($tweet['user_id']) ?>"><?php h($users_names[$tweet['user_id']]) ?></a>
      </div>
      <div class="tweet">
        <?php foreach (preg_split('/\n/', $tweet['content']) as $line) { ?>
        <?php h($line) ?><br />
        <?php } ?>
      </div>
      <div class="friend-date">投稿時刻:<?php h($tweet['created_at']) ?></div>
    </div>
  <?php } ?>
</div>
