@extends('layouts.index')
@section('content')
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
{{-- <script type="text/javascript" src="/js/file.js"></script> --}}
<script type="text/javascript">
  $(document).ready(function() {


      $("#open").click(function() {
          document.getElementById("manageusers-content").href = "data.html";

      });



  });

  function readFrom(fileName) {
      $.get(fileName, function(data) {
          alert('terbaca' + data); 
          $("#manageusers-content").html(data);

      });
  }

  function contentChanger() {
      readFrom('data.html');
  }  
</script>

<style>
  table{
    color:black;
  }
</style>

<div class="container">
<div class="row">
  
  <!-- First column -->
{{--   <div class="col 3">


    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Manage Users</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Create Job vacancy</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>

  </div> --}}
  <!-- First column -->

  <!-- Second column -->
  <div class="col-8">

    <!-- Content -->
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <div class="card">
            <h3 class="card-header primary-color white-text">Manage Users</h3>
            <div class="card-body">
            <div id="manageusers-content">
                <table class="table table-striped">
                    <thead>
                      <tr>
                      <th>#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Telp</th>
                          <th>Address</th>
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
                              <div class="btn-group">
                                  <button type="button" class="btn btn-danger">Action</button>
                                  <button type="button" class="btn btn-danger dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                  <div class="dropdown-menu">
                                      <a class="dropdown-item"  id="open">{{ link_to(route('applicant.show', $applicant->id), 'Open') }}</a>
                                      <a class="dropdown-item"  id="accept">{{ link_to(route('accept.update', array($applicant->id, 'status'=>'Accepted')), 'Accept') }}</a>
                                      <a class="dropdown-item"  id="reject">{{ link_to(route('accept.update', array($applicant->id, 'status'=>'Rejected')), 'Reject') }}</a>
                                      <a class="dropdown-item"  id="delete">{{ link_to(route('delete.destroy', $applicant->id), 'Delete') }}</a>
                                  </div>
                              </div>  
                          
                          </td>
                          
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                
            </div>
        </div>
      
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
        <div class="card">
            <h3 class="card-header primary-color white-text">Create Job vacancy</h3>
            <div class="card-body">
              <div id="setting-content">
                <p>...</p>
                <p>...</p>
                <p>...</p>
                <p>...</p>
                <p>...</p> 
              </div>        
            </div>
        </div>  
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
        <div class="card">
            <h3 class="card-header primary-color white-text">Messages</h3>
            <div class="card-body">  
            <p>...</p>
            <p>...</p>
            <p>...</p>
            <p>...</p>
            <p>...</p>         
            </div>
        </div>
      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
        <div class="card">
            <h3 class="card-header primary-color white-text">Create Job vacancy</h3>
            <div class="card-body">
            <p>...</p>
            <p>...</p>
            <p>...</p>
            <p>...</p>
            <p>...</p>

            </div>
        </div> 
      </div>
    </div>
    <!-- Content -->

  </div>
  <!-- Second column -->

</div>
            
</div>
@endsection