@if (checkAuth())
<div id="id">
  <div id="main" class="layout-horizontal">
    <div class="content-wrapper container">
        {{-- <div class="page-heading">
        <h3>Horizontal Layout</h3>
        </div> --}}
        @include('backend.layouts.partials.top-bar')
        <div class="page-content">
        <v-rendering></v-rendering>
        </div>
    </div>
    <footer>
        <div class="container">
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>{{ date('Y') }} &copy; DINAS KEBUDAYAAN DAN PARIWISATA KAB. BANYUWANGI</p>
            </div>
            <div class="float-end">
              <p>
                CRAFTED WITH
                <span class="text-danger"><i class="bi bi-heart"></i></span>
                by <a href="https://seal.or.id">COPY RIGHT</a>
              </p>
            </div>
          </div>
        </div>
    </footer>
  </div>
</div>
@endif