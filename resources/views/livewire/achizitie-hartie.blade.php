<main>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="col-lg-12">
                    <div class="card card-default card-md ">
                        <div class="card-header">
                            <h6>Adauga hartie in baza de date</h6>
                        </div>
                        <div class="card-body ">
                            <form wire:submit.prevent="salveazaHartie">
                                <div class="row mx-n15">

                                <div class="col-md-6 mb-25">

                                        <select id="dimensiune" class="form-control ih-medium ip-gray radius-xs b-light px-15" wire:model="dimensiune">
                                            <option value="">Alegeți dimensiunea</option>
                                            <option value="A4 21 x 29.7">A4 21 x 29.7</option>
                                            <option value="A3 42 x 29.7">A3 42 x 29.7</option>
                                            <option value="SRA 3 45 x 32">SRA 3 45 x 32</option>
                                        </select>
                                        @error('dimensiune') <span>{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6 mb-25">

                                        <select id="grosime"  class="form-control ih-medium ip-gray radius-xs b-light px-15" wire:model="grosime">
                                            <option value="">Alegeți gramajul</option>.
                                            <option value="90">90</option>
                                            <option value="100">100</option>
                                            <option value="120">120</option>
                                            <option value="135">135</option>
                                            <option value="160">160</option>
                                            <option value="170">170</option>
                                            <option value="200">200</option>
                                            <option value="250">250</option>
                                            <option value="280">280</option>
                                            <option value="300">300</option>
                                            <option value="350">350</option>
                                            <option value="350">400</option>
                                        </select>
                                        @error('dimensiune') <span>{{ $message }}</span> @enderror
                                    </div>
                                    
                                    
                                    <div class="col-md-6 mb-25">

                                        <div class="radio-theme-default custom-radio ">
                                            <input class="radio" type="radio" name="tip1" value="cretat" id="tip1" wire:model="tip">
                                            <label for="tip1">
                                                <span class="radio-text">Cretat</span>
                                            </label>
                                            
                                            <input class="radio" type="radio" name="tip2" value="necretatat" id="tip2" wire:model="tip">
                                            <label for="tip2">
                                                <span class="radio-text">Necretat</span>
                                            </label>
                                            @error('tip') <span>{{ $message }}</span> @enderror 
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-25">

                                        <select id="categorie" class="form-control ih-medium ip-gray radius-xs b-light px-15"  wire:model="categorie">
                                            <option value="">Alegeți categoria</option>
                                            <option value="Color Copy">Color Copy</option>
                                            <option value="Color Copy Color Copy coated glossy">Color Copy coated glossy</option>
                                        </select>
                                        @error('categorie') <span>{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6 mb-25">
        
                                        <select id="furnizor" class="form-select" wire:model="furnizor">
                                            <option value="">Alegeți furnizroul</option>
                                            <option value="Antalis">Antalis</option>
                                        </select>
                                        @error('categorie') <span>{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6 mb-25 dm-select">

                                        <select class="form-control ih-medium ip-gray radius-xs b-light px-15"  wire:model="coli_top">
                                            <option value="">Alege coli top</option>
                                            <option value="500">500 coli</option>
                                            <option value="250">250 coli</option>
                                            <option value="150">150 coli</option>
                                            <option value="125">125 coli</option>
                                        </select>
                                        @error('coli_top') <span>{{ $message }}</span> @enderror
                                    </div>
                                    
                                    <div class="col-md-6 mb-25">
                                        <input type="text" id="pret_top" class="form-control ih-medium ip-gray radius-xs b-light px-15" wire:model="pret_top" placeholder="Pret top (fara TVA)">
                                        @error('pret_top') <span>{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6 mb-25">
                                    <button class="btn btn-primary px-30" type="submit">Adauga materia Prima</button>
                                    </div>

                                </div>
                            
                                
                            </form>
                        </div>
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
            <div class="max-w-full mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
            <div class="support-ticket-system support-ticket-system--search">
                <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                            <h4 class="text-capitalize fw-500 breadcrumb-title">Lista Produselor</h4>
                        </div>
                    </div>
                    <div class="action-btn">
                        <a href="#" class="btn btn-primary">
                            Export
                            <i class="las la-angle-down"></i>
                        </a>
                    </div>

                </div>
                <div class="support-form datatable-support-form d-flex justify-content-xxl-between justify-content-center align-items-center flex-wrap">
                    <div class="support-form__input">
                        <div class="d-flex flex-wrap">
                            <div class="support-form__input-id">
                                <label>Id:</label>
                                <div class="dm-select ">
                                    <select name="select-search" class="select-search form-control ">
                                        <option value="01">All</option>
                                        <option value="02">Option 2</option>
                                        <option value="03">Option 3</option>
                                        <option value="04">Option 4</option>
                                        <option value="05">Option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="support-form__input-status">
                                <label>status:</label>
                                <div class="dm-select ">
                                    <select name="select-search" class="select-search form-control ">
                                        <option value="01">All</option>
                                        <option value="02">Option 2</option>
                                        <option value="03">Option 3</option>
                                        <option value="04">Option 4</option>
                                        <option value="05">Option 5</option>
                                    </select>
                                </div>
                            </div>
                            <button class="support-form__input-button">search</button>
                        </div>
                    </div>
                    <div class="support-form__search">
                        <div class="support-order-search">
                            <form action="/" class="support-order-search__form">
                                <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                <input class="form-control border-0 box-shadow-none" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                        <thead>
                                    <tr class="userDatatable-header">
                                        <th>
                                            <span class="userDatatable-title">Format(mm)    </span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Tip</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Grosime</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Categorie</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Furnizor</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Pret Top (fara TVA)</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Pret Coala (TVA inclus)</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Data Actualizare</span>
                                        </th>
                                        <th class="actions">
                                            <span class="userDatatable-title">Actiuni</span>
                                        </th>
                                    </tr>
                                </thead>
                            <tbody>
                            <tbody>
                                @foreach ($afiseazaHartie as $hartie)
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>{{ $hartie->dimensiune }}</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--subject">
                                            {{ $hartie->tip }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--priority">
                                            {{ $hartie->grosime }} g/mp
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--priority">
                                            {{ $hartie->categorie }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--priority">
                                            {{ $hartie->furnizor }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--priority">
                                            {{ $hartie->pret_top }} <span>lei</span> 
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--priority">
                                            {{ $hartie->pret_coala }} lei
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content d-inline-block">
                                                <span class="bg-opacity-success  color-success userDatatable-content-status active">{{ \Carbon\Carbon::parse($hartie->updated_at)->format('d.m.Y') }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                <li>
                                                    <a href="#" class="view">
                                                        <i class="uil uil-setting"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"  class="edit">
                                                        <i class="uil uil-edit"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"  wire:click="stergeProdus({{ $hartie->id }})" class="remove">
                                                        <i class="uil uil-trash-alt"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end pt-30">
                        <nav class="dm-page ">
                            <ul class="dm-pagination d-flex">
                                <li class="dm-pagination__item">
                                    <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                    <a href="#" class="dm-pagination__link"><span class="page-number">1</span></a>
                                    <a href="#" class="dm-pagination__link active"><span class="page-number">2</span></a>
                                    <a href="#" class="dm-pagination__link"><span class="page-number">3</span></a>
                                    <a href="#" class="dm-pagination__link pagination-control"><span class="page-number">...</span></a>
                                    <a href="#" class="dm-pagination__link"><span class="page-number">12</span></a>
                                    <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                    <a href="#" class="dm-pagination__option">
                                    </a>
                                </li>
                                <li class="dm-pagination__item">
                                    <div class="paging-option">
                                        <select name="page-number" class="page-selection">
                                            <option value="20">20/page</option>
                                            <option value="40">40/page</option>
                                            <option value="60">60/page</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>


        <div class="ant-col ant-col-xs-24" style="padding-left: 7.5px; padding-right: 7.5px;">
        <div class="ant-card sc-iIPllB dEYaig" style="width: 100%;">
        <div class="ant-card-head"><div class="ant-card-head-wrapper">
            <div class="ant-card-head-title">Pagination</div>
            <div class="ant-card-extra">

            </div>
        </div>
    </div>



    
</main>

