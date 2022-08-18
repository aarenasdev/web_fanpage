<style>
    @import url(//fonts.googleapis.com/css?family=Lato:300:400);
  
  body {
  margin:0;
  }
  
  .h11 {
  font-family: 'Lato', sans-serif;
  font-weight:300;
  letter-spacing: 2px;
  font-size:48px;
  }
  .p1 {
  font-family: 'Lato', sans-serif;
  letter-spacing: 1px;
  font-size:14px;
  color: #333333;
  }
  .container1 {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background-image: url("https://source.unsplash.com/1920x1080/?nature");
  background-size: cover;
  background-position: center center;
  }
  
  .header1 {
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.75) -10%, rgba(0, 0, 0, 0) 100%);
  text-align: center;
  padding: 0.5rem 0 5rem;
  font-size: 1.25rem;
  }
  .logo {
  width:50px;
  fill:white;
  padding-right:15px;
  display:inline-block;
  vertical-align: middle;
  }
  
  .inner-header {
  height:65vh;
  width:100%;
  margin: 0;
  padding: 0;
  }
  
  .flex { /*Flexbox for containers*/
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  }
  
  .ul1 {
  list-style: none;
  margin: 0;
  padding: 0;
  }
  
  .li1 {
  display: inline-flex;
  }
  
  .a1 {
  position: relative;
  padding: 1rem 0 0.5rem;
  margin: 0 1.5rem;
  color: white;
  text-decoration: none;
  text-transform: uppercase;
  }
.a1::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%) scaleX(0);
  transform-origin: 50% 50%;
  width: 100%;
  height: 1px;
  background-color: rgba(255, 255, 255, 0.8);
  transition: transform 250ms;
  }
  .a1:hover::after {
  transform: translateX(-50%) scaleX(1);
  }
  
  .waves {
  position:relative;
  width: 100%;
  height:15vh;
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:100px;
  max-height:150px;
  }
  
  .content {
  position:relative;
  height:20vh;
  text-align:center;
  background-color: white;
  }
  
  /* Animation */
  
  .parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
  }
  .parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
  }
  .parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
  }
  .parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
  }
  .parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
  }
  @keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
  }
  /*Shrinking for mobile*/
  @media (max-width: 768px) {
  .waves {
    height:40px;
    min-height:40px;
  }
  .content {
    height:30vh;
  }
  h1 {
    font-size:24px;
  }
  
  }
  </style>

  @yield('contenido')