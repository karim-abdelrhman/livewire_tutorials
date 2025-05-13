<div>
    <div class="row mb-3">
        <div class="col-6">
            <label for="company" class="mb-3">Company</label>
            <select wire:model.live="companyId" class="form-select">
                <option selected>select your phone company</option>
                @foreach($this->companies as $company)
                    <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-6 ">
            <label for="phone" class="mb-3">Phones Models</label>
            <select wire:model.live="phoneId" id="phone" class="form-select">
                <option selected>select your phone brand</option>
                @foreach($this->phones as $phone)
                    <option value="{{$phone->id}}">{{$phone->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
