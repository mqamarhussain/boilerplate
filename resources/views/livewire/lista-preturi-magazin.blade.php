<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de preturi Magazin IMC') }}
        </h2>
</x-slot>

<main>
<!-- Formularul -->

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="card card-Vertical card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Fromualr introducere produse</h6>
                        </div>
                                    <div class="card-body py-md-30">
                                        <form wire:submit.prevent="saveData">
                                            <div class="row">
                                                <div class="col-md-6 mb-25">
                                                    <input type="text" wire:model="denumire" id="denumire" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Denumire produs">
                                                    @error('denumire') <span>{{ $message }}</span> @enderror
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                <input type="text" wire:model="categorie" id="categorie" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Categorie produs">
                                                    @error('categorie') <span>{{ $message }}</span> @enderror
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                <input type="text" wire:model="descriere" id="descriere" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Descriere Produs">
                                                    @error('descriere') <span>{{ $message }}</span> @enderror
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                <input type="text" wire:model="echipament" id="echipament" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Echipmament">
                                                    @error('echipament') <span>{{ $message }}</span> @enderror
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                <input type="text" wire:model="um" id="um" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Unitatea de masura">
                                                    @error('um') <span>{{ $message }}</span> @enderror
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                <input type="text" wire:model="furnizor" id="furnizor" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Furnizor">
                                                    @error('furnizor') <span>{{ $message }}</span> @enderror
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                <input type="text" wire:model="pret" id="pret" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Pret">
                                                    @error('pret') <span>{{ $message }}</span> @enderror
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                <input type="text" wire:model="stoc" id="stoc" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="stoc">
                                                    @error('stoc') <span>{{ $message }}</span> @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="layout-button mt-0">
                                                        <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Adauga produs in lista</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
                                            <span class="userDatatable-title">Denumire</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Categorie</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Descriere</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">UM</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Preț</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Furnizor</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Echipament</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Data Actualizare</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Stoc</span>
                                        </th>
                                        <th class="actions">
                                            <span class="userDatatable-title">Actiuni</span>
                                        </th>
                                    </tr>
                                </thead>
                            <tbody>
                            <tbody>
                                @foreach ($preturiMagazin as $pretMagazin)
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>{{ $pretMagazin->denumire }}</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--subject">
                                            {{ $pretMagazin->categorie }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--subject">
                                            {{ $pretMagazin->descriere }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--priority">
                                            {{ $pretMagazin->um }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--priority">
                                            {{ $pretMagazin->pret }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--priority">
                                            {{ $pretMagazin->furnizor }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--priority">
                                            {{ $pretMagazin->echipament }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--priority">
                                            <p> {{ \Carbon\Carbon::parse($pretMagazin->updated_at)->format('d.m.Y') }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content d-inline-block">
                                                <span class="bg-opacity-success  color-success userDatatable-content-status active">{{ $pretMagazin->stoc }}</span>
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
                                                    <a href="#" wire:click="edit({{ $pretMagazin->id }})" class="edit">
                                                        <i class="uil uil-edit"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" wire:click="stergeProdus({{ $pretMagazin->id }})" class="remove">
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
