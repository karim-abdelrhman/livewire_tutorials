<div>
    <div class="row mt-3">
        <div class="col-12">
            <input id="text" type="text" class="form-control" wire:model.live="text">
        </div>
        <div class="col-12 mt-3">
            <button id="btn" class="btn btn-success full">Random Text</button>
        </div>
    </div>

    @script
    <script>

        document.getElementById('btn').addEventListener('click' , function (){
            $wire.randomText();

            $wire.testApi('ahmed').then(function (res){
                console.log(res);
            })
        });

    </script>
    @endscript
</div>
