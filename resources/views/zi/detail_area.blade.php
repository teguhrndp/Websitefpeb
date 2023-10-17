<!doctype html>
<html lang="en">
@include('partials.headzi')
<body>
    <div class="row">
        <div class="col">
            @include('partials.sidebarzi')
        </div>
        <div class="col-md-9">
            @include('partials.topbarzi')
            <div style="margin:100px 0">
                <section id="project">
                    <div class="container-fluid">
                        <div class="row text-center ">
                        <section id="project" data-aos="zoom-out">
                            <div class="col">
                                <h2>PENILAIAN WBBM</h2><br>
                                <h2>   Area {{$id}} ({{$data[0]->nama_area}})</h2><br>
                               
                            </div>
                        </div>
                        <section id="project" data-aos="fade-up">
                        <div>
                            @php
                               $penilaian = $data[0]->penilaian;
                            @endphp
                            <h4 class="mt-3 text-white" style="background-color:#0a0a5c; padding: 5px;">{{$penilaian}}</h4>
                           
                            
                            @foreach($data as $row)
                            @php
                               if($penilaian != $row->penilaian) {
                                 $penilaian = $row->penilaian;
                                 echo ' <h4 class="mt-4 text-white" style="background-color:#0a0a5c; padding: 5px;">'.$penilaian.'</h4>';
                               };

                               $romawi='i';
                            @endphp
                     
                            <!-- <p>
                                <li style="list-style-type: lower-roman;">
                                     {{ $row->sub_area }}
                                </li>
                                    <ol type="1">
                                        @foreach($data_instrumen as $row_instrumen)
                                            @if($row_instrumen->id_sub == $row->id_sub)
                                                <li>{{$row_instrumen->deskripsi}}</li>
                                            @endif
                                        @endforeach
                                    </ol>
                                </li>
                                
                            </p> -->
                            
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $row->id_sub }}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $row->id_sub  }}" aria-expanded="false" aria-controls="collapse{{ $row->id_sub  }}">
                                        <!-- menampilkan sub dari area-->
                                        <b> {{ $row->sub_area }} </b>
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $row->id_sub }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $row->id_sub  }}">
                                        <!-- <div class="accordion-body">
                                            <ol type="1">
                                            @foreach($data_instrumen as $row_instrumen)
                                                @if($row_instrumen->id_sub == $row->id_sub)
                                                    <li style="font: size 16px; color:black;">{!! html_entity_decode ($row_instrumen->deskripsi)!!} ?</li>
                                                @endif
                                            @endforeach
                                                </ol> -->
                                                <ol type="1">
                                                    <div class="row mt-3">
                                                        @foreach($data_instrumen as $row_instrumen)
                                                        @if($row_instrumen->id_sub == $row->id_sub)

                                                        <!-- menampilkan instrumen-->
                                                        <div class="col-md-10 mb-2">
                                                                    <li style="font-size: 14px; color: black;">
                                                                        {!! html_entity_decode($row_instrumen->deskripsi) !!} 
                                                                    </li>
                                                                </div>

                                                        <!-- menampilkan dokumen -->
                                                        <div class="col-md-2 mb-2">
                                                        <small><a href="{{ asset('file/' . $row_instrumen->file) }}" class="btn btn-secondary btn-sm" target="_blank">Lihat Dokumen </a></small>
                                                        </div>
                                                        @endif
                                                    @endforeach
                                                    </div>

                                                </ol>

                                                <!-- menampilkan bobot/nilai -->
                                                <div class="row">
                                                    <div class="col-sm-2 mt-1 mb-3">
                                                    <a href="#" class="btn btn-primary" target="_blank">Bobot : {{ number_format($row->bobot, 1, '.', '') }}</a>
                                                </div>
                                                <div class="col-sm-2">

                                                </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                             @endforeach
                             <section id="project" data-aos="fade-up">
                             <a href="/area" class="btn btn-warning mt-5"><i class="bi bi-arrow-left-circle-fill"></i> &nbsp; Kembali</a>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- </div> -->
        </div>
    </div>
    
    
    <div class="col-md-9 footer">
        <!-- @include('partials.svg') -->
        @include('partials.footer')
    </div>
    @include('partials.scriptbootstrap')
</body>
<!-- MDB -->
</html>