
<?php
use yii\helpers\Html;

yii\web\View::registerCssFile('@web/css/reference.css');
?>

<!-- reference heading -->
<section class="section w3-blue w3-hover-opacity" style="">
    <div class="w3-container w3-center">
        <h1 class="reference-list w3-text-shadow">REFERENCE LIST</h1>
        <p></p>
    </div>
</section>
<br>

<!-- content -->
<div class="reference-container">
    <!-- <div class="style-container">
      <h1 class="w3-animate-opacity w3-margin-top w3-padding-24">REFERENCE LIST</h1>
    </div> -->
    <div class="style-container w3-card-4">
        <!-- <table class="w3-table w3-striped w3-bordered w3-padding w3-hoverable w3-border"> -->
        <table class="w3-striped w3-bordered w3-hoverable w3-border">
            <tr>
                <th class="w3-center">Year</th>
                <th class="w3-center">Project name</th>
                <th class="w3-center">Customer</th>
            </tr>
            <tr>
                <td>2018</td>
                <td>Compound fertilizers production. Reconstruction of non-residential facility, which is a complex of buildings and facilities for storage and production of compound fertilizers.
                </td>
                <td>LLC ”Terra Tarsa Ukraine”, Kherson region, Ukraine
                </td>
            </tr>
            <tr>
                <td>2016-2017</td>
                <td>Chymkent refinery (ShNOS). Section C-300/1 revamping detail design of diesel fuel hydrotreating unit and diesel fuel dewaxing unit.
                </td>
                <td>LLP ”PetroKazakhstan Oil Products” (PKOP), Shymkent, Republic of Kazakhstan
                </td>
            </tr>
            <tr>
                <td>2016</td>
                <td>Food substance plant. LPG tank storage unit at the food substance plant. </td>
                <td>LLP ”Mareven Food Tien-Shan”, Almaty region, Republic of Kazakhstan
                </td>
            </tr>
            <tr>
                <td>2014-2015</td>
                <td>Gas recovery facilities. Infrastructure development for the associated petroleum gas preparation on the basis of existing facilities of LLC «RN-Purneftegaz» and PJSK«NK Rosneft». GPP in the Purpe area with capacity of 1 billion m3/year for process
                    APG.
                </td>
                <td>LLC ”RN-Purneftegas”, JSC ”SE ”Rosneft”, Yamal-Nenets autonomous district (YNAD), Russian Federation
                </td>
            </tr>
            <tr>
                <td>2014</td>
                <td>Kharampur fld.: Primary Gas Processing Terminal – PGPT-1,2, headworks (Booster Compressor Station – BCS and Complex Gas Treatment Unit – CGTU), single-ended BCS. Gathering, preparation and compression of associated petroleum gas.
                </td>
                <td>LLC ”RN-Purneftegas”, JSC ”SE ”Rosneft”, YNAD, Russian Federation
                </td>
            </tr>
            <tr>
                <td>2012-2014</td>
                <td>Integrated Petrochemical Complex & Infrastructure Project (IPCI, Phase 1). Production: Propane Dehydration Unit - PDH (Propylene production, process Catofin by Lummus), Polypropylene – PP (gas phase polymerization process Novolen), Propylene
                    isothermal storage with reliquification system, propane pressurized storage, ammonia storage, U&O units and etc.
                </td>
                <td>LLC ”Kazakhstan Petrochemical Industries Inс”, Atyrau region, Republic of Kazakhstan
                </td>
            </tr>
            <tr>
                <td>2013</td>
                <td>Formaldehyde and urea-formaldehyde resins production. Production of formaldehyde from methanol, production of urea-formaldehyde resins and concentrates (CFS, CPK).
                </td>
                <td>PJSC ”Korosten MDF boards plant”, Korosten, Ukraine
                </td>
            </tr>
            <tr>
                <td>2010-2011</td>
                <td>BCS ”Komsomolskaya”. Komsomolsky fld.: gathering, preparation and compression of associated petroleum gas.
                </td>
                <td>LLC ”RN-Purneftegas”, JSC ”SE ”Rosneft”, YNAD, Russian Federation
                </td>
            </tr>
            <tr>
                <td>2011</td>
                <td>CPF site (Central Prodaction Facility), FSB site (Field Support Base). R. Trebs field: oilfield facility construction.
                </td>
                <td>LLC ”Bashneft-Polyus”, Russian Federation</td>
            </tr>
            <tr>
                <td>2009</td>
                <td>Ammonia-Urea-Methanol-Acetic acid Chemical Complex. Technical-economic proposal of construction units: Ammonia 200 000 MTPY, Urea 333 000 MTPY, Acetic acid 150 000 MTPY.
                </td>
                <td>AzMeCo (Azerbaijan Methanol Company), Karadag district, Azerbaijan
                </td>
            </tr>
            <tr>
                <td>2009</td>
                <td>Barsukovsk fld.: BCS at CPF and BPS-PWGU (Primary Water Gathering Unit). Gathering and compression of associated petroleum gas.
                </td>
                <td>LLC ”RN-Purneftegas”, JSC ”SE ”Rosneft”, YNAD, Russian Federation
                </td>
            </tr>
            <tr>
                <td>2009</td>
                <td>Verhne-Purpeisky fld.: BCS at BPS. Gathering and compression of associated petroleum gas.
                </td>
                <td>LLC ”RN-Purneftegas”, JSC ”SE ”Rosneft”, YNAD, Russian Federation
                </td>
            </tr>
            <tr>
                <td>2009</td>
                <td>Novo-Purpeisky fld.: BCS at BPS. Gathering and compression of associated petroleum gas.
                </td>
                <td>LLC ”RN-Purneftegas”, JSC ”SE ”Rosneft”, YNAD, Russian Federation
                </td>
            </tr>
            <tr>
                <td>2009</td>
                <td>Zapadno-Purpeisky fld.: BCS at BPS. Gathering and compression of associated petroleum gas.
                </td>
                <td>LLC ”RN-Purneftegas”, JSC ”SE ”Rosneft”, YNAD, Russian Federation
                </td>
            </tr>
            <tr>
                <td>2009</td>
                <td>Severo-Komsomolsky fld.: BCS at CGTU. Gathering and compression of associated petroleum gas.
                </td>
                <td>LLC ”RN-Purneftegas”, JSC ”SE ”Rosneft”, YNAD, Russian Federation
                </td>
            </tr>
            <tr>
                <td>2008</td>
                <td>Gubkinsk fld.: BCS. Gathering, preparation and compression of associated petroleum gas
                </td>
                <td>LLC ”RN-Purneftegas”, JSC ”SE ”Rosneft”, YNAD, Russian Federation
                </td>
            </tr>
            <tr>
                <td>2008</td>
                <td>Crude oil pretreatment unit, PJSC "Kachanovsky GPP". Gathering, preparation, dehydration, desalting and stabilization of oil.
                </td>
                <td>PJSC ”Kachanovsky GPP”, PJSC ”Ukrnafta”, Mala Pavlovka, Akhtyrsky district, Sumy region, Ukraine
                </td>
            </tr>
            <tr>
                <td>2006-2007</td>
                <td>AM-76: Hydrogen Recovery Unit and Ammonia Recovery Unit. Detailed Design.
                </td>
                <td>JSC ”Salavtnefteorgsintez”, Bashkortostan Republic, Russian Federation
                </td>
            </tr>
            <tr>
                <td>2000-2006</td>
                <td>Acetic Acid Plant. Basic design for acetic acid production with capacity of 150 MTPY. Basic design of pilot installation of acetic acid.
                </td>
                <td>FANAVARAN PETROCHEMICAL COMPANY, Bandar Imam, Iran
                </td>
            </tr>
            <tr>
                <td>2005</td>
                <td>Acetic Acid Plant. Basic design for acetic acid production with capacity of 150 MTPY.
                </td>
                <td>SHAANXI XINTONGRUI CHEMICALS CO., LTD, Shaanxi, China
                </td>
            </tr>
            <tr>
                <td>2006</td>
                <td>Production of polyamide PA-6. Polyamide 6 production with capacity of 65 TPD.
                </td>
                <td>JSC ”Chernigov Khimvolokno”, Chernigiv, Ukraine
                </td>
            </tr>
            <tr>
                <td>2005</td>
                <td>Lower dicarboxylic acids (NDK) production. Succinic and glutaric acids units.
                </td>
                <td>JSC ”Rivneazot” Rivne, Ukraine</td>
            </tr>
            <tr>
                <td>2004</td>
                <td>Combustion efficiency unit (Lisichansk Oil Refinery). Modernization of elemental sulfur unit equipment (Claus Process Plant).
                </td>
                <td>JSC ”Linik”, Lisichansk, Ukraine</td>
            </tr>
        </table>
    </div>
</div>
<!-- content ENDS -->


<!-- main contact form -->
<section class="section-contact-form">
    <!-- <div class="w3-container w3-dark-gray w3-twothird w3-center"> -->
    <div class="w3-dark-gray w3-twothird w3-center">
        <div class="w3-card-4">
            <div class="w3-container w3-dark-gray ">
                <h2 class="w3-margin-top">Contact Us</h2>
            </div>
            <form id="email-form" class="w3-container w3-padding-xlarge">
                <label class="w3-input ">Name</label>
                <input id="name" class="w3-input" type="text">
                <div class="invalid-feedback">
                    Enter name
                </div>
                <label class="w3-input">Email</label>
                <input id="email" class="w3-input" type="text">
                <div class="invalid-feedback">
                    Enter a valid Email
                </div>
                <label class="w3-input">Phone</label>
                <input id="phone" class="w3-input" type="text">
                <div class="invalid-feedback">
                    Enter a valid phone
                </div>
                <label class="w3-input">Message</label>
                <textarea id="message" class="w3-input" style="resize:none"></textarea>
                <div class="invalid-feedback">
                    Enter text message
                </div>
                <br>
                <button id="submit" type="submit" class="w3-button w3-black w3-large w3-hover-blue-gray">Submit</button>
                <br><br>
            </form>
        </div>
    </div>
</section>
<!-- main contact form ENDS-->