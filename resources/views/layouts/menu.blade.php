  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ">
          <li class="nav-item   @yield('home-active')  ">
              <a class="nav-link py-2 pl-0" href="{{ route('home') }}"> <i class="fa fa-home"
                      style="font-size: 18pt"></i><span class="sr-only">(current)</span></a>
          </li>
          @php
              $count = 0;
          @endphp
          @foreach ($categories as $index => $parent)
              @if ($parent->parent_id == null)
                  @php
                      $count++;
                      if ($count >= 15) {
                          break;
                      }
                  @endphp

                  <li class="nav-item {{ Request::is('danh-muc/' . $parent->slug) ? 'active' : '' }} category-nav">
                      <a class="nav-link py-3"
                          href="{{ route('category.show', ['id' => $parent->slug]) }}">{{ $parent->name }}
                      </a>
                      @include('category.categories_list')
                  </li>
              @endif
          @endforeach


          {{-- <li class="nav-item @yield('category-active') category-nav">
              <a class="nav-link">Danh mục <span class="sr-only">(current)</span></a>
              
          </li>
          <li class="nav-item @yield('new-active')">
              <a class="nav-link" href="single.html">Tin mới nhất <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item @yield('new-active')">
              <a class="nav-link" href="single.html">Tin nổi bật <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item @yield('new-active')">
              <a class="nav-link" href="Contact_us.html">Liên hệ <span class="sr-only">(current)</span></a>
          </li> --}}
      </ul>

  </div>
