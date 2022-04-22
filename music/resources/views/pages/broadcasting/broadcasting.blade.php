@extends('layouts.backend')
@section('content')

    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <h2 class="content-heading">Yayın Oluşturma </h2>

            <!-- Basic -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">

                </div>
                <div class="block-content">
                    <form action="{{route('broadCasting.post')}}" id="broadForm" method="POST">
                        @csrf
                        <div class="row push">
                            <div class="col-lg-8 col-xl-5">
                                <div class="mb-4">
                                    <div class="mb-4" data-select2-id="5">
                                        <label class="form-label" for="val-select2">Yayın Türünü Seçin<span
                                                class="text-danger">*</span></label>
                                        <select id="test"
                                                class="js-select2 form-select js-select2-enabled select2-hidden-accessible valid"
                                                onchange="brodcasting()">
                                            <option data-select2-id="2">Seçim Yapınız</option>
                                            <option value="zil" id="zil" data-select2-id="1">Zil Sesi</option>
                                            <option value="ses" id="ses" data-select2-id="2">Ses</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4" id="broadCastingStyle" style="display: none">
                                    <div class="mb-4" data-select2-id="5">
                                        <label class="form-label" for="val-select2">Yeni Ses Türünü Seçin<span
                                                class="text-danger">*</span></label>
                                        <select id="test"
                                                class="js-select2 form-select js-select2-enabled select2-hidden-accessible valid"
                                                onchange="brodcasting()">
                                            <option data-select2-id="2">Seçim Yapınız</option>
                                            <option value="zil" id="tur" data-select2-id="1">Her Hangi Bir Tür</option>
                                            <option value="ses" id="bati" data-select2-id="2">Batı Klasik Müziği</option>
                                            <option value="ses" id="jaz" data-select2-id="2">Jazz</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="mb-4">
                                        <label hidden="hidden" id="broadcast-title-one" class="form-label"
                                               for="broadcast-title">Yayın Başlığı <span
                                                class="text-danger">*</span></label>
                                        <input type="text" hidden="hidden" class="form-control" id="broadcast-title"
                                               name="broadcast-title" placeholder="Başlık">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <button onclick="stepone()" type="submit" class="btn btn-primary js-click-ripple-enabled" data-toggle="click-ripple"
                                style="overflow: hidden; position: relative; z-index: 1;">Kaydet
                        </button>
                    </form >
                </div>
            </div>
            <!-- END Basic -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection
<script>


    function brodcasting() {

        let test = document.getElementById("test").value;
        let btitle = document.getElementById('broadcast-title');
        let btitleone = document.getElementById('broadcast-title-one');
        let broadCastingStyle=document.getElementById('broadCastingStyle');
        let broadForm=document.getElementById('broadForm');
        event.preventDefault();

        if (test == 'zil') {
            console.log(test)

            btitleone.removeAttribute('hidden')
            btitle.removeAttribute('hidden')
            broadCastingStyle.style.display='none'



        } else {
            console.log(test)
            btitleone.removeAttribute('hidden')
            btitle.removeAttribute('hidden')
            broadCastingStyle.style.display='block'


        }


    }

    function stepone() {
        document.getElementById("broadForm").submit();
    }
</script>
