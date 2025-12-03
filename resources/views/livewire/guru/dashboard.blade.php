<div>
    <div class="row">
        <div class="col-12">
            <div class="card"> 
                <div class="card-body"> 
                    <h4 class="card-title">Dashboard Guru</h4>
                    <p class="card-description">Selamat datang di dashboard guru</p>

                    <h1>Assalaamualaikum, Guru {{ Auth()->user()->name }}!</h1>


                </div> 
                <div class="card-body"> 
                   
                    <div class="mt-3">
                        <livewire:clock timezone="Asia/Jakarta" format="H:i:s" />
                    </div>

                </div> 
            </div> 
        </div>
    </div>
</div>
