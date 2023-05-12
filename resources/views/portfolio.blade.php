@extends('master')
@section('title', 'portfolio')
@section('content')

<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
            <h3 class="section-subheading text-muted">Some of my projects</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1 My garage-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">My garage</div>
                        <div class="portfolio-caption-subheading text-muted">First project - PHP</div>
                        <div class="portfolio-caption-subheading text-muted">[ 'PHP', 'Twig', 'HTML5', 'CSS 3', 'MySql']</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 2 Students-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/2.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Students</div>
                        <div class="portfolio-caption-subheading text-muted">Second project - Laravel</div>
                        <div class="portfolio-caption-subheading text-muted">['laravel', 'bootstrap', 'blade', 'HTML5', 'CSS 3' ] <br>[ 'MySql' ]</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/3.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Beer store - React</div>
                        <div class="portfolio-caption-subheading text-muted">Third project - REACT</div>
                        <div class="portfolio-caption-subheading text-muted">[ 'REACT', 'HTML5', 'CSS 3', 'MySql', 'PHP', 'JavaScript(ES-6)' ]</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <!-- Portfolio item 4-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/4.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Beer store - Angular(admin)</div>
                        <div class="portfolio-caption-subheading text-muted">Fourth project - ANGULAR</div>
                        <div class="portfolio-caption-subheading text-muted">[ 'ANGULAR.io', 'materialdesing', 'HTML5', 'CSS 3'] <br> ['PHP', 'MySql' , 'JavaScript(ES-6)']</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <!-- Portfolio item 5-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/5.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Wine - mobile application only. 45% done</div>
                        <div class="portfolio-caption-subheading text-muted">Fifth project - Vue.js</div>
                        <div class="portfolio-caption-subheading text-muted">Team work: Alexandru Candu, Gabriela Thomas, Anna Sonnova, Kamba Balanganayi </div>
                        <div class="portfolio-caption-subheading text-muted">[ 'VUE.js', Laravel, 'HTML5', 'CSS 3', 'PHP', 'MySql', 'JavaScript(ES-6)']</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- Portfolio item 6-->
                <div class="portfolio-item">
                    <!-- <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6"> -->
                    <a class="portfolio-link" data-bs-toggle="" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/6.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Coming soon...</div>
                        <div class="portfolio-caption-subheading text-muted">Sixth project</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- Portfolio Modals-->
<!-- Portfolio item 1 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Project Web 1 (my first project)</h2>
                            <p class="item-intro text-muted">Using: [ 'PHP', 'Twig', 'HTML5', 'CSS 3', 'MySql']</p>
                            <a href="https://garage.alexandrucandu.ca/" target="blank">
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                            </a>
                            <p>You can sign up. Add your personal cars or cars from other web site, using the URL and then compare which is better. This website was made using PHP', 'Twig', 'HTML', 'CSS', 'MySql'. I am currently working on this project, So there's still a lot of work to do. </p>
                            <p>Log in, Sign up view is not finished yet. Don't judge too harshly. Very little time in college.</p>
                            <!-- <ul class="list-inline">
                                <li>
                                    <strong>Client:</strong>
                                    Threads
                                </li>
                                <li>
                                    <strong>Category:</strong>
                                    Illustration
                                </li>
                            </ul> -->
                            <a href="https://garage.alexandrucandu.ca/" target="blank">
                                <button class="btn  btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    Go to Website
                                </button>
                            </a>
                            <a href="https://github.com/TITAN-85/enchere_a_voiture" target="blank">
                                <button class="btn  btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    Go to Github
                                </button>
                            </a>
                            <button class="btn btn-secondary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-xmark me-1"></i>
                                Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 2 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Students (my first project)</h2>
                            <p class="item-intro text-muted">Using: [ 'laravel', 'bootstrap', 'blade', 'HTML5', 'CSS 3', 'MySql']</p>
                            <a href="https://students.alexandrucandu.ca/" target="blank">
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                            </a>
                            <p> You can sign up. Create students, use forum, add files (pdf, jpg, doc ...), download files, open window in pdf...</p>
                            <ul class="list-inline">
                                <!-- <li>
                                    <strong>Client:</strong>
                                    Explore
                                </li>
                                <li>
                                    <strong>Category:</strong>
                                    Graphic Design
                                </li> -->
                            </ul>
                            <a href="https://students.alexandrucandu.ca/" target="blank">
                                <button class="btn  btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    Go to Website
                                </button>
                            </a>
                            <a href="https://github.com/TITAN-85/Students" target="blank">
                                <button class="btn  btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    Go to Github
                                </button>
                            </a>
                            <button class="btn btn btn-secondary  btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-xmark me-1"></i>
                                Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 3 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Beer store - REACT (Third project)</h2>
                            <p class="item-intro text-muted">[ 'REACT', 'HTML5', 'CSS 3', 'MySql', 'PHP', 'JavaScript(ES-6)']</p>
                            <a href="https://beer.alexandrucandu.ca/" target="blank">
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                            </a>
                            <p>In this website I use fetch to get json files from db. We can add comment, to give a note... </p>
                            <p>I was using different methods of using fetch: classes(state, props, componentDidMount...) <br> and fonctions (useState, useEffect...)</p>
                            <!-- <ul class="list-inline">
                                <li>
                                    <strong>Client:</strong>
                                    Finish
                                </li>
                                <li>
                                    <strong>Category:</strong>
                                    Identity
                                </li>
                            </ul> -->
                            <a href="https://beer.alexandrucandu.ca/" target="blank">
                                <button class="btn  btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    Go to Website
                                </button>
                            </a>
                            <a href="https://github.com/TITAN-85/REACT" target="blank">
                                <button class="btn  btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    Go to Github
                                </button>
                            </a>
                            <button class="btn btn btn-secondary  btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-xmark me-1"></i>
                                Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 4 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Beer store - ANGULAR (Fourth project)</h2>
                            <p class="item-intro text-muted">[ 'ANGULAR.io', 'materialdesing', 'HTML5', 'CSS 3', 'JavaScript(ES-6)']</p>
                            <a href="https://beer-admin.alexandrucandu.ca" target="blank">
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                            </a>
                            <p>In this application I use RxJs to get json files from db. We can add a beer, delete a beer, modify a beer</p>
                            <p>I was using reactive programming to provides an implementation of the Observable</p>
                            <!-- <ul class="list-inline">
                                <li>
                                    <strong>Client:</strong>
                                    Lines
                                </li>
                                <li>
                                    <strong>Category:</strong>
                                    Branding
                                </li>
                            </ul> -->
                            <a href="https://beer-admin.alexandrucandu.ca" target="blank">
                                <button class="btn  btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    Go to Website
                                </button>
                            </a>
                            <a href="https://github.com/TITAN-85/ANGULAR" target="blank">
                                <button class="btn  btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    Go to Github
                                </button>
                            </a>
                            <button class="btn btn btn-secondary  btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-xmark me-1"></i>
                                Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 5 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Team work - my wine (20% done)</h2>
                            <p class="item-intro text-muted">[ 'VUE.js', Laravel, 'HTML5', 'CSS 3', 'PHP', 'MySql', 'JavaScript(ES-6)']</p>
                            <a href="https://vinoagak.alexandrucandu.ca/" target="blank">
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                            </a>
                            <p>We are creating an application in which you can add wine from any other sites using curl. After that we add them to our database and use axios to add one of each to our cellar. </p>
                            <p>We just started this project so we have more lots of work to do.</p>
                            <h5>People working on it</h5>
                            <ul class="list-inline">
                                <li>
                                    <strong>Good man:</strong>
                                    Alexandru Candu
                                </li>
                                <li>
                                    <strong>The confident woman:</strong>
                                    Gabriela Thomas 
                                </li>
                                <li>
                                    <strong>Strong woman:</strong>
                                    Anna Sonnova
                                </li>
                                <li>
                                    <strong>Clever man:</strong>
                                    Kamba Balanganayi
                                </li>
                            </ul>
                            <a href="https://vinoagak.alexandrucandu.ca/" target="blank">
                                <button class="btn  btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    Go to Website
                                </button>
                            </a>
                            <a href="https://github.com/TITAN-85/projet_web2" target="blank">
                                <button class="btn  btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    Go to Github
                                </button>
                            </a>
                            <button class="btn btn btn-secondary  btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-xmark me-1"></i>
                                Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 6 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Client:</strong>
                                    Window
                                </li>
                                <li>
                                    <strong>Category:</strong>
                                    Photography
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-xmark me-1"></i>
                                Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection