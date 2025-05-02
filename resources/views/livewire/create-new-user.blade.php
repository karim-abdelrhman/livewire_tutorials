<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create new user</h3>
                </div>
                <div class="card-body">
                    <form wire:submit="createUser">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Name</label>
                                <input class="form-control col-md-4" type="text" name="name" wire:model="name">
                            </div>
                            <div class="col-md-4">
                                <label for="">Email</label>
                                <input class="form-control col-md-4" type="text" name="email" wire:model="email">
                            </div>
                            <div class="col-md-4">
                                <label for="">Password</label>
                                <input class="form-control col-md-4" type="password" name="name" wire:model="password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mt-3" >
                            create new user
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All users</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <button class="btn btn-danger">Delete</button>
                                    <button class="btn btn-success">Edit</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
