@include('layout.header')
@include('layout.sidebar')
@include('sweetalert::alert')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    @yield('main-section')
                </div> <!-- content -->

                <!-- Footer Start -->
                @include('layout.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


@include('layout.footer-bottom')