<div wire:poll>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All users</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="mb-3 col-md-10">
                    <input wire:model.live="search" type="text" class="form-control"
                           placeholder="Search…">
                </div>
                <div class="mb-3 col-md-2">
                    <button class="btn btn-primary">Search</button>
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
                            <button class="btn btn-danger"
                                    type="button"
                                    wire:click="delete({{$user->id}})"
                                    wire:confirm.prompt="Are you sure you want to delete this guy?\n type yes |yes">Delete</button>
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
