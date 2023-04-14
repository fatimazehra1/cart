
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <Title>Sandip Dust 2020</Title>
    <link rel="stylesheet" type="text/css" href="style/style.css">

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












.wrapper {
	min-height: 100vh;
    background: #1d373f;
    overflow-x: hidden;
}

.factsContainer {
    padding: 0em 2em;
    text-align: center;
    line-height: 10vh;
}

.factsContainer h2 {
    font-size: 1.8em;
    transform: scale(0);
    padding: 2em 0em;
    margin-bottom: 15vh;
    color: #F0C368;
}

.factsContainer_sm {
    display: flex;
    width: 300vw;
}

.fact {
    display: flex;
    flex-direction: column;
    height: 40vh;
    flex: 1;
    justify-content: space-between;
    padding: 1em;
    align-items: center;
    color: #F0C368;
}

.fact img {
    width: 25vw;
    height: 25vh;
    margin: 1em;
}

.socialContainer{
  width: 100vw;
  height: 100vh;
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



    <div class="wrapper">
        <div class="factsContainer">
        <h2>Few Facts about me</h2>
        <div class="factsContainer_sm">
          <div class="fact">
            <h3>3 words to describe me: </h3>
            <img src="https://source.unsplash.com/random" alt="">
            <h3>Creative , Adventourous , Hardworking</h3>
          </div>
          <div class="fact">
            <h3>Favourite Food</h3>
            <img src="https://source.unsplash.com/random" alt="">
            <h3>Tonnes of this stuff ^</h3>
          </div>
          <div class="fact">
            <h3>Favourite TV Series</h3>
            <img src="https://source.unsplash.com/random" alt="">
            <h3>Nine Nine 🤙</h3>
          </div>
          <div class="fact">
            <h3>Where are you most likely to be found</h3>
            <img src="https://source.unsplash.com/random" alt="">
            <h3>With my head in the fridge</h3>
          </div>
          <div class="fact">
            <h3>Favourite Music Artist</h3>
            <img src="https://source.unsplash.com/random" alt="">
            <h3>Kygo</h3>
          </div>
          <div class="fact">
            <h3>Favourite Sport</h3>
            <img src="https://source.unsplash.com/random" alt="">
            <h3>Swimming</h3>
          </div>
        </div>
     </div>
        <div class="socialContainer">
          <h3>Well</h3>
        </div>
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
 </script>
</body>

</html>