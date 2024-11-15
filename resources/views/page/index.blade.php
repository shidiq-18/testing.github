<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="public/images/hotel/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="" />
    <title>Page | Revervasi</title>
    <style>
        .bg-new {
            background-color: rgb(79, 78, 78);
        }

        .bg-new:hover {
            background-color: blue;
        }

        .booking {
            margin-top: -30px;
            z-index: 2;
            position: relative;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="/images/logo.png" alt="" width="50"
                    height="50">MyCash</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reservasi</a>
                    </li>
            </div>
    </nav>
    <div class="container-fluid">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/images/hotel/1.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="/images/hotel/2.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="/images/hotel/3.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="/images/hotel/4.png" class="w-100 d-block">
                </div>
            </div>

        </div>
    </div>
    {{-- booking --}}
    <div class="container booking">
        <div class="row">
            <div class="col-lg-12 bg-white rounded p-4 shadow">
                <h5>Cek Booking</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-2">
                            <label for="form-label" style="font-weight: 500">Check In</label>
                            <input type="date" name="" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-2">
                            <label for="form-label" style="font-weight: 500">Check Out</label>
                            <input type="date" name="" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label for="form-label" style="font-weight: 500">Luxury</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label for="form-label" style="font-weight: 500">Economy</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-2">
                            <button type="submit" class="btn text-white bg-new">Sumbit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Slide 2 --}}
    <h2 class="mt-5 pt-4 mb-4 text-center col-md-6">Our Rooms</h2>
    <div class="container">
        <div class="row">
            {{-- Pemilihan Kamar --}}
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card" style="max-width: 350px; margin:auto;">
                    <img src="/images/hotel/IMG_11892.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Room Santai</h5>
                        <h6 class="mb-4">Rp 200.000 / Malam</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Fitur kamar</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Tempat Tidur</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Free Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Kamar Mandi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Ruangan Ber AC</span>
                        </div>
                        <div class="features mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <img width="20" height="20"
                                src="https://img.icons8.com/?size=100&id=8ggStxqyboK5&format=png&color=000000"
                                alt="star-emoji">
                            <img width="20" height="20"
                                src="https://img.icons8.com/?size=100&id=8ggStxqyboK5&format=png&color=000000"
                                alt="star-emoji">
                            <img width="20" height="20"
                                src="https://img.icons8.com/?size=100&id=8ggStxqyboK5&format=png&color=000000"
                                alt="star-emoji">
                            <img width="20" height="20"
                                src="https://img.icons8.com/?size=100&id=8ggStxqyboK5&format=png&color=000000"
                                alt="star-emoji">
                            <img width="20" height="20"
                                src="https://img.icons8.com/?size=100&id=8ggStxqyboK5&format=png&color=000000"
                                alt="star-emoji">
                        </div>
                        <div class="d-flex justify-content-evenly"></div>
                        <a href="#" class="btn btn-sm bg-new text-white">Booking Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark">Lihat Selengkapnya..</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card" style="max-width: 350px; margin:auto;">
                    <img src="/images/hotel/IMG_65019.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Room Keluarga</h5>
                        <h6 class="mb-4">Rp 1.500.000 / Malam</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Fitur kamar</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Tempat Tidur</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Free Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Kamar Mandi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Ruangan Ber AC</span>
                        </div>
                        <div class="features mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <img width="20" height="20"
                                src="https://img.icons8.com/?size=100&id=8ggStxqyboK5&format=png&color=000000"
                                alt="star-emoji">
                            <img width="20" height="20"
                                src="https://img.icons8.com/?size=100&id=8ggStxqyboK5&format=png&color=000000"
                                alt="star-emoji">
                            <img width="20" height="20"
                                src="https://img.icons8.com/?size=100&id=8ggStxqyboK5&format=png&color=000000"
                                alt="star-emoji">
                            <img width="20" height="20"
                                src="https://img.icons8.com/?size=100&id=8ggStxqyboK5&format=png&color=000000"
                                alt="star-emoji">
                            <img width="20" height="20"
                                src="https://img.icons8.com/?size=100&id=8ggStxqyboK5&format=png&color=000000"
                                alt="star-emoji">
                        </div>
                        <div class="d-flex justify-content-evenly"></div>
                        <a href="#" class="btn btn-sm bg-new text-white">Booking Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark">Lihat Selengkapnya..</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card" style="max-width: 350px; margin:auto;">
                    <img src="/images/hotel/IMG_78809.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Room Healing</h5>
                        <h6 class="mb-4">Rp 2.000.000 / Malam</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Fitur kamar</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Tempat Tidur</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Free Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Kamar Mandi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Ruangan Ber AC</span>
                        </div>
                        <div class="features mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <img width="20" height="20"
                                src="https://img.icons8.com/?size=100&id=8ggStxqyboK5&format=png&color=000000"
                                alt="star-emoji">
                            <img width="20" height="20"
                                src="https://img.icons8.com/?size=100&id=8ggStxqyboK5&format=png&color=000000"
                                alt="star-emoji">
                            <img width="20" height="20"
                                src="https://img.icons8.com/?size=100&id=8ggStxqyboK5&format=png&color=000000"
                                alt="star-emoji">
                            <img width="20" height="20"
                                src="https://img.icons8.com/?size=100&id=8ggStxqyboK5&format=png&color=000000"
                                alt="star-emoji">
                            <img width="20" height="20"
                                src="https://img.icons8.com/?size=100&id=8ggStxqyboK5&format=png&color=000000"
                                alt="star-emoji">
                        </div>
                        <div class="d-flex justify-content-evenly"></div>
                        <a href="#" class="btn btn-sm bg-new text-white">Booking Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark">Lihat Selengkapnya..</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        }
    });
</script>

</html>
