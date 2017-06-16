# ConsultarEstadoDte
Consultar el Estado un Envío al SII

<b>INTRODUCCIÓN:</b>
<br>Consulta Estado de Upload DTE (CEUPDTE), como parte del proyecto Documentos Tributarios Electrónicos (DTE), entrega a las empresas un servicio (“QueryEstUp”), el cual permite consultar a través de WEB SERVICES, el estado de un archivo DTE enviado al SII, mediante Upload.
<br>Este documento está dirigido a quienes tengan la misión de utilizar y probar el servicio mencionado anteriormente (QueryEstUp).
<br>Para acceder a los servicios que ofrece el SII, se debe utilizar WSDL(Web Services Definition Language).
<br>WSDL es un lenguaje descriptor, basado en XML, que permite conocer en forma abstracta, la gramática de los componentes de un Web Service (ubicación, formato, tipos de datos, servicios, funciones, parámetros de entrada, salida, etc).
<br><i>Información obtenida del manual del SII</i>
<br>http://www.sii.cl/factura_electronica/factura_mercado/estado_envio.pdf

<B>INTEGRACIÓN CON SOFTWARE PROPIO</B>
<br>Con la finalidad de simplificar el proceso requerido por el SII, el Webservice Factronica entrega un mecanismo más sencillo para realizar el proceso.
<br>Para consultar el estado de un envío de Documentos al SII se deben realizar 3 procesos.
<b>Proceso 1:</b>
<br>Crear un archivo de texto plano con la información a consultar.
En este ejemplo guardaremos el archivo plano con el nombre datos_consulta_dte.txt

<b>Proceso 2:</b>
<br>Enviar el Archivo Plano al WebService
<br>
<br><b>En Windows:</b>
<br>c:\curl\curl.exe --form "input_consulta_dte=@c:\curl\datos_consulta_dte.txt" http://www.factronica.cl/factronica_webservice_servidor/consulta_dte.php
<br>
<br><b>En Linux:</b>
<br>curl --form "input_consulta_dte=@datos_consulta_dte.txt" http://www.factronica.cl/factronica_webservice_servidor/consulta_dte.php
<br>
<b>Proceso 3:</b>
<br>Recuperar la Respuesta del SII
<br>
<br><b>En Windows:</b>
<br>c:\curl\curl.exe -o c:\curl\ESTADOENVIODTE_133477322_TRACKID_1453694548.xml http://www.factronica.cl/factronica_webservice_servidor/buzon_consultadte/salida/ESTADOENVIODTE_133477322_TRACKID_1453694548.xml
<br>
<br><b>En Linux:</b>
<br>curl -o respuesta.xml http://www.factronica.cl/factronica_webservice_servidor/buzon_consultadte/salida/ESTADOENVIODTE_133477322_TRACKID_1453694548.xml
