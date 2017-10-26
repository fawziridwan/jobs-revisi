@extends('layouts.index')
@section('content')   
<div class="card" style="width:600px; margin: auto; margin-top: 50px;">    
    <div class="text-center" style="text-align: center; padding-top: 5px; padding-bottom: 5px;">
        <h4 class="blue-text mb-5"><strong>Join Applicant Form</strong></h4>
    </div>
      <div class="row">
        {!! Form::open(['route' => 'join_post', 'class' => 'col s12', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}
        @if (Sentinel::check())
            {{ Form::hidden('id', Sentinel::getUser()->id) }}
        @else
        @endif
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" type="text" class="validate" name="name">
              <label for="icon_prefix">First Name</label>
              <p class="text-danger"></p>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">email</i>
              <input id="icon_prefix" type="text" class="validate" name="email">
              <label for="icon_prefix">Email</label>
              <p class="text-danger"></p>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">phone</i>
              <input id="icon_prefix" type="text" class="validate" name="contact">
              <label for="icon_prefix">Contact Person</label>
              <p class="text-danger"></p>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">address</i>
              <input id="icon_prefix" type="text" class="validate materialize-textarea" name="address">
              <label for="icon_prefix">Address</label>
              <p class="text-danger"></p>
            </div> 
          </div>
          <div class="row">
            <div class="file-field input-field col s6">
              <div class="btn">
                <span>File</span>
                <input type="file" name="cv">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
            <div class="input-field col s-6" style="float: right;">
                <input type="submit" class="waves-effect waves-light btn green" value="Submit Job Applicant"> 
            </div>
            <div class="text-danger"></div>
          </div>         
        {!! Form::close() !!}
      </div>  
</div>
@endsection