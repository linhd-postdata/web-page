<?php
$inicio = 1;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >

<head>
    <title>Methodology</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="keywords" content="poesia"/>
    <meta name="description" content="Postdata"/>
    <meta name="autor" content="mluisadiezplatas"/>
    <meta name="robots" content="all,follow"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Optional theme -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
    <link rel="stylesheet" href="css/fontawasome.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
    <link rel="stylesheet" href="css/glyphicons.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
    <link rel="stylesheet" href="css/glyphicons-halflings.css" type="text/css" media="screen" title="no title"
          charset="utf-8"/>
    <link rel="stylesheet" href="css/glyphicons-social.css" type="text/css" media="screen" title="no title"
          charset="utf-8"/>


</head>

<body style="background-color: #ffffff">
<?php include('includes/cabecera3.php'); ?>
<div class="container-fluid">
    <div class="row first-row">

        <div class="col-md-1"><span class="fontawesome-icons" style="color:#e0922e !important"><span
                    class="fontawesome-icon"><i class="fa fa-share-alt fa-5x" data-fa-transform="" data-fa-mask=""></i></span></span>
        </div>

        <div class="col-md-10"><h1 style="color:#e0922e !important">TOWARDS A NETWORK OF ONTOLOGIES FOR THE EUROPEAN
                POETRY </h1></div>
    </div>

    <hr class="line"/>


    <br/><br/>
    <div class="row leftext-row">
        <div class="col-md-12"><p>The main goal of the POSTDATA project is to achieve the standardisation of poetry and
                to publish the data on poetic works and their analysis as linked open data (LOD). This objective
                has been undertaken from different points of view.</p>
            <p>From the philological point of view, we aimed to develop an
                abstract model for the representation of poetry. This model was based on existing philological concepts that were
                present in a representative set of the research projects, manuals, and corpora.</p>
            <p>From the technological point of view, the goal of the project was to formalize this philological standardization
                into Digital Humanities standards. For this purpose, we built an ontological model
                using Semantic Web technologies and W3C standards (such as OWL). Thus, we have enabled the publication of the metadata
                extracted from the philological conceptualization as LOD, ready to be shared, linked and
                improved by the community of practise.</p>

            <p>In order to achieve these objectives, we implemented the following steps:
            <ol>

                <li>A comparative analysis of projects and digital repertoires of different poetic
                    traditions. This was the starting point to retrieve the main conceptual elements and properties in order to build
                    a domain model.
                </li>
                <li>The construction of a domain model that captures the concepts and relationships of the domain of knowledge, that is,
                    the European poetry.
                </li>
                <li>The construction of a network of ontologies that becomes an interoperable standard in the field of
                    the Semantic Web to represent the domain of European poetry.
                </li>
                <li>The storage and publication of data in a format that enables it accessibility as LOD.
                </li>

            </ol>
            </p>
        </div>

    </div>

    <hr class="dashed-line"/>

    <!---------------------------------------------------STARTING POINT-------------ANALYSYS REPERTORIES----------------------------------------------------------------------->

    <div class="row leftext-row">
        <div class="col-md-12 col-xs-12 col-sm-12 div-text-stage ">

            <a name="repertories"></a>

            <div><h2><a href="https://www.google.com/maps/d/embed?mid=15MAs3lVHlOk-eWUfBWXBP_prHbE" hreflang="en"
                        target="new">1. Starting point- Analysis of repertoires</h2></a></div>

            <p>The starting point for the definition of the Domain Model for the European Poetry (DM-EP) is a set of
                twenty five repertoires, most of them available on the Web of Documents. These twenty five repertoires
                are served by databases, where the data models are relational or hierarchical.</p>
            <p>The repertoires represent different poetry traditions, languages and cultures. The criterion with most
                weight in the selection of repertoires was their availability, both in terms of having access to their
                internal structure and in terms of the ability of our research team to understand and analyse their
                contents. Nevertheless, great efforts were made in order to gather a representative sample for which the language,
                the period of composition, and the prosodic system (metre) were considered as defining criteria.</p>
            <p>POSTDATA contacted delegates from the different repertoires, inviting them to participate as stakeholders
                of the project. The delegates were asked to send the structure of the databases and any additional
                documentation in order for the researchers to be able to analyse and study the data models. Thus, the
                starting point for the analysis was a set of MySQL dumps, XSD and XML files, Perl scripts, and
                spreadsheets.</p>
            <p>Some of the repositories analyzed are:
            <ul>
                <li><a href="http://www.versologie.cz/en/kcv.html" target="new">Corpus of Czech Verse</a></li>
                <li><a href="http://www.eighteenthcenturypoetry.org" target="new">Eigtheen Century Poetry Archive </a>
                </li>
                <li><a href="http://www.folklore.ee/regilaul/andmebaas/" target="new">Estonian Runic Songs </a></li>
                <li><a href="http://bernal.cirp.gal/ords/f?p=MEDDB3:2" target="new">MedDB - Base de datos da Lírica
                        Profana Galego-Portuguesa </a></li>
                <li><a href="http://www.liederenbank.nl" target="new">Nederlandse liederenbank</a></li>
                <li><a href="http://rpha.elte.hu/" target="new">Répertoire de la poésie hongroise ancienne</a></li>
                <li><a href="https://skaldic.abdn.ac.uk/m.php?p=skaldic" target="new">Skaldic Poetry of the Scandinavian
                        Middle Ages </a></li>

            </ul>
            </p>
            * For more information, see the publication:<br/>
            Curado Malta, Mariana, Helena Bermúdez-Sabel, Ana Alice Baptista, and Elena Gonzalez-Blanco. 2018.
            ‘Validation of a metadata application profile domain model‘. <em>International Conference on Dublin
                Core and Metadata Applications</em>, (18), 65–75. Retrieved from
            <a href="http://dcevents.dublincore.org/IntConf/dc-2018/paper/view/555/675" target="_blank">http://dcevents.dublincore.org/IntConf/dc-2018/paper/view/555/675</a>


        <p>The map below, also available in this <a href="https://goo.gl/9MCWrv" target="new">link</a>, locates
                these repertoires in one of the countries where the poetic tradition at hand was originated, and they
                are grouped according to chronological criteria. </p>


        </div>
    </div>
    <div class="row last-row">

        <div class="col-md-12" style="padding-top:2%">
            <iframe src="https://www.google.com/maps/d/embed?mid=15MAs3lVHlOk-eWUfBWXBP_prHbE" width="90%"
                    height="480"></iframe>
        </div>
        Illustration 1. Map of repertories
    </div>
    <hr class="dashed-line"/>
    <!--------------------------------------------------------------- DOMAIN MODEL DESIGN ---------------------------------------------------------------------------------------------->


    <div class="row leftext-row">
        <div class="col-md-12 " class="div-text-stage">

            <h2>
                <div class="title_sep_domain"><a href="http://postdata-prototype.linhd.uned.es/domain-model.php"
                                                 hreflang="en" target="new" style="text-align:left; color:#00acec">2.
                        Design of Domain Model for European Poetry (DM-EP)</a></div>
            </h2>

            <p>The definition of the domain model, a common conceptual model that should represent the informational
                needs of the European poetry (EP) community of practice, integrates the data requirements that result
                from defining the functional requirements, together with the results of the following
                sub-activities:<br/>
            <ul>
                <li>Analysis of the data model of a representative sample of EP databases.</li>
                <li>Analysis of a survey addressed to the final users of the repertoires in order to understandthe data
                    needs of the users of poetry databases.
                </li>
            </ul>
            </p>
            <p>The repertoires mentioned in <a href="#repertories">section 1</a> were employed in different moments of
                the development process and <a href="https://goo.gl/O0mqhI" target="new">this map</a> shows which repertoires were
                used in which phases.</p>

            <p>We applied a reverse engineering approach using software engineering techniques. To extract
                and compare all the concepts in each data model and to construct a common model out of them, the work
                team decided to build conceptual models for each one of the data models analysed. This process is
                described in detail in Curado Malta, Centenera, and Gonzalez-Blanco (2017)<sup href="#note1">1</sup> and
                Bermúdez-Sabel, Curado Malta, and Gonzalez-Blanco (2017)<sup href="#note2">2</sup>.</p>
            <p>The DM-EP was developed in an
                iterative way and, over time, information from different sources was collected and included as explained
                as follows. The diagram below shows the workflow of the Domain Model development process</p><br/></div>
        <div class="last-row">
            <img src="images/dmodel.png" width="50%" border="1px solid #ffffff"/><br/>
            Illustration 2. Workflow of the Domain Model development process.
        
        <br/>
        <p>* For more information, see the deliverable <a
                href="https://github.com/linhd-postdata/Network-of-ontologies/blob/master/Documents/wp2-2%20-%20Domain%20Model%20for%20European%20Poetry.pdf"
                target="new">Poetry Standardization and Linked Open Data</a>
            <br/>
</div>
 <div class="row leftext-row">
        <div class="col-md-12  div-text-stage"  style="margin-left:5px">
        <div style="margin-left:20px;margin-right:20px"><h3>The domain model</h3>

        <p> The DM-EP is a model with 40 entities, 494 attributes and 409 relations. <br/>The complete model is
            available at <a href="http://postdata-prototype.linhd.uned.es/domain-model.php" target="new">http://postdata-prototype.linhd.uned.es/domain-model.ph</a>
        </p>

        <p>This model is very complex due mainly to its comprehensiveness. Therefore, to facilitate its understanding and
            visualization, we identified certain areas of knowledge to conduct a simpler study and analysis. Each
            area includes the concepts and properties related to the theme of the area. In addition, there is a division that contains a
            miscellany of concepts that are related to the works but do not refer to a specific domain of knowledge.
            These areas are shown in the image below that corresponds to the main page of the model visualization
            tool.</p>
        <br/><br/>
        <div style="text-align: center"><a href="http://postdata-prototype.linhd.uned.es/domain-visualization.php"
                                           target="new"><img src="images/domainareas.png" width="50%"/></a><br/>Illustration
            3. Visualization tool page

        </div>
    </div>
</div>
</div>
    <br/><br/>
    <div class="citation-block last-row first-row">
        <h3><a href="http://postdata-prototype.linhd.uned.es/domain-visualization.php" target="new"><span
                    class="fontawesome-icons" style="color:#e0922e !important"><span class="fontawesome-icon"><i
                            class="fa fa-hand-o-right fa-2x" data-fa-transform="" data-fa-mask=""></i></span></span>Access
                to the visualization tool </a></h3>


        <br/><br/>

        <p><sup id="note1">1</sup> Bermúdez-Sabel, Helena, Mariana Curado Malta, and Elena Gonzalez-Blanco. 2017. ‘Towards
                Interoperability in the European Poetry Community: The Standardization ofPhilological Concepts’. In
            <em>Language, Data, and Knowledge: First InternationalConference, LDK 2017, Galway, Ireland, June 19-20, 2017,
            Proceedings</em>, edited by Jorge Gracia, Francis Bond, John P. McCrae, Paul Buitelaar, Christian Chiarcos,
            andSebastian Hellmann, 156–65. Cham: Springer International
            Publishing. <a href="https://doi.org/10.1007/978-3-319-59888-8_14" target="_blank">https://doi.org/10.1007/978-3-319-59888-8_14</a>.</p>
        <p><sup id="note2">2</sup> Curado Malta, Mariana, Paloma Centenera, and Elena Gonzalez-Blanco. 2017. ‘Using Reverse
                Engineering to Define a Domain Model: The Case of the Development of a Metadata Application Profile for
                European Poetry’. In <em>Developing Metadata Application Profiles</em>, edited by Mariana Curado Malta, Ana Alice
            Baptista, and Paul Walk,146–80. IGI Global. <a href="https://doi.org/10.4018/978-1-5225-2221-8"
                                                           target="_blank">https://doi.org/10.4018/978-1-5225-2221-8</a
            >.</p>
    </div>

<hr class="dashed-line"/>
<!----------------------------------------------------------- NETWORK OF ONTOLOGIES ------------------------------------------------->

<div class="row" style="lefttext-row">
    <div class="col-md-12 " style="padding:2%">


        <h2>
            <div class="title_sep_domain"><a href="http://postdata-prototype.linhd.uned.es/ontology.php" hreflang="en"
                                             style="text-align:left; color:#00acec">3. Network of ontologies</a></div>
        </h2>
        <p>As mentioned, one of the aims of POSTDATA project is to
            create a platform where poetry researchers can publish their semantically enriched data about European
            Poetry as LOD.</p>

        <p>Consequently, the development of an ontology will assist researchers with the organization of their information
            and with the application of computational methods to their data. Our intention is to build a platform
            to facilitate the communication between the European poetry research community, making their data interoperable.
            Moreover, this platform will enable the creation
            of numerous applications to retrieve, query and edit the data.</p>

        <p>Due to the complexity of the domain, we considered the areas of knowledge
            identified in the model and from them, we built a modular design for the ontological model. These areas
            were further divided into subdomains so as to to manage the complexity and facilitate the transition towards the ontology.</p>
        <p>The semantic scope of these areas and subdomains was profusely analyzed which aide us to determine which of the subdomains
            corresponds to a
            complete and independent ontology and which of them should be merged to create a larger
            ontology.</p>

        <p>For this task, we applied the following criteria to define which ontologies must been
            created.
            The criteria are:
        <ul style="list-style: none">
            <li>
                1. <strong>Strong cohesion</strong> in every ontology, that is, the classes in the ontology are related and it is not
                necessary to use any external class to complete the classes coherence and definition. Therefore,
                the ontologies are self-contained.
            </li>
            <li>2. <strong>Weak coupling</strong>, that is, small number of relations between ontologies. These relations must
                concern the enrichment of the knowledge provided by the ontology and consider if additional features
                need to be covered.
            </li>
        </ul>
        </p>
        <p>In addition, we implemented a refinement of the concepts and properties identified in the domain for each of
            the subdomains together with the identification of ontologies and ontological design patterns to increase reuse and
            alignment. </p>
        <p>This process resulted in a network of ontologies presented in the following illustration and that
            can be consulted in the link that appears below.</p>


        <h3><a href="http://postdata-prototype.linhd.uned.es/ontology.php" target="new"><span class="fontawesome-icons"
                                                                                              style="color:#e0922e !important"><span
                        class="fontawesome-icon"><i class="fa fa-hand-o-right fa-2x" data-fa-transform=""
                                                    data-fa-mask=""></i></span></span>Access to network of
                ontologies</a></h3>
    </div>

    <div class="col-md-12 first-row">
        <img src="images/red.jpg" width="80%"><br/>
        Illustration 4. Ontology Network Diagram

    </div>


</div>
<?php include("includes/pie.php"); ?>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

</body>

</html>




