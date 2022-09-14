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
    <title>Kolkata</title>
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
                <h3 class="display-4 text-white text-uppercase">Kolkata</h3>
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
                                <img class="img-fluid w-100" src="img/blog-1.jpg" alt="">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">01</h6>
                                    <small class="text-white text-uppercase">Jan</small>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <a class="text-primary text-uppercase text-decoration-none" href=""></a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Kolkata, West bengal</a>
                            </div>
                            <h2 class="mb-3">Explore The City of Joy</h2>
                            <p align="justify">Kolkata (formerly Calcutta) is the capital of India's West Bengal state. Founded as an East India Company trading post, it was India's capital under the British Raj from 1773–1911. Today it’s known for its grand colonial architecture, art galleries and cultural festivals. It’s also home to Mother House, headquarters of the Missionaries of Charity, founded by Mother Teresa, whose tomb is on site.</p>
                            <p align="justify">The Victoria Memorial is a large marble building, which is considered to be the pride of Kolkata. Built between 1906 and 1921, it is dedicated to the memory of Queen Victoria. Now, it is a museum and a popular tourist spot under the Ministry of Culture.</p>
                            <h4 class="mb-3">Day-1: Belur Math</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/blog-2.jpg">
                            <p align="justify">Belur Math (pronounced [ˈbeluɽ ˈmɔʈʰ]) is the headquarters of the Ramakrishna Math and Ramakrishna Mission, founded by Swami Vivekananda, the chief disciple of Ramakrishna Paramahamsa. It is located on the west bank of Hooghly River, Belur, West Bengal, India and is one of the significant institutions in Kolkata.The temple is the heart of the Ramakrishna movement. It is notable for its architecture that fuses Hindu, Islamic, Buddhist, and Christian art and motifs as a symbol of unity of all religions. In 2003, Belur Math railway station was also inaugurated which is dedicated to Belur Math Temple.</p>
                            <h4 class="mb-3">Day-2: Dakshineswar Kali Temple</h4>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/blog-3.jpg">
                            <p align="justify">Dakshineswar Kali Temple is a Hindu navaratna temple in Dakshineswar, Kolkata, West Bengal, India. Situated on the eastern bank of the Hooghly River, the presiding deity of the temple is Bhavatarini, a form of Parashakti Adya Kali, otherwise known as Adishakti Kalika. The temple was built in 1855 by Rani Rashmoni, a Zamindar, philanthropist and a devotee of Kali. The temple is known for its association with Ramakrishna and Ma Sarada Devi, mystics of 19th Century Bengal.</p>
                            <h4 class="mb-3">Day-3: Evening Walk Along With Howrah Bridge</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/blog-4.jpg">
                            <p align="justify">The Howrah Bridge is a balanced cantilever bridge over the Hooghly River in West Bengal, India. Commissioned in 1943, the bridge was originally named the New Howrah Bridge, because it replaced a pontoon bridge at the same location linking the cities of Howrah and Kolkata (Calcutta). On 14 June 1965, it was renamed Rabindra Setu after the great Bengali poet Rabindranath Tagore, who was the first Indian and Asian Nobel laureate. It is still popularly known as the Howrah Bridge.</p>
                            <h4 class="mb-3">Day-4: M.P. Birla Planetarium</h4>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/blog-5.jpg">
                            <p align="justify">The Birla Planetarium (officially M. P. Birla Planetarium) in Kolkata, West Bengal, India, is a single-storeyed circular structure designed in the typical Indian style, whose architecture is loosely styled on the Buddhist Stupa at Sanchi. Situated at Chowringhee Road adjacent to the Victoria Memorial, St. Paul's Cathedral and the Maidan in Central Kolkata, it is the largest planetarium in Asia and the second largest planetarium in the world. Popularly known as taramandal.</p>
                            <h4 class="mb-3">Day-5: Indian Museum (Jadu Ghar)</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/blog-6.jpg">
                            <p align="justify">The Indian Museum in Central Kolkata, West Bengal, India, also referred to as the Imperial Museum at Calcutta in colonial-era texts, is the ninth oldest museum in the world,[citation needed] the oldest and largest museum in India.It has rare collections of antiques, armour and ornaments, fossils, skeletons, mummies and Mughal paintings. It was founded by the Asiatic Society of Bengal in Kolkata (Calcutta), India, in 1814. The founder curator was Nathaniel Wallich, a Danish botanist.</p>
                            <h4 class="mb-3">Day-6: Marbel Palace Mansion</h4>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/blog-7.jpg">
                            <p align="justify">Marble Palace is a palatial nineteenth-century mansion in North Kolkata. It is located at 46, Muktaram Babu Street, Kolkata 700007. It is one of the best-preserved and most elegant houses of nineteenth-century Calcutta.[1] The mansion is famous for its marble walls, floors, and sculptures, from which it derives its name.</p>
                            <h4 class="mb-3">Day-7: Science City</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/blog-8.jpg">
                            <p align="justify">Science City Kolkata is the largest science centre in Asia. It is managed by National Council of Science Museums (NCSM), Ministry of Culture, Government of India. It is located at the crossing of Eastern Metropolitan Bypass and J. B. S. Haldane Avenue (Parama Island) in East Topsia. Saroj Ghose, the first director general of NCSM, is credited with having conceptualised this centre in 1997.</p>
                            <h4 class="mb-3">Day-8: St. Paul's Cathedral</h4>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/blog-9.jpg">
                            <p align="justify">St. Paul's Cathedral is a Church of North India (CNI) cathedral of Anglican background in Kolkata, West Bengal, India, noted for its Gothic architecture and dedicated to Paul the Apostle. It is the seat of the Diocese of Calcutta. The cornerstone was laid in 1839; the building was completed in 1847.[1] It is said to be the largest church in Kolkata and the first Anglican cathedral in Asia.It was also the first new-built cathedral in the overseas territory of the British Empire. The edifice stands on Cathedral Road on the "island of attractions" to provide for more space for the growing population of the European community in Calcutta in the 1800s.</p>
                            <h4 class="mb-3">Day-9: Birla Mandir</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/blog-10.jpg">
                            <p align="justify">Birla Mandir in Kolkata, India, is a Hindu temple on Asutosh Chowdhury Avenue, Ballygunge, built by the industrialist Birla family. It is dedicated to Vishnu avatars such as Rama and Krishna. This temple is open in the morning from 5.30 A.M. to 11 A.M. and in the evening from 4 .30 P.M. to 9 P.M. On Janmashtami, the birthday of Krishna, devotees come from far away places to pay their respect to the deities.</p>
                            <h4 class="mb-3">Day-10: Eco Park</h4>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/blog-11.jpg">
                            <p align="justify">Eco Park (or Prakriti Tirtha) is an urban park in New Town, Greater Kolkata and the biggest park so far in India. The park is situated on a 480 acres (190 ha) plot and is surrounded by a 104 acres (42 ha) waterbody with an island in the middle. The park was conceptualised by Chief Minister of West Bengal, Mamata Banerjee in July 2011. West Bengal Housing Infrastructure Development Corporation (HIDCO) is the overarching body coordinating the construction of the park, along with different other government bodies responsible for implementation of different works inside the park.</p>
                            <h4 class="mb-3">Day-11: Eden Garden</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/blog-13.jpg">
                            <p align="justify">Eden Gardens is a cricket ground in Kolkata, India. Established in 1864, it is the oldest and second-largest cricket stadium in India and third-largest in the world. The stadium currently has a capacity of 66,000 person.The stadium was established in 1864. It takes its name from the Eden Gardens, one of the oldest parks in Kolkata, adjacent to the stadium, designed in 1841 and named after the Eden sisters of Lord Auckland, the then Governor-General of India.
                            </p>
                            <h4 class="mb-3">Day-12: Prinsep Ghat</h4>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/blog-14.jpg">
                            <p align="justify">Prinsep Ghat is a ghat built in 1841 during the British Raj, along the Kolkata bank of the Hooghly River in India. The Palladian porch in the memory of the eminent Anglo-Indian scholar and antiquary James Prinsep was designed by W. Fitzgerald and constructed in 1843.
                            Located between the Water Gate and the St George's Gate of the Fort William, the monument to Prinsep is rich in Greek and Gothic inlays. It was restored by the state's public works department in November 2001 and has since been well-maintained. In its initial years, all royal British entourages used the Prinsep Ghat jetty for embarkation and disembarkation.</p>
                            <h4 class="mb-3">Day-13: Jora Sanko Thakur Bari</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/blog-15.jpg">
                            <p align="justify">Jorasanko Thakur Bari (Bengali: House of the Thakurs; anglicised to Tagore) in Jorasanko, North Kolkata, West Bengal, India, is the ancestral home of the Tagore family. It is currently located on the Rabindra Bharati University campus at 6/4 Dwarakanath Tagore Lane, Jorasanko, Kolkata 700007. It is the house in which the poet and first non-European Nobel laureate in Literature, Rabindranath Tagore was born. It is also the place where he spent most of his childhood and died on 7 August 1941.
                            </p>
                            <h4 class="mb-3">Day-14: Zoological Garden</h4>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/blog-16.jpg">
                            <p align="justify">The Zoological Garden, Alipore' (also informally called the Alipore Zoo or Kolkata Zoo) is India's oldest formally stated zoological park (as opposed to royal and British menageries) and a big tourist attraction in Kolkata, West Bengal. It has been open as a zoo since 1876, and covers 18.811 ha (46.48 acres). It is probably best known as the home of the Aldabra giant tortoise Adwaita, who was reputed to have been over 250 years old when he died in 2006. It is also home to one of the few captive breeding projects involving the Manipur brow-antlered deer. One of the most popular tourist attractions in Kolkata, it draws huge crowds during the winter season, especially during December and January. The highest attendance till date was on January 1, 2018 with 110,000 visitors.</p>
                            <h4 class="mb-3">Day-15: Acharya Jagadish Chandra Bose Indian Botanic Garden</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/blog-17.jpg">
                            <p align="justify">The Acharya Jagadish Chandra Bose Indian Botanic Garden, previously known as Indian Botanic Garden and the Calcutta Botanic Garden, is situated in Shibpur, Howrah near Kolkata. They are commonly known as the Calcutta Botanical Garden and previously as the Royal Botanic Garden, Calcutta. The gardens exhibit a wide variety of rare plants and a total collection of over 12,000 specimens spread over 109 hectares. It is under Botanical Survey of India (BSI) of Ministry of Environment and Forests, Government of India.
                            </p>
                            <a href="contact.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                    <!-- Blog Detail End -->
    
                    <!-- Comment List Start -->
                    <div class="bg-white" style="padding: 30px; margin-bottom: 30px;">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">2 Comments</h4>
                        <div class="media mb-4">
                            <img src="img/team-1.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a href="">Shiplu Das</a> <small><i>01 Jan 2015</i></small></h6>
                                <p>We had the best travelling experience with Overseas Holidays . Zabreen, was our
                                    travel Expert, she helped me in planning the trip for Andaman and Nicobar 13 days and
                                    12 nights. We got the best hotels to stay. From day 1 of our arrival at Srinagar
                                    till we checked out we had end to end support from Operations Team 24hrs.</p>
                                <button class="btn btn-sm btn-outline-primary">Reply</button>
                            </div>
                        </div>
                        <div class="media">
                            <img src="img/clients/client1.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a href="">Ruhan Debnath</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Dear Sir Many thanks for the kind words and review. It was indeed a challenge
                                    to operate Andaman tour during the pandemic but with sheer hardwork we pulled
                                    this off. Thanks again and God bless you</p>
                                <button class="btn btn-sm btn-outline-primary">Reply</button>
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
                        <p>Tour guide for kolkata tour, having experience of more than 15 years.</p>
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

                  <!--rating-->
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



                 <!-- Rating end  -->

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