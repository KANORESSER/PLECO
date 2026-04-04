<?php get_header(); ?>

<!-- Overlay -->
<section id="overlay">
  <p class="overlay-text">
    民泊運営を<br class="sp-only">トータルサポート
  </p>
</section>

<section id="main-content">

  <!-- main -->
  <main>
    <!-- hero -->
    <section class="hero">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo/ロゴ-グラデーション-clipped.png" class="hero-bg-logo" alt="PLECOロゴ画像">

      <div class="hero-bg-picture">
        <img src="<?php echo get_template_directory_uri(); ?>/images/hero1.png" alt="民泊画像">
      </div>

      <div class="hero-left">
        <div class="hero-left-inner">
          <p class="hero-eyebrow">Minpaku Management & Cleaning</p>
          <h1 class="hero-title">
            民泊運営を<br>トータルサポート
          </h1>
          <p class="hero-lead">
            集客・清掃・ゲスト対応まで一括サポート。<br>
            安定した民泊運営を実現します。
          </p>

          <div class="hero-actions">
            <a class="btn btn-lg" href="/contact">無料相談する</a>
            <a class="btn btn-ghost btn-lg" href="/price">料金プラン</a>
          </div>
        </div>
      </div>


    </section>

    <!-- about -->
    <section id="about" class="about">
      <div class="vertical-text">
        About&nbsp;&nbsp;PLECO
      </div>

      <div class="about-text">
        <h1 class="fade-up">
          京都の民泊・宿泊施設において、<br>
          運営管理から現場品質までを支えます。
        </h1>
        <p class="fade-up">
          世界有数の観光地・京都において、民泊・宿泊施設の運営サポートを行っています。<br>
          運営管理、現場オペレーション、清掃品質までを一貫して整えることで、<br>
          オーナー様とゲストの双方にとって安心できる宿泊環境を実現します。
        </p>
        <a href="/about" class="btn btn-lg fade-up">会社紹介はこちら</a>
      </div>
    </section>

    <!-- service -->
    <section id="service-overview" class="service-overview overlap-section">
      <div class="container">

        <div class="section-header fade-up">
          <div class="section-title">
            <span>SERVICE</span>
            <h2>PLECOのサービス</h2>
          </div>
          <p>
            PLECOでは、民泊の<strong>開業支援</strong>から
            <strong>運営管理</strong>まで、ワンストップでサポートしています。
          </p>
        </div>

        <div class="service-overview-cards fade-up">
          <!-- ① 民泊開業支援 -->
          <article class="service-overview-card service-overview-card-startup">
            <div class="service-overview-card-head">
              <h3>民泊開業支援</h3>
            </div>

            <div class="service-overview-card-content">
              <div class="service-overview-card-text">
                <p>
                  物件調査、事業計画、必要な工事、各種申請など、
                  民泊を始めるために必要な準備をサポートします。
                </p>
                <div class="more">
                  <span class="more-text">詳しくはこちら</span>
                  <a href="/startup-support" class="circle-btn">
                    <span class="arrow arrow-default">→</span>
                    <span class="arrow arrow-hover">→</span>
                  </a>
                </div>
              </div>

              <img src="<?php echo get_template_directory_uri(); ?>/images/service-overview1.png" alt="民泊開業支援イメージ画像">
            </div>

          </article>

          <!-- ② 民泊運営代行 -->
          <article class="service-overview-card service-overview-card-operation">
            <div class="service-overview-card-head">
              <h3>民泊運営代行</h3>
            </div>

            <div class="service-overview-card-content">
              <div class="service-overview-card-text">
                <p>
                  予約サイト管理、ゲスト対応、レビュー管理、清掃調整など、開業後の運営を継続的にサポートします。
                </p>
                <div class="more">
                  <span class="more-text">詳しくはこちら</span>
                  <a href="management.html" class="circle-btn">
                    <span class="arrow arrow-default">→</span>
                    <span class="arrow arrow-hover">→</span>
                  </a>
                </div>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/service-overview2.png" alt="民泊運営代行イメージ画像">
            </div>
          </article>
        </div>

      </div>
    </section>

    <!-- startup-support -->
    <section id="startup-support" class="startup-support under-section">

      <div class="container">

        <div class="section-header fade-up">
          <div class="section-title">
            <span>STARTUP SUPPORT</span>
            <h2>民泊開業支援</h2>
          </div>
          <p>
            <strong>物件選定から申請手続き、開業準備</strong>まで民泊開業をトータルサポートします。
          </p>
        </div>

        <!-- startup-recommend -->
        <section class="startup-recommend">
          <h3 class="underline-h3 fade-up">こんな方におすすめ</h3>
          <div class="recommend-container fade-up">

            <div class="recommend-item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/startup-support/startup-recommend1.png" alt="民泊を始めたい イメージ画像">
              <h4>民泊を始めたい</h4>
              <p>手続きの流れや準備方法がわからず、開業までの進め方に不安がある方</p>
            </div>
            <div class="recommend-item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/startup-support/startup-recommend2.png" alt="物件が民泊に向くか知りたい イメージ画像">
              <h4>物件が民泊に向くか知りたい</h4>
              <p>所有物件や検討中の物件が民泊として運営可能か確認したい方</p>
            </div>
            <div class="recommend-item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/startup-support/startup-recommend3.png" alt="申請手続きが難しい イメージ画像">
              <h4>申請手続きが難しい</h4>
              <p>旅館業・民泊新法などの行政申請を専門家に任せたい方</p>
            </div>

          </div>
        </section>

        <!-- startup-flow -->
        <section class="startup-flow">

          <h3 class="underline-h3 fade-up">開業サポート内容</h3>

          <div class="startup-flow-grid fade-up">

            <div class="startup-flow-card card1">
              <div class="startup-flow-icon">
                <svg viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
                  <!-- 屋根 -->
                  <path d="M20 55 L60 25 L100 55"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    fill="none" />
                  <!-- 家の本体 -->
                  <rect x="30" y="55"
                    width="60"
                    height="40"
                    rx="4"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    fill="none" />
                  <!-- ドア -->
                  <rect x="55" y="70"
                    width="10"
                    height="25"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    fill="none" />
                </svg>
              </div>
              <span class="startup-flow-step">1</span>
              <h4>物件調査</h4>
              <p>
                物件の立地や条件を確認し、<br>
                民泊として運営可能か調査します。
              </p>
            </div>

            <div class="startup-flow-card card2">
              <div class="startup-flow-icon">
                <svg viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">

                  <!-- 書類 -->
                  <rect x="28" y="24" width="56" height="72" rx="6"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    fill="none" />

                  <!-- グラフ線 -->
                  <path d="M40 74 L52 62 L64 68 L76 48"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round" />

                  <!-- 点 -->
                  <circle cx="40" cy="74" r="2.5" fill="var(--color-main)" />
                  <circle cx="52" cy="62" r="2.5" fill="var(--color-main)" />
                  <circle cx="64" cy="68" r="2.5" fill="var(--color-main)" />
                  <circle cx="76" cy="48" r="2.5" fill="var(--color-main)" />

                  <!-- 下線 -->
                  <line x1="40" y1="84" x2="72" y2="84"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    stroke-linecap="round" />

                </svg>
              </div>
              <span class="startup-flow-step">2</span>
              <h4>計画作成</h4>
              <p>
                収支計画や運営方針を整理し、<br>
                開業までのスケジュールを作成します。
              </p>
            </div>

            <div class="startup-flow-card card3">
              <div class="startup-flow-icon">
                <svg viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">

                  <!-- 書類 -->
                  <rect x="30" y="22" width="54" height="74" rx="6"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    fill="none" />

                  <!-- 文字ライン -->
                  <line x1="42" y1="40" x2="72" y2="40"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    stroke-linecap="round" />
                  <line x1="42" y1="52" x2="68" y2="52"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    stroke-linecap="round" />

                  <!-- チェック丸 -->
                  <circle cx="76" cy="76" r="16"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    fill="none" />

                  <!-- チェック -->
                  <path d="M68 76 L74 82 L84 70"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round" />

                </svg>
              </div>
              <span class="startup-flow-step">3</span>
              <h4>行政申請</h4>
              <p>
                旅館業許可や民泊新法など、<br>
                必要な申請手続きをサポートします。
              </p>
            </div>

            <div class="startup-flow-card card4">
              <div class="startup-flow-icon">
                <svg viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">

                  <!-- ランプ -->
                  <path d="M70 28 L82 28 L76 42 Z"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    fill="none"
                    stroke-linejoin="round" />
                  <line x1="76" y1="42" x2="76" y2="54"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    stroke-linecap="round" />

                  <!-- テーブル -->
                  <rect x="52" y="54" width="36" height="8" rx="3"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    fill="none" />
                  <line x1="58" y1="62" x2="58" y2="88"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    stroke-linecap="round" />
                  <line x1="82" y1="62" x2="82" y2="88"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    stroke-linecap="round" />

                  <!-- 椅子 -->
                  <rect x="28" y="58" width="18" height="16" rx="2"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    fill="none" />
                  <line x1="30" y1="74" x2="30" y2="90"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    stroke-linecap="round" />
                  <line x1="44" y1="74" x2="44" y2="90"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    stroke-linecap="round" />

                </svg>
              </div>
              <span class="startup-flow-step">4</span>
              <h4>開業準備</h4>
              <p>
                家具・備品準備や写真撮影、<br>
                予約サイト登録などを行います。
              </p>
            </div>

            <div class="startup-flow-card card5">
              <div class="startup-flow-icon">
                <svg viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">

                  <!-- 家 -->
                  <path d="M22 50 L50 28 L78 50"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                  <rect x="30" y="50" width="40" height="30" rx="4"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    fill="none" />

                  <!-- ドア -->
                  <rect x="46" y="62" width="8" height="18"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    fill="none" />

                  <!-- OPEN看板 -->
                  <line x1="80" y1="34" x2="96" y2="48"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    stroke-linecap="round" />
                  <rect x="76" y="48" width="26" height="18" rx="3"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    fill="none" />

                  <!-- 看板の文字線 -->
                  <line x1="82" y1="57" x2="96" y2="57"
                    stroke="var(--color-main)"
                    stroke-width="3"
                    stroke-linecap="round" />

                </svg>
              </div>
              <span class="startup-flow-step">5</span>
              <h4>運営開始</h4>
              <p>
                予約受付を開始し、<br>
                民泊運営がスタートします。
              </p>
            </div>

          </div>

        </section>

        <!-- more-tile -->
        <section class="more-tile-wrapper fade-up">
          <a class="more-tile" href="/startup-support">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo_bg.png" alt="PLECOロゴ画像">
            <span class="more-tile-title">民泊開業支援</span>
            <span class="more-tile-subtitle">詳しくはこちら</span>
            <span class="more-tile-arrow">→</span>
          </a>
        </section>

      </div>

    </section>

    <!-- management -->
    <section id="management" class="management overlap-section">

      <div class="container">

        <div class="section-header fade-up">
          <div class="section-title">
            <span>MANAGEMENT SERVICE</span>
            <h2>民泊運営代行</h2>
          </div>
          <p>
            <strong>宿泊予約サイトの運営、ゲスト対応、清掃・メンテナンス</strong>まで、<br>民泊施設の運営をトータルサポートします。
          </p>
        </div>

        <!-- 許可取得済みの方 -->
        <section class="licensed-flow">
          <h3 class="underline-h3 fade-up">旅館業の許可取得済みの方</h3>
          <div class="licensed-flow-container fade-up">

            <div class="licensed-flow-image over1024-only">
              <img src="<?php echo get_template_directory_uri(); ?>/images/management/licensed.png" alt="旅館業の許可取得済みの方 イメージ画像">
            </div>

            <div class="licensed-flow-step">
              <span>1</span>
              <h4>契約準備</h4>
              <p>サービス内容のご説明・ヒアリングを行い、契約条件を整理いたします。</p>
            </div>

            <div class="licensed-flow-step">
              <span>2</span>
              <h4>物件視察</h4>
              <p>現地確認を行い、運営開始に向けた改善点を洗い出します。</p>
            </div>

            <div class="licensed-flow-step">
              <span class="step-number">3</span>
              <h4>契約・開業準備</h4>
              <p>管理契約締結後、運営体制の整備を行います。</p>
            </div>

            <div class="licensed-flow-step">
              <span class="step-number">4</span>
              <h4>営業開始</h4>
              <p>予約管理・価格調整・メッセージ対応を開始します。</p>
            </div>

            <div class="licensed-flow-step">
              <span class="step-number">5</span>
              <h4>収益獲得</h4>
              <p>データ分析を行いながら、収益最大化を図ります。</p>
            </div>

          </div>
        </section>

        <!-- 新規に旅館業の許可を取得される方 -->
        <section class="opening-flow">
          <h3 class="underline-h3 fade-up over1024-only">新規に旅館業の許可を取得される方</h3>
          <h3 class="underline-h3 fade-up sp-only margin-bottom-0">新規に旅館業の許可を</h3>
          <h3 class="underline-h3 fade-up sp-only">取得される方</h3>
          <div class="opening-flow-container fade-up">

            <div class="opening-flow-image over1024-only">
              <img src="<?php echo get_template_directory_uri(); ?>/images/management/opening.png" alt="新規に旅館業の許可を取得される方 イメージ画像">
            </div>

            <div class="opening-flow-step">
              <span>1</span>
              <h4>物件調査</h4>
              <p>物件の立地・条件を確認し、民泊運営の可否を判断します。</p>
            </div>

            <div class="opening-flow-step">
              <span>2</span>
              <h4>事業計画作成</h4>
              <p>収支計画・改修計画を整理し、開業までの方針を明確にします。</p>
            </div>

            <div class="opening-flow-step">
              <span>3</span>
              <h4>ご契約</h4>
              <p>サポート内容をご確認いただき、開業準備を進めます</p>
            </div>

            <div class="opening-flow-step">
              <span>4</span>
              <h4>物件工事・準備</h4>
              <p>必要な改修工事や設備準備を行います。</p>
            </div>

            <div class="opening-flow-step">
              <span>5</span>
              <h4>旅館業申請</h4>
              <p>行政協議・申請手続きを進めます。</p>
            </div>

            <div class="opening-flow-step">
              <span>6</span>
              <h4>開業準備</h4>
              <p>家具・備品準備、撮影、ページ作成などを行います。</p>
            </div>

            <div class="opening-flow-step">
              <span>7</span>
              <h4>運営チェック</h4>
              <p>開業前の確認やシミュレーションを行い、課題を調整します。</p>
            </div>

            <div class="opening-flow-step">
              <span>8</span>
              <h4>集客開始</h4>
              <p>予約サイト公開などを行い、募集を開始します。</p>
            </div>

            <div class="opening-flow-step">
              <span>9</span>
              <h4>運営開始</h4>
              <p>宿泊施設としての運営をスタートします。</p>
            </div>

            <div class="opening-flow-step">
              <span>10</span>
              <h4>運営サポート</h4>
              <p>開業後も安定運営に向けて継続的に支援します。</p>
            </div>
          </div>
        </section>

        <!-- CTA -->
        <section class="startup-cta fade-up">
          <div class="section-title">
            <h2>民泊運営代行のご相談はこちら</h2>
            <span>
              京都で民泊運営をご検討の方は、お気軽にご相談ください。
            </span>
          </div>
          <a href="/contact" class="btn btn-lg fade-up">
            無料相談はこちら
          </a>
        </section>

        <!-- more-tile -->
        <section class="more-tile-wrapper fade-up">
          <a class="more-tile" href="/management">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo_bg.png" alt="PLECOロゴ画像">
            <span class="more-tile-title">民泊運営代行</span>
            <span class="more-tile-subtitle">詳しくはこちら</span>
            <span class="more-tile-arrow">→</span>
          </a>
        </section>

      </div>

    </section>

    <!-- price -->
    <section id="price" class="price under-section">
      <div class="page-header fade-up">
        <div class="page-title">
          <span>PRICE</span>
          <h1>料金プラン</h1>
        </div>
      </div>

      <div class="price-container">
        <h3 class="fade-up">
          料金プランは大きく分けると3つのコースがあります。
        </h3>

        <div class="price-cards fade-up">
          <div class="price-card card1">

            <div class="price-card-header">
              <span>メッセージ対応プラン</span>
              <h3>ライトプラン</h3>
            </div>

            <div class="price-card-text">
              <p>
                民泊運営の一部をサポート。<br>
                ゲスト対応やメッセージ返信などの業務を代行します。
              </p>
            </div>

          </div>
          <div class="price-card card2">
            <div class="price-card-header">
              <span>清掃以外の運営管理</span>
              <h3>スタンダードプラン</h3>
            </div>
            <div class="price-card-text">
              <p>
                清掃以外の運営をまとめてサポート。<br>
                予約管理や施設運営などを一括してお任せいただけます。
              </p>
            </div>
          </div>
          <div class="price-card card3 plan-featured">
            <div class="badge">人気<br><strong>NO.1</strong></div>
            <div class="price-card-header">
              <span>すべてお任せ</span>
              <h3>フルサポートプラン</h3>
            </div>
            <div class="price-card-text">
              <p>
                民泊運営をすべてお任せ。<br>
                運営から清掃・備品管理まで、トータルで対応します。
              </p>
            </div>
          </div>
        </div>

        <a href="/price" class="price-plan-btn btn btn-lg fade-up">
          料金プランを見る
        </a>

      </div>
    </section>

    <!-- works -->
    <section id="works" class="works overlap-section">
      <div class="container">

        <div class="section-header fade-up">
          <div class="section-title">
            <span>WORKS</span>
            <h2>実績</h2>
          </div>
        </div>

        <div class="works-cards fade-up">
          <!-- card1 -->
          <div class="works-card">
            <div class="works-card-image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/works/works1.png" alt="京都市南区民泊">
            </div>
            <div class="works-card-text">

              <h3 class="underline-h3">京都市南区 / 旅館</h3>

              <div class="works-data">
                <span class="works-label">月売上平均</span>

                <div class="works-row">
                  <span class="works-before">150万円</span>
                  <span class="works-arrow">→</span>
                  <span class="works-after">
                    <span class="works-after-num">280</span>
                    <span class="works-after-unit">万円</span>
                  </span>
                </div>
              </div>
              <div class="works-data">
                <span class="works-label">平均稼働率</span>

                <div class="works-row">
                  <span class="works-before">33%</span>
                  <span class="works-arrow">→</span>
                  <span class="works-after">
                    <span class="works-after-num">70</span>
                    <span class="works-after-unit">%</span>
                  </span>
                </div>
              </div>

            </div>
          </div>
          <!-- card2 -->
          <div class="works-card">
            <div class="works-card-image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/works/works2.png" alt="奈良県民家">
            </div>
            <div class="works-card-text">

              <h3 class="underline-h3">奈良県/民泊</h3>

              <div class="works-data">
                <span class="works-label">月売上平均</span>

                <div class="works-row">
                  <span class="works-before">10万円</span>
                  <span class="works-arrow">→</span>
                  <span class="works-after">
                    <span class="works-after-num">25</span>
                    <span class="works-after-unit">万円</span>
                  </span>
                </div>
              </div>
              <div class="works-data">
                <span class="works-label">平均稼働率</span>

                <div class="works-row">
                  <span class="works-before">23%</span>
                  <span class="works-arrow">→</span>
                  <span class="works-after">
                    <span class="works-after-num">60</span>
                    <span class="works-after-unit">%</span>
                  </span>
                </div>
              </div>

            </div>
          </div>
          <!-- card3 -->
          <div class="works-card">
            <div class="works-card-image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/works/works3.png" alt="大阪府マンション">
            </div>
            <div class="works-card-text">

              <h3 class="underline-h3">大阪府/マンション型</h3>

              <div class="works-data">
                <span class="works-label">月売上平均</span>

                <div class="works-row">
                  <span class="works-before">35万円</span>
                  <span class="works-arrow">→</span>
                  <span class="works-after">
                    <span class="works-after-num">120</span>
                    <span class="works-after-unit">万円</span>
                  </span>
                </div>
              </div>
              <div class="works-data">
                <span class="works-label">平均稼働率</span>

                <div class="works-row">
                  <span class="works-before">30%</span>
                  <span class="works-arrow">→</span>
                  <span class="works-after">
                    <span class="works-after-num">86</span>
                    <span class="works-after-unit">%</span>
                  </span>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- news -->
    <section id="news" class="top-news under-section">
      <div class="container">
        <div class="section-header fade-up">
          <div class="section-title">
            <span>NEWS</span>
            <h2>お知らせ</h2>
          </div>
        </div>

        <!-- 記事一覧 -->
        <div class="news-wrapper fade-up">

          <?php
          $news = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3
          ));
          ?>

          <?php if ($news->have_posts()) : ?>
            <?php while ($news->have_posts()) : $news->the_post(); ?>

              <article class="news-item">

                <a href="<?php the_permalink(); ?>" class="news-link">

                  <!-- 画像 -->
                  <div class="news-thumb">
                    <?php if (has_post_thumbnail()): ?>
                      <?php the_post_thumbnail('medium'); ?>
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/logo/PLECO-rogo.png" alt="PLECOロゴ">
                    <?php endif; ?>
                  </div>

                  <!-- テキスト -->
                  <div class="news-text">

                    <div class="news-meta">

                      <span class="news-date">
                        <?php echo get_the_date('Y.m.d'); ?>
                      </span>

                      <span class="news-tag">
                        <?php
                        $category = get_the_category();
                        if ($category[0]) {
                          echo $category[0]->cat_name;
                        }
                        ?>
                      </span>

                    </div>

                    <h3 class="news-title">
                      <?php the_title(); ?>
                    </h3>

                  </div>

                </a>

              </article>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>

        </div>

        <a href="/news" class="news-all-btn btn btn-lg fade-up">記事一覧はこちら</a>

      </div>
    </section>


  </main>
  <?php get_footer(); ?>
</section>