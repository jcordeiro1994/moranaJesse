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
                                                    <a class="menu-link active" href="/">
                                                        <span class="menu-title">Venda</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1 ">
                                                <div class="menu-item">
                                                    <a class="menu-link" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                                        <span class="menu-title">Carrinho</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                                                    <span class="menu-link py-3">
                                                        <span class="menu-title">Cadastro</span>
                                                        <span class="menu-arrow d-lg-none"></span>
                                                    </span>
                                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                                    <div class="menu-item">
                                                        <a class="menu-link py-3" href="vprodutos">
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
            <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog mw-650px">
                    <div class="modal-content">
                        <div class="modal-header pb-0 border-0 justify-content-end">
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                            </div>
                        </div>
                        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                            <div class="text-center mb-13">
                                <h1 class="mb-3">Carrinho</h1>
                                <div class="text-muted fw-bold fs-5">Produtos no carrinho</div>
                            </div>
                            <div class="mb-15">
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <?php $subtotal = 0; ?>
                                    @if( session()->exists('carrinho') )
                                        @foreach ( session('carrinho') as $key => $dados )
                                            @foreach ( $dados as $keyItem => $value )
                                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-6">
                                                            <div class="fs-5 fw-bolder text-dark">{{ $value['nome'] }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="text-end">
                                                            <?php $subtotal += $value['valor'] * $value['qtd']; ?>
                                                            <div class="fs-5 fw-bolder text-dark">R$ {{ number_format($value['valor'] * $value['qtd'], 2)}}</div>
                                                            <div class="fs-7 text-muted">Qtd {{ $value['qtd']}} </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-6">
                                                        <div class="fw-bold text-muted">SUBTOTAL</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="text-end">
                                                        <div class="fs-5 fw-bolder text-dark">R$ @if( isset($subtotal)) {{ number_format($subtotal, 2) }} @endif</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <br>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-lg btn-primary btn-fina" data-kt-stepper-action="next">Finalizar </button>
                                        </div>
                                    @else
                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <div class="d-flex align-items-center">
                                                <div class="ms-6">
                                                    <div class="fs-5 fw-bolder text-dark">Carrinho vazio</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                <div class="content flex-row-fluid" id="kt_content">
                    <div id="alert" class="alert alert-success align-items-center p-5 mb-10 " style="display: none;">
                        <div class="d-flex flex-column">
                            <h4 class="mb-1 text-success">Item adicionado no carrinho!</h4>
                        </div>
                    </div>
                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                        @foreach($data as $item)
                            <div class="col-sm-6 col-xxl-3">
                                <div class="card card-flush h-xl-100">
                                    <div class="card-body text-center pb-5">
                                        <!--<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('/media/stock/mini-argola-com-zirconia.png') }}">-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded mb-7" style="height: 266px;background-image:url('{{asset('/media/stock/mini-argola-com-zirconia.png')}}')"></div>
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="bi bi-eye-fill fs-2x text-white"></i>
                                        </div>
                                        <!--</a>-->
                                        <div class="mb-6">
                                            <span class="text-gray-400 fs-7 fw-bolder me-2 d-block lh-1 pb-1">{{ $item->nome }}</span>
                                            <span class="fw-bolder text-gray-600 fs-4 pb-5">{{ $item->valor }}</span>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex flex-stack pt-0">
                                        <button type="button" class="btn btn-primary btn-add" data-sku="{{ $item->sku }}" >
                                            Adicionar no carrinho
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="modal fade" id="kt_modal_offer_a_deal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered mw-1000px">
                    <div class="modal-content">
                        <div class="modal-body scroll-y m-5">
                            <div class="stepper stepper-links d-flex flex-column" id="kt_modal_offer_a_deal_stepper">
                                <div class="current" data-kt-stepper-element="content">
                                    <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                        <div class="modal-header pb-0 border-0 justify-content-end">
                                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Pedido #14534</h2>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                    <thead>
                                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                        <th class="min-w-175px">Produto</th>
                                                        <th class="min-w-100px text-end">SKU</th>
                                                        <th class="min-w-70px text-end">Quantidade</th>
                                                        <th class="min-w-100px text-end">Unidade Preço</th>
                                                        <th class="min-w-100px text-end">Total</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="fw-bold text-gray-600">

                                                    @if( session()->exists('carrinho') )
                                                        <?php $subtotal = 0; ?>
                                                        @foreach ( session('carrinho') as $key => $dados )

                                                            @foreach ( $dados as $keyItem => $value )
                                                                    <?php $subtotal += $value['valor'] * $value['qtd']; ?>
                                                                <tr>
                                                                    <td> {{ $value['nome'] }}</td>
                                                                    <td class="text-end">{{ $value['sku'] }}</td>
                                                                    <td class="text-end">{{ $value['qtd'] }}</td>
                                                                    <td class="text-end">R$ {{ number_format($value['valor'],2) }}</td>
                                                                    <td class="text-end">R$ {{ number_format($value['valor'] * $value['qtd'],2) }}</td>
                                                                </tr>
                                                            @endforeach
                                                            <tr>
                                                                <td colspan="4" class="fs-3 text-dark text-end">Subtotal</td>
                                                                <td class="text-dark fs-3 fw-boldest text-end">R$ @if( isset($subtotal)) {{ number_format($subtotal, 2) }} @endif</td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                    </tbody>
                                                </table>
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
</div>
<script src="{{ asset('/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('/plugins/global/plugins.bundle.js') }}"></script>
<script type="text/javascript">

    $('.btn-add').on('click', function(e){

        var sku = $(e.target).attr("data-sku");

        if ( typeof sku != "undefined") {
            var url = '{!! url('/') !!}'+'/cprodutos/'+sku;

            $.ajax({
                url: url,
                type: 'get',
                dataType: 'text',
                processData: false,
                contentType: false,
                cache: false,
                success: (dados) => {
                    $("#alert").show();
                },
                'error' : function(request,error) {}
            });

            setTimeout(function () {
                location.reload();
            }, 1000);






        }
    });

    $(".btn-fina").on("click", function(e){
        e.preventDefault();
        $("#kt_modal_view_users").modal('hide').on('hidden.bs.modal', function(){
            $("#kt_modal_offer_a_deal").modal('show');

            var url = '{!! url('/') !!}'+'/fproduto';

            $.ajax({
                url: url,
                type: 'get',
                dataType: 'text',
                processData: false,
                contentType: false,
                cache: false,
                success: (dados) => {},
                'error' : function(request,error) {}
            });
        })
    });

    $('#kt_modal_offer_a_deal').on('hide.bs.modal', function (event) {
        location.reload();
    })



</script>
</body>
</html>
