<?php get_header(); ?>

<!-- main -->
<main>

  <section class="hero fade-up">

    <div class="section-header fade-up">
      <div class="section-title">
        <span>PRICE</span>
        <h1>料金プラン</h1>
        <h2>運営サポートは大きく分けると2つのコースがあります。</h2>
      </div>
    </div>


    <div class="hero-cards fade-up">
      <!-- ① オーナー運営プラン -->
      <article class="hero-card">
        <div class="hero-card-head">
          <h3>オーナー運営プラン</h3>
        </div>

        <div class="hero-card-content">
          <div class="hero-card-text">
            <p >
              物件調査、事業計画、必要な工事、各種申請など、
              民泊を始めるために必要な準備をサポートします。
            </p>
            <div class="more">
              <span class="more-text">プランを見る</span>
              <a href="#owner" class="circle-btn">
                <span class="arrow arrow-default">↓</span>
                <span class="arrow arrow-hover">↓</span>
              </a>
            </div>
          </div>

          <img src="<?php echo get_template_directory_uri(); ?>/images/price/price-card1.png" alt="オーナー運営プラン">
        </div>

      </article>

      <!-- ② 賃貸運営プラン -->
      <article class="hero-card">
        <div class="hero-card-head">
          <h3>賃貸運営プラン</h3>
        </div>

        <div class="hero-card-content">
          <div class="hero-card-text">
            <p>
              予約サイト管理、ゲスト対応、レビュー管理、清掃調整など、開業後の運営を継続的にサポートします。
            </p>
            <div class="more">
              <span class="more-text">プランを見る</span>
              <a href="#lease" class="circle-btn">
                <span class="arrow arrow-default">↓</span>
                <span class="arrow arrow-hover">↓</span>
              </a>
            </div>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/price/price-card2.png" alt="賃貸運営プラン">
        </div>
      </article>
    </div>

  </section>

  <!-- owner -->
  <section id="owner" class="owner overlap-section">

    <div class="owner-inner">
      
      <div class="section-header fade-up">
        <div class="section-title">
          <span>OWNER</span>
          <h2>オーナー運営プラン</h2>
        </div>
      <p>
          運営の⼀部サポートから丸投げまでオーナー様の希望に合わせたプランでサポートさせていただきます。<br>
          オーナー様がご⾃⾝の名義で宿泊施設を開業するプランです。<br>
          旅館業の申請、建物の⼯事、インテリア、そのほか、⽔光熱費などのインフラ費⽤をすべてご⾃⾝で負担をします。<br>
          リスクを取る分、売り上げの配分も⼤きくなります。
      </p>
      </div>

      <div class="owner-cards">
        <div class="owner-card card1">

          <div class="owner-card-header">
            <span>メッセージ対応プラン</span>
            <h3>運営代行プラン</h3>
            <p>
              民泊やゲストハウスの利用者は、大半が海外のお客様。清掃や施設の管理は対応できるが、言葉の壁や夜間・休日のメール対応はサポートして欲しい。<br>
              そんな、一部の運営にお悩みの方向けのプランです。
            </p>
          </div>

          <div class="owner-card-section owner-card-section--center">
            <p>総売り上げの<span class="percent">10%</span></p>
          </div>

          <div class="owner-card-section">
            <h4>アカウント管理</h4>
            <ul>
              <li>メッセージ対応</li>
              <li>多言語対応</li>
              <li>レビュー管理</li>
              <li>カレンダー管理</li>
              <li>宿泊料金調整</li>
            </ul>
          </div>

          <div class="owner-card-section is-disabled">
            <h4>清掃管理</h4>
            <ul>
              <li>シフト管理</li>
              <li>清掃の手配</li>
              <li>リネンレンタル</li>
              <li>備品の管理</li>
            </ul>
          </div>

          <div class="owner-card-section">
            <h4>宿泊金額最適化</h4>
          </div>

          <div class="owner-card-section">
            <h4>リスティングページ対応</h4>
          </div>

          <div class="owner-card-section is-disabled">
            <h4>清掃スケジュール調整</h4>
          </div>

          <div class="owner-card-section owner-card-section--center owner-card-section--option">
            <h4>オプション</h4>
            <ul>
              <li>緊急時の駆け付けサポート</li>
              <li>施設のメンテナンス</li>
              <li>インフォメーションの作成</li>
            </ul>
          </div>

        </div>
        <div class="owner-card card2">

          <div class="owner-card-header">
            <span>清掃以外の運営管理</span>
            <h3>お任せプラン</h3>
            <p>
              運用代行プランに清掃会社、あるいは清掃スタッフのシフト管理といったサポートが追加。<br>
              運営のうち、清掃や備品管理以外をすべてお任せしたい方向けのプランです。
            </p>
          </div>

          <div class="owner-card-section owner-card-section--center">
            <p>総売り上げの<span class="percent">15%</span></p>
          </div>

          <div class="owner-card-section">
            <h4>アカウント管理</h4>
            <ul>
              <li>メッセージ対応</li>
              <li>多言語対応</li>
              <li>レビュー管理</li>
              <li>カレンダー管理</li>
              <li>宿泊料金調整</li>
            </ul>
          </div>

          <div class="owner-card-section">
            <h4>清掃管理</h4>
            <ul>
              <li>シフト管理</li>
              <li class="is-disabled">清掃の手配</li>
              <li class="is-disabled">リネンレンタル</li>
              <li class="is-disabled">備品の管理</li>
            </ul>
          </div>

          <div class="owner-card-section">
            <h4>宿泊金額最適化</h4>
          </div>

          <div class="owner-card-section">
            <h4>リスティングページ対応</h4>
          </div>

          <div class="owner-card-section">
            <h4>清掃スケジュール調整</h4>
          </div>

          <div class="owner-card-section owner-card-section--center owner-card-section--option">
            <h4>オプション</h4>
            <ul>
              <li>緊急時の駆け付けサポート</li>
              <li>施設のメンテナンス</li>
              <li>インフォメーションの作成</li>
            </ul>
          </div>

        </div>
        <div class="owner-card card3">

          <div class="owner-card-header">
            <span>すべてお任せ</span>
            <h3>運用丸投げプラン</h3>
            <p>
              特別な事情を除いてオーナーは運営管理にほぼ関与しない完全丸投げプランです。<br>
              アカウントの運用から施設の管理、清掃や備品の手配まですべて当社にてサポートさせていただきます。<br>
              他府県や海外にお住まいのオーナー様向けです。
            </p>
          </div>

          <div class="owner-card-section owner-card-section--center">
            <p>総売り上げの<span class="percent">20%</span></p>
            <span class="note">※清掃費・備品は別途</span>
          </div>

          <div class="owner-card-section">
            <h4>アカウント管理</h4>
            <ul>
              <li>メッセージ対応</li>
              <li>多言語対応</li>
              <li>レビュー管理</li>
              <li>カレンダー管理</li>
              <li>宿泊料金調整</li>
            </ul>
          </div>

          <div class="owner-card-section">
            <h4>清掃管理</h4>
            <ul>
              <li>シフト管理</li>
              <li>清掃の手配</li>
              <li>リネンレンタル</li>
              <li>備品の管理</li>
            </ul>
          </div>

          <div class="owner-card-section">
            <h4>宿泊金額最適化</h4>
          </div>

          <div class="owner-card-section">
            <h4>リスティングページ対応</h4>
          </div>

          <div class="owner-card-section">
            <h4>清掃スケジュール調整</h4>
          </div>

          <div class="owner-card-section owner-card-section--center owner-card-section--option">
            <h4>オプション</h4>
            <ul>
              <li>緊急時の駆け付けサポート</li>
              <li>施設のメンテナンス</li>
              <li>インフォメーションの作成</li>
            </ul>
          </div>

        </div>
      </div>

      <section class="spot">

        <div class="spot-header">
          <h3 class="underline-h3 fade-up">スポット対応</h3>
          <p>
            ゲストハウスや民泊の運営を部分的にサポートするサービスも提供しております。
          </p>
        </div>

        <div class="spot-content">
          <img src="<?php echo get_template_directory_uri(); ?>/images/price/price-spot.png" alt="施設外玄関帳場">
          <div class="spot-content-text">
            <h4 class="underline-h4 fade-up">施設外玄関帳場</h4>
            <p>
              簡易宿泊施設の受付を文字通り、施設とは別の場所で行うための拠点を提供しています。施設外玄関帳場を活用することによってオーナーは地震の宿泊施設に受付を設置する必要がなくなる為、建物の間取りを広々と使うことができます。<br>
              また、経費の観点から最も大きな負担となる人件費の削減にも繋がります。
            </p>
            <h5 class="underline-h5">費用</h5>
            <p>
              1施設40,000円 / 月 (税別)<br>
              運営とセットでお申込みの場合は、上記より低価格でご提供させていただきます。
            </p>
          </div>
        </div>

        <div class="spot-content reverse">
          <img src="<?php echo get_template_directory_uri(); ?>/images/price/price-spot2.png" alt="駆け付け対応">
          <div class="spot-content-text">

            <div class="spot-content-text1">
              <h4 class="underline-h4 fade-up">駆けつけ要員の確保</h4>
              <p>
                京都市では宿泊施設内にスタッフが滞在しない体制で運営する施設に対して、緊急時等に現地に駆けつけができるように宿泊施設から800m以内の拠点にスタッフを待機させておくよう条例で定めています。<br>
              </p>
              <h5 class="underline-h5">費用</h5>
              <p>
                1施設15,000円 / 月 (税別)
              </p>
            </div>

            <h4 class="underline-h4 fade-up">緊急時の駆けつけ対応</h4>
            <p>
              日頃からしっかりと施設の点検をしていても、お客様に正確に案内をしていても、トラブルは必ず起きるものです。鍵をなくした、エアコンが動作しない、お湯がでない等、それらは突然やってきます。このような緊急時にオーナー様に代わって現地へ駆けつけて、トラブルの対処をさせていただきます。<br>
            </p>
            <h5 class="underline-h5">費用</h5>
            <p>
              不足備品の配送対応 / 1回3,000円 (税別) ～<br>
              鍵の紛失及び電子キーの故障対応 / 1回3,000円 (税別) ~
              家電代替品の購入・設置 / 1回5,000月 (税別) ~
            </p>
          </div>
        </div>
      </section>

      <section class="cleaning">
        <div class="cleaning-header">
          <h3 class="underline-h3 fade-up">清掃対応</h3>
          <p>
            清掃のみのサポートから、リネンの管理、備品の補充、ゴミ回収まですべてお任せいただくプランまで、ご要望に合わせた清掃対応を行うことが可能です。リビング、キッチン、トイレやバスルームなどの水回り、ベッドメイキングの他、消耗品の購入及び設置対応を行います。オーナー様の営業方針によっては、歯ブラシ、コーヒー、使い捨てスリッパなどのアメニティを設置することも可能です。
          </p>
        </div>

        <!-- more-tile -->
        <section class="more-tile-wrapper fade-up">
          <a class="more-tile" href="https://pleco-web.com/sub/" target="_blank" rel="noopener">
            <img src="<?php echo get_template_directory_uri(); ?>/images/price/designershotel.jpg" alt="民泊清掃はPLECO">
            <span class="more-tile-title">民泊清掃はPLECO</span>
            <span class="more-tile-subtitle">詳しくはこちら</span>
            <span class="more-tile-arrow">→</span>
          </a>
        </section>
      </section>

    </div>

  </section>

  <!-- lease -->
  <section id="lease" class="lease under-section">
    <div class="section-header fade-up">
      <div class="section-title">
        <span>LEASE</span>
        <h2>賃貸運営プラン</h2>
      </div>
      <p>
        リスクを抑えて⾃⾝の所有する不動産の収益性を⾼めたいというオーナー様におすすめなのが賃貸プランです。
      </p>
    </div>

    <section class="lease-course fade-up">

      <div class="lease-content">
        <div class="lease-content-left">
          <img src="<?php echo get_template_directory_uri(); ?>/images/price/price-lease1.jpg" alt="お手軽家賃アップコース">
        </div>

        <div class="lease-content-right">
          <h4 class="underline-h4">お手軽家賃アップコース</h4>
          <p>
            賃貸物件を簡易宿所として利用させていただく代わりに通常の賃料より高い設定の家賃をお支払いさせていただきます。
          </p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/price/price-lease-ex1.png" alt="お手軽家賃アップコースの一例">
        </div>
      </div>

    </section>
    <section class="lease-course fade-up">

      <div class="lease-content">
        <div class="lease-content-left">
          <img src="<?php echo get_template_directory_uri(); ?>/images/price/price-lease2.jpg" alt="お手軽家賃アップコース">
        </div>

        <div class="lease-content-right">
          <h4 class="underline-h4">施設リフォームお任せコース</h4>
          <p>
            空き家・不動産は持っているけど賃貸にするにはリフォームが必要な方向けです。通常の家賃より低い設定で賃貸していただければ、必要なリフォームはこちらで行います。
          </p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/price/price-lease-ex2.png" alt="施設リフォームお任せコースの一例">
        </div>
      </div>

    </section>

  </section>

</main>

<?php get_footer(); ?>