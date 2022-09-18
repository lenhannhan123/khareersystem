<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <meta property="og:title" content="SVIT-dịch vụ về máy tính 24/24" />
    <meta name="twitter:title" content="SVIT-dịch vụ về máy tính 24/24" />
    <meta name="twitter:description" content="Chúng tôi cung cấp dịch vụ sửa chữa máy tính 24/24, bất cứ khi nào máy bạn có vấn đề cứ liên hệ svit,chúng tôi giải quyết tất cả các vấn về máy tính bao gồm phần cứng và phần mềm " />
    <meta name="description" content="Chúng tôi cung cấp dịch vụ sửa chữa máy tính 24/24, bất cứ khi nào máy bạn có vấn đề cứ liên hệ svit,chúng tôi giải quyết tất cả các vấn về máy tính bao gồm phần cứng và phần mềm ">
    <meta property="og:description" content="Chúng tôi cung cấp dịch vụ sửa chữa máy tính 24/24, bất cứ khi nào máy bạn có vấn đề cứ liên hệ svit,chúng tôi giải quyết tất cả các vấn về máy tính bao gồm phần cứng và phần mềm " />
    <meta property="og:image" content="https://www.khareer.com/imageonepgae/thumbnailsvit.png" />
    <meta name="twitter:image" content="https://www.khareer.com/imageonepgae/thumbnailsvit.png" />
    <meta property="og:image:width" content="1920" />
    <meta property="og:image:height" content="1080" />
    <meta property="og:image:type" content="image/png">
    <meta name="keywords" content="sua may, it, dich vu sua may, sua may thanh pho, sua may tp"> --}}

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dạy lập trình - Khareer Sharing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link rel="shortcut icon" type="image/png" href="{{ asset('imageonepgae/logokhareer.png') }}" />

    <style>
        /* body {
            background-color: #fcfcff;
        } */

        @media only screen and (min-width: 900px) {
            #mobile-theme {
                display: none;
            }

            #desktop-theme {
                display: inline;
            }

            #image_comp {
                position: absolute;
                top: 15%;
                left: 25%;
                margin: -50px 0 0 -100px;
            }

            #description-title {
                width: 40rem;
                text-align: justify;
                margin-left: 2rem;
                margin-top: 5rem;
                margin-bottom: 3rem;
            }

            #div-btn-call {
                margin-left: 6rem;
                padding: 1rem 1rem;
                width: 50%;
                border-radius: 50px;
                background-color: #FFDA3C;
            }

            #btn-call {
                padding: 0.4rem 2.5rem;
                font-size: 18pt;
                border-radius: 50px;
                background-color: #E5AF42;
                border-color: #E5AF42;
            }

            #btn-call:hover {
                background-color: #fcc14b;
            }

            #border-contact {
                font-size: 30pt;
                font-weight: bold;
                border: solid;
                border-width: 0.3rem;
                border-radius: 20pt;
                text-align: center;
                padding: 0.5rem 1.5rem;
                background-color: #E5AF42;
            }

            #icon {
                border: solid;
                border-width: 0.4rem;
                padding: 0.8rem 1.3rem;
                border-radius: 50pt;
                background-color: #937CDF;
            }

            #icon-phone {
                border: solid;
                border-width: 0.4rem;
                padding: 0.8rem 1rem;
                border-radius: 50pt;
                background-color: #937CDF;
            }

            #contact-content {
                border: solid;
                border-width: 0.4rem;
                padding: 0.8rem 1.3rem;
                border-radius: 10pt;
                font-size: 15pt;
                font-weight: bold;
                margin-left: 2rem;
                color: #000000;
            }

            #top-up {
                font-size: 3rem;
                cursor: pointer;
                position: fixed;
                z-index: 9999;
                color: #000000;
                bottom: 20px;
                right: 15px;
                display: none;
            }

            #top-up:hover {
                color: #333
            }
        }

        @media only screen and (max-width: 900px) {
            #mobile-theme {
                display: inline;
            }

            #desktop-theme {
                display: none;
            }

            #image_comp-mobile {
                position: absolute;
                top: 35%;
                left: 52%;
                margin: -50px 0 0 -100px;
            }

            #description-title-mobile {
                text-align: justify;
                margin-left: 0.2rem;
                margin-top: 1rem;
                font-size: 6pt;
                margin-bottom: 1rem;
            }

            #div-btn-call-mobile {
                margin-left: 0.2rem;
                margin-right: -3rem;
                padding: 0.5rem 0.1rem;
                width: 90%;
                /* width: 80%; */
                border-radius: 50px;
                background-color: #FFDA3C;
            }

            #btn-call-mobile {
                padding: 0.4rem 1rem;
                font-size: 8pt;
                border-radius: 50px;
                background-color: #E5AF42;
                border-color: #E5AF42;
            }

            #btn-call-mobile :hover {
                background-color: #fcc14b;
            }

            #border-contact-mobile {
                font-size: 10pt;
                font-weight: bold;
                border: solid;
                border-width: 0.2rem;
                border-radius: 20pt;
                text-align: center;
                padding: 0.5rem 1.5rem;
                background-color: #E5AF42;
            }

            #icon-mobile-mobile {
                border: solid;
                border-width: 0.2rem;
                padding: 0.1rem 0.6rem;
                border-radius: 50pt;
                background-color: #937CDF;
            }

            #icon-phone-mobile {
                border: solid;
                border-width: 0.2rem;
                padding: 0.1rem 0.5rem;
                border-radius: 50pt;
                background-color: #937CDF;
            }

            #contact-content-mobile {
                border: solid;
                border-width: 0.2rem;
                padding: 0.5rem 0.5rem;
                border-radius: 10pt;
                font-size: 5pt;
                font-weight: bold;
                margin-left: 0.3rem;
                color: #000000;
            }
        }
    </style>
</head>



<body>
    <div class="container-fluid" id="mobile-theme">

        <div class="row" data-aos="zoom-out">
            <div class="col" style="text-align: center;">
                <img src="{{ asset('sharing/english/logokhareer-logosharing.png') }}" style="width:10rem" alt=""
                    srcset="">
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col" style="width: 70%;">
                    <div style="margin-top:2rem ;"></div>

                    <h1 style="font-size:13pt; margin-right:-2rem ; color: #C46A00;" data-aos="fade-right"
                        data-aos-offset="300" data-aos-easing="ease-in-sine">khóa học</h1>
                    <h1 style="font-size:13pt; margin-right:-2rem ;" data-aos="fade-right" data-aos-offset="300"
                        data-aos-easing="ease-in-sine">lập trình căn bản</h1>
                    <h6 id="description-title-mobile" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        lập trình mọi thứ trên thế giới
                        <br />
                        bắt đầu từ khóa lập trình căn bản
                    </h6>

                    <div class="row" id="div-btn-call-mobile" data-aos="fade-up"
                        data-aos-anchor-placement="center-bottom">
                        <div class="col-sm-6" style="width:75%;">

                            <div
                                style="text-align:center ; font-weight:
                                    bold; font-size: 6pt;">
                                đừng ngại gọi cho chúng tôi ngay lúc này</div>
                        </div>
                        <div class="col" style="width: 25%; margin-left: -1rem;">

                            <a href="tel:+84909770837">
                                <button id="btn-call-mobile"
                                    class="btn
                                        btn-danger">GỌI NGAY</button>
                            </a>

                        </div>

                    </div>


                </div>
                <div class="col" style="width: 30%; margin-right: -3rem;" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <div id="image1-mobile">
                        <img id="image_comp-mobile" src="{{ asset('sharing/it/sharing_1.gif') }}" style="width:9rem"
                            alt="" srcset="">

                    </div>
                </div>


            </div>
        </div>
        <br>
        <br>


        <div class="container">
            <div class="row">
                <div class="col" style="width:30%" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                    <img src="{{ asset('sharing/it/sharing_2.gif') }}" style="width:7rem" alt="" srcset="">
                </div>
                <div class="col" style="text-align: right; " style="width:70%">
                    <h3 style="font-size:13pt ; color: #C46A00;" data-aos="fade-left" data-aos="fade-up"
                        data-aos-anchor-placement="center-bottom">học phí </h3>
                    <h3 style="font-size:13pt ;margin-left: -4rem; " data-aos="fade-left">chỉ từ 2.000.000/khóa </h3>

                    <div style="font-weight: bold; font-size: 6pt;
                            margin-left: -6rem; "
                        data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        lớp học 4:1 <br/>
                        có thể học từ xa<br/>
                        giảng viên hỗ trợ 24/24<br/>
                        lịch học linh động 24/7
                    </div>


                </div>

            </div>

        </div>


        <div class="container" style="margin-top:2rem ;" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="row">
                <div class="col" style="text-align: right;">
                    <h3 style="font-size:15pt ; color: #524467; ">nếu bạn cần hỗ trợ </h3>
                </div>
            </div>
        </div>


        <div class="container" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
            <div class="row" style="margin-top:1rem ;">
                <div class="col" style="text-align: center">
                    <img src="{{ asset('sharing/it/sharing_3.gif') }}" style="width:20rem" alt=""
                        srcset="">
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row" style="margin-top:3rem ;">
                <div class="col-sm-2" data-aos="zoom-out-left" style="width:35%; text-align: center;">

                    <img src="{{ asset('sharing/it/sharing_4.gif') }}" style="width: 9rem; " alt=""
                        srcset="">
                </div>
                <div class="col" style="margin-top: 5%;width:65%">

                    <div id="border-contact-mobile" data-aos="zoom-out-right">
                        liên hệ tụi mình ngay
                    </div>

                    <div class="row" style="margin-top: 1rem; margin-left:
                            0.2rem;">

                        <div class="coll-sm-2">
                            <div id="icon-phone-mobile" data-aos="zoom-out-up">
                                <i class="fas fa-phone"
                                    style="font-size:
                                        10pt;"></i>
                            </div>
                        </div>

                        <div class="coll-sm-5">
                            <a href="tel:+84909770837"
                                style="
                                    text-decoration: none;">
                                <div id="contact-content-mobile" data-aos="zoom-out-up">
                                    090.977.0837
                                </div>
                            </a>

                        </div>

                    </div>

                    <div class="row" style="margin-top: 1rem; margin-left:
                            0.2rem;">

                        <div class="coll-sm-2" data-aos="zoom-out-up">

                            <div id="icon-mobile-mobile">
                                <i class="fab fa-facebook-f" style="font-size: 10pt;"></i>

                            </div>


                        </div>

                        <div class="coll-sm-5">
                            <a href="https://www.facebook.com/khareercompany/" style=" text-decoration: none;">
                                <div id="contact-content-mobile" data-aos="zoom-out-up">
                                    Khareer - You need, We can
                                </div>
                            </a>
                        </div>

                    </div>

                </div>


            </div>
        </div>



        <br />
        <br />

        <div style="text-align: center;">
            Copyright © Khareer 2022
        </div>




    </div>





    <div class="container-fluid" id="desktop-theme">
        <div title="Về đầu trang" id="top-up">
            <i class="fas fa-arrow-circle-up"></i>
        </div>
        <div class="row" data-aos="zoom-out">
            <div class="col" style="text-align: center;">
                <img src="{{ asset('sharing/english/logokhareer-logosharing.png ') }}" style="width:15rem"
                    alt="" srcset="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-9" style="margin-left: -5rem;">
                    <div style="margin-top:4rem ;"></div>
                    <h1 style="font-size:50pt ; color: #C46A00;" data-aos="fade-right" data-aos-offset="300"
                        data-aos-easing="ease-in-sine">khóa học</h1>
                    <h1 style="font-size:50pt ;" data-aos="fade-right" data-aos-offset="300"
                        data-aos-easing="ease-in-sine">lập trình căn bản </h1>
                    <h4 id="description-title" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        lập trình mọi thứ trên thế giới
                        <br />
                        bắt đầu từ khóa lập trình căn bản
                    </h4>
                    <div class="row" id="div-btn-call" data-aos="fade-up"
                        data-aos-anchor-placement="center-bottom">
                        <div class="col-sm-8">
                            <div
                                style="text-align:center ; font-weight:
                                        bold; font-size: 14pt;">
                                đừng ngại gọi cho chúng tôi ngay lúc này</div>
                        </div>
                        <div class="col-sm-4">
                            <a href="tel:+84909770837">
                                <button id="btn-call"
                                    class="btn
                                            btn-danger">GỌI
                                    NGAY</button>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col" style="margin-right: -15rem;" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <div id="image1">
                        <img id="image_comp" src="{{ asset('sharing/it/sharing_1.gif') }}" style="width:30rem"
                            alt="" srcset="">

                    </div>
                </div>


            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="{{ asset('sharing/it/sharing_2.gif') }}" style="width:20rem" alt=""
                        srcset="">
                </div>
                <div class="col-sm-8" style="text-align: right; ">
                    <h3 style="font-size:50pt ; color: #C46A00;" data-aos="fade-left" data-aos-offset="300"
                        data-aos-easing="ease-in-sine">học phí
                    </h3>
                    <h3 style="font-size:50pt ; " data-aos="fade-left">chỉ từ 2.000.000/khóa
                    </h3>
                    <div style="font-weight: bold; font-size: 14pt;
                                width: 80%; margin-left: 20%;"
                        data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        Lớp học 4:1 <br/>
                        Có thể học từ xa<br/>
                        Giảng viên hỗ trợ 24/24<br/>
                        Lịch học linh động 24/7
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top:5rem ;" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="row">
                <div class="col" style="text-align: right;">
                    <h3 style="font-size:50pt ; color: #524467;">nếu bạn cần hỗ trợ </h3>
                </div>
            </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
            <div class="row" style="margin-top:3rem ;">
                <div class="col" style="text-align: center">
                    <img src="{{ asset('sharing/it/sharing_3.gif') }}" alt="" srcset="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin-top:3rem ;">
                <div class="col" data-aos="zoom-out-left" style="text-align:center ;">
                    <img src="{{ asset('sharing/it/sharing_4.gif') }}"
                        style="width:
                                30rem;" alt="" srcset="">
                </div>
                <div class="col-sm-6" style="margin-top: 5%;">
                    <div id="border-contact" data-aos="zoom-out-right">
                        liên hệ tụi mình ngay
                    </div>
                    <div class="row"
                        style="margin-top: 1rem;
                                margin-left: 0.2rem;">
                        <div class="coll-sm-2">
                            <div id="icon-phone" data-aos="zoom-out-up">
                                <i class="fas fa-phone" style="font-size: 20pt;"></i>
                            </div>
                        </div>
                        <div class="coll-sm-5">
                            <a href="tel:+84909770837"
                                style="
                                        text-decoration: none;">
                                <div id="contact-content" data-aos="zoom-out-up">
                                    090.977.0837
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row"
                        style="margin-top: 1rem;
                                margin-left: 0.2rem;">
                        <div class="coll-sm-2" data-aos="zoom-out-up">
                            <div id="icon">
                                <i class="fab fa-facebook-f" style="font-size: 20pt;"></i>
                            </div>
                        </div>
                        <div class="coll-sm-5">
                            <a href="https://www.facebook.com/khareercompany/" style=" text-decoration: none;">
                                <div id="contact-content" data-aos="zoom-out-up">
                                    Khareer - You need, We can
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <br />
        <div style="text-align: center;">
            Copyright © Khareer 2022
        </div>
    </div>
    <div class="row" style="margin-top:5%;">
    </div>
    <script>
        //Load Scoll 
        AOS.init({
            duration: 1200,
        });
    </script>
    <!-- import icon font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <!-- Import thư viện JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // kéo xuống khoảng cách 500px thì xuất hiện nút Top-up
        var offset = 500;
        // thời gian di trượt 0.75s ( 1000 = 1s )
        var duration = 750;
        $(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > offset)
                    $('#top-up').fadeIn(duration);
                else
                    $('#top-up').fadeOut(duration);
            });
            $('#top-up').click(function() {
                $('body,html').animate({
                    scrollTop: 0
                }, duration);
            });
        });
    </script>
    <!-- import icon font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <!-- Import thư viện JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
