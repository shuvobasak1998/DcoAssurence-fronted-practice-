<!DOCTYPE html>
<html lang="en">

<head>
    <title>DCO ASSURANCE</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('Frontend') }}/css/style_1.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Montserrat:wght@200&family=Open+Sans:wght@600&family=Poppins&family=Roboto&family=Sedgwick+Ave+Display&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/custom.css') }}">


    <link rel="icon" href="{{ asset('fronted') }}assets/img/favicon.png">

    <link rel="stylesheet" href="{{ asset('fronted/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronted/assets/css/font-awesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronted/assets/css/charts.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronted/assets/css/slickslider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronted/assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('fronted/assets/style.css') }}">
    <style>
        .body-bg {
            width: 100% !important;
            height: 100% !important;

        }

        .nftmax-personals {
            width: 80% !important;
            margin: 0 auto;
        }

        .content_section {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            /* Adjust the height as needed */
        }
    </style>

    <style>
        /* body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        } */

        /* #hero-section {
            text-align: center;
            padding: 50px 0;
        } */

        .dropdown-container {
            display: flex;
            justify-content: center;
        }

        .dropdown {
            margin-right: 20px;
        }

        #hidden-section {
            display: none;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
            transition: margin-top 2s ease-in-out;
            /* Increase duration and use ease-in-out timing function */
        }
    </style>

</head>

<body style="display: flex; align-items: center; justify-content: center; height: 100vh;">

    <style>
        * {
            font-family: 'Montserrat', sans-serif;

        }

        #hero-section {
            height: 100vh;
            background: #b3855d77;
            display: grid;
            place-items: center;
        }

        .heading h1 {
            font-size: 4rem;
            font-weight: 400 !important;
            margin-bottom: 2rem;
        }

        .heading p {
            font-size: 1.5rem !important;
            margin-bottom: 1.5rem;
        }

        .dropdown_filter_btn {
            font-size: 1.5rem;
            background: #FEF6ED;
            ;
            border: 1px solid #b3855d77;
            ;
            padding: 20px 14rem 20px 20px;
            border-radius: 0;
            outline: none;
        }

        select.dropdown_filter_btn option {
            background: rgba(255, 255, 255, 0.635);
        }

        .dropdown_filter_btn:hover {
            background: #FEF6ED;
            border: 1px solid #b3855d77;
            ;
        }

        .dropdown-toggle::after {
            margin-right: 2rem !important;
        }

        /* card design */
        .price {
            color: #1e1e1e;
            font-family: IncfileBold, sans-serif;
            font-size: 40px;
            font-weight: 500 !important;
            line-height: 48px;
            margin-bottom: 24px;
        }

        .btn {
            align-items: center;
            background-color: #fd8550;
            border: 2px solid transparent;
            border-radius: 50px;
            color: #fff;
            cursor: pointer;
            display: flex;
            font-family: IncfileBold;
            font-size: 16px;
            height: auto;
            justify-content: center;
            line-height: 24px;
            padding: 14px 46px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: background-color .3s ease, color .3s ease, .3s ease;
            width: 100%;
            letter-spacing: 2px;
        }

        .btn:after {
            color: #fff;
            font-family: incfile-icons;
            font-size: 36px;
            position: absolute;
            right: 14px;
        }

        .fees {
            margin-top: 32px;
        }

        .box,
        .price-box-highlight {
            background-color: #fff;
            font-family: IncfileBold;
            font-size: 12px;
            text-transform: uppercase;
        }

        .benefits-list.highlight-including-items {
            background: #FCFDFF;
            box-shadow: 0px 24px 24px rgb(177 190 222 / 15%);
            border-radius: 12px;
            margin: 24px 0 !important;
            padding: 16px 18px;
            display: flex;
            flex-flow: column;
            gap: 10px;
        }

        .benefits-list.highlight-including-items li span:first-child {
            width: 16px;
            height: 15px;
        }

        svg:not(:root) {
            overflow: hidden;
        }

        li:not(:last-child) {
            margin-bottom: 12px;
            margin-top: 12px;
        }

        li {
            list-style: none !important;
        }

        li {
            list-style: none !important
        }

        .box {
            background-color: #fff;
            font-family: IncfileBold;
            font-size: 12px;
            text-transform: uppercase;
            box-shadow: 0 24px 32px 0 hsla(0, 0%, 93%, .5);
            color: #2a2929;
            letter-spacing: 1px;
            margin: 44px 0 24px;
            padding: 8px 0;
            text-align: center;
            width: 100%
        }

        .btn:hover {
            border: 2px solid #fd8550;
            background: transparent;
            color: #fd8550;
        }

        .card {
            background: #F2F6FF !important;
        }

        li {
            list-style: square;
        }
    </style>
    

    <div class="body-bg" style="background-image:url('{{ asset('fronted/assets/img/body-bg.jpg') }}')">

        <section id="hero-section " class="mx-auto">
            <div class="container ">

                <div class="row nftmax-personals " id="dropdown-container">
                    <div class="col-lg-4 col-12 mx-auto">
                        <div class="nftmax__item-form--group nftmax-last-name m-3 dropdown ">
                            <label class="nftmax__item-label">Country</label>
                            <select class="nftmax__item-input" id="country_id"
                                aria-label="Default select example">
                                <option selected>Select Country</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 mx-auto">
                        <div class="nftmax__item-form--group nftmax-last-name m-3 dropdown">
                            <label class="nftmax__item-label">Entity Type</label>
                            <select class="nftmax__item-input" id="entity_type_id"
                                aria-label="Default select example">
                                <option selected>Select Country First</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 mx-auto">
                        <div class="nftmax__item-form--group nftmax-last-name m-3 dropdown">
                            <label class="nftmax__item-label">State</label>
                            <select class="nftmax__item-input" id="state_id"
                                aria-label="Default select example">
                                <option selected>Select State First</option>

                            </select>
                        </div>
                    </div>
                </div>


            </div>
        </section>


        <div id="hidden-section">
            <section id="card_section hidden-section">
                <div class="container">
                    <div class="row mt-5 d-flex justify-content-center">
                        <div class="col-lg-4 clo-md-4 col-12">
                            <div class="card d-flex justify-content-center align-items-center shadow-sm">

                                <div class="card-body d-flex flex-column align-items-center">
                                    <h6 class="mb-3 mt-5 text-center header">Lorem, ipsum dolor.
                                    </h6>
                                    <p class="mb-3 text-center description">Lorem ipsum dolor sit amet <br> consectetur
                                        adipisicing.
                                    </p>
                                    <div class="mb-3 image-container">
                                        <img class="mb-3 mx-auto" width="160px" height="160px"
                                            src="{{ asset('img/rocket.png') }}" alt="rocket.png">
                                    </div>
                                    <h2 class="mb-3 text-center price "> $ 500</h2>
                                    <p class="text-center description" style="margin-bottom: 24px;">One time transparent
                                        payment
                                    </p>
                                    <a href="" class="btn get_start get_start_package btnActivePlatinum"
                                        data-package="Platinum">
                                        Get the Platinum package
                                    </a>
                                    <div class="fees w-100 d-flex justify-content-between">
                                        <div>Package Fee</div>

                                        <div class="flex-end">$299</div>
                                    </div>
                                    <div class="fees w-100 d-flex justify-content-between">
                                        <div>State fee</div>

                                        <div class="flex-end">$236</div>
                                    </div>

                                    <div class="benefit--wrapper">
                                        <p class="box">INCLUDES:</p>
                                        <ul class="benefits-list">
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> Preparing &amp; Filing the Articles of Organization
                                            </li>
                                            <li> <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> Unlimited Name Searches</li>
                                            <li> <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> FREE Registered Agent Service for a year!</li>
                                            <li> <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> EIN Business Tax Number</li>
                                        </ul>
                                        <ul class="benefits-list">
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> Preparing &amp; Filing the Articles of Organization
                                            </li>
                                            <li> <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> Unlimited Name Searches</li>
                                            <li> <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> FREE Registered Agent Service for a year!</li>
                                            <li> <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> EIN Business Tax Number</li>
                                            <button class="btn get_start get_start_package btnActivePlatinum"
                                                data-package="Platinum">
                                                Get the Platinum package </button>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 clo-md-4 col-12">
                            <div class="card d-flex justify-content-center align-items-center shadow-sm">

                                <div class="card-body d-flex flex-column align-items-center">
                                    <h6 class="mb-3 mt-5 text-center header">Lorem, ipsum dolor.
                                    </h6>
                                    <p class="mb-3 text-center description">Lorem ipsum dolor sit amet <br> consectetur
                                        adipisicing.
                                    </p>
                                    <div class="mb-3 image-container">
                                        <img class="mb-3 mx-auto" width="160px" height="160px"
                                            src="{{ asset('img/rocket.png') }}" alt="rocket.png">
                                    </div>
                                    <h2 class="mb-3 text-center price "> $ 500</h2>
                                    <p class="text-center description" style="margin-bottom: 24px;">One time
                                        transparent payment
                                    </p>
                                    <a href="" class="btn get_start get_start_package btnActivePlatinum"
                                        data-package="Platinum">
                                        Get the Platinum package
                                    </a>
                                    <div class="fees w-100 d-flex justify-content-between">
                                        <div>Package Fee</div>

                                        <div class="flex-end">$299</div>
                                    </div>
                                    <div class="fees w-100 d-flex justify-content-between">
                                        <div>State fee</div>

                                        <div class="flex-end">$236</div>
                                    </div>

                                    <div class="benefit--wrapper">
                                        <p class="box">INCLUDES:</p>
                                        <ul class="benefits-list">
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> Preparing &amp; Filing the Articles of Organization
                                            </li>
                                            <li> <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> Unlimited Name Searches</li>
                                            <li> <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> FREE Registered Agent Service for a year!</li>
                                            <li> <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> EIN Business Tax Number</li>
                                        </ul>
                                        <ul class="benefits-list">
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> Preparing &amp; Filing the Articles of Organization
                                            </li>
                                            <li> <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> Unlimited Name Searches</li>
                                            <li> <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> FREE Registered Agent Service for a year!</li>
                                            <li> <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> EIN Business Tax Number</li>
                                            <button class="btn get_start get_start_package btnActivePlatinum"
                                                data-package="Platinum">
                                                Get the Platinum package </button>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 clo-md-4 col-12">
                            <div class="card d-flex justify-content-center align-items-center shadow-sm">

                                <div class="card-body d-flex flex-column align-items-center">
                                    <h6 class="mb-3 mt-5 text-center header">Lorem, ipsum dolor.
                                    </h6>
                                    <p class="mb-3 text-center description">Lorem ipsum dolor sit amet <br> consectetur
                                        adipisicing.
                                    </p>
                                    <div class="mb-3 image-container">
                                        <img class="mb-3 mx-auto" width="160px" height="160px"
                                            src="{{ asset('img/rocket.png') }}" alt="rocket.png">
                                    </div>
                                    <h2 class="mb-3 text-center price "> $ 500</h2>
                                    <p class="text-center description" style="margin-bottom: 24px;">One time
                                        transparent payment
                                    </p>
                                    <a href="" class="btn get_start get_start_package btnActivePlatinum"
                                        data-package="Platinum">
                                        Get the Platinum package
                                    </a>
                                    <div class="fees w-100 d-flex justify-content-between">
                                        <div>Package Fee</div>

                                        <div class="flex-end">$299</div>
                                    </div>
                                    <div class="fees w-100 d-flex justify-content-between">
                                        <div>State fee</div>

                                        <div class="flex-end">$236</div>
                                    </div>

                                    <div class="benefit--wrapper">
                                        <p class="box">INCLUDES:</p>
                                        <ul class="benefits-list">
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> Preparing &amp; Filing the Articles of Organization
                                            </li>
                                            <li> <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> Unlimited Name Searches</li>
                                            <li> <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> FREE Registered Agent Service for a year!</li>
                                            <li> <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> EIN Business Tax Number</li>
                                        </ul>
                                        <ul class="benefits-list">
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> Preparing &amp; Filing the Articles of Organization
                                            </li>
                                            <li> <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> Unlimited Name Searches</li>
                                            <li> <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> FREE Registered Agent Service for a year!</li>
                                            <li> <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9579 6.12335C15.8525 5.79938 15.5652 5.57001 15.2266 5.53937L10.6079 5.12006L8.7826 0.846619C8.64784 0.532654 8.3412 0.330017 7.99989 0.330017C7.65858 0.330017 7.35182 0.532654 7.21791 0.846619L5.39259 5.12006L0.773203 5.53937C0.43458 5.57062 0.147837 5.79999 0.0418798 6.12335C-0.0634669 6.44733 0.0338231 6.80267 0.289927 7.02728L3.78126 10.0887L2.75184 14.6226C2.67652 14.956 2.80592 15.3007 3.08253 15.5007C3.23121 15.6087 3.40589 15.6627 3.58119 15.6627C3.73182 15.6627 3.88258 15.6226 4.01722 15.5421L7.99989 13.1607L11.9818 15.5421C12.2739 15.7166 12.6412 15.7006 12.9172 15.5007C13.1939 15.3007 13.3233 14.956 13.2479 14.6226L12.2185 10.0887L15.7098 7.02728C15.9658 6.80267 16.0632 6.44806 15.9579 6.12335Z"
                                                        fill="#97E0C7"></path>
                                                </svg> EIN Business Tax Number</li>
                                            <button class="btn get_start get_start_package btnActivePlatinum"
                                                data-package="Platinum">
                                                Get the Platinum package </button>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>
    <script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>
    <script>
        Splitting()
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="{{ asset('Frontend') }}/js/global.js"></script>

    <script src="{{ asset('Frontend') }}/js/jquery.min.js"></script>
    <script src="{{ asset('Frontend') }}/js/popper.js"></script>
    <script src="{{ asset('Frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('Frontend') }}/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

{{-- When All Field selected then display block start --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var countryDropdown = document.getElementById('country_id');
            var entityDropdown = document.getElementById('entity_type_id');
            var stateDropdown = document.getElementById('state_id');
            var hiddenSection = document.getElementById('hidden-section');

            function checkDropdowns() {
                if (countryDropdown.value !== 'Select Country' && entityDropdown.value !== 'Select Country First' &&
                    stateDropdown.value !== 'Select State First') {
                    // All dropdowns are selected, show the hidden section
                    hiddenSection.style.display = 'block';

                    // Optionally, scroll to the bottom of the hidden section with a smooth animation
                    hiddenSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'end'
                    });
                } else {
                    // If any dropdown is not selected, hide the section
                    hiddenSection.style.display = 'none';
                }
            }

            countryDropdown.addEventListener('change', checkDropdowns);
            entityDropdown.addEventListener('change', checkDropdowns);
            stateDropdown.addEventListener('change', checkDropdowns);
        });
    </script>
{{-- When All Field selected then display block end --}}


{{-- When Last Field select then display block start --}}
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
        
            var stateDropdown = document.getElementById('state_id');
            var hiddenSection = document.getElementById('hidden-section');

            function checkDropdowns() {
                if (stateDropdown.value !== 'Select State First') {
                    
                    // All dropdowns are selected, show the hidden section
                    hiddenSection.style.display = 'block';

                    // Optionally, scroll to the bottom of the hidden section with a smooth animation
                    hiddenSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                } else {
                    // If any dropdown is not selected, hide the section
                    hiddenSection.style.display = 'none';
                }
            }

            stateDropdown.addEventListener('change', checkDropdowns);
        });
    </script> --}}
{{-- When Last Field select then display block end --}}


    <!-- Include jQuery from a CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    {{-- for entity depends on country --}}
    <script>
        $("#country_id").change(function() {
            // This function will be executed when the input's value changes.
            var id = $(this).val(); // Get the new value of the input.
            var url = '{{ route('entity_bycountry', ':id') }}';
            url = url.replace(":id", id);
            $.ajax({
                url: url,
                type: 'GET', // The HTTP request method (GET, POST, etc.)

                success: function(data) {
                    $("#entity_type_id").html(data);
                    console.log(data)
                }

            });

        });
    </script>

    {{-- for state depends on entity --}}
    <script>
        $("#entity_type_id").change(function() {
            // This function will be executed when the input's value changes.
            var id = $(this).val(); // Get the new value of the input.
            var url = '{{ route('state_byentity', ':id') }}';
            url = url.replace(":id", id);
            $.ajax({
                url: url,
                type: 'GET', // The HTTP request method (GET, POST, etc.)

                success: function(data) {
                    $("#state_id").html(data);
                    console.log(data)
                }

            });

        });
    </script>


</body>

</html>
