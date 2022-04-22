@extends('layouts.backend')

@section('content')
  <!-- Page Content -->
  <div class="content">
    <div class="row items-push">
        <div class="col-xl-12">
            <a class="block block-rounded block-transparent bg-image d-flex align-items-stretch h-100 mb-0" href="javascript:void(0)" style="background-image: url('{{asset('')}}assets/media/photos/photo24@2x.jpg');">
                <div class="block-content block-sticky-options pt-7 bg-black-50">
                    <h2 class="h3 fw-bold text-white mb-1">Merhaba</h2>
                    <h3 class="fs-base fw-medium text-white-75">Backstage'e hoşgeldiniz </h3>
                </div>
            </a>
        </div>
    </div>

      <div class="block block-rounded">
          <div class="block-header block-header-default">
              <h3 class="block-title">Backstage haberleri </h3>
              <div class="block-options">
                  <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                  <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                  </button>
              </div>
          </div>
          <div class="block-content">
              <!-- Intro Category -->
              <table class="table table-striped table-borderless table-vcenter">
                  <thead class="thead-light">
                  </thead>
                  <tbody>
                  <tr>
                      <td class="text-center" style="width: 65px;">
                          <i class="si si-bell fa-2x"></i>
                      </td>
                      <td>
                          <a class="fs-5 fw-semibold" href="be_pages_forum_topics.html">21.04.2021</a>
                          <div class="text-muted my-1">Haber Başlığı </div>
                      </td>
                  </tr>
                  <tr>
                      <td class="text-center" style="width: 65px;">
                          <i class="si si-bell fa-2x"></i>
                      </td>
                      <td>
                          <a class="fs-5 fw-semibold" href="be_pages_forum_topics.html">21.04.2021</a>
                          <div class="text-muted my-1">Haber Başlığı </div>
                      </td>
                  </tr>
                  <tr>
                      <td class="text-center" style="width: 65px;">
                          <i class="si si-bell fa-2x"></i>
                      </td>
                      <td>
                          <a class="fs-5 fw-semibold" href="be_pages_forum_topics.html">21.04.2021</a>
                          <div class="text-muted my-1">Haber Başlığı </div>
                      </td>
                  </tr>
                  <tr>
                      <td class="text-center" style="width: 65px;">
                          <i class="si si-bell fa-2x"></i>
                      </td>
                      <td>
                          <a class="fs-5 fw-semibold" href="be_pages_forum_topics.html">21.04.2021</a>
                          <div class="text-muted my-1">Haber Başlığı </div>
                      </td>
                  </tr>
                  <tr>
                      <td class="text-center" style="width: 65px;">
                          <i class="si si-bell fa-2x"></i>
                      </td>
                      <td>
                          <a class="fs-5 fw-semibold" href="be_pages_forum_topics.html">21.04.2021</a>
                          <div class="text-muted my-1">Haber Başlığı </div>
                      </td>
                  </tr>
                  <tr>
                      <td class="text-center" style="width: 65px;">
                          <i class="si si-bell fa-2x"></i>
                      </td>
                      <td>
                          <a class="fs-5 fw-semibold" href="be_pages_forum_topics.html">21.04.2021</a>
                          <div class="text-muted my-1">Haber Başlığı </div>
                      </td>
                  </tr>
                  <tr>
                      <td class="text-center" style="width: 65px;">
                          <i class="si si-bell fa-2x"></i>
                      </td>
                      <td>
                          <a class="fs-5 fw-semibold" href="be_pages_forum_topics.html">21.04.2021</a>
                          <div class="text-muted my-1">Haber Başlığı </div>
                      </td>
                  </tr>

                  </tbody>
              </table>
              <!-- END Intro Category -->
          </div>
      </div>
  </div>
  <!-- END Page Content -->
@endsection
