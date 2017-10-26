@extends('layouts.index')
@section('content')
    <div class="card" style="width:600px; margin: auto; margin-top: 50px; margin-bottom: 50px; padding-bottom: 20px;">    

        <div class="text-center" style="text-align: center; padding-top: 5px; padding-bottom: 5px;">
            <h3 class="blue-text mb-7"><strong>Profile</strong></h3>
        </div>
        
        <div clas="col s12" style="color:black; margin-left: 150px;"> 
            <table class="table table-responsive table-striped text-center">
            <tbody>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>{!! $applicants->name !!}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{!! $applicants->email !!}</td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td>:</td>
                    <td>{!! $applicants->contact !!}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td>{!! $applicants->address !!}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td style="color:red;">{!! $applicants->status !!}</td>
                </tr>
            </tbody>
            </table>
            <button type="button" class="btn btn-primary" onclick="window.history.back()" style="text-align: right; margin-bottom: 30px;">Back</button>
        </div>

    </div>
@endsection