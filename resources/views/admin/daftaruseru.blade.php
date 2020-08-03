@extends('layouts.admin')
@section('isi')
<section class="content" style="margin-top: 80px;">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Manajemen User
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NPM</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $u)
                                <tr>
                                    <td>{{$u->nama}}</td>
                                    <td>{{$u->npm}}</td>
                                    <td>
                                        <?php if ($u->role_id == 1) { ?>
                                            <a href="../admin/users/setA/{{$u->id}}" type="button" class="btn btn-primary btn-sm">Set Admin</a>
                                        <?php } else { ?>
                                            <a href="../admin/users/setU/{{$u->id}}" type="button" class="btn btn-primary btn-sm">Set User</a>
                                        <?php } ?>
                                        <?php if ($u->is_active == 1) { ?>
                                            <a href="../admin/users/hapus/{{$u->id}}" onclick="return confirm('Are you sure?');" type="button" class="btn btn-danger btn-sm">Nonaktifkan</a>
                                            <?php }else{ ?>
                                            <a href="../admin/users/restore/{{$u->id}}" onclick="return confirm('Are you sure?');" type="button" class="btn btn-danger btn-sm">Aktifkan</a>
                                            <?php } ?>
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
    <!-- #END# Basic Examples -->
</section>
@endsection