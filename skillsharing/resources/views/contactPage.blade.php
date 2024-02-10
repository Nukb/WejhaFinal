@extends('layouts.defualt')
@section('title','Contact Us')
@section('content')


<!--contact us section-->
<section class="uk-section uk-padding-remove-bottom uk-margin-xlarge-top ">
    <div class=" uk-align-center uk-container uk-container-auto  uk-margin-xlarge-bottom  uk-animation-scale-up uk-animation-medium uk-animation-delay-300">
        <div class="uk-grid uk-flex uk-flex-middle uk-child-width-1-2@s">

            <div class="uk-width-1-2@s ">
                <h2 class="uk-text-center uk-margin-large-bottom">تواصل معنا</h2>
                <form class="uk-form">
                    <div class="uk-margin">
                        <input class="uk-input" type="text" id="name" placeholder="الاسم" required>
                    </div>
                    <div class="uk-margin">
                        <input class="uk-input" type="email" id="email" placeholder="البريد الإلكتروني" required>
                    </div>
                    <div class="uk-margin">
                        <input class="uk-input" type="text" id="subject" placeholder="الموضوع" required>
                    </div>
                    <div class="uk-margin">
                        <textarea class="uk-textarea" rows="5" id="message" placeholder="الرسالة" required></textarea>
                    </div>
                    <button class="uk-button uk-button-primary uk-align-center " type="submit">إرسال</button>
                </form>
            </div>

            <div class="uk-width-1-2@s ">
                <div class="uk-background-cover uk-panel uk-flex uk-width-large uk-height-large" data-src=" {{URL('images/contact.jpg')}}" uk-img style="border-radius: 20px">
                </div>
            </div>
        </div>
    </div>




    <div class="uk-section uk-section-default uk-background-cover" data-src="{{URL('images/y.png')}}" uk-img>
        <div class="uk-container ">
            <div class="uk-width-1-2@s uk-align-center uk-text-center">
                <div
                    class="uk-margin-xlarge-top uk-margin-xlarge-bottom uk-card uk-card-default uk-card-body uk-box-shadow-hover-large uk-border-rounded" style="border-radius: 20px">
                    <h3>معلومات الاتصال</h3>
                    <ul class="uk-list uk-list-divider uk-align-center">
                        <li><span class="uk-margin-right uk-icon" uk-icon="icon:receiver;"></span> هاتف:<a
                                href="tel:+1234567890" dir="ltr">+218 XXX XXXX</a></li>
                        <li><span class="uk-margin-right uk-icon" uk-icon="icon:mail;"> </span> البريد الإلكتروني:<a
                                href="mailto:support@example.com" dir="ltr">support@example.com</a></li>
                    </ul>
                    <h3>تابعنا على مواقع التواصل الاجتماعي</h3>
                    <div>
                        <a href="" class="uk-icon-button " uk-icon="instagram"></a>
                        <a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
                        <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="youtube"></a>
                        <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


@endsection