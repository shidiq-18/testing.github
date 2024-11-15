@extends('layouts.template')

@section('content')
    <div class="row pt-4">
        <div class="col-3 card bg-primary text-light shadow rekap">
            <div class="card-body">
                <i class="icon-people menu-icon"></i>
                <h1>30</h1>
            </div>
            <div class="card-footer">
                <h3>Anggota</h3>
            </div>
        </div>
        <div class="col-3 card bg-success text-light shadow rekap">
            <div class="card-body">
                <i class="icon-book-open menu-icon"></i>
                <h1>120</h1>
            </div>
            <div class="card-footer">
                <h3>Buku</h3>
            </div>
        </div>
        <div class="col-3 card bg-danger text-light shadow rekap">
            <div class="card-body">
                <i class="icon-wallet menu-icon"></i>
                <h1>100</h1>
            </div>
            <div class="card-footer">
                <h3>Peminjaman</h3>
            </div>
        </div>
    </div>
@endsection
