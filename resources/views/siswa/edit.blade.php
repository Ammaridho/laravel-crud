@extends('layouts.master')

@section('utama')

        <h1>Edit Data Siswa</h1>
            @if(session('sukses'))
                <div class="alert alert-success" role="alert">              <!--alert untuk memberitahu berhasil-->
                    {{session('sukses')}}
                </div>
            @endif

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <div class="row">
                <div class="col-lg-12">
                    <form action="/siswa/{{$siswa->id}}/update" method="POST">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Depan</label>
                            <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                            placeholder="Nama Depan" value="{{$siswa->nama_depan}}">  <!--cara membuat isi otomatis saat ingin mengedit -->
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Belakang</label>
                            <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                            placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}"> 
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                            <option value='L' @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>  <!--cara membuat isi otomatis saat ingin mengedit -->
                            <option value='P' @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Agama</label>
                            <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                            placeholder="Agama" value="{{$siswa->agama}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" 
                            placeholder="Masukkan Alamat">{{$siswa->alamat}}</textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-warning btn-btn-primary">Submit</button>
                            </form> 
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" href="/siswa/back">Close</button>
                        </div>
                </div>
            </div>
        
@endsection
