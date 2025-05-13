<div>
    <div wire:ignore class="row mb-3">
        <div class="col-12">
            <label  class="mb-3">Your Favorite Brand</label>
            <select wire:model="companies" class="form-select" multiple>
                <option >Select Your Favorite Brand</option>
                <option value="">Samsung</option>
                <option value="">Apple</option>
                <option value="">Nokia</option>
                <option value="">Realme</option>
                <option value="">Oppo</option>
            </select>
        </div>
    </div>

    @script
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#select2').select2();


            $('#select2').on('change' , function (){
                let data = $(this).val();
                $wire.set('companies' , data , false);
            });
        });
    </script>
    @endscript
</div>
