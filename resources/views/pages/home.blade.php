@extends('layouts.home-app')

@section('title', 'Sistem Informasi Konveksi dan Toko')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-12 text-center mx-auto">
                <h2 class="mb-5">Sistem Informasi Konveksi dan Toko</h2>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="donate.html" class="d-block">
                        <img src="images/icons/hands.png" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text">Become a <strong>volunteer</strong></p>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="donate.html" class="d-block">
                        <img src="images/icons/heart.png" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text"><strong>Caring</strong> Earth</p>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="donate.html" class="d-block">
                        <img src="images/icons/receive.png" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text">Make a <strong>Donation</strong></p>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="donate.html" class="d-block">
                        <img src="images/icons/scholarship.png" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text"><strong>Scholarship</strong> Program</p>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
