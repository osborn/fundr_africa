
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fundr Africa</title>

    <!-- Bootstrap core CSS -->
    <link href="stylesheets/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="stylesheets/css/carousel.css" rel="stylesheet">

     <link href="stylesheets/css/nav.css" rel="stylesheet">

     <link href="stylesheets/css/buttons.css" rel="stylesheet">

  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper mynavbar-wrapper">
      <!--div class="container"-->

        <div class="navbar navbar-inverse navbar-static-top mynavbar">
          <div class="container mycontainer">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand title" href="/">Fundr Africa</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a class="text" href="/discover">Discover</a></li>
                <li><a class="text" href="/learn">Learn</a></li>
                <li><a class="text" href="/create">Create</a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                <li><a id="signin"href="#">Sign Up</a></li>
                <li><a href="#">Log In</a></li>
                <li>
                  <form class="navbar-form navbar-right hidden-md" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                  </form>
                </li>
              </ul>
              
            </div>


          </div>
        <!--/div-->

      </div>
    </div>

    <div class="sub-header">
      <div class="container mycontainer">
      <p class="tagline">Start raising funds on Fundr Africa.</p></div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div class="container mycontainer"> 
        <h4>Which Category best describes your campaign?</h4>
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-primary">
            <input type="radio" name="options" id="option1"> Community
          </label>
          <label class="btn btn-primary">
            <input type="radio" name="options" id="option2"> Education
          </label>
          <label class="btn btn-primary">
            <input type="radio" name="options" id="option3"> Environment
          </label>
          <label class="btn btn-primary">
            <input type="radio" name="options" id="option3"> Health
          </label>
          <label class="btn btn-primary">
            <input type="radio" name="options" id="option3"> Religion
          </label>
        </div>  
        <br>
      
        <h4>What is your fundraising goal?</h4> 
        <input class="form-control amount" name="amount" type="number" min="1" title='Target Amount (Amount: Any amount above GHC 1+)' placeholder="GHC" required><br>
      
      
        <h4>Which person or organisation will receive the funds from your campaign?</h4>
        <div class="clearfix">
            <div class="input">
              
                  <label>
                    <input type="radio" checked name="optionsRadios" value="persons" />
                    <span>An individual person or group of people.</span>
                  </label>
                
                  <label>
                    <input type="radio" name="optionsRadios" value="ngo" />
                    <span>A non-profit institution registered in Ghana.</span>
                  </label>
                  <br>
                  <label>
                    <input type="radio" name="optionsRadios" value="reli_org" />
                    <span>A religious organization.</span>
                  </label>
                
            </div>
          </div><br><!-- /clearfix -->  

        <h4>Which city do you reside in?</h4>
        <div class="clearfix">
          
            <div class="input">
              <select name="normalSelect" id="normalSelect">
                <option>Accra</option>
                <option>Kumasi</option>
                <option>Takoradi</option>
                <option>Tamale</option>
                <option>Cape Coast</option>
              </select>
            </div>
        </div><br>
 
        <h4>How many days do you want to raise this money?</h4>
        <div class="clearfix">
          
            <div class="input">
              <select name="normalSelect" id="normalSelect">
                <option>15</option>
                <option>30</option>
                <option>45</option>
              </select>
            </div>
        </div><br>

 
        <h4>Tell us a little bit about your campaign.</h4>
        <div class="clearfix">
            <div class="input">
              <textarea class="xxlarge" id="textarea2" name="textarea2" rows="3"></textarea>
            </div>
      </div>
      <br><br>
      <p><a data-toggle="modal" class="btn btn-lg btn-primary" href="#submit">Submit Project</a></p>

      <!-- Modal -->
      <div class="modal fade" id="submit">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Project Submitted</h4>
          </div>
          <div class="modal-body">
            <h4>Thanks for submitting your project, this project will be up for donations shortly.</h4>
          </div>
          <div class="modal-footer">
            <a href="/" type="button" class="btn btn-default">Close</a> 
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->


      </div>
 


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing mycontainer">

     
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy;  2013 Fundr Africa. &middot; <a href="/privacy">Privacy</a> &middot; <a href="/terms">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="stylesheets/js/jquery.js"></script>
    <script src="stylesheets/js/bootstrap.min.js"></script>
    <script src="stylesheets/js/holder.js"></script>
  </body>
</html>
