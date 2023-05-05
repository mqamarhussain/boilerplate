<div class="sidebar__menu-group">
    <ul class="sidebar_nav">
        
        <li>
            <a href="{{ route('dashboard') }}" class="{{ (request()->routeIs('dashboard')) ? 'active ' : '' }}">
                <span class="nav-icon uil uil-create-dashboard"></span>
                <span class="menu-text">Dashboard</span>
            </a>
        </li>

        <li class="has-child {{ in_array(Route::currentRouteName(), ['materii-prime', 'preturi-productie', 'achizitie-hartie']) ? 'open' : '' }}">
            <a href="#" class="{{ in_array(Route::currentRouteName(), ['materii-prime', 'preturi-productie', 'achizitie-hartie']) ? 'active' : '' }}">
                <span class="nav-icon uil uil-create-dashboard"></span>
                <span class="menu-text">{{ __('Productie') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li class="{{ (request()->routeIs('materii-prime')) ? 'active ' : '' }}">
                    <a href="{{ route('materii-prime') }}">{{ __('Materii prime') }}</a>
                </li>

                <li class="{{ (request()->routeIs('preturi-productie')) ? 'active ' : '' }}">
                    <a href="{{ route('preturi-productie') }}">{{ __('Preturi Productie') }}</a>
                </li>

                <li class="{{ (request()->routeIs('achizitie-hartie')) ? 'active ' : '' }}">
                    <a href="{{ route('achizitie-hartie') }}">{{ __('Preturi Hartie') }}</a>
                </li>
                
            </ul>
        </li>

        <li class="has-child {{ in_array(Route::currentRouteName(), ['calculator-lemn', 'print-digital', 'achizitie-hartie']) ? 'open' : '' }}">
            <a href="#" class="{{ in_array(Route::currentRouteName(), ['calculator-lemn', 'print-digital', 'achizitie-hartie']) ? 'active' : '' }}">
                <span class="nav-icon uil uil-create-dashboard"></span>
                <span class="menu-text">{{ __('Calculatoare') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li class="{{ (request()->routeIs('calculator-lemn')) ? 'active ' : '' }}"><a href="{{ route('calculator-lemn') }}">{{ __('Lemn') }}</a>
                </li>

                <li class="{{ (request()->routeIs('print-digital')) ? 'active ' : '' }}">
                    <a href="{{ route('print-digital') }}">{{ __('Print digital') }}</a>
                </li>
                
            </ul>
        </li>

        <li>
            <a href="{{ route('preturi-magazin') }}" class="{{ (request()->routeIs('preturi-magazin')) ? 'active ' : '' }}">
                <span class="nav-icon uil uil-create-dashboard"></span>
                <span class="menu-text">{{ __('Lista de preturi magazin') }}</span>
            </a>
        </li>

        <li>
            <a href="{{ route('adauga-print-digital') }}" class="{{ (request()->routeIs('adauga-print-digital')) ? 'active ' : '' }}">
                <span class="nav-icon uil uil-create-dashboard"></span>
                <span class="menu-text">{{ __('Print Digital') }}</span>
            </a>
        </li>


    </ul>
</div>
