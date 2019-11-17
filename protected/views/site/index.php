<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php header("Access-Control-Allow-Origin: *"); ?>

<h2> 3 step process - Make sure to check preview </h2>

<h3> 1. Select Production Environment </h3>

<select>
    <option value="CB">CB</option>
    <option value="GP">GP</option>
    <option value="RP">RP</option>
    <option value="KP">KP</option>
    <option value="YP">YP</option>
    <option value="EP">EP</option>
    <option value="RU">RU</option>
    <option value="AP">AP</option>
</select>

<p>         </p>
<p>         </p>
<p>         </p>
<p>         </p>

<h3> 2. Fill one or more of Arecord,cname, and microservice sections below </h3>


<p>         </p>
<p>         </p>


<div id="arecord">
<h6> A-Record </h6>
    <textarea size="400" maxlength="400" placeholder="Enter pairs of FQDN, Ip Address, FQDN, Ip Address, and so on....?"
              name="areecord" id="arecord" _vkenabled="true" spellcheck="false"></textarea>
    <p>         </p>
</div>

<p>         </p>
<p>         </p>

<div id="cname">
<h6> CNAME </h6>
<!--<form>-->
    <textarea size="400" maxlength="400" placeholder="Enter pairs of shortname, longname, shortname, longname and so on....?"
              name="cname" id="cname" _vkenabled="true" spellcheck="false"></textarea>
<p>         </p>
</div>

<p>         </p>
<p>         </p>

<div id="micro">
<h6> MicroServices </h6>
    <textarea size="400" maxlength="400" placeholder="Enter pairs of MicroService Name, FQDN, MicroService Name, FQDN and so on....?"
              name="micro" id="micro" _vkenabled="true" spellcheck="false"></textarea>
    <p>         </p>
</div>

<p>         </p>
<p>         </p>

<div id="preview">
    <h3> 3. Preview and finalize generate File </h3>



    <h6> Preview </h6>
    <textarea size="400" maxlength="400"
              name="micro" id="micro" _vkenabled="true" spellcheck="false"></textarea>
    <p>         </p>
</div>
