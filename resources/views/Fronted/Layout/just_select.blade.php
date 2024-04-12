
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from nftmaxl.quomodothemes.website/setting by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Nov 2023 17:02:04 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>NFT MAX - NFT Dashboard Template</title>

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
            height: 100vh; /* Adjust the height as needed */
        }
    </style>
</head>
<body style="display: flex; align-items: center; justify-content: center; height: 100vh;">
    <div class="body-bg" style="background-image:url('{{ asset('fronted/assets/img/body-bg.jpg') }}')">
        <section class="content_section">
            <div class="form_section nftmax-personals">
                <form action="#" class="form_field mx-auto ">
                    <div class="row ">
                        <div class="col-lg-4 col-12 mx-auto">
                            <div class="nftmax__item-form--group nftmax-last-name m-3">
                                <label class="nftmax__item-label">Country</label>
                                <select class="nftmax__item-input" id="country_id" aria-label="Default select example">
                                    <option selected>Select Country</option>
                                    @foreach ($countries as $country)
                                    <option value="{{$country->id}}">{{$country->country_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 mx-auto">
                            <div class="nftmax__item-form--group nftmax-last-name m-3">
                                <label class="nftmax__item-label">Entity Type</label>
                                <select class="nftmax__item-input" id="entity_type_id" aria-label="Default select example">
                                    <option selected>Select Country First</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 mx-auto">
                            <div class="nftmax__item-form--group nftmax-last-name m-3">
                                <label class="nftmax__item-label">State</label>
                                <select class="nftmax__item-input" id="state_id" aria-label="Default select example">
                                    <option selected>Select State First</option>
                                 
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <script></script>

    <script src="{{ asset('fronted/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('fronted/assets/js/jquery-migrate.js') }}"></script>
    <script src="{{ asset('fronted/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('fronted/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fronted/assets/js/slickslider.min.js') }}"></script>
    <script src="{{ asset('fronted/assets/js/charts.js') }}"></script>
    <script src="{{ asset('fronted/assets/js/countdown.min.js') }}"></script>
    <script src="{{ asset('fronted/assets/js/final-countdown.min.js') }}"></script>
    <script src="{{ asset('fronted/assets/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('fronted/assets/js/main.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            $('[data-countdown]').each(function() {
                var $this = $(this),
                    finalDate = $(this).data('countdown');
                $this.countdown(finalDate, function(event) {
                    $this.html(event.strftime(' %H : %M : %S'));
                });
            });
        });
    </script>
    <script>
        const ctx_side_two = document.getElementById('myChart_Side_One').getContext('2d');
        var TotalSold = 140;
        var TotalCancen = 12;
        var TotalPending = 60;
        const dataSet = [TotalSold, TotalCancen, TotalPending]
        const myChart_Side_One = new Chart(ctx_side_two, {
            type: 'doughnut',

            data: {
                labels: [
                    'Total Sold',
                    'Total Cancel',
                    'Total Planding'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: dataSet,
                    backgroundColor: [
                        '#5356FB',
                        '#F539F8',
                        '#FFC210',
                        '#E3E4FE'
                    ],
                    hoverOffset: 2,
                    borderWidth: 0,
                }]
            },

            options: {

                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Sell History'
                    }
                }
            }

        });


        const ctx_side_two_weekly = document.getElementById('myChart_Side_One_weekly').getContext('2d');
        var TotalSold = 340;
        var TotalCancen = 52;
        var TotalPending = 90;
        const dataSet_weekly = [TotalSold, TotalCancen, TotalPending]
        const myChart_Side_One_weekly = new Chart(ctx_side_two_weekly, {
            type: 'doughnut',

            data: {
                labels: [
                    'Total Sold',
                    'Total Cancel',
                    'Total Planding'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: dataSet_weekly,
                    backgroundColor: [
                        '#5356FB',
                        '#F539F8',
                        '#FFC210',
                        '#E3E4FE'
                    ],
                    hoverOffset: 2,
                    borderWidth: 0,
                }]
            },

            options: {

                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Sell History'
                    }
                }
            }

        });

        const ctx_side_two_monthly = document.getElementById('myChart_Side_One_monthly').getContext('2d');
        var TotalSold = 640;
        var TotalCancen = 152;
        var TotalPending = 290;
        const dataSet_monthly = [TotalSold, TotalCancen, TotalPending]
        const myChart_Side_One_monthly = new Chart(ctx_side_two_monthly, {
            type: 'doughnut',

            data: {
                labels: [
                    'Total Sold',
                    'Total Cancel',
                    'Total Planding'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: dataSet_monthly,
                    backgroundColor: [
                        '#5356FB',
                        '#F539F8',
                        '#FFC210',
                        '#E3E4FE'
                    ],
                    hoverOffset: 2,
                    borderWidth: 0,
                }]
            },

            options: {

                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Sell History'
                    }
                }
            }

        });

        const ctx_side_three = document.getElementById('myChart_Side_Two').getContext('2d');
        var label = ["12:00 AM", "04:00 AM", "08:00 AM"];
        var data = [40, 90, 10];
        const myChart_Side_Two = new Chart(ctx_side_three, {
            type: 'line',

            data: {
                labels: label,
                datasets: [{
                    label: 'Visitor',
                    data: data,
                    backgroundColor: '#D8D8FE',
                    borderColor: '#5356FB',
                    pointRadius: 3,
                    pointBackgroundColor: '#5356FB',
                    pointBorderColor: '#5356FB',
                    borderWidth: 4,
                    tension: 0.9,
                    fill: true,
                    fillColor: '#fff',

                }]
            },

            options: {
                responsive: true,
                scales: {
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },

                    },
                    y: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            display: false
                        }
                    },
                },

                plugins: {
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Visitor: 2k'
                    }
                }
            }
        });
        const ctx_side_three_BTC = document.getElementById('myChart_Side_Two_BTC').getContext('2d');
        var label = ["12:00 AM", "04:00 AM", "08:00 AM"];
        var data = [30, 80, 20];
        const myChart_Side_Two_BTC = new Chart(ctx_side_three_BTC, {
            type: 'line',

            data: {
                labels: label,
                datasets: [{
                    label: 'Visitor',
                    data: data,
                    backgroundColor: '#D8D8FE',
                    borderColor: '#5356FB',
                    pointRadius: 3,
                    pointBackgroundColor: '#5356FB',
                    pointBorderColor: '#5356FB',
                    borderWidth: 4,
                    tension: 0.9,
                    fill: true,
                    fillColor: '#fff',

                }]
            },

            options: {
                responsive: true,
                scales: {
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },

                    },
                    y: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            display: false
                        }
                    },
                },

                plugins: {
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Visitor: 2k'
                    }
                }
            }
        });
    </script>
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



