<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Track Your Order</title>
    <link rel="shortcut icon" href="https://lh3.google.com/u/2/d/1QSOrEITHjSK8BU-H1EcEn2iQ1Cl2yWOh=w1919-h983-iv1" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    @vite('resources/css/app.css')

    <style>
        .hide-scrollbar::-webkit-scrollbar {
            width: 0.4em;
            /* Width of the scrollbar */
        }

        .hide-scrollbar::-webkit-scrollbar-thumb {
            background-color: #555555;
            /* Color of the scrollbar thumb */
            border-radius: 8px;
            /* Rounded corners for the scrollbar thumb */
        }

        .hide-scrollbar::-webkit-scrollbar-thumb:hover {
            background-color: #777777;
            /* Color of the scrollbar thumb on hover */
        }

        .hide-scrollbar::-webkit-scrollbar-track {
            background-color: #555555;
        }

        .hide-scrollbar::-webkit-scrollbar-track:hover {
            background-color: #666666;
        }

        .hide-scrollbar {
            scrollbar-width: thin;
            scrollbar-color: #555555 #333333;
        }

        .hide-scrollbar::-webkit-scrollbar-thumb:vertical {
            background-color: #fff;
        }

        .date-text {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            /* Show ellipsis (...) if text overflows */
            max-width: 100%;
            /* Optional: Restrict the width of the element */
        }
    </style>

</head>

<body class=" bg-primary font-quicksand text-white min-h-screen hide-scrollbar">
    @include('admin.partials.navbar')
    @php
    use Carbon\Carbon;
    Carbon::setLocale('id'); // 'id' is the locale code for Indonesian
    @endphp
    <div class=" pt-28">
        <h1 class=" text-center text-3xl font-bold">Tracking Your Order</h1>
        <p class=" text-center pt-3">{{ $order -> id }}</p>
    </div>
    <div class=" block md:flex items-start gap-5 lg:gap-[22rem] px-10 mt-10 w-full">
        <div class=" bg-darkSecondary border-white border-2 rounded-lg py-5 pr-20 pl-5 mt-5 w-full md:w-auto">
            <h1 class=" text-xl font-bold">Keterangan</h1>
            <div class=" flex items-center gap-4 my-4">
                <div class="bg-secondary rounded-full px-[5px]">
                    <p class=" text-center">✓</p>
                </div>
                <p class=" font-semibold text-sm md:text-[16px]">Selesai</p>
            </div>
            <div class=" flex items-center gap-4 my-4">
                <div class="bg-secondary rounded-full w-5 h-5"></div>
                <p class=" font-semibold text-sm md:text-[16px]">Dalam Proses</p>
            </div>
            <div class=" flex items-center gap-4 my-4">
                <div class="bg-white rounded-full w-5 h-5"></div>
                <p class=" font-semibold text-sm md:text-[16px] ">Proses Selanjutnya</p>
            </div>
        </div>


        <div class=" w-96 flex items-center justify-center">
            <ul class="steps steps-vertical w-full">
                <li @if($order -> order_status > 1)
                    data-content="✓"
                    class="step step-primary"
                    @elseif($order -> order_status == 1)
                    class="step step-primary "
                    @else
                    class="step "
                    @endif >
                    <div class=" relative w-full ">
                        <h1 class=" text-left pb-2 text-lg w-full ">Recruitment</h1>
                        <p class=" absolute text-xs  text-left date-text">Start Date :
                            @php
                            if ($order->start_recruitment) {
                            echo Carbon::parse($order->start_recruitment)->translatedFormat('j F Y ');
                            } else {
                            echo '-';
                            }
                            @endphp
                        </p>
                        <p class="absolute top-12 text-xs py-4 text-left date-text ">End Date :
                            @php
                            if ($order->end_recruitment) {
                            echo Carbon::parse($order->end_recruitment)->translatedFormat('j F Y ');
                            } else {
                            echo '-';
                            }
                            @endphp
                        </p>
                    </div>
                </li>
                <li @if($order -> order_status > 2)
                    data-content="✓"
                    class="step step-primary"
                    @elseif($order -> order_status == 2)
                    class="step step-primary"
                    @else
                    class="step"
                    @endif >
                    <div class=" relative w-full">
                        <h1 class=" text-left text-lg pb-2">Training</h1>
                        <p class=" absolute text-xs  text-left date-text">Start Date :
                            @php
                            if ($order->start_training) {
                            echo Carbon::parse($order->start_training)->translatedFormat('j F Y ');
                            } else {
                            echo '-';
                            }
                            @endphp
                        </p>
                        <p class="absolute top-12 text-xs py-4 text-left date-text">End Date :
                            @php
                            if ($order->end_training) {
                            echo Carbon::parse($order->end_training)->translatedFormat('j F Y ');
                            } else {
                            echo '-';
                            }
                            @endphp
                        </p>
                    </div>
                </li>
                <li @if($order -> order_status > 3)
                    data-content="✓"
                    class="step step-primary"
                    @elseif($order -> order_status == 3)
                    class="step step-primary"
                    @else
                    class="step"
                    @endif >
                    <div class=" relative w-full">
                        <h1 class=" text-left text-lg pb-2">Penawaran</h1>
                        <p class=" absolute text-xs  text-left date-text">Start Date :
                            @php
                            if ($order->start_offer) {
                            echo Carbon::parse($order->start_offer)->translatedFormat('j F Y ');
                            } else {
                            echo '-';
                            }
                            @endphp
                        </p>
                        <p class="absolute top-12 text-xs py-4 text-left date-text">End Date :
                            @php
                            if ($order->end_offer) {
                            echo Carbon::parse($order->end_offer)->translatedFormat('j F Y ');
                            } else {
                            echo '-';
                            }
                            @endphp
                        </p>
                    </div>
                </li>
                <li @if($order -> order_status > 4)
                    data-content="✓"
                    class="step step-primary"
                    @elseif($order -> order_status == 4)
                    class="step step-primary"
                    @else
                    class="step"
                    @endif >
                    <div class=" relative w-full">
                        <h1 class=" text-left text-lg pb-2">Appoinment Negosiasi</h1>
                        <p class=" absolute text-xs  text-left date-text">Start Date :
                            @php
                            if ($order->start_appointment) {
                            echo Carbon::parse($order->start_appointment)->translatedFormat('j F Y ');
                            } else {
                            echo '-';
                            }
                            @endphp
                        </p>
                        <p class="absolute top-12 text-xs py-4 text-left date-text">End Date :
                            @php
                            if ($order->end_appointment) {
                            echo Carbon::parse($order->end_appointment)->translatedFormat('j F Y ');
                            } else {
                            echo '-';
                            }
                            @endphp
                        </p>
                    </div>
                </li>
                <li @if($order -> order_status > 5)
                    data-content="✓"
                    class="step step-primary"
                    @elseif($order -> order_status == 5)
                    class="step step-primary"
                    @else
                    class="step"
                    @endif >
                    <div class=" relative w-full">
                        <h1 class=" text-left text-lg pb-2">User Interview</h1>
                        <p class=" absolute text-xs  text-left date-text">Start Date :
                            @php
                            if ($order->start_probation) {
                            echo Carbon::parse($order->start_probation)->translatedFormat('j F Y ');
                            } else {
                            echo '-';
                            }
                            @endphp
                        </p>
                        <p class="absolute top-12 text-xs py-4 text-left date-text">End Date :
                            @php
                            if ($order->end_probation) {
                            echo Carbon::parse($order->end_probation)->translatedFormat('j F Y ');
                            } else {
                            echo '-';
                            }
                            @endphp
                        </p>
                    </div>
                </li>
                <li @if($order -> order_status > 6)
                    data-content="✓"
                    class="step step-primary"
                    @elseif($order -> order_status == 6)
                    class="step step-primary"
                    @else
                    class="step"
                    @endif >
                    <div class=" relative w-full">
                        <h1 class=" text-left text-lg pb-2">PO & PKS</h1>
                        <p class=" absolute text-xs  text-left date-text">Start Date :
                            @php
                            if ($order->start_popks) {
                            echo Carbon::parse($order->start_popks)->translatedFormat('j F Y ');
                            } else {
                            echo '-';
                            }
                            @endphp
                        </p>
                        <p class="absolute top-12 text-xs py-4 text-left date-text">End Date :
                            @php
                            if ($order->end_popks) {
                            echo Carbon::parse($order->end_popks)->translatedFormat('j F Y ');
                            } else {
                            echo '-';
                            }
                            @endphp
                        </p>
                    </div>
                </li>
                <li @if($order -> order_status > 7)
                    data-content="✓"
                    class="step step-primary"
                    @elseif($order -> order_status == 7)
                    class="step step-primary"
                    @else
                    class="step"
                    @endif >
                    Onboarding</li>
            </ul>
        </div>
    </div>
</body>

</html>