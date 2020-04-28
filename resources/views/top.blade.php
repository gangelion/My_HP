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
        <a href="#" class="menu col-2 text-center">Profile</a>
        <a href="#" class="menu col-2 text-center">Portfolio</a>
        <a href="#" class="menu col-2 text-center">Blog</a>
        <a href="#" class="menu col-2 text-center">Skill</a>
        <a href="https://github.com/gangelion" class="menu col-2 text-center">Github</a>
        <a href="#" class="menu col-2 text-center">Contact</a>
      </div>
    </div>
    <div class="row">
      <h2 class="profile col-12 text-center my-5">Profile</h2>
      <div class="d-flex col-12">
        <div class="profile_content col-6">プロフィール内容</div>
        <div class="profile_image col-6">
          <img src="{{ asset('img/T1MLERC4C-UR31TJGLT-bffc2f115b74-512.jpg') }}" alt="プロフィール画像" style="width: 300px; height: 300px; border-radius: 5px;">
        </div>
      </div>
    </div>
    <div class="row">
      <h2 class="portfolio col-12 text-center my-5">Portfolio</h2>
      <h3 class="col-12 text-center mb-5">firstskillapp
        <a href="https://firstskillapp.com">https://firstskillapp.com</a>
      </h3>
      <img class="col-4" src="{{ asset('img/screencapture-18-178-33-110-2020-03-27-11_45_19.png') }}" alt="ポートフォリオ" style="width: 300px; height: 300px; border-radius: 5px;">
      <img class="col-4" src="{{ asset('img/screencapture-18-178-33-110-users-2020-03-27-11_47_18.png') }}" alt="ポートフォリオ" style="width: 300px; height: 300px; border-radius: 5px;">
      <img class="col-4" src="{{ asset('img/screencapture-localhost-3000-plans-new-2020-03-22-23_00_51.png') }}" alt="ポートフォリオ" style="width: 300px; height: 300px; border-radius: 5px;">
    </div>
    <div class="row">
      <h2 class="blog col-12 text-center my-5">Blog</h2>
      <div class="blog_list col-12 d-flex text-center">
        <div class="article col-6">ブログ記事1</div>
        <div class="article col-6">ブログ記事2</div>
      </div>
    </div>
    <div class="row">
      <h2 class="skill col-12 text-center my-5">Skill</h2>
      <div class="skill_list">
        <div>Ruby on Rails</div>
        <div>Laravel</div>
        <div>JQuery</div>
        <div>Docker</div>
        <div>CircleCI</div>
        <div>AWS</div>
      </div>
    </div>
    <div class="row">
      <h2 class="contact col-12 text-center my-5">Contact</h2>
    </div>
  </div>
</body>
</html>
