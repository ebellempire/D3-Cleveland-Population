<!DOCTYPE html>

<html>
	
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	    <title>Cleveland Population Change, 1800-2010</title>
		<script>
		  WebFontConfig = {
		    google: { families: [ 'Open+Sans:400,700,400italic:latin' ] }
		  };
		  (function() {
		    var wf = document.createElement('script');
		    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		    wf.type = 'text/javascript';
		    wf.async = 'true';
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(wf, s);
		  })(); 			
		</script>

	</head>
	
	<body>
		
		<article>
			<header>
				<h1>Cleveland Population Change, 1800-2010</h1> 
			</header>
			
			
			<figure id="interactive">
			<div class="inner">
				<div class="figtitle">Fig1: Decennial Census Data</div>
				<nav class="options">
					<a id="bar-chart" href=""><span class="fa fa-bar-chart"></span> Bar Chart</a>
					<a id="line-chart" href=""><span class="fa fa-line-chart"></span> Line Chart</a>
					<a id="diverging-chart" href=""><span class="fa fa-exchange"></span> Diverging Chart</a>
					<!--a id="pie-chart" href=""><span class="fa fa-pie-chart"></span> Pie Chart</a-->
					<a id="data-table" href=""><span class="fa fa-table"></span> Data Table</a>
				</nav>
				
				<div id="data-visualization-container"></div>
			</div>
			<figcaption>Fig1: Interactive data visualization of historical population change in Cleveland, Ohio. Source: based on U.S. decennial census data, 1800 to 2010. <a class="data-download" href="data.csv">Download source data as .csv file</a>
			</figcaption>
			</figure>
		    
		    <em>The following text is taken from <a href="http://www.ohiohistorycentral.org/w/Cleveland,_Ohio?rec=687">www.ohiohistorycentral.org</a></em>
		    
			<p>Cleveland was the first settlement founded in the Connecticut Western Reserve by the Connecticut Land Company. It was named after General Moses Cleaveland, an investor in the company who led the survey of its land within the Western Reserve. The town was located along the eastern bank of the Cuyahoga River. Because of a spelling error on the original map, the community has always been spelled Cleveland instead of Cleaveland. The first survey of Cleveland was completed in 1796, and it included 220 lots. The company originally charged fifty dollars for lots in the settlement and found that few people were willing to pay that much to live there. As late as 1800, a company representative reported that only three men lived in Cleveland. Ten years later, there were only fifty-seven residents. Despite its small population, Cleveland became the Cuyahoga County seat in 1807.</p>
			
			<p>Although the settlement was located near Lake Erie, the population did not grow significantly until after the War of 1812. By this time, the threat of Native American attacks had ended and money was invested in road improvements and a harbor for the community. Cleveland became known as a market town where farmers brought crops to sell and merchants offered goods from the East. Even so, the settlement grew slowly because of the lack of adequate roads connecting it to other parts of the state. By 1820, only 606 people lived in Cleveland.</p>
			
			<p>During the 1820s, the city experienced some growth due to the arrival of new forms of transportation. The Erie Canal connected the city with the Atlantic Ocean during the 1820s. The first steamboat on Lake Erie, the Walk-In-The-Water, allowed for quicker trade between Cleveland and other localities along the lake. During the 1820s and the 1830s, construction of the Ohio and Erie Canal connected Lake Erie with the Ohio River. In the 1850s, railroads came to Cleveland. In forty years, Cleveland's population increased from under one thousand to more than forty thousand people.</p>
			
			<p>During the late nineteenth century, Cleveland became an important industrial city. Located along numerous transportation routes as well as near large deposits of coal and iron ore, the city prospered. John D. Rockefeller and his partners began the Standard Oil Company in Cleveland during the 1860s. At the same time, Samuel Mather began steel production and enhanced Cleveland's economic importance. In 1880, twenty-eight percent of Cleveland's workforce found work in the steel mills. Cleveland emerged as an important industrial center, but its citizens sometimes suffered. During the Great Depression, both the steel and oil companies endured difficult financial times. To stay afloat, many businesses laid off workers. By 1933, roughly one-third of Cleveland's workers were unemployed during the third full year of the Great Depression.</p>
			
			<p>Cleveland became a leader in cultural and social activities in northern Ohio during the late 1800s and the early 1900s. In 1894, Euclid Beach Park opened. It was an amusement park, and locals referred to it as Cleveland's "Coney Island." Seven years later, professional baseball arrived in the city with the formation of the American League. Cleveland's team was originally known as the Cleveland Blues. It changed its name in 1915 to the Cleveland Indians. During the late 1910s, both the Cleveland Museum of Art and the Cleveland Orchestra were founded.</p>
			
			<p>During the first half of the twentieth century, Cleveland played an important role in national politics. In 1924 and in 1936, the Republican Party held its National Convention in the city.
			</p>
			
			<p>Following World War II, Cleveland experienced some difficult times. The city's population peaked at almost one million people in 1950. It has experienced a steady decline since that point. In 2000, approximately 500,000 people resided in the city. The Cleveland Browns professional football team was formed in 1946. During the 1990s, the original Cleveland Browns moved to Baltimore, Maryland, and became the Baltimore Ravens. The National Basketball Association awarded the city a professional basketball team, the Cavaliers, in 1970.</p>
			
			<p>An oil slick on the Cuyahoga River caught fire in 1969. In 1976, the United States District Court ruled that Cleveland city schools were segregated by race. Two years later, Cleveland became the first city since the Great Depression to default on its financial obligations. At that point, the city was more than thirty million dollars in debt. Cleveland remained in default until 1987.</p>
			
			<p>Despite these negative events, Cleveland residents have had much to celebrate in recent years. The Cleveland Indians emerged as one of the leading teams in the American League during the 1990s. In 1995, the Rock and Roll Hall of Fame opened. Cleveland has been named an All-America City on several occasions over the past twenty years. The National Football League awarded Cleveland a new team, and the Cleveland Browns were reborn. The Cuyahoga River Valley has been reclaimed and the City of Cleveland once again has emerged as an important economic and cultural center in the Midwest.</p>		    
		    
		</article>
			
		<script src="http://d3js.org/d3.v3.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
		<script src="libraries.js"></script>
		<script src="scripts.js"></script>
			
	</body>
	
</html>
