# ConsultarEstadoDte
Consultar el Estado de un Dte en el SII

[b][u][size=150]Consultar Estado de un Envío[/size][/u][/b]

Para consultar el estado de un envío de Documentos al SII se deben seguir los siguientes pasos:

[b][size=150]1.-Crear un archivo de texto plano con la información a consultar.[/size][/b]
En este ejemplo guardaremos el archivo plano con el nombre [b]datos_consulta_dte.txt[/b]
[code]<?php
# RUT DEL EMISOR DEL DTE
$Datos["RutCompania"]="13347732";
# DV DEL RUT DEL EMISOR DEL DTE
$Datos["DvCompania"]="2";
# TRACKID DE ENVIO DEL DTE
$Datos["TrackId"]="1453694548";
# NOMBRE DE SALIDA DEL ARCHIVO CON LA RESPUESTA
$Datos["ArchivoRespuesta"]="ESTADOENVIODTE_".$Datos["RutCompania"].$Datos["DvCompania"]."_TRACKID_".$Datos["TrackId"].".xml";
# CERTIFICADO DIGITAL


############################################################## 
#######	DATOS CERTIFICADO DE PERSONA QUE FIRMA Y ENVIA
##############################################################
#
#
# MODULO DEL CERTIFICADO
$certificado["Modulus"]="rplHSZ/WnXYcubi+VeZrZLERC0e4defeZu5r5ReZq5hH8ozZYoR5D4sKDL/Guuv2
jLtCMQbRIgGqem+i3wwi8g/3NmYl6Hs12vPdrlLxdxqky0LkU5OsJNC+7joJu/YS
KzogJymENDmLo2xMPpwORmceN6fJ/zG9DDhXXEUDN2p9b015bf32+hzAPAATJzsg
nxafmtFWTEuBe0yNGJz4Du/aFBTAdfiFsUbPQuk56je3P0M2zgtnrkdjjZ2/CvGk
ueBEgeDew2/DSFR9GvPgyRhj7y/5Gh74Htdw2hHm0a+OxWxDykM3tBf9pRuQVpT3
9U2IiYBnsV5Tvx9UK+bkiQ=="; 
#
#
# EXPONENTE DEL CERTIFICADO
$certificado["Exponent"]="AQAB"; 
#
#
# CERTIFICADO X509
$certificado["X509Certificate"]="MIIGVTCCBT2gAwIBAgIQJUuSzOhD/2KDaF+/bCRMLjANBgkqhkiG9w0BAQUFADCB
qDELMAkGA1UEBhMCQ0wxFDASBgNVBAoTC0UtU2lnbiBTLkEuMR8wHQYDVQQLExZT
eW1hbnRlYyBUcnVzdCBOZXR3b3JrMUEwPwYDVQQDEzhFLVNpZ24gU0MgQ2xhc3Mg
MiBDb25zdW1lciBJbmRpdmlkdWFsIFN1YnNjcmliZXIgQ0EgLSBHMjEfMB0GCSqG
SIb3DQEJARYQZS1zaWduQGUtc2lnbi5jbDAeFw0xNjAyMDgwMDAwMDBaFw0xNzAy
MDcyMzU5NTlaMIIBHTEUMBIGA1UEChMLRS1TaWduIFMuQS4xLTArBgNVBAsTJFRl
cm1pbm9zIGRlIHVzbyBlbiB3d3cuZS1zaWduLmNsL3JwYTElMCMGA1UECxMcQXV0
ia3ZZLqzdslKIv9W21o4GSWTGDATnTILx90N4rjHVU8aCfZRQw6mI/KI9mtOasOf
NwZCJUqGjhT0257D0JjCAVdusIVXFA5z683x00YL8KNfq7NmuJM++RO2rkSamEMu
UjKFU7TiQJUemWFI326S2n6DiRhvar4hw2aokGMDtdj6gsO7oorFrcGvIlD5cqPg
16xxzb5a12wi/c/E+09J1x6Gtqi2hmN+LNEdg6GAxlkQ3olGLgfRtvMmV6kazJTY
O8ihdGKnV8dZb9byxot+pczWykl8rFmSagkTCSlhXbsWNL55wNW2W9E=";
#
#
# LLAVE PRIVADA SIN CLAVE
$certificado["PrivKey"]="-----BEGIN RSA PRIVATE KEY-----
MIIEogIBAAKCAQEArplHSZ/WnXYcubi+VeZrZLERC0e4defeZu5r5ReZq5hH8ozZ
YoR5D4sKDL/Guuv2jLtCMQbRIgGqem+i3wwi8g/3NmYl6Hs12vPdrlLxdxqky0Lk
GiXj5rPC9RVoSJg1eECZM1ApB2dcI7AkCjObmmapPexpxdunhN75imXPYGeivJSz
hEmPDPsgMbnl4LZKSS3igo5Vb1R0KzQFHxHLaxfPMWCM3S6W7C0=
-----END RSA PRIVATE KEY-----"; 

?>[/code]

[b][size=150]2.-Enviar el Archivo Plano al WebService[/size][/b]
[code]c:\curl\curl.exe --form "input_consulta_dte=@c:\curl\datos_consulta_dte.txt" http://www.factronica.cl/factronica_webservice_servidor/consulta_dte.php[/code]
[b][size=150]

3.-Recuperar la Respuesta del SII[/size][/b]
[code]c:\curl\curl.exe -o c:\curl\ESTADOENVIODTE_133477322_TRACKID_1453694548.xml http://www.factronica.cl/factronica_webservice_servidor/buzon_consultadte/salida/ESTADOENVIODTE_133477322_TRACKID_1453694548.xml[/code]
