<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer:wght@100..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-2 col-lg-2 sidebar-dark-primary fs-5 text-white border-bottom text-center">
              <a href="#" class="brand-link text-decoration-none ">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIvY1AX3h4Sl0LqDFbn2oZvv69rledvdeQjo8t_9XpgQ&s" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                  style="opacity: .8">
              <span class="brand-text font-weight-light">AdminLTE 3</span>
              </a></div>
            <div class="col-12 col-md-10 col-lg-10 fs-4 pt-2 border-bottom text-success text-center">
              <span class="float-start"><i class="fa-solid fa-bars"></i></span>
              Stock Management System
            </div>
        </div>
    </div>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-2 sidebar-dark-primary text-white ">
                <!-- Sidebar -->
                <div class="sidebar">
                    
                
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <li class="nav-item menu-open ">
                            <a href="{{route('home')}}" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                            ទំព័រដើម
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    មុខទំនិញ
                                </p>
                                <i class="right fas fa-angle-left arrow"></i>
                                </a>
                                <ul class="nav nav-treeview sub-menu">
                                    <li class="nav-item"><a href="{{route('create_product')}}" class="nav-link"><i class="far fa-circle nav-icon"></i> បង្កើតមុខទំនិញថ្មី</a></li>
                                    <li class="nav-item"><a href="" class="nav-link"><i class="far fa-circle nav-icon"></i> តារាងមុខទំនិញ</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    រង្វាស់ខ្នាត
                                </p>
                                <i class="right fas fa-angle-left arrow"></i>
                                </a>
                                <ul class="nav nav-treeview sub-menu">
                                    <li class="nav-item"><a href="" class="nav-link"><i class="far fa-circle nav-icon"></i> បង្កើតរង្វាស់ខ្នាតថ្មី</a></li>
                                    <li class="nav-item"><a href="" class="nav-link"><i class="far fa-circle nav-icon"></i> តារាងរង្វាស់ខ្នាត</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    ស្ដុកទំនិញ
                                    
                                </p>
                                <i class="right fas fa-angle-left arrow"></i>
                                </a>
                                <ul class="nav nav-treeview sub-menu">
                                    <li class="nav-item"><a href="" class="nav-link"><i class="far fa-circle nav-icon"></i> បង្កើតស្ដុកទំនិញថ្មី</a></li>
                                    <li class="nav-item"><a href="" class="nav-link"><i class="far fa-circle nav-icon"></i> តារាងស្ដុកទំនិញ</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    ការស្នើសុំស្ដុក
                                    
                                </p>
                                <i class="right fas fa-angle-left arrow"></i>
                                </a>
                                <ul class="nav nav-treeview sub-menu">
                                    <li class="nav-item"><a href="" class="nav-link"><i class="far fa-circle nav-icon"></i> បង្កើតការស្នើសុំស្ដុកថ្មី</a></li>
                                    <li class="nav-item"><a href="" class="nav-link"><i class="far fa-circle nav-icon"></i> តារាងការស្នើសុំស្ដុក</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    ប្រតិបត្តិការស្ដុក
                                    
                                </p>
                                <i class="right fas fa-angle-left arrow"></i>
                                </a>
                                <ul class="nav nav-treeview sub-menu">
                                    <li class="nav-item"><a href="#" class="nav-link  "><i class="far fa-circle nav-icon"></i> បង្កើតប្រតិបត្តិការស្ដុកថ្មី</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link  "><i class="far fa-circle nav-icon"></i> តារាងប្រតិបត្តិការស្ដុក</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    ចំណាយប្រចាំថ្ងៃ
                                </p>
                                <i class="right fas fa-angle-left arrow"></i>
                                </a>
                                <ul class="nav nav-treeview sub-menu">
                                    <li class="nav-item"><a href="#" class="nav-link "><i class="far fa-circle nav-icon"></i> បង្កើតចំណាយប្រចាំថ្ងៃថ្មី</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link "><i class="far fa-circle nav-icon"></i> តារាងចំណាយប្រចាំថ្ងៃ</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    ការបញ្ជាទិញ
                                    
                                </p>
                                <i class="right fas fa-angle-left arrow"></i>
                                </a>
                                <ul class="nav nav-treeview sub-menu">
                                    <li class="nav-item"><a href="" class="nav-link "><i class="far fa-circle nav-icon"></i> បង្កើតការបញ្ជាទិញថ្មី</a></li>
                                    <li class="nav-item"><a href="" class="nav-link "><i class="far fa-circle nav-icon"></i> តារាងការបញ្ជាទិញ</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    របាយការណ៍
                                    
                                </p>
                                <i class="right fas fa-angle-left arrow"></i>
                                </a>
                                <ul class="nav nav-treeview sub-menu">
                                    <li class="nav-item"><a href="#" class="nav-link "><i class="far fa-circle nav-icon"></i> បង្កើតរបាយការណ៍ថ្មី</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link "><i class="far fa-circle nav-icon"></i> តារាងរបាយការណ៍</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    អ្នកប្រើប្រាស់
                                    
                                </p>
                                <i class="right fas fa-angle-left arrow"></i>
                                </a>
                                <ul class="nav nav-treeview sub-menu">
                                    <li class="nav-item"><a href="" class=" nav-link"><i class="far fa-circle nav-icon"></i> បង្កើតអ្នកប្រើប្រាស់ថ្មី</a></li>
                                    <li class="nav-item"><a href="" class="nav-link"><i class="far fa-circle nav-icon"></i> តារាងអ្នកប្រើប្រាស់</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    កំណត់ប្រព័ន្ធ
                                    
                                </p>
                                <i class="right fas fa-angle-left arrow"></i>
                                </a>
                                <ul class="nav nav-treeview sub-menu">
                                    <li class="nav-item"><a href="" class="nav-link"><i class="far fa-circle nav-icon"></i> សាខា</a></li>
                                    <li class="nav-item"><a href="{{route('suppliers.create')}}" class="nav-link"><i class="far fa-circle nav-icon"></i> អ្នកផ្គត់ផ្គង់</a></li>
                                    <li class="nav-item"><a href=""class="nav-link"><i class="far fa-circle nav-icon"></i> ចំណាយពីសេស</a></li>
                                    <li class="nav-item"><a href="" class="nav-link"><i class="far fa-circle nav-icon"></i> អត្រាប្ដូរប្រាក់</a></li>
                                    <li class="nav-item"><a href="" class="nav-link"><i class="far fa-circle nav-icon"></i> ក្រុមប្រភេទ</a></li>
                                    <li class="nav-item"><a href="" class="nav-link"><i class="far fa-circle nav-icon"></i> ក្រុមតម្លៃ</a></li>
                                </ul>
                            </li>
                            </ul>
                        </li>
                        
                        </ul>
                    </nav>
                  </div>
            </div>
            @yield('content')
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>