<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" encoding="UTF-8" indent="yes"/>

    <xsl:template match="/">
        <!-- Vehículos -->
        <div class="cards-container">
            <xsl:for-each select="web/vehiculos/vehiculo">
                <div class="card">
                    <img src="{imagen}" alt="{marca} {modelo}" class="card-image" width="200" height="200" />
                    <h2><xsl:value-of select="marca"/> <xsl:value-of select="modelo"/></h2>
                    <p><strong>Tipo:</strong> <xsl:value-of select="@tipo"/></p>
                    <p><strong>Autonomía:</strong> <xsl:value-of select="autonomia"/> km</p>
                    <p><strong>Potencia:</strong> <xsl:value-of select="potencia"/></p>
                    <p><strong>Precio:</strong> <xsl:value-of select="precio"/> €</p>
                    <button class="buy-button">VER DETALLES</button>
                </div>
            </xsl:for-each>
        </div>

        <!-- Seguros -->
        <h2>Seguros</h2>
        <div class="cards-container">
            <xsl:for-each select="web/seguros/seguro">
                <div class="card">
                    <h2>Seguro ID: <xsl:value-of select="@id"/></h2>
                    <p><strong>Empresa:</strong> <xsl:value-of select="empresa"/></p>
                    <p><strong>Cobertura:</strong> <xsl:value-of select="cobertura"/></p>
                    <p><strong>Precio Anual:</strong> <xsl:value-of select="precio_anual"/> €</p>
                    <p><strong>Vehículo:</strong> <xsl:value-of select="vehiculo"/></p>
                </div>
            </xsl:for-each>
        </div>

        <!-- Usuarios -->
        <h2>Usuarios</h2>
        <div class="cards-container">
            <xsl:for-each select="web/usuarios/usuario">
                <div class="card">
                    <h2><xsl:value-of select="nombre"/></h2>
                    <p><strong>DNI:</strong> <xsl:value-of select="@dni"/></p>
                    <p><strong>Email:</strong> <xsl:value-of select="email"/></p>
                    <p><strong>Teléfono:</strong> <xsl:value-of select="telefono"/></p>
                    <h3>Vehículos:</h3>
                    <ul>
                        <xsl:for-each select="vehiculos/vehiculo">
                            <li>
                                ID: <xsl:value-of select="@id"/> -
                                Matrícula: <xsl:value-of select="@matricula"/> -
                                Seguro: <xsl:value-of select="@seguro"/>
                            </li>
                        </xsl:for-each>
                    </ul>
                </div>
            </xsl:for-each>
        </div>
    </xsl:template>
</xsl:stylesheet>