<?php
    session_start();

    if (isset($_SESSION["user_id"])) {
    
        $mysqli = require __DIR__ . "/database.php";
        
        $sql = "SELECT * FROM user
                WHERE id = {$_SESSION["user_id"]}";
                
        $result = $mysqli->query($sql);
        
        $user = $result->fetch_assoc();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Malda</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="helloIndia" name="keywords">
    <meta content="By Quintet Coders" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>quintetcoder05@gmail.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+91 7865981142</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="https://www.twitter.com">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="https://www.linkedin.com">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="https://www.instagram.com">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="https://www.youtube.com">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


   <!-- Navbar Start -->
   <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                <h1 class="m-0 text-primary"><span class="text-dark">hello</span>INDIA</h1>Tour and Travels
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Services</a>
                        <a href="package.php" class="nav-item nav-link">Tour Packages</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <!-- PHP code here -->
                        
                        <?php if (isset($user)): ?>
                            <a class="nav-item nav-link"><?= htmlspecialchars($user["name"])?></a>
                            <a href="signup/logout.php" class="nav-item nav-link">Log out</a>
                        <?php else: ?>
                            <a href="signup.php" class="nav-item nav-link">Register</a>
                            <a href="signin.php" class="nav-item nav-link">Sign in</a>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Malda</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Blog Detail</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img\packages img\malda.jpg" alt="">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">20</h6>
                                    <small class="text-white text-uppercase">July</small>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <a class="text-primary text-uppercase text-decoration-none" href=""></a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Malda, West
                                    bengal</a>
                            </div>
                            <h2 class="mb-3">Mesmerizing Historical Places </h2>
                            <p align="justify">Malda district, also spelt Maldah or Maldaha (Bengali: [malda], [maldah],
                                often [maldoho], is a district in West Bengal, India. It lies 347 km (215 miles) north
                                of Kolkata, the capital of West Bengal. Mango, jute and silk are the most notable
                                products of this district. The special variety of mango, Fazli, produced in this region
                                is popularly known by the name of the district and is exported across the world and is
                                internationally acclaimed. The folk culture of gombhira is a feature of the district,
                                being a unique way of representation of joy and sorrow in daily life of the common
                                people, as well as the unique medium of presentation on national and international
                                matters. According to the National Investigation Agency Malda is believed to be a hub of
                                a fake currency racket. It is reported that 90 percent of the fake currency that enters
                                India originates in Malda.</p>
                            <h4 class="mb-3">Day-1: Dakhil Darwaza</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/MAL1.jpg">
                            <p align="justify">Dakhil Darwaza literally an entrance gate, (Ar. dakhil, Per. darwaza), is
                                the largest structure of its kind in the architectural history of Sultanate Bengal. It
                                was the main entrance to the citadel of lakhnauti, the Muslim name of gaur (per. Gawr).
                                The gateway was the most solid and most elegant entrance portal ever erected in Bengal.
                            </p>
                            <h4 class="mb-3">Day-2: Gour</h4>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/MAL2.jpg">
                            <p align="justify">The history of Malda can be traced back to the medieval periods and
                                centres around the cities of Gour and Pandua. Gour or Gaur being an ancient city, its
                                mention can be found even in the Hindu Puranic texts. The historical records of the
                                city, however, can be traced from 500 BC from the time of the Mauryan Dynasty. From the
                                period of Mauryas, Gour and the region of Pandua, then known as Pundrabardhana came
                                under the reign of the Guptas. They were succeeded by Sasanka. He was the king of
                                Karnasubarna as well as the king of Gour in the beginning of 7th Century AD and ruled
                                for almost 3 decades. From the middle of the 8th century to 11th century the Pala
                                dynasty ruled Bengal. They were great followers and propagators of Buddhism and the
                                religion flourished under their reign. The Pal dynasty yielded to the Sen Dynasty who
                                was ardent followers of Hinduism. Unlike the Pals, the Sens did not encourage the
                                propagation of the other religions. During the reign of Lakshman Sen, Gour was known as
                                Lakshmanbati. The Sen Kings ruled Bengal till Bakhtiyar Khilji conquered Bengal in 1204
                                AD.</p>
                            <h4 class="mb-3">Day-3: Firoz Minar</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/MAL3.jpg">
                            <p align="justify">Firoz Minar is a five-storeyed tower situated at Gaur, West Bengal,
                                India. It was built by Sultan Saifuddin Firuz Shah of the Habshi dynasty between 1485
                                and 1489. It was built in the Tughlaqi style of architecture. Although the first three
                                storeys are dodecagonal, the final two are circular in shape.The minar was built by
                                Sultan Saifuddin Firuz Shah of the Habshi dynasty. The construction started in 1485 and
                                ended in 1489. Colloquially, the tower is referred as Pir Asa Mandir and Chiragh Dani.
                            </p>
                            <h4 class="mb-3">Day-4: Chamkati Masjid Chika Mosque</h4>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/MAL4.jpg">
                            <p align="justify">The masjid was built in 1530 by Sultan Nasiruddin Nusrat Shah. Chika
                                Mosque was built under the patronage of Sultan Yusuf Shah in 1475. The mosque was named
                                Chika because it was a guarded refuge of bats, locally called Chikas. The mosque
                                features a single-domed edifice, which has almost been turned into ruins.</p>
                            <h4 class="mb-3">Day-5: Adina Dear Park</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/MAL5.jpg">
                            <p align="justify">Adina Deer Park is located in Malda district of West Bengal and lies 21
                                kilometres from the city of Malda. The park is an important breeding centre for cheetal
                                or spotted deer in the state and sometimes they overflow in number. The park also has a
                                nilgai population. However, in spite of its name, the deer park is a small fraction of
                                the area and protected within an orchard plantation. The woods are rich in butterfly and
                                birds, specially Asian openbill, paradise flycatcher, prinia, oriole, fish eagle, etc.
                            </p>
                            <h4 class="mb-3">Day-6: Adina Mosque</h4>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/MAL6.jpg">
                            <p align="justify">The Adina Mosque is a former mosque in Malda District, West Bengal,
                                India. It was the largest such structure in the Indian subcontinent and was built during
                                the Bengal Sultanate as a royal mosque by Sikandar Shah, who is also buried inside. The
                                mosque is situated in Pandua, a former royal capital.The vast architecture is associated
                                with the hypostyle of the Umayyad Mosque, which was used during the introduction of
                                Islam in new areas. The early Bengal Sultanate harbored imperial ambitions after having
                                defeated the Delhi Sultanate twice in 1353 and 1359. The Adina Mosque was commissioned
                                in 1373. Its construction reused materials from pre-Islamic Hindu and Buddhist
                                structures.</p>
                            <h4 class="mb-3">Day-7: Malda Museum</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/MAL7.jpg">
                            <p align="justify">Malda Museum is an archaeological museum under the West Bengal
                                Directorate of Archaeology. The museum was established in 1937 and is situated on
                                Subhankar Bandh Road of English Bazar in Malda district of West Bengal, India.The museum
                                took off initially as a collection of historic artifacts found within the district and
                                was set up within the premises of the Malda District Library. It was later shifted to a
                                new adjacent building of its own and granted the status of a museum in its own right
                                under the State Directorate of Archaeology.</p>
                            <h4 class="mb-3">Day-8: Baroduari mosque</h4>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/MAL8.jpg">
                            <p align="justify">Baroduari mosque is half a kilometre to the south of Ramkeli. A gigantic
                                rectangular structure of brick and stone, this mosque is the largest monument in Gour.
                                Though the name means Twelve Doors, this monument actually has eleven. The construction
                                of this huge mosque, measuring 50.4 m. by 22.8 m., and 12 m. in height, was started by
                                Allauddin Hussein Shah and was completed in 1526 by his son Nasiruddin Nusrat Shah. The
                                Indo-Arabic style of architecture and the ornamental stone carvings make Baroduari a
                                special attraction for tourists.</p>
                            <h4 class="mb-3">Day-9: Jagjibanpur</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/MAl9.jpg">
                            <p align="justify">Jagajjibanpur or Jagajivanpur is an archaeological site in Habibpur block
                                of Malda district in West Bengal state in eastern India. This site is located at a
                                distance of 41 km east from English Bazar town. The most significant findings from this
                                site include a copper-plate inscription of Pala emperor Mahendrapaladeva and the
                                structural remains of a 9th-century Buddhist Vihara: Nandadirghika-Udranga Mahavihara.
                            </p>
                            <a href="contact.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                    <!-- Blog Detail End -->

                    <!-- Comment List Start -->
                    <div class="bg-white" style="padding: 30px; margin-bottom: 30px;">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">3 Comments</h4>
                        <div class="media mb-4">
                            <img src="img/clients/client1.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a href="">Ruhan Debnath</a> <small><i>21 Sep 2011</i></small></h6>
                                <p align="justify">A historical place situated at North-Bengal can be calles gate way of North Bengal is famous for so many historical places like Gour and Adina and so on.

                                    It is just 6 hours of journey from my locality in train and for communication it is well communicated that its Bus route is also affordable in Volvo Bus started from Siliguri and Coochbehar.</p>
                                <button class="btn btn-sm btn-outline-primary">Reply</button>
                            </div>
                        </div>
                        <div class="media">
                            <img src="img/clients/client2.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a href="">Shirsendu Mondal</a> <small><i>25 Dec 2016</i></small></h6>
                                <p align="justify">There are So many Historical temple.beside Adina Deer park is best Deer conservation.conservation. Gol Ghar, Firoz Minar is also famous for its historical background of Mughal Empire and Sulatana Empirer.</p>
                                <button class="btn btn-sm btn-outline-primary">Reply</button>
                                <div class="media mt-4">
                                    <img src="img/clients/Sibnarayan.jpeg" alt="Image" class="img-fluid mr-3 mt-1"
                                        style="width: 45px;">
                                    <div class="media-body">
                                        <h6><a href="">Sibnarayan Das</a> <small><i>16 Nov 2021</i></small></h6>
                                        <p align="justify">Beside History it is famous for World’s best mango.it Export mangoes in various country and there livelihood is depended on this mango cultivation.it supplies mangoes all over west bengal. It got so many prizes in many national competition and international ceremonies.</p>
                                        <button class="btn btn-sm btn-outline-primary">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="bg-white mb-3" style="padding: 30px;">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Leave a comment</h4>
                        <form>
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Leave a comment"
                                    class="btn btn-primary font-weight-semi-bold py-2 px-3">
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <img src="img/services img/diptesh.jpg" class="img-fluid mx-auto mb-3" style="width: 100px;">
                        <h3 class="text-primary mb-3">Diptesh Biswas</h3>
                        <p align="justify">We are here to provide you best experience of travelling.Thank you.</p>
                        <div class="d-flex justify-content-center">
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Category List -->
                    <!-- <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Web
                                        Design</a>
                                    <span class="badge badge-primary badge-pill">150</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Web
                                        Development</a>
                                    <span class="badge badge-primary badge-pill">131</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Online Marketing</a>
                                    <span class="badge badge-primary badge-pill">78</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Keyword Research</a>
                                    <span class="badge badge-primary badge-pill">56</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Email Marketing</a>
                                    <span class="badge badge-primary badge-pill">98</span>
                                </li>
                            </ul>
                        </div>
                    </div> -->

                    <!-- Recent Post -->
                    <!-- <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h4>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                    </div> -->
                    <h3 class="text-primary mb-3">Please take a second to let us know how was your experience</h3>
                    <link rel="stylesheet" type="text/css" href="rate.css">
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                    <img src="img/rating.jpg" alt="" width="300px" height="200px">

                    <!-- Tag Cloud -->
                    <!-- <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h4>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-light m-1">Design</a>
                            <a href="" class="btn btn-light m-1">Development</a>
                            <a href="" class="btn btn-light m-1">Marketing</a>
                            <a href="" class="btn btn-light m-1">SEO</a>
                            <a href="" class="btn btn-light m-1">Writing</a>
                            <a href="" class="btn btn-light m-1">Consulting</a>
                        </div> -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
   <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">hello</span>INDIA</h1>
                </a>
                <p>The journey of a thousand miles begins with a single step.</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="packages.php"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                    <a class="text-white-50 mb-2" href="service.php"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="packages.php"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="guides.php"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                    
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="packages.php"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                    <a class="text-white-50 mb-2" href="services.php"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="packages.php"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="guides.php"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                    
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Barasat , Kolkat , West Bengal</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+91 7865981142</p>
                <p><i class="fa fa-envelope mr-2"></i>quintetcoder05@gmail.com </p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Designed by <a href="https://Quintet Coder.com">Quintet Coder</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>