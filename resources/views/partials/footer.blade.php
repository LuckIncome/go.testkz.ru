<!-- Footer start -->
  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <div class="footer__logo">
          <a href="/">
            <img src="{{ Voyager::image(setting('site.footer_logo')) }}" alt="Федерация Го">
          </a>
        </div>
        <div class="footer__content">
          <div class="footer__menu">
            <nav class="menu">

              {{ menu('header_menu','vendor.voyager.menu.header_menu') }}

            </nav>
          </div>
          <div class="footer__info">
            <div class="contact-us">
              <div class="phone-img">
                <img src="{{ asset('assets/images/logo-contacts.svg') }}" alt="logo-contacts">
              </div>
              <div class="phone-info">
                @foreach($emails as $email)
                  {{ $email->value }}
                @endforeach 
              </div>  
            </div>
            <div class="address">
              <div class="phone-img">
                <img src="{{ asset('assets/images/map.svg') }}" alt="map">
              </div>
                <div class="phone-info">
                  @foreach($adresses as $adress)
                    {{ $adress->translate_value }}
                  @endforeach
                </div>
            </div>
          </div>
        </div>
        <div class="footer__media">
          <div class="media__title">@lang('general.subscribeToUs')</div>
          <ul class="socials">
            @foreach($socials_white as $social)
              <li>
                <a class="socials-icon" href="{{$social->link}}">
                    <img src="{{Voyager::image($social->icon)}}" alt="{{$social->translate_value}}">
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="footer-bot">
        <span>© {{ date('Y') }} @lang('general.reserved')</span>
        <a href="/privacy">@lang('general.privacy')</a>
        <div class="web-logo">
          <a href="https://i-marketing.kz/"><img src="{{ asset('assets/images/logo-WEB.png') }}" alt="i-marketing"></a> 
        </div>
      </div>
    </div>
  </footer>

  <footer class="footer footer__mobile">
    <div class="container">
      <div class="footer-top">
        <div class="footer__logo">
          <a href="/">
            <img src="{{ Voyager::image(setting('site.footer_logo')) }}" alt="Федерация Го">
          </a>
        </div>
        <div class="footer__media">
          <div class="media__title">Подписывайтесь на нас 
            в соц.сетях:</div>
          <ul class="socials">
            @foreach($socials_white as $social)
              <li>
                <a class="socials-icon" href="{{$social->link}}">
                    <img src="{{Voyager::image($social->icon)}}" alt="{{$social->translate_value}}">
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="footer__content">
        <div class="footer__menu">
          <nav class="menu">

            {{ menu('header_menu','vendor.voyager.menu.header_menu') }}

          </nav>
        </div>
        <div class="footer__info">
          <div class="contact-us">
            <div class="phone-img">
              <img src="{{ asset('assets/images/logo-contacts.svg') }}" alt="logo-contacts">
            </div>
            <div class="phone-info">
              @foreach($emails as $email)
                {{ $email->value }}
              @endforeach
            </div>  
          </div>
          <div class="address">
            <div class="phone-img">
              <img src="{{ asset('assets/images/map.svg') }}" alt="map">
            </div>
              <div class="phone-info">
                @foreach($adresses as $adress)
                  {{ $adress->translate_value }}
                @endforeach
              </div>
          </div>
        </div>
      </div>
      <div class="footer-bot">
        <span>© {{ date('Y') }} @lang('general.reserved')</span>
        <a href="/privacy">@lang('general.privacy')</a>
        <div class="web-logo">
          <a href="https://i-marketing.kz/">
            <img src="{{ asset('assets/images/logo-WEB.png') }}" alt="i-marketing">
          </a> 
        </div>
      </div>
    </div>
  </footer>
<!-- Footer end -->

