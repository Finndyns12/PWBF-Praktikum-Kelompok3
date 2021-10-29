@extends('dashboard\layouts\main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Melaporkan Bencana</h1>
</div>

<div class="col-md-8">
<form method="POST" action="https://www.lapor.go.id/instansi/badan-nasional-penanggulangan-bencana" accept-charset="UTF-8" data-request="complaint::onCreate" class="complaint-form" data-request-flash=""><input name="_session_key" type="hidden" value="otMvzodgB1feFU5A7QtphvWIKgJLWUHgHnTbrQC7"><input name="_token" type="hidden" value="IaojTo3ePPC9wSRDSdxfcdbrmjUl86qXnMHwRra1">
<div class="complaint-form-box">
    <div class="select-complaint">Sampaikan Laporan Anda</div>
</div>
<div class="complaint-form-category">
    <input type="text" name="title" class="form-control" placeholder="Ketik Judul Laporan Anda untuk Badan Nasional Penanggulangan Bencana *" required="">
</div>
<div class="complaint-form-box p-5px" id="date_incident">
    <div class="form-group">
        <div class="input-group date">
            <input type="string" id="date_of_incident" name="date_of_incident" required="" class="form-control input-doi" placeholder="Tanggal Kejadian" autocomplete="off">
            <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
            </span>
        </div>
    </div>
</div>
<div class="complaint-form-category">
    <select class="form-control selectized" name="location_id" id="location_id" placeholder="Ketik Lokasi Kejadian *" data-request-search="complaint::onSearchLocation" tabindex="-1" style="display: none;"><option value="" selected="selected"></option></select><div class="selectize-control form-control single"><div class="selectize-input items required invalid not-full"><input type="text" autocomplete="off" tabindex="" id="location_id-selectized" placeholder="Ketik Lokasi Kejadian *" required="" style="width: 157px;"></div><div class="selectize-dropdown single form-control" style="display: none;"><div class="selectize-dropdown-content"></div></div></div>
</div>
</div>
            <!-- HELP Button -->

            <input type="hidden" name="latitude" data-toggle="currentLatitude">
            <input type="hidden" name="longitude" data-toggle="currentLongitude">
            <input type="hidden" name="origin_latitude">
            <input type="hidden" name="origin_longitude">
                            <input type="hidden" name="institution_id" data-toggle="institution_id" value="269">
                            <a class="btn btn-primary" id="submit-complaint" data-attach-loading="">LAPOR!</a>            </div>
    </div>
</div>
</form>

</div>

    @endsection