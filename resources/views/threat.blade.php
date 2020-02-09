<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<title>Corona Panic</title>
<link rel="stylesheet" href="/normalize.css">
<link rel="stylesheet" href="/simple-grid.css">

<style type="text/css">
	html {
	    -webkit-font-smoothing: antialiased;
	    -moz-osx-font-smoothing: grayscale;
	    text-rendering: optimizeLegibility;
	    font-family: Arial,Sans-Serif;
	    font-weight: 400;
	    line-height: 1.6;
	    scroll-behavior: smooth;
	}

	body {
		background-color: #f5b823;
		padding-top: 2em;
	}

	h1 {
	    font-weight: inherit;
	    line-height: 1.2;
	    color: #fff;
	    font-size: 2.5em;
	    margin-bottom: 1.875rem;
	}

	a { 
	    color: #fff;
	}

	.container {
		background-color: #f5b823;
	}
	.banner {
	    background-color: rgb(31, 33, 34);
	}

	.footertext {
	    color: #f5f6f6;	
	    padding: 3em;	
	}

</style>

<body>

<div class="container">
      <div class="row">
        <div class="col-4">
			<img src="skull.svg" alt="Skull">
        </div>
        <div class="col-8">
			<h1>
				{{ $threat }} killed last year  <b><i>{{ $number }}</i></b> people so you have <b><i>{{ $ratio }}X</i></b> the chance of being killed by {{ $threat }} instead of Coronavirus
			</h1>
			<h1>Yes but what about {{ $next }} ? <br/><a href="/?threat={{ $next }}">Let's find out</a></h1>
			<br/>
			<br/>
			<br/>
        </div>
      </div>
</div>

      <div class="row banner">
        <div class="col-12">
        	<div class="footertext">
        			Important disclaimer, this is an ironic web site. The only purpose is to stigmatize the sensationalization and panic spreading of the newspaper and media in general, who are actually spreading racism all over the earth. If you want to support the initiative to relieve those hitten by the virus, please donate now: <br/><br/>
					Support corona virus research here <a href="https://www.globalgiving.org/projects/coronavirus-relief-fund/">https://www.globalgiving.org/projects/coronavirus-relief-fund/</a><br/><br/>
					<a href="https://www.linkedin.com/in/giorgiopallocca/">About the Author</a>
			</div>
        </div>
    </div>
</body>
</html>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158085368-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-158085368-1');
</script>
