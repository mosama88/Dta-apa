       <div class="top-header">
           <div class="header-bar d-flex justify-content-between">
               <div class="d-flex align-items-center">
                   <a href="#" class="logo-icon me-3">
                       <img src="{{ asset('dashboard') }}/assets/images/logo-icon.png" height="30" class="small"
                           alt="">
                       <span class="big">
                           <img src="{{ asset('dashboard') }}/assets/images/logo-dark.png" height="24"
                               class="logo-light-mode" alt="">
                           <img src="{{ asset('dashboard') }}/assets/images/logo-light.png" height="24"
                               class="logo-dark-mode" alt="">
                       </span>
                   </a>
                   <a id="close-sidebar" class="btn btn-icon btn-soft-light" href="javascript:void(0)">
                       <i class="ti ti-menu-2"></i>
                   </a>
                   <div class="search-bar p-0 d-none d-md-block ms-2">
                       <div id="search" class="menu-search mb-0">
                           <form role="search" method="get" id="searchform" class="searchform">
                               <div>
                                   <input type="text" class="form-control border rounded" name="s"
                                       id="s" placeholder="Search Keywords...">
                                   <input type="submit" id="searchsubmit" value="Search">
                               </div>
                           </form>
                       </div>
                   </div>
               </div>

               <ul class="list-unstyled mb-0">

                   <li class="list-inline-item mb-0 ms-1">
                       <div class="dropdown dropdown-primary">
                           <button type="button" class="btn btn-soft-light dropdown-toggle p-0"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                   src="{{ asset('dashboard') }}/assets/images/client/05.jpg"
                                   class="avatar avatar-ex-small rounded" alt=""></button>
                           <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3"
                               style="min-width: 200px;">
                               <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="profile.html">
                                   <img src="{{ asset('dashboard') }}/assets/images/client/05.jpg"
                                       class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                   <div class="flex-1 ms-2">
                                       <span class="d-block">{{auth()->user()->name}}</span>
                                       <small class="text-muted">{{auth()->user()->username}}</small>
                                   </div>
                               </a>
                               <a class="dropdown-item text-dark" href="{{route('dashboard.index')}}"><span
                                       class="mb-0 d-inline-block me-1"><i class="ti ti-home"></i></span>
                                   لوحة التحكم</a>
                               <a class="dropdown-item text-dark" href="{{route('dashboard.profile.edit')}}"><span
                                       class="mb-0 d-inline-block me-1"><i class="ti ti-settings"></i></span>
                                   صفحتى</a>
                               {{-- <a class="dropdown-item text-dark" href="login.html"><span
                                       class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span>
                                   Logout</a> --}}

                               <form action="{{ route('dashboard.logout') }}" method="POST">
                                   @csrf
                                   <button class="dropdown-item text-dark"><span class="mb-0 d-inline-block me-1"><i
                                               class="ti ti-logout"></i></span>
                                       تسجيل الخروج
                                   </button>
                               </form>
                           </div>
                       </div>
                   </li>
               </ul>
           </div>
       </div>
