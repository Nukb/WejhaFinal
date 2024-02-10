@extends('layouts.defualt')
@section('title','Course Details')
@section('content')


<!--Course Details section-->

<section class="uk-section uk-padding-remove-bottom uk-margin-large-top">

    <div class=" uk-container uk-container-expand uk-container-center">

        <div class="uk-grid uk-width-auto uk-align-center" uk-grid>
            <div class="uk-card uk-card-large uk-card-body uk-flex uk-flex-center ">

                <div class="uk-card uk-width-1-1 uk-margin-right uk-text-lead uk-text-justify uk-align-right"
                    style="height: 1100px">



                    <h1 style="font-family: 'Almarai', sans-serif;"><b> مهـــارة</b></h1>
                    <p class="uk-text-default">مدرسة مهارة للبرمجة هي مبادرة تعليمية تهدف إلى دعم وتزويد الشباب في ليبيا
                        بمهارات البرمجة والتقنية</p>

                    <img src="{{URL('images/Course.jpg')}}" alt=""
                        class="uk-image uk-align-right uk-border-rounded uk-box-shadow-small" style=" border-radius: 20px">


                    <p class="uk-card-title">نبذة عن الكورس:</p>
                    <p class="uk-text-default">ستتعلم خلال رحلتك في مهارة كل ما هو مطلوب في سوق العمل التقني بأكثر لغات
                        البرمجة المطلوبة، لتعطيك فرصة الدخول للمجال من أوسع أبوابه. <br>مشروع مهارة بدعم من UNDP Libya و
                        European Union in Libya / الإتحاد الأوروبي في ليبيا ومنفذ من قِبل Libyan Spider</p>
                    <p class="uk-card-title">ماذا ستتعلم:</p>
                    <p class="uk-text-default">قدم لك مهارة دورات تدريبية من قِبل أمهر المتخصصين في المجال:
                        <br>- كورس برمجة المواقع ( Full stack).
                        <br>- كورس برمجة تطبيقات الموبايل.
                        بالإضافة إلى تدريبات إضافية تشمل أهم المهارات الشخصية اللازمة لسوق العمل، وتقديم المتدربين لجهات
                        العمل المناسبة.
                        <br>- سنبدأ فتح التسجيل للمتدربين من اليوم الموافق (3 ديسمبر حتى 13 ديسمبر).

                    </p>


                </div>
                <div class=" uk-card uk-width-1-2 uk-card-body uk-padding-remove uk-border-rounded uk-text-justify uk-margin-large-bottom"
                    >
                    <div class="uk-card uk-card-default uk-width-1 uk-card-hover-small uk-card-body uk-margin-right uk-border-rounded"
                        style=" border-radius: 20px;">

                        <img src="{{URL('images/LS.png')}}" alt="Libyan spider"
                            class="uk-border-circle uk-align-center" style="width: 70%;">


                        <h4 class="uk-card-title uk-text-center ">Libyan Spider</h4>
                        <p class="uk-text-meta uk-text-center">Company<br> <br>العنكبوت الليبي المزود الرائد للحلول
                            التقنية الشاملة والخدمات السحابية في ليبيا</p>
                        <div class="uk-grid-small uk-flex-center " uk-grid>
                            <a href="#" class="uk-icon " uk-icon="instagram"></a>
                            <a href="#" class="uk-icon uk-margin-small-right " uk-icon="facebook"></a>
                            <a href="#" class="uk-icon uk-margin-small-right" uk-icon="twitter"></a>

                        </div>
                    </div>
                    <div class="uk-card uk-card-default uk-width-1 uk-card-hover-small uk-margin-small-bottom uk-card-body uk-margin-right uk-margin-top uk-border-rounded"
                        style="border-radius: 20px;">

                        <img src="{{URL('images/location.jpg')}}" alt="Libyan spider"
                            class="uk-border-circle uk-align-center" style="width: 80%;">

                        <div class="uk-text-right">

                            <p class="uk-text-default uk-button uk-button-text uk-margin-small">طرابلس: سفراء العلم
                                للتدريب</p><br>
                            <p class="uk-text-default uk-button uk-button-text uk-margin-small">بنغازي: وصل للتدريب
                                والتطوير</p><br>
                            <p class="uk-text-default uk-button uk-button-text uk-margin-large-bottom">سبها: Eylyes Space</p>
                            <p class="uk-text-default uk-margin-large uk-position-bottom-center">عدد الساعات: 92 ساعة.
                            </p>
                        </div>


                    </div>

                </div>

            </div>

        </div>
    </div>


<!--Suggested Courses section-->

    <div class=" uk-container  uk-container-medium uk-container-center uk-padding-large uk-padding-remove-bottom ">
        <div>
            <h2 class="uk-text-blod">دورات مقترحة</h2>
        </div>

        <div class="uk-slider-container-offset uk-align-center" uk-slider>

            <div class="uk-position-relative uk-visible-toggle uk-light uk-text-center" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-4@s uk-grid">
                    <li>
                        <div class="uk-card uk-card-default" style="width: 100%; ">
                            <div class="uk-card-media-top">
                                <img src="{{URL('images/Course.jpg')}}" width="1000"
                                    height="400" alt="" style=" border-radius: 20px">
                            </div>
                            <div class="uk-card-body">
                                <p>مهارة</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default" style="width: 100%;">
                            <div class="uk-card-media-top">
                                <img src="{{URL('images/Course.jpg')}}" width="1000"
                                    height="400" alt="" style=" border-radius: 20px">
                            </div>
                            <div class="uk-card-body">
                                <p>مهارة</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default" style="width: 100%;">
                            <div class="uk-card-media-top">
                                <img src="{{URL('images/Course.jpg')}}" width="1000"
                                    height="400" alt="">
                            </div>
                            <div class="uk-card-body">
                                <p>مهارة</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default" style="width: 100%;">
                            <div class="uk-card-media-top">
                                <img src="{{URL('images/Course.jpg')}}" width="1000"
                                    height="400" alt="" style=" border-radius: 20px">
                            </div>
                            <div class="uk-card-body">
                                <p>مهارة</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default" style="width: 100%;">
                            <div class="uk-card-media-top">
                                <img src="{{URL('images/Course.jpg')}}" width="1000"
                                    height="400" alt="" style=" border-radius: 20px">
                            </div>
                            <div class="uk-card-body">
                                <p>مهارة</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-next
                    uk-slider-item="next"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-previous
                    uk-slider-item="previous"></a>


            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>

    </div>
</section>




@endsection