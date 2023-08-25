@extends('admin.layouts.main')

<style>
.hide-scrollbar::-webkit-scrollbar {
    width: 0.4em; /* Width of the scrollbar */
}

.hide-scrollbar::-webkit-scrollbar-thumb {
    background-color: #555555; /* Color of the scrollbar thumb */
    border-radius: 8px; /* Rounded corners for the scrollbar thumb */
}

.hide-scrollbar::-webkit-scrollbar-thumb:hover {
    background-color: #777777; /* Color of the scrollbar thumb on hover */
}

.hide-scrollbar::-webkit-scrollbar-track {
    background-color: #555555; /* Color of the scrollbar track */
}

.hide-scrollbar::-webkit-scrollbar-track:hover {
    background-color: #666666; /* Color of the scrollbar track on hover */
}

/* Customize the appearance of the scrollbar wheel */
.hide-scrollbar {
    scrollbar-width: thin;
    scrollbar-color: #555555 #333333;
}

/* Customize the appearance of the scrollbar thumb icon */
.hide-scrollbar::-webkit-scrollbar-thumb:vertical {
    background-color: #fff; /* Color of the scrollbar thumb icon */
}

</style>


@section('container')
    <div class="hide-scrollbar overflow-auto pt-28 lg:pt-0 h-screen w-full">
        <form class="w-full bg-darkSecondary py-10 px-8 rounded-md" action="{{ route('create_order') }}" method="post">
            @csrf
            <div class="px-0 md:px-5 py-0 md:py-4 overflow-auto">
                <div class="mb-2 text-3xl pb-5 border-white border-b "> 
                    <h1>Create Leads</h1> 
                </div>

                <div class="flex flex-col w-full gap-5 md:gap-8">
                    <div class=" block md:flex w-full gap-14 mt-2 md:mt-0" >
                        <div class="">
                            <h4 class=" text-sm md:text-[16px]">Nama Perusahaan</h4>
                            <input required type="text" placeholder="Nama Perusahaan" name="business_name" class="text-black bg-white rounded-lg mt-2 w-full md:w-96  py-3 px-3 outline-none">
                        </div>

                        <div class=" mt-3 md:mt-0">
                            <h4  class=" text-sm md:text-[16px]">Email</h4>
                            <div class=" flex items-start  gap-5">
                                <div id="inputContainer"></div>
                                <div class=" bg-secondary py-2 px-4 rounded-md hover:scale-95 duration-200 cursor-pointer mt-2" id="addInputBtn">
                                    <i class="ri-add-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" block md:flex w-full  gap-14">
                        <div class="">
                            <h4 class="mb-1 text-sm md:text-[16px]">Alamat Perusahaan</h4>
                            <input required placeholder="Alamat Perusahaan" type="text" name="address" class="text-black bg-white rounded-lg w-full md:w-96  py-6 px-3 outline-none">
                        </div>

                        <div class=" mt-3 md:mt-0">
                            <h4 class="mb-1 text-sm md:text-[16px]">Bidang</h4>
                            <input required placeholder="Bidang" type="text" name="business_sector" class="bg-white text-black rounded-lg w-full md:w-80 lg:w-96  py-6 px-3 outline-none">
                        </div>
                    </div>

                      <div class=" block md:flex w-full  gap-14">
                        <div class="">
                            <h4 class="mb-1 text-sm md:text-[16px]">Nama PIC</h4>
                            <input required placeholder="Nama PIC" type="text" name="pic_name" class="bg-white text-black rounded-lg w-full md:w-96  py-3 px-3 outline-none">
                        </div>

                        <div class=" mt-3 md:mt-0">
                            <h4 class="mb-1 text-sm md:text-[16px]">Nomor Kontak PIC</h4>
                            <input required placeholder="089xxxxxxxxx" type="text" name="pic_contact_number" class="bg-white text-black rounded-lg mt-1 w-full md:w-80 lg:w-96  py-3 px-3 outline-none">
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex justify-between gap-5 md:gap-0 w-full"> 
                    <a href="/leads">
                        <button type="button" class="bg-secondary text-white rounded-md px-4 py-2 h-[37px] w-[97px] hover:scale-95 duration-200">Back</button>
                    </a>
                    <input type="submit"  value="Create" class="bg-secondary text-white rounded-md px-4 py-2 h-[37px] w-[198px]  hover:scale-95 duration-200"/>
                </div>
            </div>
        </form>
    </div>

    <!-- <script>
        let inputData = [ 
            {
                id: 1,
            }, 
        ];

        function generateInputFields() {
            const inputContainer = document.getElementById('inputContainer');
            inputContainer.innerHTML = '';

            inputData.forEach(data => {
                const inputField = document.createElement('input');
                inputField.type = 'text';
                inputField.name = `input_${data.id}`;
                inputField.placeholder = `Email ${data.id}`;
                inputField.id = `${data.id}`
                inputField.className = 'text-black bg-white rounded-lg mt-2 w-full md:w-96 py-3 px-3 outline-none';
                
                inputContainer.appendChild(inputField);
            });
        }

        function addNewInput() {
            const newId = inputData.length + 1;
            inputData.push({ id: newId });
            generateInputFields();
        }

        document.getElementById('addInputBtn').addEventListener('click', addNewInput);

        // Call the function to generate input fields initially
        generateInputFields();
    </script> -->

@endsection