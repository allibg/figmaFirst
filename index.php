<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>سپهر آهن</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css" />
    <link rel="icon" href="img$icons/Group 48096510.png" />
</head>

<body>
        <article class="mb-5">
        <div id="first-header">
            <header class="container">
                <nav class="navbar navbar-expand-lg navbar-light text-center container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-list"></i>
                    </button>
                    <a href="tel:09933665300" class="btn btn-success d-lg-block d-none">
                        09933665300 <i class="bi bi-telephone-fill"></i></a>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto mr-auto">
                            <li class="nav-item">
                                <a class="nav-link mr-lg-4 ml-lg-4" href="#">درباره ما</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mr-lg-4 ml-lg-4" href="#">تماس با ما</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link mr-lg-4 ml-lg-4" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-chevron-down"></i> محصولات
                                </a>
                                <div class="dropdown-menu container text-center" style="width: 75%;" aria-labelledby="navbarDropdownMenuLink">
                                
                                        <div class="d-flex justify-content-around" style="overflow-x: auto;">
                                            <button class="btn shadow btn-light">aa</button>
                                            <button class="btn shadow btn-light">aa</button>
                                            <button class="btn shadow btn-light">aa</button>
                                            <button class="btn shadow btn-light">aa</button>
                                            <button class="btn shadow btn-light">aa</button>
                                            <button class="btn shadow btn-light">aa</button>
                                            <button class="btn shadow btn-light">aa</button>
                                            <button class="btn shadow btn-light">aa</button>
                                            <button class="btn shadow btn-light">aa</button>
                                            <button class="btn shadow btn-light">aa</button>
                                            <button class="btn shadow btn-light">aa</button>
                                            <button class="btn shadow btn-light">aa</button>
                                            <button class="btn shadow btn-light">aa</button>
                                            <button class="btn shadow btn-light">aa</button>
                                            <button class="btn shadow btn-light">aa</button>
                                        </div>
                                        <script>
                                            const pro=new XMLHttpRequest();
                                            pro.onload=function(){
                                                const projson=JSON.parse(pro.responseText);
                                                
                                            }
                                            pro.open("GET","products.json",true);
                                            pro.send();
                                        </script>
                                    
                                </div>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link mr-lg-4 ml-lg-4" href="#">خانه <span
                                        class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                    <a class="navbar-brand text-md-center mr-auto ml-auto" href="#"><img
                            src="img$icons/Group 48096510.png" alt="" class="w-75" /></a>
                    <a href="tel:09211901147" class="btn btn-success d-lg-none d-block"><i
                            class="bi bi-telephone-fill"></i></a>
                </nav>
                <div class="row d-flex align-items-center text-center" id="description">
                    <div class="col-md-12 col-lg-6 text-center">
                        <img id="main-img" alt="" class="w-100" />
                    </div>
                    <div class="col-md-12 col-lg-6 text-center">
                        <h2 class="text-right" id="name"></h2>
                        <br /><br />
                        <p class="text-right" id="name-description"></p>
                        <h5 id="price" class="text-right"></h5>
                    </div>
                </div>
                <div class="mt-5 d-flex justify-content-around w-100 ml-auto mr-auto mt-5 mb-5 text-center"
                    style="overflow: auto">
                    <a href="#description" class="text-dark ml-4 mr-4 rounded p-2" id="0"><img src="img$icons/Frame.png"
                            alt="" /><br />خدمات دیگر</a>
                    <a href="#description" class="text-dark ml-4 mr-4 rounded p-2" id="1"><img
                            src="img$icons/profil.png" alt="" /><br />پروفیل</a>
                    <a href="#description" class="text-dark ml-4 mr-4 rounded p-2" id="2"><img src="img$icons/ayeq.png"
                            alt="" /><br />عایق</a>
                    <a href="#description" class="text-dark ml-4 mr-4 rounded p-2" id="3"><img
                            src="img$icons/milgerd.png" alt="" /><br />میلگرد</a>
                    <a href="#description" class="text-dark ml-4 mr-4 rounded p-2" id="4"><img
                            src="img$icons/tir ahan.png" style="filter: grayscale(100%)" alt="" /><br />تیرآهن</a>
                    <a href="#description" class="text-dark ml-4 mr-4 rounded p-2" id="5"><img src="img$icons/lole.png"
                            alt="" /><br />لوله</a>
                    <a href="#description" class="text-dark ml-4 mr-4 rounded p-2" id="6"><img
                            src="img$icons/nabshi.png" alt="" /><br />نبشی</a>
                    <a href="#description" class="text-dark ml-4 mr-4 rounded p-2" id="7"><img
                            src="img$icons/varagh.png" alt="" /><br />ورق</a>
                    <script>
                        function ajax(input) {
                            const ajax = new XMLHttpRequest();
                            ajax.open("GET", "data.json", true);
                            ajax.onload = function () {
                                const json = JSON.parse(ajax.responseText);
                                document.getElementById("name").innerHTML =
                                    json.data[input].name;
                                document.getElementById("name-description").innerHTML =
                                    json.data[input].description;
                                document.getElementById("price").innerHTML =
                                    json.data[input].price;
                                document.getElementById("main-img").src =
                                    json.data[input].img_id;
                                for (let i = 0; i < 8; i++) {
                                    if (input == i) {
                                        document.getElementById(i).style.borderBottom = "3px solid green";
                                    } else {
                                        document.getElementById(i).style.borderBottom = "";
                                    }
                                }

                            };
                            ajax.send();
                        }
                        ajax(4);
                        for (let i = 0; i < 8; i++) {
                            document
                                .getElementById(i)
                                .addEventListener("click", function () {
                                    ajax(i);
                                });
                        }
                    </script>
                </div>
            </header>
        </div>
        <section class="container">
            <h2>لیست قیمت ها</h2>
        </section>
        <section class="container">
            <h2>توضیحات</h2>
            <p class="text-right">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در
                ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و
                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی
                در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می
                طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این
                صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و
                شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای
                اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده
                قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و
                با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در
                ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و
                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی
                در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می
                طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این
                صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و
                شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای
                اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده
                قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و
                با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در
                ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و
                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی
                در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می
                طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این
                صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و
                شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای
                اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده
                قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و
                با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در
                ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و
                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی
                در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می
                طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این
                صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و
                شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای
                اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده
                قرار گیرد.
            </p>
            <div class="row mt-5">
                <div class="col-md-12 col-lg-6">
                    <a href=""><img src="img$icons/Vector.png" alt="" id="video-bg" />
                        <img src="img$icons/BingWallpaper(83) 1.png" id="video-cover" alt="" />
                        <img src="img$icons/Vector (1).png" alt="" id="video-play" /></a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="text-right mt-5">
                        و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می
                        طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                        الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این
                        صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و
                        شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                        دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی
                        اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی
                        نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و
                        متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای
                        شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود
                        ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال
                        و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم
                        افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                        خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان
                        امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت
                        تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-12">
                    <img src="img$icons/Screenshot (66).png" alt=""
                        class="advertisement-baner m-3 rounded text-center w-75" />
                </div>
                <div class="col-lg-6 col-md-12">
                    <img src="img$icons/Screenshot (65).png" alt=""
                        class="advertisement-baner m-3 rounded w-75 text-center" />
                </div>
            </div>
        </section>
        <section class="container">
            <h2>تیم حرفه ای ما</h2>
            <p class="text-right">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                از طراحان گرافیک است ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                چاپ و با استفاده از طراحان گرافیک ا
            </p>
            <div id="team-div">
                <div>
                    <img src="img$icons/portrait-beautiful-young-woman-standing-grey-wall.png" alt="" /><br />
                    <h3>مارال</h3>
                    <h5>فروش تیرآهن <br>09933665300</h5>
                </div>
                <div>
                    <img src="img$icons/portrait-handsome-young-man-with-crossed-arms.png" alt="" /><br />
                    <h3>رضا</h3>
                    <h5>فروش تیرآهن <br>09933665300</h5>
                </div>
                <div>
                    <img src="img$icons/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-man-freelancer.png"
                        alt="" /><br />
                    <h3>سعید</h3>
                    <h5>فروش تیرآهن <br>09933665300</h5>
                </div>
                <div>
                    <img src="img$icons/mand-holding-cup.png" alt="" /><br />
                    <h3>مهران</h3>
                    <h5>فروش تیرآهن <br>09933665300</h5>
                </div>
            </div>
        </section>
        <section class="container text-center">
            <h2>آخرین مقالات سپهر</h2>
            <div id="lastArticles">
                <div>
                    <img src="img$icons/BingWallpaper(161) 1.png" alt="" />
                    <h4>نرخ جدید بازار آهن</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                        استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                        ستون و سطرآنچنان که لازم است
                    </p>
                    <a href="" class="text-success">مطالعه بیشتر</a>
                </div>
                <div>
                    <img src="img$icons/BingWallpaper(161) 1.png" alt="" />
                    <h4>نرخ جدید بازار آهن</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                        استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                        ستون و سطرآنچنان که لازم است
                    </p>
                    <a href="" class="text-success">مطالعه بیشتر</a>
                </div>
                <div>
                    <img src="img$icons/BingWallpaper(161) 1.png" alt="" />
                    <h4>نرخ جدید بازار آهن</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                        استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                        ستون و سطرآنچنان که لازم است
                    </p>
                    <a href="" class="text-success">مطالعه بیشتر</a>
                </div>
                <div>
                    <img src="img$icons/BingWallpaper(161) 1.png" alt="" />
                    <h4>نرخ جدید بازار آهن</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                        استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                        ستون و سطرآنچنان که لازم است
                    </p>
                    <a href="" class="text-success">مطالعه بیشتر</a>
                </div>
                <div>
                    <img src="img$icons/BingWallpaper(161) 1.png" alt="" />
                    <h4>نرخ جدید بازار آهن</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                        استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                        ستون و سطرآنچنان که لازم است
                    </p>
                    <a href="" class="text-success">مطالعه بیشتر</a>
                </div>
                <div>
                    <img src="img$icons/BingWallpaper(161) 1.png" alt="" />
                    <h4>نرخ جدید بازار آهن</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                        استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                        ستون و سطرآنچنان که لازم است
                    </p>
                    <a href="" class="text-success">مطالعه بیشتر</a>
                </div>
            </div>
            <button id="rightBTN" class="d-none d-lg-block btn"><i class="bi bi-chevron-right"></i></button>
            <button id="leftBTN" class="d-none d-lg-block btn"><i class="bi bi-chevron-left"></i></button>
            <script>
                document.getElementById('rightBTN').addEventListener('click',function(){
                    document.getElementById('lastArticles').scrollLeft+=100;
                });
                document.getElementById('leftBTN').addEventListener('click',function(){
                    document.getElementById('lastArticles').scrollLeft-=100;
                });
            </script>
        </section>
    </article>
    <footer class="text-center">
        <div class="container">
            <img src="img$icons/Group 48096510.png" alt="" class="mt-5 mb-5" />
            <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در
                ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و
                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی
                در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می
                طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این
                صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و
                شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای
                اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده
                قرار گیرد.
            </p>
            <div class="d-flex justify-content-between row">
                <a href="" class="ml-auto text-dark m-4" style="font-size: 30px"><i class="bi bi-facebook"></i></a>
                <a href="" class="text-dark m-4" style="font-size: 30px"><i class="bi bi-instagram"></i></a>
                <a href="" class="text-dark m-4" style="font-size: 30px"><i class="bi bi-twitch"></i></a>
                <a href="" class="text-dark m-4" style="font-size: 30px"><i class="bi bi-twitter"></i></a>
                <a href="" class="text-dark m-4" style="font-size: 30px"><i class="bi bi-whatsapp"></i></a>
                <a href="" class="mr-auto text-dark m-4" style="font-size: 30px"><i class="bi bi-youtube"></i></a>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <h4>مجوز های سپهر</h4>
                    <div class="rounded m-3" style="
                width: 100px;
                height: 100px;
                background-color: rgb(255, 172, 172);
              "></div>
                    <div class="rounded m-3" style="
                width: 100px;
                height: 100px;
                background-color: rgb(255, 172, 172);
              "></div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <h4>لینک های سریع سایت</h4>
                    <div class="row">
                        <a href="" class="m-4 ml-auto mr-auto text-success list-">محصولات</a>
                        <a href="" class="m-4 ml-auto mr-auto text-success list-">محصولات</a>
                    </div>
                    <div class="row">
                        <a href="" class="m-4 ml-auto mr-auto text-success list-">محصولات</a>
                        <a href="" class="m-4 ml-auto mr-auto text-success list-">محصولات</a>
                    </div>
                    <div class="row">
                        <a href="" class="m-4 ml-auto mr-auto text-success list-">محصولات</a>
                        <a href="" class="m-4 ml-auto mr-auto text-success list-">محصولات</a>
                    </div>
                    <div class="row">
                        <a href="" class="m-4 ml-auto mr-auto text-success list-">محصولات</a>
                        <a href="" class="m-4 ml-auto mr-auto text-success list-">محصولات</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <h4>راه های ارتباطی</h4>
                    <div class="row">
                        <a href="" class="text-right text-dark"><i style="font-size: 30px; color: black"
                                class="bi bi-geo-alt m-5"></i>البرز - کرج</a>
                    </div>
                    <div class="row">
                        <a href="" class="text-right text-dark"><i style="font-size: 30px; color: black"
                                class="bi bi-envelope m-4"></i>ali.bg1385@gmail.com</a>
                    </div>
                    <div class="row">
                        <a href="" class="text-right text-dark"><i style="font-size: 30px; color: black"
                                class="bi bi-telephone m-4"></i>09933665300</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>