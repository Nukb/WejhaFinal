<!--NavBar section-->

<div class="uk-position-top uk-box-shadow-small"
    uk-sticky="start: 170; animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; uk-position-z-index"
    uk-sticky="end: !.uk-height-large; offset: 80">
    <nav class="uk-navbar-container ">
        <div class="uk-container">
            <div uk-navbar>

                <div class="uk-navbar-left ">

                    <ul class="uk-navbar-nav  uk-position-left">
                        <li class="uk-active"><button class="uk-button uk-button-default uk-margin-top uk-border-rounded"style="width: 150px; color: black; border-radius: 5%; border: 1px solid blue;"><span class="uk-icon" uk-icon="icon:  user; ratio: 0.8"></span>تسجيل</button></li>
                        <li class="uk-active"><button class="uk-button uk-button-default uk-margin-top uk-border-rounded"style="background-color:  rgb(0, 89, 255);"><span class="uk-icon" uk-icon="icon:  sign-in;"></span>تسجيل دخول</button></li>
                    </ul>

                </div>
                <div class="uk-navbar-center">

                    <ul class="uk-navbar-nav uk-text-right">

                <li><a href="{{ URL::to('/home') }}" uk-icon="icon:" style="color: #001840; ">الرئيسية</a>
                <li><a href="{{ URL::to('/Courses') }}" uk-icon="icon:" style="color: #001840;">الكورسات</a>
                <li><a href="{{ URL::to('/instructors') }}" style="color: #001840;">الخبراء</a></li>
                <li><a href="{{ URL::to('/contact') }}" style="color: #001840;">تواصل معنا</a></li>

                    </ul>

                </div>

                <div class="uk-navbar-right ">

                    <ul class="uk-navbar-nav ">

                        <li><a href="{{ URL::to('/home') }}" class="uk-active"><img style="width:25%" src="{{URL('images/logoo.svg')}}"></a></li>
                    </ul>



                </div>

            </div>
        </div>
    </nav>

</div>