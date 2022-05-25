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
                        <div class="row ">
                            <div class="col-lg-8 col-xl-12">
                                <div class="mb-4">
                                    <div class="mb-4" data-select2-id="5">
                                        <label class="form-label" for="val-select2">Yayın Türünü Seçin<span
                                                class="text-danger">*</span></label>
                                        <select id="test"
                                                class="js-select2 form-select js-select2-enabled select2-hidden-accessible valid">
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
                                        <input type="hidden" value="song">
                                    </div>
                                </div>


                                <div class="col-12">
                                    <!-- Vertical Block Tabs Default Style With Extra Info -->
                                    <div class="block block-rounded row g-0 overflow-hidden">
                                        <ul class="nav nav-tabs nav-tabs-block flex-md-column col-md-4 col-xxl-2 rounded-0" role="tablist">
                                            <li class="nav-item d-md-flex flex-md-column">
                                                <button class="nav-link fs-sm text-md-start rounded-0" id="btabs-vertical-info-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-vertical-info-home" role="tab" aria-controls="btabs-vertical-info-home" aria-selected="false">
                                                    <i class="fa fa-fw fa-home opacity-50 me-1 d-none d-sm-inline-block"></i>
                                                    <span>Yayın</span>
                                                    <p class="d-none d-md-block fs-xs fw-medium opacity-75 mt-md-2 mb-0">
                                                        Yeni Sanatçıları seçmek  için
                                                    </p>
                                                </button>
                                            </li>
                                            <li class="nav-item d-md-flex flex-md-column">
                                                <button class="nav-link fs-sm text-md-start rounded-0" id="btabs-vertical-info-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-vertical-info-profile" role="tab" aria-controls="btabs-vertical-info-profile" aria-selected="false">
                                                    <i class="fa fa-fw fa-user-circle opacity-50 me-1 d-none d-sm-inline-block"></i>
                                                    <span>Yükle</span>
                                                    <p class="d-none d-md-block fs-xs fw-medium opacity-75 mt-md-2 mb-0">
                                                        Parça Yükleme  Alanı
                                                    </p>
                                                </button>
                                            </li>
                                            <li class="nav-item d-md-flex flex-md-column">
                                                <button class="nav-link fs-sm text-md-start rounded-0 active" id="btabs-vertical-info-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-vertical-info-settings" role="tab" aria-controls="btabs-vertical-info-settings" aria-selected="true">
                                                    <i class="fa fa-fw fa-cog opacity-50 me-1 d-none d-sm-inline-block"></i>
                                                    <span>Parça Düzenle</span>
                                                    <p class="d-none d-md-block fs-xs fw-medium opacity-75 mt-md-2 mb-0">
                                                        Parça  Düzenleme Alanı
                                                    </p>
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content col-md-8 col-xxl-10">
                                            <div class="block-content tab-pane" id="btabs-vertical-info-home" role="tabpanel" aria-labelledby="btabs-vertical-info-home-tab">
                                                <h4 class="fw-semibold">Home Content</h4>
                                                <p class="fs-sm">
                                                    Enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum.
                                                </p>
                                                <p class="fs-sm">
                                                    Enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum.
                                                </p>
                                                <p class="fs-sm">
                                                    Enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum.
                                                </p>
                                            </div>
                                            <div class="block-content tab-pane" id="btabs-vertical-info-profile" role="tabpanel" aria-labelledby="btabs-vertical-info-profile-tab">
                                                <h4 class="fw-semibold">Profile Content</h4>
                                                <p class="fs-sm">
                                                    Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt.
                                                </p>
                                                <p class="fs-sm">
                                                    Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt.
                                                </p>
                                                <p class="fs-sm">
                                                    Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt.
                                                </p>
                                            </div>
                                            <div class="block-content tab-pane active" id="btabs-vertical-info-settings" role="tabpanel" aria-labelledby="btabs-vertical-info-settings-tab">
                                                <h4 class="fw-semibold">Settings Content</h4>
                                                <p class="fs-sm">
                                                    Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.
                                                </p>
                                                <p class="fs-sm">
                                                    Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.
                                                </p>
                                                <p class="fs-sm">
                                                    Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Vertical Block Tabs Default Style With Extra Info -->
                                </div>

                            </div>
                        </div>
                        <button  type="submit" class="btn btn-primary js-click-ripple-enabled" data-toggle="click-ripple"
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

