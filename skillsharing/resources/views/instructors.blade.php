@extends('layouts.defualt')
@section('title','instructors')
@section('content')

<!--instructors section-->

<section class="uk-section uk-background-cover uk-margin-xlarge-top" data-src="{{URL('images/gg.png')}}" uk-img>
    <div class="uk-container">
        <div class="uk-section uk-margin-large" >
            <div class="uk-container">
                <h2 class="uk-heading-divider uk-text-center">خبراؤنا</h2>
                <p class="uk-text-center">اكتشف نخبة من الخبراء الذين يتمتعون بخبرة واسعة ومعرفة عميقة</p>
            </div>
        </div>

        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-card-hover-small" style="border-radius: 20px">
                    <div class="uk-card-media-top">
                        <img data-src="{{URL('images/1.jpg')}}" uk-img
                            alt="Lillian Wals" style="border-radius: 20px">
                    </div>
                    <div class="uk-card-body " >
                        <h3 class="uk-card-title uk-text-center"><a
                                href="{{URL('profile')}}">أمل</a></h3>
                        <p class="uk-text-meta uk-text-center">خبيرة أمن سيبراني</p>
                        <div class="uk-grid-small uk-flex-center " uk-grid>
                            <a href="#" class="uk-icon " uk-icon="instagram"></a>
                            <a href="#" class="uk-icon uk-margin-small-right " uk-icon="facebook"></a>
                            <a href="#" class="uk-icon uk-margin-small-right" uk-icon="twitter"></a>

                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default uk-card-body uk-card-hover-small" style="border-radius: 20px">
                    <div class="uk-card-media-top">
                        <img data-src="{{URL('images/2.jpg')}}" uk-img
                            alt="Lillian Wals" style="border-radius: 20px">
                    </div>
                    <div class="uk-card-body " >
                        <h3 class="uk-card-title uk-text-center"><a
                                href="https://bdevs.net/wp/educal/profile/lewis">زينب</a></h3>
                        <p class="uk-text-meta uk-text-center">مصممة صفحات ويب</p>
                        <div class="uk-grid-small uk-flex-center " uk-grid>
                            <a href="#" class="uk-icon " uk-icon="instagram"></a>
                            <a href="#" class="uk-icon uk-margin-small-right " uk-icon="facebook"></a>
                            <a href="#" class="uk-icon uk-margin-small-right" uk-icon="twitter"></a>

                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default uk-card-body uk-card-hover-small" style="border-radius: 20px">
                    <div class="uk-card-media-top">
                        <img data-src="{{URL('images/5.jpg')}}" uk-img
                            alt="Lillian Wals" style="border-radius: 20px">
                    </div>
                    <div class="uk-card-body " >
                        <h3 class="uk-card-title uk-text-center"><a
                                href="https://bdevs.net/wp/educal/profile/lewis">أية</a></h3>
                        <p class="uk-text-meta uk-text-center">مصممة قواعد بيانات</p>
                        <div class="uk-grid-small uk-flex-center " uk-grid>
                            <a href="#" class="uk-icon " uk-icon="instagram"></a>
                            <a href="#" class="uk-icon uk-margin-small-right " uk-icon="facebook"></a>
                            <a href="#" class="uk-icon uk-margin-small-right" uk-icon="twitter"></a>

                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default uk-card-body uk-card-hover-small" style="border-radius: 20px">
                    <div class="uk-card-media-top">
                        <img data-src="{{URL('images/6.jpg')}}" uk-img
                            alt="Lillian Wals" style="border-radius: 20px">
                    </div>
                    <div class="uk-card-body " >
                        <h3 class="uk-card-title uk-text-center"><a
                                href="https://bdevs.net/wp/educal/profile/lewis">علي</a></h3>
                        <p class="uk-text-meta uk-text-center">مطور تطبيقات ويب</p>
                        <div class="uk-grid-small uk-flex-center " uk-grid>
                            <a href="#" class="uk-icon " uk-icon="instagram"></a>
                            <a href="#" class="uk-icon uk-margin-small-right " uk-icon="facebook"></a>
                            <a href="#" class="uk-icon uk-margin-small-right" uk-icon="twitter"></a>

                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>

@endsection