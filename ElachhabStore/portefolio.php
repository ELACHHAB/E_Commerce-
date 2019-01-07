
<style>

.cover {
  color: #fff;
  margin-bottom: 0;
  padding: 0;
  background-color: transparent;
  display: flex;
  align-items: center;
  overflow: hidden;
  position: relative;
  min-height: 100vh;
}

.cover h1 {
  margin-bottom: 15px;
  font-size: 52px;
  font-weight: 200;
}

.cover p {
  margin-bottom: 15px;
  font-size: 26px;
  font-weight: 200;
}

.cover .navbar {
  position: fixed;
  top: 0;
  width: 100%;
  border: none;
  background-color: transparent;
  z-index: 999;
}

.active a {
  background-color: transparent;
}

.cover .navbar .navbar-toggle {
  border-color: transparent;
}

.cover .navbar .navbar-toggle:hover,
.cover .navbar .navbar-toggle:focus {
  background-color: transparent;
}

.cover .navbar .navbar-toggle .icon-bar {
  background-color: black;
}

.cover .navbar.navbar-inverse .navbar-toggle {
  border-color: transparent;
}

.cover .navbar.navbar-inverse .navbar-toggle:hover,
.cover .navbar.navbar-inverse .navbar-toggle:focus {
  background-color: transparent;
}

.cover .navbar.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #ffffff;
}

.cover .cover-image {
  z-index: -1;
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  background-image: url("https://dl.dropboxusercontent.com/s/qimk9kuuqabs8t6/nout.jpg?dl=0");
}

.cover .cover-image.background-image-fixed {
  background-attachment: fixed;
}


.navbar-toggle span {
  background-color: #fff !important;
}


.main-font  {
  font-size: 18px;
}

.main-title {
  margin: 30px 15px 70px;
}

.section {
  min-height: 100vh;
  color: #fff;
}

.header-link {
  margin-left: 10px;
  color: #fff;
}

.header-link a {
  color: #fff;
  font-size: 18px;
}

.header-link a:hover,
.header-link a:focus{
  background-color: transparent !important;
  text-shadow: 0px 0px 5px #fff;
}

@media (max-width: 768px) {
  .header-link {
    margin-left: 0;
  }
}

.logo span {
  color: #fff;
}

.logo:hover,
.logo:focus {
  background-color: transparent !important;
  text-shadow: 0px 0px 5px #fff;
}

.link-button  {
  margin: 25px;
}

.contacts-block {
  margin-top: 20%;
}

.contacts-link {
  color: #fff;
  cursor: pointer;
}

.contacts-link:hover,
.contacts-link:focus {
  color: #fff;
  text-shadow: 0px 0px 5px #fff;
}

footer {
  color: #fff;
}

.footer-background  {
  background: url(https://dl.dropboxusercontent.com/s/czh9xqpbjaim81q/back2.jpg?dl=0);
}

.contacts-background  {
  background: url("https://dl.dropboxusercontent.com/s/4dir4uefago464f/back3.jpg?dl=0");
}

.portfolio-background  {
  background: url("https://dl.dropboxusercontent.com/s/ges0i02tvdfqn0w/back1.jpg?dl=0");
}

.personal-background {
background: url("https://dl.dropboxusercontent.com/s/xlb20ji3dwaswdf/back.jpg?dl=0");
}
</style>

<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css	"/>

  </head>
  
  <body>
    <header id="home" class="cover">
      <div class="navbar header">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="logo navbar-brand" href="#home"><span>ELACHHAB HAJAR</span></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active header-link">
                <a href="#portfolio">Portfolio</a>
              </li>
              <li class="active header-link">
                <a href="#personal">About me</a>
              </li>
              <li class="active header-link">
                <a href="#contacts">Contacts</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="background-image-fixed cover-image"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1 class="text-inverse">ELACHHAB HAJAR</h1>
            <p class="text-inverse">Full Stack developer</p>
            <br>
            <br>
           <div class="col-md-3 col-xs-6 text-center">
            <a href="https://github.com/ELACHHAB" class="contacts-link" target="_blank"><i class="fa fa-3x fa-fw fa-github hub text-inverse"></i></a>
          </div>
          <div class="col-md-3">
            <a href="https://www.linkedin.com/in/hajar-elachhab/" class="contacts-link" target="_blank"><i class="fa fa-3x fa-fw fa-linkedin text-inverse"></i></a>
          </div>
          <div class="col-md-3 col-xs-6">
            <a href="https://www.facebook.com/ELACHHAB.Hajar" class="contacts-link" target="_blank"><i class="fa fa-3x fa-facebook fa-fw text-inverse"></i></a>
          </div>
          <div class="col-md-3 col-xs-6 text-center">
            <a href="https://www.youtube.com/channel/UCOIfil4o3Me_VRfTzZS3vDg/videos?view_as=subscriber" class="contacts-link" target="_blank"><i class="fa fa-3x fa-fw fa-youtube hub text-inverse"></i></a>
          </div>
          </div>
        </div>
      </div>
    </header>
    <section id="portfolio" class="section portfolio-background">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="main-title text-center">
              <i class="fa fa-fw fa-code"></i>My portfolio:
            </h1>
          </div>
        </div>
		
        <div class="row">
          <div class="col-md-6">
            <img src="seim.png"
            class="img-responsive">
            <p class="main-font">Android App using android studio and phpmyAdmin</p>
          </div>
          <div class="col-md-6">
            <img src="facialReco.png"
            class="img-responsive">
            <p class="main-font">Reconnaissance facial using python</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <img src="SmartHome.png"
            class="img-responsive">
            <p class="main-font">Web App for managing smart home using JEE And Arduino</p>
          </div>
		  <div class="row">
          <div class="col-md-6">
            <img src="ecommerce.png"
            class="backgroundcontacts-background img-responsive">
            <p class="main-font">Web App for E-commerce using html ,php , css ,JavaScript</p>
          </div>
		  
        </div>
      </div>
    </section>
    <section id="personal" class="section personal-background">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="main-title text-center">
              <i class="fa fa-fw fa-child"></i>Few words about me:</h1>
            <div class="col-md-12">
              <p class="main-font">I am a full stack developer from Morocco .
                <br>At the moment I'm working on Decentralized application.
                <br>For me this project is to obtain fundamental knowledge about the blockchain
							development
								<br>and the chance to touch How blockchain revolutionizes computer security.</p>
            </div>
            <div class="col-md-12">
              <h1 class="main-title text-center">
                <i class="fa fa-fw fa-gears"></i>Technical Skills:</h1>
              <div class="col-md-12">
                <ul class="main-font">
                  <li>CSS3,HTML5,JavaScript,Jquery,PHP</li>
				  <li>C</li>
                  <li>JAVA/JEE</li>
				  <li>PYTHON(Tensorflow,Opencv)</li>
				  <li>C++</li>
				  <li>C#</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contacts" class="section contacts-background">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="main-title text-center">
              <i class="fa fa-star fa-fw"></i>My Contacts:
            </h1>
          </div>
        </div>
        <div class="contacts-block row text-center">
          <div class="col-md-3 text-center">
		  <a href="https://github.com/ELACHHAB" class="contacts-link" target="_blank"><i class="fa fa-3x fa-fw fa-github hub text-inverse"></i></a>
          </div>
          <div class="col-md-3">
		  <a href="https://www.linkedin.com/in/hajar-elachhab/" class="contacts-link" target="_blank"><i class="fa fa-3x fa-fw fa-linkedin text-inverse"></i></a>
          </div>
          <div class="col-md-3 col-xs-6">
            <a href="https://www.facebook.com/ELACHHAB.Hajar" class="contacts-link" target="_blank"><i class="fa fa-3x fa-facebook fa-fw text-inverse"></i></a>
          </div>
          <div class="col-md-3 col-xs-6 text-center">
            <a href="https://www.youtube.com/channel/UCOIfil4o3Me_VRfTzZS3vDg/videos?view_as=subscriber" class="contacts-link" target="_blank"><i class="fa fa-3x fa-fw fa-youtube hub text-inverse"></i></a>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer-background">
      <div class="container">
        <div class="row footer-background">
          <div class="col-sm-6">
            <h3>ELACHHAB HAJAR &nbsp;ツ Full stack developer</h3>
          </div>
        </div>
      </div>
    </footer>
  </body>

</html>