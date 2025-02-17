@php
  $options = get_fields('options');

  $logo = $options['logo'];
  $menu_image = $options['menu_image'];
@endphp

<header class="banner bg-dark-blue pt-4 relative z-20">
  <div class="pb-4 border-b border-border">
    <div class="container flex flex-wrap md:flex-nowrap justify-between items-center gap-4 lg:gap-10 px-4 ">
      <div class="shrink-0">
        <a href="{{ home_url('/') }}">
          {!! wp_get_attachment_image($logo, 'full', false, ['class' => 'w-20 lg:w-[119px]']) !!}
        </a>
      </div>
      <div class="flex-grow w-full hidden md:block">
        <form action="">
          <input type="search" placeholder="Search for a product"
                 class="p-4 text-text leading-text bg-white text-dark-blue placeholder-[#bfbfbf] rounded-sm w-full">
        </form>
      </div>
      <div class="flex items-center gap-6 ml-0 md:ml-12 shrink-0">
        <a href="#">
          <svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M11.0039 10.9375C13.6055 10.9375 15.75 13.082 15.75 15.6836V16.5625C15.75 17.5117 14.9766 18.25 14.0625 18.25H1.6875C0.738281 18.25 0 17.5117 0 16.5625V15.6836C0 13.082 2.10938 10.9375 4.71094 10.9375C5.73047 10.9375 6.1875 11.5 7.875 11.5C9.52734 11.5 9.98438 10.9375 11.0039 10.9375ZM14.0625 16.5625V15.6836C14.0625 13.9961 12.6914 12.625 11.0039 12.625C10.4766 12.625 9.66797 13.1875 7.875 13.1875C6.04688 13.1875 5.23828 12.625 4.71094 12.625C3.02344 12.625 1.6875 13.9961 1.6875 15.6836V16.5625H14.0625ZM7.875 10.375C5.0625 10.375 2.8125 8.125 2.8125 5.3125C2.8125 2.53516 5.0625 0.25 7.875 0.25C10.6523 0.25 12.9375 2.53516 12.9375 5.3125C12.9375 8.125 10.6523 10.375 7.875 10.375ZM7.875 1.9375C6.01172 1.9375 4.5 3.48438 4.5 5.3125C4.5 7.17578 6.01172 8.6875 7.875 8.6875C9.70312 8.6875 11.25 7.17578 11.25 5.3125C11.25 3.48438 9.70312 1.9375 7.875 1.9375Z"
              fill="white"/>
          </svg>
        </a>
        <a href="#" class="flex items-center p-4 bg-red gap-3 text-white rounded-sm font-medium text-text leading-text">
          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M15.6212 9.72266C15.5333 10.0449 15.2404 10.25 14.9181 10.25H6.33411L6.53918 11.1875H14.3907C14.8302 11.1875 15.1818 11.627 15.0646 12.0664L14.9181 12.7695C15.4747 13.0332 15.8556 13.5898 15.8556 14.2344C15.8556 15.1426 15.0939 15.875 14.215 15.875C13.3068 15.875 12.5743 15.1426 12.5743 14.2344C12.5743 13.7949 12.7501 13.3848 13.0431 13.0625H6.92004C7.21301 13.3848 7.41809 13.7949 7.41809 14.2344C7.41809 15.1426 6.65637 15.875 5.77747 15.875C4.86926 15.875 4.13684 15.1426 4.13684 14.2344C4.13684 13.6484 4.45911 13.1211 4.95715 12.8281L2.87708 2.75H0.855591C0.445435 2.75 0.152466 2.45703 0.152466 2.04688V1.57812C0.152466 1.19727 0.445435 0.875 0.855591 0.875H3.84387C4.16614 0.875 4.45911 1.13867 4.547 1.46094L4.81067 2.75H16.295C16.7638 2.75 17.0861 3.18945 16.9982 3.62891L15.6212 9.72266Z"
              fill="white"/>
          </svg>
          £0.00
        </a>
      </div>
      <div class="lg:hidden">
        <button type="button" class="toggle-menu">
          <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M2.34375 0.65625C2.57812 0.65625 2.8125 0.890625 2.8125 1.125V3C2.8125 3.26367 2.57812 3.46875 2.34375 3.46875H0.46875C0.205078 3.46875 0 3.26367 0 3V1.125C0 0.890625 0.205078 0.65625 0.46875 0.65625H2.34375ZM2.34375 5.34375C2.57812 5.34375 2.8125 5.57812 2.8125 5.8125V7.6875C2.8125 7.95117 2.57812 8.15625 2.34375 8.15625H0.46875C0.205078 8.15625 0 7.95117 0 7.6875V5.8125C0 5.57812 0.205078 5.34375 0.46875 5.34375H2.34375ZM2.34375 10.0312C2.57812 10.0312 2.8125 10.2656 2.8125 10.5V12.375C2.8125 12.6387 2.57812 12.8438 2.34375 12.8438H0.46875C0.205078 12.8438 0 12.6387 0 12.375V10.5C0 10.2656 0.205078 10.0312 0.46875 10.0312H2.34375ZM14.5312 6.04688C14.7656 6.04688 15 6.28125 15 6.51562V6.98438C15 7.24805 14.7656 7.45312 14.5312 7.45312H5.15625C4.89258 7.45312 4.6875 7.24805 4.6875 6.98438V6.51562C4.6875 6.28125 4.89258 6.04688 5.15625 6.04688H14.5312ZM14.5312 10.7344C14.7656 10.7344 15 10.9688 15 11.2031V11.6719C15 11.9355 14.7656 12.1406 14.5312 12.1406H5.15625C4.89258 12.1406 4.6875 11.9355 4.6875 11.6719V11.2031C4.6875 10.9688 4.89258 10.7344 5.15625 10.7344H14.5312ZM14.5312 1.35938C14.7656 1.35938 15 1.59375 15 1.82812V2.29688C15 2.56055 14.7656 2.76562 14.5312 2.76562H5.15625C4.89258 2.76562 4.6875 2.56055 4.6875 2.29688V1.82812C4.6875 1.59375 4.89258 1.35938 5.15625 1.35938H14.5312Z"
              fill="white"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
  <div class="container px-4 py-2 hidden lg:block">
    <button type="button" class="toggle-menu">
      <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M2.34375 0.65625C2.57812 0.65625 2.8125 0.890625 2.8125 1.125V3C2.8125 3.26367 2.57812 3.46875 2.34375 3.46875H0.46875C0.205078 3.46875 0 3.26367 0 3V1.125C0 0.890625 0.205078 0.65625 0.46875 0.65625H2.34375ZM2.34375 5.34375C2.57812 5.34375 2.8125 5.57812 2.8125 5.8125V7.6875C2.8125 7.95117 2.57812 8.15625 2.34375 8.15625H0.46875C0.205078 8.15625 0 7.95117 0 7.6875V5.8125C0 5.57812 0.205078 5.34375 0.46875 5.34375H2.34375ZM2.34375 10.0312C2.57812 10.0312 2.8125 10.2656 2.8125 10.5V12.375C2.8125 12.6387 2.57812 12.8438 2.34375 12.8438H0.46875C0.205078 12.8438 0 12.6387 0 12.375V10.5C0 10.2656 0.205078 10.0312 0.46875 10.0312H2.34375ZM14.5312 6.04688C14.7656 6.04688 15 6.28125 15 6.51562V6.98438C15 7.24805 14.7656 7.45312 14.5312 7.45312H5.15625C4.89258 7.45312 4.6875 7.24805 4.6875 6.98438V6.51562C4.6875 6.28125 4.89258 6.04688 5.15625 6.04688H14.5312ZM14.5312 10.7344C14.7656 10.7344 15 10.9688 15 11.2031V11.6719C15 11.9355 14.7656 12.1406 14.5312 12.1406H5.15625C4.89258 12.1406 4.6875 11.9355 4.6875 11.6719V11.2031C4.6875 10.9688 4.89258 10.7344 5.15625 10.7344H14.5312ZM14.5312 1.35938C14.7656 1.35938 15 1.59375 15 1.82812V2.29688C15 2.56055 14.7656 2.76562 14.5312 2.76562H5.15625C4.89258 2.76562 4.6875 2.56055 4.6875 2.29688V1.82812C4.6875 1.59375 4.89258 1.35938 5.15625 1.35938H14.5312Z"
          fill="white"/>
      </svg>
    </button>
  </div>
</header>
<div class="main-menu -translate-y-full transition-transform duration-300 ease-in-out bg-white">
  <div class="container p-4 flex justify-between gap-20">
    <div class="w-full lg:w-[60%] shrink-0">
      {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'main-nav',
          'echo' => false,
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'walker' => new \App\Helpers\MainMenuWalker()
          ])
      !!}
    </div>
    <div class="hidden lg:block">
      @if($menu_image)
        {!! wp_get_attachment_image($menu_image, 'full', false, ['class' => '']) !!}
      @endif
    </div>
  </div>
</div>
