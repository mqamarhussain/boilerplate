    
    
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                            
                            <thead>
                                <tr class="userDatatable-header">
                                    <th>
                                        <span class="userDatatable-title">Nume produs</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Categorie</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Furnizor</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">UM</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Preț</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Grosime (mm)</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Lungime(cm)</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Lățime(cm)</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">CM2</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Preț cm2</span>
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
                            @foreach ($materiiPrime as $mp)
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>{{ $mp->nume_produs }}</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                        {{ $mp->categorie }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--subject">
                                        {{ $mp->furnizor }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                        {{ $mp->um }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                        {{ $mp->pret }}<span> Lei</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                        {{ $mp->grosime }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                        {{ $mp->lungime }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                        {{ $mp->latime }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                        {{ $mp->mp }} 
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                        {{ $mp->pret_pe_cm2 }} 
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                        <p> {{ \Carbon\Carbon::parse($mp->updated_at)->format('d.m.Y') }}</p>
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
                                                <a href="#" wire:click="edit({{ $mp->id }})" class="edit">
                                                    <i class="uil uil-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                            <a href="#" wire:click="stergeProdus({{ $mp->id }})" class="remove">
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

<main>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
            <div class="col-lg-12">
                <div class="card card-default card-md ">
                    <div class="card-header">
                        <h6>Adauga o materie prima in baza de date</h6>
                    </div>
                    <div class="card-body ">
                        <form wire:submit.prevent="save" class="was-validated">
                            <div class="row mx-n15">

                                <div class="col-md-6 mb-25">
                                    <label for="nume_produs" class="form-label">Nume produs:</label>
                                    <input type="text" id="nume_produs"  class="form-control ih-medium ip-gray radius-xs b-light px-15" wire:model="nume_produs">
                                    @error('nume_produs') <span>{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="categorie" class="form-label">Categorie:</label>
                                    <input type="text" id="categorie"  class="form-control ih-medium ip-gray radius-xs b-light px-15" wire:model="categorie">
                                    @error('categorie') <span>{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="furnizor" class="form-label">Furnizor:</label>
                                    <input type="text" id="furnizor"  class="form-control ih-medium ip-gray radius-xs b-light px-15" wire:model="furnizor">
                                    @error('furnizor') <span>{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="um" class="form-label">UM:</label>
                                    <input type="text" id="um" class="form-control" wire:model="um">
                                    @error('um') <span>{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="grosime" class="form-label">Grosime:</label>
                                    <input type="text" id="grosime" class="form-control" wire:model="grosime">
                                    @error('grosime') <span>{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="lungime" class="form-label">Lungime:</label>
                                    <input type="text" id="lungime" class="form-control" wire:model="lungime">
                                    @error('lungime') <span>{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="latime" class="form-label">Latime:</label>
                                    <input type="text" id="latime" class="form-control" wire:model="latime">
                                    @error('latime') <span>{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6 mb-25">
                                    <label for="pret" class="form-label il-gray fs-14 fw-500 align-center mb-10">Pret:</label>
                                    <input type="text" wire:model="pret" class="form-control is-valid ih-medium ip-light radius-xs b-light @error('pret') is-invalid @enderror" id="pret" name="pret" placeholder="pret" required>
                                    @error('zip')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                           
                            <button class="btn btn-primary px-30" type="submit">Adauga materia Prima</button>
                        </form>
                    </div>
                </div>
            </div>


            </div>
        </div>
    </div>
</div>