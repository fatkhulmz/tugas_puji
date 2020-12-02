@extends('layouts.app')

@section('content')
<div class="card uper">
    <div class="card-body">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Show Data</div>
                </div>
             </br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            {{-- file 1 --}}
                            <div class="card" style="width: 18rem;">
                                @if (!empty($pk['file1']))
                                    <img src="{{asset('storage/pengukuran_kinerja/'.$pk['file1'])}}" class="card-img-top" alt="...">
                                @else
                                    <img src="{{asset('storage/blank.png')}}" class="card-img-top" alt="...">
                                @endif
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    @if (!empty($pk['file1']))
                                        <a href="{{asset('storage/pengukuran_kinerja/'.$pk['file1'])}}" target="_blank" class="btn btn-primary">Download</a>
                                    @else
                                    <a href="" class="btn btn-primary">Download</a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- file 2 --}}
                        <div class="col-md-4 mb-3">
                            <div class="card" style="width: 18rem;">
                            @if (!empty($pk['file2']))
                                <img src="{{asset('storage/pengukuran_kinerja/'.$pk['file2'])}}" class="card-img-top" alt="...">
                            @else
                                <img src="{{asset('storage/blank.png')}}" class="card-img-top" alt="...">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                @if (!empty($pk['file2']))
                                    <a href="{{asset('storage/pengukuran_kinerja/'.$pk['file2'])}}" target="_blank" class="btn btn-primary">Download</a>
                                @else
                                <a href="" class="btn btn-primary">Download</a>
                                @endif
                            </div>
                            </div>
                        </div>

                        {{-- file 2 --}}
                        <div class="col-md-4 mb-3">
                            <div class="card" style="width: 18rem;">
                            @if (!empty($pk['file3']))
                                <img src="{{asset('storage/pengukuran_kinerja/'.$pk['file3'])}}" class="card-img-top" alt="...">
                            @else
                                <img src="{{asset('storage/blank.png')}}" class="card-img-top" alt="...">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                @if (!empty($pk['file3']))
                                    <a href="{{asset('storage/pengukuran_kinerja/'.$pk['file3'])}}" target="_blank" class="btn btn-primary">Download</a>
                                @else
                                <a href="" class="btn btn-primary">Download</a>
                                @endif
                            </div>
                            </div>
                        </div>   
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            {{-- file 1 --}}
                            <div class="card" style="width: 18rem;">
                                @if (!empty($pk['file4']))
                                    <img src="{{asset('storage/pengukuran_kinerja/'.$pk['file4'])}}" class="card-img-top" alt="...">
                                @else
                                    <img src="{{asset('storage/blank.png')}}" class="card-img-top" alt="...">
                                @endif
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    @if (!empty($pk['file4']))
                                        <a href="{{asset('storage/pengukuran_kinerja/'.$pk['file4'])}}" target="_blank" class="btn btn-primary">Download</a>
                                    @else
                                    <a href="" class="btn btn-primary">Download</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </div>
                </br>

                    <!-- 
                            <ul>
                                <li> <a href="/pengukuran_kinerja">kuisoner</a></li>
                                <li> <a href="/">rancangan pembangunan</a></li>
                                <li> <a href="/">penjaminan mutu</a></li>
                                <li> <a href="/">standar operasional</a></li>
                                <li> <a href="/">pendidikan dan pelatihan</a></li>
                                <li> <a href="/">analisi kebijakan</a></li>
                                <li> <a href="/">manajemen sumber</a></li>
                                <li> <a href="/">manajemen resiko</a></li>
                                <li> <a href="/">pengukuran kinerja</a></li>
                                <li> <a href="/">pengembangan inovasi</a></li>
                                <li> <a href="/">budaya organisasi</a></li>
                            </ul> -->
        </div>
    </div>
    @endsection