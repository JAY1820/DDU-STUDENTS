<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/Students">
		<html>
			<head>
				<style>
					table {
					border-collapse: collapse;
					width: 100%;
					}
					th, td {
					border: 1px solid black;
					padding: 8px;
					text-align: left;
					}
					th {
					background-color: #f2f2f2;
					}
				</style>
			</head>
			<body>
				<h1>Student Data Sorted by F_Name</h1>
				<table>
					<tr>
						<th>S_id</th>
						<th>F_Name</th>
						<th>M_Name</th>
						<th>S_Name</th>
						<th>Address</th>
						<th>City</th>
						<th>Gender</th>
						<th>Branch</th>
						<th>Semester</th>
						<th>Contact</th>
						<th>Email_id</th>
					</tr>
					<xsl:apply-templates select="Student">
						<xsl:sort select="F_Name"/>
					</xsl:apply-templates>
				</table>
			</body>
		</html>
	</xsl:template>

	<xsl:template match="Student">
		<tr>
			<td>
				<xsl:value-of select="S_id"/>
			</td>
			<td>
				<xsl:value-of select="F_Name"/>
			</td>
			<td>
				<xsl:value-of select="M_Name"/>
			</td>
			<td>
				<xsl:value-of select="S_Name"/>
			</td>
			<td>
				<xsl:value-of select="Address"/>
			</td>
			<td>
				<xsl:value-of select="City"/>
			</td>
			<td>
				<xsl:value-of select="Gender"/>
			</td>
			<td>
				<xsl:value-of select="Branch"/>
			</td>
			<td>
				<xsl:value-of select="Semester"/>
			</td>
			<td>
				<xsl:value-of select="Contact"/>
			</td>
			<td>
				<xsl:value-of select="Email_id"/>
			</td>
		</tr>
	</xsl:template>
</xsl:stylesheet>
