<div>
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create new user</h3>
                </div>
                <div class="card-body">
                    <form wire:submit="createUser">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="" class="col-form-label">Name</label>
                                <input class="form-control col-md-4" type="text" name="name" wire:model="name">
                                @error('name')
                                <div class="alert alert-danger">{{$message}}</div> @enderror
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="email" class="col-form-label">Email</label>
                                <input id="email" class="form-control form-group col-md-4" type="email" name="email"
                                       wire:model="email">
                                @error('email')
                                <div class="alert alert-danger">{{$message}}</div> @enderror
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="" class="col-form-label">Upload Image</label>
                                <input class="form-control" type="file" name="image" wire:model="image">
                                @error('image')
                                <div class="alert alert-danger">{{$message}}</div> @enderror

                                @if($image)
                                    <img src="{{$image->temporaryUrl()}}" alt="" width="100px" class="mt-3">
                                @endif

                                <div wire:loading wire:target="image">
                                    <span class="text-success"> uploading .... </span>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="" class="col-form-label">Password</label>
                                <input class="form-control col-md-4" type="password" name="name"
                                       wire:model="password">
                                @error('password')
                                <div class="alert alert-danger">{{$message}}</div> @enderror
                            </div>
                            <button type="submit" class="btn btn-success mt-3 col-md-12">
                                create new user
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All users</h3>
                </div>
                <div class="card-body">
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
                            <tr>
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
    </div>
</div>
