<?php 
$inicio=1;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >

<head>
<title>Network of ontologies - POSTDATA</title>
   
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
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
	
	<script type="text/javascript">
$(document).ready(function()
{
    $("#botella").mlens(
    {
        imgSrc: $("#botella").attr("data-big"),   // path of the hi-res version of the image
        lensShape: "circle",                // shape of the lens (circle/square)
        lensSize: 180,                  // size of the lens (in px)
        borderSize: 4,                  // size of the lens border (in px)
        borderColor: "#fff",                // color of the lens border (#hex)
        borderRadius: 0,                // border radius (optional, only if the shape is square)
        imgOverlay: $("#botella").attr("data-overlay"), // path of the overlay image (optional)
        overlayAdapt: true // true if the overlay image has to adapt to the lens size (true/false)
    });
});
</script>
 <style type="text/css">

.zoom{
/* Aumentamos la anchura y altura durante 2 segundos */
transition: width 2s, height 2s, transform 2s;
-moz-transition: width 2s, height 2s, -moz-transform 2s;
-webkit-transition: width 2s, height 2s, -webkit-transform 2s;
-o-transition: width 2s, height 2s,-o-transform 2s;
}
.zoom:hover{
/* tranformamos el elemento al pasar el mouse por encima al doble de
su tamaño con scale(2). */
transform : scale(1.8);
-moz-transform : scale(1.8); /* Firefox */
-webkit-transform : scale(1.8); /* Chrome - Safari */
-o-transform : scale(1.8); /* Opera */
	margin-top:300px;
	
	margin-left:30%;
}

</style>




</head>

<body style="background-color: #ffffff">
	<?php include('includes/cabecera3.php'); ?>
<div class="container-fluid" >
<div class="row first-row" >
	<div class="col-md-1"><span class="fontawesome-icons" style="color:#e0922e !important"><span class="fontawesome-icon"><i class="fa fa-share-alt fa-5x" data-fa-transform="" data-fa-mask=""></i></span></span></div>

<div class="col-md-10" ><h1 style="color:#e0922e !important">A NETWORK OF ONTOLOGIES FOR EUROPEAN POETRY </h1></div>

</div>
	<div style="border:2px solid #e0922e;"></div>

<br/><br/>

<div class="row ">


<div class="col-md-12"> 
 
<p>The starting point for a development of ontology is <a href="http://postdata-prototype.linhd.uned.es/domain-model.php" target="new">the domain model for European Poetry</a>. 
This model was created through a process of inverse engineering to carry out the first steps of an ontology development. These are analysis of patterns, establishment of functional and non-functional requirements.The resulting conceptual model presents a great complexity because of its exhaustiveness and for the various conceptual aspects and areas that have been dealt with. It covers both the bibliographical and techiniqual information of the works, and also information that comes from literary and prosodic analysis. Moreover, it includes texts' enriching elements like images and musical notation.</p>

<p>Before the ontology development process began, in order to reduce the complexity of the model, from the knowledge areas identified in the model a series of subdomains have been defined.</p>
<p>The identified subdomains, which are shown in the illustration below:
<ul>
<li>A central subdomain with the concepts and properties for the representation of the poetic work.</li>
<li>A subdomain with the necessary entities  to deal with the aspects of the transmission of the poetic work.</li>
<li>A subdomain with the necessary concepts and properties  to describe the structural elements .</li>
<li>A subdomain with the necessary concepts and properties  to describe the prosodic elements of a poem.</li>
<li>A subdomain to incorporate the necessary knowledge  for the literary analysis of the work.</li>
<li>A subdomain dealing with musical concepts and properties related to the work.</li>
<li>A subdomain that deals with the conceptualization of entities related to the works, such as illustrations.</li>
<li>A generic subdomain with the necessary concepts and properties  for the representation of agents, places and related events and roles.</li>
</ul></p><p> The graph below shows the subdomains</p>
</div>

</div>
<div class="row first-row" >

		<div class="col-md-12"  style="padding-top:2%"  >

<img src="images/areas.png" width="50%"><br/>
Illustration 1. Model subdomains<br/><br/>
</div>
</div>
<div class="row ">


<div class="col-md-12"> 
<p>
Therefore, the development of an ontological model for European poetry has been carried out through a modular design that is derived, initially, from the subdomains identified in the domain model. Subdomains have a well defined semantics but it is necessary to make refinements to determine which of the subdomains corresponds to a complete and independient ontology or if it is necessary to merge them with others to create a larger ontology.</p>
<p>The modular design gives rise to several ontologies. This process results in a network of ontologies for European poetry. 
The development is carried out taking into account the following criteria:
<ul style="list-style: none"><li >

i. The classes, relations and axioms of the ontology are thematically related. In this case, it is a question of guaranteeing that the underlying semantics of each class is related to the area of knowledge.</li>

<li>ii. Weak coupling, that is, the ontology must present sufficient autonomy, that is, it is a self-contained ontological module that preserves the relationships with other ontologies(Oh, Yeom, & Ahn, 2011). </li>

<li>iii. Strong cohesion, that is, the ontology must have the maximum number of properties between classes to achieve a high degree of cohesion in the ontology, which describes the functionality of the ontology and avoid as much as possible the coupling with other ontologies, i.e. the degree of interdependence between ontologies is small.</li>
</ul>
<br/><br/>

<h4> Metrics </h4>
<p>To measure the degrees of cohesion, a metric proposed in (Oh, Yeom, & Ahn, 2011) is applied, which measures the cohesion of the modules, i.e. the ontologies, independently of the cohesion of the ontological network. The metric used takes into account a factor that ensures the quality of the module. This factor is the degree of internal relations in the module, that is, the degree of cohesion present in the module that undoubtedly influence the coupling with other modules. This also makes it possible to verify the logical consistency between the modules and the complete ontology.</p>

<p>Cohesion in an ontology module has to do with the degree of relationship of the classes in the module. Classes are related when they share properties or have connections with other classes. Therefore, the relations contemplated in this metric can be both hierarchical in which the properties of the parent are shared and non-hierarchical that connect the classes to each other. </p>
<ul><li><h5>Cohesion</h5>
	<div class="first-row">
	<img src="images/metrica.png"  width="40%"/><br/>Formula 1. Cohesion calculation formula</div></li>
	<li><h5>Coupling</h5>The dependencies established with other modules of the ontology (through import), which are necessary to complete the defined module, will be considered for this measure. </li></ul></p>


<div>	<p>For every subdomain  has been carried out  an analysis for: 
	<ul><li>
Identification of the own classes of the subdomain and identification of possible refinements in the definition of the classes</li>
<li>Identification of the attributes or data properties of each of the classes</li>
<li>Identification of the properties of objects that are resolved within the subdomain that is being modeled </li>
<li>Definition of cardinalities and obligatory restrictions </li>
<li>In all cases considerations of reuse and alignment of ontologies and ontological patterns </li></ul></p>
</div>



</div></div>
<div class="row">
	 <div class="col-md-12" style="text-align:left; ">
	 	<h3>The network of ontologies</h3>
	 	<p>From this process the following ontologies have been identified as part of the network of ontologies for the domain of European poetry</p>
	
		 
	  
	<h4> <a href="http://postdata.linhd.uned.es/ontology/postdata-core/">1. postdata-core ontology  <span class="fontawesome-icons" ><span class="fontawesome-icon"><i class="fa fa-external-link fa-1x" data-fa-transform="" data-fa-mask=""></i></span></span></a></h4>
	<p>This ontology covers with aspects related to poetic works and their manifestations.</p>
<P>The classes PoeticWork, Redaction and Ensemble have been defined for this purpose.</P>
<P>Since it is the core or central ontology of the network, classes that are not typical of one of the domains related to poetry but that represent a transversal knowledge have also been incorporated. These classes complete the relevant information not only for the classes of the core ontology but also for other ontologies of a more specific domain. </P>
<P>The following entities have therefore been identified: 
<ul><li>Person and Organisation, to model the agents that intervene in the poetic work with different roles.</li>
<li>CreatorRole and Role that model the authorship or creation of the works and elements of manifestation and transmission and other roles as editor, for example.</li>
<li>Place and Event, to represent places of origin and mentioned events.</li></ul></P>
<p>The core ontology, would be imported by the rest of ontologies of the network, for this reason besides containing the mentioned classes, it also provides a set of common properties that have the same semantics in all the classes in which they are defined. In this way it is possible to express semantics in an unambiguous way for properties that from this point of view represent conceptually the same thing.  </p> 

<h4><a href="http://postdata.linhd.uned.es/ontology/postdata-dates/">2. postdata-dates ontology  <span class="fontawesome-icons" ><span class="fontawesome-icon"><i class="fa fa-external-link fa-1x" data-fa-transform="" data-fa-mask=""></i></span></span></a></h4>
<p>From the properties of data associated with classes, which are related to the dating of the work, its manifestations and its transmission, some characteristics have been identified, especially in the form of expression of the date, which are commonly used in the domain in question or in literary domains in general. In this domain, the difficulty of dating works according to established formats must be taken into consideration. Many times the dates cannot be determined with the required accuracy and many times they are compromised by the lack of accuracy of the date, which also requires additional elements of information to comment on issues of dating. 
From the foregoing, it has been considered appropriate to propose the creation of a small ontology of dates in which the forms of representation of dates in the context in which work is being carried out and the possibility of incorporating additional information.  </p>
	 <h4><a href="#">3. postdata-transmission ontology  <span class="fontawesome-icons" ><span class="fontawesome-icon"><i class="fa fa-external-link fa-1x" data-fa-transform="" data-fa-mask=""></i></span></span></a>(in process)</h4>
	 <p>In this module the classes and properties referring to the transmission of the works are modelled. The classes of this module are PrimarySource, BibliograhicSource, Witness, WitnessCollection, Repository, Facsimile, Reading, Apparatus, Location. </p>
			 <h4> <a href="#">4. postdata-literaryAnalysis ontology  <span class="fontawesome-icons" ><span class="fontawesome-icon"><i class="fa fa-external-link fa-1x" data-fa-transform="" data-fa-mask=""></i></span></span></a>(in process)</h4>
<p>In this module, the classes and properties referring to the classes that are necessary to obtain information from literary analysis are modeled.  The classes in this module are Acrostic, Intertextuality, RhetoricalDevice. </p>
			 <h4> <a href="#">5. postdata-structuralElements ontology  <span class="fontawesome-icons" ><span class="fontawesome-icon"><i class="fa fa-external-link fa-1x" data-fa-transform="" data-fa-mask=""></i></span></span></a>(in process)</h4>
<p>In this module, the classes and properties referring to the classes and properties that have to do with the textual structuring of the manifestations of the works are modelled. 
The classes that compose it are: Syllable, Line, Stanza, Word and Punctuation, these last two belong to a LexicalUnit hierarchy.  </p>

			 <h4> <a href="#">6. postdata-prosodicElements ontology  <span class="fontawesome-icons" ><span class="fontawesome-icon"><i class="fa fa-external-link fa-1x" data-fa-transform="" data-fa-mask=""></i></span></span></a>(in process)</h4>
			 <p>In this module, the classes and properties that model the information necessary for the prosodic analysis of a poetic text are modeled. As in other modules, a hierarchy of classes has been defined that models the patterns of different levels and that are oriented to define the recurrence of the pattern followed by the stanzas, the lines and the poetic work itself. 
The classes that form this module are LinePattern, StanzaPattern, Work Pattern, Métrical Encoding, Symbol, RhymeMatch. </p>
<h4> <a href="#">7. postdata-music  <span class="fontawesome-icons" ><span class="fontawesome-icon"><i class="fa fa-external-link fa-1x" data-fa-transform="" data-fa-mask=""></i></span></span></a>(in process)</h4>
<p>The POSTDATA ontology network also takes into account the characteristic presented in many poetic works, which is the presence of musical representations in the manuscripts, with their codification and the musical manifestations of many of the works. 
In this ontology, we have not sought a detailed representation of the musical characteristics but those that can enrich the text and play an important role as a complement. The classes are: Melody, MusicalNotation, Performance </p>
	<h4><a href="#">8. postdata-additionalFeatures ontology  <span class="fontawesome-icons" ><span class="fontawesome-icon"><i class="fa fa-external-link fa-1x" data-fa-transform="" data-fa-mask=""></i></span></span></a>(in process)</h4>
	<p>In the manifestations of poetic works, elements that increase the expressiveness of the works appear regularly. The aim of this ontology is to cover these aspects. The classes identified in the model are : Paratext, Illustration and Scene. </p>
	</div>
	
	</div>
	<div class="row">
	<div class="col-md-12" style="text-align:center; padding:2%; font-size:18px" >
		<p> The image below shows the network of ontologies</p>
<img src="images/red.jpg" width="90%"><br/>
Illustration 2. Ontology Network Diagram

	<br/><br/>
<strong>Referenced ontologies</strong><br/>
frbroo: http://www.cidoc-crm.org/frbroo/sites/default/files/FRBR2.4-draft.rdfs<br/>
schema: http://schema.org<br/>
dc: http://purl.org/dc/elements/1.1/description<br/>
dcterms:http://purl.org/dc/terms/abstract<br/>
edm: http://www.europeana.eu/schemas/edm/<br/>
cidoc-crm: http://www.cidoc-crm.org/cidoc-crm/<br/>
foaf: http://xmlns.com/foaf/0.1/<br/>
olo: http: //purl.org/ontology/olo/core#<br/><br/>
<strong>Referenced ontology design patterns</strong><br/>
partOf: http://www.ontologydesignpatterns.org/cp/owl/partof.owl<br/>
agentRole: http://www.ontologydesignpatterns.org/cp/owl/agentrole.owl<br/>



 </div>



</div>




<br/><br/><br/><br/><br/><br/><br/><br/>


   

<?php include("includes/pie.php"); ?>
</div>

</body>

</html>





