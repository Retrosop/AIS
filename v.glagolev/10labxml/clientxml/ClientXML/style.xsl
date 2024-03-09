<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output method="html" version="4.0" encoding="UTF-8" indent="yes"/>
  <xsl:template match="/">
    <html>
      <head>
        <style>
          .red {
            color: red;
          }
        </style>
      </head>
      <body>
        <xsl:apply-templates select="//person[age > 20]"/>
      </body>
    </html>
  </xsl:template>
  <xsl:template match="person">
    <xsl:if test="age > 20">
      <p class="red">
        <xsl:value-of select="@name"/> works at <xsl:value-of select="company"/> and is <xsl:value-of select="age"/> years old.
      </p>
    </xsl:if>
  </xsl:template>
</xsl:stylesheet>