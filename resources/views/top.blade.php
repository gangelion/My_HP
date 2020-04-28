<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Kojima's HP</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <h1 class="col-12 text-center my-5">Hello,World!</h1>
    </div>
    <div class="row">
      <div class="menu_list col-12 d-flex text-center my-5">
        <div class="menu col-2 text-center">Profile</div>
        <div class="menu col-2 text-center">Portfolio</div>
        <div class="menu col-2 text-center">Blog</div>
        <div class="menu col-2 text-center">Skill</div>
        <div class="menu col-2 text-center">Github</div>
        <div class="menu col-2 text-center">Contact</div>
      </div>
    </div>
    <div class="row">
      <h2 class="profile col-12 text-center">Profile</h2>
      <div class="d-flex">
        <div class="profile_content col-6">プロフィール内容</div>
        <div class="profile_image col-6">
          <img src="{{ asset('img/T1MLERC4C-UR31TJGLT-bffc2f115b74-512.jpg') }}" alt="image" style="width: 300px; height: 300px; border-radius: 5px;">
        </div>
      </div>
    </div>
    <div class="row">
      <h2 class="portfolio col-12 text-center">Portfolio</h2>
      <div>firstskillapp
        <a href="https://firstskillapp.com">firstskillapp</a>
      </div>
    </div>
    <div class="row">
      <h2 class="blog col-12 text-center">Blog</h2>
      <div class="blog_list d-flex">
        <div class="col-6">ブログ記事1</div>
        <div class="col-6">ブログ記事2</div>
      </div>
    </div>
    <div class="row">
      <h2 class="skill col-12 text-center">Skill</h2>
      <div class="skill_list">
        <div>Ruby on Rails</div>
      </div>
    </div>
    <div class="row">
      <h2 class="contact col-12 text-center">Contact</h2>
    </div>
  </div>
</body>
</html>
