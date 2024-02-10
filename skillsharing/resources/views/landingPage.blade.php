@extends('layouts.defualt')
@section('title','Home')
@section('content')


<!--main page view section-->
<div class="uk-background-cover uk-height-viewport uk-panel uk-flex " data-src="{{URL('images/imagee.png')}}" uk-img>
</div>

<div class="uk-section uk-light uk-position-center-right  uk-margin-large-right uk-width-1-3 ">
    <div class="uk-container uk-text-right">

        <div class="uk-child-width-expand@s	" uk-grid>

            <div uk-margin>
                <h1 style="color: #001840;"><b>وجهــة<br>وجهتك نحو التعلم</b></h1>

                <p style="color: #001840;"><br>انضم إلى مجتمعنا واكتشف عالمًا من التعلم مع خبراء من جميع أنحاء العالم
                    يشاركونك شغف المعرفة.</p>
            </div>

        </div>

    </div>
</div>

</div>


<!--types of catagories section-->
<section class="uk-section uk-background-default  uk-panel uk-flex " uk-height-viewport="min-height: 600">

    <div class="uk-container uk-margin-xlarge-top">

        <div class="uk-grid-match uk-child-width-1@s" uk-grid style="color: #001840;">
            <div>
                <div class="uk-card  uk-card-body">
                    <h2 class="uk-text-right uk-position-right " style="color: #001840;">استكشف التخصصات المتوفرة</h2>
                    <div>
                        <button class="uk-button uk-button-default uk-position-bottom-right uk-margin-xlarge-top"
                            uk-icon="icon: chevron-double-left">عرض الكل</button>
                    </div>
                </div>
            </div>


        </div>

        <div class="uk-grid-match uk-child-width-1-3@s uk-text-center uk-margin-xlarge-top uk-margin-xlarge-bottom "
            uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-hover-large uk-border-rounded">
                    <img src="icons/dataanalysis.png" width="40" height="40" alt="Data Analysis Icon"
                        class="uk-margin-small-right uk-margin-small-left">
                    تحليل البيانات
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-hover-large uk-border-rounded">
                    <img src="icons/webapp.png" alt="Data Analysis Icon" width="40" height="40"
                        class="uk-margin-small-right uk-margin-small-left">
                    تطبيقات الويب
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-hover-large uk-border-rounded">
                    <img src="icons/mobileapp.png" alt="Data Analysis Icon" width="40" height="40"
                        class="uk-margin-small-right uk-margin-small-left">
                    تطبيقات الهاتف النقال
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-hover-large uk-border-rounded">
                    <img src="icons/database.png" alt="Data Analysis Icon" width="40" height="40"
                        class="uk-margin-small-right uk-margin-small-left">
                    قواعد البيانات
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-hover-large uk-border-rounded ">
                    <img src="icons/network.png" alt="Data Analysis Icon" width="40" height="40"
                        class="uk-margin-small-right uk-margin-small-left">
                    شبكات
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-hover-large uk-border-rounded">
                    <img src="icons/security.png" alt="Data Analysis Icon" width="40" height="40"
                        class="uk-margin-small-right uk-margin-small-left">الأمن السيبراني
                </div>
            </div>
        </div>

    </div>

    </div>
</section>

<section class="uk-section uk-section-cover uk-text-center " data-src="{{URL('images/y.png')}}" uk-img>
    <div class="uk-container">
        <div class="uk-grid uk-flex-middle uk-margin-xlarge-top uk-margin-xlarge-bottom" data-uk-grid>
            <div class="uk-width-1-1@m uk-width-2-3@l ">
                <h1>وجهة</h1>
                <p>منصة إلكترونية لدعم معرفي متميز: احصل على المساعدة التي تحتاجها من خبراء في تقنية المعلومات </p>
                <div class="uk-margin">
                    <a href="{{ URL::to('/') }}" class="uk-button uk-button-primary uk-button-large">انظم إلينا </a>
                </div>
            </div>
            <div class="uk-background-cover uk-panel uk-width-large uk-height-large uk-width-1-1@m uk-width-1-3@l"
                data-src=" {{URL('images/learn.jpg')}}" uk-img style="border-radius: 10px">
            </div>
        </div>
    </div>
</section>


<!--newest courses section-->


<section class="uk-section uk-background-cover uk-text-center" data-src="{{URL('images/g.png')}}" uk-img>
    <div class="uk-container">
        <section class="uk-background-cover uk-section uk-section-default uk-text-center uk-margin-large-bottom"
            data-src="{{URL('images/g.png')}}" uk-img>
            <section class="uk-section">
                <h3 class="uk-card-title uk-text-center">الكورسات المضافة حديثاً</h3>
            </section>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
                uk-slider="center: true; autoplay: true; autoplay-interval: 3000;">

                <ul class="uk-slider-items uk-grid">
                    <li class="uk-width-3-4">
                        <div class="uk-panel">
                            <div class="uk-card uk-card-default uk-card-body uk-card-hover-small"
                                style="border-radius: 20px">
                                <div class="uk-card-header">
                                    برمجة تطبيقات الويب
                                </div>
                                <div class="uk-card-body uk-text-center">
                                    <p>من الفكرة إلى الواقع: تعلم خطوات برمجة تطبيقات الويب من الصفر وصولاً إلى إتقانها
                                    </p>
                                </div>
                                <div class="uk-card-footer uk-text-center uk-text-default">
                                    <button class="uk-button-default uk-button-large"
                                        style="width: auto; background-color:rgb(0, 89, 255); border-radius: 5%;">سجل
                                        الآن</button>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="uk-width-3-4">
                        <div class="uk-panel">
                            <div class="uk-card uk-card-default uk-card-body uk-card-hover-small"
                                style="border-radius: 20px">
                                <div class="uk-card-header">
                                    تحليل البيانات
                                </div>
                                <div class="uk-card-body uk-text-center">
                                    <p>لا تفوت هذه الفرصة لتعلم مهارات تحليل البيانات التي ستُساعدك على تحقيق أهدافك
                                        المهنية!</p>
                                </div>
                                <div class="uk-card-footer uk-text-center uk-text-default">
                                    <button class="uk-button-default uk-button-large"
                                        style="width: auto; background-color:rgb(0, 89, 255); border-radius: 5%;">سجل
                                        الآن</button>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="uk-width-3-4">
                        <div class="uk-panel">
                            <div class="uk-card uk-card-default uk-card-body uk-card-hover-small"
                                style="border-radius: 20px">
                                <div class="uk-card-header">
                                    قواعد البيانات
                                </div>
                                <div class="uk-card-body uk-text-center">
                                    <p>لا تفوت هذه الفرصة لتعلم مهارات تحليل البيانات التي ستُساعدك على تحقيق أهدافك
                                        المهنية!</p>
                                </div>
                                <div class="uk-card-footer uk-text-center uk-text-default">
                                    <button class="uk-button-default uk-button-large"
                                        style="width: auto; background-color:rgb(0, 89, 255); border-radius: 5%;">سجل
                                        الآن</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-previous
                    uk-slider-item="previous" style="color: blue;"></a>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-next
                    uk-slider-item="next" style="color: blue;"></a>

            </div>
        </section>
    </div>
</section>


<!--FAQ section-->

<section class="uk-section uk-section-default uk-text-center " data-src="{{URL('images/cover.png')}}" uk-img>
    <div class="uk-container">
        <section class="uk-section">

            <div class="uk-grid uk-flex-middle uk-margin-xlarge-top uk-margin-xlarge-bottom" data-uk-grid>
                <div class="uk-background-cover uk-panel uk-width-large uk-height-large uk-width-1-1@m uk-width-1-3@l"
                    data-src=" {{URL('images/qq.png')}}" uk-img style="border-radius: 20px">
                </div>
                <div class="uk-width-1-1@m uk-width-2-3@l ">
                    <h1>بوابة المعرفة</h1>
                    <p>ادخل بوابة المعرفة من خلال قائمة الأسئلة المتنوعة </p>
                    <div class="uk-margin">
                        <a href="{{ URL::to('/questions') }}"
                            class="uk-button uk-button-primary uk-button-large">الأسئلة
                            الشائعة</a>
                    </div>
                </div>

            </div>
        </section>
    </div>
</section>





<!--events section-->
<section class="uk-section uk-background-cover uk-panel uk-flex  uk-text-right" uk-height-viewport="min-height: 1000"
    data-src="{{URL('images/y.png')}}" uk-img>

    <div class="uk-container uk-container-xsmall uk-margin-small ">
        <section class="uk-section">
            <h3 class="uk-card-title uk-text-center">أهم الأحداث والمناسبات</h3>
        </section>
        <div class="uk-child-width-1@s uk-grid-xsmall uk-grid-match	" uk-grid>

            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-hover-large uk-border-rounded uk-text-center"
                    style="border-radius: 20px">
                    <p>اليوم العالمي لتقنية المعلومات</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-hover-large uk-border-rounded uk-text-center"
                    style="border-radius: 20px">
                    <p>اليوم العلمي لتقنية المعلومات</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-hover-large uk-border-rounded uk-text-center"
                    style="border-radius: 20px">
                    <p>ورش عمل الأمن السيبراني</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection