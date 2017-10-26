@extends('layouts.index')
@section('content')
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
{{-- <script type="text/javascript" src="/js/file.js"></script> --}}
<script type="text/javascript">
  $(document).ready(function() {
    $('.dropdown-button').dropdown('open');
  });
</script>
 
<div class="container">
  <div class="row">
    <div class="col s12"></div>
      <div id="manageusers-content" class="responsive">
      <table class="responsive-table">
          <thead>
            <tr>
            <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Telp</th>
                <th>Address</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($applicants as $applicant)
            <tr>
              <th scope="row">{!! $applicant->id !!}</th>
                <td>{!! $applicant->name!!}  </td>
                <td>{!! $applicant->email !!}</td>
                <td>{!! $applicant->contact !!} </td>
                <td>{!! $applicant->address !!}</td>
                <td>{!! $applicant->status !!}</td>
                <td> 

                  <a class='dropdown-button btn' href='#' data-activates='dropdown1'><i class="fa fa-chevron-down fa-left"></i>Choose</a>
                  <ul id='dropdown1' class='dropdown-content'>
                    <li>{{ link_to(route('applicant.show', $applicant->id), 'Open') }}</li>
                    <li>{{ link_to(route('accept.update', array($applicant->id, 'status'=>'Accepted')), 'Accept') }}</li>
                    <li>{{ link_to(route('accept.update', array($applicant->id, 'status'=>'Rejected')), 'Reject') }}</li>
                    <li>{{ link_to(route('delete.destroy', $applicant->id), 'Delete') }}</li>
                  </ul>                
                </td>
                
            </tr>
          @endforeach
          </tbody>
        </table>
    </div>
  </div>
</div>

@endsection