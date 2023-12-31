@extends('admin.layouts.main')

@section('container')
<div class="pt-20 lg:pt-0">
</div>
<div class="overflow-auto pt-0 h-[90vh] w-full rounded-md hide-scrollbar">
    <div class="bg-darkSecondary flex flex-col px-8 py-10">
        <div class="flex flex-col text-lightGrey space-y-2">
            <div class="text-2xl">Detail {{ $detail_info }}</div>
            <div class="flex flex-row text-xs space-x-2">
                <a class="bg-secondary rounded-md px-3 md:px-4 py-1 md:py-2 hover:scale-95 duration-200" href="{{ url('/leads/activity/'. $leads -> id) }}">Create Activity</a>
                <a class="bg-secondary rounded-md px-3 md:px-4 py-1 md:py-2 hover:scale-95 duration-200" href="{{ url('/leads/offer/'. $leads -> id)}}">Create Offer</a>
            </div>
            <div class="divide-y divide-slate-50 gap-4 flex flex-col">
                <div class="pt-3">
                    <p>
                        Nama Perusahaan : <span class=" font-bold"> {{ $leads -> business_name}}</span>
                    </p>
                </div>
                <div class="pt-3">
                    <p>
                        Alamat : <span class=" font-bold"> {{ $leads -> address }} </span>
                    </p>
                </div>
                <div class="pt-3">
                    <p>
                        Nama PIC : <span class=" font-bold"> {{ $leads ->  pic_name }} </span>
                    </p>
                </div>
                <div class="pt-3">
                    <p>
                        No Telepon PIC : <span class=" font-bold"> {{ $leads -> pic_contact_number }} </span>
                    </p>
                </div>
                <div class="pt-3 flex items-center gap-2">
                    <p>Email: </p>
                    <a class="cursor-pointer font-bold underline" onclick="my_modal_3.showModal()">Lihat Email</a>
                </div>
                <div class="pt-3">
                    <p>
                        Aktivitas terakhir : <span class=" font-bold">
                            @if ($leads-> hasOneActivity)
                            @if ($leads ->latestActivityParams)
                            {{ $leads->latestActivityParams->params_name }}
                            @endif
                            @else
                            -
                            @endif
                        </span>
                    </p>
                </div>
                <div class="pt-3">
                    <p>
                        Status : <span class=" font-bold"> {{ $leads -> statusParam -> params_name }} </span>
                    </p>
                </div>
                <hr>
            </div>
        </div>

        <div class="w-full mt-10 max-h-72 overflow-auto hide-scrollbar">
            <table class="text-lightGrey  w-full h-full ">
                <thead class="border-white">
                    <tr class="">
                        <th class="p-4 font-bold">No</th>
                        <th class="p-4 font-bold">Activity</th>
                        <th class="p-4 font-bold">Judul</th>
                        <th class="p-4 font-bold">Lokasi/File</th>
                        <th class="p-4 font-bold">Tanggal</th>
                        <th class="p-4 font-bold">Deskripsi</th>
                    </tr>
                </thead>
                <tbody class="">
                    @if($leads -> hasOneActivity)
                    @foreach($leads -> ActivityData as $activity)
                    <tr class="text-center bg-grey font-medium">
                        <td class="p-4">{{ isset($i) ? ++$i : $i = 1 }}</td>
                        <td class="p-4">{{ $activity -> activityType -> params_name }}</td>
                        <td class="p-4">
                            @if($activity -> xs1)
                            {{ $activity -> xs1 }}
                            @else
                            -
                            @endif
                        </td>
                        <td class="p-4">
                            @if($activity -> xs2)
                            {{ $activity -> xs2 }}
                            @else
                            -
                            @endif
                        </td>
                        <td class="p-4">
                            @if($activity -> xd)
                            {{ $activity -> xd }}
                            @else
                            -
                            @endif
                        </td>
                        <td class="p-4">{{ $activity -> desc }}</td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="6" align="center" class="py-10">No Activity Recorded</td>
                    </tr>
                    @endif

                </tbody>
            </table>
        </div>
    </div>
    <dialog id="my_modal_3" class="modal">
        <div class="modal-box bg-primary">
            <form method="dialog" class=" flex items-center justify-end">
                <button class=" outline-none">✕</button>
            </form>
            <div class=" hide-scrollbar w-full mt-5 max-h-96 overflow-auto">
                <table class=" w-full text-xs md:text-sm font-bold ">
                    <thead class="bg-darkSecondary sticky top-0">
                        <tr>
                            <td class=" p-2" align="center">No</td>
                            <td class=" p-2" align="center">Email</td>
                        </tr>
                    </thead>
                    <tbody>
                        @if(@$leads -> hasOneEmail)
                        @foreach($leads -> emails as $email)
                        <tr class=" odd:bg-grey">
                            <td align="center" class=" p-4">{{ isset($num) ? ++$num : $num = 1 }}</td>
                            <td align="center" class=" p-4">{{ $email -> email_name }}</td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="6" align="center" class="py-10">{{ $leads -> business_name }} has no email</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </dialog>
</div>
@endsection