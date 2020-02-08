<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="preload" href="/inter-ui-bold-subset.woff2" as="font" type="font/woff2" crossorigin>

<title>Corona Panic</title>
<link rel="stylesheet" href="/normalize.css">
<style type="text/css">
	html {
	    -webkit-font-smoothing: antialiased;
	    -moz-osx-font-smoothing: grayscale;
	    text-rendering: optimizeLegibility;
	    background-color: #fff;
	    color: #4b5562;
	    font-family: Arial,Sans-Serif;
	    font-weight: 400;
	    line-height: 1.6;
	    scroll-behavior: smooth;
	}

	body {
		background-color: #f5b823;
	}

	h1 {
	    margin-top: 1.375em;
	    font-family: interui,system-ui;
	    font-weight: inherit;
	    line-height: 1.2;
	    color: #fff;
	    font-size: 2.5em;
	    margin-bottom: 1.875rem;
	}

	a { 
	    color: #fff;
	}
	.banner {
	    display: block;
	    padding: 50px 250px 20px 250px;
	    background-color: rgb(31, 33, 34);
	    color: ##fff;
	}
	.row {
		padding: 182px;
	}
	.skull {
		width: 23%;
		display: inline-block; 

	}
	.chance {
		width: 70%;
		display: inline-block; 

	}

</style>

<body>

	<div class="row">
		<div class="skull">
			<img src="skull.svg" alt="Skull">
		</div>

		<div class="chance">
			<h1>
				{{ $threat }} killed last year  <b><i><u>{{ $number }}</u></i></b>people so you have <b><i><u>{{ $ratio }}X</u></i></b> the chance of being killed by {{ $threat }} instead of Coronavirus
			</h1>
			<h1>Yes but what about {{ $next }} ? <a href="/?threat={{ $next }}">Let's find out</a></h1>
		</div>
	</div>
	<div class="banner">
Important disclaimer, this is an ironic web site. The only purpose is to stigmatize the sensationalization and panic spreading of the newspaper and media in general, who are actually spreading racism all over the earth. If you want to support the initiative to relieve those hitten by the virus, please donate now: 

		<p><b>Support</b> corona virus research here <a href="https://www.globalgiving.org/projects/coronavirus-relief-fund/">https://www.globalgiving.org/projects/coronavirus-relief-fund/</a></p>

		<a href="https://www.linkedin.com/in/giorgiopallocca/">About the Author</a>
	</div>
</body>
</html>