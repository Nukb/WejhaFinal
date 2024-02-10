@extends('layouts.defualt')
@section('title','FAQ')
@section('content')

<!--FAQ section-->

<section
    class="uk-section  uk-padding-remove-bottom uk-section-large  uk-text-center uk-background-cover uk-margin-xlarge-top"
    data-src="{{URL('images/gg.png')}}" uk-img>
    <div class=" uk-align-center uk-container uk-container-auto  uk-margin-xlarge-bottom">

        <section class="uk-section">
            <div class="uk-card uk-card-body uk-margin-bottom">
                <h3 class="uk-card-title uk-text-uppercase">الأسئلة الشائعة</h3>
            </div>
        </section>


        <div class="uk-card uk-card-body">
            <div class="uk-grid uk-flex uk-flex-middle">
                <div class="uk-width-1-1@s ">


                    <div class="uk-width-1-1@s ">
                        <div class="uk-card uk-card-default uk-card-body uk-margin-small-bottom uk-card-hover uk-transition-toggle"
                            uk-toggle="target: .q1" style="border-right: 5px solid rgb(0, 89, 255);">
                            <h3 class="uk-card-title uk-text-uppercase uk-margin-remove">ما هي منصة وجهة؟ </h3>
                            <span uk-icon="chevron-down"></span>
                            <div class="uk-card-body q1" hidden>
                                <p>وجهة هي منصة تعليم إلكتروني وتبادل خبرات تهدف إلى ربط المتعلمين والخبراء في مختلف
                                    المجالات تقنية المعلومات</p>
                            </div>
                        </div>
                    </div>

                    <div class="uk-width-1-1@s ">
                        <div class="uk-card uk-card-default uk-margin-small-bottom uk-card-body uk-card-hover uk-transition-toggle"
                            uk-toggle="target: .q2" style="border-right: 5px solid rgb(0, 89, 255);">
                            <h3 class="uk-card-title uk-text-uppercase uk-margin-remove">من يستطيع استخدام منصة وجهة؟
                            </h3>
                            <span uk-icon="chevron-down"></span>
                            <div class="uk-card-body q2" hidden>
                                <p>يمكن لأي شخص استخدام منصة وجهة، سواء كان طالبًا أو باحثًا عن عمل أو محترفًا يرغب في
                                    تطوير مهاراته.</p>
                            </div>
                        </div>
                    </div>

                    <div class="uk-width-1-1@s ">
                        <div class="uk-card uk-card-default uk-margin-small-bottom uk-card-body uk-card-hover uk-transition-toggle"
                            uk-toggle="target: .q3" style="border-right: 5px solid rgb(0, 89, 255);">
                            <h3 class="uk-card-title uk-text-uppercase uk-margin-remove">ما هي الشروط التي يجب أن
                                أستوفيها لكي أصبح خبيرًا على منصة وجهة؟</h3>
                            <span uk-icon="chevron-down"></span>
                            <div class="uk-card-body q3" hidden>
                                <p>يجب أن تمتلك خبرة واسعة في مجال تخصصك وأن تكون قادرًا على مشاركة خبراتك مع الآخرين
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="uk-width-1-1@s ">
                        <div class="uk-card uk-card-default uk-margin-small-bottom uk-card-body uk-card-hover uk-transition-toggle"
                            uk-toggle="target: .q4" style="border-right: 5px solid rgb(0, 89, 255);">
                            <h3 class="uk-card-title uk-text-uppercase uk-margin-remove">كيف يمكنني أن أصبح خبيرًا على
                                منصة وجهة؟</h3>
                            <span uk-icon="chevron-down"></span>
                            <div class="uk-card-body q4" hidden>
                                <p>يمكنك التقدم بطلب ليصبح خبيرًا على منصة وجهة من خلال الموقع الإلكتروني</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>

@endsection