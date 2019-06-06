<?php 
$inicio=1;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >

<head>
<title>Use Example-Network of ontologies - POSTDATA</title>
   
  
    <meta name="viewport" content="width=device-width, initial-scale=1" target="new" >
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" target="new" >
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
    <meta name="keywords" content="poesia" />
		<meta name="description" content="Postdata" />
<meta name="autor" content="mluisadiezplatas" />
    <meta name="robots" content="all,follow" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" target="new" >
    <!-- Optional theme -->
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" target="new" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" target="new" ></script>
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" title="no title" charset="utf-8" />
  <link rel="stylesheet" href="css/fontawasome.css" type="text/css" media="screen" title="no title" charset="utf-8" />
  <link rel="stylesheet" href="css/glyphicons.css" type="text/css" media="screen" title="no title" charset="utf-8" />
  <link rel="stylesheet" href="css/glyphicons-halflings.css" type="text/css" media="screen" title="no title" charset="utf-8" />
  <link rel="stylesheet" href="css/glyphicons-social.css" type="text/css" media="screen" title="no title" charset="utf-8" />
	
	<script type="text/javascript" target="new" >
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
 <style type="text/css" target="new" >

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

<body style="background-color: #ffffff" target="new" >
	<?php include('includes/cabecera3.php'); ?>
<div class="container-fluid" >
<div class="row first-row" >
	<div class="col-md-1" target="new" ><span class="fontawesome-icons" style="color:#e0922e !important" target="new" ><span class="fontawesome-icon" target="new" ><i class="fa fa-share-alt fa-5x" data-fa-transform="" data-fa-mask="" target="new" ></i></span></span></div>

<div class="col-md-10" ><h1 style="color:#e0922e !important" target="new" >USE EXAMPLES OF THE NETWORKS OF ONTOLOGY FOR EUROPEAN POETRY </h1></div>

</div>
	<div style="border:2px solid #e0922e;" target="new" ></div>

<br/><br/>


<div class="row " target="new" >


<div class="col-md-12" target="new" > 
 
<div id="examples" target="new" >
<h3 id="ns" class="list" target="new" >Use examples</h3>
<p>In order to facilitate the understanding of the some classes and properties of this vocabulary, some examples are provided below.</p>
<p>It should be noted that the instances will be represented by their URIs (Uniform Resource Identifier) created according to the following structure <strong>&lt;http://postdata.linhd.uned.es/resource/{Class}/{UUID}&gt;</strong>.<br/>
For example, the Person1 is identified by <strong>&lt;http://postdata.linhd.uned.es/resource/Person/ccc591fe0-7f10-11e9-ac29-f2189886299d&gt;</strong></p>
<h4>Example 1. Authorship</h4>
<p>The example presented corresponds to the representation of the authorship part of the cantiga "Pedr' Amigo, quer' ora ũa ren' by
Johan Baveca & Pedr' Friend of Sevilha", whose information is extracted from <a href="http://bernal.cirp.gal/ords/f?p=129:8:::NO::P8_IDC,P8_CONTAINS:0683,%5C%5C" target="new"  >MedDB

Lírica Profana Galego-Portuguesa database. Nettle Number 064022 </a></p>

<p>
	<div style="border:1px dashed #000000; padding: 1%" target="new" >
<h4> Example description</h4>
The troubadours Johan Baveca & Pedr' Friend of Sevilha are the creators (<a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#CreatorRole" target="new" >pdcore:CreatorRole</a>) of the cantiga that is modeled as a <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#PoeticWork" target="new" >PoeticWork </a> and its title is(<a href="http://purl.org/dc/elements/1.1/title" target="new"  >PoeticWork1.title</a> = “Pedr' Amigo, quer' ora ũa ren”). </p>
<p>However, this type of composition was, allegedly, an improvisation similar to the freestyle battles in rap. This means that also each Stanza needs to be linked to the correspondent <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#CreatorRole" target="new" >CreatorRole</a>.
<p>This question is modelled in such a way that the CretorRole of the Cantiga <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/correspondsTo#CreatorRole" >pdcore:correspondsTo</a> two persons:<ul><li>
<a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#name" target="new" >Person1.name</a> = “Johan Baveca”</li>
<li><a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#name" target="new" >Person2.name</a> = “Pedr’ Amigo de Sevilha”</li></ul></p>

<p>The text presented is the <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#Redaction" target="new" >Redaction</a>:
•	PoeticWork1 – <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#isRealisedThrough" target="new" >isRealisedThrough</a> – Redaction1</p>

<p>In regards to the editions, multiple references are cited. The most important one is the so-called “Seguida” (followed) which would be represented as:<ul><li>
Redaction1 -- <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#retrievesText" target="new" >retrievesText</a>Location1</li> 
</ul>
</p>

</p>

</div>


<div style="text-align: center;"
	<p>The representation of the example is shown in the image below
</p>
<img src="images/authorshipexample.png" width="60%" /> <br/>

</div>
<p>In the next block of RDF code the modeling of multiple authorship is shown first.<br/></p>


	<div class="padre"  >
		
	<dt style="text-align: left" target="new" >&lt;http://postdata.linhd.uned.es/resource/Person/ccc591fe0-7f10-11e9-ac29-f2189886299d&gt; a pdcore:Person;</dt>
	<dd>pdcore:name "Johan ";</dd>
	<dd>pdcore:surname "Baveca".</dd>
<dt>&lt;http://postdata.linhd.uned.es/resource/Person/cd23ea5a6-7f10-11e9-ac29-f2189886299e&gt; a pdcore:Person;</dt>
	<dd>pdcore:name "Pedr’ Amigo de Sevilha".</dd>
<dt>&lt;http://postdata.linhd.uned.es/resource/CreatorRole/c41b20c6-7f10-11e9-ac29-f2189886299d&gt;</dt>
	<dd>a pdcore:CreatorRole;</dd>
	<dd>pdcore:isPerformedBy &lt;http://postdata.linhd.uned.es/resource/Person/ccc591fe0-7f10-11e9-ac29-f2189886299d&gt;;</dd>
	<dd>pdcore:isPerformedBy  &lt;http://postdata.linhd.uned.es/resource/Person/cd23ea5a6-7f10-11e9-ac29-f2189886299e&gt;.</dd>





</div>

<p>The complete code of the example is shown below. <br/>It should be noted that this code shows the relationship of <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#PoeticWork" target="new" >PoeticWork</a> with <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#CreatorRole" target="new" >CreatorRole</a> <br/>On the other hand the relationship with its <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#Redaction" target="new" >Redaction</a> through <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#isRealisedThrough" target="new" >pdcore:isRealisedThrough</a>. </p>


<div class="padre"  ><div>

<dt>@prefix  rdf: &lt;http://www.w3.org/1999/02/22-rdf-syntax-ns#&gt; .</dt>
<dt>@prefix  owl: &lt;http://www.w3.org/2002/07/owl#&gt; .</dt>
<dt>@prefix  xsd: &lt;http://www.w3.org/2001/XMLSchema#&gt; .</dt>
<dt>@prefix  rdfs: &lt;http://www.w3.org/2000/01/rdf-schema#&gt; .</dt>
<dt>@prefix  pdcore: &lt;http://postdata.linhd.uned.es/ontology/postdata-core#&gt; .</dt>
<dt>@prefix  foaf: &lt;http://xmlns.com/foaf/0.1/&gt; .</dt>
<dt>@prefix  dc: &lt;http://purl.org/dc/elements/1.1/&gt; .</dt>


<dt>&lt;http://postdata.linhd.uned.es/resource/PoeticWork/c41b20c6-7f10-11e9-ac29-f2189886299d&gt; a pdcore:PoeticWork;</dt>
	<dd>dc:title "Pedr' Amigo, quer' ora ũa ren" ;</dd>
	<dd>pdcore:hasCreator &lt;http://postdata.linhd.uned.es/resource/CreatorRole/c41b20c6-7f10-11e9-ac29-f2189886299d&gt; ;</dd>
	<dd>pdcore:isRealisedThrough &lt;http://postdata.linhd.uned.es/resource/Redaction/d77ed2e8-7f10-11e9-ac29-f2189886299d&gt; .</dd>

<dt>&lt;http://postdata.linhd.uned.es/resource/Redaction/d77ed2e8-7f10-11e9-ac29-f2189886299d&gt; a pdcore:Redaction.</dt>


<dt>&lt;http://postdata.linhd.uned.es/resource/Person/ccc591fe0-7f10-11e9-ac29-f2189886299d&gt; a pdcore:Person;</dt>
	<dd>pdcore:name "Johan " ;</dd>
	<dd>pdcore:surname "Baveca" .</dd>

<dt>&lt;http://postdata.linhd.uned.es/resource/Person/cd23ea5a6-7f10-11e9-ac29-f2189886299e&gt; a pdcore:Person;</dt>
	<dd>pdcore:name "Pedr’ Amigo de Sevilha" .</dd>


<dt>&lt;http://postdata.linhd.uned.es/resource/CreatorRole/c41b20c6-7f10-11e9-ac29-f2189886299d&gt; a pdcore:CreatorRole;</dt>
	<dd>pdcore:isPerformedBy&lt;http://postdata.linhd.uned.es/resource/Person/ccc591fe0-7f10-11e9-ac29-f2189886299d&gt; ;</dd>
	<dd>pdcore:isPerformedBy &lt;http://postdata.linhd.uned.es/resource/Person/cd23ea5a6-7f10-11e9-ac29-f2189886299e&gt; .</dd>

<dt>&lt;http://postdata.linhd.uned.es/resource/CreatorRole/dae21332-7f10-11e9-ac29-f2189886299d&gt; a pdcore:CreatorRole;</dt>
	<dd>pdcore:isPerformedBy &lt;http://postdata.linhd.uned.es/resource/Person/db818818-7f10-11e9-ac29-f2189886299d&gt; .</dd>

	</div></div>
	


</div>
</div>

</div>
<!---------------------------------------EXAMPLE 2 ---------------------------------->
<div class="row " target="new" >


<div class="col-md-12" target="new" > 
 
<div id="examples" target="new" >

<h4>Example 2. Redactions</h4>
<p>The example presented the manifestations of  "Jámbor házasok, meghallgassátok – Házasének" poetic work through the description of its redactions , whose information is extracted from <a href="https://rpha.oszk.hu/id/0626" target="new" >Répertoire de la poésie hongroise ancienne </a></p>

<p>
<div style="border:1px dashed #000000; padding: 1%" target="new" >
<h4> Example description</h4>
<p>In this case, there doesn’t seem to be a title to identify the work but a number. Then we have information about the themes:<ul>
<li><a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#theme" target="new"  >PoeticWork.theme</a> = “Jámbor házasok”</li>
<li><a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#theme" target="new"  >PoeticWork.theme </a>= “meghallgassátok”</li>
</ul></p>

<p>The creator seems to be anonymous:
<ul><li><a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#PoeticWork" target="new"  >PoeticWork</a> – <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#isAnonymous" target="new"  >CreatorRole.isAnonymous</a>=true</li></ul></p>

<p>The following redaction has a  score composer  role associated, modeled through <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#Role" target="new"  >Role class</a> and it <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#isPerformedBy" target="new"  >is performed by</a> a <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#Person" target="new"  >Person</a>	<ul> <li>
Redaction1 – Role1.roleName=score composer – Person1.name=Batizi András</li></ul>
</p>

<p>For this work we have, on one side the “synthetic” version and on the right side the multiple “analytic” versions.<br/>

Although the text is not present, there are results based on a version of a text, so the concept of <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#Redaction" target="new"  >Redaction</a> does exist.<br/>
 For instance, there is a metrical pattern whose description would be made in an instance of <a href="#" target="new"  >WorkPattern </a> although this corresponds to postdata-prosodicElements (pdprosodic) ontology.<br/>
 <ul> <li>
Redaction1 -- isAnalysedThrough -- WorkPattern1</li></ul>
<br/>

The relation between the synthetic version and each one of the eighteen analytic versions is:<ul><li>
Redaction1 --<a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#isSynthesisOf" target="new"  >isSynthesisOf </a>-- Redaction[2-19].</li></ul>

Each one of those eighteen versions corresponds to a <a href="#" target="new"  >Witness </a> but this is pertinent for a transmission ontology.</p>





</div>


<div style="text-align: center;"
	<p>The representation of the example is shown in the image below
</p>
<img src="images/redactionexample.png" width="60%" /> <br/>

</div>



	

<p>The complete code of the example is shown below. <br/>It should be noted that this code shows the relationship of <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#PoeticWork" target="new" >PoeticWork</a> with <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#CreatorRole" target="new" >CreatorRole</a> <br/>On the other hand the relationship with its <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#Redaction" target="new" >Redaction</a> through <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#isRealisedThrough" target="new" >pdcore:isRealisedThrough</a>.<br/>
	The <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#Redaction" target="new"  >Redaction</a>  relations, like <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#hasAgent target="new"  > hasAgent</a> with a <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#Role target="new"  >Role</a>,  <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#isSynthesisOf target="new"  >isSynthesisOf</a>  with an another <a href="http://postdata.linhd.uned.es/ontology/postdata-core/documentation/index.html#http://postdata.linhd.uned.es/ontology/postdata-core#Redaction" target="new"  >Redaction</a>  and <a href="#" target="new"  >isAnalysesThrough</a>  with a <a href="#" target="new"  >WorkPattern</a>, is also represented.
 </p>


<div class="padre"  ><div>

<dt>@prefix  rdf: &lt;http://www.w3.org/1999/02/22-rdf-syntax-ns#&gt; .</dt>
<dt>@prefix  owl: &lt;http://www.w3.org/2002/07/owl#&gt; .</dt>
<dt>@prefix  xsd: &lt;http://www.w3.org/2001/XMLSchema#&gt; .</dt>
<dt>@prefix  rdfs: &lt;http://www.w3.org/2000/01/rdf-schema#&gt; .</dt>
<dt>@prefix  pdcore: &lt;http://postdata.linhd.uned.es/ontology/postdata-core#&gt; .</dt>
<dt>@prefix  pdprosodic: &lt;http://postdata.linhd.uned.es/ontology/postdata-prosodicElements#&gt; .</dt>
<dt>@prefix  dc: &lt;http://purl.org/dc/elements/1.1/&gt; .</dt>


<dt>&lt;http://postdata.linhd.uned.es/resource/PoeticWork/132c9bf0-2159-4e8c-996a-100865a9fbb5&gt; a pdcore:PoeticWork ;</dt>
	<dd>dc:title "Jámbor házasok, meghallgassátok – Házasének" ;</dd>
	<dd>pdcore:hasCreator &lt;http://postdata.linhd.uned.es/resource/CreatorRole/7e857cc9-e02d-4c98-bed0-307681c2344b&gt; ;</dd>
	<dd>pdcore:isRealisedThrough &lt;http://postdata.linhd.uned.es/resource/Redaction/7e857cc9-e02d-4c98-bed0-307681c2344b&gt; ;</dd>
	<dd>pdcore:theme "Jámbor házasok" ;</dd>
	<dd>pdcore:theme "meghallgassátok" .</dd>

<dt>&lt;http://postdata.linhd.uned.es/resource/CreatorRole/7e857cc9-e02d-4c98-bed0-307681c2344b&gt; a pdcore:CreatorRole;</dt>
	<dd>pdcore:isAnonymous "true" .</dd>

<dt>&lt;http://postdata.linhd.uned.es/resource/Person/f895ea69-a720-4e16-8be0-57608a460093&gt; a pdcore:Person;</dt>
 	<dd>pdcore:name "Batizi András" .</dd>


<dt>&lt;http://postdata.linhd.uned.es/resource/Role/36fe6557-d974-45b0-ba16-5932f55515fd&gt; a pdcore:Role;</dt>
	<dd>pdcore:roleName "score composer" ;</dd>
	<dd>pdcore:isPerformedBy &lt;http://postdata.linhd.uned.es/resource/Person/f895ea69-a720-4e16-8be0-57608a460093&gt; .</dd>
	

<dt>&lt;http://postdata.linhd.uned.es/resource/Redaction/7e857cc9-e02d-4c98-bed0-307681c2344b&gt; a pdcore:Redaction;</dt>
	<dd>pdcore:isSynthesisOf &lt;http://postdata.linhd.uned.es/resource/Redaction/f895ea69-a720-4e16-8be0-57608a460093&gt; ;</dd>
	<dd>pdcore:hasAgent &lt;http://postdata.linhd.uned.es/resource/Role/36fe6557-d974-45b0-ba16-5932f55515fd&gt; ;</dd>
	<dd>pdcore:isAnalysesThrough &lt;http://postdata.linhd.uned.es/resource/WorkPattern/f895ea69-a720-4e16-8be0-57608a460093&gt; ;</dd>
	<dd>pdcore:realises &lt;http://postdata.linhd.uned.es/resource/PoeticWork/132c9bf0-2159-4e8c-996a-100865a9fbb5&gt; ;</dd>

<dt>&lt;http://postdata.linhd.uned.es/resource/Redaction/f895ea69-a720-4e16-8be0-57608a460093&gt; a pdcore:Redaction;</dt>

	</div></div>
	


</div>
</div>

</div>


<?php include("includes/pie.php"); ?>
</div>

</body>

</html>





