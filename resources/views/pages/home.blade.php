@extends('layouts.default')

@section('content')

<head>
  <title> Charisa C. Sevilla </title>
  
  <style>

  @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600&display=swap');

:root{
    --violet:#8F00FF;
}
*{
    font-family: 'Nunito', sans-serif;
    margin:0;
    padding:0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none; border:none;
    text-transform: capitalize;
    transition: all .2s linear;
}
*::selection{
    background:var(--violet);
    color:#333;
}
html{
    font-size: 62.5%;
    overflow-x: hidden;
}
html::-webkit-scrollbar{
    width:1.4rem;
}
html::-webkit-scrollbar-track{
    background:#222;
}
html::-webkit-scrollbar-thumb{
    background:var(--violet);
}
body{
    background:#111;
    overflow-x: hidden;
}
section{
    min-height: 100vh;
    padding:1rem;
}
.btn{
    padding:.7rem 3rem;
    background:#333;
    color:#fff;
    cursor: pointer;
    margin-top: 1rem;
    font-size: 2rem;
    border-radius: 5rem;
}
.btn i{
    padding:0 .5rem;
    font-size: 1.8rem;
}
.btn:hover{
    background:var(--violet);
}
.heading{
    text-align: center;
    margin:0 6rem;
    font-size: 4rem;
    padding:1rem;
    border-bottom: .1rem solid #fff4;
    color:#fff;
}
.heading span{
    color:var(--violet);
}
#home{
    display: flex;
    justify-content: center;
    text-align: center;
    flex-flow: column;
    padding:0 15rem;
}
#home h3{
    font-size: 2.5rem;
    color:#fff;
}
#home h1{
    font-size:5rem;
    color:#fff;
}
#home h1 span{
    color:var(--violet);
}
#CS202 .row{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding:1rem 0;
}
#CS202 .row .info{
    flex:1 1 48rem;
    padding:2rem 1rem;
    padding-left: 6rem;
}
#CS202 .row .info h3{
    font-size: 2rem;
    color:var(--violet);
    padding:1rem 0;
    font-weight: normal;
}
#CS202 .row .info h3 span{
    color:#eee;
    padding:0 .5rem;
}
#laravelhisto .row{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding:1rem 0;
}
#laravelhisto .row .info{
    flex:1 1 48rem;
    padding:2rem 1rem;
    padding-left: 6rem;
}
#laravelhisto .row .info h3{
    font-size: 2rem;
    color:var(--violet);
    padding:1rem 0;
    font-weight: normal;
}
#laravelhisto .row .info h3 span{
    color:#eee;
    padding:0 .5rem;
}
#about .row{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding:1rem 0;
}
#about .row .info{
    flex:1 1 48rem;
    padding:2rem 1rem;
    padding-left: 6rem;
}
#about .row .info h3{
    font-size: 2rem;
    color:var(--violet);
    padding:1rem 0;
    font-weight: normal;
}
#about .row .info h3 span{
    color:#eee;
    padding:0 .5rem;
}
#contact .row{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}
#contact .row .content{
    flex:1 1 30rem;
    padding:4rem;
    padding-bottom: 0;
}
#contact .row form{
    flex:1 1 45rem;
    padding:2rem;
    margin:2rem;
    margin-bottom: 4rem;
}
#contact .row form .box{
    padding:1.5rem;
    margin:1rem 0;
    background:#3333;
    color:#fff;
    text-transform: none;
    font-size: 1.7rem;
    width:100%;
}
#contact .row form .box::placeholder{
    text-transform: capitalize;
}
#contact .row form .message{
    height: 15rem;
    resize: none;
}
.contact .row .content .title{
    text-transform: uppercase;
    color:#fff;
    font-size: 3rem;
    padding-bottom: 2rem;
}
#contact .row .content .info h3{
    display: flex;
    align-items: center;
    font-size: 2rem;
    color:#eee;
    padding:1rem 0;
    font-weight: normal;
}
#contact .row .content .info h3 i{
    padding-right: 1rem;
    color:var(--violet);
}
.top{
    position: fixed;
    bottom:7.5rem; right: 2rem;
    z-index: 100;
    display: none;
}

@media (max-width:1200px){
    html{
        font-size: 55%;
    }
    .home{
        padding:1rem 4rem;
    }
}

@media (max-width:991px){
   #menu{
       display: block;
   }
   body{
       padding:0;
   }
}

@media (max-width:768px){
    html{
        font-size: 50%;
    }
 }

@media (max-width:400px){
    .heading{
        margin:0 3rem;
    }
    #CS202 .row .counter .box{
        width: 100%;
    }
    #laravelhisto .box-container .box{
        width:100%;
    }
    #aboutme .box-container .box{
        width:100%;
    }
    #contact .row form{
        margin:3rem 0;
    }
 }

  </style>

</head>

<body>

  <section id="home">
    <h3>Hi,</h3>
    <h1>I am <span>Charisa C. Sevilla</span></h1>
    <p></p>
  </section>

  <section id="CS202">
    <h1 class="heading"> <span> Load </span> Balancing </h1>
    <div class="row">
      <div class="info">
        <h3> <span> From the previous lectures of CS202, my favorite one was known as a server farm or server pool, that refers to efficiently dispersing incoming network traffic among a set of backend computers which is </span> load balancing.  </h3>
        <h3> <span> This lecture tackles about determining which servers can handle traffic as it meets demand for applications. </span> Load balancing algorithms, particularly round robin, are certainly familiar to me from previous Operating Systems lectures. </h3>
        <h3> <span> Some load balancing algorithms shared similarities to CPU scheduling concepts in some ways. </span> For instance, least connections that transmits the fewest current connection can be linked to shortest job first which sends in a shorter burst time. Load balancing is capable of more than simply regulating network traffic. </h3>
      </div>
    </div>
  </section>

  <section id="laravelhisto">
    <h1 class="heading"> Laravel <span> History </span> </h1>
    <div class="row">
      <div class="info">
        <h3> <span> In the history of Laravel, Codeigniter was the most popular PHP framework in 2011. It was frequently utilized since it was simple to learn and document. The CodeIgniter framework was used by many web developers, but it lacked key features like user authorisation and authentication. </span> Laravel was created by Taylor Otwell as a replacement for the Codeigniter framework.  </h3>
        <h3> <span> We know that PHP is the oldest programming language in use by programmers. </span> I think PHP is an excellent programming language for small and even large businesses alike since it meets their needs. </h3>
        <h3> <span> Laravel is one of the most popular frameworks, with a large number of features. </span> Laravel comes with a well-defined toolkit that allows developers to write less code, reducing the chances of errors. </h3>
      </div>
    </div>
  </section>

  <section id="about">
    <h1 class="heading"> <span> About</span> Me </h1>
    <div class="row">
      <div class="info">
      	<h3> <span> My name is Charisa Sevilla. I am 21 years old and I am currently studying for Bachelor of Science in Computer Science at Pamantasan ng Lungsod ng Pasig. </span> Since I started college, it has been a roller-coaster journey. This time of my life, I am learning more and more each day about myself and delving much deeper. </h3>
        <h3> <span> In 6 years, I will be 27. It seemed like something I have been hoping and praying for the rest of my life might finally happen. </span> I will be genuinely happy with the life I have and successful where I find fulfillment. I can see as well, and I am certain that our family will no longer suffer with the life we have, not anymore. </h3>
      </div>
    </div>
  </section>

  <section id="contact">
    <h1 class="heading"> <span>Contact</span> me </h1>
    <div class="row">
      <div class="content">
        <div class="info">
            <h3> <i class="fas fa-envelope"></i> sevilla_charisa@plpasig.edu.ph </h3>
            <h3> <i class="fas fa-phone"></i> +639391790679 </h3>
            <h3> <i class="fas fa-map-marker-alt"></i> Maybunga, Pasig City, Metro Manila, Philippines </h3>
        </div>
      </div>
    </div>
  </section>



</body>
</html>

@stop
