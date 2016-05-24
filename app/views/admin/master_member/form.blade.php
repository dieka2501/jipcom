@extends('template')
@section('content')
	<header class="page-header">
		<h2>Form Member</h2>
	</header>

	<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
					<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
				</div>
		
				<h2 class="panel-title">Member</h2>
			</header>
			<form>
			<div class="panel-body">
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
                                    <label><input type="radio" name="type" class="type" value="new" checked="checked"> Baru</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="radio">
                                    <label><input type="radio" name="type" class="type" value="old"> Ulang</label>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Photo 3x4</label>
                            <input type="file" name="member_image">
                        </div>
                    </div>
                    <br>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="member_name" required="required">
                        </div>
                        <div class="col-md-6">
                            <label>Nama Panggilan</label>
                            <input type="text" class="form-control" name="member_nickname">
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>Tempat / Tgl. Lahir</label>
                            <input type="text" class="form-control" name="member_birth">
                        </div>
                        <div class="col-md-6">
                            <label>Agama</label>
                            <input type="text" class="form-control" name="member_religion">
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="member_sex"><option value="laki-laki">Laki-laki</option><option value="perempuan">Perempuan</option></select>
                            <!-- <input type="text" class="form-control" name='member_sex' /> -->
                        </div>
                        <div class="col-md-6">
                            <label>Golongan Darah</label>
                            <input type="text" class="form-control" name="member_blood_type">
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-md-12">
                            <label>Alamat Rumah</label>
                            <textarea class="form-control" rows="4" name="member_address"></textarea>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>No. Telpon Rumah</label>
                            <input type="text" class="form-control" name="member_phone">
                        </div>
                        <div class="col-md-6">
                            <label>Alamat Email</label>
                            <input type="text" class="form-control" name="member_email" required="required">
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>Nama Kantor</label>
                            <input type="text" class="form-control" name="member_office">
                        </div>
                        <div class="col-md-6">
                            <label>Bidang Usaha</label>
                            <input type="text" class="form-control" name="member_business">
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" name="member_position">
                        </div>
                        <div class="col-md-6">
                            <label>Alamat Kantor</label>
                            <input type="text" class="form-control" name="member_office_address">
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <label>No. Telp. Kantor</label>
                            <input type="text" class="form-control" name="member_office_number">
                        </div>
                        <div class="col-md-6">
                            <label>No. SIM</label>
                            <input type="text" class="form-control" name="member_license">
                        </div>
                    </div>
                    <br>
                </div>
			</div>
			<div class="panel-footer">
				<button type="submit" class="btn btn-default">Approve</button>
				<button type="submit" class="btn btn-default">Reject</button>
				<button type="submit" class="btn btn-default">cancel</button>
			</div>
			</form>
		</section>
		
	<!-- end: page -->
@stop