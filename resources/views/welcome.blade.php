<!-- Styles -->
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
@extends('layouts.index')
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-center position-ref full-height">
                    @if (Sentinel::check())
                        <div class="content">
                            <div class="title m-b-md">
                                <p class="flow-text"><blockquote>Job Application</blockquote></p>
                            </div>
                                <a  href="profile" class="waves-effect waves-light btn blue" style="color: white;"><i class="fa fa-user"></i> Profile</a>
                                <a  href="/join" class="waves-effect waves-light btn green"><i class="fa fa-hand-o-up"></i> Join Us!</a>
                        </div>    
                    @else
                        <div class="content">
                            <div class="title m-b-md">
                                <p class="flow-text"><blockquote>Laravel</blockquote></p>
                            </div>
                            <p class="content" style="text-align: justify;">
                                With Laravel, my job isn't done until even the underside is clean, and I've come to find enjoyment in it. <br>
                                <b><center>Taylor Otwell</center></b>
                            </p><br>
                        </div>
                    @endif
                </div>
            </div>
        </div>      
    </div>
@stop