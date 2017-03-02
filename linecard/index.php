<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Patrick Enterprises : Line Card</title>
<link rel="stylesheet" href="../css/base.css" type="text/css" />
<link rel="stylesheet" href="../css/patrick.css" type="text/css" />
<script src="../js/jquery-1.4.2.js" type="text/javascript"></script>
<script>
       $(document).ready(function() {
//         $('div.show-hide-slide ul').hide();
//         $('div.show-hide-slide h2').hover(function() {
//           $(this).next().slideToggle('fast');
//         });
// 
        $('div.slide ul').css('color','gray');
        $('div.slide a').hover(function() {
        		$(this).next().css({"color":"black"});
        },function() {
        		$(this).next().css({"color":"gray"});
        });
      });
</script>

</head>

<body>
<div id="content">
	<div id="head">
	<?php include("../includes/header.php"); ?>
  </div>
    <div id="main-white">
    <div id="topcopy">
      <h1>Our Partners in Success</h1>
      <p>In order for any business to succeed, it needs a good supply chain. We've established relationships with the very best in the industry to provide our customers with the leading technology to meet or exceed their expectations.</p><br />
     <hr size="1" noshade="noshade" color="#cccccc" />
    </div>
    
    <div id="suppliers" class="slide" >
    		<div id="ge"><a href="http://www.gedigitalenergy.com/multilin/" target="_blank"><span>GE/Multilin</span></a>
			  <ul>
                <li>Motor, Distribution Feeder and Generator Protection Relays and Meters</li>
              </ul>
            </div>
    		<div id="ge-iti"><a href="http://store.gedigitalenergy.com/ITI/front.asp" target="_blank"><span>GE-ITI</span></a>
			  <ul>
                <li>Switches, C.T. Fuse Blocks, Terminal Boards, Indicating Lights, GE Electromechanical Relays</li>
              </ul>
            </div>
		    <div id="ge-md"><a href="http://www.pyco.com/" target="_blank"><span>PYCO, Inc.</span></a>
              <ul>
                <li>Monitor Transformers</li>
                <li>Predict Failures</li>
                <li>Manage Performance</li>
              </ul>
    		</div>
		    <div id="pyco"><a href="http://www.pyco.com/" target="_blank"><span>PYCO, Inc.</span></a>
              <ul>
                <li>Thermocouples, RTDs and Associated Temperature Monitoring Equipment</li>
              </ul>
    		</div>
<!-- 
    		<div id="nat"><a href="http://www.nicholstechnology.com/" target="_blank"><span>Nichols Applied Technology</span></a>
              <ul>
                <li>Specializing in LTC, OCB, Regulator, Reclosure and Switch Components</li>
                <li>Manufacture, Retip and Supply Electrical Contacts, Interrupter and Baffle Stack Assemblies</li>
              </ul>
            </div>
    		<div id="vt"><a href="http://www.vatransformer.com/" target="_blank"><span>Virginia Transformer</span></a>
              <ul>
                <li>A leading manufacturer of custom engineered power electric
transformers for utility, energy, industrial, mining, oil & gas, commercial, institutional,
specialty and export markets in power ranges from 300 kVA to 100 MVA.</li>
              </ul>
            </div>
 -->
    		<div id="rich"><a href="http://www.richards-mfg.com/" target="_blank"><span>Richards Manufacturing Co.</span></a>
              <ul>
                <li>Electrical Compression Connectors and Lugs</li>
                <li>Pole line hardware</li>
                <li>200A &amp; 600A elbows</li>
                <li>Seperable Splices</li>
                <li>Network Protectors and Relays</li>
                <li>Network protector test sets</li>
              </ul>
    		</div>
    		<div id="mid"><a href="http://www.midwestswitchgear.com/" target="_blank"><span>Midwest Switchgear Services</span></a>
              <ul>
                <li>Remanufactured circuit breakers and parts</li>
                <li>Motor control center equipment</li>
                <li>Match in-line cubicles</li>
              </ul>
    		</div>
    		<!--
    		<div id="post"><a href="http://www.postglover.com/" target="_blank"><span>Post Glover Resistors</span></a>
              <ul>
                <li>Power Resistors for High and Low Resistance Ground System, Neutral Ground Resistors, Replacement Resistors</li>
              </ul>
    		</div>
    		-->
<!-- 
    		<div id="cybr"><a href="http://www.tnbpowersolutions.com/" target="_blank"><span>Cyberex</span></a>
              <ul>
                <li>Uninterruptible Power Supplies, Battery Chargers, Invertors, Control Voltage Regulators and By-pass Switches</li>
              </ul>
    		</div>
 -->
    		<div id="neh"><a href="http://www.nehringwire.com/" target="_blank"><span>Nehring Electrical Works</span></a>
              <ul>
                <li>Bare and Insulated Copper and Aluminum Wire, Building Wire, Welding Cable</li>
              </ul>
    		</div>
    		<div id="colt"><a href="http://www.coltonline.com/" target="_blank"><span>The Colt Group</span></a>
              <ul>
                <li>Emergency On-Line Leak Sealing Repair Service for Steam, Chemical and Insulating Oil</li>
                <li>Leak Maintenance Programs, Ultrasonic Testing, Plyable Compounds</li>
              </ul>    		
    		</div>
    		<div id="ino"><a href="http://inolect.com/" target="_blank"><span>InoLect-Universal</span></a>
              <ul>
                <li>Remote racking device for low and medium voltage power circuit breakers</li>
              </ul>
    		</div>
<!-- 
    		<div id="brkr"><a href="http://www.breakerservice.com/" target="_blank"><span>Breaker Service, Inc.</span></a>
              <ul>
                <li>Hydraulic &amp; Pneumatic Mech parts</li>
                <li>Seal Kits</li>
                <li>Compressor Parts</li>
              </ul>
    		</div>
 -->
    		<div id="pio"><a href="http://www.pioneertransformers.com/index_eng.htm" target="_blank"><span>Pioneer Transformers</span></a>
              <ul>
                <li>Subway &amp; vault type transformers</li>
              </ul>
    		</div>
<!-- 
    		<div id="smc"><a href="http://www.eurosmc.com/default_u.asp" target="_blank"><span>SMC-Electrical</span></a>
              <ul>
                <li>Test equipment for substation and protection relay testing</li>
              </ul>
    		</div>
 -->
    		<div id="ptrck"><a href="http://www.patrick-enterprises.com/" target="_blank"><span>Patrick Enterprises</span></a>
              <ul>
                <li>Obsolete Molded Case Circuit Breakers &amp; Motor Control Centers</li>
                <li>Relay Training</li>
                <li>Repair of Printed Circuit Boards, VFD's, Power Supplies</li>
              </ul>
    		</div>
            <div id="gw"><a href="http://www.gwelec.com/" target="_blank"><span>G &amp; W Electric</span></a>
                <ul>
                    <li>A leading worldwide manufacturer of medium/high voltage electrical products and automation services.</li>
                    <li>Providing customer power solutions worldwide since 1905.</li>
                </ul>
            </div>
<!--
    		<div id="eps"><a href="http://www.epspumps.com/" target="_blank"><span>Engineered Pump Services</span></a>
              <ul>
                <li>Inspection, performance evaluation and repair services</li>
                <li>Boiler feed pumps</li>
                <li>Circulating water pumps</li>
                <li>Service water pumps</li>
              </ul>
    		</div>
-->
         </div>
</div><div style="background: url(../imgs/btm-round.png) no-repeat 0 50% transparent; width:924px; height:28px; margin:0 auto;"></div>

<?php include('../includes/footer.php'); ?>

</body>
</html>
