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
    <title>Murshidabad</title>
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
                <h3 class="display-4 text-white text-uppercase">Murshidabad</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Blog Detail</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Booking Start -->
    <!-- <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Destination</option>
                                        <option value="1">Destination 1</option>
                                        <option value="2">Destination 1</option>
                                        <option value="3">Destination 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Duration</option>
                                        <option value="1">Duration 1</option>
                                        <option value="2">Duration 1</option>
                                        <option value="3">Duration 1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Booking End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/MBD1.jpg" alt="">
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
                                <a class="text-primary text-uppercase text-decoration-none" href="">Murshidabad, West
                                    bengal</a>
                            </div>
                            <h2 class="mb-3">Explore The Historical City of Bengal</h2>
                            <p align="justify">Murshidabad is a historical city in the Indian state of West Bengal. It
                                is located on the eastern bank of the Bhagirathi River, a distributary of the Ganges. It
                                forms part of the Murshidabad district.During the 18th century, Murshidabad was a
                                prosperous city. It was the capital of the Bengal Subah in the Mughal Empire for seventy
                                years, with a jurisdiction covering modern-day Bangladesh and the Indian states of West
                                Bengal, Bihar and Orissa. It was the seat of the hereditary Nawab of Bengal and the
                                state's treasury, revenue office and judiciary. Bengal was the richest Mughal province.
                                Murshidabad was a cosmopolitan city. Its population peaked at 10,000 in the 1750s. It
                                was home to wealthy banking and merchant families from different parts of the Indian
                                subcontinent and wider Eurasia, including the Jagat Seth and Armenians.</p>
                            <h4 class="mb-3">Day-1: Hazarduari Palace Museum</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/MBD2.jpg">
                            <p align="justify">Hazarduari Palace, earlier known as the Bara Kothi, is located in the
                                campus of Kila Nizamat in Murshidabad, in the Indian state of West Bengal. It is
                                situated near the bank of river Ganges. It was built in the nineteenth century by
                                architect Duncan Macleod, under the reign of Nawab Nazim Humayun Jah of Bengal, Bihar
                                and Orissa (1824–1838).</p>
                            <h4 class="mb-3">Day-2: Katra Masjid</h4>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/MBD3.jpg">
                            <p align="justify">The Katra Masjid is a former caravanserai, mosque and the tomb of Nawab
                                Murshid Quli Khan. It was built between 1723 and 1724. It is one of the largest
                                caravanserais in the Indian subcontinent. It was built during the 18th century, when the
                                early modern Bengal Subah was a major hub of trade in Eurasia. The Katra Masjid is
                                located in the north eastern side of the city of Murshidabad, in the Indian state of
                                West Bengal. The most striking feature of the structure are the two large corner towers
                                having loopholes for musketry.</p>
                            <h4 class="mb-3">Day-3: Motijheel Park</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/MBD4.jpg">
                            <p align="justify">Motijhil (also Motijheel, literal translation: Pearl Lake), also known as
                                Company due to its association with the East India Company, is a horse-shoe shaped lake
                                in Murshidabad, West Bengal, India. It was created by Nawazish Muhammad Khan, the
                                son-in-law of Nawab Alivardi Khan. He also constructed a precious palatial palace beside
                                this lake which is called the Sang-i- dalan (literal translation:stone palace) which is
                                also known as the Motijhil Palace. It is located at the bend of this lake. It was used
                                as the residence of Nawazish and Ghaseti Begum, Nawazish's beloved wife. It is said that
                                after Nawazish died, Ghaseti Begum lived here until Nawab Siraj ud-Daulah took over the
                                palace and seized the residents' in 1756 AD.</p>
                            <h4 class="mb-3">Day-4: Kathgola Gardens</h4>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/MBD5.jpg">
                            <p align="justify">Kathgola (also known as Katgola) is a neighbourhood in the city of
                                Murshidabad which was at one time the capital of Bengal, Bihar and Orissa during the
                                reign of the Nawabs of Bengal.It is said that black roses were cultivated here but now
                                only mango trees can be seen here. The gardens cover 30 acres.Kathgola often refers to
                                the Kathgola Palace. Kathgola Gardens, also known as the Kathgola Temple, was built by
                                Lakshmipat Singh Dugar.</p>
                            <h4 class="mb-3">Day-5: Khosh Bagh</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/MBD6.jpg">
                            <p align="justify">Khushbagh (also spelled as Khoshbagh; literally "Garden of Happiness") is
                                the garden-cemetery of the Nawabs of Bengal, situated on the west bank of the Bhagirathi
                                river, about a mile from its east bank, in the Murshidabad-Jiaganj CD block in Lalbag
                                subdivision of Murshidabad district, West Bengal, India. Khushbagh hosts the graves of
                                the Nawabs of Bengal of the Afshar dynasty and their family members; while Jafarganj
                                Cemetery hosts the graves of the later Nawabs and their families, starting from Mir
                                Jafar, who belonged to the Najafi dynasty. Khushbagh is the resting place of Nawab Siraj
                                ud-Daulah, his wife Lutf-un-nisa, Nawab Alivardi Khan, and his mother, amongst others.
                            </p>
                            <h4 class="mb-3">Day-6: Char Bangla Temple</h4>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/MBD7.jpg">
                            <p align="justify">Char Bangla Temples, are located at Baranagar in the Murshidabad-Jiaganj
                                CD block in the Lalbag subdivision of Murshidabad district in the Indian state of West
                                Bengal.The temples were built by Rani Bhabani of Natore. The temples are famous for
                                their exquisite decorations based on either mythology or daily life. The tendency of the
                                Ganges to change course frequently is threatening the existence of these heritage
                                structures. The river, which earlier used to flow some distance away is now within yards
                                from the temples.</p>
                            <h4 class="mb-3">Day-7: Jahan Kosha Cannon</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/MBD8.jpg">
                            <p align="justify">Jahan Kosha Cannon (also known as the Great Gun, and literally means the
                                Destroyer of the World) is placed in the Topekhana, a quarter of mile to the south east
                                of the Katra Mosque, in the town of Murshidabad, West Bengal, India. Topekhana was the
                                Nawab's Artillery Park and the entrance gate of the old capital of Bengal, Bihar and
                                Orissa, the city of Jahangir Nagar. It is protected on the east by the Gobra Nala,
                                locally known as the Katra Jheel. Here, the Jahan Kosha Cannon is laid to rest. Before
                                being placed at its current location, it rested on a carriage with wheels and was
                                surrounded by the roots of a Peepal tree. The growth of the tree roots gradually lifted
                                the gun four feet above the ground. The wheels of the gun carriage have disappeared, but
                                the iron-work of the carriage and the trunions are still visible. The cannon is made of
                                ashtadhatu or 8 metals, namely silver, gold, lead, copper, zinc, tin, iron and mercury.
                            </p>
                            <h4 class="mb-3">Day-8: House Of Jagath Seth</h4>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/MBD9.jpg">
                            <p align="justify">The house was founded by Jain Hiranand Shah from Nagaur, Rajasthan, who
                                came to Patna in 1652. In 1707, Manikchand helped Prince Farrukhsiyar financially to
                                become the Mughal Emperor. In award, Farrukhsiyar conferred the title of Jagat Seth on
                                Manik Chand, the head of the family, meaning "banker or merchant of the world". This
                                indicates the favour the family had gained at the Mughal court.</p>
                            <h4 class="mb-3">Day-9: Nizamat Imambara</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/MBD10.jpg">
                            <p align="justify">The Nizamat Imambara is a Shia Muslim congregation hall (imambara) in
                                Murshidabad, India. It was built in 1740 AD by Nawab Siraj ud-Daulah and rebuilt in 1847
                                by Nawab Mansur Ali Khan after it was destroyed by the fires of 1842 and 1846. It is
                                frequently mentioned as the largest imambara in the world.</p>
                            <h4 class="mb-3">Day-10: Nasipur Palace</h4>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/MBD11.jpg">
                            <p align="justify">Nashipur Rajbari of the Nashipur Raj Family is situated in Nashipur next
                                to the old palace built by Raja Debi Singha. The current palace was built by Raja Kirti
                                Chandra Singha Bahadur in 1865. It was the court of the Debi Singha, who is historically
                                renowned for being the tax collector during the British Raj. He came from Panipat and
                                started as a trader.</p>
                            <h4 class="mb-3">Day-11: Tomb of Siraj-ud-Daulah</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/MBD12.jpg">
                            <p align="justify">Mirza Muhammad Siraj-ud-Daulah 1733 – 2 July 1757), commonly known as
                                Siraj-ud-Daulah or Siraj ud-Daula, was the last independent Nawab of Bengal. The end of
                                his reign marked the start of the rule of the East India Company over Bengal and later
                                almost all of the Indian subcontinent.
                            </p>
                            <a href="contact.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                    <!-- Blog Detail End -->

                    <!-- Comment List Start -->
                    <div class="bg-white" style="padding: 30px; margin-bottom: 30px;">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">3 Comments</h4>
                        <div class="media mb-4">
                            <img src="img/clients/client2.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                style="width: 45px;">
                            <div class="media-body">
                                <h6><a href="">Shirsendu Mondal</a> <small><i>23 Oct 2021</i></small></h6>
                                <p align="justify">Murshidabad is the awesome tourists place, it is located in West
                                    bengal, the distance from kolkata to murshidabad is 210km.i live in murshidabad, you
                                    can come here in train and bus or rental car, the top attractions in murshidabad is
                                    hazarduari palace, katra mosque, katgola bagan, motijheel park, nasipur rajbari etc,
                                </p>
                                <button class="btn btn-sm btn-outline-primary">Reply</button>
                            </div>
                        </div>
                        <div class="media">
                            <img src="img/clients/Sibnarayan.jpeg" alt="Image" class="img-fluid mr-3 mt-1"
                                style="width: 45px;">
                            <div class="media-body">
                                <h6><a href="">Sibnarayan Das</a> <small><i>01 Jan 2045</i></small></h6>
                                <p align="justify">Today I would like to share this opportunity with you all that Murshidabad is truly a place to visit. Due to one of best college friend was residing there, I went there on special request of him. We reached there in month of Aug. It is about 210 kms from kolkata, approach by Train, Bus, & Air is quite easily accessible. It is well connected with Netaji International Airport.</p>
                                <button class="btn btn-sm btn-outline-primary">Reply</button>
                                <div class="media mt-4">
                                    <img src="img/clients/client1.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                        style="width: 45px;">
                                    <div class="media-body">
                                        <h6><a href="">Ruhan Debnath</a> <small><i>01 Jan 2045</i></small></h6>
                                        <p align="justify">The prime attraction of Murshidabad is Nawab Siraj-ud-daullah's, Hazarduari Palace .A place said to have 1000 doors, the seat of power of the last free Nawabs of Bengal.There are also numerous paintings and manuscripts in the museum.The Sword of Siraj-ud-daullah, the weapons used in battle of Plassey.A must visit for history lovers.</p>
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
                        <p>Conset elitr erat vero dolor ipsum et diam, eos dolor lorem, ipsum sit no ut est ipsum erat
                            kasd amet elitr</p>
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