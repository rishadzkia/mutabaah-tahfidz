 <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body"> 
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description"> Basic form layout </p> 
                    <form class="forms-sample" wire:submit.prevent="update">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Nama Siswa</label>
                        <input type="text" class="form-control" wire:model="name" disabled id="exampleInputUsername1" >
                      </div> 
                      <div class="form-group"> 
                        <label for="exampleInputEmail1">Surah</label>
                        <input type="text" class="form-control" wire:model="surah" id="exampleInputEmail1">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Juz</label>
                        <input type="text" class="form-control" wire:model="juz" id="exampleInputPassword1" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Ayat</label>
                        <input type="text" class="form-control" wire:model="ayat" id="exampleInputPassword1" >
                      </div>
                     
                      <button type="submit" class="btn btn-primary me-2">Update Hafalan</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>