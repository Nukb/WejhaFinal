@extends('layouts.defualt')
@section('title','Courses')
@section('content')

<!--Courses section-->

<section class="uk-section uk-padding-remove-bottom uk-margin-xlarge-top">

    <div class=" uk-container uk-container-expand uk-container-center">

        <div class="uk-grid uk-width-auto uk-align-center" uk-grid>
            <div class="uk-card uk-card-large uk-card-body uk-flex uk-flex-center ">

                <div class="uk-card uk-width-1-1 uk-margin-right uk-text-lead uk-text-justify uk-align-right"
                    style="height: 1100px">

                    <div class="uk-child-width-1@m uk-grid-small uk-grid-match uk-margin-remove-top uk-margin-bottom"
                        uk-grid>

                        <p class="uk-text-title uk-margin-bottom">الكورسات التدريبية الحالية<br> ابحث عن الكورس الذي
                            يناسبك وطور مهاراتك </p>
                    </div>

                    <div class="uk-child-width-1-3@s uk-grid-small uk-grid-match uk-margin-top" uk-grid>
                        <li>
                            <div class="uk-card uk-card-default card-hover-small"
                                style="height: 400px; border-radius: 20px;">
                                <div class="uk-card-header uk-padding-remove">
                                    <img src="{{URL('images/Course.jpg')}}" class="uk-align-center"
                                        style="width:290px; height: 180px; border-radius: 20px" alt="">
                                </div>
                                <div class="uk-card-body uk-text-small uk-padding-remove">
                                    <div class="uk-margin-small-top uk-margin-small-bottom ">


                                        <div class=" uk-padding-remove">
                                            <p class="uk-text-default uk-margin uk-margin-right">مهارة للبرمجة <br>برمجة
                                                المواقع ( Full stack).</p>
                                            <p class="uk-text-xsmall uk-margin uk-margin-right">HTML/CSS/Js/PHP/laravel
                                            </p>
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle uk-margin-right" width="30" height="30"
                                                        src="{{URL('images/LS.png')}}" alt="Avatar">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <p class="uk-text-medium uk-margin-remove-bottom">العنكبوت الليبي
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{URL('Details')}}"
                                            class="uk-button uk-button-text uk-position-bottom-center uk-margin-bottom">المزيد</a>

                                    </div>
                                </div>



                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default card-hover-small"
                                style="height: 400px; border-radius: 20px;">
                                <div class="uk-card-header uk-padding-remove">
                                    <img src="{{URL('images/Course.jpg')}}" class="uk-align-center"
                                        style="width:290px; height: 180px; border-radius: 20px" alt="">
                                </div>
                                <div class="uk-card-body uk-text-small uk-padding-remove">
                                    <div class="uk-margin-small-top uk-margin-small-bottom ">


                                        <div class=" uk-padding-remove">
                                            <p class="uk-text-default uk-margin uk-margin-right">مهارة للبرمجة <br>برمجة
                                                المواقع ( Full stack).</p>
                                            <p class="uk-text-xsmall uk-margin uk-margin-right">HTML/CSS/Js/PHP/laravel
                                            </p>
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle uk-margin-right" width="30" height="30"
                                                        src="{{URL('images/LS.png')}}" alt="Avatar">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <p class="uk-text-medium uk-margin-remove-bottom">العنكبوت الليبي
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{URL('Details')}}"
                                            class="uk-button uk-button-text uk-position-bottom-center uk-margin-bottom">المزيد</a>

                                    </div>
                                </div>



                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default card-hover-small"
                                style="height: 400px; border-radius: 20px;">
                                <div class="uk-card-header uk-padding-remove">
                                    <img src="{{URL('images/Course.jpg')}}" class="uk-align-center"
                                        style="width:290px; height: 180px;  border-radius: 20px" alt="">
                                </div>
                                <div class="uk-card-body uk-text-small uk-padding-remove">
                                    <div class="uk-margin-small-top uk-margin-small-bottom ">


                                        <div class=" uk-padding-remove">
                                            <p class="uk-text-default uk-margin uk-margin-right">مهارة للبرمجة <br>برمجة
                                                المواقع ( Full stack).</p>
                                            <p class="uk-text-xsmall uk-margin uk-margin-right">HTML/CSS/Js/PHP/laravel
                                            </p>
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle uk-margin-right" width="30" height="30"
                                                        src="{{URL('images/LS.png')}}" alt="Avatar">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <p class="uk-text-medium uk-margin-remove-bottom">العنكبوت الليبي
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{URL('Details')}}"
                                            class="uk-button uk-button-text uk-position-bottom-center uk-margin-bottom">المزيد</a>

                                    </div>
                                </div>


                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default card-hover-small"
                                style="height: 400px; border-radius: 20px;">
                                <div class="uk-card-header uk-padding-remove">
                                    <img src="{{URL('images/Course.jpg')}}" class="uk-align-center"
                                        style="width:290px; height: 180px;  border-radius: 20px" alt="">
                                </div>
                                <div class="uk-card-body uk-text-small uk-padding-remove">
                                    <div class="uk-margin-small-top uk-margin-small-bottom ">


                                        <div class=" uk-padding-remove">
                                            <p class="uk-text-default uk-margin uk-margin-right">مهارة للبرمجة <br>برمجة
                                                المواقع ( Full stack).</p>
                                            <p class="uk-text-xsmall uk-margin uk-margin-right">HTML/CSS/Js/PHP/laravel
                                            </p>
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle uk-margin-right" width="30" height="30"
                                                        src="{{URL('images/LS.png')}}" alt="Avatar">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <p class="uk-text-medium uk-margin-remove-bottom">العنكبوت الليبي
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{URL('Details')}}"
                                            class="uk-button uk-button-text uk-position-bottom-center uk-margin-bottom">المزيد</a>

                                    </div>
                                </div>



                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default card-hover-small"
                                style="height: 400px; border-radius: 20px;">
                                <div class="uk-card-header uk-padding-remove">
                                    <img src="{{URL('images/Course.jpg')}}" class="uk-align-center"
                                        style="width:290px; height: 180px;  border-radius: 20px" alt="">
                                </div>
                                <div class="uk-card-body uk-text-small uk-padding-remove">
                                    <div class="uk-margin-small-top uk-margin-small-bottom ">


                                        <div class=" uk-padding-remove">
                                            <p class="uk-text-default uk-margin uk-margin-right">مهارة للبرمجة <br>برمجة
                                                المواقع ( Full stack).</p>
                                            <p class="uk-text-xsmall uk-margin uk-margin-right">HTML/CSS/Js/PHP/laravel
                                            </p>
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle uk-margin-right" width="30" height="30"
                                                        src="{{URL('images/LS.png')}}" alt="Avatar">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <p class="uk-text-medium uk-margin-remove-bottom">العنكبوت الليبي
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{URL('Details')}}"
                                            class="uk-button uk-button-text uk-position-bottom-center uk-margin-bottom">المزيد</a>

                                    </div>
                                </div>



                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default card-hover-small"
                                style="height: 400px; border-radius: 20px;">
                                <div class="uk-card-header uk-padding-remove">
                                    <img src="{{URL('images/Course.jpg')}}" class="uk-align-center"
                                        style="width:290px; height: 180px;  border-radius: 20px" alt="">
                                </div>
                                <div class="uk-card-body uk-text-small uk-padding-remove">
                                    <div class="uk-margin-small-top uk-margin-small-bottom ">


                                        <div class=" uk-padding-remove">
                                            <p class="uk-text-default uk-margin uk-margin-right">مهارة للبرمجة <br>برمجة
                                                المواقع ( Full stack).</p>
                                            <p class="uk-text-xsmall uk-margin uk-margin-right">HTML/CSS/Js/PHP/laravel
                                            </p>
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle uk-margin-right" width="30" height="30"
                                                        src="{{URL('images/LS.png')}}" alt="Avatar">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <p class="uk-text-medium uk-margin-remove-bottom">العنكبوت الليبي
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{URL('Details')}}"
                                            class="uk-button uk-button-text uk-position-bottom-center uk-margin-bottom">المزيد</a>

                                    </div>
                                </div>


                            </div>
                        </li>
                    </div>


                </div>


                <!--Filter Courses section-->

                <div class="uk-card uk-width-1-2 uk-card-body uk-padding-remove uk-border-rounded uk-text-justify"
                    style="height: 1100px">
                    <div class="uk-card uk-card-default uk-width-1 uk-card-body uk-margin-right uk-border-rounded"
                        style="background-color: rgb(255, 254, 199); height: 400px; border-radius: 20px; ">

                        <p class="uk-card-title uk-text-center">التخصصات</p>
                        <div class="uk-form-controls uk-form-controls-text">
                            <label><input class="uk-checkbox" type="checkbox"> تحليل البيانات </label><br>
                            <label><input class="uk-checkbox" type="checkbox"> تطبيقات الويب </label><br>
                            <label><input class="uk-checkbox" type="checkbox"> تطبيقات الهاتف النقال </label><br>
                            <label><input class="uk-checkbox" type="checkbox"> قواعد البيانات </label><br>
                            <label><input class="uk-checkbox" type="checkbox"> شبكات </label><br>
                            <label><input class="uk-checkbox" type="checkbox"> الأمن السيبراني </label><br>
                        </div>

                    </div>
                    <div class="uk-card uk-card-default uk-width-1 uk-card-body uk-margin-right uk-margin-top uk-border-rounded"
                        style="background-color: rgb(255, 254, 199); height: 300px; border-radius: 20px;">

                        <p class="uk-card-title uk-text-center">المستوى</p>
                        <div class="uk-form-controls uk-form-controls-text">
                            <label><input class="uk-checkbox" type="checkbox"> مبتدئ </label><br>
                            <label><input class="uk-checkbox" type="checkbox"> متوسط </label><br>
                            <label><input class="uk-checkbox" type="checkbox"> متقدم </label><br>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</section>




@endsection