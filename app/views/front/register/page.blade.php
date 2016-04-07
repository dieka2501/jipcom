@extends('front')
@section('content')
<div class="container">
    <div class="pre-footer">
        <div class="row">
            <div class="col-md-12">
                <h1 class="heading-title"><img src="<?php echo Config::get('app.url');?>assets/main/img/star.png" alt="Formulir Pendaftaran" width="30" /> &nbsp;Formulir Pendaftaran Anggota</h1>
                <br>
                {{$notip}}
            </div>
            <div class="col-md-12">
                 {{Form::open(['url'=>$url,'method'=>'POST','files'=>true])}}
                <div class="row">
                    <div class="form-group clearfix">
                        <!-- <div class="col-md-6">
                            <label>Registrasi : </label>
                            <input type="text" class="form-control" placeholder="No : " name="no" />
                        </div> -->
                        <div class="col-md-3">
                            <label>Pendaftaran Anggota</label>

                            <div class="row clearfix">
                            
                            <div class="col-md-3">
                                <div class="radio">
                                    <label><input type="radio" name="type" class="type" value='new' checked="checked"> Baru</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="radio">
                                    <label><input type="radio" name="type" class="type" value='old'> Ulang</label>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Photo 3x4</label>
                            <input type="file" name='member_image'>
                        </div>
                    </div>
                    <br>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name='member_name' required="required" />
                        </div>
                        <div class="col-md-6">
                            <label>Nama Panggilan</label>
                            <input type="text" class="form-control" name='member_nickname'/>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>Tempat / Tgl. Lahir</label>
                            <input type="text" class="form-control" name='member_birth'/>
                        </div>
                        <div class="col-md-6">
                            <label>Agama</label>
                            <input type="text" class="form-control" name='member_religion'/>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>Jenis Kelamin</label>
                            {{Form::select('member_sex',['laki-laki'=>'Laki-laki','perempuan'=>'Perempuan'],'',['class'=>'form-control'])}}
                            <!-- <input type="text" class="form-control" name='member_sex' /> -->
                        </div>
                        <div class="col-md-6">
                            <label>Golongan Darah</label>
                            <input type="text" class="form-control" name='member_blood_type'/>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-md-12">
                            <label>Alamat Rumah</label>
                            <textarea class="form-control" rows="4" name='member_address'></textarea>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>No. Telpon Rumah</label>
                            <input type="text" class="form-control" name='member_phone'/>
                        </div>
                        <div class="col-md-6">
                            <label>Alamat Email</label>
                            <input type="text" class="form-control" name='member_email' required="required"/>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>Nama Kantor</label>
                            <input type="text" class="form-control" name='member_office'/>
                        </div>
                        <div class="col-md-6">
                            <label>Bidang Usaha</label>
                            <input type="text" class="form-control" name='member_business'/>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" name='member_position'/>
                        </div>
                        <div class="col-md-6">
                            <label>Alamat Kantor</label>
                            <input type="text" class="form-control" name='member_office_address'/>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>No. Telp. Kantor</label>
                            <input type="text" class="form-control" name='member_office_number'/>
                        </div>
                        <div class="col-md-6">
                            <label>No. SIM</label>
                            <input type="text" class="form-control" name='member_license'/>
                        </div>
                    </div>
                    <br>
                </div>
                <h4>DATA KENDARAAN</h4>
                <br>
                <div class="row">
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>Nomor Polisi</label>
                            <input type="text" class="form-control" name='member_nopol'/>
                        </div>
                        <div class="col-md-6">
                            <label>Nomor Rangka</label>
                            <input type="text" class="form-control" name='member_chasis'/>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>Nomor Mesin</label>
                            <input type="text" class="form-control" name='member_engine'/>
                        </div>
                        <div class="col-md-6">
                            <label>Jenis Kendaraan</label>
                            <input type="text" class="form-control" name='member_car_type'/>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>Warna</label>
                            <input type="text" class="form-control" name='member_color'/>
                        </div>
                        <div class="col-md-6">
                            <label>Tahun Kendaraan</label>
                            <input type="text" class="form-control" name='member_car_year'/>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <p>Mengajukan permohonan untuk menjadi Anggota JSI Indonesia dan dengan ini saya menyatakan bersedia mentaati AD &amp; ART organisasi, bersedia mengikuti kegiatan
                           dan menjaga nama baik serta membantu mengembangkan JSI. 
                        </p>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>Masa Aktif KTA</label>
                            <input type="text" class="form-control" placeholder="Tahun-bln-tgl" name='member_kta_start'/>
                        </div>
                        <div class="col-md-6">
                            <label>Sampai dengan</label>
                            <input type="text" class="form-control" placeholder="Tahun-bln-tgl" name='member_kta_end'/>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>Kategori Anggota <strong>PLATINUM</strong></label><br>
                            <input type="text" class="form-control" placeholder="Rp. " name='member_platinum'/>
                            
                        </div>
                        <div class="col-md-6">
                            <label>Ukuran Kaos Baju</label>
                            <!-- <input type="text" class="form-control" name='member_size'/> -->
                            {{Form::select('member_size',['s'=>'S','m'=>'m','l'=>'L','xl'=>'XL','xxl'=>'XXL'],'',['class'=>'form-control'])}}
                        </div>
                    </div>
                    <br>
                    <div class="form-group clearfix">
                        <div class="col-md-6"><button type="submit" class="btn btn-lg btn-primary">Daftar Sekarang</button></div>
                    </div>
                </div>
                </form>
                <div class="clearfix"></div>
            </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@stop