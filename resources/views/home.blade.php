@include('header')
<body>
<header>
            <div class="navbar1">
                <div class="nav">
                    <ul>
                        <li><a href="#home">الصفحة الرئيسية</a></li>
                        <li><a href="#books"> كتب إسلامية</a></li>
                        <li><a href="#postes">منشوراتنا</a></li>
                        <li><a href="#">أدعية و أذكار</a></li>
                    </ul>
                </div>
                <div class="logo">
                    <img src="./assets/imgs/logo.png" alt="">
                </div>
                <div class="social">
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bx-phone' ></i></a>
                </div>
                <button class="menu" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
      <svg width="80" height="80" viewBox="0 0 100 100">
        <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
        <path class="line line2" d="M 20,50 H 80" />
        <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
      </svg>
    </button>
            </div>
            
        </header>
    <section class="home" id="home">
       <div class="right">
            <h1>صدقة جارية</h1>
            <h2>أحاديث نبوية ، أذكار يومية و صدقة جارية</h2>
            <div class="btns">
                <a href="#" class="btn1 text-decoration-none">أحاديث نبوية</a>
                <a href="#" class="btn2 text-decoration-none">نشاطاتنا</a>
            </div>
       </div>
       <div class="left">
           <img src="./assets/imgs/home-page.png" alt="">
       </div>
    </section>


    <section class="books" id="books">
        <div class="right">
            <h1>كتب إسلامية ستفيدك في حياتك اليومية</h1>
            <h3>حمل مجموعة من الكتب لكبار العلماء المسلمين التي ستعلمك الفقه الإسلامي و تجيبك عن عديد الأسئلة التي تراودك</h3>
            <div class="btns">
                <a href="#" class="btn1 text-decoration-none"> منصة ابن باز</a>
                <a href="#" class="btn2 text-decoration-none">تواصل معنا</a>
            </div>
        </div>
        <div class="left">
       @include('books')
				
        </div>
    </section>

    <section class="postes" id="postes">
        <div class="section-title">منشورات دينية</div>
        <div class="poste">
        @include('postes')
        </div>
        
    </section>


    <footer>
        <div class="footer-right">
            <div class="title"><h1>صدقة جارية</h1></div>
            <div class="logo">
                <img src="./assets/imgs/logo.png" alt="">
            </div>
            <div class="social">
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bx-phone' ></i></a>
                </div>
        </div>
        <div class="footer-down">
        <p>جميع الحقوق محفوظة 	&#169 2022</p>
        </div>
        
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <script src="./assets/js.js"></script>
</body>
</html>