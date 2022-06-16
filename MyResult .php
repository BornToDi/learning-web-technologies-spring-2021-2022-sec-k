</php
$myXMLData=
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>WebTech</to>
<from>39099</from>
<heading>Grade F</heading>
<body>Kazi Sadia!</body>
</note>";

$xml= simplexml_load_string($myXMLData) or die ("Error: " cannot create object");
print_r($xml);

?>