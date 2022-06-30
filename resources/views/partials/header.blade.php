<!-- Header start -->
  <header class="header">
    <div class="container">
      <div class="header-inner">
        <div class="header__logo">
          <a href="/"><img src="{{ Voyager::image(setting('site.header_logo')) }}" alt="Федерация Го"></a>
        </div>
        <nav class="menu">

          {{ menu('header_menu','vendor.voyager.menu.header_menu') }}

        </nav>
        <div class="dropdown">
          <select name="lang" id="lang" class="lang select">
              <option value="ru" @if($locale == 'ru') selected @endif class="option-lang">
                Рус
              </option>
              <option value="kz" @if($locale == 'kz') selected @endif class="option-lang">
                Каз
              </option>
              <option value="en" @if($locale == 'en') selected @endif class="option-lang">
                Eng
              </option>
          </select>
        </div>
        <ul class="socials">
          @foreach($socials_black as $social)
            <li>
              <a class="socials-icon" href="{{$social->link}}">
                  <img src="{{Voyager::image($social->icon)}}" alt="{{$social->translate_value}}">
              </a>
            </li>
          @endforeach         
        </ul>
      </div>
    </div>
  </header>

  <header class="header header__mobile">
    <div class="container">
      <div class="header-top">
        <div class="header__logo">
          <a href="/"><img src="{{ Voyager::image(setting('site.header_logo')) }}" alt="Федерация Го"></a>
        </div>
        <select name="lang" id="lang" class="lang select">
          <option value="ru" @if($locale == 'ru') selected @endif class="option-lang">
            Рус
          </option>
          <option value="kz" @if($locale == 'kz') selected @endif class="option-lang">
            Каз
          </option>
          <option value="en" @if($locale == 'en') selected @endif class="option-lang">
            Eng
          </option>
        </select>
        <button @click="toggleMobile">
          <transition name="fade" mode="out-in">
            <div class="burger__icon" key="Open" v-if="!dropdown2">
              <img src="{{ asset('assets/images/burger.svg') }}" alt="burger">
            </div> 
            <div class="burger__icon" key="Close" v-else=>
              <img src="{{ asset('assets/images/close.svg') }}" alt="close">
            </div>     
          </transition>
        </button>       
      </div>
      <div class="header-bot">
        <transition name="fade" mode="out-in">
          <div class="dropdown2" v-if="dropdown2">
            <nav class="menu">

              {{ menu('header_menu','vendor.voyager.menu.header_menu') }}

            </nav>
            <ul class="socials__mob">
              @foreach($socials_black as $social)
                <li>
                  <a class="socials-icon" href="{{$social->link}}">
                      <img src="{{Voyager::image($social->icon)}}" alt="{{$social->translate_value}}">
                  </a>
                </li>
              @endforeach
            </ul>
            <div class="mob-select">
              
            </div>
          </div>
      </transition>
      </div>
    </div>
  </header>
<!-- Header end -->