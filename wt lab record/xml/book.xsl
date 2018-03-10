<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
    <html> 
      <head></head>
     <body bgcolor="white">
     <h2 bgcolor="red" >Car Booking</h2>
     <table border="1">
     <tr bgcolor="grey">
      <th>name</th>
      <th>model</th>
      <th>seats</th>
      <th>bags</th>
      <th>pickupdate</th>
      <th>returndate</th>
      <th>price</th>
    </tr>
    <xsl:for-each select="Booking/car">
    <tr>
      <td><xsl:value-of select="name"/></td>
      <td><xsl:value-of select="model"/></td>
      <td><xsl:value-of select="seats"/></td>
      <td><xsl:value-of select="bags"/></td>
      <td><xsl:value-of select="pickupdate"/></td>
      <td><xsl:value-of select="returndate"/></td>
      <td><xsl:value-of select="price"/></td>
    </tr>
    </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
