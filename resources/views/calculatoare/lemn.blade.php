@section('title', __('Calculator Lemn'))
@section('description', __('Calculator Lemn'))
@extends('layout.app')
@section('content')
 
    <main>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        
                                    <h6>Calcualtor Produs confectionat din lemn </h6>
                            
                                    <div class="card-body py-md-30">
                                        <form>
                                            <div class="row">
                                            <div class="form-group select-px-15">
                                                    <label for="materie-prima" class="color-dark fs-14 fw-500 align-center">Alege tipul de lemn</label>
                                                    <select wire:model="materiePrima" class="form-control px-15" id="materie-prima">
                                                        <option value="">-- Alege tipul lemnului --</option>
                                                        
                                                            <option></option>
                                                        
                                                    </select>
                                                </div>


                                                <div class="form-group">
                                                    <label class="color-dark fs-14 fw-500 align-center">Configureaza dimensiunile:</label>
                                                </div>

                                                <div class="form-group col-md-6 mb-25">
                                                    <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Lungime">
                                                </div>
                                                <div class="form-group col-md-6 mb-25">
                                                    <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Latime">
                                                </div>


                                                <div class="form-group">
                                                    <label class="color-dark fs-14 fw-500 align-center">Alege serviciile aditionale:</label>
                                                </div>

                                                <div class="mb-3 col-md-4 ">
                                                        <div class="checkbox-theme-default custom-checkbox  ">
                                                                <input class="checkbox" type="checkbox" id="check-un1">
                                                                <label for="check-un1">
                                                                    <span class="checkbox-text">
                                                                        Debitare
                                                                    </span>
                                                                </label>
                                                        </div>
                                                </div>    

                                                <div class="mb-3 col-md-4 ">
                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox" id="check-un2" checked>
                                                        <label for="check-un2">
                                                        <span class="checkbox-text">
                                                                Gravare
                                                        </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                                <div class="mb-3 col-md-4 ">
                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox" id="check-un3" checked>
                                                        <label for="check-un3">
                                                        <span class="checkbox-text">
                                                                Vopsire
                                                        </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                
                                                
                                                <div class="form-group">
                                                    <label for="formGroupExampleInput" class="color-dark fs-14 fw-500 align-center">Name</label>
                                                    <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" id="formGroupExampleInput" placeholder="Duran Clayton">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="layout-button mt-0">
                                                        <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-20 ">cancel</button>
                                                        <button type="button" class="btn btn-primary btn-default btn-squared px-30">save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                        
                    </div>
                </div>
            </div>
        </div>


        
    </main>
@endsection