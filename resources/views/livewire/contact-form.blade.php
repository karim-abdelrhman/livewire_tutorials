<div>
    <div class="col-md-12">
        <form class="card" wire:submit="submitForm">
            <div class="card-header">
                <h3 class="card-title">Contact Us form</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label required">Name</label>
                    <div>
                        <input wire:model="form.name" type="text"
                               class="@error('form.name') is-valid @enderror form-control"
                               placeholder="Enter Your Name">
                        @error('form.name')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <small class="form-hint">We'll never share your email with anyone else.</small>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label required">Email address</label>
                    <div>
                        <input wire:model="form.email" type="email"
                               class="@error('form.email') is-valid @enderror form-control"
                               aria-describedby="emailHelp"
                               placeholder="Enter email">
                        @error('form.email')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <small class="form-hint">We'll never share your email with anyone else.</small>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label required">message</label>
                    <div>
                        <input wire:model="form.message" type="text"
                               class="@error('form.message') is-valid @enderror form-control" placeholder="Message">
                        @error('form.message')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                    </div>
                </div>
                <livewire:drop-down></livewire:drop-down>
                <livewire:select2></livewire:select2>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
