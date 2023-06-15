<!DOCTYPE html>
<html lang="en">
<head>
    <base href="">
    <title></title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="shortcut icon" href="" />
    <link href="{{ asset('/css/style.bundle.css') }}" rel="stylesheet" />
</head>
<body id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed">
<div class="d-flex flex-column flex-root">
    <div class="page d-flex flex-row flex-column-fluid">
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                <div class="header-top d-flex align-items-stretch flex-grow-1">
                    <div class="d-flex container-xxl align-items-stretch">
                        <div class="d-flex align-items-center align-items-lg-stretch me-5 flex-row-fluid">
                            <button class="d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px ms-n2 me-2" id="kt_header_navs_toggle">
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
                                        <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="header-navs d-flex align-items-stretch flex-stack h-lg-70px w-100 py-5 py-lg-0" id="kt_header_navs" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_navs_toggle" data-kt-swapper="true" data-kt-swapper-mode="append" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header'}">
                    <div class="d-lg-flex container-xxl w-100">
                        <div class="d-lg-flex flex-column justify-content-lg-center w-100" id="kt_header_navs_wrapper">
                            <div class="tab-content" data-kt-scroll="true" data-kt-scroll-activate="{default: true, lg: false}" data-kt-scroll-height="auto" data-kt-scroll-offset="70px">
                                <div class="tab-pane fade active show" id="kt_header_navs_tab_1">
                                    <div class="header-menu flex-column align-items-stretch flex-lg-row">
                                        <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true">
                                            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1 ">
                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{ url('/') }}">
                                                        <span class="menu-title">Venda</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                                                <span class="menu-link py-3 active">
                                                    <span class="menu-title">Cadastro</span>
                                                    <span class="menu-arrow d-lg-none"></span>
                                                </span>
                                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                                    <div class="menu-item">
                                                        <a class="menu-link py-3 active" href="{{ url('vprodutos') }}">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">Produto</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                <div class="content flex-row-fluid" id="kt_content">
                    <div class="card card-flush h-lg-100" id="kt_contacts_main">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Adicionar Produto</h2>
                            </div>
                            <div class="card-toolbar">
                                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                    <a href="{{ url('vprodutos') }}" class="btn btn-primary" >
                                   <span class="svg-icon svg-icon-muted svg-icon-2">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor"/>
                                            <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor"/>
                                        </svg>
                                   </span>
                                        Voltar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            <form action="{{ Request::segment(1)}}" method="POST">
                                <input type="hidden" class="form-control form-control-solid" name="skuhidden" value="{{$produto->sku}}" />
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Nome</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""></i>
                                            </label>
                                            <input type="text" class="form-control form-control-solid" name="nome" required="required" value="{{$produto->nome}}" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">SKU</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""></i>
                                            </label>
                                            <input type="number" class="form-control form-control-solid" name="sku"  required="required" value="{{$produto->sku}}" />
                                        </div>
                                    </div>
                                    <div class="ccol-12 col-sm-1">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Quantidade</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""></i>
                                            </label>
                                            <input type="number" class="form-control form-control-solid" name="quantidade" required="required" value="{{$produto->quantidade}}" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-2">
                                        <div class="fv-row mb-7">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Tipo</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""></i>
                                            </label>
                                            <input type="text" class="form-control form-control-solid" name="tipo" required="required" value="{{$produto->tipo}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12">
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span class="required">Descrição</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""></i>
                                        </label>
                                        <input type="text" class="form-control form-control-solid" name="descricao" required="required" value="{{$produto->descricao}}" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span>Valor</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""></i>
                                        </label>
                                        <input type="text" class="form-control form-control-solid" name="valor" required="required" value="{{$produto->valor}}" />
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span >Tamanho</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""></i>
                                        </label>
                                        <input type="text" class="form-control form-control-solid" name="tamanho" required="required" value="{{$produto->tamanho}}" />
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span >Banho</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""></i>
                                        </label>
                                        <input type="text" class="form-control form-control-solid" name="banho" required="required" value="{{$produto->banho}}" />
                                    </div>
                                </div>
                                <br>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary submit-btn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('/plugins/global/plugins.bundle.js') }}"></script>
</body>
</html>
