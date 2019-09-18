<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Login - Excellen Hospitality College</title>
  <link rel="stylesheet" href="<?=base_url()?>vendor/semantic-ui/semantic.min.css">
  <link rel="stylesheet" href="<?=base_url()?>vendor/dataTables/css/dataTables.semanticui.min.css">
  <link rel="stylesheet" href="<?=base_url()?>vendor/custom/themes.min.css">
  <link rel="stylesheet" href="<?=base_url()?>vendor/custom/themes.min.css">
  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <img src="<?=base_url()?>img/logo1.png" class="image">
      <div class="content">
        Log-in Halaman Admin
      </div>
    </h2>
    <form class="ui large form" method="post" action="<?=base_url('login/auth');?>">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="username" placeholder="Username" required="required">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password" required="required">
          </div>
        </div>
        <button class="ui fluid large teal submit button" type="submit">Login</button>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      Excellent Hospitality College
    </div>
  </div>
</div>

</body>

</html>
