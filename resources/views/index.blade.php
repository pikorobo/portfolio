<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='../css/index.css'>
    <title>Masaya Morooka Portfolio</title>
  </head>

  <body>
    <header id="header">
      <nav>
      <ul id="g-navi">
        <li>
          <a href="/">About</a>
        </li>
        <li>
          <a href="#skills">Skills</a>
        </li>
        <li>
          <a href="#works">Works</a>
        </li>
        <li>
          <a href="/posts/index">Blog</a>
        </li>
        <li>
          <a href="mailto:masaya.morooka0915@gmail.com" class="contact">
            <img src="../images/mail.svg">
            <p>Contact</p>
          </a>
        </li>
      </ul>
      </nav>
    </header>
    <div class="wrapper">
      <div id="about">
        <div class="about-inner">
          <h1>About</h1>
          <div class="about-container">
            <p class="about-img">
              <img src="../images/MasayaMorooka.jpg">
            </p>
            <div class="aboutme">
              <h2>諸岡 雅也 Morooka Masaya</h2>
              <p>2021年7月 友人と協力して地域活性化のためのサービス開発を始める</p>
              <p>2023年3月 芝浦工業大学大学院 卒業</p>
              <p>2023年4月 メーカー企業で海外技術営業職として業務を行う</p>
              <p>2023年10月 開発したサービスを中野レンガ坂様協力のもとテスト運用を開始する</p>
              <p>2023年11月~現在 ITエンジニアを目指して勉強中</p>
            </div>
          </div>
        </div>
      </div>

      <div id="skills">
        <div class="skill-inner">
          <h1>Skills</h1>
          <div class="skill-wrapper">
            <div class="skill-container">
              <div class="skill-img">
                <img src="../images/php.png">
              </div>
              <div class="skill-text">
                <div class="skill-title">PHP</div>
                <div class="skill-level">★★★★☆</div>
                <div class="skill-content">
                  SQLと連携させ、GoogleAPIを用いたwebサービスの開発およびブログや掲示板サイトの制作を行った経験があります。
                </div>
              </div>

            </div>
            <div class="skill-container">
              <div class="skill-img">
                <img src="../images/python.png">
              </div>
              <div class="skill-text">
                <div class="skill-title">Python</div>
                <div class="skill-level">★★★★☆</div>
                <div class="skill-content">
                  主に機械学習系の勉強および実装の際に利用しています。競馬AI(単勝回収率110%)や画像生成AIなどを実装した経験があります。他にも趣味で様々な自動化ツールを作成しています。
                </div>
              </div>
            </div>
            <div class="skill-container">
              <div class="skill-img">
                <img src="../images/html.png">
              </div>
              <div class="skill-text">
                <div class="skill-title">HTML5/CSS/SASS</div>
                <div class="skill-level">★★★☆☆</div>
                <div class="skill-content">
                  デザイン案をもとにしたアニメーションやレイアウトの配置など、基本的なデザイン、レスポンシブ対応やアニメーションの追加を行えます。
                </div>
              </div>
              
            </div>
            <div class="skill-container">
              <div class="skill-img">
                <img src="../images/c.png">
              </div>
              <div class="skill-text">
                <div class="skill-title">C言語</div>
                <div class="skill-level">★★★☆☆</div>
                <div class="skill-content">
                  C言語を用いてサッカーロボットの開発を行った経験があります。ロボカップジュニアでの最高成績は全国ベスト16です。
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="certifications">
        <div class="cert-inner">
          <h1>Certifications</h1>
          <div class="cert-container">
            <div class="cert-img">
              <img src="../images/ipa.png">
            </div>
            <div class="cert-text">
              <div class="cert-title">基本情報技術者試験</div>
              <div class="cert-pubulisher">経済産業省</div>
              <div class="cert-number">認定番号:第FE-2023-11-00300号</div>
            </div>
          </div>
          <div class="cert-container">
            <div class="cert-img">
              <a href="https://www.credly.com/badges/2857b3ac-924c-4352-92d5-8e762c8fa18c/public_url">
                <img src="../images/aws.png">
              </a>
            </div>
            <div class="cert-text">
              <div class="cert-title">AWS Certified Cloud Practitioner</div>
              <div class="cert-pubulisher">Amazon Web Services (AWS)</div>
              <div class="cert-number">認定番号:P7H6EPCL5BE11GGP</div>
            </div>
          </div>
        </div>
      </div>

      <div id="works">
        <div class="works-inner">
          <h1>Works</h1>
          <div class="works-container">
              <div class="card">
                <div class="card-img">
                  <a href="/">
                    <img src="../images/portfolio.jpg">
                  </a>
                </div>
                <div class="card-text">
                  <div class="card-title">
                    ポートフォリオ
                  </div>
                  <div class="card-content">
                    ポートフォリオ用のWebサイト
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-img">
                  <a href="https://sukiari.jp">
                    <img src="../images/sukiari.jpg">
                  </a>
                </div>
                <div class="card-text">
                  <div class="card-title">
                    スキアリ
                  </div>
                  <div class="card-content">
                    店舗の空席情報を可視化するサービス
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <footer id="footer">
      <p>Contact</p>
      <a href="mailto:masaya.morooka0915@gmail.com">masaya.morooka0915@gmail.com</a>
      <small> All Rights Reserved 2024 &copy; Masaya Morooka</small>  
    </footer>
  </body>
</html>
