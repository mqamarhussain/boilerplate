
<main>

<!-- Formularul -->

<div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="card card-Vertical card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Adauga un cost de productie</h6>
                        </div>
                                    <div class="card-body py-md-30">
                                        <form wire:submit.prevent="save">
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
                                                <input type="text" wire:model="tip_serviciu" id="tip_serviciu" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Tip serviciu">
                                                    @error('tip_serviciu') <span>{{ $message }}</span> @enderror
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                <input type="text" wire:model="intern" id="intern" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Serviciu intern ?">
                                                    @error('intern') <span>{{ $message }}</span> @enderror
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                <input type="text" wire:model="externalizat" id="externalizat" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Serviciu extern ?">
                                                    @error('externalizat') <span>{{ $message }}</span> @enderror
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                <input type="text" wire:model="grosime" id="grosime" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Grosime">
                                                    @error('grosime') <span>{{ $message }}</span> @enderror
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                <input type="text" wire:model="lungime" id="lungime" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Lungime">
                                                    @error('lungime') <span>{{ $message }}</span> @enderror
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                <input type="text" wire:model="latime" id="latime" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Latime">
                                                    @error('latime') <span>{{ $message }}</span> @enderror
                                                </div>
                                        
                                                <div class="col-md-6 mb-25">
                                                <input type="text" wire:model="unitate_masura" id="unitate_masura" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Unitate de măsura">
                                                    @error('unitate_masura') <span>{{ $message }}</span> @enderror
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                <input type="text" wire:model="pret_unitar" id="pret_unitar" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Pret unitar">
                                                    @error('pret_unitar') <span>{{ $message }}</span> @enderror
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
<!-- Aici se termina formularul -->

<!-- Acesta este tabelul -->
<div class="py-12">
            <div class="max-w-full mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
            <div class="support-ticket-system support-ticket-system--search">
                <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                            <h4 class="text-capitalize fw-500 breadcrumb-title">Costurile de productie</h4>
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
                                            <span class="userDatatable-title">Categorie</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Tip Servciu</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Denumire</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Externalizat</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Grosime</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Lungime</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Latime</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">UM</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Arie</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Pret Unitar</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Pret cm2</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Data actualizare</span>
                                        </th>
                                        <th class="actions">
                                            <span class="userDatatable-title">Actiuni</span>
                                        </th>
                                    </tr>
                                </thead>
                            <tbody>
                            <tbody>
                                @foreach ($PreturiServiciiProductie as $pcp)
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>{{ $pcp->categorie }}</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--subject">
                                            {{ $pcp->tip_serviciu }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--subject">
                                            {{ $pcp->denumire }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--priority">
                                            {{ $pcp->externalizat }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--priority">
                                            {{ $pcp->grosime }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--priority">
                                            {{ $pcp->lungime }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--priority">
                                            {{ $pcp->latime }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--priority">
                                            {{ $pcp->unitate_masura }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--priority">
                                            {{ $pcp->aria }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--priority">
                                            {{ $pcp->pret_unitar }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content--priority">
                                            {{ $pcp->pret_cm2}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content d-inline-block">
                                                <span class="bg-opacity-success  color-success userDatatable-content-status active">{{ \Carbon\Carbon::parse($pcp->updated_at)->format('d.m.Y') }}</span>
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
                                                    <a href="#" class="edit">
                                                        <i class="uil uil-edit"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"  class="remove">
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

    <!-- Acesta se termina tabelul -->
</main>
