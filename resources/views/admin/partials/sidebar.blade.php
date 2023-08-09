


<div class=" hidden bg-darkSecondary w-screen md:w-[18%] pt-11  h-screen md:flex flex-col items-center fixed top-0 left-0 ">

    <div class="rounded-lg py-1 px-8 mx-8 flex items-center mb-9 bg-lightGrey">
        <img src="/jagoLogo.png" alt="JagooIT">
    </div>

    <div class="flex gap-4 items-center mb-9 ">
        <img src="/bgRusdi.jpeg" alt="bgRusdi" class="rounded-full w-[54px] h-[54px]">
        <div class="flex flex-col ">
            <h6 class="text-white font-bold text-[14px]">Herman Maritim</h6>
            <p class="text-white text-[10px]">Admin</p>
        </div>
    </div>


    <div class="flex flex-col gap-4 items-center w-full ">
        <div class="items-center flex gap-2 py-2 text-white px-8  {{ request()->is('dashboard') ? 'bg-secondary' : '' }} w-full">
            <i class="ri-dashboard-line text-3xl"></i>
            <a href="/dashboard">Dashboard</a>
        </div>
        <div class="items-center flex gap-2 py-2  text-white px-8 {{ request()->is('leads/menu') ? 'bg-secondary' : '' }} w-full">
            <img src="/leads.png" class="w-[30px] h-[30px] " alt="leads">
            <a href="/leads/menu" class="">Leads</a>
        </div>
        <div class="items-center flex gap-2 py-2 px-8 justify-between {{ request()->is('client/menu') ? 'bg-secondary' : '' }} text-white w-full">
            <div class="flex gap-2 items-center">

                <i class="ri-user-line text-3xl"></i>
                <a href="/client/menu">Client</a>
            </div>
            
            <i class="ri-arrow-up-s-line cursor-pointer text-sm panahBwh " onclick="dropDown()"></i>
        </div>
        <div class="submenu -mt-5 mr-2">
            <div class="items-center flex gap-2 py-2  {{ request()->is('client/order') ? 'text-secondary fill-secondary' : 'text-white fill-white' }}  w-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" class=""><path d="M19.1643 12.0001L12.9572 5.79297L11.543 7.20718L16.3359 12.0001L11.543 16.793L12.9572 18.2072L19.1643 12.0001ZM13.5144 12.0001L7.30728 5.79297L5.89307 7.20718L10.686 12.0001L5.89307 16.793L7.30728 18.2072L13.5144 12.0001Z" ></path></svg>
                <a href="/client/order">Ongoing</a>
                
    
            </div>
            <div class="items-center flex gap-2 py-2  {{ request()->is('client/history') ? 'text-secondary fill-secondary' : 'text-white fill-white' }}  w-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12H4C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C9.25022 4 6.82447 5.38734 5.38451 7.50024L8 7.5V9.5H2V3.5H4L3.99989 5.99918C5.82434 3.57075 8.72873 2 12 2ZM13 7L12.9998 11.585L16.2426 14.8284L14.8284 16.2426L10.9998 12.413L11 7H13Z" fill="rgba(255,255,255,1)"></path></svg>    
                <a href="/client/history">History</a>
                
    
            </div>
        </div>
        
    </div>
</div>

<script>
    function dropDown() {
        document.querySelector('.submenu').classList.toggle('hidden');
        document.querySelector('.panahBwh').classList.toggle('rotate-180');
    }
</script>



{{-- Mobile --}}
<div class="drawer fixed md:hidden top-5">
  <input id="my-drawer" type="checkbox" class="drawer-toggle" />
  <div class="drawer-content bg-black">
    <!-- Page content here -->
    <label for="my-drawer" class=" drawer-button"><i class="ri-menu-line text-3xl absolute right-5"></i></label>
  </div> 
  <div class="drawer-side">
    <label for="my-drawer" class="drawer-overlay"></label>
    <div class=" bg-darkSecondary w-screen md:w-[18%] pt-11  h-screen flex flex-col items-center fixed top-0 left-0 ">

    <div class=" flex items-center justify-between w-full">
        <div class="rounded-lg py-1 px-8 mx-8 flex items-center mb-9 bg-lightGrey">
            <img src="/jagoLogo.png" alt="JagooIT" class=" w-24">
            
        </div>
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content">
                <label for="my-drawer" class="drawer-button"><i class="ri-close-fill text-3xl"></i></label>
            </div> 
    </div>

    <div class="flex gap-4 items-center mb-9">
        <img src="/bgRusdi.jpeg" alt="bgRusdi" class="rounded-full w-[54px] h-[54px]">
        <div class="flex flex-col ">
            <h6 class="text-white font-bold text-[14px]">Herman Maritim</h6>
            <p class="text-white text-[10px]">Admin</p>
        </div>
    </div>



    <div class="flex flex-col gap-4 items-center w-full ">
        <div class="items-center flex gap-2 py-2 text-white px-8  {{ request()->is('dashboard') ? 'bg-secondary' : '' }} w-full">
            <i class="ri-dashboard-line text-3xl"></i>
            <a href="/dashboard">Dashboard</a>
        </div>
        <div class="items-center flex gap-2 py-2  text-white px-8 {{ request()->is('leads/menu') ? 'bg-secondary' : '' }} w-full">
            <img src="/leads.png" class="w-[30px] h-[30px] " alt="leads">
            <a href="/leads/menu" class="">Leads</a>
        </div>
        <div class="items-center flex gap-2 py-2 px-8 justify-between {{ request()->is('client/menu') ? 'bg-secondary' : '' }} text-white w-full">
            <div class="flex gap-2 items-center">

                <i class="ri-user-line text-3xl"></i>
                <a href="/client/menu">Client</a>
            </div>
            
            <i class="ri-arrow-up-s-line cursor-pointer text-sm panahBwh " onclick="dropDown()"></i>
        </div>
        <div class="submenu -mt-5 mr-2">
            <div class="items-center flex gap-2 py-2  {{ request()->is('client/order') ? 'text-secondary fill-secondary' : 'text-white fill-white' }}  w-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" class=""><path d="M19.1643 12.0001L12.9572 5.79297L11.543 7.20718L16.3359 12.0001L11.543 16.793L12.9572 18.2072L19.1643 12.0001ZM13.5144 12.0001L7.30728 5.79297L5.89307 7.20718L10.686 12.0001L5.89307 16.793L7.30728 18.2072L13.5144 12.0001Z" ></path></svg>
                <a href="/client/order">Ongoing</a>
                
    
            </div>
            <div class="items-center flex gap-2 py-2  {{ request()->is('client/history') ? 'text-secondary fill-secondary' : 'text-white fill-white' }}  w-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12H4C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C9.25022 4 6.82447 5.38734 5.38451 7.50024L8 7.5V9.5H2V3.5H4L3.99989 5.99918C5.82434 3.57075 8.72873 2 12 2ZM13 7L12.9998 11.585L16.2426 14.8284L14.8284 16.2426L10.9998 12.413L11 7H13Z" fill="rgba(255,255,255,1)"></path></svg>    
                <a href="/client/history">History</a>
                
    
            </div>
        </div>
        
    </div>
</div>
  </div>
</div>

{{-- Mobile --}}


