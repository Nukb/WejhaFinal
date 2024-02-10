@extends('layouts.defualt')
@section('title','Profile')
@section('content')


<!--Profile section-->

<section class="uk-section uk-padding-remove-bottom uk-margin-xlarge-top">
    <div class=" uk-container uk-container-expand uk-container-center uk-margin-xlarge-bottom ">

        <div class="uk-grid uk-width-auto uk-align-center" uk-grid>
            <div class="uk-card uk-card-large uk-card-body uk-flex uk-flex-center " >

                <div class="uk-card uk-card-default uk-width-1-2 uk-card-body uk-margin-right uk-box-shadow-large"
                    data-src="{{URL('images/g.png')}}" uk-img style="border-radius: 20px">
                    <div class="uk-card-header">
                        <img class="uk-image uk-align-center" width="200" height="200" src="{{URL('images/1.jpg')}}"
                            alt="Avatar" style="border-radius: 20%;">

                    </div>
                    <div class="uk-card-body uk-text-center	">
                        <h1>أمل</h1><br>
                        <h3>خبيرة أمن سيبراني</h3>
                    </div>
                    <div class="uk-card-footer uk-text-center uk-text-default">
                        <button class="uk-button-primary uk-button-large " style="border-radius: 20px">راسلني</button>
                        <div class="uk-icon-list uk-icon-list-divider uk-align-center uk-margin-large-top">
                            <a href="#" class="uk-icon-button " uk-icon="instagram"></a>
                            <a href="#" class="uk-icon-button uk-margin-small-right" uk-icon="facebook"></a>
                            <a href="#" class="uk-icon-button uk-margin-small-right" uk-icon="youtube"></a>
                            <a href="#" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
                        </div>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-box-shadow-large uk-width-1-1 uk-card-body uk-margin-right uk-text-justify" style="border-radius: 20px">
                    <h2><b>نبذة عني:</b></h2>
                    <p>أمل هي خبيرة أمن سيبراني ذات خبرة واسعة في مجال حماية البيانات والأنظمة الإلكترونية. تتمتع
                        بمهارات تقنية عالية وفهم عميق للمخاطر والتحديات التي تواجهها المؤسسات في العالم الرقمي.                
                      </p>
                    <h2><b>كورساتي:</b></h2>

                    <div
                        class="uk-container uk-container-expand  uk-margin-large-top uk-margin-large-bottom uk-width-expand">
                        <div class="uk-grid uk-grid-small uk-grid-match ">

                            <div class=" uk-card-shadow-large uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-margin uk-margin-left"
                                style="border-radius: 20px">
                                <div class="uk-width-expand uk-image uk-background-cover uk-align-left"  >
                                    <img src="{{URL('images/s.jpg')}}" alt="Cybersecurity and Digital Transformation" style="border-radius: 20px;">
                                </div>
                                <div class="uk-width-expand uk-text-center">
                                    <h4>
                                        الأمن السيبراني والتحول الرقمي
                                    </h4>
                                    <h4>
                                        الوصف هنا
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
</section>


@endsection