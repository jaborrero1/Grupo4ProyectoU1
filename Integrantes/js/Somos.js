class Somos extends HTMLElement {
    constructor() {
      super();
    }
    connectedCallback(){
    this.innerHTML = `
    <table width="100%" height="484" border="0" cellpadding="5" cellspacing="10">
     <tbody>
    <tr align="center" valign="top">
      <th height="130" colspan="3" bgcolor="#FAF8ED" scope="col">
      <img src="images/logoeste.png" width="498" height="114" alt=""/></th>
    </tr>
    <tr align="center">
      <td height="42" colspan="3" align="center" bgcolor="#FAF8ED"><strong>
      <a  style="cursor:default;text-decoration:none"href="index.html">VOLVER AL INICIO</a></strong></td>
    </tr>
    <tr align="left" valign="top" bgcolor="#FFFFFF">
      <td height="194" colspan="2"><h3><strong>QUIENES SOMOS</strong></h3>
      <p>Somos una organización hogar de animales, desde 2005, en la ayuda a gatos </p>
      <p>y perros maltratados o abandonados; Una organización ecuatoriana totalmente </p>
      <p>independiente que no recibe subvenciones de organismos oficiales, ni partidos </p>
      <p>políticos, ni empresas privadas. Las donaciones y cuotas de nuestros socios </p>
      <p>permiten que nuestra labor sea sostenible y preservan nuestra libertad de acción.</p>
      <p>Contamos con un centro veterinario en Santo Domingo abierto al público, que </p>
      <p>destina sus ingresos integramente al cuidado de los animales abandonados.</p>
      <p>Nuestro campo se divide en &quot;directa&quot; la cual engloba los rescates de animales </p>
      <p>victimas de mlatrato y abandobo, y &quot;divulgativa&quot; la cual promueva campañas </p>
      <p>en diferentes medios de comunicación con el claro objeto de educar el respeto </p>
      <p>hacia los animales y sus derechos. Entrando en &quot;Adoption&quot; puedes conocer </p>
      <p>nuestras acciones. Si después de hacerlo piensas que merece la pena apoyar </p>
      <p>nuestra labor, hazte socio de El Refugio y cada vez más animales podrán agradecértelo.</p></td>
      <td width="38%" height="194" align="center" valign="middle" bgcolor="#FAF8ED"><img src="images/somos.png" width="383" height="339" alt=""/></td>
    </tr>
    <tr align="center" valign="top" bgcolor="#FFFFFF">
      <td width="28%" height="28" align="center" valign="middle" bgcolor="#FAF8ED">
      <p><strong>CONTACTANOS: </strong></p></td>
      <td width="34%" align="center" valign="middle" bgcolor="#FAF8ED">
      <a href="https://www.facebook.com/Adoption-110187131307752" target="_blanck">
      <img src="Iconos/facebook.png" width="20" height="20" alt=""/></a></td>
      <td align="center" valign="middle" bgcolor="#FAF8ED">
      <a href="https://www.instagram.com/adoption_130501/" target="_blank">
      <img src="Iconos/instagram.png" alt="" width="20" height="20"/></a></td>
    </tr>
    <tr>
      <td height="28" colspan="3" align="center" bgcolor="#FAF8ED">
      Jordan-Wilmer-Hector-Erika &copy; 2022 Todos los derechos reservados</td>
    </tr>
    </tbody>
    </table>

    <style>
    body,td,th {
    font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000000;
    }
    body {
    background-image: url(images/fondo.jpg);
	  background-repeat: no-repeat;
	  background-size: 100% 100%;
	  background-attachment: fixed;
    }
    </style>
    `;
  }
}
window.customElements.define('quienes-somos', Somos);