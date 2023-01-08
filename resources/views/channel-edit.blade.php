@extends('master')
@section('contant')

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card mt-3">
               <div class="card-header bg-success">EDIT CHANNELS</div>

                <div class="card-body">


                   <form action="{{ route('media-update', $channel_info->id) }}" method="POST">
                       @csrf
                       <div class="form-group">
                           <label for="">ENTER TV CHANNEL HARE</label>
                           <input type="text"
                             class="form-control @error('channel_name') is-invalid @enderror " value="{{$channel_info->channels_name}}"  name="channel_name" placeholder="Enter your TV Channel">
                             @error('channel_name')
                              <small class="text-danger"> {{ $message }} </small>
                             @enderror

                         </div>
                         <div class="form-group">
                           <button type="submit" class="btn btn-success btn-sm mt-2">Update channel</button>

                         </div>
                   </form>
               </div>
            </div>

        </div>
    </div>
</div>

@endsection
