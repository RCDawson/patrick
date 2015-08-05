<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Patrick Enterprises : Tech Info / Data Sheets</title>
<link rel="stylesheet" href="../css/base.css" type="text/css" />
<link rel="stylesheet" href="../css/patrick.css" type="text/css" />
<script src="../js/jquery-1.4.2.js" type="text/javascript"></script>
<script>
      $(document).ready(function() {
      	var count = $('div.nested ul').children().length();
      	alert(count);
//       	$('.nested > b').append('<em>');
//       	$('.nested > em').text(countNested).toString();
      	$('.showList').css('height','13px').css('width','13px');
        $('.nested > ul').hide();  
        $('.nested > b').toggle(function() {
          $(this).next().slideToggle();
          $("a.showList", this).css('background-position','left bottom').attr('title','Click to collapse list');
        }, function() {
          $(this).next().slideToggle();
          $("a.showList", this).css('background-position','left top').attr('title','Click to expand list');;
        });
      });
</script>

</head>

<body>
<div id="content">
	<div id="head">
	<?php include("../includes/header.php"); ?>
  </div>
    <div id="bcopy">
      <h1>Technical Information / Data Sheets</h1>
      <p>Use the links below to download technical information and data sheets from our suppliers.
      <br />
      <br />
      </p>
      <hr size="1" noshade="noshade" color="#cccccc" />
      <br />
          <div class="downloads">
          <h2>GE/Multilin</h2>
            <ul>
            	<li><a href="downloads/DET-066B-AK-50-MVT-SelectionGuide.pdf" target="_blank">MicroVersaTrip PM&trade; Conversion Kits</a></li>
            </ul>
            <div class="nested">
			<b><a href="javascript:void(0);" class="showList" title="Click to expand list"></a>GE LV & AK Data Sheets:</b>
				<ul>
				    <li><a href="downloads/GE-LV-AK/GE-TRIP-DEVICES.pdf" target="_blank">Trip Devices</a></li>
                	<li><a href="downloads/GE-LV-AK/GE-AK15-25-50-75-100.pdf" target="_blank">AK 15, 25, 50, 75, 100 Circuit Breakers</a></li>
                	<li><a href="downloads/GE-LV-AK/GE-AK1-15-AK1-25.pdf" target="_blank">AK 1-15, AK 1-25 Circuit Breakers</a></li>
                	<li><a href="downloads/GE-LV-AK/GE-AK-1-50.pdf" target="_blank">AK 1-50 Circuit Breakers</a></li>
                	<li><a href="downloads/GE-LV-AK/GE-AK-AKF.pdf" target="_blank">AK AKF Low Voltage Circuit Breakers</a></li>
                	<li><a href="downloads/GE-LV-AK/GE-AK-AKT-AKU-AKF(Canada).pdf" target="_blank">(Canada) AK, AKT, AKU, AKF Low Voltage Circuit Breakers</a></li>
                	<li><a href="downloads/GE-LV-AK/GE-AK75-100.pdf" target="_blank">AK 75, AK 100 Low Voltage Circuit Breakers</a></li>
				    <li><a href="downloads/GE-LV-AK/GE-AKR-AKRU-AKRT.pdf" target="_blank">AKR, AKRU, AKRT Low Voltage Circuit Breakers</a></li>
				    <li><a href="downloads/GE-LV-AK/GE-AKR30-Breaker-Manual.pdf" target="_blank">AKR 30 Breaker Manual</a></li>
				    <li><a href="downloads/GE-LV-AK/GE-AKR75-100-AKS50.pdf" target="_blank">AKR 75, 100 &amp; AKS 50 Low Voltage Breakers</a></li>
				    <li><a href="downloads/GE-LV-AK/GE-AKR75-100-RENEWAL-PARTS.pdf" target="_blank">AKR 75, 100 Renewal Parts</a></li>
				    <li><a href="downloads/GE-LV-AK/GEF-4527D.pdf" target="_blank">GEF 4527D</a></li>
				    <li><a href="downloads/GE-LV-AK/GEH-5019A.pdf" target="_blank">GEH 5019A</a></li>
				    <li><a href="downloads/GE-LV-AK/GEH-5371B.pdf" target="_blank">GEH 5371B</a></li>
				    <li><a href="downloads/GE-LV-AK/GEI-50299E.pdf" target="_blank">GEI 50299E</a></li>
				    <li><a href="downloads/GE-LV-AK/GEI-86150A.pdf" target="_blank">GEI 86150A</a></li>
				    <li><a href="downloads/GE-LV-AK/GEI-86150B.pdf" target="_blank">GEI 86150B</a></li>
				    <li><a href="downloads/GE-LV-AK/GEK-64454A.pdf" target="_blank">GEK 64454A</a></li>
				    <li><a href="downloads/GE-LV-AK/GEK-73300-1.pdf" target="_blank">GEK 73300-1</a></li>
				</ul>
            </div>
            <div class="nested">
            <b><a href="javascript:void(0);" class="showList" title="Click to expand list"></a>Typical Wiring Diagrams:</b>
				<ul>
					<li><a href="downloads/SPM Synchronous Motor.pdf" target="_blank">SPM Synchronous Motor</a></li>
					<li><a href="downloads/PQM 11 Power Quality Metering Sys.pdf" target="_blank">PQM 11 Power Quality Metering Sys</a></li>                    <li><a href="downloads/750_760 SR Feeder Protection Sys.pdf" target="_blank">750_760 SR Feeder Protection Sys</a></li>
					<li><a href="downloads/745 Transformer Protection Sys.pdf" target="_blank">745 Transformer Protection Sys</a></li>
					<li><a href="downloads/469 SR Motor Proctection Sys.pdf" target="_blank">469 SR Motor Proctection Sys</a></li>
					<li><a href="downloads/369 Motor Proctection Sys.pdf" target="_blank">369 Motor Proctection Sys</a></li>
					<li><a href="downloads/350 Feeder Protection Sys.pdf" target="_blank">350 Feeder Protection Sys</a></li>
					<li><a href="downloads/269 PLUS Motor Protection Sys.pdf" target="_blank">269 PLUS Motor Protection Sys</a></li>
					<li><a href="downloads/239 269 PLUS Motor Protection Sys.pdf" target="_blank">239 269 PLUS Motor Protection Sys</a></li>
				</ul>
            </div>
            <p>&nbsp;</p>
            <h2>PYCO, Inc.</h2>
            <p>
           	<ul><li><a href="downloads/Pyco-Newsletter_4.pdf" target="_blank">Newsletter 4 - Pycopack Thermocouple Assemblies and Elements</a></li></ul>
            </p>
            <h2>&nbsp;</h2>
            <h2>Midwest Switchgear</h2>
            <p>
           	<ul>
                	<li><a href="downloads/AC-Pro.pdf" target="_blank">AC-PRO Data Sheet</a></li>
                	<li><a href="downloads/AC-Pro2.pdf" target="_blank">AC-PRO Data Sheet 2</a></li>
                	<li><a href="downloads/ITE K-225-600-1600-2000.pdf" target="_blank">ITE K-225, K-600, K-1600, K-2000 Instructions</a></li>
                	<li><a href="downloads/ITE K-3000-4000.pdf" target="_blank">ITE K-3000, K-4000 Installation/Maintenance Instructions</a></li>
            </ul>
            </p>
          <h2>&nbsp;</h2>
            <h2>Richards Manufacturing Co.</h2>
            <p>
           	<ul>
                	<li><a href="downloads/Richards_313np-manual-im1223-001b.pdf" target="_blank">Network Protector Instruction Manual - Type 313NP / 800 to 3500 Amperes</a></li>
                	<li><a href="downloads/137npManual-IM1224-001B.pdf" target="_blank">Network Protector Instruction Manual - Type 137NP / 800 to 3500 Amperes</a></li>
                	<li><a href="downloads/147npManual-IM1225-001B.pdf" target="_blank">Network Protector Instruction Manual - Type 147NP / 2250 to 4500 Amperes</a></li>
            </ul>
            </p>
          <h2>&nbsp;</h2>
            <h2>The Colt Group</h2>
            <p>
           	<ul>
                	<li><a href="downloads/MSDS-HighTempSealant.pdf" target="_blank">MSDS - High Temperature Plus Sealing Compound</a></li>
            </ul>
            </p>
          </div>
  </div><div style="background: url(../imgs/btm-round.png) no-repeat 0 50% transparent; width:924px; height:28px; margin:0 auto;"></div>

<?php include('../includes/footer.php'); ?>

</body>
</html>
