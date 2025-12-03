<div x-data>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card border-0 rounded-4 shadow-sm">
            <div class="card-body">

               
                <h4 class="card-title fw-bold mb-4 text-primary"> Data Hafalan Siswa</h4>

               
                
              
                
            <div class="text-end mb-4">
                <a href="{{ route('siswa.create-hafalan') }}" 
                   class="btn btn-primary">
                    Tambah Hafalan
                </a>
            </div>

              

                
                <div class="table-responsive">
                    <table class="table table-hover align-middle shadow-sm rounded-3 overflow-hidden">
                        <thead class="bg-light">
                            <tr class="text-center fw-semibold">
                                <th>No.</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Surah</th>
                                <th>Ayat</th>
                                <th>Juz</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($hafalan as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $item->siswa->user->name }}</td>
                                <td>{{ $item->siswa->kelas }}</td>
                                <td>{{ $item->surah }}</td>
                                <td>{{ $item->ayat }}</td>
                                <td>{{ $item->juz }}</td>
                                <td> 
                                @php
                                $status = strtolower($item->status);
                                $badgeClass = match ($status) {
                                    'disetor'    => 'bg-primary',
                                    'lulus'      => 'bg-success',
                                    'perbaikan'  => 'bg-warning text-dark',
                                    default      => 'bg-secondary',
                                };
                                @endphp
                                    <span class="badge {{ $badgeClass }} px-3 py-2 text-capitalize">
                                        {{ $item->status }}
                                    </span>
                                </td>

                                <td>{{ $item->created_at->format('d F Y') }}</td>
                                 <td class="d-flex gap-2">
                               <button 
                                class="btn btn-sm btn-danger"
                                wire:click="destroy({{ $item->id }})"
                                onclick="return confirm('Yakin ingin menghapus?')">
                                Hapus
                                </button>


                                <a href="{{ route('siswa.update-hafalan', $item->id) }}" 
                                   class="btn btn-sm btn-outline-success">
                                    Edit
                                </a>
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
