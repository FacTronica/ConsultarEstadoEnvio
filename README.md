# ConsultarEstadoDte
Consultar el Estado de un Dte en el SII

Para consultar el estado de un envío de Documentos al SII se deben seguir los siguientes pasos:

1.-Crear un archivo de texto plano con la información a consultar.
En este ejemplo guardaremos el archivo plano con el nombre datos_consulta_dte.txt

2.-Enviar el Archivo Plano al WebService
c:\curl\curl.exe --form "input_consulta_dte=@c:\curl\datos_consulta_dte.txt" http://www.factronica.cl/factronica_webservice_servidor/consulta_dte.php

3.-Recuperar la Respuesta del SII
c:\curl\curl.exe -o c:\curl\ESTADOENVIODTE_133477322_TRACKID_1453694548.xml http://www.factronica.cl/factronica_webservice_servidor/buzon_consultadte/salida/ESTADOENVIODTE_133477322_TRACKID_1453694548.xml
