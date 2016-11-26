<?php
require_once "database.php";
?>
<!DOCTYPE html>
<html>
<head>

      <title>همایش نگهداری و امنیت اطلاعات در فضای سایبری</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1" />
      <meta name="description" content="همایش نگهداری و امنیت اطلاعات در فضای سایبری برای اولین بار در دانشگاه آزاد اسلامی واحد اسلامشهر" />
      <meta name="keywords" content="آرش آقا بابایی,امنیت, نفوذ, همایش, همایش امنیت, همایش امنیت اطلاعات, دانشگاه, اسلامشهر, امنیت اسلامشهر, همایش اسلامشهر, همایش امنیت اطلاعات اسلامشهر, جلوگیری, جلوگیری از نفوذ, همایش نگهداری و امنیت اطلاعات در فضای سایبری" />
      <link rel="icon" href="images/favicon.ico" />
<!--      <link rel="apple-touch-icon" href="http://eventual.loginov.biz/theme/assets/img/favicons/apple-touch-icon.png" />-->
<!--      <link rel="apple-touch-icon" href="http://eventual.loginov.biz/theme/assets/img/favicons/apple-touch-icon-76x76.png" sizes="76x76" />-->
<!--      <link rel="apple-touch-icon" href="http://eventual.loginov.biz/theme/assets/img/favicons/apple-touch-icon-120x120.png" sizes="120x120" />-->
<!--      <link rel="apple-touch-icon" href="http://eventual.loginov.biz/theme/assets/img/favicons/apple-touch-icon-152x152.png" sizes="152x152" />-->
      <link rel="stylesheet" href="fonts/bootstrap.gs.css" type="text/css" />
      <link rel="stylesheet" href="fonts/jquery.uniform.css" type="text/css" />
      <link rel="stylesheet" href="fonts/jquery.owl.carousel.css" type="text/css" />
      <link rel="stylesheet" href="fonts/jquery.leaflet.popup.css" type="text/css" />
      <link rel="stylesheet" href="fonts/lato.css" type="text/css" />
      <link rel="stylesheet" href="fonts/oswald.css" type="text/css" />
      <link rel="stylesheet" href="fonts/ionicons.css" type="text/css" />
      <link rel="stylesheet" href="fonts/fontawesome.css" type="text/css" />
      <link rel="stylesheet" href="fonts/green.css" type="text/css" id="theme-link" />
      <link rel="stylesheet" href="fonts/light.css" type="text/css" id="layout-link" />
      <link rel="stylesheet" href="fonts/forms.css" type="text/css" />
      <link rel="stylesheet" href="fonts/template.css" type="text/css" />

      <!--[if lt IE 10]>
          <link rel="stylesheet" href="fonts/ie.css" type="text/css" />
      <![endif]-->


      <link rel="stylesheet" href="fonts/custom.css" type="text/css" />

  </head>

  <body data-spy="scroll">

      <!-- Header -->
      <header class="b-header b-header__float b-header__transparent" id="header">
          <div class="b-header_inner container">
              <div class="row">


                  <div class="col-xs-6 col-sm-6 col-md-10 col-lg-9">

                      <nav class="b-header_nav m-transition js-scroll-spy">
                          <a href="#overview">معرفی</a>
                          <a href="#schedule">زمان بندی</a>
                          <a href="#speakers">سخنرانان</a>
                          <a href="#team">تیم اجرایی</a>
                          <a href="#faq">سوالات رایج</a>
                          <a href="#signUp">رزرو</a>
                          <a href="#contacts">تماس با ما</a>
                      </nav>

                      <span class="b-header_nav_toggle m-transition hidden-md hidden-lg i-icon i-ion-navicon-round js-nav"></span>

                  </div>




                  <div class="col-xs-6 col-sm-6 col-md-2 col-lg-3">

                      <!-- Designed text label like logotype -->
                      <a href="http://isspc.ir/" class="custom-logo"><img src="images/logo3.png" class="img-responsive" alt=""></a>

                      <!-- Picture like logotype -->
                      <!--a href="/" class="b-header_logo b-header_logo__pic">
                          <img src="assets/img/logo_dark.png" title="Eventual" alt="Dark" width="127" height="21" class="m-transition" />
                          <img src="assets/img/logo_light.png" title="Eventual" alt="Light" width="127" height="21" class="m-transition" />
                      </a-->

                  </div>



              </div>
          </div>
      </header>
      <!-- Header end -->

      <!-- Intro section -->
      <section class="b-intro b-intro__slider b-section" id="intro">

          <div class="b-intro_slider">

              <div class="b-slider" id="intro-slider" data-arrows="false" data-control="false" data-auto="true" data-interval="7">
                  <div class="b-slider_inner">

                      <!-- First slide -->
                      <div class="b-slider_item b-slider_item__first">

                          <div class="b-intro_wrapper">
                              <div class="b-intro_content">

                                  <div class="b-intro_container container">

                                      <header class="b-intro_header">
                                          <p class="text-default">برای اولین بار</p>
                                          <h1>همایش نگهداری و امنیت اطلاعات در فضای سایبری</h1>
                                      </header>

                                      <p class="rtl">3 آذر ماه 1395</p>

                                      <div class="b-intro_btn">
                                          <a href="#signUp" class="e-btn e-btn_outline_white e-btn_md e-btn_smooth" data-label="رایگان"><span>رزرو جایگاه</span></a>
                                      </div>

                                      <div class="e-frame e-frame__xl e-frame__top"></div>
                                      <div class="e-frame e-frame__xl e-frame__bottom"></div>

                                  </div>

                              </div>
                          </div>

                      </div>
                      <!-- First slide end -->

                      <!-- Second slide -->
                      <div class="b-slider_item b-slider_item__second">

                          <div class="b-intro_wrapper">
                              <div class="b-intro_content">

                                  <div class="b-intro_container container">

                                      <header class="b-intro_header">
                                          <p>برای اولین بار</p>
                                          <h1>Cyber Security Conference</h1>
                                      </header>

                                      <p style="direction: rtl;">3 آذر ماه 1395</p>

                                      <div class="b-intro_btn">
                                          <a href="#signUp" class="e-btn e-btn_outline_white e-btn_md e-btn_smooth" data-label="رایگان"><span>رزرو جایگاه</span></a>
                                      </div>

                                      <div class="e-frame e-frame__xl e-frame__top"></div>
                                      <div class="e-frame e-frame__xl e-frame__bottom"></div>

                                  </div>

                              </div>
                          </div>

                      </div>
                      <!-- Second slide end -->

                  </div>
              </div>

          </div>

      </section>
      <!-- Intro section end -->

      <!-- Features section -->
      <section class="b-features b-section b-section__solid" id="features">
          <div class="b-section_container container">

              <div class="row" id="roww">

                  <div class="col-xs-6 col-sm-6 col-md-3">

                      <div class="b-features_item">
                          <div class="b-features_item_icon i-icon i-ion-android-pin">
                              <div class="e-frame e-frame__sm e-frame__top"></div>
                              <div class="e-frame e-frame__sm e-frame__bottom"></div>
                          </div>
                          <p><strong>دانشگاه آزاد اسلامشهر</strong><br /></p>
                      </div>

                  </div>

                  <div class="col-xs-6 col-sm-6 col-md-3">

                      <div class="b-features_item">
                          <div class="b-features_item_icon i-icon i-ion-ios-calendar-outline">
                              <div class="e-frame e-frame__sm e-frame__top"></div>
                              <div class="e-frame e-frame__sm e-frame__bottom"></div>
                          </div>
                          <p class="rtl"><strong>سوم آذر</strong><br /></p>
                      </div>

                  </div>

                  <div class="col-xs-6 col-sm-6 col-md-3">

                      <div class="b-features_item">
                          <div class="b-features_item_icon i-icon i-ion-ios-mic">
                              <div class="e-frame e-frame__sm e-frame__top"></div>
                              <div class="e-frame e-frame__sm e-frame__bottom"></div>
                          </div>
                          <p class="rtl"><strong>مهندس آرش آقابابایی</strong><br /></p>
                      </div>

                  </div>

                  <div class="col-xs-6 col-sm-6 col-md-3" id="custom10">

                      <div class="b-features_item">
                          <div class="b-features_item_icon i-icon i-ion-ios-people">
                              <div class="e-frame e-frame__sm e-frame__top"></div>
                              <div class="e-frame e-frame__sm e-frame__bottom"></div>
                          </div>
                          <p class="rtl"><strong>200 جایگاه</strong><br />ظرفیت محدود</p>
                      </div>

                  </div>

              </div>

          </div>
      </section>
      <!-- Features section end -->

      <!-- Overview section -->
      <section class="b-overview b-section js-tabs" id="overview">
          <div class="b-section_container container">

              <header class="b-section_header b-section_header__stroked">
                  <h2>معرفی</h2>
                  <p>سمینار داخلی "نگهداری و امنیت اطلاعات در فضای سایبری" مورخ 3 آذرماه 1395 در دانشگاه آزاد اسلامی واحد اسلامشهر برای اولین بار برگزار خواهد شد. این سمینار اولین بار است که با حمایت مستقیم مدیر گروه کامپیوتر سرکار خانم مهندس هلنا کجوئیان و پژوهش دانشگاه سرکار خانم دکتر معصومه سهرابی برگزار می شود، به جدیدترین و پراهمیت ترین فعالیت ها در حوزه نگهداری اطلاعات می پردازد. هدف اصلی این سمینار فرصتی برای آشنایی با محیط پرخطر و نا امن سایبری و فناوری اطلاعات اعم از امنیت سیستم عامل، مهندسی اجتماعی ، استفاده از اینترنت در فضای عمومی ، امنیت در فضای مجازی ، امنیت در خرید های اینترنتی و شبکه های اجتماعی و ... است. </p>
              </header>

              <!-- First block -->
              <div class="b-overview_section row">

                  <div class="col-xs-12 col-md-5">

                      <img src="images/sec.jpg" class="img-responsive img-thumbnail img-circle" alt="" style="box-shadow: 3px 3px #e2e2e2;">

                  </div>

                  <div class="col-xs-12 col-md-7">

                      <article class="b-overview_article">

                          <header class="b-overview_header">

                              <div class="b-overview_header_cell pull-right">
                                  <div class="b-overview_header_icon ">
                                      <div class="e-frame e-frame__sm e-frame__top"></div>
                                      <img src="images/logo3.png" alt="" class="img-responsive" style="padding: 10px 0px;">
                                      <div class="e-frame e-frame__sm e-frame__bottom"></div>
                                  </div>
                              </div>

                              <div class="b-overview_header_cell pull-left custom_h">
                                  <h3>امنیت اطلاعات</h3>
                              </div>
                            <div class="clearfix"></div>
                          </header>
                          <div class="clearfix"></div>

                          <p class="rtl text-justify">امنیت اطلاعات و ایمن سازی شبکه های کامپیوتری از جمله مولفه هایی بوده که نمی توان آن را مختص یک فرد و یا سازمان در نظر گرفت . پرداختن به مقوله امنیت اطلاعات و ایمن سازی شبکه های کامپیوتری در هر کشور ، مستلزم توجه تمامی کاربران صرف نظر از موقعیت شغلی و سنی به جایگاه امنیت اطلاعات و ایمن سازی شبکه های کامپیوتری بوده و می بایست به این مقوله در سطح کلان و از بعد منافع ملی نگاه کرد
                          </p>

                      </article>


                  </div>

              </div>
              <!-- First block end -->


          </div>
      </section>
      <!-- Overview section end -->

      <!-- Counters section -->
      <section class="b-counters b-section b-section__background" id="counters">
          <div class="b-section__background_overlay">

              <div class="b-section_container container">

                  <div class="b-counters_row row">

                      <div class="col-xs-6 col-sm-6 col-md-4">

                          <div class="b-counters_item">

                              <div class="b-counters_item_digits">1</div>

                              <h3>سخنران</h3>
                              <p>از اساتید امنیت اطلاعات</p>

                          </div>

                      </div>

                      <div class="col-xs-6 col-sm-6 col-md-4">

                          <div class="b-counters_item">

                              <div class="b-counters_item_digits">4</div>

                              <h3>ساعت</h3>
                              <p>همراه با پذیرایی</p>

                          </div>

                      </div>

                      <div class="col-xs-6 col-sm-6 col-md-4">

                          <div class="b-counters_item">

                              <div class="b-counters_item_digits">03</div>

                              <h3>آذر سال 1395</h3>
                              <p>سالن آمفی تئاتر دانشگاه آزاد اسلامشهر</p>

                          </div>

                      </div>

<!--                      <div class="col-xs-6 col-sm-6 col-md-3">-->
<!---->
<!--                          <div class="b-counters_item">-->
<!---->
<!--                              <div class="b-counters_item_digits">3</div>-->
<!---->
<!--                              <h3>Auditoriums</h3>-->
<!--                              <p>For a comfortable placement</p>-->
<!---->
<!--                          </div>-->
<!---->
<!--                      </div>-->

                  </div>

              </div>

          </div>
      </section>
      <!-- Counters end -->

      <!-- Schedule section -->
      <section class="b-schedule b-section" id="schedule">
          <div class="b-section_container container">

              <header class="b-section_header b-section_header__stroked">
                  <h2>زمان بندی</h2>
                  <p>لیست برنامه های اجرایی در همایش نگهداری و امنیت اطلاعات در فضای سایبری</p>
              </header>

              <!-- Download block -->
              <div class="b-schedule_download">

                  <div class="b-schedule_download_frame">

                      <a href="#" class="b-schedule_download_btn i-icon i-ion-archive" data-target="_blank">
                          دانلود <small>pdf,&nbsp;116&nbsp;Kb</small>
                      </a>

                      <div class="e-frame e-frame__xs e-frame__top"></div>
                      <div class="e-frame e-frame__xs e-frame__bottom"></div>

                  </div>

              </div>
              <!-- Download block end -->

              <div class="b-schedule_view row js-tabs">

                  <div class="col-xs-12 col-md-4 col-lg-3">

                      <div class="b-schedule_tabs b-schedule_tabs__offset js-tabs-toggle">

                          <a href="#schedule-day-1" class="b-schedule_tabs_btn current">
                              <strong>تاریخ</strong>
                              <time datetime="2016-11-23 15:00">1395/09/03</time>
                          </a>

<!--                          <a href="#schedule-day-2" class="b-schedule_tabs_btn">-->
<!--                              <strong>Day 2</strong>-->
<!--                              <time datetime="2015-08-24 09:00">25.08.2015</time>-->
<!--                          </a>-->
<!---->
<!--                          <a href="#schedule-day-3" class="b-schedule_tabs_btn">-->
<!--                              <strong>Day 3</strong>-->
<!--                              <time datetime="2015-08-24 09:00">26.08.2015</time>-->
<!--                          </a>-->

                      </div>

                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">

                      <div class="b-schedule_device">
                          <div class="b-schedule_device_screen">

                              <div class="js-tabs-wrapper">

                                  <!-- Schedule: 1st day -->
                                  <div class="js-tabs-page" id="schedule-day-1">

                                      <div class="b-schedule_day js-tabs">

                                          <div class="b-schedule_day_nav js-tabs-toggle">
                                              <a href="#schedule-day-1-place-1" class="current">لیست برنامه ها</a>
<!--                                              <a href="#schedule-day-1-place-2">Auditorium 325</a>-->
                                          </div>

                                          <div class="js-tabs-wrapper">

                                              <div class="js-tabs-page" id="schedule-day-1-place-1">

                                                  <!-- Schedule: 1st day, 1st place -->
                                                  <div class="b-schedule_timeLine">

                                                      <article class="b-schedule_speech">

                                                          <header class="b-schedule_speech_header" style="direction: rtl">

                                                              <div class="b-schedule_speech_header_dummy i-icon i-ion-person"></div>

                                                              <time class="b-schedule_speech_header_time i-icon i-ion-person" datetime="2015-08-24 09:00"> ساعت 13:30 </time>
                                                              <h3 class="b-schedule_speech_toggle">تلاوت آیاتی چند از کلام الله مجید</h3>

                                                          </header>

                                                      </article>

                                                      <article class="b-schedule_speech">

                                                          <header class="b-schedule_speech_header" style="direction: rtl">

                                                              <div class="b-schedule_speech_header_dummy i-icon i-ion-volume-high"></div>

                                                              <time class="b-schedule_speech_header_time i-icon i-ion-volume-high" datetime="2015-08-24 09:00"> ساعت 13:50 </time>
                                                              <h3 class="b-schedule_speech_toggle">سرود جمهوری اسلامی ایران</h3>

                                                          </header>

                                                      </article>

                                                      <article class="b-schedule_speech js-spoiler">

                                                          <header class="b-schedule_speech_header" style="direction: rtl;">

                                                              <img class="b-schedule_speech_header_pic" src="images/arash.jpg" alt="آرش آقابابایی" width="52" height="52" />

                                                              <cite class="b-schedule_speech_header_name i-icon i-ion-ios-mic-outline"> مهندس آرش آقابابایی</cite>
                                                              <time class="b-schedule_speech_header_time i-icon i-ion-ios-alarm-outline" datetime="2015-08-24 09:00">&nbsp; ساعت : 14 </time>

                                                              <h3 class="b-schedule_speech_toggle js-spoiler-toggle">
                                                                 مقدمه ای درباره امنیت اطلاعات
                                                              </h3>

<!--                                                              <div class="b-schedule_speech_arrow">-->
<!--                                                                  <div class="e-frame e-frame__top"></div>-->
<!--                                                                  <div class="e-frame e-frame__bottom"></div>-->
<!--                                                              </div-->

                                                          </header>

                                                          <div class="b-schedule_speech_announcement js-spoiler-text">

                                                              <p style="text-align: justify; direction: rtl;">امنیت اطلاعات و ایمن سازی شبکه های کامپیوتری از جمله مولفه هایی بوده که نمی توان آن را مختص یک فرد و یا سازمان در نظر گرفت . پرداختن به مقوله امنیت اطلاعات و ایمن سازی شبکه های کامپیوتری در هر کشور ، مستلزم توجه تمامی کاربران صرف نظر از موقعیت شغلی و سنی به جایگاه امنیت اطلاعات و ایمن سازی شبکه های کامپیوتری بوده و می بایست به این مقوله در سطح کلان و از بعد منافع ملی نگاه کرد </p>

                                                          </div>

                                                      </article>

                                                      <article class="b-schedule_speech">

                                                          <header class="b-schedule_speech_header" style="direction: rtl">

                                                              <div class="b-schedule_speech_header_dummy i-icon i-ion-coffee"></div>

                                                              <time class="b-schedule_speech_header_time i-icon i-ion-ios-alarm-outline" datetime="2015-08-24 09:00"> ساعت : 16 </time>
                                                              <h3 class="b-schedule_speech_toggle">پذیرایی</h3>

                                                          </header>

                                                      </article>





                                                  </div>
                                                  <!-- Schedule: 1st day, 1st place end -->

                                              </div>

                                              <div class="js-tabs-page" id="schedule-day-1-place-2">

                                                  <!-- Schedule: 1st day, 2nd place -->
                                                  <div class="b-schedule_timeLine">

                                                      <article class="b-schedule_speech js-spoiler">

                                                          <header class="b-schedule_speech_header">

                                                              <img class="b-schedule_speech_header_pic" src="http://eventual.loginov.biz/theme/assets/images/speakers/speaker-4.png" alt="Michael Doe" width="52" height="52" />

                                                              <cite class="b-schedule_speech_header_name i-icon i-ion-ios-mic-outline">Michael Doe</cite>
                                                              <time class="b-schedule_speech_header_time i-icon i-ion-ios-alarm-outline" datetime="2015-08-24 09:00">at 9:00</time>

                                                              <h3 class="b-schedule_speech_toggle js-spoiler-toggle">Keynote speech by Michael Doe</h3>

                                                          </header>

                                                          <div class="b-schedule_speech_announcement js-spoiler-text">

                                                              <p>Lorem Ipsum is&nbsp;simply dummy text of&nbsp;the printing and typesetting industry.</p>
                                                              <p>Lorem Ipsum is&nbsp;simply dummy text of&nbsp;the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s.</p>

                                                          </div>

                                                      </article>

                                                      <article class="b-schedule_speech js-spoiler">

                                                          <header class="b-schedule_speech_header">

                                                              <img class="b-schedule_speech_header_pic" src="http://eventual.loginov.biz/theme/assets/images/speakers/speaker-3.png" alt="Steven Doe" width="52" height="52" />

                                                              <cite class="b-schedule_speech_header_name i-icon i-ion-ios-mic-outline">Steven Doe</cite>
                                                              <time class="b-schedule_speech_header_time i-icon i-ion-ios-alarm-outline" datetime="2015-08-24 09:00">at 9:30</time>

                                                              <h3 class="b-schedule_speech_toggle js-spoiler-toggle">Theme of the first lecture</h3>

                                                          </header>

                                                          <div class="b-schedule_speech_announcement js-spoiler-text">

                                                              <p>Lorem Ipsum is&nbsp;simply dummy text of&nbsp;the printing and typesetting industry.</p>
                                                              <p>Lorem Ipsum is&nbsp;simply dummy text of&nbsp;the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s.</p>

                                                          </div>

                                                      </article>

                                                      <article class="b-schedule_speech js-spoiler">

                                                          <header class="b-schedule_speech_header">

                                                              <img class="b-schedule_speech_header_pic" src="http://eventual.loginov.biz/theme/assets/images/speakers/speaker-1.png" alt="Sandra Doe" width="52" height="52" />

                                                              <cite class="b-schedule_speech_header_name i-icon i-ion-ios-mic-outline">Sandra Doe</cite>
                                                              <time class="b-schedule_speech_header_time i-icon i-ion-ios-alarm-outline" datetime="2015-08-24 09:00">at 11:00</time>

                                                              <h3 class="b-schedule_speech_toggle js-spoiler-toggle">Theme of the second lecture</h3>

                                                          </header>

                                                          <div class="b-schedule_speech_announcement js-spoiler-text">

                                                              <p>Lorem Ipsum is&nbsp;simply dummy text of&nbsp;the printing and typesetting industry.</p>
                                                              <p>Lorem Ipsum is&nbsp;simply dummy text of&nbsp;the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s.</p>

                                                          </div>

                                                      </article>

                                                  </div>
                                                  <!-- Schedule: 1st day, 2nd place end -->

                                              </div>

                                          </div>

                                      </div>

                                  </div>
                                  <!-- Schedule: 1st day end -->

                                  <!-- Schedule: 2nd day -->
                                  <div class="js-tabs-page" id="schedule-day-2">

                                      <div class="b-schedule_day js-tabs">

                                          <div class="b-schedule_day_nav js-tabs-toggle">
                                              <a href="#schedule-day-2-place-1" class="current">Auditorium 105</a>
                                              <a href="#schedule-day-2-place-2">Auditorium 110</a>
                                          </div>

                                          <div class="js-tabs-wrapper">

                                              <div class="js-tabs-page" id="schedule-day-2-place-1">

                                                  <!-- Schedule: 2nd day, 1st place -->
                                                  <div class="b-schedule_timeLine">

                                                      <article class="b-schedule_speech js-spoiler">

                                                          <header class="b-schedule_speech_header">

                                                              <img class="b-schedule_speech_header_pic" src="http://eventual.loginov.biz/theme/assets/images/speakers/speaker-2.png" alt="John Doe" width="52" height="52" />

                                                              <cite class="b-schedule_speech_header_name i-icon i-ion-ios-mic-outline">John Doe</cite>
                                                              <time class="b-schedule_speech_header_time i-icon i-ion-ios-alarm-outline" datetime="2015-08-24 09:00">at 9:00</time>

                                                              <h3 class="b-schedule_speech_toggle js-spoiler-toggle">Keynote speech by John Doe</h3>

                                                          </header>

                                                          <div class="b-schedule_speech_announcement js-spoiler-text">

                                                              <p>Lorem Ipsum is&nbsp;simply dummy text of&nbsp;the printing and typesetting industry.</p>
                                                              <p>Lorem Ipsum is&nbsp;simply dummy text of&nbsp;the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s.</p>

                                                          </div>

                                                      </article>

                                                      <article class="b-schedule_speech js-spoiler">

                                                          <header class="b-schedule_speech_header">

                                                              <img class="b-schedule_speech_header_pic" src="http://eventual.loginov.biz/theme/assets/images/speakers/speaker-4.png" alt="Michael Doe" width="52" height="52" />

                                                              <cite class="b-schedule_speech_header_name i-icon i-ion-ios-mic-outline">Michael Doe</cite>
                                                              <time class="b-schedule_speech_header_time i-icon i-ion-ios-alarm-outline" datetime="2015-08-24 09:00">at 9:30</time>

                                                              <h3 class="b-schedule_speech_toggle js-spoiler-toggle">Theme of the first lecture</h3>

                                                          </header>

                                                          <div class="b-schedule_speech_announcement js-spoiler-text">

                                                              <p>Lorem Ipsum is&nbsp;simply dummy text of&nbsp;the printing and typesetting industry.</p>
                                                              <p>Lorem Ipsum is&nbsp;simply dummy text of&nbsp;the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s.</p>

                                                          </div>

                                                      </article>

                                                      <article class="b-schedule_speech js-spoiler">

                                                          <header class="b-schedule_speech_header">

                                                              <img class="b-schedule_speech_header_pic" src="http://eventual.loginov.biz/theme/assets/images/speakers/speaker-3.png" alt="Steven Doe" width="52" height="52" />

                                                              <cite class="b-schedule_speech_header_name i-icon i-ion-ios-mic-outline">Steven Doe</cite>
                                                              <time class="b-schedule_speech_header_time i-icon i-ion-ios-alarm-outline" datetime="2015-08-24 09:00">at 11:00</time>

                                                              <h3 class="b-schedule_speech_toggle js-spoiler-toggle">Theme of the second lecture</h3>

                                                          </header>

                                                          <div class="b-schedule_speech_announcement js-spoiler-text">

                                                              <p>Lorem Ipsum is&nbsp;simply dummy text of&nbsp;the printing and typesetting industry.</p>
                                                              <p>Lorem Ipsum is&nbsp;simply dummy text of&nbsp;the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s.</p>

                                                          </div>

                                                      </article>

                                                      <article class="b-schedule_speech">

                                                          <header class="b-schedule_speech_header">

                                                              <div class="b-schedule_speech_header_dummy i-icon i-ion-coffee"></div>

                                                              <time class="b-schedule_speech_header_time i-icon i-ion-ios-alarm-outline" datetime="2015-08-24 09:00">at 12:30</time>
                                                              <h3 class="b-schedule_speech_toggle">Dinner break</h3>

                                                          </header>

                                                      </article>

                                                      <article class="b-schedule_speech js-spoiler">

                                                          <header class="b-schedule_speech_header">

                                                              <img class="b-schedule_speech_header_pic" src="http://eventual.loginov.biz/theme/assets/images/speakers/speaker-1.png" alt="Sandra Doe" width="52" height="52" />

                                                              <cite class="b-schedule_speech_header_name i-icon i-ion-ios-mic-outline">Sandra Doe</cite>
                                                              <time class="b-schedule_speech_header_time i-icon i-ion-ios-alarm-outline" datetime="2015-08-24 09:00">at 13:30</time>

                                                              <h3 class="b-schedule_speech_toggle js-spoiler-toggle">Theme of the third lecture</h3>

                                                          </header>

                                                          <div class="b-schedule_speech_announcement js-spoiler-text">

                                                              <p>Lorem Ipsum is&nbsp;simply dummy text of&nbsp;the printing and typesetting industry.</p>
                                                              <p>Lorem Ipsum is&nbsp;simply dummy text of&nbsp;the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s.</p>

                                                          </div>

                                                      </article>

                                                  </div>
                                                  <!-- Schedule: 2nd day, 1st place end -->

                                              </div>

                                              <div class="js-tabs-page" id="schedule-day-2-place-2">

                                                  <!-- Schedule: 2nd day, 2nd place -->
                                                  <article class="b-wysiwyg m-center">
                                                      <h3>Schedule not yet compiled</h3>
                                                  </article>
                                                  <!-- Schedule: 2nd day, 2nd place end -->

                                              </div>

                                          </div>

                                      </div>

                                  </div>
                                  <!-- Schedule: 2nd day end -->

                                  <!-- Schedule: 3rd day -->
                                  <div class="js-tabs-page" id="schedule-day-3">

                                      <article class="b-wysiwyg m-center">
                                          <h3>Schedule not yet compiled</h3>
                                      </article>

                                  </div>
                                  <!-- Schedule: 3rd day end -->

                              </div>

                          </div>
                      </div>

                  </div>

              </div>

          </div>
      </section>
      <!-- Schedule section end -->

      <!-- Subscribe section -->
      <section class="b-subscribe b-section b-section__background" id="subscribe">
          <div class="b-section__background_overlay">

              <div class="b-section_container container">

                  <header class="b-section_header b-section_header__stroked">
                      <h2><i class="i-icon i-ion-email m-colorized"></i>اشتراک در <span class="m-colorized">خبرنامه</span></h2>
                      <p>در صورت تمایل نسبت به دریافت اخبار مربوط به همایش، میتوانید ایمیل خود را ثبت کنید</p>
                  </header>

                  <div class="b-form">
                      <form method="post" action="index.php#subscribe" data-checkup="true" >

                          <div class="row">
                              <div class="col-xs-12 col-md-6 col-md-offset-3">

                                  <div class="b-subscribe_field b-form_box">

                                      <div class="b-form_box_field">
                                          <input type="text" name="email" placeholder="آدرس ایمیل را وارد نمایید" data-required data-pattern="^[0-9a-z_.-]+@([a-z0-9_-]+\.)+[a-z]{2,}$" data-pattern-type="email" />
                                      </div>

                                      <button type="submit" class="b-subscribe_btn e-btn e-btn_solid i-icon i-ion-paper-airplane" name="khabarname"></button>
                                      <?php
                                      if (isset($_POST["khabarname"])){
                                          $Email = $_POST['email'];
                                          global $database;
                                          $database->open_connection();
                                          $Email=$database->escape_value($Email);
                                          $Email=$database->mysqli_prep($Email);
                                          $sql = "SELECT Email FROM khabarnameh WHERE Email='{$Email}'";
                                          $result = $database->query($sql);
                                          if ($database->num_rows($result) > 0){
                                              echo "<br>";
                                              echo "<center><p class=\"m-colorized\"> ایمیل شما قبلا ثبت شده است</p></center>";
                                          }else {
                                              echo "<br>";
                                              $sql = "INSERT INTO khabarnameh (Email) VALUES ('{$Email}')";
                                              $database->query($sql);
                                              echo "<center><p class=\"m-colorized\"> ایمیل شما ثبت گردید</p></center>";
                                              send_mail_khabarnameh($Email);
                                              $database->close_connection();
                                          }
                                      }
                                      ?>
                                  </div>

                              </div>
                          </div>

                      </form>

                  </div>

              </div>

          </div>
      </section>
      <!-- Subscribe end -->

      <!-- Speakers section -->
      <section class="b-speakers b-section" id="speakers">
          <div class="b-section_container container">

              <header class="b-section_header b-section_header__stroked">
                  <h2>سخنرانان</h2>
                  <p>برخی از سخنرانان اصلی همایش نگهداری و امنیت اطلاعات در فضای سایبری</p>
              </header>

              <div class="b-speakers_list row">

                  <div class="b-speakers_cell col-xs-12 col-sm-6 col-md-3"></div>

                  <div class="b-speakers_cell col-xs-12 col-sm-6 col-md-3">

                      <div class="b-speakers_view">

                          <img class="b-speakers_view_pic img-responsive img-circle" src="images/arash.jpg" alt="آرش آقابابایی" />

                          <h3>آرش آقابابایی<span class="m-colorized">کارشناس امنیت اطلاعات</span></h3>
                          <p>کارشناس ارشد امنیتی، مشاور و طراح شبکه های امنیتی و مدرس دوره های امنیت شبکه</p>

                          <div class="b-speakers_view_accounts">
                              <a href="#" data-target="_blank" class="i-icon i-ion-social-facebook"></a>
                              <a href="#" data-target="_blank" class="i-icon i-ion-social-twitter"></a>
                              <a href="#" data-target="_blank" class="i-icon i-ion-social-googleplus"></a>
                              <a href="#" data-target="_blank" class="i-icon i-ion-social-linkedin"></a>
                          </div>

                      </div>

                  </div>

                  <div class="b-speakers_cell col-xs-12 col-sm-6 col-md-3">

                      <div class="b-speakers_view">

                          <img class="b-speakers_view_pic img-responsive img-circle" src="images/helena.jpg" alt="هلنا کجوئیان" />

                          <h3>هلنا کجوئیان<span class="m-colorized">کارشناس گروه نرم افزار</span></h3>
                          <p>استاد و کارشناس گروه کامپیوتر - نرم افزار دانشگاه آزاد اسلامی واحد اسلامشهر</p>

                          <div class="b-speakers_view_accounts">
                              <a href="#" data-target="_blank" class="i-icon i-ion-social-twitter"></a>
                              <a href="#" data-target="_blank" class="i-icon i-ion-social-linkedin"></a>
                          </div>

                      </div>

                  </div>

                  <div class="b-speakers_cell col-xs-12 col-sm-6 col-md-3"></div>



              </div>

          </div>
      </section>
      <!-- Speakers section end -->

      <!-- team section -->
      <section class="b-speakers b-section" id="team">
          <div class="b-section_container container">

              <header class="b-section_header b-section_header__stroked">
                  <h2>تیم اجرایی</h2>
                  <p>تیم اجرایی همایش نگهداری و امنیت اطلاعات در فضای سایبری</p>
              </header>

              <div class="b-speakers_list row">

                  <div class="b-speakers_cell col-xs-12 col-sm-6 col-md-3">

                      <div class="b-speakers_view">

                          <img class="b-speakers_view_pic img-responsive img-circle" src="images/hadavand2.jpg" alt="محمدرضا هداوند" />

                          <h3>محمدرضا هداوند<span class="m-colorized">دانشجوی مهندسی کامپیوتر - نرم افزار</span></h3>
                          <p>پیاده سازی و پشتیبانی شبکه های کامپیوتری</p>

                          <div class="b-speakers_view_accounts">
<!--                              <a href="#" data-target="_blank" class="i-icon i-ion-social-facebook"></a>-->
                              <a href="http://instagram.com/_u/mrhadavand" class="i-icon i-ion-social-instagram-outline"></a>
                          </div>

                      </div>

                  </div>

                  <div class="b-speakers_cell col-xs-12 col-sm-6 col-md-3">

                      <div class="b-speakers_view">

                          <img class="b-speakers_view_pic img-responsive img-circle" src="images/3aeed.jpg" alt="سعید رحیمی منش" />

                          <h3>سعید رحیمی منش<span class="m-colorized">دانشجوی مهندسی کامپیوتر - نرم افزار</span></h3>
                          <p>طراح و برنامه نویس وب سایت و اپلیکیشن اندروید</p>

                          <div class="b-speakers_view_accounts">
                              <a href="http://instagram.com/_u/3aeed_RM6" class="i-icon i-ion-social-instagram-outline"></a>
                          </div>

                      </div>

                  </div>

                  

                  <div class="b-speakers_cell col-xs-12 col-sm-6 col-md-3">

                      <div class="b-speakers_view">

                          <img class="b-speakers_view_pic img-responsive img-circle" src="images/meysam.jpg" alt="میثم فربه" />

                          <h3>میثم فربه<span class="m-colorized">دانشجوی مهندسی کامپیوتر - نرم افزار</span></h3>
                          <p>طراح و مشاور گرافیک مجموعه تهران گرافیک</p>

                          <div class="b-speakers_view_accounts">
                              <a href="http://instagram.com/_u/meysam_farbeh" class="i-icon i-ion-social-instagram-outline"></a>
                          </div>

                      </div>

                  </div>



                  <div class="b-speakers_cell col-xs-12 col-sm-6 col-md-3">

                      <div class="b-speakers_view">

                          <img class="b-speakers_view_pic img-responsive img-circle" src="images/taheri.jpg" alt="سعید طاهری" />

                          <h3>سعید طاهری<span class="m-colorized">دانشجوی مهندسی کامپیوتر - نرم افزار</span></h3>
                          <p>طراح و برنامه نویس مجموعه تهران گرافیک</p>

                          <div class="b-speakers_view_accounts">
                              <a href="http://instagram.com/_u/saeid0t" class="i-icon i-ion-social-instagram-outline"></a>
                          </div>

                      </div>

                  </div>




                  <div class="b-speakers_cell col-xs-12 col-sm-6 col-md-3">

                      <div class="b-speakers_view">

                          <img class="b-speakers_view_pic img-responsive img-circle" src="images/lnaz.jpg" alt="الناز قمری" />

                          <h3>الناز قمری<span class="m-colorized">دانشجوی مهندسی کامپیوتر - نرم افزار</span></h3>
                          <p>برنامه نویس جاوا</p>

                          <div class="b-speakers_view_accounts">
                              <a href="http://instagram.com/_u/lnaz724" class="i-icon i-ion-social-instagram-outline"></a>
                          </div>

                      </div>

                  </div>

                  <div class="b-speakers_cell col-xs-12 col-sm-6 col-md-3">

                      <div class="b-speakers_view">

                          <img class="b-speakers_view_pic img-responsive img-circle" src="images/somi.jpg" alt="سمیه کرد" />

                          <h3>سمیه کرد<span class="m-colorized">دانشجوی مهندسی کامپیوتر - نرم افزار</span></h3>
                          <p>برنامه نویس جاوا</p>

                          <div class="b-speakers_view_accounts">
                              <a href="http://instagram.com/_u/somaye1995k" class="i-icon i-ion-social-instagram-outline"></a>
                          </div>

                      </div>

                  </div>


                  <div class="b-speakers_cell col-xs-12 col-sm-6 col-md-3">

                      <div class="b-speakers_view">

                          <img class="b-speakers_view_pic img-responsive img-circle" src="images/nazanin.jpg" alt="حمیده ایمانی" />

                          <h3>حمیده ایمانی<span class="m-colorized">دانشجوی حقوق</span></h3>
                          <p>تیم اجرایی</p>

                          <div class="b-speakers_view_accounts">
                              <a href="http://instagram.com/_u/secret_queen1" class="i-icon i-ion-social-instagram-outline"></a>
                          </div>

                      </div>

                  </div>



              </div>

          </div>
      </section>
      <!-- team section end -->

      <!-- Pricing section -->

      <!-- Pricing section end -->

      <!-- FAQ section -->
      <section class="b-faq b-section" id="faq">
          <div class="b-section_container container">

              <header class="b-section_header b-section_header__stroked">
                  <h2>سوالات رایج</h2>
                  <p>پاسخ برخی سوالات رایج شما</p>
              </header>


              <div class="row">
                  <div class="col-xs-12 col-lg-8">

                      <!-- Device -->
                      <div class="b-faq_device">

                          <div class="b-faq_device_screen">

                              <div class="b-faq_slider">
                                  <div class="b-slider" data-arrows="false" data-control="true" data-auto="false" data-interval="8">
                                      <div class="b-slider_inner">

                                          <div class="b-faq_slider_item">

                                              <!-- Question -->
                                              <div class="b-faq_question">

                                                  <div class="b-faq_question_wrapper">
                                                      <div class="b-faq_question_wrapper_inner">

                                                          <article class="b-wysiwyg">

                                                              <h3>اهداف و رسالت های همایش چیست؟</h3>
                                                              <p>یکی از اهداف این همایش، آشنایی دانشجویان با مسئله امنیت و راهکار های مفید در جهت مقابله با نفوذ می باشد</p>

                                                          </article>

                                                      </div>
                                                  </div>

                                              </div>
                                              <!-- Question end -->

                                          </div>





                                          <div class="b-faq_slider_item">

                                              <!-- Question -->
                                              <div class="b-faq_question">

                                                  <div class="b-faq_question_wrapper">
                                                      <div class="b-faq_question_wrapper_inner">

                                                          <article class="b-wysiwyg">

                                                              <h3>آیا این همایش برای اولین بار برگزار می شود؟</h3>
                                                              <p>در دانشگاه آزاد اسلامشهر بله برای اولین بار برگزار می شود، اما سابقه اجرای همچنین همایش هایی قبلا در دانشگاه های شهید بهشتی و امیر کبیر بوده</p>

                                                          </article>

                                                      </div>
                                                  </div>

                                              </div>
                                              <!-- Question end -->

                                              </div>
                                          <div class="b-faq_slider_item">

                                              <!-- Question -->
                                              <div class="b-faq_question">

                                                  <div class="b-faq_question_wrapper">
                                                      <div class="b-faq_question_wrapper_inner">

                                                          <article class="b-wysiwyg">

                                                              <h3>آیا امکان شرکت برای افراد خارج از دانشگاه در این همایش می باشد؟</h3>
                                                              <p>بله برای کسب اطلاعات بیشتر به کانال تلگرام ما رجوع کنید</p>

                                                          </article>

                                                      </div>
                                                  </div>

                                              </div>
                                              <!-- Question end -->

                                          </div>

                                          <div class="b-faq_slider_item">

                                              <!-- Question -->
                                              <div class="b-faq_question">

                                                  <div class="b-faq_question_wrapper">
                                                      <div class="b-faq_question_wrapper_inner">

                                                          <article class="b-wysiwyg">

                                                              <h3>کانال تلگرامی ما چیه؟</h3>
                                                              <p>آخرین خبر ها و اطلاعیه هارو از کانال تلگرامی ما دنبال کنید</p>
                                                              <p><a href="https://telegram.me/cyberiiau" target="_blank">ملحق شوید</a></p>

                                                          </article>

                                                      </div>
                                                  </div>

                                              </div>
                                              <!-- Question end -->

                                          </div>

                                      </div>
                                  </div>
                              </div>

                              <div class="e-frame e-frame__md e-frame__top"></div>
                              <div class="e-frame e-frame__md e-frame__bottom"></div>

                          </div>

                          <div class="b-faq_device_footer">

                              <div class="b-faq_device_home"></div>

                          </div>

                          <div class="b-faq_device_switcher"></div>
                          <div class="b-faq_device_volume_up"></div>
                          <div class="b-faq_device_volume_down"></div>

                          <div class="b-faq_device_head">

                              <div class="b-faq_device_speaker"></div>
                              <div class="b-faq_device_cam"></div>
                              <div class="b-faq_device_power"></div>

                          </div>

                      </div>
                      <!-- Device end -->

                  </div>

                  <div class="col-xs-12 col-lg-4">

                      <div class="b-faq_btn">

                          <a href="https://telegram.me/cyberiiau" target="_blank" class="e-btn e-btn_outline e-btn_md e-btn_smooth" data-label="بپرسید"><span>سوال دارید؟</span></a>

                      </div>

                  </div>

              </div>


          </div>
      </section>
      <!-- FAQ section end -->

      <!-- Sign Up section -->
      <section class="b-signUp b-section b-section__background" id="signUp">
          <div class="b-section__background_overlay">

              <div class="b-section_container container">

                  <header class="b-section_header b-section_header__stroked">
                      <h2><i class="i-icon i-ion-person-add m-colorized"></i>رزرو کنید <span class="m-colorized">همین حالا... رایگان</span></h2>
                      <p>شرکت در همایش کاملا رایگان بوده، اما رزرو جایگاه توسط شما، ما را در مدیریت بهتر همایش یاری خواهد کرد</p>
                  </header>

                  <div class="b-signUp_form b-form">
                      <form action="index.php#signUp" method="post" data-checkup="true" >

                          <div class="row">

                              <!-- Sign Up section left -->
                              <div class="col-xs-12 col-md-6 col-lg-5 col-lg-offset-1">

                                  <div class="b-form_box">

                                      <div class="b-form_box_field i-icon i-ion-person">
                                          <input style="direction: rtl;" type="text" name="name" placeholder="نام کامل" data-required />
                                      </div>

                                  </div>


                                  <div class="b-form_box">

                                      <div class="b-form_box_field i-icon i-ion-card">
                                          <input style="direction: rtl;" type="text" name="studentno" placeholder="شماره دانشجویی" />
                                      </div>

                                  </div>

                                  <div class="b-form_box">

                                      <div class="b-form_box_field i-icon i-ion-ios-briefcase">
                                          <label for="university" style="direction: rtl; float:right; color:#fff;">نام دانشگاه</label>
                                          <input style="direction: rtl; width: 73%;" type="text" name="university" value="دانشگاه آزاد اسلامشهر" placeholder="نام دانشگاه" />

                                      </div>

                                  </div>


                                  <div class="b-form_box">

                                      <div class="b-form_box_field i-icon i-ion-email">
                                          <input style="direction: rtl;" type="text" name="email" placeholder="آدرس ایمیل" data-required data-pattern="^[0-9a-z_.-]+@([a-z0-9_-]+\.)+[a-z]{2,}$" data-pattern-type="email" />
                                      </div>

                                  </div>

                                  <div class="b-form_box">

                                      <div class="b-form_box_field i-icon i-ion-ios-telephone ">
                                          <input style="direction: rtl;" type="text" name="phone" placeholder="شماره همراه" data-required />
                                      </div>

                                  </div>


                                  <?php

                                  if (isset($_POST['rezerv'])){

                                      $Email = $_POST['email'];
                                      global $database;
                                      $database->open_connection();
                                      $Email=$database->escape_value($Email);
                                      $Email=$database->mysqli_prep($Email);

                                      $Name = $_POST['name'];
                                      $Name=$database->escape_value($Name);
                                      $Name=$database->mysqli_prep($Name);

                                      $Mobile = $_POST['phone'];
                                      $Mobile=$database->escape_value($Mobile);
                                      $Mobile=$database->mysqli_prep($Mobile);

                                      $studentcode=$_POST['studentno'];
                                      $studentcode=$database->escape_value($studentcode);
                                      $studentcode=$database->mysqli_prep($studentcode);

                                      $university=$_POST['university'];
                                      $university=$database->escape_value($university);
                                      $university=$database->mysqli_prep($university);

                                      $sql = "SELECT Email FROM rezerv WHERE Email='{$Email}'";
                                      $result = $database->query($sql);
                                      if ($database->num_rows($result) > 0){
                                          echo "<br>";
                                          echo "<center><p class=\"m-colorized\"> شما قبلا رزرو کرده اید</p></center>";
                                      }else{
                                          date_default_timezone_set('Asia/Tehran');
                                          $dt = time();
                                          $mysql_datetime = strftime("%Y-%m-%d %H:%M:%S", $dt);
                                          $sql = "INSERT INTO rezerv (Name,Email,Time,Mobile) VALUES ('{$Name}','{$Email}','{$mysql_datetime}',$Mobile)";
                                          $database->query($sql);
                                          echo "<p class=\"m-colorized\"> جایگاه شما رزرو گردید... باتشکر</p>";
                                          send_mail_rezerv($Name,$Email,$Mobile,$mysql_datetime,$studentcode,$university);
                                          $database->close_connection();
                                      }


                                  }


                                  ?>

                              </div>
                              <!-- Sign Up section left end -->

                              <!-- Sign Up section right -->
                              <div class="col-xs-12 col-md-6 col-lg-5">

                                  <div class="b-signUp_countdown b-countdown" id="event_countdown" data-start-at="11/23/2016 13:30:00">

                                      <!--

                                          Specify the start date of the event using data-start-at="" in the following format - mm/dd/yyyy hh:mm:ss

                                      -->

                                      <div class="b-signUp_countdown_started b-countdown_finished">برگزار شد</div>
                                      <div class="b-signUp_countdown_caption b-countdown_caption">روز شمار برگزاری همایش</div>

                                      <div class="b-signUp_countdown_dash b-countdown_dash">

                                          <div class="b-signUp_countdown_dash_inner b-countdown_dash_inner dash seconds_dash">

                                              <div class="b-signUp_countdown_dash_digit b-countdown_dash_digit digit">0</div>
                                              <div class="b-signUp_countdown_dash_digit b-countdown_dash_digit digit">0</div>

                                              <div class="e-frame e-frame__top"></div>
                                              <div class="e-frame e-frame__bottom"></div>

                                          </div>

                                          <div class="b-signUp_countdown_dash_title b-countdown_dash_title dash_title">ثانیه</div>

                                      </div>

                                      <div class="b-signUp_countdown_dash b-countdown_dash">

                                          <div class="b-signUp_countdown_dash_inner b-countdown_dash_inner dash minutes_dash">

                                              <div class="b-signUp_countdown_dash_digit b-countdown_dash_digit digit">0</div>
                                              <div class="b-signUp_countdown_dash_digit b-countdown_dash_digit digit">0</div>

                                              <div class="e-frame e-frame__top"></div>
                                              <div class="e-frame e-frame__bottom"></div>

                                          </div>

                                          <div class="b-signUp_countdown_dash_title b-countdown_dash_title dash_title">دقیقه</div>

                                      </div>

                                      <div class="b-signUp_countdown_dash b-countdown_dash">

                                          <div class="b-signUp_countdown_dash_inner b-countdown_dash_inner dash hours_dash">

                                              <div class="b-signUp_countdown_dash_digit b-countdown_dash_digit digit">0</div>
                                              <div class="b-signUp_countdown_dash_digit b-countdown_dash_digit digit">0</div>

                                              <div class="e-frame e-frame__top"></div>
                                              <div class="e-frame e-frame__bottom"></div>

                                          </div>

                                          <div class="b-signUp_countdown_dash_title b-countdown_dash_title dash_title">ساعت</div>

                                      </div>

                                      <div class="b-signUp_countdown_dash b-countdown_dash">

                                          <div class="b-signUp_countdown_dash_inner b-countdown_dash_inner dash days_dash">

                                              <div class="b-signUp_countdown_dash_digit b-countdown_dash_digit digit">0</div>
                                              <div class="b-signUp_countdown_dash_digit b-countdown_dash_digit digit">0</div>

                                              <div class="e-frame e-frame__top"></div>
                                              <div class="e-frame e-frame__bottom"></div>

                                          </div>

                                          <div class="b-signUp_countdown_dash_title b-countdown_dash_title dash_title">روز</div>

                                      </div>







                                  </div>

                                  <div class="b-signUp_form_bottom b-form_bottom b-form_bottom__center">

                                      <button type="submit" name="rezerv" class="e-btn e-btn_outline_white e-btn_lg e-btn_smooth" data-label="ثبت کن"><span>ثبت کن</span></button>

                                  </div>

                              </div>
                              <!-- Sign Up section right end -->

                          </div>

                      </form>
                  </div>

              </div>
          </div>
      </section>
      <!-- Sign Up end -->

      <!-- Partners and sponsors section -->
      <div class="b-partners b-section b-section__solid" id="partners">
          <div class="b-section_container container">

              <header class="b-section_header b-section_header__stroked">
                  <h2>حامیان مالی و رسانه ای</h2>
                  <p>برخی از حامیان مالی و رسانه ای همایش نگهداری و امنیت اطلاعات در فضای سایبری</p>
              </header>

              <div class="b-partners_logotypes">

                  <div class="row">
                      <div class="col-xs-12 col-md-8 col-lg-10 col-md-offset-2 col-lg-offset-1">

                          <div class="b-carousel" data-auto="true" data-interval="10" data-xs="1" data-sm="2" data-md="2" data-lg="3">


                              <div class="b-carousel_item">

                                  <div class="b-partners_logotypes_item">
                                      <a href="http://iiauac.ir/" class="b-partners_logotypes_item_inner" data-target="_blank">
                                          <img src="images/uni-logo.png" alt="دانشگاه آزاد اسلامشهر" />
                                      </a>
                                  </div>

                              </div>

                              <div class="b-carousel_item">

                                  <div class="b-partners_logotypes_item">
                                      <a href="http://83851.ir/" class="b-partners_logotypes_item_inner" data-target="_blank">
                                          <img src="images/khat.png" alt="خط طلایی ایرانیان" />
                                      </a>
                                  </div>

                              </div>

                              <div class="b-carousel_item">

                                  <div class="b-partners_logotypes_item">
                                      <a href="http://tehrangraphics.ir/" class="b-partners_logotypes_item_inner" data-target="_blank">
                                          <img src="images/teh.png" alt="تهران گرافیک" />
                                      </a>
                                  </div>

                              </div>

                              <div class="b-carousel_item">

                                  <div class="b-partners_logotypes_item">
                                      <a href="http://radiobax.com/" class="b-partners_logotypes_item_inner" data-target="_blank">
                                          <img src="images/radiobax.png" alt="رادیو بکس" />
                                      </a>
                                  </div>

                              </div>

                          </div>

                      </div>
                  </div>

              </div>

          </div>
      </div>
      <!-- Partners and sponsors section end -->

      <!-- Contacts section -->
      <section class="b-contacts b-section" id="contacts">

          <div class="b-contacts_inner b-section_container container">
              <div class="row">

                  <div class="b-contacts_inner_col col-xs-12 col-sm-12 col-md-6 col-lg-4">

                      <div class="b-contacts_details">

                          <header class="b-contacts_details_header b-section_header b-section_header__stroked">
                              <h2>تماس با ما</h2>
                              <p>پل های ارتباطی ما با شما</p>
                          </header>

                          <div class="b-contacts_details_social">
                              <a href="https://telegram.me/cyberiiau" class="i-icon i-ion-ios-paperplane" data-target="_blank"></a>
                              <a href="http://instagram.com/_u/cyberiiau" class="i-icon i-ion-social-instagram-outline" data-target="_blank"></a>
                              <a href="#" class="i-icon i-ion-social-linkedin" data-target="_blank"></a>
                          </div>

                          <ul class="b-contacts_details_list">
                              <li style="text-align: right;">اسلامشهر ، خیابان صیاد شیرازی</li>
                              <li style="text-align: right;">دانشگاه آزاد اسلامی واحد اسلامشهر</li>
                              <li><a href="mailto:info@isspc.ir" style="font-size: 15px;">Info@ISSPC.ir</a></li>
                              <li>+98 919 554 6607</li>
                              <li>10:00&nbsp;&mdash; 22:00</li>
                              <li style="text-align: right; font-size: 13px;"><center><a href="http://rahimimanesh.com">طراحی و برنامه نویسی: سعید رحیمی منش</a></center></li>
                          </ul>

                      </div>

                  </div>

              </div>
          </div>

          <!--

              Specify the exact coordinates using data-coordinates="-33.877155,151.20265".
              Mark the point on the map using data-address="35, Times Square, Sydney".

              If you specify a coordinate in an attribute data-coordinates="" that uses the coordinates.
              If you specify the address in an attribute data-address="" map get coordinates through the Geocoding Service included in Google Maps JavaScript API.

              NB! If the specified coordinates, the geocode is not performed.

          -->

          <div class="b-contacts_map b-map" id="contacts_map" data-zoom="16" data-coordinates="35.556347,51.250572"></div>

      </section>
      <!-- Contacts section end -->

      <!-- MODERNIZR -->
      <script type="text/javascript" src="js/modernizr.min.js"></script>

      <!-- JQUERY and PLUG-INs -->
      <script type="text/javascript" src="js/plugins.min.js"></script>

      <!-- CORE -->
      <script type="text/javascript" src="js/template.min.js"></script>

      <!-- CUSTOM JAVASCRIPT :: UNCOMMENT IT ONLY WHEN YOU NEED TO CREATE CUSTOM SCRIPT -->
      <!--script type="text/javascript" src="assets/plain/js/custom.js"></script-->




  </body>

</html>