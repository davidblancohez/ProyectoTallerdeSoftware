<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ include file="/WEB-INF/jsp/includes.jsp" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Manejador de Guias</title>
</head>
<body>
<h1>Data Guias</h1>
<form:form action="guias.do" method="POST" commandName="guias">
	<table>
		<tr>
			<td>ID Guia</td>
			<td><form:input path="Id_guias" /></td>
		</tr>
		<tr>
			<td>Nombre de Remitente</td>
			<td><form:input path="nombre_despacho" /></td>
		</tr>
		<tr>
			<td>Direccion del Remitente</td>
			<td><form:input path="direccion_despacho" /></td>
		</tr>
		<tr>
			<td>Ciudad de Remision</td>
			<td><form:input path="ciudad_despacho" /></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="action" value="Add" />
				<input type="submit" name="action" value="Edit" />
				<input type="submit" name="action" value="Delete" />
				<input type="submit" name="action" value="Search" />
			</td>
		</tr>
	</table>
</form:form>
<br>
<table border="1">
	<th>ID</th>
	<th>First name</th>
	<th>Last name</th>
	<th>Year level</th>
	<c:forEach items="${guiatList}" var="guias">
		<tr>
			<td>${guiatList.Id_guias}</td>
			<td>${guiatList.nombre_despacho}</td>
			<td>${guiatList.direccion_despacho}</td>
			<td>${guiatList.ciudad_despacho}</td>
		</tr>
	</c:forEach>
</table>

</body>
</html>