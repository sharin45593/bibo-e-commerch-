

 @extends('master')
 @section('contant')
     <div class="container">
         <div class="row">
             <div class="col-12 mt-3">
                 <div class="card" style="background-color:cadetblue; border-color:darkblue;">

                   <div class="card-body my-3">
                     <h4 class="card-title">All Tv Channels</h4>
                     <p class="card-text">Total:{{$tvs->count()}}</p>
                    </div>
                 </div>
             </div>
         </div>

         <div class="row">
           <div class="col-6 mt-3">
                <h1 class="text-center bg-success text-white">MEDIA</h1>
            {{-- success message --}}
                @if (session('delete_message'))
                    <div class="alert alert-danger">
                        {{session('delete_message')}}
                    </div>
                    @endif

                    @if (session('update_message'))
                    <div class="alert alert-success">
                        {{session('update_message')}}
                    </div>
                    @endif



                @forelse ($tvs as $tv)
                 <div class="card">
                    <div class="card-header">
                            <p class="">Serial Number :{{$loop-> index+1}}</p>
                            <p class="">Ranking Number :{{$loop-> remaining+1}}</p>
                     </div>
                     <div class="card-body">
                            <h2>{{$tv->channels_name}}</h2>
                            <p class="text-dark text-end">Created At : {{$tv->created_at->diffForHumans()}}</p>
                            <a href="{{ route('channel-delete', $tv->id) }}" class="btn btn-danger ">Delete</a>
                            <a href="{{ route('channel-edit', $tv->id) }}" class="btn btn-success ">Edit</a>
                            @if ( $tv->updated_at  )
                            <p class=" badge bg-warning text-end">Updated At : {{$tv->updated_at->diffForHumans() }}</p>
                            @endif


                     </div>
                 </div>
                 @empty

                         <div class="alert alert-danger "> NO DATA TO SHOW</div>

                 @endforelse
             </div>
             <div class="col-6">
                 <div class="card mt-3">
                    <div class="card-header bg-success">ADD cHANNELS</div>
                     <div class="card-body">
                        @if (session('success_message'))
                        <div class="alert alert-success">
                            {{session('success_message')}}
                        </div>
                        @endif


                        <form action="{{ route('media-insert') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">ENTER TV CHANNEL HARE</label>
                                <input type="text"
                                  class="form-control @error('channel_name') is-invalid @enderror " name="channel_name"   placeholder="Enter your TV Channel">
                                  @error('channel_name')
                                   <small class="text-danger"> {{ $message }} </small>
                                  @enderror

                              </div>
                              <div class="form-group">
                                <button class="btn btn-success btn-sm mt-2">Add channel</button>

                              </div>
                        </form>
                    </div>
                 </div>
                 <div class="card mt-5">
                     <div class="card-header">
                        <h1> Recycle Bin </h1>
                        <br>
                        <br>
                        <a href=" {{ route('channel-delete-all-forever')  }} " class="btn btn-sm btn-danger "> Delete Forever</a>

                     </div>
                     <div class="card-body">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>Channel Name</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($delete_channels as $delete_channel )
                                <tr>
                                    <td>{{ $delete_channel-> channels_name }}</td>
                                    <td>
                                        <a href="{{ route('channel-restore' , $delete_channel->id) }}" class="btn btn-sm btn-success  ">Restore</a>
                                        <a href=" {{ route('channel-delete-forever' , $delete_channel->id)  }} " class="btn btn-sm btn-danger ">Delete</a>
                                    </td>

                                </tr>


                                @empty
                                <tr class="text-center">
                                <td colspan="50" class=" alert alert-danger"> NO DATA TO RESTORE</td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                 </div>
                 </div>

             </div>
            </div>


     </div>

    @endsection

