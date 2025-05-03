<div wire:poll>
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
                {{ $users->links() }}
                </tbody>
            </table>
        </div>
    </div>
</div>
