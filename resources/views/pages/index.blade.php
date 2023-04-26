
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <Title>Sandip Dust 2020</Title>
    <link rel="stylesheet" type="text/css" href="style/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


    <script src="minified/gsap.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.5/gsap.min.js"
        integrity="sha256-CkQcTxuQyZLqzqWqntH3FDxeDKMV0m7cw0aM5eph4Do=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.min.js"></script>
<style>
    *{
    margin:0;
    padding:0;
}

body{
    background-color:#d3eefe;
}

h1{
    font-family:"Franklin Gothic Medium";
    color:#43515c;
    font-size:70px;
    font-weight:lighter;
    letter-spacing: -5px;
    padding: 50px 0px 0px 0px;
    z-index: 999;
    /* padding-top: 0px; */
  position:absolute;
}
p{
    font-family:"Franklin Gothic Medium";
    color:#43515c;
    font-size:24px;
    font-weight:100;
    z-index: 999;
}

.first-section{
    width:100%;
    height:150vh;
    display:flex;
    align-items: center;
    flex-direction: column;
    text-align: center;
    position: relative;
}

.first-section .images-wrapper {
    position:absolute;
}

.ingredient-images{
    position: absolute;
    width:400px;
    left:calc(50%-400px);
    height:530px;
    top:420px;
}

.section_1_01{
    position: absolute;
    top:20px;
    right:-150px;
}
.section_1_02{
    position: absolute;
    top:90px;
    right:-20px;
}
.section_1_03{
    position: absolute;
    top:110px;
    right:-150px;
}
.section_1_04{
    position: absolute;
    top:210px;
    right:-30px;
}
.section_1_05{
    position: absolute;
    top:235px;
    right:0px;
}
.section_1_06{
    position: absolute;
    top:180px;
    right:60px;
}
.section_1_07{
    position: absolute;
    top:260px;
    right:-140px;
}
.section_1_08{
    position: absolute;
    top:330px;
    right:-40px;
}
.section_1_09{
    position: absolute;
    top:380px;
    right:-140px;
}

.second-section{
    width:100%;
    height:100vh;
    display:flex;
    align-items:center;
    flex-direction:column;
    text-align:center;
    position:relative;
}

.second-section .images-wrapper{
    position: absolute;
    display:flex;
    padding:200px 0;
    top:20%;
    overflow:hidden;
}

.image-container{
    overflow:hidden;
    height:100%;
}

.third-section{
    width:100%;
    height:100vh;
    display:flex;
    align-items: center;
    flex-direction: row;
    text-align:center;
    position:relative;
}

.third-section .images-wrapper{
    /* margin-top:300px; */
    display: flex;
    flex-direction: column;
    align-items: center;
}

.third-section .images-wrapper img{
    position: absolute;
}

.forth-section{
    width:100%;
    height:150vh;
    display:flex;
    align-items: center;
    flex-direction: column;
    text-align:center;
    position:relative;
}

.forth-section .images-wrapper{
    margin-top:300px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.forth-section .images-wrapper img{
    position: absolute;
}
/* NAVIGATION */
nav {
  width: 100%;
  margin: 0 auto;
  /* background: #fff; */
  padding-bottom: 33px;
  padding: 70px 0;
  /* box-shadow: 0px 5px 0px #dedede; */
}
nav ul {
  list-style: none;
  text-align: center;
}
nav ul li {
  display: inline-block;
  padding-left: 80px;
}
nav ul li a {
  display: block;
  font-size: 12px;
  font-family: serif;
  padding: 10px;
  letter-spacing: 2px;
  text-decoration: none;
  font-family: "Franklin Gothic Medium";
  color: #43515c;
  font-weight: 800;
  text-transform: uppercase;
  margin: 0 10px;
}
nav ul li a,
nav ul li a:after,
nav ul li a:before {
  transition: all .5s;
}
nav ul li a:hover {
  color: #43515c;
}


/* stroke */
nav.stroke ul li a,
nav.fill ul li a {
  position: relative;
}
nav.stroke ul li a:after,
nav.fill ul li a:after {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  width: 0%;
  content: '.';
  color: transparent;
  background: #43515c;
  height: 1px;
}
nav.stroke ul li a:hover:after {
  width: 100%;
}

nav.fill ul li a {
  transition: all 2s;
}

nav.fill ul li a:after {
  text-align: left;
  content: '.';
  margin: 0;
  opacity: 0;
}
nav.fill ul li a:hover {
  color: #43515c;
  z-index: 1;
}
nav.fill ul li a:hover:after {
  z-index: -10;
  animation: fill 1s forwards;
  -webkit-animation: fill 1s forwards;
  -moz-animation: fill 1s forwards;
  opacity: 1;
}
.text{
    margin: 300px;
    width: 40%;
    text-align: center;
    margin-left: 150px;
    margin-top: 500px;
}
.text h1{
    text-align: center;
}



.wrapper{
  display: flex;
  max-width: fit-content;
  position: relative;
  margin-left: 1%;
  margin-right: 5px;
  height: 47vh;
  margin-bottom: 2%;
}
.view-btn{
    margin-bottom: 5%;
}
.wrapper i{
  z-index: 9999;
  top: 50%;
  height: 44px;
  width: 44px;
  color: #343F4F;
  cursor: pointer;
  font-size: 1.15rem;
  position: absolute;
  text-align: center;
  line-height: 44px;
  background: #fff;
  border-radius: 50%;
  transform: translateY(-50%);
  transition: transform 0.1s linear;
}
.wrapper i:active{
  transform: translateY(-50%) scale(0.9);
}
.wrapper i:hover{
  background: #f2f2f2;
}
.wrapper i:first-child{
  left: -22px;
  display: none;
}
.wrapper i:last-child{
  right: -22px;
}
.wrapper .carousel{
  font-size: 0px;
  cursor: pointer;
  overflow: hidden;
  white-space: nowrap;
  scroll-behavior: smooth;
  padding-top: 19px;

}
.carousel.dragging{
  cursor: grab;
  scroll-behavior: auto;
}
.carousel.dragging img{
  pointer-events: none;
}
.carousel img{
  height: 300px;
  max-width: fit-content;
  object-fit: cover;
  user-select: none;
  margin-left: 14px;
  padding: 20px;
  width: calc(100% / 4);
}
.carousel img:first-child{
  margin-left: 0px;
}

@media screen and (max-width: 900px) {
  .carousel img{
    width: calc(100% / 2);
  }
}

@media screen and (max-width: 550px) {
  .carousel img{
    width: 100%;
  }
}


















.hovicon {
    display: inline-block;
    font-size: 45px;
    line-height: 90px;
    cursor: pointer;
    margin: 20px;
    width: 90px;
    height: 90px;
    border-radius: 50%;
    text-align: center;
    position: relative;
    text-decoration: none;
    z-index: 1;
    color: #fff;
}
.hovicon.small {
    font-size: 20px;
    line-height:45px;
    width:45px;
    height:45px;
    margin:7px;
}
.hovicon.mini {
    font-size: 15px;
    line-height:32px;
    width:30px;
    height:30px;
    margin:7px;
}
.hovicon.auto-width {
    width: auto;
    height: auto;
    padding: 15px;
}
.hovicon:after {
    pointer-events: none;
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    content:'';
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
}
.hovicon:before {
    speak: none;
    font-size: 48px;
    line-height: 90px;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    display: block;
    -webkit-font-smoothing: antialiased;
}
.hovicon {
    display: inline-block;
    font-size: 45px;
    line-height: 90px;
    cursor: pointer;
    margin: 20px;
    width: 90px;
    height: 90px;
    border-radius: 50%;
    text-align: center;
    position: relative;
    text-decoration: none;
    z-index: 1;
    color: #fff;
}
.hovicon.small {
    font-size: 20px;
    line-height:45px;
    width:45px;
    height:45px;
    margin:7px;
}
.hovicon.mini {
    font-size: 15px;
    line-height:32px;
    width:30px;
    height:30px;
    margin:7px;
}
.hovicon.auto-width {
    width: auto;
    height: auto;
    padding: 15px;
}
.hovicon:after {
    pointer-events: none;
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    content:'';
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
}
.hovicon:before {
    speak: none;
    font-size: 48px;
    line-height: 90px;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    display: block;
    -webkit-font-smoothing: antialiased;
}

/* Effect 5 */
 .hovicon.effect-5 {
    box-shadow: 0 0 0 4px transparent;
    background-color: transparent;
    overflow: hidden;
    max-width: 24%;
    height: 36vh;
    padding: 0px;
    -webkit-transition: background 0.1s, color 0.1s, box-shadow 0.3s;
    -moz-transition: background 0.1s, color 0.1s, box-shadow 0.3s;
    transition: background 0.1s, color 0.1s, box-shadow 0.3s , transform 0.3s ease-out;
}
.hovicon.effect-5:after {
    display: none;
}
.hovicon.effect-5:hover img {
    transform: translateX(5px)
}
.hovicon.effect-5:hover { 
    background-color: rgba(255, 255, 255, 0.445);
    box-shadow: 0 0 0 40px rgba(255, 255, 255, 0.445);
}

.hovicon.effect-5.sub-a:hover:before {
    -webkit-animation: toRightFromLeft 0.3s forwards;
    -moz-animation: toRightFromLeft 0.3s forwards;
    animation: toRightFromLeft 0.3s forwards;
}
/* .hovicon.effect-5.img {
    transition: transform 0.3s ease-out;
} */
.hovicon.effect-5:hover.img {
    transform: translateX(4px) rotate(7deg);
}
.hovicon.img{
    width: 300px;
    max-width: 300px;
}
.menu {
    text-align: center;
    width: 100%;
}
 .menu h1{
    text-align: center;    
    margin-top: -8%;
    width: 100%;
}
.view-btn{
    text-align: center;
}
.bn3637 {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 0.7rem 2rem;
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-size: 18px;
  text-align: center;
  text-decoration: none;
  color: #fff;
  backface-visibility: hidden;
  border: 0.3rem solid transparent;
  border-radius: 3rem;
}

.bn37 {
  border-color: transparent;
  background-color: #fff;
  color: #000;
  transition: transform 0.2s cubic-bezier(0.235, 0, 0.05, 0.95);
}
  
.bn37:hover {
  transform: perspective(1px) scale3d(1.044, 1.044, 1) translateZ(0) !important;
}
</style>
</head>

<body>

     
    <nav class="stroke">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Downloads</a></li>
            <li><a href="#">More</a></li>
            <li><a href="#">Nice staff</a></li>
        </ul>
    </nav>
    <section class="first-section">

      
        <h1>Create Your Own <br />Pizza</h1>
        <div class="images-wrapper">
            <img class="section_1_bg" src="https://www.dropbox.com/s/ricsb7ra8cyr9or/section_1_bg.webp?raw=1" />
           
            <div class="ingredient-images">
                <img class="section_1_01"        src="https://www.dropbox.com/s/atuvpzvo59wxeef/section_1_01.webp?raw=1" />
              
                <img class="section_1_02" src="https://www.dropbox.com/s/7mvrx106israo1z/section_1_02.webp?raw=1" />
              
                <img class="section_1_03" src="https://www.dropbox.com/s/oewc2bioujvzlp7/section_1_03.webp?raw=1" />
              
                <img class="section_1_04" src="https://www.dropbox.com/s/bxezwiwtnkx1cw0/section_1_04.webp?raw=1" />
              
                <img class="section_1_05" src="https://www.dropbox.com/s/bftnm0v5j33uv9c/section_1_05.webp?raw=1" />
              
                <img class="section_1_06" src="https://www.dropbox.com/s/hz9jbiak3laqrqp/section_1_06.webp?raw=1" />
              
                <img class="section_1_07" src="https://www.dropbox.com/s/jdlxt8xxdrquh9a/section_1_07.webp?raw=1" />
              
                <img class="section_1_08" src="https://www.dropbox.com/s/s41b0ualql6b74d/section_1_08.webp?raw=1" />
              
                <img class="section_1_09" src="https://www.dropbox.com/s/luxhm5e7e57t7ac/section_1_09.webp?raw=1" />
            </div>
        </div>
    </section>
    <div class="menu">
        <h1>View Our Best Menu</h1>
    </div>
    <div class="wrapper">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <div class="carousel">
          <img src="{{ asset('asset/images/burger.png') }}" class="hovicon effect-5 sub-a img" alt="img" draggable="false">
          <img src="{{ asset('asset/images/wonton.png') }}"  class="hovicon effect-5 sub-a img"  draggable="false">
          <img src="{{ asset('asset/images/soup.png') }}" class="hovicon effect-5 sub-a img"   draggable="false">
          <img src="{{ asset('asset/images/salad.png') }}"  class="hovicon effect-5 sub-a img" style="width: 280px"  draggable="false">
          <img src="{{ asset('asset/images/prawns.png') }}" class="hovicon effect-5 sub-a img"   draggable="false">
          <img src="{{ asset('asset/images/kaarhi.png') }}" class="hovicon effect-5 sub-a img"    draggable="false">
          <img src="{{ asset('asset/images/kaarhi-2.png') }}" class="hovicon effect-5 sub-a img"   draggable="false">
          <img src="{{ asset('asset/images/fruits.png') }}" class="hovicon effect-5 sub-a img"   draggable="false">
        </div>
        <i id="right" class="fa-solid fa-angle-right"></i>
      </div>


      <div class="view-btn">
        <a href="/" class="bn3637 bn37">Button</a>
      </div>

    <section class="second-section">
        <h1>Draw Attention to the Ingredients You Want the Most</h1>
        <p>A great pizza is impossible to ignore.</p>
        <div class="images-wrapper bottom">
            <div class="image-container">
                <img class="section_2_06" src="https://www.dropbox.com/s/kb9fxs2l7y7obvp/section_2_06.webp?raw=1" />
            </div>
            <div class="image-container">
                <img class="section_2_07" src="https://www.dropbox.com/s/ebywdet3cjr0670/section_2_07.webp?raw=1" />
            </div>
            <div class="image-container">
                <img class="section_2_08" src="https://www.dropbox.com/s/slm1nqwrsuv34x8/section_2_08.webp?raw=1" />
            </div>
            <div class="image-container">
                <img class="section_2_09" src="https://www.dropbox.com/s/kywqj06sz972r7g/section_2_09.webp?raw=1" />
            </div>
            <div class="image-container">
                <img class="section_2_10" src="https://www.dropbox.com/s/0msebcd4otsahqe/section_2_10.webp?raw=1" />
            </div>
        </div>
        <div class="images-wrapper top">
            <div class="image-container">
                <img class="section_2_01"           src="https://www.dropbox.com/s/fbdaroubtk7ctb2/section_2_01.webp?raw=1" />
            </div>
            <div class="image-container">
                <img class="section_2_02" src="https://www.dropbox.com/s/4724yf637hh0z1t/section_2_02.webp?raw=1" />
            </div>
            <div class="image-container">
                <img class="section_2_03" src="https://www.dropbox.com/s/5iquebsptt1gf4m/section_2_03.webp?raw=1" />
            </div>
            <div class="image-container">
                <img class="section_2_04" src="https://www.dropbox.com/s/49ebf38ycede0yb/section_2_04.webp?raw=1" />
            </div>
            <div class="image-container">
                <img class="section_2_05" src="https://www.dropbox.com/s/7th16qwis8v1vnq/section_2_05.webp?raw=1" />
            </div>
        </div>
    </section>
    <section class="third-section">
        <div class="text">

            <h1>Try our special pizza</h1>
            <p style="margin-top: 150px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eveniet, assumenda eos itaque quos, voluptatem a consequatur saepe aliquam incidunt, velit ab rerum deleniti est vel delectus explicabo provident nostrum?</p>
        </div>
        
        <div class="images-wrapper">
            <img class="section_3_06" src="https://www.dropbox.com/s/cggf61ebt5glkdm/section_3_06.webp?raw=1" />
            <img class="section_3_05" src="https://www.dropbox.com/s/y9v16yvcpcogt5h/section_3_05.webp?raw=1" />
            <img class="section_3_04" src="https://www.dropbox.com/s/epb4iwra19fc7np/section_3_04.webp?raw=1" />
            <img class="section_3_03" src="https://www.dropbox.com/s/bcuykp1rf8c672f/section_3_03.webp?raw=1" />
            <img class="section_3_02" src="https://www.dropbox.com/s/rhkmo56qrrjsnwn/section_3_02.webp?raw=1" />
            <img class="section_3_01" src="https://www.dropbox.com/s/7f6qkl52a6jiy08/section_3_01.webp?raw=1" />
        </div>
        {{-- <div class="text-section">
            <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit</h1>
            <p class="sub-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus omnis suscipit doloremque enim, placeat consequuntur aut quisquam temporibus tenetur porro dolore vero facere corporis voluptatibus expedita laborum at ipsa magni.
            </p>
        </div> --}}
    </section>
    <section class="forth-section">
        <h1>14 Types of Pizzas</h1>
        <p>With so many different ingredients and add-ons, the possibilities are endless.</p>
        <div class="images-wrapper">
            <img class="section_4_01" src="https://www.dropbox.com/s/4lpyq61t3e84qrt/section_4_01.webp?raw=1" />
            <img class="section_4_02" src="https://www.dropbox.com/s/vck70ruuqtwzqlc/section_4_02.webp?raw=1" />
            <img class="section_4_03" src="https://www.dropbox.com/s/xbn1u3ij1p01lt3/section_4_03.webp?raw=1" />
            <img class="section_4_04" src="https://www.dropbox.com/s/77se9r4h1nhgekb/section_4_04.webp?raw=1" />
        </div>
    </section>
    
        

  
 <script >

let scroll_tl = gsap.timeline({
        scrollTrigger: {
            trigger: '.factsContainer',
            start: "top center",
            // pin: true,
            scrub: true,
            end: "+=300",
            // markers: true,
        }
    }),
        facts = [...document.querySelectorAll('.fact')]
    scroll_tl.to('.factsContainer h2', {
        scale: 1.5,
        duration: 1,
        ease: "slow"
    })
    scroll_tl.to(facts, {
        xPercent: -85 * (facts.length - 1),
        scrollTrigger: {
            trigger: ".factsContainer_sm",
            start: "center center",
            pin: true,
            // horizontal: true,
            // pinSpacing:false,
            // markers: true,
            scrub: 1,
            snap: 1 / (facts.length - 1),
            // base vertical scrolling on how wide the container is so it feels more natural.
            // end: () => `+=${smallFactsContainer.offsetWidth}`
            end: () => `+=4320`
        }
    });



document.addEventListener('DOMContentLoaded', () => {
    let controller = new ScrollMagic.Controller();
    
  let t1 = gsap.timeline();
        t1.from(".section_1_01", 4, {
            y: -100,
            x: -150,
            ease: Power3.easeInOut
        })
        t1.from(".section_1_02", 4, {
            y: -150,
            x: -250,
            ease: Power3.easeInOut
        }, '-=4')
        .from(".section_1_03", 4, {
            y: -80,
            x: -100,
            ease: Power3.easeInOut
        }, '-=4')
        .from(".section_1_04", 4, {
            y: -100,
            x: -150,
            ease: Power3.easeInOut
        }, '-=4')
        .from(".section_1_05", 4, {
            y: -80,
            x: -200,
            ease: Power3.easeInOut
        }, '-=4')
        .from(".section_1_06", 4, {
            y: -100,
            x: -350,
            ease: Power3.easeInOut
        }, '-=4')
        .from(".section_1_07", 4, {
            y: -50,
            x: -150,
            ease: Power3.easeInOut
        }, '-=4')
        .from(".section_1_08", 4, {
            y: 50,
            x: -350,
            ease: Power3.easeInOut
        }, '-=4')
        .from(".section_1_09", 4, {
            y: 100,
            x: -200,
            ease: Power3.easeInOut
        }, '-=4')

    let scene = new ScrollMagic.Scene({
        triggerElement: '.first-section',
        duration: '100%',
        triggerHook: 0,
        offset: '300'
    })
        .setTween(t1)
        .setPin('.first-section')
        .addTo(controller);

    let t2 = gsap.timeline();
    t2
        .to('.top .image-container', 4, {
            height: 0
        });

    let scene2 = new ScrollMagic.Scene({
        triggerElement: '.second-section',
        duration: '100%',
        triggerHook: 0,
        offset: '100'
    })
        .setTween(t2)
        .setPin('.second-section')
        .addTo(controller);

    let t3 = gsap.timeline();
    t3
        .to('.section_3_01', 4, {
            y: -120,
            ease: Power3.easeInOut
        })
        .to('.section_3_02', 4, {
            y: -100,
            ease: Power3.easeInOut
        }, '-=4')
        .to('.section_3_03', 4, {
            y: -50,
            ease: Power3.easeInOut
        }, '-=4')
        .to('.section_3_04', 4, {
            y: 0,
            ease: Power3.easeInOut
        }, '-=4')
        .to('.section_3_05', 4, {
            y: 100,
            ease: Power3.easeInOut
        }, '-=4')
        .to('.section_3_06', 4, {
            y: 120,
            ease: Power3.easeInOut
        }, '-=4')

    let scene3 = new ScrollMagic.Scene({
        triggerElement: '.third-section',
        duration: '100%',
        triggerHook: 0,
        offset: '200'
    })
        .setTween(t3)
        .setPin('.third-section')
        .addTo(controller);

    let t4 = gsap.timeline();
    t4
        .to('.section_4_01', 4, {
            autoAlpha: 0
        })
        .from('.section_4_02', 4, {
            autoAlpha: 0
        }, '-=4')
        .from('.section_4_03', 4, {
            autoAlpha: 0
        })
        .from('.section_4_04', 4, {
            autoAlpha: 0
        })

    let scene4 = new ScrollMagic.Scene({
        triggerElement: '.forth-section',
        duration: '100%',
        triggerHook: 0,
        offset: '200'
    })
        .setTween(t4)
        .setPin('.forth-section')
        .addTo(controller);
})






















const carousel = document.querySelector(".carousel"),
firstImg = carousel.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".wrapper i");
let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;
const showHideIcons = () => {
    // showing and hiding prev/next icon according to carousel scroll left value
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}
arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
        // if clicked icon is left, reduce width value from the carousel scroll left else add to it
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
    });
});
const autoSlide = () => {
    // if there is no image left to scroll then return from here
    if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;
    positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
    let firstImgWidth = firstImg.clientWidth + 14;
    // getting difference value that needs to add or reduce from carousel left to take middle img center
    let valDifference = firstImgWidth - positionDiff;
    if(carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
        return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
    }
    // if user is scrolling to the left
    carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
}
const dragStart = (e) => {
    // updatating global variables value on mouse down event
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carousel.scrollLeft;
}
const dragging = (e) => {
    // scrolling images/carousel to left according to mouse pointer
    if(!isDragStart) return;
    e.preventDefault();
    isDragging = true;
    carousel.classList.add("dragging");
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}
const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");
    if(!isDragging) return;
    isDragging = false;
    autoSlide();
}
carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);
document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchend", dragStop);
 </script>
</body>

</html>