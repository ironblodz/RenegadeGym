@extends ('master')

@section ('Title','Home')

@section ('content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Renegades Gym</title>

        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/indexricardo.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
                           
                            
                   
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Bem vindo ao nosso website</h1>
                                <p class="lead fw-normal text-white-50 mb-4">Aqui poderas encontrar diversos planos de treino bem como acompanhamento e vários produtos na nossa loja.</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-danger btn-lg px-4 me-sm-3" href="#features">Loja</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="#!">Planos de treino</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="./img/logo.png" alt="..." /></div>
                    </div>
                </div>
            </header>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Começe a sua aventura conosco</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-danger bg-gradient text-white rounded-3 mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z"/>
</svg></i></div>
                                    <h2 class="h5">Planos de treino adaptados</h2>
                                    <p class="mb-0">Na nossa página de planos de treino irão encontrar planos adapatados para qualquer tipo de treino. </p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-danger bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                                    <h2 class="h5">Incrição gratuita</h2>
                                    <p class="mb-0">Este projeto tem como objetivo não cobrar inscrição nem mensalidades, incentivando assim as pessoas a aderirem.</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-danger bg-gradient text-white rounded-3 mb-3"><i class="bi bi-minecart-loaded"></i></div>
                                    <h2 class="h5">Produtos próprios na nossa loja</h2>
                                    <p class="mb-0">Todos os produtos da nossa loja são exclusivos e limitados.</p>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-danger bg-gradient text-white rounded-3 mb-3"><i class="bi bi-award"></i></div>
                                    <h2 class="h5">Acompanhamento profissional adequado</h2>
                                    <p class="mb-0">Durante as aulas irão ter acompanhamento feito por profissionais.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">"Não existe um treino milagroso, nem uma dieta mágica, o que existe é o foco, disciplina, perseverança e nunca desistir"</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    
                                    <div class="fw-bold">
                                    <span class="fw-bold text-primary mx-1">/</span>
                                        Equipa Renegade
                                        <span class="fw-bold text-primary mx-1">/</span>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Destaques do Blog</h2>
                                <p class="lead fw-normal text-muted mb-5">Aqui encontras alguns posts do nosso blog.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="./img/2.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-danger bg-gradient rounded-pill mb-2">Blog</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Concurso de abdominais</h5></a>
                                    <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">Kelly Rowan</div>
                                                <div class="text-muted">March 12, 2021 &middot;</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="./img/3.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-danger bg-gradient rounded-pill mb-2">Blog</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Treinos</h5></a>
                                    <p class="card-text mb-0">This text is a bit longer to illustrate the adaptive height of each card. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">Josiah Barclay</div>
                                                <div class="text-muted">March 23, 2021 &middot;</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="./img/grupo.jfif" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-danger bg-gradient rounded-pill mb-2">Blog</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Venha participar das nossas aulas em grupo</h5></a>
                                    <p class="card-text mb-0">Some more quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">Evelyn Martinez</div>
                                                <div class="text-muted">April 2, 2021 &middot; </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Call to action-->
                   
            </section>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
@endsection