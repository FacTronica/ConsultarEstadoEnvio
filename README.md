# ConsultarEstadoDte
Consultar el Estado un Envío al SII

Para consultar el estado de un envío de Documentos al SII se deben realizar 3 procesos.

<b>Proceso 1:</b>
1.-Crear un archivo de texto plano con la información a consultar.
En este ejemplo guardaremos el archivo plano con el nombre datos_consulta_dte.txt

<b>Proceso 2:</b>
2.-Enviar el Archivo Plano al WebService
c:\curl\curl.exe --form "input_consulta_dte=@c:\curl\datos_consulta_dte.txt" http://www.factronica.cl/factronica_webservice_servidor/consulta_dte.php

<b>Proceso 3:</b>
3.-Recuperar la Respuesta del SII
c:\curl\curl.exe -o c:\curl\ESTADOENVIODTE_133477322_TRACKID_1453694548.xml http://www.factronica.cl/factronica_webservice_servidor/buzon_consultadte/salida/ESTADOENVIODTE_133477322_TRACKID_1453694548.xml

<br>Link al Manual del SII - WebService Consulta Estado de un Envío
<br>http://www.sii.cl/factura_electronica/factura_mercado/estado_envio.pdf
