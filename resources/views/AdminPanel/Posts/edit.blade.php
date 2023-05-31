<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('AdminPanel/assets/img/apple-icon.png')}}" />
    <link rel="icon" type="image/png" href="{{asset('AdminPanel/assets/img/favicon.png')}}" />
    <title>Postlar</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{asset('AdminPanel/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('AdminPanel/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="{{asset('AdminPanel/assets/css/argon-dashboard-tailwind.css?v=1.0.1')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
    <script src="{{asset('sweetalert.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/cropperjs@1.5.11/dist/cropper.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/cropperjs@1.5.11/dist/cropper.css" rel="stylesheet">

</head>

<style>

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
        right: 7px;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>
<style id="textwith">
    #cropperjs {
        display: block;
        max-width: 100%;
    }

    #preview {
        width: 200px;
        height: 200px;
        margin-bottom: 10px;
        border-radius: 100%;
    }
</style>
<style id="imgwith">
    .imgwith
    {
        width: 550px;
    }
</style>
<style>
    .file-upload__wrapper {
        /*background: #fff;*/
        border-radius: 15px;
        padding: 10px;
    }
    .file-upload__wrapper form.file-upload__form {
        border: 2px dashed #002aff;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        border-radius: 15px;
        padding: 10px;
    }
    form.file-upload__form :where(i, p) {
        color: #6785e9;
    }
    form.file-upload__form i {
        font-size: 50px;
    }
    form.file-upload__form p {
        font-size: 1rem;
    }
</style>
<body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
<div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>

<aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 xl:ml-6 max-w-64 ease-nav-brand z-990 rounded-2xl xl:left-0 xl:translate-x-0" aria-expanded="false">
    <div class="h-19">
        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700" href="{{route('index')}}" target="_blank">
            {{--            <img src="{{asset('AdminPanel/assets/img/logo-ct-dark.png')}}" class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8" alt="main_logo" />--}}
            {{--            <img src="{{asset('AdminPanel/assets/img/logo-ct.png')}}" class="hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8" alt="main_logo" />--}}
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Texnologiyalar Olami</span>
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

    <!-- SideBar  -->
    <div class="items-center block w-auto max-h-screen overflow-auto grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">

            <!-- Accaunt Page-->
            <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Account</h6>
            </li>

            <!-- Profile -->
            <li class="mt-0.5 w-full">
                <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('profile.edit')}}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-blue-500 fas fa-user"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile</span>
                </a>
            </li>

            <!-- Admin Page-->
            <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Administrator</h6>
            </li>

            <!-- Ro'yhatdan o'tganlar -->
            <li class="mt-0.5 w-full">
                <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('Users')}}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-blue-500 fas fa-users"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Administrator</span>
                </a>
            </li>

            <!-- Postlar -->
            <li class="mt-0.5 w-full">
                <a class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors" href="{{route('Posts')}}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-green-800 fas fa-newspaper"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Postlar</span>
                </a>
            </li>

            <!-- Notification -->
            <li class="mt-0.5 w-full">
                <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('Message')}}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-yellow-800 fas fa-bell"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Xabarlar</span>
                </a>
            </li>

        </ul>
    </div>
</aside>


<main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
    <!-- Navbar -->
    <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start sticky top-[1%] backdrop-saturate-200 backdrop-blur-2xl dark:bg-slate-850/80 dark:shadow-dark-blur bg-[hsla(0,0%,100%,0.8)] shadow-blur z-110" navbar-main="" navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
            <nav>
                <!-- breadcrumb -->
                <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                    <li class="text-sm leading-normal">
                        <a class="opacity-50 dark:text-white" href="javascript:;">Sahifa</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal before:float-left before:pr-2 before:content-['/'] dark:text-white dark:before:text-white" aria-current="page">Postlar</li>
                </ol>
                <h6 class="mb-0 font-bold capitalize dark:text-white">Postlar</h6>
            </nav>

            <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                <div class="flex items-center md:ml-auto md:pr-4">
                </div>
                <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                    <li class="flex items-center">
                        <a href="" class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand dark:text-white">
                            <i class="fa fa-user sm:mr-1" aria-hidden="true"></i>
                            <span class="hidden sm:inline">{{$user->first_name." ".$user->last_name}}</span>
                        </a>
                    </li>
                    <li class="flex items-center pl-4 xl:hidden">
                        <a href="javascript:;" class="block p-0 text-sm transition-all ease-nav-brand dark:text-white" sidenav-trigger="">
                            <div class="w-4.5 overflow-hidden">
                                <i class="ease mb-0.75 relative block h-0.5 rounded-sm transition-all dark:bg-white bg-slate-500"></i>
                                <i class="ease mb-0.75 relative block h-0.5 rounded-sm transition-all dark:bg-white bg-slate-500"></i>
                                <i class="ease relative block h-0.5 rounded-sm transition-all dark:bg-white bg-slate-500"></i>
                            </div>
                        </a>
                    </li>
                    <li class="flex items-center px-4">
                        <a href="javascript:;" class="p-0 text-sm transition-all ease-nav-brand dark:text-white">
                            <i fixed-plugin-button-nav="" class="cursor-pointer fa fa-cog" aria-hidden="true"></i>
                            <!-- fixed-plugin-button-nav  -->
                        </a>
                    </li>

                    <!-- notifications -->

                    <li class="relative flex items-center pr-2">
                        <p class="hidden transform-dropdown-show"></p>
                        <a href="javascript:;" class="block p-0 text-sm transition-all ease-nav-brand dark:text-white" dropdown-trigger="" aria-expanded="false">
                            <i class="cursor-pointer fa fa-bell" aria-hidden="true"></i>
                        </a>

                        <ul dropdown-menu="" class="text-sm transform-dropdown before:font-awesome before:leading-default dark:shadow-dark-xl before:duration-350 before:ease lg:shadow-3xl duration-250 min-w-44 before:sm:right-8 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent dark:bg-slate-850 bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer dark:before:text-white">
                            <!-- add show class on dropdown open js -->
                            @foreach($ntf as $val)
                                <li class="relative mb-2">
                                    <a class="dark:hover:bg-slate-900 ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                                        <div class="flex py-1">
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white"><span class="font-semibold">{{$val->subject}}</span> from {{$val->name}}</h6>
                                                <p class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                                                    {{$val->email}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="w-full px-6 py-6 mx-auto">


        <div class="flex flex-wrap -mx-3">
            <!-- card1 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-2/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3 mb-4">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <img id="postjpg" class="imgwith" style="display: none" src="" alt="your image" />
                                    <video id="postvd" style="display: none" class="imgwith" controls>
                                        <source id="postmp4" class="imgwith" src="" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" id="input_window" class="flex flex-row -mx-3 p-3" align="center">
                            <button onclick="document.getElementById('imgInp').click()" class="file-upload__wrapper w-full">
                                <div class="form-parent">
                                    <form action="" class="file-upload__form">
                                        <div style="margin-top: 25%; margin-bottom: 25%">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <p>Browse File to Upload</p>
                                        </div>
                                    </form>
                                    <div>
                                        <section class="progress-container"></section>
                                        <section class="uploaded-container"></section>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div id="img_window" onclick="document.getElementById('imgInp').click()">
                            <img id="img_src" style="width: 99%" src="{{asset('Posts/'.$data->file_name)}}">
                        </div>

                    </div>
                </div>
            </div>

            <!-- card2 -->

            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-2/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <form runat="server" action="{{route('Post.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="flex-auto p-4 w-full">
                            <div class="flex flex-row -mx-3 w-full p-3">
                                <input type="text" value="{{$data->title}}" class="pl-2 text-sm focus:shadow-primary-outline ease leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Post sarlavhasini kiriting..." required name="title">
                            </div>
                        </div>
                        <div class="flex-auto p-4 w-full">
                            <div class="flex flex-row -mx-3 w-full p-3">
                                <textarea type="text" style="height: 200px" class="pl-2 text-sm focus:shadow-primary-outline ease leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Post matnini kiriting..." required name="text">{{$data->text}}</textarea>
                            </div>
                        </div>
                        <div class="flex-auto p-4 w-full">
                            <div class="flex flex-row -mx-3 w-full p-3">
                                <input style="display: none" accept=".jpg" type='file' id="imgInp" name="post">
                                <button type="submit" style="background: #0a58ca; color: white" class="flex-none w-full max-w-full px-3  break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border p-4">
                                    Save Data
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>


        <footer class="pt-4">
            <div class="w-full px-6 mx-auto">
                <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                    <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                        <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                            ©
                            <script>
                                document.write(new Date().getFullYear() + ",");
                            </script>
                            Created by
                            <a href="" class="font-semibold dark:text-white text-slate-700" target="_blank">M.Rahima</a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
</main>

<div fixed-plugin>
    <a fixed-plugin-button class="fixed px-4 py-2 text-xl bg-white shadow-lg cursor-pointer bottom-8 right-8 z-990 rounded-circle text-slate-700">
        <i class="py-2 pointer-events-none fa fa-cog"> </i>
    </a>
    <!-- -right-90 in loc de 0-->
    <div fixed-plugin-card class="z-sticky backdrop-blur-2xl backdrop-saturate-200 dark:bg-slate-850 shadow-3xl w-90 ease -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white bg-clip-border px-2.5 duration-200">
        <div class="px-6 pt-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
            <div class="float-left">
                <div class="dropdown">
                    <span>
                        <img src='{{asset("UserContent/user.png")}}' class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-30 w-30 rounded-circle">
                    </span>
                    <div class="dropdown-content dark:bg-slate-850 bg-white">
                        <a href="{{route('profile.edit')}}" style="color: #1aff00" class="dropdown-item">
                            <i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp
                            Profile!
                        </a>
                        <hr class="h-px mx-0 my-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button style="color: red" class="dropdown-item" href="{{ __('Log Out') }}">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp
                                Log Out!
                            </button>
                        </form>
                    </div>
                </div>
                <h5 class="mt-4 mb-0 dark:text-white">{{$user->name}}</h5>
                <a href="{{asset('user/'.$user->user)}}" class="dark:text-white dark:opacity-80">{{$user->user}}</a>
            </div>
            <div class="float-right mt-6">
                <button fixed-plugin-close-button class="inline-block p-0 mb-4 text-sm font-bold leading-normal text-center uppercase align-middle transition-all ease-in bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:-translate-y-px tracking-tight-rem bg-150 bg-x-25 active:opacity-85 dark:text-white text-slate-700">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            <!-- End Toggle Button -->
        </div>
        <hr class="h-px mx-0 my-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
        <div class="flex-auto p-6 pt-0 overflow-auto sm:pt-4">
            <!-- Sidenav Type -->
            <div class="mt-4" style="display: none">
                <h6 class="mb-0 dark:text-white">Sidenav Type</h6>
                <p class="text-sm leading-normal dark:text-white dark:opacity-80">Choose between 2 different sidenav types.</p>
            </div>
            <div class="flex" style="display: none">
                <button transparent-style-btn class="inline-block w-full px-4 py-2.5 mb-2 font-bold leading-normal text-center text-white capitalize align-middle transition-all bg-blue-500 border border-transparent border-solid rounded-lg cursor-pointer text-sm xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-500 xl-max:to-violet-500 xl-max:text-white xl-max:border-0 hover:-translate-y-px dark:cursor-not-allowed dark:opacity-65 dark:pointer-events-none dark:bg-gradient-to-tl dark:from-blue-500 dark:to-violet-500 dark:text-white dark:border-0 hover:shadow-xs active:opacity-85 ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-blue-500 to-violet-500 hover:border-blue-500" data-class="bg-transparent" active-style>Light</button>
                <button white-style-btn class="inline-block w-full px-4 py-2.5 mb-2 ml-2 font-bold leading-normal text-center text-blue-500 capitalize align-middle transition-all bg-transparent border border-blue-500 border-solid rounded-lg cursor-pointer text-sm xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-500 xl-max:to-violet-500 xl-max:text-white xl-max:border-0 hover:-translate-y-px dark:cursor-not-allowed dark:opacity-65 dark:pointer-events-none dark:bg-gradient-to-tl dark:from-blue-500 dark:to-violet-500 dark:text-white dark:border-0 hover:shadow-xs active:opacity-85 ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-none hover:border-blue-500" data-class="bg-white">Dark</button>
            </div>
            <p style="display: none" class="block mt-2 text-sm leading-normal dark:text-white dark:opacity-80 xl:hidden">You can change the sidenav type just on desktop view.</p>
            <!-- Navbar Fixed -->
            <div class="flex my-4" style="display: none">
                <h6 class="mb-0 dark:text-white">Pinning the Navigation bar</h6>
                <div class="block pl-0 ml-auto min-h-6">
                    <input id="navbtn" navbarFixed onclick="if(document.getElementById('navbtn').checked){ document.getElementById('navpin').value='1'; } else { document.getElementById('navpin').value='0'; } document.getElementById('sendnav').click();" class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 after:translate-x-5.3 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] border-blue-500/95 bg-blue-500/95 bg-none bg-right" type="checkbox" />
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<!-- plugin for scrollbar  -->
<script src="{{asset('AdminPanel/assets/js/plugins/perfect-scrollbar.min.js')}}" async></script>
<!-- main script file  -->
<script src="{{asset('AdminPanel/assets/js/argon-dashboard-tailwind2.js?v=1.0.1')}}" async></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        var dark_mode = document.querySelector("[dark-toggle]");
        var root = document.querySelector("html");
        root.classList.add("dark");
    }
</script>
<script>
    if(window.innerWidth>575) {
        document.getElementById('imgwith').innerHTML = ".imgwith{width: " + parseInt(window.innerWidth / 2.7921) + "px;}";
    }
    else
    {
        document.getElementById('imgwith').innerHTML = ".imgwith{width: " + parseInt(window.innerWidth/1.25) + "px;}";
    }
    document.getElementById("imgInp").addEventListener("paste", function(){
        console.log("sdc");
    });
    const [file] = imgInp.files
    if (file && false) {
        let s=file.name;
        if(s.substring(s.length-4,s.length)=='.jpg')
        {
            document.getElementById('postvd').style="display: none";
            postjpg.src = URL.createObjectURL(file);
            document.getElementById('postjpg').style="display: block";
        }
        if(s.substring(s.length-4,s.length)=='.mp4')
        {
            document.getElementById('postjpg').style="display: none";
            postmp4.src = URL.createObjectURL(file);
            document.getElementById('postvd').style="display: block";
        }
    }
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            let s=file.name;
            if(s.substring(s.length-4,s.length)=='.jpg')
            {
                document.getElementById('input_window').style="display: none";
                img_src.src = URL.createObjectURL(file);
                document.getElementById('img_window').style="display: block";
            }
        }
    }
</script>
</html>
