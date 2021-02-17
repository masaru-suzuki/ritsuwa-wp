<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ritsuwa
 */

get_header();
?>

<main class="facility-page">

  <!-- main visual -->
  <?php get_template_part('/template-parts/content', 'lower-mainvisual'); ?>

  <!-- lead section -->
  <div class="lead-section">
    <div class="lead-section__ttl">
      <h2 class="sct-ttl2">リツワの事業所<span>facility</span></h2>
    </div>
    <p class="lead-section__lead">​岩手・宮城県内21拠点52事業所からなる介護福祉グループになります。1拠点に複数の介護福祉サービスがあるので、地域の様々なニーズにお答えができるようにしています。</p>
  </div>
  <!-- facilities-section -->
  <div class="facilities-section">
    <div class="facilities-section__area-link">
      <p>事業所展開エリア</p>
      <div class="link-box">
        <a id="areaLink1" class="btn-arrow-down link-btn" href="#area1">栗原</a>
        <a id="areaLink2" class="btn-arrow-down link-btn" href="#area2">美里</a>
        <a id="areaLink3" class="btn-arrow-down link-btn" href="#area3">大和</a>
        <a id="areaLink4" class="btn-arrow-down link-btn" href="#area4">塩釜･多賀城</a>
        <a id="areaLink5" class="btn-arrow-down link-btn" href="#area5">仙台</a>
        <a id="areaLink6" class="btn-arrow-down link-btn" href="#area6">一関</a>
      </div>
    </div>
    <div class="facilities-section__area">
      <div class="facilities-area" id="area1">
        <div class="facilities-area__ttl">
          <div class="facilities-area__ttl--inner">
            <p class="area-ttl">栗原エリア</p>
            <div id="plusBtn1" class="icon-plus"><span class="icon-mark"></span></div>
          </div>
        </div>
        <div id="areaItem1" class="facilities-area__item">
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="facilities-section__area">
      <div class="facilities-area" id="area2">
        <div class="facilities-area__ttl">
          <div class="facilities-area__ttl--inner">
            <p class="area-ttl">美里エリア</p>
            <div id="plusBtn2" class="icon-plus"><span class="icon-mark"></span></div>
          </div>
        </div>
        <div id="areaItem2" class="facilities-area__item">
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="facilities-section__area">
      <div class="facilities-area" id="area3">
        <div class="facilities-area__ttl">
          <div class="facilities-area__ttl--inner">
            <p class="area-ttl">大和エリア</p>
            <div id="plusBtn3" class="icon-plus"><span class="icon-mark"></span></div>
          </div>
        </div>
        <div id="areaItem3" class="facilities-area__item">
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="facilities-section__area">
      <div class="facilities-area" id="area4">
        <div class="facilities-area__ttl">
          <div class="facilities-area__ttl--inner">
            <p class="area-ttl">塩釜･多賀城エリア</p>
            <div id="plusBtn4" class="icon-plus"><span class="icon-mark"></span></div>
          </div>
        </div>
        <div id="areaItem4" class="facilities-area__item">
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="facilities-section__area">
      <div class="facilities-area" id="area5">
        <div class="facilities-area__ttl">
          <div class="facilities-area__ttl--inner">
            <p class="area-ttl">仙台エリア</p>
            <div id="plusBtn5" class="icon-plus"><span class="icon-mark"></span></div>
          </div>
        </div>
        <div id="areaItem5" class="facilities-area__item">
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="facilities-section__area">
      <div class="facilities-area" id="area6">
        <div class="facilities-area__ttl">
          <div class="facilities-area__ttl--inner">
            <p class="area-ttl">一関エリア</p>
            <div id="plusBtn6" class="icon-plus"><span class="icon-mark"></span></div>
          </div>
        </div>
        <div id="areaItem6" class="facilities-area__item">
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card01">
            <h3 class="card01__ttl">デイハウスりつわ</h3>
            <div class="card01__contents-wrapper">
              <div class="card01-contents">
                <div class="card01-contents__img-box">
                  <img src="<?php echo bloginfo('template_url'); ?>/images/facility.jpg" alt="">
                </div>
                <div class="card01-contents__txt-box">
                  <p>〒 000-0000 <br class="responsive-br">宮城県栗原市栗駒岩ヶ崎桐木沢66</p>
                  <p>TEL:022-845-5990</p>
                  <p>FAX:022-845-5991</p>
                  <div class="facility-service-box">
                    <p class="facility-service">通所介護</p>
                    <p class="facility-service">住宅型有料老人ホーム</p>
                  </div>
                  <div class="btn-box">
                    <a href="" class="btn-square">google map</a>
                    <a href="" class="btn-square">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- cta -->
  <?php get_template_part('/template-parts/content', 'cta'); ?>
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
