<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" encoding="UTF-8" indent="yes"/>

    <xsl:template match="/">
        <html>
            <body>
                <h2>Coches Eléctricos</h2>
                <div class="cards-container">
                    <xsl:apply-templates select="web/vehiculos/vehiculo[@tipo='Moto'][last()]"/>
                    <xsl:apply-templates select="web/vehiculos/vehiculo[@tipo='Patinete'][last()]"/>
                    <xsl:apply-templates select="web/vehiculos/vehiculo[@tipo='Coche'][last()]"/>
                </div>
            </body>
        </html>
    </xsl:template>

    <xsl:template match="vehiculo">
        <div class="card">
            <img src="{imagen}" alt="{marca} {modelo}" class="card-image" />
            <h2><xsl:value-of select="marca"/> <xsl:value-of select="modelo"/></h2>
            <p><strong>Autonomía:</strong> <xsl:value-of select="autonomia"/> km</p>
            <p><strong>Potencia:</strong> <xsl:value-of select="potencia"/> CV</p>
            <p><strong>Precio:</strong> <xsl:value-of select="precio"/> €</p>
            <button class="buy-button">Comprar</button>
        </div>
    </xsl:template>
</xsl:stylesheet>
