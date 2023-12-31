@extends('admin.layouts.main')
@section('container')
<div class="pt-20 pb-2 lg:pt-0">
</div>
<div class="overflow-x-hidden overflow-y-auto pt-0 pb-10 h-[90vh] md:pr-5 px-5 md:px-0 hide-scrollbar">
    <h1 class=" text-4xl">Recruitment</h1>
    <p class=" text-sm md:text-[16px] font-medium pt-3">Silakan pilih kandidat dengan jumlah melebihi yang dibutuhkan
        <br class=" hidden md:block"> untuk cadangan
    </p>

    <div class=" mt-5  w-full ">
        <div class=" mx-auto steps steps-horizontal w-full ml-0 md:ml-14">
            <a class="step step-primary">
            </a>
            <a class="step" href="{{ route('fetchTraining', ['order_id' => $order_id]) }}">
            </a>
            <a class="step" href="{{ route('fetchOffer', ['order_id' => $order_id]) }}">
            </a>
            <a class="step" href="{{ route('fetchNegosiasi', ['order_id' => $order_id]) }}">
            </a>
            <a class="step" href="{{ route('fetchPercobaan', ['order_id' => $order_id]) }}">
            </a>
            <a class="step" href="{{ url('/client/order/plan/'.$order_id.'/popks') }}">
            </a>
            <a></a>
        </div>
    </div>
    <div class=" mt-5">
        <form action="{{ url(request() -> path()) }}" method="get">
            @csrf
            <div class=" block md:flex justify-between">
                <div class=" relative w-full md:w-auto">
                    <input type="text" name="search" class=" bg-[#D9D9D9] outline-none rounded-md text-black py-1  px-8 w-full md:w-auto" placeholder="Search">
                    <i class="ri-search-line absolute top-1 left-2 text-black"></i>
                </div>
            </div>
        </form>

        <div class=" bg-darkSecondary w-full px-3 rounded-md mt-4 overflow-auto hide-scrollbar">
            <form action="{{ url(request() -> path()) }}" method="post">
                @csrf
                <div class="overflow-auto ">
                    <table class="table overflow-auto">
                        <!-- head -->
                        <thead>
                            <tr class="text-white">
                                <th>
                                    <label>
                                        <input type="checkbox" class="checkbox opacity-0 cursor-default" />
                                    </label>
                                </th>
                                <th align="center">No</th>
                                <th align="center">Nama Talent</th>
                                <th align="center">Pendidikan</th>
                                <th align="center">Keterampilan</th>
                                <th align="center">Posisi</th>
                                <th class=" pl-0  md:pl-6">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($talents -> isEmpty())
                            <tr>
                                <td colspan="8" class="text-white text-center py-4">No Data.</td>
                            </tr>
                            @else
                            @php
                            $count = ($talents -> currentPage() - 1) * $talents ->perPage() + 1;
                            @endphp
                            @foreach ($talents as $talent)
                            <tr>
                                <td>
                                    <label>
                                        <input name="talents_id[]" value="{{ $talent -> id }}" type="checkbox" class="checkbox border-white border-2" />
                                    </label>
                                </td>
                                <td align="center">{{ $count }}</td>
                                @php
                                $count++;
                                @endphp
                                <td align="center">{{ $talent -> name }}</td>
                                <td align="center">{{ $talent -> pendidikanTalent -> description }}</td>
                                <td align="center">{{ $talent -> keterampilanTalent -> description }}</td>
                                <td align="center"> {{ $talent -> posisiTalent -> description }}</td>
                                <td align="center">
                                    <div class=" flex items-center gap-2">
                                        <a href="/client/plan/create/recruitment">
                                            <i class=" text-lg cursor-pointer ri-information-line"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="sticky bottom-0 pb-1 text-sm bg-darkSecondary flex items-center justify-center w-full">
                    {{ $talents -> links('vendor.pagination.custom-pagination-talent') }}
                </div>
        </div>

        <div class="mt-2 flex justify-between items-center pt-4 md:mb-0">
            <div>
                <a href="{{ url('/client/order/') }}">
                    <div class="bg-grey text-white text-sm text-center py-1 px-3 md:px-14 rounded-md font-bold hover:scale-95 duration-200">
                        <p class=" hidden md:inline">Back</p>
                        <i class="ri-arrow-left-line inline md:hidden"></i>
                    </div>
                </a>
            </div>
            <div class="flex gap-4 max-sm:w-full max-sm:justify-between">
                <div></div>
                <div>
                    <button type="submit" name="save" class=" w-full bg-secondary text-white text-sm text-center py-1 px-14 rounded-md font-bold hover:scale-95 duration-200">
                        <p class=" hidden md:block">Save</p>
                        <i class="ri-save-3-line block md:hidden"></i>
                    </button>
                </div>
                <div>
                    <a href="{{ route('fetchTraining', ['order_id' => $order_id]) }}" class="flex items-center bg-grey text-white text-sm text-center py-1 px-3 md:px-14 rounded-md font-bold hover:scale-95 duration-200">
                        <p class="hidden md:block">Continue</p>
                        <i class="ri-arrow-right-line block md:hidden ml-1"></i>
                    </a>
                </div>
            </div>

        </div>
        </form>
    </div>
</div>

@endsection