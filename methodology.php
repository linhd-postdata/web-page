<?php 
$inicio=1;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >

<head>
<title>Methodology</title>
   
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="keywords" content="poesia" />
		<meta name="description" content="Postdata" />
<meta name="autor" content="mluisadiezplatas" />
    <meta name="robots" content="all,follow" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Optional theme -->
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" title="no title" charset="utf-8" />
  <link rel="stylesheet" href="css/fontawasome.css" type="text/css" media="screen" title="no title" charset="utf-8" />
  <link rel="stylesheet" href="css/glyphicons.css" type="text/css" media="screen" title="no title" charset="utf-8" />
  <link rel="stylesheet" href="css/glyphicons-halflings.css" type="text/css" media="screen" title="no title" charset="utf-8" />
  <link rel="stylesheet" href="css/glyphicons-social.css" type="text/css" media="screen" title="no title" charset="utf-8" />





</head>

<body style="background-color: #ffffff">
	<?php include('includes/cabecera3.php'); ?>
<div class="container-fluid" >
<div class="row first-row" >

	<div class="col-md-1"><span class="fontawesome-icons" style="color:#e0922e !important"><span class="fontawesome-icon"><i class="fa fa-share-alt fa-5x" data-fa-transform="" data-fa-mask=""></i></span></span></div>

<div class="col-md-10" ><h1 style="color:#e0922e !important">TOWARDS A NETWORK OF ONTOLOGIES FOR THE EUROPEAN POETRY /h1></div>
</div>
	
	<hr class="line"/>


<br/><br/>
<div class="row leftext-row" >
<div class="col-md-12"> <p>The main objective of the POSTDATA project is to achieve the standardisation of poetry and to make available to the different communities the data on poetic works and their analysis as linked open data (LOD). This objective has been undertaken from different points of view.</p>
<p>From the philological point of view, the main objective of this proposal is the development of an abstract model of poetic representation based on existing philological concepts taken from projects, manuals and corpus of different traditions.  </p>
<p>From the technological point of view, the aim of the project is to translate philological standardization into digital humanities standards. This has been done through the construction of an ontological model using semantic web technologies and W3C standards (such as OWL) that allows the publication of metadata extracted from philological conceptualization as open linked data (LOD), ready to be shared, linked and improved by the user community.</p><br/>

<p>In order to achieve these objectives, the following stages have been carried out:
	<ol>

<li> The realization of a comparative analysis of projects and digital repertoires of different poetic traditions like a starting point to extract the main conceptual elements and properties in order the construction a domain model.</li>
<li>The construction of a domain model that captures the concepts and relationships of the domain of European poetry.</li>
<li>The construction of a network of ontologies that becomes an interoperable standard in the field of the Semantic Web for the representation of the domain of European poetry.</li>
<li>The storage and publication of data in a format that allows them to be accessible as open linked data (LOD).</li>

</ol>
</p>
</div>

</div>

<hr class="dashed-line"/>

<!---------------------------------------------------STARTING POINT-------------ANALYSYS REPERTORIES----------------------------------------------------------------------->

<div class="row leftext-row" >
<div class="col-md-12 col-xs-12 col-sm-12 div-text-stage "  >

<a name="repertories"></a>

<div  ><h2><a href="https://www.google.com/maps/d/embed?mid=15MAs3lVHlOk-eWUfBWXBP_prHbE" hreflang="en"  target="new" >1. Starting point- Analysis of repertoires</h2></a></div>

<p>The starting point for the definition of the Domain Model for the European Poetry (DM-EP) is a set of twenty five repertoires, most of them available on the Web of Documents. These twenty five repertoires are served by databases, where the data models are relational or hierarchical.</p>
<p> The repertoires represent different poetry traditions, languages and cultures. The criterion with most weight in the selection of repertoires was their availability, both in terms of having access to their internal structure and in terms of the ability of our research team to understand and analyse their contents. </p>
<p>Nevertheless, great efforts were made in order to gather a representative sample for which the language, the period of composition, and the prosodic system (metre) were considered as defining criteria.</p>
<p>POSTDATA contacted delegates from the different repertoires, inviting them to participate as stakeholders of the project. The delegates were asked to  send  the  structure   of   thedatabases and any additional documentation in order for the researchers to be able toanalyse and study the data models. Thus, the starting point for the analysis was a set of MySQL dumps, XSD and XML files, Perl scripts, and spreadsheets.</p>
Some of the repositories analyzed are:
<ul>
	<li><a href="http://bernal.cirp.gal/ords/f?p=MEDDB3:2" target="new">MedDB - Base de datos da Lírica Profana Galego-Portuguesa </a></li>
	<li><a href="http://www.eighteenthcenturypoetry.org" target="new">Eigtheen Century Poetry Archive </a></li>
	<li><a href="http://www.folklore.ee/regilaul/andmebaas/" target="new">Estonian Runic Songs </a></li>
	<li><a href="https://skaldic.abdn.ac.uk/m.php?p=skaldic" target="new">Skaldic Poetry of the Scandinavian Middle Ages </a></li>
	<li><a href="http://www.liederenbank.nl" target="new">Nederlandse liederenbank </a></li>

</ul><br/>
	* For more information, see the deliverable <a href="https://github.com/linhd-postdata/Network-of-ontologies/blob/master/Documents/wp1-1%20-%20Analyses%20of%20the%20informational%20needs%20of%20the%20Web%20User%20Interfaces%20of%20Repertoires%20of%20European%20poetry.pdf" target="new">Analyses of the informational needs of the Web User Interfaces of Repertoires of European poetry</a><br/><br/><br/>
<p>The map below, also available in this <a href="https://goo.gl/9MCWrv" target="new">link</a>, locates these repertoires in one of the countries where the poetic tradition at hand was originated, and they are grouped accordingto chronological criteria. </p>

	
	
	
 
 </div>
</div>
<div class="row last-row" >

	<div class="col-md-12" style="padding-top:2%"><iframe src="https://www.google.com/maps/d/embed?mid=15MAs3lVHlOk-eWUfBWXBP_prHbE" width="90%" height="480"></iframe></div>
	Illustration 1. Map of repertories
	</div>
	<hr class="dashed-line"/>
<!--------------------------------------------------------------- DOMAIN MODEL DESIGN ---------------------------------------------------------------------------------------------->

	
<div class="row leftext-row" >
<div class="col-md-12 " class="div-text-stage" >

<h2 ><div class="title_sep_domain"><a href="http://postdata-prototype.linhd.uned.es/domain-model.php" hreflang="en" target="new" style="text-align:left; color:#00acec">2. Design of Domain Model for European Poetry (DM-EP)</a></div></h2>

	<p>The definition of the domain model, a common conceptual model that should represent the informational needs of the European poetry (EP) community of practice, integrates the data requirements that result from defining the functional requirements, together with the results of the following sub-activities:<br/>
		<ul><li>Analysis of the data model of a representative sample of EP databases.</li>
			<li>Analysis of a survey addressed to the final users of the repertoires in order to understandthe data needs of the users of poetry databases.</li>
		</ul>
	</p>
	<p>The repertoires mentioned in <a href="#repertories">paragraph 1</a> were employed in different moments of the development process and the map available in <a href="https://goo.gl/O0mqhI" target="new">this link </a>shows what repertoires wereused in which phases. Figure 2 presents the development process of the DM-EP showing the different stages ofwork, analysis and validation. The DM-EP was developed in an iterative way and, over time,information from different sources was collected and included as explained as follows.During the process of analysis of a data model every concept of the database, as well as the properties that characterize that concept,are identified the relationships between concepts are also defined. The analysis has been carried out through an iterative process.</p>
<p>As a result, at the end of the procedure the level of abstraction is higher than it was at the start, which decreases the level of granularity of the final model.
 As in any process of semantic modelling, there is always some tension between interoperability and semantics. The level of semantics is related to the possibilities of data sharing, which means that the researchers look for the highest level of meaning in the definition of the concepts without compromising interoperability. The concept that has been already identified while analysing other databases, semantics may be lost in favour of interoperability gain: a new broader concept is created.</p>
 <p>The work team applied a reverse   engineering   approach   using   software   engineering   techniques.   To   extract   and compare all the concepts in each data model and to construct a common model out of them, the work team decided  to build  conceptual models  for each one of the data models analysed. This process is described in detail in Curado Malta, Centenera, and Gonzalez-Blanco (2017)<sup>1</sup> and Bermúdez-Sabel, Curado Malta, and Gonzalez-Blanco (2017)<sup>2</sup>.</p>
<p>The diagram below shows the workflow of the Domain Model development process</p><br/></div>
<div class="last-row">
<img src="images/dmodel.png" width="50%" border="1px solid #ffffff" /><br/>
Illustration 2. Workflow of the Domain Model development process.
</div><br/>
<p>* For more information, see the deliverable <a href="https://github.com/linhd-postdata/Network-of-ontologies/blob/master/Documents/wp2-2%20-%20Domain%20Model%20for%20European%20Poetry.pdf" target="new">Poetry Standardization and Linked Open Data</a>
<br/>

<h3>The domain model</h3>

<p>	The DM-EP is a model with 40 entities, 494 attributes and 409 relations. <br/>The complete model is available at <a href="http://postdata-prototype.linhd.uned.es/domain-model.php" target="new">http://postdata-prototype.linhd.uned.es/domain-model.ph</a></p>

<p>This model is very complex due mainly to its completeness. Therefore, to facilitate its understanding and visualization, some areas of knowledge have been identified that allow a simpler study and analysis. Each area includes the concepts and properties related to the theme of the area, and there is an area that is a miscellany of concepts that are related to the works but do not refer to a specific domain of knowledge. These areas are shown in the image below that corresponds to the main page of the model visualization tool.</p>
<br/><br/>
<div style="text-align: center"><a href="http://postdata-prototype.linhd.uned.es/domain-visualization.php" target="new"><img src="images/domainareas.png" width="50%" /></a><br/>Illustration 3. Visualization tool page</div>
</div>	
<br/><br/>
<div class="citation-block last-row">
<h3><a href="http://postdata-prototype.linhd.uned.es/domain-visualization.php" target="new"><span class="fontawesome-icons" style="color:#e0922e !important"><span class="fontawesome-icon"><i class="fa fa-hand-o-right fa-2x" data-fa-transform="" data-fa-mask=""></i></span></span>Access to the visualization tool </a> </h3>


<br/><br/>

<p ><sup>1</sup> Bermúdez-Sabel,   Helena,   Mariana   Curado   Malta,   and   Elena   Gonzalez-Blanco.   2017. <em>‘Towards Interoperability in the European Poetry Community: The Standardization ofPhilological   Concepts’.</em>   In  Language,   Data,   and   Knowledge:   First   InternationalConference, LDK 2017, Galway, Ireland, June 19-20, 2017, Proceedings, edited byJorge Gracia, Francis Bond, John P. McCrae, Paul Buitelaar, Christian Chiarcos, andSebastian   Hellmann,   156–65.   Cham:   Springer   International   Publishing.https://doi.org/10.1007/978-3-319-59888-8_14.</p>
<p ><sup>2</sup> Curado  Malta,  Mariana,  Paloma  Centenera,  and Elena  Gonzalez-Blanco.  2017.  <em>‘UsingReverse Engineering to Define a Domain Model: The Case of the Development of aMetadata   Application   Profile   for   European   Poetry’.</em>   In  Developing   Metadata Application Profiles, by Mariana Curado Malta, Ana Alice Baptista, and Paul Walk,146–80. IGI Global. https://doi.org/10.4018/978-1-5225-2221-8.</p></div>
	</div>

<hr class="dashed-line"/>
	<!----------------------------------------------------------- NETWORK OF ONTOLOGIES ------------------------------------------------->
	
<div class="row" style="lefttext-row">
<div class="col-md-12 " style="padding:2%"  >




<h2><div class="title_sep_domain"><a href="http://postdata-prototype.linhd.uned.es/ontology.php" hreflang="en" style="text-align:left; color:#00acec">3. Network of ontologies</a></div></h2>
<p>As already mentioned, one of the aims of POSTDATA project (Poetry Standardization and Linked Open Data) is to create a platform where poetry researchers can publish their semantically enriched data about European Poetry like linked open data (LOD).</p>
 
<p>Consequently, an ontology's development will help researchers in the organization of their information applying computational methods to their data. It will provide a platform to easily communicate with the researching community on European poetry, making data interchangeable. Moreover, it will allow the creation of application to retrieve, consult and edit the data.</p>

<p>Due to the complexity of the domain it has been considered convenient to start from the areas of knowledge identified  in the model and to realize a modular design for the ontological model. From the areas of knowledge identified in the domain model, a series of subdomains have been defined . This subdomains  will be analyzed in order to manage the complexity and facilitate the transition towards the ontology sought.</p>
<p>The semantic scope has been profusely analyzed for  the conception of the areas and later the subdomains. 

At this point it is necessary to refine the structure to determine which of the subdomains corresponds to a complete and independient ontology or if it is necessary to merge them with others to create a larger ontology.</p>

<p>For this task it has been decided to apply the following criteria to determinate the ontologies must been created.
The criteria are:
<ul style="list-style: none"><li >
 1. Strong cohesion in every ontology, that is, the classes in the ontology are related and it is not necessary to use any extern class to complete the classes coherent and complete definition. Therefore, the ontologies are self contained.</li>
<li>2. Weak coupling that is, a minimum number of relations between ontologies. This relations must been related with aspects to enrichment the knowledge provided by the ontology or whether additional features need to be covered.</li></ul></p>
<p>In adition, it took acount the refinement of the concepts and properties identified in the domain for each of the subdomains and the identification of ontologies and ontological design patterns for reuse and alignment 	</p>
<p>This process has given rise to a network of ontologies that is shown in the illustration on the right that can be consulted in the link that appears below.</p>
	  
	
<h3><a href="http://postdata-prototype.linhd.uned.es/ontology.php" target="new"><span class="fontawesome-icons" style="color:#e0922e !important"><span class="fontawesome-icon"><i class="fa fa-hand-o-right fa-2x" data-fa-transform="" data-fa-mask=""></i></span></span>Access to network of ontologies</a> </h3>
	 </div>
	 
 <div class="col-md-12 " style="padding:2%"  >
<img src="images/red.jpg" width="95%">
	
	 </div>
 
 
	</div>
<?php include("includes/pie.php"); ?>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

</body>

</html>




