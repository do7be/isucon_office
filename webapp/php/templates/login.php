<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<title>Twitterrr</title>
</head>

<body class="container">
<h1 class="jumbotron"><a href="/">Twitterrrへようこそ!</a></h1>

<h2>Twitterrr login</h2>

<div class="text-danger" id="logout-message"><?php h($message) ?></div>

<div id="login-form">
  <form method="POST" action="/login">
    <div class="col-md-4 input-group">
      <span class="input-group-addon">E-mail</span>
      <input class="form-control" type="text" name="email" placeholder="E-mail address" />
    </div>
    <div class="col-md-4 input-group">
      <span class="input-group-addon">パスワード</span>
      <input class="form-control" type="password" name="password" />
    </div>
    <div class="col-md-1 input-group">
      <input class="btn btn-default" type="submit" name="Login" value="Login" />
    </div>
  </form>
</div>

</body>
</html>
