<?php include("parts/head.php"); ?>
<?php include("parts/nav.php"); ?>

<main id="main">
  <div id="content" class="container page">

    <div class="cover"><canvas id="canvas"></canvas></div>
    <article class="page" data-base="#A5D8FF" data-highlight="#36393B">
      <h1 class="page-title">intervals II</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ex, doloremque, inventore cupiditate ducimus ad obcaecati, corrupti eaque delectus, quasi nesciunt facilis. Odit pariatur vitae possimus assumenda dolorum, deserunt ullam!</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <figure>
        <img src="assets/img/img2.jpg" alt="hess">
      </figure>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </article>

    <script>
function Transition(){var a,b,c,d,e,f,k,g=2,h=60,i=20,j=0;this.initialize=function(){a=document.getElementById("canvas"),b=a.getContext("2d"),c=window.innerWidth,d=window.innerHeight,e=c/2,f=d/2,a.width=c,a.height=d,m(),a.addEventListener("click",p,!1);setInterval(o,20)};var m=function(){k=new n;var d,c=k;for(d=0;d<i;d++)c.ang=d*i,c.vang=1,c.r=10,c.vr=0,c.x=e,c.y=f,d!=i-1&&(c.next=new n,c=c.next)},n=function(){this.ang,this.vang,this.r,this.vr,this.x,this.y,this.next},o=function(){for(var a=0,c=k;c;)if(a++,c.r>400)c=c.next;else{var d=Math.random();if(d<.1)c.vang=0,c.vr=g;else if(d<.2)c.vang=-g,c.vr=0;else if(d<.3)c.vang=g,c.vr=0;else if(d<.304&&j<h){var i=new n;i.ang=c.ang,0==c.ang?i.vang=0:i.vang=Math.random()<.5?-1:1,i.r=c.r,0==c.vang?i.vr=1:i.vr=0,i.x=c.x,i.y=c.y,i.next=c.next,c.next=i}var l=c.ang+c.vang;c.r=c.r+c.vr;var m=Math.PI/180*l,o=c.r*Math.cos(m),p=c.r*Math.sin(m),q=Math.sqrt(o*o+p*p),r=Math.PI/180*(l-(l-c.ang)/2),s=q*Math.cos(r),t=q*Math.sin(r);b.beginPath(),b.strokeStyle="#000000",b.moveTo(c.x,c.y),b.quadraticCurveTo(s+e,t+f,o+e,p+f),b.stroke(),b.closePath(),c.x=o+e,c.y=p+f,c.ang=l,c=c.next}j=a},p=function(a){a.preventDefault(),b.fillStyle="rgba(255, 255, 255, 1.0)",b.beginPath(),b.rect(0,0,c,d),b.closePath(),b.fill(),m()}}var app=new Transition;app.initialize();
    </script>

  </div>
</main>

<?php include("parts/footer.php"); ?>
