<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All users</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="row mb-3 col-md-10">
                    <input wire:model.live="search" type="text" class="form-control"
                           placeholder="Search…">
                    <span class="input-icon-addon">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                       stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                            d="M0 0h24v24H0z"
                                                                                            fill="none"/><path
                                          d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"/><path d="M21 21l-6 -6"/></svg>
                                </span>
                </div>
                <div class=" mb-3 col-md-2">
                    <button class="btn btn-primary mt-3">Search</button>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr wire:key="{{$user->id}}">
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if($user->image)
                                <img src="{{asset('storage/' . $user->image)}}" alt="user image"
                                     style="width: 75px">
                            @endif
                        </td>
                        <td>
                            <button class="btn btn-danger">Delete</button>
                            <button class="btn btn-success">Edit</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                {{ $users->links() }}

            </table>
        </div>
    </div>
</div>
