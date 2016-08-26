<?php
############################################################## 
#######	DATOS DEL EMISOR DEL DTE
##############################################################
# RUT EMISOR DEL DTE
$Datos["RutCompania"]="77777777";
# DIGITO VERIFICADOR RUT DEL EMISOR DEL DTE
$Datos["DvCompania"]="7";
# NÚMERO DE TRACKID DE ENVIO DEL DTE
$Datos["TrackId"]="1453694548";
# NOMBRE DEL ARCHIVO CON PARA ALMACENAR LA RESPUESTA DEL SII
$Datos["ArchivoRespuesta"]="ESTADOENVIODTE_".$Datos["RutCompania"].$Datos["DvCompania"]."_TRACKID_".$Datos["TrackId"].".xml";

############################################################## 
#######	DATOS CERTIFICADO DE PERSONA QUE FIRMA Y ENVIA
##############################################################
#
# MODULO DEL CERTIFICADO
$certificado["Modulus"]="rplHSZ/WnXYcubi+VeZrZLERC0e4defeZu5r5ReZq5hH8ozZYoR5D4sKDL/Guuv2
jLtCMQbRIgGqem+i3wwi8g/3NmYl6Hs12vPdrlLxdxqky0LkU5OsJNC+7joJu/YS
ueBEgeDew2/DSFR9GvPgyRhj7y/5Gh74Htdw2hHm0a+OxWxDykM3tBf9pRuQVpT3
9U2IiYBnsV5Tvx9UK+bkiQ=="; 
#
# EXPONENTE DEL CERTIFICADO
$certificado["Exponent"]="AQAB"; 
#
# CERTIFICADO X509
$certificado["X509Certificate"]="MIIGVTCCBT2gAwIBAgIQJUuSzOhD/2KDaF+/bCRMLjANBgkqhkiG9w0BAQUFADCB
qDELMAkGA1UEBhMCQ0wxFDASBgNVBAoTC0UtU2lnbiBTLkEuMR8wHQYDVQQLExZT
eW1hbnRlYyBUcnVzdCBOZXR3b3JrMUEwPwYDVQQDEzhFLVNpZ24gU0MgQ2xhc3Mg
UjKFU7TiQJUemWFI326S2n6DiRhvar4hw2aokGMDtdj6gsO7oorFrcGvIlD5cqPg
16xxzb5a12wi/c/E+09J1x6Gtqi2hmN+LNEdg6GAxlkQ3olGLgfRtvMmV6kazJTY
O8ihdGKnV8dZb9byxot+pczWykl8rFmSagkTCSlhXbsWNL55wNW2W9E=";
#
# LLAVE PRIVADA
$certificado["PrivKey"]="-----BEGIN RSA PRIVATE KEY-----
MIIEogIBAAKCAQEArplHSZ/WnXYcubi+VeZrZLERC0e4defeZu5r5ReZq5hH8ozZ
GiXj5rPC9RVoSJg1eECZM1ApB2dcI7AkCjObmmapPexpxdunhN75imXPYGeivJSz
hEmPDPsgMbnl4LZKSS3igo5Vb1R0KzQFHxHLaxfPMWCM3S6W7C0=
-----END RSA PRIVATE KEY-----";
?>
