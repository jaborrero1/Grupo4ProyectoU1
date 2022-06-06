class Todo extends HTMLElement {
    constructor() {
        super();
    }
    connectedCallback() {


        this.innerHTML = `<style type="text/css">
        body,td,th {
            font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000000;
        }
        body {
            background-image: url(fondo.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-attachment: fixed;
        }
        </style>
        <table width="100%" height="484" border="1" cellpadding="5" cellspacing="10">
  <tbody>
    <tr align="center" valign="top">
      <th height="130" colspan="3" bgcolor="#FAF8ED" scope="col"><img src="./images/logoeste.png" width="498" height="114" alt=""/></th>
    </tr>
    <tr align="center">
      <td height="42" colspan="3" align="center" bgcolor="#FAF8ED"><strong><a  style="cursor:default;text-decoration:none"href="index.html">VOLVER AL INICIO</a></strong></td>
    </tr>
    <tr align="left" valign="top" bgcolor="#FFFFFF">
      <td height="194" colspan="3"><h3><strong>CONDICIONES DE ADOPCIÓN</strong></h3>
      <p>Cualquier persona que adopte un perro en &quot;Adoption&quot; tendrá su vacuna contra la rabia, una revisión veterinaria general y una desparasitación al año, <strong>GRATIS DURANTE TODA SU VIDA</strong>. Las personas que adopten un gato en &quot;Adoption&quot; tendrán su vacuna trivalente, una revisión veterinaria general y una desparasitación al año, <strong>TAMBIÉN GRATIS DURANTE TODA SU VIDA</strong>. Los animales adoptados recibirán la atención en el Centro Veterinario &quot;Adoption&quot;.</p>
      <p>Esperamos con mucha ilusión que esta medida contribuya a que muchos de nuestros pequeños sean adoptados, porque de esta forma podremos rescatar a otros tantos pequeños abandonados más, y más, y más, y más…</p>
      <p>Cuando adoptes a tu nuevo compañero te lo entregaremos identificado, desparasitado, vacunado, con análisis de leishmania (perros), tes deleucemia e inmunodeficiencia (gatos) y esterilizado. En el momento de la adopción, deberás abonar 100 dolares en concepto de donativo, para cubrir parte de los tratamientos veterinarios. Es imprescindible que la persona que vaya a ser titular del animal sea quien realice la adopción, para lo cual deberá presentar la cédulay firmar el contrato de adopción.</p>
      <p>Si quieres adoptar a alguno de nuestros perros o gatos, llámanos para poder asesorarte adecuadamente en este teléfono: 91 730 36 80 o escríbenos un correo a: ADOPTION@AMANTELOSPERROSYGATOS.COM.</p>
      <p>La protectora &quot;Adoption&quot; se encuentra en Ecuador (Santo Domingo) y todas las adopciones que realizamos son presenciales (no enviamos perros o gatos a ninguna parte).</p></td>
    </tr>
    <tr align="center" valign="top" bgcolor="#FFFFFF">
      <td height="28" align="center" valign="middle" bgcolor="#FAF8ED"><p><strong>CONTACTANOS: </strong></p></td>
      <td align="center" valign="middle" bgcolor="#FAF8ED"><a href="https://www.facebook.com/Adoption-110187131307752" target="_blank">       <imagenes-redes facebook></imagenes-redes></a></td>
      <td align="center" valign="middle" bgcolor="#FAF8ED"><a href="https://www.instagram.com/adoption_130501/" target="_blank">       <imagenes-redes ></imagenes-redes></a></td>
    </tr>
    <tr>
      <td height="28" colspan="3" align="center" bgcolor="#FAF8ED">Erika-Hector-Jordan-Wilmer &copy; 2021 Todos los derechos reservados</td>
    </tr>
  </tbody>
</table>
        `;
    }
}

//aqui se llama a la clase del componente 
window.customElements.define('todo-condiciones', Todo);

class Otro extends HTMLElement {
    connectedCallback() {
    const facebook = this.getAttribute('facebook');
    const qs=facebook!==null ? './images/facebook.png' : './images/instagram.png';
    this.innerHTML = `<img src="${qs}" width="60" height="60" >`;
    }
    
}
window.customElements.define('imagenes-redes', Otro);
