<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link href="/css/top.css" rel="stylesheet" type="text/css">
  <title>Kojima's HP</title>
</head>
<body>
  <h1 class="main__title col-12 text-center mb-5">Hello,World!</h1>
  <div class="container">
    <div class="row">
      <div class="menu__list col-12 d-flex text-center my-5">
        <a href="#profile" class="menu col-2 text-center">Profile</a>
        <a href="#portfolio" class="menu col-2 text-center">Portfolio</a>
        <a href="#blog" class="menu col-2 text-center">Blog</a>
        <a href="#skill" class="menu col-2 text-center">Skill</a>
        <a href="https://github.com/gangelion" class="menu col-2 text-center" target="_blank">Github</a>
        <a href="#contact" class="menu col-2 text-center">Contact</a>
      </div>
    </div>
    <div class="row">
      <h2 class="profile col-12 text-center my-5" id="profile">Profile</h2>
      <div class="d-flex col-12">
        <div class="profile__content col-6">1991年5月29日生まれ 東京都出身。<br>趣味は<br>・英語学習（毎日オンライン英会話を継続中）<br>・読書（年間150冊読んだことも。最近は技術本を読み漁る）<br>・旅行（海外旅行が好き、アメリカ、インドネシア、ペルーなど）<br>・筋トレ（過去にベストボディジャパンに出場した経験あり）<br>2015~2019 東京消防庁消防官<br>2019~ エンジニアへ
          <div class="sns mt-5">
            <a href="https://twitter.com/tetsuyakojima86" target="_blank"><i class="fab fa-twitter-square mx-2"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100015453796123" target="_blank"><i class="fab fa-facebook-square mx-2"></i></a>
            <a href="https://github.com/gangelion" target="_blank"><i class="fab fa-github-square mx-2"></i></a>
          </div>
        </div>
        <div class="col-6 d-flex justify-content-center">
          <img class="profile__image" src="{{ asset('img/T1MLERC4C-UR31TJGLT-bffc2f115b74-512.jpg') }}" alt="プロフィール画像">
        </div>
      </div>
    </div>
    <div class="row">
      <h2 class="portfolio col-12 text-center my-5" id="portfolio">Portfolio</h2>
      <h3 class="col-12 text-center mb-5">firstskillapp
        <a class="portfolio__link" href="https://firstskillapp.com" target="_blank">https://firstskillapp.com</a>
      </h3>
      <img class="col-4" src="{{ asset('img/screencapture-18-178-33-110-2020-03-27-11_45_19.png') }}" alt="ポートフォリオ">
      <img class="col-4" src="{{ asset('img/screencapture-18-178-33-110-users-2020-03-27-11_47_18.png') }}" alt="ポートフォリオ">
      <img class="col-4" src="{{ asset('img/screencapture-localhost-3000-plans-new-2020-03-22-23_00_51.png') }}" alt="ポートフォリオ">
    </div>
    <div class="row">
      <h2 class="blog col-12 text-center my-5" id="blog">Blog</h2>
      <div class="blog__list col-12 d-flex text-center">
        <div class="article col-6">ブログ記事1</div>
        <div class="article col-6">ブログ記事2</div>
      </div>
    </div>
    <div class="row">
      <h2 class="skill col-12 text-center my-5" id="skill">Skill</h2>
      <div class="skill__list">
        <div>Ruby on Rails<i class="fas fa-star"></i></div>
        <div>Laravel<i class="fas fa-star-half"></i></div>
        <div>JQuery<i class="fas fa-star-half"></i></div>
        <div>Docker<i class="fas fa-star"></i></div>
        <div>CircleCI<i class="fas fa-star-half"></i></div>
        <div>AWS<i class="fas fa-star"></i></div>
      </div>
    </div>
    <div class="row">
      <h2 class="contact col-12 text-center my-5" id="contact">Contact</h2>
    </div>
    <small class="col-12 d-flex justify-content-center py-5">&copy; 2020 tetsuya kojima</small>
  </div>
</body>
</html>
