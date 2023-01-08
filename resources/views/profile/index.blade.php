@extends('dashboard.dashboard_master')
@section('page_title')
    Single show Category
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo"></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-photo">
                                @if (auth()->user()->profile_photo)
                                <img src="{{ asset('uploads/profile_photo') }}/{{ auth()->user()->profile_photo}}" class="img-fluid rounded-circle" alt="not found">
                                @else
                                <img src="{{ asset('dashboard/images/profile/profile.png') }}" class="img-fluid rounded-circle" alt="">
                                @endif
                            </div>
                            <div class="profile-details">
                                <div class="profile-name px-3 pt-2">
                                    <h4 class="text-primary mb-0">{{ auth()->user()->name}}</h4>
                                    <p>Name</p>
                                </div>
                                <div class="profile-email px-2 pt-2">
                                    <h4 class="text-muted mb-0">{{ auth()->user()->email}}</h4>
                                    <p>Email</p>
                                </div>
                                <div class="profile-email px-2 pt-2">
                                    <h4 class="text-muted mb-0">{{ auth()->user()->phone_number}}</h4>
                                    <p>Phone Number</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="pt-3">
                            <div class="settings-form">
                                <h4 class="text-primary">Account Setting</h4>

                                <form action="{{ route('change.name')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label>Name</label>
                                            <input type="text" value="{{ auth()->user()->name}}" class="form-control" name="name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Phone Number</label>
                                            <input type="text"  value="{{ auth()->user()->phone_number}}"   class="form-control" name="phone_number">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Profile Photo</label>
                                            <input type="file" class="form-control" name="profile_photo">
                                        </div>
                                     </div>
                                    <button class="btn btn-info btn-sm" type="submit">change</button>
                                {{-- </form>
                                    <hr>
                                    <hr>
                                    <form action="{{ route('change.password') }}" method="POST">
                                        @csrf
                                         <div class="form-row">
                                          <div class="form-group col-md-4">
                                            <label>Current Password</label>
                                            <input type="password" placeholder="Current Password" class="form-control" name="current_password" >
                                            @if (session('error'))
                                                <small class="text-danger">{{ session('error') }} </small>
                                            @endif
                                          </div>
                                         <div class="form-group col-md-4">
                                            <label>New Password</label>
                                            <input type="password" placeholder="New Password" class="form-control" name="password">
                                         </div>
                                         <div class="form-group col-md-4">
                                            <label>Confirm Password</label>
                                            <input type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation">
                                         </div>
                                         </div>

                                    <button class="btn btn-secondary btn-sm" type="submit">Change your password</button>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('footer_scripts')
<script>
    @if (session('success'))

    Swal.fire(
      'Good job!',
      '{{ (session('success'))}}',
      'success'
)
    @endif

</script>
@endsection


