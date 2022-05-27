@extends('layouts.backend')
@section('content')

    <main id="main-container w-auto">
        <!-- Page Content -->
        <div class="content">
            <h2 class="content-heading">Yayın Oluşturma </h2>

            <!-- Basic -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">

                </div>
                <div class="block-content">
                    <form action="" method="">
                        @csrf
                        <div class="row">
                            <div class="col-lg-8 col-xl-12">
                                <div class="mb-4">
                                    <div class="mb-4" data-select2-id="5">
                                        <label class="form-label" for="val-select2">Yayın Türünü Seçin<span
                                                class="text-danger">*</span></label>
                                        <select id="test"
                                                class="js-select2 form-select js-select2-enabled select2-hidden-accessible valid "
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
                                                class="js-select2 form-select js-select2-enabled select2-hidden-accessible valid">
                                            <option onchange="brodcasting()" data-select2-id="2">Seçim Yapınız</option>
                                            <option value="zil" id="tur" data-select2-id="1">Her Hangi Bir Tür</option>
                                            <option value="ses" id="bati" data-select2-id="2">Batı Klasik Müziği
                                            </option>
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
                                        <input type="hidden" value="song">
                                    </div>
                                </div>
                            </div>
                            <div class="content" id="tabMenu" hidden="hidden">


                                <!-- Block Tabs -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                                aria-selected="true">Yayın
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="down-tab" data-bs-toggle="tab"
                                                data-bs-target="#down" type="button" role="tab"
                                                aria-controls="down" aria-selected="false">Yükle
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="song-tab" data-bs-toggle="tab"
                                                data-bs-target="#song" type="button" role="tab"
                                                aria-controls="song" aria-selected="false">Parçaları Düzenle
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="country-tab" data-bs-toggle="tab"
                                                data-bs-target="#country" type="button" role="tab"
                                                aria-controls="country" aria-selected="false">Bölgeler
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="share-tab" data-bs-toggle="tab"
                                                data-bs-target="#share" type="button" role="tab"
                                                aria-controls="share" aria-selected="false">Yayın
                                            Tarihi
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="promosyon-tab" data-bs-toggle="tab"
                                                data-bs-target="#promosyon" type="button" role="tab"
                                                aria-controls="promosyon" aria-selected="false">Promosyon
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="send-tab" data-bs-toggle="tab"
                                                data-bs-target="#send" type="button" role="tab"
                                                aria-controls="send" aria-selected="false">Gönderim
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                         aria-labelledby="home-tab">

                                        <div class="row text-center">
                                            <div class="col-2">
                                                <div class="block block-rounded">
                                                    <div class="block-content">
                                                        <input class="form-control" type="file" id="imgUpload">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="block block-rounded">
                                                    <div class="block-content">
                                                        <div class="mb-4">
                                                            <div class="form-group row">
                                                                <label for="songName" class="col-sm-2 ">Album Adı
                                                                    *</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"
                                                                           id="songName" required
                                                                           placeholder="Album Adı"
                                                                           name="songName">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-4">
                                                            <div class="form-group row">
                                                                <label for="songName" class="col-sm-2 ">Album Adı
                                                                    *</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"
                                                                           id="songName" required
                                                                           placeholder="Album Adı"
                                                                           name="songName">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-4">
                                                            <div class="form-group row">
                                                                <label for="songName" class="col-sm-2 ">Album Adı
                                                                    *</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"
                                                                           id="songName" required
                                                                           placeholder="Album Adı"
                                                                           name="songName">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-4">
                                                            <div class="form-group row">
                                                                <label for="songName" class="col-sm-2 ">Album Adı
                                                                    *</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"
                                                                           id="songName" required
                                                                           placeholder="Album Adı"
                                                                           name="songName">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-floating mb-4">
                                                            <select class="form-select" id="example-select-floating"
                                                                    name="example-select-floating"
                                                                    aria-label="Floating label select example">
                                                                <option selected=""> Tarz</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <label class="form-label" for="example-select-floating">
                                                                Tarz</label>
                                                        </div>
                                                        <div class="form-floating mb-4">
                                                            <select class="form-select" id="example-select-floating"
                                                                    name="example-select-floating"
                                                                    aria-label="Floating label select example">
                                                                <option selected="">Alt Tarz</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <label class="form-label" for="example-select-floating">Alt
                                                                Tarz</label>
                                                        </div>
                                                        <div class="form-floating mb-4">
                                                            <select class="form-select" id="example-select-floating"
                                                                    name="example-select-floating"
                                                                    aria-label="Floating label select example">
                                                                <option selected="">Plak Şirketi</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <label class="form-label" for="example-select-floating">Plak
                                                                Şirketi</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="block block-rounded">
                                                    <div class="block-content">
                                                        <div class="mb-4">
                                                            <div class="form-group row">
                                                                <label for="songName" class="col-sm-2 ">Album Adı
                                                                    *</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"
                                                                           id="songName" required
                                                                           placeholder="Album Adı"
                                                                           name="songName">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-4">
                                                            <div class="form-group row">
                                                                <label for="songName" class="col-sm-2 ">Album Adı
                                                                    *</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"
                                                                           id="songName" required
                                                                           placeholder="Album Adı"
                                                                           name="songName">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-floating mb-4">
                                                            <select class="form-select" id="example-select-floating"
                                                                    name="example-select-floating"
                                                                    aria-label="Floating label select example">
                                                                <option selected="">Yapım Yılı</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <label class="form-label"
                                                                   for="example-select-floating">Tarz</label>
                                                        </div>
                                                        <div class="mb-4">
                                                            <div class="form-group row">
                                                                <label for="songName" class="col-sm-2 ">Album Adı
                                                                    *</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"
                                                                           id="songName" required
                                                                           placeholder="Album Adı"
                                                                           name="songName">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-4">
                                                            <div class="form-group row">
                                                                <label for="songName" class="col-sm-2 ">Album Adı
                                                                    *</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"
                                                                           id="songName" required
                                                                           placeholder="Album Adı"
                                                                           name="songName">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-4">
                                                            <div class="form-group row">
                                                                <label for="songName" class="col-sm-2 ">Album Adı
                                                                    *</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"
                                                                           id="songName" required
                                                                           placeholder="Album Adı"
                                                                           name="songName">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="down" role="tabpanel"
                                         aria-labelledby="down-tab">yüklemek için tıklayınız
                                    </div>
                                    <div class="tab-pane fade" id="song" role="tabpanel"
                                         aria-labelledby="song-tab">...
                                    </div>
                                    <div class="tab-pane fade" id="country" role="tabpanel"
                                         aria-labelledby="country-tab">bölgeler
                                    </div>
                                    <div class="tab-pane fade" id="share" role="tabpanel"
                                         aria-labelledby="share-tab">Yayın Tarihi
                                    </div>
                                    <div class="tab-pane fade" id="promosyon" role="tabpanel"
                                         aria-labelledby="promosyon-tab">promosyon
                                    </div>
                                    <div class="tab-pane fade" id="send" role="tabpanel"
                                         aria-labelledby="send-tab">Gönderim
                                    </div>

                                    <!-- END Block Tabs -->
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary js-click-ripple-enabled"
                                    data-toggle="click-ripple"
                                    style="overflow: hidden; position: relative; z-index: 1;">Kaydet
                            </button>
                    </form>
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
        let broadCastingStyle = document.getElementById('broadCastingStyle');
        let broadForm = document.getElementById('broadForm');
        let tabMenu = document.getElementById('tabMenu');
        event.preventDefault();
        if (test == 'zil') {

            btitleone.removeAttribute('hidden')
            btitle.removeAttribute('hidden')
            broadCastingStyle.style.display = 'none'
            tabMenu.removeAttribute('hidden')
        } else {
            console.log(test)
            btitleone.removeAttribute('hidden')
            btitle.removeAttribute('hidden')
            broadCastingStyle.style.display = 'block'
        }
    }


    function stepone() {
        document.getElementById("broadForm").submit();
    }
</script>
