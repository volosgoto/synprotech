<?php

/* @var $this yii\web\View */

$this->title = 'Synprotech Engineering';
?>

<!-- showcase -->
<section class="showcase">

    <div class="w3-container w3-center">

        <h1 class="w3-text-shadow w3-animate-opacity w3-margin-top">About Us</h1>
        <hr>
        <p class="w3-animate-opacity">The advisor across all aspects of the hydrocarbon industry. Our clientele ranges from major oil, gas and chemical companies, investors, and financial institutions to regulators, development agencies, and law firms. Our purpose is to deliver subject
            matter expertise that underlies the clear perspective and visionary thinking.
        </p>
        <!-- <button class="w3-button w3-black w3-large w3-opacity">More</button> -->
        <button onclick="accondionFunction('more-information')" class="w3-button w3-black w3-large w3-hover-blue-gray">More</button>
    </div>
</section>
<!-- showcase END-->
<!-- section 2 -->
<section class="w3-lightgray">
    <div id="more-information" class="section w3-container w3-center w3-hide">
        <!-- <i class="fa fa-cog"></i> -->
        <img class="synprotech-logo w3-image w3-hover-opacity" src="images/synprotech32x32.png" alt="synprotech_logo">
        <h1>Synprotech engineering</h1>
        <p>Limited Liability Company SYNPROTECH Engineering is an engineering and consulting design company of the CNGS Group. The company specializes in the oil and gas chemical market segment and provides business development in this area in its regions
            of presence. Objective: Development of an effective modern projects, optimized for economics and technological specifications, in the new petrochemical industry sector of CNGS Group activity. The company has a highly qualified staff and state-of-the-art
            facilities. The main priority of the company is to practical use of scientific knowledge and research data on organic and inorganic chemicals, from the design to the implementation phases, namely, from development of design to start-ups of chemical
            and petrochemical productions. The project documentation development (Feasibility Study of Investment, Basic Engineering, Detailed Design and Engineering) to the construction of new plants and the reconstruction of the existing ones in accordance
            with the basis of design and the requirements of existing occupational safety standards and regulations, fire safety and industrial hygiene regulations, environmental requirements.
        </p>
    </div>
</section>
<!-- section 2 END-->

<!-- SERVICES heading -->
<section class="section w3-blue w3-hover-opacity">
    <div class="w3-container w3-center">
        <h1 id="services" class="reference-list w3-text-shadow">SERVICES</h1>
        <p></p>
    </div>
</section>
<br>
<!-- SERVICES heading END-->
<!-- SERVICES -->
<section class="section w3-light-grey">
    <div class="w3-container w3-center">
        <div class="w3-row services-icons">
            <div class="w3-col m3">
                <i class="fa fa-area-chart w3-blue w3-padding-small w3-round-xlarge"></i>
                <h5>Strategic consulting for investment project management</h5>
            </div>
            <div class="w3-col m3">
                <i class="fa fa-cubes w3-blue w3-padding-small w3-round-xlarge"></i>
                <h5>Expert screening</h5>
            </div>
            <div class="w3-col m3">
                <i class="fa fa-book w3-blue w3-padding-small w3-round-xlarge"></i>
                <h5>Design and Engineering</h5>
            </div>
            <div class="w3-col m3">
                <i class="fa fa-institution w3-blue w3-padding-small w3-round-xlarge"></i>
                <h5>Architectural Design</h5>
            </div>
        </div>
        <div class="w3-row SERVICES-icons">
            <div class="w3-col m3">
                <i class="fa fa-industry w3-blue w3-padding-small w3-round-xlarge"></i>
                <h5>Design of construction structures</h5>
            </div>
            <div class="w3-col m3">
                <i class="fa fa-briefcase w3-blue w3-padding-small w3-round-xlarge"></i>
                <h5>Development of estimation documentation</h5>
            </div>
            <div class="w3-col m3">
                <i class="fa fa-search w3-blue w3-padding-small w3-round-xlarge"></i>
                <h5>Pre-design preparation</h5>
            </div>
            <div class="w3-col m3">
                <i class="fa fa-handshake-o w3-blue w3-padding-small w3-round-xlarge"></i>
                <h5>Adaptation of design documentation</h5>
            </div>
        </div>
        <div class="w3-row SERVICES-icons">
            <div class="w3-col m3">
                <i class="fa fa-comment w3-blue w3-padding-small w3-round-xlarge"></i>
                <h5>Design supervision</h5>
            </div>
            <div class="w3-col m3">
                <i class="fa fa-thumb-tack w3-blue w3-padding-small w3-round-xlarge"></i>
                <h5>Implementation functions</h5>
            </div>
            <div class="w3-col m3">
                <i class="fa fa-thumbs-o-up w3-blue w3-padding-small w3-round-xlarge"></i>
                <h5>Industrial Safety Declaration</h5>
            </div>
            <div class="w3-col m3">
                <i class="fa fa-fire-extinguisher w3-blue w3-padding-small w3-round-xlarge"></i>
                <h5>Emergency Response Plan</h5>
            </div>
        </div>
    </div>
</section>
<!-- SERVICES END-->

<!-- about -->
<section id="about" class="section-what">
    <div class="w3-container w3-animate-opacity">
        <div class="w3-col m4 w3-center w3-padding-small">
            <img class="w3-image w3-round w3-hover-opacity " src="images/technicaldirector-400px.jpg" width="400px" alt="about_img">
            <div class="w3-container w3-center w3-padding-12">
                <h5>Technical director</h5>
                <h5>Andrii Kryvolap</h5>
            </div>
        </div>
        <div class="w3-mobile w3-col m8 w3-padding-small">
            <button onclick="accondionFunction('consulting')" class="w3-btn-block w3-left-align w3-border w3-hover-border-blue w3-round">CONSULTING</button>
            <div id="consulting" class="w3-container w3-show w3-padding-12">
                <h6>Strategic consulting for investment project management</h6>
                <ul class="w3-ul w3-small">
                    <li>Review of markets for production and consumption of products, semi-finished products, raw materials</li>
                    <li>Logistics, no-beks</li>
                    <li>Macroeconomic indicators</li>
                    <li>Financial models</li>
                    <li>Technical and economic indicators</li>
                    <li>Sources of financing</li>
                    <li>Pre-Feasibility Study for Investment, Bank Feasibility Study, Investment Measures etc.</li>
                </ul>

                <h6>Industrial sectors of our interests</h6>
                <ul class="w3-ul w3-small">
                    <li>Petrochemicals </li>
                    <li>Olefins and polyolefins (monomers and polymers)</li>
                    <li>Oil, Gas & Refined Products</li>
                    <li>Renewable Chemicals & Energy 1.2.5 Inorganic Chemicals and Fertilizers</li>
                    <li>C1 (Syngas) Chemicals: methanol, oxygenates, fuel ethers etc.</li>
                </ul>

                <h6>Expert screening</h6>

                <ul class="w3-ul w3-small">
                    <li>Technical and economic feasibility</li>
                    <li>Project risk assessment</li>
                    <li>Process guarantees</li>
                    <li>Patent purity;</li>
                    <li>Analysis of the compliance of technical solutions with current regulations and rules</li>
                </ul>

            </div>
            <button onclick="accondionFunction('design')" class="w3-btn-block w3-left-align w3-border w3-hover-border-blue w3-round">
                <i style="font-size:18px" class="fa">&#xf107;</i>&nbsp;DESIGN AND ENGINEERING</button>
            <div id="design" class="w3-container w3-hide w3-padding-12 w3-animate-opacity">
                <h6>Pre-design preparation</h6>
                <ul class="w3-ul w3-small">
                    <li>Inspection of technical conditions of buildings and facilities, engineering networks</li>
                    <li>nspection of existing plants</li>
                    <li>Development of Declaration of Intentions, business plans, Feasibility Studies and Assessments</li>
                </ul>
                <h6>Architectural Design of industrial and civil buildings and facilities of I, II and III criticality rating</h6>
                <h6>Design of construction structures</h6>
                <ul class="w3-ul w3-small">
                    <li>Bases and foundations </li>
                    <li>Masonry, concrete and concrete frames</li>
                    <li>Steel structures</li>
                </ul>
                <h6>Process design of facilities in</h6>
                <ul class="w3-ul w3-small">
                    <li>Production, treatment and transportation of oil and gas</li>
                    <li>Oil refining and gas processing industry</li>
                    <li>Chemical industry</li>
                    <li>Agroindustrial complex</li>
                    <li>Communication and networks</li>
                </ul>
                <h6>Pre-design preparation</h6>
                <ul class="w3-ul w3-small">
                    <li>Heating, ventilation and conditioning</li>
                    <li>Aspiration and dust separation systems</li>
                    <li>Water supply and sewage</li>
                    <li>Refrigeration supply</li>
                    <li>Gas equipment and gas supply</li>
                    <li>Electric power supply (up to 6 kV), electric equipment and electric lighting</li>
                    <li>Automation of technological processes, including measurement, record and control devices</li>
                    <li>Systems of low current devices (public- address system, telephone system, interior communication, alarm system, etc.)</li>
                    <li>Firefighting systems, fire alarm system, voice alert and evacuation control systems, lightning protection devices</li>
                </ul>
                <h6>Development of estimation documentation</h6>
                <h6>Development of special design sections</h6>
                <ul class="w3-ul w3-small">
                    <li>Technical/economical performances, estimation of investment efficiency</li>
                    <li>Environmental impact analysis</li>
                    <li>Plan of construction organization</li>
                    <li>Method Statement</li>
                    <li>Organization and conditions of personnel work, operation and production control (industrial purpose facilities)</li>
                </ul>
                <h6>Adaptation of design documentation of foreign companies to norms and standards in force in CIS countries
                </h6>
                <h6>Design and overhaul</h6>
                <h6>Design supervision</h6>
                <h6>Implementation functions</h6>
            </div>
            <button onclick="accondionFunction('operation')" class="w3-btn-block w3-left-align w3-border w3-hover-border-blue w3-round">
                <i style="font-size:18px" class="fa">&#xf107;</i>&nbsp;OPERATION MANUALS</button>
            <div id="operation" class="w3-container w3-hide w3-padding-12 w3-animate-opacity">
                <ul class="w3-ul w3-small">
                    <li>Process manufacturing</li>
                    <li>Start-up/shut (instruction)</li>
                    <li>Detailed program for plant (unit) complex test with inert and operating medium</li>
                    <li>Industrial Safety Declaration</li>
                    <li>Emergency Response Plan;</li>
                    <li>Working places instructions for process personnel and other kinds of instructions</li>
                    <li>Lists of equipment and pipelines to be registered;</li>
                    <li>“Passports” for equipment and pipelines. Technical assistance during “passports” registration with inspection bodies</li>
                </ul>
            </div>
            <button onclick="accondionFunction('constructing')" class="w3-btn-block w3-left-align w3-border w3-hover-border-blue w3-round">
                <i style="font-size:18px" class="fa">&#xf107;</i>&nbsp;CONSTRUCTING SUPERVISION</button>
            <div id="constructing" class="w3-container w3-hide w3-padding-12 w3-animate-opacity">
                <ul class="w3-ul w3-small">
                    <li>Consulting services during approval with inspecting bodies of questions connected with testing and registration of process equipment and pipelines, gas, steam and hot water pipelines, lifting facilities</li>
                    <li>Check for availability of documents certifying quality of equipment and materials used during construction of structures, equipment or/and supplied by General Contractor. Acts preparation. Participation in committees of incident investigation</li>
                    <li>Monitoring during construction</li>
                    <li>Issue of instruction, punch lists</li>
                    <li>Control of elimination of found defects</li>
                    <li>Technical assistance during settlement of matters connected with introduction of necessary amendments into design</li>
                    <li>Control of Contactor’s work logs and preparation of as-built and installation documentation</li>
                    <li>Control of organization of instrumental and visual conformance of work quality and preparation of relevant documents</li>
                    <li>Control of fulfillment of orders and instruct ions issued by design supervision, state construction supervision authorities as well as requirements of Customer’s Technical supervision Service relating the quality of construction/installation
                        and that of used structures, devices, materials, equipment</li>
                    <li>Submission of required reports, analytical conclusions and recommendation while work implementation
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- about END-->

<!-- carousel -->
<section class="section-carousel">
    <div class="w3-lightgray w3-hover-opacity">
        <style>
            .mySlides {
                display: none
            }

            .w3-left,
            .w3-right,
            .w3-badge {
                cursor: pointer
            }

            .w3-badge {
                height: 13px;
                width: 13px;
                padding: 0
            }
        </style>
        <div class="w3-content w3-display-container" style="max-width:100%; height: auto;">
            <img class="mySlides w3-round" src="images/carousel/1.jpg" style="width:100%" alt="carousel_image">
            <img class="mySlides w3-round" src="images/carousel/2.jpg" style="width:100%" alt="carousel_image">
            <img class="mySlides w3-round" src="images/carousel/3.png" style="width:100%" alt="carousel_image">
            <img class="mySlides w3-round" src="images/carousel/4.jpg" style="width:100%" alt="carousel_image">
            <img class="mySlides " src="images/carousel/5.jpg" style="width:100%" alt="carousel_btn">
            <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                <div class="w3-button w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-button w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                <span class="demo w3-badge w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                <span class="demo w3-badge w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                <span class="demo w3-badge w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                <span class="demo w3-badge w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
                <span class="demo w3-badge w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
            </div>
        </div>
    </div>
</section>
<!-- carousel END-->